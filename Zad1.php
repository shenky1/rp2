<!DOCTYPE html>
<html><head></head>
<body>
<form action="obradi.php"method="get">
<label for="ime">Ime:</label>
<input type="text"name="ime"id="ime"/>
<input type="password"name="lozinka"id="lozinka"/>
<input type="submit"name="spremi"value="Save"/>
<input type = "radio" name="Male" value="Gender"/>
<input type = "radio" name="Female" value="Gender"/>
<select name="Continent">
<option value="Europa">Europa</option>
<option value="Afrika">Afrika</option>
<option value="Sjeverna Amerika">Sjeverna Amerika</option>
<option value="Južna Amerika">Južna Amerika</option>
<option value="Azija">Azija</option>
<option value="Australija">Australija</option>
<input type="checkbox" name="breakfast" value="Meals"/>
<input type="checkbox" name="lunch" value="Meals"/>
<input type="checkbox" name="dinner" value="Meals"/>
<textarea name="Remark" rows="10" cols="50">
</textarea>
<button name="Send"type="submit">Send</button>
<button name="Cancel"type="reset">Cancel</button>
</form>
</body></html>

