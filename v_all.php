<?include_once('controllers/model.php'); 

$limit = 5;

if (!isset($_GET['page']))
	$page = 0;
else 
	$page = $_GET['page'];

$start = $page * $limit;

$bemor = getAll($start, $limit);

$next = $page + 1;
$prev = $page - 1;
?>
<div class="row">
			<div class="col-xs-12"><h4>Руйхати беморхо:</h4></div>
</div>
<? for($i = 0; $i < count($bemor); $i++) { ?>
			<div class="row" style="margin-bottom: 5px;">
				<div class="col-xs-12" style="padding: 5px; border: 1px solid rgba(0, 0, 0, .2);">
					<div class="row">
						<div class="col-xs-10" style="font-style: italic; font-weight: bold; ">&nbsp;&nbsp;<span class="glyphicon glyphicon-arrow-right"> </span> <?php $n = $i + 1; echo $n.'. '. $bemor[$i]->NomiBemor; ?></div>
						
						<div class="" style="position: relative; left: 20px; ">
						    <div class="col-xs-10">
						    	<code>Соли таввалуд: <?=$bemor[$i]->SoliTavallud; ?>, Чои истикомат: <?=$bemor[$i]->address; ?></code>
						    </div>
					    </div>
					</div>
				</div>
			</div>
<? } ?>

<ul class="pager">
 <? if ($page != 0) { ?> <li class="previous"><a href="?&page=<?=$prev; ?>">&larr;  Предыдущий</a></li> <? } ?>
  <? if (count($bemor) >= 5)  { ?><li class="next"><a href="?&page=<?=$next; ?>"> Следующий &rarr;</a></li> <? } ?>
</ul>

			