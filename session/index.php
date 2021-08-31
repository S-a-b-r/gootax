<?php
$_COOKIE['session']? header('Location: /session/' . $_COOKIE['session'] . ".php") : header('Location: /session/auth.html');