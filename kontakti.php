<?php
    include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>Kontakti</title>
    
   
</head>

<body>
    <div class="contact-container">
        <div class="contact-info1">
            <p style="font-size: 33px">NA KONTAKTONI</p>
            <p>Ne ofrojmë gjithçka që ju nevojitet klienteve tanë, në fushën e</p>
            <p>automobilizmit.</p>
            <p style="color: black">Magjistralja Prishtinë - Ferizaj, Rr. Çagllavicë</p>
            <div>
                <i class="fa-solid fa-phone" style="color: red; font-size: 20px"></i>
                <span style="margin-right: 10px;">+383 45 326 515</span>
            </div>
            <div>
                <i class="fa-solid fa-envelope" style="color: red; font-size: 20px;"></i>
                <span style="margin-right: 10px;">bozhlaniriad443@gmail.com</span>
            </div>
        </div>
        <form class="input-container">
            <div class="button-group"> 
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="phone" placeholder="Phone">
            </div>
            <textarea id="content" name="content" rows="4" cols="50" placeholder="Message..." class="content_contact"></textarea>
            <button class="style-button" type="button">Send</button>
        </form>
    </div>

    <footer class="footeri">
           
        <ul>
            
            <li>Home</li>
            <li>Veturat</li>
            <li>Kontakti</li>
        </ul>
        <ul>
            <li>Për ne</li>
            <li>Administratë</li>
        </ul>
        
        <div class="contact-info">
            
             <p style="font-size: 25px;">Na Kontaktoni</p>
             <br>
            <p>Magjistralja Prishtinë - Ferizaj, Rr.Çagllavicë</p>
            <br>
            <i class="fa-solid fa-phone"></i>
            +383 45 326 515, +383 43 888 888
            <br>
             <br>
            <i class="fa-solid fa-envelope"></i> 
            <span>bozhlaniriad443@gmail.com</span>
        </div>  
    </footer>
    <hr>
    
    <p class="copyright">Copyright © 2023. All rights reserved.</p>
    

 </div>
    
    </body>
    </html>

    