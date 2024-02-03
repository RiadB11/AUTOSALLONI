<?php
    include 'navbar.php';
    include 'database/database.php';
    include 'repositories/CarRepository.php';
    
    $repo = new CarRepository($conn);

    $cars = $repo->readLastTenUnowned();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="slider">
        <i class="ph ph-arrow-left prev--icon" onclick="slide(-1)"></i>
        <div class="slides">
            <div class="slideItem foto1" style="background-image: url('photos/bugati.png');">
                <h1>Blini makinën tuaj të ëndërrave!</h1>
                <p>Veturat e fundit ne tregun e automobilizimit.</p>
            </div>

            <div class="slideItem" style="background-image: url('photos/lamborghini3.jpg');">
                <h1>Blini makinën tuaj të ëndërrave!</h1>
                <p>Veturat e fundit ne tregun e automobilizimit.</p>
            </div>

            <div class="slideItem" style="background-image: url('photos/ferrar3.jpg');">
                <h1>Blini makinën tuaj të ëndërrave!</h1>
                <p>Veturat e fundit ne tregun e automobilizimit.</p>
            </div>
        </div>
        <i class="ph ph-arrow-right next--icon" onclick="slide(1)"></i>
    </div>

    <div class="some_cars">
        <h2 style="text-align: center;">Disa nga veturat</h2>
        
        <div class="cars_card">
            <?php foreach($cars as $car) : ?>
                <div class="car_container">
                    <img src="photos/<?=$car['foto']?>" class="car_photo" alt="<?=$car['emri']?>">
                    <div class="cards_holder">
                        <div class="car_card">
                            <a href="car.php?id=<?=$car['id']?>"><?=$car['emri']?></a>
                        </div>
                        <hr>
                        <div class="second_car_card">
                            <p><?=$car['viti']?></p>
                            <p><?=$car['kilometrazhi']?> km</p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    <div class="icons_holder">
        <h1>Pse na zgjodhet ne?</h1>
        <div class="icons">
            <div class="icon-car_container">
                <i class="fa-regular fa-message"></i>
                <p><b>Pse duhet të na zgjidhni ne</b></p>
                <p>Sepse, 99% të klientëve tanë kthehen përsëri<br> tek ne, 
                për të blerë veturë pas blerjes së parë.</p>
            </div>
            <div class="icon-car_container">
                <i class="fa-solid fa-city"></i>
                <p><b>MISIONI DHE VIZIONI</b></p>
                <p><span class="small-text">Puna jonë ndërton besueshmërinë ndaj<br>
                klientëve tanë, qëllimi ynë është t’i ofrojmë<br>
                klientit tanë makinën më të mirë me çmimin<br> 
                të volitshëm.</p>
            </div>
            <div class="icon-car_container">
                <i class="fa-solid fa-car"></i>
                <p><b>RRUGËTIMI YNË</b></p>
                <p>Sot, kompania bën shitjen e prodhimeve të të<br>
                    gjithë prodhuesve kryesorë evropiane dhe<br>
                    botëror të veturave.</p>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="p-car_container">
            <p style="font-size: 38px;">Newsletter</p>
            <div class="button">
                <input type="text" placeholder="Your email adress">
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

    <script src="js/slider.js"></script>
    </body>
</html>
