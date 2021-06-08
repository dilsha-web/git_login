<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
<body>
    <form action="{{route('validate.profile')}}" method="post">
        @csrf
        User Name 
        <input type="text" name="uname">
        <span class="error">@error('uname') *{{$message}}
         @enderror</span>
            <br><br>
        Password 
        <input type="password" name="pass">
        <span class="error">@error('pass') *{{$message}}
            @enderror</span>
            <br><br>
        <button type="submit" name="submit" value="Submit">Submit</button>
    </form>
</body>
<style>
    .error{
        color:green;
    }
</style>
</html>