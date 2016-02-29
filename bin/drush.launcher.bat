@ECHO OFF
SET BIN_TARGET=%~dp0/../vendor/bin/drush/drush/drush.launcher
sh "%BIN_TARGET%" %*
