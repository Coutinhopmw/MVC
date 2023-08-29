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
            include "controlPanel.php";
            $ctrl = new control();
            $ctrl->index();
        }else{
            if(isset($_POST['envio'])){
                if(isset($_POST['email']) && !empty($_POST['email'])){
                    $email = $_POST['email'];
                    if($model->rescue($email)==true){
                        require_once "../view/sucess.html";
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