<?php
    class Film{
        private $titolo;
        private $genere;
        private $lingua;

        function __construct($_titolo, $_genere, $_lingua){
            $this->titolo = $_titolo;
            $this->genere = $_genere;
            $this->lingua = $_lingua;
        }

        function setTitolo($_titolo){
            $this->titolo = $_titolo;
        }

        function setLingua($_lang){
            $this->lingua = $_lingua;
        }

        function setGenere($_genere){
            $this->genere = $_genere;
        }

        function getTitolo(){
            return $this->titolo;
        }

        function getGenere(){
            return $this->genere;
        }

        function getLingua(){
            return $this->lingua;
        }
    }

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Che film ci sono?</title>
</head>
<body>

<?php
    $lista = [];
    array_push($lista,  new Movie('Bastardi senza gloria', 'Azione', 'ITA'));
    array_push($lista,  new Movie('Back to the future', 'Fantasy', 'ENG'));
    array_push($lista,  new Movie('Troy', 'Realismo', 'ITA'));

    foreach($list as $film){
        echo "<dl>";
        echo "<dt>Titolo:".$film->getTitolo()."</dt>";
        echo "<dd>Genere:".$film->getGenere()."</dd>";
        echo "<dd>Language:".$film->getLingua()."</dd>";
        echo "</dl>";
    }
?>

</body>
</html>