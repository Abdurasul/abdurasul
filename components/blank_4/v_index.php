<form action="" method="post" name="form">
<h3>Тахлили мочевинаи хун:</h3>
				<div class="row">
					<div class="col-xs-6">
						<input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="сана ва соати фиристодани мавод" name="SanaiMavod">
					</div>
				</div>
				<br>
				<div class="form-group">
					<label for="exampleInputEmail1">Ному насаб:</label>
					<input type="text" class="form-control input-sm" id="exampleInputEmail1"  value='<?=$bemor->NomiBemor;?>' disabled>
                </div>
                <div class="form-group">
					<label for="exampleInputEmail1">Сину сол:</label>
					<input type="text" class="form-control input-sm" id="exampleInputEmail1" value='<?=$bemor->SoliTavallud;?>' disabled>
                </div>
				<div class="row">
					<div class="col-xs-3">
						<label for="exampleInputEmail1">Шуъбаи:</label>
						<input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Шуъбаи" name="Shuba">
					</div>
					<div class="col-xs-4">
						<label for="exampleInputEmail1">Хучраи:</label>
						<input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Хучраи" name="Hujra">
					</div>
				</div>
				<br>
				<div class="form-group">
						<label for="exampleInputEmail1">Натича:</label>
						<input type="text" class="form-control input-sm" placeholder="Натича" name="Natija">
				</div>
				<div class="form-group">
						<label for="exampleInputEmail1">Мочевина № 3.5-9.5 мл/м:</label>
						<textarea name="mochevina" id="" cols="30" rows="2" class="form-control input-sm"></textarea>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Креатинин-№ 59-116 мк/м:</label>
					<textarea name="kreatin" id="" cols="30" rows="2" class="form-control input-sm"></textarea>
                </div>
				<div class="form-group">
					<label for="exampleInputEmail1">Остат - азот-№ 25 - 35 мл/%:</label>
					<textarea name="ostat" id="" cols="30" rows="2" class="form-control input-sm"></textarea>
			    </div>
				<div class="form-group"><label>Духтур:</label>
					<input type='text' name="duhtur" class="form-control input-sm">
			    </div>
				<input type="hidden" name='sid' value='<?=$bemor->id;?>'>
				<button type="submit" class="btn btn-primary" name="add">Дохил кардан</button>
			</form>