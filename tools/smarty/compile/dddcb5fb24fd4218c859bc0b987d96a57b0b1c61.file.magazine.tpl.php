<?php /* Smarty version Smarty-3.0.7, created on 2012-05-08 02:58:44
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/magazine.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4522097184fa86fc48b28c5-16150245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dddcb5fb24fd4218c859bc0b987d96a57b0b1c61' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/magazine.tpl',
      1 => 1336438719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4522097184fa86fc48b28c5-16150245',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>YoxView demo - Basic usage</title>
    <link rel="Stylesheet" type="text/css" href="http://localhost:8888/prestashop-hec/yoxview/yoxview.css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://localhost:8888/prestashop-hec/yoxview/yox.js"></script>
        <script type="text/javascript" src="http://localhost:8888/prestashop-hec/yoxview/yoxview-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function(){
        $("#magazineMonth").yoxview({
        lang: "fr",
        autoPlay: false,
        autoHideMenu: false,
        images: [
            { media: { src: "<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
magazine/page2.png", title: 'Second Page' }},
            { media: { src: "<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
magazine/page3.png", title: 'Third Page' }}, ]

        });

        $("#magazineLastMonth").yoxview({
                lang: "fr",
                autoPlay: false,
                autoHideMenu: false,
                images: [
                     { media: { src: "<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
magazine/page2.png", title: 'Second Page' }},
                     { media: { src: "<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
magazine/page3.png", title: 'Third Page' }}, ]
                });


        });
    </script>

</head>
<body>
<div id="container">

    <p style="text-align: center">
        Click on the thumbnails to open your magazine:
    </p>

    <br />

    <div style="float: left; margin-left: 50px;" class="thumbnails yoxview">
        <br/>
        <h1 style="text-align: center"> Magazine of the month </h1>
        <a id="magazineMonth" href="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
magazine/page1.png"><img src="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
magazine/thumbnails/page1.png" alt="First"
                                                         title="First page"/></a>
    </div>

    <div style="float: right; margin-right: 50px;" class="thumbnails yoxview">
        <br/>
        <h1 style="text-align: center"> Magazine of the last month </h1>

        <a id="magazineLastMonth" href="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
magazine/page1.png"><img src="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
magazine/thumbnails/page1.png" alt="First"
                                                         title="First page"/></a>
    </div>

    <hr/>
    <br/>
</div>
</body>
</html>
