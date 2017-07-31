<?php
/**
 * Template Name: Home Page
 *
 */

get_header();
?>

<section id="book-form">
	<div class="plane-image"></div>
	<form name="booking" id="booking" method="POST" action="">
		<div class="book-panel">
			<div class="panel-locations">
				<div>
					<div class="panel-dd pick-up">
						<span>PICK-UP</span>
						<select name="book-pick-up" id="book-pick-up">
							<option>Changi Airport Private Terminal</option>
							<option>Kuala Lumpur International Airport</option>
							<option>Halim Perdanakusuma International Airport</option>
							<option>Phuket Island Airport</option>
							<option>Noi Bai International Airport</option>
							<option>Ninoy Aquino International Airport</option>
						</select>
					</div>
				</div>
				<div>
					<div class="panel-dd drop-off">
						<span>DROP-OFF</span>
						<select name="book-drop-off" id="book-drop-off">
							<option>Changi Airport Private Terminal</option>
							<option>Kuala Lumpur International Airport</option>
							<option>Halim Perdanakusuma International Airport</option>
							<option>Phuket Island Airport</option>
							<option>Noi Bai International Airport</option>
							<option>Ninoy Aquino International Airport</option>
						</select>
					</div>
				</div>
			</div>
			<div class="panel-extra-date">
				<div class="extra-services">
					<span id="extra-toggle">Choose your add-ons</span>
					<ul class="addon-items">
						<li><input type="checkbox" value="300" /> <span>Flight Attendant (+$300)</span></li>
						<li><input type="checkbox" value="100"/> <span>Full Kitchen (+$100)</span></li>
						<li><input type="checkbox" value="50"/> <span>Massage (+$50)</span></li>
						<li><input type="checkbox" value="180"/> <span>Jacuzzi (+$180)</span></li>
					</ul>
				</div>
				<div class="book-date">
					<input type="date" name="book-date" id="datepicker" placeholder="Choose a date" />
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<button id="book-submit">Request a Jet <span>$199</span></button>
	</form>
</section>

<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class="entry-content">
<?php the_content(); ?>
</section>
</article>
<?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>