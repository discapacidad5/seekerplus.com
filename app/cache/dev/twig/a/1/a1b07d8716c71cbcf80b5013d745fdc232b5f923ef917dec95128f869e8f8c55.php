<?php

/* AdsmanagerBundle:Map:ads.html.twig */
class __TwigTemplate_a1b07d8716c71cbcf80b5013d745fdc232b5f923ef917dec95128f869e8f8c55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::app.html.twig", "AdsmanagerBundle:Map:ads.html.twig", 1);
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
App SeekerPlus
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
\t<div class=\"notify\" style=\"max-width: 100%; padding-top: 4rem; margin: 0rem ! important;margin-bottom: -1rem !important;\">
\t\t<span style=\"padding-top: 1.5rem;\" class=\"notify-icon mif-map2\"></span>
\t\t<span class=\"notify-title\">Direccion</span>
\t\t<span class=\"notify-text\" id=\"address\">&nbsp</span>
\t</div>
<div id=\"mapCanvas\" class=\"marginFrame\" style=\"height: 80% !important;overflow:hidden; width: 100% !important;\"></div>
</div>
<script>

setLatitude(";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "latitude", array()), "html", null, true);
        echo ");
setLongitude(";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "longitude", array()), "html", null, true);
        echo ");
initialize();

";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ads"]) ? $context["ads"] : $this->getContext($context, "ads")));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 36
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["field"], "catId", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["categori"]) {
                // line 37
                echo "\t\t";
                if (($this->getAttribute($context["field"], "images", array()) == "noImages.jpg")) {
                    // line 38
                    echo "\t\t\tsetLocationPlaces('";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categori"], "id", array()), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "adLatitude", array()), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "adLongitude", array()), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "adHeadline", array()), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/noImages.jpg"), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "adPhone", array()), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "adAddress", array()), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_ad", array("idAd" => $this->getAttribute($context["field"], "id", array()), "idCity" => $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "id", array()))), "html", null, true);
                    echo "');
\t\t";
                } else {
                    // line 40
                    echo "\t\t\tsetLocationPlaces('";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categori"], "id", array()), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "adLatitude", array()), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "adLongitude", array()), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "adHeadline", array()), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ids/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "images", array()), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "adPhone", array()), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "adAddress", array()), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_ad", array("idAd" => $this->getAttribute($context["field"], "id", array()), "idCity" => $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "id", array()))), "html", null, true);
                    echo "');
\t\t";
                }
                // line 42
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categori'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
</script>
</div>
";
    }

    // line 48
    public function block_footer($context, array $blocks = array())
    {
        // line 49
        echo "<div style=\"padding: 1rem;margin-top: -8rem;margin-left: -1.5rem;\" data-role=\"dialog\" id=\"cities\" data-close-button=\"true\" data-overlay=\"true\" data-overlay-color=\"op-dark\">
    <h2><span class=\"mif-earth mif\"></span> Seleccione Una Ciudad</h2>
    <p>
       \t    <div class=\"cell\">
\t\t\t   <select id=\"city\" class=\"js-select\" data-placeholder=\"Ciudades\" style=\"width: 13rem;\" onchange=\"location = this.options[this.selectedIndex].value;\">
\t\t\t      ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : $this->getContext($context, "cities")));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 55
            echo "\t\t\t\t      ";
            if (($this->getAttribute($context["field"], "parentId", array()) == 0)) {
                // line 56
                echo "\t\t\t\t\t  ";
            } else {
                echo "\t
\t\t\t\t\t\t   \t";
                // line 57
                if (($this->getAttribute($context["field"], "title", array()) == $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "title", array()))) {
                    // line 58
                    echo "\t\t\t\t\t       \t\t<option value='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ads_city", array("city" => $this->getAttribute($context["field"], "id", array()))), "html", null, true);
                    echo "' selected>";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["field"], "alias", array())), "html", null, true);
                    echo "</option>
\t\t\t\t\t        ";
                } else {
                    // line 60
                    echo "\t\t\t\t\t            <option value='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ads_city", array("city" => $this->getAttribute($context["field"], "id", array()))), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["field"], "alias", array())), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t   \t";
                }
                // line 62
                echo "\t\t\t\t\t   ";
            }
            echo "\t
\t\t\t       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "\t\t\t   </select>
\t\t\t</div>
    </p>
</div> 
<script>
function showCitiesDialog(){
    var dialog = \$(\"#cities\").data('dialog');
    dialog.open();
}
\$(function(){
    \$(\"#city\").select2({
        placeholder: \"Ciudades\",
        allowClear: true
      });
  });
  
function getButtonContent(button){
\t  if(button)
\t\t  \$(\"#locationButton\").html('<a onclick=\"getMyLocation();getButtonContent(false)\" class=\"app-bar-element\" style=\"margin-left: 12%\"><span id=\"toggle-tiles-dropdown2\" class=\"mif-location mif-2x\"></span></a>');
\t  else
\t\t  \$(\"#locationButton\").html('<a onclick=\"stopLocation();getButtonContent(true)\" class=\"app-bar-element\" style=\"margin-left: 12%\"><span id=\"toggle-tiles-dropdown2\" class=\"mif-stop mif-2x\"></span></a>'); 
}  
</script>
<footer>
<div style=\"width: 100%; position: fixed; bottom: 0px; left: 0px; z-index: 100;\" class=\"app-bar drop-up\" data-role=\"appbar\">
\t<a class=\"app-bar-element\">
    \t<span id=\"toggle-tiles-dropdown2\" class=\"mif-apps mif-2x\"></span>
           <div class=\"app-bar-drop-container\" data-role=\"dropdown\" data-toggle-element=\"#toggle-tiles-dropdown2\" data-no-close=\"false\" style=\"width: 324px; display: none;\">
              <div class=\"tile-container bg-white fg-black\">
              \t\t";
        // line 93
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 94
            echo "\t\t\t\t      ";
            if (($this->getAttribute($context["field"], "parent", array()) == 0)) {
                // line 95
                echo "\t\t\t\t\t  <div onclick=\"location='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_category", array("idCategory" => $this->getAttribute($context["field"], "id", array()), "idCity" => $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "id", array()), "latitude" => 0, "longitude" => 0, "range" => 0)), "html", null, true);
                echo "';\" class=\"tile-small\" style=\"background: rgb(255, 255, 255) none repeat scroll 0% 0%;\">
\t\t\t\t\t    <div class=\"tile-content iconic\">
\t\t\t\t       \t\t<img style=\"width: 100%;height: 70%;\" alt=\"\" src=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("../"), "html", null, true);
                echo "images/com_adsmanager/categories/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()));
                echo "cat.png\">
\t\t\t\t       \t<p class=\"pCategories\" style=\"margin-top: -1.1rem;text-align: center;\">";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "html", null, true);
                echo "</p>
\t\t\t\t       \t</div>
              \t\t  </div>
\t\t\t\t\t  ";
            } else {
                // line 101
                echo "\t 
\t\t\t\t       ";
            }
            // line 103
            echo "\t\t\t       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "            </div>
          </div>
  \t</a>
   <div id=\"locationButton\">
\t   <a onclick=\"getMyLocation();getButtonContent(false)\" class=\"app-bar-element\" style=\"margin-left: 12%\">
\t    \t<span id=\"toggle-tiles-dropdown2\" class=\"mif-location mif-2x\"></span>
\t   </a>
   </div>
      <a class=\"app-bar-element\" style=\"margin-left: 12%\">
    \t<span id=\"toggle-tiles-dropdown2\" class=\"mif-calendar mif-2x\"></span>
   </a>
<div style=\"display: none;\" class=\"app-bar-pullbutton automatic\"></div><div class=\"clearfix\" style=\"width: 0;\"></div><nav style=\"display: none;\" class=\"app-bar-pullmenu hidden flexstyle-app-bar-menu\"><ul class=\"app-bar-pullmenubar hidden app-bar-menu\"></ul></nav></div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "AdsmanagerBundle:Map:ads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 104,  292 => 103,  288 => 101,  281 => 98,  275 => 97,  269 => 95,  266 => 94,  262 => 93,  231 => 64,  222 => 62,  214 => 60,  206 => 58,  204 => 57,  199 => 56,  196 => 55,  192 => 54,  185 => 49,  182 => 48,  175 => 44,  165 => 42,  140 => 40,  118 => 38,  115 => 37,  110 => 36,  106 => 35,  100 => 32,  96 => 31,  83 => 21,  79 => 20,  76 => 19,  69 => 16,  65 => 15,  60 => 14,  57 => 13,  49 => 10,  41 => 6,  33 => 2,  11 => 1,);
    }
}
