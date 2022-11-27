<?php get_template_part('templates/partials/document-open'); ?>
<div id="modal-overlay" class="postion fixed hidden top-0 bottom-0 left-0 right-0 bg-gray-700 z-100 opacity-60"></div>
<header class="sticky top-0 bg-gray-100 bg-opacity-90 z-75" style="width:100%;">

    <div class="xl:container xl:mx-auto flex justify-between">

        <div class="flex-none p-5 text-left lg:hidden absolute right-0">
            <span class="inline-block">
                <button type="button" id="menuToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </span>
        </div>
        <?php get_template_part('templates/partials/navburger-main'); ?>

        <a href="/" class="inline-block py-3 w-80 px-8">
            <!-- <img src="/resources/img/pages/logos/redhill-tuts-logo.svg" class="hidden md:block main-logo" alt="Redhill Tutoring"> -->
            <img src="/resources/img/pages/logos/redhill-tuts-logo.png" class="main-logo" alt="Redhill Tutoring">
        </a>

        <div class="flex-none pl-0 py-0 mx-1 hidden md:block">
            <?php get_template_part('templates/partials/navbar', 'main'); ?>
        </div>

        <!-- <div class="flex-none pt-3 pr-3"> -->
        <!-- <p>
                <a class='relative primary-btn text-lg pr-10' href='tel:<?php echo do_shortcode("[mobile_number]"); ?>'>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-1 right-1 inline-block w-6 h-6 m-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <?php echo do_shortcode("[mobile_number]"); ?></a>
            </p> -->

        <!-- <p>
                <a class='relative primary-btn text-md' href='/register-interest'>
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-1 right-1 inline-block w-6 h-6 m-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
        Register Interest
        </a>
        </p> -->

        <!-- <h5 class="text-gray-400 pt-3 leading-5">
                Call for a <span class="uppercase">HASSLE-FREE</span> quote <br />or <a class='primary-link text-sm' href='#request-callback'>request a callback
                </a>
            </h5> -->

        <!-- </div> -->
    </div>
</header>