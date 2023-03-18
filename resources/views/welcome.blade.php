<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>{{$page_title}}</h1>
<br>




<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>REAL</th>
            <th>UNIVERSE ID</th>

        </tr>
    </thead>
    <tbody>
        
        @foreach($superheroes as $hero)
        <tr>
            <td>{{$hero->id}}</td>
            <td>{{$hero->name}}</td>
            <td>{{$hero->real_name}} </td>
            <td>{{$hero-> universe_id}}</td>
        </tr>

        @endforeach
    </tbody>
</table>
<br><br>
<a href ="/">ALL SUPERHEROES</a>
<br>
<br>
<a href ="/example">MALE</a>
<br>
<br>
<a href ="/heroes">FEMALE</a>

<br><br><br>


</body>
</html>