<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     
        body{
            background: lightgrey;
            margin: 0;
        }
        .navbar{
            background: white;
            padding: 1em;

           

        }
        .logo{
            text-decoration: none;
            font-weight: bold;
            color: lightsalmon;
            font-size: 1.2em;
        }
        nav{
            
        }
        .container{
            display: flex;
        }
        a{
            color: #444444;
            display: block;
            padding: 8px;
        }
        ul{
            float: left;
            list-style-type: none;
            overflow: hidden;


        }

        .home{
            background-color: orange;


        }
        li{
            float: left;
        }
        li a{
            list-style-type: none;
            margin: 0;
            padding: 14 px 16px;
            display: block;
            float: left;
            text-decoration: none;
            text-align: center;
        }
        section{
            
            padding: 5em 2em;
            
        }
        .hero{
            text-align: center;
        }











    </style>




</head>
<body>
    <div class="navbar">
        <div class="container">
            <a class="logo" href="#">Comp 353 </a>

            <nav>
                <ul class="main-nav"> 
                    <li class="home"><a href="#">Home</a></li>
                    <li><a href="Person.php">New Person</a></li>
                    <li><a href="Vaccine.php">Vaccines</a></li>
                    <li><a href="Facility.php">Facilities</a></li>
                </ul>
                
            </nav>
        </div>
    </div>
    <section class="hero">
        <div class="container">
            <p class="first-p">This is a non-profit site build for a project</p>
            <h1>Vaccination &amp; Much more!   </h1>

        </div>
    </section>
    <section class="comment">

        <div class="comment">
            <h2> Comments </h2>
            <form action="">
                <label for="name">Name</label>
                <input type="text" id="name" name="name">

                <label for="email">Email</label>
                <input type="email" id="email" name="email">

                <label for="message">Message</label>
                <textarea type="message" id="message" name="message">


                
            </form>
        </div>
    </section>
    <footer>
        <ul class="sub-nav">
            <li class="current"><a href="#">Contact</a></li>
            <li ><a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/question-and-answers-hub/q-a-detail/coronavirus-disease-covid-19#:~:text=symptoms">More information</a></li>
            <li ><a href="#">Creators</a></li>
        </ul>
      </footer>
</body>
</html>