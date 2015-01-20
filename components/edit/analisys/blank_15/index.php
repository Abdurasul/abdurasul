<?php
   $resultRad2 = getRadiologi2($_GET['id']);
   if (isset($resultRad2)) {
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
                      <label for="">Трийодтиронин (Т3) : </label><code><?=$resultRad2->t3; ?></code>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <label for="">Тирокси (Т4) : </label><code><?=$resultRad2->t4; ?></code>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <label for="">Тиреотропинин (ТТГ) : </label><code><?=$resultRad2->ttg; ?></code>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <label for="">Натиҷа: </label><code><?=$resultRad2->natija; ?></code>
                    </div>
                  </div>
                </div>
              </div>
</div>
<? } ?>