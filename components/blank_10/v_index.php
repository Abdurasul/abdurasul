<form action="" method="post" name="form">
<h3>Тахлили пешоб №:</h3>
<div class="row">
    <div class="col-sm-4">
        <input type="text" class="form-control input-sm" placeholder="Тахлили пешоб №" name="peshob">
    </div>
</div>
    <div class="form-group">
        <label for="">Сана:</label>
        <input type="date" class="form-control input-sm" placeholder="Сана" name="sana">
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
			<label for="">Раками хуччати тибби №:</label>
			<input type="text" class="form-control input-sm" placeholder="Раками хуччати тибби №" name="r_h">
		</div>
	</div>
    <br>
    <div class="row">
        <p style="font-weight: bold; text-align: center; ">Хосияти физикию-биокимёви</p>
    </div>
    <div class="form-group">
    	<label for="">Микдор:</label>
    	<input type="text" class="form-control input-sm" placeholder="Микдор" name="mikdor">
    	<label for="">Ранг:</label>
    	<input type="text" class="form-control input-sm" placeholder="Ранг" name="rang"> 
    	<label for="">Софи:</label>
    	<input type="text" class="form-control input-sm" placeholder="Софи" name="sofi">
    	<label for="">Вазни чузъи:</label>
    	<input type="text" class="form-control input-sm" placeholder="Вазни чузъи" name="v_j"> 
    	<label for="">Вогузиш:</label>
    	<input type="text" class="form-control input-sm" placeholder="Вогузиш" name="voguzish">
    	<label for="">Сафеда (г/л) ____ (г %) :</label>
    	<input type="text" class="form-control input-sm" placeholder="Сафеда" name="safeda">
    	<label for="">Канд: (ммол/л)____ (г %) </label>
    	<input type="text" class="form-control input-sm" placeholder="Канд" name="kand">
    	<label for="">Чисмхои котони:</label>
    	<input type="text" class="form-control input-sm" placeholder="Чисмхои котони" name="j_k"> 
        <label for="">Вогузиш бо хун:</label>
        <input type="text" class="form-control input-sm" placeholder="Вогузиш бо хун" name="v_h">
        <label for="">Билирубин:</label>
        <input type="text" class="form-control input-sm" placeholder="Билирубин" name="bilirubin"> 
        <label for="">Тезобхои зарда:</label>
        <input type="text" class="form-control input-sm" placeholder="Тезобхои зарда" name="t_z">
    <hr>
        <label for="">Эпилептияхо:</label>
        <input type="text" class="form-control input-sm" placeholder="Эпителияхо" name="epitelia"> 
        <div class="row" style="margin-left: 25px;">
            <div class="col-sm-12">
            <label for="">Суфти:</label>
            <input type="text" class="form-control input-sm" placeholder="Суфти" name="sufti">
            </div>
        </div>
       <div class="row" style="margin-left: 25px;">
            <div class="col-sm-12">
            <label for="">Гузаранда:</label>
            <input type="text" class="form-control input-sm" placeholder="Гузаранда" name="guzaranda">
            </div>
        </div>
        
        <div class="row" style="margin-left: 25px;">
            <div class="col-sm-12">
            <label for="">Аз гурдахо:</label>
            <input type="text" class="form-control input-sm" placeholder="Аз гурдахо" name="a_g">
            </div>
        </div>
        <label for="">Лейкоцитхо:</label>
        <input type="text" class="form-control input-sm" placeholder="Лейкоцитхо" name="leykocitho">

        <label for="">Эритроцитхо:</label>
        <input type="text" class="form-control input-sm" placeholder="Эритроцитхо" name="eritposit"> 
        <div class="row" style="margin-left: 25px;">
            <div class="col-sm-12">
            <label for="">Тагирнаефта:</label>
            <input type="text" class="form-control input-sm" placeholder="Тагирнаефта" name="tagirnaefta">
            </div>
        </div>
        <div class="row" style="margin-left: 25px;">
            <div class="col-sm-12">
            <label for="">Тагирефта:</label>
            <input type="text" class="form-control input-sm" placeholder="Тагирефта" name="tagirefta">
            </div>
        </div>
        <label for="">Силиндрхо:</label>
        <input type="text" class="form-control input-sm" placeholder="Силиндрхо" name="cilindr"> 
        <div class="row" style="margin-left: 25px;">
            <div class="col-sm-12">
            <label for="">Гиалини:</label>
            <input type="text" class="form-control input-sm" placeholder="Гиалини" name="gialini">
            </div>
        </div>
        <div class="row" style="margin-left: 25px;">
            <div class="col-sm-12">
            <label for="">Донаги:</label>
            <input type="text" class="form-control input-sm" placeholder="Донаги" name="donagi">
            </div>
        </div>
        <div class="row" style="margin-left: 25px;">
            <div class="col-sm-12">
            <label for="">Эпителяни:</label>
            <input type="text" class="form-control input-sm" placeholder="Эпителяни" name="epitelani">
            </div>
        </div>
        <div class="row" style="margin-left: 25px;">
            <div class="col-sm-12">
            <label for="">Лейкоцитхо:</label>
            <input type="text" class="form-control input-sm" placeholder="Лейкоцитхо" name="leykositho">
            </div>
        </div>
        <div class="row" style="margin-left: 25px;">
            <div class="col-sm-12">
            <label for="">Эритроцитхо:</label>
            <input type="text" class="form-control input-sm" placeholder="Эритроцитхо" name="eritrocitho">
            </div>
        </div>
        <div class="row" style="margin-left: 25px;">
            <div class="col-sm-12">
            <label for="">Пигменти:</label>
            <input type="text" class="form-control input-sm" placeholder="Пигменти" name="pigmenti">
            </div>
        </div>
        <label for="">Гадуд:</label>
        <input type="text" class="form-control input-sm" placeholder="Гадуд" name="gadud"> 
        <label for="">Намак:</label>
        <input type="text" class="form-control input-sm" placeholder="Намак" name="namak">
        <label for="">Микробхо:</label>
        <textarea name="mikrobho" id="" cols="30" rows="2" class="form-control"></textarea>
        <label for="">Вакт:</label>
        <input type="date" class="form-control input-sm" name="vakt">
    </div>
    <input type="hidden" name="sid" value='<?=$bemor->id; ?>'>
	<button type="submit" class="btn btn-primary" name="add">Дохил кардан</button>
</form>