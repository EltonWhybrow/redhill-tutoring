<?php get_header(); ?>

<?php echo do_shortcode("[get-message color='info' message='This site and domain name are currently for sale as a functioning Tutoring site. Register interest today!']");
?>

<!-- Mobile Header -->
<?php if (get_field('page_mobile_image')) { ?>
    <div class="sm:block md:hidden relative">
        <img class="h-full w-full object-cover" src="<?php the_field('page_mobile_image'); ?>" alt="<?php the_title(); ?>">
        <h2 class="text-xl bg-primary py-1 text-white px-5"><?php the_title(); ?></h2>
    </div>
<?php } ?>

<!-- Main Header -->
<?php if (has_post_thumbnail()) : ?>
    <div class="py-0 hidden md:block">
        <img class="h-full w-full object-cover" src="<?php the_post_thumbnail_url('page-hero-banner'); ?>" alt="<?php the_title(); ?>">
        <!-- <h2 class="text-sm text-center bg-primary p-2 text-white"><?php the_title(); ?></h2> -->
    </div>
<?php endif; ?>

<!-- wysiwyg main content -->
<div class="wysiwyg-content bg-white">

    <?php the_content(); ?>

</div>

<!-- <?php // get_template_part('templates/partials/section', 'partners');  
        ?> -->

<?php get_footer(); ?>