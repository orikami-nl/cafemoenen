<?php   
	defined('C5_EXECUTE') or die("Access Denied.");
	$aBlocks = $controller->generateNav();
	$c = Page::getCurrentPage();
	$containsPages = false;
	
	$nh = Loader::helper('navigation');
	
	//this will create an array of parent cIDs 
	$inspectC=$c;
	$selectedPathCIDs=array( $inspectC->getCollectionID() );
	$parentCIDnotZero=true;	
	while($parentCIDnotZero){
		$cParentID=$inspectC->cParentID;
		if(!intval($cParentID)){
			$parentCIDnotZero=false;
		}else{
			if ($cParentID != HOME_CID) {
				$selectedPathCIDs[]=$cParentID; //Don't want home page in nav-path-selected
			}
			$inspectC=Page::getById($cParentID);
		}
	} 	
	
	$excluded_parent_level = 9999; //Arbitrarily high number denotes that we're NOT currently excluding a parent (because all actual page levels will be lower than this)
	$exclude_children_below_level = 9999; //Same deal as above. Note that in this case "below" means a HIGHER number (because a lower number indicates higher placement in the sitemp -- e.g. 0 is top-level)
	
	foreach($aBlocks as $ni) {
		$_c = $ni->getCollectionObject();
		if ($_c->getCollectionAttributeValue('exclude_nav') && ($ni->getLevel() <= $excluded_parent_level)) {
			$excluded_parent_level = $ni->getLevel();
		} else if ($ni->getLevel() <= $excluded_parent_level && $ni->getLevel() <= $exclude_children_below_level) {
			
			$excluded_parent_level = 9999; //Reset to arbitrarily high number to denote that we're no longer excluding a parent
			$exclude_children_below_level = 9999; //Same as above
			if ($_c->getCollectionAttributeValue('exclude_subpages_from_nav')) {
				$exclude_children_below_level = $ni->getLevel();
			}
			
			$target = $ni->getTarget();
			if ($target != '') {
				$target = 'target="' . $target . '"';
			}
			if (!$containsPages) {
				// this is the first time we've entered the loop so we print out the UL tag
				echo("<ul class=\"nav\">");
			}
			
			$containsPages = true;
			
			$thisLevel = $ni->getLevel();
			if ($thisLevel > $lastLevel) {
				echo("<ul>");
			} else if ($thisLevel < $lastLevel) {
				for ($j = $thisLevel; $j < $lastLevel; $j++) {
					if ($lastLevel - $j > 1) {
						echo("</li></ul>");
					} else {
						echo("</li></ul></li>");
					}
				}
			} else if ($i > 0) {
				echo("</li>");
			}

			$pageLink = false;
			
			if ($_c->getCollectionAttributeValue('replace_link_with_first_in_nav')) {
				$subPage = $_c->getFirstChild();
				if ($subPage instanceof Page) {
					$pageLink = $nh->getLinkToCollection($subPage);
				}
			}
			
			if (!$pageLink) {
				$pageLink = $ni->getURL();
			}

			if ($c->getCollectionID() == $_c->getCollectionID()) { 
				echo('<li class="nav-selected nav-path-selected"><a class="nav-selected nav-path-selected" ' . $target . ' href="' . $pageLink . '"><span class="pageName">' . $ni->getName() . '</span><span class="description">'. $_c->getCollectionDescription().'</span></a>');
			} elseif ( in_array($_c->getCollectionID(),$selectedPathCIDs) ) { 
				echo('<li class="nav-path-selected"><a class="nav-path-selected" href="' . $pageLink . '" ' . $target . '><span class="pageName">' . $ni->getName() . '</span><span class="description">'. $_c->getCollectionDescription().'</span></a>');
			} else {
				echo('<li><a href="' . $pageLink . '" ' . $target . ' ><span class="pageName">' . $ni->getName() . '</span><span class="description">'. $_c->getCollectionDescription().'</span></a>');
			}	
			$lastLevel = $thisLevel;
			$i++;
			
			
		}
	}
	
	$thisLevel = 0;
	if ($containsPages) {
		for ($i = $thisLevel; $i <= $lastLevel; $i++) {
			echo("</li></ul>");
		}
	}

?>