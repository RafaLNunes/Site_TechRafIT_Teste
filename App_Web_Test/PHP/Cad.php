<?php

//Craindo variaveis com php
// para cirar alguma var, precisa iniciar com $, para então passar o nome da var
// $_GET, pega o valor de uma outra base, no caso uma base com nome entre[""]
$Nome = $_GET["ParaQ"];
$Assunto = $_GET["AssuntoT"];
$Remetente = $_GET["RemetenteQ"];
$txtarea = $_GET["OBS"];
$confirm = $_GET["BntRd"];
$Gen = $_GET["slc_gen"];
$ft_cam = $_GET["FT"];

if($Nome == ""){
    echo "Campo Invalido";
}else{
    echo "<br>Hello Wolrd $Remetente";
    echo "<br>Menssagem vai para: $Nome";
    echo "<br>Assunto: $Assunto";
    echo "<br>Menssagem: $txtarea";
    echo "<br>Genero: $Gen";
    echo "<br>Foto: ";
    echo "<img scr=$ft_cam>";
    
}


?>  