<?php
if ( ! defined( 'ABSPATH' ) ) exit;
//////////// META BOXES TYPE STARTS HERE!!!!! //////////////////
                                                        ///////
                                                        //////
                                                        /////
//////////// META BOXES TYPE STARTS HERE!!!!! //////////////


add_action('save_post','wssf_save_metabox_data');

  function wssf_save_metabox_data($post_id){


  	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
     
    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['wssf_meta_box_nonce'] ) || !wp_verify_nonce( $_POST['wssf_meta_box_nonce'], 'wssf_ui_meta_box_nonce' ) ) return;
     
    if ( ! current_user_can( 'manage_options' ) )
        return;
     
    // now we can actually save the data
     
    // Make sure your data is set before trying to save it

    if( isset( $_POST['smf_example'] ) )
        update_post_meta( $post_id, 'smf_example', sanitize_text_field( $_POST['smf_example'] ) );

    if( isset( $_POST['wssf_facebook_access_token_temp'] ) )
        update_post_meta( $post_id, 'wssf_facebook_access_token_temp', sanitize_text_field( $_POST['wssf_facebook_access_token_temp'] ) );

    if( isset( $_POST['wssf_fb_profile_id'] ) )
        update_post_meta( $post_id, 'wssf_fb_profile_id', sanitize_text_field( $_POST['wssf_fb_profile_id'] ) );

    if( isset( $_POST['wssf_fb_app_id'] ) )
        update_post_meta( $post_id, 'wssf_fb_app_id', sanitize_text_field( $_POST['wssf_fb_app_id'] ) );

    if( isset( $_POST['wssf_fb_app_secret'] ) )
        update_post_meta( $post_id, 'wssf_fb_app_secret', sanitize_text_field( $_POST['wssf_fb_app_secret'] ) );

    if( isset( $_POST['wssf_tw_username'] ) )
        update_post_meta( $post_id, 'wssf_tw_username', sanitize_text_field( $_POST['wssf_tw_username'] ) );

    if( isset( $_POST['wssf_tw_consumer_key'] ) )
        update_post_meta( $post_id, 'wssf_tw_consumer_key', sanitize_text_field( $_POST['wssf_tw_consumer_key'] ) );

    if( isset( $_POST['wssf_tw_consumer_secret'] ) )
        update_post_meta( $post_id, 'wssf_tw_consumer_secret', sanitize_text_field( $_POST['wssf_tw_consumer_secret'] ) );

    if( isset( $_POST['wssf_gplus_username'] ) )
        update_post_meta( $post_id, 'wssf_gplus_username', sanitize_text_field( $_POST['wssf_gplus_username'] ) );

    if( isset( $_POST['wssf_linkedin_compny_id'] ) )
        update_post_meta( $post_id, 'wssf_linkedin_compny_id', sanitize_text_field( $_POST['wssf_linkedin_compny_id'] ) );

    if( isset( $_POST['wssf_insta_username'] ) )
        update_post_meta( $post_id, 'wssf_insta_username', sanitize_text_field( $_POST['wssf_insta_username'] ) );

    if( isset( $_POST['wssf_soundcloud_username'] ) )
        update_post_meta( $post_id, 'wssf_soundcloud_username', sanitize_text_field( $_POST['wssf_soundcloud_username'] ) );

    if( isset( $_POST['wssf_soundcloud_playlist_id'] ) )
        update_post_meta( $post_id, 'wssf_soundcloud_playlist_id', sanitize_text_field( $_POST['wssf_soundcloud_playlist_id'] ) );

    if( isset( $_POST['wssf_wp_content_type'] ) )
        update_post_meta( $post_id, 'wssf_wp_content_type', sanitize_text_field( $_POST['wssf_wp_content_type'] ) );

    if( isset( $_POST['wssf_wp_filter'] ) )
        update_post_meta( $post_id, 'wssf_wp_filter', sanitize_text_field( $_POST['wssf_wp_filter'] ) );

    if( isset( $_POST['wssf_wp_custom_post'] ) )
        update_post_meta( $post_id, 'wssf_wp_custom_post', sanitize_text_field( $_POST['wssf_wp_custom_post'] ) );

    if( isset( $_POST['wssf_wp_post_id_comment'] ) )
        update_post_meta( $post_id, 'wssf_wp_post_id_comment', sanitize_text_field( $_POST['wssf_wp_post_id_comment'] ) );

    if( isset( $_POST['wssf_pin_profile_id'] ) )
        update_post_meta( $post_id, 'wssf_pin_profile_id', sanitize_text_field( $_POST['wssf_pin_profile_id'] ) );

    if( isset( $_POST['wssf_vimeo_username'] ) )
        update_post_meta( $post_id, 'wssf_vimeo_username', sanitize_text_field( $_POST['wssf_vimeo_username'] ) );

    if( isset( $_POST['wssf_youtube_channel_id'] ) )
        update_post_meta( $post_id, 'wssf_youtube_channel_id', sanitize_text_field( $_POST['wssf_youtube_channel_id'] ) );

    if( isset( $_POST['wssf_enable_feed'] ) )
        update_post_meta( $post_id, 'wssf_enable_feed', sanitize_text_field( $_POST['wssf_enable_feed'] ) );
    else
        update_post_meta( $post_id, 'wssf_enable_feed', false );

    if( isset( $_POST['wssf_results_per_feed'] ) )
        update_post_meta( $post_id, 'wssf_results_per_feed', sanitize_text_field( $_POST['wssf_results_per_feed'] ) );

    if( isset( $_POST['wssf_link_in_new_tab'] ) )
        update_post_meta( $post_id, 'wssf_link_in_new_tab', sanitize_text_field( $_POST['wssf_link_in_new_tab'] ) );

    if( isset( $_POST['wssf_enable_links_to_post'] ) )
        update_post_meta( $post_id, 'wssf_enable_links_to_post', sanitize_text_field( $_POST['wssf_enable_links_to_post'] ) );
    else
        update_post_meta( $post_id, 'wssf_enable_links_to_post', false );

    if( isset( $_POST['wssf_hide_text_content'] ) )
        update_post_meta( $post_id, 'wssf_hide_text_content', sanitize_text_field( $_POST['wssf_hide_text_content'] ) );
    else
        update_post_meta( $post_id, 'wssf_hide_text_content', false );

    if( isset( $_POST['wssf_bg_color'] ) )
        update_post_meta( $post_id, 'wssf_bg_color', sanitize_text_field( $_POST['wssf_bg_color'] ) );

    if( isset( $_POST['wssf_text_color'] ) )
        update_post_meta( $post_id, 'wssf_text_color', sanitize_text_field( $_POST['wssf_text_color'] ) );

    if( isset( $_POST['wssf_enable_post_date'] ) )
        update_post_meta( $post_id, 'wssf_enable_post_date', sanitize_text_field( $_POST['wssf_enable_post_date'] ) );
    else
        update_post_meta( $post_id, 'wssf_enable_post_date', false );


    if( isset( $_POST['wssf_enable_social_icon'] ) )
        update_post_meta( $post_id, 'wssf_enable_social_icon', sanitize_text_field( $_POST['wssf_enable_social_icon'] ) );
    else
        update_post_meta( $post_id, 'wssf_enable_social_icon', false );

    if( isset( $_POST['wssf_enable_display_picture'] ) )
        update_post_meta( $post_id, 'wssf_enable_display_picture', sanitize_text_field( $_POST['wssf_enable_display_picture'] ) );
    else
        update_post_meta( $post_id, 'wssf_enable_display_picture', false );

    if( isset( $_POST['wssf_feed_width'] ) )
        update_post_meta( $post_id, 'wssf_feed_width', sanitize_text_field( $_POST['wssf_feed_width'] ) );

    if( isset( $_POST['wssf_social_fb_enable'] ) )
        update_post_meta( $post_id, 'wssf_social_fb_enable', sanitize_text_field( $_POST['wssf_social_fb_enable'] ) );
    else
        update_post_meta( $post_id, 'wssf_social_fb_enable', false );

    if( isset( $_POST['wssf_social_tw_enable'] ) )
        update_post_meta( $post_id, 'wssf_social_tw_enable', sanitize_text_field( $_POST['wssf_social_tw_enable'] ) );
    else
        update_post_meta( $post_id, 'wssf_social_tw_enable', false );

    if( isset( $_POST['wssf_social_insta_enable'] ) )
        update_post_meta( $post_id, 'wssf_social_insta_enable', sanitize_text_field( $_POST['wssf_social_insta_enable'] ) );
    else
        update_post_meta( $post_id, 'wssf_social_insta_enable', false );

    if( isset( $_POST['wssf_social_pin_enable'] ) )
        update_post_meta( $post_id, 'wssf_social_pin_enable', sanitize_text_field( $_POST['wssf_social_pin_enable'] ) );
    else
        update_post_meta( $post_id, 'wssf_social_pin_enable', false );

    if( isset( $_POST['wssf_social_gplus_enable'] ) )
        update_post_meta( $post_id, 'wssf_social_gplus_enable', sanitize_text_field( $_POST['wssf_social_gplus_enable'] ) );

    if( isset( $_POST['wssf_results_per_feed_fb'] ) )
        update_post_meta( $post_id, 'wssf_results_per_feed_fb', sanitize_text_field( $_POST['wssf_results_per_feed_fb'] ) );

    if( isset( $_POST['wssf_results_per_feed_tw'] ) )
        update_post_meta( $post_id, 'wssf_results_per_feed_tw', sanitize_text_field( $_POST['wssf_results_per_feed_tw'] ) );


if( isset( $_POST['wssf_results_per_feed_gplus'] ) )
        update_post_meta( $post_id, 'wssf_results_per_feed_gplus', sanitize_text_field( $_POST['wssf_results_per_feed_gplus'] ) );


if( isset( $_POST['wssf_results_per_feed_insta'] ) )
        update_post_meta( $post_id, 'wssf_results_per_feed_insta', sanitize_text_field( $_POST['wssf_results_per_feed_insta'] ) );

    if( isset( $_POST['wssf_results_per_feed_pinit'] ) )
        update_post_meta( $post_id, 'wssf_results_per_feed_pinit', sanitize_text_field( $_POST['wssf_results_per_feed_pinit'] ) );

    if( isset( $_POST['wssf_words_limit_fb'] ) )
        update_post_meta( $post_id, 'wssf_words_limit_fb', sanitize_text_field( $_POST['wssf_words_limit_fb'] ) );

    if( isset( $_POST['wssf_words_limit_tw'] ) )
        update_post_meta( $post_id, 'wssf_words_limit_tw', sanitize_text_field( $_POST['wssf_words_limit_tw'] ) );

    if( isset( $_POST['wssf_words_limit_insta'] ) )
        update_post_meta( $post_id, 'wssf_words_limit_insta', sanitize_text_field( $_POST['wssf_words_limit_insta'] ) );

    if( isset( $_POST['wssf_words_limit_pinit'] ) )
        update_post_meta( $post_id, 'wssf_words_limit_pinit', sanitize_text_field( $_POST['wssf_words_limit_pinit'] ) );

    if( isset( $_POST['wssf_words_limit_gplus'] ) )
        update_post_meta( $post_id, 'wssf_words_limit_gplus', sanitize_text_field( $_POST['wssf_words_limit_gplus'] ) );

    if( isset( $_POST['wssf_select_layout'] ) )
        update_post_meta( $post_id, 'wssf_select_layout', sanitize_text_field( $_POST['wssf_select_layout'] ) );

    if( isset( $_POST['wssf_select_gfont'] ) )
        update_post_meta( $post_id, 'wssf_select_gfont', sanitize_text_field( $_POST['wssf_select_gfont'] ) );

    if ( isseT( $_POST['wssf_instagram_token'] ) )
        update_post_meta( $post_id, 'wssf_instagram_token', sanitize_text_field( $_POST['wssf_instagram_token'] ) );



  }