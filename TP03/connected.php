<?php
    $serveurBD = "localhost";
    $nomUtilisateur = "root";
    $motDePasse = "";
    $baseDeDonnees = "bdd_test";
 
   
    $conn = mysqli_connect($serveurBD,
                  $nomUtilisateur,
                  $motDePasse);
    $sql = 'SELECT * FROM dieux';
    $result=$conn->query($sql);
// on simule une base de données
   /* $users = array(
// login => password
       'riri' => 'fifi',
        'yoda' => 'maitrejedi' );*/
    $login = "anonymous";
    $password = "anonymous";
    $errorText = "";
    $successfullyLogged = false;
    $existe = false;
    if(isset($_POST['login']) && isset($_POST['password'])) 
    {
        $tryLogin = $_POST['login'];
        $tryPwd=$_POST['password'];
        $existe=false;
        if(isset($_POST['login']) && isset($_POST['password'])) 
        {
            $tryLogin = $_POST['login'];
            $tryPwd=$_POST['password'];
            $existe=false;
            while($data=mysqli_fetch_array($result))
            {
                if($data['login']==$tryLogin)
                {
                    $existe=true;
                    if($data['password']==$tryPwd)
                    {
                        $successfullyLogged=true;
                        $login = $tryLogin;
                        $password=$tryPwd;
                        $_SESSION['login']=$login;
                    }
                    else{
                        $existe = false;
                    }
                }
            }
        }
    } 
?>
