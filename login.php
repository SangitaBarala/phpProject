
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
        function checkForBlank(){
            if(document.getElementById('email').value == ''){
                alert('please enter some data ');
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
        .title{
            background-color: chartreuse;
            padding: 30px;
        }
        .container{
            margin-top: 150px;
            width: 40%;
            background-color: goldenrod;
            padding: 20px;
            border-radius: 7px;
        }
        .row{
            margin: auto;
        }
        .registerBtn{
            margin-left: 20px;
            font-size: 18px;
            text-align: center;
        }
        .registerBtn:hover{
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
<body style="background-color: aqua;">
<h2 class="title">Shopping Cart</h2>
<div class="container">
    <section class="formRegister"><h2 style="text-align: center">Sign In</h2></section>
        <form name="myForm" action="lib/register.php" method="post" onsubmit="return checkForBlank()">
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
                <div class="col-6"><button type="submit" class="btn btn-primary">Login</button></div>
                <div class="col-6"><a class="registerBtn" href="index.php">Register</a></div>
            </div>
        </form>
    </div>
</div>
    </div>
</div>
</body>
</html>