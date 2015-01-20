<?php
   $resultRad1 = getRadiologi1($_GET['id']);
   if (isset($resultRad1)) {
?>
<div class="panel panel-default">
          <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseFifth">
              <h4 class="panel-title">
                <a >Озмоишгоҳи радиолоҷӣ</a>
              </h4>
          </div>
          <div id="collapseFifth" class="panel-collapse collapse">
              <div class="panel-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <label for="">Хулоса: </label><code><?=$resultRad1->etwas; ?></code>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <label for="">Меъёр: </label><code><?=$resultRad1->meer; ?></code>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <label for="">Натиҷа: </label><code><?=$resultRad1->natija; ?></code>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <label for="">Сана: </label><code><?=$resultRad1->sana; ?></code>
                    </div>
                  </div>
                </div>
              </div>
</div>
<? } ?>