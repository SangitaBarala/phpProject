<html>
<head>
    <title>signup Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script>
        function checkForBlank() {
            var x = document.forms["myForm"]["fname"].value;
            if (x == "") {
                alert("Name must be filled out");
                return false;
            }
        }
    </script>
    <style>
        body{
            background-image: url('https://images.pexels.com/photos/531880/pexels-photo-531880.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');
            background-size: cover;
            background-repeat: no-repeat;
        }
        .navbar{
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: chocolate;
            color: white;
        }
        .BrandName{
            font-size: 1.5rem;
            margin: .5rem;
            font-family: Bahnschrift;
        }
        .navbar-links ul{
            margin: 0;
            padding: 0;
            display: flex;
        }
        .navbar-links li{
            list-style: none;
        }
        .navbar-links li a{
            text-decoration: none;
            color: white;
            display: block;
            padding: 8px;
            margin-right: 10px;
        }
        .navbar-links a:hover{
            background-color: white;
            color: chocolate;
            border-radius: 7px;
        }
        .toggle-button{
            position: absolute;
            top: .75rem;
            right: 1rem;
            display: none;
            flex-direction: column;
            justify-content: space-between;
            width: 30px;
            height: 21px;
        }
        /* .toggle-button .bar{
             height: 3px;
             width: 100%;
             border-radius: 10px;
             background-color: white;
         }*/
        @media(max-width: 400px){
            .toggle-button{
                display: flex;
            }
            .navbar-links{
                width: 100%;
            }
            .navbar{
                flex-direction: column;
                align-items: flex-start;
            }
            .navbar-links ul{
                flex-direction: column;
                width: 100%;
            }
            .navbar-links li {
                text-align: center;
            }
            .navbar-links li a{
                padding: 8px;
                margin: 5px;
            }
            .navbar-links.active{
                display: flex;
            }
        }
        .container{
            margin-top: 50px;
            width: 50%;
            background-color: goldenrod;
            padding: 20px;
            border-radius: 7px;
        }
        .row{
            margin: auto;
        }
        .loginBtn{
            margin-left: 10px;
        }
        .loginBtn:hover{
            color: black;
        }
        .formRegister{
            border-bottom: 1px solid darkslategrey;
            margin-bottom: 10px;
            color: darkslategrey;
        }
        /*.navbar{
            background-color: chocolate;
            padding: 30px;
            height: 100px;
            overflow: hidden;
        }
        .navbar a {
            float:
            text-align: center;
            padding: 12px;
            color: white;
            text-decoration: none;
            font-size: 18px;
        }
        .navbar h1{
            color: white;
            font-family: "Palatino Linotype";
        }*/
        .navbar i{
            margin-right: 2px;
        }
    </style>
</head>
<body>
<!--<div class="navbar">
    <h1>Shopping Hues Clothing</h1>
    <a href="index.php"><i class="fa fa-home"></i>Home</a>
</div>
<h2 class="title"><img src="https://i.pinimg.com/564x/4f/f1/eb/4ff1eb14567f3ce4faba25ff6beb031b.jpg" height="100px" width="150px"><i style="font-family: Calibri Light; color: goldenrod"> S&A shopping Site</i></h2>-->
<div class="navbar">
    <div class="BrandName">Shopping Hues Clothing</div>
    <a href="#" class="toggle-button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </a>
    <div class="navbar-links">
        <ul>
            <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="login.php"><i class="fa fa-user"></i>Login</a></li>
            <li><a href="register.php"><i class="fa fa-registered"></i>Register</a></li>
        </ul>
    </div>
</div>
<div class="container">
    <section class="formRegister"><h2 style="text-align: center">Register here</h2></section>
    <div class="alert alert-success" role="alert">
        Registered Successfully!
    </div>
                <form name="myForm" action="lib/register.php" method="post" onsubmit="return checkForBlank()">
                    <div class ='form-group'>
                        <label for="task">First Name:</label>
                        <input type="text" class="form-control"  id="fname" placeholder="Enter first name" name="firstname">
                    </div>
                    <div class ='form-group'>
                        <label for="task">Last Name:</label>
                        <input type="text" class="form-control" placeholder="Enter last name" name="lastname">
                    </div>
                    <div class ='form-group'>
                        <label for="task">E-mail:</label>
                        <input type="email" class="form-control" placeholder="Enter email address" name="email">
                    </div>
                    <div class ='form-group'>
                        <label for="task">Password:</label>
                        <input type="password" class="form-control" placeholder="Enter password" name="pwd">
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-6"><button type="submit" class="btn btn-primary">Register</button></div>
                        <div class="col-6"><a class="loginBtn" href="login.php">Already a member?</a></div>
                    </div>
                </form>
        </div>
    </div>
</div>
</body>
</html>