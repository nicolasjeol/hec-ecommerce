{*
* 2007-2011 PrestaShop 
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2011 PrestaShop SA
*  @version  Release: $Revision: 1.4 $
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<!-- Block user information module HEADER -->
<div id="header_user">
	<ul id="header_nav">
		{if !$PS_CATALOG_MODE}
		<li id="shopping_cart">
			<a href="{$link->getPageLink("$order_process.php", true)}" title="{l s='Your Shopping Cart' mod='blockuserinfo'}">&nbsp;</a>
			<span class="ajax_cart_quantity{if $cart_qties == 0} hidden{/if}">{$cart_qties}</span>
			<span class="ajax_cart_product_txt{if $cart_qties != 1} hidden{/if}">{l s='product' mod='blockuserinfo'}</span>
			<span class="ajax_cart_product_txt_s{if $cart_qties < 2} hidden{/if}">{l s='products' mod='blockuserinfo'}</span>
			<span class="ajax_cart_no_product{if $cart_qties > 0} hidden{/if}">{l s='Empty' mod='blockuserinfo'}</span>
		</li>
		{/if}
		<li id="your_account">
			{l s='Welcome' mod='blockuserinfo'},
			{if $cookie->isLogged()}
				(<a href="{$link->getPageLink('index.php')}?mylogout" title="{l s='Log me out' mod='blockuserinfo'}">{l s='Log out' mod='blockuserinfo'}</a>)
			{else}
				(<a href="{$link->getPageLink('my-account.php', true)}">{l s='Login' mod='blockuserinfo'}</a>)
			{/if}
		</li>
	</ul>
</div>
<div id="header-bg">
<a id="header_logo" href="{$base_dir}" title="{$shop_name|escape:'htmlall':'UTF-8'}">
	<img class="logo" src="{$img_dir}logo.jpg?{$img_update_time}" alt="{$shop_name|escape:'htmlall':'UTF-8'}" />
</a>
<ul>
	<li {if $page_name eq 'index'}class="select"{/if}><a href="{$link->getPageLink('index.php')}">{l s='Home'}</a></li>
	<li {if $page_name eq 'sitemap'}class="select"{/if}><a href="{$link->getPageLink('sitemap.php')}">{l s='Sitemap'}</a></li>
	<li {if $page_name eq 'new-products'}class="select"{/if}><a href="{$link->getPageLink('new-products.php')}">{l s='New Products'}</a></li>
	<li {if $page_name eq 'about-us'}class="select"{/if}><a href="{$link->getPageLink('cms.php?id_cms=4')}">{l s='About Us'}</a></li>
	<li class="{if $page_name eq 'contact-form'}select{/if}"><a class="last" href="{$link->getPageLink('contact-form.php')}">{l s='Contact'}</a></li>
    <li {if $page_name eq 'magazine'}class="select"{/if}><a href="{$link->getPageLink('magazine.php')}">{l s='Magazine'}</a></li>
</ul>
</div>
				
<!-- /Block user information module HEADER -->
