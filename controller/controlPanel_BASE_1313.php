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

    }
}
?>
