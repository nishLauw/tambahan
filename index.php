<?php
session_start();
if($_SESSION['status']!='login'){
    header('location:login.php');
}
?>
 
 
<html>
<style  type="text/css">
  button{
    display: inline-block;
    background: #4285F4;
    color: #fff;
    width: 240px;
    height: 50px;
    border-radius: 5px;
    border: thin solid #888;
    box-shadow: 1px 1px 1px grey;
    white-space: nowrap;
    font-size: 16px;
    font-weight: normal;
    font-family: 'Roboto', sans-serif;
    margin: 0.1rem 0;
  }
</style>
    <body>
        <h1>Menu aplikasi</h1>
 
        <p>Selamat datang : <?php  echo $_SESSION['username'] ?></p>
 
        <a href="matkul"><button>Data Mata Kuliah</button></a><br><br>
        <a href="dosen"><button>Data Dosen</button></a><br><br>
        <a href="jadwal"><button>Data Jadwal</button></a><br><br>
        <a href="mahasiswa"><button>Data Mahasiswa</button></a><br><br>
        <a href="semester"><button>Data Semester</button></a><br><br>
        <a href="krs"><button>KRS</button></a>
    </body>
 
    <p><a href="logout.php">Keluar/Logut</a></p>
   
</html>