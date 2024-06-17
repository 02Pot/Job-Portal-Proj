<?php
    include_once "./class/dbconnection.php";

    class get {
        public static function getProfile($u_id){
            $stmt = $this->conn->prepare("SELECT * FROM users WHERE u_id = :userId");
            $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if ($result) {
                return $result['u_name'];
            } else {
                return "Name not found" ;
            }
        }

}
?>