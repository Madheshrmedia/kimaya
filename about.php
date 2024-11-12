<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="./asset/css/abt.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/heroes/hero-5/assets/css/hero-5.css">
<style>
     #journey,#misvisframe{
        margin-top:5rem;
    }
    #journey h2{
margin-top: 1rem;
}
#journey h6{
    margin: 3rem 0 1rem 0;
    font-size: 20px;
    font-weight: 600;
}
#journey p{
    line-height: 2;
}
.framerow{
    margin-top: 3rem;
    border: 1px solid #E4BD42; 
    border-radius: 15px;
}
.padleft{
    padding-left: 3rem;
    
}
.padleft h4{
    font-weight: 600;
    color: #FFFFFF;
    padding: 21px 18px;
    background-color: #DDAB07;
    border-radius: 9px;
}
.h5margintop{
    margin-bottom: 2rem;
}
.h5margintops{
    background-color: #FFF8DB; 
}
#missionframe{
        position: relative;
    background-color: #DDAB07;
    margin-top: 2rem;
    border: 1px solid #DDAB07;
    border-radius: 25px;
    padding: 4rem;
      }
      #missionframe::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #f4f4f4;
  opacity: 0.5; /* Semi-transparent background */
  border-radius: 25px;
  z-index: 0; /* Places the background behind the content */
}
#missionframe .row, #missionframe .line1 {
  position: relative;
  z-index: 1; /* Ensures content is above the background layer */
}
     .line1{
      height: 2px;
      margin: 2rem 0;
      background-color: #000000;
     }
     #missionframe p{
      color:#122132;
     }
     .priority{
      padding:5rem 0;
        margin-top: 5rem;
        margin-bottom: 5rem;
      background-color: #FBF9F2;
    }
    .slider{
      margin-bottom: 5rem;
    }
    #pricontainer{
      margin-top: 3rem;
     
    }
    .block{
      width:80%;
      margin-top: 1rem;
      background-color: #fbebb8;
      border: 1px solid #DDAB07;
      padding: 2rem;
      border-radius: 12px;
    }
    .block h5{
font-weight: 600;
margin-bottom: 1rem;
    }
    .blockborder{
      background-color: #FBF9F2;
      border: none;
    }
    .ulist li{
      margin-top: 1rem; ulist
    }
    
.slider{
    position:relative;
    width: 100%;
  }
  .items{
    position: relative;
    overflow: hidden;
    width: 100%;
    padding-bottom: 56.25%;
    border-radius: 20px;
  }
  .item{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    transition: opacity .6s ease-in-out;
    &.current{
      opacity: 1;
    }
    img{
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  }
  
  .buttons{
    position:absolute;
    z-index: 1;
    top:0;
    left:0;
    width:100%;
    height:100%;
    display:flex;
    justify-content:space-between;
    align-items:center;
  }
  .button{
    width:32px;
    height:32px;
    border:none;
    outline:none;
    padding:0;
    background:transparent center no-repeat;
    cursor:pointer;
    opacity:.4;
    &.prev{
      background-image: url(https://codeisle.info/blog/wp-content/uploads/2018/12/ico_next_b32.png);
    }
    &.next{
      background-image:url(https://codeisle.info/blog/wp-content/uploads/2018/12/ico_next_b32-1.png);
    }
    &:hover{
      opacity:.8;
    }
  }
  
  .dots{
    position: absolute;
    bottom: -20px;
    left: 0;
    width: 100%;
    display: flex;
    justify-content: center;
    margin-top: 10px;
  }
  .dot{
    display: block;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    border: none;
    outline: none;
    padding: 0;
    background: #777;
    cursor: pointer;
    opacity: .5;
    transition: opacity .4s ease-in-out;
    &:nth-child(n+2){
      margin-left: 5px;
    }
    &.current{
      opacity: 1;
    }
  }
  .aligncenter{
    text-align:center;
  }
  .alignrow{
    margin-top:3rem !important;
  }
  .heading{
    margin:1rem 0;
  }
</style>
    </head>

    <body>
        <header>
        <?php
include_once "./header.php";
?>
        </header>
        <main>
            <!-- Hero 5 - Bootstrap Brain Component -->
<section class="bsb-hero-5 px-3 bsb-overlay" style="background-image: url('./images/abtbanner.webp');">
  <div class="container">
    <div class="row justify-content-md-center align-items-center">
      <div class="col-12 col-md-11 col-lg-9 col-xl-8 col-xxl-8">
        <h1 class="display-1 text-white text-center fw-bold mb-4">About Us</h1>
        <div class="line"></div>
        <p class="lead text-white text-center mb-5 d-flex justify-content-sm-center para">
          <span class="col-12 col-sm-10 col-md-8 col-xxl-9">At Kimaya Clinique, we combine state-of-the-art technology with personalized care to bring out the best in you.</span>
        </p>
     
      </div>
    </div>
  </div>
</section>
<div class="container" id="journey">
        <div class="row">
        <div class="col-sm-6 col-md-6">
        <div id="texts" style="white-space:nowrap;">
         <img src="./images/star.webp"  align="left"/>
        </div>
       <h5>JOURNEY</h5> 
       <h2 style="font-weight:600">The Journey of<br>Kimaya Clinique</h2>
       <div class="line" style="height: 2.5px;background-color:#E9C34C; width:30%"></div>
       <div class="row framerow" >
       <div class="col-sm-6 col-md-6" style="padding-left:0px">
       <img src="./images/photo.webp" alt="photo">
       </div>
       <div class="col-sm-6 col-md-6">
    <h6>About Our Founder</h6>
    <p>Mrs Priyambada Yadav Founder/CEO of our cosmetic clinic is a passionate and experienced entrepreneur who has dedicated her career to providing the highest quality of care and service to her clients. With over 15 years of experience in the service industry.
</p>
          </div>
       </div>
      </div>
       
        <div class="col-sm-6 col-md-6 padleft">
            <h4 class="h5margintop">Our Approach</h4>
            <div id="texts" style="white-space:nowrap;">
         <img src="./images/star.webp"  align="left"/>
        </div>
       <h5 class="h5margintop">A Blend of Science and Art</h5> 
       <p class="h5margintop">At Kimaya, we believe beauty is deeply personal. Our approach combines cutting-edge medical advancements with an artistic touch, ensuring every client receives tailored treatments that enhance their natural beauty. From the very beginning, we’ve made it our mission to offer an exceptional experience – one that prioritizes both results and client comfort.</p>
       <div id="texts" style="white-space:nowrap;">
         <img src="./images/star.webp"  align="left"/>
        </div>
       <h5 class="h5margintop h5margintops">Over 10k successful treatments and counting</h5>
       <div id="texts" style="white-space:nowrap;">
         <img src="./images/star.webp"  align="left"/>
        </div>
       <h5 class="h5margintop h5margintops">Proudly serving clients from Chennai</h5>
        </div>
      </div>
        </div>
<!-- -------------------------------------------- -->

<div class="container" id="misvisframe">
        <div class="row">
        <div class="col-sm-6 col-md-6">
     
       <h2 style="font-weight:600">Committed to Excellence in <br>Every Treatment</h2>
       <div class="line" style="height: 2.5px;background-color:#E9C34C; width:30%"></div>
     
      </div>
       
     
      </div>
      <div class="container"  id="missionframe">
<div class="row">


    <div class="col-sm-6 col-md-6">
      <h4>Mission</h4>
    </div>
    <div class="col-sm-6 col-md-6">
     <p>To deliver exceptional beauty and wellness services through a blend of expertise, innovation, and personalized care, helping every client look and feel their best.</p>
    </div>
 
 

</div>
<div class="line1"></div>
<div class="row">


  <div class="col-sm-6 col-md-6">
    <h4>Vision</h4>
  </div>
  <div class="col-sm-6 col-md-6">
   <p>We aim to create a world where beauty and self-care are celebrated and accessible to all. Our goal is to continually innovate and evolve, offering clients the best solutions for their unique needs.</p>
  </div>



</div>
      </div>
        </div>

<!-- --------------------------------------------- -->
<div class="priority">
    <div class="container" >
      <div class="row">
        <div class="col-sm-6 col-md-6">
     
       <h2 style="font-weight:600">Priorities</h2>
       <div class="line" style="height: 2.5px;background-color:#E9C34C; width:30%"></div>
     
      </div>
       
     
      </div>
      <div class="row" id="pricontainer">
        <div class="col-sm-6 col-md-6">
          <div class="block">
            <h5>Client First</h5>
            <p>Every client’s journey with us begins with a deep understanding of their individual needs, ensuring we provide the best, most comfortable experience possible.</p>
          </div>
          <div class="block blockborder">
            <h5>Integrity and Trust</h5>
            <p>We maintain transparency in everything we do, building trust with our clients through honest communication and ethical practices.</p>
          </div>
          <div class="block blockborder">
            <h5>Excellence and Quality</h5>
            <p>We hold ourselves to the highest standards in every treatment we offer, ensuring our clients receive top-quality care and achieve optimal results.</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-6">
          <img src="./images/grp.webp" alt="image">
        </div>
      </div>  
    </div>
   </div>
<!-- --------------------------------------------- -->
<div class="slider" >
    <div class="container" >
      <div class="row">
        <div class="col-sm-6 col-md-6">
     
       <h2 style="font-weight:600">Clinic Tour</h2>
       <div class="line" style="height: 2.5px;background-color:#E9C34C; width:30%"></div>
     
      </div>
       
     
      </div>
      <div class="row" id="pricontainer">
        <div class="col-sm-6 col-md-6">
         <p>Experience the comfort and luxury of our clinic, designed to make every visit a relaxing and rejuvenating one.</p>
         <ul class="ulist">
          <li>The welcoming reception area.</li>
          <li>Private treatment rooms with a calming ambiance.</li>
          <li>State-of-the-art equipment and facilities.</li>
          <li>Comfortable recovery lounges.</li>
         </ul>
        </div>
        <div class="col-sm-6 col-md-6">
        <div class=slider>
  <ul class=items>
    <li class="item current"><img src="./images/slider1.webp"></li>
    <li class=item><img src="./images/slider2.webp"></li>
    <li class=item><img src="./images/slider3.webp"></li>
    <li class=item><img src="./images/slider4.webp"></li>
  </ul>
  <div class=buttons>
    <button type=button id=prev class="button prev"></button>
    <button type=button id=next class="button next"></button>
  </div>
  <div class=dots>
    <button type=button class="dot current"></button>
    <button type=button class=dot></button>
    <button type=button class=dot></button>
    <button type=button class=dot></button>
  </div>
</div>
        </div>
      </div>  
      <div class="div">
   <div id="texts" style="white-space:nowrap;">
         <img src="./images/star.webp"  align="left"/>
        </div>
       <h5>COMPREHENSIVE APPROACH</h5> 
       <div class="row alignrow">
       <div class="col-sm-6 col-md-3 ">
        <div class="row">
          <div class="col-sm-6 col-md-6 aligncenter">
          <img src="./images/Icon.png"  alt="Icon"/>
       <h5 class="heading">STEP 1</h5>
       <h5>Book Your Appointment</h5>
          </div>
           <div class="col-sm-6 col-md-6 aligncenter">
           <img src="./images/guidance_right-arrow.png"  align="left"/>
           </div>
        </div>
      
       </div>     
       </div>
   </div>
    </div>
   
   </div>
 
<!-- --------------------------------------------- -->
        </main>
        <footer>
        <?php
    include_once "./footer.php";
    ?>
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        <script>
          function slider(flag, num) {
  var current = $(".item.current"),
      next,
      index;
  if (!flag) {
    next = current.is(":last-child") ? $(".item").first() : current.next();
    index = next.index();
  } else if (flag === 'dot') {
    next = $(".item").eq(num);
    index = num;
  } else {
    next = current.is(":first-child") ? $(".item").last() : current.prev();
    index = next.index();
  }
  next.addClass("current");
  current.removeClass("current");
  $(".dot").eq(index).addClass("current").siblings().removeClass("current");
}
var setSlider = setInterval(slider, 4000);

$(".button").on("click", function() {
  clearInterval(setSlider);
  var flag = $(this).is(".prev") ? true : false;
  slider(flag);
  setSlider = setInterval(slider, 4000);
});

$(".dot").on("click", function() {
  if ($(this).is(".current")) return;
  clearInterval(setSlider);
  var num = $(this).index();
  slider('dot', num);
  setSlider = setInterval(slider, 4000);
});

        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </body>
</html>
