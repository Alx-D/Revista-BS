<!-- HEAD -->
<?php include('includes/head.php') ?>

<body>
  <?php include('includes/header.php') ?>

  <div class="popup">
    <button id="close">&times;</button>
    <a href="https://www.instagram.com/cdelnoroeste/?hl=es" target="_blank"><img src="banners/2022/Clinica-del-Noroeste-BS271.jpg" alt=""></a>
  </div>

  <script type="text/javascript">
    window.addEventListener("load", function() {
      setTimeout(
        function open(event) {
          document.querySelector(".popup").style.display = "block";
        },
        500
      )
    });
    document.querySelector("#close").addEventListener("click", function() {
      document.querySelector(".popup").style.display = "none";
    });
  </script>

  <!-- 1PORTADA -->
  <section id="portada" class="contenedor m-0a">

    <div class="prt-cont">

      <div class="prt-col-1">

        <div class="prt-rvst-bx hv-trnsY-2">
          <img src="ediciones/2022/271/BS271-portadas.gif" title="Revista BS #271">
          <div class="edcn-pdf-desk">
            <a class="f1 nonedw768 hv-txt-01" href="ediciones/2022/271/Revista-BS-271-Esp1.pdf" target="_blank">
              <h3>Especial 1</h3>
            </a>

            <a class="f1 nonedw768 hv-txt-01" href="ediciones/2022/271/Revista-BS-271-Esp2.pdf" target="_blank">
              <h3>Especial 2</h3>
            </a>
          </div>

          <div>
            <a class="f1 pdf-mob hv-txt-01" href="ediciones/2022/271/Revista-BS-271-Esp1-m.pdf" target="_blank">
              <h3>Especial 1</h3>
            </a>

            <a class="f1 pdf-mob hv-txt-01" href="ediciones/2022/271/Revista-BS-271-Esp2-m.pdf" target="_blank">
              <h3>Especial 2</h3>
            </a>
          </div>
        </div>
        <div class="prt-prev-bx">
          <p class="f1 prt-prev-mes">ENERO 2023</p>

          <p class="f1 prt-prev-blz">Edición especial 24 aniversario</p>
          <h1 class="f2 prt-prev-cbz">Nogales saludable</h1>

          <hr class="prt-prev-hr">
          <a class="hv-txt-01" href="ediciones/2022/271/271-editorial.php">
            <p class="f1 prt-prev-edit-ind">Editorial</p>
            <h2 class="f2 prt-prev-edit-cbz">Prioridades en salud para 2023</h2>
          </a>
        </div>
      </div>

      <div class="prt-video-cont">
        <div class="prt-video-bx">
          <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FRevistaBS%2Fvideos%2F982524315985330%2F&show_text=false&width=560&t=0" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
        </div>
        <p class="f1 prt-video-txt">
          Charla con la Dra. Elizabeth Amaya Sandoval <b>Hormonas en la mujer después de los 40 años</b>, cortesía de Celtara Medical & Professional Center.
        </p>
      </div>
  </section>

  <div class="clear"></div>

  <!-- BANNER PORTADA 1 -->
  <div class="prt-bnr-spc-tp"></div>
  <?php include('includes/bnr-hz-01.php') ?>
  <div class="prt-bnr-spc-bt"></div>

  <div class="clear"></div>

  <!-- 1EDICIONES -->
  <section id="ediciones" class="contenedor m-0a">

    <h3 class="f1">EDICIONES RECIENTES</h3>

    <div class="edcns-cont">
      <div class="edcn-bx hv-trnsY-4">
        <a class="nonedw768" href="ediciones/2022/270/Revista-BS-270.pdf" target="blank">
          <img src="ediciones/2022/270/BS270-portada.jpg" title="Revista BS #270" />
          <h4 class="f1 hv-txt-01">Revista BS #270</h4>
        </a>

        <a class="pdf-mob" href="ediciones/2022/270/Revista-BS-270-m.pdf" target="blank">
          <img src="ediciones/2022/270/BS270-portada.jpg" title="Revista BS #270" />
          <h4 class="f1 hv-txt-01">Revista BS #270</h4>
        </a>
      </div>

      <div class="edcn-bx hv-trnsY-4">
        <a class="nonedw768" href="ediciones/2022/269/Revista-BS-269.pdf" target="blank">
          <img src="ediciones/2022/269/BS269-portada.jpg" title="Revista BS #269" />
          <h4 class="f1 hv-txt-01">Revista BS #269</h4>
        </a>

        <a class="pdf-mob" href="ediciones/2022/269/Revista-BS-269-m.pdf" target="blank">
          <img src="ediciones/2022/269/BS269-portada.jpg" title="Revista BS #269" />
          <h4 class="f1 hv-txt-01">Revista BS #269</h4>
        </a>
      </div>

      <div class="edcn-bx hv-trnsY-4">
        <a class="nonedw768" href="ediciones/2022/268/Revista-BS-268.pdf" target="blank">
          <img src="ediciones/2022/268/BS268-portada.jpg" title="Revista BS #268" />
          <h4 class="f1 hv-txt-01">Revista BS #268</h4>
        </a>

        <a class="pdf-mob" href="ediciones/2022/268/Revista-BS-268-m.pdf" target="blank">
          <img src="ediciones/2022/268/BS268-portada.jpg" title="Revista BS #268" />
          <h4 class="f1 hv-txt-01">Revista BS #268</h4>
        </a>
      </div>

      <div class="edcn-bx hv-trnsY-4">
        <img src="ediciones/2022/267/BS267-portadas.gif" title="Revista BS #267">
        <div class="edcn-pdf-desk nonedw768">
          <a class="f1 hv-txt-01" href="ediciones/2022/267/Revista-BS-267-Esp1.pdf" target="_blank">
            <h4>#267 Especial 1</h4>
          </a>
          <a class="f1 hv-txt-01" href="ediciones/2022/267/Revista-BS-267-Esp2.pdf" target="_blank">
            <h4>#267 Especial 2</h4>
          </a>
        </div>

        <div class="pdf-mob">
          <a class="f1 hv-txt-01" href="ediciones/2022/267/Revista-BS-267-Esp1-m.pdf" target="_blank">
            <h4>#267 Especial 1</h4>
          </a>
          <a class="f1 hv-txt-01" href="ediciones/2022/267/Revista-BS-267-Esp2-m.pdf" target="_blank">
            <h4>#267 Especial 2</h4>
          </a>
        </div>
      </div>

      <div class="edcn-bx hv-trnsY-4">
        <a class="nonedw768" href="ediciones/2022/266/Revista-BS-266.pdf" target="blank">
          <img src="ediciones/2022/266/BS266-portada.jpg" title="Revista BS #266" />
          <h4 class="f1 hv-txt-01">Revista BS #266</h4>
        </a>

        <a class="pdf-mob" href="ediciones/2022/266/Revista-BS-266-m.pdf" target="blank">
          <img src="ediciones/2022/266/BS266-portada.jpg" title="Revista BS #266" />
          <h4 class="f1 hv-txt-01">Revista BS #266</h4>
        </a>
      </div>

      <div class="edcn-bx hv-trnsY-4">
        <a class="nonedw768" href="ediciones/2022/265/Revista-BS-265.pdf" target="blank">
          <img src="ediciones/2022/265/BS265-portada.jpg" title="Revista BS #265" />
          <h4 class="f1 hv-txt-01">Revista BS #265</h4>
        </a>

        <a class="pdf-mob" href="ediciones/2022/265/Revista-BS-265-m.pdf" target="blank">
          <img src="ediciones/2022/265/BS265-portada.jpg" title="Revista BS #265" />
          <h4 class="f1 hv-txt-01">Revista BS #265</h4>
        </a>
      </div>
    </div>
  </section>

  <div class="clear"></div>

  <!-- BANNER PORTADA 1 -->
  <div class="prt-bnr-spc-tp"></div>
  <?php include('includes/bnr-hz-02.php') ?>
  <div class="prt-bnr-spc-bt"></div>

  <div class="clear"></div>

  <!-- 1VIDEOS -->
  <section id="videos" class="videos-bk">

    <div class="contenedor m-0a">

      <h3 class="f1">ENTREVISTAS Y VIDEOS</h3>

      <div class="videos-cont">

        <div class="video-bx">
          <div class="video-bx-fb">
            <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FRevistaBS%2Fvideos%2F525258101972060%2F&show_text=false&width=560&t=0" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
          </div>
          <p class="f1">El Dr. Mario Alvarez nos habla que existen factores de riesgo para cáncer de colon que no se pueden modificar como antecedentes familiares, tener más de 50 años, enfermedad inflamatoria intestinal y desarrollar pólipos de colon, entérese de los factores que sí puede modificar para prevenir.</p>
        </div>

        <div class="video-bx">
          <div class="video-bx-fb">
            <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FRevistaBS%2Fvideos%2F731031431171760%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
          </div>
          <p class="f1">Con motivo del Día Nacional del odontólogo, Celtara Medical & Professional Center trae para usted una charla vía Facebook Live con Venezia Jordan de My Clinic Dental, quien compartirá las aplicaciones de la tecnología iTero 5D para tratamientos estéticos dentales.</p>
        </div>

        <div class="video-bx">
          <div class="video-bx-fb">
            <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FRevistaBS%2Fvideos%2F1381143148904762%2F&show_text=false&width=560&t=0" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
          </div>
          <div class="fb-video" data-href="https://www.facebook.com/RevistaBS/videos/1381143148904762/" data-width="auto" data-show-text="false">
          </div>
          <p class="f1">La enfermedad renal crónica (ERC) es un padecimiento que merma la vida del 10% de la población mundial. En vísperas del Día Mundial del Riñón, estaremos platicando en vivo con el nefrólogo Dr. Fernando Platt Soto sobre la campaña "Viviendo Bien con la Enfermedad Renal" organizada por la Sociedad Internacional de Nefrología.</p>
        </div>

        <div class="video-bx">
          <div class="video-bx-fb">
            <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FRevistaBS%2Fvideos%2F742883103021631%2F&show_text=false&width=560&t=0" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
          </div>
          <p class="f1">¿PCR, antígeno o de anticuerpos? ¿Cuál prueba es adecuada para diagnóstico? ¿En qué momento debe realizarse cada una? Son algunas de las dudas respecto a la pruebas de Covid-19.Resuelva éstas y otras preguntas en entrevista en vivo al Químico Biólogo Rhenzo Devora de Laboratorio BioClínico Martinez.</p>
        </div>

        <div class="video-bx">
          <div class="video-bx-fb">
            <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FRevistaBS%2Fvideos%2F198696195437472%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
          </div>
          <p class="f1">Conoce al equipo de la Clinica de Neurociencias-México-Cuba en Hermosillo. Ellos nos hablarán sobre la importancia del trabajo en conjunto de las especialidades de neurología, psiquiatría y psicología con el fin de diagnosticar con mayor precisión los problemas mentales y emocionales y así ayudar a prevenir problemas mayores.</p>
        </div>

        <div class="video-bx">
          <div class="video-bx-fb">
            <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FRevistaBS%2Fvideos%2F2431214323840889%2F&show_text=false&width=560&t=0" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
          </div>
          <p class="f1">Entérese de la importancia de la radiooncología para tratar el cáncer en la actualidad. Platicamos con la Dra. Claudia Montenegro, Radiooncologa.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <?php include('includes/footer.php') ?>
</body>

</html>