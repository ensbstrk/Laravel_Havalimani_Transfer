<!DOCTYPE html>
<html>
<head>
    <title> Laravel Test Title</title>
</head>
<body>

<h1> Laravel Test</h1>
Id no:{{$id}}<br>
Name:{{$name}}
<br>
<?php
echo "Id Number:",$id;
echo "Name:",$name;
for($i=1;$i<=$id;$i++){
    echo "<br> $i - $name";
}
?>

<a href="{{route('home')}}"->Anasayfa</a>


</body>
</html>
