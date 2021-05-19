<?php 

    function closeSession() {
        session_unset();
        session_destroy();
        header('location: index.html');
    }

?>