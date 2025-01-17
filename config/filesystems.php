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

    'default' => env('FILESYSTEM_DRIVER', 'oss'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */


    'disks' => [
        'oss' => [
            'driver'        => 'oss',
            'key'           =>('LTAI5t6xhoji8e65YCFnPxzf'),
            'secret'        => env('UQPSg0JtFmyWN45Jn7YpwVG48mfaE1'),
            'access_id'     => env('OSS_ACCESS_KEY_ID'),
            'access_key'    => env('OSS_ACCESS_KEY_SECRET'),
            'bucket'        => env('shangchuan-kx@1079410676208179.onaliyun.com'),
            'endpoint'      => env('http://oss-cn-chengdu-internal.aliyuncs.com'),
            'cdnDomain'     => env('OSS_CDN_DOMAIN', ''), // 如果有CDN可以填写
            'ssl'           => env('OSS_SSL', false), // 是否使用https
            'isCName'       => env('OSS_IS_CNAME', false), // 如果使用CName
            'debug'         => env('OSS_DEBUG', false)
        ],


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

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
        ],
        'oss' => [
            'driver'     => 'oss',
            'access_id'  => env('OSS_ACCESS_ID'), // 阿里云Access Key ID
            'access_key' => env('OSS_ACCESS_KEY'), // 阿里云Access Key Secret
            'bucket'     => env('OSS_BUCKET'),    // 存储空间名称
            'endpoint'   => env('OSS_ENDPOINT'),  // 访问的OSS节点
            'ssl'        => env('OSS_SSL', false),// 是否使用https
            'isCName'    => env('OSS_IS_CNAME', false), // 是否使用自定义域名
            'cdnDomain'  => env('OSS_CDN_DOMAIN', null), // 自定义域名
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
