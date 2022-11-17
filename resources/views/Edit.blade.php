<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center pt-5 pb-5">Edit the Info of BatchNo. <span class="text-primary">{{ $data->BatchNo }}</span></h1>
    
    <div class="container d-flex justify-content-center">
        <form class="border border-info p-3" style="display: inline-block;width:50%;" action="{{ route('EditData') }}"
            method="post">
            @csrf
            <div class="mb-3">
                <input type="hidden" value="{{ $data->id }}" class="form-control" name="id"
                    id="exampleFormControlInput1" placeholder="{{ $data->id }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Batch No.</label>
                <input type="text" class="form-control" name="Batch" placeholder="{{$data->BatchNo}}" value="{{ old('Batch') }}" id="exampleFormControlInput1">
                <span class="text-danger">
                    @error('Batch')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Quantity</label>
                <input type="text" class="form-control" name="Quantity" value="{{ old('Quantity') }}" id="exampleFormControlInput1"
                    placeholder="{{ $data->Quantity }}">
                <span class="text-danger">
                    @error('Quantity')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Status:</label>
                <select name="Status">
                    <option value="Good" selected>Good</option>
                    <option value="Average">Average</option>
                    <option value="Bad">Bad</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Remarks</label>
                <textarea class="form-control" name="remarks" id="exampleFormControlTextarea1" rows="3"
                    placeholder="{{ $data->Remarks }}"></textarea>
                <span class="text-danger">
                    @error('remarks')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <button type="submit" class="btn btn-success">Save Changes</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
