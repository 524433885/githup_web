<?php if (!defined('THINK_PATH')) exit();?><html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0">
<title><?php echo ($config['title']); ?></title>
<script charset="utf-8" src="__PUBLICI__/Groupbuy/jquery-1.4.1.min.js"></script>
<style>
        * {margin: 0;padding: 0;list-style: none;}
		.clearfix{*zoom:1;}
        .clearfix:after{clear:both;display:table;content:"";visibility:hidden;height:0;line-height:0;font-size:0;}
        .main-page{padding-bottom:5px;background-color:#efefef;}
        .brand-list{margin:10px 0;padding:0 8px;}
        .brand-list .brand{position:relative;margin:0 auto 10px;background-color:#fff;}
        .brand .brand-link{display:block;text-align:center;}
        .brand .brand-link img{width:100%;}
        .brand .brand-bar{padding:0 5px;height:40px;}
        .brand .brand-bar .brand-logo{float:left;position:relative;z-index:10;margin-top:10px;width:90px;height:21px;background-color:#fff;overflow:hidden;}
        .brand .brand-bar .brand-logo img{width:100%;}
        .brand .brand-bar .brand-zk{float:right;font-size:16px;line-height:25px;color:#d6474b;font-family:黑体;padding-top:10px;}
        .brand .brand-bar .brand-info{padding-left:10px;padding-top:10px;font:16px 黑体;line-height:24px;color:#555;white-space:nowrap;text-overflow:ellipsis;overflow:hidden;}
        .brand .leave-time{position:absolute;right:0;top:5px;z-index:10;padding:0 5px;height:20px;line-height:20px;font-size:12px;color:#fff;background-color:rgba(0,0,0,.5);}
        .icon-clock{display:inline-block;width:12px;height:13.2px;vertical-align:text-bottom;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAWBAMAAAAyb6E1AAAAHlBMVEUAAAD///////////////////////////////8GBwEYCWdkAAAACHRSTlMACUzpIreAf04yAw0AAABXSURBVAjXYwAB1xAGKBDv6CiEsJgsOjqaFUAslogOIGh1YGBgrOgAg3YBBuUOKDBiAJGdYDbpzJkzZ4CYMECYiWwxYwaE1SaAcCSS08FArKMjEUQjvAkAfyRVnz9j2uQAAAAASUVORK5CYII=) center top no-repeat;-webkit-background-size:contain;background-size:contain;}
        .brand .leave-time .time-text{display:inline-block;vertical-align:middle;margin-left:3px;}
        .over{color:#494949;font:16px 微软雅黑;text-align:center;padding:1rem 0rem;background-color:#e1e1e1;}
        .back-to-top{position:fixed;right:8px;bottom:20px;width:40px;height:44px;z-index:10;text-indent:-9999px;overflow:hidden;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABYCAMAAABVnIDyAAAAmVBMVEXWR0vWR0vRREfWR0vQQkbURUnWR0sAAAD////WRkrWR0v88PHWR0vWR0vWR0vWR0vWR0vWR0vWR0vYWl3WR0vWR0vWTVHzy8zVU1bWR0vWR0v11db33t7WR0vWR0v55OTWR0vWR0volpjvu7zRSUzXZmnWR0vWR0vWR0vWR0vww8TihYj66en//v7WR0vWR0vtsLHsq6zro6W6y/M6AAAAM3RSTlPMB8ynzMwWAMzMwczGugKzDTl+zHGSzMzMUFzMzCOFzCdkzMzMzEQwapfMzMzMSp7MzMxoQyuwAAACQUlEQVRYw+3Z23KCMBAG4BUIchBBqUi1itqDtra2+v4PV5J03HFiZ83hop3hv/EC/ZT5Y2bYQP+mjPxxeNs7bwJXrwCQrAtHYLgEmex+6AAs7gZwjj+yBXuzBC4yWViBhxyUjENjcOurHLajDS4mqoXtaIPh+CqF7eiBxS4BItgODQ7vM6CC7dDgS05a2A4Nbj9vsbAdAlwsCYJsB5S/mV6wHRXsrROgQrcDWC3dBd0OgiMfbILtAO6gNsF2AHdQ20xWAiSq1W4HZhm4S7IrwHEy6NLlH6Wclm69JmpKl95DFEUP7sS69bhYO/KqeSQzrx16jRArF96UU4/BI3+ZVo68Ny/w3tyIkvF4JG3pyRt98ljMvCd58/bevPUAoBXntuKX9ILW42IgxS9j7yiWcyU8KVZiiR8NvZPw6oDFIBOzoBbiycjbiPX846EoVvjG1Hs/eyi+G4nx5oN75dlDseTih664514qPUVMubjXA1PuPQtPFZ/FVb07TtH7RUxjHZDt0wa9K2KT7pkWGLTxuHdV9PhlAlQ/wtBTf6PydaTIWExd7tKlyx/KIXepZTPAiZ59BndFH3AYYp1lKJ/oHT3Tv64uhhirif3IAUHruUiOIysE+0PTwpN1DxVQRrgm1YqooFHhywUx7gvHOtznlhj36RWevxADSSzcZBqpglqFD3a8CxrEwjNyKkWDauH0VJMG6cJ9rJYG6cLzA324oHHAkMx6tic+WDj+zUxBLBx3UCsQzxoGuIPagVi43EHpfAOztFCmAMv2OQAAAABJRU5ErkJggg==) center top no-repeat;-webkit-background-size:contain;background-size:contain;}
    </style>
  <script type="text/javascript">
     $(document).ready(function(){
           //点击加载更多
           var page=1;
           var siteid=$('#loadingTip').attr('sid');
           $('#loadingTip').click(function(){
                   $.ajax({
                         url:'http://localhost:8077/weipan/Index/Groupbuy/getMore/page/'+page,
                         type:'POST',
                         data:'page='+page+'&siteid='+siteid,
                         dataType:'json',
                         success:function(data){
                             if (data == 0) {
                                 $("#loadingTip").html("没有更多了"); 
                             }else{
                                alert(data);
                                 for(var i=0, l=data.length; i<l; i++)
                                 {
                                   oNotes = data[i];
            $item = $('<div class="brand"><a href="'+oNotes.url+'"><img style="min-height:120px;width:100%" src="<?php echo ($image_url); ?>'+oNotes.img+'" ></a><div class="brand-bar clearfix"><span class="brand-zk" style="float:left;font-size:14px;">已售'+oNotes.num_buyer+'</span><span class="brand-zk">'+oNotes.discount+'折起</span><p class="brand-info">'+oNotes.name+'</p></div><div class="leave-time"><span class="icon-clock"></span><span id="left'+oNotes.id+'"></span> </div></div>');
                          $('#brand').append($item);
                        }
                                
                    }
                       }
                })
                page++;
               

           })
     });
  </script>
</head>
<body>
<style type="text/css">
	/* Common */
	.new-header-append{font-size:16px;line-height:1.25em;min-width:320px;font-size:1em;font-family:'microsoft yahei',Verdana,Arial,Helvetica,sans-serif;color:#000;-webkit-text-size-adjust:none}
	.new-header-append,p,h1,h2,h3,h4,h5,h6,ul,ol,li,dl,dt,dd,table,th,td,form,fieldset,legend,input,textarea,button,select{margin:0;padding:0}
	.new-tbl-type{display:table;width:100%}
	.new-tbl-cell{display:table-cell}
    /* header */
    .new-header{position:relative;z-index:8888;height:44px;background:#e4393c}
    .new-header-v1{background:#edecec}
    .new-header h2{height:44px;line-height:44px;font-weight:normal;font-size:16px;color:#fff;text-align:center}
    .new-header-v1 h2{color:#000}
</style>
<div class="new-header new-header-append">
	 <h2><?php echo ($config['title']); ?></h2>
</div>
    <div class="J_MainPage main-page">
      <!--   <section class="J_ModSlide mod-slide">
            <div id="idContainer" class="slide-content" style="position: relative; overflow: hidden;">
              <ul id="idSlider" class="cont-list clearfix scroller" style="width: 0%; position: relative; left: 0px;">
			 </ul>
            </div>
            <ul id="idNum" class="slide-trigger clearfix"></ul>
        </section> -->
        <section class="brand-list" id="brand">
         <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="brand">
			     <a href="<?php echo ($v["url"]); ?>">
						<img style="min-height:120px;width:100%" src="<?php echo ($image_url); echo ($v["img"]); ?>" >
				  </a>
                  <div class="brand-bar clearfix">
                    
                      <span class="brand-zk" style="float:left;font-size:14px;">已售<?php echo ($v["num_buyer"]); ?></span>
                      <span class="brand-zk"><?php echo ($v["discount"]); ?>折起</span>
                      <p class="brand-info">
                            <?php echo ($v["name"]); ?>
                      </p>

                   </div>
                    <div class="leave-time">
                        <span class="icon-clock"></span>
                        <span id="left<?php echo ($v["id"]); ?>"></span> 
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
       </section>
	<div class="over" id="loadingTip"  sid = "<?php echo ($siteid); ?>" style="padding-top:5px;padding-bottom:5px;font-size:14px;">点击加载更多</div>
<a href="javascript:scroll(0,0);" class="back-to-top" id="backToTop" style="display:block;">返回顶部</a>
<style type="text/css">
.new-footer{margin-top:10px;background-color:#f3f2f2;font-size:14px;color:#6e6e6e;text-align:center;
border-top:#E9E4E4 solid 1px;}

.new-footer .new-f-section,.new-footer .new-f-section2{padding:10px 0}
.new-footer .new-f-section2{padding-top:0;font-size:12px;color:#6e6e6e}
</style>
<footer>
	<div class="new-footer">
         <div class="new-f-section2" style="padding-bottom:2px;padding-top:10px;"> 版权所有</div>
         <div class="new-f-section2">技术支持:杭州微盘</div>
    </div>
</footer>
<script type="text/javascript"> 
    var addTimer = function () {  
        var list = [],  
            interval;  
        return function (id, time) {  
            if (!interval)  
                interval = setInterval(go, 1000);  
            list.push({ ele: document.getElementById(id), time: time });  
        }  
      function go() {  
            for (var i = 0; i < list.length; i++) {  
                list[i].ele.innerHTML = getTimerString(list[i].time ? list[i].time -= 1 : 0);  
                if (!list[i].time)  
                    list.splice(i--, 1);  
            }  
        }  
  
        function getTimerString(time) {  
            var not0 = !!time,  
                d = Math.floor(time / 86400),  
                h = Math.floor((time %= 86400) / 3600),  
                m = Math.floor((time %= 3600) / 60),  
                s = time % 60;  
            if (not0)  
                return "剩余" + d + "天" + h + "小时" + m + "分" + s + "秒";  
            else return "时间到";  
        }  
    } ();  

    var js_goods = <?php echo ($js_goods); ?>;
    for (var i = 0; i < js_goods.length; i++) {
        addTimer("left"+js_goods[i].id, js_goods[i].lefttime);  
    };

</script>  
</body>
</html>