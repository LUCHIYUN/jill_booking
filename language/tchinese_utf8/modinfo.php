<?php
//  ------------------------------------------------------------------------ //
// 本模組由 tnjaile 製作
// 製作日期：2015-01-23
// $Id:$
// ------------------------------------------------------------------------- //
include_once XOOPS_ROOT_PATH . '/modules/tadtools/language/' . $xoopsConfig['language'] . '/modinfo_common.php';

define('_MI_JILLBOOKIN_NAME', '場地預約');
define('_MI_JILLBOOKIN_AUTHOR', 'Jill');
define('_MI_JILLBOOKIN_CREDITS', '');
define('_MI_JILLBOOKIN_DESC', '此模組的用途是提供場地預約的模組');
define('_MI_JILLBOOKIN_AUTHOR_WEB', '');
define('_MI_JILLBOOKIN_ADMENU1', "場地管理");
define('_MI_JILLBOOKIN_ADMENU1_DESC', "場地管理");
define("_MI_JILLBOOKIN_SMNAME2", "批次預約");
define("_MI_JILLBOOKIN_SMNAME3", "個人預約清單");
define("_MI_JILLBOOKIN_SMNAME4", "審核清單");

//偏好設定
define('_MI_JILLBOOKIN_BOOKING_GROUP', '可預約場地者');
define('_MI_JILLBOOKIN_BOOKING_GROUP_DESC', '可預約場地之群組');
define('_MI_JILLBOOKIN_MAX_BOOKINGWEEK', '限定最多可預約週數');
define('_MI_JILLBOOKIN_MAX_BOOKINGWEEK_DESC', '限定最多可預約場地週數。請填數字，例如要限定5週為上限，請填:5');
//區塊
define("_MI_JB_BNAME1","今日預約");
define("_MI_JB_BDESC1","今日預約(jb_b_today_list)");
define('_MI_JB_BOPT0_DEF', '伸縮頁籤');
