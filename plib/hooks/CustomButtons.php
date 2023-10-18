<?php
// Copyright 1999-2021. Plesk International GmbH.
class Modules_CustomButtons_CustomButtons extends pm_Hook_CustomButtons
{

    public function getButtons()
    {
        $buttons = [[
            'place' => self::PLACE_COMMON,
            'order' => 2,
            'title' => pm_Locale::lmsg('commonButtonTitle'),
            'description' => pm_Locale::lmsg('commonButtonDescription'),
            'icon' => pm_Context::getBaseUrl() . 'images/icon.png',
            'link' => pm_Context::getActionUrl('index'),
        ], [
            'place' => self::PLACE_COMMON,
            'order' => 3,
            'title' => 'Common Button #2',
            'icon' => pm_Context::getBaseUrl() . 'images/icon.png',
            'link' => pm_Context::getActionUrl('index'),
        ], [
            'place' => self::PLACE_COMMON,
            'order' => 4,
            'title' => 'Common Button #3',
            'icon' => pm_Context::getBaseUrl() . 'images/icon.png',
            'link' => pm_Context::getActionUrl('index'),
        ], [
            'place' => self::PLACE_ADMIN_HOME,
            'title' => 'Admin Home Button',
            'description' => 'Description for admin home button',
            'icon' => pm_Context::getBaseUrl() . 'images/icon.png',
            'link' => 'http://www.plesk.com/',
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
            'place' => array_filter([
                self::PLACE_HOSTING_PANEL_NAVIGATION,
                version_compare(pm_ProductInfo::getVersion(), '17.0') >= 0 ? self::PLACE_HOSTING_PANEL_TABS : null,
                self::PLACE_ADMIN_TOOLS_AND_SETTINGS,
                self::PLACE_RESELLER_TOOLS_AND_SETTINGS,
            ]),
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
        ], [
            'place' => self::PLACE_RESELLER_HOME,
            'title' => 'Reseller Home Button',
            'description' => 'Description for Reseller home button',
            'icon' => pm_Context::getBaseUrl() . 'images/icon.png',
            'link' => 'http://www.plesk.com/',
            'newWindow' => true,
        ], [
            'place' => self::PLACE_ADMIN_TOOLS_AND_SETTINGS,
            'title' => 'Tools and settings button',
            'section' => 'securityPanel-tools-list',
            'order' => 3,
            'description' => 'Description for multi place button',
            'link' => pm_Context::getActionUrl('index', 'another'),
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

        if (version_compare(pm_ProductInfo::getVersion(), '17.0') >= 0) {
            $newButtons = [[
                'place' => self::PLACE_ADMIN_TOOLS_AND_SETTINGS,
                'section' => 'mailButtons',
                'order' => 2,
                'title' => 'Mail Settings Button',
                'description' => 'Description for Mail Settings Button',
                'link' => pm_Context::getActionUrl('index', 'another'),
            ], [
                'place' => self::PLACE_ADMIN_NAVIGATION ,
                'section' => 'hosting',
                'order' => 4,
                'title' => 'Admin Navigation Button',
                'description' => 'Description for Admin Navigation Button',
                'link' => pm_Context::getActionUrl('index', 'another'),
            ], [
                'place' => self::PLACE_RESELLER_NAVIGATION,
                'section' => 'profile',
                'order' => 3,
                'title' => 'Reseller Navigation Button',
                'description' => 'Description for Navigation Button',
                'link' => pm_Context::getActionUrl('index', 'another'),
            ], [
                'place' => self::PLACE_DOMAIN_PROPERTIES,
                'order' => 1,
                'title' => 'Domain Properties Button',
                'additionalComments' => 'Additional comment for Domain Properties Button',
                'description' => 'Description for domain properties button',
                'link' => pm_Context::getActionUrl('index', 'another'),
                'contextParams' => true,
            ], [
                'place' => self::PLACE_RESELLER_TOOLS_AND_SETTINGS,
                'section' => 'toolsButtons',
                'order' => 5,
                'title' => 'Reseller Tools And Settings button',
                'description' => 'Description for Reseller Tools And Settings button',
                'link' => pm_Context::getActionUrl('index', 'another'),
                'contextParams' => true,
            ], [
                'place' => self::PLACE_RESELLER_TOOLS_AND_SETTINGS,
                'section' => self::SECTION_RESELLER_TOOLS_SERVICES,
                'title' => 'Reseller Tools and Utilities',
                'description' => 'Description for Reseller Tools and Utilities button',
                'link' => pm_Context::getActionUrl('index', 'another'),
                'contextParams' => true,
            ], [
                'place' => self::PLACE_RESELLER_TOOLS_AND_SETTINGS,
                'section' => self::SECTION_RESELLER_TOOLS_RESOURCES,
                'title' => 'Reseller Tools and Utilities',
                'description' => 'Description for Reseller Tools and Utilities button',
                'link' => pm_Context::getActionUrl('index', 'another'),
                'contextParams' => true,
            ], [
                'place' => self::PLACE_RESELLER_TOOLS_AND_SETTINGS,
                'section' => self::SECTION_RESELLER_TOOLS_ADDITIONAL_SERVICES,
                'title' => 'Reseller Tools and Utilities',
                'description' => 'Description for Reseller Tools and Utilities button',
                'link' => pm_Context::getActionUrl('index', 'another'),
                'contextParams' => true,
            ]];
            $buttons = array_merge($buttons, $newButtons);
        }

        if (version_compare(pm_ProductInfo::getVersion(), '17.8.10') >= 0) {
            $buttons[] = [
                'place' => static::PLACE_HEADER_NAVIGATION,
                'title' => 'Header #1',
                'description' => 'Description for Header Navigation button',
                'icon' => pm_Context::getBaseUrl() . 'images/icon.png',
                'link' => pm_Context::getActionUrl('index', 'another'),
            ];
            $buttons[] = [
                'place' => static::PLACE_HEADER_NAVIGATION,
                'title' => 'Header #2',
                'icon' => pm_Context::getBaseUrl() . 'images/icon.png',
                'link' => pm_Context::getActionUrl('index', 'another'),
                'newWindow' => true,
                'visibility' => function() {return pm_Session::getClient()->isAdmin();},
            ];
        }

        if (version_compare(pm_ProductInfo::getVersion(), '18.0.19') >= 0) {
            $buttons[] = [
                'place' => static::PLACE_DOMAIN_PROPERTIES_DYNAMIC,
                'section' => static::SECTION_DOMAIN_PROPS_DYNAMIC_DEV_TOOLS,
                'title' => 'My Dev Tool',
                'description' => 'Description for Dev Tools section button',
                'icon' => pm_Context::getBaseUrl() . 'images/icon.png',
                'link' => pm_Context::getActionUrl('index', 'another'),
            ];
        }

        if (defined('static::PLACE_DOMAIN_HEADER_DYNAMIC')) {
            $buttons[] = [
                'place' => static::PLACE_DOMAIN_HEADER_DYNAMIC,
                'title' => 'Domain Header Button',
                'description' => 'Description for Domain Header Button',
                'icon' => pm_Context::getBaseUrl() . 'images/icon.png',
                'link' => pm_Context::getActionUrl('index', 'another'),
            ];
        }

        if (version_compare(pm_ProductInfo::getVersion(), '18.0.57') >= 0) {
            $buttons[] = [
                'place' => static::PLACE_DOMAIN_HEADER_DYNAMIC,
                'title' => "Additional Domain Header Button (no group)",
                'description' => "Description for Additional Domain Header Button (no group)",
                'icon' => pm_Context::getBaseUrl() . 'images/icon.png',
                'link' => pm_Context::getActionUrl('index', 'another'),
                'isAdditional' => true,
            ];

            // 3 groups with 3 buttons in each
            foreach (['group_1', 'group_2', 'group_3'] as $group) {
                for ($i = 1; $i <= 3; $i++) {
                    $buttons[] = [
                        'place' => static::PLACE_DOMAIN_HEADER_DYNAMIC,
                        'title' => "Additional Domain Header Button ($group-$i)",
                        'description' => "Description for Additional Domain Header Button ($group-$i)",
                        'icon' => pm_Context::getBaseUrl() . 'images/icon.png',
                        'link' => pm_Context::getActionUrl('index', 'another'),
                        'isAdditional' => true,
                        'group' => $group,
                    ];
                }
            }
        }

        return $buttons;
    }

}
