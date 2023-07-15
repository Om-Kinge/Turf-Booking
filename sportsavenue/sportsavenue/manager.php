
<?php
if(isset($_POST['submit']))
{
    echo "Hello";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="manager.css">
    <title>Turf Manager</title>
    <style>
        .header{
            padding:20px;
            font-size:30px;
        }
        </style>
</head>

<body>
    <div class="header">
        Manager Panel
</div>
    <div class="page">
        <table class="layout display responsive-table">
            <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>Customer</th>
                    <th>E-mail</th>
                    <th>Mobile No.</th>
                    <th>Number Of Players</th>
                    <th>Sports</th>
                    <th>Booking date</th>
                    <th>Booking slot</th>
                    <!-- <th>Status</th> -->


                </tr>
    
               
 

            </thead>
            <tbody>
<?php
$conn = mysqli_connect("localhost","root","","bookings"); 
$query="select * from book";
$query_result=mysqli_query($conn,$query);
$num=mysqli_num_rows($query_result);
 
  while( $fetch=mysqli_fetch_array($query_result)){
?>
<tr>
    <td><?php echo $fetch['b_id'];?></td>
    <td><?php echo $fetch['b_name'];?></td>
    <td><?php echo $fetch['b_email'];?></td>
    <td><?php echo $fetch['b_tel'];?></td>
    <td><?php echo $fetch['no_of_pl'];?></td>
    <td><?php echo $fetch['b_sport'];?></td>
    <td><?php echo $fetch['b_date'];?></td>
    <td><?php echo $fetch['b_slot'];?></td>
    <!-- <td><button class="btn" type="submit" name="submit" value="submit" id="submit"><?php echo $fetch['status'];?></button></td> -->

<?php
}

?>





       
           

 
           
                
              







            </tbody>
        </table>
    </div>
</body>

</html>