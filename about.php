
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #1504fe
;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #1504fe;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<?php
include_once 'header.php';

?>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>We are students in faculty of science in University of Ruhuna.</p>
  <p>From 44th batch.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="dismitha.jpg" alt="Yushan" style="width:200px">
      <div class="container">
        <h2>Yushan Dismitha</h2>
        <p class="title">Team leader,Backend developer</p>
        <p>SC/2021/12122</p>
        <p>yushanhettiarachchi639@gmail.com</p>
        <p><button class="button" onclick="window.location.href='https://www.linkedin.com/in/yushan-dismitha-988b101bb/'">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="Nimesh.jpeg" alt="Nimesh" style="width:200px">
      <div class="container">
        <h2>Nimesh H.Bandara</h2>
        <p class="title">Designer,Frontend developer</p>
        <p>SC/2021/12109</p>
        <p>nimeshbandara4488@gmail.com</p>
        <p><button class="button" onclick="window.location.href='https://www.linkedin.com/in/nimesh-h-bandara-3b2077232/'">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="Nimantha.jpg" alt="Nimantha" style="width:200px">
      <div class="container">
        <h2>Nimantha Dilshan</h2>
        <p class="title">Backend developer</p>
        <p>SC/2021/12081</p>
        <p>nimanthadilshan826@gmail.com</p>
        <p><button class="button" onclick="window.location.href='https://web.facebook.com/photo/?fbid=1329185287690363&set=a.547369229205310'">Contact</button></p>
        </div>  
  </div>
</div>
</div>
<div class ="row">

<div class="column">
    <div class="card">
      <img src="Ruchira.png" alt="Ruchira" style="width:200px">
      <div class="container">
        <h2>Ruchira Hansana</h2>
        <p class="title">Frontend developer</p>
        <p>SC/2021/12146</p>
        <p>ruchirahansana12@gmail .com</p>
        <p><button class="button" onclick="window.location.href='https://web.facebook.com/people/Ruchira-Weththasinghe/pfbid02pK25yNttnjvu99HSr5EJ2TpLiy7rzKehm6T5BNeHiR8vBN5APTTzkrxUmmKoUzJGl/'">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/w3images/team1.jpg" alt="Ravindu" style="width:100%">
      <div class="container">
        <h2>Ravindu Shehan</h2>
        <p class="title">Backend developer</p>
        <p>SC/2021/12147</p>
        <p>ravindushehan.ob@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

</div>

      </html>