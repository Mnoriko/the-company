<?php
    include "../Classess/User.php";

    # create an objrct
    $user = new User;

    # call the store method
    $user->store($_POST);

?>