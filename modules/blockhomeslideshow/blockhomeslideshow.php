<?php

class BlockHomeSlideshow extends Module
{
	var $allowedExt = array('jpg', 'gif', 'png', 'jpeg', 'bmp');
	function __construct()
	{
		$this->name = 'blockhomeslideshow';
		$this->tab = 'Blocks';
		$this->version = 0.1;

		parent::__construct();
		
		$this->displayName = $this->l('Slide Show Home Block');
		$this->description = $this->l('Adds a slide show to the home page.');
	}
	
	public function getContent() {
		
		if (isset($_POST['submit_images']))	{			
			
			$xmlStr = '<?xml version="1.0" encoding="utf-8"?>';
			$xmlStr .= '<elements>';
			
			foreach($_POST as $key=>$value) {
				
				$pattern = '/_('.implode('|', $this->allowedExt).')$/';
				$replacement = '.$1';
				$realName = preg_replace($pattern, $replacement, $key);
				
				if($value==='0') {
					unlink(dirname(__FILE__).'/images/'.$realName);
				} else if($value==='1') {
					$xmlStr .= '<element type="'.(strstr($key, 'topimg')?'top':'bottom').'">';
					$xmlStr .= '	<imgname>'.$realName.'</imgname>';
					$xmlStr .= '	<link>'.$_POST[end(explode('/', $key))].'</link>';
					$xmlStr .= '</element>';
				}
			}
			
			$errorStr = '<div class="module_error alert error"><img style="float:left" title="" alt="" src="/prestashop/img/admin/warning.gif"> <ul  style="margin-left:23px;padding-left:15px;list-style-type:disc;list-style-position:outside;">';
			$errorFlag = 0;
			
			foreach($_FILES as $key=>$value) {
				$string = strtolower($value["name"]);
				$pattern = '/(.*).('.implode('|', $this->allowedExt).')$/';
				$replacement1 = '$1';
				$replacement2 = '$2';
				
				$name = preg_replace($pattern, $replacement1, $string);
				$ext = preg_replace($pattern, $replacement2, $string);
				
				$counter = '1';
				$nameNew = $name.'.'.$ext;
				$nameNew = str_replace(" ", "_", $nameNew);
				
				if(strcmp($ext,$name)!==0) {				
					if(strstr($key, 'topimg')) {						
						
						while(file_exists(dirname(__FILE__).'/images/topimg/'.$nameNew)) {
							$nameNew = $name.'('.$counter.')'.'.'.$ext;
							$counter++;
						}					
						$tmp_name = $value["tmp_name"];					
						move_uploaded_file($tmp_name, dirname(__FILE__).'/images/topimg/'.$nameNew);
						
						$xmlStr .= '<element type="top">';
						$xmlStr .= '	<imgname>topimg/'.$nameNew.'</imgname>';
						$xmlStr .= '	<link>'.$_POST[$key].'</link>';
						$xmlStr .= '</element>';
						
						unlink($tmpName);
						
					} else if(strstr($key, 'btmimg')) {
						
						while(file_exists(dirname(__FILE__).'/images/btmimg/'.$nameNew)) {
							$nameNew = $name.'('.$counter.')'.'.'.$ext;
							$counter++;
						}					
						$tmp_name = $value["tmp_name"];					
						move_uploaded_file($tmp_name, dirname(__FILE__).'/images/btmimg/'.$nameNew);
						
						$xmlStr .= '<element type="bottom">';
						$xmlStr .= '	<imgname>btmimg/'.$nameNew.'</imgname>';
						$xmlStr .= '	<link>'.$_POST[$key].'</link>';
						$xmlStr .= '</element>';
						
						unlink($tmpName);
						
					}
				} else {
					$errorStr .= '<li>Invalid file type "'.$name.'", only image with extension '.implode(', ', $this->allowedExt).' are allowed</li>';
					$errorFlag = 1;				
				}
			}
			
			$errorStr .= '</ul></div>';
			$xmlStr .= '</elements>';
		
			$fd = fopen(dirname(__FILE__).'/data.xml', 'w');
			fwrite($fd, $xmlStr);
			fclose($fd);
		}
		
		$xml = simplexml_load_file(dirname(__FILE__).'/data.xml');
		if ($handle = opendir(dirname(__FILE__).'/images/topimg')) {			
			while (false !== ($file = readdir($handle))) {
				$getfileinfo = pathinfo($file);				
				if(strcmp($file, '.')!==0 && strcmp($file, '..')!==0 && in_array($getfileinfo['extension'], $this->allowedExt)) {					
					$link = $xml->xpath('/elements/element[imgname="topimg/'.$file.'"]');
					$topimgstr .= '<div style="margin-bottom:10px"><img width="100" src="'.$this->_path.'images/topimg/'.$file.'" alt="" /> <input type="text" name="'.$file.'" value="'.$link[0]->link.'" /><input type="hidden" name="'.'topimg/'.$file.'" value="1" /> <span style="text-decoration:underline;cursor:pointer" onclick="this.parentNode.childNodes[3].value=\'0\';this.parentNode.style.display=\'none\';">Remove</span></div>';
				} 
			}
			closedir($handle);
		}
		if ($handle = opendir(dirname(__FILE__).'/images/btmimg')) {				
			while (false !== ($file = readdir($handle))) {
				$getfileinfo = pathinfo($file);				
				if(strcmp($file, '.')!==0 && strcmp($file, '..')!==0 && in_array($getfileinfo['extension'], $this->allowedExt)) {
					$link = $xml->xpath('/elements/element[imgname="btmimg/'.$file.'"]');
					$btmimgstr .= '<div style="margin-bottom:10px"><img width="100" src="'.$this->_path.'images/btmimg/'.$file.'" alt="" /> <input type="text" name="'.$file.'" value="'.$link[0]->link.'" /><input type="hidden" name="'.'btmimg/'.$file.'" value="1" /> <span style="text-decoration:underline;cursor:pointer" onclick="this.parentNode.childNodes[3].value=\'0\';this.parentNode.style.display=\'none\';">Remove</span></div>';
				}
			}
			closedir($handle);
		}		

		$contentStr .= '<h2>'.$this->displayName.'</h2>'.(($errorFlag == 1)?$errorStr:'').'
		<form method="post" action="'.$_SERVER['REQUEST_URI'].'" enctype="multipart/form-data">
		<div class="topimgdiv"><p style="font-weight:700">Top slide show images (980px x 462px)</p>
		'.$topimgstr.'			
		<span id="addmoretop">Add More</span></div>

		<div class="btmimgdiv"><p style="font-weight:700">Bottom images (326px x 190px)</p>
		'.$btmimgstr.'			
		<span id="addmorebottom">Add More</span></div>
		<br style="clear:both" /><br  /><input type="submit" value="Submit" name="submit_images" />
		</form>			
		<style type="text/css">
			#addmoretop,#addmorebottom {
				text-decoration:underline;
				cursor:pointer;
			}
			#addmoretop:hover,#addmorebottom:hover {
				text-decoration:none;
			}
			.topimgdiv {
				width:50%;
				float:left;
			}
			.btmimgdiv {
				width:50%;
				float:right;
			}
		</style>
		<script type="text/javascript">
			var imgtopcounter = 1;
			$("#addmoretop").click(function() {
				$("#addmoretop").before("<input type=\"file\" name=\"topimg_"+imgtopcounter+"\" /> <input type=\"text\" name=\"topimg_"+imgtopcounter+"\" /><br />");
				imgtopcounter++;
			});
			var imgbottomcounter = 1;
			$("#addmorebottom").click(function() {
				$("#addmorebottom").before("<input type=\"file\" name=\"btmimg_"+imgbottomcounter+"\" /> <input type=\"text\" name=\"btmimg_"+imgbottomcounter+"\" /><br />");
				imgbottomcounter++;
			});
		</script>';
		
		return $contentStr;
	}

	function install()
	{
		if (!parent::install())
			return false;
		if (!$this->registerHook('home'))
			return false;
		return true;
	}

	
	public function getProducts($id_lang, $p, $n, $orderBy = NULL, $orderWay = NULL, $getTotal = false, $active = true, $random = false, $randomNumberProducts = 1, $checkAccess = true)
	{
		global $cookie;
		
		$sql = '
		SELECT p.*, pa.`id_product_attribute`, pl.`description`, pl.`description_short`, pl.`available_now`, pl.`available_later`, pl.`link_rewrite`, pl.`meta_description`, pl.`meta_keywords`, pl.`meta_title`, pl.`name`, i.`id_image`, il.`legend`, m.`name` AS manufacturer_name, tl.`name` AS tax_name, t.`rate`, cl.`name` AS category_default, DATEDIFF(p.`date_add`, DATE_SUB(NOW(), INTERVAL '.(Validate::isUnsignedInt(Configuration::get('PS_NB_DAYS_NEW_PRODUCT')) ? Configuration::get('PS_NB_DAYS_NEW_PRODUCT') : 20).' DAY)) > 0 AS new,
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
		WHERE p.on_sale > 0 GROUP BY p.`id_product`';

		$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->ExecuteS($sql);

		if (!$result)
			return false;

		/* Modify SQL result */
		return Product::getProductsProperties($id_lang, $result);
	}
	/**
	* Returns module content for header
	*
	* @param array $params Parameters
	* @return string Content
	*/
	function hookHome($params)
	{
		global $smarty;
		if (file_exists(dirname(__FILE__).'/data.xml')) {			
			$xml = simplexml_load_file(dirname(__FILE__).'/data.xml');
			$bottomimages = $xml->xpath('/elements/element[@type="bottom"]');
			foreach($bottomimages as $key => $value) {
				$outputbtm[] = array('name' => (string)$value->imgname, 
									 'link' => (string)$value->link);
			}			
			$topimages = $xml->xpath('/elements/element[@type="top"]');
			foreach($topimages as $key => $value) {
				$outputtop[] = array('name' => (string)$value->imgname, 
									 'link' => (string)$value->link);
			}
		} else {
			exit('Failed to open data.xml.');
		}		
		
		$nb = (int)(Configuration::get('HOME_FEATURED_NBR'));
		$products = $this->getProducts((int)($params['cookie']->id_lang), 1, ($nb ? $nb : 10));
		
		$smarty->assign(array(
			'outputtops' => $outputtop,
//			'outputbtms' => $outputbtm,
			'this_path' => $this->_path,
			'sale_products' => $products
		));		
		
		return $this->display(__FILE__, 'blockhomeslideshow.tpl');
	}
	
	public function hookTop($params)
	{
		return $this->hookHome($params);
	}
}

?>
