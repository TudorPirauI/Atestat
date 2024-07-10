<?php

 $rasp=@$_REQUEST['intr'];
 $rasp_corecte=array(0,2,2,3,1,4,3,1,3,3);
 $pct=0;
 echo '<table border cellspacing="0" cellpadding="5">';
 for($i=1;$i<=9;$i++)
 {
	 echo "<tr";
	 if($i%2==1) echo ' bgcolor="#72D0FF"';
	 echo "><td>";
	 echo "Intrebarea ",$i,":";
	 $p=0;
	 if(!isset($rasp[$i]))echo " Nu ai raspuns la aceasta intrebare";
	 else
	 if($rasp[$i]==$rasp_corecte[$i]){echo "Raspuns corect";$p=1;}
	 else echo "Răspuns greșit. Corect era ",$rasp_corecte[$i];
	 echo "<td>Punctaj intrebare:",$p;
	 $pct+=$p;
 }
 echo "</table>";
 echo "Punctaj total: ",$pct+1;
?>