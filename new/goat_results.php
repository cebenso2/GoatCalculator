<?php

include 'connect.php';

$scoring=$_GET["scoring"];
$shooting=$_GET["shooting"];
$team=$_GET["team"];
$longevity=$_GET["longevity"];
$defense=$_GET["defense"];

$db=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

$m_l= mysqli_fetch_assoc(mysqli_query($db, "select max(lscore) as m from Longevity"))['m'];
$m_s= mysqli_fetch_assoc(mysqli_query($db, "select max(sscore) as m from Scoring"))['m'];
$m_sh= mysqli_fetch_assoc(mysqli_query($db, "select max(shscore) as m from Shooting"))['m'];
$m_t= mysqli_fetch_assoc(mysqli_query($db, "select max(tscore) as m from Team"))['m'];
$m_d= mysqli_fetch_assoc(mysqli_query($db, "select max(dscore) as m from Defense"))['m'];

$query = "SELECT Longevity.player,Longevity.lscore/$m_l as lscore, Scoring.sscore/$m_s as sscore, Shooting.shscore/$m_sh as shscore, Team.tscore/$m_t as tscore, Defense.dscore/$m_d as dscore, $longevity/100*Longevity.lscore/$m_l + $shooting/100*Shooting.shscore/$m_sh + $scoring/100*Scoring.sscore/$m_s + $team/100*Team.tscore/$m_t + $defense/100*Defense.dscore/$m_d as GOAT_score 
FROM Longevity
	JOIN Scoring
		ON Longevity.player = Scoring.player
	JOIN Shooting
		ON Longevity.player = Shooting.player
	JOIN Team
		ON Longevity.player = Team.player
	JOIN Defense
		ON Longevity.player = Defense.player 
Order by GOAT_Score DESC Limit 5";

$start = microtime(true);
$result1=mysqli_query($db,$query);
$num=mysqli_num_rows($result1);
$row = mysqli_fetch_assoc($result1);
$goat=$row['Player'];
$gs= number_format($row['GOAT_score']*100,2,'.','');
$s= number_format($row['sscore']*100,2,'.','');
$sh= number_format($row['shscore']*100,2,'.','');
$l= number_format($row['lscore']*100,2,'.','');
$t= number_format($row['tscore']*100,2,'.','');
$d= number_format($row['dscore']*100,2,'.','');
mysqli_data_seek($result1,0); 

$username=$_SESSION['username'];
if(isset($_SESSION['username']))
{
   	$query = "INSERT INTO GoatHistory (`Username`, `goat_name`,`Scoring`,`Shooting`,`Team`,`Defense`,`Longevity`,`Goat_score`)
    		VALUES ('$username', '$goat', $s, $sh, $t,$d,$l, $gs) on DUPLICATE key update c=c+1";
	mysqli_query($db, $query);
	$query="Select query_count from users where user_name='$username'";
    	$count=mysqli_fetch_assoc(mysqli_query($db, $query))['query_count'];
	$query="UPDATE users SET query_count=query_count+1 WHERE user_name='$username'";
    	mysqli_query($db, $query);
    	if($count==4){
    		$query="select avg(scoring) as s,avg(shooting) as sh,avg(team) as t,avg(defense) as d,avg(longevity) as l from GoatHistory where Username='$username'";
		$result=mysqli_query($db, $query);
		$averages=mysqli_fetch_assoc($result);
		$stats=array(
		 "Scoring"=>$averages['s'],
		"Shooting"=>$averages['sh'],
		"Team"=> $averages['t'],
		"Defense"=> $averages['d'],
		"Longevity"=> $averages['l']);
		#var_dump($stats);
		arsort($stats);
		#var_dump($stats);
		$count=0;
		foreach($stats as $k => $v){
			
			if($count==0){
				$p1=$k;
			}
			if($count==1){
				$p2=$k;
			}
			$count+=1;
		}
		$query="UPDATE users SET Preference1='$p1',Preference2='$p2' WHERE user_name='$username'";
		$result=mysqli_query($db, $query);
		
    	}
    	
    	
}x






?>