<?php
session_start();

$old_sessionid = session_id();

session_regenerate_id();

$new_sessionid = session_id();

echo "Sessão antiga: $old_sessionid<br />";
echo "Sessão nova: $new_sessionid<br />";

print_r($_SESSION);