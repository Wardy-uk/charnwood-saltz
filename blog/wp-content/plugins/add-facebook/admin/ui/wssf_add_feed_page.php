<?php

if ( ! defined( 'ABSPATH' ) ) exit;

 wp_nonce_field( 'wssf_ui_meta_box_nonce', 'wssf_meta_box_nonce' );
$CPostId = $post->ID;
?>

<div id="wssf_notice_box">
  <p class="notice_p">Use this shortcode to display your social feed : <span id='shortcode'>[socialfeed id='<?php echo $CPostId; ?>']</span></p>
</div>
  <div class='wrap'> 
   
       <div class="accordion">

    <div class="accordion-section">
        <a class="accordion-section-title active" href="#accordion-1">Social Media</a>
        
        <div id="accordion-1" class="accordion-section-content open" style="display:block;">
            <div class="container">

  <ul class="tabs">
    <li class="tab-link current" data-tab="tab-1"><img src='<?php echo plugins_url( '/images/facebook.png', __FILE__); ?>' /></li>
  </ul>

  <div id="tab-1" class="tab-content current">
   <table class="form-table">

   <tr valign='top'>
            <th scope='row'><?php _e('Enable Facebook');?></th>
            <td>
               <div class="onoffswitch">
                     <input type="checkbox" name="wssf_social_fb_enable" class="onoffswitch-checkbox"  id="myonoffswitchfb" value='1'<?php checked(1, get_post_meta($post->ID,'wssf_social_fb_enable',true)); ?> />
                     <label class="onoffswitch-label" for="myonoffswitchfb">
                     <span class="onoffswitch-inner"></span>
                     <span class="onoffswitch-switch"></span>
                     </label>
                    </div>
                    <p class="description"><?php _e( 'Enable it to show Facebook feeds'); ?></p>

           </td>
          </tr>

      <tr valign="top">
        <th scope="row"><?php _e(' Facebook Profile/Page Id'); ?></th>
        <td><label for="wssf_fb_profile_id">
          <input placeholder="Enter Facebook Profile/Page Id" type="text" id="wssf_fb_profile_id"  name="wssf_fb_profile_id" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_fb_profile_id' , true ); ?>"/>
          <p class="description"><?php _e( ''); ?></p>
          </label>
        </td>
      </tr>

      <!-- <tr valign="top">
        <th scope="row"><?php _e('Facebook App Id'); ?></th>
        <td><label for="wssf_fb_app_id">
          <input placeholder="Enter Facebook app Id" type="text" id="wssf_fb_app_id"  name="wssf_fb_app_id" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_fb_app_id',true ); ?>"/>
          <p class="description"><?php _e( 'How to Get Facebook app Id <a href="http://www.shoutmeloud.com/get-facebook-app-id-secret-key.html" target="_blank">  Click Here </a>'); ?></p>
          </label>
        </td>
      </tr>



       <tr valign="top">
        <th scope="row"><?php _e('Facebook App Secret'); ?></th>
        <td><label for="wssf_fb_app_id">
          <input placeholder="Enter Facebook Secret Key" type="text" id="wssf_fb_app_secret"  name="wssf_fb_app_secret" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_fb_app_secret',true ); ?>"/>
          <p class="description"><?php _e( 'How to Get Facebook Secret Key <a href="http://www.shoutmeloud.com/get-facebook-app-id-secret-key.html" target="_blank">  Click Here </a>'); ?></p>
          </label>
        </td>
      </tr> -->

      <tr valign="top">
        <th scope="row"><?php _e('Facebook Access Token'); ?></th>
        <td><label for="wssf_facebook_access_token_temp">
          <input placeholder="Enter Facebook Access Code" type="text" id="wssf_facebook_access_token_temp"  name="wssf_facebook_access_token_temp" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_facebook_access_token_temp',true ); ?>"/>
          <p class="description"><?php _e( 'How to Get Facebook Access Token <a href="https://www.youtube.com/watch?v=bvUuDnfrHuY" target="_blank">  Click Here </a>'); ?></p>
          </label>
        </td>
      </tr>

        <tr valign="top">
        <th scope="row"><?php _e('Results Per Feed'); ?></th>
        <td><label for="wssf_results_per_feed_fb">
          <input placeholder="Enter results per feed" type="number" id="wssf_results_per_feed_fb"  name="wssf_results_per_feed_fb" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_results_per_feed_fb' ,true); ?>"/>
          </label>
          <p class="description"><?php _e( 'How many posts to show in a feed'); ?></p>

        </td>
      </tr>


    </table>
  </div>
</div><!-- container -->
        </div><!--end .accordion-section-content-->
    </div><!--end .accordion-section-->

     <div class="accordion-section">
        <a class="accordion-section-title active" href="#accordion-2">Social Feed Settings</a>
        
        <div id="accordion-2" class="accordion-section-content open" style="display:block;">
        
         <table class="form-table">

            <tr valign='top'>
            <th scope='row'><?php _e('Enable Feed Settings');?></th>
            <td>
               <div class="onoffswitch">
                     <input type="checkbox" name="wssf_enable_feed" class="onoffswitch-checkbox"  id="myonoffswitch" value='1'<?php checked(1, get_post_meta($post->ID,'wssf_enable_feed',true)); ?> />
                     <label class="onoffswitch-label" for="myonoffswitch">
                     <span class="onoffswitch-inner"></span>
                     <span class="onoffswitch-switch"></span>
                     </label>
                    </div>
                    <p class="description"><?php _e( 'Enable it to use feeds settings'); ?></p>

           </td>
          </tr>

           

              <tr valign="top">
        <th scope="row"><?php _e('Set Feed Container Width'); ?></th>
        <td><label for="wssf_feed_width">
          <input placeholder="Set width for feed"  disabled  type="number" id="wssf_feed_width"  name="" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_feed_width' ,true); ?>"/> px
          <p class="description"><?php _e( 'Set the container width for the feed   <a href="http://web-settler.com/wordpress-facebook-feed/">Buy Premium Version</a> </b> '); ?></p>
          </label>
        </td>
      </tr>



          <tr valign='top'>
            <th scope='row'><?php _e('Hide Text Content');?></th>
            <td>
               <div class="onoffswitch">
                     <input type="checkbox" disabled name="" class="onoffswitch-checkbox"  id="myonoffswitch3" value='1'<?php checked(1, get_post_meta($post->ID,'wssf_hide_text_content',true)); ?> />
                     <label class="onoffswitch-label" for="myonoffswitch3">
                     <span class="onoffswitch-inner"></span>
                     <span class="onoffswitch-switch"></span>
                     </label>
                    </div>
                    <p class="description"><?php _e( 'Hide text content of the feed <a href="http://web-settler.com/wordpress-facebook-feed/">Buy Premium Version</a> </b>'); ?></p>
           </td>
          </tr>


          <tr valign='top'>
            <th scope='row'><?php _e('Enable / Disable Links to Post');?></th>
            <td>
               <div class="onoffswitch">
                     <input type="checkbox" disabled name="" class="onoffswitch-checkbox"  id="myonoffswitch4" value='1'<?php checked(1, get_post_meta($post->ID,'wssf_enable_links_to_post',true)); ?> />
                     <label class="onoffswitch-label" for="myonoffswitch4">
                     <span class="onoffswitch-inner"></span>
                     <span class="onoffswitch-switch"></span>
                     </label>
                    </div>
                    <p class="description"><?php _e('Show hide links to post in feed <a href="http://web-settler.com/wordpress-facebook-feed/">Buy Premium Version</a> </b>'); ?></p>

           </td>
          </tr>


          <tr valign='top'>
            <th scope='row'><?php _e('Select Layout');?></th>
            <td>


              <div  style="float:left; border: 5px solid #2196F3; border-radius: 5px;">
              <p class="pp"style='padding:0px 0px 0px 20px ;'>Default  <input type="radio" name="wssf_select_layout" id="layout"  value="layout" checked="checked" <?php  checked('layout', get_post_meta($post->ID,'wssf_select_layout',true)); true ?> /></p> 
              <label for='layout'><img style='padding:0px 30px 30px 0px' width='300px' height ='400px'  src='<?php echo plugins_url( '/images/default.png', __FILE__); ?>' /> </label>
              </div>


              <div  style="float:left;">
              <p class="pp"style='padding:0px 0px 0px 20px ;'>Layout 1--<a href="http://web-settler.com/wordpress-facebook-feed/">Buy Premium Version</a> </b> <input  disabled type="radio" id="layout1" <?php  checked('layout1', get_post_meta($post->ID,'wssf_select_layout',true)); true ?> /></p>
              <label for='layout1'><img style='padding:0px 30px 30px 0px' width='300px' height ='400px' src='<?php echo plugins_url( '/images/layout1.png', __FILE__); ?>' /> </label>        
              </div>

              <br>
              <br>


              <div  style="float:left;">
              <p class="pp"style='padding:0px 0px 0px 20px ;'>Layout 2--<a href="http://web-settler.com/wordpress-facebook-feed/">Buy Premium Version</a> </b> <input  disabled type="radio" name="" id="layout2"  <?php  checked('layout2', get_post_meta($post->ID,'wssf_select_layout',true)); true ?> /></p>
              <label for='layout2'><img style='padding:0px 30px 30px 0px'  width='300px' height ='400px' src='<?php echo plugins_url( '/images/layout2.png', __FILE__); ?>' /> </label>
              </div>


              <div  style="float:left;">
              <p class="pp"style='padding:0px 0px 0px 20px ;'>Layout 3-- <a href="http://web-settler.com/wordpress-facebook-feed/">Buy Premium Version</a> </b> <input  disabled type="radio" name="" id="layout3" <?php  checked('layout3', get_post_meta($post->ID,'wssf_select_layout',true)); true ?> /></p>
              <label for='layout3'><img style='padding:0px 30px 30px 0px' width='300px' height ='400px' src='<?php echo plugins_url( '/images/layout3.png', __FILE__); ?>' /> </label> 
              </div>

              <br>
              <br>

                <div  style="float:left;">
              <p class="pp"style='padding:0px 0px 0px 20px ;'>Layout 4-- <a href="http://web-settler.com/wordpress-facebook-feed/">Buy Premium Version</a> </b> <input  disabled type="radio" name="" id="layout3" <?php  checked('layout3', get_post_meta($post->ID,'wssf_select_layout',true)); true ?> /></p>
              <label for='layout3'><img style='padding:0px 30px 30px 0px' width='300px' height ='400px' src='<?php echo plugins_url( '/images/layout4.png', __FILE__); ?>' /> </label> 
              </div>

              <div  style="float:left;">
              <p class="pp"style='padding:0px 0px 0px 20px ;'>Layout 4-- <a href="http://web-settler.com/wordpress-facebook-feed/">Buy Premium Version</a> </b> <input  disabled type="radio" name="" id="layout3" <?php  checked('layout3', get_post_meta($post->ID,'wssf_select_layout',true)); true ?> /></p>
              <label for='layout3'><img style='padding:0px 30px 30px 0px' width='300px' height ='400px' src='<?php echo plugins_url( '/images/layout5.png', __FILE__); ?>' /> </label> 
              </div>

              </td>
            </tr>


            </table>
            
        </div><!--end .accordion-section-content-->
    </div><!--end .accordion-section-->

<div class="accordion-section">
        <a class="accordion-section-title active" href="#accordion-3">Social Feed Design Settings</a>
        
        <div id="accordion-3" class="accordion-section-content open" style="display:block;">
            <table class="form-table">
        
        <tr valign="top">
        <th scope="row"><?php _e('Background Color'); ?></th>
        <td><label for="wssf_bg_color">
          <input type="color" disabled id="wssf_bg_color" class=""   value="<?php echo get_post_meta($post->ID,'wssf_bg_color',true); ?>"/>
          <p class="description"><?php _e( 'Select Background Color for feed <a href="http://web-settler.com/wordpress-facebook-feed/">Buy Premium Version</a> </b>'); ?></p>
          </label>
        </td>
      </tr>


      
<tr valign="top">
        <th scope="row"><?php _e('Text Color'); ?></th>
        <td><label for="wssf_text_color">
          <input  disabled type="color" id="wssf_text_color" class=""  value="<?php echo get_post_meta($post->ID,'wssf_text_color',true); ?>"/>
          <p class="description"><?php _e( 'Select Text Color for feed <a href="http://web-settler.com/wordpress-facebook-feed/">Buy Premium Version</a> </b>'); ?></p>
          </label>
        </td>
      </tr>



      <tr valign="top">
        <th scope="row"><?php _e('Text Font'); ?></th>
        <td><label for="wssf_select_gfont">
          <input id='wssf_font' type="text" disabled   name=""  class="wssf_ffft" value="<?php echo get_post_meta($post->ID,'wssf_select_gfont',true); ?>"/>
          </label>
          <p class="description"><?php _e( 'Change font for the feeds <a href="http://web-settler.com/wordpress-facebook-feed/">Buy Premium Version</a> </b>'); ?></p>

        </td>
      </tr>


      <tr valign='top'>
            <th scope='row'><?php _e('Show Posted On Date');?></th>
            <td>
               <div class="onoffswitch">
                     <input type="checkbox" name="wssf_enable_post_date" class="onoffswitch-checkbox"  id="myonoffswitch5" value='1'<?php checked(1, get_post_meta($post->ID,'wssf_enable_post_date',true)); ?> />
                     <label class="onoffswitch-label" for="myonoffswitch5">
                     <span class="onoffswitch-inner"></span>
                     <span class="onoffswitch-switch"></span>
                     </label>
                     </div>
                     <p class="description"><?php _e( 'Show posted on date for the feeds'); ?></p>
           </td>
          </tr>


      <tr valign='top'>
            <th scope='row'><?php _e('Show Social Media Icon');?></th>
            <td>
               <div class="onoffswitch">
                     <input type="checkbox" name="wssf_enable_social_icon" class="onoffswitch-checkbox"  id="myonoffswitch6" value='1'<?php checked(1, get_post_meta($post->ID,'wssf_enable_social_icon',true)); ?> />
                     <label class="onoffswitch-label" for="myonoffswitch6">
                     <span class="onoffswitch-inner"></span>
                     <span class="onoffswitch-switch"></span>
                     </label>
                    </div>
                    <p class="description"><?php _e( 'Display social icons of feeds '); ?></p>
           </td>
          </tr>


          <tr valign='top'>
            <th scope='row'><?php _e('Show Display Picture');?></th>
            <td>
               <div class="onoffswitch">
                     <input type="checkbox" name="wssf_enable_display_picture" class="onoffswitch-checkbox"  id="myonoffswitch7" value='1'<?php checked(1, get_post_meta($post->ID,'wssf_enable_display_picture',true)); ?> />
                     <label class="onoffswitch-label" for="myonoffswitch7">
                     <span class="onoffswitch-inner"></span>
                     <span class="onoffswitch-switch"></span>
                     </label>
                    </div>
                    <p class="description"><?php _e( 'Show/Hide display picture for  the feed '); ?></p>
           </td>
          </tr>

      </table>
        </div><!--end .accordion-section-content-->
    </div><!--end .accordion-section-->


</div><!--end .accordion-->

<?php submit_button( 'Update'); ?>
</div>