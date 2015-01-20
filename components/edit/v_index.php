<?php 
    $sid = $_GET['id'];


    $story = getStory($sid);
?>
<div class="row">
	<div class="col-lg-12">
		<form class="form-horizontal" role="form">
  			<div class="row">
  				<div class="col-sm-12">
  					<label for="">Хатсайри бемор №</label>
  					<code><?=$bemor['main']->hatsayr; ?></code>
					<a href="?option=add&id=<?=$sid;?>" class="btn btn-primary pull-right">Добавить</a>

  				</div>
  			</div>
  			<div class="row">
  				<div class="col-sm-12">
  					<label >Ном ва насаби бемор:</label>
  					<code ><?=$bemor['main']->NomiBemor; ?></code>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-sm-12">
  					<label >Соли таввалуди бемор:</label>
  					<code><?=$bemor['main']->SoliTavallud; ?></code>
  				</div>
  			</div>
        <div class="row">
          <div class="col-sm-12">
            <label >Ҷинс:</label>
            <code><?=$bemor['main']->sex; ?></code>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <label >Аз шаҳри / Ноҳияи:</label>
            <code><?=$bemor['main']->city; ?></code>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <label >Вилояти:</label>
            <code><?=$bemor['main']->region; ?></code>
          </div>
        </div>
  			<div class="row">
  				<div class="col-sm-12">
  					<label >Сурога:</label>
  					<code><?=$bemor['main']->address; ?></code>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-sm-6">
  					<label for="">Имтиезнокии бемор:</label>
  					<code><?=$bemor['main']->ImtieznokiiBemor; ?></code>

  				</div>
  				<div class="col-sm-6">
  					<label>Раками хуччат:</label>
  					<code><?=$bemor['main']->hujjat; ?></code>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-sm-12">
  					<label>Ном ва насаби Духтур:</label>
  					<code><?=$bemor['main']->NomiDuhtur; ?></code>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-sm-12">
  					<label>Ташхиси пешаки:</button>
  				  <code><?=$bemor['main']->TashhisiPeshaki; ?></code>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-sm-12">
  					<label>Сана:</label>
  					<code><?=$bemor['main']->data; ?></code>
  				</div>
  			</div>
		</form>

<div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#ist">
        <h4 class="panel-title colour">
            <a >История болезни</a>
        </h4>
    </div>
    <div id="ist" class="panel-collapse collapse">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-12">
                  <label for="">Таърихи бемори № </label>
                  <code><?=$story->num; ?></code>
                </div>
            </div>
            <div class="row">
              <div class="col-sm-12"><label for="">Руз ва вақти қабулшави: </label><code><?=$story->ruz_q; ?></code></div>
            </div>
            <div class="row">
              <div class="col-sm-12"><label for="">Руз ва вақти ҷавобшави: </label><code><?=$story->ruz_j; ?></code></div>
            </div>
            <div class="row">
              <div class="col-sm-4"><label for="">Шуъбаи:</label><code><?=$story->shuba; ?></code></div>
              <div class="col-sm-4"><label for="">Хуҷраи №</label><code><?=$story->hujra;?></code></div>
              <div class="col-sm-4"><label for="">Ҳарорат: </label><code><?=$story->harorat; ?></code></div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <label for="">Ба шуъбаи </label>
                <code><?=$story->ba_shuba; ?> &nbsp;</code>
                <label>гузаронда шуд</label>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12"><label for="">Таърихи бурдани бемор:</label></div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <? if ($story->aroba == 1) { ?>
                  <input type="checkbox" checked> бо кати беморкашаки.
                <? } ?>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <? if ($story->kur_aroba == 1) { ?>
                  <input type="checkbox" checked> бо курсии маъюби. 
                <? } ?>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <? if ($story->roh_g == 1) { ?>
                  <input type="checkbox" checked> рох гашта метавонад. 
                <? } ?>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-sm-4"><label for="">Гурухи хун:</label><code><?=$story->guruh_hun; ?></code></div>
              <div class="col-sm-4"><label for="">Резус-мансубият:</label><code><?=$story->rezus_k; ?></code></div>
            </div>
            <div class="row">
              <div class="col-sm-4"><label for="">Вазн:</label><code><?=$story->vazn; ?></code></div>
              <div class="col-sm-4"><label for="">Кад:</label><code><?=$story->qad; ?></code></div>
              <div class="col-sm-4"><label for="">ИВБ:</label><code><?=$story->ivb; ?></code></div>
            </div>
            <div class="row">
              <div class="col-sm-12"><label for="">Таъсири манфии дорухо, тахаммулнопазири:</label><code><?=$story->tahammul; ?></code></div>
            </div>
            <div class="row">
              <div class="col-sm-12"><label for="">Ҷои зисти доими: </label><code><?=$bemor['main']->address; ?></code></div>
            </div>
            <div class="row">
              <div class="col-sm-12"><label for="">Ҷои кор, касб ва вазифа: </label><code><?=$story->kor; ?></code></div>
            </div>
            <div class="row">
              <div class="col-sm-12"><label for="">Бемор аз тарафи кадом муассиса фиристода шудааст:</label><code><?=$story->ligot; ?></code></div>
            </div>
            <div class="row">
              <div class="col-sm-8"><label for="">Ба беморхона аз руи нишонахои таъчили:</label><code><?=$story->rad; ?></code></div>
              <div class="col-sm-4"><label for="">Бади</label><code><?=$story->badi; ?></code></div>
            </div>
            <div class="row">
              <div class="col-sm-12">
               <label for="">Ташхиси муассисаи равонкарда:</label><code><?=$story->t_m_r; ?></code>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <label for="">Ташхиси хангоми кабул:</label>
                <Code><?=$story->t_h_q; ?></Code>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12"><label for="">Ташхиси клиники:</label><code>1<?=$story->t_k; ?></code></div>
            </div>
            <div class="row">
              <div class="col-sm-12"><label for="">Рузи мукаррарсози:</label><code><?=$story->ruz_m; ?></code></div>
            </div>
            <div class="row">
              <div class="col-sm-12"><label for="">Ташхси охирин:</label></div>
            </div>
            <div class="row">
              <div class="col-sm-12"><label for="">А) Асоси: </label><code><?=$story->d1; ?></code></div>
            </div>
            <div class="row">
              <div class="col-sm-12"><label for="">Б) Оризахо: </label><code><?=$story->d2; ?></code></div>
            </div>
            <div class="row">
              <div class="col-sm-12"><label for="">В) Хамбаста: </label><code><?=$story->d3; ?></code></div>
            </div>
            <div class="row">
              <div class="col-sm-12"><label for="">Бо чунин ташхис соли равон:</label><code><?=$story->miqdor;?></code><label for="">маротиба бистари шудааст.</label></div>
            </div>
            <div class="row">
              <div class="col-sm-12"><label for="">Чаррохи тарзи бехушгардони асароти баъди чаррохи.</label></div>
            </div>
            <div class="row">
              <div class="col-sm-12"><label for=""></label><code></code></div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <table class="table table-hovered">
                  <tr>
                    <th>№</th>
                    <th>Номи чаррохи:</th>
                    <th>Таърихи чаррохи:</th>
                    <th>Таърихи бехушгардони:</th>
                    <th>Окибат:</th>
                  </tr>
                  <tr class="tr">
                    <td>1</td>
                    <td><?=$story->a1;?></td>
                    <td><?=$story->a2;?></td>
                    <td><?=$story->a3;?></td>
                    <td><?=$story->a4;?></td>
                  </tr>
                  <tr class="tr">
                    <td>2</td>
                    <td><?=$story->a5;?></td>
                    <td><?=$story->a6;?></td>
                    <td><?=$story->a7;?></td>
                    <td><?=$story->a8;?></td>
                  </tr>
                  <tr class="tr">
                    <td>3</td>
                    <td><?=$story->a9;?></td>
                    <td><?=$story->a10;?></td>
                    <td><?=$story->a11;?></td>
                    <td><?=$story->a12;?></td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12"><label for="">Муоличаи иловаги:</label><code><?=$story->mu_ilova; ?></code></div>
            </div>
            <div class="row">
              <div class="col-sm-12"><label for="">барои бемори саратон кадом тарзи муолича истифода шуд.</label></div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <label>Варакаи корнощоями дода шуд:</label>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
              <table class="table table-condensed">
                <tr>
                  <th>№</th>
                  <th>Аз</th>
                  <th>То</th>
                  <th>№</th>
                  <th>Аз</th>
                  <th>То</th>
                </tr> 
                <tr>
                  <td><?=$story->b1;?></td>
                  <td><?=$story->b2;?></td>
                  <td><?=$story->b3;?></td>
                  <td><?=$story->b4;?></td>
                  <td><?=$story->b4;?></td>
                  <td><?=$story->b5;?></td>
                </tr>
                <tr>
                  <td><?=$story->b7;?></td>
                  <td><?=$story->b8;?></td>
                  <td><?=$story->b9;?></td>
                  <td><?=$story->b10;?></td>
                  <td><?=$story->b11;?></td>
                  <td><?=$story->b12;?></td>
                </tr>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12"><label for="">Окибати бемори:</label></div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <? if ($story->jshs == 1) { ?>
                  <input type="checkbox" checked> Чавоб шуд Сихат
                <? } ?>

                <? if ($story->bb == 1) { ?>
                  <input type="checkbox" checked> Бо бехбуди
                <? } ?>

                <? if ($story->bbsh == 1) { ?>
                  <input type="checkbox" checked> Бедигаргуни бад шуд
                <? } ?>

                <? if ($story->bdm == 1) { ?>
                  <input type="checkbox" checked> Ба дигар муассиса гузаронида шуд
                <? } ?>

                <? if ($story->dkf == 1) { ?>
                  <input type="checkbox" checked> Дар кабулгох фавтид
                <? } ?>

                <? if ($story->zh23 == 1) { ?>
                  <input type="checkbox" checked> Зани хомила дар 23 хафтаи хомилаги фавтид
                <? } ?>

                <? if ($story->zh25 == 1) { ?>
                  <input type="checkbox" checked> Зани хомила дар 25 хафтаи хомилаги фавтид
                <? } ?>
              </div>

              <br>

              <div class="row">
                <div class="col-sm-12">
                  <? if ($story->k == 1) { ?>
                   &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" checked> Кобилияти мехнатияш баркарор шуд.
                  <? } ?>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <? if ($story->t == 1) { ?>
                   &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" checked> Тамоман паст шуд.
                  <? } ?>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <? if ($story->m == 1) { ?>
                   &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" checked> Mуддате гумшуд.
                  <? } ?>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <? if ($story->b == 1) { ?>
                  &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" checked> бо сабаби бемории нахустинаш ё бо сабабхои дигар тамоман гум шуд.
                  <? } ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12"><label for=""></label><code><?=$story->hh2;?></code></div>
            </div>
             <div class="row">
              <div class="col-sm-12"><label for="">Нишондодхои махсус:</label><code><?=$story->n2;?></code></div>
            </div>
             <div class="row">
              <div class="col-sm-12"><label for="">Хулосаи ташхиси тиббии суди:</label><code><?=$story->h2;?></code></div>
            </div>
            <div class="row">
              <div class="col-sm-12"><label for="">Табиби шифокор:</label><code><?=$story->t_sh; ?></code></div>
            </div>
            <div class="row">
              <div class="col-sm-12"><label for="">Мудири бахш:</label><code><?=$story->m_b; ?></code></div>
            </div>
            <!-- Main Div -->
        </div>
    </div>
</div>

<!--  Тахлили умумии хун -->
		  <? include_once('analisys/blank_1/index.php'); ?>

<!--  Тахлили хун -->
      <? include_once('analisys/blank_16/index.php'); ?>

<!--  Тахлили мочевинаи хун -->
  		<? include_once('analisys/blank_2/index.php'); ?>

<!--  Озмоишигохи имунологи -->
  		<? include_once('analisys/blank_3/index.php'); ?>

<!--  Озмоишигохи клиники -->
      <? include_once('analisys/blank_4/index.php'); ?>

<!--  Тахлили канди хун -->
      <? include_once('analisys/blank_5/index.php'); ?>

<!--  Тахлили пешоб -->
      <? include_once('analisys/blank_6/index.php'); ?>

<!--  Тахлили Фазла -->
      <? include_once('analisys/blank_7/index.php'); ?>

<!--  Ташхиси фаросадонии узвхои дохила -->
      <? include_once('analisys/blank_8/index.php'); ?>

<!--  Тахлили лахташавии хун -->
      <? include_once('analisys/blank_9/index.php'); ?>

<!--  Тахлили биокимиёвии хун -->
      <? include_once('analisys/blank_10/index.php'); ?>

<!--  Озмоишгохи вирусологи -->
      <? include_once('analisys/blank_11/index.php'); ?>

<!--  Роххат барои тахкикоти патологи -->
      <? include_once('analisys/blank_12/index.php'); ?>

<!--  ПЦР - ОЗМОИШГОХ -->
      <? include_once('analisys/blank_13/index.php'); ?>

<!--  Радиолоҷи 1 -->
      <? include_once('analisys/blank_14/index.php'); ?>
        
<!--  Радиолоҷи 2 -->
      <? include_once('analisys/blank_15/index.php'); ?>
    </div>
    </div>
</div>


