<?php
    require 'fb.php';
    $helper = $fb->getRedirectLoginHelper();
    $permissions = array('email');

    $login = $helper->getLoginUrl('http://localhost/fbLogin/callback.php',$permissions);

?>

<a href="<?php echo htmlspecialchars($login); ?>">Fazer login com facebook</a>