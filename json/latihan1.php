<?php
  // $mahasiswa = 
  // [
  //   [
  //     "nama" => "Riky Permana", 
  //     "Nim" => "2013112008",
  //     "email" => "rikky.putra14@mail.com"
  //   ],
  //   [
  //     "nama" => "Riky Permana", 
  //     "Nim" => "2013112008",
  //     "email" => "rikky.putra14@mail.com"
  //   ]
  // ];

$dbh = new PDO('mysql:host=localhost;dbname=db_laravelapp', 'root');
$db = $dbh->prepare('SELECT * FROM siswa');
$db->execute();
$siswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data =  json_encode($siswa);
echo $data;

?>