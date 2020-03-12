<?php
 require_once("config/database.php");

$emp_id = $_POST['emp_id'];
$emp_name = $_POST['emp_name'];
$password = $_POST['pass'];
$city = $_POST['city'];
$status = $_POST['status'];

$sql ="INSERT INTO `users`( `emp_name`, `password`, `city`, `status`) VALUES ('$emp_name','$password','$city','$status')";
//echo $sql; exit();
 $res = mysqli_query($con,$sql);

if($res == 1){
    echo "Inserted successfully";
}
else{
    echo "Insertion Failed, Try Again.......";
}



// $sql1="DELETE FROM `users` WHERE emp_id = 6";
// $res1 = mysqli_query($con,$sql1);

// if($res1 == 1)
// {
//         echo "Deleted  successfully";
//     }
//     else{
//         echo "Deletion operation Failed, Try Again.......";
//     }
    
    // $sql2 = "UPDATE `users` SET `emp_name`= 'monica' WHERE `emp_id` = 7";
    // $res2 = mysqli_query($con,$sql2);
    
    // if($res2 == 1)
    // {
    //         echo "Updated  successfully";
    //     }
    //     else{
    //         echo "Updation Failed, Try Again.......";
    //     }
        
    




?>