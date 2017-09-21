<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Дронове в действие</title>
<body link="#00ff00" alink="#00ffff" vlink="#ff0000">
<a name="begin">
<center><img src="header.jpg"></center>
<center><h4><?php
$mydate = date("d.m.Y");
$mytime = date("H:i");
echo "Здравейте! Днес е $mydate, часът в момента е $mytime";
?></h4></center>
<center><h3><font color="red">
<?php
$d1=strtotime("September 23");
$d2=ceil(($d1-time())/60/60/24);
echo "Остават " . $d2 ." дни до Рожденият ми ден :)";
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
<a name="I"><font color="pink"><center><h2>Какво представлява дронът?</h2></center></font>
<font color="magenta"><h3>Дроновете представляват  безпилотни летателни апарати, които се управляват или дистанционно, или автономно и се използват за стотици мисии, при които малкия, незабележим размер е плюс. Дрон на английски означава търтей, безделник. Така наричат и безпилотните летателни апарати. Задвижват ги чрез дистанционно управление или по предварително зададен с помощта на GPS маршрут - апаратът може да е програмиран за самостоятелно изпълнение. Един дрон има една или няколко перки, разнообразието в размери е още по-голямо - събира се в дланта или е колкото автомобил. Това, което обединява всички, е, че имат много приложения.</h3></font>
<hr width=100% size=3 color="gray">
<a name="II"><font color="pink"><center><h2>За какво се използва?</h2></center></font>
<font color="magenta"><h3>Институтът за космически изследвания и технологии при БАН работи по изграждането на информационен комплекс за мониторинг на околната среда от въздуха. С апаратурата ще се осигуряват данни за оценка на състоянието на растителната покривка, почвата, засушаването.<br>
Треньорският щаб на аржентинския Велес Сарсфийлд решил да започне да използва безпилотни летателни апарати, чрез които да следи как се подготвя всеки един от футболистите на тима. Наставникът Мигел Анхел Русо и неговите помощници наели специалист, който чрез дрон прави записи на заниманията и в последствие се извършва подборен разбор на отделните играчи. Само преди няколко седмици наставникът на Манчестър Юнайтед Луис Ван Гаал бе обзет от шпиономания, твърдейки че тренировките на тима му се следели именно от такъв летателен апарат.<br>
Новата мания е завладяла и абитуриентите, които искат да заснемат бала си от високо. Цените на машинките започват от 170 лева и може да достигнат до 700 долара. Богати родители не жалят левчета.<br>
Американската граница с Мексико се охранява с помощта на дронове.<br>
Сирийската противовъздушна отбрана е свали турски безпилотен летателен апарат северно от град Алепо.<br>
При аварията във Факушима се използваха дронове, които измерваха радиацията и наличието на други опасни вещества.<br>
Дронове помагат на въздушния трафик.<br>
САЩ използва подобни безпилотници, за да открива и елиминира терористи из целия свят. Тези безпилотни самолети се превърнаха в едно от най-мощните оръжия на Америка в борбата им срещу враговете.<br>
В Япония с дронове наблюдават вулканичната дейност.<br>
В САЩ с дронове се наблюдава живота на косатките в океана.<br>
В Европа за първи път използват дронове за пренасяне на пратки и лекарства.<br>
Ползват умните джаджи за всичко - шпионаж, театър, кино, доставка на пици.<br>
Безкрайните възможности на дроновете влизат в употреба и на сцената. Използват ги при декора и в снимането на филми.<br>
Дроновете улавят всички мигове от този важен ден за младоженците. Така децата им нямат усещане, че са изпуснали ценни мигове от церемонията, защото "всички ъгли за покрити", казват производителите.<br>
Много служби в Европа се стремят към тези хитри, малки шпиони, за да им помагат при наблюдение и други подобни дейности. Дори ФБР ги ползва.<br>
Известната верига DominoТs направо смая клиентите си, като пусна видео на дрон, разнасящ пици - още топли. Но какво би станало, ако всички пицарии наемат въпросните устройства - абсолютен трафик. От небето ще валят пици.<br>
Земеделските производители имат трудна работа, но безпилотни самолети биха улеснили бита им. Дроновете могат да направят въздушни изследвания на културите - дали системите за напояване работят, как се развиват растенията им и дори дали някои от тях са болни или повредени.</h3></font>
<hr width=100% size=3 color="gray">
<a name="III"><font color="pink"><center><h2>Видове дронове и приложението им</h2></center></font>
<font color="magenta"><h3>Хитовите модели са:<br>
<center><font color="cyan">"Гимбол"</font></center>
<img src="Flyabiliy-Gimball-2.png" width="300" height="300">
Дроновете днес са по-умни и по-стабилни от всякога. Но повечето не са създадени да маневрират в тесни пространства или около живи същества. Не така е с "Гимбол", който е именно за такива нужди. Той е конструиран от Flyability, екип от Швейцария - като въртящата се клетка около тялото му го предпазва от счупване, когато се натъкне на стени, или други препятствия. "Гимбол" е и много лек и не би навредил на човек дори при докосване. Може да се промушва в тунели или рухнали сгради.
Толкова е впечатляващ, че спечели на авторите си милион долара безвъзмездна помощ от Обединените арабски емирства. Това се случи на състезанието в Дубай, където участваха 39 дрона, но "Гимбол" беше победителят. Тимът, който го е създал, ще продължи да разработва негови вариации - именно дронове са търсене и спасяване. Сайт на "Гимбол": <a href="http://www.flyability.com/product/" target="_blank">www.flyability.com</a><br><br>
<center><font color="cyan">"Лили"</font></center>
<img src="LILY.jpg" width="300" height="200">
Били ли сте някога на ръба на планината в уингсют - екипа на летящите като Батман хора? Да ви се е искало да има някой достатъчно луд, за да се присъеди към вас и да ви запише полета? Има реален отговор на тази ваша мечта. "Лили" е новият безпилотен самолет фотоапарат, който е проектиран да следва всяко ваше движение благодарение на GPS модул, който носите на китката си. Тя също е водоустойчива и се ползва от сърфити и други любители на водните спортове, за да увековечи техните подвизи. "Лили" струва около 500 долара. Сайт на "Лили":
<a href="https://www.lily.camera" target="_blank">www.lily.camera</a><br><br>
<center><font color="cyan">"Соло"</font></center><br>
<img src="SOLO.jpg" width="600" height="200">
Това не е нов безпилотен самолет-играчка за запълване на рафтовете в магазините за супер джаджи. Това е дрон, способен на невероятни подвизи в кинематографията, благодарение на всички видове високотехнологични екстри, опаковани в лъскава черна черупка, какъвто е външнитя му вид. Не само това - "Солото" е първият самолет, който предлага пълен контрол на настройките на GoPro фотоапарата по време на всеки полет. Това ви спестява необходимостта да го приземявате всеки път, когато искате да промените настройките. Има и режим за селфи, наричан "драматичен", който започва със снимки отблизо на лицето ви и леко се отдалечава, заснемайки като в екшън действията ви. Ако някога ви се е искало да паднете на колене и да крещите, а камерата да ви хваща насред зрелищен пейзаж, сега е вашият шанс да го сторите. Сайт за "Соло": <a href="https://3drobotics.com/solo-drone/" target="_blank">3drobotics.com/solo-drone</a><br><br></h3>
<hr width=100% size=3 color="gray">
<a name="IV"><font color="pink"><center><h2>Любопитно</h2></center></font>
<font color="magenta"><h3>Дроновете са опасна работа във всеки смисъл - летящото снимащо устройство нарани преди дни ръката на Енрике Иглесиас и се наложи да го оперират. Жега стана и заради подобна джаджа и около кмета на Пазарджик Тодор Попов. Репортери на bTV заснеха с дрон имението му за 1,5 млн. лева в село Паталеница. Не дай, Боже, като във фентъзитата да въстанат в битка машини срещу човечество.
Но що е то дрон и има ли почва у нас? Дроновете не са само работен инструмент на папараците и филмовите екипи. Има ги и в модел за начинаещи, който струва около стотина долара. По-сложните безпилотни самолети започват с цени от 1000 долара. Те имат такива функции, че се превръщат в истински автономни устройства, които могат да взимат собствени решения.<br>
Вероятно ще има 30 000 дрона в Щатите до 2020 година, твърди Washington Times.
Според проучванията добре е индустрията да произвежда дроновете така, че да изглеждат по-приятелски настроени и забавни. Във Великобритания предлагат да ги боядисват в ярки цветове, за да не приличат на военни обекти и да стряскат, казва "Гардиън". Тъй както "Биг брадър" също би изглеждал по-привлекателен, ако е в розово, шегува се Slate.
Смята се, че използването им ще повиши ефективността и на бреговата охрана. В САЩ от военноморските сили казват, че с тях ще хващат 70% повече бегълци и наркотрафиканти.
Израел е най-големият износител на безпилотни летателни апарати в областта на отбраната. Държавната компания Aerospace Industries е продала дронове на повече от две дузини страни по целия свят.</h3></font>
<center><table border="0" width=50%>
<tr>
<td>
<h4><font color="black">Спиращо дъха видео със забележителностите на България от птичи поглед</font></h4>
<a>
<a href="http://vbox7.com/play:e802377e83" target="_blank"><img src="images.jpeg" width="100" height="50">
</a>
</td>
<td>
<h4><font color="black">Клипове за дронове в YouTube</font></h4>
<a>
<a href="https://www.youtube.com/results?search_query=drone" target="_blank"><img src="youtubebutton.jpeg" width="100" height="50">
</a>
</td>
<td>
<h4><font color="black">Класация на най-продаваните дронове за ноември 2015г.</font></h4>
<a>
<a href="http://myfirstdrone.com/tutorials/buying-guides/best-drones-for-sale/ "target="_blank"><img src="bw8.gif" widht="50">
</a>
</td>
<td>
<h4><font color="black">е-магазин за дронове в България</font></h4>
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
    $nameErr = "Полето е задължително!";
   } else {
     $name = test_input($_POST["name"]);
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Позволени са само букви";
     }
   }
  
   if (empty($_POST["email"])) {
     $emailErr = "Полето е задължително!";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Невалиден email";
     }
   }
    
   if (empty($_POST["website"])) {
     $website = "";
   } else {
     $website = test_input($_POST["website"]);
     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
       $websiteErr = "Грешно URL";
     }
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Полето е задължително!";
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

<h2>Напиши коментар:</h2>
<p><span class="error"><font color="red">*Полетата са задължителни.</font></span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   Име: <input type="text" name="name" value="<?php echo $name;?>">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   E-mail: <input type="text" name="email" value="<?php echo $email;?>">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   Website: <input type="text" name="website" value="<?php echo $website;?>">
   <span class="error"><?php echo $websiteErr;?></span>
   <br><br>
   Коментар: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
   <br><br>
   Пол:
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female">Female
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">Male
   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Изпрати">
</form>

<?php
echo "<h2>Твоите данни:</h2>";
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
<center><h2><a href="#begin">Начало</a></h2></center>
<center>© 2010-<?php echo date("Y");
?> Мелек Сабит® Всички права запазени.</center>
</body>
</head>
</html>
