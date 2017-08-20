<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
  	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">

    <script type="text/javascript">
      var index = 1;
      function sliding(){
        var slideElement = document.getElementById("slideshow");
        slideElement.src="resources/images/"+index+".jpg";
        index=index+1;
        if(index>3){
          index=1;
        }
        setTimeout("sliding()" ,2000);
      }

    onload =sliding;
    </script>
    <title>Home</title>
  </head>
  <body id="wrapper">
  <div id="big_wrapper">
  <div id="searchbar" >
    <div id="search">


  	<!--Start of the searchbar-->
    <img src="resources/images/gzone.png" id="im">


      <img src="resources/videos/giphy.gif"  id="gif">


    <div id='container'>
      <div class='cell'>
        <input type='search' placeholder='What are you looking for?'>
        <button id="but"><i class="fa fa-search"></i></button>
      </div>
    </div>
    </div>
  	<!--End of the Searchbar-->
  </div>


  <div id="navigation">
  	<!--Start of the navigation-->


      <ul id="profile">
        <li><a href="#"><i class="fa fa-home"> Home</i></a></li>
        <li><a href="#"><i class="fa fa-star"> Special Offers</i></a></li>
        <li><a href="#"><i class="fa fa-lock"> Login</i></a></li>
        <li><a href="#"><i class="fa fa-bars"> Account</i></a></li>
      </ul>

      <ul id="profile1">
        <li><a href="#"><i class="fa fa-bell"> Notification</i></a></li>
        <li><a href="#"><i class="fa fa-shopping-cart"> Checkout</i></a></li>
      </ul>

  	<!--End of the navigation-->
  </div>
<div id="wrapper-2"
  <div id="wrapper-3">
  <div id="items">
	<!--Start of the items-->
  <h3>Categories</h3>
    <ul>
      <li><a href="#">Desktop</a>
        <ul>
          <li><a href="#">Dell</a></li>
          <li><a href="#">Toshiba</a></li>
          <li><a href="#">Mac</a></li>
          <li><a href="#">Acer</a></li>
          <li><a href="#">Lenovo</a></li>
        </ul>
      </li>
      <li><a href="#">Laptops And Tablets</a>
        <ul>
          <li><a href="#">Dell</a></li>
          <li><a href="#">Toshiba</a></li>
          <li><a href="#">Mac</a></li>
          <li><a href="#">Acer</a></li>
          <li><a href="#">Lenovo</a></li>
        </ul>
      </li>
      <li><a href="#">Phones </a>
        <ul>
          <li><a href="#">Apple</a></li>
          <li><a href="#">Samsung</a></li>
          <li><a href="#">Sony</a></li>
          <li><a href="#">Xperia</a></li>
          <li><a href="#">Oppo</a></li>
          <li><a href="#">Huwawei</a></li>
        </ul>
      </li>
      <li><a href="#">Cameras</a>
        <ul>
          <li><a href="#">nikon</a></li>
          <li><a href="#">Canon</a></li>
          <li><a href="#">Sony</a></li>
        </ul>
      </li>
    </ul>
  <!--End of the items-->
  </div>

  <div id="Slide">
    <img src="resources/images/1.jpg" id="slideshow" onclick="sliding()" />
  </div>

  <div id="showitems">
  	<!--Start of the showitems-->
    <h3>Brands</h3>

    <div id="dropdown">
  <button id="dropbtn">Find Brand  <span class="fa fa-angle-double-down"fa fa></span></button>
  <div id="dropdown-content">
    <a href="#">Apple</a>
    <a href="#">Sony</a>
    <a href="#">Huwawei</a>
  </div>
  </div>
  	<!--End of the showitems-->
  </div>

  <div id="aside">
  	<!--Start of the aside-->
    <h3>Information</h3>

    <ul id="com">
      <li><a href="#">About Us</a></li>
      <li><a href="#">Privacy Policy</a></li>
      <li><a href="#">Terms and Conditions</a></li>
      <li><a href="#">Cotact Us</a></li>
      <li><a href="#">Site Map</a></li>
    </ul>
  	<!--End of the aside-->
  </div>

</div>



</div>

<div id="footer">
  <div id="fwrap">
  <div class="foot">
    <h3>Company</h3>
    <ul>
      <li><a href="#">Who are we?</a></li>
      <li><a href="#">Terms and Conditions</a></li>
      <li><a href="#">Privacy policy</a></li>
      <li><a href="#">Refund Policy</a></li>
    </ul>
  </div>
  <div class="foot">
    <h3>Learn More</h3>
    <ul>
      <li><a href="#">FAQ's</a></li>
      <li><a href="#">Past Deals</a></li>
      <li><a href="#">How to buy?</a></li>
    </ul>
  </div>
  <div class="foot">
    <h3>Contact us</h3>
      <h4>0717555242</h4>
  </div>
  <div class="foot">
    <h3>Follow Us</h3>
    <ul id="follow">
      <li><a href="#"><span class="fa fa-facebook-official"></span></a></li>
      <li><a href="#"><span class="fa fa-twitter"></span></a></li>
      <li><a href="#"><span class="fa fa-google-plus-official"></span></a></li>
    </ul>
  </div>
  </div>
</div>
</div>
  </body>
</html>
