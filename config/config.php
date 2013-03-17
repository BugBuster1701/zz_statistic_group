<?php 

/**
 * Contao Open Source CMS, Copyright (C) 2005-2013 Leo Feyer
 *
 * Contao  Module "zz_statistic_group"
 * 
 * @copyright  Glen Langer 2012..2013 <http://www.contao.glen-langer.de>
 * @author     Glen Langer (BugBuster)
 * @package    Statistic_Group 
 * @license    LGPL 
 * @filesource
 * @see	       https://github.com/BugBuster1701/zz_statistic_group
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

//Download, old dlstat
if (isset($GLOBALS['BE_MOD']['content']['dlstats']['tables'])) 
{
    unset($GLOBALS['BE_MOD']['content']['dlstats']);
    $GLOBALS['BE_MOD']['statistics']['dlstats'] = array
    (
            'tables'	 =>	array('tl_dlstats','tl_dlstatdets'),
            'icon'		 =>	'system/modules/dlstats/assets/icon.png',
            'stylesheet' =>	'system/modules/dlstats/assets/style.css'
    );
}
//Download, new dlstat
if (isset($GLOBALS['BE_MOD']['content']['dlstats']['callback']))
{
    unset($GLOBALS['BE_MOD']['content']['dlstats']);
    $GLOBALS['BE_MOD']['statistics']['dlstats'] = array
    (
            'callback'   => 'DLStats\ModuleDlstatsStatistics',
            'icon'       => 'system/modules/dlstats/assets/icon.png',
            'stylesheet' => 'system/modules/dlstats/assets/mod_dlstatsstatistics_be.css',
    );
}

//config_top.php only found on GitHub
if (file_exists(TL_ROOT . '/system/modules/zz_statistic_group/config/config_top.php') 
 && is_readable(TL_ROOT . '/system/modules/zz_statistic_group/config/config_top.php')) 
{
    include(TL_ROOT . '/system/modules/zz_statistic_group/config/config_top.php');
}
