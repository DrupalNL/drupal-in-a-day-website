<?php
/**
 * @file
 * Environment-specific configuration file.
 */

/**
* Database settings:
*/
$databases['default']['default'] = [
  'database'  => '',
  'username'  => '',
  'password'  => '',
  'prefix'    => '',
  'host'      => 'localhost',
  'port'      => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver'    => 'mysql',
];
