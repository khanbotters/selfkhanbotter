п»ї<?php
$fileAccess = file('my_token.txt');
$access_token=$fileAccess[0];

if(file_exists('motivasi_log')){
$log=json_encode(file('motivasi_log'));
}else{
$log='';
}
$jam=array('01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','00',);
$sapa=array('Met Dini Hari ','Met Dini Hari ','Met Dini Hari ','Met Dini Hari ','Met Pagi ','Met Pagi ','Met Pagi ','Met Pagi ','Met Pagi ','Met Jelang Siang ','Met Siang ','Met Siang ','Met Siang ','Met Siang ','Met Sore ','Met Sore ','Met Petang ','Met Petang ','Met Malem ','Met Malem ','Met Malem ','Met Malem ','Met Malem ','Met Malem ','Met Malem ',);
$ucap = gmdate('H',time()+7*3600);
$ucap = str_replace('01','Jiaaah.. Lum tdr',$ucap);
$ucap = str_replace('02','Jiaaah.. Lum tdr',$ucap);
$ucap = str_replace('03','Jiaaah.. Lum tdr',$ucap);
$ucap = str_replace('04','Jiaaah.. Lum tdr',$ucap);
$ucap = str_replace('05','jah bangun lgsg Ol',$ucap);
$ucap = str_replace('06','jah bangun lgsg Ol',$ucap);
$ucap = str_replace('07','Sarapan blm nih',$ucap);
$ucap = str_replace('08','Sarapan blm nih',$ucap);
$ucap = str_replace('09','Met Tifitas Ea',$ucap);
$ucap = str_replace('10','Met Tifitas Ea',$ucap);
$ucap = str_replace('11','Met Tifitas Ea',$ucap);
$ucap = str_replace('12','Sholat Dhuhur lum',$ucap);
$ucap = str_replace('13','Makan siang lum',$ucap);
$ucap = str_replace('14','Met apa ja deh',$ucap);
$ucap = str_replace('15','Sholat Ashar lum',$ucap);
$ucap = str_replace('16','Met Nyantai aja',$ucap);
$ucap = str_replace('17','Dah mandi lum',$ucap);
$ucap = str_replace('18','Sholat Magrib blm',$ucap);
$ucap = str_replace('19','Makan mlm lum',$ucap);
$ucap = str_replace('20','Wktunya nnton Ovj',$ucap);
$ucap = str_replace('21','nnton Ovj lucu ni',$ucap);
$ucap = str_replace('22','waktunya bobok',$ucap);
$ucap = str_replace('23','beLum tidur nie',$ucap);
$ucap = str_replace('24','msh Begadang ea',$ucap);
$ucap = str_replace('00','msh Begadang ea',$ucap);
$ucapan = gmdate('H',time()+7*3600);
$ucapan = str_replace($jam,$sapa,$ucapan);
$aiueo = array('A','I','E','O','a','i','e','o',);
$uuu = array('u','u','u','u','u','u','u','u',);
$abc = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',);
$kotak = array('̲̅̅A̲̅','̲̅̅B̲̅','̲̅̅C̲̅','̲̅̅D̲̅','̲̅̅E̲̅','̲̅̅F̲̅','̲̅̅G̲̅','̲̅̅H̲̅','̲̅̅I̲̅','̲̅̅J̲̅','̲̅̅K̲̅','̲̅̅L̲̅','̲̅̅M̲̅','̲̅̅N̲̅','̲̅̅O̲̅','̲̅̅P̲̅','̲̅̅Q̲̅','̲̅̅R̲̅','̲̅̅S̲̅','̲̅̅T̲̅','̲̅̅U̲̅','̲̅̅V̲̅','̲̅̅W̲̅','̲̅̅X̲̅','̲̅̅Y̲̅','̲̅̅Z̲̅','̲̅̅a̲̅','̲̅̅b̲̅','̲̅̅c̲̅','̲̅̅d̲̅','̲̅̅e̲̅','̲̅̅f̲̅','̲̅̅g̲̅','̲̅̅h̲̅','̲̅̅i̲̅','̲̅̅j̲̅','̲̅̅k̲̅','̲̅̅l̲̅','̲̅̅m̲̅','̲̅̅n̲̅','̲̅̅o̲̅','̲̅̅p̲̅','̲̅̅q̲̅','̲̅̅r̲̅','̲̅̅s̲̅','̲̅̅t̲̅','̲̅̅u̲̅','̲̅̅v̲̅','̲̅̅w̲̅','̲̅̅x̲̅','̲̅̅y̲̅','̲̅̅z̲̅',);
$me = json_decode(auto('https://graph.facebook.com/me?access_token='.$access_token.'&fields=id'),true);
$stat=json_decode(auto('https://graph.facebook.com/me/home?fields=id,message,created_time,from,comments,type&access_token='.$access_token.'&offset=0&limit=15'),true);

$smiles=array('(●*∩_∩*●)','(*^ -^*)','(◡‿◡✿)','(◕‿◕✿)','(✿◠‿◠)','(◑‿◐)','(◕‿-)','(｡◕‿◕｡)','(｡❤‿❤｡)','(✿ ♥‿♥)','(｡♥‿♥｡)','(～o❤‿❤)～o',);
$smile=$smiles[rand(0,count($smiles)-1)];

$emoji=array(
urldecode('%F3%BE%80%80'),
urldecode('%F3%BE%80%81'),
urldecode('%F3%BE%80%82'),
urldecode('%F3%BE%80%83'),
urldecode('%F3%BE%80%84'),
urldecode('%F3%BE%80%85'),
urldecode('%F3%BE%80%87'), 
urldecode('%F3%BE%80%B8'), 
urldecode('%F3%BE%80%BC'),
urldecode('%F3%BE%80%BD'),
urldecode('%F3%BE%80%BE'),
urldecode('%F3%BE%80%BF'),
urldecode('%F3%BE%81%80'),
urldecode('%F3%BE%81%81'),
urldecode('%F3%BE%81%82'),
urldecode('%F3%BE%81%83'),
urldecode('%F3%BE%81%85'),
urldecode('%F3%BE%81%86'),
urldecode('%F3%BE%81%87'),
urldecode('%F3%BE%81%88'),
urldecode('%F3%BE%81%89'), 
urldecode('%F3%BE%81%91'),
urldecode('%F3%BE%81%92'),
urldecode('%F3%BE%81%93'), 
urldecode('%F3%BE%86%90'),
urldecode('%F3%BE%86%91'),
urldecode('%F3%BE%86%92'),
urldecode('%F3%BE%86%93'),
urldecode('%F3%BE%86%94'),
urldecode('%F3%BE%86%96'),
urldecode('%F3%BE%86%9B'),
urldecode('%F3%BE%86%9C'),
urldecode('%F3%BE%86%9D'),
urldecode('%F3%BE%86%9E'),
urldecode('%F3%BE%86%A0'),
urldecode('%F3%BE%86%A1'),
urldecode('%F3%BE%86%A2'),
urldecode('%F3%BE%86%A4'),
urldecode('%F3%BE%86%A5'),
urldecode('%F3%BE%86%A6'),
urldecode('%F3%BE%86%A7'),
urldecode('%F3%BE%86%A8'),
urldecode('%F3%BE%86%A9'),
urldecode('%F3%BE%86%AA'),
urldecode('%F3%BE%86%AB'),
urldecode('%F3%BE%86%AE'),
urldecode('%F3%BE%86%AF'),
urldecode('%F3%BE%86%B0'),
urldecode('%F3%BE%86%B1'),
urldecode('%F3%BE%86%B2'),
urldecode('%F3%BE%86%B3'), 
urldecode('%F3%BE%86%B5'),
urldecode('%F3%BE%86%B6'),
urldecode('%F3%BE%86%B7'),
urldecode('%F3%BE%86%B8'),
urldecode('%F3%BE%86%BB'),
urldecode('%F3%BE%86%BC'),
urldecode('%F3%BE%86%BD'),
urldecode('%F3%BE%86%BE'),
urldecode('%F3%BE%86%BF'),
urldecode('%F3%BE%87%80'),
urldecode('%F3%BE%87%81'),
urldecode('%F3%BE%87%82'),
urldecode('%F3%BE%87%83'),
urldecode('%F3%BE%87%84'),
urldecode('%F3%BE%87%85'),
urldecode('%F3%BE%87%86'),
urldecode('%F3%BE%87%87'), 
urldecode('%F3%BE%87%88'),
urldecode('%F3%BE%87%89'),
urldecode('%F3%BE%87%8A'),
urldecode('%F3%BE%87%8B'),
urldecode('%F3%BE%87%8C'),
urldecode('%F3%BE%87%8D'),
urldecode('%F3%BE%87%8E'),
urldecode('%F3%BE%87%8F'),
urldecode('%F3%BE%87%90'),
urldecode('%F3%BE%87%91'),
urldecode('%F3%BE%87%92'),
urldecode('%F3%BE%87%93'),
urldecode('%F3%BE%87%94'),
urldecode('%F3%BE%87%95'),
urldecode('%F3%BE%87%96'),
urldecode('%F3%BE%87%97'),
urldecode('%F3%BE%87%98'),
urldecode('%F3%BE%87%99'),
urldecode('%F3%BE%87%9B'), 
urldecode('%F3%BE%8C%AC'),
urldecode('%F3%BE%8C%AD'),
urldecode('%F3%BE%8C%AE'),
urldecode('%F3%BE%8C%AF'),
urldecode('%F3%BE%8C%B0'),
urldecode('%F3%BE%8C%B2'),
urldecode('%F3%BE%8C%B3'),
urldecode('%F3%BE%8C%B4'),
urldecode('%F3%BE%8C%B6'),
urldecode('%F3%BE%8C%B8'),
urldecode('%F3%BE%8C%B9'),
urldecode('%F3%BE%8C%BA'),
urldecode('%F3%BE%8C%BB'),
urldecode('%F3%BE%8C%BC'),
urldecode('%F3%BE%8C%BD'),
urldecode('%F3%BE%8C%BE'),
urldecode('%F3%BE%8C%BF'), 
urldecode('%F3%BE%8C%A0'),
urldecode('%F3%BE%8C%A1'),
urldecode('%F3%BE%8C%A2'),
urldecode('%F3%BE%8C%A3'),
urldecode('%F3%BE%8C%A4'),
urldecode('%F3%BE%8C%A5'),
urldecode('%F3%BE%8C%A6'),
urldecode('%F3%BE%8C%A7'),
urldecode('%F3%BE%8C%A8'),
urldecode('%F3%BE%8C%A9'),
urldecode('%F3%BE%8C%AA'),
urldecode('%F3%BE%8C%AB'), 
urldecode('%F3%BE%8D%80'),
urldecode('%F3%BE%8D%81'),
urldecode('%F3%BE%8D%82'),
urldecode('%F3%BE%8D%83'),
urldecode('%F3%BE%8D%84'),
urldecode('%F3%BE%8D%85'),
urldecode('%F3%BE%8D%86'),
urldecode('%F3%BE%8D%87'),
urldecode('%F3%BE%8D%88'),
urldecode('%F3%BE%8D%89'),
urldecode('%F3%BE%8D%8A'),
urldecode('%F3%BE%8D%8B'),
urldecode('%F3%BE%8D%8C'),
urldecode('%F3%BE%8D%8D'),
urldecode('%F3%BE%8D%8F'),
urldecode('%F3%BE%8D%90'),
urldecode('%F3%BE%8D%97'),
urldecode('%F3%BE%8D%98'),
urldecode('%F3%BE%8D%99'),
urldecode('%F3%BE%8D%9B'),
urldecode('%F3%BE%8D%9C'),
urldecode('%F3%BE%8D%9E'), 
urldecode('%F3%BE%93%B2'), 
urldecode('%F3%BE%93%B4'),
urldecode('%F3%BE%93%B6'), 
urldecode('%F3%BE%94%90'),
urldecode('%F3%BE%94%92'),
urldecode('%F3%BE%94%93'),
urldecode('%F3%BE%94%96'),
urldecode('%F3%BE%94%97'),
urldecode('%F3%BE%94%98'),
urldecode('%F3%BE%94%99'),
urldecode('%F3%BE%94%9A'),
urldecode('%F3%BE%94%9C'),
urldecode('%F3%BE%94%9E'),
urldecode('%F3%BE%94%9F'),
urldecode('%F3%BE%94%A4'),
urldecode('%F3%BE%94%A5'),
urldecode('%F3%BE%94%A6'),
urldecode('%F3%BE%94%A8'), 
urldecode('%F3%BE%94%B8'),
urldecode('%F3%BE%94%BC'),
urldecode('%F3%BE%94%BD'), 
urldecode('%F3%BE%9F%9C'), 
urldecode('%F3%BE%A0%93'),
urldecode('%F3%BE%A0%94'),
urldecode('%F3%BE%A0%9A'),
urldecode('%F3%BE%A0%9C'),
urldecode('%F3%BE%A0%9D'),
urldecode('%F3%BE%A0%9E'),
urldecode('%F3%BE%A0%A3'), 
urldecode('%F3%BE%A0%A7'),
urldecode('%F3%BE%A0%A8'),
urldecode('%F3%BE%A0%A9'), 
urldecode('%F3%BE%A5%A0'), 
urldecode('%F3%BE%A6%81'),
urldecode('%F3%BE%A6%82'),
urldecode('%F3%BE%A6%83'), 
urldecode('%F3%BE%AC%8C'),
urldecode('%F3%BE%AC%8D'),
urldecode('%F3%BE%AC%8E'),
urldecode('%F3%BE%AC%8F'),
urldecode('%F3%BE%AC%90'),
urldecode('%F3%BE%AC%91'),
urldecode('%F3%BE%AC%92'),
urldecode('%F3%BE%AC%93'),
urldecode('%F3%BE%AC%94'),
urldecode('%F3%BE%AC%95'),
urldecode('%F3%BE%AC%96'),
urldecode('%F3%BE%AC%97'),
);
$emo1=$emoji[rand(0,count($emoji)-1)];
$emo2=$emoji[rand(0,count($emoji)-1)];
$emo3=$emoji[rand(0,count($emoji)-1)];
$emo4=$emoji[rand(0,count($emoji)-1)]; 
$emo5=$emoji[rand(0,count($emoji)-1)];
$emo6=$emoji[rand(0,count($emoji)-1)];
$emo7=$emoji[rand(0,count($emoji)-1)];
$emo8=$emoji[rand(0,count($emoji)-1)];
$emo9=$emoji[rand(0,count($emoji)-1)];
$emo10=$emoji[rand(0,count($emoji)-1)];
$emo11=$emoji[rand(0,count($emoji)-1)];
$emo12=$emoji[rand(0,count($emoji)-1)];
$emo13=$emoji[rand(0,count($emoji)-1)];
$emo14=$emoji[rand(0,count($emoji)-1)]; 
$emo15=$emoji[rand(0,count($emoji)-1)];
$emo16=$emoji[rand(0,count($emoji)-1)];
$emo17=$emoji[rand(0,count($emoji)-1)];
$emo18=$emoji[rand(0,count($emoji)-1)]; 
$emo19=$emoji[rand(0,count($emoji)-1)];
$emo20=$emoji[rand(0,count($emoji)-1)];
$emo21=$emoji[rand(0,count($emoji)-1)];
$emo22=$emoji[rand(0,count($emoji)-1)];
$emo23=$emoji[rand(0,count($emoji)-1)];
$emo24=$emoji[rand(0,count($emoji)-1)];
$emo25=$emoji[rand(0,count($emoji)-1)];
$emo26=$emoji[rand(0,count($emoji)-1)];
$emo27=$emoji[rand(0,count($emoji)-1)];
$emo28=$emoji[rand(0,count($emoji)-1)]; 
$emo29=$emoji[rand(0,count($emoji)-1)];
$emo30=$emoji[rand(0,count($emoji)-1)];
$emo31=$emoji[rand(0,count($emoji)-1)];
$emo32=$emoji[rand(0,count($emoji)-1)]; 
$emo33=$emoji[rand(0,count($emoji)-1)];
$emo34=$emoji[rand(0,count($emoji)-1)];
$emo35=$emoji[rand(0,count($emoji)-1)];
$emo36=$emoji[rand(0,count($emoji)-1)];
$emo37=$emoji[rand(0,count($emoji)-1)];
$emo38=$emoji[rand(0,count($emoji)-1)];
$emo39=$emoji[rand(0,count($emoji)-1)];
$emo40=$emoji[rand(0,count($emoji)-1)];
$emo41=$emoji[rand(0,count($emoji)-1)];
$emo42=$emoji[rand(0,count($emoji)-1)];
$emo43=$emoji[rand(0,count($emoji)-1)];
$emo44=$emoji[rand(0,count($emoji)-1)]; 
$emo45=$emoji[rand(0,count($emoji)-1)];
$emo46=$emoji[rand(0,count($emoji)-1)];
$emo47=$emoji[rand(0,count($emoji)-1)];
$emo48=$emoji[rand(0,count($emoji)-1)];
$emo49=$emoji[rand(0,count($emoji)-1)];
$emo50=$emoji[rand(0,count($emoji)-1)];
$emo51=$emoji[rand(0,count($emoji)-1)];
$emo52=$emoji[rand(0,count($emoji)-1)];
$emo53=$emoji[rand(0,count($emoji)-1)];
$emo54=$emoji[rand(0,count($emoji)-1)]; 
$emo55=$emoji[rand(0,count($emoji)-1)];
$emo56=$emoji[rand(0,count($emoji)-1)];
$emo57=$emoji[rand(0,count($emoji)-1)];
$emo58=$emoji[rand(0,count($emoji)-1)]; 
$emo59=$emoji[rand(0,count($emoji)-1)];
$emo60=$emoji[rand(0,count($emoji)-1)];
$emo61=$emoji[rand(0,count($emoji)-1)];
$emo62=$emoji[rand(0,count($emoji)-1)];
$emo63=$emoji[rand(0,count($emoji)-1)];
$emo64=$emoji[rand(0,count($emoji)-1)];
$emo65=$emoji[rand(0,count($emoji)-1)];
$emo66=$emoji[rand(0,count($emoji)-1)];
$emo67=$emoji[rand(0,count($emoji)-1)];
$emo68=$emoji[rand(0,count($emoji)-1)]; 
$emo69=$emoji[rand(0,count($emoji)-1)];
$emo70=$emoji[rand(0,count($emoji)-1)];
$emo71=$emoji[rand(0,count($emoji)-1)];
$emo72=$emoji[rand(0,count($emoji)-1)]; 
$emo73=$emoji[rand(0,count($emoji)-1)];
$emo74=$emoji[rand(0,count($emoji)-1)];
$emo75=$emoji[rand(0,count($emoji)-1)];
$emo76=$emoji[rand(0,count($emoji)-1)];
$emo77=$emoji[rand(0,count($emoji)-1)];
$emo78=$emoji[rand(0,count($emoji)-1)];
$emo79=$emoji[rand(0,count($emoji)-1)];
$emo80=$emoji[rand(0,count($emoji)-1)];
$emo81=$emoji[rand(0,count($emoji)-1)];
$emo22=$emoji[rand(0,count($emoji)-1)];
$emo83=$emoji[rand(0,count($emoji)-1)];
$emo84=$emoji[rand(0,count($emoji)-1)]; 
$emo85=$emoji[rand(0,count($emoji)-1)];
$emo86=$emoji[rand(0,count($emoji)-1)];
$emo87=$emoji[rand(0,count($emoji)-1)];
$emo88=$emoji[rand(0,count($emoji)-1)];
$emo89=$emoji[rand(0,count($emoji)-1)];
$emo90=$emoji[rand(0,count($emoji)-1)];
$emo91=$emoji[rand(0,count($emoji)-1)];
$emo92=$emoji[rand(0,count($emoji)-1)];
$emo33=$emoji[rand(0,count($emoji)-1)];
$emo44=$emoji[rand(0,count($emoji)-1)]; 
$emo95=$emoji[rand(0,count($emoji)-1)];
$emo96=$emoji[rand(0,count($emoji)-1)];
$emo97=$emoji[rand(0,count($emoji)-1)];
$emo98=$emoji[rand(0,count($emoji)-1)]; 
$emo99=$emoji[rand(0,count($emoji)-1)];
$emo100=$emoji[rand(0,count($emoji)-1)];
$emo101=$emoji[rand(0,count($emoji)-1)];
$emo102=$emoji[rand(0,count($emoji)-1)];
$emo103=$emoji[rand(0,count($emoji)-1)];
$emo104=$emoji[rand(0,count($emoji)-1)];
$emo105=$emoji[rand(0,count($emoji)-1)];
$emo106=$emoji[rand(0,count($emoji)-1)];
$emo107=$emoji[rand(0,count($emoji)-1)];
$emo108=$emoji[rand(0,count($emoji)-1)]; 
$emo109=$emoji[rand(0,count($emoji)-1)];
$emo110=$emoji[rand(0,count($emoji)-1)];
$emo111=$emoji[rand(0,count($emoji)-1)];
$emo112=$emoji[rand(0,count($emoji)-1)]; 
$emo113=$emoji[rand(0,count($emoji)-1)];
$emo114=$emoji[rand(0,count($emoji)-1)];
$emo115=$emoji[rand(0,count($emoji)-1)];
$emo116=$emoji[rand(0,count($emoji)-1)];
$emo117=$emoji[rand(0,count($emoji)-1)];
$emo118=$emoji[rand(0,count($emoji)-1)];
$emo119=$emoji[rand(0,count($emoji)-1)];
$emo120=$emoji[rand(0,count($emoji)-1)];
$emo121=$emoji[rand(0,count($emoji)-1)];
$emo122=$emoji[rand(0,count($emoji)-1)];
$emo123=$emoji[rand(0,count($emoji)-1)];
$emo124=$emoji[rand(0,count($emoji)-1)];
$emo125=$emoji[rand(0,count($emoji)-1)];
$emo126=$emoji[rand(0,count($emoji)-1)];
$emo127=$emoji[rand(0,count($emoji)-1)];
$emo128=$emoji[rand(0,count($emoji)-1)];
$emo129=$emoji[rand(0,count($emoji)-1)]; 
$emo130=$emoji[rand(0,count($emoji)-1)];
$emo131=$emoji[rand(0,count($emoji)-1)];
$emo132=$emoji[rand(0,count($emoji)-1)];
$emo133=$emoji[rand(0,count($emoji)-1)]; 
$emo134=$emoji[rand(0,count($emoji)-1)];
$emo135=$emoji[rand(0,count($emoji)-1)];
$emo136=$emoji[rand(0,count($emoji)-1)];
$emo137=$emoji[rand(0,count($emoji)-1)];
$emo138=$emoji[rand(0,count($emoji)-1)];
$emo139=$emoji[rand(0,count($emoji)-1)];
$emo140=$emoji[rand(0,count($emoji)-1)];
$emo141=$emoji[rand(0,count($emoji)-1)];
$emo142=$emoji[rand(0,count($emoji)-1)];
$emo143=$emoji[rand(0,count($emoji)-1)];
$emo144=$emoji[rand(0,count($emoji)-1)];
$emo145=$emoji[rand(0,count($emoji)-1)];
$emo146=$emoji[rand(0,count($emoji)-1)];
$emo147=$emoji[rand(0,count($emoji)-1)];
$emo148=$emoji[rand(0,count($emoji)-1)];
$emo149=$emoji[rand(0,count($emoji)-1)];
$emo150=$emoji[rand(0,count($emoji)-1)]; 
$emo151=$emoji[rand(0,count($emoji)-1)];
$emo152=$emoji[rand(0,count($emoji)-1)];
$emo153=$emoji[rand(0,count($emoji)-1)];
$emo154=$emoji[rand(0,count($emoji)-1)]; 
$emo155=$emoji[rand(0,count($emoji)-1)];
$emo156=$emoji[rand(0,count($emoji)-1)];
$emo157=$emoji[rand(0,count($emoji)-1)];
$emo158=$emoji[rand(0,count($emoji)-1)];
$emo159=$emoji[rand(0,count($emoji)-1)];
$emo160=$emoji[rand(0,count($emoji)-1)];
$emo161=$emoji[rand(0,count($emoji)-1)];
$emo162=$emoji[rand(0,count($emoji)-1)];
$emo163=$emoji[rand(0,count($emoji)-1)];
$emo164=$emoji[rand(0,count($emoji)-1)];
$emo165=$emoji[rand(0,count($emoji)-1)];
$emo166=$emoji[rand(0,count($emoji)-1)];
$emo167=$emoji[rand(0,count($emoji)-1)];
$emo168=$emoji[rand(0,count($emoji)-1)];
$emo106=$emoji[rand(0,count($emoji)-1)];
$emo169=$emoji[rand(0,count($emoji)-1)];
$emo170=$emoji[rand(0,count($emoji)-1)]; 
$emo171=$emoji[rand(0,count($emoji)-1)];
$emo172=$emoji[rand(0,count($emoji)-1)];
$emo173=$emoji[rand(0,count($emoji)-1)];
$emo174=$emoji[rand(0,count($emoji)-1)]; 
$emo175=$emoji[rand(0,count($emoji)-1)];
$emo176=$emoji[rand(0,count($emoji)-1)];
$emo177=$emoji[rand(0,count($emoji)-1)];
$emo178=$emoji[rand(0,count($emoji)-1)];
$emo179=$emoji[rand(0,count($emoji)-1)];
$emo180=$emoji[rand(0,count($emoji)-1)];




for($i=1;$i<=count($stat[data]);$i++){
if(!ereg($stat[data][$i-1][id],$log)){
if($stat[data][$i-1][from][id] != $me[id]){
$x=$stat[data][$i-1][id].'  ';
$y = fopen('motivasi_log','a');
fwrite($y,$x);
fclose($y);
$bot=array('nomer','latah','biasa',);
$robot=$bot[rand(0,count($bot)-1)];
$s=$stat[data][$i-1][message];
$qwerty = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',);
$font = array('д','в','Ç','δ','з','f','б','н','i','j','к','l','м','и','ø','р','q','я','s','т','ц','v','щ','x','ч','z','д','в','Ç','δ','з','f','б','н','i','j','к','l','м','и','ø','р','q','я','s','т','ц','v','щ','x','ч','z',);

include $inc[rand(0,count($inc)-1)];
$mess = $text[rand(0,count($text)-1)];
$dohan = str_replace($qwerty,$font,$mess);
$s=$stat[data][$i-1][message];
$magic1 = str_replace($qwerty,$font,$s);
$magic = ' @@[0:[0:1:'.str_replace(':',' ',$magic1).']] ' ;


$gen=json_decode(auto('http://graph.facebook.com/'.$stat[data][$i-1][from][id].'?fields=gender'),true);
if($gen[gender] == 'male'){
$arr_gen = array('ズﾑズ','ᄊﾑ丂','乃ﾑ刀Ǥ','Ծᄊ','Ծᄊ',);
$gender = $arr_gen[rand(0,count ($arr_gen)-1)];
}else{
$arr_gen = array('ᄊ乃ﾑズ','刀乇刀Ǥ','刀Ծ刀','ｲﾑ刀ｲ乇',);
$gender = $arr_gen[rand(0,count ($arr_gen)-1)];
}
$exp_nam = explode(' ',$stat[data][$i-1][from][name]);
$exp_nam = str_replace($abc,$kotak,$exp_nam);
$nama = $gender.'_'.$exp_nam[0].'';
$s=$stat[data][$i-1][message];
$magic = str_replace($qwerty,$font,$s);
if($stat[data][$i-1][type] == 'photo' ){
$salah= array('Keren '.$nama.' foto sapa tuh '.$smile.' ? 
◄◕ ▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬ ◕►',
' '.$emo1.' Nice '.$emo2.' pic '.$nama.' Love You '.$emo3.' 
◄◕ ▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬ ◕►',
'wow '.$emo4.' kerennnn '.$emo5.' Gambarnya '.$emo6.' 
'.$nama.'
◄◕ ▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬ ◕►',
''.$emo7.' wew.. '.$emo8.'  potonya sip '.$emo9.'
'.$nama.' '.$emo10.'
mantab dah.. '.$emo11.'
◄◕ ▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬ ◕►',
' '.$emo12.' waw .. '.$emo13.' foto '.$emo14.' siapa '.$emo15.' itu '.$emo15.'
'.$nama.'.? '.$emo16.'
◄◕ ▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬ ◕►',
);
}else{
$salah = array(' '.$emo17.' '.$nama.' '.$emo18.'
aku '.$emo19.' ksh '.$emo20.' motivasi '.$emo21.' nih '.$emo22.' ?? 
  ←←←←←←MoTiVaSi→→→→→→
╭•▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬•╮
'.str_replace(':',' ',$dohan).'
╰•▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬•╯
',
' '.$emo23.' Mampir '.$emo24.' ah.. '.$emo25.' boleh '.$emo26.' kan '.$emo27.'
'.$nama.' .?? '.$emo28.'
'.$emo29.'aku '.$emo30.' ksh '.$emo31.' motivasi '.$emo32.' nih '.$emo33.' ? 
  ←←←←←←MoTiVaSi→→→→→→
→•▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬•←
  '.str_replace(':',' ',$dohan).'
╰•▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬•╯
',
' '.$emo34.' mo '.$emo35.' koment '.$emo36.' apa '.$emo37.'ea?? '.$emo38.'
'.$nama.' ?? '.$emo39.'
'.$emo40.' aku '.$emo41.' ksh '.$emo42.' motivasi '.$emo43.' nih '.$emo44.' ??
  ←←←←←←MoTiVaSi→→→→→→
→•▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬•←
 '.str_replace(':',' ',$dohan).'
╰•▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬•╯
',
' '.$emo45.' absen '.$emo46.' koment '.$emo47.' aja '.$emo48.' deh..,,
'.$nama.' ?? gak pa2 kan '.$gender.',,
'.$emo49.' smbl '.$emo50.' bwa '.$emo51.' motivasi '.$emo52.' nih '.$emo53.' ??
  ←←←←←←MoTiVaSi→→→→→→
→•▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬•←
'.str_replace(':',' ',$dohan).'
╰•▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬•╯
',
' '.$emo54.' '.$nama.' ??,, '.$emo55.'
'.$emo56.' mantab '.$emo57.' deh '.$emo58.' statusmu?? '.$emo59.'
'.$emo60.' aku '.$emo61.' ksh '.$emo62.' motivasi '.$emo63.' nih '.$emo64.' ??
  ←←←←←←MoTiVaSi→→→→→→
→•▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬•←
 '.str_replace(':',' ',$dohan).'
╰•▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬•╯
',
' '.$emo65.' '.$nama.' ??,, '.$emo66.'
'.$emo67.' aku '.$emo68.' hadir '.$emo69.' lg '.$emo70.' lho '.$emo71.' nie '.$gender.' ?? '.$emo72.'
'.$emo73.' aku '.$emo74.' ksh '.$emo75.' motivasi '.$emo76.' nih '.$emo77.' ??
  ←←←←←←MoTiVaSi→→→→→→
→•▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬•←
'.str_replace(':',' ',$dohan).'
╰•▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬•╯
',
' '.$emo78.' mo '.$emo79.' koment '.$emo80.' apa ea?? '.$emo81.'
'.$nama.' ??
'.$emo82.' aku '.$emo83.' ksh '.$emo84.' motivasi '.$emo85.' nih '.$emo86.' ??
  ←←←←←←MoTiVaSi→→→→→→
→•▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬•←
'.str_replace(':',' ',$dohan).'
╰•▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬•╯
',
' '.$emo87.' meluncur '.$emo88.' lagi '.$emo89.' ahh?? '.$emo90.'
'.$nama.' ??
'.$emo91.' aku '.$emo92.' ksh '.$emo93.' motivasi '.$emo94.' nih '.$emo95.' ??
  ←←←←←←MoTiVaSi→→→→→→
→•▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬•←
'.str_replace(':',' ',$dohan).'
╰•▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬•╯
',
' '.$emo96.' '.$nama.' ??,, '.$emo97.'
'.$emo98.' mantab '.$emo99.' deh '.$emo100.' statusmu?? '.$emo101.'
'.$emo102.' aku '.$emo103.' ksh '.$emo104.' motivasi '.$emo105.' nih '.$emo106.' ??
  ←←←←←←MoTiVaSi→→→→→→
→•▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬•←
'.str_replace(':',' ',$dohan).'
╰•▬▬
',▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬•╯
); }

$TimeZone="+7";
$_time=gmdate("H", time() + ($TimeZone * 60 * 60));
if ($_time > 18) $_sambutan = "Šεlαʍα† ʍαlαʍ $nama ";
else if($_time > 14) $_sambutan = "Šεlαʍα† ŠøƦε $nama ";
else if ($_time > 10) $_sambutan = "Šεlαʍα† Šιαπĝ $nama ";
else $_sambutan = "Šεlαʍα† ραĝι $nama ";

$hari=gmdate("D", time()+60*60*7);
if((gmdate("D", time()+60*60*7))=="Sun"){ $hari="Minggu"; }
if((gmdate("D", time()+60*60*7))=="Mon"){ $hari="Senin"; }
if((gmdate("D", time()+60*60*7))=="Tue"){ $hari="Selasa"; }
if((gmdate("D", time()+60*60*7))=="Wed"){ $hari="Rabu"; }
if((gmdate("D", time()+60*60*7))=="Thu"){ $hari="Kamis"; }
if((gmdate("D", time()+60*60*7))=="Fri"){ $hari="Jum'at"; }
if((gmdate("D", time()+60*60*7))=="Sat"){ $hari="Sabtu"; }
$jam=" ".gmdate("g:i a", time()+60*60*7);
$tgl=" ".gmdate("j - m - Y", time()+60*60*7);
$load_time = microtime();
$load_time = explode(' ', $load_time);
$load_time = $load_time[1] + $load_time[0];
$finish = $load_time;
$total_time = round(($finish - $start), 4);

$nomerku = $stat[data][$i-1][comments][count]+1;
$total = $stat[data][$i-1][comments][count];
$habiscomment = $stat[data][$i-2][from][name];

$crot = $me[id];
$tot=''.$crot.'';
$we='@[0:0: ]';
$habiscomment1= "

┏━━━━━━┻━━━━━━━━┓
┃👉 free-boy.tk 👈     ┃
┗━━━━━━━━━━━━━━━┛
➡ Bot 🚧 By 🚬 Pak Lionx Bot Team 🆒';
";


$message1 = $salah[rand(0,count($salah)-1)];
$message=($message1.$habiscomment1);

auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?access_token='.$access_token.'&message='.urlencode($message).'&method=post');
auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/likes?access_token='.$access_token.'&method=post');
echo $stat[data][$i-1][from][name].'=> '.htmlspecialchars($stat[data][$i-1][message]).'<br/>Komeng => '.$message.'<hr/>';
}
}
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
