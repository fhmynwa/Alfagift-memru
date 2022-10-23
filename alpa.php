<?php


function color($color = "default" , $text = "")
    {
        $arrayColor = array(
            'grey'      => '1;30',
            'red'       => '1;31',
            'green'     => '1;32',
            'yellow'    => '1;33',
            'blue'      => '1;34',
            'purple'    => '1;35',
            'nevy'      => '1;36',
            'white'     => '1;0',
        );  
        return "\033[".$arrayColor[$color]."m".$text."\033[0m";
    }
    
awal:

sleep(1);
echo @color('yellow',"
      ──────────╔╗─────────────────
      ──────────║║─────────────────
      ╔╗╔╗╔╗╔══╗║║─╔══╗╔══╗╔╗╔╗╔══╗
      ║╚╝╚╝║║║═╣║║─║╔═╝║╔╗║║╚╝║║║═╣
      ╚╗╔╗╔╝║║═╣║╚╗║╚═╗║╚╝║║║║║║║═╣
      ─╚╝╚╝─╚══╝╚═╝╚══╝╚══╝╚╩╩╝╚══╝
      ReCode ijin dulu!\n\n\n\tPassword hub Author\n\tPrice Rp.15.000\n\tIni tidak ada garansi jika koid");
      echo "\n";
      echo "\n";
      echo @color('purple',"
           ╔══════•✭ೋೋ✭•══════╗ 
             Author by-Fhmynwa
           ╚══════•✭ೋೋ✭•══════╝\n");
      echo "\n";
      echo @color('yellow',"\tSilahkan Pilih:\n");
      echo "\n";
      echo @color('yellow',"\t[1]. Telegram Author\n\t[2]. Login / Masuk\n\t[3]. Donate ke Author\n");
      echo "\n";
      echo @color('yellow',"\tPilih (ketik angka) :");
      $pilih = trim(fgets(STDIN));
      if ($pilih == "1"){
      	sleep(1);
           echo "\n";
              	echo @color('green',"\tOtw tele author...\n");
                  system ("xdg-open https://t.me/uripkuripmu");
goto awal; }
                  else if($pilih == "2"){
                  	sleep(1);
                  echo "\n";
              	echo @color('green',"\tOtw login...\n"); 
                   sleep (1);
                   goto pw;}
                   else if($pilih == "3"){
                   	echo "\n";
              	echo @color('green',"\tOtw Donasi ke author...\n");
                  system ("xdg-open https://saweria.co/fahmynwa");
goto awal;}
                  else {echo @color('red',"\tMasukkan dengan benar\n");}
                  echo "\n";
                  echo "\n";
                  echo "\n";
                  
       pw:
      echo "\n";
      echo @color('yellow',"\tKetik [n] Untuk kembali\n\tke menu awal\n");
echo @color('green',"\tMasukkan Password mu Lek\n\t➤Ketik :");
$pel = trim(fgets(STDIN));
if ($pel == "Hayo bayar sek cok asu recode asu"){
	echo @color('green',"\tHore berhasil");
	goto awal;}
	else if ($pel == "n"){sleep (1); goto awal;}
	else {
sleep(1);
echo @color('red',"\tPassword Kamu Salah\n\tSilahkan Hubungi author\n");
sleep(2);
goto pw;}
	
      
    