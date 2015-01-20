<form action="" method="post" name="form">
<h3>Тахлили лахташавии хун:</h3>
    <div class="form-group">
		<label for="">Ному насаб:</label>
		<input class="form-control input-sm" type="text" placeholder="Ному насаб" value='<?=$bemor->NomiBemor; ?>' disabled>
		<label for="">Сину сол:</label>
		<input class="form-control input-sm" type="text" placeholder="Сину сол" value='<?=$bemor->SoliTavallud; ?>' disabled>
	</div>
	<div class="row">
		<div class="col-sm-5">
			<label for="">Шуъба:</label>
			<input type="text" class="form-control input-sm" placeholder="Шуъба" name="shuba">
		</div>
		<div class="col-sm-5">
			<label for="">Хучра:</label>
			<input type="text" class="form-control input-sm" placeholder="Хучра" name="hujra">
		</div>
	</div>
    <div class="form-group">
    	<label for="">Вакти умуми лахташваии хун ( 5 - 9 ):</label>
    	<input type="text" class="form-control input-sm" placeholder="Вакти умуми лахташваии хун" name="l_hun">
    	<label for="">Вакти протромбини ( 12 - 15 ):</label>
    	<input type="text" class="form-control input-sm" placeholder="Вакти протромбини" name="v_p"> 
    	<label for="">Индекси протромбини ( 80 - 100 %) :</label>
    	<input type="text" class="form-control input-sm" placeholder="Индекси протромбини" name="i_p">
    	<label for="">Фибриноген ( 2 - 4 г/л) :</label>
    	<input type="text" class="form-control input-sm" placeholder="Фибриноген" name="fibrinogen"> 
    	<label for="">Фибрин ( 8 - 12 ):</label>
    	<input type="text" class="form-control input-sm" placeholder="Фибрин" name="fibrin">
    	<label for="">Фибриноген Б ( 0 - 1 ):</label>
    	<input type="text" class="form-control input-sm" placeholder="Фибриноген Б" name="fibrinogenB">
    	<label for="">Вакти рекальтификация ( 60 - 120 сек ):</label>
    	<input type="text" class="form-control input-sm" placeholder="Вакти рекальтификация" name="v_r">
    	<label for="">Тромботест ( 3 - 4 ст) :</label>
    	<input type="text" class="form-control input-sm" placeholder="Тромботест" name="trombotest"> 
    </div>
    <input type="hidden" name="sid" value='<?=$bemor->id; ?>'>
	<button type="submit" class="btn btn-primary" name="add">Дохил кардан</button>
</form>