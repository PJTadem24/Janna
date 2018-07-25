<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
       <center>
       	
       	@if($operation=="add")
       	<h1 style="color: "red; ">  
       	   Operation: Addition</h1>

       	<h3> Added: {{$num1}}</h3>
       	<h3> Added: {{$num2}}</h3>
       	<h3> Sum: {{$sum=$num1+$num2}}</h3>


       	@elseif ($operation=="sub")
       	<h1> Operation: Subtraction</h1>
       	<h1> Menuend: {{$num1}}</h1>
       	<h1> Subtrahend: {{$num2}}</h1>
       	<h1> difference: {{$diff=$num1-$num2}}</h1>

       	@elseif ($operation=="mul")
       	<h1> Operation: Multiplication</h1>
      	<h1> Menuend: {{$num1}}</h1>
       	<h1> Subtrahend: {{$num2}}</h1>
       	<h1> difference: {{$mul=$num1*$num2}}</h1>

       	@elseif ($operation=="div")
       	<h1> Operation: Division</h1>
      	<h1> Menuend: {{$num1}}</h1>
       	<h1> Subtrahend: {{$num2}}</h1>
       	<h1> difference: {{$div=$num1/$num2}}</h1>

       	@endif
       </center>
</body>
</html>