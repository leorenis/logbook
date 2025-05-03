<?php
session_start();
print $_SESSION['perfil']; //Usuário

session_destroy();

/** Lembre-se sempre de que trabalhar com sessão, mesmo para destruí-las, é necessário usar a função session_start antes de qualquer coisa.*/