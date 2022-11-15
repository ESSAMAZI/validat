<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
body {background-color: powderblue;}
h1   {color: blue;}
div  {color: red;}
</style>
    <title>Posts</title>
</head>
<body>
    <form method="POST" action="{{ route('post')}}" style="display: flex;flex-direction: column;gap: 10px;">
    @csrf
    <label>Title</label>
    <input type="text" name="title" placeholder="title"  @error('title') class="validation-error" @enderror >
    @error('title')
    <div>
    {{$message}}
    </div>
       
    @enderror
    <Label>Content</Label>
    <input type="content" name="content" placeholder="content" >
    @error('content')
    <div>
    {{$message}}
    </div> 
    @enderror
    <input type="submit" name="save" value="Save">
    </form>
    <!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
</body>

</html>