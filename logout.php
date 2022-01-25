<?php
    session_start();
# Resetando a session logado
    unset($_SESSION['logado']);
# Resetando qualquer session existente
    session_destroy();
# Redirecionando para login.php
    header('location: login.php');