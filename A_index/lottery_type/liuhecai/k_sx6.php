<? 

$_GET['leixing']='合肖';
$_GET['leixing_bet']='生肖';


$ids=$_GET['ids'];
if ($ids=="") $ids="六肖";
$num_limit;
if ($ids=="二肖") {
$num_limit=2;
$xc=19;
$XF=23;
}
if ($ids=="三肖") {
	$num_limit=3;
$xc=20;
$XF=23;
}
if ($ids=="四肖") {
	$num_limit=4;
$xc=21;
$XF=23;
}
if ($ids=="五肖") {
	$num_limit=5;
$xc=23;
$XF=23;
}
if ($ids=="六肖") {
	$num_limit=6;
$xc=26;
$XF=23;
}
if ($ids=="七肖") {
	$num_limit=7;
$xc=27;
$XF=23;
}
if ($ids=="八肖") {
	$num_limit=8;
$xc=28;
$XF=23;
}
if ($ids=="九肖") {
	$num_limit=9;
$xc=29;
$XF=23;
}
if ($ids=="十肖") {
	$num_limit=10;
$xc=31;
$XF=23;
}
if ($ids=="十一肖") {
	$num_limit=11;
$xc=32;
$XF=23;
}



function ka_kk1($i){   

   }



?>




<?
// exit;
// }



$result=$mysqli->query("Select class3,rate from c_odds_7 where class2='".$ids."' order by ID");
$drop_table = array();
$y=0;
while($image = $result->fetch_array()){
$y++;
//echo $image['class3'];
array_push($drop_table,$image);

}



?>




<SCRIPT language=JAVASCRIPT>
if(self == top) {location = '/';} 
if(window.location.host!=top.location.host){top.location=window.location;} 
</SCRIPT>


 <SCRIPT language=JAVASCRIPT>
<!--

function quick13()  // 家禽 = 牛、馬、羊、雞、狗、豬
{
for (var i=0; i<=11; i++) {
if ( i==0 || i==2 || i==4 || i==8 || i==1 || i==7 ){
MM_changeProp('num'+i,'','checked','0','INPUT/CHECKBOX');}else{
MM_changeProp('num'+i,'','checked','1','INPUT/CHECKBOX');
}}

pfix();
}

function quick14()  // 野獸 = 鼠、虎、兔、龍、蛇、猴
{
for (var i=0; i<=11; i++) {
if ( i==0 || i==2 || i==4 || i==8 || i==1 || i==7 ){
MM_changeProp('num'+i,'','checked','1','INPUT/CHECKBOX');}else{
MM_changeProp('num'+i,'','checked','0','INPUT/CHECKBOX');
}}

pfix();
}


var count_win=false;
//window.setTimeout("self.location='quickinput2.php'", 178000);
function CheckKey(){
	if(event.keyCode == 13) return true;
	if((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode > 95 || event.keyCode < 106)){alert("下注金额仅能输入数字!!"); return false;}
}





function CountGold(gold,type,rtype,bb,ffb){

}
//-->
</SCRIPT>
<SCRIPT language=javascript>
var ids='<?=$ids ?>';
if(self == top) location = '/';

if (ids=="二肖") { 
type_min = 2;
type_nums = 2;  

}
if (ids=="三肖") { 
type_min = 3;
type_nums = 3;  

}
if (ids=="四肖"){ 
	type_min = 4;
	type_nums = 4;  
	}
if (ids=="五肖"){ 
	type_min = 5;
	type_nums = 5;  
	}	
if (ids=="六肖"){ 
type_min = 6;
type_nums = 6;  
}
if (ids=="七肖"){ 
type_min = 7;
type_nums = 7;  
}
if (ids=="八肖"){ 
type_min = 8;
type_nums = 8;  
}
if (ids=="九肖"){ 
type_min = 9;
type_nums = 9;  
}
if (ids=="十肖"){ 
type_min = 10;
type_nums = 10;  
}
if (ids=="十一肖"){ 
type_min = 11;
type_nums = 11;  
}
var cb_num = 1;
var mess1 =  '必须选择';
var mess11 = '个肖';
var mess2 =  '超出相应肖数';
var mess = mess2;


function ChkSubmit(){

	if(type_min>$(":checkbox:checked").length)
	{
		alert("至少需要选择"+type_min+"个生肖！");return false;
	}else{
     document.lt_form.submit();
     self.location.reload();
		}	

}

function SubChk(obj) {
//type_nums = 11;
//type_min = 2;  
var checkCount = 0;
var checknum = obj.elements.length;
var rtypechk = 0;	
	
	for(i=0; i<checknum; i++) {
		if (obj.elements[i].checked) {
			checkCount ++;
		}
	}
	
	if (eval(document.all.allgold.innerHTML)<=0 || eval(total_gold.value)<=0)
	{
		alert("请输入下注金额!!");
	    document.all.btnSubmit.disabled = false;
		return false;

	}	
	
	
	if (checkCount > (type_nums)) {
		alert(mess2);
		return false;
	}if(checkCount < (type_min)){
		alert(mess1+type_min+mess11);
		return false;
	}else{
	
		return true;
	}
	
	 

	
}

function SubChkBox(obj) {

	if(obj.checked == false)
	{
		cb_num--;
		//obj.checked = false;
	}


	//alert (cb_num);


	if(obj.checked == true)
	{
		if ( cb_num > type_nums ) 
		{
			alert(mess);
			cb_num--;
			obj.checked = false;
		}
		cb_num++;
	}
}

var _peilv;
function pfix() {
	if (!_peilv) _peilv = parseFloat(document.getElementById('r_init').value);
	
	var peilv = _peilv;
	for (var i=0; i<=11; i++)
	{
		obj_check = "num" + i;
		if (document.getElementById(obj_check).checked == true)
		{
			obj_pfix = "pfix" + i;
			peilv+=","+parseFloat(document.getElementById(obj_pfix).innerHTML);
			// alert(peilv);
			//obj_pfix = "pfix" + i;
			//peilv = peilv - parseFloat(document.getElementById(obj_pfix).innerHTML);
			//peilv = Math.round(parseFloat(peilv)*100)/100;
		}
	}
	var ii=peilv.split(",");
	ii.sort(sortNumber);
	
	document.getElementById('bl0').innerHTML = ii[0];
	// document.getElementById('min_bl').value = ii[0];
}
function sortNumber(a,b){return a - b}



 
</SCRIPT>
<script language="javascript">
$(function(){
		//判断勾选个数
		$("input[type='checkbox']").click(function(event) {
			
			var obj = $(this);
			var in_type_1=0;  
	        $("input[type='checkbox']").each(function() {  
	            if($(this).attr("checked")==undefined){   

	            }else{	              
	              in_type_1++;	                
			        	if(in_type_1><?=$num_limit  ?>){   
			       			
					      obj.attr('checked', false);	
					        alert("请选择"+<?=$num_limit  ?>+"个号码！");	
					    }		        	
			     
	            }	            
	        });	      
		});
		
	})	
</script>
<script>
  $(function(){   
    $("span").css('cursor','default');
  })
</script>
 <style type="text/css">
<!--
body {
/*	margin-left: 10px;
	margin-top: 10px;*/
}
.STYLE1 {color: #333}
.STYLE4 {color: #333333; font-weight: bold; }
-->
 </style>
<noscript>
<iframe scr=″*.htm″></iframe>
</noscript>
<TABLE  border="0" cellpadding="2" cellspacing="1" bordercolordark="#f9f9f9" bgcolor="#CCCCCC"width=780 >
  <TBODY>	<?php include("common_qishu.php"); ?>
  <TR class="tbtitle">
    <TD ><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr>
    <TD align=right colSpan=3  class="tbtitle4" style="height:35px;" >
<div align="center">
       
 <?if ($ids=="二肖"){?>
<button onClick="javascript:location.href='liuhecai.php?action=k_sx6&ids=二肖';"  class="button_a" onMouseOut="this.className='but_c1'" onMouseOver="this.className='but_c1M'" style="height:25;background:#f00;" ;><SPAN id=rtm1 STYLE='color:#fff;'>二肖</span></button>&nbsp;
<?} else{?>
<button onClick="javascript:location.href='liuhecai.php?action=k_sx6&ids=二肖';"  class="button_a" style="height:25;" ;><SPAN id=rtm1 STYLE='color:#fff;'>二肖</span></button>&nbsp;
<?}?>
 <?if ($ids=="三肖"){?>
<button onClick="javascript:location.href='liuhecai.php?action=k_sx6&ids=三肖';"  class="button_a" onMouseOut="this.className='but_c1'" onMouseOver="this.className='but_c1M'" style="height:25;background:#f00;" ;><SPAN id=rtm1 STYLE='color:#fff;'>三肖</span></button>&nbsp;
<?} else{?>
<button onClick="javascript:location.href='liuhecai.php?action=k_sx6&ids=三肖';"  class="button_a" style="height:25" ;><SPAN id=rtm1 STYLE='color:#fff;'>三肖</span></button>&nbsp;
<?}?>
 <?if ($ids=="四肖"){?>
<button onClick="javascript:location.href='liuhecai.php?action=k_sx6&ids=四肖';"  class="button_a" onMouseOut="this.className='but_c1'" onMouseOver="this.className='but_c1M'" style="height:25;background:#f00;" ;><SPAN id=rtm1 STYLE='color:#fff;'>四肖</span></button>&nbsp;
<?} else{?>
<button onClick="javascript:location.href='liuhecai.php?action=k_sx6&ids=四肖';"  class="button_a" style="height:25" ;><SPAN id=rtm1 STYLE='color:#fff;'>四肖</span></button>&nbsp;
<?}?>
 <?if ($ids=="五肖"){?>
<button onClick="javascript:location.href='liuhecai.php?action=k_sx6&ids=五肖';"  class="button_a" onMouseOut="this.className='but_c1'" onMouseOver="this.className='but_c1M'" style="height:25;background:#f00;" ;><SPAN id=rtm1 STYLE='color:#fff;'>五肖</span></button>&nbsp;
<?} else{?>
<button onClick="javascript:location.href='liuhecai.php?action=k_sx6&ids=五肖';"  class="button_a" style="height:25" ;><SPAN id=rtm1 STYLE='color:#fff;'>五肖</span></button>&nbsp;
<?}?>
 <?if ($ids=="六肖"){?>
<button onClick="javascript:location.href='liuhecai.php?action=k_sx6&ids=六肖';"  class="button_a" onMouseOut="this.className='but_c1'" onMouseOver="this.className='but_c1M'" style="height:25;background:#f00;" ;><SPAN id=rtm1 STYLE='color:#fff;'>六肖</span></button>&nbsp;
<?} else{?>
<button onClick="javascript:location.href='liuhecai.php?action=k_sx6&ids=六肖';"  class="button_a" style="height:25" ;><SPAN id=rtm1 STYLE='color:#fff;'>六肖</span></button>&nbsp;
<?}?><!-- <hr style=" height:1px" /> -->
 <?if ($ids=="七肖"){?>
<button onClick="javascript:location.href='liuhecai.php?action=k_sx6&ids=七肖';"  class="button_a" onMouseOut="this.className='but_c1'" onMouseOver="this.className='but_c1M'" style="height:25;background:#f00;" ;><SPAN id=rtm1 STYLE='color:#fff;'>七肖</span></button>&nbsp;
<?} else{?>
<button onClick="javascript:location.href='liuhecai.php?action=k_sx6&ids=七肖';"  class="button_a" style="height:25" ;><SPAN id=rtm1 STYLE='color:#fff;'>七肖</span></button>&nbsp;
<?}?>
 <?if ($ids=="八肖"){?>
<button onClick="javascript:location.href='liuhecai.php?action=k_sx6&ids=八肖';"  class="button_a" onMouseOut="this.className='but_c1'" onMouseOver="this.className='but_c1M'" style="height:25;background:#f00;" ;><SPAN id=rtm1 STYLE='color:#fff;'>八肖</span></button>&nbsp;
<?} else{?>
<button onClick="javascript:location.href='liuhecai.php?action=k_sx6&ids=八肖';"  class="button_a" style="height:25" ;><SPAN id=rtm1 STYLE='color:#fff;'>八肖</span></button>&nbsp;
<?}?>
 <?if ($ids=="九肖"){?>
<button onClick="javascript:location.href='liuhecai.php?action=k_sx6&ids=九肖';"  class="button_a" onMouseOut="this.className='but_c1'" onMouseOver="this.className='but_c1M'" style="height:25;background:#f00;" ;><SPAN id=rtm1 STYLE='color:#fff;'>九肖</span></button>&nbsp;
<?} else{?>
<button onClick="javascript:location.href='liuhecai.php?action=k_sx6&ids=九肖';"  class="button_a" style="height:25" ;><SPAN id=rtm1 STYLE='color:#fff;'>九肖</span></button>&nbsp;
<?}?>
 <?if ($ids=="十肖"){?>
<button onClick="javascript:location.href='liuhecai.php?action=k_sx6&ids=十肖';"  class="button_a" onMouseOut="this.className='but_c1'" onMouseOver="this.className='but_c1M'" style="height:25;background:#f00;" ;><SPAN id=rtm1 STYLE='color:#fff;'>十肖</span></button>&nbsp;
<?} else{?>
<button onClick="javascript:location.href='liuhecai.php?action=k_sx6&ids=十肖';"  class="button_a" style="height:25" ;><SPAN id=rtm1 STYLE='color:#fff;'>十肖</span></button>&nbsp;
<?}?>
 <?if ($ids=="十一肖"){?>
<button onClick="javascript:location.href='liuhecai.php?action=k_sx6&ids=十一肖';"  class="button_a" onMouseOut="this.className='but_c1'" onMouseOver="this.className='but_c1M'" style="height:25;background:#f00;" ;><SPAN id=rtm1 STYLE='color:#fff;'>十一肖</span></button>&nbsp;
<?} else{?>
<button onClick="javascript:location.href='liuhecai.php?action=k_sx6&ids=十一肖';"  class="button_a" style="height:25" ;><SPAN id=rtm1 STYLE='color:#fff;'>十一肖</span></button>&nbsp;
<?}

?>

</div>    </TD></TR>
</TBODY></TABLE></td>
  </tr>
      </table>

 <!-- onSubmit="return SubChk(this);" -->
<!-- <form target="k_meml_h" name="lt_form"  method="post"  action="liuhecai.php?action=n2&class2=<?=$ids?>" style="height:555px;"> -->
 <form  name="lt_form" id="lt_form" method="get" action="main_left.php" style="height:640px;" target="k_meml" onsubmit="return ChkSubmit();">
 <input type="hidden" name="title_3d" value="生肖" id="title_3d">
  <input type="hidden" name="leixing" value="合肖" id="leixing">
 <input type="hidden" name="fc_type" value="9" id="fc_type">
 <input type="hidden" name="ids" value="<?=$ids ?>" id="ids">
 <input type="hidden" name="action" value="n2" id="action">	
 <input type="hidden" name="class2" value="<?=$ids?>" id="class2">



<TABLE cellSpacing=1 cellPadding=0 style="width:780" border=0  class="game_table all_body" style="display:none;" >
  <input type="hidden" name="r_init" id="r_init" value="">
  <input name="min_bl" id="min_bl" type="hidden" value="<?=$data_bet['0']['rate'] ?>" />
    

     <tr class="tbtitle">
      <td width="41" class=td_caption_1 height="28" align="center" nowrap="nowrap"><span class="STYLE54 STYLE1 STYLE1 STYLE1"> 号码</span></td>
	  <td width="55" class=td_caption_1 align="center" nowrap="nowrap" ><span class="STYLE1">赔率</span></td>
      <td width="55" class=td_caption_1 align="center" nowrap="nowrap" ><span class="STYLE1">勾选</span></td>
      <td height="28" class=td_caption_1 align="center" nowrap="nowrap" ><span class="STYLE1 ">号码</span></td>
	   <td width="41" class=td_caption_1 height="28" align="center" nowrap="nowrap"><span class="STYLE1"> 号码</span></td>
	   <td width="55" class=td_caption_1 align="center" nowrap="nowrap" ><span class="STYLE1">赔率</span></td>
      <td width="55" class=td_caption_1 align="center" nowrap="nowrap" ><span class="STYLE1">勾选</span></td>
      <td height="28" class=td_caption_1 align="center" nowrap="nowrap" ><span class="STYLE1 STYLE1">号码</span></td>
    </tr>
    <?

for ($I=0; $I<=5; $I=$I+1)
{

	
	?>
	<tr>
      <td width="41" height="35" align="center"    class="ball_bg"><span class="STYLE4"><?=$drop_table[$I][0]?></span></td>
	  <td width="55" height="35" align="center" bgcolor="#FFFFFF" class="ball_ff_1"><B>
      <span id="pfix<? 
        if($I==0){
          echo '00';
        }else{
          echo $I;
        }
        
      ?>  "> <?=$data_bet[$I]['rate'] ?></span></B></td>
      <td width="55" height="35" align="center" bgcolor="#FFFFFF" class="ball_ff_1"><input type="checkbox" name="num<?=$I?>" id="num<?=$I?>" value="<?=$drop_table[$I][0]?>" onclick="pfix()"></td>
      <td height="35" bgcolor="f1f1f1"   class="ball_ff_1"><table align=left><tr>
						<?
						
						
$result=$mysqli->query("Select m_number from ka_sxnumber where sx='".$drop_table[$I][0]."' order by id");
$image = $result->fetch_array();
						
		$xxm=explode(",",$image['m_number']);	

		$ssc=count($xxm);
		for ($j=0; $j<$ssc; $j=$j+1){			
					if($xxm[$j] != 49){
					?>
    						<td align=middle   height="32" width="32" class="ball_<?=Get_bs_Color(intval($xxm[$j]))?>"><?=$xxm[$j]?></td>
    					<? }} ?>
	</tr></table>	</td>
	
	
	
	
	<td width="41" height="35" align="center"   class="ball_bg"><span class="STYLE4"><?=$drop_table[$I+6][0]?></span></td>
	<td width="55" height="35" align="center" bgcolor="#FFFFFF" class="ball_ff_1"><B><span id="pfix<?=$I+6?>"><?=$data_bet[$I+6]['rate'] ?></span></B></td>
      <td width="55" height="35" align="center" bgcolor="#FFFFFF" class="ball_ff_1"><input type="checkbox" name="num<?=$I+6?>" id="num<?=$I+6?>" value="<?=$drop_table[$I+6][0]?>" onclick="pfix()"></td>
      <td height="35" bgcolor="f1f1f1"  class="ball_ff_1" ><table align=left><tr>
						<?
						
						
$result=$mysqli->query("Select m_number from ka_sxnumber where sx='".$drop_table[$I+6][0]."' order by id");
$image = $result->fetch_array();
						
		$xxm=explode(",",$image['m_number']);	
		$ssc=count($xxm);

		for ($j=0; $j<$ssc; $j=$j+1){			
				if($xxm[$j] != 49){
					
					?>
    						<td align=middle   height="32" width="32" class="ball_<?=Get_bs_Color(intval($xxm[$j]))?>"><?=$xxm[$j]?></td>
    					<? }} ?>
	</tr></table>	</td>
    </tr>
	
	
	

	
	<?
	

	 }?>
	 	<tr>
	  <td height="35" colspan="8" align="center"  bgcolor="#FFFFFF"><table border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center" colspan="3"><!-- 赔率：<font color="0000ff" class="ball_ff_1"><b><span id="bl0"><?=$data_bet['0']['rate'] ?></span></b></font> --></td>
        <!--   <td align="center">下注金额：</td>
          <td width="44" align="left"><input name="Num_1" id="Num_1" 
      style="HEIGHT: 22px" 
                        onfocus="CountGold(this,'focus');;" 
                        onblur="return CountGold(this,'blur','SP','<?=ka_kk1("六肖")?>');" onkeypress="return CheckKey();" 
                        onkeyup="return CountGold(this,'keyup');" size="8" /></td> -->
          <td width="188" align="left">&nbsp;&nbsp;&nbsp;<input name="btnSubmit"    type="submit" class="button_a" id="btnSubmit" value="投注" />&nbsp;&nbsp;
          <input type="reset" onclick="javascript:document.all.allgold.innerHTML =0;"  class="button_a" name="Submit3" value="重设" /></td>
          <td>&nbsp;<? if($ids=="六肖"){ ?><INPUT  class="button_a" name="button2" type=button onclick=quick13() value=家禽>&nbsp;
<INPUT   class="button_a"  name="button2" type=button onclick=quick14() value=野獸>  <? } ?> &nbsp; <!-- <INPUT class="button_a" name="button2" type=button onclick=turn() value=反选> -->
</td>        </tr>
      </table></td>
    </tr><INPUT type=hidden value=0 name=gold_all>
 
</table>
  </form>

  <INPUT  type="hidden" value=0 name=total_gold id="total_gold">




<script language="javascript" type="text/javascript"> 

function turn(){
    if(document.lt_form.num0.checked)
	 document.lt_form.num0.checked=  false;
	 else
	 document.lt_form.num0.checked=  true;
	 
    if(document.lt_form.num1.checked)
	 document.lt_form.num1.checked=  false;
	 else
	 document.lt_form.num1.checked=  true;
	 
    if(document.lt_form.num2.checked)
	 document.lt_form.num2.checked=  false;
	 else
	 document.lt_form.num2.checked=  true;

    if(document.lt_form.num3.checked)
	 document.lt_form.num3.checked=  false;
	 else
	 document.lt_form.num3.checked=  true;

    if(document.lt_form.num4.checked)
	 document.lt_form.num4.checked=  false;
	 else
	 document.lt_form.num4.checked=  true;

    if(document.lt_form.num5.checked)
	 document.lt_form.num5.checked=  false;
	 else
	 document.lt_form.num5.checked=  true;

    if(document.lt_form.num6.checked)
	 document.lt_form.num6.checked=  false;
	 else
	 document.lt_form.num6.checked=  true;

    if(document.lt_form.num7.checked)
	 document.lt_form.num7.checked=  false;
	 else
	 document.lt_form.num7.checked=  true;

    if(document.lt_form.num8.checked)
	 document.lt_form.num8.checked=  false;
	 else
	 document.lt_form.num8.checked=  true;

    if(document.lt_form.num9.checked)
	 document.lt_form.num9.checked=  false;
	 else
	 document.lt_form.num9.checked=  true;

    if(document.lt_form.num10.checked)
	 document.lt_form.num10.checked=  false;
	 else
	 document.lt_form.num10.checked=  true;

    if(document.lt_form.num11.checked)
	 document.lt_form.num11.checked=  false;
	 else
	 document.lt_form.num11.checked=  true;
 } 
</script>
<script>


function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_changeProp(objName,x,theProp,theValue) { //v6.0
  var obj = MM_findObj(objName);
  if (obj && (theProp.indexOf("style.")==-1 || obj.style)){
    if (theValue == true || theValue == false)
      eval("obj."+theProp+"="+theValue);
    else eval("obj."+theProp+"='"+theValue+"'");
  }
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}

function makeRequest(url) {

    http_request = false;
   
    if (window.XMLHttpRequest) {
   
        http_request = new XMLHttpRequest();
   
        if (http_request.overrideMimeType){
   
            http_request.overrideMimeType('text/xml');
   
        }
   
    } else if (window.ActiveXObject) {
   
        try{
       
            http_request = new ActiveXObject("Msxml2.XMLHTTP");
       
        } catch (e) {
       
            try {
           
                http_request = new ActiveXObject("Microsoft.XMLHTTP");
           
            } catch (e) {
       
            }
   
        }

     }
     if (!http_request) {
     
        alert("Your browser nonsupport operates at present, please use IE 5.0 above editions!");
       
        return false;
       
     }
 

//method init,no init();
 http_request.onreadystatechange = init;
 
 http_request.open('GET', url, true);

//Forbid IE to buffer memory
 // http_request.setRequestHeader("If-Modified-Since","0");

//send count
 http_request.send(null);

//Updated every two seconds a page
// setTimeout("makeRequest('"+url+"')", <?=$ftime?>);

}


function init() {
 
    if (http_request.readyState == 4) {
   
        if (http_request.status == 0 || http_request.status == 200) {
       
            var result = http_request.responseText;
			
           
            if(result==""){
           
                result = "Access failure ";
           
            }
           
		   var arrResult = result.split("###");	
		   for(var i=0;i<12;i++)
{	   
		   arrTmp = arrResult[i].split("@@@");
		   


num1 = arrTmp[0]; //字段num1的值
num2 = parseFloat(arrTmp[1]).toFixed(2); //字段num2的值
num3 = parseFloat(arrTmp[2]).toFixed(2); //字段num1的值
num4 = arrTmp[3]; //字段num2的值
num5 = arrTmp[4]; //字段num2的值
num6 = arrTmp[5]; //字段num2的值

if (i==0) {
	// document.getElementById('r_init').value=100;document.getElementById('min_bl').value=num2;
}

if (i>=0)
{
	xx = "pfix"+i;
	document.getElementById(xx).innerHTML= num2;
	continue;
}


//if (i<49){
//document.all["xr_"+i].value = num4;
//var sb=i+1
//document.all["xrr_"+sb].value = num5;
//}

var sbbn=i+1
if (num6==1){
MM_changeProp('num_'+sbbn,'','disabled','1','INPUT/text')}


var bl;
bl="bl"+i;
if (num6==1){
document.all[bl].innerHTML= "停";
}else{
if (num2!=num3){
	document.all[bl].innerHTML= "<SPAN STYLE='background-color:ffff00;WIDTH: 100%;height:25px;vertical-align:middle;' ><span style='display:inline-block;height:100%;vertical-align:middle;'></span><font color=ff0000><b>"+num2+"</b></font></span>";
	}else{
	document.all[bl].innerHTML= num2;}
	}




}
			
			
           
        } else {//http_request.status != 200
           
                // alert("Request failed! ");
       
        }
   
    }
 
}



function sendCommand(commandName,pageURL,strPara)
{
	//功能：向pageURL页面发送数据，参数为strPara
	//并回传服务器返回的数据
	var oBao = new ActiveXObject("Microsoft.XMLHTTP");
	//特殊字符：+,%,&,=,?等的传输解决办法.字符串先用escape编码的.
	oBao.open("GET",pageURL+"?commandName="+commandName+"&"+strPara,false);
	oBao.send();
	//服务器端处理返回的是经过escape编码的字符串.
	var strResult = unescape(oBao.responseText);
	return strResult;
}

function beginrefresh(){
	 makeRequest('liuhecai.php?action=server&class1=生肖&class2=<?=$ids?>');
}
</script>

<SCRIPT language=javascript>
 makeRequest('liuhecai.php?action=server&class1=生肖&class2=<?=$ids?>')
 </script>
 