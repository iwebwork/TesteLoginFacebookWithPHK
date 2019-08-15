<?php
    require 'Facebook/autoload.php';
    session_start();

    $fb = new Facebook\Facebook([
        'app_id' => '1707175279332862',
        'app_secret' => 'bad1e6f1d7c4ac8e0b888f3e2818b93c',
        'default_graph_version' => 'v4.0'
    ]);