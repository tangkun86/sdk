/*
* 名称: global
* 功能: 相关效果处理
* Copyright © 2013, All Rights Reserved 
* Date:2013-04-05
*/
$(document).bind('mobileinit',function(e){
         $.extend($.mobile,{
                 ajaxEnabled:false,
				 defaultPageTransition: "slide"
         });
  });
//game introduce ajax tab
$(function(){	
	var detailMenu = $('#detailTab').find(".detailTabmenu").children("a");
	detailMenu.click(function(){
	var thisTab = $(this).attr("href");
	$("#detailTab .loading").ajaxStart(function(){
		$(this).show();
	}); 
	$("#detailTab .loading").ajaxStop(function(){
		$(this).hide();
}); 
	$('#detailTab .detailTabCont').load(thisTab);
	detailMenu.removeClass("current");
	$(this).addClass("current");
	return false;
	});
	detailMenu.eq(0).trigger("click");
	
	
//add people
$('#findUser').click(function(){ 
		$(".receiverList").slideToggle();
	});
$('.icon_comment').click(function(){ 
		$(this).parent().next(".commentSection").slideToggle();
	});
})

$(function(){
	
	$(".languageOption").bind("click",function(){
	
	$(".otherLanguage").slideToggle();
	
	})
	})
