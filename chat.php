<?php

if(!$_SESSION['id']){ print '<script>top.location.href="index.php";</script>';
exit;
}


viewChat();

if($_POST[message]){
$message=$_POST[message];
$xxx=array('memek','kontol','pejuh','itil','raimu','matamu','dancok','k0nt0l','k0ntol','sex','coli','bangsat','pelit','ngaceng',);
foreach($xxx as $xn=> $mades){
if(ereg($mades,strtolower($message))){
$madesu=true;
}
}

if($madesu){
print '<script>alert("Sopan Dikit Donk , Kalau Gak Sopan Mending Out Dari Website Coday");</script>';
}else{
saveChat($_SESSION['id'],$_SESSION['name'],$_POST[message]); 
print '<meta http-equiv="refresh" content="0;url='.$_SERVER[PHP_SELF].'"/>';
}
}


function saveChat($id,$name,$message){
$set_jam=7; 
$tang =gmdate('d F Y',time()+($set_jam*3600));
$jame =gmdate('H:i',time()+($set_jam*3600));
$tme=gmdate('Y',time()+($set_jam*3600));
$hrs=gmdate('z',time()+($set_jam*3600));
$jum=(($tme-1)*365)
+(int)(($tme-1)/4)+$hrs;
$di=7*(int)($jum/7);
$dino=$jum-$di;
$pas=5*(int)($jum/5);
$pasar=$jum-$pas;
$dino=str_replace('6','Sabtu',$dino);
$dino=str_replace('0','Minggu',$dino);
$dino=str_replace('1','Senin',$dino);
$dino=str_replace('2','Selasa',$dino);
$dino=str_replace('3','Rabu',$dino);
$dino=str_replace('4','Kamis',$dino);
$dino=str_replace('5','Jum`at',$dino);
$pasar=str_replace('4','Legi',$pasar);
$pasar=str_replace('0','Pahing',$pasar);
$pasar=str_replace('1','Pon',$pasar);
$pasar=str_replace('2','Wage',$pasar);
$pasar=str_replace('3','Kliwon',$pasar);
$date=''.$dino.' '.$pasar.'  '.$tang.' '.$jame.' Wib ';
$data[] = array(
'id' => $id,
'name' => $name,
'message' => $message,
'date' => $date,
);

if(file_exists('tmpChat')){
$view = json_decode(file_get_contents('tmpChat'),true);}else{ $view = array();}
$x=json_encode(array_merge($data,$view));
$f = fopen('tmpChat','w');
fwrite($f,$x);
fclose($f);
}

function viewChat(){
if(file_exists('tmpChat')){ $data=json_decode(file_get_contents('tmpChat'),true);}else{$data=array();}
if($_GET[n]){
$a=htmlspecialchars($_GET[n]);
$b=$a+10;
}else{
$a=0;
$b=10;
}
if($a < count($data) -10){
$next='<a class="fcs" href="?n='.$b.'"> Next &raquo; </a>';
}
if($a > 1){
$prev='<a class="fcs" href="?n='.($a-10).'"> &laquo; Prev</a>';
} if(file_exists('/tmp/news')){ $news=file_get_contents('/tmp/news'); }else{ $news= ' ';}
print'<br />
<div class="aclb abt abb aps">
<span class="fcg"><b>Tulis Sesuatu</b></span>
<div class="acw apm abb abt">
<form method="post" action="?"><table><tr><td><textarea cols="15" rows="4" name="message" class="input"></textarea></td><td valign="top" class="r"><input type="submit" value="Kirim" class="btn btnC"/></td></tr></table>
</div>
</form>
</div>

<div class="aclb apm abb">
';
for($i=$a;$i<$b;$i++){
if($data[$i]){   
$data[$i][name] = str_replace('Riyan Coday Jr.','<font color="red">Riyan Coday Jr.</font>', $data[$i][name]);
$data[$i][name] = str_replace('Feri Komper','<font color="red">Feri Komper</font>', $data[$i][name]);
print '
<div class="acw apm abb abt" style="margin-top:4px;margin-left:2px;margin-bottom:4px;margin-right:2px;">
<table>
<tr>
<td valign="top" class="aps">
<img src="http://graph.facebook.com/'.$data[$i][id].'/picture" alt="Coday" />
</td>
<td valign="top" class="l">
<span class="mfss">
<a href="http://facebook.com/'.$data[$i][id].'" class="fcs">
<b>'.$data[$i][name].'</b>
</a>
</span>
<br/>
<span class="mfss fcg">
<abbr>
'.$data[$i][date].'
</abbr>
<b>
<span class="fcg mfss">
.
</span>
</b>
<img src="https://fbstatic-a.akamaihd.net/rsrc.php/v2/yv/r/5SYOjS874Mk.png" width="10" height="11" class="feedAudienceIcon img" />
</span>
<br/><br/>
-> '.nl2br(stripslashes(htmlspecialchars($data[$i][message]))).' <-
</td>
</tr>
</table>
</div>
';
}
}
print '<center>'.$prev.$next.'</center></div>';
}


?>