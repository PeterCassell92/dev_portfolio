<?php get_header();?>
<?php while (have_posts()): the_post(); ?>

<section class="single-practice_area elementor-section elementor-top-section elementor-element elementor-section-boxed elementor-section-height-default elementor-section-height-default content" data-element_type="section">
	<div class="elementor-container elementor-column-gap-default">
		<div class="elementor-column elementor-col-100 elementor-top-column elementor-element" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
				<section class="elementor-section elementor-inner-section elementor-element  elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-75 elementor-inner-column elementor-element " data-element_type="column">
							<div class="elementor-column-wrap">		
								<div class="elementor-widget-wrap">
									<h1><?php echo get_the_title();?></h1>
									<h2><?php echo do_shortcode('[acf field="blurb"]');?></h2>
									<?php echo the_content();?>
									<h3 class="text-center">Request A Consultation</h3>
									<p class="text-center">You can complete the following form to request a consultation.</p>
									<?php echo do_shortcode('[fluentform id="3"]');?>
								</div>
							</div>
						</div>
						<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element" data-element_type="column">
							<div class="elementor-column-wrap">		
								<div class="elementor-widget-wrap">
									<h3 >All Practice Areas</h3>
									<?php echo do_shortcode('[practice_areas_link]'); ?>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</section>
<?php endwhile;?>
<?php get_footer();?>
