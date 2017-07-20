<?php
function CarregaAplicacio()
{
?>


<header class="header" role="banner">

<!-- #access -->




<!-- Language  -->







 <nav class="hidden-md  hidden-lg">
   <div class="header-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="ico hamburguer" aria-hidden="true"></span>
            <span class="sr-only">Prem per desplegar el menú de  Facultat de Medicina</span>
          </button>
          
           
           
            
        
           
                <a href="htt://uab.cat">
                  <span class="ico logo" aria-hidden="true"></span>
                  <span class="sr-only">U A B</span>

                </a>
           
            
            
           
              
                  
                    <span class="header-title"><a href="index.php">Institut de Neurociències UAB</a></span>
                  
               
          
          
        </div>
      </div>
   </div>
 </nav>

<nav id="navbar" class="navbar-collapse collapse" role="navigation">
    <div class="header-top2">
      <div class="container" style="margin:none;">
        <div class="row access">

          
            
            
            
                 
                    
                    
                        <div class="col-md-4 hidden-xs hidden-sm">
                          <h1 class="page-title" role="heading" aria-level="1"><a href="index.php">Institut de Neurociències UAB</a></h1>
                    
                    </div>
                
            
          
              <div class="search-uab" role="search">
              
                <div id="custom-search-input">
                    <form id="searchform" method="get" action='http://www.uab.es/cerca.html'>
                        <div class="input-group">
                        <label class="sr-only" for="cercaweb">Cerca</label>
                            <input id="cercaweb" type="text" class="form-control input-lg" placeholder="Cerca" title="Introdueix el text de cerca"  alt="Introdueix el text de cerca" name="query" id="query" accesskey="i" />
                            <span class="input-group-btn">
                                <button id="submit" class="btn btn-info btn-lg" alt="Prem el botó per iniciar la cerca" type="submit" aria-label="Prem el botó per iniciar la cerca" value="Search">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                </button>
                            </span>
                        </div>
                   </form> 
                </div>
    
                <div class="directori">
                
                    <span><a href="https://siastd.uab.es/pcde/" alt="Directori de la UAB" class="bullet">Directori<span class="ico arrow" aria-hidden="true"></span></a></span>
                    
                </div>
                
                
                <ul class="idiomes">
                    <li><a href='' lang="es" name='Castellano'>Castellano</a></li>
                    <li class="last-child"><a href='' lang="en" name='English'>English</a></li>
                </ul>
            
                <ul class="xarxes-socials">
                    <!-- Display results -->
                    <li>
                        <a href="https://www.facebook.com/INcuab" target="_BLANK" title="Facebook">
                            <span class="ico facebook" aria-hidden="true"></span>
                            <span class="sr-only">Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/INC_UAB" target="_BLANK" title="Twitter">
                            <span class="ico twitter" aria-hidden="true"></span>
                            <span class="sr-only">Twitter</span>
                        </a>
                    </li>                    
                    <li>
                        <a href="http://www.scopus.com/affil/profile.url?afid=60104667&offset=1&sid=171A41E8C797E54E2A2A8F174996C47A.WlW7NKKC52nnQNxjqAQrlA%3a120&origin=AffiliationNamesList&txGid=171A41E8C797E54E2A2A8F174996C47A.WlW7NKKC52nnQNxjqAQrlA%3a14 " target="_blank"><img src="img/scopus.jpg" style="width:30px; border:none;" /></a>
                    </li>
                    <li>
                        <a href="https://ddd.uab.cat/collection/inc?ln=ca" target="_blank"><img src="img/ddd_logo.jpg" style="height:30px; border:none;" /></a>
                    </li>                                        
                </ul>
                
                
            </div>
        </div>
      </div>
    </div>






<!-- /#access -->

<!-- #Cabecera -->


<!-- #container capÃÂ§alera -->
<div class="container">
    <?php MostraMenuLateralDerecho(); ?>

    <div class="col-md-3">
        <a href="http://www.uab.cat/">
            <span class="ico logo hidden-xs hidden-sm" aria-hidden="true"></span>
            <span class="sr-only">U A B</span>
        </a>

    </div>
            
            
        
    <div class="col-md-9">

        <nav id="navegacio" aria-label="Vés a la navegació de Facultat de Medicina" role="navigation">
            <ul class="nav navbar-nav navbar-right"><?php include ("PHP/MenuSCarregaDirecte.php"); ?> </ul>
        </nav>
    </div>
    <div class="clear"></div>
</div>

</nav>
</header> 






    

    <div id="slide" class="container slide" >
        <div class="carousel-inner">
            <?php MostraIMGHome();?>
        </div>        
    </div>
    

    
    <section role="main" class="container margin-top" id="main">
    <?php 
                MostraHome();
                MostraContingutPages();         
                //MostraDirectori();            
                MostraPublicacions();    

            ?>
        </section>

 <section id="mapa" class="hidden-sm hidden-xs"> 
<h2 class="sr-only" aria-level="2" role="heading">Mapa web</h2>
<div class="container">
    <div class="row">
        <?php include ("PHP/MapaWebMostra.php"); ?>
    </div>

    </div>
    
</section>

<footer class="footer" role="contentinfo"> 
<div class="container">
    <div class="row">

        
             <div class="col-md-4">
                <a href="http://www.uab.cat/cei" class="logo col-sm-6">
                 <span class="ico logo-cei" aria-hidden="true"></span>
                 <span class="sr-only">Campus d'Excel·lència Internacional</span>
                </a>
                <a href="http://www.uab.cat/web/research/itineraries/uab-research/euraxess-uab-1345673587088.html" class="logo col-sm-6">
                 <span class="ico hrexcellence" aria-hidden="true"></span>
                 <span class="sr-only">HR Excellence in Research - Euraxess</span>
                </a>
              </div>         
        
    
        <div class="col-md-8">
            <div class="credits">
                <ul class="legal">
               
               
               
                    
                
                
                
                
                        <!--  No se ha recibido la lista de links: ERROR= -10005--> 
                </ul>
                
                    
                    
                    
                              
                    
                    
                    
                    
                <p class="drets">
                    © 2017 <a href="http://crd.uab.cat">Centre de Recursos Docents</a>  - &nbsp;
                </p>
            </div>
        </div>
    </div>

    
    
    
    
</div> 
</footer>




<?php
}
?>