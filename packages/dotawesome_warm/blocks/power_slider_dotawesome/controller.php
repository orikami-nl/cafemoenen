<?php  
defined('C5_EXECUTE') or die("Access Denied.");
class PowerSliderDotawesomeBlockController extends BlockController {
	
	var $pobj;
	
	protected $btTable = 'btPowerSlideDotawesome';
	protected $btInterfaceWidth = "650";
	protected $btInterfaceHeight = "400";
	protected $btCacheBlockOutput = true;
	protected $btCacheBlockOutputOnPost = true;
	protected $btCacheBlockOutputForRegisteredUsers = true;

	public $defaultWidth = '940';
	public $defaultHeight = '290';
	public $defaultTransition = 'scrollLeft';
	public $defaultDelay = '5';
	public $defaultPrevX = '0';
	public $defaultPrevY = '80';
	public $defaultNextX = '0';
	public $defaultNextY = '80';
	public $defaultPaginationY = '0';
	public $defaultPaginationAlignment = 'right';	
	
	public $playback = "ORDER";	

	/** 
	 * Used for localization. If we want to localize the name/description we have to include this
	 */
	public function getBlockTypeDescription() {
		return t("Image Slider with Power Phrases");
	}
	
	public function getBlockTypeName() {
		return t("dotAwesome Power Slider");
	}
		
	public function getJavaScriptStrings() {
		return array(
			'choose-file' => t('Choose Image/File'),
			'choose-min-2' => t('Please choose at least two images.'),
			'choose-fileset' => t('Please choose a file set.')
		);
	}
	
	function __construct($obj = null) {		
		parent::__construct($obj);
		
		$this->set('defaultWidth', $this->defaultWidth);
        $this->set('defaultHeight', $this->defaultHeight);
		$this->set('defaultTransition', $this->defaultTransition);
		$this->set('defaultDelay', $this->defaultDelay);
		$this->set('defaultPrevX', $this->defaultPrevX);
		$this->set('defaultPrevY', $this->defaultPrevY);
		$this->set('defaultNextX', $this->defaultNextX);
		$this->set('defaultNextY', $this->defaultNextY);
		$this->set('defaultPaginationY', $this->defaultPaginationY);
		$this->set('defaultPaginationAlignment', $this->defaultPaginationAlignment);
	}	
	
	function getFileSetName(){
		$sql = "SELECT fsName FROM FileSets WHERE fsID=".intval($this->fsID);
		$db = Loader::db();
		return $db->getOne($sql); 
	}

	function loadFileSet(){
		if (intval($this->fsID) < 1) {
			return false;
		}
        Loader::helper('concrete/file');
		Loader::model('file_attributes');
		Loader::library('file/types');
		Loader::model('file_list');
		Loader::model('file_set');
		
		$ak = FileAttributeKey::getByHandle('height');

		$fs = FileSet::getByID($this->fsID);
		$fileList = new FileList();		
		$fileList->filterBySet($fs);
		$fileList->filterByType(FileType::T_IMAGE);	
		$fileList->sortByFileSetDisplayOrder();
		
		$files = $fileList->get(1000,0);
		
		
		$image = array();
		
		$image['pageID'] = $this->pageID;
		$image['powerSlidePhraseTitle'] = $this->powerSlidePhraseTitle;
		$image['powerSlidePhraseDesc'] = $this->powerSlidePhraseDesc;
		$image['powerSlideLinkText'] = $this->powerSlideLinkText;
		$image['groupSet'] = 0;
		$images = array();
		$maxHeight = 0;
		foreach ($files as $f) {
			$fp = new Permissions($f);
			if(!$fp->canRead()) { continue; }
			$image['fID'] 			= $f->getFileID();
			$image['fileName'] 		= $f->getFileName();
			$image['fullFilePath'] 	= $f->getPath();
			
			// find the max height of all the images so slideshow doesn't bounce around while rotating
			$vo = $f->getAttributeValueObject($ak);
			if (is_object($vo)) {
				$image['imgHeight'] = $vo->getValue('height');
			}
			if ($maxHeight == 0 || $image['imgHeight'] > $maxHeight) {
				$maxHeight = $image['imgHeight'];
			}
			$images[] = $image;
		}
		$this->images = $images;
	
	}

	function loadImages(){
		if(intval($this->bID)==0) $this->images=array();
		$sortChoices=array('ORDER'=>'position','RANDOM-SET'=>'groupSet asc, position asc','RANDOM'=>'rand()');
		if( !array_key_exists($this->playback,$sortChoices) ) 
			$this->playback='ORDER';
		if(intval($this->bID)==0) return array();
		$sql = "SELECT * FROM btPowerSlideImg WHERE bID=".intval($this->bID).' ORDER BY '.$sortChoices[$this->playback];
		$db = Loader::db();
		$this->images=$db->getAll($sql); 
	}
	
	function delete(){
		$db = Loader::db();
		$db->query("DELETE FROM btPowerSlideImg WHERE bID=".intval($this->bID));		
		parent::delete();
	}
	
	function loadBlockInformation() {
		if ($this->fsID == 0) {
			$this->loadImages();
		} else {
			$this->loadFileSet();
		}
		$this->randomizeImages();	
		
		$this->set('pageID', $this->pageID);
		$this->set('powerSlidePhraseTitle', $this->powerSlidePhraseTitle);
		$this->set('powerSlidePhraseDesc', $this->powerSlidePhraseDesc);
		$this->set('powerSlideLinkText', $this->powerSlideLinkText);
		$this->set('minHeight', $this->minHeight);
		$this->set('fsID', $this->fsID);
		$this->set('fsName', $this->getFileSetName());
		$this->set('images', $this->images);
		$this->set('playback', $this->playback);
		$type = ($this->fsID > 0) ? 'FILESET' : 'CUSTOM';
		$this->set('type', $type);
		$this->set('bID', $this->bID);				
	}
	
	function view() {
		$this->loadBlockInformation();
	}

	function add() {
		$this->loadBlockInformation();
	}
	
	function edit() {
		$this->loadBlockInformation();
	}
	
	function duplicate($nbID) {
		parent::duplicate($nbID);
		$this->loadBlockInformation();
		$db = Loader::db();
		/*foreach($this->images as $im) {
			$db->Execute('insert into btPowerSlideImg (bID, fID, pageID, powerSlidePhraseTitle, powerSlidePhraseDesc, powerSlideLinkText groupSet, position) values (?, ?, ?, ?, ?, ?, ?, ?)', 
				array($nbID, $im['fID'], $im['pageID'],$im['powerSlidePhraseTitle'],$im['powerSlidePhraseDesc'],$im['powerSlideLinkText'], $im['groupSet'], $im['position'])
			);		
		}*/
	}
	
	function save($data) { 
		$args['playback'] = isset($data['playback']) ? trim($data['playback']) : 'ORDER';
		$args['powerSlideWidth']  = $data['powerSlideWidth'];
		$args['powerSlideHeight']  = $data['powerSlideHeight'];
		$args['transitionType']  = $data['transitionType'];
		$args['slideDelay']  = $data['slideDelay'];
		$args['prevNextArrows']  = $data['prevNextArrows'];
		$args['paginationToggle']  = $data['paginationToggle'];
		$args['prevBtnOffsetX']  = $data['prevBtnOffsetX'];
		$args['prevBtnOffsetY']  = $data['prevBtnOffsetY'];
		$args['nextBtnOffsetX']  = $data['nextBtnOffsetX'];
		$args['nextBtnOffsetY']  = $data['nextBtnOffsetY'];
		$args['paginationOffsetY']  = $data['paginationOffsetY'];
		$args['paginationAlignment']  = $data['paginationAlignment'];
		$db = Loader::db();
		
		if( $data['type'] == 'FILESET' && $data['fsID'] > 0){
			$args['fsID'] = $data['fsID'];
			
			$files = $db->getAll("SELECT fv.fID FROM FileSetFiles fsf, FileVersions fv WHERE fsf.fsID = " . $data['fsID'] .
			         " AND fsf.fID = fv.fID AND fvIsApproved = 1");
			
			//delete existing images
			$db->query("DELETE FROM btPowerSlideImg WHERE bID=".intval($this->bID));
		} else if( $data['type'] == 'CUSTOM' && count($data['imgFIDs']) ){
			$args['fsID'] = 0;
			$args['pageID'] = $data['pageID'];
			$args['powerSlidePhraseTitle'] = $data['powerSlidePhraseTitle'];
			$args['powerSlidePhraseDesc'] = $data['powerSlidePhraseDesc'];
			$args['powerSlideLinkText'] = $data['powerSlideLinkText'];
			
			//delete existing images
			$db->query("DELETE FROM btPowerSlideImg WHERE bID=".intval($this->bID));
			
			//loop through and add the images
			$pos=0;
			foreach($data['imgFIDs'] as $imgFID){ 
				if(intval($imgFID)==0 || $data['fileNames'][$pos]=='tempFilename') continue;
				$vals = array(intval($this->bID),intval($imgFID), intval($data['pageID'][$pos]),
						trim($data['powerSlidePhraseTitle'][$pos]),trim($data['powerSlidePhraseDesc'][$pos]),trim($data['powerSlideLinkText'][$pos]),
						intval($data['groupSet'][$pos]),$pos);
				$db->query("INSERT INTO btPowerSlideImg (bID,fID,pageID,powerSlidePhraseTitle,powerSlidePhraseDesc,powerSlideLinkText,groupSet,position) values (?,?,?,?,?,?,?,?)",$vals);
				$pos++;
			}
		}
		
		parent::save($args);
	}
	
	function randomizeImages()
	{
		if($this->playback == 'RANDOM')
		{
			shuffle($this->images);
		}
		else if($this->playback == 'RANDOM-SET')
		{
			$imageGroups=array();
			$imageGroupIds=array();
			$sortedImgs=array();
			foreach($this->images as $imgInfo){
				$imageGroups[$imgInfo['groupSet']][]=$imgInfo;
				if( !in_array($imgInfo['groupSet'],$imageGroupIds) )
					$imageGroupIds[]=$imgInfo['groupSet'];
			}
			shuffle($imageGroupIds);
			foreach($imageGroupIds as $imageGroupId){
				foreach($imageGroups[$imageGroupId] as $imgInfo)
					$sortedImgs[]=$imgInfo;
			}
			$this->images=$sortedImgs;
		}
	}
}

?>
