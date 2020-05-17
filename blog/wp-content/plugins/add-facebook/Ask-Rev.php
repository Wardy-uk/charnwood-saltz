<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function plugSSfP_check_installation_date() {
 
    $nobug = "";
    $nobug = get_option('plugSFP_hide_noticeSocialFeedFixed');
 
    if (!$nobug) {
        $hasposts = get_posts('post_type=wssf_social_feed');
        if( !empty ( $hasposts ) ) {
            //add_action( 'admin_notices', 'plugSSfP_display_admin_notice' );
        }
    }
}
add_action( 'admin_init', 'plugSSfP_check_installation_date' );
 
function plugSSfP_display_admin_notice_old() {
 
    $cfb_install_link =  esc_url( network_admin_url('plugin-install.php?tab=plugin-information&plugin=' . 'page-builder-add' . '&TB_iframe=true&width=100%&height=800' ) );
 
    $nobugurl = get_admin_url() . '?mpspdontbug=1';

    $install_date = get_option( 'plugSSfP_activation_date' );
 
    echo '<div class="psprev-adm-notice psprev-adm-notice-wp-rating notice">';

    echo '<div style="width:65%; display: inline-block;" ><br> <h3><b>' . __( 'A gift to all our premium users. ', 'page-builder-add' ) . '</b></h3>';

    echo '<p style="font-size:16px;">' . __( ' We are giving away our new premium page builder plugin to all our exisitng uers.  So Install the page builder now Its Free!!', 'page-builder-add' ) . '</p>
        <a href="' . $nobugurl . '" type="button" class="notice-dismiss-psp"><span class="dashicon  dashicons-no">Dismiss this notice.</span></a>

         </div>';

    echo '<div style="width:18%; display: inline-block; float: right; margin-top: 45px;">

        <a class="psprev-adm-notice-link" href="'.$cfb_install_link.'" target="_blank"><span class="dashicons dashicons-megaphone"></span>' . __( 'Install Now For Free', 'page-builder-add' ) . '</a>

        </div>';

 
   // echo( __( "You have been using our Posts Slider for more than a week now, do you like it? If so, please leave us a review with your feedback! <a href=".$reviewurl." target='_blank' class='button button-primary' style='margin:0 20px;'>Leave A Review</a> <a href=".$nobugurl." style='font-size:9px;'>Leave Me Alone</a>" ) ); 
 
    echo "</div>";

    echo "<style>

    .psprev-adm-notice-activation { border-color: #41c4ff; }
    .psprev-adm-notice-activation h4 { font-size: 1.05em; }
    .psprev-adm-notice-activation a { text-decoration: none; }
    .psprev-adm-notice-activation .psprev-adm-notice-link { display: inline-block; padding: 6px 8px; margin-bottom: 10px; color: rgba(52,152,219,1); font-weight: 500; background: #e9e9e9; border-radius: 2px; margin-right: 10px; }
    .psprev-adm-notice-activation .psprev-adm-notice-link span { display: inline-block; text-decoration: none; margin-right: 10px; }
    .psprev-adm-notice-activation .psprev-adm-notice-link:hover { color: #fff; background:#41c4ff; }

    .psprev-adm-notice-wp-rating { border-color: rgba(52,152,219,0.75); }
    .psprev-adm-notice-wp-rating h4 { font-size: 1.05em; }
    .psprev-adm-notice-wp-rating p:last-of-type { margin-bottom: 20px; }
    .psprev-adm-notice-wp-rating a { text-decoration: none; }
    .psprev-adm-notice-wp-rating .psprev-adm-notice-link { display: inline-block; padding: 10px 20px; margin-bottom: 30px; color: #fff; font-weight: 500; background: #FF9800; border-radius: 2px; margin-right: 10px; font-size:18px; }
    .psprev-adm-notice-wp-rating .psprev-adm-notice-link span { display: inline-block; text-decoration: none; margin-right: 10px; }
    .psprev-adm-notice-wp-rating .psprev-adm-notice-link:hover { color: #fff; background: rgba(52,152,219,1); }
    .psprev-adm-notice-wp-rating .dashicons-star-filled { position: relative; top: 1px; width: 15px; height: 15px; font-size: 15px; }
    .notice-dismiss-psp { postition:relative !important; }
        </style>";

}

function plugSSfP_display_admin_notice() {
 
    $cfb_install_link =  esc_url( network_admin_url('plugin-install.php?tab=plugin-information&plugin=' . 'page-builder-add' . '&TB_iframe=true&width=100%&height=800' ) );
 
    $nobugurl = get_admin_url() . '?mpspdontbug=1';

    $install_date = get_option( 'plugSSfP_activation_date' );
 
    echo '<div class="psprev-adm-notice psprev-adm-notice-wp-rating notice">';

    echo '<div style="width:65%; display: inline-block;" ><br> <h3><b> You need to fix your social feed! </b></h3>';

    echo '<p style="font-size:16px;"> Facebook has made changes to its api which blocked facebook & instagram feeds from working. To fix please go to your edit feed page and follow new access token instructions.  </p>
        <a href="' . admin_url( 'edit.php?post_type=wssf_social_feed' ) . '" type="button" class="notice-link-feeds"> Open Feeds Page </a>
        <br><br><br>
        <a href="' . $nobugurl . '" type="button" class="notice-dismiss-psp"><span class="dashicons dashicons-no-alt"></span> Dismiss this notice.</a>
        <br><br><br>

         </div>';

    echo '<div style="width:18%; display: inline-block; float: right; margin-top: 45px;">

        <img src="'.SMUZSF_PLUGIN_URL.'/admin/ui/images/warning.png'.'" />

        </div>';
        
    echo "</div>";

    echo "<style>
        .psprev-adm-notice-activation { border-color: #41c4ff; }
        .psprev-adm-notice-activation h4 { font-size: 1.05em; }
        .psprev-adm-notice-activation a { text-decoration: none; }
        .psprev-adm-notice-activation .psprev-adm-notice-link { display: inline-block; padding: 6px 8px; margin-bottom: 10px; color: rgba(52,152,219,1); font-weight: 500; background: #e9e9e9; border-radius: 2px; margin-right: 10px; }
        .psprev-adm-notice-activation .psprev-adm-notice-link span { display: inline-block; text-decoration: none; margin-right: 10px; }
        .psprev-adm-notice-activation .psprev-adm-notice-link:hover { color: #fff; background:#41c4ff; }

        .psprev-adm-notice-wp-rating { border-color: #F44336; }
        .psprev-adm-notice-wp-rating h4 { font-size: 1.05em; }
        .psprev-adm-notice-wp-rating p:last-of-type { margin-bottom: 20px; }
        .psprev-adm-notice-wp-rating a { text-decoration: none; }
        .psprev-adm-notice-wp-rating .psprev-adm-notice-link { display: inline-block; padding: 10px 20px; margin-bottom: 30px; color: #fff; font-weight: 500; background: #FF9800; border-radius: 2px; margin-right: 10px; font-size:18px; }
        .psprev-adm-notice-wp-rating .psprev-adm-notice-link span { display: inline-block; text-decoration: none; margin-right: 10px; }
        .psprev-adm-notice-wp-rating .psprev-adm-notice-link:hover { color: #fff; background: rgba(52,152,219,1); }
        .psprev-adm-notice-wp-rating .dashicons-star-filled { position: relative; top: 1px; width: 15px; height: 15px; font-size: 15px; }
        .notice-dismiss-psp { postition:relative !important; font-size:14px; padding:5px 15px; background:#eeeeee; border-radius:5px; }
        .notice-link-feeds{ postition:relative !important; font-size:14px; padding:5px 15px; background:#2196f3; color:#fff; border-radius:5px; }
        .notice-link-feeds:hover{ color:#e3e3e3; }
    </style>";


}

function plugSSfP_set_no_bug() {
 
    $nobug = "";
 
    if ( isset( $_GET['mpspdontbug'] ) ) {
        $nobug = esc_attr( $_GET['mpspdontbug'] );
    }
 
    if ( 1 == $nobug ) {
 
        add_option( 'plugSFP_hide_noticeSocialFeedFixed', TRUE );
 
    }
 
} add_action( 'admin_init', 'plugSSfP_set_no_bug', 5 );

?>