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

<!-- Block currencies module -->
<div id="currencies_block_top">
	<form id="setCurrency" action="{$request_uri}" method="post">
	{l s='Currency' mod='blockcurrencies'}
		<select onchange="javascript:setCurrency(this.value);" class="currency_bg">
        {foreach from=$currencies key=k item=f_currency}
        <option {if $id_currency_cookie == $f_currency.id_currency}selected="selected"{/if} value="{$f_currency.id_currency}">{$f_currency.name} ({$f_currency.sign})</option>        
        {/foreach}
    	</select>
		<p>
				<input type="hidden" name="id_currency" id="id_currency" value=""/>
				<input type="hidden" name="SubmitCurrency" value="" />
		</p>
	</form>
</div>
<!-- /Block currencies module -->

