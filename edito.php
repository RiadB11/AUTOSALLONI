<?php
    include 'navbar.php';
    include 'database/database.php';
    include 'repositories/UserRepository.php';
    
    if(!isset($_SESSION['is_admin']) || !$_SESSION['is_admin']) {
        header('Location: index.php');
    }

    if(!isset($_GET['id'])) {
        header('Location: index.php');
    }

    $repo = new UserRepository($conn);
    
    $user = $repo->readById($_GET['id']);

    if($_POST) {
        if(isset($_POST['ndryshobilancin'])) {
            $repo->editBalance($_GET['id'], $_POST['newbalance']);
            header('Location: dashboard.php');
        }
    }
?>

<form action="<?=$_SERVER['PHP_SELF']?>?id=<?=$_GET['id']?>" method="POST">
    <input type="number" name="newbalance" placeholder="New balance">
    <button name="ndryshobilancin">Ndrysho bilancin</button>
</form>
