@ECHO OFF
SET BIN_TARGET=%~dp0/../vendor/bin/nikic/php-parser/bin/php-parse
php "%BIN_TARGET%" %*
