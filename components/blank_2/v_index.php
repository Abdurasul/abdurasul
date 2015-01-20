
<form action="" method="post" name="form">
<h3>Роххат барои тахкикоти патологи</h3>
				<div class="row">
					<div class="col-xs-6">
						<label for="exampleInputEmail1">Сана ва соати фиристодани мавод:</label>
						<input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="сана ва соати фиристодани мавод" name="sana">
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-12">
						<label for="">Ному насаби бемор:</label>
						<input type="text" class="form-control input-sm" value='<?=$bemor->NomiBemor; ?>' disabled>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-12">
						<label for="">Соли таввалуди бемор:</label>
						<input type="text" class="form-control input-sm" value='<?=$bemor->SoliTavallud; ?>' disabled>
					</div>
				</div>
				<br>
				<div class="form-group">
					<label for="exampleInputEmail1">Шуъбаи:</label>
					<input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Шуъбаи" name="shuba">
                </div>
                <div class="form-group">
					<label for="exampleInputEmail1">Картаи бемори статсионари(картаи амбулатори) № :</label>
					<input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Картаи бемори статсионари(картаи амбулатори) № " name="karta">
                </div>
				<div class="form-group">
					<label for="exampleInputEmail1">Биопсияи аввалин, дубора ( лозимашно нависед ):</label>
					<input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Биопсияи аввалин, дубора" name="b_a">
			    </div>
				<div class="row">
					<div class="col-xs-6">
						<label for="exampleInputEmail1">Хангоми биопсияи тактори № ва санаи аввалинаш нишон дода шавад:</label>
						<input type="text" class="form-control input-sm" placeholder="Хангоми биопсияи тактори № ва санаи аввалинаш нишон дода шавад" name="hz">
					</div>
					<div class="col-xs-4"><br>
						<label for="exampleInputEmail1">Сана ва намуди чаррохи:</label>
						<input type="text" class="form-control input-sm" placeholder="Сана ва намуди чаррохи" name="sana_j">
					</div>
				</div>
				<br>
				<div class="form-group">
					<label for="exampleInputEmail1">Тамгагузории мавод, микдори объектхо:</label>
					<input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Тамгагузории мавод, микдори объектхо" name="m_o">
                                </div>
				<div class="form-group">
					<label for="exampleInputEmail1">Нишондодхои клиники:</label>
					<input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Нишондодхои клиники" name="n_k">
			    </div>


				<div class="form-group">
				<label for="exampleInputEmail1">Ташхиси клиники:</label>
				<textarea id="" cols="50" rows="5" class="form-control input-sm" name="t_k">
				</textarea>
				</div>


				<div class="form-group">
					<label for="">Тахкикоти патологии №</label>
					<input type="text" class="form-control" name="t_p" placeholder="Тахкикоти патологии">
					<label for="">Санаю соати воридшави: </label><input type="text" class="form-control" name="s_s" placeholder="Санаю соати воридшави">
					<label for="">Биопсияи ташхиси: </label><input type="text" class="form-control" name="b_t" placeholder="Биопсияи ташхиси">
					<label for="">Биопсияи фаври: </label><input type="text" class="form-control" name="b_f" placeholder="Биопсияи фаври">
					<label for="">Маводи чаррохи: </label><input type="text" class="form-control" name="m_j" placeholder="Маводи чаррохи">
					<label for="">Микдори порчахо: </label><input type="text" class="form-control" name="m_p" placeholder="Микдори порчахо">
					<label for="">Блокхо: </label><input type="text" class="form-control" name="blocks" placeholder="Блокхо">
					<label for="">Усули Ранг: </label><input type="text" class="form-control" name="u_r" placeholder="Усули Ранг">
					<label for="">Шакли макро ва микроскопи: </label><textarea name="sh_m" id="" cols="3" rows="3" class="form-control"></textarea>
					<label for="">Хулосаи патологи (ташхис): </label><textarea name="h_p" id="" cols="30" rows="2" class="form-control"></textarea>
					<label for="">Санаи тахкикоти: </label>
					<input type="text" class="form-control" name="s_t" placeholder="Санаи тахкикоти">
					<label for="">Ном ва насаби патологоанатом: </label>
					<input type="text" class="form-control" name="patologoanatom" placeholder="Ном ва насаби патологоанатом">
					<label for="">Ном ва насаби тахлилгард: </label>
					<input type="text" class="form-control" name="tahlilgard" placeholder="Ном ва насаби тахлилгард">
				</div>

				<input type="hidden" name="sid" value="<?=$bemor->id; ?>">
				<button type="submit" class="btn btn-primary" name="add">Дохил кардан</button>
			</form>