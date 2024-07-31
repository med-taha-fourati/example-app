<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
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
    <form action="{{ route('notes.store', '2') }}" method="post">
        @csrf
        <h1>Create your note</h1>
        <div id="count">
            <span id="char_count">0</span>
            <span id="max_char_count">/ 500</span>
        </div>
        <textarea maxlength="500" rows=20 cols=100 placeholder="Type your message here..." name="message" id="msg"></textarea>
        @error('message')
            <div style="color: red;">Field cannot be empty</>
        @enderror
        <div class="confirm-btn">
            <input type="reset" class="btns" value="Clear">
            <input type="submit" class="btns" value="Submit">
        </div>
    </form>
    <script>
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
