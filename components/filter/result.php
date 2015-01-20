<script>
	$(document).ready(function() {
	    $('#one').removeClass('active');
		$('#four').addClass('active');
	})
</script>
<?
   // print_r($bemor);
?>

<div class="row">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-lg-12">
						<span class="title">Рӯйхати беморҳо
							<?php
							$str = "аз ";
							   if (isset($region))
							   	$str = $str.' Вилояти '.$region;
							   if (isset($city))
							   	$str = $str.', '.$city;
							   if ($sex != 'no')
							   	$str = $str.' хамаи '.$sex.'ҳо';
							   
							   if ($age == 1)
							   	$str = $str.' аз 0 то 20 сола';
							   if ($age == 2)
							   	$str = $str.' аз 20 то 40 сола';
							   if ($age == 3)
							   	$str = $str.' аз 40 то 60 сола';
							   if ($age == 4)
							   	$str = $str.' аз 60 боло';

							   echo '( '. $str. ' )';
							?>
						:</span>
					</div>
				</div>
			</div>
</div>
<Br>
		<? for($i = 0; $i < count($bemor); $i++) { ?>
			<div class="row" style="margin-bottom: 5px; "><a href="?option=edit&id=<?=$bemor[$i]->id;?>">
				<div class="col-xs-12 sicks" >
					<div class="row">
						<div class="col-xs-10" style="font-style: italic; font-weight: bold; "><span class="glyphicon glyphicon-arrow-right"></span> &nbsp;<?php $n = ( 10 * $page ) + $i + 1; echo $n.'. '. $bemor[$i]->NomiBemor; ?></div>
						
						<div class="" style="position: relative; left: 20px; ">
						    <div class="col-xs-10">
						    	<code>Соли таввалуд: <?=$bemor[$i]->SoliTavallud; ?>, Ҷои зисти бемор:  <?=$bemor[$i]->address; ?></code>
						    </div>
					    </div>
					</div>
				</div>
				</a>
			</div>
		<? } ?>