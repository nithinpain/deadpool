<?php
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"> <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/dp.jpg">
<title>posts</title>
<link href="https://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
	body{
		background: #eeeeee;
	}
	.up-class{
		margin-left: 35%;
		margin-top: 15%;
	}
    .form-inline {
        display: inline-block;
    }
	.navbar-header.col {
		padding: 0 !important;
	}	
	.navbar {		
		background: #fff;
		padding-left: 16px;
		padding-right: 16px;
		border-bottom: 1px solid #d6d6d6;
		box-shadow: 0 0 4px rgba(0,0,0,.1);
	}
	.nav-link img {
		border-radius: 50%;
		width: 36px;
		height: 36px;
		margin: -8px 0;
		float: left;
		margin-right: 10px;
	}
	.navbar .navbar-brand {
		color: #555;
		padding-left: 0;
		padding-right: 50px;
		font-family: 'Merienda One', sans-serif;
	}
	.navbar .navbar-brand i {
		font-size: 20px;
		margin-right: 5px;
	}
	.search-box {
        position: relative;
    }	
    .search-box input {
		box-shadow: none;
        padding-right: 35px;
        border-radius: 3px !important;
    }
	.search-box .input-group-addon {
        min-width: 35px;
        border: none;
        background: transparent;
        position: absolute;
        right: 0;
        z-index: 9;
        padding: 7px;
		height: 100%;
    }
    .search-box i {
        color: #a0a5b1;
		font-size: 19px;
    }
	.navbar .nav-item i {
		font-size: 18px;
	}
	.navbar .dropdown-item i {
		font-size: 16px;
		min-width: 22px;
	}
	.navbar .nav-item.open > a {
		background: none !important;
	}
	.navbar .dropdown-menu {
		border-radius: 1px;
		border-color: #e5e5e5;
		box-shadow: 0 2px 8px rgba(0,0,0,.05);
	}
	.navbar .dropdown-menu li a {
		color: #777;
		padding: 8px 20px;
		line-height: normal;
	}
	.navbar .dropdown-menu li a:hover, .navbar .dropdown-menu li a:active {
		color: #333;
	}	
	.navbar .dropdown-item .material-icons {
		font-size: 21px;
		line-height: 16px;
		vertical-align: middle;
		margin-top: -2px;
	}
	.navbar .badge {
		background: #f44336;
		font-size: 11px;
		border-radius: 20px;
		position: absolute;
		min-width: 10px;
		padding: 4px 6px 0;
		min-height: 18px;
		top: 5px;
	}
	.navbar ul.nav li a.notifications, .navbar ul.nav li a.messages {
		position: relative;
		margin-right: 10px;
	}
	.navbar ul.nav li a.messages {
		margin-right: 20px;
	}
	.navbar a.notifications .badge {
		margin-left: -8px;
	}
	.navbar a.messages .badge {
		margin-left: -4px;
	}	
	.navbar .active a, .navbar .active a:hover, .navbar .active a:focus {
		background: transparent !important;
	}
	@media (min-width: 1200px){
		.form-inline .input-group {
			width: 300px;
			margin-left: 30px;
		}
	}
	@media (max-width: 1199px){
		.form-inline {
			display: block;
			margin-bottom: 10px;
		}
		.input-group {
			width: 100%;
		}
	}
</style>
</head> 
<body>
<nav class="navbar navbar-default navbar-expand-xl navbar-light">
          <div class="barbar">
             <div class="navbar-header d-flex col">
               <a class="navbar-brand" href="#"><i class="#lush_life"></i>dead<b>pool</b></a>  		
               <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
                 <span class="navbar-toggler-icon"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
               </button>
             </div>
            
             <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
               <ul class="nav navbar-nav">
                 <li class="nav-item active"><a href="copyhome.html" class="nav-link">Home</a></li>
                 <li class="nav-item"><a href="friends.html" class="nav-link">friends</a></li>
                 <li class="nav-item dropdown">
              
                 </li>
                 <li class="nav-item"><a href="post.php" class="nav-link">write a post</a></li>
                 <li class="nav-item"><a href="recent.php" class="nav-link">my posts</a></li>
               </ul>
               <form class="navbar-form form-inline">
                 <div class="input-group search-box">								
                   <input type="text" id="search" class="form-control" placeholder="search in deadpool">
                   <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
                 </div>
               </form>
               <ul class="nav navbar-nav navbar-right ml-auto">
                 <li class="nav-item"><a href="#" class="nav-link notifications"><i class="fa fa-bell-o"></i><span class="badge">0</span></a></li>
                 <li class="nav-item"><a href="msg.html" class="nav-link messages"><i class="fa fa-envelope-o"></i><span class="badge">0</span></a></li>
                 <li class="nav-item dropdown">
                   <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="images/nithinpp.jpg" class="avatar" alt="Avatar"> nithin pain <b class="caret"></b></a>
                     <ul class="dropdown-menu">
                     <li ><a href="#" class="dropdown-item"><i class="fa fa-user-o"></i> Profile</a></li>
                     <li><a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i> privacy</a></li>
                     <li><a href="#" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a></li>
                     <li class="divider dropdown-divider"></li>
                     <li><a href="logout.html" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Logout</a></li>
                   </ul>
                 </li>
               </ul>
             </div>
           </div>
 </nav>
		

	  
	  
	  
	  
	  
	  
	  
	  <?php



    ?>
	   <div class="up-class">

	   <form action="upload.php" method="POST" enctype="multipart/form-data">
	  <h3> choose a file to post </h3>
	
	
	   <input type="file" name="file" >
	<button  type="submit" name="submit">upload</button>
	

</form>
<div>
        
</body>
</html>                                                        