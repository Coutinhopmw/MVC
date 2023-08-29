<?php
require_once "../model/main.php";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://localhost/PHP/MVC/view/index.html");
curl_exec($curl);
curl_close($curl);

$control = new control();
$control->index();
class control{
    public function index(){
        $model = new banquinho();
<<<<<<< HEAD
        if(isset($_GET['enter'])){
            if(isset($_GET['slogin']) && !empty($_GET['slogin'])){
                $nick = $_GET['slogin'];
                if(isset($_GET['ssenha']) && !empty($_GET['ssenha'])){
                    $senha = $_GET['ssenha'];
                    if($model->busca($nick, $senha)==true){
                        require_once "../view/sucess.html";
                    }else{
                        echo 'email ou senha incorretos ou não cadastrados';
                    }
                }
            }else{
                echo 'email vazio';
            }
        }else{
            if(isset($_GET['RecSenha'])){
                include "controlPanel2.php";
                $pp = new rec();
                $pp->pq();
            }
        }
=======
        
>>>>>>> cd6dc1bac513f083cfecd77b09e9298c565971de
    }

}
?>