<?php
    class processes{
        public function process_signin($dbobj){
            if(isset($_POST["Signin"]))
            {
                $name =addslashes($_POST["Name"]);
                $email_address = addslashes($_POST["Email"]);
        
                if(!filter_var($email_address,FILTER_VALIDATE_EMAIL)){
                    echo "Input correct email type";
                }
                else{
                    $sql = "INSERT INTO USERS (Name, Email) VALUES (?, ?)";

                    // Get the PDO instance from dbobj
                    $pdo = $dbobj->getConnection();

                    $stmt = $pdo->prepare($sql);
                    $stmt->bindValue(1, $name, PDO::PARAM_STR);
                    $stmt->bindValue(2, $email_address, PDO::PARAM_STR);
                    if($stmt->execute()){
                        echo "New record created successfully";
                        Header("Location: display.php");
                    }
                    else{
                        echo "Problem adding record: ". $stmt->errorInfo()[2];
                }
            }
        } 
    }
}    
?>