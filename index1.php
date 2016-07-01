 <?php 
header('Content-type: text/html; charset=UTF-8');
require_once 'require/alertMes.php';
$conn = mysqli_connect('localhost', 'root', '', 'food') or die(mysqli_connect_error());
mysqli_set_charset($conn, 'utf8');
error_reporting(E_ALL & ~E_NOTICE);

//<---用session进行用户状态判断--->
session_start();
if ($_SESSION['ident']== 0) {
    alertMes("您不是管理员！无法进入", "index.php");

}
//<---end用户状态判断--->

?>

<!DOCTYPE html>

<html>
 <head> 
  <meta charset="utf-8" /> 
  <title>点餐系统</title> 
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" /> 
  <meta name="author" content="" /> 
  <!-- Le styles --> 
  <link href="css/bootstrap.css" rel="stylesheet" /> 
  <link href="css/buttons.css" rel="stylesheet" /> 
  <link href="css/flat.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  
  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --> 
  <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]--> 
  <!-- Le fav and touch icons --> 
 </head> 
 <body> 
     <style type="text/css">
h.text1 {
position: relative;
left: 2000px;
}

    </style>

<div id="wrapper" class="viewer">
    <div id="sidebar-wrapper">
        <div class="well sidebar-nav">
            <nav id="J_menuList" class="nav nav-list">
            </nav>
        </div>
    </div>
    <div id="page-content-wrapper" class="">
        <div class="page-content">
            <div class="container" id="J_list_Container">
            </div>
        </div>
    </div>
    <footer class="footFix footLeft">
        <button id="myOrder" class="btn_change">
            购物车
            <!--span class="num">9</span-->
        </button>
        <a href="addDining.php"><button id="myOrder" class="btn_change">
            管理员系统
           
        </button></a>
        <a href="Exit.php"><button id="myOrder" class="btn_change">
            账号注销
           
        </button></a>
        <a href="liuY_2.php"><button id="myOrder" class="btn_change">
            留言墙
           
        </button></a>
    </footer>
</div>

<div id="wrapper2" class="viewer wrapper countpage clearfix" style="display:none">
    <section class="order_title">
        <div class="container" id="">
            <div class="col-md-12 clearfix foot_orderList">
                <div class="row">
                    <div class="col-xs-6">
                        <p class="notice">
                            购物车
                        </p>
                    </div>
                    <div class="col-xs-6">
                        <p class="notice tar">
                            共计
                            <span class="price" id="price_txt">
                                315元
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="oder_content">
        <div class="container" id="J_order_list">
        </div>
    </section>
    <section class="oder_submit">
        <div class="container">

           <button class="button button-rounded button-flat-action fr mgtbr8" id="submitOrder">
                提交
            </button>
              
            
            
        </div>
    </section>
</div>
<div id="imgViewer" class="viewer" style="display:none">
    <div class="container">
        <div class="col-md-12 clearfix">
            <div class="col-xs-12 foot-info">
                <div class="imgViewer_contain">
                    <div class="img_contain">
                        <img src="" class="img-responsive" alt="Responsive image" />
                    </div>
                    <div id="J_imgInfo" class="info_contain clearfix">
                        <strong>
                            菜2
                        </strong>
                        <span class="colred">
                            888元/份
                        </span>
                        <small>
                            524人买过
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="submitView" class="viewer clearfix" style="display:none">
    <section class="submit_title">
        <div class="container" id="">
            <div class="col-md-12 clearfix">
                <ul class="nav nav-tabs nav-separated">
                    <li class="active">
                        <a id="now_order">
                            学校食堂
                        </a>
                    </li>
                    <li>
                        <a id="remote_order">
                            阳光外卖
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-12 clearfix">
                <div class="now_submit clearfix">
                     <form action="dinnercar.php" method="post" name="form" onsubmit="return checkForm()">
                    <form role="form">

                        <div class="form-group" id="form_desk">
                            <label for="desk">
                                学生卡号
                            </label>
                            <span class="twitter-typeahead">
                                <input type="text" name="studentid" class="form-control tt-query" autocomplete="off"
                                spellcheck="false" dir="auto">
                            </span>
                        </div>
                        <div class="line-body clearfix" id="form_more">
                            <span class="fl lh43">
                                食堂打包外卖请补充资料
                            </span>
                            <ul class="nav nav-pills tabdrop fr">
                                <li class="dropdown pull-right tabdrop">
                                    <a class="dropdown-toggle" id="J_btn_reg">
                                        <i class="fa fa-th-list">
                                        </i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="form-group" id="form_info">

                            <label for="phone">
                                手机号码
                            </label>
                            <span class="twitter-typeahead">
                                <input type="text" name="phone" class="form-control tt-query" autocomplete="off"
                                spellcheck="false" dir="auto">
                            </span>
                            <label for="name" class="mgt10">
                                姓名
                            </label>
                            <span class="twitter-typeahead">
                                <input type="text" name="name" class="form-control tt-query" autocomplete="off"
                                spellcheck="false" dir="auto">
                            </span>
                            <label for="adress" class="mgt10">
                                楼栋/宿舍号
                            </label>
                            <span class="twitter-typeahead">
                                <input type="text" name="adress" class="form-control tt-query" autocomplete="off"
                                spellcheck="false" dir="auto">
                            </span>
                        </div>
                        <div class="form-group">
                            <div class="btn_control fr">
                                <a class="btn btn-default bottommargin" id="cancelSubmit">
                                    取消
                                </a>
                                
                                    <input type="submit" name="submit123" value="确认" class="button" />
                                   
                                </button> 
                        <h class ="text1"><input   type= "text "   name= "text1" onfocus=this.blur()>
                                                    <input   type= "text "   name= "text2" onfocus=this.blur()>
                                                     
                                </h>
                            </div>
                            
                        </div>
                    </form>
                     </form>
                </div>
            </div>
        </div>
    </section>
</div>
<div id="loadingView" class="viewer">
    <div class="container">
        <div class="col-md-12 clearfix loading">
        </div>
    </div>
</div><!-- Le javascript
    ================================================== --> 
  <!-- Placed at the end of the document so the pages load faster --> 
  <script src="js/jquery.js"></script> 
  <script src="js/bootstrap.min.js"></script>
  <script>
		var iG = iG||{};
        if(window.localStorage){
            try{
                iG = JSON.parse(localStorage["zaiG"])||{};
            }catch(e){
                localStorage.removeItem("zaiG");
                iG = iG||{};
            }
        }else{
            iG = iG||{};
        }
		$(function(){
			setTimeout(function () { window.scrollTo(0, 1); }, 0);
            
            //$.ajax(
            //    success:function(){
            //    
            //    
            //    }
            //)
			/*
			$.ajax(
					{
						type:"post",
						dataType:"json",
						url:"getAllDish",
		                success:function(result){
		                	//alert(result);
							iG.items = result;
							init();//ajax成功后执行init();
		                }
					}
			)
			*/
			
            setTimeout(function () {
                iG.items={
            "中餐":[
<?php


 $sql1 = "select *  from chinese_food ";
            $query1=mysqli_query($conn,$sql1);
            
while ($row1=mysqli_fetch_array($query1)) {
    
echo "{";
echo 'id:"';
echo $row1['id'];
echo '",';
echo 'name:"';
echo $row1['Cname'];
echo '",';
echo 'cls:"chinese_food",';
echo 'price:"';
echo $row1['Cmoney'];
echo '",';
echo 'sels:"524",';

echo 'imageUrl:"';
echo $row1['Cpicture'];
echo '",';
echo '},';

}




 ?>
            
                    ],
            "西餐":[
            <?php


 $sql1 = "select *  from western_food ";
            $query1=mysqli_query($conn,$sql1);
            
while ($row1=mysqli_fetch_array($query1)) {
    
echo "{";
echo 'id:"';
echo $row1['id'];
echo '",';
echo 'name:"';
echo $row1['Cname'];
echo '",';
echo 'cls:"western_food",';
echo 'price:"';
echo $row1['Cmoney'];
echo '",';
echo 'sels:"524",';

echo 'imageUrl:"';
echo $row1['Cpicture'];
echo '",';
echo '},';

}




 ?>


                    ],
            "饮品":[
<?php


 $sql2 = "select *  from drink ";
            $query2=mysqli_query($conn,$sql2);
            
while ($row2=mysqli_fetch_array($query2)) {
    
echo "{";
echo 'id:"';
echo $row2['id'];
echo '",';
echo 'name:"';
echo $row2['Cname'];
echo '",';
echo 'cls:"drink",';
echo 'price:"';
echo $row2['Cmoney'];
echo '",';
echo 'sels:"524",';

echo 'imageUrl:"';
echo $row2['Cpicture'];
echo '",';
echo '},';

}




 ?>
            
                    ]
			};
                init();//ajax成功后执行init(); 
            }, 20);//模拟ajax请求时间
            
            $("body").on("click",".list_id_respone",function(){
				iG["order"] = iG["order"]||{};
				var index = $(this).attr("data_id");
				
				if(iG.order[index]){
					iG.order[index].counter = iG.order[index].counter + 1;
				}else{
					var obj = getIndex(index);
					iG.order[index] = obj;
					iG.order[index].counter = 1;
				}
				if(window.localStorage){
                    localStorage["zaiG"] = JSON.stringify(iG);
                }
			});
			
			$("#myOrder").click(function(){
				$(".wrapper,#wrapper").removeClass("show");
				$(".wrapper,#wrapper").removeClass("hide");
				$("#wrapper").addClass("hide");
				$("#wrapper2").addClass("show")
				//$("#J_order_Manager").siblings("div").remove();
				$("#J_order_list").html(buildOrder(iG.order));
				$("#price_txt").html(countPrice() + "元");
			});
			$("body").on("click","#addOrder",function(){
				$(".wrapper,#wrapper").removeClass("show");
				$(".wrapper,#wrapper").removeClass("hide");
				$("#wrapper").addClass("show");
				$("#wrapper2").addClass("hide");
			});
			$("body").on("click",".foot-img img",function(){
				$("#imgViewer img").attr("src",$(this).attr("src"));
				
				$("#imgViewer").show();
				var item = getIndex($(this).attr("data_id"));
				$("#J_imgInfo").html("<strong>"+ item.name +"</strong><span class=\"colred\">"+ item.price +"元/份</span><small>"+ item.sels +"人买过</small>");
				var img = new Image();
				img.src = $(this).attr("src");
				if(img.complete){
					$(".imgViewer_contain").css("max-width",img.width + "px")
					$("#imgViewer .imgViewer_contain").css("margin-top",$(window).height() / 2 - img.height / 2 + "px");
					img = null;
				}else{
					img.onload=function(){
						$(".imgViewer_contain").css("max-width",this.width + "px");
						$("#imgViewer .imgViewer_contain").css("margin-top",$(window).height() / 2 - img.height / 2 + "px");
						img = null;
					};
				}
			});
			$("body").on("click","#imgViewer",function(){
				$("#imgViewer").hide();
			});
            
			$("body").on("click",".counter_plus",function(){
				iG["order"] = iG["order"]||{};
				var index = $(this).attr("data_id");
				
				if(iG.order[index]){
					iG.order[index].counter = iG.order[index].counter + 1;
				}else{
					var obj = getIndex(index);
					iG.order[index] = obj;
					iG.order[index].counter = 1;
				}
				$(this).siblings(".nocounter").html(iG.order[index].counter);
				$("#price_txt").html(countPrice() + "元");
                if(window.localStorage){
                    localStorage["zaiG"] = JSON.stringify(iG);
                }
			});
            
			$("body").on("click",".counter_minus",function(){
				iG["order"] = iG["order"]||{};
				var index = $(this).attr("data_id");
				if(iG.order[index].counter === 0)return;
				if(iG.order[index]){
					iG.order[index].counter = iG.order[index].counter - 1;
				}else{
					var obj = getIndex(index);
					iG.order[index] = obj;
					iG.order[index].counter = 1;
				}
				$(this).siblings(".nocounter").html(iG.order[index].counter);
				$("#price_txt").html(countPrice() + "元");
                if(window.localStorage){
                    localStorage["zaiG"] = JSON.stringify(iG);
                }
			});
            
			$("body").on("click","#clearOder",function(){
				iG["order"] = {};
				$("#J_order_list").html(buildOrder(iG.order));
				$("#price_txt").html(countPrice() + "元");
                if(window.localStorage){
                    localStorage["zaiG"] = JSON.stringify(iG);
                }
			});
            
			$("body").on("click","#J_menuList dd a",function(){
                iG.indexMenu = $(this).attr("data_name");
                $("#J_list_Container").html(listManger(iG.items));
                $("#J_menuList .active").removeClass("active");
                $(this).parent("dd").addClass("active");
            });
			$("#remote_order").click(function(){
				$(".nav-tabs li.active").removeClass("active");
				$(this).parent("li").addClass("active");
				$("#form_desk").slideUp();
				$("#form_more").slideUp();
				$("#form_info").slideDown();
			});
			$("#now_order").click(function(){
				$(".nav-tabs li.active").removeClass("active");
				$(this).parent("li").addClass("active");
				$("#form_desk").slideDown();
				$("#form_more").slideDown();
				$("#form_info").slideUp();
			});
			$("#J_btn_reg").click(function(){
				$("#form_info").toggle("normal","linear");
			
			});
			$("#submitOrder").click(function(){
				$(".viewer:visible").removeClass("show").addClass("hide");
				$("#submitView").removeClass("hide").addClass("show");
			})
			$("#cancelSubmit").click(function(){
				$(".viewer:visible").removeClass("show").addClass("hide");
				$("#wrapper2").removeClass("hide").addClass("show");
			});
		});
        function init(){
            setMenu(iG.items);
			$("#J_list_Container").html(listManger(iG.items));
            $("#loadingView").addClass("hide");
        }
        
        function setMenu(_list){
            iG.menu = [];
            iG.indexMenu = (function(){
                var menu;
                var count = 0;
                for(var i in _list){
                    if(count===0){
                        menu =  i;
                    }
                    count++;
                    iG.menu.push(i);
                }
                return menu;
            })();
            buildMenu(iG.menu);
        }
        
        function buildMenu(_list){
            var menuHtml = "<dl>";
            var active;
            for(var i in _list){
                active = "";
                if(_list[i]===iG.indexMenu)active = "active";
                menuHtml += "<dd class=\""+active+"\"><a data_name=\""+ _list[i] +"\">"+ _list[i] +"</a></dd>"
            
            }
			menuHtml += "</dl>";
            $("#J_menuList").html(menuHtml);
        }
        
		function getIndex(_id){
            var indexList = iG.items[iG.indexMenu];
			for(var i in indexList){
				if(indexList[i].id===_id){
					return indexList[i]
				}
			}
		}
		function submit(){
			var data = iG.order;
			var result = [];
			for(var i in data){
				result.push({id:iG.order[i].id,counter:iG.order[i].counter});
			}
			return JSON.stringify(result);
		}
		
		function countPrice(){
			var price = 0;
			for(var i in iG.order){
				price += Number(iG.order[i].price)*iG.order[i].counter;
                document.all( "text1").value=price;
			}
			return price;
		}
		function listManger(_list){
			var result = "";
			var listArr = [];
            var indexList = _list[iG.indexMenu];
			for(var i in indexList){
				listArr.push(indexList[i]);
				if(Math.floor(i/3)===0&&i>2){
					result += "<div class=\"row\">";
					result += buildList(listArr);
					result += "</div>";
					listArr = [];
				}
			}
			result += "<div class=\"row\">";
			result += buildList(listArr);
			result += "</div>";
			return result;
		}
		function buildList(_list){
			var result = "";
			for(var i in _list){
				result += "<div class=\"col-md-4 clearfix foot-items\"><div class=\"col-xs-4 foot-img\"><img src=\""+_list[i].imageUrl+"\" class=\"img-responsive\" alt=\"Responsive image\" data_id=\""+_list[i].id+"\" ></div><div class=\"col-xs-6 foot-info\"><p><strong>"+_list[i].name+"</strong></p><p class=\"colred\">"+_list[i].price+"元/份</p><p><small>"+_list[i].sels+"人买过</small></p></div><div class=\"col-xs-2 icons-pick foot-pick\"><div class=\"btn_wrap\"><button class=\"minus\" style=\"display: none;\"><strong></strong></button><i style=\"display: none;\">0</i><button class=\"list_add list_id_respone\" data_id=\""+_list[i].id+"\"><strong></strong></button><em class=\"fixBig  fake\"></em></div></div></div>"
				//<button ontouchstart=\"\" class=\"list_id_respone button button-circle button-flat-primary fa fa-plus\" data_id=\""+_list[i].id+"\"></button>	
			}
			return result;
		}
		function buildOrder(_list){
			var result = "<div class=\"row\" id=\"J_order_Manager\"><div class=\"col-xs-12 clearfix board_content\"><div class=\"col-xs-4 title_contain\"><p class=\"menu_title \">我的菜单</p></div><div class=\"col-xs-2\"></div><div class=\"col-xs-3 title_contain\"><button class=\"button button-rounded button-flat-action\" id=\"addOrder\">加菜</button></div><div class=\"col-xs-3 title_contain\"><button id=\"clearOder\"class=\"button button-rounded button-flat\">清空</button></div></div></div>";
			var check = true;
			var AZQ ="";
            var Pname = ""; 
			for(var i in _list){
				if(_list[i].counter === 0)continue;
				check = false;

                AZQ += _list[i].name+"*"+_list[i].counter+"   ";
              
				result += "<div class=\"row gray_line\"><div class=\"col-md-12 clearfix board_content\"><div class=\"col-xs-6\"><div class=\"col-md-6 clearfix order_item_name\"><label>"+_list[i].name+"</label></div><div class=\"col-md-6 clearfix order_price\">"+_list[i].price+"元一份</div></div><div class=\"col-xs-6\"><div class=\"btn_wrap counter\"><button class=\"list_minus counter_minus fl\" style=\"display: inline-block;\" data_id=\""+_list[i].id+"\" ontouchstart=\"\"><strong></strong></button><i class=\"nocounter fl\" style=\"display: inline-block;\">"+_list[i].counter+"</i><button class=\"list_add counter_plus\" data_id=\""+_list[i].id+"\" ontouchstart=\"\"><strong></strong></button><em class=\"fixBig  fake\"></em></div></div></div></div>";
				document.all( "text2").value=AZQ;
             
<?php



?>
				
			}

			if(check){
				result += "<div class=\"row gray_line\"><div class=\"col-md-12 clearfix board_content\"><p style=\"text-align: center;\"><span>亲，还没选到心仪的菜喔，点加菜开始选菜吧！</span></p></div></div>";
			}
			return result;
		}


            function checkForm()
{
    

    var _studentid = document.form.studentid.value;
    var _text1 = document.form.text1.value;
   if (_text1 ==  0) {

        alert('您购物车为空！请重新返回');
        return false;
    }
    if(_studentid == "")
    {
        alert('请输入学生号码！');
        return false;
    }

   alert('成功提交！正在转向支付窗口...');
    return true;    
    
}

	</script>  
 </body>
</html>
