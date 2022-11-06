<h1>Ajouter promotion</h1>
<form action="/insert" method="POST">
@csrf

<label for="name">Nom de la promotion:</label> <input type="text" name="name">
<input type="submit" name="submit">

 </form>