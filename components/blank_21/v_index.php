<form action="" method="post" name="form">
<h3 align="center"> <b>ВАЗОРАТИ ТАНДУРУСТИ ВА ҲИФЗИ ИШТИМОИИ АҲОЛИИ ҶУМҲУРИИ ТОҶИКИСТОН</b></h3>
<div class="row">
    <div class="col-sm-12">
		<label for="">Таърихи бистаришавӣ <input type="date" class="form-control input-sm-3"  name="tarikh_b"></label>
        
	</div>
</div>
<br>
	<div class="row">
	<h3 align="center">ВАРАҚАИ ТАЪИНОТ</h3>
	</div>
	<div class="form-group">
		 <label for="">Ному насаби бемор</label>
		 <input type="text" class="form-control input-sm-2" placeholder="Ному насаби бемор"name="tarikh_b">
		 <label for="">ташхис</label>
		 <textarea name="d2" id="" cols="30" rows="3" class="form-control input-sm" placeholder="ташхис" name="oriza"></textarea>
		 <br>
		 <label for="">Ному насаби табиб</label>
		 <input type="text" class="form-control input-sm-2" placeholder="Ному насаби табиб"name="tarikh_b">

	</div>
	<input type="hidden" name="sid" value=<?=$bemor->id; ?>>
	<button type="submit" class="btn btn-primary" name="add">Дохил кардан</button>
</form>


