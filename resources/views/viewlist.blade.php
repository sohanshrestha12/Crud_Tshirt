<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center pt-5">All available List</h1>
    <div class="mt-5 container row mx-auto">
        <p class="text-end"><a href="{{url('/')}}">Go Back</a></p>
        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>Batch No</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>Remarks</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
            @foreach ($list as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->BatchNo }}</td>
                <td>{{ $value->Quantity }}</td>
                <td>{{ $value->Status }}</td>
                <td>{{ $value->Remarks }}</td>
                <td>{{ $value->created_at }}</td>
                <td>
                    <button class="btn btn-success"><a style="text-decoration: none;color:white;" href={{'edit/'.$value['id']}}>Edit</a></button>
                    <button type="submit" class="btn btn-danger"><a href="{{url('delete/'.$value->id)}}" style="text-decoration: none;color:white;">Delete</a></button>
                </td>
            </tr>
        @endforeach
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
