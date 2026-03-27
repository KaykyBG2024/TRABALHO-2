<?php

$userMaster = "kayky@gmail.com";
$passMaster = "123";

$email = $_POST['email'];
$senha = $_POST['senha'];

if($email == $userMaster && $senha == $passMaster){

    header("Location: inicio.php");
    exit();

}else{

    echo "<script>
            alert('Email ou senha incorretos!');
            window.location.href='index.php';
          </script>";

}

?>