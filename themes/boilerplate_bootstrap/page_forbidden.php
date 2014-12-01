<?php defined('C5_EXECUTE') or die ('Access Denied.'); 
/**
 * 403 page forbidden
 */
?>


<?php $this->inc('elements/header.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1><?php echo t('403 Error')?></h1>
            <p><?php echo t('You are not allowed to access this page.')?></p>
		</div>
	</div>
</div>

<?php $this->inc('elements/footer.php'); ?>