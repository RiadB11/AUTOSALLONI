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