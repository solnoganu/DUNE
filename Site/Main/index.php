<?php
require "../../global.php";
require "../../Dao/control_Product.php";
require "../../Dao/control_Commodity.php";
extract($_REQUEST);
if (exist_param('men', $_REQUEST)) {
    $VIEW_NAME = "men.php";
} elseif (exist_param('new', $_REQUEST)) {
    $VIEW_NAME = "new.php";
} elseif (exist_param('sale', $_REQUEST)) {
    $VIEW_NAME = "sale.php";
} elseif (exist_param('login', $_REQUEST)) {
    $VIEW_NAME = "../Account/login_form.php";
} elseif (exist_param('fgPw', $_REQUEST)) {
    $VIEW_NAME = "../Account/forget_Ps_form.php";
} elseif (exist_param('signup', $_REQUEST)) {
    $VIEW_NAME = "../Account/signup_form.php";
} elseif (exist_param('changePs', $_REQUEST)) {
    $VIEW_NAME = "../Account/change_Ps_form.php";
} elseif (exist_param('edit', $_REQUEST)) {

    $VIEW_NAME = "../Account/update_Ac_form.php";
} elseif (exist_param('logout', $_REQUEST)) {
    session_unset();
    $VIEW_NAME = "../Account/login_form.php";
} else {
    $VIEW_NAME = "home.php";
}
$upcoming = select_product_by_date();
$trending = select_product_top10();
$games_of_the_year = select_product_special();
$list_Commodity = show_commodity();
require "../layout.php";
