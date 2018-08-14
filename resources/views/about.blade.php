<!doctype html>
<html>
    <head>
    </head>
    <body>
    	<h1>About Us. Hello <?= "$name Buzz" ;?></h1> 

    <ul>
    	@foreach ($tasks as $task)
    		<li> {{$task->body}}</li>
    	@endforeach
    </ul>
    </body>
    </html>