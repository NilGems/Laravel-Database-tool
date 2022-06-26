<?php
return [
    'phpmyadmin' => [
        /**
         * Path to vendor autoload file. Useful when you want to have vendor dependencies somewhere else.
         */
        'autoloadFile' => datatool_root_path('vendor' . DIRECTORY_SEPARATOR . 'autoload.php'),

        /**
         * Directory where cache files are stored.
         */
        'tempDir' => storage_path('app' . DIRECTORY_SEPARATOR . 'datatools' . DIRECTORY_SEPARATOR . 'phpmyadmin' . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR),

        /**
         * Path to changelog file, can be gzip compressed.
         * Useful when you want to have documentation somewhere else, e.g. /usr/share/doc.
         */
        'changeLogFile' => datatool_phpmyadmin_root_path('ChangeLog'),

        /**
         * Path to license file. Useful when you want to have documentation somewhere else, e.g. /usr/share/doc.
         */
        'licenseFile' => datatool_phpmyadmin_root_path('LICENSE'),

        /**
         * Directory where SQL scripts to create/upgrade configuration storage reside.
         */
        'sqlDir' => datatool_root_path('libraries' . DIRECTORY_SEPARATOR . 'phpmyadmin' . DIRECTORY_SEPARATOR . 'sql' . DIRECTORY_SEPARATOR),

        /**
         * Filename of a configuration file.
         */
        'configFile' => datatool_root_path('config' . DIRECTORY_SEPARATOR . 'config.inc.php'),

        /**
         * Filename of custom header file.
         */
        'customHeaderFile' => datatool_root_path('config' . DIRECTORY_SEPARATOR . 'config.header.inc.php'),

        /**
         * Filename of custom footer file.
         */
        'customFooterFile' => datatool_root_path('config' . DIRECTORY_SEPARATOR . 'config.footer.inc.php'),

        /**
         * Default value for check for version upgrades.
         */
        'versionCheckDefault' => false,

        /**
         * Path to files with compiled locales (*.mo)
         */
        'localePath' => datatool_root_path('libraries' . DIRECTORY_SEPARATOR . 'phpmyadmin' . DIRECTORY_SEPARATOR . 'locale' . DIRECTORY_SEPARATOR),

        /**
         * Define the cache directory for routing cache and other cache files
         */
        'cacheDir' => storage_path('app' . DIRECTORY_SEPARATOR . 'datatools' . DIRECTORY_SEPARATOR . 'phpmyadmin' . DIRECTORY_SEPARATOR . 'libraries' . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR),//ROOT_PATH . 'libraries' . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR,

        /**
         * Suffix to add to the phpMyAdmin version
         */
        'versionSuffix' => '',
    ]
];