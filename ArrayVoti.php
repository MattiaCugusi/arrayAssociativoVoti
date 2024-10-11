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
       $studente["cognome"] = "Rossi";
       $studente["nome"] = "Federico";
       for ($i=0; $i<3; $i++) {
        $studente["listaVoti"][$i] = rand(2,10);
        $totale = $totale + $studente["listaVoti"][$i] = rand(2,10);
       }
       
       $media = $totale/count($studente["listaVoti"]);
       $media = number_format($media, 2);
       

  echo "<ul>
              <li>Rossi</li>
              <li>Mario</li>
              <li>Lista voti:
     <ol>
        <li>" . $studente["listaVoti"][0] . "</li>
        <li>" . $studente["listaVoti"][1] . "</li>
        <li>" . $studente["listaVoti"][2] . "</li>
    </ol>
  </li>
</ul>
<span>La media e' " . $media . "</span>";


    ?>
    
</body>
</html>