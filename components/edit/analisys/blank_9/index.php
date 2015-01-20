<div class="panel panel-default">
          <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">
              <h4 class="panel-title">
                <a>Тахлили лахташавии хун</a>
              </h4>
          </div>
          <div id="collapseNine" class="panel-collapse collapse">
              <div class="panel-body">
                  <div class="row">
                    <div class="col-sm-6"><label for="">Шуъба: </label><code><?=$bemor['lahtashaviihun']->shuba; ?></code></div>
                    <div class="col-sm-6"><label for="">Хучра: </label><code><?=$bemor['lahtashaviihun']->hujra; ?></code></div>
                  </div>
                   <?php if ($bemor['lahtashaviihun']->kassa != 0) { echo "<button class='btn btn-success pull-right'><span class='glyphicon glyphicon-ok'></span> ".$bemor['lahtashaviihun']->kassa." сомон</button>"; }
                         else echo "<button class='btn btn-danger pull-right'><span class='glyphicon glyphicon-remove'></span>Насупорид</button>"; ?>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Вакти умумии лахташавии хун ( 5 - 9 ): </label><code><?=$bemor['lahtashaviihun']->l_hun; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Вакти протромбини (12 - 15): </label><code><?=$bemor['lahtashaviihun']->v_p; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Индекси протромбини (80 - 100%): </label><code><?=$bemor['lahtashaviihun']->i_p; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Фибриноген (2 - 4г/л): </label><code><?=$bemor['lahtashaviihun']->fibrinogen; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Фибрин (8 - 12): </label><code><?=$bemor['lahtashaviihun']->fibrin; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Фибриноген Б (0 - 1): </label><code><?=$bemor['lahtashaviihun']->fibrinogenB; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Вакти рекальцификафия ( 60 - 120 nae): </label><code><?=$bemor['lahtashaviihun']->v_r; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Тромботест (3 - 4 no): </label><code><?=$bemor['lahtashaviihun']->trombotest; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Духтур: </label><code><?=$bemor['lahtashaviihun']->duhtur; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <label for="">Сана: </label>
                      <code><?=$bemor['lahtashaviihun']->data; ?></code>
                    </div>
                  </div>
              </div>
          </div>
        </div>