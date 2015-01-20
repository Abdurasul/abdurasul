<style>

    .bs-callout{margin:5px 0;padding:8px;border-left:3px solid #eee}
    .bs-callout h4{margin-top:0;margin-bottom:0px}
    .bs-callout p:last-child{margin-bottom:0}
    .bs-callout code{background-color:#fff;border-radius:3px}
    .bs-callout-danger{background-color:#fdf7f7;border-color:#d9534f}
    .bs-callout-danger h4{color:#d9534f}
    .bs-callout-warning{background-color:#fcf8f2;border-color:#f0ad4e}
    .bs-callout-warning h4{color:#f0ad4e}
    .bs-callout-info{background-color:#f4f8fa;border-color:#5bc0de}
    .bs-callout-info h4{color:#5bc0de}

</style>
<?php

?>
<form action="" method="post">
	<div class="row">
		<div class="col-lg-12">
			<b>Направление на анализ:</b>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div style="height: 10px; "></div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-12">
					<label for="">Ном ва насаби бемор</label>
					<input type="text" class="form-control" placeholder="Ном ва насаби бемор" value="<?=$bemor->NomiBemor; ?>" disabled>
				</div>
			</div>
			<div class="bs-callout bs-callout-info">
				<label for="">
					<input type="checkbox" class="" name="tahlilihun">&nbsp; Тахлили хун
				</label>
			</div>
			<div class="bs-callout bs-callout-info">
				<label for="">
					<input type="checkbox" class="" name="tahlilimochevinaihun">&nbsp; Тахлили мочеванаи хун
				</label>
			</div>
			<div class="bs-callout bs-callout-info">
				<label for="">
					<input type="checkbox" class="" name="ozmoishigoh_i">&nbsp; Озмоишигохи имунологи
				</label>
			</div>
			<div class="bs-callout bs-callout-info">
				<label for="">
					<input type="checkbox" class="" name="ozmoishigoh_k">&nbsp; Озмоишигохи клиники
				</label>
			</div>
			<div class="bs-callout bs-callout-info">
				<label for="">
					<input type="checkbox" class="" name="tahlilikandihun">&nbsp; Тахлили канди хун
				</label>
			</div>
			<div class="bs-callout bs-callout-info">
				<label for="">
					<input type="checkbox" class="" name="tahlilipeshob">&nbsp; Тахлили пешоб
				</label>
			</div>
			<div class="bs-callout bs-callout-info">
				<label for="">
					<input type="checkbox" class="" name="tahlilifazla">&nbsp; Тахлили Фазла
				</label>
			</div>
			<div class="bs-callout bs-callout-info">
				<label for="">
					<input type="checkbox" class="" name="farosadi">&nbsp; Ташхиси фаросадонии узвхои дохила
				</label>
			</div>
			<div class="bs-callout bs-callout-info">
				<label for="">
					<input type="checkbox" class="" name="lahtashavi">&nbsp; Тахлили лахташавии хун
				</label>
			</div>
			<div class="bs-callout bs-callout-info">
				<label for="">
					<input type="checkbox" class="" name="biokimievi">&nbsp; Тахлили биокимиёвии хун
				</label>
			</div>
			<div class="bs-callout bs-callout-info">
				<label for="">
					<input type="checkbox" class="" name="ozmoishi_v">&nbsp; Озмоишгохи вирусологи
				</label>
			</div>
			<div class="bs-callout bs-callout-info">
				<label for="">
					<input type="checkbox" class="" name="pcr">&nbsp; ПЦР - ОЗМОИШГОХ
				</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div style="height: 10px; "></div>
		</div>
	</div>
	<input type="hidden" name="sid" value="<?=$_GET['id']; ?>">
	<div class="form-group">
		<button type="submit" class="btn btn-primary" name="add">Дохил кардан</button>
	</div>
</form>