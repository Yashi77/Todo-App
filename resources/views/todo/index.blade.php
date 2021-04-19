<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Todo App</title>
</head>
<style>
    li{
        list-style-type:none;
    }
</style>

<body>
   
    

    <div class="wrapper-grid">
            <div class="container-grid">
                <h1>
                    Todo App
                </h1>
            <h1>List</h1>
    <h3>
        <a href="/create" class="create">Create list</a>
    </h3>
    <hr>
    <h3>
        <x-alert />
    </h3>
    @foreach($todos as $todo)
        <li class="litag">
            @if($todo->completed)
                <span style="color:yellow;"><h4>&#10003; &nbsp; {{$todo->title}}</h4></span>
            @else <h4>
                {{$todo->title}}</h4>
            @endif
            <br><br>  
            <div>
            <a href="{{asset('/' . $todo->id . '/edit')}}" class="ecd">Edit</a><br><br><br>
            <a href="{{asset('/' . $todo->id . '/completed')}}" class="ecd">Done</a><br><br><br>
            <a href="{{asset('/' . $todo->id . '/delete')}}" class="ecd">Delete</a>
            </div>
            

        </li><br><br>
    @endforeach
                <!-- <button class="btn-new">Add to cart</button> -->
        </div>
</body>
</html>
