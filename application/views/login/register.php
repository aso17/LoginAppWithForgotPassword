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
            <h3>SIGN UP</h3>
            <form action="" method="post">
                <label for="label" id="label">Username</label>
                <div class="col">
                    <input type="text" id="username">
                </div>
                <label for="label" id="label">Email</label>
                <div class="col">
                    <input type="email" id="email">
                </div>
                <label for="" id="label">Password</label>
                <div class="col">
                    <input type="password" id="password">
                </div>
                <div class="col">
                    <button class="login" id="register">Resgister</button>
                </div>
            </form>
            <a href="<?= base_url("login") ?>" id="acount"> <button id="back">Back</button> </a>
        </section>
    </div>
    <script type="module">
    // Import the functions you need from the SDKs you need
    import {
        initializeApp
    } from "https://www.gstatic.com/firebasejs/9.4.1/firebase-app.js";
    import {
        getAuth,
        createUserWithEmailAndPassword
    } from "https://www.gstatic.com/firebasejs/9.4.1/firebase-auth.js";
    import {
        getDatabase
    } from "https://www.gstatic.com/firebasejs/9.4.1/firebase-database.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    const firebaseConfig = {
        apiKey: "AIzaSyCqBBy4JKudAlr8QvLUkiKGhpzwJpg2jlA",
        authDomain: "login-with-ci-8b3c9.firebaseapp.com",
        projectId: "login-with-ci-8b3c9",
        storageBucket: "login-with-ci-8b3c9.appspot.com",
        messagingSenderId: "797042199457",
        appId: "1:797042199457:web:d7363940d1c7bea598d9e0"
    };
    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const auth = getAuth(app);
    const database = getDatabase();
    </script>
    <script src="<?= base_url('js/myscript.js') ?>"></script>
</body>

</html>