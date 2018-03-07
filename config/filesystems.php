<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Default Filesystem Disk
  |--------------------------------------------------------------------------
  |
  | Here you may specify the default filesystem disk that should be used
  | by the framework. The "local" disk, as well as a variety of cloud
  | based disks are available to your application. Just store away!
  |
  */

  // nous modifions le disk virtuel a defaut. Remplacé par public_perso
  'default' => env('FILESYSTEM_DRIVER', 'public_perso'),

  /*
  |--------------------------------------------------------------------------
  | Default Cloud Filesystem Disk
  |--------------------------------------------------------------------------
  |
  | Many applications store files both locally and in the cloud. For this
  | reason, you may specify a default "cloud" driver here. This driver
  | will be bound as the Cloud disk implementation in the container.
  |
  */

  'cloud' => env('FILESYSTEM_CLOUD', 's3'),

  /*
  |--------------------------------------------------------------------------
  | Filesystem Disks
  |--------------------------------------------------------------------------
  |
  | Here you may configure as many filesystem "disks" as you wish, and you
  | may even configure multiple disks of the same driver. Defaults have
  | been setup for each driver as an example of the required options.
  |
  | Supported Drivers: "local", "ftp", "s3", "rackspace"
  |
  */

  'disks' => [

    'local' => [
      'driver' => 'local',
      'root'   => storage_path('app'),
    ],

    'public'       => [
      'driver'     => 'local',
      'root'       => storage_path('app/public'),
      'url'        => env('APP_URL') . '/storage',
      'visibility' => 'public',
    ],

    // nous configurons un disk virtuel perso. Puis nous l'indiquerons en tant que disk par defaut (plus haut dans ce fichier)
    'public_perso' => [
      'driver'     => 'local', // notre dossier va pointer vers le driver local, cad dans un dossier de notre PC (nous pourrions utiliser un autre driver, exemple : S3 (amazon), Dropbox, FTP etc...
      'root'       => public_path('stockage'), // chemin de notre dossier. public_path est une fonction qui pointe vers le dossier public/. A laquelle j'ajoute le dossier stockage, ce qui donne /chemin_racine/public/stockage
      'url'        => env('APP_URL') . '/stockage', // URL pointant vers notre dossier stockage. asset() est la fonction predefinie qui donne http://votre_chemin/public/
      'visibility' => 'public',
    ],

    's3' => [
      'driver' => 's3',
      'key'    => env('AWS_ACCESS_KEY_ID'),
      'secret' => env('AWS_SECRET_ACCESS_KEY'),
      'region' => env('AWS_DEFAULT_REGION'),
      'bucket' => env('AWS_BUCKET'),
    ],

  ],

];
