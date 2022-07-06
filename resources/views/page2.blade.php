<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>

<style>

    body {
        margin: 0;
    }

    .container {
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    a {
        margin: 20px 0;
        border: 1px solid grey;
        padding: 6px 12px;
        border-radius: 8px;
        text-decoration: none;
        color: black;
        font-size: 18px;
        font-weight: 600;
    }

    a:hover {
        background: -webkit-linear-gradient(45deg, blue, red);
        color: white;
    }

</style>
<body>
    <div class="container">

        <h1>
            Page 2
        </h1>

        <p>
            This is a simple placeholder page.
        </p>

        <a href="{{ url('/') }}">
            Home
        </a>

    </div>
    
</body>
</html>