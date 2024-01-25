<?php
    $matches = [
        [
            'home' => 'Atlanta Hawks',
            'guest' => 'Chicago Bulls',
            'home_points' => 98,
            'guest_points' => 114
        ],
        [
            'home' => 'Cleveland Cavaliers',
            'guest' => 'Charlotte Hornets',
            'home_points' => 78,
            'guest_points' => 121
        ],
        [
            'home' => 'Oklahoma City Thunder',
            'guest' => 'Los Angeles Clippers',
            'home_points' => 76,
            'guest_points' => 111
        ],
        [
            'home' => 'Golden State Warriors',
            'guest' => 'Los Angeles Lakers',
            'home_points' => 132,
            'guest_points' => 109
        ],
        [
            'home' => 'Denver Nuggets',
            'guest' => 'Sacramento Kings',
            'home_points' => 96,
            'guest_points' => 112
        ],
        [
            'home' => 'Phoenix Suns',
            'guest' => 'New Orleans Pelicans',
            'home_points' => 88,
            'guest_points' => 119
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Snack1</title>
</head>
<body>
    <div class="container">
         <div class="row">
            <div class="col-12">
                <h1 class="text-white pt-3">Risultati delle partite:</h1>
            </div>

            <?php foreach ($matches as $match) {  ?>

                <div class="col-6 py-5">

                    <div class="match_info">
                        <h4 class="text-center fw-bold"><?php echo $match['home']." - ".$match['guest'];  ?></h4>
                        <h5 class="text-center fw-bold py-1"> Finale: </h5>
                        <p class="text-center"><?php echo $match['home_points']." - ".$match['guest_points'];  ?></p>
                    </div>

                </div>

            <?php } ?>
        </div>
    </div>    
</body>
</html>