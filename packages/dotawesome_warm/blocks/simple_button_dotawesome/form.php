<?php    
defined('C5_EXECUTE') or die(_("Access Denied."));
$formPageSelector = Loader::helper('form/page_selector');
?>

<div style="margin: 20px 0;">
<?php  echo("<label>Select which page to link to:</label>");
echo $formPageSelector->selectPage('pageID',$pageID); ?>
</div>

<div style="margin: 20px 0;">
<?php  echo $form->label('ctaLinkText', 'Link Text:');?>
<?php  echo $form->text('ctaLinkText', $ctaLinkText, array('style' => 'width: 320px'));?>
</div>