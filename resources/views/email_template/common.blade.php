<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<div class="span6 well">
    <div>
        {{$body}}
    </div>

    <p>
        @if(isset($file))
            @foreach($file as $files)
                <br>
               {{"FILE ::: "}}
               {{$files}}
               <br>
            @endforeach
        @endif
    </p>

</div>
</body>
</html>