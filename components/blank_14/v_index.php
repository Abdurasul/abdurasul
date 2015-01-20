<form action="" method="post" name="form">
<h3>Тахлили Биокимиевии хун №:</h3>
<div class="row">
    <div class="col-sm-5">
        <input type="text" class="form-control input-sm" placeholder="Тахлили Биокимиевии хун №">
    </div>
</div>
<br>
    <div class="form-group">
        <label for="">Сана гирифтани биоматериал:</label>
        <input type="date" class="form-control input-sm" placeholder="" name="sana">
		<label for="">Ному насаб:</label>
		<input class="form-control input-sm" type="text" placeholder="Ному насаб" value='<?=$bemor->NomiBemor; ?>' disabled>
		<label for="">Сину сол:</label>
		<input class="form-control input-sm" type="text" placeholder="Сину сол" value='<?=$bemor->SoliTavallud; ?>' disabled>
	</div>
	<div class="row">
		<div class="col-sm-3">
			<label for="">Хучра:</label>
			<input type="text" class="form-control input-sm" placeholder="Хучра" name="hujra">
		</div>
		<div class="col-sm-4">
			<label for="">Минтака:</label>
			<input type="text" class="form-control input-sm" placeholder="Минтака" name="mintaka">
		</div>
	</div>
    <br>
    <div class="form-group">
        <label for="">Таърихи бемор ё картаи наиземандони №</label>
        <input type="text" class="form-control input-sm" name="tarih">
    	<label for="">1. Холестерин (3.0 - 6.5 ммол/л):</label>
    	<input type="text" class="form-control input-sm" placeholder="Холестерин" name="holesterin">
    	<label for="">2. Микдори умумии бибирубин (3.4 - 20.5 мкмоль/л):</label>
    	<input type="text" class="form-control input-sm" placeholder="Микдори умумии бибирубин" name="bilirubin"> 
    	<label for="">3. Билирубин пайвастшуда (2.2 - 5.1 мкмоль/л):</label>
    	<input type="text" class="form-control input-sm" placeholder="Билирубин пайвастшуда" name="b_p">
    	<label for="">4. Билирубини озод:</label>
    	<input type="text" class="form-control input-sm" placeholder="Билирубини озод" name="b_o"> 
    	<label for="">5. Реаксияи сифати:</label>
    	<input type="text" class="form-control input-sm" placeholder="Реаксияи сифати" name="reaksia">
    	<label for="">6. ACAT до 36 Е/л:</label>
    	<input type="text" class="form-control input-sm" placeholder="ACAT" name="acat">
    	<label for="">7. АЛАТ до 40 Е/л:</label>
    	<input type="text" class="form-control input-sm" placeholder="АЛАТ" name="alat">
    	<label for="">8. Фосфотазаи ишкори до 51 Е/л:</label>
    	<input type="text" class="form-control input-sm" placeholder="Фосфотазаи ишкори" name="f_i"> 
        <label for="">9. Микдори умумии сафедахо 65 - 85 г/л:</label>
        <input type="text" class="form-control input-sm" placeholder="Микдори умумии сафедахо" name="m_s">
        <label for="">10. Амилаза (3.3 - 8.9 мг/с.л):</label>
        <input type="text" class="form-control input-sm" placeholder="Амилаза" name="amilaza"> 
        <label for="">11. Альбумин 35 - 50 г/л:</label>
        <input type="text" class="form-control input-sm" placeholder="Альбумин" name="almubin">
        <label for="">11. Г Г Т П ( 15 - 106 Е/л М) или (10 - 66 Е/л Ж) :</label>
        <input type="text" class="form-control input-sm" placeholder="Г Г Т П" name="ggtp">
    </div>
    <input type="hidden" name="sid" value=<?=$bemor->id; ?>>
	<button type="submit" class="btn btn-primary" name="add">Дохил кардан</button>
</form>