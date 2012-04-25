<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));

class DotawesomeWarmPackage extends Package {

     protected $pkgHandle = 'dotawesome_warm';
     protected $appVersionRequired = '5.3.3.1';
     protected $pkgVersion = '2.01';

     public function getPackageDescription() {
          return t("The Only Theme You'll Need");
     }

     public function getPackageName() {
          return t("dotAwesome - Warm/Brown Variant");
     }
     
     public function install() {
          $pkg = parent::install();
     
          // install block 
          //if the power slider exists, then they probably have another variant of this theme, skip installing blocks.
			$block = BlockType::getByHandle('power_slider_dotawesome');
			if(!$block) {
			
				BlockType::installBlockTypeFromPackage('power_slider_dotawesome', $pkg); 
				BlockType::installBlockTypeFromPackage('simple_button_dotawesome', $pkg); 
				BlockType::installBlockTypeFromPackage('simple_cta_dotawesome', $pkg); 
				BlockType::installBlockTypeFromPackage('simple_hr_dotawesome', $pkg); 
				BlockType::installBlockTypeFromPackage('vcard_dotawesome', $pkg);
			
			}          
			
			PageTheme::add('dotawesome', $pkg);
     }
     
}
?>