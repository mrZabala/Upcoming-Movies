<?php 

const API_CURL = "https://whenisthenextmcufilm.com/api";
$ch = curl_init(API_CURL); #Inicializar una nueva sesion de curl; = curlhandle
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); #Indicar que se recibio el resultado de la peticion sin mostrar nada en pantalla
$result = curl_exec($ch); #Ejecutar la peticion y guardar resultados
$data = json_decode($result, true); //Una alternativa seria usar file_get_contents directamente; $result = file_get_contents(API_URL);  si se quiere hacer GET de la API;
curl_close($ch);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Upcoming Movies</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
    </head>
    <body>

        <main id="esp">
        <h1 class="titleP">Upcoming movies</h1>

            <section class="container">

                    <div class="card">

                        <div class="brand">

                            <h3 class="title-movie">
                                <?= $data["title"]; ?>
                            </h3>

                            <p class="descripcion">
                                <?= $data["overview"]; ?> 
                            </p>

                            <img src="<?= $data["poster_url"]; ?> width="300" />

                            <p class="date">
                                Release date: <?= $data["release_date"]?>
                            </p>

                        </div>

                    </div>

                    <div class="cont-2">

                        <div class="brand2">
                            <h2 class="t-b2">This is the next movie</h2>
                        </div>

                        <div class="arrow">
                            <img id="responsiveImage" class="a-img" src="hh.png" alt="">
                        </div>

                    </div>
                    
                <div class="tt">

                    <div class="card cr2">

                        <div class="brand">
                            <h3 class="title-movie">
                                <?= $data["following_production"] ["title"];?>
                            </h3>
                            <h4>
                                This movie comes out in <?=$data["following_production"] [ "days_until"] ?> days
                            </h4>
                            <p class="descripcion">
                                <?= $data["following_production"] ["overview"]?> 
                            </p>
                            <p>
                                Release date: <?= $data["following_production"] ["release_date"]?>
                            </p>
                            <button id="refresh-button" onclick="refresh()">Refresh</button>

                        </div>

                    </div>

                </div>

            </section>

        </main>

        
        
        <script src="main.js"></script>
    </body>

</html>



   



