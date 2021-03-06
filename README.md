# Eta-Ki

[![Build Status](https://travis-ci.com/usydtechlab/etaki3d.svg?branch=master)](https://travis-ci.com/usydtechlab/etaki3d)

A for-profit DAMNS for all multimedia and multi-dimensional content.

Quick access to [troubleshooting](#Troubleshooting)

## About
Eta-ki is a new initiative by  the TechLab that aims to manage all WebVR content in one centralised location.
It ranges from viewing 360 degree photographs to dissecting 3d models into its components.

## Features
- Stores multimedia content such as 360 Images & Video, 3D models and Audio.
- Displays interactive VR experiences with the content using 'themes'.
- Uses the [A-Frame](https://github.com/aframevr/aframe) framework to display VR and 3D content.
- Cross Browser and Device support.
- VR headset support, including Oculus Rift & Go, Google Cardboard & Daydream, 

## Requirements
- PHP >= 5.5.9
- OpenSSL PHP Extension
- PDO PHP Extension
- Fileinfo PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- GD Library or ImageMagick PHP Extension
- MySQL or MariaDB or PostgreSQL database

## How to install (Localhost on your computer) (windows Xampp)
1. Download and Install [XAMPP](https://www.apachefriends.org/download.html).
2. Clone this github repo into your xampp/htdocs directory.
3. Open XAMPP's control panel and start Apache and MySQL.
4. Click on Admin for MySQL and create a new database, name it whatever you want but remember it!
5. Go to privileges and add a user account, give it any user name, select localhost and create a password. Ensure SSL is enabled.
6. Now go into your preferred web browser and type in [localhost/etaki3d](localhost/etaki3d), and an admin panel should open up.
- Contents of htdocs in the repository should form the landing page, ensure that the rest of the repository is extracted to the appropraite sub-directory,
in this case (/etaki3d).
7. Enter in the name of your created database name along with your username and password.
8. Add yourself as a user, with your own email address, name and password.


## Setup without XAMPP using PHP Server [MAC/Linux]
1. Once this github repo is cloned, go to config/database.php
2. Change this line 'default' => 'pgsql', [Available options pgsql, sqlite, sqlsrv, mysql]
3. Create a database 
4. Fire up the terminal in the root directory and run the following

    php -S localhost:port [e.g. php -S localhost:9000]
5. Go to localhost:9000/install-db if running for the first time
6. Use the database and auth details used in the previous steps
7. Everything should be installed within a minute


#### Congratulations, you have successfully installed Eta-Ki!

## If you get an error 404

If you encounter a 404 Not Found error, please make sure you enabled the Apache2 mod_rewrite module:

`sudo a2enmod rewrite`

And then restart Apache2:

`sudo service apache2 restart`

Configure mod_rewrite by editing one of the following files:

`sudo nano /etc/apache2/sites-enabled/000-default.conf`

or

`sudo nano /var/www/html/.htaccess`

and add the following lines:
```
<Directory /var/www/html>
AllowOverride All
Order allow,deny
allow from all
</Directory>
```
## Recommended configuration
- Go to XAMPP Control Panel and click on config for Apache -> php.ini.
	- Find the memory limit and change it to 512M.
	- Add a max post file size and max upload file size and make them both each 1000M.


## Getting started
Let's create our first scene that will display some moving, 3d text.
1. Go to 'Themes' and install the interactive-theme.
2. Add a new space and call it whatever you want.
3. Add as many messages as you want, and press preview!
4. You should now see your text appearing and moving away from you, in this mode you can put on any VR headset and experience this.

### Themes
- Themes are installable apps that you can use to visualise, interact and display your VR / 3D content.
- We have provided you with a few to start off with, and we will continue to create themes so make sure to keep this github repo up to date!
-  

### Develop and deploy using Docker

In this project, We have defined four docker containers and we use `docker-compose` to run multi-container Docker applications:

- php
- apache
- postgres
- phppgadmin

> A `.env` file has been created to maintain the global configuration. Please modify it accordingly when running the system in `local` or `production`.
> The individule Dockerfile for `php` and `apache` are in `/container` folder.
> Please be noted that the database HOST should use `db` (according to the service name of the DB in docker-compose config file) instead of `localhost`.

### Up and run

Inside `etaki3d/`, execute:

```bash
docker-compose up --build
```

### Stop

Inside `etaki3d/`, execute:

```bash
docker-compose down
```

### Prune created docker resources

Below execution would prune the created docker containers, images, networks

```bash
docker system prune
docker system prune -a
```

If you are sure you want prune the docker volume (CAUTION: it contains the DB data), do this:

```bash
docker volume ls
docker volume remove <volume ID>
```

### List containers

1.Running containers
Use `docker container ls` or `docker ps`

2.Not running containers

Use `docker container ls -a` or `docker ps -a`


### Sample output of `docker-compose up --build`

```bash
docker-compose up --build

Creating network "etaki3d_frontend" with the default driver
Creating network "etaki3d_backend" with the default driver
Creating volume "etaki3d_data" with default driver
Building php
...
Build complete.

Don't forget to run 'make test'.

Installing shared extensions:     /usr/local/lib/php/extensions/no-debug-non-zts-20180731/
Installing header files:          /usr/local/include/php/
Installing PDO headers:           /usr/local/include/php/ext/pdo/
...

Pulling db (postgres:10.7)...
...
Status: Downloaded newer image for postgres:10.7
...

Building apache
...
/usr/local/apache2/conf
...

Pulling phppgadmin (dockage/phppgadmin:latest)...
...

Creating postgresql ... done
Creating php        ... done
Creating phppgadmin ... done
Creating apache     ... done
Attaching to php, postgresql, phppgadmin, apache
```

## Troubleshooting

### HTTP 500 error

https://stackoverflow.com/questions/17693391/500-internal-server-error-for-php-file-not-for-html

Working fix in Amazon EC2
```bash
sudo chmod -R 777 etaki3d/
```

An Enterprise tier port of the Immersion project.

Eta-ki is under the [MIT License](LICENSE)
<p align="center">
	Made with :blue_heart: at the TechLab.
</p>
