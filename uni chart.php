<!DOCTYPE html>
<html>
<head>
  <script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    
    xmlhttp=new XMLHttpRequest();
  } else { 
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
  <title>uni chart</title>
  <style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 30%;
    background-color: grey;
    border-radius: 10px;
    margin-top: 5%;
    margin-left: 5%;

}

td, th {
    text-align: left;
    padding: 3px;
    border-radius: 15px;
  
}

tr:nth-child(even) {
    background-color: lightblue;
}

    body{
      background-image: url("architect.jpg");
      background-repeat: no-repeat;
      background-position: fixed;
    }
 a {
    text-decoration: none;
    display: inline-block;
    padding: 8px 16px;
}

a:hover {
    background-color: #ddd;
    color: black;
}

.previous {
    background-color: #f1f1f1;
    color: black;
}

.next {
    background-color: #4CAF50;
    color: white;
}

.round {
    border-radius: 50%;
    margin-top: -30%;
}

.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 15px;
    font-size: -5px;
    border: none;
    cursor: pointer;
    margin-top: 150%;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
  </style>
</head>
<body>
     <h1  style="color:red; text-align:center; font-size:300%; font-family:oblique; color: red; text-shadow: 1px 1px 2px blue, 0 0 25px white, 0 0 5px darkblue; margin-top: 2%;">UNI </h1>
     <style>
  text-align:center;
</style>

<form>
  <center>
  <input  style= "font-size:135%%; text-align:left; margin-top: 10px; width:50%; border-radius:10px; padding: 5px;  >"type="text" class="search" placeholder="Search" name="search"></input>
</center>

</form>
<table>
  <tr>
    <th>Medicine
      <h3 style="margin-left: 70%; margin-top: -2%">Unilag</h3>
      <div class="dropdown" style="float:left;">
  <a href="#" class="next round">&#8255;</a>
  <div class="dropdown-content" style="left:0;">
    <a href="#">Computer sci</a>
    <a href="#">Civil Engineer</a>
    <a href="#">Architect</a>
    <a href="#" class="More">More &raquo;</a>
  </div>
</div>
    </th>
    
  </tr>

  <table>
  <tr>
    <th>Compter Engineer
      <h3 style="margin-left: 70%; margin-top: -2%">Bowen</h3>
      <div class="dropdown" style="float:left;">
  <a href="#" class="next round">&#8255;</a>
  <div class="dropdown-content" style="left:0;">
    <a href="#">Computer sci</a>
    <a href="#">Civil Engineer</a>
    <a href="#">Architect</a>
    <a href="#" class="More">More &raquo;</a>
  </div>
</div>
    </th>
    
  </tr>

  <table>
  <tr>
    <th>Compter Engineer
      <h3 style="margin-left: 70%; margin-top: -2%">Bowen</h3>
      <div class="dropdown" style="float:left;">
  <a href="#" class="next round">&#8255;</a>
  <div class="dropdown-content" style="left:0;">
    <a href="#">Computer sci</a>
    <a href="#">Civil Engineer</a>
    <a href="#">Architect</a>
    <a href="#" class="More">More &raquo;</a>
  </div>
</div>
    </th>
    
  </tr>

<table style="margin-left: 60%; margin-top: -30%; ">
  <tr>
    <th>Civil Engineer
      <h3 style="margin-left: 70%; margin-top: -2%;">Convenant</h3>
      <div class="dropdown" style="float:left;">
  <a href="#" class="next round">&#8255;</a>
  <div class="dropdown-content" style="left:0;">
    <a href="#">Computer sci</a>
    <a href="#">Civil Engineer</a>
    <a href="#">Architect</a>
    <a href="#" class="More">More &raquo;</a>
  </div>
</div>
    </th>
    
  </tr>

  <table style="margin-left: 60%; margin-top: 5%;">
  <tr>
    <th>Mechanical Engineer
      <h3 style="margin-left: 70%; margin-top: -2%">Babcock</h3>
      <div class="dropdown" style="float:left;">
  <a href="#" class="next round">&#8255;</a>
  <div class="dropdown-content" style="left:0;">
    <a href="#">Computer sci</a>
    <a href="#">Civil Engineer</a>
    <a href="#">Architect</a>
    <a href="#" class="More">More &raquo;</a>
  </div>
</div>
    </th>
    
  </tr>

 <table style="margin-left: 60%; margin-top: -14%;">
  <tr>
    <th>Elect Elect
      <h3 style="margin-left: 70%; margin-top: -2%">Uniben</h3>
      <div class="dropdown" style="float:left;">
  <a href="#" class="next round">&#8255;</a>
  <div class="dropdown-content" style="left:0;">
    <a href="#">Computer sci</a>
    <a href="#">Civil Engineer</a>
    <a href="#">Architect</a>
    <a href="#" class="More">More &raquo;</a>
  </div>
</div>
    </th>
    
  </tr>


   
</body>
</html>

<footer>
    <h3 style="background-color: black; color: white;  text-align: center; padding:0%; margin-top: 16%; font-size: 100%;">Powered By Ademy</h3>
  </footer>