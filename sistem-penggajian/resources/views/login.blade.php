<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ ('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="username" class="form-label">{{ ('username') }}</label>
                                <input type="text" class="form-control" id="username" name="username" required autofocus>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ ('Password') }}</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>

                            <button type="submit" class="btn btn-primary">{{ ('Login') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>