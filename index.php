
<!DOCTYPE html>
<html lang="en">
<head>  
<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
    .gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}
    </style>
<body>

  
  
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <form action="proses_index.php" method="POST"> 
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <div class="mb-md-5 mt-md-4 pb-5">
  
                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                <p class="text-white-50 mb-5">Please enter your login and password!</p>
  
                
                <div class="form-floating mb-3">
                    <input type="int" class="form-control" name="nik" id="nik" placeholder="int" required>
                    <label for="int" class="form-label">NIK</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="password" value="" placeholder="varchar" required>
                    <label for="varchar" class="form-label">password</label>
                  </div>
  
               
  
                <button type="submit" class="btn btn-primary btn-block mb-4">
                    Log in
                  </button>
                </form>
  
  
              </div>
  
              <div class="text-right mt-4">
      <a href="register.php" class="btn btn-back float-end text-danger">Registrasi</a>
  </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </body>
</form>
</html>