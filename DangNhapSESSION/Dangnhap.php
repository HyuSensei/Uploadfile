<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Đăng Nhập</title>
</head>
<body>
    <div class="container-fluid">
    <form action="process_dangnhap.php" method="POST">
            <div class="form-group">
                <label>Tên đăng nhập</label>
                <input type="email" class="form-control" name="email"  placeholder="Nhập tên đăng nhập">
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input type="password" class="form-control" name="password"  placeholder="Nhập mật khẩu">
            </div>
            <button class="btn btn-success">Đăng nhập</button>
    </form>
    </div>
</body>
</html>