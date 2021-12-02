(<?
ob_start();
session_start();
include_once('admconfig.php');
?>

<?
if(isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])){

    if($_POST['username']=='adima' && $_POST['password']=='1513'){
        $_SESSION['valid']=true;
        $_SESSION['timeout']=time();
        $_SESSION['username']='adima';
        
        header('Location:AdminLogin.html');
    }
    else{
        $msg='Wrong username or password';
    }
}
?>