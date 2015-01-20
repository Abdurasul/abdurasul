<form action="" method="post" name="form">
<h3>Ташхиси фаросадоии узвхои дохила:</h3>
				<div class="form-group">
					<label for="exampleInputEmail1">Рузи ташхис:</label>
					<input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Рузи тахшис" name="ruzitashhis">
                </div>
                <div class="form-group">
					<label for="exampleInputEmail1">Ному насаб:</label>
					<input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Ному насаб" value='<?=$bemor->NomiBemor; ?>' disabled>
                </div>
				
				<div class="form-group">
					<label for="">Чигар: Андоза</label>
					<input type="text" class="form-control input-sm" placeholder="Андоза" name="chigar_andoza">
				</div>
				<div class="row">
					<div class="col-xs-5">
						<label for="">Контур</label>
						<input type="text" placeholder="Контур" class="form-control input-sm" name="chigar_kontur">
					</div>
					<div class="col-xs-5">
						<label for="">Сохтор</label>
						<input type="text" placeholder="Сохтор" class="form-control input-sm" name="chigar_sohtor">
					</div>
				</div><Br>
				<div class="form-group">
					<label for="exampleInputEmail1">Садогузарони:</label>
                    <input type="text" class="form-control input-sm" placeholder="Садогузарони" name="sadoguzaroni">
			    </div>
				<div class="row">
					<div class="col-xs-6">
						<label for="">Варидхо: </label>
						<input type="text" class="form-control input-sm" placeholder="Варидхо" name="varidho">
					</div>
					<div class="col-xs-6">
						<label for="">V.portae: </label>
						<input type="text" class="form-control input-sm" placeholder="V.portae" name="vportae">
					</div>
				</div>
				<br>
				<div class="form-group">
					<label for="">Омос: </label>
					<input type="text" class="form-control input-sm" placeholder="Омос" name="omos">
				</div>
                <b>Талхадон:</b>
                <br>
				<div class="row">

					<div class="col-xs-6">
					    <label for="">Шакл: </label>
					    <input type="text" class="form-control input-sm" placeholder="Шакл" name="talhadon_shakl"> 
                    </div>
                    <div class="col-xs-6">
                    	<label for="">Андоза:</label>
                    	<input type="text" class="form-control input-sm" placeholder="Андоза" name="talhadon_andoza">
                    </div>
				</div>
				<br>
                <div class="form-group">
					<label for="">Девор: </label>
					<input type="text" class="form-control input-sm" placeholder="Девор" name="devor">
				</div>
                <div class="form-group">
					<label for="">Вазъи талха: </label>
					<input type="text" class="form-control input-sm" placeholder="Вазъи талха" name="talha">
				</div>
				<div class="row">
					<div class="col-xs-6">
						<label for="">Санг:</label>
						<input type="text" class="form-control input-sm" placeholder="Санг" name="sang">
					</div>
					<div class="col-xs-6">
						<label for="">Холедох</label>
						<input type="text" class="form-control input-sm" placeholder="Холедох" name="holedoh">
					</div>
				</div>
				<br>
                <div class="form-group">
					<label for="">Гадуди зери меъда: Андоз </label>
					<input type="text" class="form-control input-sm" placeholder="Андоз" name="g_andoz">
				</div>
                <div class="row">
					<div class="col-xs-5">
						<label for="">Контур</label>
						<input type="text" placeholder="Контур" class="form-control input-sm" name="g_kontur">
					</div>
					<div class="col-xs-5">
						<label for="">Сохтор</label>
						<input type="text" placeholder="Сохтор" class="form-control input-sm" name="g_sohtor">
					</div>
				</div><Br>
				 <div class="row">
					<div class="col-xs-5">
						<label for="">Проток:</label>
						<input type="text" placeholder="Проток" class="form-control input-sm" name="protok">
					</div>
					<div class="col-xs-5">
						<label for="">Омос:</label>
						<input type="text" placeholder="Омос" class="form-control input-sm" name="g_omos">
					</div>
				</div><Br>
				 <div class="form-group">
					<label for="">Хулоса: </label>
					<textarea name="hulosa" id="" cols="30" rows="3" class="form-control input-sm"></textarea>
				</div>
				<input type="hidden" name="sid" value='<?=$bemor->id; ?>'>
				<button type="submit" class="btn btn-primary" name="add">Дохил кардан</button>
			</form>