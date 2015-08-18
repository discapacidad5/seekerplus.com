<?php

/* AdsmanagerBundle:Map:ads.html.twig */
class __TwigTemplate_d762b9d4b4a8900a9728bbee9046a67106e01c0bc9db9d879c597035793fe461 extends Twig_Template
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
<div id=\"mapCanvas\" class=\"marginFrame\" style=\"height: 100% !important;overflow:hidden; width: 100% !important;\"></div>
</div>
<script>

setLatitude(";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : null), "latitude", array()), "html", null, true);
        echo ");
setLongitude(";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : null), "longitude", array()), "html", null, true);
        echo ");
initialize();

";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ads"]) ? $context["ads"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 36
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["field"], "catId", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["categori"]) {
                // line 37
                echo "\t\tsetLocationPlaces('";
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
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "images", array()), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "adPhone", array()), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "adAddress", array()), "html", null, true);
                echo "');
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categori'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
</script>
</div>
";
    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        // line 45
        echo "<div style=\"padding: 1rem;margin-top: -8rem;margin-left: -1.5rem;\" data-role=\"dialog\" id=\"cities\" data-close-button=\"true\" data-overlay=\"true\" data-overlay-color=\"op-dark\">
    <h2><span class=\"mif-earth mif\"></span> Seleccione Una Ciudad</h2>
    <p>
       \t    <div class=\"cell\">
\t\t\t   <select id=\"city\" class=\"js-select\" data-placeholder=\"Ciudades\" style=\"width: 13rem;\" onchange=\"location = this.options[this.selectedIndex].value;\">
\t\t\t      ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 51
            echo "\t\t\t\t      ";
            if (($this->getAttribute($context["field"], "parentId", array()) == 0)) {
                // line 52
                echo "\t\t\t\t\t  ";
            } else {
                echo "\t
\t\t\t\t\t\t   \t";
                // line 53
                if (($this->getAttribute($context["field"], "title", array()) == $this->getAttribute((isset($context["location"]) ? $context["location"] : null), "title", array()))) {
                    // line 54
                    echo "\t\t\t\t\t       \t\t<option value='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ads_city", array("city" => $this->getAttribute($context["field"], "id", array()))), "html", null, true);
                    echo "' selected>";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["field"], "alias", array())), "html", null, true);
                    echo "</option>
\t\t\t\t\t        ";
                } else {
                    // line 56
                    echo "\t\t\t\t\t            <option value='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ads_city", array("city" => $this->getAttribute($context["field"], "id", array()))), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["field"], "alias", array())), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t   \t";
                }
                // line 58
                echo "\t\t\t\t\t   ";
            }
            echo "\t
\t\t\t       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
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
  
</script>
<footer>
<div style=\"width: 100%; position: fixed; bottom: 0px; left: 0px; z-index: 100;\" class=\"app-bar drop-up\" data-role=\"appbar\">
\t<a class=\"app-bar-element\">
    \t<span id=\"toggle-tiles-dropdown2\" class=\"mif-apps mif-2x\"></span>
           <div class=\"app-bar-drop-container\" data-role=\"dropdown\" data-toggle-element=\"#toggle-tiles-dropdown2\" data-no-close=\"false\" style=\"width: 324px; display: none;\">
              <div class=\"tile-container bg-white fg-black\">
              \t\t";
        // line 83
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 84
            echo "\t\t\t\t      ";
            if (($this->getAttribute($context["field"], "parent", array()) == 0)) {
                // line 85
                echo "\t\t\t\t\t  <div class=\"tile-small\" style=\"background: rgb(255, 255, 255) none repeat scroll 0% 0%;\">
\t\t\t\t\t    <div class=\"tile-content iconic\">
\t\t\t\t       \t\t<img onclick=\"location='";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_category", array("idCategory" => $this->getAttribute($context["field"], "id", array()), "idCity" => $this->getAttribute((isset($context["location"]) ? $context["location"] : null), "id", array()), "order" => "none", "range" => 10)), "html", null, true);
                echo "';\"  style=\"width: 100%;height: 70%;\" alt=\"\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("../"), "html", null, true);
                echo "images/com_adsmanager/categories/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()));
                echo "cat.png\">
\t\t\t\t       \t<p class=\"pCategories\" style=\"margin-top: -1.1rem;text-align: center;\">";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "html", null, true);
                echo "</p>
\t\t\t\t       \t</div>
              \t\t  </div>
\t\t\t\t\t  ";
            } else {
                // line 91
                echo "\t 
\t\t\t\t       ";
            }
            // line 93
            echo "\t\t\t       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "            </div>
          </div>
  \t</a>
 \t<a class=\"app-bar-element\" style=\"margin-left: 12%\">
    \t<span id=\"toggle-tiles-dropdown2\" class=\"mif-map mif-2x\"></span>
   </a>
   <a onclick=\"getMyLocation();\" class=\"app-bar-element\" style=\"margin-left: 12%\">
    \t<span id=\"toggle-tiles-dropdown2\" class=\"mif-location mif-2x\"></span>
   </a>
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
        return array (  259 => 94,  253 => 93,  249 => 91,  242 => 88,  234 => 87,  230 => 85,  227 => 84,  223 => 83,  198 => 60,  189 => 58,  181 => 56,  173 => 54,  171 => 53,  166 => 52,  163 => 51,  159 => 50,  152 => 45,  149 => 44,  142 => 40,  115 => 37,  110 => 36,  106 => 35,  100 => 32,  96 => 31,  83 => 21,  79 => 20,  76 => 19,  69 => 16,  65 => 15,  60 => 14,  57 => 13,  49 => 10,  41 => 6,  33 => 2,  11 => 1,);
    }
}
