<?php
if(have_posts()):?>
<?php while(have_posts()): the_post()?>
<div class="project">
<?php
        if ( has_post_thumbnail() ) {
        the_post_thumbnail( '', [
            'class' => 'img-responsive',
            'alt'   => get_the_title()
        ] );
        } else {
            echo 'تصویری برای این پست قرار داده نشده است';
        }
?>
    <div class="project-info">

    <h3><?php echo  get_post_meta( get_the_ID(), '_project_name_key', true ) ?></h3>

    <p><?php the_content(); ?></p>

</div>

<?php endwhile; ?>

<?php endif;?>