<?php 
    require 'fb.php';

    if(isset($_SESSION['fb_access_token']) && !empty($_SESSION['fb_access_token'])){
        $res = $fb->get('/me?fields=email,name,id,picture',$_SESSION['fb_access_token']);
        $r = json_decode($res->getBody());
        print_r($r);
        echo "<br>";
        echo "Meu nome e: ".$r->name;
        echo "<br>";
        echo 'foto <img src="'.$r->picture->data->url.'">';
        echo "<br>";
        echo '<a href="sair.php">Sair</a>';
        
    }else{
        header('Location: login.php');
    }