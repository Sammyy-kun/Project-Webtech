<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="All Css/Login.css">
</head>
<body>

<style>
    body {
      background-image: url("Pictures/huji20.jpg");
      background-attachment:fixed;
      background-size:cover;
      background-repeat:no-repeat;
      background-position:center;
    }
</style>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
  <div class="card p-3" style="width:22rem;" id="loginContainer">
    <div class="card-body">
      <form id="loginForm" method="POST">
        <input type="hidden" name="role" id="roleInput" value="">
        <img src="Icons/Ncst_Logo-removebg-preview.png" class="mx-auto d-block" id="ncstLogo" alt="">
        <h3 class="text-center  mt-4" style="font-weight:bold;">Login</h3>
        <div class="col">
          <div class="row">
            <label for="idLogin" class="form-label ">ID Login</label>
            <input type="text" class="form-control input-field mb-3" id="idLogin" name="idLogin">
          </div>

          <div class="row">
            <label for="password" class="form-label mt-3">Password</label>
            <input type="password" class="form-control input-field" id="password" name="password">
          </div>

          <div class="row mt-4">
            <div class="col text-center">
              <button type="submit" class="btn w-50" id="loginBtn">Login</button>
            </div>
          </div>

          <div class="row mt-1">
            <div class="col text-center">
                <button type="button" class="btn btnRegister" data-bs-toggle="modal" data-bs-target="#signupModal">Register</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!--Modal kapag nag login-->
  <div class="modal fade" id="popupModal" tabindex="-1" aria-labelledby="popupModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="popupModalLabel">Login Status</h5>
        </div>
        <div class="modal-body text-center" id="popup-message">
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="button" class="btn" id="loginBtn" data-bs-dismiss="modal">Okay</button>
        </div>
      </div>
    </div>
  </div>

<!-- Modal kapag mag ssignup-->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="Modal2" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog d-flex justify-content-center">
    <div class="modal-content w-75">
      <div class="modal-header">
        <h5 class="modal-title" id="Modal2" style="font-weight:bold;">Sign up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <form>
        <label for="firstName" class="form-label">First Name</label>
          <input type="text" class="form-control" id="firstName">

          <label for="lastName" class="form-label mt-4">Last Name</label>
          <input type="text" class="form-control" id="lastName">

          <label for="studentId" class="form-label mt-4">Student ID</label>
          <input type="text" class="form-control" id="studentId">

          <label for="password" class="form-label mt-4">Password</label>
          <input type="password" class="form-control" id="password">

          <button type="submit" class="btn btn-block mt-4" id="signupBtn">Sign up</button>
        </form>
      </div>
    </div>
  </div>
</div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    //Eto since wala pa yung sa php nag try lang muna ako gumawa yung modal
    document.getElementById('loginForm').addEventListener('submit', function(e) {
      e.preventDefault();

      const username = document.getElementById('idLogin').value;
      const password = document.getElementById('password').value;
      
      let message = '';
      if (username === 'admin' && password === 'password') {
        message = 'Login successful! Welcome.';
      } else {
        message = 'Incorrect username or password. Please try again.';
      }

      document.getElementById('popup-message').textContent = message;
    
      const modal = new bootstrap.Modal(document.getElementById('popupModal'));
      modal.show();
    });
  </script>

</body>
</html>
