<?php get_header(); ?>


<?php
// Get the ID of the page set as the blog page
$blog_page_id = get_option('page_for_posts');

// Check if the blog page has a featured image
if (has_post_thumbnail($blog_page_id)) :
    // Get the URL of the featured image
    $featured_img_url = get_the_post_thumbnail_url($blog_page_id);
    // Get the title of the blog page
    $blog_page_title = get_the_title($blog_page_id);
?>
    <!-- Blog header -->
    <div class="py-0">
        <img class="h-full w-full object-cover" src="<?php echo esc_url($featured_img_url); ?>" alt="<?php the_title(); ?>">
        <h2 class="text-base text-center bg-teal-500 p-2 text-white font-semibold">Design &amp; Landscaping <?php echo esc_html($blog_page_title); ?></h2>
    </div>



<?php endif; ?>
<?php
if (!has_post_thumbnail($blog_page_id)) :
    // Get the URL of the featured image
    $featured_img_url = get_the_post_thumbnail_url($blog_page_id);
    // Get the title of the blog page
    $blog_page_title = get_the_title($blog_page_id);
?>
    <div class="py-0 pt-44">

        <h2 class="text-base text-center bg-teal-500 p-2 text-white font-semibold">Design &amp; Landscaping <?php echo esc_html($blog_page_title); ?></h2>
    </div>



<?php endif; ?>




<!-- wysiwyg main content -->
<main class="wysiwyg-content pt-4 md:pt-10 md:pb-10 px-4 md:px-10 mt-20 mb-5 md:mb-0">

    <?php
    if (have_posts()) :

        if (is_home() && !is_front_page()) :
    ?>

            <header>
                <h2 class="page-title screen-reader-text"><?php single_post_title(); ?></h2>
            </header>

            <div class="justify-center max-w-4xl mx-auto gap-5  grid grid-cols-1 md:grid-cols-2 md:gap-10">
            <?php

        endif;

        /* Start the Loop */
        while (have_posts()) :
            the_post();
            ?>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="py-0 ">
                        <img class="h-full w-full object-cover" src="<?php the_post_thumbnail_url('page-hero-banner'); ?>" alt="<?php the_title(); ?>">
                    </div>
                <?php endif; ?>


                <div class="bg-gray-50 hover:bg-gray-100 border rounded-lg group cursor-pointer h-full mb-10 md:mb-0">
                    <div class="py-3 px-4 h-full">
                        <h1 class="text-gray-600 text-2xl tracking-wide">
                            <a class="group-hover:text-teal-500 cursor-pointer" href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h1>
                        <span class="text-xs text-gray-600 pb-3 pt-1 block"><?php the_date('F j, Y'); ?></span>
                        <div class="text-gray-700 mb-1">
                            <?php
                            // the_excerpt();
                            $excerpt = get_the_excerpt();

                            $excerpt = substr($excerpt, 0, 200);
                            $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                            echo "$result..";
                            // the_content();
                            ?><a class="read-on text-teal-500" href="<?php the_permalink(); ?>"> [read more]</a>
                        </div>
                    </div>


                </div><?php

                    endwhile;
                else : ?>

            <p>Sorry, no new content for now! 😞</p>
        <?php endif;

        ?>
            </div>
</main>



<?php

get_footer(); ?>