<?php

/*
Plugin Name: Auto Backup
Plugin URI: http://github.com/arnaugarcia/wordpress-backup-plugin
Description: This plugin automatically backups the current database and commits the code to the desired repo.
Version: 1.0
Author: Arnau Garcia
Author URI: https://arnaugarcia.com
License: MIT
*/

require_once 'admin/view/view.php';
require_once 'admin/admin.php';
function auto_backup_add_plugin_management_page_option(): void
{
    add_management_page(
        'Site Backup',  // Título de la página
        'Site Backup',  // Título del menú
        'manage_options',       // Permisos necesarios para acceder a la página
        'site-backup',     // Slug de la página
        'auto_backup_plugin_homepage' // Función que muestra el contenido de la página
    );
}
add_action('admin_menu', 'auto_backup_add_plugin_management_page_option');