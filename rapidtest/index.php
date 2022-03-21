<?php
require_once 'models/Peserta.php';

if(adaPesan()){
    $pesan = $_GET['pesan'];
} else $pesan = "";

$daftarPeserta = Peserta::getAll();

tampilkanHalamanIndex($pesan, $daftarPeserta);

function tampilkanHalamanIndex($pesan, $daftarPeserta){
  require_once 'views/view-index.php';
}

function adaPesan(){
  if(isset($_GET['pesan'])){
      return true;
  } else return false;
}