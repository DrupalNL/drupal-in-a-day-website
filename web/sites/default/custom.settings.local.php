<?php
/**
 * @file
 * Environment-specific configuration file.
 */

/**
 * Database settings.
 */
$databases['default']['default'] = [
  'database'  => 'drupal-in-a-day',
  'username'  => '',
  'password'  => '',
  'prefix'    => '',
  'host'      => 'mysql',
  'port'      => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver'    => 'mysql',
];

/**
 * Configuration overrides.
 */
$config['config_split.config_split.development']['status'] = FALSE;
$config['config_split.config_split.excluded']['status'] = TRUE;
