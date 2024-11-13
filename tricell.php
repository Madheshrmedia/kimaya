<!doctype html>
<html lang="en">
    <head>
    <title>Kimaya Clinique</title>
    <!-- Favicon -->

    <link rel="icon" type="image/x-icon" href="./image/Kimaya Fav icon.png">
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
        <link rel="stylesheet" href="./asset/css/abt.css">
        <link rel="stylesheet" href="./asset/css/service.css">
        <style>
          
          #journey,#misvisframe, #testi{
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
.padleft1{
    padding-left: 3rem;
    
}
.padleft h4{
    font-weight: 600;
    color: #FFFFFF;
    padding: 21px 18px;
    background-color: #DDAB07 !important;
    border-radius: 9px;
}
.h5margintop{
    margin-bottom: 2rem;
}
#cardconts{
    margin-top: 7rem;
}
.h5margintops{
    background-color: #FFF8DB; 
}
.checked {
  color: #E4BD42;
}
.spantext{
  font-size: 15px;
  color:#909090;
}
.orangebut{
  color: #FFFFFF;
  background-color: #DDAB07 !important;
  padding: 12px 28px !important;
  border: none !important;
  border-radius: 25px !important;
     margin-top: 0rem !important;
}
.padleft{
    text-align:center;
}
.padleft img{
  border-radius: 2rem;
  width: 70%;
}
.card{
            border: 1px solid #DDAB07 !important;
            width:100%;
           border-radius: 17px; 
           height: 250px;
          }
    .cardpara,#accordionExample{
      margin-top: 1rem;
    }
    .bg{
      background-color: rgba(221, 171, 7, 0.1);
      
    }
    #testi{
      padding:5rem 0;
    }
    .cardwidth1 img{
      width: 50px;
    }
    .cardwidth1{
      height:auto;
      padding:0;
    }
    .paddingbot{
      padding-top:3%;
    }
    .card-footer{
      background-color:#EFD78A !important;
     
    }
    .spntxt{
      color:#805648;
    }
    .spnhead{
      color:#122132;
      font-weight:600;
      font-size:21px;
    }
 #cardsframe,#faq{
  margin-top:5rem;
 }
 .accordion-button:not(.collapsed) {
  background-color:#DDAB07 !important;
  color:#FFFFFF;
 }
 .alignright{
          text-align: right;
        }
        .cardwidth2{
          border:none !important;
          height: 350px;
          background-color: #F8F8F8 !important;
        }
        .cardwidth2 .card-title{
font-weight:600;
        }
        .otherser{
          margin-bottom:5rem;
        }
        .cardwidth{
          background-color: #F8F8F8 !important;
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
        <div class="container" id="journey">
        <div class="row">
        <div class="col-sm-6 col-md-6">
        <div id="texts" style="white-space:nowrap;">
         <img src="./images/star.webp"  align="left"/>
        </div>
       <h5>HAIR TREATMENT</h5> 
       <h2 style="font-weight:600">Tricell</h2>
       <p>At Kimaya Clinique, our advanced Tricell Service offers innovative treatments to rejuvenate your hair, skin, and body. </p>
       <div class="row" style="margin-top: 2rem;">
        <div class="col-sm-6 col-md-6">
          <button type="button" class="btn btn-primary orangebut" data-bs-toggle="modal" data-bs-target="#exampleModal">BOOK NOW</button>
          </div>
          <div class="col-sm-6 col-md-6">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span >4.8</span><br>
            <span class="spantext">
              From 120+ reviews
            </span>
            </div>
          </div>
     
      </div>
       
        <div class="col-sm-6 col-md-6 padleft">
         <img src="./images/tricell.webp" alt="photolaser">
        </div>
      </div>
        </div>
        <!-- --------------------------- -->
        <div class="container" id="cardconts">
          <h4 style="font-weight: 600;">Service Breakdown:</h4>
          <div class="row" id="cardrowlaser">
            <div class="col-sm-6 col-md-4">
              <div class="card cardwidth" >
              
                <div class="card-body">
                  <h5 class="card-title">Tricell Hair Rejuvenation</h5>
                  <p class="card-text">Boost hair growth and strengthen hair follicles with our Tricell Hair Rejuvenation treatment. Using advanced cell-therapy techniques, we address thinning hair, hair loss, and scalp health to restore volume and vitality naturally.<span style="visibility:hidden">skin withdsfdfdsfsfdf lasting results</span></p>
               
                </div>
              </div>
              </div>
            

              <div class="col-sm-6 col-md-4">
                <div class="card cardwidth" >
                
                  <div class="card-body">
                    <h5 class="card-title">Tricell Skin Rejuvenation</h5>
                    <p class="card-text">Revitalize your skin with our Tricell Skin Rejuvenation treatment. Target fine lines, wrinkles, and uneven skin tone by stimulating skin regeneration at the cellular level. This non-invasive procedure gives you youthful, glowing skin with lasting results.</p>
                 
                  </div>
                </div>
                </div>
                
                <div class="col-sm-6 col-md-4">
                  <div class="card cardwidth" >
                  
                    <div class="card-body">
                      <h5 class="card-title">Tricell Body Sculpting</h5>
                      <p class="card-text">Achieve a toned and sculpted body with our Tricell Body Sculpting treatment. Designed to target stubborn fat and reshape your body contours, this treatment is non-surgical, using advanced technology to firm, lift, and sculpt.<span style="visibility:hidden">skin with lasting results</span></p>
                   
                    </div>
                  </div>
                  </div>
          </div>
        
        </div>
            <!-- --------------------------- -->
<div class="bg">
<div class="container" id="testi">
        <div class="row cardpara">
        <div class="col-sm-6 col-md-6">
        <div id="texts" style="white-space:nowrap;">
         <img src="./images/star.webp"  align="left"/>
        </div>
       <h5>REVIEW</h5> 
       <h2 style="font-weight:600">What Our Clients Say</h2>
       </div>
       </div>
<div class="row" id="cardsframe">
<div class="col-sm-6 col-md-4">
  <div class="card cardwidth1">
    <div class="image" style="padding:1rem">
    <img src="./images/fe_quote-left.png" class="card-img-top" alt="fe_quote-left">
   
  
    <div class="card-body">
    
      <p class="card-text">I was amazed by the results of the Tricell Hair Rejuvenation treatment. My hair feels thicker, healthier, and I’ve noticed less breakage. I’m so happy with the progress!</p>
    </div>
    </div>
    <div class="card-footer" style=" border-bottom-left-radius: 17px;
      border-bottom-right-radius: 17px;">
    <div class="row" style="margin: 0 0.5rem;" >
        <div class="col-sm-6 col-md-6 ">
        <img src="./images/testi1.png" class="card-img-top" alt="fe_quote-left">
          </div>
          <div class="col-sm-6 col-md-6">
            <p class="spnhead">— Sarah M</p>
     
        
            </div>
          </div>
    </div>
  </div>
</div>
  <div class="col-sm-6 col-md-4">
  <div class="card cardwidth1">
    <div class="image" style="padding:1rem">
    <img src="./images/fe_quote-left.png" class="card-img-top" alt="fe_quote-left">
   
  
    <div class="card-body">
    
      <p class="card-text">The Tricell Skin Rejuvenation treatment transformed my skin! My wrinkles have softened, and my complexion looks so much brighter. It’s given me the confidence to face the world again</p>
    </div>
    </div>
    <div class="card-footer" style=" border-bottom-left-radius: 17px;
      border-bottom-right-radius: 17px;">
    <div class="row" style="margin: 0 0.5rem;" >
        <div class="col-sm-6 col-md-6 ">
        <img src="./images/client3.png" class="card-img-top" alt="client3">
          </div>
          <div class="col-sm-6 col-md-6">
            <p class="spnhead">— Rahul S</p>
        
        
            </div>
          </div>
    </div>
  </div>
</div>
  
<div class="col-sm-6 col-md-4">
  <div class="card cardwidth1">
    <div class="image" style="padding:1rem">
    <img src="./images/fe_quote-left.png" class="card-img-top" alt="fe_quote-left">
   
  
    <div class="card-body">
    
      <p class="card-text">After the Tricell Body Sculpting, I felt more confident in my body. It helped me achieve the shape I always wanted without surgery. The process was easy, and the results were amazing!</p>
    </div>
    </div>
    <div class="card-footer" style=" border-bottom-left-radius: 17px;
      border-bottom-right-radius: 17px;">
    <div class="row" style="margin: 0 0.5rem;" >
        <div class="col-sm-6 col-md-6 ">
        <img src="./images/client2.png" class="card-img-top" alt="client2">
          </div>
          <div class="col-sm-6 col-md-6">
            <p class="spnhead">— Priya K</p>
           
            </div>
          </div>
    </div>
  </div>
</div>
</div>


       </div>
</div>
            <!-- --------------------------- -->
            <div class="container" id="faq">
            <div class="row">
            <div class="col-sm-6 col-md-6 ">
             <img src="./images/faqimg.webp" alt="faqimg" style="width:80%">
            </div>
            <div class="col-sm-6 col-md-6 ">
            <div id="texts" style="white-space:nowrap;">
             <img src="./images/star.webp"  align="left"/>
            </div>
           <h5>Faq</h5> 
           <h2 style="font-weight:600">FAQs about Tricellt<br> Treatment</h2>     
           <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                What is Tricell Service?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Tricell Service is a series of advanced, non-invasive treatments targeting hair rejuvenation, skin revitalization, and body sculpting. The treatments use cutting-edge cell-therapy technology to stimulate natural healing and regeneration.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Is Tricell Hair Rejuvenation painful?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                No, Tricell Hair Rejuvenation is a painless procedure. It is non-invasive, with minimal discomfort, and there is no downtime after the treatment.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                How many Tricell Body Sculpting sessions will I need?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                The number of sessions depends on your individual goals. Most clients see noticeable results after 3 to 5 sessions, but a consultation with our experts will help determine the best plan for you.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                Are the results of Tricell Skin Rejuvenation permanent?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                While results are long-lasting, maintenance treatments may be required over time to preserve the youthful effects, especially as skin naturally ages. We recommend regular touch-ups to maintain optimal results.
                </div>
              </div>
            </div>
          </div> 
          </div>
         
          </div>
           
            
          </div>
        <!-- --------------------------- -->
        <div class="container otherser" id="journey">
            <div class="row">
            <div class="col-sm-6 col-md-6">
            <div id="texts" style="white-space:nowrap;">
             <img src="./images/star.webp"  align="left"/>
            </div>
           <h5>Other Services</h5> 
           <h2 style="font-weight:600">Our Other Beauty Solutions</h2>
        
         
          </div>
           
            <div class="col-sm-6 col-md-6 alignright" >
            <a href="./service.php #hair"> <button type="button" class="btn btn-primary orangebut">All Services</button></a> 
            </div>
          </div>
          <div class="row margintoprow" >
            <div class="col-sm-5 col-md-4">
            <div class="card cardwidth2" >
            <a href="./prp.php"><img src="./images/card4.webp" alt="card4" style="width:100%;"></a>
            <div class="card-body">
              <h5 class="card-title">PRP for Hair</h5>
              <p class="card-text">One of our sought-after treatments is PRP (Platelet-Rich Plasma), which utilizes the
                patient's own b</p>

            </div>
        </div>
        </div>
        <div class="col-sm-5 col-md-4">
        <div class="card cardwidth2" >
        <a href="./lasertherapy.php"><img src="./images/card1.webp" alt="card1" style="width:100%;"></a>
         <div class="card-body">
            <h5 class="card-title">Light Therapy</h5>
            <p class="card-text">And finally, we also provide Light Therapy, utilizing low-level laser light to enhance hair growth a</p>
         
          </div>
        </div>
        </div>
        <div class="col-sm-5 col-md-4">
        <div class="card cardwidth2" >
        <a href="./gfc.php"><img src="./images/card3.webp" alt="card3" style="width:100%;"></a>
          <div class="card-body">
            <h5 class="card-title">GFC</h5>
            <p class="card-text">We also provide GFC [Growth Factor Concentrate], a non-surgical option that harnesses growthfactors</p>
         
          </div>
        </div>
        </div>
        </div>
            </div>
          
          <!-- --------------------------- -->
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
    </body>
</html>
