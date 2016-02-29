@ECHO OFF
SET BIN_TARGET=%~dp0/../vendor/bin/psy/psysh/bin/psysh
php "%BIN_TARGET%" %*
