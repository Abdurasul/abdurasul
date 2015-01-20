<div class="panel panel-default">
          <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
              <h4 class="panel-title">
                <a >Тахлили канди хун</a>
              </h4>
          </div>
          <div id="collapseFive" class="panel-collapse collapse">
              <div class="panel-body">
                  <div class="row">
                    <div class="col-sm-12"><label for="">Канди хун пеш аз нахори: </label><code><?=$bemor['tahlilikandihun']->hunPeshAzNahori;?></code></div>
                  </div>
                  <?php if ($bemor['tahlilikandihun']->kassa != 0) { echo "<button class='btn btn-success pull-right'><span class='glyphicon glyphicon-ok'></span> ".$bemor['tahlilikandihun']->kassa." сомон</button>"; }
                         else echo "<button class='btn btn-danger pull-right'><span class='glyphicon glyphicon-remove'></span>Насупорид</button>"; ?>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Баъди 30 дакикаи кабули глюкоза: </label><code><?=$bemor['tahlilikandihun']->SiMinBadiKabul; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Баъди 60 дакикаи кабули глюкоза: </label><code><?=$bemor['tahlilikandihun']->ShMinBadiKabul; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Баъди 90 дакикаи кабули глюкоза: </label><code><?=$bemor['tahlilikandihun']->NavMinBadiKabul; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Баъди 120 дакикаи кабули глюкоза: </label><code><?=$bemor['tahlilikandihun']->YbstMinBadiKabul; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Сана: </label><code><?=$bemor['tahlilikandihun']->data; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Духтур: </label><code><?=$bemor['tahlilikandihun']->duhtur; ?></code></div>
                  </div>
              </div>
          </div>
        </div>