<?php
 require_once("config/database.php");
$sql = "select * from users";
$res = mysqli_query($con,$sql);

while($r = mysqli_fetch_object($res)){
    $rs[] = array(
        'id' => $r->emp_id,
        'name' => $r->emp_name,
        'pass' => $r->password,
        'city' => $r->city,
        'status' => $r->status
);
}
 //echo "<pre>";
 //print_r ($rs);
//var_dump ($rs);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <h1> EMPLOYEE DETAILS </h1>
                <table class="table table-bordered ">
                    <tr>
                        <th> EMPLOYEE ID </th>
                        <th> EMPLOYEE NAME </th>
                        <th> PASSWORD </th>
                        <th> CITY </th>
                        <th> STATUS </th>

                    </tr>
                    <?php foreach($rs as $v) { ?>
<tr>
    <td><?php echo $v['id'] ?></td>
    <td><?php echo $v['name'] ?></td>
    <td><?php echo $v['pass'] ?></td>
    <td><?php echo $v['city'] ?></td>
    <td><?php echo $v['status']?></td>
 
</tr>
<?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
