<?php 
namespace Concrete\Package\ConcreteBootstrapBoilerplateTheme;

use Concrete\Core\Package\Package;
use Concrete\Core\Page\Theme\Theme;

defined('C5_EXECUTE') or die('Access Denied');

class Controller extends Package{

	protected $pkgHandle = 'concrete_bootstrap_boilerplate_theme';
	protected $appVersionRequired = '5.7.2';
	protected $pkgVersion = '0.5.0';

	public function getPackageName(){
		return t('Concrete Custom Theme boilerplate');
	}

	public function getPackageDescription(){
		return t('Boilerplate Theme for new projects; bootstrap included');
	}


	public function install(){
		
		$pkg = parent::install();

		//install Theme
		Theme::add('boilerplate_bootstrap', $pkg);
		
	}
}