<?php

    //setcookie("customerId", "1234", time() + 60 * 60 * 24);

    setcookie("customerId", "test", time() - 60 * 60);

    // $_COOKIE["customerId"] = "test";

    echo $_COOKIE["customerId"];

?>