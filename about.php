<?php
include "header.php";
?>
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
  background-color: #474e5d;
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
  background-color: #000;
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
<body>

<div class="about-section">
  <h1>About Us</h1>
  <p>To know about the company</p>
  <p>Join with us in an amazing journey to achieve the goal </p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="anish.jpg" alt="Jane" style="width:40%" width="400" 
     height="150">
      <div class="container">
        <h2>Anish Bista</h2>
        <p class="title">CEO & Founder</p>
        <p>Mr. Bista looks after the company</p>
        <p>anish@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="sudarshan.jpg" alt="Mike" style="width:40%" width="400" 
     height="150">
      <div class="container">
        <h2>Sudarshan Kaphle</h2>
        <p class="title">Art Director</p>
        <p>Mr. Kaphle looks after the desing of company.</p>
        <p>sudarshan@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="dilisha.jpg" alt="John" style="width:40%" width="400" 
     height="150">
      <div class="container">
        <h2>Dilisha Chand</h2>
        <p class="title">CFO</p>
        <p>Mrs. Chand looks after forign affairs of company.</p>
        <p>Dilisha@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
<div class="column">
    <div class="card">
      <img src="roshan.jpg" alt="Jane" style="width:40%" width="400" 
     height="150">
      <div class="container">
        <h2>Roshan Ghimire</h2>
        <p class="title">CTO</p>
        <p>Mr. Ghimire ooks after company management.</p>
        <p>Roshan@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

</body>
</html>
