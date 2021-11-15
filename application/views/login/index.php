<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?= base_url('css/mycss.css') ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>app</title>
</head>

<body>
    <div class="container">
        <section class="form">
            <h3>SIGN IN</h3>
            <form action="" method="post">
                <label for="label" id="label">Email</label>
                <div class="col">
                    <input type="email">
                </div>
                <label for="" id="label">Password</label>
                <div class="col">
                    <input type="password">
                </div>
                <span id="forgot"><a href="http://">forgot password</a></span>

                <div class="col">
                    <button type="submit" class="login">SIGN IN</button>
                </div>
            </form>
            <a href="<?= base_url("login/register") ?>" id="acount">Creat Acount</a>
        </section>
    </div>

</body>

</html>