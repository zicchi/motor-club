<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container">
    <div class="col-md-4 offset-4">
        <div class="card my-3">
            <div class="card-header">
                Login
            </div>
            <div class="card-body">
                <form action="{{route('login::login')}}" method="post">
                    @csrf
                    <div class="form-outline mb-4">
                        <label class="form-label" for="username">Username</label>
                        <input type="text" id="username" class="form-control" name="username"/>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" id="name" class="form-control" name="name"/>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example2">Password</label>
                        <input type="password" id="form2Example2" class="form-control" name="password"/>
                    </div>

                    <!-- Submit button -->
                    <button type="button" class="btn btn-primary btn-block mb-4">Sign Up</button>

                    <!-- Register buttons -->
                    <div class="text-center">
                        <p>Already a member? <a href="{{route('login::login')}}">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
