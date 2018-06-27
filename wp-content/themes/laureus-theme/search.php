<?php get_header(); ?>

    <div class="cause privacy_policy search-results">
        <div class="container-fluid nopadding">
            <div class="row">
                
                <?php 

                //Top Header
                get_template_part('includes/common/common','topbar'); 
            
                //About events

                ?>

                <img class="img-responsive" src="<?php bloginfo('template_url') ?>/images/bg_cause_banner.jpg" alt="Search Results">

                <div class="container-fluid nopadding">
                    <div class="row">

                        <div class="col-md-12 col-sm-12 nopadding">

                            <div class="col-md-12 col-sm-12 col-xs-12 nopadding cause_info search_info">

                                <div class="search_info_container">

                                    <div class="title_cause_info">
                                        <h2><?php _e('Search Results for:', 'rbc'); ?> &ldquo;<?php the_search_query(); ?>&rdquo;</h2>
                                    </div> 

                                </div>  

                            </div>

                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 nopadding bg_cause">

                            <div class="event_beneficiaries">

                                <div class="col-md-12 nopadding container_event_beneficiaries">

                                    <div class="col-md-12 col-sm-12 col-sx-12 nopadding search_items__loop">
                                        <?php 

                                          //Loop Sponsors
                                          get_template_part('includes/loops/content','search'); 

                                         ?>
                                    </div>

                                </div>
            
                            </div>

                        </div>  

                        <?php 
        
                        //Prefooter
                        get_template_part('includes/common/common','prefooter'); 

                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>