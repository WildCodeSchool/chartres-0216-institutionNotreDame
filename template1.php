<?php
/*
Template Name: accueil
*/
?>

<?php get_header(); ?>

<div class="col-md-12">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">

        <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 1,
                'category_name' => get_the_title().'-carousel-active',
            );

            $my_query = new WP_Query($args);

            if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
        
        ?> 

        <div class="item active main-carousel">
            <?php the_content(); ?>
        </div>
        
        <?php
            endwhile;
            endif;
            wp_reset_postdata();
        ?>

        <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 2,
                'category_name' => get_the_title().'-carousel',
            );

            $my_query = new WP_Query($args);

            if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
        
        ?> 

        <div class="item main-carousel">
            <?php the_content(); ?>
        </div>
        
        <?php
            endwhile;
            endif;
            wp_reset_postdata();
        ?>

      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>

<div class="col-md-6 global-div">
	<div class="col-md-12 global-title">
		<h3>EVENEMENTS</h3>
	</div>
    <?php

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'category_name' => get_the_title_mod().'-evenements',
        );

        $my_query = new WP_Query($args);

        if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
    
    ?> 

    <div class="col-md-12 main-top">
        <h4><?php the_title(); ?></h4>
        <?php the_content(); ?>
    </div>

    <?php
        endwhile;
        endif;
        wp_reset_postdata();
    ?>
</div>

<div class="col-md-6 global-div">
	<div class="col-md-12 global-title">
		<h3>LE MOT DU DIRECTEUR</h3>
	</div>
    <?php

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'category_name' => get_the_title_mod().'-directeur',
        );

        $my_query = new WP_Query($args);

        if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
    
    ?> 

    <div class="col-md-12 main-top">
        <?php the_content(); ?>
    </div>

    <?php
        endwhile;
        endif;
        wp_reset_postdata();
    ?>
</div>

<div class="col-md-12 main-offset">
</div>

<div class="col-md-12 global-large-div">
	<div class="col-md-12 global-title">
		<h3>ACTUALITES</h3>
	</div>
	<div class="col-md-6">
	    <?php

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 2,
                'category_name' => get_the_title_mod().'-actualites-principales',
            );

            $my_query = new WP_Query($args);

            if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
        
        ?> 

        <div class="col-md-6 main-actu">
            <img src="<?php the_post_thumbnail_url(); ?>">
            <h4><?php the_title() ;?></h4>
            <p><?php the_excerpt();?></p>
        </div>
            

        <?php
            endwhile;
            endif;
            wp_reset_postdata();
        ?>
	</div>
	<div class="col-md-6">
		<?php

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
                'category_name' => get_the_title_mod().'-actualites-lignes',
            );

            $my_query = new WP_Query($args);

            if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
        
        ?> 

        <div class="col-md-12 line-actu">
        	<h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
        </div>

        <?php
            endwhile;
            endif;
            wp_reset_postdata();
        ?>
	</div>
</div>

<div class="col-md-12 main-offset">
</div>

<div class="col-md-12 global-large-div">
	<div class="col-md-12 global-title">
		<h3>PROJET INTERNATIONAL</h3>
	</div>
    <div class="col-md-12 national-texte">
        <h4>L’Institution Notre Dame est résolument engagée sur un projet International. En quoi consiste-t-il ?</h4>
    </div>
	<div class="col-md-3 col-md-offset-1 national-texte">
        <img src="<?php echo get_template_directory_uri(); ?>/img/monde.png" class="img-responsive">
    </div>
    <div class="col-md-6 national-texte-right">
    </div>
</div>

<div class="col-md-12 main-offset">
</div>

<div class="col-md-12 global-large-div">
    <div class="col-md-12 global-title">
        <h3>MEDIA</h3>
    </div>
    <div class="col-md-4">
        <h4>Vidéo</h4>
        <iframe height="300" width="350" src="https://www.youtube.com/embed/videoseries?list=UUr2_AMouXAv838HHARFw93g" frameborder="0" allowfullscreen></iframe> 
    </div>
    <div class="col-md-4">
        <h4>Facebook</h4>
        <div class="fb-page" data-href="https://www.facebook.com/indchartres" data-tabs="timeline" data-width="350" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/indchartres"><a href="https://www.facebook.com/indchartres"></a></blockquote></div></div>
    </div>
    <div class="col-md-4">
        <h4>Twitter</h4>
         <a class="twitter-timeline"  href="https://twitter.com/IndChartres" data-widget-id="716977401792700416">Tweets de @IndChartres</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
</div>

<?php get_footer(); ?>