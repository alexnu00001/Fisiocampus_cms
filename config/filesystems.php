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

    'default' => env('FILESYSTEM_DRIVER', 'local'),

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
    | Supported Drivers: "local", "ftp", "sftp", "s3", "rackspace"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        'documentos' => [
            'driver' => 'local',
            'root' => storage_path('app/public/documento/actividad'),
            'url' => env('APP_URL').'/storage/documento/actividad',
            'visibility' => 'public',
        ],

        'cursos_banner' => [
            'driver' => 'local',
            'root' => storage_path('app/public/cursos/banner'),
            'url' => env('APP_URL').'/storage/cursos/banner',
            'visibility' => 'public',
        ],

        'cursos_principal' => [
            'driver' => 'local',
            'root' => storage_path('app/public/cursos/principal'),
            'url' => env('APP_URL').'/storage/cursos/principal',
            'visibility' => 'public',
        ],
        'cursos_secundaria' => [
            'driver' => 'local',
            'root' => storage_path('app/public/cursos/secundaria'),
            'url' => env('APP_URL').'/storage/cursos/secundaria',
            'visibility' => 'public',
        ],

        'cursos_icono' => [
            'driver' => 'local',
            'root' => storage_path('app/public/cursos/icono'),
            'url' => env('APP_URL').'/storage/cursos/icono',
            'visibility' => 'public',
        ],

        'secuenciasAprendisajes_banner' => [
            'driver' => 'local',
            'root' => storage_path('app/public/secuenciasAprendisajes/banner'),
            'url' => env('APP_URL').'/storage/secuenciaAprendisaje/banner',
            'visibility' => 'public',
        ],

        'secuenciasAprendisajes_principal' => [
            'driver' => 'local',
            'root' => storage_path('app/public/secuenciasAprendisajes/principal'),
            'url' => env('APP_URL').'/storage/secuenciasAprendisajes/principal',
            'visibility' => 'public',
        ],
        'secuenciasAprendisajes_secundaria' => [
            'driver' => 'local',
            'root' => storage_path('app/public/secuenciasAprendisajes/secundaria'),
            'url' => env('APP_URL').'/storage/secuenciasAprendisajes/secundaria',
            'visibility' => 'public',
        ],

        'secuenciasAprendisajes_icono' => [
            'driver' => 'local',
            'root' => storage_path('app/public/secuenciasAprendisajes/icono'),
            'url' => env('APP_URL').'/storage/secuenciasAprendisajes/icono',
            'visibility' => 'public',
        ],


        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
        ],
        'ofertas_principal' => [
          'driver' => 'local',
          'root' => storage_path('app/public/ofertas/principal'),
          'url' => env('APP_URL').'/storage/ofertas/principal',
          'visibility' => 'public',
        ],
        'ofertas_secundaria' => [
          'driver' => 'local',
          'root' => storage_path('app/public/ofertas/secundaria'),
          'url' => env('APP_URL').'/storage/ofertas/secundaria',
          'visibility' => 'public',
        ],
        'ofertas_icono' => [
          'driver' => 'local',
          'root' => storage_path('app/public/ofertas/icono'),
          'url' => env('APP_URL').'/storage/ofertas/icono',
          'visibility' => 'public',
        ],
        'ofertas_banner' => [
          'driver' => 'local',
          'root' => storage_path('app/public/ofertas/banner'),
          'url' => env('APP_URL').'/storage/ofertas/banner',
          'visibility' => 'public',
        ],

        'profesores_principal' => [
        'driver' => 'local',
        'root' => storage_path('app/public/profesores/principal'),
        'url' => env('APP_URL').'/storage/profesores/principal',
        'visibility' => 'public',
        ],

        'logros' => [
        'driver' => 'local',
        'root' => storage_path('app/public/logros'),
        'url' => env('APP_URL').'/storage/logros',
        'visibility' => 'public',
      ],

        'autores' => [
            'driver' => 'local',
            'root' => storage_path('app/public/autores'),
            'url' => env('APP_URL').'/storage/autores',
            'visibility' => 'public',
        ],

        'articulos_banner' => [
            'driver' => 'local',
            'root' => storage_path('app/public/articulos/banner'),
            'url' => env('APP_URL').'/storage/articulos/banner',
            'visibility' => 'public',
        ],

        'articulos_blog' => [
            'driver' => 'local',
            'root' => storage_path('app/public/articulos/blog'),
            'url' => env('APP_URL').'/storage/articulos/blog',
            'visibility' => 'public',
        ],

        'categoria_icono' => [
            'driver' => 'local',
            'root' => storage_path('app/public/categorias/icono'),
            'url' => env('APP_URL').'/storage/categorias/icono',
            'visibility' => 'public',
        ],
        'categoria_principal' => [
            'driver' => 'local',
            'root' => storage_path('app/public/categorias/principal'),
            'url' => env('APP_URL').'/storage/categorias/principal',
            'visibility' => 'public',
        ],

    ],

];
