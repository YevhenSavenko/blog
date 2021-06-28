<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="my-5">
        <h2 class="text-center text-uppercase fw-bolder">
            Sign up
        </h2>
    </div>

    <div class="register mt-5 row justify-content-center">
        <form class="row col-md-7" action="<?= $_SERVER['REQUEST_URI'] ?>" method="POST" enctype="application/x-www-form-urlencoded">
            <div class="col-md-6">
                <input name="last_name" type="text" class="form-control input__register" placeholder="Last Name">
            </div>
            <div class="col-md-6">
                <input name="first_name" type="text" class="form-control input__register" placeholder="First Name">
            </div>
            <div class="col-md-6 my-4">
                <input name="email" type="email" class="form-control input__register" placeholder="Email">
            </div>
            <div class="col-md-6 my-4">
                <input name="telephone" type="tel" class="form-control input__register" placeholder="Number of telephone">
            </div>
            <div class="col-md-6">
                <input name="password" type="password" class="form-control input__register" placeholder="Password">
            </div>
            <div class="col-md-6">
                <input name="confirm_password" type="password" class="form-control input__register" placeholder="Confirm password">
            </div>
            <div class="row justify-content-center mb-5 mt-4">
                <div class="col-md-6">
                    <input name="city" type="text" class="form-control input__register" placeholder="City">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <input name="register" type="submit" class="btn btn-dark col-md-12 btn__submit" value="Sign up">
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>