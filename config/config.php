<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

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
            callback => ModuleBannerStat,
            icon => 'system/modules/banner/iconBannerStat.gif',
            stylesheet => 'system/modules/banner/mod_banner_be.css'
    );
}

//Visitors
if (isset($GLOBALS['BE_MOD']['system']['visitorstat'])) 
{
    unset($GLOBALS['BE_MOD']['system']['visitorstat']);
    $GLOBALS['BE_MOD']['statistics']['visitorstat'] = array
    (
            'callback'   => 'ModuleVisitorStat',
            'icon'       => 'system/modules/visitors/iconVisitor.png',
            'stylesheet' => 'system/modules/visitors/mod_visitors_be.css'
    );
}

//Bot
if (isset($GLOBALS['BE_MOD']['system']['botstatistics'])) 
{
    unset($GLOBALS['BE_MOD']['system']['botstatistics']);
    $GLOBALS['BE_MOD']['statistics']['botstatistics'] = array
    (
            'callback'   => 'ModuleBotStatisticsStat',
            'icon'       => 'system/modules/botstatistics/html/botstatistics2.png',
            'stylesheet' => 'system/modules/botstatistics/html/mod_botstatistics_be.css',
    );
}

//Download
if (isset($GLOBALS['BE_MOD']['content']['dlstats'])) 
{
    unset($GLOBALS['BE_MOD']['content']['dlstats']);
    $GLOBALS['BE_MOD']['statistics']['dlstats'] = array
    (
            'tables'	 =>	array('tl_dlstats','tl_dlstatdets'),
            'icon'		 =>	'system/modules/dlstats/html/icon.png',
            'stylesheet' =>	'system/modules/dlstats/html/style.css'
    );
}



?>