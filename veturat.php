<?php
    include 'navbar.php';
    include 'database/database.php';
    include 'repositories/CarRepository.php';
    
    $repo = new CarRepository($conn);

    $cars = $repo->readUnowned();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/veturat.css">
</head>
<body>

    <div class="cars_card" style="margin-block: 60px">

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

</body>
 </html>


    <script src="js/veturat.js"></script>