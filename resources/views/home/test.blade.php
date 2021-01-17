<!DOCTYPE html>
<html>
<head>
    <title> Laravel Test Page</title>
</head>
<body>

<h1>Laravel Test</h1>
Id no : {{$id}}<br>
Name :  {{$name}}

<?php
for ($i=1;$i<=$id;$i++)
{
echo "<br> $i - $name ";
}
?>
<br>
<a href="{{route('home')}}" >Anasayfa</a>

</body>
</html>
