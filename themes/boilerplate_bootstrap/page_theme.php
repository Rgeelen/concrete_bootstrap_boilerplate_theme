<?php 
namespace Concrete\Package\ConcreteBootstrapBoilerplateTheme\Theme\BoilerplateBootstrap;

use Concrete\Core\Page\Theme\Theme;
use Concrete\Core\Area\Layout\Preset\Provider\ThemeProviderInterface;


class PageTheme extends Theme implements ThemeProviderInterface
{

	/** 
	 * Set bootstrap as grid frame work
	 * Docs: http://goo.gl/GdvAr7
	 */
	
	protected $pThemeGridFrameworkHandle = 'bootstrap3';

	/** 
	 * Register theme assets
	 * Docs: http://goo.gl/JjCS6c
	 */
	
	public function registerAssets()
	{
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

    /*
     * Add Custom Layout Presets
     * Docs: http://documentation.concrete5.org/developers/designing-for-concrete5/adding-complex-custom-layout-presets-in-your-theme
     */
    public function getThemeAreaLayoutPresets()
	{
		$presets = array(
	        array(
	            'handle' => 'medium_two_large_four',
	            'name' => 'Medium Two Large Four',
	            'container' => '<div class="row"></div>',
	            'columns' => array(
	                '<div class="col-md-6 col-lg-3"></div>',
	                '<div class="col-md-6 col-lg-3"></div>',
	                '<div class="col-md-6 col-lg-3"></div>',
	                '<div class="col-md-6 col-lg-3"></div>'
	            ),
	        )
	    );
	    return $presets;
	}
	

}
?>