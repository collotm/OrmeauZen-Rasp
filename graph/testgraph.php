<?php
//appel du script de connexion
require("dbh.inc.php");
//on recupere le timestamp du dernier enregistrement
$sql="select max(id_valeur) from bassin1";
$query=mysql_query($sql);
$list=mysql_fetch_array($query);
// On détermine le stop et le start de façon à récupérer dans la prochaine requête que les données des dernières xx heures
$stop=$list[0];
$start=$stop-(86400*2);//86400=24 heures donc 86400*2=48 heures
// Récupération des données sur les dernières 48 heures avec un tri ascendant sur la valeur de donnée
$sql = "SELECT id_valeur, capt_temp, capt_time FROM bassin1 where id_valeur >= '$start' and  id_valeur <= '$stop' ORDER BY 1";  
$query=mysql_query($sql);                   
$i=0;
while ($list = mysql_fetch_assoc($query)) {      
if (date("I",time())==0) { 
	$time[$i]=($list['id_valeur']+3600)*1000;
	} 
else {
	$time[$i]=($list['id_valeur']+7200)*1000;
  } 
$capt_temp[$i]=$list['capt_temp']*1;
$capt_time[$i]=$list['capt_time']*1;

$i++;
} 
?>