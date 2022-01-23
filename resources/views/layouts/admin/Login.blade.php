<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="admin/login.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>

</head>
    <body>
        <section>
            <!--Bắt Đầu Phần Hình Ảnh-->
            <div class="img-bg">
                <img src="admin/image/Capture.PNG">

            </div>
            <!--Kết Thúc Phần Hình Ảnh-->
            <!--Bắt Đầu Phần Nội Dung-->
            <div class="noi-dung" style="background-color: DimGray;">
                <div class="form" style="background-color: white; border-radius:30px; ">
                    <h2 style="background-color: yellow; border-radius:30px;margin-left: 38%;" >Big Gara</h2>
                    <form method="POST" action="">
                        @csrf
                        <div class="input-form">
                            <span>User</span>
                            <input type="text" placeholder="Enter Username" name="username" required>
                        </div>
                        <div class="input-form">
                            <span>Password</span>
                            <input type="password" placeholder="Enter Password" name="password" required>
                        </div>
                        <div class="input-form">
                            <input type="submit" value="Login">

                        </div>

                    </form>

                

                </div>
            </div>
            <!--Kết Thúc Phần Nội Dung-->
        </section>

    </body>
</html>