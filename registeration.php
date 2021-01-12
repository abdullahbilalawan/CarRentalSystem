<?php
   

    $Id=$_POST['Id'];
    $Name=$_POST['Name'];
    $Password=$_POST['Password'];
    $CNIC=$_POST['CNIC'];
    $Email=$_POST['Email'];
    $Address=$_POST['Address'];
    $PhoneNumber=$_POST['PhoneNumber'];


    $connect=new mysqli('localhost','root','','CarContract');
    if($connect->connect_error){
        die('Connection Failed : ' .$connect->connect_error);

    }
    else{
        

        $query="INSERT INTO REGISTERATION VALUES ('$Id','$Name',
        '$Password','$CNIC','$Email','$Address','$PhoneNumber')";
        $data=mysqli_query($connect,$query);

if ($data)
{
    echo "Data inserted into Database";
}

else 
{
    echo "failed";
}


    }

    

?>