<?php get_header(); ?>

<div class="wysiwyg-content bg-white">

	<section class="relative hero-slider py-0">

		<?php echo do_shortcode("[get-message color='info' message='This site and domain name are currently for sale as a functioning Tutoring site. <a href=\"mailto:enquiries@redhilltutoring.co.uk\" target=\"_blank\" class=\"underline\">Register interest today!</a>']");
		?>

		<!-- BUTTON Request -->
		<div class="w-full md:w-1/2 flex flex-col absolute left-1/2 top-1/3 z-50 transform -translate-x-1/2">

			<div class="flex items-center justify-center mb-3">
				<div class="inline-flex">
					<a class='primary-btn pr-12 relative mr-1 transform transition duration-400 ease-in-out' href='/contact'>
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute top-3 right-3 inline-block w-6 h-6 text-gray-100">
							<path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg>
						Become a tutor
					</a>
				</div>
				<div class="inline-flex">
					<a class='primary-btn pr-12 relative mr-1 transform transition duration-400 ease-in-out' href='/session-booking'>
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute top-3 right-3 inline-block w-6 h-6 text-gray-100">
							<path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg>
						Find a tutor
					</a>
				</div>
			</div>
			<div class="flex items-center justify-center mb-3">
				<div class="inline-flex">
					<a class='primary-btn pr-12 ml-1  transform transition duration-400 ease-in-out' href='#request-callback'>
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute top-3 right-3 inline-block w-6 h-6 text-gray-100">
							<path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg>
						Register Interest
					</a>
				</div>
			</div>

		</div>
		<!-- HERO SLIDER from content -->
		<?php echo do_shortcode('[hero-slides number="10"]'); ?>
	</section>

	<!-- Quote -->
	<section id="quote" class="max-w-5xl mx-auto py-10">

		<div class="text-center">
			<h1 class="hidden">Redhill Tutoring - Find the right tutor for your child</h1>
			<div class="flex justify-center mx-10 mt-2">
				<div>
					<h3 class="text-xl uppercase tracking-wide">An investment in knowledge pays the best dividends.</h3>
					<h4 class="pt-0 font-semibold">- Benjamin Franklin</h4>
				</div>
			</div>
		</div>

		<!-- Break -->
		<div class="inline-flex justify-center items-center w-full">
			<hr class="my-4 w-3/5 h-1 bg-gray-300 rounded border-0 dark:bg-gray-700">
			<div class="absolute left-1/2 px-4 bg-white transform -translate-x-1/2 dark:bg-gray-900">
				<svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-300" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor" />
				</svg>
			</div>
		</div>
	</section>

	<!-- FORM -register interest  -->
	<section id="request-callback" class="w-full">
		<div class="max-w-5xl mx-auto py-5">
			<div class="flex py-1 space-x-5 mx-8">

				<div class="text-base py-6">
					<h4 class="pt-6 font-semibold">Register your interest today!</h4>
					<h2 class="text-2xl">When new slots become available you'll <span class="px-1 border-b-2 border-primary transform inline-block -skew-y-2">be the first</span> to know.</h2>
					<p class="py-2 text-gray-400">This form registers your interest and puts you in a queue to be informed about availability.</p>
					<?php echo do_shortcode('[wpforms id="153" title="false"]'); ?>
				</div>
			</div>
		</div>
	</section>

	<!-- MAIN content -->
	<section id="moreinfo" class="max-w-5xl mx-auto py-16">

		<div class="mx-8 flex flex-wrap md:flex-nowrap mb-20">

			<div class="brand-swoosh object-cover w-full md:w-96 md:hidden">
				<picture>
					<source srcset="/resources/img/pages/home/redhilltutoring-home-university.webp" type="image/webp">
					<source srcset="/resources/img/pages/home/redhilltutoring-home-university.jpg" type="image/jpeg">
					<img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/home/redhilltutoring-home-university.jpg" alt="Teaching degree at University">
				</picture>
			</div>

			<div class="w-full md:w-3/5 flex justify-center items-center">
				<div class="md:pr-4 mt-5 md:mt-0">
					<span class="text-2xl pr-2 tracking-wide">
						Highly Qualified
					</span>


					<h4 class="pb-2 font-semibold">Nearly 2 decades of classroom experience - were changing</h4>

					<p class="text-base">I have nearly two decades of experience in the education field. I graduated from the <span class="font-semibold">City University</span> with a <span class="font-semibold">2:1 BA HONs in Educational Studies with a focus on Literature</span>. I began my professional journey as a <span class="font-semibold">Program Coordinator</span> for a youth development group after earning my <span class="font-semibold">Diploma in Early Childhood Education</span>. In addition to this role, I had the chance to work as a <span class="font-semibold">Youth Services Supervisor</span> for a local community organization. I later pursued a <span class="font-semibold">BTEC diploma in Inclusive Education</span>. </p>
					<p class="py-0">
						<a class="relative primary-link text-sm underline" href="/about">
							Find out more
						</a>
					</p>
					<!-- <a class="relative inline-flex primary-btn pr-6" href="/contact#contact-form">
						Enquire
						<svg xmlns="http://www.w3.org/2000/svg" class="absolute top-3 right-1 inline-block w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
						</svg>
					</a> -->
				</div>

			</div>

			<div class="brand-swoosh object-cover hidden md:block">
				<picture>
					<source srcset="/resources/img/pages/home/redhilltutoring-home-university.webp" type="image/webp">
					<source srcset="/resources/img/pages/home/redhilltutoring-home-university.jpg" type="image/jpeg">
					<img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/home/redhilltutoring-home-university.jpg" alt="Teaching degree at University">
				</picture>
			</div>
		</div>

		<div class="mx-8 flex flex-wrap md:flex-nowrap mb-20">
			<div class="brand-swoosh-l object-cover w-full md:w-96">
				<picture>
					<source srcset="/resources/img/pages/home/redhilltutoring-home-math-english.webp" type="image/webp">
					<source srcset="/resources/img/pages/home/redhilltutoring-home-math-english.jpg" type="image/jpeg">
					<img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/home/redhilltutoring-home-math-english.jpg" alt="Math and English tutoring">
				</picture>
			</div>

			<div class="w-full md:w-3/5 flex justify-center items-center">
				<div class="md:pl-4 mt-5 md:mt-0">
					<span class="text-2xl pr-2 tracking-wide">
						Maths & English
					</span>
					<h4 class="pb-2 font-semibold">Personalized 1:1 sessions</h4>
					<p class="text-base">Through initial assessments to identify areas of strength and improvement, I provide tailored lessons in both Math and English, designed to meet each child's unique needs. My goal is to fill any learning gaps and boost classroom confidence. With this customized approach, I strive to expand children's understanding of Math and English while fostering greater self-assurance in their abilities. </p>
					<!-- <h4 class="pb-2 font-semibold">1:1 and group sessions to achieve results</h4>
					<p class="text-base">Using a baseline assessment to highlight areas of strengths and weaknesses, I offer customised Maths and English sessions based on a child's requirements. My aim is to close gaps in their learning and help children be more confident in the classroom. By offering this personalised approach to learning, I aspire to broaden children's knowledge and understanding in Maths and English whilst building their confidence.
					</p> -->
					<p class="py-0">
						<a class="relative primary-link text-sm underline" href="/services">
							Find out more
						</a>
					</p>
				</div>
			</div>
		</div>

		<div class="mx-8 flex flex-wrap md:flex-nowrap mb-10">

			<div class="brand-swoosh object-cover w-full md:w-96 md:hidden">
				<picture>
					<source srcset="/resources/img/pages/home/cabin-new-2.webp" type="image/webp">
					<source srcset="/resources/img/pages/home/cabin-new-2.jpg" type="image/jpeg">
					<img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/home/cabin-new-2.jpg" alt="Cabin school Teacher">
				</picture>
			</div>

			<div class="w-full md:w-3/5 flex justify-center items-center">
				<div class="md:pr-4 mt-5 md:mt-0">
					<span class="text-2xl pr-2 tracking-wide">
						Personal & Friendly
					</span>

					<h4 class="pb-2 font-semibold">Perfect setting for focused learning</h4>
					<p class="text-base">Our tutoring space offers a peaceful and welcoming environment where students can feel at ease and confident. It provides an ideal atmosphere for students to comfortably express their ideas, knowing their input will <span class="italic">always</span> be appreciated. All lessons take place in a specially designed, well-equipped study area featuring high-speed internet and heating for cooler weather. </p>

					<!-- <h4 class="pb-2 font-semibold">Ideal location for extra study</h4>
					<p class="text-base">Redhill Tutoring provides a calm and relaxed learning environment where children feel confident, comfortable and at ease. It offers a suitable learning environment to help children feel self-assured in sharing ideas, where their contributions will <span class="italic">always</span> be valued. All sessions will be taught in a purpose-built insulated cabin complete with fast Wi-Fi. The cabin has heating for the colder months.
					</p> -->
					<!-- <p class="py-0">
						<a class="relative primary-link text-sm underline" href="/about">
							Find out more
						</a>
					</p> -->
				</div>

			</div>

			<div class="brand-swoosh object-cover hidden md:block">
				<picture>
					<source srcset="/resources/img/pages/home/cabin-new-2.webp" type="image/webp">
					<source srcset="/resources/img/pages/home/cabin-new-2.jpg" type="image/jpeg">
					<img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/home/cabin-new-2.jpg" alt="Cabin school Teacher">
				</picture>
			</div>
		</div>

	</section>

	<!-- TESTIMONIALS -->
	<section id="testinonials" class="w-full bg-gray-300">
		<div class="max-w-5xl mx-auto py-28">

			<div class="px-5 text-center">
				<h2 class="text-2xl">Fantastic <span class="px-1 border-b-2 border-primary transform inline-block -skew-y-2 ">Testimonials</span></h2>
				<p class="text-lg text-gray-500">Feedback from students, parents and colleagues</p>
			</div>

			<div class="mx-8 flex flex-wrap md:flex-nowrap pt-5 md:pt-10 space-x-5 space-y-5 md:space-y-0">
				<div class="py-0">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-36 w-36 text-primary">
						<path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
					</svg>
				</div>

				<div class="py-0 w-full">
					<div class="px-5">


						<p class="text-2xl pb-2">"My child had an incredible experience with their teacher, who made learning fun and engaging from the start. Each day was filled with excitement, sparking a lifelong love for learning. The teacher's kindness and thoughtful approach made a lasting impression, and we are deeply appreciative of the positive impact they had. Whenever asked about a favorite teacher, their name is always mentioned first."</p>
						<h4 class="text-xl text-right pt-4 pr-10">- SARAH W <br />Bristol, UK</h4>
						<p class="text-primary text-xs text-right pr-10">
							View more <a href="/testimonials" class="primary-link text-xs underline">feedback</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>



</div>

<!-- MESSAGE notification -->
<?php echo do_shortcode("[get-message color='info' message='This site and domain name are currently for sale as a functioning Tutoring site. <a href=\"mailto:enquiries@redhilltutoring.co.uk\" target=\"_blank\" class=\"underline\">Register interest today!</a>']");
?>



<?php get_footer(); ?>