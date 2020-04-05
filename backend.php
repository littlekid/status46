<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

if ( isset($_POST) ){
  $message = $_POST['message'];
  if (strtolower($_POST['message']) == 'start'){
    echo "Hej!

Detta meddelande skickas ut till alla mobiltelefoner i det område där du befinner dig just nu.\n
Vi kommer från och med nu fråga alla i de värst drabbade områdena i Sverige hur alla mår för att bättre förstå hur läget förändras dag för dag.\n

Vi sparar inte ditt telefonnummer, bara svaret. Det går bra att ändra ditt svar senare på dagen om du skulle må sämre eller bättre.\n
Du kan också välja att låta bli att svara på dessa meddelanden, du får dock stå ut med att de kommer till din mobil tills läget är under bättre kontroll.\n

Du kommer få frågan “Hur mår du?” och du kan välja själv om du vill svara med “feber”, “dåligt” eller annat enstaka ord, eller om du hellre delar med dig av din upplevelse detaljerat. Det går också bra att svara med emojis som 👍🏽 och 🤧.\n

Du kan läsa mer om detta projekt, och ställa frågor på status46.se.\n
Du kan också ringa detta nummer, då kommer du till Corona-linjen där du kan få veta senaste nytt och får hjälp med att ställa frågor till rätt instans.\n

Tack på förhand,
Folkhälsomyndigheten\n

(Obs! Det här är ett DEMO av ett HacktheCrisis-projekt!)";
  } else if ($message == '?') {
    echo "Mer info på http://status46.victoriawagman.se";
  } else if ($message == 'demo') {
    echo "Hur mår du?";
  } else {
    echo "Tack för att du delar med dig av hur du mår.";
  }

//$file =fopen('/storage/content/83/170983/status46.victoriawagman.se/public_html/responses.log', 'w');
//fwrite($file, '1');
//fwrite($file, '23');
//fwrite($file, "\n");
//fclose($file);
//$current = file_get_contents($file);



// $file = '/storage/content/83/170983/status46.victoriawagman.se/public_html/responses.log';
// $current = file_get_contents($file);
// echo $current;
// // Append a new person to the file
// // Write the contents back to the file
// file_put_contents($file, $message."\n");
}


if(strtolower($message) != 'start' && $message != '?' && $message !='demo') {
  $file = 'incomingreports.log';
  // Open the file to get existing content
  $current = file_get_contents($file);
  // Append a new person to the file
  $current .= $message."\n";
  // Write the contents back to the file
  file_put_contents($file, $current);
}


function string_contains($string, $needle){
  if (strpos($string, $needle) !== false) {
    echo 'true';
  }
}
?>
