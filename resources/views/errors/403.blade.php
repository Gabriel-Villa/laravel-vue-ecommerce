<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>403 Forbidden</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="text-center row">
            <div class=" col-md-6">
                <img src="https://www.lucushost.com/blog/wp-content/uploads/2022/01/error-403-forbidden.png" alt=""
                    class="img-fluid">
            </div>
            <div class=" col-md-6 mt-5">
                <p class="fs-3"> <span class="text-danger">Opps!</span> Page not found.</p>
                <p class="lead">
                    The page you’re looking for doesn’t exist.
                </p>
                <a href="{{ route('home') }}" class="btn btn-primary">Go Home</a>
            </div>

        </div>
    </div>
</body>

</html>
