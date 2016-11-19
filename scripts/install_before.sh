#!/bin/bash

cd /home/ec2-user/blogbackup/

mkdir backup_$(date '+%d-%b-%Y_%H%M')

BACKUPDIR=$(ls -td -- */ | head -n 1 | cut -d'/' -f1)

sudo cp -r /var/www/html/blog/content /home/ec2-user/blogbackup/$BACKUPDIR/
sudo cp -r /var/www/html/blog/config /home/ec2-user/blogbackup/$BACKUPDIR/

cd -