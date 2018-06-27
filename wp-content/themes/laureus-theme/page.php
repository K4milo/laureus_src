<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post();?>

    <div class="single-page">
        <div class="container-fluid nopadding">
            <div class="row">
                
                <?php 

                //Top Header
                get_template_part('includes/common/common','topbar'); 
            
                //About events

                ?>

                <img class="img-responsive" src="<?php the_post_thumbnail_url('full'); ?>" alt="">

                <div class="container-fluid nopadding">
                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12 nopadding">

                            <div class="row-full title-full-container ">
                                <?php the_title(); ?>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 nopadding bg_cause">

                            <div class="event_beneficiaries">

                                <div class="col-md-12 nopadding container_event_beneficiaries">

                                    <div class="col-md-12 col-sm-12 col-sx-12 nopadding info_event_beneficiaries">
                                        <?php the_content(); ?>
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

<?php endwhile; endif; ?>

<?php get_footer(); ?>