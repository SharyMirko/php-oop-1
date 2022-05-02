<?php
    class Film{
        private $titolo;
        private $genere;
        private $lingua;

        public function __construct($_titolo, $_genere, $_lingua){
            $this->titolo = $_titolo;
            $this->genere = $_genere;
            $this->lingua = $_lingua;
        }

        public function setTitolo($_titolo){
            $this->titolo = $_titolo;
        }

        public function setLingua($_lang){
            $this->lingua = $_lingua;
        }

        public function setGenere($_genere){
            $this->genere = $_genere;
        }

        public function getTitolo(){
            return $this->titolo;
        }

        public function getGenere(){
            return $this->genere;
        }

        public function getLingua(){
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
    $lista[] = new Film('Bastardi senza gloria', 'Azione', 'ITA');
    $lista[] = new Film('Back to the future', 'Fantasy', 'ENG');
    $lista[] = new Film('Troy', 'Realismo', 'ITA');


    foreach($lista as $film){
        echo "<dl>";
        echo "<dt>Titolo:".$film->getTitolo()."</dt>";
        echo "<dd>Genere:".$film->getGenere()."</dd>";
        echo "<dd>Language:".$film->getLingua()."</dd>";
        echo "</dl>";
    } 
?>

</body>
</html>