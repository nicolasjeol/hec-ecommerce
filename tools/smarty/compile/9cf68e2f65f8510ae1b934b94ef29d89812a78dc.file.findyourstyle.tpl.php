<?php /* Smarty version Smarty-3.0.7, created on 2012-05-14 00:02:40
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/findyourstyle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12132523554fb02f8073e567-60190505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cf68e2f65f8510ae1b934b94ef29d89812a78dc' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/findyourstyle.tpl',
      1 => 1336946554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12132523554fb02f8073e567-60190505',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style type="text/css">
        .stylebutton {
            width : 50px;
        }
    </style>
    <title>Find your style</title>

</head>
<body>
<div id="container">

    <h2 style="text-align: center;"> “Find your own style” </h2>

    <br>
    <br>
    <p> Answer some questions in order to get an advise which glasses fit to your style. :
   </p>

    <p>
        1. Please indicate your gender: ,
    </p>

    <input class="stylebutton" type="radio" name="group1" value="Female"> Female<br>
    <input class="stylebutton" type="radio" name="group1" value="Male"> Male<br>

    <br />
    <hr>
    <br />

 <p>   2. If you could be a celebrity for one day, who would you like to be:
 </p>

    <img style="width: 120px; position: relative; left: 100px;" src="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
findyourstyle/francksinatra.png" alt="francksinatra" title="francksinatra"/>
    <img style="width: 120px; position: relative; left: 120px;" src="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
findyourstyle/audreyhepburn.png" alt="audreyhepburn.png" title="audreyhepburn"/>
    <img style="width: 120px; position: relative; left: 180px;" src="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
findyourstyle/ladygaga.png" alt="ladygaga.png" title="ladygaga"/>

    <br /><br />
    <input style="margin-left: 130px;" class="stylebutton" type="radio" name="group2" value="David Beckam"> Franck Sinatra
    <input class="stylebutton" type="radio" name="group2" value="audrey hepburn"> Audrey Hepburn
    <input style="margin-left: 50px;" class="stylebutton" type="radio" name="group2" value="lady gaga"> Lady Gaga  <br>

    <br />
    <hr>
    <br />

 <p>   3. Which of the following pictures do you like most spontaneously?
 </p>

    <img style="width: 150px; position: relative;" src="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
findyourstyle/questionnaire1.png" alt="questionnaire1" title="questionnaire1"/>
    <img style="width: 150px; position: relative;" src="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
findyourstyle/questionnaire2.png" alt="questionnaire2" title="questionnaire2"/>
    <img style="width: 150px; position: relative;" src="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
findyourstyle/questionnaire3.png" alt="questionnaire3" title="questionnaire3"/>
    <img style="width: 150px; position: relative;" src="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
findyourstyle/questionnaire4.png" alt="questionnaire4" title="questionnaire4"/>

    <br /><br />

    <input style="margin-left: 60px;" class="stylebutton" type="radio" name="group3" value="fashion1">
    <input style="margin-left: 105px;" class="stylebutton" type="radio" name="group3" value="fashion2">
    <input style="margin-left: 105px;" class="stylebutton" type="radio" name="group3" value="fashion3">
    <input style="margin-left: 100px;" class="stylebutton" type="radio" name="group3" value="fashion4">


    <br />
    <br />
    <hr>
    <br />
        
<p>
    4. Please describe your face:
</p>

    <input class="stylebutton" type="radio" name="group4" value=" round face"> I have a round face <br>
    <input class="stylebutton" type="radio" name="group4" value="oval face"> I have an oval face
  <br>
    <input class="stylebutton" type="radio" name="group4" value="face"> I have a round face <br>
    <input class="stylebutton" type="radio" name="group4" value="face"> I have a round face <br>
 
 
    <br />
    <hr>
    <br />

    <p>
        Of course you can also ask  our
        <a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('contact-form.php');?>
">designer</a>  for their professional advice! Just upload a picture of you (your face and your style) and they will recommend some glasses that would suit you!
    </p>

    <button onclick="self.location.href='product.php?id_product=1157'" style="margin: auto; display: block;" type="submit">
        find your glasses
    </button>

</div>
</body>
</html>
