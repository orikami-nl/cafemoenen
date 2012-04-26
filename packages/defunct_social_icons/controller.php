<?php    

defined('C5_EXECUTE') or die(_("Access Denied."));

class DefunctSocialIconsPackage extends Package {

	protected $pkgHandle = 'defunct_social_icons';
	protected $appVersionRequired = '5.3.2';
	protected $pkgVersion = '1.2';
	
	public function getPackageDescription() {
		return t("Installs the Social Icons Block");
	}
	
	public function getPackageName() {
		return t("Social Icons");
	}
	
	public function install() {
		$pkg = parent::install();
		
		// install block		
		BlockType::installBlockTypeFromPackage('defunct_social_icons', $pkg);		
		
	}
}