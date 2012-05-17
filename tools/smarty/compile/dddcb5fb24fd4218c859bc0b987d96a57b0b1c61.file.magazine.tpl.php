<?php /* Smarty version Smarty-3.0.7, created on 2012-05-16 17:23:23
         compiled from "/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/magazine.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12766541484fb3c66b98d753-75042092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dddcb5fb24fd4218c859bc0b987d96a57b0b1c61' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop-hec/themes/clothetheme/magazine.tpl',
      1 => 1337094030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12766541484fb3c66b98d753-75042092',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Magazine visibelly</title>
    <link rel="Stylesheet" type="text/css" href="http://localhost:8888/prestashop-hec/yoxview/yoxview.css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
/yoxview/yox.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
/yoxview/yoxview-init.js"></script>

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

    <style type="text/css">
    . boldtext {
    font-weight : bold;
    font-size : 14px;
       }

    . blogtext {
    text-align : justify;
    }
</style>

</head>
<body>

<div id="container">

    <p style="text-align: center">
        Click on the thumbnails to open your magazine:
    </p>

    <br/>

    <div style="float: left; margin-left: 50px;" class="thumbnails yoxview">
        <br/>

        <h1 style="text-align: center"> Magazine of the month </h1>
        <a id="magazineMonth" href="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
magazine/page1.png"><img
                src="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
magazine/thumbnails/page1.png" alt="First"
                title="First page"/></a>
    </div>

    <div style="margin-left: 335px; width: 250px;" class="thumbnails yoxview">
        <br/>

        <h1 style="text-align: center"> Magazine of the last month </h1>

        <a id="magazineLastMonth" href="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
magazine/page1.png"><img
                src="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
magazine/thumbnails/page1.png" alt="First"
                title="First page"/></a>
    </div>

    <br/> <br/>
    <hr/>
    <br/>

    <p style="font-size: 16px; text-align: justify;">
        Every month three different fashion bloggers post their experience with newly acquired glasses at Visibelly.com.
        Read more about their experiences and be inspired by their style.
    </p>

    <br/>

    <div>

        <p class="boldtext">
            John tried out these vintage sunglasses of Ray-Ban:
        </p>

        <div style="display : block; margin : auto; text-align: center; ">
            <br/>
            <img src="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
blog/glasses1.png" alt="rayban" title="rayban"/>
            <img style="height: 150px;" src="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
blog/blogger1.png" alt="rayban" title="rayban"/>
            <br/>
        </div>

        <p style="text-align: justify;">
            These Ray-Ban sunglasses (R4175-877) have a unique style! I believe that they are a great way to underline
            one’s
            personality – if you have one ;-) I like the casual chic style and these glasses, chinos and shirts are a
            perfect fit! Since these glasses are vintage, they have a touch of the last decades… Talking about decades:
            due
            to the high quality and the timeless design one can enjoy these glasses for a very long time! Will now head
            to
            the park in order to see what girls say about my new Ray-Bans ;-) Will let you know the results of this
            “study”
            in a little while…
        </p>
    </div>

    <br/>
    <hr/>
    <br/>


    <div>

        <p class="boldtext">
            Susan tried out these vintage sunglasses of Joop:
        </p>

        <div style="display : block; margin : auto; text-align: center; ">
            <br/>
            <img src="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
blog/glasses2.png" alt="rayban" title="rayban"/>
            <img style="height: 150px;" src="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
blog/blogger2.png" alt="rayban" title="rayban"/>
            <br/>
        </div>

        <p style="text-align: justify;">
            Simple and clean with a wink – that’s how I would describe my style. I would estimate that 80% of the
            content of my closet is basic: jeans, tees, sweaters, leather jackets in such exciting colors as black, grey
            and white. The remaining 20% of the content of my closet is attributed to stylish accessories such as the
            boots you can see on the pic or multicolored scarves. My very new fashion conquest are these sunglasses by
            Joop (87140-610). They were delivered quickly after I ordered them and I fell in love with them as soon as I
            unpacked them! I love them so much because of their understatement – they are not to loud or exciting but
            still they are not boring… So in case you would position yourself somewhere between a shrill perrot and a
            plain Jane try out these sunglasses. And for those summer days where you just need something more sunny and
            funny you should check out the must-have sunglasses with pastel frames! I will get one myself and let you
            know as soon as I made up my mind which pastel color I will go for ;-)
        </p>
    </div>


    <br/>
    <hr/>
    <br/>

    <div>

        <p class="boldtext">
            Mary tried out these glasses of Polo Ralph Lauren:
        </p>

        <div style="display : block; margin : auto; text-align: center; ">
            <br/>
            <img src="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
blog/glasses3.png" alt="rayban" title="rayban"/>
            <img style="height: 150px;" src="<?php echo $_smarty_tpl->getVariable('img_prod_dir')->value;?>
blog/blogger3.png" alt="rayban" title="rayban"/>
            <br/>
        </div>

        <p style="text-align: justify;">
            If you consider glasses as part of your accessories’ these Polo Ralph Lauren glasses (0PH-2057-5003) are a
            good choice! I have to admit that I also wear lenses, so whenever I feel like wearing glasses they should be
            the icing on the cake. The glasses are very comfortable and due to the size one does not see the frame while
            looking through the glasses… Since I don’t wear glasses regularly, I am annoyed by glasses that one has to
            get used to wearing since one sees the frame while looking trough them or since they are uncomfortable. If
            you like the style of these glasses you should make use of Visibelly’s offer and send a picture of your face
            to its designer – he will then help you choose the right size of the glasses… These glasses should be
            eye-catching, but they have to fit the size of your face and not look overlarge.
        </p>
    </div>


</div>
</body>
</html>
