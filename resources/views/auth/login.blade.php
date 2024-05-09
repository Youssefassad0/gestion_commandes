<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>

    <div class="container">
        <div class="container mt-5">
            <form action="{{ route('postLogin') }}" method="POST">
                @csrf
                <div class="form-outline mb-4">
                    <input type="text" name="email" value="{{ old('email') }}" id="form3Example3"
                        class="form-control form-control-lg" placeholder="Enter a valid email address" />
                    <label class="form-label" for="form3Example3">Email address</label>
                    @error('email')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-outline mb-3">
                    <input type="password" name="password" id="form3Example4" value="{{ old('password') }}"
                        class="form-control form-control-lg" placeholder="Enter password" />
                    <label class="form-label" for="form3Example4">Password</label>
                    @error('password')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="text-center text-lg-start mt-4 pt-2">
                    <button type="submit" class="btn btn-primary btn-lg"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                    <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="{{ route('register') }}"
                            class="link-danger">Register</a></p>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
