<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RelationShip</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center my-3"> Eloquent Relationship </h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Post title</th>
                        </tr>
                    </thead>
                    <tbody>

                                                {{-- ekhane multiple data asteche tai foreach loop er betore arekta foreach loop calano hoy. every post kon kon catagory'r under e ta clearly show krbe. --}}

                        @foreach ( $categories as $data)
                            <tr>
                                <td class="align-center">{{ $data->name }}</td>
                                <td>
                                    @foreach ($data->posts as $post)
                                        {{ $post->title }}
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>