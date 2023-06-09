<?php
include_once("db_connect.php");
date_default_timezone_set('Asia/Kolkata');
session_start();
?>

<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="cache-control" content="no-cache">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Natural Disaster Management</title>

        <!-- CSS -->   
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">     
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css"> <!-- //allignment of form -->
        <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css"> <!-- //fonts -->
        <link rel="stylesheet" href="../assets/css/form-elements.css"> <!-- //form control style -->
        <link rel="stylesheet" href="../assets/css/style.css"> <!-- //form control style -->  
        <link rel="stylesheet" href="../assets/css/bg.css"> 
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

        <link rel="stylesheet" href="../assets/css/font.css">
        <link rel="stylesheet" href="../assets/css/commons.css">
        <link rel="stylesheet" href="../assets/css/owid.css">      
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="../assets/ico/favicon.ico">

        <style type="text/css">
            table {
            width: 100%;
            border-collapse: collapse;
        }

        table, td, th {
            border: 1px solid black;
            padding: 5px;
        }

        th {text-align: left;}
        </style>

    </head>
<body>
	<header class="site-header">
        <div class="wrapper site-navigation-bar">
            <div class="site-logo"><a href="aindex.php">Natural Disaster <br>Management</a></div>
                <nav class="site-navigation lg-only">
                    <div>
                        <div class="site-primary-navigation">
                            <ul class="site-primary-links">
                                <li><a href="about.php" data-track-click="true" data-track-note="header-navigation">About</a>
                                </li>
                                <li><a href="donate.php" data-track-click="true" data-track-note="header-navigation">Donate</a>
                                </li>                                                                                               
                                <li><a href="contact.php" data-track-click="true" data-toggle="header-navigation" data-track-note="header-navigation">Contact Us</a>
                                <?php 
                                if (isset($_SESSION['user_id'])) { ?>
                                <li><a href="logout.php" data-track-click="true" data-toggle="header-navigation" data-track-note="header-navigation">Logout</a>
                                <?php } ?>
                                </li>
                            </ul>                            
                        </div>
                    </div>
                </nav>
            </div>    
        </header>        
	<div class="container">
    	<style type="text/css">
            @media screen and (min-width: 480px) {
                      body {
                        background-color: #E3F8FD;
                      }
                    }
        </style>        
	    <div class="collapse navbar-collapse" >
	        <ul class="nav navbar-nav navbar-left">
	            <?php
				if (isset($_SESSION['user_id'])){ ?>
			        <li>
			        	<p class="navbar-text"><strong>Welcome! admin:</strong> <strong><?php	echo $_SESSION['user_name'];?>  </strong></p>
			        </li>
			        <!-- <li><a href="logout.php">
			        	<button type="submit" name="logout" value="logout" class="btn btn-primary" />Logout</button>
			        </a></li> -->
			        <?php	
			    } else {?>
			        <li><a href="alogin.php">
						    <br><button type="submit" name="signup" value="Sign Up" class="btn btn-primary" />Login</button>
						</a></li>
			        
			        <?php
					}?>
	       	</ul>
	    </div>    
	</div>
    <div class="container"> <!-- style="margin-top: 20px" -->
    <hr style="height: 15px; color: black;"><h1 style="color: black"><strong>New Contacts</strong></h1>    
           <!--  <div class="row">
            <div class="col-md-12"> -->
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <td><strong>Id</strong></td>
                            <td><strong>Name</strong></td>
                            <td><strong>Email</strong></td>
                            <td><strong>Subject</strong></td>
                            <td><strong>Message</strong></td>
                            <td><strong>Time</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include ('db_connect.php');
                            // $sql = $conn->query('SELECT * FROM contact');
                            $sql = $conn->query('CALL con()');
                            while($data = $sql->fetch_array()) {
                                echo '
                                    <tr> 
                                        <td>'.$data['id'].'</td>                                       
                                        <td>'.$data['name'].'</td>
                                        <td>'.$data['email'].'</td>
                                        <td>'.$data['subject'].'</td>
                                        <td>'.$data['message'].'</td>
                                        <td>'.$data['time'].'</td>
                                    </tr>
                                ';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
<div class="container"> <!-- style="margin-top: 20px" -->
    <br><hr><h1 style="color: black"><strong>Users</strong></h1>    
           <!--  <div class="row">
            <div class="col-md-12"> -->
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <td><strong>Id</strong></td>
                            <td><strong>Name</strong></td>
                            <td><strong>Email</strong></td>                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include ('db_connect.php');
                            $sql = $conn->query('SELECT * FROM users');
                            while($data = $sql->fetch_array()) {
                                echo '
                                    <tr> 
                                        <td>'.$data['uid'].'</td>                                       
                                        <td>'.$data['user'].'</td>
                                        <td>'.$data['email'].'</td>                                        
                                    </tr>
                                ';
                            }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <script

            src="http://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".table").DataTable({    
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

   <!-- footer -->
   <div clasls="co-md-8">
        <section>
            
              <span>
                <br><hr><footer>&copy; Copyright 2019, Natural Disaster Management. </footer>
              </span>
              <br><span>
                All Rights Reserved.
              </span>      
            
        </section>
    </div>	
</body>
</html>
