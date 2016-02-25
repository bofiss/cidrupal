#!/bin/bash

# Build instance of Drupal using mysql.
# This assumes that you have a mysql user
# 'root' with no password.  Travis sets
# up one of these for you by default.
#
# remove html folder if exist.
rm -rf html

# drush quick install

drush -y core-quick-drupal --profile=standard -- makefile=drupal.make --db-url=mysql://root@localhost/cidrupal --core=drupal-7.x  devel behatrunner --browser=0 --strict=0 --no-server --root=html --account-name=admin --account-pass=admin
