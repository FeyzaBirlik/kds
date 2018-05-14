# kds

<?php


require "kontrol.php";




$sorgu="SELECT binalar.bina_id,binalar.konum,kullanim.k_durum,yikim.yikim_sekli,binalar.risk_puani 
FROM binalar,kullanim,yikim
 WHERE binalar.k_durum=kullanim.k_durum and yikim.yikim_sekli=binalar.yikim_sekli 
 ORDER by binalar.risk_puani DESC " ;
  
$a=mysqli_query($baglan,$sorgu);

 include 'bootstrap/tasarim.php';
	



?>



 

