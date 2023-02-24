<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách đăng ký</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">MSSV</th>
                    <th scope="col">Họ tên</th>
                    <th scope="col">Lớp</th>
                    <th scope="col">Chuyên Ngành</th>
                    <th scope="col" colspan="2">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($danhSachs as $danhSach) {
                    echo "<tr>";
                    echo "<th scope='row'>" . $danhSach['MaPhieu'] . "</th>";
                    echo "<td>" . $danhSach['MSSV'] . "</td>";
                    echo "<td>" . $danhSach['Hoten'] . "</td>";
                    echo "<td>" . $danhSach['Lop'] . "</td>";
                    echo "<td>" . $danhSach['TenNganh'] . "</td>";
                    echo "<td><a href='?r=delete&id=" . $danhSach['MaPhieu'] . "' class='text-danger'>Xóa</a></td>";
                    echo "<td><a href='?r=edit&id=" . $danhSach['MaPhieu'] . "' class='text-primary'>Sửa</a></td>";
                    echo "<tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
<script src="https://codejquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html>