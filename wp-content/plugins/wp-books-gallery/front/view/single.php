
<?php  
echo '<script type="text/JavaScript">  
  function openFn() {
            const over =
                document.getElementById(
                    "overlay"
                );
            const popDialog =
                document.getElementById(
                    "popupDialog"
                );
            over.classList.toggle("hidden");
            popDialog.classList.toggle(
                "hidden"
            );
            popDialog.style.opacity =
                popDialog.style.opacity ===
                    "1"
                    ? "0"
                    : "1";
        }
     </script>' 
; 
?> 
     
     </script>
<?php

if ( !defined( 'ABSPATH' ) ) {
    exit;
}


; 
// loading header
include 'single/header.php';
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        ?>
        <div id="post-<?php 
        the_ID();
        ?>" <?php 
        post_class( 'wbg-book-single-section clearfix' );
        ?>>

            <div class="wbg-details-column wbg-details-wrapper">

                <div class="wbg-details-book-info">
                    
                    <?php 
        include 'single/before-title.php';
        ?>

                    <div class="wbg-details-summary">
                    
                        <h1 class="wbg-details-book-title"><?php 
        the_title();
        ?></h1>
                        
        <?php 
        include 'single/before-tags.php';
        if ( !$wbg_details_hide_tag ) {
            $wbgPostTags = get_the_tags();
            $wbgTagsSeparator = ' |';
            $wgbOutput = '';
            if ( !empty( $wbgPostTags ) ) {
                $wgbOutput .= "<span><b><i class='fa-solid fa-tags'></i>&nbsp;" . esc_attr( $wbg_details_tag_label ) . ":</b>";
                foreach ( $wbgPostTags as $tag ) {
                    $wgbOutput .= '&nbsp;<a href="' . get_tag_link( $tag->term_id ) . '" class="wbg-single-link">' . $tag->name . '</a>' . $wbgTagsSeparator;
                }
                $wgbOutput .= '</span>';
                echo trim( $wgbOutput, $wbgTagsSeparator );
            }
        }
        ?>
                        <span class="wbg-single-button-container">
                            <?php 
        // Download Button
        if ( !$wbg_display_download_button ) {
            if ( !empty( $wbgLink ) ) {
                $download_icon = ( '' !== $wbg_download_btn_icon ? $wbg_download_btn_icon : 'fa-solid fa-download' );
               
                   
                       ?>
                                                <a href="<?php 
                            echo esc_url( $wbgLink );
                            ?>" class="button wbg-btn" <?php 
                            esc_attr_e( $wbg_dwnld_btn_url_same_tab );
                            ?>>
                                                    <i class="<?php 
                            esc_attr_e( $download_icon );
                            ?>"></i>&nbsp;Download&nbsp
                                                </a>
                                                <?php 
                   
                
            }
        }
        ?>
                        </span>
						
						
						<!-----------testing---------------->
						<span class="wbg-single-button-container">
                            <?php 
        // Preview Button
        if ( !$wbg_display_download_button ) {
            if ( !empty( $wbgLink ) ) {
                $preview_icon = ('fa-solid fa-book-open');
                        
                        ?>
                                           <div id="popupContainer"> <a onclick="openFn()" class="button wbg-btn" >
                                                <i class="<?php 
                        esc_attr_e($preview_icon );
                        ?>" ) ></i>&nbsp;Read Now
                        
                                            </a>
											   <div id="overlay" class="hidden"></div>
        <div id="popupDialog" class="hidden">
            <p>
              <div class="wbg-details-description" id="divDesc">
                    <?php 
        if ( $wbg_display_description ) {
            if ( !empty( get_the_content() ) ) {
                ?>
                            <div class="wbg-details-description-title">
                               <b><i class="fa fa-book-open" aria-hidden="true"></i>&nbsp;
							  <?php 
                esc_html_e( $wbg_description_label );
                ?>:</b> 
                                <hr>
                            </div>
                            <div class="wbg-details-description-content">
                                <?php 
                the_content();
                ?>
                            </div>
                            <?php 
            }
        }
        ?>
                </div>
            </p>
            
        </div>
											</div>
                                            <?php 
                    
                
            }
        }
							?>
                        </span>
						<span class="wbg-single-button-container">
                <?php 
        // Back Button
        if ( !$wbg_hide_back_button ) {
            
            if ( '' !== $wbg_gallery_page_slug ) {
                ?>
                        <a href="<?php 
                echo esc_url( home_url( '/' . $wbg_gallery_page_slug ) );
                ?>" class="button wbg-btn-back wbg-btn">
                            <i class="fa fa-angle-double-left" aria-hidden="true"></i>&nbsp;&nbsp;<?php 
                esc_html_e( $wbg_back_button_label );
                ?>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </a>
                        <?php 
            }
            if ( '' === $wbg_gallery_page_slug ) {
                ?>
                        <a href="#" onclick="javascript:history.back();" class="button wbg-btn-back">
                            <i class="fa fa-angle-double-left" aria-hidden="true"></i>&nbsp;&nbsp;<?php 
                esc_html_e( $wbg_back_button_label );
                ?>
                        </a>
                        <?php 
            }
        }
        ?>
</span>
						<!------------testing----------------->
						
						

                    </div>

                </div>

                <?php 
        ?>

     <!----------back button------------------>           
		
	<!------------------------------>
            </div>
            <?php 
        // Sidebar
        if ( $wbg_display_sidebar ) {
            ?>
                <div class="wbg-details-column wbg-sidebar-right">
                    <?php 
            if ( function_exists( 'register_sidebar' ) ) {
                dynamic_sidebar( 'Books Gallery Sidebar' );
            }
            ?>
                </div>
                <?php 
        }
        ?>
        </div>
		
	

        <?php 
    }
    // while ( have_posts() ) {
}

// if ( have_posts() ) {
// Action After Main Wrapper

	
do_action( 'wbg_front_single_parent_section_after' );
get_footer();

