<?php

function dataPtBrParaPGsql($dataPtBr){
    $partes = explode("/", $dataPtBr);
    return $data = "{$partes[2]}-{$partes[1]}-{$partes[0]}";
}
