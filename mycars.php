<?php
    include 'navbar.php';
    include 'database/database.php';
    include 'repositories/CarRepository.php';

    if(!isset($_SESSION['user_id'])) {
        header('Location: login.php');
    }

    if(isset($_SESSION['is_admin']) && $_SESSION['is_admin']) {
        header('Location: index.php');
    }
    
    $repo = new CarRepository($conn);
    $cars = $repo->readByOwnerId($_SESSION['user_id']);
?>


<div class="some_cars">
        <h2 style="text-align: center;">Veturat e tua</h2>
        
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

