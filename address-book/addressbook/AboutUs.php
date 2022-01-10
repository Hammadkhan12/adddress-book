<!DOCTYPE html>
<html lang="en">

<?php
include 'layout/head.php';
?>
 <style>
     @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap');
@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap');
@import url("https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}
body{
    font-family: 'Playfair Display', serif;
    display: grid;
    background-color: #e081d7;
    align-content: center;
    min-height: 100vh;
}
section{
    display: grid;
    grid-template-columns: 1fr 1fr;
    min-height: 90vh;
    width: 85vw;
    margin: 0 auto;
    margin-top:50px;
}
.image{
    background: url("images/JewelCos.jpg") center/cover no-repeat;
    width: 100%;

}
.image img{
    height: 100%;
    width: 100%;
}
.content{
    background: #fff;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    padding: 50px!important;
    border-left:2px solid #e081d7 ;
}
.content h2{
    text-transform: uppercase;
    font-size: 36px;
    letter-spacing: 6px;
    opacity: 0.9;
}
.content h3{
    text-transform: uppercase;
    font-size: 30px;
    letter-spacing: 6px;
    opacity: 0.9;
}
.content span{
    height: 0.5px;
    width: 150px;
    background: #e081d7;
    margin: 15px 0;
}
.content p{
    padding-bottom: 15px;
    font-weight: 300;
    opacity: 0.7;
    width: 60%;
    text-align: center;
    margin: 0 auto;
    line-height: 1.7;
}
.icons{
    display: flex;
    padding: 15px 0;
}
.icons li{
    display: block;
    padding: 5px;
    margin: 5px;
}
.icons li i{
    font-size: 26px;
    opacity: 0.8;
}
.icons li i:hover{
    color: #e081d7;
}


.team-section{
    display: flex;
	background-color: #da8bd2;
	min-height: 50vh;
	padding:10px 10px 10px;
}

.container{
	max-width: 850px;
	margin:auto;
}

.row{
	display: flex;
	flex-wrap: wrap;
}

.team-section .section-title{
	flex-basis: 100%;
	max-width: 100%;
	margin-bottom: 70px;
}

.team-section .section-title h1{
	font-size: 40px;
	text-align: center;
	margin:0;
	color: #030303;
	font-weight: 500;
}

.team-section .section-title p{
	font-size:16px;
	text-align: center;
	margin:15px 0 0;
	color:#ffffff;
}
.team-section .team-items{
	
	flex-basis: 100%;
	max-width: 100%;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-around;
}
.team-section .team-items .item{
 flex-basis: calc(50% - 50px);
 max-width: calc(50% - 50px);
 background-color: #e081d7;
 transition: all .5s ease;
 margin-bottom: 50px;
}
.team-section .team-items .item img{
	display: block;
	width: 100%;
	border-radius: 8px;
}

.team-section .team-items .item .inner{
	position:relative;
	z-index: 11;
	padding:0 15px;
}
.team-section .team-items .item .inner .info{
	background-color: #e081d7;
	text-align: center;
	padding: 20px 15px;
	border-radius:8px;
	transition: all .5s ease;
	margin-top: -40px;
}
.team-section .team-items .item:hover  .info{
    transform: translateY(-20px);
}
.team-section .team-items .item:hover{
 transform: translateY(-20px);	
}
.team-section .team-items .item .inner .info h5{
	margin:0;
	font-size: 18px;
	font-weight: 600;
	color:#ffffff;
}
.team-section .team-items .item .inner .info p{
	font-size: 16px;
	font-weight: 400;
	color:#030303;
	margin:10px 0 0;
}

.team-section .team-items .item .inner .info .social-links{
	padding-top: 15px;
}

.team-section .team-items .item .inner .info .social-links a{
	display: inline-block;
	height: 32px;
	width: 32px;
	background-color: #ffffff;
	color: #e081d7;
	border-radius: 50%;
	margin:0 2px;
	text-align: center;
	line-height: 32px;
	font-size:16px;
	transition: all .5s ease;
}

.team-section .team-items .item .inner .info .social-links a:hover{
	box-shadow: 0 0 10px #000;
}


/*****************/

@media(max-width: 991px){
    section{
        grid-template-columns: 1fr;
        width: 100%;
    }
    .image{
        height: 100vh;
    }
    .content{
        height: 100vh;
    }
    .content h2{
        font-size: 20px;
        margin-top: 200px;
    }
    .content span{
        margin: 20px 0;
    }
    .content p{
        font-size: 14px;
    }
    .links li a{
        font-size: 14px;
    }
    .links{
        margin: 5px 0;
    }
    .links li{
        padding: 6px 10px;
    }
    .icons li i{
        font-size: 15px;
    }
}


/*Our Team responsive*/
@media(max-width: 991px){
	.team-section .team-items .item{
      flex-basis: calc(50% - 30px);
       max-width: calc(50% - 30px);

   }
}

@media(max-width: 767px){
	.team-section .team-items .item{
      flex-basis: calc(100%);
       max-width: calc(100%);

   }
}

 </style>
<body>
<?php include 'layout/navbar.php';?>
  <?php include 'layout/cart.php';?>
  <?php include 'layout/like.php';?>
<section>
            <div class = "image">
                <img src= "images/JewelCos.jpg" ></img>
            </div>

            <div class = "content">
                <h2>About Us</h2>
                <span><!-- line here --></span>

                <p>The ‘Organization Name’ lady isn’t one who loans herself to society’s stereotypes.She knows her brain. She chooses when she needs to adjust and when to hold fast. She has a center of vast quality that shows itself in various ways.</br>

<h3>Our Purpose</h3></br>

Our central goal is to present the ‘Organization Name’ lady to a complex, consistently advancing universe of beauty. We mean to enable her with the capacity to settle on educated beauty decisions, bolstered by fair master exhortation and a cautiously curated scope of beauty answers for take into account her interesting needs.</br>

<h3>Our Belief</h3></br>

‘Organization Name’ represents a solid, new account in beauty, one that lifts up all outflows of independence. We accept there is no single format for beauty. Every lady is particularly wonderful and we might want to accomplice in her voyage to discover and improve it.</br>

<h3>Our Difference</h3></br>

We make beauty easy. We offer you the advantage of decisions between what is beneficial for you and what’s useful for you.We need you to encounter the delight of finding lovely items that appear to be made remembering you. We solidly keep out the mayhem of the commercial center and boudoir, swarmed with jugs and cylinders and containers.</br>

<h3>‘Beauty’ To Us</h3></br>

Beauty originates from being on a first name premise with ourselves. It lies in self-revelation. It very well may be found in the delights of a sluggish, herb-splashed shower and since quite a while ago stemmed wine glasses. In erotic beauty routines, all around adored skin, hair and bodies. In paunch giggles and sentimentality. In tickling or voyaging or tucking in – encounters that open our eyes to ponder.</p> </br>

                
                <ul class = "icons">
                    <li>
                        <i class = "fa fa-twitter"></i>
                    </li>
                    <li>
                        <i class = "fa fa-facebook"></i>
                    </li>
                    <li>
                        <i class = "fa fa-github"></i>
                    </li>
                    <li>
                        <i class = "fa fa-pinterest"></i>
                    </li>
                </ul>
            </div>
        </section>
 
    <!--OurTeam Section-->

        <section class="team-section">
     <div class="container">
         <div class="row">
             <div class="section-title">
                 <h1>Our Team</h1>
                 <p>Our team Consist of Myself jenny And My Assistant maria.We Bring You the Best Imitation Jewelry In town.</p>
             </div>
         </div>
         <div class="row">
             <div class="team-items">
                  <div class="item">
                      <img src="images/OurTeam1.jpg" alt="team" />
                      <div class="inner">
                          <div class="info">
                               <h5>JENNY</h5>
                               <p>ADDRESSBOOK OWNER</p>
                               <div class="social-links">
                                   <a href=""><span class="fa fa-facebook"></span></a>
                                   <a href=""><span class="fa fa-twitter"></span></a>
                                   <a href=""><span class="fa fa-linkedin"></span></a>
                                   <a href=""><span class="fa fa-youtube"></span></a>
                               </div>
                          </div>
                      </div>
                  </div>
                  <div class="item">
                      <img src="images/OT2.jpg" alt="team" />
                      <div class="inner">
                          <div class="info">
                               <h5>MARIA</h5>
                               <p>ADDRESSBOOK MANAGER</p>
                               <div class="social-links">
                                   <a href=""><span class="fa fa-facebook"></span></a>
                                   <a href=""><span class="fa fa-twitter"></span></a>
                                   <a href=""><span class="fa fa-linkedin"></span></a>
                                   <a href=""><span class="fa fa-youtube"></span></a>
                               </div>
                          </div>
                      </div>
                  </div>
             </div>
        </div>
  </section>

  <?php include 'layout/footer.php';?>
<?php
include 'layout/script_files_links.php';
?>
    
</body>
</html>