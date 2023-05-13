<?php

include'./inc/conn.php';
include'./inc/form.php';

$sql = 'SELECT * FROM users';
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);



mysqli_free_result($result);
mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>


<body>
    <div class="container">

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">اربح مع احمد</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
  </div>

  <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع عالفيسبوك</li>
  <li class="list-group-item">السحب سيكون عشوائي</li>
</ul>

<form class="mt-5">
<h3>الرجاء ادخال معلوماتك</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الإسم الاول</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الإسم الأخير</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">البريد الإلكتروني</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"></div>
  </div>
</form>

</div>

<form action="index.php" method="POST">
    <input type="text" name="firstName" id="firstName" placeholder="First Name">
    <input type="text" name="lastName" id="lastName" placeholder="Last Name">
    <input type="text" name="email" id="email" placeholder = "Email">
    <input type="submit" name="submit" value="send">
</form>
<?php foreach($users as $user): ?>
    <h1><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']) . '<br>' . htmlspecialchars($user['email'])?></h1>
<?php endforeach; ?>
    
<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/script.js"></script>
</body>
</html>