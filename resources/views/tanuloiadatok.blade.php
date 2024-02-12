<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>




<h1> Tanuloi adatok lista </h1>
<h1>  <a href={{ url('/tanulok/create') }}>Új tanulok felvétele </a></h1>
<ul>
@foreach($adatok as $egyadat)
<li>
    {{$egyadat->omazonosito}}
    {{$egyadat->nev}}
    <a href={{url('/tanulok/'.$egyadat->id) }}> Részletek </a>
    <a href={{url('/tanulok/'.$egyadat->id.'/edit') }}> Szerkesztés</a>
    <form method="POST" action="{{url('tanulok/'.$egyadat->id) }}">
        {{method_field('DELETE')}}
        {{ csrf_field() }}
        <button type="submit"> Tőrlés</button>
    </form>
</li>
@endforeach 
</ul>




</body>
</html>