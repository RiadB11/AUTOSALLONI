<?php
    include 'database/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
    <title>AutoSalloni</title>
</head>
<body>
    <header>
        <div class="meny">
            <img src="photos/logo.png" alt="logo">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="për_ne.html">Për ne</a></li>
                <li><a href="veturat.html">Veturat</a></li>
                <li><a href="administrata.html">Administratë</a></li>
                <li><a href="kontakti.html">Kontakti</a></li>
                <li><a href="login.html">Log in</a></li>
            </ul>
            <i class="fas fa-bars ikona"></i>
     </div>

     <div class="foto1">
        <div class="h11">
            <h1>Blini makinën tuaj të ëndërrave!</h1>
            <p>Veturat e fundit ne tregun e automobilizimit.</p>
        </div>
     </div>
    <br>
    <h2 style="text-align: center;">Të gjitha veturat</h2>
    <br>
    <br>
    <br>
    <div class="wrapper cars-card">
        <div class="container">
            <img src="photos/mercedes.png" class="car--photo" alt="mercedes">
            <div class="cards-holder">
                <div class="card">
                    <img src="photos/logoja.png" />
                    <p>MERCEDES GTR</p>
                </div>
                <hr>
                <div class="second-cart">
                    <p>2023</p>
                    <p>0 km</p>
                </div>
            </div>
        </div>
        <div class="container">
            <img src="photos/lambo.png" class="car--photo" alt="mercedes">
            <div class="cards-holder">
                <div class="card">
                    <img src="photos/logol.png" />
                    <p>LAMBORGHINI</p>
                </div>
                <hr>
                <div class="second-cart">
                    <p>2023</p>
                    <p>0 km</p>
                </div>
            </div>
        </div>
        <div class="container">
            <img src="photos/ferrari1.png" class="car--photo" alt="mercedes">
            <div class="cards-holder">
                <div class="card">
                    <img src="photos/logof.png" />
                    <p>LA FERRARI</p>
                </div>
                <hr>
                <div class="second-cart">
                    <p>2023</p>
                    <p>0 km</p>
                </div>
            </div>
        </div>
        <div class="container">
            <img src="photos/bmw.logo.jpg" class="car--photo" alt="bmw">
            <div class="cards-holder">
                <div class="card">
                    <img src="photos/logobmw.png" />
                    <p>BMW M760</p>
                </div>
                <hr>
                <div class="second-cart">
                    <p>2023</p>
                    <p>0 km</p>
                </div>
            </div>
        </div>
        <div class="container">
            <img src="photos/audi.png" class="car--photo" alt="audi">
            <div class="cards-holder">
                <div class="card">
                    <img src="photos/logoa.png" />
                    <p>AUDI SQ8 4.0 TFSI</p>
                </div>
                <hr>
                <div class="second-cart">
                    <p>2023</p>
                    <p>0 km</p>
                </div>
            </div>
        </div>
        <div class="container">
            <img src="photos/bentley.png" class="car--photo" alt="bentley">
            <div class="cards-holder">
                <div class="card">
                    <img src="photos/logob.png" />
                    <p>BENTELY BENTAYGA</p>
                </div>
                <hr>
                <div class="second-cart">
                    <p>2023</p>
                    <p>0 km</p>
                </div>
            </div>
        </div>
        
        <div class="container">
            <img src="photos/porsche.png" class="car--photo" alt="porsche">
            <div class="cards-holder">
                <div class="card">
                    <img src="photos/logopors.png" />
                    <p>PORSCHE 911 TURBO S</p>
                </div>
                <hr>
                <div class="second-cart">
                    <p>2023</p>
                    <p>0 km</p>
                </div>
            </div>
        </div>

        <div class="container">
            <img src="photos/g1class.png" class="car--photo" alt="g1class">
            <div class="cards-holder">
                <div class="card">
                    <img src="photos/logomer.png" />
                    <p>G CLASS BRABUS</p>
                </div>
                <hr>
                <div class="second-cart">
                    <p>2023</p>
                    <p>0 km</p>
                </div>
            </div>
        </div>

        <div class="container">
            <img src="photos/maybach.png" class="car--photo" alt="maybach">
            <div class="cards-holder">
                <div class="card">
                    <img src="photos/logomer.png" />
                    <p>MERCEDES MAYBACH S 580</p>
                </div>
                <hr>
                <div class="second-cart">
                    <p>2023</p>
                    <p>0 km</p>
                </div>
            </div>
        </div>
        

    </header>   
    <div class="footer">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1>Pse na zgjodhet ne?</h1>
        <div class="icons">
            <div class="icon-container">
                <i class="fa-regular fa-message"></i>
                <p><b>Pse duhet të na zgjidhni ne</b></p>
                <p>Sepse, 99% të klientëve tanë kthehen përsëri<br> tek ne, 
                për të blerë veturë pas blerjes së parë.</p>
            </div>
            <div class="icon-container">
                <i class="fa-solid fa-city"></i>
                <p><b>MISIONI DHE VIZIONI</b></p>
                <p><span class="small-text">Puna jonë ndërton besueshmërinë ndaj<br>
                klientëve tanë, qëllimi ynë është t’i ofrojmë<br>
                klientit tanë makinën më të mirë me çmimin<br> 
                të volitshëm.</p>
            </div>
            <div class="icon-container">
                <i class="fa-solid fa-car"></i>
                <p><b>RRUGËTIMI YNË</b></p>
                <p>Sot, kompania bën shitjen e prodhimeve të të<br>
                 gjithë prodhuesve kryesorë evropiane dhe<br>
                  botëror të veturave.</p>
            </div>
        </div>

        <div class="p-container">
            <p style="font-size: 38px;">Newsletter</p>
        <div class="button">
            <input type="text" placeholder="Your email adress" style="border: 2px solid black;">
         <button type="Sign up" style="color: white;">Sign up</button>
        </div>
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

