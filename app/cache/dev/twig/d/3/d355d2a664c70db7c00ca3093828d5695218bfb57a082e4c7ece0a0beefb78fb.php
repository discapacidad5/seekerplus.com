<?php

/* AdsmanagerBundle:Ads:show.html.twig */
class __TwigTemplate_d355d2a664c70db7c00ca3093828d5695218bfb57a082e4c7ece0a0beefb78fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::app.html.twig", "AdsmanagerBundle:Ads:show.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adheadLine", array()), "html", null, true);
        echo "
";
    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        echo " 
";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adText", array()), "html", null, true);
        echo "
";
    }

    // line 10
    public function block_keywords($context, array $blocks = array())
    {
        echo " 
";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adKeywords", array()), "html", null, true);
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

<div class=\"container page-content fg-dark\" style=\"padding: 0.5rem;margin-bottom: 4rem;\">
<br>
\t<div class=\"cell\">
\t\t\t<div class=\"listview\">
\t\t    \t<div style=\"width: 100%;height: auto;position: relative;display: block;cursor: pointer;color: inherit;
\t\t\t\t\tmargin: 0px 0px 10px;padding: 8px 8px 4px 48px;border-width: 1px;\">
\t\t         <div style=\"margin-left: -3rem;padding: 10px 10px 10px 0rem;position: relative;display: block;color: inherit;\" 
\t\t         class=\"list-content\">
\t\t            ";
        // line 28
        if (($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "images", array()) == "noImages.jpg")) {
            // line 29
            echo "\t\t            \t<img style=\"margin-left: 1rem;display: block;width: 10rem;font-size: 40px;float: left;margin-right: 10px;\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/noImages.jpg"), "html", null, true);
            echo "\" class=\"icon\">
\t\t\t\t\t";
        } else {
            // line 31
            echo "\t\t\t\t\t    <img style=\"margin-left: 1rem;display: block;width: 10rem;font-size: 40px;float: left;margin-right: 10px;\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ids/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "id", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "images", array()), "html", null, true);
            echo "\" class=\"icon\">
\t\t\t\t\t";
        }
        // line 33
        echo "\t\t         <div class=\"data\">
\t\t         \t<span style=\"font-size: 1.2rem;line-height: 25px;margin: 0px 0px 0.5rem;padding: 0px;display: block;overflow: hidden;text-overflow: ellipsis;\" class=\"list-title\"><b>
\t\t         \t";
        // line 35
        if (($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adHeadline", array()) != "")) {
            // line 36
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adHeadline", array()));
            echo "</b>
\t\t\t\t\t";
        }
        // line 38
        echo "\t\t         \t</span>
\t        \t\t<span style=\"font-size: 0.8rem;line-height: 20px;margin: 0rem;padding: 0px;display: block;overflow: hidden;text-overflow: ellipsis;\" class=\"list-remark\"> 
\t        \t\t";
        // line 40
        if ( !twig_test_empty($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adPhone", array()))) {
            // line 41
            echo "\t\t\t\t\t\t<span class=\"mif-phone\"></span>
\t\t\t\t\t\t";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adPhone", array()));
            echo "
\t\t\t\t\t";
        }
        // line 44
        echo "\t        \t\t</span>
\t        \t\t
\t\t  \t\t\t<span style=\"font-size: 0.8rem;line-height: 20px;margin: 0rem;padding: 0px;display: block;overflow: hidden;text-overflow: ellipsis;\" class=\"list-remark\">
\t\t  \t\t\t";
        // line 47
        if ( !twig_test_empty($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adAddress", array()))) {
            // line 48
            echo "\t\t\t\t\t\t<span class=\"mif-map\"></span> 
\t\t\t\t\t\t";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adAddress", array()));
            echo "
\t\t\t\t\t";
        }
        // line 51
        echo "\t        \t\t</span>
\t\t            <span style=\"font-size: 0.8rem;line-height: 20px;margin: 0rem;padding: 0px;display: block;overflow: hidden;text-overflow: ellipsis;\" class=\"list-remark\">
           
\t\t            ";
        // line 54
        if (( !twig_test_empty($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adAttentionhoursinit", array())) &&  !twig_test_empty($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adAttentionhoursfinish", array())))) {
            // line 55
            echo "\t\t\t\t\t\t<span class=\"mif-alarm-on\"></span> 
\t\t\t\t\t\t";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adAttentionhoursinit", array()));
            echo " a ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adAttentionhoursfinish", array()));
            echo "</span>
\t\t\t\t\t";
        }
        // line 58
        echo "\t\t            <span style=\"font-size: 0.8rem;line-height: 20px;margin: 0rem;padding: 0px;display: block;overflow: hidden;text-overflow: ellipsis;\" class=\"list-remark\">
\t\t            ";
        // line 59
        if (( !twig_test_empty($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adAttentiondaysinit", array())) &&  !twig_test_empty($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adAttentiondaysinit", array())))) {
            // line 60
            echo "\t\t\t\t\t\t<span class=\"mif-calendar\"></span>  
\t\t\t\t\t\t";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adAttentiondaysinit", array()));
            echo " a ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adAttentiondaysinit", array()));
            echo "</span>\t
\t\t\t\t\t";
        }
        // line 63
        echo "\t\t            
\t\t         </div>
\t\t        </div>
\t\t      </div>
\t\t\t</div>

\t\t\t<div id=\"rate\">
\t\t\t\t<span style=\"margin-left: 1rem;margin-top: 0.2rem\" class='rating large'data-score-title='Valoracion : ' data-role='rating'
\t\t        \t\t\tdata-value='
\t\t\t\t\t\t\t";
        // line 72
        if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["rated"]) ? $context["rated"] : $this->getContext($context, "rated")), 0, array()), "rate", array()))) {
            // line 73
            echo "\t\t\t\t\t\t\t\t0
\t\t\t\t\t\t\t";
        } else {
            // line 75
            echo "\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["rated"]) ? $context["rated"] : $this->getContext($context, "rated")), 0, array()), "rate", array()));
            echo "
\t\t\t\t\t\t\t";
        }
        // line 77
        echo "\t\t        \t\t\t' 
\t\t        \t\t\tdata-on-rate=\"adRate\">
\t\t        </span>
\t\t        <span> <span class=\"mif-users\"><small>(";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["rated"]) ? $context["rated"] : $this->getContext($context, "rated")), 0, array()), "score", array()));
        echo ")</small></span></span>
\t\t      
\t\t   </div>     
\t\t\t<span style=\"font-size: 0.8rem;line-height: 20px;margin: 1rem;padding: 0px;display: block;overflow: hidden;text-overflow: ellipsis;\" class=\"list-remark\">";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adText", array()));
        echo "</span>
\t\t\t
\t\t\t<div class=\"tabcontrol\" data-role=\"tabControl\">
\t\t    \t<ul class=\"tabs\">
\t\t       \t\t<li><a href=\"#frame_1_1\">Productos y/o Servicios</a></li>
\t\t            <li><a href=\"#frame_1_2\">Comentarios</a></li>
\t\t        </ul>
\t\t        <div class=\"frames bg-grayLight\">
\t\t        \t<div class=\"frame\" id=\"frame_1_1\" style=\"background-color: rgb(255, 255, 255);\">
\t\t\t        \t";
        // line 92
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "getProducts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 93
            echo "\t\t\t\t\t\t\t<div class=\"cell\">
\t\t\t\t\t\t\t\t<div class=\"listview\">
\t\t\t\t\t\t\t    \t<div style=\"border: 1px solid #EAEAEA;width: 100%;height: auto;position: relative;display: block;cursor: pointer;
\t\t\t\t\t\tcolor: inherit;margin: 0px 0px 10px;\"href=\"#\" class=\"list\">
\t\t\t\t\t\t\t         <div style=\"margin-left: -3rem;padding: 10px 10px 10px 0rem;position: relative;display: block;color: inherit;\" 
\t\t\t\t\t\t\t         class=\"list-content\">
\t\t\t\t\t\t\t\t\t\t";
            // line 99
            if (($this->getAttribute($context["product"], "images", array()) == "noImages.jpg")) {
                // line 100
                echo "\t\t\t\t\t\t\t            \t<img style=\"margin-left: 1rem;display: block;width: 56px;height: 56px;font-size: 40px;float: left;margin-right: 10px;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/noImages.jpg"), "html", null, true);
                echo "\" class=\"icon\">
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 102
                echo "\t\t\t\t\t\t\t\t\t\t    <img style=\"margin-left: 1rem;display: block;width: 56px;height: 56px;font-size: 40px;float: left;margin-right: 10px;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ids/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "id", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "images", array()), "html", null, true);
                echo "\" class=\"icon\">
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 104
            echo "\t\t\t\t\t\t\t         <div class=\"data\">
\t\t\t\t\t\t\t         \t<span style=\"font-size: 14px;line-height: 18px;margin: 0px;padding: 0px;display: block;overflow: hidden;text-overflow: ellipsis;\" class=\"list-title\"><b>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</b></b></span>
\t\t\t\t\t\t\t         \t<span style=\"font-size: 11px;line-height: 14px;margin: 0px;padding: 0px;display: block;overflow: hidden;text-overflow: ellipsis;\" class=\"list-remark\">";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t        \t\t<span style=\"font-size: 11px;line-height: 14px;margin: 0px;padding: 0px;display: block;overflow: hidden;text-overflow: ellipsis;\" class=\"list-remark\">\$ ";
            // line 107
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["product"], "price", array()), 0), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t         </div>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t  
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo " 
\t\t        \t</div>
\t\t            <div class=\"frame\" id=\"frame_1_2\" style=\"background-color: rgb(255, 255, 255);\">Comentarios</div>
\t\t       </div>
\t\t    </div>
\t\t\t   
\t</div>
</div>
</div>
";
    }

    // line 123
    public function block_footer($context, array $blocks = array())
    {
        // line 124
        echo "<div style=\"padding: 1rem;margin-top: -8rem;margin-left: -1.5rem;\" data-role=\"dialog\" id=\"cities\" data-close-button=\"true\" data-overlay=\"true\" data-overlay-color=\"op-dark\">
    <h2><span class=\"mif-earth mif\"></span> Seleccione Una Ciudad</h2>
    <p>
       \t    <div class=\"cell\">
\t\t\t   <select id=\"city\" class=\"js-select\" data-placeholder=\"Ciudades\" style=\"width: 13rem;\" onchange=\"location = this.options[this.selectedIndex].value;\">
\t\t\t      ";
        // line 129
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : $this->getContext($context, "cities")));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 130
            echo "\t\t\t\t      ";
            if (($this->getAttribute($context["field"], "parentId", array()) == 0)) {
                // line 131
                echo "\t\t\t\t\t  ";
            } else {
                echo "\t
\t\t\t\t\t\t   \t";
                // line 132
                if (($this->getAttribute($context["field"], "title", array()) == $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "title", array()))) {
                    // line 133
                    echo "\t\t\t\t\t       \t\t<option value='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ads_city", array("city" => $this->getAttribute($context["field"], "id", array()))), "html", null, true);
                    echo "' selected>";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["field"], "alias", array())), "html", null, true);
                    echo "</option>
\t\t\t\t\t        ";
                } else {
                    // line 135
                    echo "\t\t\t\t\t            <option value='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ads_city", array("city" => $this->getAttribute($context["field"], "id", array()))), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["field"], "alias", array())), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t   \t";
                }
                // line 137
                echo "\t\t\t\t\t   ";
            }
            echo "\t
\t\t\t       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "\t\t\t   </select>
\t\t\t</div>
    </p>
</div> 
<script>
function showCitiesDialog(){
    var dialog = \$(\"#cities\").data('dialog');
    dialog.open();
}

function adRate(value, star, widget){
    \$.post('";
        // line 150
        echo $this->env->getExtension('routing')->getPath("adRate");
        echo "',               
            {idAd: ";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "id", array()));
        echo ", rate:value}, 
        \tfunction(response){

                if(response.code == 100 && response.success){
                \t\$(\"#rate\").html(\"<span style='margin-left: 1rem;margin-top: 0.2rem'\" 
                        \t+\"class='rating large'data-score-title='Valoracion : ' data-role='rating'\"
    \t        \t\t\t+\"data-value='\"+response.rated.rate+\"' data-on-rate='adRate'></span>\"
    \t        \t\t\t+\"<span><span class='mif-users'><small>(\"+response.rated.score+\")</small></span></span>\");
                \tshowMessageAdRate();
                }
\t}, \"json\"); 
}

function showMessageAdRate(){
    var dialog = \$(\"#rated\").data('dialog');
    dialog.open();
}

\$(function(){
    \$(\"#city\").select2({
        placeholder: \"Ciudades\",
        allowClear: true
      });
  });
</script>
<div data-role=\"dialog\" id=\"rated\" data-close-button=\"true\" class=\"success\">
    <h1> Felicitaciones </h1>
    <p>
       Haz Calificado a ";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adheadLine", array()), "html", null, true);
        echo "
    </p>
</div> 
<footer>
<div style=\"width: 100%; position: fixed; bottom: 0px; left: 0px; z-index: 100;\" class=\"app-bar drop-up\" data-role=\"appbar\">
\t<a class=\"app-bar-element\">
    \t<span id=\"toggle-tiles-dropdown2\" class=\"mif-apps mif-2x\"></span>
           <div class=\"app-bar-drop-container\" data-role=\"dropdown\" data-toggle-element=\"#toggle-tiles-dropdown2\" data-no-close=\"false\" style=\"width: 324px; display: none;\">
              <div class=\"tile-container bg-white fg-black\">
              \t\t";
        // line 188
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 189
            echo "\t\t\t\t      ";
            if (($this->getAttribute($context["field"], "parent", array()) == 0)) {
                // line 190
                echo "\t\t\t\t\t  <div onclick=\"location='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_category", array("idCategory" => $this->getAttribute($context["field"], "id", array()), "idCity" => $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "id", array()), "latitude" => 0, "longitude" => 0, "range" => 0)), "html", null, true);
                echo "';\" class=\"tile-small\" style=\"background: rgb(255, 255, 255) none repeat scroll 0% 0%;\">
\t\t\t\t\t    <div class=\"tile-content iconic\">
\t\t\t\t       \t\t<img style=\"width: 100%;height: 70%;\" alt=\"\" src=\"";
                // line 192
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("../"), "html", null, true);
                echo "images/com_adsmanager/categories/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()));
                echo "cat.png\">
\t\t\t\t       \t<p class=\"pCategories\" style=\"margin-top: -1.1rem;text-align: center;\">";
                // line 193
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "html", null, true);
                echo "</p>
\t\t\t\t       \t</div>
              \t\t  </div>
\t\t\t\t\t  ";
            } else {
                // line 196
                echo "\t 
\t\t\t\t       ";
            }
            // line 198
            echo "\t\t\t       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "            </div>
          </div>
  \t</a>
 \t<a href=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_ad_map", array("idAd" => $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "id", array()), "idCity" => $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "id", array()))), "html", null, true);
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
        return "AdsmanagerBundle:Ads:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 202,  443 => 199,  437 => 198,  433 => 196,  426 => 193,  420 => 192,  414 => 190,  411 => 189,  407 => 188,  395 => 179,  364 => 151,  360 => 150,  347 => 139,  338 => 137,  330 => 135,  322 => 133,  320 => 132,  315 => 131,  312 => 130,  308 => 129,  301 => 124,  298 => 123,  285 => 113,  272 => 107,  268 => 106,  264 => 105,  261 => 104,  252 => 102,  246 => 100,  244 => 99,  236 => 93,  232 => 92,  220 => 83,  214 => 80,  209 => 77,  203 => 75,  199 => 73,  197 => 72,  186 => 63,  179 => 61,  176 => 60,  174 => 59,  171 => 58,  164 => 56,  161 => 55,  159 => 54,  154 => 51,  149 => 49,  146 => 48,  144 => 47,  139 => 44,  134 => 42,  131 => 41,  129 => 40,  125 => 38,  119 => 36,  117 => 35,  113 => 33,  104 => 31,  98 => 29,  96 => 28,  83 => 18,  80 => 17,  74 => 15,  69 => 14,  66 => 13,  60 => 11,  55 => 10,  49 => 7,  44 => 6,  38 => 3,  33 => 2,  11 => 1,);
    }
}
