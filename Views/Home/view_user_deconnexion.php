<?php

$_SESSION = array();

session_unset();
session_destroy();

?>

<script>window.location.href="?controller=home&action=home"</script>