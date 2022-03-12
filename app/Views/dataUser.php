<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลผู้ใช้</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="/viewstu.css" />
</head>

<body>
<?php $session = session(); ?>
<from action="/UserController/verifyUser" method="post">
    <div class="bg-alumni"></div>
    <div class="container mt-4">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <h1>ข้อมูลส่วนตัว</h1>
                <div class="border">
                <?php if ($user) : ?>
                  <?php foreach ($user as $user) : ?>
                    <p><?php echo " ชื่อ : " . $user['FName'] ?></p>
                    <p><?php echo " นามสกุล : " . $user['LName'] ?></p>
                    <p><?php echo " รหัสบัตรประชาชน : " . $user['idCard'] ?></p>
                    <p><?php echo " รูปบัตรประชาชน : "?></p>
                    <img src="<?php echo  $user['idCardImage']; ?>" width="200" height="100">
                    <p><?php echo " รูป : " ?> </p> 
                    <img src="<?php echo  $user['userImage']; ?>" width="100" height="100">
                    <p><?php echo " วันหมดอายุของบัตร : " . $user['expIdCard'] ?></p>
                    <p><?php echo " สถานะ : " . $user['statusUser'] ?></p>
                    <p><?php echo " เพศ : " . $user['gender'] ?></p>
                    <p><?php echo " วันเกิด : " . $user['birthday'] ?></p>
                    <p><?php echo " ที่อยู่ : " . $user['address']?></p>
                    <p><?php echo " อีเมล์ : " . $user['email'] ?></p>
                    <p><?php echo " เบอร์ : " . $user['phoneNumber'] ?></p>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
                <br>



                <div style="float: right;">
                    <a href="/home" class="btn btn-primary">กลับหน้าหลัก</a>
                    <button class="btn btn-primary" onclick="verifyUser()">บันทึก</button>
                </div>


            </div>


        </div>
    </div>
    </div>

</from>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="/jquery.min.js"></script>
    <script src="/main.js"></script>
</body>

</html>