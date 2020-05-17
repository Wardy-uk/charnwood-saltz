<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
include 'wssf_cpt.php';
include 'wssf_feed_class.php';

function wssf_Load_Class() {
	$load_class = new Wssf_Feed();
}

wssf_Load_Class();


?>