"use strict";$('[type="text"]').on("input",function(){$.ajax({url:"../server/goods_select.php",type:"post",data:{userName:$('[type="text"]').val()},dataType:"json",success:function(e){$(".nameSpan").html('<span style="color:'.concat(1===e.result?"blue":"red",'">').concat(e.msg,"</span>"))}})}),$("button").click(function(){$.ajax({url:"../server/goods_res.php",type:"post",data:{userName:$('[type="text"]').val(),userPwd:$('[type="password"]').val()},dataType:"json",success:function(e){console.log(e),0===e.result?window.alert("用户名重复"):(window.alert("注册成功"),window.close())}})});