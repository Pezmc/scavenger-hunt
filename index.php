<?php

include("header.php");

$time=time();

if($_GET["password"]=="webteam"){

  $logs = $db->rawQuery("SELECT sid,tid,time,t.name,s.location,s.points FROM logs as l left outer join teams as t on (t.id=l.tid) left outer join scan as s on (s.id=l.sid) order by l.time desc");
  
  foreach($logs as &$l){
    $l["time"]=date("H:i:s",$l["time"]);
  }
  
  $smarty->assign("logs",$logs);
  $smarty->display('index.tpl');
  die();
}

  if(ctype_alnum($url=$_GET["url"])){

  


    $db->where('url', $url);
    $result = $db->get('scan');
    $result = $result[0];
  
    if($result["id"]){
      $_POST["id"]= $_COOKIE["teamID"] ? $_COOKIE["teamID"] : $_POST["id"];
    
      if(ctype_digit($id=$_POST["id"])){
      
      
        $team = $db->rawQuery("SELECT id,name,points,places FROM teams where id= ? limit 1",array($id));
        $team=$team[0];
        if(!$team["id"]){
          $errors[]="Could not find your team, please refer to the main page.";
          setcookie("teamID", "", time()-3600);
        }else{
          setcookie("teamID", $team["id"], $time+2*24*60*60);
        
          $check = $db->rawQuery("SELECT id FROM logs where sid= ? and tid=? limit 1",array($result["id"],$id));
          if(!$check[0]["id"]){
        
            $insertData = array(
              "tid"=>$team["id"],
              "sid"=>$result["id"],
              "time"=>$time,
            );
            $db->insert("logs",$insertData);
          
            $updateData = array(
              "points"=>$team["points"]+$result["points"],
              "places"=>$team["places"]+1
            );
            $db->where("id",$team["id"]);
            $db->update("teams",$updateData);
            $success[]="Congratz ".$team["name"].", you've earned ".$result["points"]." points! Your next location is ".$result["location"].". Go go!";
        
          
          }else $errors[]="You've already visited this place. Your next target is ".$result["location"];
          $smarty->assign("team",$team);
        }
      
      }
    
      $smarty->assign("result",$result);
    } else browser_redirect();
  
  } else {
  
    if( ($name=$_POST["team"]) && !$_COOKIE["teamID"]){
    
      if(ctype_alnum(str_replace(" ","",$name))){
      
        $insertData=array(
          "name" => $name,
          "created" => $time
        );
      
        $db->insert('teams', $insertData);
      
        $team = $db->rawQuery("SELECT id FROM teams where name= ? order by created desc",array($name));
        $team=$team[0];
        if($id=$team["id"]){
        
          $success="Team ".$name." has been registered. Your TeamID is: ".$id." (remember it)";
      
          setcookie("teamID", $team["id"], time()+2*24*60*60);
        
        }else $errors="An error took place. Please try again or contact the web team.";
      }else  $errors="Invalid team name";
  
    }else
    if($_COOKIE["teamID"] && !ctype_digit($_COOKIE["teamID"])){
      setcookie("teamID", "", time()-3600);
      browser_redirect();
    }elseif($_COOKIE["teamID"]){
      $team = $db->rawQuery("SELECT id FROM teams where id= ? ",array($_COOKIE["teamID"]));
      $team=$team[0];
      if(!$team["id"]){ 
        setcookie("teamID", "", time()-3600);
        browser_redirect();
      }
    }

    $smarty->assign("team",$_COOKIE["teamID"]);
    
    $teams = $db->rawQuery("SELECT id, name, points,places FROM teams order by points desc");

    $smarty->assign("teams",$teams);
  }


$smarty->assign(array(
      'errors' => $errors,
      'success' => $success
    ));
$smarty->display('index.tpl');

?>