<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 mt-5">
            <form action="{{ route('postRegister') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-outline mb-4">
                    <input name='name' type="text" id="form3Example3" class="form-control form-control-lg"
                        placeholder="Enter a valid name " value="{{ old('name') }}" />
                    @error('name')
                        <div class="bg-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    <label class="form-label" for="form3Example3">Name : </label>
                </div>

                <div class="form-outline mb-4">
                    <input name='email' type="text" id="form3Example3" class="form-control form-control-lg"
                        placeholder="Enter a valid email address" value="{{ old('email') }}" />
                    <label class="form-label" for="form3Example3">Email address</label>
                    @error('email')
                        <div class="bg-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-outline mb-3">
                    <input name='password' type="password" id="form3Example4" class="form-control form-control-lg"
                        placeholder="Enter password" value="{{ old('password') }}" />
                    <label class="form-label" for="form3Example4">Password</label>
                    @error('password')
                        <div class="bg-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

           

                <div class="text-center text-lg-start mt-4 pt-2">
                    <button type="submit" class="btn btn-primary btn-lg"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Sign Up </button>
                    <p class="small fw-bold mt-2 pt-1 mb-0">already have an account? <a href="{{ route('login') }}"
                            class="link-danger">Login</a></p>
                </div>
            </form>
        </div>
    </div>

</body>
</html>