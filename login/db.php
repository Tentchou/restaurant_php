
<?php
//connection a la base de donnee
class DB{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "mail";

    private function __construct(){
        if(!isset($this->db)){
            //connection a la base de donnee
            $con = new mysqli($this->host, $this->username, $this->password, $this->db);
            if($con->connect_error){
                die("Failed to connect with mysql : ".$con->connect_error);
            }else{
                $this->db = $con;
            }
        }
    }

    public function is_token_empty(){
        $result = $this->db->query("SELECT id FROM google_oauth WHERE provider = 'google");
        if($result->num_rows){
            return false; 
        }

        return true; 
    }

    public function get_access_token(){
        $sql = $this->db->query("SELECT provider_value FROM google_oauth WHERE provider = 'google");
        $result = $sql->fetch_assoc();
        return json_decode($result['provider_value']);
    }


    public function get_refrech_token(){
        $result = $this->get_access_token();
        return $result->refrech_token;
    }

    public function  update_access_token($token) {

        if($this->is_token_empty()){
            $this->db->query("INSERT INTO google_oauth(provider, provider_value) VALUES('google', '$token')");
        }else{
            $this->db->query("UPDATE  google_oauth SET provider_value = '$token' WHERE provider = 'google'");
        }
    }

    
}





?>