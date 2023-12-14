<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
        @if($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif
        <h1>LOGIN</h1>
        <form action="/login" method = 'POST'>
            @csrf
            <div class="mb-3">
                <label for="email" class = 'form-label'>Email</label>
                <input type="email" name = 'email' class = 'form-control' value = {{ Session::get('email') }} >
            </div>  
            <div class="mb-3">
                <label for="password" class = 'form-label'>Password</label>
                <input type="password" name = 'password' class = 'form-control'>
            </div> 
            <div class="mb-3 d-grid">
                <button class = 'btn btn-primary' name = 'submit' type = 'submit'>LOGIN</button>
            </div>
        </form>
    </div>
</body>
</html>