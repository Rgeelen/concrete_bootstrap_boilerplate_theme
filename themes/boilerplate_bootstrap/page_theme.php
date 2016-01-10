<?php 
namespace Concrete\Package\ConcreteBootstrapBoilerplateTheme\Theme\BoilerplateBootstrap;

use Concrete\Core\Page\Theme\Theme;


class PageTheme extends Theme{

	/** 
	 * Register theme assets
	 * Docs: http://goo.gl/JjCS6c
	 */
	
	public function registerAssets(){
		$this->providesAsset('css', 'bootstrap/*');
		
		
		$this->requireAsset('javascript', 'jquery');
	}


	/** 
	 * Set bootstrap as grid frame work
	 * Docs: http://goo.gl/GdvAr7
	 */

	protected $pThemeGridFrameworkHandle = 'bootstrap3';


} //end of class extend

?>