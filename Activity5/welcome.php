<?php

$msg="";
$stud_id = "";
$fullname = "";
$yr = "";
$course = "";
$email = "";
$password = "";

session_start();

if(isset($_SESSION['email'])) {
echo "Welcome <strong>".$_SESSION['email']."</strong><br/>";
} else {
header('location: login.php');
}

$db = mysqli_connect('localhost', 'admin', '123', 'edangalino');
$students_db=mysqli_query($db, "SELECT * FROM students");
$students=mysqli_fetch_all($students_db, MYSQLI_ASSOC);

// delete selected student
if (isset($_GET['delete'])) {
    $stud_id = $_GET['delete'];

    $query = "DELETE FROM `students` WHERE stud_id=$stud_id";
    mysqli_query($db, $query);
    header('location:welcome.php');

}
// edit selected student
if (isset($_GET['edit'])) {
    $stud_id = $_GET['edit'];

    $query = "SELECT * FROM students WHERE stud_id=$stud_id";
    $result = mysqli_query($db, $query);

    if (mysqli_num_rows($result)== 1) {

        $row = $result->fetch_assoc();
        $stud_id = $row['stud_id'];
        $fullname = $row['fullname'];
        $yr = $row['yr'];
        $course = $row['course'];
        $email = $row['email'];
        $password = $row['password'];
        $msg ="Editing";

    }
}

// update selected student
if (isset($_POST['update'])) {
    $stud_id = $_POST['stud_id'];
    $fullname = $_POST['fullname'];
    $yr = $_POST['yr'];
    $course = $_POST['course'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    
    if (!preg_match("/^[a-zA-Z ]*$/",$fullname)) {  
        $msg = "Error Only alphabets are allowed";  
    }
    elseif (empty($stud_id) || empty($fullname) || empty($yr) || empty($course) || empty($email) || empty($password)) {
        $msg ="Fill the all the field";
    }
    else {
        $query = "UPDATE students SET stud_id='$stud_id', fullname='$fullname', yr='$yr', course='$course', email='$email', password='$password'  WHERE stud_id='$stud_id' ";
        mysqli_query($db, $query);
        $msg ="Success!";
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <form action="welcome.php" method="post">
        
        <strong style= color:red;><?php echo $msg ?></strong>

        <br>
        <label>Student Id</label>
        <input type="text" name="stud_id" value="<?php echo $stud_id; ?>">
        <br>
        <label>Fullname</label>
        <input type="text" name="fullname" value="<?php echo $fullname; ?>">
        <br>
        <label>Year</label>
        <input type="text" name="yr" value="<?php echo $yr; ?>">
        <br>
        <label>Course</label>
        <input type="text" name="course" value="<?php echo $course; ?>">
        <br>
        <label>Email</label>
        <input type="text" name="email" value="<?php echo $email; ?>">
        <br>
        <label>Password</label>
        <input type="text" name="password" value="<?php echo $password; ?>">
        <br>
        <button type="submit" name="update">Update</button>
        <a href="logout.php" style="color: red;">Log out</a>

        <?php foreach($students as $item): ?>
            <p><?php echo $item['stud_id']?></p>
            <p><?php echo $item['fullname']?></p>
            <p><?php echo $item['yr']?></p>
            <p><?php echo $item['course']?></p>
            <p><?php echo $item['email']?></p>
            <p><?php echo $item['password']?></p>
            <a href="welcome.php?edit=<?php echo $item['stud_id']; ?>" class="">Edit</a>
            <a href="welcome.php?delete=<?php echo $item['stud_id']; ?>" class="">Delete</a>
        <?php endforeach; ?>

    </form>
</body>
</html>