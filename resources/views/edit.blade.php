<!DOCTYPE html>
<html>
<body>

<h2>Adatok szerkesztes</h2>

<form action="{{ url('tanulok/'.$adatok->id) }}" method="POST">
  {!! csrf_field() !!}
  @method("PATCH")
  <label for="omazonosito">OM azonosító:</label><br>
  <input type="number" id="omazonosito" name="omazonosito" value="{{ $adatok->omazonosito}}" ><br>

  <label for="nev">Név</label><br>
  <input type="text" id="nev" name="nev" value="{{$adatok->nev}}" ><br><br>

  <label for="lahely">Lakhely:</label><br>
  <input type="text" id="lahely" name="lahely"value="{{$adatok->lahely}}" ><br><br>

  <label for="szulido">Születési idő</label><br>
  <input type="date" id="szulido" name="szulido" value="{{$adatok->szulido}}"><br><br>

  <input type="submit" value="Rögzit">
</form> 

</body>
</html>