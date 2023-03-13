

<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # code...
    $emailAd = $_POST['emailAd'];
    $password = $_POST['password'];

if ($emailAd == $_SESSION['email'] && $password == $_SESSION['password']) {
    # code...
    header('Location: /fileUpload/dashboard.php');
} elseif ($emailAd !== $_SESSION['email'] && $password == $_SESSION['password']) {
    # code...
    echo  "<p class='text-[red] p-[10px] bg-[#fff] rounded mt-[20px] text-[20px] font-[700] '>Incorrect Email Address</p>";

} elseif ($emailAd == $_SESSION['email'] && $password !== $_SESSION['password']){
    echo  "<p class='text-[red] p-[10px] bg-[#fff] rounded mt-[20px] text-[20px] font-[700] '>Incorrect Password</p>";

} else {
    echo  "<p class='text-[red] p-[10px] bg-[#fff] rounded mt-[20px] text-[20px] font-[700] '>Please kindly fill all the form</p>";
};

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
<body class="flex flex-col bg-sky-500 h-full jutify-center items-center ">
    <div>

    <form  class="shadow-2xl bg-[#fff] rounded-xl py-[20px] px-[20px] my-[50px]" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">

    <h1 class="text-[23px] uppercase font-[700] text-center my-[10px]">Log In Here</h1>

   <div>
   <input type="email" class='border border-sky-500 text-center my-[10px] text-[20px] outline-none rounded-[5px] p-[5px]' name="emailAd" placeholder='Email address' id="">
   </div>

   <div>
   <input type="password" class='border border-sky-500 text-center my-[10px] text-[20px] outline-none rounded-[5px] p-[5px]' name="password" placeholder='Password' id="">
   </div>
   <input type="submit" class='bg-sky-500 w-full  text-[#fff] text-center border-sky-500 text-center my-[10px] text-[25px] outline-none rounded-[5px] p-[5px]' value="Log In">
</form>
</div>
</body>
</html>






