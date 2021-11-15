<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?= base_url("css/forgot.css") ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>app</title>
</head>

<body>
    <div class="container">
        <section class="form">
            <h3>Masukan Email</h3>
            <form action="<?= base_url('login/sigin') ?>" method="post">
                <label for="label" id="label">Email</label>
                <div class="col">
                    <input type="email">
                </div>

                <div class="col">
                    <button type="submit" class="login">Submit</button>
                </div>
            </form>
        </section>
    </div>

</body>

</html>