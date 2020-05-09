<?php 

echo "
   _____ ___.        .___               ________                      
  /  _  \\_ |__    __| _/____    ____  /  _____/_____    ____   ______
 /  /_\  \| __ \  / __ |\__  \  /    \/   \  ___\__  \  /    \ /  ___/   Coded  : ABDAN GANS
/    |    \ \_\ \/ /_/ | / __ \|   |  \    \_\  \/ __ \|   |  \\___ \    Team   : Family Attack Cyber
\____|__  /___  /\____ |(____  /___|  /\______  (____  /___|  /____  >   Github : https://github.com/abdan-gans/
        \/    \/      \/     \/     \/        \/     \/     \/     \/              
\n";
echo "1. Decimal => Biner    | 4. Oktal => Decimal    \n";
echo "2. Biner => Decimal    | 5. Hexadecimal => Oktal\n";
echo "3. Decimal => Oktal    | 6. Oktal => Hexadecimal\n";
echo "[+] Masukkan Nomor : ";
$no = trim(fgets(STDIN));
if ($no == '1') {
	echo "\n";
	include('tools/desimal-binary.php');
	exit();
} 

if ($no == '2') {
	echo "\n";
	include('tools/binary-desimal.php');
	exit();
} 

if ($no == '3') {
	echo "\n";
	include('tools/desimal-oktal.php');
	exit();
} 

if ($no == '4') {
	echo "\n";
	include('tools/oktal-desimal.php');
	exit();
} 

if ($no == '5') {
	echo "\n";
	include('tools/hexadecimal-oktal.php');
	exit();
} 

if ($no == '6') {
	echo "\n";
	include('tools/oktal-hexadecimal.php');
	exit();

} else {
	echo "\nLu Buriq\n";
}

?>