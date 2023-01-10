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

require_once 'dashboard/home/home.php';

require_once 'service/git/git.service.php';
function auto_backup_add_plugin_management_page_option(): void
{
    add_management_page(
        'Site Backup',  // Page Title
        'Site Backup',  // Menu Title
        'manage_options',       // Necessary permission to see the page
        'site-backup',     // Slug of the page
        'auto_backup_plugin_homepage' // function that calls shows the page
    );

    $properties = RepositoryProperties::builder()
        ->setAuthor('Arnau Garcia')
        ->setCommitMessage('Automatic backup')
        ->setPath('/Users/arnau/Projects/wordpress-backup-plugin')
        ->build();

    $gitService = new GitService($properties);

    print_r($gitService);

    //$gitService->commit();
}

add_action('admin_menu', 'auto_backup_add_plugin_management_page_option');