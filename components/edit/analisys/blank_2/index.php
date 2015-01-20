<div class="panel panel-default">
   				<div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
      				<h4 class="panel-title">
        				<a >Тахлили мочеванаи хун:</a>
      				</h4>
    			</div>
    			<div id="collapseTwo" class="panel-collapse collapse">
      				<div class="panel-body">
                  <div class="row">
                      <div class="col-sm-6">
                        <label for="">Шуъба:</label>
                        <code><?=$bemor['tahlilimochevinaihun']->Shuba;?></code>
                        
                      </div>
                      <div class="col-sm-6">
                        <label for="">Хучра:</label>
                        <code><?=$bemor['tahlilimochevinaihun']->Hujra;?></code>
                         <?php if ($bemor['tahlilimochevinaihun']->kassa != 0) { echo "<button class='btn btn-success pull-right'><span class='glyphicon glyphicon-ok'></span> ".$bemor['tahlilimochevinaihun']->kassa." сомон</button>"; }
                         else echo "<button class='btn btn-danger pull-right'><span class='glyphicon glyphicon-remove'></span>Насупорид</button>"; ?>
                      </div>

                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <label for="">Натича:</label><code><?=$bemor['tahlilimochevinaihun']->Natija;?></code>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Мочевина (3.5-9.5 мл/м):</label><code><?=$bemor['tahlilimochevinaihun']->mochevina;?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Креатин (59 - 116 мк/м):</label><code><?=$bemor['tahlilimochevinaihun']->kreatin;?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Остат -азот (25-35 мл%): </label><code><?=$bemor['tahlilimochevinaihun']->ostat;?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Духтур:</label><code><?=$bemor['tahlilimochevinaihun']->duhtur;?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Сана:</label><code><?=$bemor['tahlilimochevinaihun']->SanaiMavod;?></code></div>
                  </div>
              </div>
    			</div>
  			</div>