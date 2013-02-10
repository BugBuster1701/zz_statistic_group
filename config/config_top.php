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


//set statistic group on first position
if (isset($GLOBALS['BE_MOD']['statistics']['bannerstat'])    ||
    isset($GLOBALS['BE_MOD']['statistics']['visitorstat'])   ||
    isset($GLOBALS['BE_MOD']['statistics']['botstatistics']) ||
    isset($GLOBALS['BE_MOD']['statistics']['dlstats'])
   )
{
    array_insert($GLOBALS['BE_MOD'], 0, array
                    (
                     'statistics' => array( )
                    )
                );
}
