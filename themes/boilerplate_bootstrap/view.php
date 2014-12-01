<?php defined('C5_EXECUTE') or die ('Access Denied.'); 
/**
 * View for single pages 
 */
?>


<?php $this->inc('elements/header.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php echo $innerContent ?>
		</div>
	</div>
</div>

<?php $this->inc('elements/footer.php'); ?>