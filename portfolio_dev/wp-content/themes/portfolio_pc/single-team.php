<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<section class="single-team elementor-section elementor-top-section elementor-element elementor-section-boxed elementor-section-height-default elementor-section-height-default content" data-element_type="section">
	<div class="elementor-container elementor-column-gap-default">
		<div class="elementor-column elementor-col-100 elementor-top-column elementor-element" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
				<section class="elementor-section elementor-inner-section elementor-element  elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section">
					<div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element" data-element_type="column">
                            <div class="elementor-column-wrap">	
                                <div class="elementor-widget-wrap">
                                    <?php echo the_post_thumbnail('large', array('class'=>'img-fluid')); ?>
                                    <?php 
                                        $email = get_field('email_address');
                                        $phone = get_field('phone_number');
                                        echo '<div class="contact-links text-center">';
                                        if($email != ''):
                                            echo '<a href="mailto:'.$email.'" title="Email '.get_the_title().'"><i class="fas fa-envelope-square fa-3x"></i></a>';
                                        endif;
                                        if($phone != ''):
                                            echo '<a href="mailto:'.$phone.'" title="Phone '.get_the_title().'"><i class="fas fa-phone-square fa-3x"></i></a>';
                                        endif;
                                        echo '</div>';
                                    ?>
                                </div>
                            </div>
						</div>
						<div class="elementor-column elementor-col-75 elementor-inner-column elementor-element " data-element_type="column">
                            <div class="elementor-column-wrap">	
                                <div class="elementor-widget-wrap">
                                    <h1><?php echo get_the_title();?></h1>
                                    <h2><?php echo do_shortcode('[acf field="blurb"]');?></h2>
                                    <?php echo the_content();?>
                                    <?php
                                        $areas = get_field('areas_of_practice');
                                        $associations = get_field('professional_associations');
                                        $education = get_field('education');
                                        if($areas != ''):
                                            echo '<h3>Areas of Expertise</h3>';
                                            echo '<div class="team-section">'.$areas.'</div>';
                                        endif;
                                        if($associations != ''):
                                            echo '<h3>Professional Associations</h3>';
                                            echo '<div class="team-section">'.$associations.'</div>';
                                        endif;
                                        if($education != ''):
                                            echo '<h3>Education</h3>';
                                            echo '<div class="team-section">'.$education.'</div>';
                                        endif;
                                    ?>
                                    <h3 class="text-center">Request A Consultation</h3>
									<p class="text-center">You can complete the following form to request a consultation.</p>
                                    <?php echo do_shortcode('[fluentform id="5"]');?>
                                </div>
                            </div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</section>

<?php endwhile; ?>
<?php get_footer(); ?>