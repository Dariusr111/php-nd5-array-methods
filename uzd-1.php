<!-- 1. Užduotis

Padarykite programą, kurioje turėtumėme vieną įvedimo lauką. Į šį lauką įvestumėte temperatūros nuoskaitas.

Pvz.:
18, 16, 20, 21, 20, 18, 20, 24, 25, 21

Pasiverskite šį laukelį į masyvą (galite pasinaudoti f-ja explode). Jūsų sukurtas puslapis turėtų išvesti:
Vidutinė temperatūra: 21,5 lapsniai
Viso nuoskaitų: 10
Dvi didžiausios temperatūros: 25, 24
Dvi mažiausios temperatūros: 16, 18 -->

<?php

$out='';

$temperaturos=[];
if (isset($_POST['temperaturos']) &&  $_POST['temperaturos']!=''   ){
   $temperaturos=explode(', ',$_POST['temperaturos']);

$suma=0;

foreach ($temperaturos as $temperatura){
   $suma+= $temperatura;
}


$array_length=count($temperaturos); //Kiek elementu masyve

$vid=$suma/$array_length;

sort($temperaturos); //Surikiuojam masyva nuo min iki max

$min=implode(", ", array_slice($temperaturos, 0, 2));
$max=implode(", ", array_slice($temperaturos, $array_length-2, $array_length));

$out="Vidurkis: $vid <br> 
     Viso nuoskaitų: $array_length <br>
     Dvi mažiausios temperatūros: $min <br>
     Dvi didžiausios temperatūros: $max";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=Algos didinimas, initial-scale=1.0">
    <title>Pirma užduotis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>

    <div class="d-flex justify-content-center">
        <div class="flex-column">
            <div class="mt-4 mb-4">
                <h1>Pirmoji užduotis</h1>
                <p> Į šį lauką įvestumėte temperatūros nuoskaitas.
                    Pvz.: 18, 16, 20, 21, 20, 18, 20, 24, 25, 21</p>
            </div>
            <div>

            
                <!-- Formos pradžia -->
                <form method="POST" action="">
                    <div class="pb-3">
                        <input type="text" name="temperaturos"
                            value="<?=isset($_POST['temperaturos'])?$_POST['temperaturos']:''?>">
                    </div>
                    <div>
                        <button>Atvaizduoti</button>
                    </div>
                </form>
                <!-- Formos pabaiga -->
            </div>
            <hr>
            <div>
                <?=$out?>
            </div>
            <div class="float-end pt-3">
                <a href="nav.php"> Atgal </a>
            </div>

        </div>
    </div>
</body>

</html>