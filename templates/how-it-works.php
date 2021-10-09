<?php 
/**
 * Template Name: How It Works Page template
 */
get_header() ?>

<section class="how_it_works">						
	<div class="icon hide-for-large">
		<figure><img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-rect.svg" width="150" height="150" /></figure>
	</div>
	<div class="grid-container">	
		<h1	class="title">How It Works.</h1>	
		<div class="timeline">
			<div class="grid-x first">
				<div class="cell large-6 small-12 odd">
					<div class="work_boxes">
						<div class="work_box">
							<figure><img src="<?php echo MBN_ASSETS_URI ?>/img/img-enroll-easy.svg" width="137" height="110" /></figure>
							<div class="text-wrap">
								<h3>Enrollment is easy.</h3>
								<p>The whole process is really simple. If you’re an <strong>electricity customer</strong> anywhere in <strong>New York State</strong> you can sign up on our secure website. All you need is your contact information and your utility company account number. </p>
							</div>
							<a href="" class="button secondary">Sign Up Now</a>
						</div>
					</div>
				</div>
				<div class="cell large-6 show-for-large"></div>
			</div>
			<div class="grid-x second">
				<div class="cell large-6 show-for-large"></div>
				<div class="cell large-6 small-12 even">
					<div class="work_boxes">
						<div class="work_box">
							<figure><img src="<?php echo MBN_ASSETS_URI ?>/img/img-graph.svg" width="75" height="106" /></figure>
							<div class="text-wrap">
								<h3>Nothing changes for you.</h3>
								<p>You will continue to use electricity and receive your regular monthly utility bill. The only difference you’ll notice is that Source Power Company will be listed as your “energy provider” and the bill will reflect your solar energy credits. In addition, there is <strong>no credit check or upfront</strong> cost to you of any kind.</p>
							</div>
							<a href="" class="button secondary hide-for-large">Sign Up Now</a>
						</div>
					</div>
				</div>
			</div>
			<div class="grid-x third">
				<div class="cell large-6 small-12 odd">
					<div class="work_boxes">
						<div class="work_box">
							<figure><img src="<?php echo MBN_ASSETS_URI ?>/img/img-hand-energy.svg" width="112" height="103" /></figure>
							<div class="text-wrap">
								<h3>You’ll earn solar energy credits.</h3>
								<p>When you’re subscribed to a solar farm, your solar energy credits will begin  right away. Every billing period, a portion of these credits will be applied to your electric bill automatically.  You will receive one invoice each month from Source Power. <strong>No multiple bills</strong> or complex credit bookkeeping, ever.</p>
							</div>
							<a href="" class="button secondary">Sign Up Now</a>
						</div>
					</div>
				</div>
				<div class="cell large-6 show-for-large"></div>
			</div>
			<div class="grid-x fourth">
				<div class="cell large-6 show-for-large"></div>
				<div class="cell large-6 small-12 even">
					<div class="work_boxes">
						<div class="work_box">
							<figure><img src="<?php echo MBN_ASSETS_URI ?>/img/img-bottle-energy.svg" width="60" height="106" /></figure>
							<div class="text-wrap">
								<h3>You’ll start saving on Day One.</h3>
								<p>As a residential or commercial customer, the <strong>renewable solar credit</strong> on your electric bills will provide guaranteed savings for you every month compared to the utility company. And the credits start on day one. Day one. There is <strong>no waiting list</strong>, and <strong>no waiting to receive credits</strong>, for any reason, with Source Power.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>	
</section>

<section class="get_started_cta">
	<div class="grid-container">		
		<div class="grid-x">
			<div class="cell large-12">
				<div class="cta_form"><?= do_shortcode('[zip_code_form_content]'); ?></div>
			</div>
		</div>
	</div>
</section>

<section class="testimonials">
	<div class="grid-container">	
		<div class="section_header">
			<h2 class="title">Testimonials</h2>
			<div class="write_us"><a href="" class="write_us_link">Write Us A Review</a></div>
		</div>	
		<div class="grid-x">
			<div class="cell large-12">		
				<div class="testi_slick_wrap">
					<?= do_shortcode('[mbn_testimonials]'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer() ?>