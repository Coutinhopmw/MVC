<?php
    class banquinho{
        public function busca($nick, $pass){
            $servername = "localhost";
            $database = "cadastro";
            $username = "root";
            $password = null;
            $usertable="cad";
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $database);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            $query = "SELECT * FROM $usertable WHERE nome = '$nick' and senha = '$pass'";
            echo $query;
            $result = mysqli_query($conn, $query);
            
            if(!empty($result) && mysqli_num_rows($result) == 1){
                return true;
            }else{
                return false;
            }
        }

        public function resgistro($nick, $pass, $email){
            $servername = "localhost";
            $database = "cadastro";
            $username = "root";
            $password = null;
            $usertable="cad";
            $usr = "usr";
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $database);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            $query = "insert into $usertable (nome, email, senha, tag) values ($nick, $pass, $email, $usr)";

            $result = mysqli_query($conn, $query);
            
            if($result){
                return true;
            }else{
                return false;
            }
        }

        public function rescue($email){
            $servername = "localhost";
            $database = "cadastro";
            $username = "root";
            $password = null;
            $usertable="cad";
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $database);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            $query = "SELECT * FROM $usertable WHERE email = '$email'";
            
            $result = mysqli_query($conn, $query);
            
            if(!empty($result) && mysqli_num_rows($result) == 1){
                return true;
            }else{
                return false;
            }
        }
    }
?>