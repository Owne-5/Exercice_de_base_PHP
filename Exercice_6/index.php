<!DOCTYPE html>
<html>

<head>
    <title>Ceci est une page de test avec des balises PHP</title>
    <meta charset="utf-8" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: "Roboto", sans-serif;
        }


        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #2d2d2d;
            color: #fff;
            min-height: 100vh;
            gap: 1rem;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #ffffff;
            color: #000000;
            border-radius: 15px;
            padding: 2rem;
            width: 24rem;
            gap: 2rem;

        }

        li {
            display: block;
            list-style: none;
        }

        #red {
            color: red;
            padding: 1rem;
            border-radius: 15px;
            background-color: #ffcaca;
        }

        #blue {
            color: blue;
            padding: 1rem;
            border-radius: 15px;
            background-color: #b9e1ff;
        }

        #green {
            color: green;
            padding: 1rem;
            border-radius: 15px;
            background-color: #cbffd2;
        }

        #liste {
            width: 100%;
            display: flex;
            text-align: center;
            flex-direction: column;
            gap: .4rem;
        }
    </style>
</head>

<body>
    <?php
    $num = 20;
    $found = false;

    while (!$found) {
        $random_num = rand(2, $num);
        $count = 0;


        for ($i = 1; $i <= $random_num; $i++) {
            if ($random_num % $i === 0) {
                $count++;
            }
        }

        if ($count === 2) {
            $found = true;
            echo "Nombre premier trouvé par la boucle While(): " . $random_num;
        }
    }
    ?>
    <br>
    <br>
    <?php
    $num = 20;
    $found = false;

    do {
        $random_num = rand(2, $num);
        $count = 0;



        for ($i = 1; $i <= $random_num; $i++) {
            if ($random_num % $i === 0) {
                $count++;
            }
        }

        if ($count === 2) {
            $found = true;
            echo "Nombre premier trouvé par la boucle do...While: " . $random_num;
        }
    } while (!$found)
    ?>
</body>

</html>