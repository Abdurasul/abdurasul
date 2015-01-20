<form action="" method="post" name="form">
<h3>Тахлили фазла №:</h3>
    <div class="row">
        <div class="col-sm-3">
		   <input class="form-control input-sm" type="text" placeholder="Тахлили фазла №">
		</div>
	</div>
	<br>
	<div class="form-group">
		<label for="">Ному насаб:</label>
		<input class="form-control input-sm" type="text" placeholder="Ному насаб" value='<?=$bemor->NomiBemor; ?>' disabled>
		<label for="">Сину сол:</label>
		<input class="form-control input-sm" type="text" placeholder="Сину сол" value='<?=$bemor->SoliTavallud; ?>' disabled>
	</div>
	<div class="row">
		<div class="col-sm-5">
			<label for="">Муассиса:</label>
			<input type="text" class="form-control input-sm" placeholder="Муассиса" name="muassisa">
		</div>
		<div class="col-sm-5">
			<label for="">Шуъба:</label>
			<input type="text" class="form-control input-sm" placeholder="Шуъба" name="shuba">
		</div>
		<div class="col-sm-2">
			<label for="">Хучра:</label>
			<input type="text" class="form-control input-sm" placeholder="Хучра" name="hujra">
		</div>
	</div>
    <div class="row">
    	<div class="col-sm-6">
    		<label for="">Китъа:</label>
    		<input type="text" class="form-control input-sm" placeholder="Китъа" name="kita">
    	</div>
    	<div class="col-sm-6">
    		<label for="">Таърихи бемор:</label>
    		<input type="text" class="form-control input-sm" placeholder="Таърихи бемор" name="tarih">
    	</div>
    </div>
    <div class="form-group">
    	<label for="">Микдор:</label>
    	<input type="text" class="form-control input-sm" placeholder="Микдор" name="mikdor">
    	<label for="">Консистенсия:</label>
    	<input type="text" class="form-control input-sm" placeholder="Консистенсия" name="konsistensia"> 
    	<label for="">Намуд:</label>
    	<input type="text" class="form-control input-sm" placeholder="Намуд" name="namud">
    	<label for="">Буй:</label>
    	<input type="text" class="form-control input-sm" placeholder="Буй" name="buy"> 
    	<label for="">Ранг:</label>
    	<input type="text" class="form-control input-sm" placeholder="Ранг" name="rang">
    	<label for="">Реаксия(тагзия):</label>
    	<input type="text" class="form-control input-sm" placeholder="Реаксия" name="reaksia">
    	<label for="">Луоб:</label>
    	<input type="text" class="form-control input-sm" placeholder="Луоб" name="luob">
    	<label for="">Хун:</label>
    	<input type="text" class="form-control input-sm" placeholder="Хун" name="hun"> 
    	<label for="">Бокимондаи хурокаи хазмнашуда:</label>
    	<textarea name="huroka" id="" cols="30" rows="2" class="form-control"></textarea>
    </div>
    <div class="row">
       <p style="text-align: center; font-weight: bold;">Муонихои химияви</p>
    </div>
    <div class="form-group">
    	<label for="">Тачзия барои хун:</label>
    	<input type="text" class="form-control input-sm" placeholder="Тачзия барои хун" name="t_hun">
    	<label for="">Тачзия барои срерхобилин:</label>
    	<input type="text" class="form-control input-sm" placeholder="Тачзия барои срерхобилин" name="t_srerhobilin">
    	<label for="">Тачзия барои билирубин:</label>
    	<input type="text" class="form-control input-sm" placeholder="Тачзия барои билирубин" name="t_bilirubin">
    </div>
    <div class="row">
       <p style="text-align: center; font-weight: bold;">Ташхиси микроскопи</p>
    </div>
    <div class="form-group">
    	<label for="">Наххои мушаки:</label>
    	<div class="form-group">
    		<label class="col-sm-2 control-label">Хатдор</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control input-sm" placeholder="Хатдор" name="hatdor">
                </div>
            <label class="col-sm-2 control-label" style="margin-top: 2px; ">Бехат</label>
                <div class="col-sm-10" style="margin-top: 5px; ">
                    <input type="text" class="form-control input-sm" placeholder="Бехат" name="behat">
                </div>
    	</div>
    </div>
    <div class="form-group">
    	<label for="">Бофтахои пайванди:</label>
    	<input type="text" class="form-control input-sm" placeholder="Бофтахои пайванди" name="payvandi">
    	<label for="">Чарбу:</label>
    	<input type="text" class="form-control input-sm" placeholder="Чарбу" name="charbu">
    	<label for="">Чарбуи кислотаги:</label>
    	<input type="text" class="form-control input-sm" placeholder="Чарбуи кислотаги" name="charbui_kislotagi">
    	<label for="">Собун:</label>
    	<input type="text" class="form-control input-sm" placeholder="Собун" name="sobun">
        <label for="">Хучайрахои хазмшудаи растани:</label>		
        <input type="text" class="form-control input-sm" placeholder="Хучайрахои хазмшудаи растани" name="hujayra">
        <label for="">Крахмал:</label>
        <input type="text" class="form-control input-sm" placeholder="Крахмал" name="krahmal">
        <label for="">Фоизи йодофили:</label>     
        <input type="text" class="form-control input-sm" placeholder="Фоизи йодофили" name="yodofilia">
        <label for="">Кристалхо:</label>
        <input type="text" class="form-control input-sm" placeholder="Кристалхо" name="kristalho">
        <label for="">Луоб:</label>     
        <input type="text" class="form-control input-sm" placeholder="Луоб" name="luob2">
        <label for="">Эпителей:</label>     
        <input type="text" class="form-control input-sm" placeholder="Эпителей" name="epiteley">
        <label for="">Лейкоситхо:</label>
        <input type="text" class="form-control input-sm" placeholder="Лейкоситхо" name="leykositho">
        <label for="">Эритроситхо:</label>     
        <input type="text" class="form-control input-sm" placeholder="Эритроситхо" name="eritrositho">
        <label for="">Содатаринхо:</label>     
        <input type="text" class="form-control input-sm" placeholder="Содатаринхо" name="sodatarinho">
        <label for="">Тухми гиччахо:</label>     
        <input type="text" class="form-control input-sm" placeholder="Тухми гиччахо" name="tuhmi_j">
        <label for="">Замбуругухо:</label>     
        <input type="text" class="form-control input-sm" placeholder="Замбуругухо" name="zambuguruho">
    </div>
	<input type="hidden" name="sid" value='<?=$bemor->id; ?>'>
    <br>
	<button type="submit" class="btn btn-primary" name="add">Дохил кардан</button>
</form>