


<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # code...
    $_SESSION['fName'] = $fName;
    $_SESSION['lName'] = $lName;
    $_SESSION['number'] = $number;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;

}


?>









<html lang="en">
<head>
<script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn Form</title>
</head>
<body class="flex flex-col py-[50px] bg-sky-500 h-full jutify-center items-center ">

<div>

<ul class='bg-[#fff] relative py-[30px] flex flex-col justify-center items-start px-[20px] rounded-xl shadow-2xl'>
    <h1 class='text-[25px] font-[600] '>My Personal Information</h1>
    <li class='border bg-sky-500 border-bottom w-full text-[#fff] rounded shadow-2xl m-[10px] p-[5px] border-sky-500'>First Name: <?php echo $_SESSION['fName']; ?></li>
    <li class='border bg-sky-500 border-bottom w-full text-[#fff] rounded shadow-2xl m-[10px] p-[5px] border-sky-500'>Last Name:<?php echo $_SESSION['lName']; ?></li>
    
    <li class='border bg-sky-500 border-bottom w-full text-[#fff] rounded shadow-2xl m-[10px] p-[5px] border-sky-500'>Contact :<?php echo $_SESSION['number']; ?></li>
    <li class='border bg-sky-500 border-bottom w-full text-[#fff] rounded shadow-2xl m-[10px] p-[5px] border-sky-500'>Email Address: <?php echo $_SESSION['email']; ?></li>
    <li class='border bg-sky-500 border-bottom w-full text-[#fff] rounded shadow-2xl m-[10px] p-[5px] border-sky-500'>Password :<?php echo $_SESSION['password']; ?></li>

    <a href="login.php" class='bg-gray-500  text-center self-end  text-[#fff] text-center border-sky-500 text-center my-[10px] text-[20px] outline-none rounded-[5px] px-[5px] py-[2px] ' >Log Out</a>
</ul>
</div>


</body>
</html>