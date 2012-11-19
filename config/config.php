<?php 

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * PHP version 5
 * @copyright  Glen Langer 2012 
 * @author     Glen Langer 
 * @package    Statistic_Group 
 * @license    LGPL 
 * @filesource
 */


//Banner
if (isset($GLOBALS['BE_MOD']['system']['bannerstat'])) 
{
    unset($GLOBALS['BE_MOD']['system']['bannerstat']);
    $GLOBALS['BE_MOD']['statistics']['bannerstat'] = array
    (
            callback   => 'Banner\ModuleBannerStat',
            icon       => 'system/modules/banner/assets/iconBannerStat.gif',
            stylesheet => 'system/modules/banner/assets/mod_banner_be.css'
    );
}

//Visitors
if (isset($GLOBALS['BE_MOD']['system']['visitorstat'])) 
{
    unset($GLOBALS['BE_MOD']['system']['visitorstat']);
    $GLOBALS['BE_MOD']['statistics']['visitorstat'] = array
    (
            'callback'   => 'Visitors\ModuleVisitorStat',
            'icon'       => 'system/modules/visitors/assets/iconVisitor.png',
            'stylesheet' => 'system/modules/visitors/assets/mod_visitors_be.css'
    );
}

//Bot
if (isset($GLOBALS['BE_MOD']['system']['botstatistics'])) 
{
    unset($GLOBALS['BE_MOD']['system']['botstatistics']);
    $GLOBALS['BE_MOD']['statistics']['botstatistics'] = array
    (
            'callback'   => 'BotStatistics\ModuleBotStatisticsStat',
            'icon'       => 'system/modules/botstatistics/assets/botstatistics2.png',
            'stylesheet' => 'system/modules/botstatistics/assets/mod_botstatistics_be.css',
    );
}

//Download
if (isset($GLOBALS['BE_MOD']['content']['dlstats'])) 
{
    unset($GLOBALS['BE_MOD']['content']['dlstats']);
    $GLOBALS['BE_MOD']['statistics']['dlstats'] = array
    (
            'tables'	 =>	array('tl_dlstats','tl_dlstatdets'),
            'icon'		 =>	'system/modules/dlstats/assets/icon.png',
            'stylesheet' =>	'system/modules/dlstats/assets/style.css'
    );
}

