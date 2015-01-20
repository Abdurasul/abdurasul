<form action="" method="post" name="form">
<h3>Озмоишгохи вирусологи:</h3> 
    <div class="form-group">
        <label for="">Дата:</label>
        <input type="date" class="form-control input-sm" name="sana">
		<label for="">Ному насаб:</label>
		<input class="form-control input-sm" type="text" placeholder="Ному насаб" value='<?=$bemor->NomiBemor; ?>' disabled>
		<label for="">Сину сол:</label>
		<input class="form-control input-sm" type="text" placeholder="Сину сол" value='<?=$bemor->SoliTavallud; ?>' disabled>
	</div>     
        
	<div class="form-group">
    	<label for="">Ташхис:</label>
    	<input type="text" class="form-control input-sm" placeholder="Ташхис" name="tashhis">
    	<label for="">HBsAq:</label>
    	<input type="text" class="form-control input-sm" placeholder="HBsAq" name="HBsAq"> 
    	<label for="">Анти HCV:</label>
    	<input type="text" class="form-control input-sm" placeholder="Анти HCV" name="HCV">
    	<label for="">Анти HDVJqM:</label>
    	<input type="text" class="form-control input-sm" placeholder="Анти HDVJqM" name="HDVJqM"> 
    	<label for="">HbeAq:</label>
    	<input type="text" class="form-control input-sm" placeholder="HbeAq" name="HbeAq">
    	<label for="">Анти HAVJgM:</label>
    	<input type="text" class="form-control input-sm" placeholder="Анти HAVJgM" name="HAVJgM">
    	<label for="">Анти HEVJgM:</label>
    	<input type="text" class="form-control input-sm" placeholder="Анти HEVJgM" name="HEVJgM">
		<label for="">Анти HBcorJgM:</label>
    	<input type="text" class="form-control input-sm" placeholder="Анти HBcorJgM" name="HBcorJgM">
    	<label for="">Духтур:</label>
    	<input type="text" class="form-control input-sm" placeholder="Духтур" name="duhtur"> 
    </div>
    <input type="hidden" name="sid" value='<?=$bemor->id; ?>'>
	<button type="submit" class="btn btn-primary" name="add">Дохил кардан</button>
</form>