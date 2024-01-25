<?php

    $dates = [
        '12/04/2021' => [
            [
                'title' => 'Post 1',
                'author' => 'Marco Benfi',
                'text' => 'Bella a tutti'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Marco Benfi',
                'text' => 'Bella a tutti'
            ],
        ],
        '22/06/2021' => [
            [
                'title' => 'Post 3',
                'author' => 'Marco Benfi',
                'text' => 'Bella a tutti'
            ]
        ],
        '15/07/2021' => [
            [
                'title' => 'Post 4',
                'author' => 'Marco Benfi',
                'text' => 'Bella a tutti'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Marco Benfi',
                'text' => 'Bella a tutti'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Marco Benfi',
                'text' => 'Bella a tutti'
            ]
        ],
    ];

    foreach($dates as $key => $date){
        echo $key."<br>";;
        foreach($date as $post){
            echo $post['title']."<br>";
            echo $post['author']."<br>";;
            echo $post['text']."<br>";;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Snack3</title>
</head>
<body>
    
</body>
</html>