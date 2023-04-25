<?php 

    session_start();



    //App without BD 
    $users_app = [
        [
            'id' => 1,
            'email' => 'admin@teste.com.pt', 
            'password' =>'admin',
            'role_id' => 1
        ],
        [
            'id' => 2,
            'email' => 'client1@teste.com.pt', 
            'password' =>'client1',
            'role_id' => 2
        ],
        [ 
            'id' => 3,
            'email' => 'client2@teste.com.pt', 
            'password' =>'client2',
            'profile_id' => 2
        ],
        [
            'id' => 4,
            'email' => 'client3@teste.com.pt', 
            'password' =>'client3',
            'role_id' => 2
        ],
        [
            'id' => 5,
            'email' => 'client4@teste.com.pt', 
            'password' =>'client4',
            'role_id' => 2
        ],
    ];

    $roles = [
        1 => 'Admin',
        2 => 'User'
    ];

    $user_logged = false;
    $user_role = null;

    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }
    if(isset($_POST['password'])){
        $password = $_POST['password'];
    }

    foreach($users_app as $key => $user){
        if($email == $user['email'] && $password == $user['password']){
            $user_logged = true;
            $user_id = $user['id'];
            $user_role = $user['role_id'];
        }
    }

    if(!$user_logged){
        $_SESSION['logged'] = false;
        header('Location: index.php?login=erro');
    }else{
        $_SESSION['logged'] = true;
        $_SESSION['id'] = $user_id;
        $_SESSION['role'] = $user_role;
        header('Location: home.php');
    }

?>