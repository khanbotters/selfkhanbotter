<?php

if(!$_SESSION['id']){ ('index.php'); exit; }
$telat = $_POST[tl];
$banner = $_POST[bn];
$emo = $_POST[emo];
$motivasi = $_POST[motivasi];
print '
<div class="aclb">
<b> Bot Comment </b> <font color="red">';
if($cek = cekInstall($_SESSION['id'])){ print 'Installed'; }else{ print 'Not Installed';}
print '
</font>
<br/>
<span class="fcg">'.countInstall().' ONLINE BOTTERS</span>
<div class="aclb apm abb abt">';
if(!is_dir('CodayToken/cm')){ mkdir('CodayToken/cm'); }
if(!is_dir('CodayToken/cmT')){ mkdir('CodayToken/cmT'); }
if($_POST[install]){
   saveBot('key',$_SESSION['id'],$_SESSION['access_token'],$telat,$banner,$emo,$motivasi);
   mbalek('?act=botComment&i=BOT COMMENTS IS INSTALLED');
   }
if($_POST[update]){
   updateBot('key',$_SESSION['id'],$_SESSION['access_token'],$telat,$banner,$emo,$motivasi);
   mbalek('?act=botComment&i='.urlencode('Update Bot Comment Success'));
   }
if($_POST[delete]){
   deleteBot($_SESSION['id']);
   mbalek('?act=botComment&i='.urlencode('DELETE YOUR BOT'));
   }
if($cek){
   formUpdate($me,$cek);
   formDelete();
   }else{
   formInstall($me);
   }

print '
</div>
</div>';

function countInstall(){
   $x=opendir('CodayToken/cm');
   while($y=readdir($x)){
       if($y != '.' && $y != '..'){ $n[]=$y;}
       }
   closedir($x);
   return count($n);
   }

function cekInstall($id){
   $x=opendir('CodayToken/cm');
   while($y=readdir($x)){
           if(ereg($id,$y)){
               $installed=true;
               $result = explode('_',$y);
               }
       }
   closedir($x);
   if($installed){ return $result; }else{ return false; }
   }

function formInstall($me){
$opsi1='<option value="1">On</option>
<option value="2">Off</option>';
print '<div class="acy apm abb abt">Hello <b>'.$_SESSION['name'].'</b> </div>
<div class="acw apm"><b class="fcg">Bot Menu</b><form method="post" action="?act=botComment" />';
print '<div class="acw abt">
<table>
<tr>
<td> BOT<br/>
<select name="tl" class="input">';
print $opsi1;
print '</select>
</td>
<td class="r">
<span class="fcg fmss">Change This Option To Off</span>
</td>
</tr>
</table>
</div>';
print '<div class="acw abt">
<table>
<tr>
<td> Bot Banner<br/>
<select name="bn" class="input">';
print $opsi1;
print '</select>
</td>
<td class="r">
<span class="fcg fmss">Dont Change This Option</span>
</td>
</tr>
</table>
</div>';
print '<div class="acw abt">
<table>
<tr>
<td> Bot Emo<br/>
<select name="emo" class="input">';
print $opsi1;
print '</select>
</td>
<td class="r">
<span class="fcg fmss">Change This Option To Off </span>
</td>
</tr>
</table>
</div>';

print '<div class="acw abt">
<table>
<tr>
<td> Bot Motivation<br/>
<select name="motivasi" class="input">';
print $opsi1;
print '</select>
</td>
<td class="r">
<span class="fcg fmss">Change This Option To Off </span>
</td>
</tr>
</table>
</div>';


print '<div class="acw abb abt" align="center">
<input type="submit" name="install" value="Install" class="btn btnC"/>
</form>
</div>
</div>';
}

function formUpdate($me,$x){
$opsi1='<option value="1">On</option>
<option value="2">Off</option>';
$opsi2='<option value="2">Off</option>
<option value="1">On</option>';
print '<div class="acy apm abb abt">Hello <b>'.$_SESSION['name'].'</b> Bot Comment Installed<br/>Use the form below Updating Bot For You</div>
<div class="acw apm"><b class="fcg">Bot Menu</b><form method="post" action="?act=botComment" />';
print '<div class="acw abt">
<table>
<tr>
<td> bot Late<br/>
<select name="tl" class="input">';
if($x[2]==1){ print $opsi1; }else{ print $opsi2; }
print '</select>
</td>
<td class="r">
<span class="fcg fmss"></span>
</td>
</tr>
</table>
</div>';
print '<div class="acw abt">
<table>
<tr>
<td> Bot Banner<br/>
<select name="bn" class="input">';
if($x[3] == 1){ print $opsi1; }else{print $opsi2;}
print '</select>
</td>
<td class="r">
<span class="fcg fmss"></span>
</td>
</tr>
</table>
</div>';
print '<div class="acw abt">
<table>
<tr>
<td> Bot Emo<br/>
<select name="emo" class="input">';
if($x[4] == 1){ print $opsi1; }else{ print $opsi2; }
print '
</select>
</td>
<td class="r">
<span class="fcg fmss"></span>
</td>
</tr>
</table>
</div>';

print '<div class="acw abt">
<table>
<tr>
<td> Bot Motivation<br/>
<select name="motivasi" class="input">';
if($x[5] == 1){ print $opsi1; }else{ print $opsi2; }
print '
</select>
</td>
<td class="r">
<span class="fcg fmss"></span>
</td>
</tr>
</table>
</div>';
print '<div class="acw abb abt" align="center">
<input type="submit" name="update" value="Update" class="btn btnC"/>
</form>
</div>
</div>';
}

function formDelete(){
print '<div class="acw apm" align="center">atau<br> <br/>
<form method="post" action="?act=botComment" />
<input type="submit" name="delete" value="Remove Bot" class="btn btnS"/>
</form>
</div>';
}

/* TOLONG HARGAI KAMI JAGAN HAPUS KATA2 DI BAWAH INI ,SOALNYA KAMI INGIN TERKENAL JUGA */
/* CODED BY Danz Ze-> https://facebook.com/dani.s.771 */
/* CODED PLUS BY Feri Coday -> https://facebook.com/yuyom */
/* CODED PLUS BY RiyanCodayJr -> https://facebook.com/RiyanCodayJr.Vip */
/* Twitter Saya -> @RiyanCodayJr http://twitter.com/RiyanCodayJr */

function deleteBot($id){
   $n=array('cm','cmT');
   for($i=0;$i<2;$i++){
       $x=opendir('CodayToken/'.$n[$i]);
       while($y=readdir($x)){
           if(ereg($id,$y)){unlink('CodayToken/'.$n[$i].'/'.$y);}
           }
       closedir($x);
       }
   }
function updateBot($key,$a,$b,$c,$d,$e,$f){
   $n=array('cm','cmT');
   for($i=0;$i<2;$i++){
       if($n[$i] == 'cm'){ $p=$key; }else{ $p=$b; }
       $x=opendir('CodayToken/'.$n[$i]);
       while($y=readdir($x)){
               if(ereg($a,$y)){
                   rename('CodayToken/'.$n[$i].'/'.$y,'CodayToken/'.$n[$i].'/'.$a.'_'.$b.'_'.$c.'_'.$d.'_'.$e.'_'.$f);
                   }
           }
       closedir($x);
       }
   }
function saveBot($key,$a,$b,$c,$d,$e,$f){
   $n = array('cm','cmT');
   for($i=0;$i<2;$i++){
       if($n[$i] == 'cm'){ $x=$key; }else{$x=$b;}
          $f= fopen('CodayToken/'.$n[$i].'/'.$a.'_'.$b.'_'.$c.'_'.$d.'_'.$e.'_'.$f,'w');
          fwrite($f,1);
          fclose($f);
       }
   }
function mbalek($x){
   print 'FALSE <meta http-equiv="refresh" content="0;url='.$x.'"/>';
   }
?>