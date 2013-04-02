<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="Signup.css" type="text/css" media="screen" />
<link rel="stylesheet" href="Login.css" type="text/css" media="screen" />
<link href="engn/css/layout.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
<h2>Slambook</h2>
</div>
<div id="strip">
</div>
<div id="mark">
<a href="#"><img src="mark.png" alt="About"></a>
</div>
<div id="wrapper_menu"><!-- BEGIN MENU WRAPPER -->
	<ul class="menu menu_black"><!-- BEGIN MENU -->
		<li class="right"><a href="#" class="drop"><h3>Signup</h3></a><!-- Begin Contact Item -->
            
            
            <div class="dropdown_2columns align_right"><!-- Begin right aligned container -->
        
        
                <div class="col_2 firstcolumn">
                
                    <h2>Connect with us</h2>

                    <form action="register.php" method="post"><!-- Begin contact form -->
                            
                        <fieldset>
                        
                            <p><label>First Name*</label><input type="text" size="30" maxlength="20" name="first_name" value="<?php if(isset($_POST['first_name'])) echo $_POST['first_name']; ?>"/></p>
                            <p><label>Last Name*</label><input type="text" size="30" maxlength="20" name="last_name" value="<?php if(isset($_POST['last_name'])) echo $_POST['last_name']; ?>" /></p>
                            <p><label>Email*</label><input type="text" size="30" maxlength="30" name="email" value="<?php if(isset($_POST['email'])) echo  $_POST['email']; ?>" /></p>
                            <p><label>Password*</label><input type="password" size="30" maxlength="20" name="pass1" value="<?php if(isset($_POST['pass1'])) echo $_POST['pass1']; ?>" /></p>
                            <p><label>Confirm Password*</label><input type="password" size="30" maxlength="20" name="pass2" value="<?php if(isset($_POST['pass2'])) echo $_POST['pass2']; ?>" /></p>
                            <p><label>Phone No.*</label><input type="text" size="30" maxlength="10" name="phone" value="<?php if(isset($_POST['phone'])) echo $_POST['phone']; ?>" /></p>
                            <button type="submit" name="submit" value="Register" >Signup</button>
                        
                        </fieldset>		
                                
                    </form><!-- End contact form -->

                </div>
            
            
            </div><!-- End right aligned container -->
              
              
        </li><!-- End Contact Item -->
    
    
    </ul><!-- END MENU -->


</div><!-- END MENU WRAPPER -->

<div id="wrapper_menu"><!-- BEGIN MENU WRAPPER -->
	<ul class="menu1 menu_black"><!-- BEGIN MENU -->
		<li class="right"><a href="#" class="drop"><h3>Login</h3></a><!-- Begin Contact Item -->
            
            
            <div class="dropdown_2columns align_right"><!-- Begin right aligned container -->
        
        
                <div class="col_2 firstcolumn">
                
          

                    <form action="login.php" method="post"><!-- Begin contact form -->
                            
                        <fieldset>
                        
                            <p><label>Username*</label><input type="text" name="email" size="30" maxlength="30"/></p>
                            <p><label>Password*</label><input type="password" name="pass1" size="30" maxlength="30" /></p>
                            <button type="submit" class="submit" value="Login" >Login</button>
                        
                        </fieldset>		
                                
                    </form><!-- End contact form -->

                </div>
			</div><!-- End right aligned container -->
              
              
        </li><!-- End Contact Item -->
    
    
    </ul><!-- END MENU -->


</div><!-- END MENU WRAPPER -->
<div class="container">
            <div class="gear" id="gear1"></div>
            <div class="gear" id="gear3"></div>
			<div class="gear" id="gear2"></div>
        </div>
<div id="bg">
<img src="bg.jpg" alt="background">
</div>
</body>
</html>
</body>
</html>
