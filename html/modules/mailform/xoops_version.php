<?php
$dirname  = dirname(__FILE__);
$basename = basename($dirname);

$modversion['name']        = "Mailform";
$modversion['version']     = 2.01;
$modversion['description'] = "";
$modversion['credits']     = 'RYUS Inc.';
$modversion['author']      = 'Hidehito NOZAWA aka Suin <http://ryus.co.jp/>';
$modversion['help']	       = 'Readme/japanese.html';
$modversion['license']     = 'GNU GPL v2 see LISENCE';
$modversion['image']       = 'public/images/module_icon.png';
$modversion['nice_image']  = 'public/images/module_icon_square.png';
$modversion['dirname']     = $basename;

$modversion['cube_style'] = true;

$modversion['hasMain'] = 1;
$modversion['notAssignMainMenu'] = 1;

$modversion['hasAdmin']   = 0;
//$modversion['adminindex'] = 'admin/index.php';
//$modversion['adminmenu']  = 'admin/menu.php';

$modversion['hasSearch'] = 0;

$modversion['hasNotification'] = 0;

$modversion['hasComments'] = 0;


$modversion['onInstall']   = 'Platform/Installer.php';
$modversion['onUpdate']    = 'Platform/Installer.php';
$modversion['onUninstall'] = 'Platform/Installer.php';
