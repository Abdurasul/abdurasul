<?
    if(isset($_GET['page']))
       $page = $_GET['page'];
    else 
    	$page = 0;

    $next = $page + 1;
    $prev = $page - 1;
?>
<style>
	.sicks {
		padding: 5px; 
		padding-left: 10px; 
		border: 1px solid rgba(0, 0, 0, .2);	
	}
	.sicks:hover {
		background: rgba(0, 0, 0, .05);
	}
</style>
<div class="row">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-lg-12">
						<span class="title">Рӯйхати беморҳо:</span>
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
<ul class="pager">
 <? if ($page != 0) { ?> <li class="previous"><a href="?option=viewAll&page=<?=$prev; ?>">&larr; Пеши</a></li> <? } ?>
  <? if (count($bemor) >= 10)  { ?><li class="next"><a href="?option=viewAll&page=<?=$next; ?>">Бадӣ &rarr;</a></li> <? } ?>
</ul>



			