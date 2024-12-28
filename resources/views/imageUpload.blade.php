<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h4>Laravel Image Upload to Storage</h4>
            </div>
            <div class="card-body">
                @session('success')
                    <div class="alert alert-success">{{ $value }}</div>
                    <div>
                        <img src="/storage/{{ Session::get('imagePath') }}" width="300px">
                    </div>
                @endsession
                <form action="{{ route('image.upload.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
