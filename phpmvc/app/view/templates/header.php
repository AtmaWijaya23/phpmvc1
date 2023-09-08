<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Halaman <?= $data['judul']?></title>
    <style>
      nav{
        background-color : black ;
        display: flex ;

      }
      nav ul li {
        list-style-type: none ;
        display: inline-block;
        padding: 10px 20px;
      }
      nav ul li a{
        color : bold ;
        text-decoration: none;
        font-weight: bold;
      }
      span{
        color : red
      }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
  
  <div class="collapse navbar-collapse" id="navbarNav" style="
  margin-left:8%;
  ">
  <a class="navbar-brand" href="<?= BASE_URL; ?>/home" style="
  margin-bottom: 4px;color : #B9B4C7 ; margin-right : 400px ; padding : 15px ; font-size :45px;
  "><b><span>Ama</span>ElMatador.</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <ul>
      <li>
        <a href="<?= BASE_URL; ?>/jurusan" style="color : white ;">Kompetensi Keahlian <span class="sr-only">(current)</span></a>
      </li>
      <li>
        <a href="<?= BASE_URL; ?>/guru" style="color : white ;">Data Guru</u></a>
      </li>
      <li>
        <a href="<?= BASE_URL; ?>/siswa" style="color : white ;">Data Siswa</a>
      </li>
      <li>
        <a href="<?= BASE_URL; ?>/user/profile" style="color : white ;">About</a>
      </li>
      
    </ul>
  </div>
</nav>