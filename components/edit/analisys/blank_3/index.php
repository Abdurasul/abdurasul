<div class="panel panel-default">
    			<div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
      				<h4 class="panel-title">
        				<a >Озмоишигохи имунологи</a>
      				</h4>
    			</div>
    			<div id="collapseThree" class="panel-collapse collapse">
			      	<div class="panel-body">
                  <div class="row">
                    <div class="col-sm-12"><label for="">Таърихируз:</label><code><?=$bemor['o_i']->tarih; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                        <label for="">Ташхис:</label><code><?=$bemor['o_i']->tashhis; ?></code>
                        <?php if ($bemor['o_i']->kassa != 0) { echo "<button class='btn btn-success pull-right'><span class='glyphicon glyphicon-ok'></span> ".$bemor['o_i']->kassa." сомон</button>"; }
                         else echo "<button class='btn btn-danger pull-right'><span class='glyphicon glyphicon-remove'></span>Насупорид</button>"; ?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><p style="font-weight: bold; text-align: center;">Иммунитети хучайрави</p></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">1. CD3(T-лимфоситхо) - (55 - 69%): </label><code><?=$bemor['o_i']->cd3; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">2. CD4(T-хелперхо) - (34 - 44%): </label><code><?=$bemor['o_i']->cd4; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">3. CD8(Т-супрессорхо) - (17 - 23%): </label><code><?=$bemor['o_i']->cd8; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">4. CD20(В-лимфоситхо) - (18 - 30%): </label><code><?=$bemor['o_i']->cd20; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">5. CD16(NK-клетки) - (06 - 12%): </label><code><?=$bemor['o_i']->cd16; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">6. CD95(апоптоз) - (25 - 35%): </label><code><?=$bemor['o_i']->cd95; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">7. CD25(ресепторIL-2) - (20 - 30%): </label><code><?=$bemor['o_i']->cd25; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><p style="font-weight: bold; text-align: center;">Иммунитети гуморали</p></div>
                  </div>
                   <div class="row">
                    <div class="col-sm-12"><label for="">1. Иммуноглобулин A - (40 - 350мг%): </label><code><?=$bemor['o_i']->a; ?></code></div>
                  </div>
                   <div class="row">
                    <div class="col-sm-12"><label for="">2. Иммуноглобулин I - (50 - 300мг%): </label><code><?=$bemor['o_i']->m; ?></code></div>
                  </div>
                   <div class="row">
                    <div class="col-sm-12"><label for="">3. Иммуноглобулин G - (650 - 1400мг%): </label><code><?=$bemor['o_i']->g; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Натича: </label><code><?=$bemor['o_i']->natija; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Тахлил кард: </label><code><?=$bemor['o_i']->tahlil; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Сана: </label><code><?=$bemor['o_i']->sana; ?></code></div>
                  </div>
      				</div>
    			</div>
  			</div>