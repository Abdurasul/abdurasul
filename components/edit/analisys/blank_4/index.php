<div class="panel panel-default">
          <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
              <h4 class="panel-title">
                <a >Озмоишигохи клиники:</a>
              </h4>
          </div>
          <div id="collapseFour" class="panel-collapse collapse">
              <div class="panel-body">
                  <div class="row">
                    <div class="col-sm-12"><label for="">Тахлил №</label><code><?=$bemor['ozmoishikliniki']->tahlil; ?></code></div>
                  </div>
                    <?php if ($bemor['ozmoishikliniki']->kassa != 0) { echo "<button class='btn btn-success pull-right'><span class='glyphicon glyphicon-ok'></span> ".$bemor['ozmoishikliniki']->kassa." сомон</button>"; }
                         else echo "<button class='btn btn-danger pull-right'><span class='glyphicon glyphicon-remove'></span>Насупорид</button>"; ?>
                  <div class="row">
                    <div class="col-sm-12">
                      <label for="">Ба духтур:</label><code><?=$bemor['ozmoishikliniki']->baDuhtur; ?></code>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Тахлили диастазияи пешоб:</label><code><?=$bemor['ozmoishikliniki']->d1; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Диастазаяи пешоб меъер ( 16 - 64 ед): </label><code><?=$bemor['ozmoishikliniki']->d2; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Духтур: </label><code><?=$bemor['ozmoishikliniki']->Duhtur; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Сана: </label><code><?=$bemor['ozmoishikliniki']->data; ?></code></div>
                  </div>
              </div>
          </div>
        </div>
