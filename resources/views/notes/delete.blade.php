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
        .confirm_note {
            border: 3px solid red;
            border-radius: 15px;
            padding: 15px 15px;
        }
        .btns {
            border: 1px solid gray;
            border-radius: 4px;
            padding: 5px 7px;
            font-family: 'Rubik';
            font-size: 15px;
        }
    </style>
    <form action="{{ route('notes.destroy', $note) }}" method="post">
        @csrf
        @method('DELETE')
        <h1>Delete</h1>
        <h4>Are you sure you want to delete the following note?</h4>
        <p class="confirm_note">{{ $note["contents"] }}</p>
        
        <div class="confirm-btn">
            <a href="{{ route('notes.notes') }}">No</a>
            <input type="submit" class="btns" value="Yes">
        </div>
    </form>
</body>
</html>
