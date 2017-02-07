<?php
if($act){
if($act == 'bomLike' ||
      $act == 'bomComment' ||
      $act == 'botLike' ||
      $act == 'botComment' ||
      $act == 'botResponCommentTeman' ||
      $act == 'botResponCommentCrewet' ||
      $act == 'botResponComment' ||
      $act == 'botResponLike' ||
      $act == 'botSimsimi' ||
      $act == 'FollowersTwitter'){
      include $act.'.php';
      }
print'
<div class="aclb fcg fsl abt">
<a class="fcs" href="index.php"> &laquo; Home </a>
';
if($act == menu){
print '
</div>
';
botMenu();
}else{
print '
 <a class="fcs" href="?act=menu"> &laquo; Menu </a>
</div>
';
}
}else{
botMenu();
}
function botMenu(){
print '
<div class="aclb fcg fsl abt">
<b><font face="comic sans" size="40" color="red">Menu</font></b>
<div/>
<div class="aclb fcg fsl abb">
<div class="acw apm">

<a class="fcs" href="?act=botComment"> <font face="comic sans" size="40" color="green"> &raquo; Bot Comment </font></a><br/>
<br/><div class="aclb fcg fsl abt">
<a class="fcs" href="keluar.php"> ADD NEW BOT TOKEN  </a> ( '.$_SESSION['name'].' )
</div>
</div></div>
</div>
</div></div></div></div>
'; } 
?>