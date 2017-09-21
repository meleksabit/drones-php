<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Äðîíîâå â äåéñòâèå</title>
<body link="#00ff00" alink="#00ffff" vlink="#ff0000">
<a name="begin">
<center><img src="header.jpg"></center>
<center><h4><?php
$mydate = date("d.m.Y");
$mytime = date("H:i");
echo "Çäðàâåéòå! Äíåñ å $mydate, ÷àñúò â ìîìåíòà å $mytime";
?></h4></center>
<center><h3><font color="red">
<?php
$d1=strtotime("September 23");
$d2=ceil(($d1-time())/60/60/24);
echo "Îñòàâàò " . $d2 ." äíè äî Ðîæäåíèÿò ìè äåí :)";
?></font></h3></center>
 <?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 
<?php
	    $u_agent = $_SERVER['HTTP_USER_AGENT'];
	    $bname = 'Unknown';
	    $platform = 'Unknown';
	    $version= "";
	 
	    //First get the platform?
	    if (preg_match('/linux/i', $u_agent)) {
	        $platform = 'linux';
	    }
	    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
	        $platform = 'mac';
	    }
	    elseif (preg_match('/windows|win32/i', $u_agent)) {
	        $platform = 'windows';
	    }
	 
	    // Next get the name of the useragent yes seperately and for good reason
	    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
	    {
	        $bname = 'Internet Explorer';
	        $ub = "MSIE";
	    }
	    elseif(preg_match('/Firefox/i',$u_agent))
	    {
	        $bname = 'Mozilla Firefox';
	        $ub = "Firefox";	        
	    }
	    elseif(preg_match('/Chrome/i',$u_agent))
	    {
	        $bname = 'Google Chrome';
	        $ub = "Chrome";
	    }
	    elseif(preg_match('/Safari/i',$u_agent))
	    {
	        $bname = 'Apple Safari';
	        $ub = "Safari";
	    }
	    elseif(preg_match('/Opera/i',$u_agent))
	    {
	        $bname = 'Opera';
	        $ub = "Opera";
	    }
	    elseif(preg_match('/Netscape/i',$u_agent))
	    {
	        $bname = 'Netscape';
	        $ub = "Netscape";
	    }
	 
	    // finally get the correct version number
	    $pos=strpos($u_agent,$ub);
	    $m=$pos+strlen($ub)+1;
	    if ($ub=='MSIE')
	    	$l=strpos($u_agent,';',$m)-$m;
	    else
		    $l=strpos($u_agent,' ',$m)-$m;
		if ($l<=0) $l=10;
		$version=substr($u_agent,$m,$l);
?>
<table style="border: 1px solid #000000;width: 600px" align="center">
	<tr>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 17pt;text-align: center;width: 298px; color: #2214B9;border-style: solid;border-width: 1px;">
		<strong>Your Information</strong></td>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 17pt;text-align: center;color: #2214B9;border-style: solid;border-width: 1px; width: 298px;">
		<strong>Value</strong></td>
	</tr>
	<tr>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 15pt;text-align: left; width: 298px; color: #2214B9;border-style: solid;border-width: 1px;">
		IP Address</td>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 15pt;text-align: left; color: #2214B9;border-style: solid;border-width: 1px; width: 298px;">
		<?php echo $_SERVER['REMOTE_ADDR']?></td>
	</tr>
	<tr>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 15pt;text-align: left; width: 298px; color: #2214B9;border-style: solid;border-width: 1px;">
		Operating System</td>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 15pt;text-align: left; color: #2214B9;border-style: solid;border-width: 1px; width: 298px;">
		<?php echo $platform ?></td>
	</tr>
	<tr>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 15pt;text-align: left; width: 298px; color: #2214B9;border-style: solid;border-width: 1px;">
		Web Browser Name</td>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 15pt;text-align: left; color: #2214B9;border-style: solid;border-width: 1px; width: 298px;">
		<?php echo $bname?></td>
	</tr>
	<tr>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 15pt;text-align: left; width: 298px; color: #2214B9;border-style: solid;border-width: 1px;">
		Web Browser Version</td>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 15pt;text-align: left; color: #2214B9;border-style: solid;border-width: 1px; width: 298px;">
		<?php echo $version ?></td>
	</tr>
	<tr>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 15pt;text-align: left; width: 298px; color: #2214B9;border-style: solid;border-width: 1px;">
		Page Refered to this page</td>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 15pt;text-align: left; color: #2214B9;border-style: solid;border-width: 1px; width: 298px;">
		<?php if (isset( $_SERVER["HTTP_REFERER"])) echo $_SERVER["HTTP_REFERER"]; else echo '<i>None</i>'?></td>
	</tr>
</table>

<div style="text-align: center">
<?php
$dd=array(
	'Server Address'=>$_SERVER['SERVER_ADDR'],
	'Server Name'=>$_SERVER['SERVER_NAME'],
	'Server Software'=>$_SERVER['SERVER_SOFTWARE'],
	'Document Root'=>$_SERVER['DOCUMENT_ROOT'],
	'HTTP Host'=>$_SERVER['HTTP_HOST'],
	'Remote Address'=>$_SERVER['REMOTE_ADDR'],
	'Remote Port'=>$_SERVER['REMOTE_PORT'],
	'Script File Name'=>$_SERVER['SCRIPT_FILENAME'],
	'Server Admin'=>$_SERVER['SERVER_ADMIN'],
	'Server Port'=>$_SERVER['SERVER_PORT'],
	'Script Name'=>$_SERVER['SCRIPT_NAME'],
	'Request URI'=>$_SERVER['REQUEST_URI'],	
	'PHP Self'=>$_SERVER['PHP_SELF']
);
?>
<table style="border: 1px solid #000000;width: 600px" align="center">
	<tr>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 17pt;text-align: center;width: 298px; color: #2214B9;border-style: solid;border-width: 1px;">
		<strong>Name</strong></td>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 17pt;text-align: center;color: #2214B9;border-style: solid;border-width: 1px; width: 298px;">
		<strong>Value</strong></td>
	</tr>
<?php
foreach ($dd as $key=>$value){
?>
	<tr>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 15pt;text-align: left; width: 298px; color: #2214B9;border-style: solid;border-width: 1px;">
		<?php echo $key?> </td>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 15pt;text-align: left; color: #2214B9;border-style: solid;border-width: 1px; width: 298px;">
		<?php echo $value?></td>
	</tr>
<?php } ?>
</table>

<div style="text-align: center">

<hr width=100% size=3 color="gray">
<a name="I"><font color="pink"><center><h2>Êàêâî ïðåäñòàâëÿâà äðîíúò?</h2></center></font>
<font color="magenta"><h3>Äðîíîâåòå ïðåäñòàâëÿâàò  áåçïèëîòíè ëåòàòåëíè àïàðàòè, êîèòî ñå óïðàâëÿâàò èëè äèñòàíöèîííî, èëè àâòîíîìíî è ñå èçïîëçâàò çà ñòîòèöè ìèñèè, ïðè êîèòî ìàëêèÿ, íåçàáåëåæèì ðàçìåð å ïëþñ. Äðîí íà àíãëèéñêè îçíà÷àâà òúðòåé, áåçäåëíèê. Òàêà íàðè÷àò è áåçïèëîòíèòå ëåòàòåëíè àïàðàòè. Çàäâèæâàò ãè ÷ðåç äèñòàíöèîííî óïðàâëåíèå èëè ïî ïðåäâàðèòåëíî çàäàäåí ñ ïîìîùòà íà GPS ìàðøðóò - àïàðàòúò ìîæå äà å ïðîãðàìèðàí çà ñàìîñòîÿòåëíî èçïúëíåíèå. Åäèí äðîí èìà åäíà èëè íÿêîëêî ïåðêè, ðàçíîîáðàçèåòî â ðàçìåðè å îùå ïî-ãîëÿìî - ñúáèðà ñå â äëàíòà èëè å êîëêîòî àâòîìîáèë. Òîâà, êîåòî îáåäèíÿâà âñè÷êè, å, ÷å èìàò ìíîãî ïðèëîæåíèÿ.</h3></font>
<hr width=100% size=3 color="gray">
<a name="II"><font color="pink"><center><h2>Çà êàêâî ñå èçïîëçâà?</h2></center></font>
<font color="magenta"><h3>Èíñòèòóòúò çà êîñìè÷åñêè èçñëåäâàíèÿ è òåõíîëîãèè ïðè ÁÀÍ ðàáîòè ïî èçãðàæäàíåòî íà èíôîðìàöèîíåí êîìïëåêñ çà ìîíèòîðèíã íà îêîëíàòà ñðåäà îò âúçäóõà. Ñ àïàðàòóðàòà ùå ñå îñèãóðÿâàò äàííè çà îöåíêà íà ñúñòîÿíèåòî íà ðàñòèòåëíàòà ïîêðèâêà, ïî÷âàòà, çàñóøàâàíåòî.<br>
Òðåíüîðñêèÿò ùàá íà àðæåíòèíñêèÿ Âåëåñ Ñàðñôèéëä ðåøèë äà çàïî÷íå äà èçïîëçâà áåçïèëîòíè ëåòàòåëíè àïàðàòè, ÷ðåç êîèòî äà ñëåäè êàê ñå ïîäãîòâÿ âñåêè åäèí îò ôóòáîëèñòèòå íà òèìà. Íàñòàâíèêúò Ìèãåë Àíõåë Ðóñî è íåãîâèòå ïîìîùíèöè íàåëè ñïåöèàëèñò, êîéòî ÷ðåç äðîí ïðàâè çàïèñè íà çàíèìàíèÿòà è â ïîñëåäñòâèå ñå èçâúðøâà ïîäáîðåí ðàçáîð íà îòäåëíèòå èãðà÷è. Ñàìî ïðåäè íÿêîëêî ñåäìèöè íàñòàâíèêúò íà Ìàí÷åñòúð Þíàéòåä Ëóèñ Âàí Ãààë áå îáçåò îò øïèîíîìàíèÿ, òâúðäåéêè ÷å òðåíèðîâêèòå íà òèìà ìó ñå ñëåäåëè èìåííî îò òàêúâ ëåòàòåëåí àïàðàò.<br>
Íîâàòà ìàíèÿ å çàâëàäÿëà è àáèòóðèåíòèòå, êîèòî èñêàò äà çàñíåìàò áàëà ñè îò âèñîêî. Öåíèòå íà ìàøèíêèòå çàïî÷âàò îò 170 ëåâà è ìîæå äà äîñòèãíàò äî 700 äîëàðà. Áîãàòè ðîäèòåëè íå æàëÿò ëåâ÷åòà.<br>
Àìåðèêàíñêàòà ãðàíèöà ñ Ìåêñèêî ñå îõðàíÿâà ñ ïîìîùòà íà äðîíîâå.<br>
Ñèðèéñêàòà ïðîòèâîâúçäóøíà îòáðàíà å ñâàëè òóðñêè áåçïèëîòåí ëåòàòåëåí àïàðàò ñåâåðíî îò ãðàä Àëåïî.<br>
Ïðè àâàðèÿòà âúâ Ôàêóøèìà ñå èçïîëçâàõà äðîíîâå, êîèòî èçìåðâàõà ðàäèàöèÿòà è íàëè÷èåòî íà äðóãè îïàñíè âåùåñòâà.<br>
Äðîíîâå ïîìàãàò íà âúçäóøíèÿ òðàôèê.<br>
ÑÀÙ èçïîëçâà ïîäîáíè áåçïèëîòíèöè, çà äà îòêðèâà è åëèìèíèðà òåðîðèñòè èç öåëèÿ ñâÿò. Òåçè áåçïèëîòíè ñàìîëåòè ñå ïðåâúðíàõà â åäíî îò íàé-ìîùíèòå îðúæèÿ íà Àìåðèêà â áîðáàòà èì ñðåùó âðàãîâåòå.<br>
Â ßïîíèÿ ñ äðîíîâå íàáëþäàâàò âóëêàíè÷íàòà äåéíîñò.<br>
Â ÑÀÙ ñ äðîíîâå ñå íàáëþäàâà æèâîòà íà êîñàòêèòå â îêåàíà.<br>
Â Åâðîïà çà ïúðâè ïúò èçïîëçâàò äðîíîâå çà ïðåíàñÿíå íà ïðàòêè è ëåêàðñòâà.<br>
Ïîëçâàò óìíèòå äæàäæè çà âñè÷êî - øïèîíàæ, òåàòúð, êèíî, äîñòàâêà íà ïèöè.<br>
Áåçêðàéíèòå âúçìîæíîñòè íà äðîíîâåòå âëèçàò â óïîòðåáà è íà ñöåíàòà. Èçïîëçâàò ãè ïðè äåêîðà è â ñíèìàíåòî íà ôèëìè.<br>
Äðîíîâåòå óëàâÿò âñè÷êè ìèãîâå îò òîçè âàæåí äåí çà ìëàäîæåíöèòå. Òàêà äåöàòà èì íÿìàò óñåùàíå, ÷å ñà èçïóñíàëè öåííè ìèãîâå îò öåðåìîíèÿòà, çàùîòî "âñè÷êè úãëè çà ïîêðèòè", êàçâàò ïðîèçâîäèòåëèòå.<br>
Ìíîãî ñëóæáè â Åâðîïà ñå ñòðåìÿò êúì òåçè õèòðè, ìàëêè øïèîíè, çà äà èì ïîìàãàò ïðè íàáëþäåíèå è äðóãè ïîäîáíè äåéíîñòè. Äîðè ÔÁÐ ãè ïîëçâà.<br>
Èçâåñòíàòà âåðèãà DominoÒs íàïðàâî ñìàÿ êëèåíòèòå ñè, êàòî ïóñíà âèäåî íà äðîí, ðàçíàñÿù ïèöè - îùå òîïëè. Íî êàêâî áè ñòàíàëî, àêî âñè÷êè ïèöàðèè íàåìàò âúïðîñíèòå óñòðîéñòâà - àáñîëþòåí òðàôèê. Îò íåáåòî ùå âàëÿò ïèöè.<br>
Çåìåäåëñêèòå ïðîèçâîäèòåëè èìàò òðóäíà ðàáîòà, íî áåçïèëîòíè ñàìîëåòè áèõà óëåñíèëè áèòà èì. Äðîíîâåòå ìîãàò äà íàïðàâÿò âúçäóøíè èçñëåäâàíèÿ íà êóëòóðèòå - äàëè ñèñòåìèòå çà íàïîÿâàíå ðàáîòÿò, êàê ñå ðàçâèâàò ðàñòåíèÿòà èì è äîðè äàëè íÿêîè îò òÿõ ñà áîëíè èëè ïîâðåäåíè.</h3></font>
<hr width=100% size=3 color="gray">
<a name="III"><font color="pink"><center><h2>Âèäîâå äðîíîâå è ïðèëîæåíèåòî èì</h2></center></font>
<font color="magenta"><h3>Õèòîâèòå ìîäåëè ñà:<br>
<center><font color="cyan">"Ãèìáîë"</font></center>
<img src="Flyabiliy-Gimball-2.png" width="300" height="300">
Äðîíîâåòå äíåñ ñà ïî-óìíè è ïî-ñòàáèëíè îò âñÿêîãà. Íî ïîâå÷åòî íå ñà ñúçäàäåíè äà ìàíåâðèðàò â òåñíè ïðîñòðàíñòâà èëè îêîëî æèâè ñúùåñòâà. Íå òàêà å ñ "Ãèìáîë", êîéòî å èìåííî çà òàêèâà íóæäè. Òîé å êîíñòðóèðàí îò Flyability, åêèï îò Øâåéöàðèÿ - êàòî âúðòÿùàòà ñå êëåòêà îêîëî òÿëîòî ìó ãî ïðåäïàçâà îò ñ÷óïâàíå, êîãàòî ñå íàòúêíå íà ñòåíè, èëè äðóãè ïðåïÿòñòâèÿ. "Ãèìáîë" å è ìíîãî ëåê è íå áè íàâðåäèë íà ÷îâåê äîðè ïðè äîêîñâàíå. Ìîæå äà ñå ïðîìóøâà â òóíåëè èëè ðóõíàëè ñãðàäè.
Òîëêîâà å âïå÷àòëÿâàù, ÷å ñïå÷åëè íà àâòîðèòå ñè ìèëèîí äîëàðà áåçâúçìåçäíà ïîìîù îò Îáåäèíåíèòå àðàáñêè åìèðñòâà. Òîâà ñå ñëó÷è íà ñúñòåçàíèåòî â Äóáàé, êúäåòî ó÷àñòâàõà 39 äðîíà, íî "Ãèìáîë" áåøå ïîáåäèòåëÿò. Òèìúò, êîéòî ãî å ñúçäàë, ùå ïðîäúëæè äà ðàçðàáîòâà íåãîâè âàðèàöèè - èìåííî äðîíîâå ñà òúðñåíå è ñïàñÿâàíå. Ñàéò íà "Ãèìáîë": <a href="http://www.flyability.com/product/" target="_blank">www.flyability.com</a><br><br>
<center><font color="cyan">"Ëèëè"</font></center>
<img src="LILY.jpg" width="300" height="200">
Áèëè ëè ñòå íÿêîãà íà ðúáà íà ïëàíèíàòà â óèíãñþò - åêèïà íà ëåòÿùèòå êàòî Áàòìàí õîðà? Äà âè ñå å èñêàëî äà èìà íÿêîé äîñòàòú÷íî ëóä, çà äà ñå ïðèñúåäè êúì âàñ è äà âè çàïèøå ïîëåòà? Èìà ðåàëåí îòãîâîð íà òàçè âàøà ìå÷òà. "Ëèëè" å íîâèÿò áåçïèëîòåí ñàìîëåò ôîòîàïàðàò, êîéòî å ïðîåêòèðàí äà ñëåäâà âñÿêî âàøå äâèæåíèå áëàãîäàðåíèå íà GPS ìîäóë, êîéòî íîñèòå íà êèòêàòà ñè. Òÿ ñúùî å âîäîóñòîé÷èâà è ñå ïîëçâà îò ñúðôèòè è äðóãè ëþáèòåëè íà âîäíèòå ñïîðòîâå, çà äà óâåêîâå÷è òåõíèòå ïîäâèçè. "Ëèëè" ñòðóâà îêîëî 500 äîëàðà. Ñàéò íà "Ëèëè":
<a href="https://www.lily.camera" target="_blank">www.lily.camera</a><br><br>
<center><font color="cyan">"Ñîëî"</font></center><br>
<img src="SOLO.jpg" width="600" height="200">
Òîâà íå å íîâ áåçïèëîòåí ñàìîëåò-èãðà÷êà çà çàïúëâàíå íà ðàôòîâåòå â ìàãàçèíèòå çà ñóïåð äæàäæè. Òîâà å äðîí, ñïîñîáåí íà íåâåðîÿòíè ïîäâèçè â êèíåìàòîãðàôèÿòà, áëàãîäàðåíèå íà âñè÷êè âèäîâå âèñîêîòåõíîëîãè÷íè åêñòðè, îïàêîâàíè â ëúñêàâà ÷åðíà ÷åðóïêà, êàêúâòî å âúíøíèòÿ ìó âèä. Íå ñàìî òîâà - "Ñîëîòî" å ïúðâèÿò ñàìîëåò, êîéòî ïðåäëàãà ïúëåí êîíòðîë íà íàñòðîéêèòå íà GoPro ôîòîàïàðàòà ïî âðåìå íà âñåêè ïîëåò. Òîâà âè ñïåñòÿâà íåîáõîäèìîñòòà äà ãî ïðèçåìÿâàòå âñåêè ïúò, êîãàòî èñêàòå äà ïðîìåíèòå íàñòðîéêèòå. Èìà è ðåæèì çà ñåëôè, íàðè÷àí "äðàìàòè÷åí", êîéòî çàïî÷âà ñúñ ñíèìêè îòáëèçî íà ëèöåòî âè è ëåêî ñå îòäàëå÷àâà, çàñíåìàéêè êàòî â åêøúí äåéñòâèÿòà âè. Àêî íÿêîãà âè ñå å èñêàëî äà ïàäíåòå íà êîëåíå è äà êðåùèòå, à êàìåðàòà äà âè õâàùà íàñðåä çðåëèùåí ïåéçàæ, ñåãà å âàøèÿò øàíñ äà ãî ñòîðèòå. Ñàéò çà "Ñîëî": <a href="https://3drobotics.com/solo-drone/" target="_blank">3drobotics.com/solo-drone</a><br><br></h3>
<hr width=100% size=3 color="gray">
<a name="IV"><font color="pink"><center><h2>Ëþáîïèòíî</h2></center></font>
<font color="magenta"><h3>Äðîíîâåòå ñà îïàñíà ðàáîòà âúâ âñåêè ñìèñúë - ëåòÿùîòî ñíèìàùî óñòðîéñòâî íàðàíè ïðåäè äíè ðúêàòà íà Åíðèêå Èãëåñèàñ è ñå íàëîæè äà ãî îïåðèðàò. Æåãà ñòàíà è çàðàäè ïîäîáíà äæàäæà è îêîëî êìåòà íà Ïàçàðäæèê Òîäîð Ïîïîâ. Ðåïîðòåðè íà bTV çàñíåõà ñ äðîí èìåíèåòî ìó çà 1,5 ìëí. ëåâà â ñåëî Ïàòàëåíèöà. Íå äàé, Áîæå, êàòî âúâ ôåíòúçèòàòà äà âúñòàíàò â áèòêà ìàøèíè ñðåùó ÷îâå÷åñòâî.
Íî ùî å òî äðîí è èìà ëè ïî÷âà ó íàñ? Äðîíîâåòå íå ñà ñàìî ðàáîòåí èíñòðóìåíò íà ïàïàðàöèòå è ôèëìîâèòå åêèïè. Èìà ãè è â ìîäåë çà íà÷èíàåùè, êîéòî ñòðóâà îêîëî ñòîòèíà äîëàðà. Ïî-ñëîæíèòå áåçïèëîòíè ñàìîëåòè çàïî÷âàò ñ öåíè îò 1000 äîëàðà. Òå èìàò òàêèâà ôóíêöèè, ÷å ñå ïðåâðúùàò â èñòèíñêè àâòîíîìíè óñòðîéñòâà, êîèòî ìîãàò äà âçèìàò ñîáñòâåíè ðåøåíèÿ.<br>
Âåðîÿòíî ùå èìà 30 000 äðîíà â Ùàòèòå äî 2020 ãîäèíà, òâúðäè Washington Times.
Ñïîðåä ïðîó÷âàíèÿòà äîáðå å èíäóñòðèÿòà äà ïðîèçâåæäà äðîíîâåòå òàêà, ÷å äà èçãëåæäàò ïî-ïðèÿòåëñêè íàñòðîåíè è çàáàâíè. Âúâ Âåëèêîáðèòàíèÿ ïðåäëàãàò äà ãè áîÿäèñâàò â ÿðêè öâåòîâå, çà äà íå ïðèëè÷àò íà âîåííè îáåêòè è äà ñòðÿñêàò, êàçâà "Ãàðäèúí". Òúé êàêòî "Áèã áðàäúð" ñúùî áè èçãëåæäàë ïî-ïðèâëåêàòåëåí, àêî å â ðîçîâî, øåãóâà ñå Slate.
Ñìÿòà ñå, ÷å èçïîëçâàíåòî èì ùå ïîâèøè åôåêòèâíîñòòà è íà áðåãîâàòà îõðàíà. Â ÑÀÙ îò âîåííîìîðñêèòå ñèëè êàçâàò, ÷å ñ òÿõ ùå õâàùàò 70% ïîâå÷å áåãúëöè è íàðêîòðàôèêàíòè.
Èçðàåë å íàé-ãîëåìèÿò èçíîñèòåë íà áåçïèëîòíè ëåòàòåëíè àïàðàòè â îáëàñòòà íà îòáðàíàòà. Äúðæàâíàòà êîìïàíèÿ Aerospace Industries å ïðîäàëà äðîíîâå íà ïîâå÷å îò äâå äóçèíè ñòðàíè ïî öåëèÿ ñâÿò.</h3></font>
<center><table border="0" width=50%>
<tr>
<td>
<h4><font color="black">Ñïèðàùî äúõà âèäåî ñúñ çàáåëåæèòåëíîñòèòå íà Áúëãàðèÿ îò ïòè÷è ïîãëåä</font></h4>
<a>
<a href="http://vbox7.com/play:e802377e83" target="_blank"><img src="images.jpeg" width="100" height="50">
</a>
</td>
<td>
<h4><font color="black">Êëèïîâå çà äðîíîâå â YouTube</font></h4>
<a>
<a href="https://www.youtube.com/results?search_query=drone" target="_blank"><img src="youtubebutton.jpeg" width="100" height="50">
</a>
</td>
<td>
<h4><font color="black">Êëàñàöèÿ íà íàé-ïðîäàâàíèòå äðîíîâå çà íîåìâðè 2015ã.</font></h4>
<a>
<a href="http://myfirstdrone.com/tutorials/buying-guides/best-drones-for-sale/ "target="_blank"><img src="bw8.gif" widht="50">
</a>
</td>
<td>
<h4><font color="black">å-ìàãàçèí çà äðîíîâå â Áúëãàðèÿ</font></h4>
<a>
<a href="http://www.zigifly.com/magazin/kvadrokopteri-ufo-dron/"target="_blank"><img src="logo.png" width="100" height="50">
</a>
</td>
</tr>
</table></center>
<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
    $nameErr = "Ïîëåòî å çàäúëæèòåëíî!";
   } else {
     $name = test_input($_POST["name"]);
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Ïîçâîëåíè ñà ñàìî áóêâè";
     }
   }
  
   if (empty($_POST["email"])) {
     $emailErr = "Ïîëåòî å çàäúëæèòåëíî!";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Íåâàëèäåí email";
     }
   }
    
   if (empty($_POST["website"])) {
     $website = "";
   } else {
     $website = test_input($_POST["website"]);
     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
       $websiteErr = "Ãðåøíî URL";
     }
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Ïîëåòî å çàäúëæèòåëíî!";
   } else {
     $gender = test_input($_POST["gender"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>Íàïèøè êîìåíòàð:</h2>
<p><span class="error"><font color="red">*Ïîëåòàòà ñà çàäúëæèòåëíè.</font></span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   Èìå: <input type="text" name="name" value="<?php echo $name;?>">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   E-mail: <input type="text" name="email" value="<?php echo $email;?>">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   Website: <input type="text" name="website" value="<?php echo $website;?>">
   <span class="error"><?php echo $websiteErr;?></span>
   <br><br>
   Êîìåíòàð: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
   <br><br>
   Ïîë:
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female">Female
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">Male
   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Èçïðàòè">
</form>

<?php
echo "<h2>Òâîèòå äàííè:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
<center><h2><a href="#begin">Íà÷àëî</a></h2></center>
<center>© 2010-<?php echo date("Y");
?> Ìåëåê Ñàáèò® Âñè÷êè ïðàâà çàïàçåíè.</center>
</body>
</head>
</html>
