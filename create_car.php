<?php
    include 'navbar.php';
    include './database/database.php';
    include 'repositories/CarRepository.php';
    
    if(!isset($_SESSION['is_admin']) || !$_SESSION['is_admin']) {
        header('Location: index.php');
    }

    $repo = new CarRepository($conn);

    if($_POST) {
        $car = new Car($_POST['emri'], $_POST['kilometrazhi'], $_POST['viti'], $_POST['motorri'], $_FILES['car_file']['name'], $_POST['qmimi']);
        $repo->create($car);
    }
?>
<br>

<div class="form_holder">
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        <input type="text" placeholder="emri" name="emri">
        <input type="number" placeholder="kilometrazhi" name="kilometrazhi">
        <input type="date" placeholder="viti" name="viti">
        <input type="text" placeholder="motorri" name="motorri">
        <input type="number" placeholder="qmimi" name="qmimi">
        <input type="file" name="car_file">
        <button type="submit">Krijo Kerrin</button>
    </form>
</div>

<style>
     
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</style>