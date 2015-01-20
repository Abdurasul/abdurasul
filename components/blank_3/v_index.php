<form action="" method="post" name="form">
<h3>Тахлили канди хун:</h3>
				<div class="row">
					<div class="col-xs-6">
						<label for="exampleInputEmail1">Ф.Н.Н:</label>
						<input type="text" class="form-control input-sm" id="exampleInputEmail1" value='<?=$bemor->NomiBemor;?>' disabled>
					</div>
				</div>
				<br>
				<div class="form-group">
					<label for="exampleInputEmail1">Санаи тав.:</label>
					<input type="text" class="form-control input-sm" id="exampleInputEmail1" value='<?=$bemor->SoliTavallud;?>' disabled>
                </div>
                <div class="form-group">
					<label for="exampleInputEmail1">Сурога:</label>
					<input type="text" class="form-control input-sm" id="exampleInputEmail1" value='<?=$bemor->address;?>' disabled>
                </div>
				<div class="form-group">
					<label for="exampleInputEmail1">Канди хун пеш аз нахори:</label>
					<input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Канди хун пеш аз нахори" name="hunPeshAzNahori">
			    </div>
				<div class="form-group">
						<label for="exampleInputEmail1">Бади 30 дакикаи кабули глюкоза:</label>
						<input type="text" class="form-control input-sm" placeholder="Бади 30 дакикаи кабули глюкоза" name="SiMinBadiKabul">
				</div>
				<div class="form-group">
						<label for="exampleInputEmail1">Бади 60 дакикаи кабули глюкоза:</label>
						<input type="text" class="form-control input-sm" placeholder="Бади 60 дакикаи кабули глюкоза" name="ShMinBadiKabul">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Бади 90 дакикаи кабули глюкоза:</label>
					<input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Бади 90 дакикаи кабули глюкоза" name="NavMinBadiKabul">
                                </div>
				<div class="form-group">
					<label for="exampleInputEmail1">Бади 120 дакикаи кабули глюкоза:</label>
					<input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Бади 120 дакикаи кабули глюкоза:" name="YbstMinBadiKabul">
			    </div>
				<div class="form-group">
					<label for="exampleInputEmail1">Духтур:</label>
					<input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Духтур:" name="duhtur">
			    </div>
				<input type='hidden' name='sid' value='<?=$bemor->id; ?>'>
				<button type="submit" class="btn btn-primary" name="add">Дохил кардан</button>
			</form>