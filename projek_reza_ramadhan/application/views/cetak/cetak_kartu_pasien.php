<html>
<head>
<style type="text/css" media="print">
	@import url('https://fonts.googleapis.com/css?family=Muli&display=swap');
html {
  height: 100%;
}
body {
  font-family: 'Muli', sans-serif;
  background-color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-flow: wrap;
  margin: 0;
  height: 100%;
}

figure.card {
  position: relative;
  overflow: hidden;
  margin: 10px;
  min-width: 380px;
  max-width: 480px;
  width: 100%;
  background: #ffffff;
  color: #000000;
}
figure.card * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
figure.card > img {
  width: 50%;
  border-radius: 50%;
  border: 4px solid #ffffff;
  -webkit-transition: all 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
  -webkit-transform: scale(1.6);
  transform: scale(1.6);
  position: relative;
  float: right;
  right: -15%;
  z-index: 1;
}
figure.card figcaption {
  padding: 20px 30px 20px 20px;
  position: absolute;
  left: 0;
  width: 50%;
}
figure.card figcaption h2,
figure.card figcaption p {
  margin: 0;
  text-align: left;
  padding: 5px 0;
  width: 100%;
}
figure.card figcaption h2 {
  font-size: 1.2em;
  font-weight: bold;
  text-transform: uppercase;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
}
figure.card figcaption h2 span {
  font-weight: 800;
  color: #b71540;
}
figure.card figcaption p {
  font-size: 0.9em;
  opacity: 0.8;
}
figure.card figcaption .icons {
  width: 100%;
  text-align: left;
}
figure.card figcaption .icons i {
  font-size: 30px;
  padding: 5px;
  top: 50%;
  color: #000000;
}
.icons i:hover {color: #b71540 !important; cursor: pointer;}
figure.card figcaption a {
  opacity: 0.3;
  -webkit-transition: opacity 0.35s;
  transition: opacity 0.35s;
}

figure.card .position {
  width: 100%;
  padding: 15px 20px;
  font-size: 0.9em;
  opacity: 1;
  color: #ffffff;
  background: #b71540;
  clear: both;
  font-weight: bold;
}
figure.card:hover > img,
figure.card.hover > img {
  right: -12%;
}
</style>
<title>Cetak Kartu Pasien</title>
</head>

<body onload="window.print()">
 
 <figure class="card">
   <figcaption>
     <h2><?=$row->kodepasien?> <span><?=$row->nama_pasien?></span></h2>
     <p><?=$row->jenis_kelamin?></p>
     <p><?=$row->tempat_lahir?></p>
     <p><?=indo_date($row->tanggal_lahir)?></p>
     <p><?=$row->alamat?></p>
     <div class="icons">
       <i class="fab fa-facebook-square"></i>
       <i class="fab fa-instagram"></i>
       <i class="fab fa-snapchat-square"></i>
     </div>
   </figcaption>
   <img src="<?=base_url()?>assets/dist/img/logo_rs.png"/>
   <p><div class="position">Puskesmas Pemurus Dalam Banjarrmasin</div></p>
 </figure>

</body>

</html>