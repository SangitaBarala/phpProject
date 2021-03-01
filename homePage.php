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
            background-image: url('https://wallpaperaccess.com/full/3166545.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .title{
            background-color: chocolate;
            padding: 30px;
        }
        .row{
            display: inline;
        }
    </style>
</head>
<body>
<section><h2 class="title">Shopping Cart</h2></section>
<div class="row">
    <div class="col-8">

            <div class="col-4">
                <h1 style="color:white; margin-top: 40px;">Shopping Hues</h1>
                <a href="">Shop Now</a>
            </div>
            <div class="col-4">
                <a href="login.php">Login</a>
                <a href="index.php">Register</a>
            </div>

    </div>
</div>

</body>
</html>