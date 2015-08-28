<?php

/* AdsmanagerBundle:Categories:show.html.twig */
class __TwigTemplate_8660066885a5042e65e7c148bb198e9202b3b62d694a9b465d48e3307953f710 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::app.html.twig", "AdsmanagerBundle:Categories:show.html.twig", 1);
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
";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "alias", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/select2.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        $this->displayParentBlock("content", $context, $blocks);
        echo "


<div class=\"container page-content fg-dark\" style=\"padding: 0.5rem;margin-bottom: 2rem;\">
<h2>
\t<ul class=\"t-menu horizontal compact\" style=\"box-shadow: 0px 0px 20px 0px transparent ! important;\">
\t\t\t<li style=\"height: 3rem; width: 3rem;\" class=\"\"><a style=\"width: 2.9rem; height: 2.9rem;\" href=\"#\" class=\"dropdown-toggle\"><span style=\"width: 1rem;\" class=\"icon mif-sort-asc mif-3x\"></span></a>
\t\t    \t<ul style=\"display: none;\" class=\"t-menu compact\" data-role=\"dropdown\">
\t\t        \t<li><a style=\"width: 3rem; height: 3rem;\" onclick=\"getLocation();\"><span class=\"icon mif-meter\"></span></a></li>
\t\t            <li><a style=\"width: 3rem; height: 3rem;\" href=\"#\"><span class=\"icon mif-star-full\"></span></a></li>
\t\t        </ul>
\t\t    </li>
\t</ul>
<span style=\"margin-left: 2rem;\"> ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "</span>
</h2><br>
";
        // line 33
        $context["counter"] = 0;
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ads"]) ? $context["ads"] : $this->getContext($context, "ads")));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 35
            echo "\t<div class=\"cell\">
\t\t<div class=\"listview\">
\t    \t<div style=\"border: 1px solid #EAEAEA;width: 100%;height: auto;position: relative;display: block;cursor: pointer;
color: inherit;margin: 0px 0px 10px;\"href=\"#\" class=\"list\">
\t         <a style=\"margin-left: -3rem;padding: 10px 10px 10px 0rem;position: relative;display: block;color: inherit;\" 
\t         class=\"list-content\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_ad", array("idAd" => $this->getAttribute($this->getAttribute($context["field"], 0, array()), "id", array()), "idCity" => $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "id", array()))), "html", null, true);
            echo "\">
\t            ";
            // line 41
            if (($this->getAttribute($this->getAttribute($context["field"], 0, array()), "images", array()) == "noImages.jpg")) {
                // line 42
                echo "\t            \t<img style=\"margin-left: 1rem;display: block;width: 56px;height: 56px;font-size: 40px;float: left;margin-right: 10px;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/noImages.jpg"), "html", null, true);
                echo "\" class=\"icon\">
\t\t\t\t";
            } else {
                // line 44
                echo "\t\t\t\t    <img style=\"margin-left: 1rem;display: block;width: 56px;height: 56px;font-size: 40px;float: left;margin-right: 10px;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ids/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], 0, array()), "id", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], 0, array()), "images", array()), "html", null, true);
                echo "\" class=\"icon\">
\t\t\t\t";
            }
            // line 46
            echo "\t         <div class=\"data\">
\t         \t<span style=\"font-size: 14px;line-height: 16px;margin: 0px;padding: 0px;display: block;overflow: hidden;text-overflow: ellipsis;\" class=\"list-title\"><b>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], 0, array()), "adHeadline", array()));
            echo "</b></b></span>
\t         \t<span style=\"font-size: 11px;line-height: 14px;margin: 0px;padding: 0px;display: block;overflow: hidden;text-overflow: ellipsis;\" class=\"list-remark\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], 0, array()), "adText", array()));
            echo "</span>
\t         \t<span class='rating small'data-score-title='Valoracion : ' data-role='rating' data-static='true'
        \t\t\tdata-size='small' data-value='3' data-on-rate='doNothing'>
        \t\t</span>
\t         </div>
\t         \t";
            // line 53
            if ($this->getAttribute($context["field"], "distance", array(), "any", true, true)) {
                // line 54
                echo "        \t\t   <span style=\"font-size: 12px;line-height: 14px;margin: 0px 0px 0px 1rem;padding: 0px;display: block;overflow: hidden;
        \t\t   text-overflow: ellipsis;\" class=\"list-remark\"><b>
        \t\t   ";
                // line 56
                if (($this->getAttribute($context["field"], "distance", array()) >= 1000)) {
                    // line 57
                    echo "        \t\t        ";
                    $context["distance"] = ($this->getAttribute($context["field"], "distance", array()) / 1000);
                    // line 58
                    echo "        \t\t   \t\t";
                    echo twig_escape_filter($this->env, twig_round((isset($context["distance"]) ? $context["distance"] : $this->getContext($context, "distance")), 1, "floor"), "html", null, true);
                    echo "</b> Kilometros</span>
        \t\t   ";
                } else {
                    // line 60
                    echo "        \t\t   \t\t";
                    echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["field"], "distance", array()), 1, "floor"), "html", null, true);
                    echo "</b> Metros</span>   
        \t\t   ";
                }
                // line 62
                echo "\t\t\t\t";
            }
            // line 63
            echo "\t        </a>
\t      </div>
\t\t</div>
\t</div>
";
            // line 67
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "<div style=\"margin-bottom: 2rem;\">
\t";
        // line 70
        if (((isset($context["range"]) ? $context["range"] : $this->getContext($context, "range")) >= 10)) {
            // line 71
            echo "\t";
            $context["minrange"] = ((isset($context["range"]) ? $context["range"] : $this->getContext($context, "range")) - 10);
            // line 72
            echo "\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_category", array("idCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()), "idCity" => $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "id", array()), "latitude" => (isset($context["latitude"]) ? $context["latitude"] : $this->getContext($context, "latitude")), "longitude" => (isset($context["longitude"]) ? $context["longitude"] : $this->getContext($context, "longitude")), "range" => (isset($context["minrange"]) ? $context["minrange"] : $this->getContext($context, "minrange")))), "html", null, true);
            echo "\" class=\"button\"><span class=\"mif-chevron-left\"></span> Atras</a>
\t";
        }
        // line 74
        echo "\t
\t";
        // line 75
        if (((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) >= 9)) {
            // line 76
            echo "\t";
            $context["maxrange"] = ((isset($context["range"]) ? $context["range"] : $this->getContext($context, "range")) + 10);
            // line 77
            echo "\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_category", array("idCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()), "idCity" => $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "id", array()), "latitude" => (isset($context["latitude"]) ? $context["latitude"] : $this->getContext($context, "latitude")), "longitude" => (isset($context["longitude"]) ? $context["longitude"] : $this->getContext($context, "longitude")), "range" => (isset($context["maxrange"]) ? $context["maxrange"] : $this->getContext($context, "maxrange")))), "html", null, true);
            echo "\" class=\"button success\"></span> Siguiente <span class=\"mif-chevron-right\"></a>
\t";
        }
        // line 79
        echo "</div>
<br>
</div>
</div>
";
    }

    // line 84
    public function block_footer($context, array $blocks = array())
    {
        // line 85
        echo "<div style=\"padding: 1rem;margin-top: -8rem;margin-left: -1.5rem;\" data-role=\"dialog\" id=\"cities\" data-close-button=\"true\" data-overlay=\"true\" data-overlay-color=\"op-dark\">
    <h2><span class=\"mif-earth mif\"></span> Seleccione Una Ciudad</h2>
    <p>
       \t    <div class=\"cell\">
\t\t\t   <select id=\"city\" class=\"js-select\" data-placeholder=\"Ciudades\" style=\"width: 13rem;\" onchange=\"location = this.options[this.selectedIndex].value;\">
\t\t\t      ";
        // line 90
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : $this->getContext($context, "cities")));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 91
            echo "\t\t\t\t      ";
            if (($this->getAttribute($context["field"], "parentId", array()) == 0)) {
                // line 92
                echo "\t\t\t\t\t  ";
            } else {
                echo "\t
\t\t\t\t\t\t   \t";
                // line 93
                if (($this->getAttribute($context["field"], "title", array()) == $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "title", array()))) {
                    // line 94
                    echo "\t\t\t\t\t       \t\t<option value='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ads_city", array("city" => $this->getAttribute($context["field"], "id", array()))), "html", null, true);
                    echo "' selected>";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["field"], "alias", array())), "html", null, true);
                    echo "</option>
\t\t\t\t\t        ";
                } else {
                    // line 96
                    echo "\t\t\t\t\t            <option value='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ads_city", array("city" => $this->getAttribute($context["field"], "id", array()))), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["field"], "alias", array())), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t   \t";
                }
                // line 98
                echo "\t\t\t\t\t   ";
            }
            echo "\t
\t\t\t       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
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
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(setPosition);
    } else { 

    }
}

function setPosition(position) {
\t\twindow.location.assign(\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("index");
        echo "app/category/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "id", array()), "html", null, true);
        echo "/\"+position.coords.latitude+\"/\"+position.coords.longitude+\"/0\");
}
</script>
<footer>
<div style=\"width: 100%; position: fixed; bottom: 0px; left: 0px; z-index: 100;\" class=\"app-bar drop-up\" data-role=\"appbar\">
\t<a class=\"app-bar-element\">
    \t<span id=\"toggle-tiles-dropdown2\" class=\"mif-apps mif-2x\"></span>
           <div class=\"app-bar-drop-container\" data-role=\"dropdown\" data-toggle-element=\"#toggle-tiles-dropdown2\" data-no-close=\"false\" style=\"width: 324px; display: none;\">
              <div class=\"tile-container bg-white fg-black\">
              \t\t";
        // line 133
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 134
            echo "\t\t\t\t      ";
            if (($this->getAttribute($context["field"], "parent", array()) == 0)) {
                // line 135
                echo "\t\t\t\t\t  <div onclick=\"location='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_category", array("idCategory" => $this->getAttribute($context["field"], "id", array()), "idCity" => $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "id", array()), "latitude" => 0, "longitude" => 0, "range" => 0)), "html", null, true);
                echo "';\" class=\"tile-small\" style=\"background: rgb(255, 255, 255) none repeat scroll 0% 0%;\">
\t\t\t\t\t    <div class=\"tile-content iconic\">
\t\t\t\t       \t\t<img style=\"width: 100%;height: 70%;\" alt=\"\" src=\"";
                // line 137
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("../"), "html", null, true);
                echo "images/com_adsmanager/categories/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()));
                echo "cat.png\">
\t\t\t\t       \t<p class=\"pCategories\" style=\"margin-top: -1.1rem;text-align: center;\">";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "html", null, true);
                echo "</p>
\t\t\t\t       \t</div>
              \t\t  </div>
\t\t\t\t\t  ";
            } else {
                // line 141
                echo "\t 
\t\t\t\t       ";
            }
            // line 143
            echo "\t\t\t       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "            </div>
          </div>
  \t</a>
 \t<a href=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_category_map", array("idCategory" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()), "idCity" => $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "id", array()))), "html", null, true);
        echo "\" class=\"app-bar-element\" style=\"margin-left: 12%\">
    \t<span id=\"toggle-tiles-dropdown2\" class=\"mif-map mif-2x\"></span>
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
        return "AdsmanagerBundle:Categories:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 147,  350 => 144,  344 => 143,  340 => 141,  333 => 138,  327 => 137,  321 => 135,  318 => 134,  314 => 133,  298 => 124,  272 => 100,  263 => 98,  255 => 96,  247 => 94,  245 => 93,  240 => 92,  237 => 91,  233 => 90,  226 => 85,  223 => 84,  215 => 79,  209 => 77,  206 => 76,  204 => 75,  201 => 74,  195 => 72,  192 => 71,  190 => 70,  187 => 69,  181 => 67,  175 => 63,  172 => 62,  166 => 60,  160 => 58,  157 => 57,  155 => 56,  151 => 54,  149 => 53,  141 => 48,  137 => 47,  134 => 46,  125 => 44,  119 => 42,  117 => 41,  113 => 40,  106 => 35,  102 => 34,  100 => 33,  95 => 31,  79 => 18,  76 => 17,  70 => 15,  65 => 14,  62 => 13,  54 => 10,  46 => 6,  38 => 3,  33 => 2,  11 => 1,);
    }
}
