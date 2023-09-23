<?php

namespace App\Lib;

use Exception;

class Erro
{
    private $message;
    private $code;

    public function __construct(Exception $objetoException = null) {
        $this->code     = $objetoException->getCode();
        $this->message  = $objetoException->getMessage();
    }

    public function render() {
        $varMessage = $this->message;

        # renderizar o header
        require_once PATH . '/App/Views/layouts/header.php';
        require_once PATH . '/App/Views/layouts/menu.php';

        # renderizar a pagina do erro correto
        if(file_exists(PATH . "/App/Views/error/".$this->code.".php")){
            require_once PATH . "/App/Views/error/".$this->code.".php";
        } else { # erro genérico
            require_once PATH . "/App/Views/error/500.php";
        }

        # renderizar o footer
        require_once PATH . '/App/Views/layouts/footer.php';

        exit;
    }
}