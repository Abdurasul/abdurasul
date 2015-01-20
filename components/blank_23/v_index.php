<form action="" method="post" name="form">
<h3 align="center"> <b>Институти гастроэнтерологияи ВТ 
						<br>Ҷумҳурии Тоҷикистон <br>Озмоишгохи Радиолоҷи</b></h3>
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
	<label for="">Трийодтиронин (ТЗ): </label>
	<input type="text" class="form-control" placeholder="Трийодтиронин (ТЗ)" name="t3">
</div>
<div class="form-group">
	<label for="">Тирокси (Т4): </label>
	<input type="text" class="form-control" placeholder="Тирокси (Т4)" name="t4">
</div>
<div class="form-group">
	<label for="">Тиреотропин (ТТГ): </label>
	<input type="text" class="form-control" placeholder="Тиреотропин (ТТГ)" name="ttg">
</div>
<div class="form-group">
	<label for="">Натиҷа: </label>
	<textarea name="natija" id="" cols="30" rows="3" class="form-control"></textarea>
</div>
	<input type="hidden" name="sid" value=<?=$bemor->id; ?>>
	<button type="submit" class="btn btn-primary" name="add">Дохил кардан</button>
</form>


