<?php
declare(strict_types=1);
use Nilgems\Datatools\Services\PhpMyAdminService\VendorConfig;

$vendorConfig = new VendorConfig();
if(!$vendorConfig->isDefined()) {
    exit();
}
define('AUTOLOAD_FILE', (string) $vendorConfig->autoloadFile);
define('TEMP_DIR', (string) $vendorConfig->tempDir);
define('CHANGELOG_FILE', (string) $vendorConfig->changeLogFile);
define('LICENSE_FILE', (string) $vendorConfig->licenseFile);
define('SQL_DIR', (string) $vendorConfig->sqlDir);
define('CONFIG_FILE', (string) $vendorConfig->configFile);
define('CUSTOM_HEADER_FILE', (string) $vendorConfig->customHeaderFile);
define('CUSTOM_FOOTER_FILE', (string) $vendorConfig->customFooterFile);
define('VERSION_CHECK_DEFAULT', (bool) $vendorConfig->versionCheckDefault);
define('LOCALE_PATH', (string) $vendorConfig->localePath);
define('CACHE_DIR', (string) $vendorConfig->cacheDir);
define('VERSION_SUFFIX', (string) $vendorConfig->versionSuffix);

define('K_PATH_IMAGES', public_path('/'));