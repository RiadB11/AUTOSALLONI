<?php
    // ktu i kena bo include se kena me perdor Database.php edhe UserRepository.php
    include './database/Database.php';
    include 'repositories/UserRepository.php';

    // e kena kriju ni instanc t UserRepository se kena me ja perdor metoden create amo kur e kena kriju ja kena qu connection n kllapa, a pe din pse amo pse po na detyron me ja qu n kllapa, pergjigjja osht se qikjo UserRepository e pranon ni connection n konstruktor, kqyre, sa her t krijojsh instanca ose objekte t klasav, puna e par qe bahet ai shkon te konstruktori edhe e kqyr a po perputhet, nese e kishe ba new UserRepository() pa i qu sen, kish gjujt error se ajo klas konstruktor t that nuk ka, gjith ju duhet me pranu ni vler, n kit rast pe perdor $conn, amo ku pe mer qit $conn? ktu variabel me emrin $conn nuk kena deklaru, amo nese e man n men te Database.php e kena deklaru, tani e kena bo include ktu Database.php, qe pi bjen krejt kodin e database.php, na munum me perdor qitu, po n qit rast pe perdorum veq qat variabel, a e kape po ama qyky repositories cfare kuptimi ka qe e bonum userRepository, me qat klas na me mujt me kriju usera, me update me delete e qisi sene aha tash bon edhe mu log in edhe sign out, per momentin t bon veq me sign up, se e kem veq funksionin create, veq qata e bonum niher 
    $repo = new UserRepository($conn);

    // tash ktu pi thojm nese realizohet qikjo, athere boma echo mesazhin, ktu passi cili osht 
    // if($repo->create(new User('riad bozhlani 2', 'riad2@gmail.com', 'riadi234'))) {
    //     echo 'created successfully';
    // }

    // print_r($repo->readById(5));
    $user = $repo->readByEmail("riad@gmail.com");

    if(count($user) > 0) {
        echo "ekziston, shkruje ni imell tjeter";
    } else {
        echo "nuk ekziston, munesh me kriju";
    }
