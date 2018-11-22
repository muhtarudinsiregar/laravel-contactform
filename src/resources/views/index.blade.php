<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">

</head>

<body>
    <div style="width: 500px; margin: 0 auto; margin-top: 90px;">
        @if(Session::has('message'))
            @alert(["type" => Session::get('type'), 'message' => Session::get("message")])
            @endalert
        @endif
        <h3>Contact Us</h3>

        <form action="{{route('contact')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Your name</label>
                <input type="text" class="form-control" name="name" id="exampleFormControlInput" placeholder="John Doe">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Enter Your Message</label>
                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder=" Messages"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
