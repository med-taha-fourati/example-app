<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
        body {
            align-items: center;
            font-family: 'Rubik', monospace;
        }

        .container {
            display: flex;
            justify-content: space-evenly;
            flex-wrap: wrap;
        }
        
        a {
            display: flex;
            margin: auto;
            border: 1px solid black;
            border-radius: 5px;
            padding: 100px;
            align-items: center;
            text-decoration: none;
            font-size: 40px;
            color: black;
            transition:all 0.2s linear;
        }

        a:hover {
            transform: scale(1.05);
        }
    </style>
    <h1>Hi</h1>
    <p>testing one two three...</p>
    <h2>Welcome to the notes website!</h2>
    <br>
    <div class="container">
        <a href="{{ route('notes.notes') }}">
            <p>Click here to see your notes</p>
        </a>
        <a href="{{ route('notes.create') }}">
            <p>Click here to create a note</p>
        </a>
    </div>
</body>
</html>