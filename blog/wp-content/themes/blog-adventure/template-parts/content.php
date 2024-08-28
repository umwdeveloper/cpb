<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blogwaves
 */
?>

<?php 
$show_date = get_theme_mod('blogwaves_archive_co_post_date',true); 
$show_author = get_theme_mod('blogwaves_archive_co_post_author',true);
$show_comment = get_theme_mod('blogwaves_archive_co_post_comments',true); 
$show_image = get_theme_mod('blogwaves_archive_co_featured_image',true); 
?>

<div class="blog-child-wrap grid-item" id="post-<?php the_ID(); ?>">
    <div class="image-part image-part2 mb-25">
        <?php
        if($show_image && has_post_thumbnail()){
         	the_post_thumbnail(); 
        } ?>
    </div>
    
   	<div class="content-part content">
     
        <h3 class="title " style="max-height:50px !important;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <ul class="blog-meta  mb-20">
            <!-- <?php if($show_author) { ?><li class="d-none" style="font-size:18px;color:black; text-transform:capitalize; font-weight:600;"><?php echo get_avatar( get_the_author_meta('email'), '30' );?><?php blogwaves_posted_by(); ?></li><?php } ?> -->
        
          
            <?php if($show_date) { ?><li class=""><i class="bi bi-calendar-week ml-0" style="font-size:18px;color:#E5BF20;"></i><?php blogwaves_posted_on(); ?></li><?php } ?>

            <?php if($show_comment) { ?><li class="mt-3"><i class="fa fa-comment ml-4" style="font-size:18px;color:#E5BF20;"></i> <?php echo esc_html(get_comments_number());  ?> </li><?php } ?>
        </ul>
        <?php the_excerpt(); ?>
        <a class="read-more" href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('blogwaves_read_more_label', 'Explore More')); ?> <!-- <i class="fa fa-arrow-right"></i> --></a>
    </div>
</div>