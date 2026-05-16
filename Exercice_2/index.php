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
    $age = 21;
    $sexe = "feminin";

    if (($age >= 21 && $age < 41) && $sexe === "feminin") {
        echo "Bienvenue sur monSite.com, Nous somme très heureux de 
vous revoir !";
    } else {
        echo "Bienvenue sur monSite.com";
    }
    ?>
</body>

</html>