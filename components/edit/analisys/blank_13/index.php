<div class="panel panel-default">
          <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen">
              <h4 class="panel-title">
                <a >ПЦР - ОЗМОИШГОХ</a>
              </h4>
          </div>
          <div id="collapseFourteen" class="panel-collapse collapse">
              <div class="panel-body">
                  <div class="row">
                    <div class="col-sm-12"><label for="">Санаи кабул: </label><code><?=$bemor['pcr']->sanaiKabul; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4"><label for="">Хучраи №</label><code><?=$bemor['pcr']->hujra; ?></code></div>
                    <div class="col-sm-8"><label for="">Таъ бемор:</label><code><?=$bemor['pcr']->t_bemor; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Ф.Н.Н духтури фиристода: </label><code><?=$bemor['pcr']->duhtur; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <p style="font-weight: bold; font-size: 20px; text-align: center; ">ПЦР Вирусхои инфексиони</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Микдор HBV-ДНК: </label><code><?=$bemor['pcr']->hbv; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Микдор HCV-РНК: </label><code><?=$bemor['pcr']->hcv; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Генотир HVC-РНК: </label><code><?=$bemor['pcr']->hvc; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Микдор HDV-РНК: </label><code><?=$bemor['pcr']->hdv; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Тахлил кард: </label><code><?=$bemor['pcr']->tahlil; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Сана: </label><code><?=$bemor['pcr']->data; ?></code></div>
                  </div>
              </div>
          </div>
        </div>