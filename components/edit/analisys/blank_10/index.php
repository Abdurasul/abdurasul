<div class="panel panel-default">
          <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">
              <h4 class="panel-title">
                <a>Тахлили биокимиёвии хун</a>
              </h4>
          </div>
          <div id="collapseTen" class="panel-collapse collapse">
              <div class="panel-body">
                  <div class="row">
                    <div class="col-sm-12"><label for="">Тахлили биокимиёвии хун №</label><code><?=$bemor['bio']->sana; ?></code></div>
                  </div>
                   <?php if ($bemor['bio']->kassa != 0) { echo "<button class='btn btn-success pull-right'><span class='glyphicon glyphicon-ok'></span> ".$bemor['bio']->kassa." сомон</button>"; }
                         else echo "<button class='btn btn-danger pull-right'><span class='glyphicon glyphicon-remove'></span>Насупорид</button>"; ?>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Санаи гирифтани биоматериал: </label><code><?=$bemor['bio']->sana; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Шуъбаи биохимия: </label><code><?=$bemor['bio']->sana; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-2"><label for="">Хучра: </label><code><?=$bemor['bio']->hujra; ?></code></div>
                    <div class="col-sm-3"><label for="">Минтака: </label><code><?=$bemor['bio']->mintaka; ?></code></div>
                    <div class="col-sm-7"><label for="">Таърихи бемор ё картаи ниезмандон №</label><code><?=$bemor['bio']->tarih; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">1. Холестерин (3.0 - 6.5 ммоль/л): </label><code><?=$bemor['bio']->holesterin; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">2. Микдори умумии билирубин (3.4 - 20.5 ммоль/л): </label><code><?=$bemor['bio']->bilirubin; ?></code></div>
                  </div>
                  <div class="row">
                    <p style="margin-left: 15px; ">
                      <span class="col-sm-12">
                        <label for="">Билирубини пайвасташуда (2.2 - 5.1 мкмоль/л): </label><code><?=$bemor['bio']->b_p; ?></code>
                      </span>
                      <span class="col-sm-12">
                        <label for="">Билирубини озод: </label><code><?=$bemor['bio']->b_o; ?></code>
                      </span>
                      <span class="col-sm-12"><label for="">Реаксияи сифати: </label><code><?=$bemor['bio']->reaksia; ?></code></span>
                    </p>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">3. ACAT до 36 Е/л: </label><code><?=$bemor['bio']->acat; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">4. АЛАТ до 40 Е/л: </label><code><?=$bemor['bio']->alat; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">5. Фосфотазаи ишкори до 51 Е/л: </label><code><?=$bemor['bio']->f_i; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">6. Микдори умумии сафедахо 65 - 85 г/л: </label><code><?=$bemor['bio']->m_s; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">7. Амилаза (3.3 - 8.9 мг/с.л): </label><code><?=$bemor['bio']->amilaza; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">8. Альмубин (35 - 50 Е/л): </label><code><?=$bemor['bio']->almubin; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">9. ГГТП (Муж. 15 - 106 Е/л, Жен. 10 - 66 Е/л): </label><code><?=$bemor['bio']->ggtp; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Сана: </label><code><?=$bemor['bio']->data; ?></code></div>
                  </div>
              </div>
          </div>
        </div>