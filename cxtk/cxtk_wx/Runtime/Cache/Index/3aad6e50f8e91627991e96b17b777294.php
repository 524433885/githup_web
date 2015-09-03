<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <title>门店列表</title>
    <link rel="stylesheet" type="text/css" href="__PUBLICI__/Member/css/wei_dialog_v1.css">
    <link rel="stylesheet" type="text/css" href="__PUBLICI__/Member/css/wei_canyin_v1.css">
    <script src="__PUBLICI__/Member/js/wei_webapp_v2_common_v1.js"></script>
    <style>abbr,article,aside,audio,canvas,datalist,details,dialog,eventsource,fieldset,figure,figcaption,footer,header,hgroup,mark,menu,meter,nav,output,progress,section,small,time,video,legend{display:block;}</style><style>abbr,article,aside,audio,canvas,datalist,details,dialog,eventsource,fieldset,figure,figcaption,footer,header,hgroup,mark,menu,meter,nav,output,progress,section,small,time,video,legend{display:block;}</style>
    <script src="__PUBLICI__/Member/js/wei_industry_common_v1.js"></script>
</head>
<body style="width: 435px;padding-top:5px;" id="page_order">
   <?php if(is_array($store)): foreach($store as $key=>$v): ?><section>
        <article>
            <span><img src="<?php echo ($image_url); echo ($v["img"]); ?>"></span>
            <h1><?php echo ($v["name"]); ?></h1>
            <p><?php echo ($v["address"]); ?></p>
        </article>
        <ul>
            <li><a href="tel:<?php echo ($v["tel"]); ?>" class="order">电话</a></li>
            <li><a href="<?php echo ($v["url"]); ?>" class="gps">导航</a></li>
            <li><a href="#" class="reality">实景</a></li>
        </ul>
    </section><?php endforeach; endif; ?>

  </body></html>