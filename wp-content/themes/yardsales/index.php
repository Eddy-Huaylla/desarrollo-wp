<?php
get_header();
if (have_posts()) {
	while (have_posts()) {
		the_post();
		the_content();
	}
}
?>

<?php

	$args = array(
		"post_type" => array("producto"),
		"posts_per_page" => -1
	);

	$productos = new WP_Query($args);
?>

<div class="productos__container">

	<?php
	if( $productos->have_posts() ) {
		while( $productos->have_posts() ) {
			$productos->the_post();
		?>

		<div class="productos__card">
			<?= the_post_thumbnail("post-thumbnail"); ?>
			<div class="producto__caption">
				<div class="productos__desc">
					<a class="producto__link" href="<?= the_permalink(); ?>">
						<h4 class="productos__titulo"><?= the_title(); ?></h4>
					</a>
				</div>
			</div>
		</div>

		<?php
		}
	}
	?>

</div>

<?php get_footer() ?>