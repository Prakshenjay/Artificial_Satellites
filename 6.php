<html>
<head>
<title>  </title>

<style>

body{
	background-image : url ("ha.jpg") ;
	background-size : 100% , 100%  ;
	background-repeat: no-repeat;
}


* {
  box-sizing: border-box;
  
}

.row > .column {
  padding: 0 8px;
  ALIGN:RIGHT;
  FLOAT:RIGHT;
}

.row:after {
  content: "";
  display: table;
  clear: both;
  ALIGN:RIGHT;
  FLOAT:RIGHT;
}

.column {
  float: left;
  width: 25%;
}

.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}


.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}


.close {
  color: cyan;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer
}


.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}


.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev {
  left: 0;
  border-radius: 3px 0 0 3px;
}
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}


.numbertext {
  color: green;
  font-size: 15px;
  padding: 10px 12px;
  position: absolute;
  top: 0;
  
}

img {
  margin-bottom: -4px;
}



.demo {
  opacity: 0.6;
  height: 90px ;
  width: 20px ;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}


</style>

</head>

<body>

<div class="row" style="float:left;">
  <div class="column">
    <img  src="images/CS/ha.gif" style="width:400Px;height:300px; float:left;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 15</div>
      <img src="images/CS/1.JPG" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">2 / 15</div>
      <img src="images/CS/2.GIF" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">3 / 15</div>
      <img src="images/CS/2.JPG" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 15</div>
      <img src="images/CS/3.JPG" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">5 / 15</div>
      <img src="images/CS/4.GIF" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">6 / 15</div>
      <img src="images/CS/4.JPG" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">7 / 15</div>
      <img src="images/CS/5.JPG" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">8 / 15</div>
      <img src="images/CS/6.GIF" style="width:100%">
    </div>
    
    
    <div class="mySlides">
      <div class="numbertext">9 / 15</div>
      <img src="images/CS/7.JPG" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">10 / 15</div>
      <img src="images/CS/8.GIF" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">11 / 15</div>
      <img src="images/CS/9.JPG" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">12 / 15</div>
      <img src="images/CS/10.GIF" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">13 / 15</div>
      <img src="images/CS/11.JPG" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">14 / 15</div>
      <img src="images/CS/12.GIF" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">15 / 15</div>
      <img src="images/CS/14.GIF" style="width:100%">
    </div>
    
    
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    
    <hr color=black size=30 width=100%>

   <div class="column">
      <img class="demo cursor" src="images/CS/1.JPG" style="width:100%" onclick="currentSlide(1)" >
    </div>
    
    <div class="column">
      <img class="demo cursor" src="images/CS/2.GIF" style="width:100%" onclick="currentSlide(2)" >
    </div>
    
    <div class="column">
      <img class="demo cursor" src="images/CS/2.JPG" style="width:100%" onclick="currentSlide(3)" >
    </div>
    
    <div class="column">
      <img class="demo cursor" src="images/CS/3.JPG" style="width:100%" onclick="currentSlide(4)" >
    </div>
    
    <div class="column">
      <img class="demo cursor" src="images/CS/4.GIF" style="width:100%" onclick="currentSlide(5)" >
    </div>
    
    <div class="column">
      <img class="demo cursor" src="images/CS/4.JPG" style="width:100%" onclick="currentSlide(6)" >
    </div>
    
    <div class="column">
      <img class="demo cursor" src="images/CS/5.JPG" style="width:100%" onclick="currentSlide(7)" >
    </div>
    
    <div class="column">
      <img class="demo cursor" src="images/CS/6.GIF" style="width:100%" onclick="currentSlide(8)" >
    </div>
    
    <div class="column">
      <img class="demo cursor" src="images/CS/7.JPG" style="width:100%" onclick="currentSlide(9)" >
    </div>
    
    <div class="column">
      <img class="demo cursor" src="images/CS/8.GIF" style="width:100%" onclick="currentSlide(10)" >
    </div>
    
    <div class="column">
      <img class="demo cursor" src="images/CS/9.JPG" style="width:100%" onclick="currentSlide(11)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="images/CS/10.GIF" style="width:100%" onclick="currentSlide(12)" >
    </div>
    
    <div class="column">
      <img class="demo cursor" src="images/CS/11.JPG" style="width:100%" onclick="currentSlide(13)" >
    </div>
    
    <div class="column">
      <img class="demo cursor" src="images/CS/12.GIF" style="width:100%" onclick="currentSlide(14)" >
    </div>
    
    <div class="column">
      <img class="demo cursor" src="images/CS/14.GIF" style="width:100%" onclick="currentSlide(15)" >
    </div>
   
  </div>
</div>

<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
</div>




</body>


</html>

