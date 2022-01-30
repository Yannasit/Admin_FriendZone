<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โพสประกาศ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- การลิ้ง css bootstrap เเบบ cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- การลิ้ง javascript ของ bootstrap เเบบ cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- การลิ้ง icon เพื่อใช้งาน icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>

<body>
<H1>โพสประกาศทั้งหมด</H1>
    <hr>
    <div class="row justify-content-md-center">
        <!-- data table ใช้เเสดงข้อมูลเเละเเบ่งหน้าให้อัตโนมัติ -->
        <div class="col-12">
            <table class="table table-striped table-bordered table-hover table-responsive-sm" id="post-list">
                <thead class="thead-light">
                    <tr style="text-align: center;">
                        <th>ไอดีโพส</th>
                        <th>ชื่อสถานที่</th>
                        <th>รูป</th>
                        <th>รายละเอียด</th>
                        <th>หมายเหตุ</th>
                        <th>จำนวนคน</th>
                        <th>ค่าใช้จ่าย</th>
                        <th>จังหวัด</th>
                        <th>อำเภอ</th>
                        <th>ตำบล</th>
                        <th>วันที่เริ่ม</th>
                        <th>วันที่สิ้นสุด</th>
                        <th>วันที่โพส</th>
                        <th>ดูข้อมูล</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($post) : ?>
                        <?php foreach ($post as $data) : ?>
                            <tr style="text-align: center;">

                                <td><?php echo $data['postId']; ?></td>
                                <td><?php echo $data['namesPlace']; ?></td>
                                <td><?php echo $data['imagePost']; ?></td>
                                <td><?php echo $data['detailpost']; ?></td>
                                <td><?php echo $data['note']; ?></td>
                                <td><?php echo $data['num_people']; ?></td>
                                <td><?php echo $data['expenses']; ?></td>
                                <td><?php echo $data['province']; ?></td>
                                <td><?php echo $data['district']; ?></td>
                                <td><?php echo $data['subDistrict']; ?></td>
                                <td><?php echo $data['date_start']; ?></td>
                                <td><?php echo $data['date_end']; ?></td>
                                <td><?php echo $data['creation_date']; ?></td>



                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <a class="btn btn-info" href="/view_detailpost/<?php echo $data['postId'] ?>" data-bs-toggle="modal" data-bs-target="#postId">
                                            <i class="fa fa-eye"></i>
                                        </a>

                                    </div>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table><br>
            <div class="container">

                <div style="float: right;">
                    <a href="/delete" class="btn btn-primary">กลับหน้าหลัก</a>
                </div>


            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#post-list').DataTable();
            });
        </script>
        <script src="/main.js"></script>
</body>

</html>