<html>
<head>
    <title>signup Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
        .container{
            margin-top: 50px;
            width: 50%;
            background-color: goldenrod;
            padding: 20px;
            border-radius: 7px;
        }
        .buttons{
            display: inline;
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
        .title{
            background-color: chocolate;
            padding: 30px;
        }
    </style>
</head>
<body>
<h2 class="title">Shopping Cart</h2>
<!--<h2 class="title"><img src="https://i.pinimg.com/564x/4f/f1/eb/4ff1eb14567f3ce4faba25ff6beb031b.jpg" height="100px" width="150px"><i style="font-family: Calibri Light; color: goldenrod"> S&A shopping Site</i></h2>-->
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