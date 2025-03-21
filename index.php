<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Aktif İlanlar</title>

<link rel="stylesheet" href="css/bootstrap.css">
<script type="text/javascript" src="ckeditor/ckeditor.js"></script><style>.cke{visibility:hidden;}</style>
<link rel="stylesheet" href="css/bootstrap-theme.css">
<link href="css/bootstrap-tagsinput.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link href="css/dist/lity.css" rel="stylesheet">
<script src="css/dist/vendor/jquery.js"></script>
<script src="css/dist/lity.js"></script> 	
<link rel="stylesheet" href="sweetalert/sweetalert.css">
<script src="sweetalert/sweetalert.min.js"></script>
<script src="js/jquery-ui.js"></script>
<style type="text/css">
.grid-container {display: grid;margin-bottom: 15px;}
.grid-item {border: 1px solid #fff; color: #fff; }

@media only screen and (max-width: 399px) {
.grid-container {grid-template-columns: repeat(3, 1fr);}
.vitrindekiler-photo {pointer-events: none;height: 180px;}
}
@media only screen and (min-width: 400px) {
.grid-container {grid-template-columns: repeat(3, 1fr);}
.vitrindekiler-photo {pointer-events: none;height: 220px;}
}
@media only screen and (min-width: 600px) {
.grid-container {grid-template-columns: repeat(4, 1fr);}
.vitrindekiler-photo {pointer-events: none;height: 240px;}
}
@media only screen and (min-width: 900px) {
.grid-container {grid-template-columns: repeat(6, 1fr);}
.vitrindekiler-photo {pointer-events: none;height: 220px;}
}

@media only screen and (min-width: 1200px) {
.grid-container {grid-template-columns: repeat(6, 1fr);}
.vitrindekiler-photo {pointer-events: none;height: 280px;}
}

.vitrindekiler {position: relative;overflow: hidden; border-radius: 0 0 6px 6px;}

.vitrindekiler-square-box {
margin-right: 12px;
}
ul {list-style: none;margin:0;padding:0;}
.img-square {
border-radius: 50%;
}

.vitrindekiler-title {text-align: center;}

.vitrindekiler-title-text {
font-size: 16px;
font-weight: 600;
margin: 0;
}
.vitrindekiler-photo__SubTitle {
position: absolute;
top: 0;
left: 0;
width: 100%;
padding: 5px 2px;
font-size: 12px;
color: #ffffff;
font-weight: bold;
text-align: center;
z-index: 2;
height: 25%;
background-image: linear-gradient(1deg, rgba(250, 217, 97, 0.00) 21%, #000000 98%);
}
.vitrindekiler2--phone {font-size: 0.7em;color: #fff;background: rgba(0, 0, 0,.5);text-shadow: 0 0 6px rgba(0, 0, 0, 0.20);white-space: nowrap;margin: 0 auto;text-align: center;padding: 4px;}

.vitrindekiler-phone-text {
font-size: 20px;
color: #fff;
z-index: 2;
}

@media (max-width: 600px) {
.vitrindekiler-phone-text {
font-size: 16px;
}
}

.vitrindekiler-phone-bg {
position: relative;
}

.vitrindekiler-title-text {
color: #fff;
padding: 5px;
}

.vitrindekiler2--title {font-size: 0.6em;color: yellow;margin-bottom: 3px;text-shadow: 0 0 6px rgba(0, 0, 0, 0.35);}
.vitrindekiler2--subtext {font-size: 0.5em;color: #fff;}
.vitrindekiler2__Content {position: absolute;bottom: 0;/* left: 0; */width: 100%;padding: 0;z-index: 3;font-size: 16px;}
@media (max-width: 600px) {
.vitrindekiler2__Content {font-size: 14px;}
}
@media (max-width: 320px) {
.vitrindekiler2__Content {font-size: 13px;}
}

.vitrin_kapak{display:block;min-width:100%;min-height:100%;}
.Kapak{object-fit:cover;}



.sortable { cursor: move; }
</style>
<script type="text/javascript">
$(document).ready(function() {
$("#listele").sortable({ revert:'true', opacity:'1', placeholder:'ui-state-highlight',
update: function() {
var order = $(this).sortable('serialize');
$.post("siraguncelle.php",order,function(returnMsg){
swal( 'Yeniden sıralandı' );
});
}
});
});
</script>

</head>
<body>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand"><strong>ORTAK VİTRİN</strong></a>
</div>
<div id="navbar" class="collapse navbar-collapse">
<ul class="nav navbar-nav">
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">İlan Yönetimi <span class="caret"></span> </a>
<ul class="dropdown-menu">
<li><a href="ilanlar.php">Aktif İlanlar  ⇒ <span class="label label-success"> 
21</span></a></li>
<li class="divider"></li>
<li><a href="pasif-ilanlar.php">Pasif İlanlar  ⇒ <span class="label label-danger">
0</span></a></li>	
</ul>
</li>
<li><a href="ilan-ekle.php">Yeni İlan Ekle</a></li>
<li><a href="ozellikler.php">Ekstra İlan Özellikleri</a></li>				
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Makale Asistanı <span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="makaleasistani.php">Yeni Makale Yazdır</a></li>
<li><a href="belgeler.php">Kayıtlı Belgeler</a></li>             
</ul>
</li>
<li><a href="../" target="_blank">Vitrini Gör</a></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ayarlar <span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="sitebilgileri.php">Site Bilgileri</a></li>
<li><a href="adminbilgileri.php">Yönetici Bilgileri</a></li>             
</ul>
</li>
<li><a href="cikis.php">Çıkış</a></li>				
</ul>	

</div>
</div>
</nav>
<div class="container-fuild">

<div class="starter-template">



<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">AKTİF İLANLAR</h3>
</div>
<div class="panel-body" style="padding: 1px!important;">

<div class="grid-container ui-sortable" id="listele">
<div id="listele_1">
<div class="grid-item">

<div style="background:#363636;padding:5px;">
<div class="btn btn-xxs btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sıra">#1</div>

<a href="ilangaleri.php?id=1" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-warning" data-original-title="Galeri"><span class="glyphicon glyphicon-camera"></span></a>

<a href="ilanduzenle.php?id=1" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-primary" data-original-title="Düzenle"><span class="glyphicon glyphicon-pencil"></span></a>

<a href="#" title="" data-toggle="tooltip" data-placement="top" class="btn btn-danger btn-xxs silbuton" id="1" data-original-title="Sil"><span class="glyphicon glyphicon-remove"></span></a>

</div>


<div class="vitrindekiler sortable">
<div class="vitrindekiler-photo">
<picture>
<source srcset="../uploads/istanbul-escort-cansu.jpg" type="image/jpeg"> 
<img src="../uploads/istanbul-escort-cansu.jpg" alt="cansu" class="vitrin_kapak Kapak cover" width="152" height="200">
</picture>
</div>
<div class="vitrindekiler2__Content">
<div class="vitrindekiler-title">
<div class="vitrindekiler2--title">Kalan Gün: 26</div>
<div class="vitrindekiler2--phone">cansu</div>
</div>
</div>
</div>
</div>
</div>
<div id="listele_21">
<div class="grid-item">

<div style="background:#363636;padding:5px;">
<div class="btn btn-xxs btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sıra">#2</div>

<a href="ilangaleri.php?id=21" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-warning" data-original-title="Galeri"><span class="glyphicon glyphicon-camera"></span></a>

<a href="ilanduzenle.php?id=21" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-primary" data-original-title="Düzenle"><span class="glyphicon glyphicon-pencil"></span></a>

<a href="#" title="" data-toggle="tooltip" data-placement="top" class="btn btn-danger btn-xxs silbuton" id="21" data-original-title="Sil"><span class="glyphicon glyphicon-remove"></span></a>

</div>


<div class="vitrindekiler sortable">
<div class="vitrindekiler-photo">
<picture>
<source srcset="../uploads/istanbul-escort-roza.jpg" type="image/jpeg"> 
<img src="../uploads/istanbul-escort-roza.jpg" alt="ROZA" class="vitrin_kapak Kapak cover" width="152" height="200">
</picture>
</div>
<div class="vitrindekiler2__Content">
<div class="vitrindekiler-title">
<div class="vitrindekiler2--title">Kalan Gün: -21</div>
<div class="vitrindekiler2--phone">ROZA</div>
</div>
</div>
</div>
</div>
</div>
<div id="listele_14">
<div class="grid-item">

<div style="background:#363636;padding:5px;">
<div class="btn btn-xxs btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sıra">#3</div>

<a href="ilangaleri.php?id=14" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-warning" data-original-title="Galeri"><span class="glyphicon glyphicon-camera"></span></a>

<a href="ilanduzenle.php?id=14" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-primary" data-original-title="Düzenle"><span class="glyphicon glyphicon-pencil"></span></a>

<a href="#" title="" data-toggle="tooltip" data-placement="top" class="btn btn-danger btn-xxs silbuton" id="14" data-original-title="Sil"><span class="glyphicon glyphicon-remove"></span></a>

</div>


<div class="vitrindekiler sortable">
<div class="vitrindekiler-photo">
<picture>
<source srcset="../uploads/istanbul-escort-bayan-belkiz.jpg" type="image/jpeg"> 
<img src="../uploads/istanbul-escort-bayan-belkiz.jpg" alt="REKLAM ALANI" class="vitrin_kapak Kapak cover" width="152" height="200">
</picture>
</div>
<div class="vitrindekiler2__Content">
<div class="vitrindekiler-title">
<div class="vitrindekiler2--title">Kalan Gün: 28</div>
<div class="vitrindekiler2--phone">REKLAM ALANI</div>
</div>
</div>
</div>
</div>
</div>
<div id="listele_16">
<div class="grid-item">

<div style="background:#363636;padding:5px;">
<div class="btn btn-xxs btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sıra">#4</div>

<a href="ilangaleri.php?id=16" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-warning" data-original-title="Galeri"><span class="glyphicon glyphicon-camera"></span></a>

<a href="ilanduzenle.php?id=16" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-primary" data-original-title="Düzenle"><span class="glyphicon glyphicon-pencil"></span></a>

<a href="#" title="" data-toggle="tooltip" data-placement="top" class="btn btn-danger btn-xxs silbuton" id="16" data-original-title="Sil"><span class="glyphicon glyphicon-remove"></span></a>

</div>


<div class="vitrindekiler sortable">
<div class="vitrindekiler-photo">
<picture>
<source srcset="../uploads/istanbul-escort-bayan-tugce.jpg" type="image/jpeg"> 
<img src="../uploads/istanbul-escort-bayan-tugce.jpg" alt="Tuğçe" class="vitrin_kapak Kapak cover" width="152" height="200">
</picture>
</div>
<div class="vitrindekiler2__Content">
<div class="vitrindekiler-title">
<div class="vitrindekiler2--title">Kalan Gün: 29</div>
<div class="vitrindekiler2--phone">Tuğçe</div>
</div>
</div>
</div>
</div>
</div>
<div id="listele_18">
<div class="grid-item">

<div style="background:#363636;padding:5px;">
<div class="btn btn-xxs btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sıra">#5</div>

<a href="ilangaleri.php?id=18" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-warning" data-original-title="Galeri"><span class="glyphicon glyphicon-camera"></span></a>

<a href="ilanduzenle.php?id=18" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-primary" data-original-title="Düzenle"><span class="glyphicon glyphicon-pencil"></span></a>

<a href="#" title="" data-toggle="tooltip" data-placement="top" class="btn btn-danger btn-xxs silbuton" id="18" data-original-title="Sil"><span class="glyphicon glyphicon-remove"></span></a>

</div>


<div class="vitrindekiler sortable">
<div class="vitrindekiler-photo">
<picture>
<source srcset="../uploads/istanbul-escort-monica.jpg" type="image/jpeg"> 
<img src="../uploads/istanbul-escort-monica.jpg" alt="MONİCA" class="vitrin_kapak Kapak cover" width="152" height="200">
</picture>
</div>
<div class="vitrindekiler2__Content">
<div class="vitrindekiler-title">
<div class="vitrindekiler2--title">Kalan Gün: 29</div>
<div class="vitrindekiler2--phone">MONİCA</div>
</div>
</div>
</div>
</div>
</div>
<div id="listele_11">
<div class="grid-item">

<div style="background:#363636;padding:5px;">
<div class="btn btn-xxs btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sıra">#6</div>

<a href="ilangaleri.php?id=11" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-warning" data-original-title="Galeri"><span class="glyphicon glyphicon-camera"></span></a>

<a href="ilanduzenle.php?id=11" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-primary" data-original-title="Düzenle"><span class="glyphicon glyphicon-pencil"></span></a>

<a href="#" title="" data-toggle="tooltip" data-placement="top" class="btn btn-danger btn-xxs silbuton" id="11" data-original-title="Sil"><span class="glyphicon glyphicon-remove"></span></a>

</div>


<div class="vitrindekiler sortable">
<div class="vitrindekiler-photo">
<picture>
<source srcset="../uploads/istanbul-escort-bayan-filiz.jpg" type="image/jpeg"> 
<img src="../uploads/istanbul-escort-bayan-filiz.jpg" alt="REKLAM ALANI" class="vitrin_kapak Kapak cover" width="152" height="200">
</picture>
</div>
<div class="vitrindekiler2__Content">
<div class="vitrindekiler-title">
<div class="vitrindekiler2--title">Kalan Gün: 28</div>
<div class="vitrindekiler2--phone">REKLAM ALANI</div>
</div>
</div>
</div>
</div>
</div>
<div id="listele_15">
<div class="grid-item">

<div style="background:#363636;padding:5px;">
<div class="btn btn-xxs btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sıra">#7</div>

<a href="ilangaleri.php?id=15" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-warning" data-original-title="Galeri"><span class="glyphicon glyphicon-camera"></span></a>

<a href="ilanduzenle.php?id=15" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-primary" data-original-title="Düzenle"><span class="glyphicon glyphicon-pencil"></span></a>

<a href="#" title="" data-toggle="tooltip" data-placement="top" class="btn btn-danger btn-xxs silbuton" id="15" data-original-title="Sil"><span class="glyphicon glyphicon-remove"></span></a>

</div>


<div class="vitrindekiler sortable">
<div class="vitrindekiler-photo">
<picture>
<source srcset="../uploads/istanbul-escort-bayan-kader.jpg" type="image/jpeg"> 
<img src="../uploads/istanbul-escort-bayan-kader.jpg" alt="Kader" class="vitrin_kapak Kapak cover" width="152" height="200">
</picture>
</div>
<div class="vitrindekiler2__Content">
<div class="vitrindekiler-title">
<div class="vitrindekiler2--title">Kalan Gün: 28</div>
<div class="vitrindekiler2--phone">Kader</div>
</div>
</div>
</div>
</div>
</div>
<div id="listele_12">
<div class="grid-item">

<div style="background:#363636;padding:5px;">
<div class="btn btn-xxs btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sıra">#8</div>

<a href="ilangaleri.php?id=12" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-warning" data-original-title="Galeri"><span class="glyphicon glyphicon-camera"></span></a>

<a href="ilanduzenle.php?id=12" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-primary" data-original-title="Düzenle"><span class="glyphicon glyphicon-pencil"></span></a>

<a href="#" title="" data-toggle="tooltip" data-placement="top" class="btn btn-danger btn-xxs silbuton" id="12" data-original-title="Sil"><span class="glyphicon glyphicon-remove"></span></a>

</div>


<div class="vitrindekiler sortable">
<div class="vitrindekiler-photo">
<picture>
<source srcset="../uploads/istanbul-escort-bayan-derin.jpg" type="image/jpeg"> 
<img src="../uploads/istanbul-escort-bayan-derin.jpg" alt="REKLAM ALANI" class="vitrin_kapak Kapak cover" width="152" height="200">
</picture>
</div>
<div class="vitrindekiler2__Content">
<div class="vitrindekiler-title">
<div class="vitrindekiler2--title">Kalan Gün: 28</div>
<div class="vitrindekiler2--phone">REKLAM ALANI</div>
</div>
</div>
</div>
</div>
</div>
<div id="listele_17">
<div class="grid-item">

<div style="background:#363636;padding:5px;">
<div class="btn btn-xxs btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sıra">#9</div>

<a href="ilangaleri.php?id=17" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-warning" data-original-title="Galeri"><span class="glyphicon glyphicon-camera"></span></a>

<a href="ilanduzenle.php?id=17" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-primary" data-original-title="Düzenle"><span class="glyphicon glyphicon-pencil"></span></a>

<a href="#" title="" data-toggle="tooltip" data-placement="top" class="btn btn-danger btn-xxs silbuton" id="17" data-original-title="Sil"><span class="glyphicon glyphicon-remove"></span></a>

</div>


<div class="vitrindekiler sortable">
<div class="vitrindekiler-photo">
<picture>
<source srcset="../uploads/istanbul-escort-bayan-dilber.jpg" type="image/jpeg"> 
<img src="../uploads/istanbul-escort-bayan-dilber.jpg" alt="DENİZ" class="vitrin_kapak Kapak cover" width="152" height="200">
</picture>
</div>
<div class="vitrindekiler2__Content">
<div class="vitrindekiler-title">
<div class="vitrindekiler2--title">Kalan Gün: 29</div>
<div class="vitrindekiler2--phone">DENİZ</div>
</div>
</div>
</div>
</div>
</div>
<div id="listele_19">
<div class="grid-item">

<div style="background:#363636;padding:5px;">
<div class="btn btn-xxs btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sıra">#10</div>

<a href="ilangaleri.php?id=19" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-warning" data-original-title="Galeri"><span class="glyphicon glyphicon-camera"></span></a>

<a href="ilanduzenle.php?id=19" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-primary" data-original-title="Düzenle"><span class="glyphicon glyphicon-pencil"></span></a>

<a href="#" title="" data-toggle="tooltip" data-placement="top" class="btn btn-danger btn-xxs silbuton" id="19" data-original-title="Sil"><span class="glyphicon glyphicon-remove"></span></a>

</div>


<div class="vitrindekiler sortable">
<div class="vitrindekiler-photo">
<picture>
<source srcset="../uploads/istanbul-escort-bayan-tanya_1.jpg" type="image/jpeg"> 
<img src="../uploads/istanbul-escort-bayan-tanya_1.jpg" alt="TANYA" class="vitrin_kapak Kapak cover" width="152" height="200">
</picture>
</div>
<div class="vitrindekiler2__Content">
<div class="vitrindekiler-title">
<div class="vitrindekiler2--title">Kalan Gün: 29</div>
<div class="vitrindekiler2--phone">TANYA</div>
</div>
</div>
</div>
</div>
</div>
<div id="listele_7">
<div class="grid-item">

<div style="background:#363636;padding:5px;">
<div class="btn btn-xxs btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sıra">#11</div>

<a href="ilangaleri.php?id=7" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-warning" data-original-title="Galeri"><span class="glyphicon glyphicon-camera"></span></a>

<a href="ilanduzenle.php?id=7" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-primary" data-original-title="Düzenle"><span class="glyphicon glyphicon-pencil"></span></a>

<a href="#" title="" data-toggle="tooltip" data-placement="top" class="btn btn-danger btn-xxs silbuton" id="7" data-original-title="Sil"><span class="glyphicon glyphicon-remove"></span></a>

</div>


<div class="vitrindekiler sortable">
<div class="vitrindekiler-photo">
<picture>
<source srcset="../uploads/istanbul-escort-meltem.jpg" type="image/jpeg"> 
<img src="../uploads/istanbul-escort-meltem.jpg" alt="MELTEM" class="vitrin_kapak Kapak cover" width="152" height="200">
</picture>
</div>
<div class="vitrindekiler2__Content">
<div class="vitrindekiler-title">
<div class="vitrindekiler2--title">Kalan Gün: 26</div>
<div class="vitrindekiler2--phone">MELTEM</div>
</div>
</div>
</div>
</div>
</div>
<div id="listele_13">
<div class="grid-item">

<div style="background:#363636;padding:5px;">
<div class="btn btn-xxs btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sıra">#12</div>

<a href="ilangaleri.php?id=13" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-warning" data-original-title="Galeri"><span class="glyphicon glyphicon-camera"></span></a>

<a href="ilanduzenle.php?id=13" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-primary" data-original-title="Düzenle"><span class="glyphicon glyphicon-pencil"></span></a>

<a href="#" title="" data-toggle="tooltip" data-placement="top" class="btn btn-danger btn-xxs silbuton" id="13" data-original-title="Sil"><span class="glyphicon glyphicon-remove"></span></a>

</div>


<div class="vitrindekiler sortable">
<div class="vitrindekiler-photo">
<picture>
<source srcset="../uploads/istanbul-escort-bayan-leyla.jpg" type="image/jpeg"> 
<img src="../uploads/istanbul-escort-bayan-leyla.jpg" alt="REKLAM ALANI" class="vitrin_kapak Kapak cover" width="152" height="200">
</picture>
</div>
<div class="vitrindekiler2__Content">
<div class="vitrindekiler-title">
<div class="vitrindekiler2--title">Kalan Gün: 28</div>
<div class="vitrindekiler2--phone">REKLAM ALANI</div>
</div>
</div>
</div>
</div>
</div>
<div id="listele_3">
<div class="grid-item">

<div style="background:#363636;padding:5px;">
<div class="btn btn-xxs btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sıra">#13</div>

<a href="ilangaleri.php?id=3" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-warning" data-original-title="Galeri"><span class="glyphicon glyphicon-camera"></span></a>

<a href="ilanduzenle.php?id=3" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-primary" data-original-title="Düzenle"><span class="glyphicon glyphicon-pencil"></span></a>

<a href="#" title="" data-toggle="tooltip" data-placement="top" class="btn btn-danger btn-xxs silbuton" id="3" data-original-title="Sil"><span class="glyphicon glyphicon-remove"></span></a>

</div>


<div class="vitrindekiler sortable">
<div class="vitrindekiler-photo">
<picture>
<source srcset="../uploads/istanbul-escort-nalan.jpg" type="image/jpeg"> 
<img src="../uploads/istanbul-escort-nalan.jpg" alt="NALAN" class="vitrin_kapak Kapak cover" width="152" height="200">
</picture>
</div>
<div class="vitrindekiler2__Content">
<div class="vitrindekiler-title">
<div class="vitrindekiler2--title">Kalan Gün: 26</div>
<div class="vitrindekiler2--phone">NALAN</div>
</div>
</div>
</div>
</div>
</div>
<div id="listele_20">
<div class="grid-item">

<div style="background:#363636;padding:5px;">
<div class="btn btn-xxs btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sıra">#14</div>

<a href="ilangaleri.php?id=20" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-warning" data-original-title="Galeri"><span class="glyphicon glyphicon-camera"></span></a>

<a href="ilanduzenle.php?id=20" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-primary" data-original-title="Düzenle"><span class="glyphicon glyphicon-pencil"></span></a>

<a href="#" title="" data-toggle="tooltip" data-placement="top" class="btn btn-danger btn-xxs silbuton" id="20" data-original-title="Sil"><span class="glyphicon glyphicon-remove"></span></a>

</div>


<div class="vitrindekiler sortable">
<div class="vitrindekiler-photo">
<picture>
<source srcset="../uploads/istanbul-escort-peri_1.jpg" type="image/jpeg"> 
<img src="../uploads/istanbul-escort-peri_1.jpg" alt="PERİ" class="vitrin_kapak Kapak cover" width="152" height="200">
</picture>
</div>
<div class="vitrindekiler2__Content">
<div class="vitrindekiler-title">
<div class="vitrindekiler2--title">Kalan Gün: 29</div>
<div class="vitrindekiler2--phone">PERİ</div>
</div>
</div>
</div>
</div>
</div>
<div id="listele_8">
<div class="grid-item">

<div style="background:#363636;padding:5px;">
<div class="btn btn-xxs btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sıra">#15</div>

<a href="ilangaleri.php?id=8" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-warning" data-original-title="Galeri"><span class="glyphicon glyphicon-camera"></span></a>

<a href="ilanduzenle.php?id=8" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-primary" data-original-title="Düzenle"><span class="glyphicon glyphicon-pencil"></span></a>

<a href="#" title="" data-toggle="tooltip" data-placement="top" class="btn btn-danger btn-xxs silbuton" id="8" data-original-title="Sil"><span class="glyphicon glyphicon-remove"></span></a>

</div>


<div class="vitrindekiler sortable">
<div class="vitrindekiler-photo">
<picture>
<source srcset="../uploads/istanbul-escort-mira.jpg" type="image/jpeg"> 
<img src="../uploads/istanbul-escort-mira.jpg" alt="REKLAM ALANI" class="vitrin_kapak Kapak cover" width="152" height="200">
</picture>
</div>
<div class="vitrindekiler2__Content">
<div class="vitrindekiler-title">
<div class="vitrindekiler2--title">Kalan Gün: 26</div>
<div class="vitrindekiler2--phone">REKLAM ALANI</div>
</div>
</div>
</div>
</div>
</div>
<div id="listele_9">
<div class="grid-item">

<div style="background:#363636;padding:5px;">
<div class="btn btn-xxs btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sıra">#16</div>

<a href="ilangaleri.php?id=9" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-warning" data-original-title="Galeri"><span class="glyphicon glyphicon-camera"></span></a>

<a href="ilanduzenle.php?id=9" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-primary" data-original-title="Düzenle"><span class="glyphicon glyphicon-pencil"></span></a>

<a href="#" title="" data-toggle="tooltip" data-placement="top" class="btn btn-danger btn-xxs silbuton" id="9" data-original-title="Sil"><span class="glyphicon glyphicon-remove"></span></a>

</div>


<div class="vitrindekiler sortable">
<div class="vitrindekiler-photo">
<picture>
<source srcset="../uploads/istanbul-escort-banu.jpg" type="image/jpeg"> 
<img src="../uploads/istanbul-escort-banu.jpg" alt="REKLAM ALANI" class="vitrin_kapak Kapak cover" width="152" height="200">
</picture>
</div>
<div class="vitrindekiler2__Content">
<div class="vitrindekiler-title">
<div class="vitrindekiler2--title">Kalan Gün: 26</div>
<div class="vitrindekiler2--phone">REKLAM ALANI</div>
</div>
</div>
</div>
</div>
</div>
<div id="listele_10">
<div class="grid-item">

<div style="background:#363636;padding:5px;">
<div class="btn btn-xxs btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sıra">#17</div>

<a href="ilangaleri.php?id=10" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-warning" data-original-title="Galeri"><span class="glyphicon glyphicon-camera"></span></a>

<a href="ilanduzenle.php?id=10" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-primary" data-original-title="Düzenle"><span class="glyphicon glyphicon-pencil"></span></a>

<a href="#" title="" data-toggle="tooltip" data-placement="top" class="btn btn-danger btn-xxs silbuton" id="10" data-original-title="Sil"><span class="glyphicon glyphicon-remove"></span></a>

</div>


<div class="vitrindekiler sortable">
<div class="vitrindekiler-photo">
<picture>
<source srcset="../uploads/istanbul-escort-bayan-hira.jpg" type="image/jpeg"> 
<img src="../uploads/istanbul-escort-bayan-hira.jpg" alt="REKLAM ALANI" class="vitrin_kapak Kapak cover" width="152" height="200">
</picture>
</div>
<div class="vitrindekiler2__Content">
<div class="vitrindekiler-title">
<div class="vitrindekiler2--title">Kalan Gün: 28</div>
<div class="vitrindekiler2--phone">REKLAM ALANI</div>
</div>
</div>
</div>
</div>
</div>
<div id="listele_2">
<div class="grid-item">

<div style="background:#363636;padding:5px;">
<div class="btn btn-xxs btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sıra">#18</div>

<a href="ilangaleri.php?id=2" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-warning" data-original-title="Galeri"><span class="glyphicon glyphicon-camera"></span></a>

<a href="ilanduzenle.php?id=2" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-primary" data-original-title="Düzenle"><span class="glyphicon glyphicon-pencil"></span></a>

<a href="#" title="" data-toggle="tooltip" data-placement="top" class="btn btn-danger btn-xxs silbuton" id="2" data-original-title="Sil"><span class="glyphicon glyphicon-remove"></span></a>

</div>


<div class="vitrindekiler sortable">
<div class="vitrindekiler-photo">
<picture>
<source srcset="../uploads/istanbul-escort-bahar.jpg" type="image/jpeg"> 
<img src="../uploads/istanbul-escort-bahar.jpg" alt="BAHAR" class="vitrin_kapak Kapak cover" width="152" height="200">
</picture>
</div>
<div class="vitrindekiler2__Content">
<div class="vitrindekiler-title">
<div class="vitrindekiler2--title">Kalan Gün: 26</div>
<div class="vitrindekiler2--phone">BAHAR</div>
</div>
</div>
</div>
</div>
</div>
<div id="listele_6">
<div class="grid-item">

<div style="background:#363636;padding:5px;">
<div class="btn btn-xxs btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sıra">#19</div>

<a href="ilangaleri.php?id=6" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-warning" data-original-title="Galeri"><span class="glyphicon glyphicon-camera"></span></a>

<a href="ilanduzenle.php?id=6" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-primary" data-original-title="Düzenle"><span class="glyphicon glyphicon-pencil"></span></a>

<a href="#" title="" data-toggle="tooltip" data-placement="top" class="btn btn-danger btn-xxs silbuton" id="6" data-original-title="Sil"><span class="glyphicon glyphicon-remove"></span></a>

</div>


<div class="vitrindekiler sortable">
<div class="vitrindekiler-photo">
<picture>
<source srcset="../uploads/istanbul-escort-meral.jpg" type="image/jpeg"> 
<img src="../uploads/istanbul-escort-meral.jpg" alt="REKLAM ALANI" class="vitrin_kapak Kapak cover" width="152" height="200">
</picture>
</div>
<div class="vitrindekiler2__Content">
<div class="vitrindekiler-title">
<div class="vitrindekiler2--title">Kalan Gün: 26</div>
<div class="vitrindekiler2--phone">REKLAM ALANI</div>
</div>
</div>
</div>
</div>
</div>
<div id="listele_4">
<div class="grid-item">

<div style="background:#363636;padding:5px;">
<div class="btn btn-xxs btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sıra">#20</div>

<a href="ilangaleri.php?id=4" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-warning" data-original-title="Galeri"><span class="glyphicon glyphicon-camera"></span></a>

<a href="ilanduzenle.php?id=4" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-primary" data-original-title="Düzenle"><span class="glyphicon glyphicon-pencil"></span></a>

<a href="#" title="" data-toggle="tooltip" data-placement="top" class="btn btn-danger btn-xxs silbuton" id="4" data-original-title="Sil"><span class="glyphicon glyphicon-remove"></span></a>

</div>


<div class="vitrindekiler sortable">
<div class="vitrindekiler-photo">
<picture>
<source srcset="../uploads/istanbul-escort-bade.jpg" type="image/jpeg"> 
<img src="../uploads/istanbul-escort-bade.jpg" alt="REKLAM ALANI" class="vitrin_kapak Kapak cover" width="152" height="200">
</picture>
</div>
<div class="vitrindekiler2__Content">
<div class="vitrindekiler-title">
<div class="vitrindekiler2--title">Kalan Gün: 26</div>
<div class="vitrindekiler2--phone">REKLAM ALANI</div>
</div>
</div>
</div>
</div>
</div>
<div id="listele_5">
<div class="grid-item">

<div style="background:#363636;padding:5px;">
<div class="btn btn-xxs btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sıra">#21</div>

<a href="ilangaleri.php?id=5" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-warning" data-original-title="Galeri"><span class="glyphicon glyphicon-camera"></span></a>

<a href="ilanduzenle.php?id=5" data-toggle="tooltip" data-placement="top" title="" class="btn btn-xxs btn-primary" data-original-title="Düzenle"><span class="glyphicon glyphicon-pencil"></span></a>

<a href="#" title="" data-toggle="tooltip" data-placement="top" class="btn btn-danger btn-xxs silbuton" id="5" data-original-title="Sil"><span class="glyphicon glyphicon-remove"></span></a>

</div>


<div class="vitrindekiler sortable">
<div class="vitrindekiler-photo">
<picture>
<source srcset="../uploads/istanbul-escort-ebru.jpg" type="image/jpeg"> 
<img src="../uploads/istanbul-escort-ebru.jpg" alt="REKLAM ALANI" class="vitrin_kapak Kapak cover" width="152" height="200">
</picture>
</div>
<div class="vitrindekiler2__Content">
<div class="vitrindekiler-title">
<div class="vitrindekiler2--title">Kalan Gün: 26</div>
<div class="vitrindekiler2--phone">REKLAM ALANI</div>
</div>
</div>
</div>
</div>
</div>
</div>


</div>
</div>





</div>

</div><!-- /.container -->


<script src="js/bootstrap-tagsinput.min.js"></script>
<script src="js/bootstrap.js"></script>
<script>
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();
$('.btn-default').tooltip({trigger: "click"}); 

});
</script>
<script type="text/javascript">
$(function() {
$(".silbuton").click(function(){
var element = $(this);
var del_id = element.attr("id");
var info = 'id=' + del_id;
swal({
title: "Emin misiniz?",
text: "Bu İlan ve Ona Ait Olan Fotoğraflar Silinecek",
type: "warning",
showCancelButton: true,
confirmButtonColor: "#DD6B55",
confirmButtonText: "Evet, silinsin!",
cancelButtonText: "Hayır, vazgeç!",
closeOnConfirm: false,
closeOnCancel: false
},
function(isConfirm){
if (isConfirm) {
$.ajax({
type: "GET",
url: "ilansil.php",
data: info,
success: function(){	
}
});
swal({
title: "Başarılı", 
text: "İlan Silindi", 
type: "success",
timer: 1000},
function(){ 
location.reload();
}
);
$(this).parents(".kayitlar").animate({ backgroundColor: "#000" }, "fast")
.animate({ opacity: "hide" }, "slow");
}else{
swal({
title: "İptal",
text: "Silme İşlemi İptal Edildi",
type: "error",
timer: 1000
});	 
}
}); 
return false;
});
});
</script>

    
</body>
</html>