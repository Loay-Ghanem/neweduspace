<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .content {
            width: 60%;
            margin: auto;
            padding: 100px;
            /* border: 1px solid #ccc;
            box-shadow: 2px 2px 12px #aaa; */
            text-align: center;
        }
        .mid-section {
            margin: 20px 0;
            padding: 100px;
            /* background-color: #f9f9f9;
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee; */
        }
    </style>
    <style>
     body{
        font-family: 'Nunito' , sans-serif;
    }
    nav a{padding: .5rem;}
    a:hover{
        text-decoration: underline;
    }
    li{
        list-style-type: none;
        border: 1px solid;
        border-radius: 5px;
        background: antiquewhite;
        padding: 10px;
        margin: 5px;
    }
</style>

</head>
<body>
    <div >
    <nav>
        <a href="/">home</a>
        <a href="/subject">subject</a>
        <a href="/aboutus">aboutus</a>
        <a href="/ai">AI</a>
        <a href="/login">login</a>
    </nav>
    </div>

  @yield('contant')
</body>
</html>
