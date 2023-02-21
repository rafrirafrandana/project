<?php

class App {

    function go($url) {

        header("Location: $url");

    }

} $app = new App();
