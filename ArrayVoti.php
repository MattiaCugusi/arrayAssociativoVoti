<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array associativo e voti</title>
</head>
<body>
    <?php
       $totale = 0;
       
       $nomiStudenti = ["Federico", "Giulio", "Luca"];
       $cognomiStudenti = ["Rossi", "Bianchi", "Verdi"];
      
    
       for ($i=0; $i<3; $i++) {
        $studenti["nome"][$i] = $nomiStudenti[$i];
        $studenti["cognome"][$i] = $cognomiStudenti[$i];
        $voti = [rand(2,10), rand(2,10), rand(2,10)];
        $studenti["voti"][$i] = $voti;

        echo "<h2>" .  $studenti["nome"][$i] . " " .  $studenti["cognome"][$i] . "</h2>";
        
        echo "<ul>
              <li>" .  $studenti["cognome"][$i] . "</li>
              <li>" . $studenti["nome"][$i] . "</li>
              <li>Lista voti:
     <ol>
        <li>" . $studenti["voti"][$i][0] . "</li>
        <li>" . $studenti["voti"][$i][1] . "</li>
        <li>" . $studenti["voti"][$i][2] . "</li>
    </ol>
  </li>
</ul>";

       }

?>

<table style="border: 1px solid black; border-collapse: collapse; text-align:center">
<tr>
  <td style="border: 1px solid black">Nome Studente</td>
  <td style="border: 1px solid black">Cognome Studente</td>
  <td style="border: 1px solid black">Media Voti</td>
  <td style="border: 1px solid black">Voto massimo</td>
</tr>


<?php



for ($i=0; $i<3; $i++){
    $totale = 0;
$max = 0;
    for ($j=0; $j<3; $j++){
        $totale = $totale + $studenti["voti"][$i][$j];
        
        if ( $studenti["voti"][$i][$j] > $max){
           $max = $studenti["voti"][$i][$j];
        }
        
    }
    $media = $totale/count($studenti["voti"]);
    $media = number_format($media, 2);

    echo "<tr>
            <td style='border: 1px solid black'>" . $studenti["nome"][$i] . "</td>
            <td style='border: 1px solid black'>" . $studenti["cognome"][$i] . "</td>
            <td style='border: 1px solid black'>" . $media . "</td>
            <td style='border: 1px solid black'>" . $max . "</td>
</tr>";
}

?>

</table>


       

       

  



   
    
</body>
</html>