{if $nbr_filterBlocks != 0}
<div id="layered_block_left">
		<form action="#" id="layered_form">
				{foreach from=$filters item=filter}
					{if isset($filter.values) && $filter.type != ''}
					<div class="owaci_filterjoomjoom">
						<div class="layered_subtitle">{$filter.name|escape:html:'UTF-8'}</div>
						<div class="layered_content">
						{if !isset($filter.slider)}
							{foreach from=$filter.values key=id_value item=value}
								<div{if $layered_use_checkboxes} class="nomargin"{/if}>
									{if isset($filter.is_color_group) && $filter.is_color_group}
										<input type="button" name="layered_{$filter.type_lite}_{$id_value}" rel="{$id_value}_{$filter.id_key}" id="layered_attribute_{$id_value}" {if !$value.nbr} value="X" disabled="disabled"{/if} style="background: {if isset($value.color)}{$value.color}{else}#CCC{/if}; margin-left: 0; width: 20px; height: 20px; padding:0" {if isset($value.checked) && $value.checked}class="owaci_filter_color_checked"{else}class="owaci_filter_color"{/if} />
										{if isset($value.checked) && $value.checked}<input type="hidden" name="layered_{$filter.type_lite}_{$id_value}" value="{$id_value}" />{/if}
									{else}
										{if $layered_use_checkboxes}
											<input style="display:none" type="checkbox" class="checkbox" name="layered_{$filter.type_lite}_{$id_value}" id="layered_{$filter.type_lite}{if $id_value || $filter.type == 'quantity'}_{$id_value}{/if}" value="{$id_value}{if $filter.id_key}_{$filter.id_key}{/if}"{if isset($value.checked)} checked="checked"{/if}{if !$value.nbr} disabled="disabled"{/if} />
										{/if}
									{/if}
									<label for="layered_{$filter.type_lite}_{$id_value}"{if !$value.nbr} class="disabled"{else}{if isset($filter.is_color_group) && $filter.is_color_group} name="layered_{$filter.type_lite}_{$id_value}" class="layered_color" rel="{$id_value}_{$filter.id_key}"{else}{if isset($value.checked)} class="owaci_filter_checked"{/if}{/if}{/if}>{if isset($filter.is_color_group) && $filter.is_color_group}{if isset($value.checked) && $value.checked}<span style="color:{if isset($value.color)}{$value.color}{/if}; font-weight:bold">{$value.name|escape:html:'UTF-8'}</span>{else}{$value.name|escape:html:'UTF-8'}{/if}{else}{$value.name|escape:html:'UTF-8'}{/if}<span> ({$value.nbr})</span></label>
								</div>
							{/foreach}
						{else}
						<ul id="layered_{$filter.type}_{$filter.id_key}">
							<div class="nomargin" style="padding-left:20px">
								<span id="layered_{$filter.type}_range"></span>
							</div>
							<div style="margin:10px; width:570px; float:left" class="layered_slider" id="layered_{$filter.type}_slider"></div>
							<script type="text/javascript">
							unit = '{$filter.unit}';
							{literal}
								$(document).ready(function()
								{
									$('#layered_{/literal}{$filter.type}{literal}_slider').slider({
										range: true,
										min: {/literal}{$filter.min}{literal},
										max: {/literal}{$filter.max}{literal},
										values: [ {/literal}{$filter.values[0]}{literal}, {/literal}{$filter.values[1]}{literal}],
										slide: function( event, ui ) {
											$('#layered_{/literal}{$filter.type}{literal}_range').html(ui.values[ 0 ] + unit + ' - ' + ui.values[ 1 ] + unit);
											console.log(event);
											console.log(ui);
										},
										stop: function () {
											reloadContent();
										}
									});
									$('#layered_{/literal}{$filter.type}{literal}_range').html($('#layered_{/literal}{$filter.type}{literal}_slider').slider('values', 0 ) +unit+
										' - ' + $('#layered_{/literal}{$filter.type}{literal}_slider').slider('values', 1 )+unit );
								});
							{/literal}
							</script>
							<!--
							<script type="text/javascript">
							unit = '{$filter.unit}';
							type = '{$filter.type}';
							max = '{$filter.max}';
							min = '{$filter.min}';
							values = [{$filter.values[0]}, {$filter.values[1]}];
							{literal}
								$(document).ready(function()
								{
									initSlider(type, min, max, values, unit);
								});
							{/literal}
							</script>
							-->
						</ul>
						{/if}
						</div>
					</div>
					</ul>
					{/if}
				{/foreach}
			<input type="hidden" name="id_category_layered" value="{$id_category_layered}" />
			{foreach from=$filters item=filter}
				{if $filter.type_lite == 'id_attribute_group' && isset($filter.is_color_group) && $filter.is_color_group}
					{foreach from=$filter.values key=id_value item=value}
						{if isset($value.checked)}
							<input type="hidden" name="layered_id_attribute_group_{$id_value}" value="{$id_value}_{$filter.id_key}" />
						{/if}
					{/foreach}
				{/if}
			{/foreach}
		</form>
	<div id="layered_ajax_loader" style="display: none;">
		<p style="margin: 20px 0; text-align: center;"><img src="{$img_ps_dir}loader.gif" alt="" /><br />{l s='Loading...' mod='beautifilter'}</p>
	</div>
</div>
{/if}