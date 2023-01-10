<?php

require_once 'view.php';
function find_database_options(): array
{
    $options = array();
    $options['db_name'] = DB_NAME;
    $options['db_user'] = DB_USER;
    $options['db_password'] = DB_PASSWORD;
    $options['db_host'] = DB_HOST;
    $options['db_charset'] = DB_CHARSET;
    $options['db_collate'] = DB_COLLATE;
    return $options;
}