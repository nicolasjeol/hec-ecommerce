<?php
/**
* Beautifilter v1.2 for Prestashop 1.4 by Vietmoonlight Co., Ltd
* GNU General Public License.
* Need to support ? Contact us : Gmail : customers@vietmoonlight.com , Website : vietmoonlight.com/en/
Based on Block layer Module by Prestashop
**/
global $cookie;

include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/../../init.php');
include(dirname(__FILE__).'/beautifilter.php');

$beautifilter = new beautifilter();
echo $beautifilter->ajaxCall();