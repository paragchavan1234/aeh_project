#!/bin/bash

#Clone the GitHub repository
git https://github.com/paragchavan1234/aeh_project.git
#Move to the cloned repository directory
cd aeh_project

# Copy the files to the web server directory
cp -r * /var/www/html/

# Change the ownership and permissions of the files
chown -R www-data:www-data /var/www/html/*
chmod -R 755 /var/www/html/*