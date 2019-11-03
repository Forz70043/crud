<?php
include_once('autoload.php');

$smarty = new SmartyEngine;


$fields=array("Id","Nome","Cognome","Azienda","Email","N° posti","Ufficio","Periodo");

$tables=array(
    array("id"=>1,
        "nome"=>"ciccio",
        "cognome"=>"pasticio",
        "azienda"=>"ALTRO",
        "email"=>"example@eample.com",
        "n_user"=>"5",
        "room"=>"A",
        "periodoFrom"=>"07/08/2019",
        "periodoTo"=>"15/08/2019"
    ),
    array("id"=>2,
        "nome"=>"ciccio2",
        "cognome"=>"pasticio2",
        "azienda"=>"ALTRO2",
        "email"=>"example2@eample.com",
        "n_user"=>"15",
        "room"=>"D",
        "periodoFrom"=>"07/09/2019",
        "periodoTo"=>"15/09/2019"
    ),
    array("id"=>3,
        "nome"=>"ciccio3",
        "cognome"=>"pasticio3",
        "azienda"=>"ALTRO3",
        "email"=>"example3@eample.com",
        "n_user"=>"20",
        "room"=>"XXX",
        "periodoFrom"=>"17/07/2019",
        "periodoTo"=>"20/07/2019"
    ),
);


$smarty->assign("fields",$fields);
$smarty->assign("tabella",$tables);

$smarty->display('index.tpl');

?>