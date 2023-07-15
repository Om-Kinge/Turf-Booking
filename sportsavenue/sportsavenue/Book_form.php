<?php
session_start();
$conn = mysqli_connect("localhost","root","","bookings"); 

if(isset($_POST['submit']))
{
  $b_tel = $_POST['b_tel'];
  $no_of_pl = $_POST['no_of_pl'];
  $b_sport = $_POST['b_sport'];
  $b_notes = $_POST['b_notes'];
  $b_date = $_POST['b_date'];
  $b_slot = $_POST['b_slot'];
  $b_email=$_SESSION['mail'];
  // echo $email;
  
  $b_name = $_SESSION['user'];

 
  // echo $b_email;
  // echo $b_tel;
  // echo $no_of_pl;
  // echo $b_sport;
  // echo $b_notes;
  // echo $b_date;
  // echo $b_slot;
  $sql="INSERT INTO `book` (`b_name`, `b_email`, `b_tel`, `b_date`, `b_slot`, `b_note`, `b_sport`, `no_of_pl`) VALUES ('$b_name', '$b_email', '$b_tel', '$b_date', '$b_slot', '$b_notes', '$b_sport', '$no_of_pl');";
  $sql_result=mysqli_query($conn,$sql);

  header("Location:booking.php");
 
  

} 
// else{
//   echo "no";
// }





?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="book_form.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->

<title>Bookings</title>
</head>

<body>
 
  <div>
    <form id="b_Form" method="post" target="_self">
      <h1>Turf Booking form</h1>

      <label for="b_tel">Telephone Number : <input type="text" required name="b_tel" id="b_tel" /></label>

      <label for="">Number of Players : <input type="text" required name="no_of_pl" id="no_of_pl"  /> </label>
     

      <label> Sport :
        <select id="b_sport"  name="b_sport" id="b_sport">
        <option value="cricket">Cricket</option>
        <option value="football">Football</option>
        <option value="badminton">Badminton</option>
        <option value="tennis">Tennis</option>
      </select>
      </label>
      

      <label for="b_notes">Notes (if any) <input type="text" name="b_notes"  id="b_notes"/></label>
     

      <label>Booking Date  <input type="date" required id="b_date" name="b_date">
</label>
     
      <label>Booking Slot
          <select name="b_slot" id="b_slot">
        <option value="6-8">6:00 to 8:00</option>
        <option value="8-10">8:00 to 10:00</option>
        <option value="8-10">12:00 to 14:00</option>
        <option value="8-10">16:00 to 18:00</option>


      </select>
      </label>
    

      <input type="submit" name="submit" id="submit" value="Submit" />
    </form>
  </div>

</body>


</html>