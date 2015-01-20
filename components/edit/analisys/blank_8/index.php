<div class="panel panel-default">
          <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
              <h4 class="panel-title">
                <a>Ташхиси фаросадонии узвхои дохила</a>
              </h4>
          </div>
          <div id="collapseEight" class="panel-collapse collapse">
              <div class="panel-body">
                  <div class="row">
                    <div class="col-sm-12"><label for="">Рузи ташхис: </label><code><?=$bemor['tahshisifarosadoi']->ruzitashhis; ?></code></div>
                  </div>
                    <?php if ($bemor['tahshisifarosadoi']->kassa != 0) { echo "<button class='btn btn-success pull-right'><span class='glyphicon glyphicon-ok'></span> ".$bemor['tahshisifarosadoi']->kassa." сомон</button>"; }
                         else echo "<button class='btn btn-danger pull-right'><span class='glyphicon glyphicon-remove'></span>Насупорид</button>"; ?>
                  <div class="row">
                    <div class="col-sm-12">
                      <p style="font-weight: bold; font-size: 15px;">Чигар:</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Андоз: </label><code><?=$bemor['tahshisifarosadoi']->chigar_andoza; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Контур: </label><code><?=$bemor['tahshisifarosadoi']->chigar_kontur; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Сохтор: </label><code><?=$bemor['tahshisifarosadoi']->chigar_sohtor; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Садогузарони: </label><code><?=$bemor['tahshisifarosadoi']->sadoguzaroni; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Варидхо: </label><code><?=$bemor['tahshisifarosadoi']->varidho; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">V.portae: </label><code><?=$bemor['tahshisifarosadoi']->vportae; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Омос: </label><code><?=$bemor['tahshisifarosadoi']->omos; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <p style="font-weight: bold; font-size: 15px;">Талхадон:</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Шакл: </label><code><?=$bemor['tahshisifarosadoi']->talhadon_shakl; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Андоза: </label><code><?=$bemor['tahshisifarosadoi']->talhadon_andoza; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Девор: </label><code><?=$bemor['tahshisifarosadoi']->devor; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Вазъи талха: </label><code><?=$bemor['tahshisifarosadoi']->talha; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Санг: </label><code><?=$bemor['tahshisifarosadoi']->sang; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Холедох: </label><code><?=$bemor['tahshisifarosadoi']->holedoh; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Гадуди зери меъда :Андоз </label><code><?=$bemor['tahshisifarosadoi']->g_andoz; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Контур: </label><code><?=$bemor['tahshisifarosadoi']->g_kontur; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Сохтор: </label><code><?=$bemor['tahshisifarosadoi']->g_sohtor; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Проток: </label><code><?=$bemor['tahshisifarosadoi']->protok; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Омос: </label><code><?=$bemor['tahshisifarosadoi']->g_omos; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Хулоса: </label><code><?=$bemor['tahshisifarosadoi']->hulosa; ?></code></div>
                  </div>
              </div>
          </div>
        </div>