﻿

<script>
  window.onload=function(){
    document.getElementById("form1").submit();
    // SubChk();
  }
</script>



<? 
// if(!defined('PHPYOU')) {
// 	exit('非法进入');
// }

// if ($_GET['class2']==""){echo "<script>alert('非法进入!');window.location.href='liuhecai.php?action=k_sx6';</script>"; 
// exit;}


$n=0;
for ($t=0;$t<12;$t=$t+1){

if ($_GET['num'.$t]!=""){
$number1.=$_GET['num'.$t].",";
$n=$n+1;

// get mdrop
$sql ="Select rate from mdrop where class1='生肖' and class2='".$_GET['class2']."' and class3='".$_GET['num'.$t]."'";

$result=$mysqli->query($sql);

$mdrop = $result['rate'];
$aa.=$image['rate'].",";

}
}

$aa.="0";
$array=explode(",",$aa);
$arraya=sort($array);
$rate555=$array[1];


// $result=$mysqli->query("select sum(sum_m) as sum_mm from c_odds_7 where kithe='".$Current_Kithe_Num."' and  username='".$_SESSION['kauser']."' and class1='生肖' and class2='".$_GET['class2']."'  order by id desc"); 
// $ka_guanuserkk1=$result->fetch_array(); 
// $sum_mm=$ka_guanuserkk1[0];



switch ($_GET['class2']){
    case "二肖":
$bmmm=0;
$cmmm=0;
$dmmm=0;
$R=19;	
$XF=23;
$rate_id=901;
if ($n!=2){echo "<script>alert('对不起，请选择二个生肖!');window.location.href='liuhecai.php?action=k_sx6';</script>"; 
exit;}

break;


 case "三肖":
$bmmm=0;
$cmmm=0;
$dmmm=0;
$R=20;	
$XF=23;
$rate_id=913;
if ($n!=3){echo "<script>alert('对不起，请选择三个生肖!');window.location.href='liuhecai.php?action=k_sx6';</script>"; 
exit;}

break;

 case "四肖":
$bmmm=0;
$cmmm=0;
$dmmm=0;
$R=21;	
$XF=23;
$rate_id=925;
if ($n!=4){echo "<script>alert('对不起，请选择四个生肖!');window.location.href='liuhecai.php?action=k_sx6';</script>"; 
exit;}

break;

case "五肖" : 
$bmmm=0;
$cmmm=0;
$dmmm=0;
$R=23;	      
$XF=23;
$rate_id=937;
if ($n!=5){echo "<script>alert('对不起，请选择五个生肖!');window.location.href='liuhecai.php?action=k_sx6';</script>"; 
exit;}
break;



case "七肖" : 
$bmmm=0;
$cmmm=0;
$dmmm=0;
$R=27;	      
$XF=23;
$rate_id=961;
if ($n!=7){echo "<script>alert('对不起，请选择七个生肖!');window.location.href='liuhecai.php?action=k_sx6';</script>"; 
exit;}
break;


case "八肖" : 
$bmmm=0;
$cmmm=0;
$dmmm=0;
$R=28;	      
$XF=23;
$rate_id=973;
if ($n!=8){echo "<script>alert('对不起，请选择八个生肖!');window.location.href='liuhecai.php?action=k_sx6';</script>"; 
exit;}
break;

case "九肖" : 
$bmmm=0;
$cmmm=0;
$dmmm=0;
$R=29;	      
$XF=23;
$rate_id=985;
if ($n!=9){echo "<script>alert('对不起，请选择九个生肖!');window.location.href='liuhecai.php?action=k_sx6';</script>"; 
exit;}
break;

case "十肖" : 
$bmmm=0;
$cmmm=0;
$dmmm=0;
$R=31;	      
$XF=23;
$rate_id=997;
if ($n!=10){echo "<script>alert('对不起，请选择十个生肖!');window.location.href='liuhecai.php?action=k_sx6';</script>"; 
exit;}
break;


case "十一肖" : 
$bmmm=0;
$cmmm=0;
$dmmm=0;
$R=32;	      
$XF=23;
$rate_id=1009;
if ($n!=11){echo "<script>alert('对不起，请选择十一个生肖!');window.location.href='liuhecai.php?action=k_sx6';</script>"; 
exit;}
break;


 case "六肖":
 if ($n!=6){echo "<script>alert('对不起，请选择六个生肖!');window.location.href='liuhecai.php?action=k_sx6';</script>"; 
exit;}
 $R=21;
$bmmm=$bsx6;
$cmmm=$csx6;
$dmmm=$dsx6;      
$XF=23;
$rate_id=949;
break;

}

switch (ka_memuser("abcd")){

	case "A":
$rate5=ka_bl($rate_id,"rate")-$mdrop;
$Y=1;
break;
	case "B":
$rate5=ka_bl($rate_id,"rate")-$mdrop-$bmmm;
$Y=4;
	break;
	case "C":
	$Y=5;
$rate5=ka_bl($rate_id,"rate")-$mdrop-$cmmm;
	break;
	case "D":
	$rate5=ka_bl($rate_id,"rate")-$mdrop-$dmmm;
$Y=6;
break;
	default:
	$Y=1;
$rate5=ka_bl($rate_id,"rate")-$mdrop;
break;
}



?>




<link rel="stylesheet" href="./public/css/xp.css">
<style type="text/css">
.STYLE3{ color:#fff}
</style>
</HEAD>
<body style="display:none">
<div id="n1_table">
<SCRIPT language=JAVASCRIPT>
if(self == top) {location = '/';} 
if(window.location.host!=top.location.host){top.location=window.location;} 
</SCRIPT>


<SCRIPT language=JAVASCRIPT>
if(self == top){location = '/';}

function ChkSubmit(){
    //设定『确定』键为反白 


		document.all.btnSubmit.disabled = true;
	
document.form1.submit();
	} 
</SCRIPT>


<SCRIPT language=javascript>var count_win=false;
function CheckKey(){
if(event.keyCode == 13) return true;
if((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode > 95 || event.keyCode < 106)){alert("下注金额仅能输入数字!!"); return false;}
}

function SubChk(){
if(document.all.gold.value==''){
document.all.gold.focus();
alert("请输入下注金额!!");
return false;
}
if(isNaN(document.all.gold.value) == true){
document.all.gold.focus();
alert("下注金额仅能输入数字!!");
return false;
}
// if(eval(document.all.gold.value) < <?=ka_memuser("xy")?>){
// document.all.gold.focus();
// alert("下注金额不可小於最低下注金额:<?=ka_memuser("xy")?>!!");
// return false;
// }
// if(eval(document.all.gold.value) > <?=ka_memds($R,3)?>){
// document.all.gold.focus();
// alert("对不起,本期有下注金额最高限制 : <?=ka_memds($R,3)?>  !!");
// return false;
// }
// if(eval(document.all.gold.value) > <?=ka_memds($R,2)?>){
// document.all.gold.focus();
// alert("下注金额不可大於单注限额:<?=ka_memds($R,2)?>!!");
// return false;
// }
// if((<?=$sum_mm?>+eval(document.all.gold.value)) > <?=ka_memds($R,3)?>){
// document.all.gold.focus();
// alert("本期累计下注共: <?=$sum_mm?>\n下注金额已超过单期限额!!");
// return false;
// }
// if(eval(document.all.gold.value) > <?=ka_memuser("ts")?>){
// document.all.gold.focus();
// alert("下注金额不可大於信用额度:<?=ka_memuser("ts")?>!!");
// return false;
// }

//if(!confirm("可蠃金额:"+Math.round(document.all.gold.value * document.all.ioradio.value / 1000 - document.all.gold.value)+"\n\n 是否确定下注?")){return false;}
document.all.btnCancel.disabled = true;
document.all.btnSubmit.disabled = true;
document.LAYOUTFORM.submit();
}

function CountWinGold(){
if(document.all.gold.value==''){
document.all.gold.focus();
alert('未输入下注金额!!!');
}else{
document.all.pc.innerHTML=Math.round(document.all.gold.value * document.all.ioradio.value /1000 - document.all.gold.value);
//document.all.pc1.innerHTML=Math.round(document.all.gold.value * document.all.ioradio1.value);
count_win=true;
}
}
function CountWinGold1(){
if(document.all.gold.value==''){
document.all.gold.focus();
alert('未输入下注金额!!!');
}else{
//document.all.pc1.innerHTML=Math.round(document.all.gold.value * document.all.ioradio1.value);
count_win=true;
}
}
</SCRIPT>
<style type="text/css">
/*body{width:100%;height:100%;}
#n1_table{position: absolute;top: 30%;left: 30%;}*/
.STYLE3{ color:#000}
</style>

<!-- <table height="" cellspacing="0" cellpadding="0" border="0" width="100%">
         <tbody><tr>
          <td id="left_1" style="text-align:center; font-size:16px; font-weight:bold"><img src="/images/b002.jpg"></td>
        </tr>
      </tbody></table>  -->

	<body>	
	<div style="display:none;">								  
<TABLE border=0 cellSpacing=0 cellPadding=0 width=100% class="Tab_backdrop">
  <TBODY>
  <TR>
    <TD class=Left_Place height= vAlign=top align=left>
        <TABLE>
        <TBODY>
        <TR>
          <TD height=2></TD></TR></TBODY></TABLE>  										  
<TABLE class=t_list cellSpacing=1 cellPadding=0 width=100% border=0>
<tr class="left_acc_out_top">
    <td valign="top">
        <TABLE cellSpacing=0 cellPadding=0 width=100% border=0>
          <tr>
            <td height="25" colspan="2" align="center"  bgcolor="#504a16" style="color:#FFF">确认下注</td>
          </tr>
          
        </table>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="3"></td>
          </tr>
        </table>
      <table width="98%" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#FDF4CA">
          <form action="liuhecai.php?action=k_tansx&class2=<?=$_GET['class2']?>" method="post" name="LAYOUTFORM" id="form1" >
          <input name="min_bl" id="min_bl" type="hidden" value="<?=$_GET['min_bl']?>" />
		

            <tr>
              <td width="35%" height="25" bgcolor="#ffffff" style="LINE-HEIGHT: 22px"><?=$_GET['class2']?></FONT> @ <strong><font
color="ff0000">
               <? echo $_GET['min_bl']; ?> </font></strong>
                  </div></td>
            </tr>
            <tr>
              <td bgcolor="#F9F7D7"><div align="center"><b><?=$number1?></b></div></td>
            </tr>
            <tr>
              <td height="25" bgcolor="#ffffff" style="LINE-HEIGHT: 23px">&nbsp;下注金额:
                <input
name="gold" class="input1" id="gold" onkeypress="return CheckKey()"
onkeyup="return CountWinGold()" value="<?=$_GET['Num_1']?>" size="8" maxlength="8" />
              </td>
            </tr>
            <tr>
              <td height="25" bgcolor="#ffffff" style="LINE-HEIGHT: 23px">&nbsp;可蠃金额:<strong><font id="pc" color="ff0000">
               <?=$_GET['Num_1']*$_GET['min_bl']-$_GET['Num_1']?>
			   
			   
			    </font></strong></td>
            </tr>
            <tr>
              <td height="25" bgcolor="#ffffff">&nbsp;单注限额: <?=ka_memds($R,2)?></td>
            </tr>
            <tr>
              <td height="25" bgcolor="#ffffff">&nbsp;单项限额: <?=ka_memds($R,3)?></td>
            </tr>
            <tr>
              <td height="30" align="center" bgcolor="#ffffff" style="LINE-HEIGHT: 23px"><input type='hidden' name="rate_id" value='<?=$rate_id?>' />
                  
                  <input  class="button_a"  onClick="self.location='liuhecai.php?action=k_sx6';" type="button" value="放弃" name="btnCancel" />
                &nbsp;&nbsp;
                <input  class="button_a"  type="submit" value="确定" onclick="SubChk();" name="btnSubmit" />
              </td>
            </tr>
            <input type="hidden"
value="SP11" name="concede" />
            <input type="hidden" value='<?=ka_bl($rate_id,"rate")*1000?>' name="ioradio" />
            <input type="hidden" value='<?=$zs?>' name="ioradio1" />
            <input type="hidden" value='<?=$number1?>' name="number1" />
          </form>
        <script language="JavaScript" type="text/javascript">document.all.gold.focus();</script>
        </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="3"></td>
          </tr>
      </table></td>
  </tr>
</table>
</TD>
</TR>
</tbody>
</table>
</div>
</div>
</BODY></HTML>
