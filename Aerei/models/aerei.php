<?php

require_once __DIR__ . '/../config/database.php';

class Aerei {

    public function __construct(){

        global $pdo;
        $this->pdo = $pdo;

    }

    public function tutti(){

        $sql = 'SELECT id, aereo, tipologia, nazionalità, fotografato FROM modelli';
        $risultato = $this->pdo->query($sql);
        return $risultato->fetchAll();
    }

    public function tipologiaAerei(){

        $sql = 'SELECT id, aereo, tipologia, nazionalità, fotografato FROM modelli WHERE tipologia = "caccia", "cacciabombardiere", "bombardiere", "ricognitore", "trasporto", "multiruolo", "passeggeri"';
        $risultato = $this->pdo->query($sql);
        return $risultato->fetchAll();

    }

    public function fotografato(){

        $sql = 'SELECT id, aereo, tipologia, nazionalità, fotografato FROM modelli WHERE fotografato = "si", "no"';
        $risultato = $this->pdo->query($sql);
        return $risultato->fetchAll();

    }

    public function aereoFotografato(){

		$sql = 'SELECT id, aereo, tipologia, nazionalità, fotografato FROM modelli WHERE fotografato = "si" ORDER BY id';
		$risultato = $this->pdo->query($sql);
		return $risultato->fetchAll();

	}

	public function aereoNonFotografato(){

		$sql = 'SELECT id, aereo, tipologia, nazionalità, fotografato FROM modelli WHERE fotografato = "no" ORDER BY id';
		$risultato = $this->pdo->query($sql);
		return $risultato->fetchAll();

	}

    public function trovaPerId($id){

        $sql = "SELECT * FROM modelli WHERE id = ?";
        $query = $this->pdo->prepare($sql);
        $query->execute([$id]);
        return $query->fetch();

    }

    public function nuovo($aereo, $tipologia, $nazionalità, $fotografato){

        $sql = $this->pdo->prepare("INSERT INTO modelli (aereo, tipologia, nazionalità, fotografato) VALUES (?, ?, ?, ?)");

        return $sql->execute([$aereo, $tipologia, $nazionalità, $fotografato]);

    }

    public function aggiorna($id, $dati){

        $sql = "UPDATE modelli SET aereo = ?, tipologia = ?, nazionalità = ?, fotografato = ? WHERE id = ?";
        $query = $this->pdo->prepare($sql);
        $query->execute([

            $dati['aereo'],
            $dati['tipologia'],
            $dati['nazionalità'],
            $dati['fotografato'],
            $id

        ]);

    }

    public function cancellaId($id){

        $sql = "DELETE FROM modelli WHERE id = ?";
        $query = $this->pdo->prepare($sql);
        $query->execute([$id]);

    }

}