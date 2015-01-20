<form action="" method="post" name="form">
<h3>Тахлили хун:</h3>
<div class="row">
    <div class="col-sm-3">
        <label for="">Тахлили хун №</label>
        <input type="text" class="form-control input-sm" placeholder="Тахлил хун" name="t_h">
    </div>
</div>
    <div class="form-group">
		<label for="">Ному насаб:</label>
		<input class="form-control input-sm" type="text" placeholder="Ному насаб" value="<?=$bemor->NomiBemor;?>" disabled>
		<label for="">Сину сол:</label>
		<input class="form-control input-sm" type="text" placeholder="Сину сол" value="<?=$bemor->SoliTavallud; ?>" disabled>
	</div>
	<div class="row">
		<div class="col-sm-5">
			<label for="">Шуъба:</label>
			<input type="text" class="form-control input-sm" placeholder="Шуъба" name="shuba">
		</div>
		<div class="col-sm-5">
			<label for="">Духтур:</label>
			<input type="text" class="form-control input-sm" placeholder="Духтур" name="duhtur">
		</div>
	</div>
    <div class="form-group">
    	<label for="">Эритроцитхо ( Мард: 4.5 - 5, Зан: 4.0 - 4.5):</label>
    	<input type="text" class="form-control input-sm" placeholder="Эритроцитхо" name="eriptocit">
    	<label for="">Гемоглобин ( Мард: 120 - 140, Зан: 100 - 120):</label>
    	<input type="text" class="form-control input-sm" placeholder="Гемоглобин" name="gemoglobin"> 
    	<label for="">Нишододи ранги хун ( 0.8 - 1.0):</label>
    	<input type="text" class="form-control input-sm" placeholder="Нишододи ранги хун" name="r_h">
        <br>
    	<div class="row">
            <p style="font-weight: bold; text-align: center;">Катраи хун</p>   
        </div>
        <label for="">+ (Поли хром) :</label>
    	<input type="text" class="form-control input-sm" placeholder="+" name="p_h"> 
    	<label for=""> - (Базоф):</label>
    	<input type="text" class="form-control input-sm" placeholder="-" name="bazof">

    	<label for="">Ретикулитхо ( 0.6 - 0.8 ) :</label>
    	<input type="text" class="form-control input-sm" placeholder="Ретикулитхо" name="retikul">
    	<label for="">Тробмоцитхо ( 180 - 320 хазор ):</label>
    	<input type="text" class="form-control input-sm" placeholder="Тробмоцитхо" name="trombocit">
    	<label for="">Муфтхурхо :</label>
    	<input type="text" class="form-control input-sm" placeholder="Муфтхурхо" name="mufthur"> 
    </div>
    
    <div class="form-gruop">
        <label for="">Лейкоситхо: </label>
        <input type="text" class="form-control input-sm" placeholder="Лейкоситхо" name="leykocit">
        <label for="">Базофилхо: </label>
        <input type="text" class="form-control input-sm" placeholder="Базофилхо" name="bazofil">
        <label for="">Эозинифилхо: </label>
        <input type="text" class="form-control input-sm" placeholder="Эозинифилхо" name="eozinifilho">
        <br>
        <div class="row">
            <p style="font-weight: bold; text-align: center;">Нейтрофилхо:</p>   
        </div>
        <label for="">Мизлоц: </label>
        <input type="text" class="form-control input-sm" placeholder="Мизлоц" name="mizloc">
        <label for="">Инкишоф: </label>
        <input type="text" class="form-control input-sm" placeholder="Инкишоф" name="inkishof">
        <label for="">Чубча шакл: </label>
        <input type="text" class="form-control input-sm" placeholder="Чубча шакл" name="j_sh">
        <label for="">Сегмент: </label>
        <input type="text" class="form-control input-sm" placeholder="Сегмент" name="segment">
        <label for="">Лимфоцитхо: </label>
        <input type="text" class="form-control input-sm" placeholder="Лимфоцитхо" name="limfocit">
        <label for="">Моноцитхо: </label>
        <input type="text" class="form-control input-sm" placeholder="Моноцитхо" name="monocit">
        <label for="">Нишондоди лагжиш: </label>
        <input type="text" class="form-control input-sm" placeholder="Нишондоди лагжиш" name="n_l">
    </div>
    <br>
    <div class="form-group">
        <label for="">Анизоцитоз (мутобики оритоцитхо): </label>
        <input type="text" class="form-control input-sm" placeholder="Анизоцитоз" name="anizocitoz">
        <label for="">Пойкилоситоз: </label>
        <input type="text" class="form-control input-sm" placeholder="Пойкилоситоз" name="poykilocitoz">
        <label for="">Лахташавии хун: </label>
        <input type="text" class="form-control input-sm" placeholder="Лахташавии хун" name="l_h">
        <label for="">Нормебластхо: </label>
        <input type="text" class="form-control input-sm" placeholder="Нормебластхо" name="normeblast">
        <label for="">Саршави: </label>
        <input type="text" class="form-control input-sm" placeholder="Саршави" name="sarshavi">
        <label for="">Суръати тахшиншавии эротрицитхо: </label>
        <input type="text" class="form-control input-sm" placeholder="Суръати тахшиншавии эротрицитхо" name="t_e">
        <label for="">Тамомшави: </label>
        <input type="text" class="form-control input-sm" placeholder="Тамомшави" name="tamomshavi">
        <label for="">Тахлилгард: </label>
        <input type="text" class="form-control input-sm" placeholder="Тахлилгард" name="tahlilgard">
        <label for="">Таърихи руз: </label>
        <input type="text" class="form-control input-sm" placeholder="Таърихи руз" name="t_r">
		<input type="hidden" name="sid" value="<?=$bemor->id; ?>">
    </div>
	<button type="submit" class="btn btn-primary" name="add">Дохил кардан</button>
</form>