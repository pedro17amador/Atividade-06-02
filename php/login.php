<?php
    $loginComSucesso = false;
    
    $login = $_POST["nomeDoUsuario"];
    $senha = $_POST["SenhaDoUsuario"];

    $nomeValido = "aluno1";
    $senhaValida = "666";

    echo "<script> alert{'".$login."'} </script>";
    echo "<script> alert{'".$senha."'} </script>";

    if ($login == $nomeValido && $senha == $senhaValida){
        $loginComSucesso = true;
    }

    echo "alert('$loginComSucesso <br>')";
    echo $loginComSucesso;
    echo $loginComSucesso;

    if ($loginComSucesso==false){
        echo "<script> alert('".$loginComSucesso"') </script>";
        echo "<script> alert('$loginComSucesso retornou false e assim o login falho') </script>";
    }else{
        echo "<script> alert('".$loginComSucesso"') </script>";
        echo "<script> alert('Logado com sucesso!') </script>";
    }
?>