<?php

/* AdsmanagerBundle:Ads:editAds.html.twig */
class __TwigTemplate_333dd85c20c7e0a452a4d6505528207481d3796eafb39393caffa1a50cf70045 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::app.html.twig", "AdsmanagerBundle:Ads:editAds.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::app.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " 
Modificar ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "adHeadline", array()), "html", null, true);
        echo "
";
    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        echo " 

";
    }

    // line 10
    public function block_keywords($context, array $blocks = array())
    {
        echo " 

";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/myJs.js"), "html", null, true);
        echo "\"></script>
 <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/select2.min.js"), "html", null, true);
        echo "\"></script>
 <script src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyC4Pta07pYlzbICVniGLYta4MLCrUrXrHE&sensor=false&libraries=geometry&v=3.4\" type=\"text/javascript\"></script>
 ";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/maps.js"), "html", null, true);
        echo "\"></script>
<div class=\"container page-content fg-dark\" style=\"padding: 0.5rem;\">

";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("enctype" => "multipart/form-data")));
        echo "
  <div>
    <div id=\"wizard\" class=\"wizard\"
                 data-role=\"wizard\"
                 data-buttons='{\"next\": {\"show\": \"true\", \"title\": \"Siguiente\", \"cls\": \"success \"}, 
                 \t\t\t\t\"prior\": {\"show\": \"true\", \"title\": \"Atras\", \"cls\": \"primary\"}}'
                 data-stepper-clickable=\"false\">
     <div class=\"steps\">
       <div class=\"step\">
       \t\t    <div class=\"cell\" style=\"margin-top: -1rem;\">
\t\t      <div class=\"notify\" style=\"max-width: 100%;\">
\t\t        <span class=\"notify-icon mif-map\"></span>
\t\t        <span class=\"notify-title\">Direccion de <b>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "adHeadline", array()), "html", null, true);
        echo "</b></span>
\t\t        <span class=\"notify-text\" id=\"address\"></span>
\t\t      </div>
\t\t      
\t\t    </div>
       \t\t\t<div id=\"mapCanvas\" class=\"marginFrame\" style=\"height: 15rem !important;overflow:hidden; width: 100% !important;\"></div>
\t\t\t  \t<div id=\"locationButton\">
\t\t\t  \t\t<a onclick=\"getMyLocation();getButtonContent(false)\" class=\"button loading-pulse lighten primary\" style=\"padding-top: 0.5rem;\">
\t\t\t  \t\t<span class=\"mif-location\"></span> Mi Ubicacion Actual</a>
\t\t\t  \t</div>
\t\t\t  \t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adLatitude", array()), 'widget', array("attr" => array("style" => "display:none")));
        echo " 
\t\t  \t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adLongitude", array()), 'widget', array("attr" => array("style" => "display:none")));
        echo "
\t\t  \t\t
\t\t  \t\t<button style=\"float: right;\" onclick=\"showMessageHelpDialog('one');\" class=\"btn-help cycle-button medium-button\" 
\t\t  \t\ttype=\"button\">?</button>
       </div>
       <div class=\"step\">
       \t       <div class=\"cell\">
\t\t\t   <select id=\"categories\" class=\"js-select\" data-placeholder=\"Seleccione Categoria\" style=\"width: 13rem;\">
\t\t\t   \t<option></option>
\t\t\t      ";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 57
            echo "\t\t\t\t      ";
            if (($this->getAttribute($context["field"], "parent", array()) == 0)) {
                // line 58
                echo "\t\t\t\t\t  ";
            } else {
                echo "\t 
\t\t\t\t\t     <option value='";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()));
                echo "'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()));
                echo "</option>
\t\t\t\t      ";
            }
            // line 61
            echo "\t\t\t       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "\t\t\t   </select>
\t\t\t</div>
\t    \t<br>
\t\t  ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "catid", array()), 'widget', array("attr" => array("style" => "display:none")));
        echo "
\t\t  <div class=\"input-control select\" style=\"margin-bottom: 2rem;\">
\t\t ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adLocation", array()), 'widget');
        echo "
\t\t  </div>
\t\t   ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adHeadline", array()), 'row');
        echo "
\t\t  ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adPhone", array()), 'row');
        echo "
\t\t  ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adAddress", array()), 'row');
        echo "
\t\t  
\t\t  <button style=\"float: right;\" onclick=\"showMessageHelpDialog('two');\" class=\"btn-help cycle-button medium-button\" 
\t\t  \t\ttype=\"button\">?</button>
       </div>
       <div class=\"step\">
\t\t  <div class=\"cell\">
\t\t     <label>Imagen</label><br>
\t\t       <div class=\"input-control file\" data-role=\"input\">
\t\t           <input id=\"ads_image\" name=\"imagen\" type=\"file\" onchange=\"readURL(this,'newImages');\" readonly=\"readonly\">
\t\t           <button type=\"button\" class=\"button\"><span class=\"mif-folder\"></span></button>
\t\t       </div>
\t\t  </div>
\t\t  <div class=\"cell\">
\t\t    ";
        // line 85
        if (((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")) == "noImages.jpg")) {
            // line 86
            echo "\t\t    \t<img id=\"newImages\" class=\"marginFrame\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/noImages.jpg"), "html", null, true);
            echo "\">
\t\t    ";
        } else {
            // line 88
            echo "\t\t    \t<img id=\"newImages\" class=\"marginFrame\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ids/"), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "html", null, true);
            echo "\">
\t\t    ";
        }
        // line 90
        echo "\t\t  </div><br>
\t\t  ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adKeywords", array()), 'row');
        echo "
\t\t  <button style=\"float: right;\" onclick=\"showMessageHelpDialog('three');\" class=\"btn-help cycle-button medium-button\" 
\t\t  \t\ttype=\"button\">?</button>
       </div>
       <div class=\"step\">
\t\t  ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adText", array()), 'row');
        echo "
\t\t    <h5>Horario de Atencion</h5>
\t\t  <div class=\"cell\">
\t\t\t  <div class=\"input-control select\" style=\"min-width: 5rem;\">
\t\t\t  ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adAttentionHoursInit", array()), 'widget');
        echo "
\t\t\t  </div>
\t\t\t  <span style=\"margin: 1rem;\">A</span>
\t\t\t  <div class=\"input-control select\" style=\"min-width: 5rem;\">
\t\t\t  ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adAttentionHoursFinish", array()), 'widget');
        echo "
\t\t\t  </div>
\t\t  </div>
\t\t  <div class=\"cell\">
\t\t     <h5>Dias de Atencion</h5>
\t\t\t  <div class=\"input-control select\" style=\"min-width: 5rem;\">
\t\t\t  ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adAttentiondaysInit", array()), 'widget');
        echo " 
\t\t\t  </div> 
\t\t\t  <span style=\"margin: 1rem;\">A</span>
\t\t\t  <div class=\"input-control select\" style=\"min-width: 5rem;\">
\t\t\t  ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adAttentiondaysFinish", array()), 'widget');
        echo "  
\t\t\t  </div>
\t\t  </div>
\t\t  <div class=\"cell\">
\t\t  <label class=\"input-control checkbox\">
                            <input type=\"checkbox\" required>
                            <span class=\"check\"></span>
                            <span class=\"caption\">Acepto las <a href=\"";
        // line 121
        echo $this->env->getExtension('routing')->getPath("condicionesDeUso");
        echo "\" target=\"_blank\">Condiciones Del Servicio</a> y la <a href=\"";
        echo $this->env->getExtension('routing')->getPath("politicasDePrivacidad");
        echo "\" target=\"_blank\">\t Politica de Privacidad</a> de SeekerPlus</span>
           </label>
           </div>
\t\t <br>
\t\t\t";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Guardar", array()), 'widget');
        echo "
\t\t <br>
\t\t <button style=\"float: right;\" onclick=\"showMessageHelpDialog('four');\" class=\"btn-help cycle-button medium-button\" 
\t\t  \t\ttype=\"button\">?</button>
       </div>
     </div>
  </div>
</div>
";
        // line 133
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
<script>
  \$('#categories').val(\$(\"#seekerplus_adsmanagerbundle_adsmanagerads_catid\").val());
  setLatitude(";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "adLatitude", array()), "html", null, true);
        echo ");
  setLongitude(";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "adLongitude", array()), "html", null, true);
        echo ");
  initialize();
  setDefaultMarkerPosition();
  map.setZoom(16);
  circle.setVisible(true);
  
  \$(function(){
    \$(\"#categories\").select2({
        placeholder: \"Seleccione Categoria\",
        allowClear: true
      });
  });
  
  \$('[name=categories]').val(\"0\");

  \$(function(){
\t    \$(\"#seekerplus_adsmanagerbundle_adsmanagerads_adLocation\").select2({
\t        allowClear: true
\t      });
\t  });
  
  function getButtonContent(button){
\t  if(button)
\t\t  \$(\"#locationButton\").html('<a onclick=\"getMyLocation();getButtonContent(false);\" class=\"button loading-pulse lighten primary\" style=\"padding-top: 0.5rem;\">\t<span class=\"mif-location\"></span> Mi Ubicacion Actual</a>');
\t  else
\t\t  \$(\"#locationButton\").html('<a onclick=\"stopLocation();getButtonContent(true);\" class=\"button loading-stop alert primary\" style=\"padding-top: 0.5rem;\">\t<span class=\"mif-stop\"></span> Detener</a>'); 
  }
  
  \$('#categories').on('change', function() {
\t\$(\"#seekerplus_adsmanagerbundle_adsmanagerads_catid\").val(this.value);
  });
  
  \$( document ).on( 'click', '.btn-help', function () {
\t  
\t});
\t
  function showMessageHelpDialog(id){
      var dialog = \$(\"#\"+id).data('dialog');
      dialog.open();
  }

</script> 
<div data-role=\"dialog\" id=\"one\" data-close-button=\"true\">
    <h1>Ubicacion del Anuncio en El Mapa</h1>
    <p>
        Selecciona el lugar donde se ubicara tu anuncio en el mapa , para ello debes dar un click en la ubicacion actual o puedes seleccionar un lugar en el mapa.
    </p>
</div> 
<div data-role=\"dialog\" id=\"two\" data-close-button=\"true\">
    <h1>Informacion Basica</h1>
    <p>
        Selecciona la categoria que se acomode a la actividad , el titulo ,telefono y direccion del Anuncio.
    </p>
</div>
<div data-role=\"dialog\" id=\"three\" data-close-button=\"true\">
    <h1>Imagen Anuncio</h1>
    <p>
        Selecciona la imagen de tu Anuncio , debes seleccionar la imagen en formato png,jpg,jpge.
        <br><br>Tambien escribe las palabras con la que deseas que encuentren el anuncio en el buscador.
    </p>
</div>
<div data-role=\"dialog\" id=\"four\" data-close-button=\"true\">
    <h1>Informacion General</h1>
    <p>
        Ingresa la descripcion de tu anuncio ,asi como el horario de atencion y los dias de atencion.
    </p>
</div>
</div>
</div>
";
    }

    // line 207
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AdsmanagerBundle:Ads:editAds.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 207,  299 => 137,  295 => 136,  289 => 133,  278 => 125,  269 => 121,  259 => 114,  252 => 110,  243 => 104,  236 => 100,  229 => 96,  221 => 91,  218 => 90,  209 => 88,  203 => 86,  201 => 85,  184 => 71,  180 => 70,  176 => 69,  171 => 67,  166 => 65,  161 => 62,  155 => 61,  148 => 59,  143 => 58,  140 => 57,  136 => 56,  124 => 47,  120 => 46,  107 => 36,  92 => 24,  86 => 21,  82 => 20,  79 => 19,  72 => 16,  68 => 15,  63 => 14,  60 => 13,  52 => 10,  44 => 6,  38 => 3,  33 => 2,  11 => 1,);
    }
}