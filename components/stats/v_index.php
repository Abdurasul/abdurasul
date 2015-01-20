<?
   //print_r($CountOfSex); // Общее кол-во Мужчин и Женщин 

?>
<style>
    .bs-callout{margin:20px 0;padding:20px;border-left:3px solid #eee}
    .bs-callout h4{margin-top:0;margin-bottom:5px}
    .bs-callout p:last-child{margin-bottom:0}
    .bs-callout code{background-color:#fff;border-radius:3px}
    .bs-callout-danger{background-color:#fdf7f7;border-color:#d9534f}
    .bs-callout-danger h4{color:#d9534f}
    .bs-callout-warning{background-color:#fcf8f2;border-color:#f0ad4e}
    .bs-callout-warning h4{color:#f0ad4e}
    .bs-callout-info{background-color:#f4f8fa;border-color:#5bc0de}
    .bs-callout-info h4{color:#5bc0de}
</style>
<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title panel-primary">Статистика:</h3>
  </div>
  <div class="panel-body">
   <p style="padding: 5px; margin: 0px;">
        Хамаги дар беморхона <span style="color: red;"> <?=$CountOfSex['sum']; ?></span> Нафар аст
         </p>
     <p style="padding: 5px; margin: 10px;">Аз онхо <span style="color: red;"><?=$CountOfSex['man_count']; ?></span> Мард</p>
     <p style="padding: 5px; margin: 10px;">Аз онхо <span style="color: red;"><?=$CountOfSex['women_count']; ?></span> Зан</p>
  </div>
</div>

<div class="panel-group" id='accordion'>
<?php for($i = 0; $i < count($region); $i++) { ?>
	<div class="panel panel-default">
    	<div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#<?=$region[$i]->id;?>">
      		<h4 class="panel-title">
        		<a data-toggle="collapse" data-parent="#accordion" href="#<?=$region[$i]->id;?>"><?=$region[$i]->name; ?>:</a>
      		</h4>
		</div>
    	<div id="<?=$region[$i]->id;?>" class="panel-collapse collapse out">
     		<div class="panel-body">
     			<?php
                    $cities = getCitiesFromRegions($region[$i]->id);
                    for($j = 0; $j < count($cities); $j++) {
     			?>
     			<div class="row">
     				<p style="margin-left: 10px; font-weight: bold; "><a href="?option=view&city=<?=$cities[$j]->name;?>"><?=$cities[$j]->name; ?>:</a></p>
	     			
     					<?php
                            $gender = getSexFromCities($cities[$j]->name);
     					?>
     					<div style="margin-left: 25px; ">
     						<p>Мард: <?=$gender->man; ?></p>
	     					<p>Зан: <?=$gender->women; ?></p>			
    	 				</div>
     			</div>
     			<? } ?>
     		</div>
     	</div>
    </div>
<? } ?> 

</div>

