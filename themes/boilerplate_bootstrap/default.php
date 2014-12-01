<?php defined('C5_EXECUTE') or die ('Acccess denied.');
/**
 * Default 
 * Is used when no other pagetype is defined for the page
 */

$this->inc('elements/header.php');

/*
 * The main area for the content
 * gridContainer is enabled
 */
$a = new Area('Main');
$a->enableGridContainer();
$a->display($c);



$this->inc('elements/footer.php'); ?>
