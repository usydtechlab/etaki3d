# Deploy as a Docker app to Amazon ECS using AWS Fargate

Note: this version is only for mac/Linux.

Ensure [AWS CLI](https://aws.amazon.com/cli/) and [Docker](https://www.docker.com/) are installed.

## AWS CLI setup before starting the work

1. Install AWS CLI using `pip`:

```bash
pip install awscli
```

2. In AWS console, create a new `IAM` user or use an existing `IAM` user for the AWS CLI configuration. 
Check the `IAM` user permissions if any error occurs.
For further information, please check [Managing Access Keys for Your AWS Account Root User](https://docs.aws.amazon.com/general/latest/gr/managing-aws-access-keys.html).

```bash
aws configure
```

## Deploy the built Docker image to AWS ECR

1. Retrieve the login command to use to authenticate your Docker client to your registry.
Use the AWS CLI:

```bash
aws ecr get-login --no-include-email --region ap-southeast-2
```

2. Note: If you receive an `"Unknown options: --no-include-email"` error when using the AWS CLI, ensure that you have the latest version installed. Learn more 
Build your Docker image using the following command. For information on building a Docker file from scratch see the instructions here . You can skip this step if your image is already built:
```bash
docker build -t etaki3d .
```

3. After the build completes, tag your image so you can push the image to this repository:
```bash
docker tag etaki3d:latest 4xxxxxxxxxxx.dkr.ecr.ap-southeast-2.amazonaws.com/etaki3d:latest
```

4. Run the following command to push this image to your newly created AWS repository:
```bash
docker push 4xxxxxxxxxxx.dkr.ecr.ap-southeast-2.amazonaws.com/etaki3d:latest
```


## Config the Amazon ECS CLI (Fargate)


1. Create a cluster configuration, which defines the AWS region to use, resource creation prefixes, and the cluster name to use with the Amazon ECS CLI:

```
ecs-cli configure --cluster tutorial --region ap-southeast-2 --default-launch-type FARGATE --config-name tutorial

INFO[0000] Saved ECS CLI cluster configuration tutorial.
```

2. Create a CLI profile using your access key and secret key:

```
ecs-cli configure profile --profile-name profile_ecs --access-key AKxxxxxxxxxxxx --secret-key xHhxxxxxxxxxxxx

INFO[0000] Saved ECS CLI profile configuration profile_ecs.
```


```
ecs-cli up

INFO[0001] Created cluster                               cluster=tutorial region=ap-southeast-2
INFO[0001] Waiting for your cluster resources to be created... 
INFO[0001] Cloudformation stack status                   stackStatus=CREATE_IN_PROGRESS
INFO[0061] Cloudformation stack status                   stackStatus=CREATE_IN_PROGRESS
VPC created: vpc-0540d0dbf65e87f70
Subnet created: subnet-025234189a41cf691
Subnet created: subnet-044299ce175c2f672
Cluster creation succeeded.
```


```
aws ec2 create-security-group --group-name "ecs-sg" --description "ECS security group" --vpc-id vpc-0540d0dbf65e87f70

{
    "GroupId": "sg-0039b8606c2bf6515"
}
```


Using AWS CLI, add a security group rule to allow inbound access on port 80:

```
aws ec2 authorize-security-group-ingress --group-id sg-0039b8606c2bf6515 --protocol tcp --port 80 --cidr 0.0.0.0/0
```

### Deploy the Compose File to a Cluster
```
ecs-cli compose --project-name tutorial service up --create-log-groups --cluster-config tutorial
```


### Clean Up

First, delete the service so that it stops the existing containers and does not try to run any more tasks.

```
ecs-cli compose --project-name tutorial service down --cluster-config tutorial

```

Now, take down the cluster, which cleans up the resources that you created earlier with ecs-cli up.

```
ecs-cli down --force --cluster-config tutorial
```



## Reference

- [Getting Started with Amazon ECS using Fargate](https://docs.aws.amazon.com/AmazonECS/latest/developerguide/ECS_GetStarted.html)
- [Task Networking with the awsvpc Network Mode](https://docs.aws.amazon.com/AmazonECS/latest/developerguide/task-networking.html)
- [Tutorial: Creating a Cluster with a Fargate Task Using the Amazon ECS CLI](https://docs.aws.amazon.com/AmazonECS/latest/developerguide/ECS_CLI.html)
