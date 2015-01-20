<form action="" method="post" name="form">
<h3 align="center"> <b>Озмоишгохи Радиолоҷи</b></h3>
<div class="form-group">
	<label for="">Ному насаби бемор:</label>
	<input type="text" class="form-control" placeholder="Ному насаби бемор" value="<?=$bemor->NomiBemor; ?>" disabled>
</div>
<div class="form-group">
	<label for="">Соли таввалуд:</label>
	<input type="text" class="form-control" placeholder="Соли таввалуд" value="<?=$bemor->SoliTavallud; ?>" disabled>
</div>
<div class="form-group">
	<label for="">Ҷои истиқомат:</label>
	<input type="text" class="form-control" placeholder="Ҷои истиқомат" value="<?=$bemor->address; ?>" disabled>
</div>
<div class="form-group">
	<label for=""></label>
	<input type="text" class="form-control" placeholder="" name="etwas">
</div>
<div class="form-group">
	<label for="">Меъёр:</label>
	<input type="text" class="form-control" placeholder="Меъёр" name="meer">
</div>
<div class="form-group">
	<label for="">Натиҷа:</label>
	<textarea class="form-control" name="natija"></textarea>
</div>
<div class="form-group">
	<label for="">Сана:</label>
	<input type="text" class="form-control" placeholder="Сана" name="sana">
</div>
<div class="row">
</div>
	<input type="hidden" name="sid" value=<?=$bemor->id; ?>>
	<button type="submit" class="btn btn-primary" name="add">Дохил кардан</button>
</form>


