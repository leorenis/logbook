<?php
if (CRYPT_STD_DES == 1) {
	echo 'Standard DES: ' . crypt('ZCPE', 'ZP');
}
if (CRYPT_EXT_DES == 1) {
	echo 'Extended DES: ' . crypt('ZCPE', '_J9..ZCPE');
}
if (CRYPT_MD5 == 1) {
	echo 'MD5: ' . crypt('ZCPE', '$1$ZCPE$');
}
if (CRYPT_BLOWFISH == 1) {
	echo 'Blowfish: ' . crypt('ZCPE', '$2a$07$ZCPE...........$');
}

print CRYPT_SALT_LENGTH;