<?php

require_once __DIR__ . '/../models/aerei.php';

class AereiController {

    private $aereiModel;

    public function __construct(){
        
        $this->aereiModel = new Aerei();

    }

    public function lista(){

        $aerei = $this->aereiModel->tutti();

        require __DIR__ . '/../views/lista_aerei.php';

    }

    public function dettaglio($id){

        $aereo = $this->aereiModel->trovaPerId($id);

        require __DIR__ . '/../views/dettagli_aerei.php';

    }

    public function loadForm(){

        require __DIR__ . '/../views/aggiungi_aerei.php';

    }

    public function tipologiaAerei(){

        $aerei = $this->aereiModel->tipologiaAerei();

        require __DIR__ . '/.views/lista_aerei.php';

    }


    public function fotografato(){

        $aerei = $this->aereiModel->fotografato();

        require __DIR__ . '/.views/lista_aerei.php';

    }

    	public function libriLetti() {

		$books = $this->bookModel->libriLetti();

		require __DIR__ . '/../views/catalogo.php';

	}

	public function aereoFotografato() {

		$aerei = $this->aereiModel->aereoFotografato();

		require __DIR__ . '/../views/lista_aerei.php';

	}

    public function aereoNonFotografato() {

		$aerei = $this->aereiModel->aereoNonFotografato();

		require __DIR__ . '/../views/lista_aerei.php';

	}

    public function modifica($id){

		if($_SERVER['REQUEST_METHOD'] === 'POST'){

			$dati = [
				'aereo' => $_POST['aereo'],
				'tipologia' => $_POST['tipologia'],
				'nazionalità' => $_POST['nazionalità'],
				'fotografato' => $_POST['fotografato']
			];

			$this->aereiModel->aggiorna($id, $dati);
			header("Location: index.php");
			exit;
		}

		else {

			$aereo = $this->aereiModel->trovaPerId($id);
			require __DIR__ . '/../views/modifica_aerei.php';

		}

	}

    public function store(){

        if (isset($_POST['aereo'], $_POST['tipologia'], $_POST['nazionalità'], $_POST['fotografato'])){

            $this->aereiModel->nuovo($_POST['aereo'], $_POST['tipologia'], $_POST['nazionalità'], $_POST['fotografato']);

        }

        header("Location: index.php");

    }

    public function elimina($id){

        $this->aereiModel->cancellaId($id);
        header("Location: index.php");

    }

}