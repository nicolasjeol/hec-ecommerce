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
            { media: { src: "{$img_prod_dir}magazine/page2.png", title: 'Second Page' }},
            { media: { src: "{$img_prod_dir}magazine/page3.png", title: 'Third Page' }}, ]

        });

        $("#magazineLastMonth").yoxview({
                lang: "fr",
                autoPlay: false,
                autoHideMenu: false,
                images: [
                     { media: { src: "{$img_prod_dir}magazine/page2.png", title: 'Second Page' }},
                     { media: { src: "{$img_prod_dir}magazine/page3.png", title: 'Third Page' }}, ]
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
        <a id="magazineMonth" href="{$img_prod_dir}magazine/page1.png"><img src="{$img_prod_dir}magazine/thumbnails/page1.png" alt="First"
                                                         title="First page"/></a>
    </div>

    <div style="float: right; margin-right: 50px;" class="thumbnails yoxview">
        <br/>
        <h1 style="text-align: center"> Magazine of the last month </h1>

        <a id="magazineLastMonth" href="{$img_prod_dir}magazine/page1.png"><img src="{$img_prod_dir}magazine/thumbnails/page1.png" alt="First"
                                                         title="First page"/></a>
    </div>

    <hr/>
    <br/>
</div>
</body>
</html>

{*{ media: { src: "{$img_prod_dir}magazine/page1.png", title: 'TURNER SULTAN Red' }},*}
{*{ media: { src: "{$img_prod_dir}magazine/page2.png", title: 'TURNER SULTAN Black' }}, ]*}
