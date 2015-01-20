<div class="panel panel-default">
          <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve">
              <h4 class="panel-title">
                <a >Озмоишгохи вирусологи</a>
              </h4>
          </div>
          <div id="collapseTwelve" class="panel-collapse collapse">
              <div class="panel-body">
                  <div class="row">
                    <div class="col-sm-12"><label for="">Ташхис: </label><code><?=$bemor['virus']->tashhis; ?></code></div>
                  </div>
                   <?php if ($bemor['virus']->kassa != 0) { echo "<button class='btn btn-success pull-right'><span class='glyphicon glyphicon-ok'></span> ".$bemor['virus']->kassa." сомон</button>"; }
                         else echo "<button class='btn btn-danger pull-right'><span class='glyphicon glyphicon-remove'></span>Насупорид</button>"; ?>
                  <div class="row">
                    <div class="col-sm-12"><label for="">HBsAq:</label><code><?=$bemor['virus']->HBsAq; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Анти HCV: </label><code><?=$bemor['virus']->HCV; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">HbeAq: </label><code><?=$bemor['virus']->HbeAq; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Анти HDVJgM: </label><code><?=$bemor['virus']->HDVJqM; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Анти HEVJgm: </label><code><?=$bemor['virus']->HEVJgM; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Анти HAVJgM: </label><code><?=$bemor['virus']->HAVJgM; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Анти HBcorJgM: </label><code><?=$bemor['virus']->HBcorJgM; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Cана: </label><code><?=$bemor['virus']->sana; ?></code></div>
                  </div>
              </div>
          </div>
        </div>
