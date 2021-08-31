<?php
$_COOKIE['session']? header('Location: /' . $_COOKIE['session'] . ".php") : header('Location: /auth.html');