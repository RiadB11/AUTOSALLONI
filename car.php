<?php    
    include 'navbar.php';
    include 'database/database.php';
    include 'repositories/CarRepository.php';
    include 'repositories/UserRepository.php';

    if(isset($_GET['id'])) {
        $repo = new CarRepository($conn);
        $repo2 = new UserRepository($conn);
        $car = $repo->readById($_GET['id']);
        $user = $repo2->readById($car[0]['listuesi_id']);
        $blersi = null;
        if($car[0]['owner_id'] != null) {
            $blersi = $repo2->readById($car[0]['owner_id']);
        }
    } else {
        header('Location: index.php');
    }

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/car.css">
</head>

<div class="car">
    <img src="photos/<?= $car[0]['foto'] ?>" alt="kerr">
    <div class="car_infos">
        <h1><?= $car[0]['emri'] ?></h1>
        <ul>
            <li><b>Listuesi:</b> <?= isset($_SESSION['user_id']) && $user[0]['id'] == $_SESSION['user_id'] ? "You" : $user[0]['fullname'] ?></li>
            <li><b>Viti:</b> <?= $car[0]['viti'] ?></li>
            <li><b>Kilometrazhi:</b> <?= $car[0]['kilometrazhi'] ?>KM</li>
            <li><b>Motorri:</b> <?= $car[0]['motorri'] ?></li>
            <li><b>Qmimi:</b> <?= $car[0]['qmimi'] ?>&euro;</li>
        </ul>
        <?php if($blersi != null) echo $blersi[0]['id'] == $_SESSION['user_id'] ? "Blere nga ti" : "Blere nga ".$blersi[0]['fullname']; ?>
        <?php if(isset($_SESSION['is_loggedin']) && $_SESSION['is_loggedin'] && $blersi == null && !$_SESSION['is_admin']) : ?>
            <a href="buy_car.php?id=<?=$car[0]['id']?>&owner_id=<?=$_SESSION['user_id']?>"><button class="bleje_butoni">Bleje tani</button></a>
        <?php endif; ?>
    </div>
</div>