<?php include ('includes/header.php') ?>

<div class="popup">
    <button id="close">&times;</button>
    <a href="https://www.instagram.com/cdelnoroeste/?hl=es" target="_blank"><img src="banners/2022/Clinica-del-Noroeste-261.jpg" alt=""></a>
  </div>

<script type="text/javascript">
  window.addEventListener("load", function () {
    setTimeout(
      function open(event) {
        document.querySelector(".popup").style.display = "block";
      },
      500
    )
  });
  document.querySelector("#close").addEventListener("click", function () {
    document.querySelector(".popup").style.display = "none";
  });
</script>

  <!--PREVENTIVO COVID-->
  <div class="contenedor covid-preventivo">
    <a href="#">
      <p><i class="fas fa-exclamation-circle fa-lg"></i><span> COVID-19:</span> INFORMACIÓN IMPORTANTE, ARTÍCULOS RELACIONADOS</p>
    </a>
  </div>

  <!-- 1MES -->
  <section class="contenedor m-0a">

    <div class="cont-mes1">
      <div class="col1-mes1">
        <div class="impresa-th-bx hv-trns-01">
          <a href="ediciones/2022/02/Revista-BS-261.pdf" target="blank">
            <p class="f2 ind-impr">EDICIÓN DIGITAL</p>
            <figure><img src="imgs/portadas/portada-Revista-BS-261.jpg" alt="Revista BS #261"></figure>
          </a>
        </div>

        <hr class="mes1-hr-1">

        <div class="esp-th-bx">
          <a href="ediciones/2022/02/261-Seccion-Especial.html">
            <p class="f2 esp-edi-inda">Especial</p>
            <h2 class="f1 especial-cbz-th hv-txt-01 guion">Salud bucal integral</h2>
            <p class="f1 especial-txt-th guion ">Expertos en hacerle sonreír</p>
          </a>
        </div>

        <hr class="mes1-hr-2">

        <div class="edi-th-bx">
          <a href="ediciones/2022/02/261-editorial.php">
            <p class="f2 esp-edi-inda">Editorial</p>
            <h2 class="f1 editorial-cbz-th hv-txt-01">Salud bucodental</h2>
          </a>
        </div>
      </div>

      <!-- 1MES NOTA -->
      <div class="col2-mes1 hv-trns-01">

        <div class="f1 mes1-top-ceja morado">ESTE MES</div>

        <a href="ediciones/2022/02/261-tipos-ortodoncia.php">
          <div class="mes1-top-foto-bx">
            <img src="ediciones/2022/02/imgs/261-Dra-Cinthia-Borbon-TIPOS-ORTODONCIA-1.jpg">
          </div>

          <div class="f2 mes1-top-ceja-th" style="background: #6ab8ac">Salud bucal</div>

          <h2 class="f1 mes1-top-cbz hv-txt-01">Una opción para cada sonrisa</h2>

          <p class="f1 mes1-top-sumario">Una de las preguntas más frecuentes que un paciente se hace es ¿cuál es el tratamiento de ortodoncia más adecuado para mí?, conozca las opciones que existen</p>
        </a>
      </div>

      <div class="col3-mes1 none-1024">
        <!-- BANNERS RUBI DESKTOP -->
        <?php include ('includes/bnr-rubi.php') ?>
      </div>
    </div>
  </section>

  <div class="clear"></div>

  <!-- BANNER ORO 1 -->
  <?php include ('includes/bnr-oro-01.php') ?>

  <!-- 1ARTICULOS -->
  <section class="contenedor m-0a">
    <div class="cont-art1">
      <div class="col1-art1">

        <div class="card-art1">
          <div class="f2 ceja-med rojoc">CÁNCER</div>
          <div class="foto-art1-bx">
            <a href="ediciones/2022/02/261-dia-mundial-vs-cancer.html">
              <img src="ediciones/2022/02/imgs/261-Dr-Enrique-Avila-DIA-CANCER-1.jpg" alt="">
            </a>
          </div>
          <div class="cbz-art1-bx">
            <a href="ediciones/2022/02/261-dia-mundial-vs-cancer.html">
              <p class="f2 blz-card-2col hv-txt-01" style="color:#40a091;">Día Mundial Contra el Cáncer</p>
              <h2 class="f1 cbz-card-2col hv-txt-01">Atención para todos</h2>
              <p class="f1 autor-card"><span>Dr. Enrique Ávila Monteverde</span><br>Oncología quirúrgica</p>
            </a>
          </div>
        </div>

        <div class="card-art1">
          <div class="f2 ceja-med" style="background: #2a6386">Salud bucal</div>
          <div class="foto-art1-bx">
            <a href="ediciones/2022/02/261-implantes-dentales.html">
              <img src="ediciones/2022/02/imgs/261-Dr-Alberto-Vazquez-IMPLANTES-DENTALES-1.jpg" alt="">
            </a>
          </div>
          <div class="cbz-art1-bx">
            <a href="ediciones/2022/02/261-implantes-dentales.html">
              <p class="f2 blz-card-2col hv-txt-01" style="color:#40a091;">Implantes dentales</p>
              <h2 class="f1 cbz-card-2col hv-txt-01">Sonrisas naturales y plenas</h2>
              <p class="f1 autor-card"><span>Odont. Alberto Vázquez Zavala</span><br> Rehabilitación oral e implantología</p>
            </a>
          </div>
        </div>

        <div class="card-art1">
          <div class="f2 ceja-med" style="background: #2a6386">Salud bucal</div>
          <div class="foto-art1-bx">
            <a href="ediciones/2022/02/261-anestesia-digital.html">
              <img src="ediciones/2022/02/imgs/261-Dra-Yadira-Fimbres-ANESTESIA-DIGITAL-1.jpg" alt="">
            </a>
          </div>
          <div class="cbz-art1-bx">
            <a href="ediciones/2022/02/261-anestesia-digital.html">
              <p class="f2 blz-card-2col hv-txt-01" style="color:#40a091;">Anestesia digital</p>
              <h2 class="f1 cbz-card-2col hv-txt-01">Un poco de magia</h2>
              <p class="f1 autor-card"><span>Odont. Yadira Fimbres Fimbres</span><br>Odontopediatría</p>
            </a>
          </div>
        </div>

        <div class="card-art1">
          <div class="f2 ceja-med" style="background: #2a6386">Salud bucal</div>
          <div class="foto-art1-bx">
            <a href="ediciones/2022/02/261-cuidados-bucales-infantiles.html">
              <img src="ediciones/2022/02/imgs/261-Dra-Karla-Lopez-CUIDADOS-PEDIATRIA-1.jpg" alt="">
            </a>
          </div>
          <div class="cbz-art1-bx">
            <a href="ediciones/2022/02/261-cuidados-bucales-infantiles.html">
              <p class="f2 blz-card-2col  hv-txt-01" style="color:#40a091;">Cuidados bucales infantiles</p>
              <h2 class="f1 cbz-card-2col hv-txt-01">Pequeñas sonrisas, enormes tesoros</h2>
              <p class="f1 autor-card"><span>Odont. Karla López Almazán</span><br>Odontopediatría</p>
            </a>
          </div>
        </div>
      </div>

      <!-- ASIDE ARTICULOS -->
      <div class="col2-art1">

        <!-- BANNER PERLA VERTICAL GRANDE -->
        <?php include ('includes/bnr-perla.php') ?>

        <!-- MAS LEIDAS -->
        <div class="leidas1">
          <p class="f2 indicador  mas-inda">MÁS LEÍDAS</p>
          <ol>
            <li><a href="#">
                <h3>Cinco ejercicios para mantener su sistema nervioso sano</h3>
              </a>
            </li>
            <li><a href="#">
                <h3>La enfermedad mental en la expresión pictórica de Van Gogh</h3>
              </a>
            </li>
            <li><a href="#">
                <h3>¿Sospecha de meningitis? acuda pronto a su médico</h3>
              </a>
            </li>
            <li><a href="#">
                <h3>Factores que afectan la altura durante el crecimiento </h3>
              </a>
            </li>
            <li><a href="#">
                <h3>La depresión aparece cuando existen conflictos graves</h3>
              </a>
            </li>
          </ol>
        </div>

        <!-- BANNERS RUBI MOBILE VISIBLES ABAJO 1024 -->
        <?php include ('includes/bnr-rubi-mob.php') ?>

      </div>
    </div>
  </section>

  <div class="clear"></div>

  <!-- BANNER ORO2 -->
  <?php include ('includes/bnr-oro-02.php') ?>

<!-- 1ESPECIAL -->
  <section id="esp1" style="background: #DDFFFF;">
    <div class="contenedor cont-esp1 m-0a">
      <div class="col1-esp1">
        <p class="f2 indicador esp1-inda">SECCIÓN ESPECIAL</p>
        <div class="cbz-esp1-bx">
          <a href="ediciones/2022/02/261-Seccion-Especial.html">
            <p class="f2 cbz-esp1">Salud bucal <br class="br-none br-visible740">integral</p>
            <p class="f1 sum-esp1">Dientes sanos, <br class="br-none br-visible420">sonrisa deslumbrante</p>
          </a>
        </div>

        <div class="lista-esp1-bx">
          <ul class="lista-esp1-izq">
            <li>
              <a href="ediciones/2022/02/261-Dra-Cinthia-Borbon.html">
                <p class="f1 item-esp1">
                  <strong>Odont. Cinthia Lorena <br class="br-none br-visible400">Borbón Esquer</strong> <br class="br-none br-visible1024">
                  <span>Ortodoncia</span>
                </p>
              </a>
            </li>

            <li>
              <a href="ediciones/2022/02/261-Dr-Hector-Delgado.html">
                <p class="f1 item-esp1">
                  <strong>Odont. Héctor <br class="br-none br-visible400">Delgado Contreras</strong>
                  <br class="br-none br-visible1024">
                  <span>Implantología</span>
                </p>
              </a>
            </li>

            <li>
              <a href="ediciones/2022/02/261-Dra-Dayana-Duron.html">
                <p class="f1 item-esp1">
                  <strong>Odont. Dayana <br class="br-none br-visible400">Durón Rivas</strong>
                  <br class="br-none br-visible1100">
                  <span>Ortodoncia y <br class="br-none br-visible400">ortopedia maxilofacial</span>
                </p>
              </a>
            </li>

            <li>
              <a href="ediciones/2022/02/261-Dra-Yadira-Fimbres.html">
                <p class="f1 item-esp1">
                  <strong>Odont. Yadira Inés <br class="br-none br-visible400">Fimbres Fimbres</strong>
                  <br class="br-none br-visible1024">
                  <span>Odontopediatría</span>
                </p>
              </a>
            </li>

            <li>
              <a href="ediciones/2022/02/261-Dra-Karla-Lopez.html">
                <p class="f1 item-esp1">
                  <strong>Odont. Karla Berenice <br class="br-none br-visible400">López Almazán</strong>
                  <br class="br-none br-visible1024">
                  <span>Odontopediatría</span>
                </p>
              </a>
            </li>

            <li>
              <a href="ediciones/2022/02/261-Dra-Dulce-Montijo.html">
                <p class="f1 item-esp1">
                  <strong>Odont. Dulce Karina <br class="br-none br-visible400">Montijo Flores</strong>
                  <br class="br-none br-visible1024">
                  <span>Odontología general</span>
                </p>
              </a>
            </li>

            <li>
              <a href="ediciones/2022/02/261-Dr-German-Rios.html">
                <p class="f1 item-esp1">
                  <strong>Odont. Germán <br class="br-none br-visible400">Ríos Barceló</strong>
                  <br class="br-none br-visible1024">
                  <span>Ortodoncia y <br class="br-none br-visible400">ortopedia maxilofacial</span>
                </p>
              </a>
            </li>

            <li>
              <a href="ediciones/2022/02/261-Dr-Carlos-Sanabia.html">
                <p class="f1 item-esp1">
                  <strong>Odont. Carlos Aníbal <br class="br-none br-visible400">Sanabia Hurtado</strong>
                  <br class="br-none br-visible1024">
                  <span>Ortodoncia</span>
                </p>
              </a>
            </li>

            <li>
              <a href="ediciones/2022/02/261-Dr-Alberto-Vazquez.html">
                <p class="f1 item-esp1">
                  <strong>Odont. Alberto <br class="br-none br-visible400">Vázquez Zavala</strong>
                  <br class="br-none br-visible1100">
                  <span>Rehabilitación oral <br class="br-none br-visible400">e implantología</span>
                </p>
              </a>
            </li>
          </ul>

          <!-- <ul class="lista-esp1-der">
          </ul> -->
        </div>
      </div>

      <div class="col2-esp1">
        <div class="foto-esp1-bx">
          <a href="ediciones/2022/02/261-Seccion-Especial.html">
            <img src="ediciones/2022/02/imgs/261-Seccion-Especial-1.jpg" alt="">
          </a>
        </div>
      </div>

    </div>
  </section>

  <div class="clear"></div>

  <!-- 1VIDEOS -->
  <section id="vid1">

    <div class="contenedor m-0a">
      <p class="f2 indicador vid1-inda">ENTREVISTAS CON DESTACADOS PROFESIONALES DE LA SALUD</p>

      <div class="frames">
        <div class="vid1-bx">

          <iframe
            src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FRevistaBS%2Fvideos%2F525258101972060%2F&show_text=true&width=560&t=0"
            width="100%" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
            allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
            allowFullScreen="true">
          </iframe>
        </div>

        <div class="vid1-bx"><iframe
            src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FRevistaBS%2Fvideos%2F871091170163519%2F&show_text=true&width=560&t=0"
            width="100%" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
            allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
            allowFullScreen="true"></iframe></div>

        <div class="vid1-bx"><iframe
            src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FRevistaBS%2Fvideos%2F1381143148904762%2F&show_text=true&width=560&t=0"
            width="100%" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
            allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
            allowFullScreen="true"></iframe></div>

        <div class="vid1-bx"><iframe
            src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FRevistaBS%2Fvideos%2F742883103021631%2F&show_text=true&width=560&t=0"
            width="100%" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
            allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
            allowFullScreen="true"></iframe></div>

        <div class="vid1-bx"><iframe
            src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FRevistaBS%2Fvideos%2F4120319731331400%2F&show_text=true&width=560&t=0"
            width="100%" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
            allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
            allowFullScreen="true"></iframe></div>

        <div class="vid1-bx"><iframe
            src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FRevistaBS%2Fvideos%2F2025613831073432%2F&show_text=true&width=560&t=0"
            width="100%" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
            allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
            allowFullScreen="true"></iframe></div>
      </div>
    </div>
  </section>

  <!-- BANNER HORIZONTAL VIDEOS -->
  <?php include ('includes/bnr-oro-01.php') ?>

  <!-- 1SPV SALUD PARA VIVIR -->
  <section id="spv1" class="contenedor m-0a">
    <p class="f2 indicador">SALUD PARA VIVIR CON SENTIDO</p>

    <div class="cont-spv1">

      <div class="card-spv1 col2">
        <a href="ediciones/2022/02/261-ortodoncia-cirugia-ortognatica.html">
          <div class="f2 ceja-med" style="background: #2a6386">Salud bucal</div>
          <div class="foto-spv1-bx"><img
              src="ediciones/2022/02/imgs/261-Dra-Dayana-Duron-CIRUGIA-ORTO-1.jpg" alt="">
          </div>
          <div class="cbz-spv1-bx">
            <p class="f2 blz-card-2col hv-txt-01" style="color:#40a091;">Ortodoncia y cirugía ortognática</p>
            <h2 class="f1 cbz-card-2col hv-txt-01">Gran mancuerna</h2>
            <p class="f1 autor-card"><span>Odont. Dayana Durón Rivas</span><br>Ortodoncia y ortopedia maxilofacial</p>
          </div>
        </a>
      </div>

      <div class="card-spv1 col2">
        <a href="ediciones/2022/02/261-complicaciones-bruxismo.html">
          <div class="f2 ceja-med" style="background: #2a6386">Salud bucal</div>
          <div class="foto-spv1-bx"><img src="ediciones/2022/02/imgs/261-Dr-Carlos-Sanabia-BRUXISMO-1.jpg" alt="">
          </div>
          <div class="cbz-spv1-bx">
            <p class="f2 blz-card-2col hv-txt-01" style="color:#40a091;">Bruxismo: complicaciones</p>
            <h2 class="f1 cbz-card-2col hv-txt-01">Cuando necesita un “break”</h2>
            <p class="f1 autor-card"><span>Odont. Carlos Sanabia Hurtado</span><br>Ortodoncia</p>
          </div>
        </a>
      </div>

      <!-- BANNER PERLA MOBILE -->
      <div class="cont-flx">
      <?php include ('includes/bnr-perla-mob.php') ?>
      </div>

      <!-- USAR EN NUM IMPAR DE NOTAS SPV -->
      <!-- <div class="card-spv1" style="visibility: hidden;"></div> -->

    </div>
  </section>

  <!-- 1CARRUSEL -->
  <section id="edcr1" class="contenedor">

    <p class="f2 indicador">NUESTRAS EDICIONES</p>

    <div id="cont-edcr1">

      <a href="#" class="edi1-flecha-izq"><img src="imgs/flecha-izq.png" /></a>
      <a href="#" class="edi1-flecha-der"><img src="imgs/flecha-der.png" /></a>

      <div class="banda-edcr1">

        <div class="portada-edcr1" id="portada-edcr1-0">
          <a href="ediciones/2022/01/Revista-BS-260.pdf" target="blank">
            <img src="imgs/portadas/portada-Revista-BS-260.jpg" title="Revista BS #260"/>
            <h4 class="f1 num-portada-edcr1">Revista BS #260</h4>
          </a>
        </div>

        <div class="portada-edcr1" id="portada-edcr1-0">
          <a href="ediciones/2021/12/Revista-BS-259.pdf" target="blank">
            <img src="imgs/portadas/portada-Revista-BS-259.jpg" title="Revista BS #259"/>
            <h4 class="f1 num-portada-edcr1">Revista BS #259</h4>
          </a>
        </div>

        <div class="portada-edcr1" id="portada-edcr1-0">
          <a href="ediciones/2021/11/Revista-BS-258.pdf" target="blank">
            <img src="imgs/portadas/portada-Revista-BS-258.jpg" title="Revista BS #258" />
            <h4 class="f1 num-portada-edcr1">Revista BS #258</h4>
          </a>
        </div>

        <div class="portada-edcr1" id="portada-edcr1-0">
          <a href="ediciones/2021/10/Revista-BS-257.pdf" target="blank">
            <img src="imgs/portadas/portada-Revista-BS-257.jpg" title="Revista BS #257" />
            <h4 class="f1 num-portada-edcr1">Revista BS #257</h4>
          </a>
        </div>

        <div class="portada-edcr1" id="portada-edcr1-0">
          <a href="ediciones/2021/09/Revista-BS-256.pdf" target="blank">
            <img src="imgs/portadas/portada-Revista-BS-256.jpg" title="Revista BS #256" />
            <h4 class="f1 num-portada-edcr1">Revista BS #256</h4>
          </a>
        </div>

        <div class="portada-edcr1" id="portada-edcr1-1">
          <a href="ediciones/2021/08/Revista-BS-255.pdf" target="blank">
            <img src="imgs/portadas/portada-Revista-BS-255.jpg" title="Revista BS #255" />
            <h4 class="f1 num-portada-edcr1">Revista BS #255</h4>
          </a>
        </div>

        <div class="portada-edcr1" id="portada-edcr1-2">
          <a href="" target="blank">
            <img src="imgs/portadas/portada-Revista-BS-254.jpg" title="Revista BS #254" />
            <h4 class="f1 num-portada-edcr1">Revista BS #254</h4>
          </a>
        </div>

        <div class="portada-edcr1" id="portada-edcr1-3">
          <a href="" target="blank">
            <img src="imgs/portadas/portada-Revista-BS-253.jpg" title="Revista BS #253" />
            <h4 class="f1 num-portada-edcr1">Revista BS #253</h4>
          </a>
        </div>

        <div class="portada-edcr1" id="portada-edcr1-4">
          <a href="" target="blank">
            <img src="imgs/portadas/portada-Revista-BS-252.jpg" title="Revista BS #252" />
            <h4 class="f1 num-portada-edcr1">Revista BS #252</h4>
          </a>
        </div>

        <div class="portada-edcr1" id="portada-edcr1-5">
          <a href="" target="blank">
            <img src="imgs/portadas/portada-Revista-BS-251.jpg" title="Revista BS #251" />
            <h4 class="f1 num-portada-edcr1">Revista BS #251</h4>
          </a>
        </div>

        <div class="portada-edcr1" id="portada-edcr1-7">
          <a href="">
            <img src="imgs/portada-Revista-BS-mas.jpg" title="Más ediciones" />
            <h4 class="f1 num-portada-edcr1">Más ediciones</h4>
          </a>
        </div>
      </div>

      <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
      <script>
        var current = 0;
        var imagenes = new Array();

        $(document).ready(function () {
          var numImages = 6;
          if (numImages <= 3) {
            $('.edi1-flecha-der').css('display', 'none');
            $('.edi1-flecha-izq').css('display', 'none');
          }
          $('.edi1-flecha-izq').on('click', function () {
            if (current > 0) {
              current = current - 1;
            } else {
              current = numImages - 3;
            }
            $(".banda-edcr1").animate({ "left": -($('#portada-edcr1-' + current).position().left) }, 600);
            return false;
          });
          $('.edi1-flecha-izq').on('hover', function () {
            $(this).css('opacity', '0.5');
          }, function () {
            $(this).css('opacity', '1');
          });
          $('.edi1-flecha-der').on('hover', function () {
            $(this).css('opacity', '0.5');
          }, function () {
            $(this).css('opacity', '1');
          });
          $('.edi1-flecha-der').on('click', function () {
            if (numImages > current + 3) {
              current = current + 1;
            } else {
              current = 0;
            }
            $(".banda-edcr1").animate({ "left": -($('#portada-edcr1-' + current).position().left) }, 600);
            return false;
          });
        });
      </script>
  </section>

  <!-- BANNER HORIZONTAL 1CARRUSEL -->
  <?php include ('includes/bnr-oro-02.php') ?>

  <!-- 1EVENTOS -->
  <section id="ev1" class="contenedor">

    <p class="f2 indicador">EVENTOS Y ACTIVIDADES EN PRO DE LA SALUD</p>

    <div class="cont-ev1">
      <div class="card-ev1 card-ev1-grid">
        <a class="f1" href="ediciones/2021/11/258-congreso-oncologia-agp-osj.html">
          <div class="foto-card-ev1-bx">
            <img src="ediciones/2021/11/imgs/258-CONGRESO-ONCOLOGIA-AGP-OSJ.jpg">
          </div>
          <div class="cbz-ev1-bx">
            <h2 class="cbz-ev1 cbz-ev1-top">VII Congreso de Oncología AGP-OSJ</h2>
          </div>
        </a>
      </div>

      <div class="card-ev1">
        <a class="f1" href="ediciones/2021/10/257-caminata-san-jose.html">
          <div class="foto-card-ev1-bx">
            <img src="ediciones/2021/10/imgs/257-CAMINATA-SAN-JOSE-04.jpg">
          </div>
          <div class="cbz-ev1-bx">
            <h2 class="cbz-ev1">Prevenir: meta de la Caminata por la Vida</h2>
          </div>
        </a>
      </div>

        <div class="card-ev1">
          <a class="f1" href="ediciones/2021/10/257-congreso-oncologia-san-jose.html">
            <div class="foto-card-ev1-bx ">
              <img src="ediciones/2021/10/imgs/257-CONGRESO-ONCOLOGIA.jpg">
            </div>
            <div class="cbz-ev1-bx">
              <h2 class="cbz-ev1">2 Congreso de oncología</h2>
            </div>
          </a>
        </div>

        <div class="card-ev1">
          <a class="f1" href="#">
            <div class="foto-card-ev1-bx">
              <img src="ediciones/2020/10/imgs/245-Redaccion-Caminata-San-Jose-1.jpg">
            </div>
            <div class="cbz-ev1-bx">
              <h2 class="cbz-ev1">3 Primer transplante hepático de donador vivo</h2>
            </div>
          </a>
        </div>

        <div class="card-ev1">
          <a class="f1" href="#">
            <div class="foto-card-ev1-bx">
              <img src="ediciones/2020/10/imgs/245-Redaccion-Caminata-San-Jose-1.jpg">
            </div>
            <div class="cbz-ev1-bx">
              <h2 class="cbz-ev1">4 Carrera por la Salud</h2>
            </div>
          </a>
        </div>

        <div class="card-ev1" style="visibility: hidden;"></div>

    </div>
  </section>

  <!-- 1CORTO CARRUSEL -->
  <section id="corto1-carr" class="contenedor">
    <p class="f2 indicador">SALUD EN CORTO</p>
    <div id="cont-corto1-carr">
      <a href="#" class="corto-flecha-izq"><img src="imgs/flecha-izq-220h.png" /></a>
      <a href="#" class="corto-flecha-der"><img src="imgs/flecha-der-220h.png" /></a>

      <div class="banda-corto1-carr">

        <div class="card-corto1-carr" id="card-corto1-carr-0">
          <a class="f1" href="#">
            <figure>
              <img src="ediciones/2020/10/imgs/245-Redaccion-Caminata-San-Jose-1.jpg" />
              <figcaption>Insomnio, problema <br> de salud pública</figcaption>
            </figure>
          </a>
        </div>

        <div class="card-corto1-carr" id="card-corto1-carr-1">
          <a class="f1" href="#">
            <figure>
              <img src="ediciones/2020/10/imgs/245-Redaccion-Caminata-San-Jose-1.jpg" />
              <figcaption>Niños hiperactivos <br> y TDAH</figcaption>
            </figure>
          </a>
        </div>
        <div class="card-corto1-carr" id="card-corto1-carr-2">
          <a class="f1" href="#">
            <figure>
              <img src="ediciones/2020/10/imgs/245-Redaccion-Caminata-San-Jose-1.jpg" />
              <figcaption>Alergias según la región <br> del mundo</figcaption>
            </figure>
          </a>
        </div>
        <div class="card-corto1-carr" id="card-corto1-carr-3">
          <a class="f1" href="#">
            <figure>
              <img src="ediciones/2020/10/imgs/245-Redaccion-Caminata-San-Jose-1.jpg" />
              <figcaption>Mascotas y la limpieza <br> de la casa</figcaption>
            </figure>
          </a>
        </div>
        <div class="card-corto1-carr" id="card-corto1-carr-4">
          <a class="f1" href="#">
            <figure>
              <img src="ediciones/2020/10/imgs/245-Redaccion-Caminata-San-Jose-1.jpg" />
              <figcaption>Se fatiga muy rápido, <br> hora de un examen</figcaption>
            </figure>
          </a>
        </div>
        <div class="card-corto1-carr" id="card-corto1-carr-5">
          <a class="f1" href="#">
            <figure>
              <img src="ediciones/2020/10/imgs/245-Redaccion-Caminata-San-Jose-1.jpg" />
              <figcaption>Cáncer de mama: que tan <br> frecuente se autoexplora</figcaption>
            </figure>
          </a>
        </div>
        <div class="card-corto1-carr" id="card-corto1-carr-6">
          <a class="f1" href="#">
            <figure>
              <img src="ediciones/2020/10/imgs/245-Redaccion-Caminata-San-Jose-1.jpg" />
              <figcaption>Comida grasosa: <br> cuánto es mucho</figcaption>
            </figure>
          </a>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script>
      var current = 0;
      var imagenes = new Array();

      $(document).ready(function () {
        var numImages = 6;
        if (numImages <= 3) {
          $('.corto-flecha-der').css('display', 'none');
          $('.corto-flecha-izq').css('display', 'none');
        }
        $('.corto-flecha-izq').on('click', function () {
          if (current > 0) {
            current = current - 1;
          } else {
            current = numImages - 3;
          }
          $(".banda-corto1-carr").animate({ "left": -($('#card-corto1-carr-' + current).position().left) }, 600);
          return false;
        });
        $('.corto-flecha-izq').on('hover', function () {
          $(this).css('opacity', '0.5');
        }, function () {
          $(this).css('opacity', '1');
        });
        $('.corto-flecha-der').on('hover', function () {
          $(this).css('opacity', '0.5');
        }, function () {
          $(this).css('opacity', '1');
        });
        $('.corto-flecha-der').on('click', function () {
          if (numImages > current + 3) {
            current = current + 1;
          } else {
            current = 0;
          }
          $(".banda-corto1-carr").animate({ "left": -($('#card-corto1-carr-' + current).position().left) }, 600);
          return false;
        });
      });
    </script>
  </section>

    <!-- FOOTER -->
  <?php include ('includes/footer.php') ?>

  <script>
    var menu_enlaces = document.getElementById("menu-enlaces");
    function showMenu() {
      menu_enlaces.style.left = "0";
    }
    function hideMenu() {
      menu_enlaces.style.left = "-400px";
    }
  </script>
</body>
</html>