<form action="" method="post" name="form">
<h3>Озмоишгохи имунологи:</h3> 
    <div class="form-group">
		<label for="">Ному насаб:</label>
		<input class="form-control input-sm" type="text" placeholder="Ному насаб" value='<?=$bemor->NomiBemor; ?>' disabled>
		<label for="">Соли таваллуд:</label>
		<input class="form-control input-sm" type="text" placeholder="Сину сол" value='<?=$bemor->SoliTavallud; ?>' disabled>
	</div>     
        
	<div class="row">
		<div class="col-sm-6">
			<label for="">Таърихируз:</label>
			<input type="text" class="form-control input-sm" placeholder="Таърихируз" name="tarih">
		</div>
		<div class="col-sm-6">
			<label for="">Ташхис:</label>
			<input type="text" class="form-control input-sm" placeholder="Ташхис" name="tashhis">
		</div>
	</div>
    <br>
    <div class="row">
        <p style="font-weight: bold; text-align: center; ">ИММУНИТЕТИ ХУЧАЙРАВИ</p>
    </div>
    <div class="form-group">
    	<label for="">1. CD3 (T - лимфоситхо) - (55 - 69 %):</label>
    	<input type="text" class="form-control input-sm" placeholder="CD3 (T - лимфоситхо)" name="cd3">
    	<label for="">2. CD4 (T - хелперхо) - (34 - 44%):</label>
    	<input type="text" class="form-control input-sm" placeholder="CD4 (T - хелперхо)" name="cd4"> 
    	<label for="">3. CD8 (T - супрессорхо) - (17 - 23%) :</label>
    	<input type="text" class="form-control input-sm" placeholder="CD8 (T - супрессорхо)" name="cd8">
    	<label for="">4. CD20 (B - лимфоситхо) - (18 - 30%):</label>
    	<input type="text" class="form-control input-sm" placeholder="CD20 (B - лимфоситхо)" name="cd20"> 
    	<label for="">5. CD16 (NK - клетки) - (06 - 12%):</label>
    	<input type="text" class="form-control input-sm" placeholder="CD16 (NK - клетки)" name="cd16">
    	<label for="">6. CD95 (апоптоз) - (25 - 35%):</label>
    	<input type="text" class="form-control input-sm" placeholder="CD95 (апоптоз)" name="cd95">
    	<label for="">7. CD25 (ресепторIL- 2) - (20 - 30%):</label>
    	<input type="text" class="form-control input-sm" placeholder="CD25 (ресепторIL- 2)" name="cd25">
    </div>
    <div class="row">
        <p style="font-weight: bold; text-align: center; "> ИММУНИТЕТИ ГУМОРАЛИ</p>
    </div>
    <div class="form-group">
        <label for="">1. Иммуноглобулин А:</label>
        <input type="text" class="form-control input-sm" placeholder="Иммуноглобулин А" name="a">
        <label for="">2. Иммуноглобулин M:</label>
        <input type="text" class="form-control input-sm" placeholder="Иммуноглобулин M" name="m">
        <label for="">3. Иммуноглобулин G:</label>
        <input type="text" class="form-control input-sm" placeholder="Иммуноглобулин G" name="g">
        <label for="">НАТИЧА:</label>
        <textarea name="natija" id="" cols="30" rows="2" class="form-control"></textarea>
        <label for="">Тахлил кард:</label>
        <input type="text" class="form-control input-sm" placeholder="Тахлил кард" name="tahlil">
        <label for="">Сана:</label>
        <input type="date" class="form-control input-sm" placeholder="Сана" name="sana">
    </div>
	<input type="hidden" name="sid" value='<?=$bemor->id; ?>'>
	<button type="submit" class="btn btn-primary" name="add">Дохил кардан</button>
</form>