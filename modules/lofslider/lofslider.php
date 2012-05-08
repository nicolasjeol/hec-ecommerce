<?php
/**
 * $ModDesc
 * 
 * @version		$Id: file.php $Revision
 * @package		modules
 * @subpackage	$Subpackage.
 * @copyright	Copyright (C) December 2010 LandOfCoder.com <@emai:landofcoder@gmail.com>.All rights reserved.
 * @license		GNU General Public License version 2
 */
if (!defined('_CAN_LOAD_FILES_')){
	define('_CAN_LOAD_FILES_',1);
} 
/**
 * lofslider Class
 */	
class lofslider extends Module
{
	/**
	 * @var LofParams $_params;
	 *
	 * @access private;
	 */
	private $_params = '';	
	
	/**
	 * @var array $_postErrors;
	 *
	 * @access private;
	 */
	private $_postErrors = array();		
	
	/**
	 * @var string $__tmpl is stored path of the layout-theme;
	 *
	 * @access private 
	 */
	//private $__tmpl = '' ;
	
   /**
    * Constructor 
    */
	function __construct()
	{
		$this->name = 'lofslider';
		parent::__construct();			
		$this->tab = 'LandOfCoder';				
		$this->version = '1.0.0';
		$this->displayName = $this->l('Lof Slider Module');
		$this->description = $this->l('Lof Slider Module');
		if( !defined("LOF_LOAD_LIB_PARAMS") ){
		    if(!class_exists("LofParams", false)){  
				require_once( _PS_ROOT_DIR_.'/modules/'.$this->name.'/libs/params.php' );
            }
			define("LOF_LOAD_LIB_PARAMS",true);
		}
		$this->_params = new LofParams( $this->name );	
    	//$this->__tmpl= dirname(__FILE__).'/tmpl/'.$this->getParamValue('module_theme','default').'/'.$this->name.'.php';
	}
  
   /**
    * process installing 
    */
	function install(){		
		if (!parent::install())
			return false;
		if(!$this->registerHook('home'))
			return false;			
		return true;
	}
	
	/*
	 * register hook right comlumn to display slide in right column
	 */
	function hookrightColumn($params)
	{		
		return $this->processHook( $params,"rightColumn");
	}
	
	/*
	 * register hook left comlumn to display slide in left column
	 */
	function hookleftColumn($params)
	{		
		return $this->processHook( $params,"leftColumn");
	}
	
	function hooktop($params)
	{		
		return $this->processHook( $params,"top");
	}
	
	function hookfooter($params)
	{		
		return $this->processHook( $params,"footer");
	}
	
	function hookcontenttop($params)
	{ 		
		return $this->processHook( $params,"contenttop");
	}
	
	
	function hookHeader($params)
	{ 
		return $this->processHook( $params,"contenttop");        		        
	}
  	
	function hooklofTop($params){
		return $this->processHook( $params,"lofTop");
	}
		
	function hookHome($params)
	{
		return $this->processHook( $params,"home");
	}
	
	/**
    * Proccess module by hook
    * $pparams: param of module
    * $pos: position call
    */
	function processHook($pparams, $pos="home"){
		global $smarty;
		//load param
		$params = $this->_params;
				
		//load javascript and css
		$headers = "";
		if(!defined('LOF_LOAD_LIB_MEDIA')){
			$headers = '<link rel="stylesheet" href="'
		 . __PS_BASE_URI__.'modules/lofslider/tmpl/'
		 . $this->getParamValue('module_theme','default').'/assets/style.css" type="text/css" media="screen" charset="utf-8" />';
			$headers .=  '<script src="'
		 . __PS_BASE_URI__.'modules/lofslider/assets/script.js" type="text/javascript"></script>';		
			define('LOF_LOAD_LIB_MEDIA', true);
		}
				
		$pageShowed = trim($params->get("page_unsignment",''));
		if( $pageShowed ){
			$pageShowed = preg_replace("/\+s/","",$pageShowed);
			$pageShowed = explode("\r\n",$pageShowed );
			$fileindex = basename($_SERVER['PHP_SELF'])."?".$_SERVER['QUERY_STRING'];
			if(!in_array($fileindex,$pageShowed) ){
				return false;	
			}
		}
		$homeSorce = $params->get("home_sorce","selectcat");
		if( $homeSorce == "selectcat"){				
			$where = "";
			$selectCat = $params->get("category","");		
			if($selectCat != ""){
				$catArray  = explode(",",$selectCat);
				if(count($catArray) == 1){
					$where = " AND cp.`id_category` = ".$catArray[0];
				}else{
					$where = " AND cp.`id_category` IN (".$selectCat.")";
				}	
			}
			$catArray       = explode(",",$selectCat);
			if(_PS_VERSION_ <="1.4"){				
				$products = self::getProductsV13( $where,0,$params->get("limit_items",5),"p.id_product" );
			}else{				
				$products = self::getProductsV14( $where,0,$params->get("limit_items",5),"p.id_product" );
			}			
		}elseif( $homeSorce == 'productids' ){
			$productids = explode(",", trim($params->get("productids","1,2,3,4,5")));
			$ids = array();
			foreach( $productids as $id ){
				$ids[] = (int)$id;
			}
			$where	  = " AND p.`id_product` IN (".implode(",",$ids).")"; 
			if(_PS_VERSION_ <="1.4"){				
				$products = self::getProductsV13( $where,0,$params->get("limit_items",5),"p.id_product" );
			}else{				
				$products = self::getProductsV14( $where,0,$params->get("limit_items",5),"p.id_product" );
			}
		}else{
			$category = new Category(1, Configuration::get('PS_LANG_DEFAULT'));
			$nb = (int)(Configuration::get('HOME_FEATURED_NBR'));
			$products = $category->getProducts((int)($pparams['cookie']->id_lang), 1, ($nb ? $nb : 10));
		}

		$tmp 			= $params->get( 'module_height', 'auto' );
		$moduleHeight   =  ( $tmp=='auto' ) ? 'auto' : (int)$tmp.'px';
		$tmp            = $params->get( 'module_width', 'auto' );
		$moduleWidth    =  ( $tmp=='auto') ? 'auto': (int)$tmp.'px';
		$theme 			= $params->get( 'theme' , '');
		$openTarget 	= $params->get( 'open_target', 'parent' );
		$class 			= $params->get( 'navigator_pos', 0 ) ? '':'lof-snleft';
		$blockid        = $this->id;
		$showButtons 	= $params->get('display_button',1);
		$prfSlide       = $pos;		
		
		$products = self::parseProduct($products, $thumb_size, $main_img_size, $params);
		// template asignment variables
		$smarty->assign( array(	
						      'prfSlide'        => $prfSlide,
							  'blockid' 		=> $blockid,	
							  'moduleWidth'     => $moduleWidth,
							  'moduleHeight'	=> $moduleHeight,
							  'params'		    => $params,
							  'thumb_size'	    => $thumb_size,
							  'main_img_size'	=> $main_img_size,	
							  'products'		=> $products,
							  'showButtons'		=> $showButtons,
							  'css3Class'		=>  $params->get('enable_css3','1') ? ' lof-css3':''
						));
		$smarty->assign( array('homeSize' => Image::getSize('thickbox')));
		$open_target = $params->get('open_target','_blank');
		$smarty->assign( 'target','target="'.$open_target.'"');
		// render for content layout of module
		$content = '';
		ob_start();
		 require( dirname(__FILE__).'/initjs.php' );		
	    $content = ob_get_contents();
	    ob_end_clean(); 
				
	    return $headers.$this->display(__FILE__, 'tmpl/'.$this->getParamValue('module_theme','default').'/default.tpl').$content;					
	}
	
	/**
	* Get data source: 
	*/
	function getProductsV13($where='', $limiStart=0, $limit=10, $order=''){		
		global $cookie, $link;
		$id_lang = intval($cookie->id_lang);
	
		$sql = '
		SELECT DISTINCT p.id_product, p.*, pa.`id_product_attribute`, pl.`description`, pl.`description_short`, pl.`available_now`, pl.`available_later`, pl.`link_rewrite`, pl.`meta_description`, pl.`meta_keywords`, pl.`meta_title`, pl.`name`, i.`id_image`, il.`legend`, m.`name` AS manufacturer_name, tl.`name` AS tax_name, t.`rate`, cl.`name` AS category_default, DATEDIFF(p.`date_add`, DATE_SUB(NOW(), INTERVAL '.(Validate::isUnsignedInt(Configuration::get('PS_NB_DAYS_NEW_PRODUCT')) ? Configuration::get('PS_NB_DAYS_NEW_PRODUCT') : 20).' DAY)) > 0 AS new,
			(p.`price` * IF(t.`rate`,((100 + (t.`rate`))/100),1) - IF((DATEDIFF(`reduction_from`, CURDATE()) <= 0 AND DATEDIFF(`reduction_to`, CURDATE()) >=0) OR `reduction_from` = `reduction_to`, IF(`reduction_price` > 0, `reduction_price`, (p.`price` * IF(t.`rate`,((100 + (t.`rate`))/100),1) * `reduction_percent` / 100)),0)) AS orderprice 
		FROM `'._DB_PREFIX_.'category_product` cp
		LEFT JOIN `'._DB_PREFIX_.'product` p ON p.`id_product` = cp.`id_product`
		LEFT JOIN `'._DB_PREFIX_.'product_attribute` pa ON (p.`id_product` = pa.`id_product` AND default_on = 1)
		LEFT JOIN `'._DB_PREFIX_.'category_lang` cl ON (p.`id_category_default` = cl.`id_category` AND cl.`id_lang` = '.intval($id_lang).')
		LEFT JOIN `'._DB_PREFIX_.'product_lang` pl ON (p.`id_product` = pl.`id_product` AND pl.`id_lang` = '.intval($id_lang).')
		LEFT JOIN `'._DB_PREFIX_.'image` i ON (i.`id_product` = p.`id_product` AND i.`cover` = 1)
		LEFT JOIN `'._DB_PREFIX_.'image_lang` il ON (i.`id_image` = il.`id_image` AND il.`id_lang` = '.intval($id_lang).')
		LEFT JOIN `'._DB_PREFIX_.'tax` t ON t.`id_tax` = p.`id_tax`
		LEFT JOIN `'._DB_PREFIX_.'tax_lang` tl ON (t.`id_tax` = tl.`id_tax` AND tl.`id_lang` = '.intval($id_lang).')
		LEFT JOIN `'._DB_PREFIX_.'manufacturer` m ON m.`id_manufacturer` = p.`id_manufacturer`
		WHERE  p.`active` = 1'.$where;		
	
		$sql .= ' ORDER BY '.$order
		.' LIMIT '.$limiStart.','.$limit;
		
		$result = Db::getInstance()->ExecuteS($sql);
		
		return Product::getProductsProperties($id_lang, $result);
	}	
	
   /**
    * Get data source: 
    */
	function getProductsV14($where='', $limiStart=0, $limit=10, $order=''){		
		global $cookie, $link;
    	$id_lang = intval($cookie->id_lang);
    
		$sql = '
		SELECT DISTINCT p.id_product, p.*, pa.`id_product_attribute`, pl.`description`, pl.`description_short`, pl.`available_now`, pl.`available_later`, pl.`link_rewrite`, pl.`meta_description`, pl.`meta_keywords`, pl.`meta_title`, pl.`name`, i.`id_image`, il.`legend`, m.`name` AS manufacturer_name, tl.`name` AS tax_name, t.`rate`, cl.`name` AS category_default, DATEDIFF(p.`date_add`, DATE_SUB(NOW(), INTERVAL '.(Validate::isUnsignedInt(Configuration::get('PS_NB_DAYS_NEW_PRODUCT')) ? Configuration::get('PS_NB_DAYS_NEW_PRODUCT') : 20).' DAY)) > 0 AS new,
			(p.`price` * IF(t.`rate`,((100 + (t.`rate`))/100),1)) AS orderprice


		FROM `'._DB_PREFIX_.'category_product` cp
		LEFT JOIN `'._DB_PREFIX_.'product` p ON p.`id_product` = cp.`id_product`
		LEFT JOIN `'._DB_PREFIX_.'product_attribute` pa ON (p.`id_product` = pa.`id_product` AND default_on = 1)
		LEFT JOIN `'._DB_PREFIX_.'category_lang` cl ON (p.`id_category_default` = cl.`id_category` AND cl.`id_lang` = '.(int)($id_lang).')
		LEFT JOIN `'._DB_PREFIX_.'product_lang` pl ON (p.`id_product` = pl.`id_product` AND pl.`id_lang` = '.(int)($id_lang).')
		LEFT JOIN `'._DB_PREFIX_.'image` i ON (i.`id_product` = p.`id_product` AND i.`cover` = 1)
		LEFT JOIN `'._DB_PREFIX_.'image_lang` il ON (i.`id_image` = il.`id_image` AND il.`id_lang` = '.(int)($id_lang).')
		LEFT JOIN `'._DB_PREFIX_.'tax_rule` tr ON (p.`id_tax_rules_group` = tr.`id_tax_rules_group`
		                                           AND tr.`id_country` = '.(int)Country::getDefaultCountryId().'
	                                           	   AND tr.`id_state` = 0)
	    LEFT JOIN `'._DB_PREFIX_.'tax` t ON (t.`id_tax` = tr.`id_tax`)
		LEFT JOIN `'._DB_PREFIX_.'tax_lang` tl ON (t.`id_tax` = tl.`id_tax` AND tl.`id_lang` = '.(int)($id_lang).')
		LEFT JOIN `'._DB_PREFIX_.'manufacturer` m ON m.`id_manufacturer` = p.`id_manufacturer`		
		WHERE  p.`active` = 1'.$where;			
		$sql .= ' ORDER BY '.$order
		.' LIMIT '.$limiStart.','.$limit;		
		$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->ExecuteS($sql);		
		return Product::getProductsProperties($id_lang, $result);
	}
	
   /**
    * parse product: process resizing image, 
    */
	function parseProduct($products, &$thumb_size, &$main_img_size, $params){
		global $link;							
    
	    if( !defined("LOF_LOAD_LIB_PHPTHUMB") ) {
			if(!class_exists("PhpThumbFactory", false )){		
				require( dirname(__FILE__).'/libs/phpthumb/ThumbLib.inc.php' );	
			}
	      define("LOF_LOAD_LIB_PHPTHUMB",true);
	    }	
	   
		$isRenderedMainImage = 	$params->get("cre_main_size",0);
	    $isRenderedThumbnail =  $params->get("cre_thumb_size",0);
	    $thumbnailSize       =  $params->get("thumb_size",'small');
	    $mainImageSize       =  $params->get("main_img_size",'thickbox')  ;           
		$thumb_size["height"] = $params->get("thumb_height",35); 
		$thumb_size["width"]  = $params->get("thumb_width",85);
		$main_img_size["height"] = $params->get("main_height",300); 
		$main_img_size["width"]  = $params->get("main_width",960);
		$maxDesc = $params->get('des_max_chars',100);		
	    $resizeFolderPath = _PS_IMG_DIR_.$this->name;
	    
	    if( !is_dir($resizeFolderPath) ){
	      mkdir( $resizeFolderPath, 0777 );
	    }
		foreach ( $products as &$product ) {
		    if( $isRenderedMainImage ) { 
				$product["mainImge"] = $link->getImageLink($product["link_rewrite"], $product["id_image"] ); 
        		$product["mainImge"] = $this->resizeImage( $product["mainImge"], $main_img_size, $resizeFolderPath );
	        } else{ 
	        	$product["mainImge"] = $link->getImageLink($product["link_rewrite"], $product["id_image"], $mainImageSize ); 
	        }
	        if( $isRenderedThumbnail ){
	        	$product["thumbImge"] = $link->getImageLink($product["link_rewrite"], $product["id_image"] ); 
	          	$product["thumbImge"] = $this->resizeImage( $product["thumbImge"], $thumb_size, $resizeFolderPath );   		
	        }else{
	          	$product["thumbImge"] = $link->getImageLink($product["link_rewrite"], $product["id_image"], $thumbnailSize ); 
	        }	        
			$product['description']=substr(trim(strip_tags($product['description_short'])),0, $maxDesc);
		}		
		return $products;
	}
	
   /**
    * render thumbail  from image source
    */
	public function resizeImage( $path, $size, $resizeFolderPath ){
	
		$tpath      = str_replace( _PS_BASE_URL_, "", $path );
		$tpath      = str_replace( __PS_BASE_URI__, "", $tpath );
		$sourceFile = _PS_ROOT_DIR_.'/'.$tpath; 
		if( file_exists($sourceFile) ){  // return $path;		
			$tmp        = explode("/",$path);
			$path       = _PS_BASE_URL_._PS_IMG_.$this->name."/".$size["width"]."_".$size["height"]."_".$tmp[count($tmp)-1];
			$savePath   = $resizeFolderPath."/".$size["width"]."_".$size["height"]."_".$tmp[count($tmp)-1];
			if( !file_exists($savePath) ){  // return $path;
			  $thumb = PhpThumbFactory::create( $sourceFile  );             
			  $thumb->adaptiveResize( $size["width"], $size["height"]);            
			  $thumb->save( $savePath  ); 
			}  
		}
		return $path;
    }	
   /**
    * Get list of sub folder's name 
    */
	public function getFolderList( $path ) {
		$items = array();
		$handle = opendir($path);
		if (! $handle) {
			return $items;
		}
		while (false !== ($file = readdir($handle))) {
			if (is_dir($path . $file))
				$items[$file] = $file;
		}
		unset($items['.'], $items['..'], $items['.svn']);
		
		return $items;
	}
	
   /**
    * Render processing form && process saving data.
    */	
	public function getContent()
	{
		$html = "";
		if (Tools::isSubmit('submit'))
		{
			$this->_postValidation();

			if (!sizeof($this->_postErrors))
			{									
				/*if($this->getParamValue("mod_hook",8)!=Tools::getValue('mod_hook')){		
					Db::getInstance()->Execute('
							UPDATE `'._DB_PREFIX_.'hook_module`
							SET `id_hook`= '.Tools::getValue('mod_hook').'
							WHERE `id_module` = '.$this->id.' AND id_hook='.$this->getParamValue("mod_hook",8));																			
				}*/
		        $definedConfigs = array(
		          /* general config */
		          'module_theme' => '',
		          'home_sorce'   => '',
		           'productids' => '',  
		          'use_cat_page' => '',
		          'use_pro_page' => '',
		          'use_spe_block' => '',
		          'use_vie_block' => '',		        
		          'shadow'         => '',
		          'enable_css3'    => '',
		          'module_height'  => '',
		          'module_width'   => '',
		          'display_button' => '',
		          'limit_items'    => '',
		          /*Main Slider Setting*/
		          'slider_layout'    => '',
		          'des_max_chars'         => '',
		          'start_item'       => '',
		          'cre_main_size'    => '',
		          'main_img_size'         => '',
		          'main_height'       => '',
		          'main_width'       => '',
		          /*Navigator Setting */
		          'max_nav_items'    => '',
		          'nav_pos'         => '',
		          'nav_height'       => '',
		          'nav_width'    => '',
		          'auto_renthu'         => '',
		          'cre_thumb_size'       => '',
		          'thumb_size'       => '',
		          'thumb_height'       => '',
		          'thumb_width'       => '',
		          'thumb_pad_x'       => '',
		          'thumb_pad_y'       => '',
		          /*Effect Setting*/
		          'preload'       => '',
		          'layout_style'       => '',
		          'interval'       => '',
		          'duration'       => '',
		          'effect'       => '',
		          'auto_start'       => '',
		          'open_target'=>'',
				  'page_unsignment' =>''
		        );
		        foreach( $definedConfigs as $config => $key ){    
		      		Configuration::updateValue($this->name.'_'.$config, Tools::getValue($config), true);
		    	}  
		        if(in_array("",Tools::getValue('category'))){
		          $catList = "";
		        }else{
		          $catList = implode(",",Tools::getValue('category'));  
		        }   
		        Configuration::updateValue($this->name.'_category', $catList, true);   
		       
		        $html .= '
<div class="conf confirm">'.$this->l('Settings updated').'</div>
';
			}
			else
			{
				foreach ($this->_postErrors AS $err)
				{
					$html .= '<div class="alert error">'.$err.'</div>
';
				}
			}
			// reset current values.
			$this->_params = new LofParams( $this->name );	
		}
		
	

		return $html.$this->_getFormConfig();
	}
	
	/**
	 * Render Configuration From for user making settings.
	 *
	 * @return context
	 */
	private function _getFormConfig(){
		
		$html = '';
		$hooks = $this->getHooksByName();   

	    $formats = ImageType::getImagesTypes( 'products' );
	    $themes=$this->getFolderList( dirname(__FILE__)."/tmpl/" );

	    ob_start();
	    include_once dirname(__FILE__).'/config.php'; 
	    $html .= ob_get_contents();
	    ob_end_clean(); 
		return $html;
	}
    
	/**
     * Process vadiation before saving data 
     */
	private function _postValidation()
	{
		if (!Validate::isCleanHtml(Tools::getValue('module_height')))
			$this->_postErrors[] = $this->l('The module height you entered was not allowed, sorry');
		if (!Validate::isCleanHtml(Tools::getValue('module_width')))
			$this->_postErrors[] = $this->l('The module width you entered was not allowed, sorry');
		if (!Validate::isCleanHtml(Tools::getValue('des_max_chars')) || !is_numeric(Tools::getValue('des_max_chars')))
			$this->_postErrors[] = $this->l('The description max chars you entered was not allowed, sorry');
		if (!Validate::isCleanHtml(Tools::getValue('start_item')) || !is_numeric(Tools::getValue('start_item')))
			$this->_postErrors[] = $this->l('The Default Slider Showed you entered was not allowed, sorry');
		if (!Validate::isCleanHtml(Tools::getValue('main_height')) || !is_numeric(Tools::getValue('main_height')))
			$this->_postErrors[] = $this->l('The Main Image Height you entered was not allowed, sorry');
		if (!Validate::isCleanHtml(Tools::getValue('main_width')) || !is_numeric(Tools::getValue('main_width')))
			$this->_postErrors[] = $this->l('The Main Image Width you entered was not allowed, sorry');
		if (!Validate::isCleanHtml(Tools::getValue('thumb_pad_x')) || !is_numeric(Tools::getValue('thumb_pad_x')))
			$this->_postErrors[] = $this->l('The Thumbnail Padding X Width you entered was not allowed, sorry');			
		if (!Validate::isCleanHtml(Tools::getValue('thumb_pad_y')) || !is_numeric(Tools::getValue('thumb_pad_y')))
			$this->_postErrors[] = $this->l('The Thumbnail Padding Y Width you entered was not allowed, sorry');					
	}
	
   /**
    * Get value of parameter following to its name.
    * 
	* @return string is value of parameter.
	*/
	public function getParamValue($name, $default=''){
		return $this->_params->get( $name, $default );	
	}
	
   /**
    * Get List Of Hook method With theirs name
	*
	* @return array data
    */
	static public function getHooksByName()
	{				
		return Db::getInstance()->ExecuteS('SELECT * FROM `'._DB_PREFIX_.'hook` h WHERE  position=1  and name not IN ("header","payment","invoice")');		
	}
		
  /**
   * Build category tree list
   */
	public static function treeCategory($id, &$list, $children, $tree=""){		
		if (isset($children[$id])){			
			if($id != 0){
				$tree = $tree." - ";
			}
			foreach ($children[$id] as $v)
			{	
				$v["tree"] = $tree;				
				$list[] = $v;							
				self::treeCategory( $v["id_category"], $list, $children,$tree);
			}
		}		
	}
  
   /**
    * Get List Categories Tree source
	* 
	* @access public
	* @static method
	* return array contain list of categories source 
    */ 
	public static function getIndexedCategories()
	{		
		global $cookie;
		$id_lang = intval($cookie->id_lang);
		
		$allCat = Db::getInstance()->ExecuteS('
		SELECT c.*, cl.id_lang, cl.name, cl.description, cl.link_rewrite, cl.meta_title, cl.meta_keywords, cl.meta_description
		FROM `'._DB_PREFIX_.'category` c
		LEFT JOIN `'._DB_PREFIX_.'category_lang` cl ON (c.`id_category` = cl.`id_category` AND `id_lang` = '.intval($id_lang).')
		LEFT JOIN `'._DB_PREFIX_.'category_group` cg ON (cg.`id_category` = c.`id_category`)
		WHERE `active` = 1		
		GROUP BY c.`id_category`
		ORDER BY `name` ASC');		
		$children = array();
		if ( $allCat )
		{
			foreach ( $allCat as $v )
			{				
				$pt 	= $v["id_parent"];
				$list 	= @$children[$pt] ? $children[$pt] : array();
				array_push( $list, $v );
				$children[$pt] = $list;
			}
			return $children;
		}		
		return array();
	}		
}