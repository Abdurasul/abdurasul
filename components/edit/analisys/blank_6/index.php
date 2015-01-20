<div class="panel panel-default">
          <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
              <h4 class="panel-title">
                <a >Тахлили пешоб</a>
              </h4>
          </div>
          <div id="collapseSix" class="panel-collapse collapse">
              <div class="panel-body">
                  <div class="row">
                    <div class="col-sm-12"><label for="">Тахлили пешоб №</label><code><?=$bemor['peshob']->peshob; ?></code></div>
                  </div>
                   <?php if ($bemor['peshob']->kassa != 0) { echo "<button class='btn btn-success pull-right'><span class='glyphicon glyphicon-ok'></span> ".$bemor['peshob']->kassa." сомон</button>"; }
                         else echo "<button class='btn btn-danger pull-right'><span class='glyphicon glyphicon-remove'></span>Насупорид</button>"; ?>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Сана: </label><code><?=$bemor['peshob']->sana; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Муассиса: </label><code><?=$bemor['peshob']->muassisa; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Раками хуччати тибби №</label><code><?=$bemor['peshob']->r_h; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <p style="font-weight: bold; text-align: center; ">ХОСИЯИ ФИЗИКИЮ-БИОКИМИЕВИ</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Микдор:</label><code><?=$bemor['peshob']->mikdor; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Ранг:</label><code><?=$bemor['peshob']->rang; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Софи:</label><code><?=$bemor['peshob']->sofi; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Вазни чузьи:</label><code><?=$bemor['peshob']->v_j; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <label for="">Вогузиш:</label><code><?=$bemor['peshob']->voguzish; ?></code>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <label for="">Сафеда:</label><code><?=$bemor['peshob']->safeda; ?></code><label for="">г/л</label>
                      <code><?=$bemor['peshob']->peshob; ?></code><label for="">г%</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <label for="">Канд:</label><code><?=$bemor['peshob']->kand; ?></code><label for="">ммоль/л</label><code><?=$bemor['peshob']->peshob; ?></code><label for="">г%</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Чисмхои котони:</label><code><?=$bemor['peshob']->j_k; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Вогузиш бо хун: </label><code><?=$bemor['peshob']->v_h; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Билирубин: </label><code><?=$bemor['peshob']->bilirubin; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Тезобхои зарда: </label><code><?=$bemor['peshob']->t_z; ?></code></div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12"><label for="">Эпителияхо:</label><code><?=$bemor['peshob']->epitelia; ?></code></div>
                    <p style="margin-left: 15px; ">
                      <span class="col-sm-12">
                        <label for="">Суфти: </label><code><?=$bemor['peshob']->sufti; ?></code>
                      </span>
                      <span class="col-sm-12">
                        <label for="">Гузаранда: </label><code><?=$bemor['peshob']->guzaranda; ?></code>
                      </span>
                      <span class="col-sm-12">
                        <label for="">Аз гурдахо: </label><code><?=$bemor['peshob']->a_g; ?></code>
                      </span>
                    </p>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Лейкоцитхо: </label><code><?=$bemor['peshob']->leykocitho; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Эритроциятхо:</label><code><?=$bemor['peshob']->eritposit; ?></code></div>
                    <p style="margin-left: 15px; ">
                      <span class="col-sm-12">
                        <label for="">Тагирнаёфта: </label><code><?=$bemor['peshob']->tagirnaefta; ?></code>
                      </span>
                      <span class="col-sm-12">
                        <label for="">Тагирёфта: </label><code><?=$bemor['peshob']->tagirefta; ?></code>
                      </span>
                    </p>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Силиндрхо:</label><code><?=$bemor['peshob']->cilindr; ?></code></div>
                    <p style="margin-left: 15px; ">
                      <span class="col-sm-12">
                        <label for="">Гиалини: </label><code><?=$bemor['peshob']->gialini; ?></code>
                      </span>
                      <span class="col-sm-12">
                        <label for="">Донаги: </label><code><?=$bemor['peshob']->donagi; ?></code>
                      </span>
                      <span class="col-sm-12">
                        <label for="">Эпителияни: </label><code><?=$bemor['peshob']->epitelani; ?></code>
                      </span>
                      <span class="col-sm-12">
                        <label for="">Лейкоцитхо: </label><code><?=$bemor['peshob']->leykositho; ?></code>
                      </span>
                      <span class="col-sm-12">
                        <label for="">Эритроцитхо: </label><code><?=$bemor['peshob']->eritrocitho; ?></code>
                      </span>
                      <span class="col-sm-12">
                        <label for="">Пигменти: </label><code><?=$bemor['peshob']->pigmenti; ?></code>
                      </span>
                    </p>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Гадуд: </label><code><?=$bemor['peshob']->gadud; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Намак: </label><code><?=$bemor['peshob']->namak; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Микробхо: </label><code><?=$bemor['peshob']->mikrobho; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Сана: </label><code><?=$bemor['peshob']->vakt; ?></code></div>
                  </div>
              </div>
          </div>
        </div>
