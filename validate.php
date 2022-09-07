<?php
    session_start();

    checkUser();

    function checkUser() {
        $users = ['Alex' => 'patata', 'Pepe' => 'pomelo'];
        $usernames = array_keys($users);
        $inputUser = $_POST['user'];
        $inputPwd = $_POST['pwd'];
        if (in_array($inputUser, $usernames)) {
            if ($users[$inputUser] == $inputPwd) {
                $_SESSION['user'] = $inputUser;
                header('Location: ./panel.php');
            } else { 
                echo '<b> Password is incorrect. Please, <a href="./index.php">try again</a></b>';

            }
        } else {
            echo '<b> Username is incorrect. Please, <a href="./index.php">try again</a></b>';
        }
    }

