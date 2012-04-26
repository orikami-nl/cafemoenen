<?php     defined('C5_EXECUTE') or die(_("Access Denied.")); 

if(isset($large)){
	$size = '32';
} else {
	$size = '16';
}
?>

<!-- SOCIAL PROFILES -->
<ul class="block-socialprofiles<?php   if(isset($large)):?> large<?php   endif; ?>">
<?php    foreach($profiles as $value=>$url): ?>
<?php    if($url != null): ?>
	<li><a href="<?php    echo $url ?>"><img src="<?php    echo DIR_REL?>/packages/defunct_social_icons/blocks/defunct_social_icons/images/<?php    echo $value?>_<?php   echo $size?>.png" alt="<?php    echo $value?>" /><?php    echo  ucfirst(str_replace('_', ' ', $value))?></a></li>
<?php   endif; ?>
<?php   endforeach; ?>
</ul>
<!-- / SOCIAL PROFILES -->