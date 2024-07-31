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
        nav {
            background-color: white;
            border-bottom: 2px solid black;
            display: flex;
            justify-content: start;
            align-items: center;
            color: black;
            padding: 3px 5px;
            margin-bottom: 10px;
        }
        nav a {
            color: inherit;
            text-decoration: none;
            padding-left: 10px;
            padding-right: 10px;
        }
        nav a img {
            width: 30px;
            height: 30px;
        }
        .notes {
            display: flex;
            justify-content: center;
            flex-wrap:wrap;
        }
        .note {
            padding: 15px 15px;
            border: 1px solid;
            border-radius: 15px;
            margin: 20px 20px;
            width: 500px;
            height: 300px;
            /*height: 200px;*/
            background-color: white;
            display: inline-block;
        }

        .note:hover {
            transform: scale(1.005);
        }

        .mods {
            display: flex;
            justify-content: space-evenly;
        }

        .mods a {
            border: 1px solid black;
            border-radius: 5px;
            padding: 10px 15px;
            text-decoration: none;
            color: black;
        }
    </style>
    <nav>
        <a href="/"><img src="{{ asset('house.jpg') }}" alt=""></a>
        <h1>Notes: </h1>
    </nav>
    @if(session('create-success'))
        <div style="color: green;">
            <p>{{ session('create-success') }}</p>
        </div>
    @endif
    <p>Your notes should appear here: <a href="{{ route('notes.create') }}">Add a note?</a></p>
    <div class="notes">
        @foreach ($notes as $attrib)
            <div class="note">
                <h2>Note #{{ $attrib["id"] }} -- {{ $attrib['updated_at']}} </h2>
                <p>{{ $attrib["contents"] }}</p>
                <div class="mods">
                    <a href="{{ route('notes.edit', $attrib) }}">edit</a>
                    <a href="{{ route('notes.delete', $attrib) }}">delete</a>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>