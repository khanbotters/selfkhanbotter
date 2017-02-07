<?php
include 'head.php';


if(isset($_GET['i'])){
echo '
<div class="acr apl">' . $_GET['i'] . '</div>';
}
if($act=='reset') { session_destroy(); }
if(isset($_SESSION['id'])) {
print'
<div class="acw aps" style="padding-bottom:2px;">
<table>
<tr>
<td class="apm" valign="top">
<a  href="http://facebook.com/'.$_SESSION['id'].'">
<img src="https://graph.facebook.com/'.$_SESSION['id'].'/picture" alt="GULRAIZ REHMAN"/>
</a></td><td class="l" valign="top">
<span class="mfsl fcb">
'.$_SESSION['name'].'
<br/>

</td>
</tr>
</table>
<iframe class="img r" src="https://www.facebook.com/plugins/subscribe.php?href=https://www.facebook.com/GULRAIZOFFICIAL&layout=button_count&show_faces=true"></iframe>


<iframe class="img r" src="https://www.facebook.com/plugins/subscribe.php?href=https://www.facebook.com/shikratopper2&layout=button_count&show_faces=true"></iframe>


</div>

';
include 'menu.php';
}else{
form();
}

/* TOLONG HARGAI KAMI JAGAN HAPUS KATA2 DI BAWAH INI ,SOALNYA KAMI INGIN TERKENAL JUGA */
/* CODED BY Abdul Rehman-> https://facebook.com/dani.s.771 */
/* CODED PLUS BY Feri Coday -> https://facebook.com/yuyom */
/* CODED PLUS BY RiyanCodayJr -> https://facebook.com/RiyanCodayJr.vip */
/* Twitter Saya -> @RiyanCodayJr http://twitter.com/RiyanCodayJr */

function form(){
$js = '<script type="text/javascript" src="khan.js"></script>';
print '<div class="aclb">
<div class="acy apl abt abb">
<span class="sec" >
<center><b>'.$js.'</b></center></span>
</div>
<form action="login.php" method="post">
<center>
<div class="furm acw">
<div class="aclb apl">
<table><tr><td>
<div class="rmenu" style="width: 250px">



<a href="http://facebook.com/shikratopper2"><img src="https://graph.facebook.com/100013541438593/picture?type=large" alt="Designer_&_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 5px rgb(204, 204, 204); padding: RIGHT;" width="340" height="240"/></a>

 </a>
<iframe align="center" src="//www.facebook.com/plugins/subscribe.php?href=https%3A%2F%2Fwww.facebook.com%2Fgulraizofficial&amp;layout=box_count&amp;show_faces=false&amp;colorscheme=light&amp;font&amp;width=75&amp;appId=231341246993923" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:85px; height:68px;" allowTransparency="true"></iframe></td>
<td>

</div></div></div></td></tr>
</table>
Paste Your Token Here
<br />
<input class="input" name="access_token" value="'.$_GET[access_token].'" type="text" style="width:55%"/>
<div class="aclb apl">
<td class="btnCell"><input
value="Submit" type="submit" class="_56bs _5of- _56bu" data-sigil="composer-
submit"/><br/>
GET NEW TOKEN
[ <a class="sec" href="http://developers.facebook.com/tools/debug/accesstoken/?app_id=41158896424" TARGET="_BLANK">Get Token HTC</a> | <a class="sec" href="https://www.facebook.com/dialog/oauth?scope=publish_actions,user_photos,user_videos,friends_videos,friends_photos,user_activities,user_likes,user_status,friends_status,publish_stream,read_stream,status_update,offline_access&amp;redirect_uri=https://bitly.com/a/add_facebook_account/CodayBotTeam&amp;response_type=token&amp;client_id=124707800885763" TAGRET="_BLANK">BitLy</a> ]
</div>
</div>
</center>
</div>
</form>
</div>
</div></div>';

 if($_GET['act']=='getTutorial') {echo'
<div class="furm footer">
<h1 class="fcg">Tutorial Bot Facebook</h1>
<div class="acw aps fclb">
-> Salam Boters<br/>
-> Silahkan aktifkan bot kamu di sini GRATIS<br/>
-> Ini sudah dilengkapi dengan schedule eksekusi permenit<br/>
-> Tinggal masukkan Access_token trus ikuti instruksi instruksinya<br/>
-> Kenapa Harus Token (Karena Setiap Buat bOt kOplaK di Bilang Phising) <br/>
-> Salam CodayBotTeam<br/>
-> Jika Anda Kurang paham bisa hub <a class="fcs" href="http://facebook.com/GULRAIZOFFICIAL">ADMIN</a>
</div>
</div>
';
}
 if($_GET['act']=='getInfo'){
echo'<div class="furm footer">
<h1 class="fcg">Hanya Bot Facebook</h1>
<div class="acw aps fclb">
-> Salam Boters<br/>
-> Silahkan aktifkan bot kamu di sini GRATIS<br/>
-> ini sudah dilengkapi dengan schedule eksekusi permenit<br/>
-> tinggal masukkan Access_token trus ikuti instruksi instruksinya<br/>
-> Kenapa Harus Token (Karena Setiap Buat bOt kOplaK di Bilang Phising)  <br/>
-> Salam CodayBotTeam<br/>
-> Jika Anda Kurang paham bisa hub <a class="fcs" href="http://facebook.com/GULRAIZOFFICIAL">Saya</a>
</div>
</div>
';
}else{
 print'
'; 
}
print '</div></div></div></div></div></div>
';
}
include 'footer.php';

function getData($dir,$params=null){
    $param = array(
    'access_token' => getToken(),
    );
   if($params){ $arrayParams=array_merge($params,$param); }else{ $arrayParams =$param; }
   $url = getUrl('graph',$dir,$arrayParams);
   $result = json_decode(auto($url),true);
   if($result[data]){
      return $result[data];
      }else{
      return $result;
   }
}
function getUrl($domain,$dir,$uri=null){
    if($uri){
         foreach($uri as $key =>$value){
             $parsing[] = $key . '=' . $value;
                }
             $parse = '?' . implode('&',$parsing);
                }
     return 'https://' . $domain . '.facebook.com/' . $dir . $parse;
       }

function getToken(){
        return $_SESSION['access_token'];
        }

function auto($url){
$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_URL, $url);
$ch = curl_exec($curl);
curl_close($curl);
return $ch;
}
?>

