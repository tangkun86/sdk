$(function(){
    $("#paginationBtn").on('click',function(){
        var num = parseInt($("#pagination").val());
        if(!num)return false;

        var obj = $(this);
        var lastPage = parseInt(obj.attr('lastPage'));
        var curPage = parseInt(obj.attr('curPage'));

        if(num > lastPage){
            num = lastPage;
        }else if(num < 1){
            num = 1;
        }
        if(num == curPage){
            return false;
        }

        var url = obj.attr("href");
        if(url.indexOf("?")>0){
            url = url + "&page="+num;
        }else{
            url = url + "?page="+num;
        }
        window.location = url;
        return false;
    });

    $("#pagination").on("keyup",function(event){
        if(event.keyCode==13){
            $("#paginationBtn").trigger( "click" )
        }
    });

});