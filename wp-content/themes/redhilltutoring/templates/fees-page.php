<?php
/*
 * Template Name: Fees Template
 * Template Post Type: post, page, press-release, people
 */

get_header(); ?>

<!-- Mobile Header -->
<?php if (get_field('page_mobile_image')) { ?>
    <div class="sm:block md:hidden relative">
        <img class="h-full w-full object-cover" src="<?php the_field('page_mobile_image'); ?>" alt="<?php the_title(); ?>">
        <h2 class="text-xl bg-teal-500 py-1 text-white px-5"><?php the_title(); ?></h2>
    </div>
<?php } ?>

<!-- Main Header -->
<?php if (has_post_thumbnail()) : ?>
    <div class="py-0 hidden md:block">
        <img class="h-full w-full object-cover" src="<?php the_post_thumbnail_url('page-hero-banner'); ?>" alt="<?php the_title(); ?>">
    </div>
<?php endif; ?>

<!-- wysiwyg main content -->
<div class="wysiwyg-content bg-gray-100">


    <section class="w-full border-b-4 border-gray-400">
        <div class="flex max-w-5xl mx-auto pt-5 md:pt-10 pb-12 space-x-5">

            <div class="px-5 text-base">
                <h4 class="hidden md:block pt-6 font-semibold">Tuition fees</h4>
                <h2 class="text-2xl">A breakdown of fee structure and <span class="px-1 border-b-2 border-teal-500 transform inline-block -skew-y-2">offers</span> available</h2>
                <p class="py-2">Please see below for fee structure. If you have any queries feel free to <a class="primary-link relative text-base" href="/contact#contact-form">contact me</a>.
                </p>
            </div>
        </div>
    </section>

    <!-- MAIN fees content -->
    <section id="moreinfo" class="max-w-5xl mx-auto py-16">

        <div class="grid gap-10 grid-col-1 md:grid-cols-2 px-5">

            <div class="border rounded-md border-gray-400 p-10">

                <div class="mt-2 md:mt-0">
                    <span class="text-2xl pr-2 tracking-wide">
                        Maths/English Tuition
                    </span>

                    <h4 class="pb-2 font-semibold">1:1 session</h4>
                    <p class="text-base">Entirely personalised one hour long sessions, in the area of Maths or English</p>
                    <p class="text-2xl text-teal-500 font-semibold">£30.00/hr <span class="text-sm">(Saturday £35.00/hr)</span></p>
                    <p class="py-0 flex justify-between">
                        <a class="relative primary-link md:text-sm text-md underline" href="/session-booking/#booking-form">
                            Booking request
                        </a>
                        <a class="modal-trigger relative primary-link md:text-sm text-md underline" data-id="modal-timetable" href="/about/#time-table">
                            View slots
                        </a>
                    </p>
                </div>

            </div>
            <div class="border rounded-md border-gray-400 p-10">

                <div class="mt-2 md:mt-0">
                    <span class="text-2xl pr-2 tracking-wide">
                        Maths/English Tuition
                    </span>

                    <h4 class="pb-2 font-semibold">Small group session (max. 4)</h4>
                    <p class="text-base">Peer and collaborative learning one hour long sessions, in the area of Maths or English</p>
                    <p class="text-2xl text-teal-500 font-semibold">£20.00/hr</p>
                    <p class="py-0 flex justify-between">
                        <a class="relative primary-link md:text-sm text-md underline" href="/session-booking/#booking-form">
                            Booking request
                        </a>
                        <a class="modal-trigger relative primary-link md:text-sm text-md underline" data-id="modal-timetable" href="/about/#time-table">
                            View slots
                        </a>
                    </p>
                </div>

            </div>
            <div class="border rounded-md border-gray-400 p-10 relative">
                <span class="absolute -right-1 md:-right-5 -top-6 rotate-12 transform">
                    <img class="hidden md:block" src="/resources/img/pages/fees/saving.svg" alt="percent off" width="100px" height="auto" />
                    <img class="md:hidden" src="/resources/img/pages/fees/saving.png" alt="percent off" width="100px" height="auto" />
                </span>

                <div class="mt-2 md:mt-0">
                    <span class="text-2xl pr-2 tracking-wide">
                        Maths/English Tuition
                    </span>

                    <h4 class="pb-2 font-semibold">1:1 session bundle (10 lessons)</h4>
                    <p class="text-base">Entirely personalised one hour long sessions, in the area of Maths or English</p>
                    <p class="text-2xl text-teal-500 font-semibold">£255.00 <span class="text-sm">(Saturday £297.50/hr)</span></p>
                    <p class="py-0 flex justify-between">
                        <a class="relative primary-link md:text-sm text-md underline" href="/session-booking/#booking-form">
                            Booking request
                        </a>
                        <a class="modal-trigger relative primary-link md:text-sm text-md underline" data-id="modal-timetable" href="/about/#time-table">
                            View slots
                        </a>
                    </p>
                </div>

            </div>
            <div class="border rounded-md border-gray-400 p-10 relative">
                <span class="absolute -right-1 md:-right-5 -top-6 rotate-12 transform">
                    <img class="hidden md:block" src="/resources/img/pages/fees/saving.svg" alt="percent off" width="100px" height="auto" />
                    <img class="md:hidden" src="/resources/img/pages/fees/saving.png" alt="percent off" width="100px" height="auto" />
                </span>

                <div class="mt-2 md:mt-0">
                    <span class="text-2xl pr-2 tracking-wide">
                        Maths/English Tuition
                    </span>

                    <h4 class="pb-2 font-semibold">Small group session bundle (10 lessons)</h4>
                    <p class="text-base">Peer and collaborative learning one hour long sessions, in the area of Maths or English</p>
                    <p class="text-2xl text-teal-500 font-semibold">£170.00</p>
                    <p class="py-0 flex justify-between">
                        <a class="relative primary-link md:text-sm text-md underline" href="/session-booking/#booking-form">
                            Booking request
                        </a>
                        <a class="modal-trigger relative primary-link md:text-sm text-md underline" data-id="modal-timetable" href="/about/#time-table">
                            View slots
                        </a>
                    </p>
                </div>

            </div>


        </div>

    </section>

    <!-- TESTIMONIALS -->
    <section id="testinonials" class="w-full bg-gray-300">
        <div class="max-w-5xl mx-auto py-28">

            <div class="px-5 text-center">
                <h2 class="text-2xl">Fantastic <span class="px-1 border-b-2 border-teal-500 transform inline-block -skew-y-2 ">Testimonials</span></h2>
                <p class="text-lg text-gray-500">Feedback from students, parents and colleagues</p>
            </div>

            <div class="mx-8 flex flex-wrap md:flex-nowrap pt-5 md:pt-10 space-x-5 space-y-5 md:space-y-0">
                <div class="py-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-36 w-36 text-teal-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                    </svg>
                </div>

                <div class="py-0 w-full">
                    <div class="px-5">
                        <p class="text-2xl pb-2">"I had the pleasure of working with Bethany for 8 years. She is an incredibly versatile KS1 &amp; KS2 teacher. She demonstrated excellent curriculum knowledge, clear differentiation &amp; a passion for being in the classroom. Her lessons consistently included highly engaging and exciting activities for all children."</p>
                        <h4 class="text-xl text-right pt-4 pr-10">- TINA FROST-LUTMAN M.A, B.Ed (Hons) <br />OFSTED Inspector, Head Teacher</h4>
                        <p class="text-teal-500 text-xs text-right pr-10">
                            View more <a href="/testimonials" class="primary-link text-xs underline">feedback</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- MODAL Test 1 -->
<div id="modal-timetable" class="modal z-100 fixed left-0 top-0 md:top-12 md:left-1/4 m-auto bg-gray-100 w-screen md:w-1/2 h-screen sm:h-auto p-8 transform scale-0 transition-transform duration-300">
    <button type="button" class="close-modal focus:outline-none absolute right-3 top-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    </button>
    <h2 class="text-2xl">Tuition timetable</h2>
    <p>Current available days/times. <a class="relative primary-link text-base" href="/session-booking/#booking-form">Book a session</a> or <a id="register-interest" class='primary-link' href='/#request-callback'>register Interest</a> if your day is currently unavailable.
    </p>

    <!-- Timetable template -->
    <?php get_template_part('templates/partials/timetable/timetable'); ?>

    <!-- <button class="close-modal inline-flex primary-btn my-2 mx-auto">Close</button> -->
</div>


<?php get_footer(); ?>