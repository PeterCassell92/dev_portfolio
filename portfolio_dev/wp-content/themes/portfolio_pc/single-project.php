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
                                        $email = get_field('project_name');
                                        $phone = get_field('phone_number');

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
                                    <h1><?php get_field('project_name'); ?></h1>
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

<div class="elementor-section-wrap">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-fead42f title-section elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="fead42f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-747e6e3 full-height" data-id="747e6e3" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-067d35e elementor-widget elementor-widget-heading" data-id="067d35e" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h1 class="elementor-heading-title elementor-size-default">PETE CASSELL</h1>		</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-e3ed0b0 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e3ed0b0" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0a84602" data-id="0a84602" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-dda0306 elementor-widget elementor-widget-text-editor" data-id="dda0306" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							Web Application <br> Developer						</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e2b4d9f" data-id="e2b4d9f" data-element_type="column">
			<div class="elementor-widget-wrap">
									</div>
		</div>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-10803ae about-me elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="10803ae" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1c9ae32" data-id="1c9ae32" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-d338bce elementor-widget elementor-widget-html" data-id="d338bce" data-element_type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
			<div class="section-heading">
    <div class="heading-text">
    <h2> ABOUT ME </h2>
    </div>
    <div class="circle"></div>
</div>		</div>
				</div>
				<div class="elementor-element elementor-element-6d1c2ea elementor-widget elementor-widget-text-editor" data-id="6d1c2ea" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p>I am full-stack web developer based in Cambridge. For the past two years I have developed web applications using Verj.io, a development platform built by Ebase Technology.&nbsp;</p><p>Through building applications with Verj.io I have become comfortable with many areas of web technology such as HTML5, SCSS, Client-side JavaScript, API development &amp; integration, database design and SQL.</p><p>I am now developing using WordPress (PHP), Django (Python) and ReactJS (JS) and I am looking to take on contract / full-time work using these technologies.</p>						</div>
				</div>
				<div class="elementor-element elementor-element-bac4426 elementor-widget elementor-widget-button" data-id="bac4426" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="#" class="elementor-button-link elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">View CV</span>
		</span>
					</a>
		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-c7cc54b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c7cc54b" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f5ab3a3" data-id="f5ab3a3" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-6dcd4d3 elementor-widget elementor-widget-html" data-id="6dcd4d3" data-element_type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
			<div class="section-heading">
    <div class="heading-text">
    <h2>MY WORK</h2>
    </div>
    <div class="circle"></div>
</div>		</div>
				</div>
				<div class="elementor-element elementor-element-40c7d33 elementor-arrows-position-inside elementor-pagination-position-outside elementor-invisible elementor-widget elementor-widget-image-carousel" data-id="40c7d33" data-element_type="widget" id="test-carousel" data-settings="{&quot;_animation&quot;:&quot;pulse&quot;,&quot;navigation&quot;:&quot;both&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500}" data-widget_type="image-carousel.default">
				<div class="elementor-widget-container">
					<div class="elementor-image-carousel-wrapper swiper-container swiper-container-initialized swiper-container-horizontal" dir="ltr">
			<div class="elementor-image-carousel swiper-wrapper" style="transition-duration: 500ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="http://portfolio-dev.local/wp-content/uploads/2021/10/Nokia-3310-Hero-150x150.png" alt="alt-text1"><figcaption class="elementor-image-carousel-caption">Nokia-3310-Hero</figcaption></figure></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="http://portfolio-dev.local/wp-content/uploads/2021/10/nokia-6300_4G-light_charcoal-front_back-int-150x150.webp" alt="alttext-2"><figcaption class="elementor-image-carousel-caption">nokia-6300_4G-light_charcoal-front_back-int</figcaption></figure></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="http://portfolio-dev.local/wp-content/uploads/2021/10/nokia-225_4G-charcoal-front_back-int-150x150.webp" alt="alt text 3"><figcaption class="elementor-image-carousel-caption">nokia-225_4G-charcoal-front_back-int</figcaption></figure></div>
								<div class="swiper-slide" data-swiper-slide-index="0"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="http://portfolio-dev.local/wp-content/uploads/2021/10/Nokia-3310-Hero-150x150.png" alt="alt-text1"><figcaption class="elementor-image-carousel-caption">Nokia-3310-Hero</figcaption></figure></div><div class="swiper-slide" data-swiper-slide-index="1"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="http://portfolio-dev.local/wp-content/uploads/2021/10/nokia-6300_4G-light_charcoal-front_back-int-150x150.webp" alt="alttext-2"><figcaption class="elementor-image-carousel-caption">nokia-6300_4G-light_charcoal-front_back-int</figcaption></figure></div><div class="swiper-slide" data-swiper-slide-index="2"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="http://portfolio-dev.local/wp-content/uploads/2021/10/nokia-225_4G-charcoal-front_back-int-150x150.webp" alt="alt text 3"><figcaption class="elementor-image-carousel-caption">nokia-225_4G-charcoal-front_back-int</figcaption></figure></div>			<div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="http://portfolio-dev.local/wp-content/uploads/2021/10/Nokia-3310-Hero-150x150.png" alt="alt-text1"><figcaption class="elementor-image-carousel-caption">Nokia-3310-Hero</figcaption></figure></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="http://portfolio-dev.local/wp-content/uploads/2021/10/nokia-6300_4G-light_charcoal-front_back-int-150x150.webp" alt="alttext-2"><figcaption class="elementor-image-carousel-caption">nokia-6300_4G-light_charcoal-front_back-int</figcaption></figure></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2"><figure class="swiper-slide-inner"><img class="swiper-slide-image" src="http://portfolio-dev.local/wp-content/uploads/2021/10/nokia-225_4G-charcoal-front_back-int-150x150.webp" alt="alt text 3"><figcaption class="elementor-image-carousel-caption">nokia-225_4G-charcoal-front_back-int</figcaption></figure></div></div>
												<div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
													<div class="elementor-swiper-button elementor-swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide">
						<i class="eicon-chevron-left" aria-hidden="true"></i>
						<span class="elementor-screen-only">Previous</span>
					</div>
					<div class="elementor-swiper-button elementor-swiper-button-next" tabindex="0" role="button" aria-label="Next slide">
						<i class="eicon-chevron-right" aria-hidden="true"></i>
						<span class="elementor-screen-only">Next</span>
					</div>
									<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-afef22c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="afef22c" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-81ee073" data-id="81ee073" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-6922768 elementor-widget elementor-widget-shortcode" data-id="6922768" data-element_type="widget" data-widget_type="shortcode.default">
				<div class="elementor-widget-container">
					<div class="elementor-shortcode"><div class="elementor-element elementor-arrows-position-inside elementor-pagination-position-outside elementor-widget elementor-widget-image-carousel animated pulse" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;pulse&quot;,&quot;navigation&quot;:&quot;both&quot;,&quot;autoplay&quot;:&quot;yes&quot;
                    ,&quot;pause_on_hover&quot;:&quot;yes&quot;
                    ,&quot;pause_on_interaction&quot;:&quot;yes&quot;
                    ,&quot;autoplay_speed&quot;:20000,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500}" data-widget_type="image-carousel.default">
                
        </div>
    </div></div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
						</div>