<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1>Student Information</h1>
    </div>
    <div class="container">
        <a href="{{route('index')}}" role="button" type="submit" class="btn btn-dark btn-sm">Fill the form</a>
    </div>
    


    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SI.NO</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date of birth</th>
                    <th scope="col">Email</th>
                    <th scope="col">Board of university</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($details as $detail)
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$detail->name}}</td>
                    <td>{{$detail->dob}}</td>
                    <td>{{$detail->email}}</td>
                    <td>{{$detail->institution}}</td>
                    <td>
                        <a href="{{route('viewAll',$detail->id)}}" type="submitt" role="button" class="btn btn-dark btn-sm" >View all details</a>
                    </td>
                </tr>
                @endforeach
            
            </table>
        </div>
    </body>
</html>