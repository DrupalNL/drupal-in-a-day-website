<?php

/**
 * @file
 * Drupal site-specific configuration file.
 */

/**
 * Database settings:
 */
$databases['default']['default'] = array (
  'database' => '',
  'username' => '',
  'password' => '',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);

/**
 * Location of the site configuration files.
 */
$config_directories = array(
  'sync' => './../config/sync',
);

/**
 * The active installation profile.
 */
$settings['install_profile'] = 'minimal';

/**
 * Salt for one-time login links, cancel links, form tokens, etc.
 */
$settings['hash_salt'] = 'vCPfn97C_hbrFOaJN_89xl4_NJy_TqXP1lcoF4HTA0JVAR0qSnQ2vZky2J-7KSMY1SWiGgNmrw';

/**
 * Deployment identifier.
 */
# $settings['deployment_identifier'] = \Drupal::VERSION;

/**
 * Access control for update.php script.
 */
$settings['update_free_access'] = FALSE;

/**
 * Page caching:
 */
# $settings['omit_vary_cookie'] = TRUE;


/**
 * Cache TTL for client error (4xx) responses.
 */
# $settings['cache_ttl_4xx'] = 3600;

/**
 * Authorized file system operations:
 */
$settings['allow_authorize_operations'] = FALSE;

/**
 * Default mode for directories and files written by Drupal.
 */
# $settings['file_chmod_directory'] = 0775;
# $settings['file_chmod_file'] = 0664;

/**
 * Public file base URL:
 */
# $settings['file_public_base_url'] = 'http://downloads.example.com/files';

/**
 * Public file path:
 */
$settings['file_public_path'] = 'sites/default/files';

/**
 * Private file path:
 */
$settings['file_private_path'] = 'sites/default/files/private';

/**
 * Session write interval:
 */
# $settings['session_write_interval'] = 180;

/**
 * String overrides:
 */
# $settings['locale_custom_strings_en'][''] = array(
#   'forum'      => 'Discussion board',
#   '@count min' => '@count minutes',
# );

/**
 * PHP settings:
 */

/**
 * Configuration overrides.
 */
$config['samlauth.authentication']['login_redirect_url'] = 'https://t-scalda-portalen-cms.finalist.nl/sso/done';
$config['samlauth.authentication']['login_redirect_url'] = 'https://t-scalda-portalen.finalist.nl/';

/**
 * Fast 404 pages:
 */
# $config['system.performance']['fast_404']['exclude_paths'] = '/\/(?:styles)|(?:system\/files)\//';
# $config['system.performance']['fast_404']['paths'] = '/\.(?:txt|png|gif|jpe?g|css|js|ico|swf|flv|cgi|bat|pl|dll|exe|asp)$/i';
# $config['system.performance']['fast_404']['html'] = '<!DOCTYPE html><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL "@path" was not found on this server.</p></body></html>';

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';

/**
 * The default list of directories that will be ignored by Drupal's file API.
 */
$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

/**
 * Load local development override configuration, if available.
 */
if (file_exists(__DIR__ . '/settings.local.php')) {
  include __DIR__ . '/settings.local.php';
}
