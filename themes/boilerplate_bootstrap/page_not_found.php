<?php defined('C5_EXECUTE') or die ('Access Denied.'); 
/**
 * 404 Page not found 
 */
?>


<?php $this->inc('elements/header.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1><?php echo t('404 Error'); ?></h1>
			<p><?php echo t('Page not found.')?></p>
		</div>
	</div>
</div>

<?php $this->inc('elements/footer.php'); ?>