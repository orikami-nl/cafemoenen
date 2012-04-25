<?php 

$theLink = Page::getCollectionPathFromID($pageID);
$theLink = DIR_REL . $theLink;
 
?>  


<a href="<?php  echo $theLink ?>" class="dot-awesome-button"><?php  echo $ctaLinkText?></a>