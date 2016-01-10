<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!doctype html>
<html lang="<?php echo Localization::activeLanguage()?>" class="no-js <?php if( $c->isEditMode() ){ echo "editmode";}; ?>">
    <head>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php echo $html->css($view->getStylesheet('main.less'));?>
        <?php Loader::element('header_required'); ?>    
    </head>

    <!-- set page name and pagetype name as class -->
    <body>

        <div class="<?php echo $c->getPageWrapperClass(); ?>">
    
            <!-- navigation -->
            <nav class="navbar navbar-default" role= "navigation" id="globalnav">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo $this->url(''); ?>"><?php echo Config::get('concrete.site'); ?></a>
                    </div>
                    
                    <!-- nav items -->
                    <div class="collapse navbar-collapse" id="navbar-collapse-1">

                        <?php
                        /** 
                        * Hardcoded navigation
                        * bootstrap navigation template is required
                        * download: https://github.com/Rgeelen/Concrete5-autonav-bootstrap-template
                        */
                        
                        $nav = BlockType::getByHandle('autonav');
                        $nav->controller->orderBy = 'display_asc';
                        $nav->controller->displayPages = 'top';
                        $nav->controller->displaySubpages = 'none';
                        $nav->controller->navArray = array();
                        $nav->render('templates/bootstrap');
                        ?>

                    </div>
                </div><!-- /.container -->
            </nav>