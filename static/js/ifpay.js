/** 
* ifpay js
*  
* @author leon 
* @since 2014-4-8
*/  
// ---------------------------------------------------------  

//********************表格排序代码********************
//动态给js添加class属性

 function addClass(element, value) {
  if(!element.className) {
   element.className = value; //如果element本身不存在class,则直接添加class为value的值
  } else {
   element.className += " "+value; //如果element之前有一个class值，注意中间要多一个空格,然后再加上value的值
  }
 }
 
 //鼠标经过时高亮显示
 function highlightRows() {
  var rows = document.getElementsByTagName("tr");
  for(var i=0; i<rows.length; i++) {
   rows[i].oldClassName = rows[i].className; //首先保存之前的class值
   rows[i].onmouseover = function() {
    addClass(this, "highlight"); //鼠标经过时添加class为highlight的值
   }
   rows[i].onmouseout = function() {
    this.className = this.oldClassName; //鼠标离开时还原之前的class值
   }
  }
 }
 //比较之前进行数据转换
 function convert(value, dataType) {
  switch(dataType) {
   case "int":
    return parseInt(value);
    break
   case "float":
    return parseFloat(value);
    break
   case "date":
    return Date.parse(value);
    break
   default:
    return value.toString();
  }
 }
 //用于sort比较字符串
 function compareCols(col, dataType) {
  return function compareTrs(tr1, tr2) {
   value1 = convert(tr1.cells[col].innerHTML, dataType);
   value2 = convert(tr2.cells[col].innerHTML, dataType);
   if (value1 < value2) {
    return -1;
   } else if (value1 > value2) {
    return 1;
   } else {
    return 0;
   }
  };
 }
 //对表格进行排序
 function sortTable(tableId, col, dataType) {
  var table = document.getElementById(tableId);
  var tbody = table.tBodies[0];
  var tr = tbody.rows; 
  var trValue = new Array();
  for (var i=0; i<tr.length; i++ ) {
   trValue[i] = tr[i];  //将表格中各行的信息存储在新建的数组中
  }
  if (tbody.sortCol == col) {
   trValue.reverse(); //如果该列已经进行排序过了，则直接对其反序排列
  } else {
   trValue.sort(compareCols(col, dataType));  //进行排序
  }
  var fragment = document.createDocumentFragment();  //新建一个代码片段，用于保存排序后的结果
  for (var i=0; i<trValue.length; i++ ) {
   fragment.appendChild(trValue[i]);
  }
  tbody.appendChild(fragment); //将排序的结果替换掉之前的值
  tbody.sortCol = col;
 }
 window.onload = function() {
  highlightRows();
 }



//********************日期控件********************
;(function($) {
    $.extend($.fn, {
        userFocus :function() {
            $(this).click(function(){
                var target = $(this);
                var friendId = target.attr("targetId");
                if(!friendId){
                    return;
                }
                $.post("/index.php/UserAction/focus/" + friendId,{},function(response){
                    if(response.status == 200){
                        CuiOverAlert(response.msg);
                    }else if(response.msg){
                        CuiOverWarn(response.msg);
                    }
                })
            })
        },
        userLike : function(){
            $(this).click(function(){
                var target = $(this);
                if(target.attr("liked") == "true"){
                    return;
                }
                var targetId = target.attr("targetId");
                var targetType = target.attr("targetType");
                if(!targetId || !targetType){
                   return;
                }
                var like = target.find(".texts");
                var num = parseInt(like.html());
                like.html(++num);
                $.post("/index.php/UserAction/like/"+targetId,{"type":targetType},function(response){
                    if(response.status == 200){
                        CuiOverAlert(response.msg);
                    }else if(response.msg){
                        CuiOverWarn(response.msg);
                        like.html(--num);
                    }
                    target.attr("liked","true");
                })
            });
        },
        userFavorite : function(){
            $(this).click(function(){
                var target = $(this);
                if(target.attr("liked") == "true"){
                    return;
                }
                var targetId = target.attr("targetId");
                var targetType = target.attr("targetType");
                if(!targetId || !targetType){
                    return;
                }
                var like = target.find(".texts");
                var num = parseInt(like.html());
                like.html(++num);
                $.post("/index.php/UserAction/favorite/"+targetId,{"type":targetType},function(response){
                    if(response.status == 200){
                        CuiOverAlert(response.msg);
                    }else if(response.msg){
                        CuiOverWarn(response.msg);
                        like.html(--num);
                    }
                    target.attr("liked","true");
                })
            });
        }
    });
})(jQuery);

if(typeof(UserAdm) == "undefined"){
    UserAdm = {};
}

UserAdm.delFocus = function(userid,func){
    if(confirm("确定要删除么？")){
        $.post("/index.php/UserAction/delFocus/"+userid,{},function(response){
            if(response.status == 200){
                CuiOverAlert(response.msg);
                if(func){
                    func.apply(this,[]);
                }
            }else if(response.msg){
                CuiOverWarn(response.msg);
            }
        })
    }
}

UserAdm.delFavorite = function(targetId,targetType,func){
    if(confirm("确定要删除么？")){
        $.post("/index.php/UserAction/delFavorite/"+targetId,{"type":targetType},function(response){
            if(response.status == 200){
                CuiOverAlert(response.msg);
                if(func){
                    func.apply(this,[]);
                }
            }else if(response.msg){
                CuiOverWarn(response.msg);
            }
        })
    }
}

UserAdm.delApp = function(id,func){
    if(confirm("确定要删除么？")){
        $.post("/index.php/UserAction/delApp/"+id,{},function(response){
            if(response.status == 200){
                CuiOverAlert(response.msg);
                if(func){
                    func.apply(this,[]);
                }
            }else if(response.msg){
                CuiOverWarn(response.msg);
            }
        })
    }

}

UserAdm.delTopic = function(id,func){
    if(confirm("确定要删除么？")){
        $.post("/index.php/UserAction/delTopic/"+id,{},function(response){
            if(response.status == 200){
                CuiOverAlert(response.msg);
                if(func){
                    func.apply(this,[]);
                }
            }else if(response.msg){
                CuiOverWarn(response.msg);
            }
        })
    }
}

UserAdm.checkNewMsg = function(){
    $.post("/index.php/UserAction/checkMsg/",{},function(response){
        if(response.status == 200){
            //mark msg
            if(response.new_msg > 0){
                $("#newMsg").text("("+response.new_msg+")");
            } else {
                $("#newMsg").text("");
            }
        }
    })
}

setInterval(UserAdm.checkNewMsg,60000);