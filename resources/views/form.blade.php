<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body class="vh-100">
    <div class="container p-5">
        <div class="row justify-content-center">
            <div class="col-lg-offset-4 col-lg-4">
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                            placeholder="Please Enter a Name">
                        <small id="helpId" class="form-text text-muted">Enter the Name</small>
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId"
                            placeholder="Plaese Enter an Email">
                        <small id="helpId" class="form-text text-muted">Enter the Email</small>
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
                <br>
                @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</body>

</html>