const register = document.querySelector("#register");
register.addEventListener("click", function () {
  username = document.querySelector("#username").value;
  //   console.log(alert(username));
  email = document.querySelector("#email").value;
  password = document.querySelector("#password").value;
  if (validEmail(email) == false) {
    createUserWithEmailAndPassword(auth, email, password)
      .then((userCredential) => {
        // Signed in
        const user = userCredential.user;
        // ...
      })
      .catch((error) => {
        const errorCode = error.code;
        const errorMessage = error.message;
        // ..
      });
  }
});

function validEmail() {
  valid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (valid.test(email) == true) {
    return true;
  } else {
    //   email not valid
    return false;
  }
}
