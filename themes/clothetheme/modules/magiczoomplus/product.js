
var notDisplayImage = true;//do not run when the page loads and for some cases


var fancyboxClickEnable = false;
var magicToolboxSelectors = [];
var updateScrollStarted = false;

window['displayImage'] = function(jQuerySetOfAnchors) {


    if(notDisplayImage) {
        notDisplayImage = false;
        return;
    }
    if(typeof(jQuerySetOfAnchors) == 'undefined' || !jQuerySetOfAnchors.length) { return; }
    var e;
    var anchor = jQuerySetOfAnchors.get(0);
    if (document.createEvent) {
        e = document.createEvent('MouseEvents');
        e.initEvent(mEvent, true, true);
        anchor.dispatchEvent(e);
    } else {
        e = document.createEventObject();
        e.eventType = 'MouseEvents';
        anchor.fireEvent('on' + mEvent, e);
    }

}

window['findCombinationOriginal'] = window['findCombination'];
window['findCombination'] = function(firstTime) {
    if(typeof(firstTime) != 'undefined' && firstTime || updateScrollStarted) {
        window['findCombinationOriginal'].apply(window, arguments);
        return;
    }
    updateScroll(window['findCombinationOriginal'], arguments);
}
window['updateColorSelectOriginal'] = window['updateColorSelect'];
window['updateColorSelect'] = function(id_attribute) {
    updateScroll(window['updateColorSelectOriginal'], arguments);
}
window['updateScroll'] = function(originalFunction, args) {
    updateScrollStarted = true;
    if(!scrollThumbnails) {
        originalFunction.apply(window, args);
        return;
    }
    MagicScroll.stop('MagicToolboxSelectors'+id_product);
    if(!magicToolboxSelectors.length) {
        var container = document.getElementById('MagicToolboxSelectors'+id_product);
        if(container) magicToolboxSelectors = container.cloneNode(true).getElementsByTagName('a');
    } else {
        $('#MagicToolboxSelectors'+id_product+' a').remove();
        for(var i = 0; i < magicToolboxSelectors.length; i++) {
            $('#MagicToolboxSelectors'+id_product).append(magicToolboxSelectors[i].cloneNode(true));
        }


        MagicZoomPlus.refresh('MagicZoomPlusImageMainImage');



    }
    notDisplayImage = true;//to skip displayImage() because the selector can not be initialized
    originalFunction.apply(window, args);
    $('#MagicToolboxSelectors'+id_product+' a.hidden-selector').remove();
    //now we can try to display first image
    setTimeout(function(){
        displayImage($('#MagicToolboxSelectors'+id_product+' a:first'));

    }, 300);




    var items = $('#MagicToolboxSelectors'+id_product+' a').length;
    if(items > scrollItems) {
        items = scrollItems;
    }
    MagicScroll.extraOptions['MagicToolboxSelectors'+id_product]['items'] = items;
    //MagicScroll.init();
    MagicScroll.start('MagicToolboxSelectors'+id_product);
    updateScrollStarted = false;
}

window['refreshProductImagesOriginal'] = window['refreshProductImages'];
window['refreshProductImages'] = function(id_product_attribute) {
    if(thumbnailLayout == 'original') {
        window['refreshProductImagesOriginal'].apply(window, arguments);
        return;
    }
    $('div.MagicToolboxSelectorsContainer a').addClass('hidden-selector');
    id_product_attribute = parseInt(id_product_attribute);
    if(typeof(combinationImages) != 'undefined' && typeof(combinationImages[id_product_attribute]) != 'undefined') {
        for (var i = 0; i < combinationImages[id_product_attribute].length; i++) {
            $('#thumb_' + parseInt(combinationImages[id_product_attribute][i])).parent().removeClass('hidden-selector');
        }
    }
    if(i > 0) {

    } else {
        if(typeof(idDefaultImage) != 'undefined') {
            $('#thumb_' + idDefaultImage).parent().show();
            displayImage($('#thumb_'+ idDefaultImage).parent());
        }
    }
}


$(document).ready(function(){
    $('#views_block li a.magicthickbox').unbind('mouseenter mouseleave').click(function(){
        $('#views_block li a.shown').removeClass('shown');
        $(this).addClass('shown');
        //for blockcart module
        $('#bigpic').attr('src', $(this).attr('rev'));
    }).slice(0, 1).addClass('shown');
    $('span#view_full_size').unbind('click').click(function(){
        if(!$.fancybox) {
            //for prestashop 1.3.x
            $('#views_block li a.shown').each(function() {
                var t = this.title || this.name || null;
                var a = this.href || this.alt;
                var g = this.rel || false;
                tb_show(t, a, g);
                this.blur();
            });
        } else {
            //for prestashop 1.4.x
            fancyboxClickEnable = true;
            $('#views_block li a.shown').click();
        }
    });
    if($.fancybox) {
        //for prestashop 1.4.x
        $('.magicthickbox').fancybox({
            'hideOnContentClick': true,
            'transitionIn'  : 'elastic',
            'transitionOut' : 'elastic',
            'onStart' : function(){
                return fancyboxClickEnable;
            },
            'onClosed' : function(){
                fancyboxClickEnable = false;
            }
        });
    }
});


