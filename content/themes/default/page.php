<?php include('includes/header.php'); ?>


	<div class="container">

		<div class="row">

			<div class="col-md-12 page">
			<?php if ($page->title) { ?>
				<h2><?= $page->title; ?></h2>
				<div class="heading-divider"></div>
			<?php } ?>
				<div class="page-body">
					<?= $page->body ?>
				</div>

			</div>

		</div>
    

	</div> 


<?php include('includes/footer.php'); ?>