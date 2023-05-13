<?php

include'./inc/conn.php';
include'./inc/form.php';
include'./inc/select.php'

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
<!---
  <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع عالفيسبوك</li>
  <li class="list-group-item">السحب سيكون عشوائي</li>
</ul>
--->
<div class="position-relativetext-center">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
<form class="mt-5" action="index.php" method="POST">
<h3>الرجاء ادخال معلوماتك</h3>

  <div class="mb-3">
    <label for="firstName" class="form-label">الإسم الاول</label>
    <input type="text" name="firstName" class="form-control" id="firstName">
    <div id="emailHelp" class="form-text error"><?php echo $errors['firstNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">الإسم الأخير</label>
    <input type="text" name="lastName" class="form-control" id="lastName">
    <div id="emailHelp" class="form-text error"><?php echo $errors['lastNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">البريد الإلكتروني</label>
    <input type="text" name="email" class="form-control" id="email">
    <div id="emailHelp" class="form-text error"><?php echo $errors['emailError'] ?></div>
    <button type ="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
  </div>

</form>
</div>
  </div>

</div>
<!---
<?php foreach($users as $user): ?>
    <h1><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']) . '<br>' . htmlspecialchars($user['email'])?></h1>
<?php endforeach; ?>
--->
<script src="./js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>