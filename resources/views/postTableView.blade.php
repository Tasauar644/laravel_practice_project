<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Posts Table</title>
</head>

<body>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">User Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post )
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td> 
                <td>{{$post->user->name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>