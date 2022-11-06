<h1>Ajouter apprenant</h1>
<form action="/insert_student/" method="POST">
    @csrf

    <label for="lname">nom:</label> <input type="text" name="lname">
    <label for="fname">prénom:</label> <input type="text" name="fname">
    <label for="email">email:</label> <input type="text" name="email">
    <input type="hidden" name="promo_id" value="{{$id_promo}}">

    <input type="submit" name="submit">

</form>
