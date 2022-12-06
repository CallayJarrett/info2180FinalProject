<?php session_start(); ?>
<html>
    <!Doctype html>

    <head>
        <meta charset ="UTF-8"/>
        <meta name= "viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet"  href="styles.css"/>
        <script src="scripts/login.js"> </script>
        <script src="scripts/logout.js"> </script>
        <script src="scripts/homepage.js"> </script>
        <script src="scripts/newcontact.js"> </script>
        <script src="scripts/newnote.js"> </script>
        <script src="scripts/viewcontact.js"> </script>
        <script src="scripts/viewusers.js"> </script>
        <script src="scripts/newuser.js"> </script>
        <script src="scripts/updatecontact.js"> </script>
        <script src="https://kit.fontawesome.com/6b465b3e69.js" crossorigin="anonymous"></script>
        <title>Dolphin CRM</title>
    </head>

    <body>
        <section id="flex-parent">

            <header>
            <img src="dolphin.png" alt="Logo with a Cute Blue Dolphin"/>
                <p id="logotitle">Dolphin CRM</p>
            </header>

            <div id="central">

                <aside class="sidenav">
                    <div class="menu"><button id="home"><i class="fas fa-home-lg-alt"></i> Home</button></div>
                    <div class="menu"><button id ="newcontact"> <i class="fa-solid fa-circle-user"></i> New Contact</button></div>
                    <div class="menu" id = "adminonly"><button id="viewusers"> <i class="fa-solid fa-user-group"></i>>Users</button></div>
                    <hr>
                    <div class="menu"><button id="logout"> <i class="fa-solid fa-right-from-bracket fa-flip-horizontal"></i>Logout</button></div>
                </aside>

                <section id="changearea"> 
                    <form id="login">
                        <h1 class="formtitle">Login</h2>
                        <div class="formstatus"> </div>
                        <div class="formgrp"> 
                            <input class="inputnormal" type="email" placeholder="Email address" name="email" required>
                        </div>
                        <div class="formgrp"> 
                            <input class="inputnormal" type="password" placeholder="Password" name="password" required>
                        </div>
                        <button type= "submit" name="submitbtn" id="submitbtn"> <i class="fa-light fa-lock"></i> <span> Login </span></button>
                    </form> 
                </section>

                <footer id="footer">
                    <hr>
                    <p>Copyright &copy; 2022 Dolphin CRM</p>
                </footer>
            </div>
        </section>
    </body>

</html>