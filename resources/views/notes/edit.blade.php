<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body onload="loadNumChar()">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
    body {
        align-items: center;
        font-family: 'Rubik', monospace;
    }
    .btns {
            border: 1px solid gray;
            border-radius: 4px;
            padding: 5px 7px;
            font-family: 'Rubik';
        }
    </style>
    <a href="{{ route('notes.notes') }}">Cancel</a>
    <form action="{{ route('notes.update', $note['id']) }}" method="post">
        @csrf
        @method('PUT')
        <h1>Edit your note here</h1>
        <p>Please edit your note here: </p>
        <div id="count">
            <span id="char_count"></span>
            <span id="max_char_count">/ 500</span>
        </div>
        <textarea maxlength="500" rows=20 cols=100 name="note" id="mt" placeholder="Edit your message here...">{{ $note["contents"] }}</textarea>
        @error('note')
            <div style="color: red;">Field cannot be empty</div>
        @enderror
        <div class="confirm-btn">
            <input type="reset" class="btns" value="Clear">
            <input type="submit" class="btns" value="Submit">
        </div>
    </form>
    <script>
        function loadNumChar() {
            var num = $('textarea').val().length;
            console.log(num);
            $('#char_count').text(num);
        }

        $('textarea').keyup(function() {    
        var characterCount = $(this).val().length,
            current_count = $('#char_count'),
            maximum_count = $('#max_char_count'),
            count = $('#count');    
            current_count.text(characterCount);        
        }); 
    </script>
</body>
</html>
