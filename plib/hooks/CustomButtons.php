<?php

class Modules_CustomButtons_CustomButtons extends pm_Hook_CustomButtons
{

    public static function getButtons()
    {
        return [[
            'place' => self::PLACE_COMMON,
            'title' => pm_Locale::lmsg('commonButtonTitle'),
            'description' => pm_Locale::lmsg('commonButtonDescription'),
            'icon' => pm_Context::getBaseUrl() . 'images/icon.png',
            'link' => pm_Context::getBaseUrl() . 'index.php/index/index',
        ], [
            'place' => self::PLACE_ADMIN_HOME,
            'title' => 'Admin Home Button',
            'description' => 'Description for admin home button',
            'icon' => pm_Context::getBaseUrl() . 'images/icon.png',
            'link' => 'http://www.parallels.com/',
            'newWindow' => true,
        ], [
            'place' => self::PLACE_CUSTOMER_HOME,
            'title' => 'Customer Home Button',
            'description' => 'Description for customer home button',
            'icon' => pm_Context::getBaseUrl() . 'images/icon.png',
            'link' => pm_Context::getBaseUrl() . 'index.php/index/index',
        ], [
            'place' => self::PLACE_DOMAIN,
            'title' => 'Domain Button',
            'description' => 'Description for domain button',
            'icon' => pm_Context::getBaseUrl() . 'images/icon.png',
            'link' => pm_Context::getBaseUrl() . 'index.php/index/index',
        ], [
            'place' => [
                self::PLACE_HOSTING_PANEL_NAVIGATION,
                self::PLACE_ADMIN_TOOLS_AND_SETTINGS,
                self::PLACE_RESELLER_TOOLS_AND_SETTINGS,
            ],
            'title' => 'Multi Place Button',
            'description' => 'Description for multi place button',
            'link' => pm_Context::getBaseUrl() . 'index.php/index/another',
        ]];
    }

}
