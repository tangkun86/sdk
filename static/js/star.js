// JavaScript Document
$.fn.starGrade = function (options, callback) {
    //默认设置
    var settings = {
        MaxStar:5,
        StarWidth:20,
        DefaultStar:0,
        Enabled:false,
        Half:1
    };
    if (options) {
        jQuery.extend(settings, options);
    }
    var currentStar =settings.DefaultStar;
    var containerWrap = jQuery(this);
    for (var i = 0; i < containerWrap.length; i++) {
        var container = $(containerWrap[i]);
        var startValue = container.attr("starValue");
        if(typeof startValue != "undefined" && startValue != ""){
            currentStar = startValue;
        }
        container.css({"position":"relative"})
            .html('<ul class="starGrade_Bg"></ul>')
            .find('.starGrade_Bg').width(settings.MaxStar * settings.StarWidth)
            .html('<li class="starGrade_overing start_current" style="width:' + currentStar * settings.StarWidth + 'px; z-index:0;" id="start_current"></li>');
        if (settings.Enabled) {
            var ListArray = "";
            if (settings.Half == 0) {
                for (k = 1; k < settings.MaxStar + 1; k++) {
                    ListArray += '<li class="starGrade_ON" style="width:' + settings.StarWidth * k + 'px;z-index:' + (settings.MaxStar - k + 1) + ';"></li>';
                }
            }

            if (settings.Half == 1) {
                for (k = 1; k < settings.MaxStar * 2 + 1; k++) {
                    ListArray += '<li class="starGrade_ON" style="width:' + settings.StarWidth * k / 2 + 'px;z-index:' + (settings.MaxStar*2 - k + 1) + ';"></li>';
                }
            }

            container.find('.starGrade_Bg').append(ListArray);
            container.find('.starGrade_ON').hover(function () {
                    $(this).removeClass('starGrade_ON').addClass("starGrade_overing");
                    $(this).parent('ul:first').find(".start_current").hide();
                },
                function () {
                    $(this).removeClass('starGrade_overing').addClass("starGrade_ON");
                    $(this).parent().find(".start_current").show();
                })
                .click(function () {
                    var starGrade_count;
                    if (settings.Half == 1){
                        starGrade_count = settings.MaxStar - ($(this).css("z-index") - 1)/2;
                    }else{
                        starGrade_count = settings.MaxStar - $(this).css("z-index") + 1;
                    }
                    $(this).parent().find(".start_current").width(starGrade_count * settings.StarWidth);
                    //回调函数
                    if (typeof callback == 'function') {
                       var status = callback.apply($(this).parent().parent(), [starGrade_count]);
                        if(status){
                            return;
                        }
                    }
                    $(this).parent().parent().find('input').val(starGrade_count);
                });

            var inputName = container.attr("starInput");
            if(typeof inputName != "undefined" && inputName != ""){
                var input = $("<input style='display:none' type='text'/>").attr('name',inputName);
                if(typeof startValue != "undefined" && startValue != ""){
                    input.val(startValue);
                }
                container.append(input);
            }
        }
    }
}