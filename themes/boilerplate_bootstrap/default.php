<?php 
defined('C5_EXECUTE') or die ('Acccess denied.');
/**
 * Default 
 * Is used when no other pagetype is defined for the page
 */
?>

<?php $this->inc('elements/header.php'); ?>

<main>
<?php
$a = new Area('Main');
$a->enableGridContainer();
$a->display($c);
?>
</main>

<?php $this->inc('elements/footer.php'); ?>
