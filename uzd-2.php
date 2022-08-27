<!-- 2. Užduotis

Turime du masyvus:

$menesiuVardai = array (1=>'Sausis', 2=>'Vasaris', 3=>'Kovas', 4=>'Balandis', 5=>'Gegužė', 6=>'Birželis', 7=>'Liepa', 8=>'Rugpjutis', 9=>'Rugsėjis', 10=>'Spalis', 11=>'Lapkritis', 12=>'Gruodis');

$menesiuDienos = array (1=>31, 2=>28, 3=>31, 4=>30, 5=>31, 6=>30, 7=>31, 8=>31, 9=>30, 10=>31, 11=>30, 12=>31);

Parašykite programą kuris atspausdintų:
1. Metuose yra 7 mėnesiai turintys 31 dieną (Sausis, Kovas, Gegužė, Liepa, Rugpjūtis, Spalis, Gruodis)
2. Metuose yra 4 mėnesiai turintys 30 dienų (Balandis, Birželis, Rugsėjis, Lapkritis)
3. Metuose yra 1 mėnuo turintis 28 dienas (Vasaris)

4. Viso metuose yra 365 dienos
5. Sausis yra 1 mėnuo jis turi 31 d.
6. Vasaris yra 2 mėnuo jis turi 28 d.
7. Kovas yra 3 mėnuo jis turi 31 d.

Visi pakreipti ir pastorinti tekstai turi būti paimami iš masyvų. -->

<?php

$out='';

$menesiuVardai = array (1=>'Sausis', 2=>'Vasaris', 3=>'Kovas', 4=>'Balandis', 5=>'Gegužė', 6=>'Birželis', 7=>'Liepa', 8=>'Rugpjutis', 9=>'Rugsėjis', 10=>'Spalis', 11=>'Lapkritis', 12=>'Gruodis');

$menesiuDienos = array (1=>31, 2=>28, 3=>31, 4=>30, 5=>31, 6=>30, 7=>31, 8=>31, 9=>30, 10=>31, 11=>30, 12=>31);

$men31=array();
$men30=array();
$men28=array();


foreach ($menesiuVardai as $nr=>$vardas){
   if ($menesiuDienos[$nr] == 31){
       array_push($men31, $vardas);
   }
   elseif ($menesiuDienos[$nr] == 30){
       array_push($men30, $vardas);  
   }
   else{
       array_push($men28, $vardas); 
   }
}

// print_r($men31);
// print_r($men30);
// print_r($men28);
$men31_length=count($men31);
$men30_length=count($men30);
$men28_length=count($men28);
$men31_7=implode(", ", $men31);
$men30_4=implode(", ", $men30);
$men28_1=implode(", ", $men28);

$dienos365=array_sum($menesiuDienos);

$sausis=implode("", array_slice($menesiuVardai, 0, 1));
$pirmas=array_search('Sausis', $menesiuVardai);
$trisdViena=implode("", array_slice($menesiuDienos, 0, 1));

$vasaris=implode("", array_slice($menesiuVardai, 1, 1));
$antras=array_search('Vasaris', $menesiuVardai);
$dvidAstuon=implode("", array_slice($menesiuDienos, 1, 1));

$kovas=implode("", array_slice($menesiuVardai, 2, 1));
$trecias=array_search('Kovas', $menesiuVardai);
$trisdViena=implode("", array_slice($menesiuDienos, 2, 1));

$out="Metuose yra $men31_length mėnesiai turintys 31 dieną ($men31_7)<br>
      Metuose yra $men30_length mėnesiai turintys 30 dienų ($men30_4)<br>                               
      Metuose yra $men28_length mėnuo turintis 28 dienas ($men28_1)<br>
      Viso metuose yra $dienos365 dienos<br>
      $sausis yra $pirmas mėnuo jis turi $trisdViena d.<br>
      $vasaris yra $antras mėnuo jis turi $dvidAstuon d.<br>
      $kovas yra $trecias mėnuo jis turi $trisdViena d.";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=Algos didinimas, initial-scale=1.0">
    <title>Antroji užduotis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>

    <div class="d-flex justify-content-center">
        <div class="flex-column">
            <div class="mt-4 mb-4">
                <h1>Antroji užduotis</h1>
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