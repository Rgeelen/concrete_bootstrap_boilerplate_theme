<?php defined ('C5_EXECUTE') or die(_('Access denied.')); ?>
<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage()?>" class="no-js <?php if( $c->isEditMode() ){ echo "editmode";}; ?>">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- css includes -->
        <link rel="stylesheet" href="<?php echo $view->getThemePath(); ?>/css/vendor/bootstrap/bootstrap.min.css">
        <?php echo $html->css($view->getStylesheet('main.less'));?>
        
        <?php Loader::element('header_required'); ?>
        
        <!-- Modernizr and respond.js-->
        <script src="<?php echo $view->getThemePath(); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        
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
                        * download: link
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