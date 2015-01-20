<form action="" method="post" name="form">
<h3>Тахлили хун:</h3>
				<div class="form-group">
					<label for="exampleInputEmail1">Ному насаб:</label>
					<input type="text" class="form-control input-sm" id="exampleInputEmail1" value='<?=$bemor->NomiBemor; ?>' disabled>
                </div>
                <div class="form-group">
					<label for="exampleInputEmail1">Хучраи №:</label>
					<input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Хучра" name="hujra">
                </div>
				<div class="form-group">
						<label for="exampleInputEmail1">Гурухи хун:</label>
						<input type="text" class="form-control input-sm" placeholder="Натича" name="guruhiHun">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Rh:</label>
					<textarea name="Rh" id="" cols="30" rows="2" class="form-control input-sm"></textarea>
			    </div>
				<div class="form-group">
						<label for="exampleInputEmail1">Духтур:</label>
						<input type="text" class="form-control input-sm" placeholder="Натича" name="duhtur">
				</div>
				<input type="hidden" name="sid" value="<?=$bemor->id; ?>">
				<button type="submit" class="btn btn-primary" name="add">Дохил кардан</button>
			</form>