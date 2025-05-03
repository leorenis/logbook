<?php
// Com o wrapper ssh2:// , é possível se conectar a servidores utilizando o protocolo SSH de uma maneira simples e elegante. Veja um exemplo de como acessar o conteúdo de um arquivo:
$ssh = ssh2_connect('SOME_IP');
ssh2_auth_password($ssh, 'zend', '{SOME_CREDENTIAL}');
$ftp = ssh2_sftp($ssh);
$arquivo = fopen("ssh2.sftp://$ftp/foo/bar/teste.txt", 'r');

while($linha = fgets($arquivo)) {
	print $linha;
}