<?php 

/**
 * Contao Open Source CMS, Copyright (C) 2005-2015 Leo Feyer
 *
 * Contao  Module "zz_statistic_group"
 * 
 * @copyright  Glen Langer 2012..2015 <http://contao.ninja>
 * @author     Glen Langer (BugBuster)
 * @package    Statistic_Group 
 * @license    LGPL 
 * @filesource
 * @see	       https://github.com/BugBuster1701/zz_statistic_group
 */


//Banner
if (isset($GLOBALS['BE_MOD']['system']['bannerstat'])) 
{
    $GLOBALS['BE_MOD']['statistics']['bannerstat'] = array
    (
            'callback'   => $GLOBALS['BE_MOD']['system']['bannerstat']['callback'],
            'icon'       => $GLOBALS['BE_MOD']['system']['bannerstat']['icon'],
            'stylesheet' => $GLOBALS['BE_MOD']['system']['bannerstat']['stylesheet']
    );
    unset($GLOBALS['BE_MOD']['system']['bannerstat']);
}

//Visitors
if (isset($GLOBALS['BE_MOD']['system']['visitorstat'])) 
{
    $GLOBALS['BE_MOD']['statistics']['visitorstat'] = array
    (
            'callback'   => $GLOBALS['BE_MOD']['system']['visitorstat']['callback'],
            'icon'       => $GLOBALS['BE_MOD']['system']['visitorstat']['icon'],
            'stylesheet' => $GLOBALS['BE_MOD']['system']['visitorstat']['stylesheet']
    );
    unset($GLOBALS['BE_MOD']['system']['visitorstat']);
}

//Bot
if (isset($GLOBALS['BE_MOD']['system']['botstatistics'])) 
{
    $GLOBALS['BE_MOD']['statistics']['botstatistics'] = array
    (
            'callback'   => $GLOBALS['BE_MOD']['system']['botstatistics']['callback'],
            'icon'       => $GLOBALS['BE_MOD']['system']['botstatistics']['icon'],
            'stylesheet' => $GLOBALS['BE_MOD']['system']['botstatistics']['stylesheet']
    );
    unset($GLOBALS['BE_MOD']['system']['botstatistics']);
}

//Download, new dlstat
if (isset($GLOBALS['BE_MOD']['content']['dlstats']['callback']))
{
    $GLOBALS['BE_MOD']['statistics']['dlstats'] = array
    (
            'callback'   => $GLOBALS['BE_MOD']['content']['dlstats']['callback'],
            'icon'       => $GLOBALS['BE_MOD']['content']['dlstats']['icon'],
            'stylesheet' => $GLOBALS['BE_MOD']['content']['dlstats']['stylesheet']
    );
    unset($GLOBALS['BE_MOD']['content']['dlstats']);
}

//config_top.php only found on GitHub
if (file_exists(TL_ROOT . '/system/modules/zz_statistic_group/config/config_top.php') 
 && is_readable(TL_ROOT . '/system/modules/zz_statistic_group/config/config_top.php')) 
{
    include(TL_ROOT . '/system/modules/zz_statistic_group/config/config_top.php');
}
