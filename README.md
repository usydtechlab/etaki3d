# Eta-Ki

[![Build Status](https://travis-ci.com/usydtechlab/etaki3d.svg?branch=master)](https://travis-ci.com/usydtechlab/etaki3d)

A for-profit DAMNS for all multimedia and multi-dimensional content.

## About
Eta-ki is a new initiative by  the TechLab that aims to manage all WebVR content in one centralised location.
It ranges from viewing 360 degree photographs to dissecting 3d models into its components.

## Features
- Stores multimedia content such as 360 Images & Video, 3D models and Audio.
- Displays interactive VR experiences with the content using 'themes'.
- Uses the [A-Frame](https://github.com/aframevr/aframe) framework to display VR and 3D content.
- Cross Browser and Device support.
- VR headset support, including Oculus Rift & Go, Google Cardboard & Daydream, 

## How to install (Localhost on your computer)
1. Download and Install [XAMPP](https://www.apachefriends.org/download.html).
2. Clone this github repo into your xampp/htdocs directory.
3. Open XAMPP's control panel and start Apache and MySQL.
4. Click on Admin for MySQL and create a new database, name it whatever you want but remember it!
5. Go to privileges and add a user account, give it any user name, select localhost and create a password. Ensure SSL is enabled.
6. Now go into your preferred web browser and type in [localhost/etaki3d](localhost/etaki3d), and an admin panel should open up.
7. Enter in the name of your created database name along with your username and password.
8. Add yourself as a user, with your own email address, name and password.
#### Congratulations, you have successfully installed Eta-Ki!

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

An Enterprise tier port of the Immersion project.

Eta-ki is under the [MIT License ](LICENSE)
<p align="center">
	Made with :blue_heart: at the TechLab.
</p>
