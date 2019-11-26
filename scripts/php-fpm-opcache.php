#!/bin/bash
#
# Usage: ./php-fpm-opcache.php [socket]
#

FPM_SOCKET="${1:-/var/run/php-fpm/listen.sock}"

#######################################################################
PHP_SEEK=27

FPM_SCRIPT_PATH="$( cd "$(dirname "$0")" ; pwd -P )"
FPM_SCRIPT_NAME="$(basename "$0")"

FPM_OPCACHE_STATUS=$(\
    REQUEST_METHOD=GET \
    SCRIPT_FILENAME="${FPM_SCRIPT_PATH}/${FPM_SCRIPT_NAME}" \
    SCRIPT_NAME="${FPM_SCRIPT_NAME}" \
    cgi-fcgi -bind -connect ${FPM_SOCKET}\
    | tail -n +${PHP_SEEK})

echo $FPM_OPCACHE_STATUS

exit 0

<?php
  $status = opcache_get_status(false);
  echo json_encode($status);
  echo "\n";
?>
