<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="mt-4 p-5 bg-purple-500 d-content text-black rounded">
            <img src="{{ asset('storage/posts/'.$post->image) }}" class="rounded" style="justify-content: center;" width="320px" alt="">
            <hr>
            <h4>{{ $post->Nama }}</h4>
            <p class="tmt-3">
               Jurusan : {{ $post->Jurusan }}
            </p>
            <p class="tmt-3">
               NoHp : {{ $post->NoHp }}
            </p>
            <p class="tmt-3">
               Email : {{ $post->Email }}
            </p>
            <p class="tmt-3">
               Alamat : {{ $post->Alamat }}
            </p>
            <a href="/posts" class="btn btn-dark">Back</a>
        </div>
    </div>
</body>
</html>