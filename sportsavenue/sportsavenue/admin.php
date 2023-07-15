<?php
$con=mysqli_connect("localhost","root","","user");
$msg = "wrong password";

if(isset($_POST['create'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $favourite=$_POST['favourite'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    if($password==$cpassword){
        $sql="INSERT INTO `registration` ( `name`, `email`, `favorite`, `password`) VALUES ( '$name', '$email', '$favourite', '$password');";
        $sql_result=mysqli_query($con,$sql);
    }
    else{
        echo $msg;
    }
    header("Location:admin.php");
}

if(isset($_POST['delete']))
{
 $delid = $_POST['d_id'];
 $delsql="DELETE FROM `registration` WHERE `registration`.`id` = $delid;";
 $delsql_result = mysqli_query($con,$delsql);
header("Location:admin.php");

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="manager.css">
    <title>Admin</title>
    <style>
        *{
            margin: 0;
            padding:0;
        }
        .header{
            padding:20px;
        }
        .create
        {
           
            background-color: #23b74c;
            padding: 10px 10px;
            width: fit-content;
            font-size: 20px;
            font-family: sans-serif;
        }
        .form{
          margin: 10px 5px;
          width: fit-content;
          background-color: slategrey;
          padding: 10px;
          font-size: larger;
          font-family: system-ui;
        
        }
        .delete{
            background-color: #ff5656;
            padding: 10px 10px;
            width: fit-content;
            font-size: 20px;
            font-family: sans-serif;
            
        }
        .btn_container{
            display: flex;
           justify-content: space-between;
           align-items: flex-start;

        }
        .form label{
            margin:10px ;
            
        }
        .del_btn{
        padding: 5px 10px;
           
        font-size: 15px;
        background-color: #6e1b1b;
        border: none;
        color: white;
        border-radius: 3px;
        margin-top: 10px;
        }
        .cre_btn{
        padding: 5px 10px;
           
        font-size: 15px;
        background-color: #1b1b6e;
        border: none;
        color: white;
        border-radius: 3px;
        margin-top: 10px;
        }
        label select , label input{
            height:20px;
        }
     </style>   
</head>

<body>
    <div class="header">
        <h2> Admin Panel</h2>
        

</div>

        <!-- <details>
            <summary> See All Records </summary> -->

    <div class="page">
        <table class="layout display responsive-table">
            <thead>
                <tr>
                    <th>customer ID</th>
                    <th>Customer name</th>
                    <th>E-mail</th>
                    <th>Favourite Sport</th>
                </tr>
    
            </thead>
            <tbody>
<?php
$conn = mysqli_connect("localhost","root","","user"); 
$query="select * from registration";
$query_result=mysqli_query($conn,$query);
while( $fetch=mysqli_fetch_array($query_result)){
?>
<tr>
    <td><?php echo $fetch['id'];?></td>
    <td><?php echo $fetch['name'];?></td>
    <td><?php echo $fetch['email'];?></td>
    <td><?php echo $fetch['favorite'];?></td>

<?php
}

?>
            </tbody>
</table>

<!-- </details> -->
<div class="btn_container">
<details>
            <summary class="create"> Create Account </summary>
           <form class="form" method="post">

            <label for="name">Name : <input type="text" name="name" id="name" placeholder="Enter Full Name"
                    id="username"></label><br>
            <label for="Email">Email : <input type="text" name='email' id='email' placeholder="Email or phone"
                    id="username"></label><br>
            <label> Favourite Sport :
                <select name="favourite" id="favourite">
                    <option value="cricket">Cricket</option>
                    <option value="football">Football</option>
                    <option value="badminton">Badminton</option>
                    <option value="tennis">Tennis</option>


                </select>
            </label>
<br>
            <label for="password">Password
            <input type="password" name='password' placeholder="Password" id="password"></label><br>
            <label for="password"> Confirm Password
            <input type="password" name='cpassword' placeholder="Password" id="cpassword">
            </label>



            <div class="main_div">
                <button class="cre_btn" name="create" id="create">create Account</button>
            </div>
        
        </form>
</details>
<details>
    <summary class="delete">Delete Account</summary>
    <form method="post" class="form">
            <label>Enter Customer Id To delete <input type="number" name="d_id" id="d_id"></label><br>
            <button class= "del_btn" name="delete" id="delete">Delete Account</button>
    </form>
        </details>
</div>
    </div>
</body>

</html>