<?php
function call($controller, $action) {
    //richiede i file dove ci saranno i controlli per le views
    require_once ('controllers/' . $controller . '_controller.php');

    //crea una nuova istanza per i controlli
    switch($controller) {
        case 'pages':
            $controller = new PagesController();
         break;
    }

    //richiama l'azione
    $controller->{ $action }();
}
//questa serve per controllare se è tutto ok

$controllers = array('pages' => ['home', 'error']);

//controlla la richiesta del controller e delle action da fare insieme
//se c'è qualcosa che non va bene indirizza in una pagina d'erore altrimenti va alla pagina
if (array_key_exists($controller, $controllers)){
    if(in_array($action, $controllers[$controller])){
        call($controller, $action);
    } else {
        call('pages', 'error');
    }
} else {
    call('pages', 'error');
}

