<?php
$page = (isset($_GET['page']))? $_GET['page'] : '';
switch($page){
  case 'test': // $page == home (jika isi dari $page adalah home)
  include "test.php"; // load file home.php yang ada di folder views
  break;
  
  // case 'case_selanjutnya':
  // include "views/case_selanjutnya.php";
  // break;
  
  // case 'case_selanjutnya':
  // include "views/case_selanjutnya.php";
  // break;
  
  // case 'case_selanjutnya':
  // include "views/case_selanjutnya.php";
  // break;
  
  default: // Ini untuk set default jika isi dari $page tidak ada pada 3 kondisi diatas
  include "index.php";
}
?>