<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Drones in action</title>
<body link="#00ff00" alink="#00ffff" vlink="#ff0000">
<a name="begin">
<center><img src="header.jpg"></center>
<center><h4><?php
$mydate = date("d.m.Y");
$mytime = date("H:i");
echo "Hello! Today is $mydate, The timme is currently $mytime";
?></h4></center>
<center><h3><font color="red">
<?php
$d1=strtotime("September 23");
$d2=ceil(($d1-time())/60/60/24);
echo $d2 ." days to my birthday :)";
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
<a name="I"><font color="pink"><center><h2>What the Drone is?</h2></center></font>
<font color="magenta"><h3>Drones are unmanned aerial vehicles that are controlled either remotely or autonomously and are used for hundreds of missions where the small, inconspicuous size is a plus. Drone in English means drone, loafer. This is also the name of unmanned aerial vehicles. They are driven by remote control or on a pre-set route with the help of GPS - the device can be programmed for self-execution. A drone has one or more fins, the variety of sizes is even greater - it fits in the palm of your hand or is as big as a car. What unites everyone is that they have many applications.</h3></font>
<hr width=100% size=3 color="gray">
<a name="II"><font color="pink"><center><h2>What is it used for?</h2></center></font>
<font color="magenta"><h3>The Institute for Space Research and Technology at the Bulgarian Academy of Sciences is working on the construction of an information complex for environmental monitoring from the air. The equipment will provide data for assessing the condition of vegetation, soil, drought.<br>
The coaching staff of the Argentine Velez Sarsfield decided to start using unmanned aerial vehicles to monitor how each of the team's players prepares. Mentor Miguel Angel Rousseau and his assistants hired a specialist who used a drone to record the activities and then performed a selective analysis of the individual players. Just a few weeks ago, Manchester United coach Luis Van Gaal was obsessed with espionage, claiming that his team's training was monitored by such an aircraft.<br>Новата мания е завладяла и абитуриентите, които искат да заснемат бала си от високо. Цените на машинките започват от 170 лева и може да достигнат до 700 долара. Богати родители не жалят левчета.<br>
The new mania has also conquered the high school graduates who want to shoot their prom from above. The prices of the typewriters start from 170 leva and can reach 700 dollars. Wealthy parents do not spare levs.<br>
The US border with Mexico is guarded by drones.<br>
Syrian air defenses have shot down a Turkish drone north of the city of Aleppo.<br>
The Fakushima accident used drones to measure radiation and other hazardous substances.<br>
Drones help air traffic.<br>
The United States uses such drones to detect and eliminate terrorists around the world. These drones have become one of America's most powerful weapons in their fight against enemies.<br>
In Japan, volcanic activity is monitored by drones.<br>
In the United States, drones are used to watching killer whales in the ocean.<br>
For the first time in Europe, drones are being used to transport shipments and medicines.<br>
They use smart gadgets for everything - espionage, theater, cinema, pizza delivery.<br>
The endless possibilities of drones come into use on stage. They are used in decor and in filming.<br>
Drones capture all the moments of this important day for the newlyweds. Thus, their children do not feel that they have missed precious moments from the ceremony, because "all corners are covered", say the manufacturers.<br>
Many services in Europe are turning to these cunning, little spies to help them with surveillance and other similar activities. Even the FBI uses them.<br>
The famous Domino chain has amazed its customers by releasing a video of a drone delivering pizza - still hot. But what if all the pizzerias rent the devices in question - absolute traffic. Pizza will fall from the sky.<br>
Farmers have a difficult job, but drones would make their lives easier. Drones can do aerial surveys of crops - whether irrigation systems work, how their plants grow, and even whether some of them are sick or damaged.</h3></font>
<hr width=100% size=3 color="gray">
<a name="III"><font color="pink"><center><h2>Different Types and their purpose</h2></center></font>
<font color="magenta"><h3>The hit models are:<br>
<center><font color="cyan">"Gimball"</font></center>
<img src="Flyabiliy-Gimball-2.png" width="300" height="300">
Drones today are smarter and more stable than ever. But most are not designed to maneuver in tight spaces or around living things. This is not the case with Gimbol, which is for such needs. It was constructed by Flyability, a team from Switzerland - as the rotating cage around its body protects it from breaking when it encounters walls or other obstacles. Gimbol is also very light and would not harm a person even when touched. It can penetrate tunnels or collapsed buildings. It is so impressive that it won its authors a million dollars in grants from the United Arab Emirates. This happened at the race in Dubai, where 39 drones took part, but Gimbol was the winner. The team that created it will continue to develop variations of it - drones are the search and rescue. Gimbol website: <a href="http://www.flyability.com/product/" target="_blank">www.flyability.com</a><br><br>
<center><font color="cyan">"Lily"</font></center>
<img src="LILY.jpg" width="300" height="200">
Have you ever been on the edge of a mountain in Wingsute - the team of people flying like Batman? Have you ever wanted someone crazy enough to join you and record your flight? There is a real answer to this dream of yours. "Lily" is the new drone camera that is designed to track your every move thanks to a GPS module that you carry on your wrist. It is also waterproof and is used by surfers and other water sports enthusiasts to perpetuate their exploits. "Lily" costs about $ 500. Lily's website:
<a href="https://www.lily.camera" target="_blank">www.lily.camera</a><br><br>
<center><font color="cyan">"Solo"</font></center><br>
<img src="SOLO.jpg" width="600" height="200">
This is not a new drone-toy to fill the shelves of super gadget stores. This is a drone capable of incredible feats in cinema, thanks to all kinds of high-tech extras, packed in a shiny black shell, as is its appearance. Not only that - the "Solo" is the first aircraft that offers full control of the settings of the GoPro camera during each flight. This saves you from having to land it every time you want to change settings. There's also a selfie mode called "dramatic", which starts with close-up photos of your face and moves away slightly, capturing your action-like actions. If you've ever wanted to get on your knees and scream and the camera catches you in the middle of a spectacular landscape, now's your chance to do so. Solo website: <a href="https://3drobotics.com/solo-drone/" target="_blank">3drobotics.com/solo-drone</a><br><br></h3>
<hr width=100% size=3 color="gray">
<a name="IV"><font color="pink"><center><h2>Curious</h2></center></font>
<font color="magenta"><h3>Drones are dangerous work in every sense - the flying camera hurt Enrique Iglesias' hand a few days ago and they had to operate on it. It was hot because of a similar gadget around the mayor of Pazardzhik Todor Popov. Reporters from bTV filmed his mansion for BGN 1.5 million in the village of Patalenitsa with a drone. God forbid, as in fantasies, machines rise up in battle against humanity. But what is a drone and is there any soil in our country? Drones are not just a working tool for paparazzi and film crews. They are also available in a beginner model that costs about a hundred dollars. More sophisticated drones start at $ 1,000. They have such functions that they become truly autonomous devices that can make their own decisions.<br>
There will probably be 30,000 drones in the United States by 2020, according to the Washington Times. According to research, it is good for the industry to produce drones so that they look more friendly and fun. In Britain, they offer to paint them in bright colors so that they do not look like military objects and startle, says the Guardian. As "Big Brother" would also look more attractive if it was in pink, Slate jokes. It is believed that their use will increase the effectiveness of the Coast Guard. In the United States, the Navy says it will catch 70 percent more refugees and drug traffickers. Israel is the largest exporter of unmanned aerial vehicles in the field of defense. The state-owned company Aerospace Industries has sold drones to more than two dozen countries around the world.</h3></font>
<center><table border="0" width=50%>
<tr>
<td>
<h4><font color="black">Breathtaking video with the sights of Bulgaria from a bird's eye view</font></h4>
<a>
<a href="http://vbox7.com/play:e802377e83" target="_blank"><img src="images.jpeg" width="100" height="50">
</a>
</td>
<td>
<h4><font color="black">YouTube drone videos</font></h4>
<a>
<a href="https://www.youtube.com/results?search_query=drone" target="_blank"><img src="youtubebutton.jpeg" width="100" height="50">
</a>
</td>
<td>
<h4><font color="black">Ranking of the best-selling drones</font></h4>
<a>
<a href="http://myfirstdrone.com/tutorials/buying-guides/best-drones-for-sale/ "target="_blank"><img src="bw8.gif" widht="50">
</a>
</td>
<td>
<h4><font color="black">e-shop for drones in Bulgaria</font></h4>
<a>
<a href="http://www.zigifly.com/magazin/dron-dronove-s-kamera-promotsia/"target="_blank"><img src="logo.png" width="100" height="50">
</a>
</td>
</tr>
</table></center>
<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
    $nameErr = "Field Required!";
   } else {
     $name = test_input($_POST["name"]);
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters allowed";
     }
   }
  
   if (empty($_POST["email"])) {
     $emailErr = "Field Required!";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid e-mail";
     }
   }
    
   if (empty($_POST["website"])) {
     $website = "";
   } else {
     $website = test_input($_POST["website"]);
     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
       $websiteErr = "Wrong URL";
     }
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Field Required!";
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

<h2>Comment:</h2>
<p><span class="error"><font color="red">*Fields are Required.</font></span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   Name: <input type="text" name="name" value="<?php echo $name;?>">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   E-mail: <input type="text" name="email" value="<?php echo $email;?>">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   Website: <input type="text" name="website" value="<?php echo $website;?>">
   <span class="error"><?php echo $websiteErr;?></span>
   <br><br>
   Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
   <br><br>
   Gender:
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female">Female
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">Male
   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Send">
</form>

<?php
echo "<h2>Your data is:</h2>";
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
<center><h2><a href="#begin">Home</a></h2></center>
<center>© 2010-<?php echo date("Y");
?> Мелек Сабит® Всички права запазени.</center>
</body>
</head>
</html>
