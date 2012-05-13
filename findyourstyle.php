<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nico
 * Date: 07/05/12
 * Time: 23:06
 * To change this template use File | Settings | File Templates.
 */

//require(dirname(__FILE__).'/config/config.inc.php');
//ControllerFactory::getController('MagazineController')->run();

$useSSL = true; include(dirname(__FILE__).'/config/config.inc.php');
include(dirname(__FILE__).'/header.php');
$errors = array();


$smarty->display(_PS_THEME_DIR_.'findyourstyle.tpl');
include(dirname(__FILE__).'/footer.php');
?>