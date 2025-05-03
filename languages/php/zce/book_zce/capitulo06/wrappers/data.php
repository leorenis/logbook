<?php
// O wrapper data:// é usado quando precisamos incluir um conteúdo explícito na nossa aplicação como um simples texto.
print file_get_contents('data://text/plain, Utilizando o wrapper data://');

// Utilizando para decodificar base64
$dadosEnviadoPeloUsuario = 'VXRpbGl6YW5kbyBzdHJlYW1zIGVtIFBIUCAh';
print file_get_contents("data://text/plain;base64,$dadosEnviadoPeloUsuario");