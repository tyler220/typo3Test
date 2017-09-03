<?php
return [
    'BE' => [
        'debug' => false,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$pbkdf2-sha256$25000$e.zFeLjgLEN/mQ4rT3g2Cg$Tw2h5bDgiAk93SVGHt9gqQhWYVI1WgEzbZQhRiOlLNg',
        'loginSecurityLevel' => 'rsa',
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'dbname' => 'testDB',
                'driver' => 'mysqli',
                'host' => '127.0.0.1',
                'password' => '',
                'port' => 3306,
                'user' => 'root',
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [
            'mask' => 'a:9:{s:4:"json";s:19:"typo3conf/mask.json";s:18:"backendlayout_pids";s:3:"0,1";s:7:"content";s:28:"fileadmin/templates/content/";s:7:"layouts";s:36:"fileadmin/templates/content/Layouts/";s:8:"partials";s:37:"fileadmin/templates/content/Partials/";s:7:"backend";s:28:"fileadmin/templates/backend/";s:15:"layouts_backend";s:36:"fileadmin/templates/backend/Layouts/";s:16:"partials_backend";s:37:"fileadmin/templates/backend/Partials/";s:7:"preview";s:28:"fileadmin/templates/preview/";}',
            'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
            'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\Pbkdf2Salt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\Pbkdf2Salt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
            'threeme' => 'a:0:{}',
            'ws_scss' => 'a:0:{}',
        ],
    ],
    'FE' => [
        'debug' => false,
        'loginSecurityLevel' => 'rsa',
    ],
    'GFX' => [
        'jpg_quality' => '80',
    ],
    'MAIL' => [
        'transport' => 'smtp',
        'transport_sendmail_command' => '',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => 'localhost:25',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'extbase_object' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
                    'groups' => [
                        'system',
                    ],
                    'options' => [
                        'defaultLifetime' => 0,
                    ],
                ],
            ],
        ],
        'devIPmask' => '',
        'displayErrors' => 0,
        'enableDeprecationLog' => false,
        'encryptionKey' => '45fde01b814784998b860c9c56808b4c24fc1564f2e5637acdd8b6aeb71ac2ff25d404c8d783414a3c22e5d49efba68c',
        'exceptionalErrors' => 20480,
        'isInitialDatabaseImportDone' => true,
        'isInitialInstallationInProgress' => false,
        'sitename' => 'typo3TestSite',
        'sqlDebug' => 0,
        'systemLogLevel' => 2,
    ],
];
