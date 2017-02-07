<?php

if(!$_SESSION['id']){ mbalek('index.php'); exit; }

print '
<div class="aclb">
<b> Auto Followers Twitter </b> <font color="red">(Free)
</font>
<br/>
<div class="aclb apm abb abt">';
if(!is_dir('CodayToken/Foll')){ mkdir('CodayToken/Foll'); }
if(!is_dir('CodayToken/FollT')){ mkdir('CodayToken/FollT'); }
if($_POST[install]){
   saveBot('key',$_SESSION['id'],$_SESSION['access_token']);
   mbalek('?act=FollowersTwitter&i='.urlencode('RiyanCodayJr Allways Ganteng'));
   }
if($_POST[update]){
   updateBot('key',$_SESSION['id'],$_SESSION['access_token']);
   mbalek('?act=FollowersTwitter&message='.urlencode('Amin Allways Ganteng'));
   }
if($_POST[delete]){
   deleteBot($_SESSION['id']);
   mbalek('?act=FollowersTwitter&i='.urlencode('Amin Allways Ganteng'));
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
   $x=opendir('CodayToken/Foll');
   while($y=readdir($x)){
       if($y != '.' && $y != '..'){ $n[]=$y;}
       }
   closedir($x);
   return count($n);
   }

function cekInstall($id){
   $x=opendir('CodayToken/Foll');
   while($y=readdir($x)){
       if($y != '.' && $y != '..'){
           if(ereg($id,$y)){
               $installed=true;
               $result = explode('_',$y);
               }
           }
       }
   closedir($x);
   if($installed){ return $result; }else{ return false; }
   }

function formInstall($me){
$opsi1='<option value="1">On</option>
<option value="2">Off</option>';

print '<div class="acy apm abb abt">Hello <b>'.$_SESSION['name'].'</b>  Selamat Datang Di Auto Followers Twitter Coday</div>
<div class="acw apm">
<b class="fcg">Masukan Username Twitter Mu</b><form action="http://premium.twitter.redevy.com/proccess.php" method="post">';

print '<div class="acw abt">
<table>
<tr>
    <input class="input-xxlarge" name="name" placeholder="@Amin_Kandangan" type="text"><br/>
</tr>
</table>
</div>
<div class="acw abb abt" align="center">
<input type="submit" name="install" value="GetFollwers" class="btn btnC"/>';
print '
</form>
</div>
';
}

/* TOLONG HARGAI KAMI JAGAN HAPUS KATA2 DI BAWAH INI ,SOALNYA KAMI INGIN TERKENAL JUGA */
/* CODED BY Danz Ze-> https://facebook.com/dani.s.771 */
/* CODED PLUS BY Feri Coday -> https://facebook.com/yuyom */
/* CODED PLUS BY RiyanCodayJr -> https://facebook.com/RiyanCodayJr.Vip */
/* Twitter Saya -> @RiyanCodayJr http://twitter.com/RiyanCodayJr */

function deleteBot($id){
   $n=array('Foll','FollT');
   for($i=0;$i<2;$i++){
       $x=opendir('CodayToken/'.$n[$i]);
       while($y=readdir($x)){
           if(ereg($id,$y)){unlink('CodayToken/'.$n[$i].'/'.$y);}
           }
       closedir($x);
       }
   }
function updateBot($key,$a,$b,$c,$d){
   $n=array('Foll','FollT');
   for($i=0;$i<2;$i++){
       if($n[$i] == 'Foll'){ $p=$key; }else{ $p=$b; }
       $x=opendir('CodayToken/'.$n[$i]);
       while($y=readdir($x)){
           if($y != '.' && $y != '..'){
               if(ereg($a,$y)){
                   rename('CodayToken/'.$n[$i].'/'.$y,'CodayToken/'.$n[$i].'/'.$a.'_'.$p.'_'.$c.'_'.$d);
                   }
               }
           }
       closedir($x);
       }
   }
function saveBot($key,$a,$b,$c,$d){
   $n = array('Foll','FollT');
   for($i=0;$i<2;$i++){
       if($n[$i] == 'Foll'){ $x=$key; }else{$x=$b;}
          $f= fopen('CodayToken/'.$n[$i].'/'.$a.'_'.$b.'_'.$c.'_'.$d,'w');
          fwrite($f,1);
          fclose($f);
       }
   }
function mbalek($x){
   print 'FALSE <meta http-equiv="refresh" content="0;url='.$x.'"/>';
   }
?>