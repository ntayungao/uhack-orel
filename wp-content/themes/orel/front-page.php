<?php
get_header();
?>

<?php //get_template_part('template-parts/main', 'slider'); ?>

<div class="featured-section">
    <div id="mainSlider" class="carousel slide" date-ride="carousel">
        <div class="home-featured-controllers">
            <ol class="carousel-indicators">
                <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                <li data-target="#mainSlider" data-slide-to="1"></li>
                <li data-target="#mainSlider" data-slide-to="2"></li>
                <li data-target="#mainSlider" data-slide-to="3"></li>            
            </ol>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item carousel-p-b active">
                <div class="carousel-background" style="background-image: url(<?php echo get_theme_file_uri('/assets/img/main_slider/devant.jpg') ?>);">
                    <div class="carousel-caption d-none d-md-block">
                        <h4 class="">sample header</h4>
                        <p class="">sample text</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel-p-b">
                <div class="carousel-background" style="background-image: url(<?php echo get_theme_file_uri('/assets/img/main_slider/devant.jpg') ?>);">
                    <div class="carousel-caption d-none d-md-block">
                        <h4 class="">sample header</h4>
                        <p class="">sample text</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#mainSlider" role="button" data-slide="prev">
            <i class="fa fa-angle-left fa-5x control-fa-angle-1"></i>
        </a>
        <a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
            <i class="fa fa-angle-right fa-5x control-fa-angle-1"></i>
        </a>
    </div>
</div>


<?php 
get_footer();
