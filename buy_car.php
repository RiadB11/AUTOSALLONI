<?php
    session_start();
    include 'database/database.php';
    include 'repositories/CarRepository.php';
    include 'repositories/UserRepository.php';
    
    if(isset($_SESSION['is_admin']) && $_SESSION['is_admin']) {
        header('Location: index.php');
    }

    if(!isset($_GET['id']) || !isset($_GET['owner_id'])) {
        header('Location: index.php');
    }

    $repo = new CarRepository($conn);
    $repo2 = new UserRepository($conn);

    $car = $repo->readById($_GET['id']);
    $user = $repo2->readById($_GET['owner_id']);

    if(!$car || is_array($car) && count($car) == 0 || !$user || is_array($user) && count($user) == 0) {
        header('Location: index.php');
    }

    if($user[0]['bilanci'] < $car[0]['qmimi']) {
        header('Location: index.php');
    }

    $repo->buyCar($car[0]['id'], $user[0]['id']);
    $repo2->editBalance($user[0]['id'], ($user[0]['bilanci']-$car[0]['qmimi']));
    header('Location: index.php');
?>