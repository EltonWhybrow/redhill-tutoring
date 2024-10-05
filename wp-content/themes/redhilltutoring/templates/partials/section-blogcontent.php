<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <!-- Mobile Header -->
        <?php if (get_field('page_mobile_image')) { ?>
            <div class="sm:block md:hidden relative">
                <img class="h-full w-full object-cover" src="<?php the_field('page_mobile_image'); ?>" alt="<?php the_title(); ?>">
                <!-- <h2 class="text-xl bg-primary py-1 text-white px-5"><?php the_title(); ?></h2> -->
            </div>
        <?php } ?>

        <!-- Main Header -->
        <?php if (has_post_thumbnail()) : ?>
            <div class="py-0 ">
                <img class="h-full w-full object-cover" src="<?php the_post_thumbnail_url('page-hero-banner'); ?>" alt="<?php the_title(); ?>">
            </div>
        <?php endif; ?>


        <div class="bg-gray-700">
            <div class="flex justify-items-center py-3 space-x-3  max-w-5xl mx-auto px-5">
                <div class="flex-none text-right">
                    <a href="/blog" class="inline-flex primary-btn uppercase">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>


                    </a>
                </div>
                <div class="flex-1">
                    <h2 class="text-xl uppercase pt-1"><?php the_title(); ?></h2>
                </div>
            </div>
        </div>

        <div class="wysiwyg-budblog p-5">

            <?php
            the_content();
            ?>
        </div>

        <div class="bg-gray-700">
            <div class="flex justify-between py-3 space-x-3 max-w-5xl mx-auto px-5 text-white">
                <span><?php previous_post_link(); ?></span>
                <span><?php next_post_link(); ?></span>
            </div>
        </div>





<?php endwhile;
else : endif; ?>