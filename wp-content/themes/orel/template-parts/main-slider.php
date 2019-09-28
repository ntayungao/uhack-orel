<div class="featured-section">
    <div id="mainSlider" class="carousel slide" date-ride="carousel">
        <div class="home-featured-controllers">
            <ol class="carousel-indicators">
                
                <!--<//?php 
                
                $slider_items = get_slider_posts();
                foreach ($slider_items  as $index => $post) {

                ?>

                <li data-target="#example" data-slide-to="<?php echo $index; ?>" class="<?php echo $index == 0 ? 'active' : null; ?>"></li>
                
                <//?php 
                }
                ?>-->
                
                <li data-target="#example" data-slide-to="0" class="active"></li>
                <li data-target="#example" data-slide-to="1"></li>
                <li data-target="#example" data-slide-to="2"></li>
                <li data-target="#example" data-slide-to="3"></li>            
            </ol>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="" class="" alt="">
                <div class="carusel-caption d-none d-md-block">
                    <h4 class="">sample header</h4>
                    <p class="">sample text</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#example" role="button" data-slide="prev">
            <i class="fa fa-angle-left fa-5x control-fa-angle-1"></i>
        </a>
        <a class="carousel-control-next" href="#example" role="button" data-slide="next">
            <i class="fa fa-angle-right fa-5x control-fa-angle-1"></i>
        </a>
    </div>
</div>

