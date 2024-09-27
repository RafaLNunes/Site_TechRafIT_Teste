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


if (isset($_FILES["ft"]) && $_FILES["ft"]["error"] == 0) {
    $ft_name = $_FILES["ft"]["name"];
    $ft_cam = $_FILES["ft"]["tmp_name"];

    echo $ft_cam;

    if ($Nome == "") {
        echo "Campo Invalido";
    } else {
        echo "<br>Hello Wolrd $Remetente";
        echo "<br>Menssagem vai para: $Nome";
        echo "<br>Assunto: $Assunto";
        echo "<br>Menssagem: $txtarea";
        echo "<br>Genero: $Gen";
        echo "<br>Foto: ";
        $ft_complet = move_uploaded_file(from: $ft_cam, to: "/upload/" . $ft_name);
        echo "<img scr=>";

    }
} else {
    echo "Erro ao enviar o arquivo";
}






?>