<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contuct Form</title>
</head>

<body>
    <h1>Contuct Us Any Time</h1>

    <form action="{{route('contuct')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Your Name">
        <input type="email" name="email" placeholder="Your Email">
        <textarea name="msg" placeholder="Your Messege" cols="30" rows="10"></textarea>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
