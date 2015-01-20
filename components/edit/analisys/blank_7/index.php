<div class="panel panel-default">
          <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
              <h4 class="panel-title">
                <a>Тахлили Фазла</a>
              </h4>
          </div>
          <div id="collapseSeven" class="panel-collapse collapse">
              <div class="panel-body">
                  <div class="row">
                    <div class="col-sm-12"><label for="">Тахлили фазла №</label><code><?=$bemor['tahlilifazla']->nomer; ?></code></div>

                  </div>
                   <?php if ($bemor['tahlilifazla']->kassa != 0) { echo "<button class='btn btn-success pull-right'><span class='glyphicon glyphicon-ok'></span> ".$bemor['tahlilifazla']->kassa." сомон</button>"; }
                         else echo "<button class='btn btn-danger pull-right'><span class='glyphicon glyphicon-remove'></span>Насупорид</button>"; ?>
                  <div class="row">
                    <div class="col-sm-4">
                      <label for="">Муассиса:</label><code><?=$bemor['tahlilifazla']->muassisa; ?></code>
                    </div>
                    <div class="col-sm-4">
                      <label for="">Шуъба: </label><code><?=$bemor['tahlilifazla']->shuba; ?></code>
                    </div>
                    <div class="col-sm-4">
                      <label for="">Хучра:</label><code><?=$bemor['tahlilifazla']->hujra; ?></code>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <label>Китъа:</label>
                      <code><?=$bemor['tahlilifazla']->kita; ?></code>
                    </div>
                    <div class="col-sm-6"><label for="">Таърихи бемор: </label><code><?=$bemor['tahlilifazla']->tarih; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Микдор:</label><code><?=$bemor['tahlilifazla']->mikdor; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Консистенсия: </label><code><?=$bemor['tahlilifazla']->konsistensia; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Намуд: </label><code><?=$bemor['tahlilifazla']->namud; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Буй:</label><code><?=$bemor['tahlilifazla']->buy; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Ранг: </label><code><?=$bemor['tahlilifazla']->rang; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Реаксия (тагзия): </label><code><?=$bemor['tahlilifazla']->reaksia; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Луоб: </label><code><?=$bemor['tahlilifazla']->luob; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Хун: </label><code><?=$bemor['tahlilifazla']->hun; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Бокимондаи хурокаи хазмнашуда: </label><code><?=$bemor['tahlilifazla']->huroka; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <p style="font-weight: bold; text-align: center; ">Муонихои химияви</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Тачзия барои хун:</label><code><?=$bemor['tahlilifazla']->t_hun; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Тачзия барои срерхобилин:</label><code><?=$bemor['tahlilifazla']->t_srerhobilin; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Тачзия барои билирубин:</label><code><?=$bemor['tahlilifazla']->t_bilirubin; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <p style="font-weight: bold; text-align: center; ">Ташхиси микроскопи</p>
                    </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-12"><label for="">Наххои мушаки:</label><code></code></div>
                    <p style="margin-left: 15px; ">
                      <span class="col-sm-12">
                        <label for="">Хатдор: </label><code><?=$bemor['tahlilifazla']->hatdor; ?></code>
                      </span>
                      <span class="col-sm-12">
                        <label for="">Бехат: </label><code><?=$bemor['tahlilifazla']->behat; ?></code>
                      </span>
                    </p>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Бофтахои пайванди: </label><code><?=$bemor['tahlilifazla']->payvandi; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Чарбу: </label><code><?=$bemor['tahlilifazla']->charbu; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Чарбу кислотаги: </label><code><?=$bemor['tahlilifazla']->charbui_kislotagi ; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Собун: </label><code><?=$bemor['tahlilifazla']->sobun; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Хучайрахои хазмшудаи растани: </label><code><?=$bemor['tahlilifazla']->hujayra; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Крахмал: </label><code><?=$bemor['tahlilifazla']->krahmal; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Фиози йодофилия: </label><code><?=$bemor['tahlilifazla']->yodofilia; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Кристалхо: </label><code><?=$bemor['tahlilifazla']->kristalho; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Луоб: </label><code><?=$bemor['tahlilifazla']->luob2; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Эпителей: </label><code><?=$bemor['tahlilifazla']->epiteley; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Лейкоситхо: </label><code><?=$bemor['tahlilifazla']->leykositho; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Еритроситхо: </label><code><?=$bemor['tahlilifazla']->eritrositho; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Содатаринхо: </label><code><?=$bemor['tahlilifazla']->sodaratinho; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Замбугурухо: </label><code><?=$bemor['tahlilifazla']->zambuguruho; ?></code></div>
                  </div>
                   <div class="row">
                    <div class="col-sm-12"><label for="">Тухми гиччахо: </label><code><?=$bemor['tahlilifazla']->tuhmi_j; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Сана: </label><code><?=$bemor['tahlilifazla']->data; ?></code></div>
                  </div>
              </div>
          </div>
        </div>