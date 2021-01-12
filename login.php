
<?php
   

    
   
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];


    $connect=new mysqli('localhost','root','','CarContract');
    if($connect->connect_error){
        die('Connection Failed : ' .$connect->connect_error);

    }
    else{
        

        $query="INSERT INTO LOGIN VALUES ('$Email','$Password')";
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