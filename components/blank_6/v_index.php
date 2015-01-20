<form action="" method="post" name="form">
				<div class="form-group">
					<label for="exampleInputEmail1">Тахлили №:</label>
					<input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Санаи тав." name="tahlil">
                </div>
                <div class="form-group">
					<label for="exampleInputEmail1">Ба духтур:</label>
					<input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Сурога" name="baDuhtur">
                </div>
				<h3>Тахлили диастазияи пешоб:</h3>
				<div class="form-group">
						<textarea name="d1" id="" cols="30" rows="2" class="form-control input-sm"></textarea>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Диастазаяи пешоб меъер ( 16 - 64 ед ) :</label>
					<textarea name="d2" id="" cols="30" rows="3" class="form-control input-sm"></textarea>
			    </div>
				<div class="form-group">
					<label for="exampleInputEmail1">Духтур:</label>
					<input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Духтур" name="Duhtur">
                </div>
				<input type="hidden" name="sid" value='<?=$bemor->id; ?>'>
				<button type="submit" class="btn btn-primary" name="add">Дохил кардан</button>
			</form>