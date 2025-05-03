<?php
/**
* is_uploaded_file — Diz se o arquivo foi enviado por POST HTTP.
* Retorna TRUE se o arquivo com o nome filename foi enviado por POST HTTP. Isto é útil para ter certeza que um usuário malicioso não está tentando levar o script a trabalhar em arquivos que não deve estar trabalhando --- por exemplo, /etc/passwd.
*/

if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
   echo "O arquivo ". $_FILES['userfile']['name'] ." foi enviado com sucesso.\n";
   echo "Mostrando o conteúdo\n";
   readfile($_FILES['userfile']['tmp_name']);
} else {
   echo "Possível ataque de envio de arquivo: ";
   echo "nome do arquivo '". $_FILES['userfile']['tmp_name'] . "'.";
}