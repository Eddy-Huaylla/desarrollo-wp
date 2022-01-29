<?php
get_header();
if (have_posts()) {
	while (have_posts()) {
		the_post();
		the_content();
	}
}
?>

<div class="productos__container">
	<div class="productos__card">
		<figure>
			<img src="<?= get_template_directory_uri(); ?>/assets/img/prod_1.png" alt="producto 1">
		</figure>
		<div class="producto__caption">
			<div class="productos__desc">
				<a class="producto__link" href="#">
					<h4 class="productos__titulo">Retro refrigerato</h4>
				</a>
			</div>
		</div>
	</div>
	<div class="productos__card">
		<figure>
			<img src="<?= get_template_directory_uri(); ?>/assets/img/prod_2.png" alt="producto 1">
		</figure>
		<div class="producto__caption">
			<div class="productos__desc">
				<a class="producto__link" href="#">
					<h4 class="productos__titulo">Retro refrigerato</h4>
				</a>
			</div>
		</div>
	</div>
	<div class="productos__card">
		<figure>
			<img src="<?= get_template_directory_uri(); ?>/assets/img/prod_1.png" alt="producto 1">
		</figure>
		<div class="producto__caption">
			<div class="productos__desc">
				<a class="producto__link" href="#">
					<h4 class="productos__titulo">Round Shelf</h4>
				</a>
			</div>
		</div>
	</div>
	<div class="productos__card">
		<figure>
			<img src="<?= get_template_directory_uri(); ?>/assets/img/prod_2.png" alt="producto 1">
		</figure>
		<div class="producto__caption">
			<div class="productos__desc">
				<a href="">
					<h4 class="productos__titulo">Retro refrigerato</h4>
				</a>
			</div>
		</div>
	</div>
	<div class="productos__card">
		<figure>
			<img src="<?= get_template_directory_uri(); ?>/assets/img/prod_1.png" alt="producto 1">
		</figure>
		<div class="producto__caption">
			<div class="productos__desc">
				<a class="producto__link" href="#">
					<h4 class="productos__titulo">Retro refrigerato</h4>
				</a>
			</div>
		</div>
	</div>
	<div class="productos__card">
		<figure>
			<img src="<?= get_template_directory_uri(); ?>/assets/img/prod_2.png" alt="producto 1">
		</figure>
		<div class="producto__caption">
			<div class="productos__desc">
				<a href="">
					<h4 class="productos__titulo">Retro refrigerato</h4>
				</a>
			</div>
		</div>
	</div>
	<div class="productos__card">
		<figure>
			<img src="<?= get_template_directory_uri(); ?>/assets/img/prod_1.png" alt="producto 1">
		</figure>
		<div class="producto__caption">
			<div class="productos__desc">
				<a class="producto__link" href="#">
					<h4 class="productos__titulo">Retro refrigerato</h4>
				</a>
			</div>
		</div>
	</div>
	<div class="productos__card">
		<figure>
			<img src="<?= get_template_directory_uri(); ?>/assets/img/prod_2.png" alt="producto 1">
		</figure>
		<div class="producto__caption">
			<div class="productos__desc">
				<a href="">
					<h4 class="productos__titulo">Retro refrigerato</h4>
				</a>
			</div>
		</div>
	</div>
	<div class="productos__card">
		<figure>
			<img src="<?= get_template_directory_uri(); ?>/assets/img/prod_1.png" alt="producto 1">
		</figure>
		<div class="producto__caption">
			<div class="productos__desc">
				<a class="producto__link" href="#">
					<h4 class="productos__titulo">Retro refrigerato</h4>
				</a>
			</div>
		</div>
	</div>
	<div class="productos__card">
		<figure>
			<img src="<?= get_template_directory_uri(); ?>/assets/img/prod_2.png" alt="producto 1">
		</figure>
		<div class="producto__caption">
			<div class="productos__desc">
				<a href="">
					<h4 class="productos__titulo">Retro refrigerato</h4>
				</a>
			</div>
		</div>
	</div>
</div>

<?php get_footer() ?>