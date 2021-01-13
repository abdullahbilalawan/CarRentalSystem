
<!DOCSTYLE html>
<html>
<title>
INFORMATION ABOUT ALL CONTRACT

</title>
<body>
<style>
h2{
    font-size:30px;
		background-color: #133b5c;
  		color: #f2a365;
		padding:25px;
        width:600px;
        text-align:center;
        margin-left:350px;
		margin-top:20px;
		margin-bottom:20px;
		border-radius:15px;
		border-style: ridge;
}
.tr{
    font-size:20px;
		background-color: #133b5c;
  		color: #f2a365;
		padding:25px;
        width:600px;
        text-align:center;
        margin-left:350px;
		margin-top:20px;
		margin-bottom:20px;
		border-radius:15px;
		border-style: ridge;
}
body{
    background-color:  
#dce7e5;
}
    </style>
    <table align='center' border='1px' style='width:600px ; line-height:80px;'>
        <tr>
           
            <h2 class='h2' colspan='4' align='center'>ALL CONTRACTS</h2>
           
            <tr class='tr'>
            <th>ContractNumber</th>
            <th>StartDate</th>
            <th>LasttDate</th>
            <th>TotalPrice</th>
            <th>CarNumber</th>
            <th>CarModel</th>
            <th>BuyORRent</th>
            <th>CarColor</th>
            </tr>
        </tr>
        <?php
        $conn=mysqli_connect('localhost','root','','CarContract');
        if($conn->connect_error){
            die('Connection Failed : ' .$conn->connect_error);
    
        }
        $sql="SELECT ContractNumber,StartDate,LasttDate,TotalPrice from Contract";
        $result=$conn->query($sql);
        if($result !==false && $result-> num_rows > 0){
            while($row = $result->fetch_assoc()){
                 echo "<tr><td>" . $row["ContractNumber"] . "</td><td>" . $row["StartDate"] ."</td><td>" . $row["LasttDate"] ."</td><td>". $row["TotalPrice"] . "</td><td>" . $row["CarNumber"] . "</td><td>" . $row["CarModel"] . "</td><td>" . $row["BuyORRent"] . "</td><td>" . $row["CarColor"]."</td></tr>";
            }
            echo "</table>";
        }
        else{
            echo "NO CONTRACT";
        }
        $conn->close();
        ?>
        
        
       
        
        
        
   
</body>
</html>

