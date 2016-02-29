@ECHO OFF
SET BIN_TARGET=%~dp0/../vendor/bin/drush/drush/drush.complete.sh
php "%BIN_TARGET%" %*
