<?php
    
	$servername = "localhost";
	$username = "root";
	$password = "kanika";
	$dbname = "mywebsite";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
    $sql2 = "SELECT pid FROM personal_info ORDER BY pid DESC"; 
    $result2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_array($result2); 
	
	$sql3 = "SELECT * FROM personal_info where pid='{$row2["pid"]}'"; 
    $result3 = mysqli_query($conn, $sql3);
	$row3 = mysqli_fetch_array($result3);
	
	/*$sql4 = "SELECT * FROM socialmedia_links where pid='{$row2["pid"]}'"; 
    $result4 = mysqli_query($conn, $sql4);
	$row4 = mysqli_fetch_array($result4);*/
	
	$sql5 = "SELECT * FROM skills where pid='{$row2["pid"]}'"; 
    $result5 = mysqli_query($conn, $sql5);
	$row5 = mysqli_fetch_array($result5);
	
	$sql6 = "SELECT * FROM Xth where pid='{$row2["pid"]}'"; 
    $result6 = mysqli_query($conn, $sql6);
	$row6 = mysqli_fetch_array($result6);
	
	$sql7 = "SELECT * FROM Xllth where pid='{$row2["pid"]}'"; 
    $result7 = mysqli_query($conn, $sql7);
	$row7 = mysqli_fetch_array($result7);
	
	$sql8 = "SELECT * FROM ug where pid='{$row2["pid"]}'"; 
    $result8 = mysqli_query($conn, $sql8);
	$row8 = mysqli_fetch_array($result8);
	
	$sql9 = "SELECT * FROM pg where pid='{$row2["pid"]}'"; 
    $result9 = mysqli_query($conn, $sql9);
	$row9 = mysqli_fetch_array($result9);
	
	$sql10 = "SELECT * FROM resume where pid='{$row2["pid"]}'"; 
    $result10 = mysqli_query($conn, $sql10);
	$row10 = mysqli_fetch_array($result10);
	
	$sql11 = "SELECT * FROM interest where pid='{$row2["pid"]}'"; 
    $result11 = mysqli_query($conn, $sql11);
	$row11 = mysqli_fetch_array($result11);
	
	
	
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title><?php echo $row3[1]; ?></title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css1/base.css">  
   <link rel="stylesheet" href="css1/main.css">
   <link rel="stylesheet" href="css1/vendor.css">    
   <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

   <!-- script
   ================================================== -->   
	<script src="js1/modernizr.js"></script>
	<script src="js1/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header>   	
   	<div class="row">

   		<div class="top-bar">
   			<a class="menu-toggle" href="#"><span>Menu</span></a>     

		   	<nav id="main-nav-wrap">
					<ul class="main-navigation">
						<li class="current"><a class="smoothscroll"  href="#intro" title="">Home</a></li>
						<li><a class="smoothscroll"  href="#about" title="">About</a></li>
						<li><a class="smoothscroll"  href="#resume" title="">Resume</a></li>
					<!--	<li><a class="smoothscroll"  href="#portfolio" title="">Portfolio</a></li-->
						<li><a class="smoothscroll"  href="#portfolio" title="">Interests</a></li>		
					<!--	<li><a class="smoothscroll"  href="#contact" title="">Contact</a></li>		-->
					</ul>
				</nav>    		
   		</div> <!-- /top-bar --> 
   		
   	</div> <!-- /row --> 		
   </header> <!-- /header -->

	<!-- intro section
   ================================================== -->
   <section id="intro">   

   	<div class="intro-overlay"></div>	

   	<div class="intro-content">
   		<div class="row">

   			<div class="col-twelve">

	   			<h5>Hello, World.</h5>
	   			<h1>I'm <?php echo $row3[1]; ?>.</h1>

	   			<p class="intro-position">
					<span>Student</span>
	   			<!--	<span>Developer</span-->
	   				 
	   			</p>

	   			<a class="button stroke smoothscroll" href="#about" title="">More About Me</a>

	   		</div>  
   			
   		</div>   		 		
   	</div> <!-- /intro-content --> 

   	<ul class="intro-social">        
         <li><a href=""><i class="fa fa-facebook"></i></a></li>
         <li><a href=""><i class="fa fa-linkedin"></i></a></li>
         <li><a href=""><i class="fa fa-twitter"></i></a></li>
         <li><a href=""><i class="fa fa-github"></i></a></li>
         <li><a href=""><i class="fa fa-instagram"></i></a></li>
      </ul> <!-- /intro-social -->      	

   </section> <!-- /intro -->


   <!-- about section
   ================================================== -->
   <section id="about">  

   	<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>About</h5>
   			<h1>Let me introduce myself.</h1>

   			<div class="intro-info">

   				<img src="imageView.php?image_id=<?php echo $row3[0]; ?>" alt="Profile picture"  />

   				<p class="lead"><?php echo $row3["about"]; ?></p>
   			</div>   			

   		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row about-content">

   		<div class="col-six tab-full">

   			<h3><u>Profile</u></h3>
   		<!--	<p>Lorem ipsum Qui veniam ut consequat ex ullamco nulla in non ut esse in magna sint minim officia consectetur nisi commodo ea magna pariatur nisi cillum.</p> -->

   			<ul class="info-list">
   				<li>
   					<strong>Fullname:</strong>
   					<span><?php echo $row3[1]; ?></span>
   				</li>
   				<li>
   					<strong>Birth Date:</strong>
   					<span><?php echo $row3["DOB"]; ?></span>
   				</li>
   			<!--	<li>
   					<strong>Job:</strong>
   					<span>Freelancer, Frontend Developer</span>
   				</li> 
   				<li>
   					<strong>Website:</strong>
   					<span>www.kardswebsite.com</span>
   				</li> -->
   				<li>
   					<strong>Email:</strong>
   					<span><?php echo $row3["email"]; ?></span>
   				</li>

   			</ul> <!-- /info-list -->

   		</div>

   		<div class="col-six tab-full">

   			<h3><u>Skills</u></h3>
   		<!--	<p>Lorem ipsum Qui veniam ut consequat ex ullamco nulla in non ut esse in magna sint minim officia consectetur nisi commodo ea magna pariatur nisi cillum.</p> -->

				<ul class="skill-bars">
				   <li>
				   	<div class="progress percent<?php echo $row5["html"]; ?>"><span><?php echo $row5[0]; ?>%</span></div>
				   	<strong>HTML</strong>
				   </li>
				   <li>
				   	<div class="progress percent<?php echo $row5["css"]; ?>"><span><?php echo $row5[1]; ?>%</span></div>
				   	<strong>CSS</strong>
				   </li>
				   <li>
				   	<div class="progress percent<?php echo $row5["php"]; ?>"><span><?php echo $row5[4]; ?>%</span></div>
				   	<strong>PHP</strong>
				   </li>
				   <li>
				   	<div class="progress percent<?php echo $row5["cpp"]; ?>"><span><?php echo $row5[2]; ?>%</span></div>
				   	<strong>c++</strong>
				   </li>
				   <li>
				   	<div class="progress percent<?php echo $row5[3]; ?>"><span><?php echo $row5[3]; ?>%</span></div>
				   	<strong>java</strong>
				   </li>
				   <li>
				   	<div class="progress percent<?php echo $row5["python"]; ?>"><span><?php echo $row5[5]; ?>%</span></div>
				   	<strong>python</strong>
				   </li>
      
				</ul> <!-- /skill-bars -->		

   		</div>

   	</div>

   	<div class="row button-section">
   		<div class="col-twelve">
   		<!--	<a href="#contact" title="Hire Me" class="button stroke smoothscroll">Hire Me</a>-->
			
   			<a href="uploads/pdf/<?php echo $row10["data"];?>" title="Download CV" class="button button-primary">Download CV</a>
   		</div>   		
   	</div>

   </section> <!-- /process-->    


   <!-- resume Section
   ================================================== -->
	<section id="resume" class="grey-section">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Resume</h5>
   			<h1>More of my credentials.</h1>

   		<!--	<p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p> -->

   		</div>   		
   	</div> <!-- /section-intro--> 

  <!-- 	<div class="row resume-timeline">

   		<div class="col-twelve resume-header">

   			<h2>Work Experience</h2>

   		</div> <!-- /resume-header 

   		<div class="col-twelve">

   			<div class="timeline-wrap">

   				<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-graduation-cap"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>UI Designer</h3>
	   					<p>July 2015 - Present</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>Awesome Studio</h4>
	   					<p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi.</p>
	   				</div>

	   			</div> <!-- /timeline-block 

	   			<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-graduation-cap"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Front-end Developer</h3>
	   					<p>July 2014 - June 2015</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>Super Cool Agency</h4>
	   					<p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi incididunt.</p>
	   				</div>

	   			</div> <!-- /timeline-block 

	   			<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-graduation-cap"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Web Designer</h3>
	   					<p>May 2013 - June 2014</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>Great Designs Studio</h4>
	   					<p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi incididunt.</p>
	   				</div>

	   			</div> <!-- /timeline-block -->

   			</div> <!-- /timeline-wrap -->   			

   		</div> <!-- /col-twelve -->
   		
   	</div> <!-- /resume-timeline -->
   	
   	<div class="row resume-timeline">

   		<div class="col-twelve resume-header">

   			<h2>Education</h2>

   		</div> <!-- /resume-header -->

   		<div class="col-twelve">

   			<div class="timeline-wrap">

   				<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-graduation-cap"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Master Degree</h3>
	   					<p><?php echo $row9["startYear"]." - ".$row9["endyear"] ;?></p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4><?php echo $row9["university"] ;?></h4>
	   					<p>I am pursuing <?php echo $row9["course"] ;?> from <?php echo $row9["university"] ;?>.</p>
	   				</div>

	   			</div> <!-- /timeline-block -->

	   			<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-graduation-cap"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Bachelor Degree</h3>
	   					<p><?php echo $row8["startYear"]." - ".$row8["endYear"] ;?></p>
	   				</div>

	   				<div class="timeline-content"> 
	   					<h4><?php echo $row8["university"] ;?></h4>
	   					<p>I have done <?php echo $row8["course"] ;?> from <?php echo $row8["university"] ;?>.</p>
	   				</div>

	   			</div> <!-- /timeline-block -->

	   			<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-university "></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Intermediate</h3>
	   					<p><?php echo $row7["Xll_startYear"]." - ".$row7["Xll_endYear"] ;?></p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4><?php echo $row7["Xll_school"] ;?></h4>
	   					<p>I had secured <?php echo $row7["per"] ;?>% marks in my 12th standard.</p>
	   				</div>

	   			</div> <!-- /timeline-block -->
				
				<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-university"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Matriculation</h3>
	   					<p><?php echo $row6["X_startYear"]." - ".$row6["X_endYear"] ;?></p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4><?php echo $row6["X_school"] ;?></h4>
	   					<p>I had secured <?php echo $row6["cgpa"] ;?> CGPA in my 10th standard.</p>
	   				</div>

	   			</div> <!-- /timeline-block -->

   			</div> <!-- /timeline-wrap -->   			

   		</div> <!-- /col-twelve -->
   		
   	</div> <!-- /resume-timeline -->
		
	</section> <!-- /features -->


	<!-- Portfolio Section
   ================================================== -->
	<section id="portfolio">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Portfolio</h5>
   			<h1>Check Out Some of My Interests.</h1>

   		<!--	<p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p>-->

   		</div>   		
   	</div> <!-- /section-intro-->

   	<div class="row portfolio-content">

   		<div class="col-twelve">

   			<!-- portfolio-wrapper -->
	         <div id="folio-wrapper" class="block-1-2 block-mob-full stack">

	         	<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img  alt="Liberty" style="width:800px" style="heigth:1000px" src="uploads/pdf/<?php echo $row11["one"];?>">
	                  <a href="#modal-01" class="overlay">	                  	           
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
		     					       <h3 class="folio-title"></h3>	     					    
		     					    	 <span class="folio-types">
		     					       	  
		     					       </span>
		     					   </div>	                      	
	                     </div>                    
	                  </a>
	               </div>	               
	        		</div> <!-- /folio-item -->

	        		<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img  style="width:800px" style="heigth:801px" src="uploads/pdf/<?php echo $row11["two"];?>">
	               	<a href="#modal-02" class="overlay">              		                  
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title"></h3>	     					    
		     					    	<span class="folio-types">
		     					       	  
		     					      </span>		     		
		     					   </div> 	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->

	            <div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img  alt="Clouds" style="width:800px" style="heigth:801px" src="uploads/pdf/<?php echo $row11["three"];?>">
	                  <a href="#modal-03" class="overlay">             		                  
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title"></h3>	     					    
		     					    	<span class="folio-types">
		     					       	  
		     					      </span>		     		
		     					   </div> 	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item--> 

	            <div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img  alt="Beetle" style="width:800px" style="heigth:801px" src="uploads/pdf/<?php echo $row11["four"];?>">
	                  <a href="#modal-04" class="overlay">                  	                 
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title"></h3>	     					    
		     					    	<span class="folio-types">
		     					       	  
		     					      </span>		     		
		     					   </div>  	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item    -->  

	        		<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img  alt="Lighthouse" style="width:800px" style="heigth:1000px" src="uploads/pdf/<?php echo $row11["five"];?>">
	                  <a href="#modal-05" class="overlay">             		                  
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title"></h3>	     					    
		     					    	<span class="folio-types">
		     					       	  
		     					      </span>		     		
		     					   </div> 	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->

	            <div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img  alt="Salad" style="width:800px" style="heigth:801px" src="uploads/pdf/<?php echo $row11["six"];?>">
	                  <a href="#modal-06" class="overlay">
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title"></h3>	     					    
		     					    	<span class="folio-types">
		     					       	  
		     					      </span>		     		
		     					   </div>	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->   

	            <!-- modal popups - begin
	            ============================================================= -->
	            <div id="modal-01" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="images/portfolio/modals/m-liberty.jpg" alt="" />
				     	</div>      	

					   <div class="description-box">
					      <h4>Liberty</h4>		      
					      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

					      <div class="categories">Web Development</div>			               
					   </div>

			         <div class="link-box">
			            <a href="http://www.behance.net">Details</a>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-01 -->

				   <div id="modal-02" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="images/portfolio/modals/m-shutterbug.jpg" alt="" />
				     	</div>      	

					   <div class="description-box">
					      <h4>Shutterbug</h4>		      
					      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

					      <div class="categories">Web Design</div>			               
					   </div>

			         <div class="link-box">
			            <a href="http://www.behance.net">Details</a>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-02 -->

				   <div id="modal-03" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="images/portfolio/modals/m-clouds.jpg" alt="" />
				     	</div>      	

					   <div class="description-box">
					      <h4>Clouds</h4>		      
					      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

					      <div class="categories">Web Design</div>			               
					   </div>

			         <div class="link-box">
			            <a href="http://www.behance.net">Details</a>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-03 -->

				   <div id="modal-04" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="images/portfolio/modals/m-beetle.jpg" alt="" />
				     	</div>      	

					   <div class="description-box">
					      <h4>Beetle</h4>		      
					      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

					      <div class="categories">Branding</div>			               
					   </div>

			         <div class="link-box">
			            <a href="http://www.behance.net">Details</a>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-04 -->

				   <div id="modal-05" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="images/portfolio/modals/m-lighthouse.jpg" alt="" />
				     	</div>      	

					   <div class="description-box">
					      <h4>Lighthouse</h4>		      
					      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

					      <div class="categories">Web Development</div>			               
					   </div>

			         <div class="link-box">
			            <a href="http://www.behance.net">Details</a>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-05 -->

				   <div id="modal-06" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="images/portfolio/modals/m-salad.jpg" alt="" />
				     	</div>      	

					   <div class="description-box">
					      <h4>Salad</h4>		      
					      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

					      <div class="categories">Branding</div>			               
					   </div>

			         <div class="link-box">
			            <a href="http://www.behance.net">Details</a>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-06 -->


				   <!-- modal popups - end
	            ============================================================= -->

	         </div> <!-- /portfolio-wrapper  -->

   		</div>  <!-- /twelve -->

   	</div> <!-- /portfolio-content -->
		
	</section> <!-- /portfolio-->


	<!-- CTA Section
   ================================================== 
	<section id="cta" class="grey-section">

   	<div class="row cta-content">

   		<div class="col-twelve section-ads">  

	     		<h2 class="h01"><a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Styleshout Recommends Dreamhost.</a></h2>

		      <p class="lead">
		      Looking for an awesome and reliable webhosting? Try <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT"><span>DreamHost</span></a>.
				Get <span>$50 off</span> when you sign up with the promocode <span>styleshout</span>. 
				<!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. 
				</p>

				<div class="action">
			      <a class="button button-primary large" href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Sign Up Now</a>
		      </div>		     	

   		</div>

   	</div> <!-- /cta-content 

   </section> <!-- /cta --> 

	
	<!-- services Section
   ================================================== 
	<section id="services">

		<div class="overlay"></div>

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Services</h5>
   			<h1>What Can I Do For You?</h1>

<!--<p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p>

   		</div>   		
   	</div> <!-- /section-intro 

   	<div class="row services-content">

   		<div id="owl-slider" class="owl-carousel services-list">

	   <!--   	<div class="service">	

	      		<span class="icon"><i class="icon-earth"></i></span>            

	            <div class="service-content">	

	            	 <h3>Webdesign</h3>

		            <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	         		</p>
	         		
	         	</div> 	         	 

				</div> <!-- /service 
	
				<div class="service" >	

					<span class="icon"><i class="icon-window"></i></span>                          

	            <div class="service-content" style="float:middle">	

	            	<h3>Web Development</h3>  

		            <p class="desc">I can create the same Website as of mine for you. You just need to provide me little information about yourself <a class="link" href="form.html"><u>here</u></a> .
	         		</p>

	            </div>	                          

			   </div> <!-- /service -->
		

			

			<!--   <div class="service">

			   	<span class="icon"><i class="icon-paint-brush"></i></span>		            

	            <div class="service-content">

	            	<h3>Branding</h3>

		            <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	        			</p> 

	            </div> 	            	               

			   </div> <!-- /service -->

	<!--			<div class="service">

					<span class="icon"><i class="icon-toggles"></i></span>	              

	            <div class="service-content">

	            	<h3>UI/UX Design</h3>

		            <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	         		</p> 
	         		
	            </div>                

				</div> <!-- /service -->

		<!--	   <div class="service">

			   	<span class="icon"><i class="icon-image"></i></span>	            

	            <div class="service-content">

	            	<h3>Graphics Design</h3>

		            <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	        			</p> 

	            </div>	               

			   </div> <!-- /service -->

		<!--	   <div class="service">

			   	<span class="icon"><i class="icon-chat"></i></span>	   	           

	            <div class="service-content">

	            	 <h3>Consultancy</h3>

		            <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	        			</p> 
	        			
	            </div>	               

			   </div> <!-- /service 

	      </div> <!-- /services-list 
   		
   	</div> <!-- /services-content 
		
	</section> <!-- /services -->	


	<!-- stats Section
   ================================================== -->
<!--	<section id="stats" class="count-up">

		<div class="row">
			<div class="col-twelve">

				<div class="block-1-6 block-s-1-3 block-tab-1-2 block-mob-full stats-list">

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-pencil-ruler"></i>
						</div>

						<h3 class="stat-count">
							1500
						</h3>

						<h5 class="stat-title">
							Projects Completed
						</h5>

					</div> <!-- /stat 				

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-users"></i>
						</div>

						<h3 class="stat-count">
							900
						</h3>

						<h5 class="stat-title">
							Happy Clients
						</h5>

					</div> <!-- /stat 

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-badge"></i>
						</div>

						<h3 class="stat-count">
							200
						</h3>

						<h5 class="stat-title">
							Awards Received
						</h5>

					</div> <!-- /stat 									

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-light-bulb"></i>
						</div>

						<h3 class="stat-count">
							120
						</h3>

						<h5 class="stat-title">
							Crazy Ideas
						</h5>

					</div> <!-- /stat 

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-cup"></i>
						</div>

						<h3 class="stat-count">
							1500
						</h3>

						<h5 class="stat-title">
							Coffee Cups
						</h5>

					</div> <!-- /stat 

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-clock"></i>
						</div>

						<h3 class="stat-count">
							7200
						</h3>

						<h5 class="stat-title">
							Hours
						</h5>

					</div> <!-- /stat 

				</div> <!-- /stats-list 

			</div> <!-- /twelve 
		</div> <!-- /row 

	</section> <!-- /stats -->

	
   <!-- contact
   ================================================== -->
<!--	<section id="contact">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Contact</h5>
   			<h1>I'd Love To Hear From You.</h1>

   			<p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p>

   		</div> 
   	</div> <!-- /section-intro 

   	<div class="row contact-form">

   		<div class="col-twelve">

            <!-- form 
            <form name="contactForm" id="contactForm" method="post" action="">
      			<fieldset>

                  <div class="form-field">
 						   <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
                  </div>
                  <div class="form-field">
	      			   <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
	               </div>
                  <div class="form-field">
	     				   <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
	               </div>                       
                  <div class="form-field">
	                 	<textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
	               </div>                      
                 <div class="form-field">
                     <button class="submitform">Submit</button>
                     <div id="submit-loader">
                        <div class="text-loader">Sending...</div>                             
       				      <div class="s-loader">
								  	<div class="bounce1"></div>
								  	<div class="bounce2"></div>
								  	<div class="bounce3"></div>
								</div>
							</div>
                  </div>

      			</fieldset>
      		</form> <!-- Form End -->

            <!-- contact-warning 
            <div id="message-warning">            	
            </div>            
            <!-- contact-success 
      		<div id="message-success">
               <i class="fa fa-check"></i>Your message was sent, thank you!<br>
      		</div>

         </div> <!-- /col-twelve -->
   		
   	</div> <!-- /contact-form 

   	<div class="row contact-info">

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-pin"></i>
   			</div>

   			<h5>Where to find me</h5>

   			<p>
            1600 Amphitheatre Parkway<br>
            Mountain View, CA<br>
            94043 US
            </p>

   		</div>

   		<div class="col-four tab-full collapse">

   			<div class="icon">
   				<i class="icon-mail"></i>
   			</div>

   			<h5>Email Me At</h5>

   			<p>someone@kardswebsite.com<br>
			   	info@kardswebsite.com			     
			   </p>

   		</div>

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-phone"></i>
   			</div>

   			<h5>Call Me At</h5>

   			<p>Phone: (+63) 555 1212<br>
			   	Mobile: (+63) 555 0100<br>
			     	Fax: (+63) 555 0101
			   </p>

   		</div>
   		
   	</div> <!-- /contact-info -->
		
	</section> <!-- /contact -->


   <!-- footer
   ================================================== -->

   <footer>
     	<div class="row">

     	<!--	<div class="col-six tab-full pull-right social">

     			<ul class="footer-social">        
			      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
			      <li><a href="#"><i class="fa fa-behance"></i></a></li>
			      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
			      <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
			      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
			   </ul> 
	      		
	      </div>

      	<div class="col-six tab-full">
	      	<div class="copyright">
		        	<span>© Copyright Kards 2016.</span> 
		        	<span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>	         	
		         </div>		                  
	      	</div>
-->
	      	<div id="go-top">
		         <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
		      </div>

      	</div> <!-- /row -->     	
   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js1/jquery-2.1.3.min.js"></script>
   <script src="js1/plugins.js"></script>
   <script src="js1/main.js"></script>

</body>

</html>