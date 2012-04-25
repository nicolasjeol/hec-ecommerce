<?php /*%%SmartyHeaderCode:8705524854f94205f673201-37849369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f86180e50228682872b0b798e2e2600eda163aa7' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/modules/blockcategories/blockcategories.tpl',
      1 => 1335107259,
      2 => 'file',
    ),
    'b73ecd98434e808ab3380e5d803aad8022e1cabc' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/modules/blockcategories/category-tree-branch.tpl',
      1 => 1335107259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8705524854f94205f673201-37849369',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!$no_render) {?>

<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<h4>Cat&eacute;gories</h4>
	<div class="block_content">
		<ul class="tree dhtml">
									
<li >
	<a href="http://localhost:8888/prestashop-hec/category.php?id_category=2"  title="Il est temps, pour le meilleur lecteur de musique, de remonter sur scène pour un rappel. Avec le nouvel iPod, le monde est votre scène.">iPods</a>
	</li>
												
<li >
	<a href="http://localhost:8888/prestashop-hec/category.php?id_category=3"  title="Tous les accessoires à la mode pour votre iPod">Accessoires</a>
	</li>
												
<li class="last">
	<a href="http://localhost:8888/prestashop-hec/category.php?id_category=4"  title="Le tout dernier processeur Intel, un disque dur plus spacieux, de la mémoire à profusion et d&#039;autres nouveautés. Le tout, dans à peine 2,59 cm qui vous libèrent de toute entrave. Les nouveaux portables Mac réunissent les performances, la puissance et la connectivité d&#039;un ordinateur de bureau. Sans la partie bureau.">Portables</a>
	</li>
							</ul>
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
	</div>
</div>
<!-- /Block categories module -->
<?php } ?>