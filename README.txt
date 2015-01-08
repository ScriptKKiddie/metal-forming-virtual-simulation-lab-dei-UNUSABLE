## Preamble 

This package is developed as an independent module for documentation of experiments of the Virtual lab project.

## Installation of the documentation module ##

        

	@@@ Hardware Requirements @@@
		Disk space: 3GB free (min).
		Memory: 256MB (min), 1GB (recommended).


	@@@ Software Requirements @@@@
		Web server - Apache2
		PHP5
		MySQL5


	#### Installing Apache, PHP and MySQL  (if required) ####


		This document will explain how to install Apache, PHP and Mysql in Ubuntu 10.04. The procedure on other Linux/MacOS/Win servers would be reasonably similar. 

	$$    ############ XAMPP installation procedure for LINUX ############
	
		--> Go to http://sourceforge.net/projects/xampp/files/XAMPP%20Linux/

		--> Under the list of Browse Files for XAMPP click on 1.7.1 and under it click on xampp-linux-1.7.1.tar.gz to download the package.

		--> Once the package has been downloaded go to a Linux shell and login as the system administrator root: 
		    $ su

		--> Extract the downloaded archive file to /opt:
		    $ tar xvfz xampp-linux-1.7.1.tar.gz -C /opt

		Warning 1: Please use only this command to install XAMPP. DON'T use any Microsoft Windows tools to extract the archive, it won't work.
		Warning 2: already installed XAMPP versions get overwritten by this command.

		--> XAMPP is now installed below the /opt/lampp directory.

		--> To start XAMPP simply call this command:
		    $ /opt/lampp/lampp start

		--> You should now see something like this on your screen:

			Starting XAMPP 1.7.3a...
			LAMPP: Starting Apache...
			LAMPP: Starting MySQL...
			LAMPP started.
			Ready. Apache and MySQL are running

		--> To test go to the browser and type http://localhost and you should see the XAMPP page.

	$$ Extract and copy the mfvlab folder to the www or HTDOCS folder of your web server installation. (The precise
	path would depend on your web server) and set the required permissions.

	$$ Run the Virtuallab.sql file to setup the database on Mysql

	$$ Enter the configuration details in the config.inc.php file.

	$$ To open the home page type http://localhost/mfvlab/home.php on your web browser
	
	$$    ############ Run the Website on WINDOWS OS with XAMPP or WAMP ############
	
	--> Download XAMPP and install on WIndows.
	
	--> Start XAMPP control panel from start menu or Desktop icon.
	--> Start Apache web server and mysql database.
	--> Extract and copy the mfvlab folder to the 'htdocs' (for XAMPP) folder of your web server installation.
	--> Click on mysql Admin in XAMPP control panel or type http://localhost/phpmyadmin in your browser url.
	--> Copy Virtuallab.sql file and paste into sql in Localhost and use Go button which is at the bottom-right side.
	
	$$	Now Database Virtuallab is created.
	$$  To open the home page of the website type http://localhost/mfvlab/home.php