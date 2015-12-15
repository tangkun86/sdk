/**
 * 基础通用css
 * @author wanzhu
 * Copyright 2013 ifpay, Inc.
 * @version 1.0 13-12-04 21.00
 */

/*******************************************************************************
 *
 * 模块方法调用
 *
 *******************************************************************************/
$(function () {
    $("#userId").on('change', selectAjax);
	dateBox();
})

/*******************************************************************************
 *
 * 订购明细查询
 *
 *******************************************************************************/
var AppCache = {};
function selectAjax() {
    var appId = $("#appId");
    var id = $(this).val();
    appId.empty();
    appId.append($("<option value>ALL</option>"));

    if(!id){
        return;
    }
    if (AppCache[id]) {
        $.each(AppCache[id], function (key, value) {
            appId.append($("<option></option>").attr("value", value.id).text(value.name));
        })
    } else {
        $.get("queryApp", {"userId": id}, function (data) {
            AppCache[id] = data.apps;
            //start from here. insert apps into appId selector.
            $.each(data.apps, function (key, value) {
                appId.append($("<option></option>").attr("value", value.id).text(value.name));
            })
        }, 'json');
    }

}

/*******************************************************************************
 *
 * 日历通用方法
 *
 *******************************************************************************/
function dateBox(){
    try {
        $('.select-datebox').datebox({
            panelWidth: $('.select-datebox').width()
        })
    } catch (e) {
    }
}

function delMsg(id){
    if(confirm("-|您确定要删除吗？|-")){
        $.ajax(
            {
                type:"post",
                url:"/index.php/UserAction/delMsg/"+id,
                data:{},
                success: function(data) {
                    if(typeof(data) =='string' ){
                        data = eval('(' + data + ')');
                    }
                    if(data.status == 200){
                        CuiOverAlert("删除成功");
                        location.reload();
                    }else{
                        CuiOverWarn(data.msg);
                    }
                }
            }
        )
    }
}