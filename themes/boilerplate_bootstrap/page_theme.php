<?php 
namespace Concrete\Package\ConcreteBootstrapBoilerplateTheme\Theme\BoilerplateBootstrap;

use Concrete\Core\Page\Theme\Theme;


class PageTheme extends Theme{

	/** 
	 * Set bootstrap as grid frame work
	 * Docs: http://goo.gl/GdvAr7
	 */
	
	protected $pThemeGridFrameworkHandle = 'bootstrap3';

	/** 
	 * Register theme assets
	 * Docs: http://goo.gl/JjCS6c
	 */
	
	public function registerAssets(){
		$this->providesAsset('css', 'bootstrap/*');
		
		$this->requireAsset('javascript', 'jquery');
		$this->requireAsset('javascript', 'picturefill');
		
	}

	/*
	 * Create responsive images
	 * Thumbnails need to be configured via settings
	 * in the dashboard
	 */
	public function getThemeResponsiveImageMap()
    {
        return array(
            'large' => '900px',
            'medium' => '768px',
            'small' => '0',
        );
    }


} //end of class extend

?>