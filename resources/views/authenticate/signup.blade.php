<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registrationpage</title>
</head>

<body>
    <div class="container-md mt -7 ">

        <div class="row">
            <div class="card-group mt-4 ">
                <div class="card pe-3">
                    <img src="{{ asset('assets/image/logo1.jpg') }}" alt="Image" class="img-fluid">


                </div>

                <div class="card px-2">
                    <div class="card-title">
                        <h3>Registration Form </h3>
                    </div>

                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mt-3">
                            <div class="col">

                                <div class="form-outline">

                                    <label class="form-label" for="form3Example1">First name</label>
                                    <input type="text" id="form3Example1" name="fname" class="form-control" />
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-outline">

                                    <label class="form-label" for="form3Example2">Last name</label>
                                    <input type="text" id="form3Example2"  name="lname"class="form-control" />
                                </div>
                            </div>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">

                            <label class="form-label" for="form3Example3">Email address</label>
                            <input type="email" id="form3Example3" name="email" class="form-control" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">

                            <label class="form-label" for="form3Example4">Password</label>
                            <input type="password" id="form3Example4"name="password" class="form-control" />
                        </div>
                        <div class="form-outline mb-4">

                            <label class="form-label" for="form3Example4">Confirmed Password</label>
                            <input type="password" id="form3Example4" name="confirmed_password" class="form-control" />
                        </div>


                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>
                        <div class="d-flex pb-4 mt-2 ">
                            <p style="font-size:14px;" class="text-dark ml-4">Already Have an Accout ? <a href="{{ route('signin') }}">Log in</a> </p>
                        </div>

                        {{-- <a href="{{ route('signin') }}">Already Have Account? Login Now</a> --}}
                    </form>

                </div>
            </div>


        </div>
    </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>
