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

{if $block == 1}
	<!-- Block CMS module -->
	{foreach from=$cms_titles key=cms_key item=cms_title}
		<div id="informations_block_left_{$cms_key}" class="block informations_block_left">
			<h4><a href="{$cms_title.category_link}">{if !empty($cms_title.name)}{$cms_title.name}{else}{$cms_title.category_name}{/if}</a></h4>
			<ul class="block_content">
				{foreach from=$cms_title.categories item=cms_page}
					{if isset($cms_page.link)}<li class="bullet"><b style="margin-left:2em;">
					<a href="{$cms_page.link}" title="{$cms_page.name|escape:html:'UTF-8'}">{$cms_page.name|escape:html:'UTF-8'}</a>
					</b></li>{/if}
				{/foreach}
				{foreach from=$cms_title.cms item=cms_page}
					{if isset($cms_page.link)}<li><a href="{$cms_page.link}" title="{$cms_page.meta_title|escape:html:'UTF-8'}">{$cms_page.meta_title|escape:html:'UTF-8'}</a></li>{/if}
				{/foreach}
				{if $cms_title.display_store}<li><a href="{$link->getPageLink('stores.php')}" title="{l s='Our stores' mod='blockcms'}">{l s='Our stores' mod='blockcms'}</a></li>{/if}
			</ul>
		</div>
	{/foreach}
	<!-- /Block CMS module -->
{else}
	<!-- MODULE Block footer -->
<div class="block_various_links">
	<h2>{l s='Information' mod='blockcms'}</h2>
	<ul>
		{foreach from=$cmslinks item=cmslink}
			{if $cmslink.meta_title != ''}
				<li class="item"><a href="{$cmslink.link|addslashes}" title="{$cmslink.meta_title|escape:'htmlall':'UTF-8'}">{$cmslink.meta_title|escape:'htmlall':'UTF-8'}</a></li>
			{/if}
		{/foreach}
	</ul>
</div>

<div id="newsletter_footer" class="footer_newsletter">
	<h2>{l s='Newsletter' mod='blockcms'}</h2>
	<div class="block_content">
	{if isset($msg) && $msg}
		<p class="{if $nw_error}warning_inline{else}success_inline{/if}">{$msg}</p>
	{/if}
		<form action="{$link->getPageLink('index.php')}" method="post">
			<p>
			<label>{l s='Your email:' mod='blockcms'}</label>
			<input class="texto" type="text" name="email" size="18" value="{if isset($value) && $value}{$value}{else}{l s='email' mod='blocknewsletter'}....{/if}" onfocus="javascript:if(this.value=='{l s='email' mod='blocknewsletter'}....')this.value='';" onblur="javascript:if(this.value=='')this.value='{l s='email' mod='blocknewsletter'}....';" /></p>
			<p>
			<label>{l s='Choose:' mod='blockcms'}</label>
				<select name="action">
					<option value="0"{if isset($action) && $action == 0} selected="selected"{/if}>{l s='Subscribe' mod='blockcms'}</option>
					<option value="1"{if isset($action) && $action == 1} selected="selected"{/if}>{l s='Unsubscribe' mod='blockcms'}</option>
				</select>
				<input type="submit" value="ok" class="button_small" name="submitNewsletter" />
			</p>
		</form>
	</div>
</div>
	
<div class="block_various_links last">
	<h2>{l s='Links' mod='blockcms'}</h2>
	<ul>
		{if !$PS_CATALOG_MODE}<li class="first_item"><a href="{$link->getPageLink('prices-drop.php')}" title="{l s='Specials' mod='blockcms'}">{l s='Specials' mod='blockcms'}</a></li>{/if}
		<li class="{if $PS_CATALOG_MODE}first_{/if}item"><a href="{$link->getPageLink('new-products.php')}" title="{l s='New products' mod='blockcms'}">{l s='New products' mod='blockcms'}</a></li>
		{if !$PS_CATALOG_MODE}<li class="item"><a href="{$link->getPageLink('best-sales.php')}" title="{l s='Top sellers' mod='blockcms'}">{l s='Top sellers' mod='blockcms'}</a></li>{/if}
		{if $display_stores_footer}<li class="item"><a href="{$link->getPageLink('stores.php')}" title="{l s='Our stores' mod='blockcms'}">{l s='Our stores' mod='blockcms'}</a></li>{/if}
		<li class="item"><a href="{$link->getPageLink('contact-form.php', true)}" title="{l s='Contact us' mod='blockcms'}">{l s='Contact us' mod='blockcms'}</a></li>
	</ul>
</div>
		
{/if}
