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

    <h2 style="text-align: center;"> “Find your style” </h2>

    <br>
    <br>
    <p> Answer some questions in order to get an advise which glasses fit to your style :
   </p>

    <p>
        1. Please indicate your gender: 
    </p>

    <input class="stylebutton" type="radio" name="group1" value="Female"> Female<br>
    <input class="stylebutton" type="radio" name="group1" value="Male"> Male<br>

    <br />
    <hr>
    <br />

 <p>   2. If you could be a celebrity for one day, who would you like to be:
 </p>

    <img style="width: 120px; position: relative; left: 10px;" src="{$img_prod_dir}findyourstyle/francksinatra.png" alt="francksinatra" title="francksinatra"/>
    <img style="width: 120px; position: relative; left: 40px;" src="{$img_prod_dir}findyourstyle/audreyhepburn.png" alt="audreyhepburn.png" title="audreyhepburn"/>
    <img style="width: 120px; position: relative; left: 80px;" src="{$img_prod_dir}findyourstyle/ladygaga.png" alt="ladygaga.png" title="ladygaga"/>
    <img style="width: 120px; position: relative; left: 120px;" src="{$img_prod_dir}findyourstyle/cr.png" alt="cr.png" title="cr"/>

    <br /><br />
    <input class="stylebutton" type="radio" name="group2" value="David Beckam"> Franck Sinatra
    <input style="margin-left: 20px;" class="stylebutton" type="radio" name="group2" value="audrey hepburn"> Audrey Hepburn
    <input style="margin-left: 30px;" class="stylebutton" type="radio" name="group2" value="lady gaga"> Lady Gaga
    <input style="margin-left: 40px;" class="stylebutton" type="radio" name="group2" value="Christiano Ronaldo"> Christiano Ronaldo <br>

    <br />
    <hr>
    <br />

 <p>   3. Which of the following pictures do you like most spontaneously?
 </p>

    <img style="width: 150px; position: relative;" src="{$img_prod_dir}findyourstyle/questionnaire1.png" alt="questionnaire1" title="questionnaire1"/>
    <img style="width: 150px; position: relative;" src="{$img_prod_dir}findyourstyle/questionnaire2.png" alt="questionnaire2" title="questionnaire2"/>
    <img style="width: 150px; position: relative;" src="{$img_prod_dir}findyourstyle/questionnaire3.png" alt="questionnaire3" title="questionnaire3"/>
    <img style="width: 150px; position: relative;" src="{$img_prod_dir}findyourstyle/questionnaire4.png" alt="questionnaire4" title="questionnaire4"/>

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
        <a href="{$link->getPageLink('contact-form.php')}">designer</a>  for their professional advice! Just upload a picture of you (your face and your style) and they will recommend some glasses that would suit you!
    </p>

    <br />
   <div style="display: block; text-align: center;">

    <button onclick="self.location.href='product.php?id_product=1157'" type="submit">
        find your glasses
    </button>
   </div>

</div>
</body>
</html>

{*{ media: { src: "{$img_prod_dir}magazine/page1.png", title: 'TURNER SULTAN Red' }},*}
{*{ media: { src: "{$img_prod_dir}magazine/page2.png", title: 'TURNER SULTAN Black' }}, ]*}
