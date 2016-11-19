#!/bin/bash

cd /home/ec2-user/blogbackup/

BACKUPDIR=$(ls -td -- */ | head -n 1 | cut -d'/' -f1)

sudo cp -r "/home/ec2-user/blogbackup/$BACKUPDIR/content" /var/www/html/blog/
sudo cp -r "/home/ec2-user/blogbackup/$BACKUPDIR/config" /var/www/html/blog/

cd -
