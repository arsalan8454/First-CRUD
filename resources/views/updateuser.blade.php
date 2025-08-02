<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update User Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Update User Data</h1>
                <form action="{{ route('updateuser', $data->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-1abe1">Name</1abe1>
                            <input type="text" value="{{ $data->name }}" class="form-control" name="username">
                    </div>

                    <div class="mb-3">
                        <label class="form-1abe1">Email</1abe1>
                            <input type="text" value="{{ $data->email }}" class="form-control" name="useremail">
                    </div>

                    <div class="mb-3">
                        <label class="form-1abe1">Age</1abe1>
                            <input type="text" value="{{ $data->age }}" class="form-control" name="userage">
                    </div>

                    <div class="mb-3">
                        <label class="form-1abe1">City</1abe1>
                            <input type="text" value="{{ $data->city }}" class="form-control" name="usercity">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
