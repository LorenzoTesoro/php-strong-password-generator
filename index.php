<?php

include 'functions.php';

if (isset($_GET['password_length'])) {
    echo pass_generator(($_GET['password_length']));
}

/* Milestone 3 (BONUS)
1 Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli.
2- Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). 3-Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. */

//var_dump($_GET['repetition']);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <!-- Bootstrap cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>

<body>
    <form action="index.php" method="get">
        <div class="mb-3">
            <label for="password_length" class="form-label">Lunghezza password</label>
            <input type="number" class="form-control" name="password_length" id="password_length" aria-describedby="helpId" placeholder="type a password">
        </div>
        <div class="mb-3">
            <div>Consenti la riproduzione di uno o più caratteri:</div>
            <input type="radio" name="repetition" id="repetition" value="1">
            <label for="repetition" class="form-label">Sì</label>
            <input type="radio" name="repetition" id="repetition" value="2">
            <label for="repetition" class="form-label">No</label>
        </div>
        <div class="mb-3 d-flex">
            <label for="letters" class="form-label">Lettere</label>
            <input type="checkbox" class="form-control" name="letters" id="letters" aria-describedby="helpId" placeholder="type a password">
            <label for="numbers" class="form-label">Numeri</label>
            <input type="checkbox" class="form-control" name="numbers" id="numbers" aria-describedby="helpId" placeholder="type a password">
            <label for="symbols" class="form-label">Simboli</label>
            <input type="checkbox" class="form-control" name="symbols" id="symbols" aria-describedby="helpId" placeholder="type a password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>



    <!-- Bootstrap libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>