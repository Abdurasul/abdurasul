<?

?>
<div class="row">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-lg-12">
						<span class="title">Руйхати беморхо:</span>
					</div>
				</div>
			</div>
</div>
<Br>
<? for($i = 0; $i < count($bemor); $i++) { ?>
	<div class="row" style="margin-bottom: 5px;"><a href="?option=edit&id=<?=$bemor[$i]->id;?>">
            <div class="col-xs-12" style="padding: 5px; padding-left: 10px; border: 1px solid rgba(0, 0, 0, .2);">
		<div class="row">
                    <div class="col-xs-10" style="font-style: italic; font-weight: bold; "><?php $n = $i + 1; echo $n.'. '. $bemor[$i]->NomiBemor; ?></div>
						
			<div class="" style="position: relative; left: 20px; ">
                            <div class="col-xs-10">
				<code>Соли таввалуд: <?=$bemor[$i]->SoliTavallud; ?>, Чои истикомат: <?=$bemor[$i]->address; ?></code>
                            </div>
                        </div>
		</div>
            </div>
	</a>
        </div>
<? } ?>

			