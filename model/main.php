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
            $result = mysqli_query($conn, $query);
            
            if(!empty($result) && mysqli_num_rows($result) == 1){
                return true;
            }else{
                return false;
            }
        }

        public function resgistro($nick, $pass, $email, $flag){
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
            if($flag == true){
                $query = "SELECT * FROM $usertable WHERE email = '$email' and nome = '$username'";
                $resultado = mysqli_query($conn, $query);
                if(mysqli_num_rows($resultado) === 0 && isset($_SESSION['enter'])){
                    $query = "insert into $usertable (nome, email, senha, tag) values ('$nick', '$pass', '$email', '$usr')";
                
                    $result = mysqli_query($conn, $query);
                    
                    if($result){
                        return true;
                    }else{
                        return false;
                    }
                }else{
                    echo 'Usuario já cadastrado';
                }
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

        public function rescuesenha($email){
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
                $row = mysqli_fetch_array($result);
                $your_field = "senha";
                return $row["$your_field"];
            }
        }

        public function selector(){
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
            
            $query = "SELECT * FROM $usertable";
            $result = mysqli_query($conn, $query);

            if(!empty($result)){
                return $result;
            }
        }
    }
?>
