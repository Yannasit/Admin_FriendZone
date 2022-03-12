<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="/css/login.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Admin FriendZone</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-9">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(https://media.discordapp.net/attachments/687292314988707850/941982976152068106/w644_1.jpg?width=391&height=391);">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">

                                <div class="w-100" style="text-align:center;">
                                    <h3 class="mb-4">เข้าสู่ระบบ</h3>
                                </div>
                            </div>
                            <form action="/OfficerController/login" method="post" class="signin-form">
                                <div class="form-group mb-3">
                                    <?php if (session()->getFlashdata('msg')) : ?>
                                        <div><script>
                                                Swal.fire({
                                                    icon: 'error',
                                                    title: '<?= session()->getFlashdata('msg') ?>',
                                                    text: 'โปรดตรวจสอบชื่อผู้ใช้หรือรหัสผ่านให้ถูกต้อง',
                                                    
                                                })
                                            </script></div>
                                    <?php endif ?>
                                    <label class="label" for="name">ชื่อผู้ใช้งาน</label>
                                    <input type="text" class="form-control" placeholder="Username" name="userName" value="<?= set_value('userName'); ?>" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">รหัสผ่าน</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password" value="<?= set_value('password'); ?>" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">เข้าสู่ระบบ</button>
                                </div>
                                <!-- <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
		            </div> -->
                            </form>
                            <p class="text-center">ยังไม่มีบัญชีใช่ไหม? <a href="/register">ลงทะเบียน</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>