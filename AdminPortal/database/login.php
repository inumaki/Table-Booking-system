<?php

include 'connection.php';

include 'user.php';




if (isset($_POST['submit'])) {
    try {

       


    $pdo = DataBaseConnector::getConnect();

        $admin_name = $_POST['name'];
        $password =$_POST['password'];
        $sql = "SELECT  admin_username,admin_password from admin_table where admin_username= '$admin_name' ";
        UserQueries::getConnect($pdo);
        $q = UserQueries::fetch($sql);

      
while ($row = $q->fetch())
{
   
          

    if(password_verify($password,$row['admin_password'])==true)
           {
              
            session_start();
            $_SESSION["username"] = $row['admin_username'];
                header("Location: ../home/home.php");

           }
           else
           {

            header("Location: ../notfound.html");
               
           }

}
     

    } catch (PDOException $e) {

        header("Location: ../notfound.html");
        echo $sql . "<br>" . $e->getMessage();
    }

    echo "<br>";

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    echo $password;
 
    

    DataBaseConnector::destroy_connection();
}
    
?>