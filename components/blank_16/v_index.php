<script>
	function ff() {
       	var a = $('#vazn').val();
       	var b = $('#qad').val();
    	$('#ivb').val(b * b / a);
    }

    $(document).ready( function() {
    	$('#r2').datepicker();        
    })
</script>

<form action="" method="post" name="form">
<div class="row" style="padding: 15px; ">
	<h3>ТАЪРИХИ БЕМОРИИ № 
		<input type="text" style="width: 80px; height: 30px; padding: 5px;" class="input-md" placeholder="№" name="num" value="<?=$story->num; ?>">
	</h3>    
</div>
<br>
    <div class="form-group">
        <label for="">Руз ва вакти кабулшави:</label>
        <input type="text" class="form-control input-sm" placeholder="Руз ва вакти кабулшави" name="ruz_q" id="r1" value="<?=$story->ruz_q; ?>">
        <br>
		<label for="">Руз ва вакти чавобшави:</label>
        <input type="text" class="form-control input-sm" placeholder="Руз ва вакти чавобшави" name="ruz_j" id="r1" value="<?=$story->ruz_j; ?>">
        <br>
		<div class="row">
			<div class="col-sm-3">
				<label for="">Шуъбаи:</label>
				<input type="text" class="form-control input-sm" placeholder="Шуъбаи" name="shuba" value="<?=$story->shuba; ?>">
			</div>
			<div class="col-sm-4">
				<label for="">Хучраи №:</label>
				<input type="text" class="form-control input-sm" placeholder="Хучраи №" name="hujra" value="<?=$story->hujra; ?>">
			</div>
			<div class="col-sm-4">
				<label for="">Харорат:</label>
				<input type="text" class="form-control input-sm" placeholder="Харорат" name="harorat" value="<?=$story->harorat; ?>">
			</div>
		</div>
		<br>
		<div class="form-group">
			<label for=" ">Ба шуъбаи:</label>
			<input type="text" class="form-control input-sm" placeholder="ба шуъбаи гузаронада шуд" name="ba_shuba" value="<?=$story->ba_shuba; ?>"> 
			<label for="">гузаронида шуд.</label>
		</div>
			<div class="form-group">
				<label for="">Рузхои бистаришуда:</label>
				<input type="text" class="form-control input-sm" placeholder="Рузхои бистаришуда" name="ruz_b" value="<?=$story->ruz_b; ?>"> 
				<br>
				<label for="">Таърихи бурдани бемор:</label>
				<? if ($story->aroba == 1) { ?>
					<input type="checkbox" name="aroba" checked> бо кати беморкашаки.
				<? } else { ?>
					<input type="checkbox" name="aroba"> бо кати беморкашаки.
				<? } ?>

				<? if ($story->kur_aroba == 1) { ?>
					<input type="checkbox" name="kur_aroba" checked> бо курсии маъюби. 
				<? } else { ?> 
					<input type="checkbox" name="kur_aroba"> бо курсии маъюби.
				<? } ?>

				<? if ($story->roh_g == 1)  { ?>
					<input type="checkbox" name="roh_g" checked> рох гашта метавонад.
				<?  } else { ?> 
					<input type="checkbox" name="roh_g"> рох гашта метавонад.
				<? } ?>
			</div>
		<div class="row">
			<div class="col-sm-3">
				<label for="">Гурухи хун:</label>
				<input type="text" class="form-control input-sm" placeholder="Гурухи хун" name="guruh_hun" value="<?=$story->guruh_hun; ?>">
			</div>
			<div class="col-sm-4">
				<label for="">Резус-мансубият:</label>
				<input type="text" class="form-control input-sm" placeholder="Резус-мансубият" name="rezus_k" value="<?=$story->rezus_k; ?>">
			</div>
			<div class="col-sm-4">
				<label for="">Вазн:</label>
				<input type="text" class="form-control input-sm" placeholder="Вазн" name="vazn" id="vazn" onchange="ff()" value="<?=$story->vazn; ?>">
			</div>	
			<div class="col-sm-4">
				<label for="">Кад:</label>
				<input type="text" class="form-control input-sm" placeholder="Кад" name="qad" id="qad" onchange="ff()" value="<?=$story->qad; ?>">
			</div>	
			<div class="col-sm-4">
				<label for="">ИВБ:</label>     <!-- дар инчо vazn/qad*qad=*** бояд гузорем-->
				<input type="text" class="form-control input-sm" placeholder="ИВБ" name="ivb" id="ivb"  value="<?=$story->ivb; ?>">
			</div>
		</div>
		<br>
		<div class="form-group">
			<label for="">Таъсири манфии дорухо, тахаммулнопазири:</label>
			<input type="text" class="form-control input-sm" placeholder="номи дорувор, хусусияти таври манфиашон" name="tahammul"  value="<?=$story->tahammul; ?>"> 
		</div>

<? if (isset($_GET['id'])) { ?> 
		<div class="form-group">		
			<label for="">1.Насаб ном ва номи падари :</label>
			<input class="form-control input-sm" type="text"  value="<?=$bemor->NomiBemor;  ?>" disabled>   <!-- инро бояд аз база гирад-->
		</div>
		<div class="row">
			<div class="col-sm-4">
            	<label for="">2.Чинс:</label>
					<select id="jins" class="form-control" disabled>
						<? if ($bemor->sex ='Мард') ?>
		    				<option selected>мард</option>
		    			<? if ($bemor->sex='Зан') ?>
		    				<option selected>зан</option>
		    		</select>
			</div>
			<div class="col-sm-4">
				<label for="">3.Синну сол:</label> 
				<input type="text" class="form-control input-sm" placeholder="дд.мм.гггг" value="<?=$bemor->SoliTavallud?>" disabled>
			</div>
		</div>
		<div class="form-group">
			<label for="">4.Чои зисти доими:</label>
			<input type="text" class="form-control input-sm" placeholder="нохия, шахр, дехот" value="<?=$bemor->address?>" disabled> 
<? } else { ?>

		<div class="form-group">		
			<label for="">1.Насаб ном ва номи падари :</label>
			<input class="form-control input-sm" type="text"  name="name" >   <!-- инро бояд аз база гирад-->
		</div>
		<div class="row">
			<div class="col-sm-4">
            	<label for="">2.Чинс:</label>
					<select id="jins" class="form-control" name="sex">
		    				<option value="мард">мард</option>
		    				<option value="зан">зан</option>
		    		</select>
			</div>
			<div class="col-sm-4">
				<label for="">3.Синну сол:</label> 
				<input type="text" class="form-control input-sm" placeholder="дд.мм.гггг"  name="SoliTavallud">
			</div>
		</div>
		<div class="form-group">
			<label for="">Аз Вилояти:</label>
				<select name="region" id="regions" onchange="getCities(); " class="form-control">
					<option value="">Вилоятро интихоб кунед</option>
				<?php 
					for($i = 0; $i < count($city); $i++) {
						$id = $city[$i]->id;
					    echo "<option value='$id'>".$city[$i]->name.'</option>';
					}
				?>
				</select>
		</div>
		<div class="form-group">
			<label for="">Аз Шахри / Нохияи: </label>
				<select name="city" id="cities" class="form-control">
				</select>
		</div>
		<div class="form-group">
			<label for="">4.Чои зисти доими:</label>
			<input type="text" class="form-control input-sm" placeholder="нохия, шахр, дехот"  name="address"> 
		</div>
		<div class="row">
			<div class="col-xs-6">
				<label for="exampleInputEmail1">Имтиёзнокии бемор:</label>
				<input type="text" class="form-control input-sm" placeholder="Имтиёзнокии бемор" name="ImtieznokiiBemor">
			</div>
			<div class="col-xs-4">
				<label for="exampleInputEmail1">№ Хуҷҷат:</label>
				<input type="text" class="form-control input-sm" placeholder="№ Хуччат" name="hujjat">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<label for="">Cана: </label>
				<input type="text" class="form-control" placeholder="Сана" name="sana">
			</div>
		</div>
<? } ?>
		<br>
		<div class="form-group">
			<label for="">5.Чои кор, касб ва вазифа:</label>
			<input type="text" class="form-control input-sm" placeholder="барои хонандагон чои хониш, барои кудакон номи муассисаи кудакон, барои маъюбон дарача ва гурухи маъюби, маъюби ЧБВ ха ё не" name="kor"  value="<?=$story->kor; ?>">
		</div>		
		<div class="form-group">	
			<label for="">6.Бемор аз тарафи кадом муассиса фиристода шудааст:</label>
			<input type="text" class="form-control input-sm" placeholder="Бемор аз тарафи кадом муассиса фиристода шудааст" name="ligot" value="<?=$story->ligot; ?>">
			<label for="">7.Ба беморхона аз руи нишонахои таъчили:</label>
			<input name="rad" type="radio" value="1">Ха
			<input name="rad" type="radio" value="0">Не
			<label for="">баъди</label>
			<input type="time" class="form-conдtrol input-sm" placeholder="баъди" name="badi" value="<?=$story->badi; ?>"> 
			<label for="">соат огози бемори захмбардори оварда шудааст. Ба беморхона ба таври накшави бистари шудааст.</label>
			<label for="">8.Ташхиси муассисаи равонкарда:</label>
			<input type="text" class="form-control input-sm" placeholder="Ташхиси муассисаи равонкарда" name="t_m_r" value="<?=$story->t_m_r; ?>">
			<br>
			<label for="">9.Ташхиси хангоми кабул:</label>
			<input type="text" class="form-control input-sm" placeholder="Ташхиси хангоми кабул" name="t_h_q" value="<?=$story->t_h_q; ?>">
			<br>
			<label for="">10.Ташхиси клиники:</label>
			<input type="text" class="form-control input-sm" placeholder="Ташхиси клиники" name="t_k" value="<?=$story->t_k; ?>">
		</div>	
		<div class="form-group">
        	<label for="">Рузи мукаррарсози:</label>
        	<input type="text" class="form-control input-sm" placeholder="Рузи мукаррарсози" name="ruz_m" value="<?=$story->ruz_m; ?>">
		</div>
		 <div class="form-group">
		 	<label for="">Ташхси охирин:</label><br>
		 	<label for="">А)Асоси:</label>
		 		<textarea name="d1" id="" cols="30" rows="3" class="form-control input-sm" placeholder="Асоси" ><?=$story->d1; ?></textarea>
		 	<label for="">Б)Оризахо:</label>
				<textarea name="d2" id="" cols="30" rows="3" class="form-control input-sm" placeholder="Оризахо" ><?=$story->d2; ?></textarea>
			<label for="">В)Хамбаста:</label>
				<textarea name="d3" id="" cols="30" rows="3" class="form-control input-sm" placeholder="Хамбаста"><?=$story->d3; ?></textarea>	
		</div>	
		<div class="form-group">
			<label for="">11.Бо чунин ташхис соли равон:</label>
			<input type="text" class="form-control input-sm" placeholder="№" name="miqdor" value="<?=$story->miqdor; ?>"> 
			<label for="">маротиба бистари шудааст.</label>
		</div>
		<div>
			<label for="">12.Чаррохи тарзи бехушгардони асароти баъди чаррохи.</label>
		</div>
		
		<div class="form-group">
					<table border="1" cellspacing="0" cellpadding="10" width="100%" height="70"> 
							<tr>
								<td><label for="exampleInputEmail1" >№</label>
								</td>
								<td><label for="exampleInputEmail1">Номи чаррохи:</label>
								</td>
								<td><label for="exampleInputEmail1">Таърихи чаррохи:</label>
								</td>
								<td><label for="exampleInputEmail1">Таърихи бехушгардони:</label>
								</td>
								<td><label for="exampleInputEmail1">Окибат:</label>
								</td>	
							</tr>
							<tr>
								<td><label for="exampleInputEmail1" >1:</label>
								</td>
								<td><textarea name="a1" id="" cols="30" rows="3" class="form-control input-sm" ><?=$story->a1; ?></textarea>
								</td>
								<td><textarea name="a2" id="" cols="30" rows="3" class="form-control input-sm" ><?=$story->a2; ?></textarea>
								</td>
								<td><textarea name="a3" id="" cols="30" rows="3" class="form-control input-sm" ><?=$story->a3; ?></textarea>
								</td>
								<td><textarea name="a4" id="" cols="30" rows="3" class="form-control input-sm" ><?=$story->a4; ?></textarea>
								</td>	
							</tr>
							<tr>
								<td><label for="exampleInputEmail1" >2:</label>
								</td>
								<td><textarea name="a5" id="" cols="30" rows="3" class="form-control input-sm" ><?=$story->a5; ?></textarea>
								</td>
								<td><textarea name="a6" id="" cols="30" rows="3" class="form-control input-sm" ><?=$story->a6; ?></textarea>
								</td>
								<td><textarea name="a7" id="" cols="30" rows="3" class="form-control input-sm" ><?=$story->a7; ?></textarea>
								</td>
								<td><textarea name="a8" id="" cols="30" rows="3" class="form-control input-sm" ><?=$story->a8; ?></textarea>
								</td>	
							</tr>
							<tr>
								<td><label for="exampleInputEmail1" >3:</label>
								</td>
								<td><textarea name="a9" id="" cols="30" rows="3" class="form-control input-sm" ><?=$story->a9; ?></textarea>
								</td>
								<td><textarea name="a10" id="" cols="30" rows="3" class="form-control input-sm" ><?=$story->a10; ?></textarea>
								</td>
								<td><textarea name="a11" id="" cols="30" rows="3" class="form-control input-sm" ><?=$story->a11; ?></textarea>
								</td>
								<td><textarea name="a12" id="" cols="30" rows="3" class="form-control input-sm" ><?=$story->a12; ?></textarea>
								</td>	
							</tr>	
					</table>
                </div>
			<div class="form-group">
			<label for="">13.Муоличаи иловаги:</label>
			<input type="text" class="form-control input-sm" placeholder="Муоличаи иловаги" name="mu_ilova"  value="<?=$story->mu_ilova; ?>"> 
			<br>
			<label for="">барои бемори саратон кадом тарзи муолича истифода шуд.</label>
		    <input type="text" class="form-control input-sm" placeholder="барои бемори саратон кадом тарзи муолича истифода шуд" name="b_o"  value="<?=$story->b_o; ?>"> 
			<br>
			<label for="">14.Варакаи корнощоями дода шуд:</label>
			<div class="form-group">
					<table border="1" cellspacing="0" cellpadding="10" width="100%" height="70"> 
							<tr>
								<td><label for="exampleInputEmail1" >№:</label></td>
								<td><input type="text" class="form-control input-sm" placeholder="Ташхиси клиники" name="b1" value="<?=$story->b1; ?>"></td>
								<td><label for="exampleInputEmail1">аз:</label></td>
								<td><input type="text" class="form-control input-sm" placeholder="Ташхиси клиники" name="b2" value="<?=$story->b2; ?>"></td>
								<td><label for="exampleInputEmail1">то:</label></td>
								<td><input type="text" class="form-control input-sm" placeholder="Ташхиси клиники" name="b3" value="<?=$story->b3; ?>"></td>
								<td><label for="exampleInputEmail1" >№:</label></td>
								<td><input type="text" class="form-control input-sm" placeholder="Ташхиси клиники" name="b4" value="<?=$story->b4; ?>"></td>
								<td><label for="exampleInputEmail1">аз:</label></td>
								<td><input type="text" class="form-control input-sm" placeholder="Ташхиси клиники" name="b5" value="<?=$story->b5; ?>"></td>
								<td><label for="exampleInputEmail1">то:</label></td>
								<td><input type="text" class="form-control input-sm" placeholder="Ташхиси клиники" name="b6" value="<?=$story->b6; ?>"></td>	
							</tr>
							<tr>
								<td><label for="exampleInputEmail1" >№:</label></td>
								<td><input type="text" class="form-control input-sm" placeholder="Ташхиси клиники" name="b7"  value="<?=$story->b7; ?>"></td>
								<td><label for="exampleInputEmail1">аз:</label></td>
								<td><input type="text" class="form-control input-sm" placeholder="Ташхиси клиники" name="b8"  value="<?=$story->b8; ?>"></td>
								<td><label for="exampleInputEmail1">то:</label></td>
								<td><input type="text" class="form-control input-sm" placeholder="Ташхиси клиники" name="b9"  value="<?=$story->b9; ?>"></td>
								<td><label for="exampleInputEmail1" >№:</label></td>
								<td><input type="text" class="form-control input-sm" placeholder="Ташхиси клиники" name="b10" value="<?=$story->b10; ?>"></td>
								<td><label for="exampleInputEmail1">аз:</label></td>
								<td><input type="text" class="form-control input-sm" placeholder="Ташхиси клиники" name="b11" value="<?=$story->b11; ?>"></td>
								<td><label for="exampleInputEmail1">то:</label></td>
								<td><input type="text" class="form-control input-sm" placeholder="Ташхиси клиники" name="b12" value="<?=$story->b12; ?>"></td>
							</tr>
					</table>
            </div>
			</div>
		<div class="form-group">
			<label for="">15.Окибати бемори:</label>
			<!------ 1111111 ------>
			<? if ($story->jshs == 1) { ?>
				<input name="jshs" type="checkbox" checked> Чавоб шуд Сихат
			<? } else { ?>
				<input name="jshs" type="checkbox"/> Чавоб шуд Сихат
			<? } ?>

			<!------ 2222222 -------->
			<? if ($story->bb == 1) { ?> 
				<input name="bb" type="checkbox" checked> Бо бехбуди
			<? } else { ?>
				<input name="bb" type="checkbox" > Бо бехбуди
			<? } ?>

			<!------ 333333333 ------>
			<? if ($story->bbsh == 1) { ?>
				<input name="bbsh" type="checkbox" checked> Бедигаргуни бад шуд
			<? } else { ?>
				<input name="bbsh" type="checkbox" > Бедигаргуни бад шуд
			<? } ?>

			<!--- 44444 ------>
			<? if ($story->bdm == 1) { ?>
				<input name="bdm" type="checkbox" checked> Ба дигар муассиса гузаронида шуд
			<? } else { ?> 
				<input name="bdm" type="checkbox"> Ба дигар муассиса гузаронида шуд
			<? } ?>

			<input type="text" class="form-control input-sm" placeholder="Ба дигар муассиса гузаронида шуд" name="b_o" value="<?=$story->b_o; ?>">
			<? if ($story->dkf == 1) { ?> 
				<input name="dkf" type="checkbox" checked> Дар кабулгох фавтид
			<? } else { ?>
				<input name="dkf" type="checkbox"/> Дар кабулгох фавтид
			<? } ?>

			<? if ($story->zh23) { ?>
				<input name="zh23" type="checkbox" checked> Зани хомила дар 23 хафтаи хомилаги фавтид
			<? } else { ?>
				<input name="zh23" type="checkbox"/> Зани хомила дар 23 хафтаи хомилаги фавтид
			<? } ?>

			<? if ($story->zh25) { ?>
				<input name="zh25" type="checkbox" checked> Зани хомила дар 25 хафтаи хомилаги фавтид
			<? } else { ?>
				<input name="zh25" type="checkbox"/> Зани хомила дар 25 хафтаи хомилаги фавтид
			<? } ?>
			<br>
			<br>
			<label for="">16.</label>
			<? if ($story->k == 1) { ?>
				<input name="k" type="checkbox" checked> Кобилияти мехнатияш баркарор шуд.
			<? } else { ?>
				<input name="k" type="checkbox"/> Кобилияти мехнатияш баркарор шуд.
			<? } ?>

			<? if ($story->t == 1) { ?>
				<input name="t" type="checkbox" checked> Тамоман паст шуд. 
			<? } else { ?>
				<input name="t" type="checkbox" > Тамоман паст шуд. 
			<? } ?>

			<? if ($story->m == 1) { ?>
				<input name="m" type="checkbox" checked> муддате гумшуд.
			<? } else { ?>
				<input name="m" type="checkbox"/> муддате гумшуд.
			<? } ?>

			<? if ($story->b == 1) { ?>
				<input name="b" type="checkbox" checked> бо сабаби бемории нахустинаш ё бо сабабхои дигар тамоман гум шуд.
			<? } else { ?>
				<input name="b" type="checkbox"/> бо сабаби бемории нахустинаш ё бо сабабхои дигар тамоман гум шуд.
			<? } ?>

			<textarea name="hh2" id="" cols="30" rows="3" class="form-control input-sm" placeholder="" ><?=$story->hh2; ?></textarea>
			<label for="">17.Хулосаи ташхиси тиббии суди:</label>
			<textarea name="h2" id="" cols="30" rows="3" class="form-control input-sm" placeholder="" ><?=$story->h2; ?></textarea>
			<label for="">18.Нишондодхои махсус:</label> <!--gfgfgfdgdgfdfgdfg -->
			<textarea name="n2" id="" cols="30" rows="3" class="form-control input-sm" placeholder="" ><?=$story->n2; ?></textarea></td>
	<div class="row">
		<div class="col-xs-3">     <!-- дуруст намудан лозим дар як сатр -->
			<label for="">Табиби шифокор:</label>
			<input type="text" class="form-control input-sm" placeholder="Табиби шифокор" name="t_sh" value="<?=$story->t_sh; ?>">
			<label for="">Мудири бахш:</label>
			<input type="text" class="form-control input-sm" placeholder="Мудири бахш" name="m_b" value="<?=$story->m_b; ?>">
		</div></div></div>
    <input type="hidden" name="sid" value=<?=$bemor->id; ?>>
    <input type="hidden" name="spart1" value="<?=$story->spart1; ?>">	
    <input type="hidden" name="spart2" value="<?=$story->spart2; ?>">
    <input type="hidden" name="spart3" value="<?=$story->spart3; ?>">
    <input type="hidden" name="spart4" value="<?=$story->spart4; ?>">
    <input type="hidden" name="spart5" value="<?=$story->spart5; ?>">
    <input type="hidden" name="spart6" value="<?=$story->spart6; ?>">
	<input type="hidden" name="spart7" value="<?=$story->spart7; ?>">

	<button type="submit" class="btn btn-primary" name="add">Дохил кардан</button>
</form>
<? if (isset($_GET['id'])) { ?>
</div>
<? } ?>
</div>