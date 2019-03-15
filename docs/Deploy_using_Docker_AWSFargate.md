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

## Start to deploy the built Docker app

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

## PoC of AWS Fargate

- [Getting Started with Amazon ECS using Fargate](https://docs.aws.amazon.com/AmazonECS/latest/developerguide/ECS_GetStarted.html)
- [Task Networking with the awsvpc Network Mode](https://docs.aws.amazon.com/AmazonECS/latest/developerguide/task-networking.html)
