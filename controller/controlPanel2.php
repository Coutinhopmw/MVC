<?php
require_once "../model/main.php";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://localhost/PHP/MVC/view/password.html");
curl_exec($curl);
$ctrl = new rec();
$ctrl->pq();
class rec{
    public function pq(){
        $model = new banquinho();
        if(isset($_POST['casa'])){
            header('Location: controlPanel.php');
        }else{
            if(isset($_POST['envio'])){
                if(isset($_POST['email']) && !empty($_POST['email'])){
                    $email = $_POST['email'];
                    if($model->rescue($email)==true){
                        //ini_set( 'display_errors', 1 );
                        //error_reporting( E_ALL );
                        //$from = "test@hostinger-tutorials.com";
                        //$to = $email;
                        //$subject = "Pedido de recuperação de senha";
                        $message = "Sua senha é " .$model->rescuesenha($email);
                        //$headers = "From:" . $from;
                        //mail($to,$subject,$message, $headers);
                        echo $message;
                    }else{
                        echo "email não existe no banco de dados";
                    }
                }else{
                    echo 'Email vazio';
                }
            }
        }
    }
}
?>