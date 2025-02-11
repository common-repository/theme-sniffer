<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit531aa2c2ef306a0b9471391b220dac31
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Michelf\\' => 8,
        ),
        'D' => 
        array (
            'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 55,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Michelf\\' => 
        array (
            0 => __DIR__ . '/..' . '/michelf/php-markdown/Michelf',
        ),
        'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 
        array (
            0 => __DIR__ . '/..' . '/dealerdirect/phpcodesniffer-composer-installer/src',
        ),
    );

    public static $classMap = array (
        'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\Plugin' => __DIR__ . '/..' . '/dealerdirect/phpcodesniffer-composer-installer/src/Plugin.php',
        'Michelf\\Markdown' => __DIR__ . '/..' . '/michelf/php-markdown/Michelf/Markdown.php',
        'Michelf\\MarkdownExtra' => __DIR__ . '/..' . '/michelf/php-markdown/Michelf/MarkdownExtra.php',
        'Michelf\\MarkdownInterface' => __DIR__ . '/..' . '/michelf/php-markdown/Michelf/MarkdownInterface.php',
        'Theme_Sniffer\\Admin_Menus\\Base_Admin_Menu' => __DIR__ . '/../..' . '/src/admin-menus/class-base-admin-menu.php',
        'Theme_Sniffer\\Admin_Menus\\Sniff_Page' => __DIR__ . '/../..' . '/src/admin-menus/class-sniff-page.php',
        'Theme_Sniffer\\Api\\Template_Tags_Request' => __DIR__ . '/../..' . '/src/api/class-template-tags-request.php',
        'Theme_Sniffer\\Assets\\Asset' => __DIR__ . '/../..' . '/src/assets/asset-interface.php',
        'Theme_Sniffer\\Assets\\Assets_Aware' => __DIR__ . '/../..' . '/src/assets/assets-aware-interface.php',
        'Theme_Sniffer\\Assets\\Assets_Awareness' => __DIR__ . '/../..' . '/src/assets/assets-awareness-trait.php',
        'Theme_Sniffer\\Assets\\Assets_Handler' => __DIR__ . '/../..' . '/src/assets/class-assets-handler.php',
        'Theme_Sniffer\\Assets\\Base_Asset' => __DIR__ . '/../..' . '/src/assets/class-base-asset.php',
        'Theme_Sniffer\\Assets\\Script_Asset' => __DIR__ . '/../..' . '/src/assets/class-script-asset.php',
        'Theme_Sniffer\\Assets\\Style_Asset' => __DIR__ . '/../..' . '/src/assets/class-style-asset.php',
        'Theme_Sniffer\\Callback\\Base_Ajax_Callback' => __DIR__ . '/../..' . '/src/callback/class-base-ajax-callback.php',
        'Theme_Sniffer\\Callback\\Invokable' => __DIR__ . '/../..' . '/src/callback/invokable-interface.php',
        'Theme_Sniffer\\Callback\\Run_Sniffer_Callback' => __DIR__ . '/../..' . '/src/callback/class-run-sniffer-callback.php',
        'Theme_Sniffer\\Core\\Has_Activation' => __DIR__ . '/../..' . '/src/has-activation-interface.php',
        'Theme_Sniffer\\Core\\Has_Deactivation' => __DIR__ . '/../..' . '/src/has-deactivation-interface.php',
        'Theme_Sniffer\\Core\\Plugin' => __DIR__ . '/../..' . '/src/class-plugin.php',
        'Theme_Sniffer\\Core\\Plugin_Factory' => __DIR__ . '/../..' . '/src/class-plugin-factory.php',
        'Theme_Sniffer\\Core\\Registerable' => __DIR__ . '/../..' . '/src/registerable-interface.php',
        'Theme_Sniffer\\Core\\Renderable' => __DIR__ . '/../..' . '/src/renderable-interface.php',
        'Theme_Sniffer\\Core\\Service' => __DIR__ . '/../..' . '/src/service-interface.php',
        'Theme_Sniffer\\Exception\\Api_Response_Error' => __DIR__ . '/../..' . '/src/exceptions/class-api-response-error.php',
        'Theme_Sniffer\\Exception\\Failed_To_Load_View' => __DIR__ . '/../..' . '/src/exceptions/class-failed-to-load-view.php',
        'Theme_Sniffer\\Exception\\General_Exception' => __DIR__ . '/../..' . '/src/exceptions/general-exception-interface.php',
        'Theme_Sniffer\\Exception\\Invalid_Service' => __DIR__ . '/../..' . '/src/exceptions/class-invalid-service.php',
        'Theme_Sniffer\\Exception\\Invalid_URI' => __DIR__ . '/../..' . '/src/exceptions/class-invalid-uri.php',
        'Theme_Sniffer\\Exception\\Missing_Manifest' => __DIR__ . '/../..' . '/src/exceptions/class-missing-manifest.php',
        'Theme_Sniffer\\Exception\\No_Themes_Present' => __DIR__ . '/../..' . '/src/exceptions/class-no-themes-present.php',
        'Theme_Sniffer\\Exception\\Plugin_Activation_Failure' => __DIR__ . '/../..' . '/src/exceptions/class-plugin-activation-failure.php',
        'Theme_Sniffer\\Helpers\\File_Helpers' => __DIR__ . '/../..' . '/src/helpers/file-helpers-trait.php',
        'Theme_Sniffer\\Helpers\\Readme_Helpers' => __DIR__ . '/../..' . '/src/helpers/readme-helpers-trait.php',
        'Theme_Sniffer\\Helpers\\Sniffer_Helpers' => __DIR__ . '/../..' . '/src/helpers/sniffer-helpers-trait.php',
        'Theme_Sniffer\\Sniffs\\Has_Results' => __DIR__ . '/../..' . '/src/sniffs/has-results-interface.php',
        'Theme_Sniffer\\Sniffs\\Readme\\Contributors' => __DIR__ . '/../..' . '/src/sniffs/readme/class-contributors.php',
        'Theme_Sniffer\\Sniffs\\Readme\\License' => __DIR__ . '/../..' . '/src/sniffs/readme/class-license.php',
        'Theme_Sniffer\\Sniffs\\Readme\\License_Uri' => __DIR__ . '/../..' . '/src/sniffs/readme/class-license-uri.php',
        'Theme_Sniffer\\Sniffs\\Readme\\Parser' => __DIR__ . '/../..' . '/src/sniffs/readme/class-parser.php',
        'Theme_Sniffer\\Sniffs\\Readme\\Validator' => __DIR__ . '/../..' . '/src/sniffs/readme/class-validator.php',
        'Theme_Sniffer\\Sniffs\\Result' => __DIR__ . '/../..' . '/src/sniffs/class-result.php',
        'Theme_Sniffer\\Sniffs\\Screenshot\\Validator' => __DIR__ . '/../..' . '/src/sniffs/screenshot/class-validator.php',
        'Theme_Sniffer\\Sniffs\\Validatable' => __DIR__ . '/../..' . '/src/sniffs/validatable-interface.php',
        'Theme_Sniffer\\Sniffs\\Validate' => __DIR__ . '/../..' . '/src/sniffs/class-validate.php',
        'Theme_Sniffer\\Sniffs\\Validate_File' => __DIR__ . '/../..' . '/src/sniffs/class-validate-file.php',
        'Theme_Sniffer\\View\\Base_View' => __DIR__ . '/../..' . '/src/view/class-base-view.php',
        'Theme_Sniffer\\View\\Escaped_View' => __DIR__ . '/../..' . '/src/view/class-escaped-view.php',
        'Theme_Sniffer\\View\\Post_Escaped_View' => __DIR__ . '/../..' . '/src/view/class-post-escaped-view.php',
        'Theme_Sniffer\\View\\Templated_View' => __DIR__ . '/../..' . '/src/view/class-templated-view.php',
        'Theme_Sniffer\\View\\View' => __DIR__ . '/../..' . '/src/view/class-view.php',
        'Theme_Sniffer\\i18n\\Internationalization' => __DIR__ . '/../..' . '/src/i18n/class-internationalization.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit531aa2c2ef306a0b9471391b220dac31::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit531aa2c2ef306a0b9471391b220dac31::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit531aa2c2ef306a0b9471391b220dac31::$classMap;

        }, null, ClassLoader::class);
    }
}
