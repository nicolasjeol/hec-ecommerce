/**
 * Javascript library for template ExtremeMagento
 * @copyright 2007 Quick Solution LTD. All rights reserved.
 * @author Giao L. Trinh <giao.trinh@quicksolutiongroup.com>
 */

(function() {
	
// EM.tools {{{
	
if (typeof BLANK_IMG == 'undefined') 
	var BLANK_IMG = '';

// declare namespace() method
String.prototype.namespace = function(separator) {
  this.split(separator || '.').inject(window, function(parent, child) {
    var o = parent[child] = { }; return o;
  });
};


'EM.tools'.namespace();


// EM0022 {{{
	
function slideshow()
{
	var ul = $$('#slideshow ul');
	for(var k =0; k< ul.length; k++)
	{
		decorateSlideshow(k);
	}
}
function decorateSlideshow(k) {
	var $$li = $$('#slideshow ul li');
	if ($$li.length > 0) {
		
		// reset UL's width
		
		var ul = $$('#slideshow ul')[k];
		var w = 0;
		
		$$li.each(function(li) {
			w += li.getWidth();
		});
		ul.setStyle({'width':w+'px'});
		
		// private variables
		var previous = $$('#slideshow a.previous')[0];
		var next = $$('#slideshow a.next')[0];
		var num = 1;
		var width = ul.down().getWidth() * num;
		var slidePeriod = 3; // seconds
		var manualSliding = false;
		
		// next slide
		function nextSlide() {
			new Effect.Move(ul, { 
				x: -width,
				mode: 'relative',
				queue: 'end',
				duration: 1.0,
				//transition: Effect.Transitions.sinoidal,
				afterFinish: function() {
					for (var i = 0; i < num; i++)
						ul.insert({ bottom: ul.down() });
					ul.setStyle('left:0');
				}
			});
		}
		
		// previous slide
		function previousSlide() {
			new Effect.Move(ul, { 
				x: width,
				mode: 'relative',
				queue: 'end',
				duration: 1.0,
				//transition: Effect.Transitions.sinoidal,
				beforeSetup: function() {
					for (var i = 0; i < num; i++)
						ul.insert({ top: ul.down('li:last-child') });
					ul.setStyle({'position': 'relative', 'left': -width+'px'});
				}
			});
		}
		
		function startSliding() {
			sliding = true;
		}
		
		function stopSliding() {
			sliding = false;
		}
		
		// bind next button's onlick event
		next.observe('click', function(event) {
			Event.stop(event);
			manualSliding = true;
			nextSlide();
		});
		
		// bind previous button's onclick event
		previous.observe('click', function(event) {
			Event.stop(event);
			manualSliding = true;
			previousSlide();
		});
		
		
		// auto run slideshow
		/*new PeriodicalExecuter(function() {
			if (!manualSliding) previousSlide();
			manualSliding = false;
		}, slidePeriod);*/
		
		
	}

}

function productdetail()
{
	if($$('.box-reviews .customer-reviews')=="")
		{
			if($('customer-reviews')!=null)
			{
				$('customer-reviews').addClassName('full-reviews');
			}
		}
		else
		{
			if($('customer-reviews')!=null)
			{
				$('customer-reviews').removeClassName('full-reviews');
				}
		}
	if($$('.product-view-group .block-related')=="" && $$('.product-view-group .box-tags')=="" || $$('.product-view-group .box-tags')=="" && $$('.product-view-group .box-up-sell')=="" || $$('.product-view-group .block-related')=="" && $$('.product-view-group .box-up-sell')=="")
	{
		$$('.product-view-group').each(function(e){  e.addClassName('full-box-tags') });
	}
	else
	{
		$$('.product-view-group').each(function(e){  e.removeClassName('full-box-tags') });
	}
}

function menu()
{
	var Width_ul=0;
	var Width_li=0;
	var Width_before=0;
	var Width_div=0;
	var Width=0;
    $$(".menu").each(function(elem) {
		Width_ul=elem.getWidth();
		elem.childElements().each(function(li) {
            Width_li=li.getWidth();
			Width=Width_ul-Width_before;
			Width_before+=Width_li;
			$div=li.select('div')[0];
			if(typeof $div != 'undefined'){
				Width_div=$div.getWidth();
				sub=Width_div-Width;
				if(sub>0){
					$div.addClassName(' position-right')
					li.addClassName('position-right-li')
				}
			}
        });
		
	});
}

function addClassInput(){
var $length=0;	
$length = $$('input[type=text]').length;
if($length>0)
{
	var $input = $$('input[type=text]');
	$input.each(function(i) {
	var div = i.up('div');
		 div.addClassName('input-select-box');
	});
}
var $lengthpass=0;	
$length = $$('input[type=password]').length;
if($length>0)
{
	var $input = $$('input[type=password]');
	$input.each(function(i) {
	var div = i.up('div');
		 div.addClassName('input-select-box');
	});
}

var counttextarea=0;
counttextarea = $$('textarea').length;
if(counttextarea>0)
{
	var $input = $$('textarea');
	$input.each(function(i) {
	var div = i.up('div');
		 div.addClassName('input-textarea');
	});
} 
}
document.observe("dom:loaded", function() {
    menu();
	//decorateSlideshow();
	slideshow();
	productdetail();
	addClassInput();
});

})();