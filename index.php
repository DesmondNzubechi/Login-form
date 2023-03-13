

<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # code...
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$number = $_POST['contact'];
$email = $_POST['email'];
$password = $_POST['password'];

if (empty($fName) || empty($lName) || empty($number) || empty($email)) {
    # code...
    echo  "<p class='text-[red] p-[10px] bg-[#fff] rounded mt-[20px] text-[20px] font-[700] '>Please kindly fill all the form</p>";
} else {
    $_SESSION['fName'] = $fName;
    $_SESSION['lName'] = $lName;
    $_SESSION['number'] = $number;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;

    header('Location:  /fileUpload/dashboard.php');
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

    <h1 class="text-[23px] uppercase font-[700] text-center my-[10px]">Sign Up Here</h1>
   
   <div >
   <input type="text" class='border border-sky-500 text-center my-[10px] text-[20px] outline-none rounded-[5px] p-[5px]' name="fName" placeholder='First Name' id="">
   
   </div>
   <div>
   <input type="text" class='border border-sky-500 text-center my-[10px] text-[20px] outline-none rounded-[5px] p-[5px]' name="lName" placeholder='Last Name' id="">
   </div>
   <div>
   <input type="tel" class='border border-sky-500 text-center my-[10px] text-[20px] outline-none rounded-[5px] p-[5px]' name="contact" placeholder='Mobile' id="">
   </div>
   <div>
   <input type="email" class='border border-sky-500 text-center my-[10px] text-[20px] outline-none rounded-[5px] p-[5px]' name="email" placeholder='Email address' id="">
   </div>

   <div>
   <input type="password" class='border border-sky-500 text-center my-[10px] text-[20px] outline-none rounded-[5px] p-[5px]' name="password" placeholder='Password' id="">
   </div>
   <input type="submit" class='bg-sky-500 w-full  text-[#fff] text-center border-sky-500 text-center my-[10px] text-[25px] outline-none rounded-[5px] p-[5px]' value="Sing Up">
</form>
</div>
</body>
</html>






