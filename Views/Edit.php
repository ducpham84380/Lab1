<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Trang Chủ</title>
</head>
<body>
    <div class="container">
        <h1>Chỉnh sửa phiếu thông tin </h1>
        <form action="?r=update" method="POST">
            <div class="from-group">
                <label for="#">Mã phiếu:</label>
                <input type="text" class="from-control" name="maphieu" disabled value="<?php echo $student['MaPhieu']?>">
            </div>
            <div class="from-group">
                <label for="studentID">Mã số sinh viên:</label>
                <input type="text" class="from-control" name="studentID" placeholder="Nhập mã số sinh viên" value="<?php echo $student['Mssv']?>">
            </div>
            <div class="from-group">
                <label for="name">Họ và tên:</label>
                <input type="text" class="from-control" name="name" placeholder="Nhập họ tên" value="<?php echo $student['HoTen']?>">
            </div>
            <div class="from-group">
                <label for="class">Lớp:</label>
                <input type="text" class="from-control" name="class" placeholder="Nhập lớp" value="<?php echo $student['Lop']?>">
            </div>
            <div class="from-group">
                <label for="major">Chuyên ngành:</label>
                <select class="from-control" name="major" id="major">
                    <option value="cnpm" <?php if($student['MaNganh'] == 'cnpm') echo 'selected'?>>Công nghệ phần mền</option>
                    <option value="mmt" <?php if($student['MaNganh'] == 'cnpm') echo 'selected'?>>Mạng máy tính</option>
                    <option value="ttnt" <?php if($student['MaNganh'] == 'cnpm') echo 'selected'?>>Trí tuệ nhân tạo</option>
                    <option value="anm" <?php if($student['MaNganh'] == 'cnpm') echo 'selected'?>>An ninh mạng</option>
                    <option value="httt" <?php if($student['MaNganh'] == 'cnpm') echo 'selected'?>>Hệ thống thông tin</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
