<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
        <!-- boot strap kaj kore na -->
            <div class="col-md-12">
                <h4>Hi KK It Someone required your counselling</h4>
                <ul>
                    <li>Name : {{$counsellig->name}}</li>
                    <li>Email : {{$counsellig->email}}</li>
                    <li>Phone : {{$counsellig->phone}}</li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>