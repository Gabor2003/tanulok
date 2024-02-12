<!DOCTYPE html>
<html>
<body>

<h2>Adatok bevitele</h2>

<form action="{{ url('tanulok') }}" method="POST">
  {!! csrf_field() !!}
  <label for="omazonosito">OM azonosító:</label><br>
  <input type="number" id="omazonosito" name="omazonosito"  ><br>

  <label for="nev">Név</label><br>
  <input type="text" id="nev" name="nev" ><br><br>

  <label for="lahely">Lakhely:</label><br>
  <input type="text" id="lahely" name="lahely" ><br><br>

  <label for="szulido">Születési idő</label><br>
  <input type="date" id="szulido" name="szulido" ><br><br>

  <input type="submit" value="Rögzit">
</form> 

</body>
</html>