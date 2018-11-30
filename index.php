<?php
session_start();
if(isset($_GET['session'])){
	session_destroy();
	header("Location: index.php");
}
include('config.php');
        echo '
                <html>
                    <head>
                        <title>
                            Cinema website
                        </title>
                        <link rel="stylesheet" href="css/bootstrap.css">
                        <link rel="stylesheet" href="css/Rstyle.css">
                        <link rel="stylesheet" href="css/style.css">
						<script>
						function price(){
								var s =document.getElementById("seats").value;
								var r= s*50 ;
								alert ("The price is " + r+" L.E.") ;
								}
						</script>
                    </head>
                    
                    <body>
                        <nav class="navbar navbar-inverse" role="navigation" navbar-fixed-top>
                          <div class="container">
                            
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                              
                              <a class="navbar-brand" href="#">Cinema</a>
                            </div>
                        
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="menu" >
                              <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#booking">Booking</a></li>
                                <li><a href="#Actors">Actors</a></li>
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
                                  <ul class="dropdown-menu">';
									if(isset($_SESSION['email'])){
										echo '<li><a href="index.php?session=0">signout</a></li>';
									}
									else{
										echo '<li><a href="signup.html">signup</a></li>
										      <li role="separator" class="divider"></li>
											<li><a href="signin.html">signin</a></li>';
									}
									echo '
                                  </ul>
                                </li>
                              </ul>
                            </div><!-- /.navbar-collapse -->
                          </div><!-- /.container-fluid -->
                        </nav>
                        
                        
                    
                        <h1 class="head text-center">Movies</h1>
                        
                        <!--carsoel-->
                            <div id="slide" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#slide" data-slide-to="0" class="active"></li>
                                  <li data-target="#slide" data-slide-to="1"></li>
                                  <li data-target="#slide" data-slide-to="2"></li>
                                </ol>
                              
                                <!-- Wrapper for slides -->
                                
                                <div class="carousel-inner" ">
                                  <div class="item active">
                                    <img src="Images/wonder.jpg" alt="...">
                                    <div class="carousel-caption">
                                       <h1>Captain America</h1>
                                       <p class="lead">It is 1941 and the world is in the throes of war. Steve Rogers (Chris Evans)
                                                       wants to do his part and join Americas armed forces, but the military rejects him because of his small stature. </p>
                                    </div>
                                  </div>
                                  <div class="item">
                                    <img src="Images/f6.jpg" alt="...">
                                    <div class="carousel-caption" >
                                        <h1>Fast &Furious 6</h1>
                                        <p class="lead" >Since Dom (Vin Diesel) and Brians (Paul Walker) heist in Rio left them and their crew very rich people,
                                                         they have scattered across the globe; however, they must still live as fugitives, unable to return home to their families. </p>
                                    </div>
                                  </div>
                                  <div class="item">
                                    <img src="Images/cabin.jpg" alt="...">
                                    <div class="carousel-caption">
                                        <h1>The Cabin in the woods</h1>
                                        <p class="lead">When five college friends (Kristen Connolly, Chris Hemsworth, Anna Hutchison, Fran Kranz, Jesse Williams)
                                                        arrive at a remote forest cabin for a little vacation, little do they expect the horrors that await them. </p>
                                    </div>
                                  </div>
                                </div>
                              
                                <!-- Controls -->
                                <a class="left carousel-control" href="#slide" role="button" data-slide="prev">
                                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#slide" role="button" data-slide="next">
                                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                            </div>
                            
                            
                            
                            
                            <section id="booking" class="speak"->
                                <div class="container">
                                        <h3> <p class="lead text-center">Book your seats </p></h3>
                                        
                                        <script type="text/javascript">
                                            function filmChange(selectObj) {
                                              var selectIndex=selectObj.selectedIndex;
                                              var selectValue=selectObj.options[selectIndex].value
                                              var strArray = selectValue.split("_");
                                              var output=document.getElementById("seats");
                                              output.max=strArray[1];
                                            }
                                        </script>
            
            
                                        <form name="form" method="post" action="creditcard.php" onsubmit="price()">
                                            <select name="film" id="films" onchange="filmChange(this);"  required >
											<option value ="" disabled selected hidden>Select the film</option>';
                                            $q="select * from films";
                                            $sql=mysqli_query($connection,$q);
                                            
                                             while($row=mysqli_fetch_array($sql)){                                                 
                                                echo "<option value='".$row['id']."_".$row['seats']."'>".$row['name']."</option>";
                                             }
                                            
                                            echo '
                                            </select>
                                            <select name="time" required>
											<option value ="" disabled selected hidden>Select time</option>
											<option>12:00 pm</option>
                                            <option>3:00 pm</option>
                                            <option>6:00 pm</option>
											<option>9:00 pm</option>
											<option>12:00 am</option>
											<option>3:00 am</option>
                                            </select>
                                            <input type="number" min="1" placeholder="NO.seats" id="seats" name="seats" required>
                                            <input type="submit" value="Book" >
                                        </form>
                                    </div>
                                
                           </section>
        
                            
                            <section id="Actors"class="Actors">
                                <div class="container">
                                    <h1 class="head text-center">Most popular actors in this month</h1>
                                     <div id="act" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                          <li data-target="#act" data-slide-to="0" class="active">
                                            <img src="Images/rock.jpg">
                                          </li>
                                          <li data-target="#act" data-slide-to="1">
                                            <img src="Images/gal.jpg">
                                          </li>
                                          <li data-target="#act" data-slide-to="2">
                                            <img src="Images/vin.jpg">
                                          </li>
                                        </ol>
                                      
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" >
                                            
                                          <div class="item active">
                                            <h1 class="text-center">Dwayne Johnson</h1>
                                            <p class="lead">He acts in many fantastic movies like <span>Skyscraper , Central Intelligence , The Fast and Furious and g.i.joe:retaliation </span></p>
                                          </div>
                                          
                                          
                                          <div class="item">
                                            <h1 class="text-center"h1>Gal Gadot</h1>
                                            <p class="lead">She acts in many fantastic movies like <span>Wonder woman , Justice League and The Fast and Furious </span></p>
                                          </div>
                                          
                                          
                                          <div class="item">
                                             <h1 class="text-center"h1>Vin Diesel</h1>
                                             <p class="lead">He acts in many fantastic movies like <span>The Fast and Furious , Avenders , XXX and The Last Witch Hunter </span></p>
                                               
                                        
                                          </div>
                                          
                                        </div>      
                                </div>     
                            </section>
                            <!-- contact us-->
							<div class="footer" style="
														    margin-top: 120px;
															background-color: #222;
															height: 118px;
															color: #9d9d9d;
															text-align: center;
															font-size: 17px;
														"
							>
								<p>Posted by: George Eshak</p>
								<p>Contact information:0122 847 5071</p>
							    Copyright &copy; 2018
								
							</div>
                         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                        <script src="js/bootstrap.min.js"></script>
                    </body>
                </html>
                    
';
?>

