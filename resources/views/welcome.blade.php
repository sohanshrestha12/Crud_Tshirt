<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Outdoor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center pt-5 pb-5">Outdoor</h1>
    <div class="container d-flex justify-content-center">
        <form class="border border-info p-3 mx-auto" style="display: inline-block;width:50%;"
            action="{{ route('submit') }}" method="post">
            @csrf

            @if (session('mssg'))
                <div class="alert alert-success text-center">{{ session('mssg') }}</div>
            @endif
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Batch No.</label>
                <input type="text" class="form-control" name="Batch" value="{{ old('Batch') }}"
                    id="exampleFormControlInput1" placeholder="Batch no.">
                <span class="text-danger">
                    @error('Batch')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Quantity</label>
                <input type="text" class="form-control" name="Quantity" id="exampleFormControlInput1"
                    value="{{ old('Quantity') }}" placeholder="No. of quantity">
                <span class="text-danger">
                    @error('Quantity')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Status:</label>
                <select name="Status" class="m-2 p-1 text-center">
                    <option value="Good" selected>Good</option>
                    <option value="Average">Average</option>
                    <option value="Bad">Bad</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Remarks</label>
                <textarea class="form-control" name="remarks" id="exampleFormControlTextarea1" rows="3"
                    placeholder="Leave a comment"></textarea>
                <span class="text-danger">
                    @error('remarks')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="d-flex justify-content-lg-between">
                <button type="submit" class="btn btn-success">Submit</button>
                <a href={{ url('list') }}>View All list</a>
            </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
