<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        
        <title>cars</title>

    </head>
    <body>
       <ul>

       @foreach($cars as $car)
       <li>
       <a href="{{route('cars',['id'=>$cars->id])}}"
       {{$cars->name}}
       </a>
       </li>
       @endforeach
       </ul>
    </body>
</html>
