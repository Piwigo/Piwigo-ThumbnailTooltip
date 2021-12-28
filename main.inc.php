<?php
/*
Plugin Name: Thumbnail Tooltip
Version: 1.5.4
Description: Permet de changer l'infobulle sur les images dans les albums.
Plugin URI: http://piwigo.org/ext/extension_view.php?eid=738
Author: Sarybe
Author URI: 
Has Settings: true
*/


// Inspiré des plugins CatAddFav by jfc (http://fr.piwigo.org/ext/extension_view.php?eid=489) et Lightbox by P@t (http://piwigo.org/ext/extension_view.php?eid=280)

if (!defined('PHPWG_ROOT_PATH')) {
  die('Hacking attempt!');
}


define('thumbnail_tooltip_PATH' , PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');

if (basename(dirname(__FILE__)) != 'ThumbnailTooltip')
{
  add_event_handler('init', 'thumbnailtooltip_error');
  function thumbnailtooltip_error()
  {
    global $page;
    $page['errors'][] = 'ThumbnailTooltip folder name is incorrect, uninstall the plugin and rename it to "ThumbnailTooltip"';
  }
  return;
}


if (script_basename()  == 'admin') {
  include(dirname(__FILE__).'/admin/functions.inc.php');
}


else {
  include_once(dirname(__FILE__).'/initialize.inc.php');
}
?>