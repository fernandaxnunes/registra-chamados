<?php
    session_start();

    $perfis = array('Administrativo' => 1, 'Usuário' => 2);

   $autenticado = false;
   $usuario_id = null;
   $perfil_id = null;

   $perfis = array(1 => 'Administrativo', 2 => 'Usuário');
  

   $usuarios_array = array(
    array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil' => 1),
    array('id' => 2, 'email' => 'maria@teste.com.br', 'senha' => '123456', 'perfil' => 2),
    array('id' => 3, 'email' => 'joao@teste.com.br', 'senha' => '123456', 'perfil' => 2)
   );

   foreach($usuarios_array as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $autenticado = true;
            $usuario_id = $user['id'];
            $perfil_id = $user['perfil'];
        }
    }

   if($autenticado){
        $_SESSION['autenticado'] = 'SIM'; 
        $_SESSION['id'] =  $usuario_id; 
        $_SESSION['perfil_id'] =  $perfil_id; 
        header('Location:home.php');  
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location:index.php?login=erro');
    }
   



?>