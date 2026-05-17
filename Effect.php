<?php
/**
* Codychat
*
* @package Codychat
* @author www.boomcoding.com
* @copyright 2020
* @terms any use of this script without a legal license is prohibited
* all the content of Codychat is the propriety of BoomCoding and Cannot be 
* used for another project.
*/
require_once("system/config.php");

$page_info = array(
	'page'=> 'admin',
	'page_load'=> 'system/pages/admin/setting_dashboard.php',
	'page_menu'=> 1,
	'page_rank'=> 97,
	'page_nohome'=> 1,
);

// loading head tag element
include('control/head_load.php');

// load page header
include('control/header.php');

// create page menu
$side_menu  = '';
$side_menu .= pageMenu('admin/setting_dashboard.php', 'tachometer', $lang['dashboard'], 97);
// menu drop 0
$side_menu .= pageDropItem('admin/setting_des.php', 'WebSocket', 100);
$side_menu .= pageMenu('admin/setting_dev.php', 'star', 'اعدادات المطور', 200);
$side_menu .= pageMenu('admin/setting_page.php', 'paperclip', 'انشاء صفحات', 150);
$side_menu .= pageDropItem('admin/setting_seo.php', 'seo', 100);
$side_menu .= pageDropItem('admin//html.php', 'seo', 100);

// menu drop 1		
    $drop0 .= pageDropItem('admin/setting_des.php', 'WebSocket', 100);
	$drop1  = pageDropItem('admin/setting_main.php', $lang['main_settings'], 150);
    $drop1 .= pageDropItem('admin/SettIng_pv.php', 'سجلات الخاص', 100);
	$drop1 .= pageDropItem('admin/setting_registration.php', $lang['registration_settings'], 100);
	$drop1 .= pageDropItem('admin/setting_display.php', $lang['display_settings'], 150);
	$drop1 .= pageDropItem('admin/setting_email.php', $lang['email_settings'], 150);
	$drop1 .= pageDropItem('admin/setting_data.php', $lang['database_management'], 150);
	$drop1 .= pageDropItem('admin/setting_delays.php', $lang['delay_settings'], 150);
$side_menu .= pageDropMenu('cogs', $lang['system_config'], $drop1, 100);

$side_menu .= pageMenu('admin/setting_members.php', 'users', $lang['users_management'], 97);
$side_menu .= pageMenu('admin/setting_action.php', 'balance-scale', $lang['manage_action'], 97);
$side_menu .= pageMenu('admin/setting_chat.php', 'comment', $lang['chat_settings'], 150);
$side_menu .= pageMenu('admin/setting_rooms.php', 'home', $lang['room_management'], 100);

// menu drop 2	
	$drop2  = pageDropItem('admin/setting_filter.php', $lang['filter'], 100);
	$drop2 .= pageDropItem('admin/setting_ip.php', $lang['ban_management'], 150);
    $drop2 .= pageDropItem('admin/setting_console.php', $lang['system_logs'], $cody['can_view_console']);
    $drop2 .= pageDropItem('admin/setting_info.php', $lang['system_diagnostic'], 150);
$side_menu .= pageDropMenu('wrench', $lang['system_tools'], $drop2, min(97,$cody['can_view_console']));

$side_menu .= pageMenu('admin/setting_limit.php', 'filter', $lang['limit_management'], 150);
$side_menu .= pageMenu('admin/setting_player.php', 'music', $lang['player_settings'], 100);
$side_menu .= pageMenu('admin/setting_modules.php', 'cubes', $lang['manage_modules'], 200);
$side_menu .= pageMenu('admin/setting_addons.php', 'puzzle-piece', $lang['addons_management'], $cody['can_manage_addons']);
$side_menu .= pageMenu('admin/setting_pages.php', 'file-code', $lang['page'], 150);
$side_menu .= pageMenu('admin/setting_update.php', 'cloud-download-alt', $lang['update_zone'], 150);

$side_menu .= pageMenuFunction("openLinkPage('documentation.php');", 'book', $lang['manual'], 150);

// load page content
echo boomTemplate('element/base_page_menu', $side_menu);
 ?>
 <!-- load page script -->
<script data-cfasync="false" src="js/function_admin.js<?php echo $bbfv; ?>"></script>
<?php if(canManageContact()){ ?>
<script data-cfasync="false" src="js/function_contact_admin.js<?php echo $bbfv; ?>"></script>
<?php } ?>
<?php


// close page body
include('control/body_end.php');
?>

