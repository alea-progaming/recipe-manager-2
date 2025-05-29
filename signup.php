<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css"></link>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <div class="container min-vh-100 d-flex">
        <div class="row mt-5 justify-content-center w-100">
            <div class="col-md-5">
                <h1 class="text-center">Sign Up</h1>
                <form action="login.php" method="POST" novalidate>
                    <div class="form-group">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="pass">Password</label>
                        <input type="password" class="form-control" name="pass" id="password">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="pass_confirmation">Password Confirmation</label>
                        <input type="password" class="form-control" name="pass_confirmation" id="pass_confirmation">
                    </div>
                    
                    <button class="btn btn-primary mt-2" type="submit" name="save-cred">Signup</button>
                    <?php 
                        include('signup-process.php');
                    ?>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
