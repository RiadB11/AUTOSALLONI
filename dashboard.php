<?php
    include 'navbar.php';
    include 'database/database.php';
    include 'repositories/UserRepository.php';
    
    if(!isset($_SESSION['is_admin']) || !$_SESSION['is_admin']) {
        header('Location: index.php');
    }

    $repo = new UserRepository($conn);
    
    $users = $repo->getAllUsers();
?>

<table border="1">
  <tr>
    <th>Emri</th>
    <th>Email</th>
    <th>Bilanci</th>
    <th>Modifikimi</th>
  </tr>
  <?php foreach($users as $user): ?>
    <?php if($user['id'] != $_SESSION['user_id']): ?>
        <tr>
            <td><?= $user['fullname'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['bilanci'] ?></td>
            <td><a href="edito.php?id=<?=$user['id']?>">Modifiko Bilancin</a></td>
        </tr>
    <?php endif; ?>
  <?php endforeach; ?>
</table>

<style>
    body {
        font-family: Arial, sans-serif;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    a {
        text-decoration: none;
        color: #3498db;
    }

    a:hover {
        color: #2980b9;
    }
</style>