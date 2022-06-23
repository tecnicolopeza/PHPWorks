<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100%;
            height: 100vh;
            /* background-color: aqua; */
        }

        .banner {
            width: 100%;
            height: 10%;
            background-color: blueviolet;
            margin-bottom: 15%;
        }

        .p-contenido{
            margin: 0 auto;
            width: 50%;
            /* text-align: center; */
            /* font-family: sans-serif; */
            font-weight: bold;
            font-size: 1.5rem;
        }
    </style>
</head>

<body>
    <?php 
        if (isset($_REQUEST['colorBanner'])) {
            $colorBanner = $_REQUEST['colorBanner'];
        }
    ?>
    <style>
        .banner{background-color: <?= $colorBanner ?>;}
    </style>
    <div class="banner"></div>
    <div class="contenido">
        <p class="p-contenido">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsam officiis obcaecati quod pariatur consequuntur praesentium quisquam aliquam fuga assumenda debitis quidem numquam vitae magni et voluptate dolorum accusantium. Consectetur?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis possimus iste repudiandae expedita asperiores dicta dolorem maxime molestias libero, tenetur totam itaque impedit, laborum tempore veniam cum aliquam! Mollitia, facilis!</p>
    </div>
</body>

</html>