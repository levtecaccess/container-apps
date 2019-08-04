<?php return array (
  'components' => 
  array (
    'db' => 
    array (
      'class' => 'yii\\db\\Connection',
      'dsn' => 'mysql:host=humhubdb;dbname=humhub',
      'username' => 'humhub',
      'password' => 'you will never guess',
    ),
    'user' => 
    array (
    ),
    'mailer' => 
    array (
      'transport' => 
      array (
      ),
      'useFileTransport' => true,
    ),
  ),
  'params' => 
  array (
    'installer' => 
    array (
      'db' => 
      array (
        'installer_hostname' => 'humhubdb',
        'installer_database' => 'humhub',
      ),
    ),
    'config_created_at' => 1564929879,
    'horImageScrollOnMobile' => NULL,
    'databaseInstalled' => true,
    'installed' => true,
  ),
  'name' => NULL,
  'language' => 'en-US',
); ?>