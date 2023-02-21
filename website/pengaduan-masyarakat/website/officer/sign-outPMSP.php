<?php

require '../.app/manifest/_manifest_.php';

session_start();

if($_SERVER['REQUEST_METHOD'] == "POST") {

    session_destroy();
    $app->go($setup['main-page-admin']);

}