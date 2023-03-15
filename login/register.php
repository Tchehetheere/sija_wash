<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <title>SIJA-WASH Register</title>
</head>
<body>
<form action="store/store.regis.php" method="post">
    <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

                <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                <p class="text-white-50 mb-5">Please enter your data</p>

                <div class="form-outline form-white mb-4">
                    <input type="text" id="username" name="username" class="form-control form-control-lg" required />
                    <label class="form-label" for="username">Username</label>
                </div>

                <div class="form-outline form-white mb-4">
                    <input type="email" id="email" name="email" class="form-control form-control-lg" required />
                    <label class="form-label" for="email">Email</label>
                </div>

                <div class="form-outline form-white mb-4">
                    <input type="password" id="pass1" name="pass1" class="form-control form-control-lg" required/>
                    <label class="form-label" for="pass1">Password</label>
                </div>

                <div class="form-outline form-white mb-4">
                    <input type="password" id="pass2" name="pass2" class="form-control form-control-lg" required/>
                    <input type="hidden" name="level" value="C">
                    <label class="form-label" for="pass2">Verify password</label>
                </div>

                <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

                </div>

                <div>
                <p class="mb-0">Have an account? <a href="login.php" class="text-white-50 fw-bold">Login</a>
                </p>
                </div>

            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
</form>
</body>
</html>