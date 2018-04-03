<?php
// appel du script de connexion
require("mysql_connect.php");                     
// On récupère le timestamp du dernier enregistrement
$sql="select max(tstamp) from data";
$query=mysqli_query($sql);                  
$list=mysql_fetch_array($query);     
// On détermine le stop et le start de façon à récupérer dans la prochaine requête que les données des dernières xx heures
$stop=$list[0];
$start=$stop-(86400*365);
// Récupération des données sur les dernières 48 heures avec un tri ascendant sur le timestamp

$sql = "SELECT tstamp, temp, deb FROM data where tstamp >= '$start' and tstamp <= '$stop' ORDER BY 1"; 

                  $query=mysqli_query($sql); 
                  $i=0;
                  while ($list = mysql_fetch_assoc($query)) { 
                  if (date("I",time())==0) { 
                   $time[$i]=($list['tstamp']+3600)*1000;
                   } 
                   else {
                   $time[$i]=($list['tstamp']+7200)*1000;
                    } 
                
$temp[$i]=$list['temp']*1;
$deb[$i]=$list['deb']*1;
$i++;
} 
 ?>

<script type="text/javascript"> 
eval(<?php echo "'var time = ".json_encode($time)."'" ?>);
eval(<?php echo "'var temp = ".json_encode($temp)."'" ?>);
eval(<?php echo "'var deb = ".json_encode($deb)."'" ?>);
</script>
