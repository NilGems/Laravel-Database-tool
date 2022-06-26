<?php
if(!function_exists('datatool_root_path')) {
    function datatool_root_path(string $path = ''): string
    {
        $base_path = __DIR__ . DIRECTORY_SEPARATOR;
        if($path) {
            $base_path .= $path;
        }
        return $base_path;
    }
}
if(!function_exists('datatool_phpmyadmin_root_path')) {
    function datatool_phpmyadmin_root_path(string $path = ''): string {
        $base_path = datatool_root_path('tools' . DIRECTORY_SEPARATOR . 'phpmyadmin') . DIRECTORY_SEPARATOR;
        if($path) {
            $base_path .= $path;
        }
        return $base_path;
    }
}