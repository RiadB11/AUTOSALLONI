<?php
    include './database/Database.php';
    include 'repositories/UserRepository.php';

    $repo = new UserRepository($conn);

    

    $user = $repo->readByEmail("riad@gmail.com");

    if(count($user) > 0) {
        echo "ekziston, shkruje ni imell tjeter";
    } else {
        echo "nuk ekziston, munesh me kriju";
    }
