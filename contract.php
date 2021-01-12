<?php
   

    $ContractNumber=$_POST['ContractNumber'];
    $StartDate=$_POST['StartDate'];
    $LasttDate=$_POST['LasttDate'];
    $TotalPrice=$_POST['TotalPrice'];

    $connect=new mysqli('localhost','root','','CarContract');
    if($connect->connect_error){
        die('Connection Failed : ' .$connect->connect_error);

    }
    else{
        

        $query="INSERT INTO CONTRACT VALUES ('$ContractNumber','$StartDate','$LasttDate','$TotalPrice')";
        $data=mysqli_query($connect,$query);

if ($data)
{
    echo "Data inserted into Database";
}

else 
{
    echo "ContractNumber should be unique";
}


    }

    

?>