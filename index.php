<html>
<head>
    <title>
</title>
<link rel = "shortcut icon" type ="png/jpg" href ="asset/img/logor.png" />

<link rel = "stylesheet" type ="text/css" href="asset/css/font-awesome.min.css" />
<link rel = "stylesheet" type ="text/css" href="asset/css/flickity.min.css" media="screen" />
<link rel = "stylesheet" type ="text/css" href="asset/css/main.css" />
<link rel = "stylesheet" type ="text/css" href="asset/css/bootstrap.min.css" />
<link rel = "stylesheet" type ="text/css" href="asset/css/bootstra.min.css" />




<style>
body{
overflow-x:hidden;

}  
.nav {
width: 100%;
height: 100vh;
background-position:center;
background-size: cover;
background-image: url("asset/img/img10.jpg");
position: relative;
top:50px;
}

#nav{


}

.nav div{
    
    width: 70%;
    height: 450px;
    background-position: center;
    background-size: cover;
    

}

#remark{
    background-color:black;
    color:white;
    position:relative;
    top:100px;
}

#img{

position:relative;
top:50px;
font size:50px;
}

#photo{
background-size:cover;
position:relative;
top:50px;
}

#pic{
background-color:black;

}
#p{
  width: 100%;
  color: rgb(111, 202, 001);


}

footer{
  color: rgb(211, 202, 001);
}

.topbar{
 
position: fixed;
display: block;
z-index: 2;

}

.topbar li{
  margin:10px;
  display: inline;
  position:relative;
  left:500px;
  font-weight: bolder;
  color:darkblue;
  top:40px;
  
}

.topbar, li, i{
position:relative;
left:10px;


}

.LawPra{
position: relative;
top:40px;
text-align:center;
}

#findme td img{
width: 270px;
height:250px;
border-radius: 10px 10px 0px 0px;
box-shadow:5px 5px 5px wheat ;
}
#findme td{
  opacity:0.5;
  width: 270px;
height:250px;


}


#findme td:hover{
   cursor:hand;
   opacity:1.0;

   animation-name: swing;
animation-duration: 2s;
animation-delay: 1s;
animation-iteration-count: infinite;
}
#findme{
position:relative;
top:40px;
display:flex;
justify-content:center;
}

#findme tr td h3{
  opacity:1.0 !important;
}


#findme tr td h3{
color:darkblue;
}

.b1{
display:flex;
justify-content:center;
position:relative;
top:50px;

}

.b2{

  font-weight:bolder;
}
@keyframes swing{
  2%{position: relative; top: -2px}
  3%{position: relative; top: -3px}
  4%{position: relative; top: -4px}
  5%{position: relative; top: -5px}
  6%{position: relative; top: -6px}
  7%{position: relative; top: -7px}
  8%{position: relative; top: -8px}
  9%{position: relative; top: -9px}
  10%{position: relative; top: -10px}


  11%{position: relative; top: 10px}
  12%{position: relative; top: 9px}
  13%{position: relative; top: 8px}
  14%{position: relative; top: 7px}
  15%{position: relative; top: 6px}
  16%{position: relative; top: 5px}
  17%{position: relative; top: 4px}
  18%{position: relative; top: 3px}
  19%{position: relative; top: 2px}

}


</style>


<script>
var h = "hello";


function data(){
    
    console.log('hello world');
}

if(h == "hello"){

console.log('h is equal to hello');
}

data()
</script>
</head>
<body onload = "data()">
<div class ="topbar">
    <ul>
    <li>HOME</li>
    <li>ABOUT US</li>
    <li>PRACTICE AREAS</li>
    <li>TEAM</li>
    <li>RESOURCES</li>
    <li>CONTACT</li>
   <li> | <i class = "fa fa-search"></i></li>
    
</ul>
</div>
<div class ="nav" id = "nav">
<div>
</div>
</div>
<br>




    
    
<br>


<h2 class = "lawPra">Our Practice Areas</h2>


<table id ="findme" cellpadding="10px">
      <tr>
<td>
  <img src= "asset/img/img8.jpg" />
<h3>Corporate Governance and compliance</h3>
</td>

<td>
  <img src= "asset/img/img5.jpg" />
  <h3>Cormercial Transactions</h3>
</td>

<td>
  <img src= "asset/img/img6.jpg" />
  <h3>Energy,Environment and Natural Resources</h3>
</td>

<td>
  <img src= "asset/img/img4.jpg" />
  <h3>Ligation- Criminal and Civil</h3>
</td>
</tr>




<tr>
<td>
  <img src= "asset/img/img2.jpg" />
  <h3>Tax</h3>
</td>

<td>
  <img src= "asset/img/img11.jpg" />
  <h3>Real Estate</h3>
</td>

<td>
  <img src= "asset/img/img9.jpg" />
  <h3>Company Secretarial</h3>
</td>

<td>
  <img src= "asset/img/img3.jpg" />
  <h3>Insolvency and Dept Recovery</h3>
</td>
</tr>


</table>
<div class = "b1">
<button class= "btn btn-primary b2">View all</button>

</div>
<!--
<div class="carousel" data-flickity='{ "cellAlign": "left", "contain": true }'>
  <div class="carousel-cell">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" alt="orange tree" />
  </div>
  <div class="carousel-cell">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/one-world-trade.jpg" alt="One World Trade" />
  </div>
  <div class="carousel-cell">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/drizzle.jpg" alt="drizzle" />
  </div>
  <div class="carousel-cell">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg" alt="cat nose" />
  </div>
  <div class="carousel-cell">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/contrail.jpg" alt="contrail" />
  </div>
  <div class="carousel-cell">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/golden-hour.jpg" alt="golden hour" />
  </div>
  <div class="carousel-cell">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/flight-formation.jpg" alt="flight formation" />
  </div>
</div>
-->

</body>
</html>

<script src ="asset/js/flickity.pkgd.min.js">

</script>

<script src ="asset/js/flickity.pkgd.js">

</script>

<script src ="asset/js/main.js">

</script>