<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/tdg/css/style.css">
    <link rel="stylesheet" href="/tdg/css/navbar.css">


    <title>My First php website</title>
</head>
<body>

    <header>
        <div class="navbar">
            <img class="top-logo" src="/tdg/images/neo-logo-svgrepo-com.svg" alt="logo" width="80" height="64">
            <nav>
                <ul class="navbar-ul">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Programs</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>
   
   
    <div class="container">
        <img class="bg-img" src="/tdg/images/bg.jpg" alt="college-image">
        <h1>Travel Form Website</h1>
        <p>This is a website for filling form regarding IIT Kharagpur Travelling Program</p>

        <?php

        if ($insert == true) {
            echo "<p class='submitMsg'>Thanks For submitting. Now you gand marao</p>";
        }
        
        ?>

        <form action="/tdg/main.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="text" name="id-number" id="id-number" placeholder="Enter Your ID Number">
            <input type="text" name="age" id="age" placeholder="Enter Your Age">
            <input type="text" name="school" id="school" placeholder="Enter Your School">
            <button class="btn">Submit</button>
            <button class="btn">Reset</button>
        </form>
</div>
</body>
</html>
