<?php 

$theLink = Page::getCollectionPathFromID($pageID);
$theLink = DIR_REL . $theLink;
 
?>  

<div class="cta">
                
                    <a href="<?php  echo $theLink ?>" class="dot-awesome-button"><?php  echo $ctaLinkText?></a>
                    <p class="ctaDesc"><?php  echo $ctaDesc?></p>
                                    
                </div>      