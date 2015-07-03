<?php
// Copyright 1999-2015. Parallels IP Holdings GmbH.
class Modules_CustomButtons_CustomButtons extends pm_Hook_CustomButtons
{

    public function getButtons()
    {
        $buttons = [[
            'place' => self::PLACE_COMMON,
            'title' => pm_Locale::lmsg('commonButtonTitle'),
            'description' => pm_Locale::lmsg('commonButtonDescription'),
            'icon' => pm_Context::getBaseUrl() . 'images/icon.png',
            'link' => pm_Context::getActionUrl('index'),
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
            'link' => pm_Context::getActionUrl('index'),
        ], [
            'place' => self::PLACE_DOMAIN,
            'title' => 'Domain Button',
            'description' => 'Description for domain button',
            'icon' => pm_Context::getBaseUrl() . 'images/icon.png',
            'link' => pm_Context::getActionUrl('index'),
        ], [
            'place' => [
                self::PLACE_HOSTING_PANEL_NAVIGATION,
                self::PLACE_ADMIN_TOOLS_AND_SETTINGS,
                self::PLACE_RESELLER_TOOLS_AND_SETTINGS,
            ],
            'title' => 'Multi Place Button',
            'description' => 'Description for multi place button',
            'link' => pm_Context::getActionUrl('index', 'another'),
        ], [
            'place' => self::PLACE_DOMAIN,
            'targetId' => 'buttonBackup',
            'hidden' => true,
        ], [
            'place' => self::PLACE_DOMAIN_PROPERTIES,
            'targetId' => 'buttonLogs',
            'hidden' => true,
            'contextParams' => true,
        ], [
            'place' => self::PLACE_DOMAIN_PROPERTIES,
            'targetId' => 'buttonSitebuilder',
            'title' => 'Sitebuilder',
            'description' => 'My Sitebuilder',
            'link' => pm_Context::getActionUrl('index'),
            'contextParams' => true,
        ], [
            'place' => self::PLACE_DOMAIN_PROPERTIES,
            'title' => 'Domain Properties Button',
            'description' => 'Description for domain properties button',
            'link' => pm_Context::getActionUrl('index', 'another'),
            'contextParams' => true,
        ]];

        if (version_compare(pm_ProductInfo::getVersion(), '12.1') >= 0) {
            $buttons[] = [
                'place' => self::PLACE_TOOLBAR,
                'id' => 'toolbox-button-id',
                'title' => 'Toolbar Button',
                'description' => 'Description for toolbar button',
                'icon' => pm_Context::getBaseUrl() . 'images/icon.png',
                'link' => pm_Context::getActionUrl('index', 'another'),
                'visibility' => function($options) {
                    if (isset($options['controller']) && 'email-address' == $options['controller']) {
                        return true;
                    }
                    return false;
                },
            ];
        }

        return $buttons;
    }

}
