
        <div class="panel panel-default">
          <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseThirdteen">
              <h4 class="panel-title">
                <a >Роххат барои тахкикоти морфологӣ</a>
              </h4>
          </div>
          <div id="collapseThirdteen" class="panel-collapse collapse">
              <div class="panel-body">
                  <div class="row">
                    <div class="col-sm-12"><label for="">Сана ва соати фиристодани мавод: </label><code><?=$bemor['patalogi']->sana; ?></code></div>
                  </div>
                   <?php if ($bemor['patologi']->kassa != 0) { echo "<button class='btn btn-success pull-right'><span class='glyphicon glyphicon-ok'></span> ".$bemor['virus']->kassa." сомон</button>"; }
                         else echo "<button class='btn btn-danger pull-right'><span class='glyphicon glyphicon-remove'></span>Насупорид</button>"; ?>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Шӯъба:</label><code><?=$bemor['patologi']->shuba; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Картаи бемори статсионари(картаи амбулатори) № : </label><code><?=$bemor['patologi']->karta; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Биопсияи аввалин, дубора ( лозимашно нависед ): </label><code><?=$bemor['patologi']->b_a; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Хангоми биопсияи тактори № ва санаи аввалинаш нишон дода шавад: </label><code><?=$bemor['patologi']->hz; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Сана ва намуди чаррохи: </label><code><?=$bemor['patologi']->sana_j; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Тамгагузории мавод, микдори объектхо: </label><code><?=$bemor['patologi']->m_o; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Нишондодхои клиники: </label><code><?=$bemor['patologi']->n_k; ?></code></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><label for="">Ташхиси клиники: </label><code><?=$bemor['patologi']->t_k; ?></code></div>
                  </div>
          <div class="row">
                    <div class="col-sm-12"><label for="">хулосаи патологи (ташхис) </label><code><?=$bemor['patologi']->h_p; ?></code></div>
                  </div>
          <div class="row">
                    <div class="col-sm-12"><label for="">Санаи таҳқиқот: </label><code><?=$bemor['patologi']->s_t; ?></code></div>
                  </div>
          <div class="row">
                    <div class="col-sm-12"><label for="">ном ва насаби патологанатом: </label><code><?=$bemor['patologi']->patologanatom; ?></code></div>
                  </div>
          <div class="row">
                    <div class="col-sm-12"><label for="">Биопсияи фаври:</label><code><?=$bemor['patologi']->t_p; ?></code></div>
                  </div>
          <div class="row">
                    <div class="col-sm-12"><label for="">Биопсияи фаври:</label><code><?=$bemor['patologi']->s_s; ?></code></div>
                  </div>
          <div class="row">
                    <div class="col-sm-12"><label for="">Биопсияи ташхис:</label><code><?=$bemor['patologi']->b_t; ?></code></div>
                  </div>
          <div class="row">
                    <div class="col-sm-12"><label for="">Биопсияи фаври:</label><code><?=$bemor['patologi']->b_f; ?></code></div>
                  </div>
          <div class="row">
                    <div class="col-sm-12"><label for="">маводи ҷарроҳи:</label><code><?=$bemor['patologi']->m_j; ?></code></div>
                  </div>
          <div class="row">
                    <div class="col-sm-12"><label for="">миқдори порчаҳо:</label><code><?=$bemor['patologi']->m_p; ?></code></div>
                  </div>
          <div class="row">
                    <div class="col-sm-12"><label for="">блокҳо:</label><code><?=$bemor['patologi']->bloks; ?></code></div>
                  </div>
          <div class="row">
                    <div class="col-sm-12"><label for="">усули ранг:</label><code><?=$bemor['patologi']->u_r; ?></code></div>
                  </div>
          <div class="row">
                    <div class="col-sm-12"><label for="">шакли макро ва микроскопи:</label><code><?=$bemor['patologi']->sh_m; ?></code></div>
                  </div>
          <div class="row">
                    <div class="col-sm-12"><label for="">ном ва насаби таҳлилгар:</label><code><?=$bemor['patologi']->tahlilgard; ?></code></div>
                  </div>
              </div>
          </div>
        </div>