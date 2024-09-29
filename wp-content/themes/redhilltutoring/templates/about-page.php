<?php

/*
 * Template Name: About Template
 * Template Post Type: post, page, press-release, people
 */

get_header(); ?>
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

	<section class="w-full border-b-4 border-gray-400">
		<div class="flex max-w-5xl mx-auto pt-5 md:pt-10 pb-12 space-x-5">

			<div class="px-5 text-base">
				<h4 class="hidden md:block pt-6 font-semibold">About me</h4>
				<h2 class="text-2xl">Passionate about <span class="px-1 border-b-2 border-primary transform inline-block -skew-y-2">teaching</span> and building <span class="px-1 border-b-2 border-primary transform inline-block -skew-y-2">confidence</span></h2>
				<p class="py-2">If you have any queries, feel free to <a class="primary-link relative text-base" href="/contact#contact-form">contact me</a>.
				</p>
			</div>
		</div>
	</section>


	<section class="w-full px-5">
		<div class="max-w-5xl mx-auto py-10 md:py-20 px-5">

			<div class="flex flex-wrap md:flex-nowrap mb-5">
				<div class="w-full pr-5">
					<!-- // experience -->

					<h3 class="text-gray-600 text-2xl uppercase tracking-wide">Experience</h3>

					<p> I have been working with children for <span class="font-semibold">more than 20 years</span>. I earned my first qualification as an early childhood educator in 1998, and my initial role was as an Assistant Program Leader, supporting children with diverse needs in a blended environment. At the same time, I worked as a Children's Activity Coordinator for a local nonprofit’s youth services. My passion for these roles inspired me to continue my education, and in 2001, I completed a <span class="font-semibold">Diploma in Special Education</span>. </p>
					<p> Through these experiences, I discovered my true calling in teaching. With a strong background in child development and family support, I earned an upper division <span class="font-semibold">BA in Education with a focus on literacy</span> from City University in 2005. </p>
					<div class="brand-swoosh object-cover w-full md:w-96 md:float-right my-5 md:m-5">
						<picture>
							<source srcset="/resources/img/pages/about/redhilltutoring-about-me.webp" type="image/webp">
							<source srcset="/resources/img/pages/about/redhilltutoring-about-me.jpg" type="image/jpeg">
							<img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/about/redhilltutoring-about-me.jpg" alt="Welcoming you to Redhill Tutoring">
						</picture>
					</div>
					<!-- <p>
						Since then I have had over <span class="font-semibold">19 successful years</span> as a <span class="font-semibold">qualified primary school educator</span>. I have taught in <span class="font-semibold">Key Stage 1</span> and <span class="font-semibold">Key Stage 2</span> where inspiring lessons for inclusive education have been carefully planned and resourced. I have taught in both the state sector and the private school sector. My passion is teaching the development of phonics and early literacy skills, for children who are experiencing difficulty with reading and writing, but my teaching style is also suited to children who may feel apprehensive in some areas of their learning, and perhaps need a confidence boost and 'self-belief' mindset.</p>
					<p>
						I offer tutoring programmes for <span class="font-semibold">children aged 7 to 11</span>, supporting areas of the KS2 Maths and English curriculum. I hope to inspire children to foster a love for learning and break down barriers that so often make children think they can't succeed. If you think your child would benefit from 1:1 tuition, or in small working groups of no more than 4 children at a time, to further develop their literacy or numeracy skills, I would love to hear from you.

					</p> -->
					<p> Over the past <span class="font-semibold">18 years</span>, I have worked as a <span class="font-semibold">certified elementary school teacher</span>. I've taught in both <span class="font-semibold">Lower Elementary</span> and <span class="font-semibold">Upper Elementary</span>, delivering engaging, inclusive lessons. I’ve had the privilege of teaching in both public and private schools. My main focus is on building foundational phonics and literacy skills for children who face challenges with reading and writing. My approach also helps those who may lack confidence in certain subjects, giving them the encouragement they need to thrive. </p>
					<p> I provide tutoring for <span class="font-semibold">students aged 7 to 12</span>, focusing on areas within the upper elementary Math and English curriculum. My goal is to inspire children to enjoy learning and overcome obstacles that often lead them to believe they can’t achieve success. If you feel your child would benefit from personalized 1:1 tutoring or small group sessions with no more than four children, I would love to help them strengthen their literacy or numeracy skills. </p>

				</div>


			</div>

			<!-- // timetable -->
			<div id="time-table" class="pb-5 pr-5">
				<h3 class="text-gray-600 text-2xl uppercase tracking-wide">Tuition timetable</h3>
				<p>
					These are the days and times I offer. Please do contact me for availability.
				</p>
				<p>Looking for <a class="relative primary-link text-base" href="/fees">tutition fees</a>.
				</p>

				<!-- Timetable template -->
				<?php get_template_part('templates/partials/timetable/timetable'); ?>


			</div>

			<div class="pb-5 pr-5">
				<!-- // our vision -->
				<h3 class="text-gray-600 text-2xl uppercase tracking-wide">Vision</h3>
				<p>
					To provide a safe learning environment that is free from <span class="font-semibold">'fear of failure'</span>. To provide inclusive education for all children regardless of gender, race, disability, social class, religion or ethnicity. To ensure all children learn to the best of their ability and give them the confidence that can contribute to decisions about their future.
				</p>
			</div>


			<!-- // work -->
			<div class="pb-5 pr-5">

			</div>

			<div class="flex flex-wrap md:flex-nowrap pb-5">

				<div class="w-full md:w-3/5 pr-5">
					<!-- <h3 class="text-gray-600 text-2xl uppercase tracking-wide">Work Ethics</h3>
					<p>I am ambitious and hard working and dedicated to the profession of teaching. I have high standards for myself and for my students. I am an honest individual and believe in fairness and respect for the children that I work closely with and their families. View <a class="relative primary-link text-base" href="/testimonials">feedback</a> from students, parents and colleagues.
					</p> -->
					<h3 class="text-gray-600 text-2xl uppercase tracking-wide">Professional Values</h3>
					<p>I am driven and committed to the field of education. I hold myself and my students to high standards. Integrity is important to me, and I believe in fostering a culture of fairness and respect for all children and their families. Feel free to check out <a class="relative primary-link text-base" href="/testimonials">testimonials</a> from students, parents, and fellow educators. </p>

					<h4 class="mt-2">Looking forward to hearing from you.</h4>
					<p class="text-sm font-semibold">Jane Doe</p>

				</div>
				<div class="brand-swoosh object-cover w-full md:w-96">
					<picture>
						<source srcset="/resources/img/pages/about/cabin-new.webp" type="image/webp">
						<source srcset="/resources/img/pages/about/cabin-new.jpg" type="image/jpeg">
						<img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/about/cabin-new.jpg" alt="Cabin school setting">
					</picture>
				</div>
			</div>

		</div>
	</section>
</div>

<?php get_footer(); ?>