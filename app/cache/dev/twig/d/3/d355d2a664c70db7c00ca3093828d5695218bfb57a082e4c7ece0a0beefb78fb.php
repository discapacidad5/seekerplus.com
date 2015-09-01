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
            'stylesheets' => array($this, 'block_stylesheets'),
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

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "     \t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/smartadmin-production.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/comments.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  
";
    }

    // line 10
    public function block_description($context, array $blocks = array())
    {
        echo " 
";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adText", array()), "html", null, true);
        echo "
";
    }

    // line 14
    public function block_keywords($context, array $blocks = array())
    {
        echo " 
";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adKeywords", array()), "html", null, true);
        echo "
";
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        // line 18
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/select2.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
        // line 23
        $context["counter"] = 0;
        // line 24
        echo "<div class=\"container page-content fg-dark\" style=\"padding: 0.5rem;margin-bottom: 4rem;\">
<br>
\t<div class=\"cell\">
\t\t\t<div class=\"listview\">
\t\t    \t<div style=\"width: 100%;height: auto;position: relative;display: block;cursor: pointer;color: inherit;
\t\t\t\t\tmargin: 0px 0px 10px;padding: 8px 8px 4px 48px;border-width: 1px;\">
\t\t         <div style=\"margin-left: -3rem;padding: 10px 10px 10px 0rem;position: relative;display: block;color: inherit;\" 
\t\t         class=\"list-content\">
\t\t            ";
        // line 32
        if (($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "images", array()) == "noImages.jpg")) {
            // line 33
            echo "\t\t            \t<img style=\"margin-left: 1rem;display: block;width: 10rem;font-size: 40px;float: left;margin-right: 10px;\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/noImages.jpg"), "html", null, true);
            echo "\" class=\"icon\">
\t\t\t\t\t";
        } else {
            // line 35
            echo "\t\t\t\t\t    <img style=\"margin-left: 1rem;display: block;width: 10rem;font-size: 40px;float: left;margin-right: 10px;\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ids/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "id", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "images", array()), "html", null, true);
            echo "\" class=\"icon\">
\t\t\t\t\t";
        }
        // line 37
        echo "\t\t         <div class=\"data\">
\t\t         \t<span style=\"font-size: 1.2rem;line-height: 25px;margin: 0px 0px 0.5rem;padding: 0px;display: block;overflow: hidden;text-overflow: ellipsis;\" class=\"list-title\"><b>
\t\t         \t";
        // line 39
        if (($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adHeadline", array()) != "")) {
            // line 40
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adHeadline", array()));
            echo "</b>
\t\t\t\t\t";
        }
        // line 42
        echo "\t\t         \t</span>
\t        \t\t<span style=\"font-size: 0.8rem;line-height: 20px;margin: 0rem;padding: 0px;display: block;overflow: hidden;text-overflow: ellipsis;\" class=\"list-remark\"> 
\t        \t\t";
        // line 44
        if ( !twig_test_empty($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adPhone", array()))) {
            // line 45
            echo "\t\t\t\t\t\t<span class=\"mif-phone\"></span>
\t\t\t\t\t\t";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adPhone", array()));
            echo "
\t\t\t\t\t";
        }
        // line 48
        echo "\t        \t\t</span>
\t        \t\t
\t\t  \t\t\t<span style=\"font-size: 0.8rem;line-height: 20px;margin: 0rem;padding: 0px;display: block;overflow: hidden;text-overflow: ellipsis;\" class=\"list-remark\">
\t\t  \t\t\t";
        // line 51
        if ( !twig_test_empty($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adAddress", array()))) {
            // line 52
            echo "\t\t\t\t\t\t<span class=\"mif-map\"></span> 
\t\t\t\t\t\t";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adAddress", array()));
            echo "
\t\t\t\t\t";
        }
        // line 55
        echo "\t        \t\t</span>
\t\t            <span style=\"font-size: 0.8rem;line-height: 20px;margin: 0rem;padding: 0px;display: block;overflow: hidden;text-overflow: ellipsis;\" class=\"list-remark\">
           
\t\t            ";
        // line 58
        if (( !twig_test_empty($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adAttentionhoursinit", array())) &&  !twig_test_empty($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adAttentionhoursfinish", array())))) {
            // line 59
            echo "\t\t\t\t\t\t<span class=\"mif-alarm-on\"></span> 
\t\t\t\t\t\t";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adAttentionhoursinit", array()));
            echo " a ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adAttentionhoursfinish", array()));
            echo "</span>
\t\t\t\t\t";
        }
        // line 62
        echo "\t\t            <span style=\"font-size: 0.8rem;line-height: 20px;margin: 0rem;padding: 0px;display: block;overflow: hidden;text-overflow: ellipsis;\" class=\"list-remark\">
\t\t            ";
        // line 63
        if (( !twig_test_empty($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adAttentiondaysinit", array())) &&  !twig_test_empty($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adAttentiondaysinit", array())))) {
            // line 64
            echo "\t\t\t\t\t\t<span class=\"mif-calendar\"></span>  
\t\t\t\t\t\t";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adAttentiondaysinit", array()));
            echo " a ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adAttentiondaysinit", array()));
            echo "</span>\t
\t\t\t\t\t";
        }
        // line 67
        echo "\t\t            
\t\t         </div>
\t\t        </div>
\t\t      </div>
\t\t\t</div>

\t\t\t<div id=\"rate\">
\t\t\t\t<span style=\"margin-left: 1rem;margin-top: 0.2rem\" class='rating large'data-score-title='Valoracion : ' data-role='rating'
\t\t        \t\t\tdata-value='
\t\t\t\t\t\t\t";
        // line 76
        if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["rated"]) ? $context["rated"] : $this->getContext($context, "rated")), 0, array()), "rate", array()))) {
            // line 77
            echo "\t\t\t\t\t\t\t\t0
\t\t\t\t\t\t\t";
        } else {
            // line 79
            echo "\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["rated"]) ? $context["rated"] : $this->getContext($context, "rated")), 0, array()), "rate", array()));
            echo "
\t\t\t\t\t\t\t";
        }
        // line 81
        echo "\t\t        \t\t\t' 
\t\t        \t\t\tdata-on-rate=\"adRate\">
\t\t        </span>
\t\t        <span> <span class=\"mif-users\"><small>(";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["rated"]) ? $context["rated"] : $this->getContext($context, "rated")), 0, array()), "score", array()));
        echo ")</small></span></span>
\t\t      
\t\t   </div>     
\t\t\t<span style=\"font-size: 0.8rem;line-height: 20px;margin: 1rem;padding: 0px;display: block;overflow: hidden;text-overflow: ellipsis;\" class=\"list-remark\">";
        // line 87
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
        // line 96
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "getProducts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 97
            echo "\t\t\t\t\t\t\t<div class=\"cell\">
\t\t\t\t\t\t\t\t<div class=\"listview\">
\t\t\t\t\t\t\t    \t<div style=\"border: 1px solid #EAEAEA;width: 100%;height: auto;position: relative;display: block;cursor: pointer;
\t\t\t\t\t\tcolor: inherit;margin: 0px 0px 10px;\"href=\"#\" class=\"list\">
\t\t\t\t\t\t\t         <div style=\"margin-left: -3rem;padding: 10px 10px 10px 0rem;position: relative;display: block;color: inherit;\" 
\t\t\t\t\t\t\t         class=\"list-content\">
\t\t\t\t\t\t\t\t\t\t";
            // line 103
            if (($this->getAttribute($context["product"], "images", array()) == "noImages.jpg")) {
                // line 104
                echo "\t\t\t\t\t\t\t            \t<img style=\"margin-left: 1rem;display: block;width: 56px;height: 56px;font-size: 40px;float: left;margin-right: 10px;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/noImages.jpg"), "html", null, true);
                echo "\" class=\"icon\">
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 106
                echo "\t\t\t\t\t\t\t\t\t\t    <img style=\"margin-left: 1rem;display: block;width: 56px;height: 56px;font-size: 40px;float: left;margin-right: 10px;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ids/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "id", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "images", array()), "html", null, true);
                echo "\" class=\"icon\">
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 108
            echo "\t\t\t\t\t\t\t         <div class=\"data\">
\t\t\t\t\t\t\t         \t<span style=\"font-size: 14px;line-height: 18px;margin: 0px;padding: 0px;display: block;overflow: hidden;text-overflow: ellipsis;\" class=\"list-title\"><b>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</b></b></span>
\t\t\t\t\t\t\t         \t<span style=\"font-size: 11px;line-height: 14px;margin: 0px;padding: 0px;display: block;overflow: hidden;text-overflow: ellipsis;\" class=\"list-remark\">";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t        \t\t<span style=\"font-size: 11px;line-height: 14px;margin: 0px;padding: 0px;display: block;overflow: hidden;text-overflow: ellipsis;\" class=\"list-remark\">\$ ";
            // line 111
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
        // line 117
        echo " 
\t\t        \t</div>
\t\t            <div class=\"frame\" id=\"frame_1_2\" style=\"background-color: rgb(255, 255, 255);\">
\t\t       

\t\t                                  <div class=\"chat-footer\">

\t\t\t\t\t\t\t\t\t\t\t<!-- CHAT TEXTAREA -->


\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"textarea-div\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"typearea\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea placeholder=\"Escribe un Comentario...\" id=\"textarea-expand\" class=\"custom-scroll\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- CHAT REPLY/SEND -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"textarea-controls\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button primary pull-right \" id='agregar' onclick=\"addComment(\$('#textarea-expand').val())\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tComentar

\t\t\t\t\t\t\t\t\t\t\t</button> 
\t\t\t\t\t\t\t\t\t\t\t </span>

\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t
                                  <div class=\"comments-container\">
\t\t<ul id=\"comments-list\" class=\"comments-list\">
             <li>Comentarios <small id=\"ncomment\">(";
        // line 148
        echo twig_escape_filter($this->env, (isset($context["nComments"]) ? $context["nComments"] : $this->getContext($context, "nComments")), "html", null, true);
        echo ")  </small> <span class=\"mif-bubbles\"></span></li>
\t\t\t\t\t";
        // line 149
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coments"]) ? $context["coments"] : $this->getContext($context, "coments")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 150
            echo "\t\t\t\t\t
\t\t\t\t\t<li  id=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t<div class=\"comment-main-level\">
\t\t\t\t\t\t\t<!-- Avatar -->
\t\t\t\t\t\t\t<div class=\"comment-avatar\"><img src=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/male.png"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Contenedor del Comentario -->
\t\t\t\t\t\t\t<div class=\"comment-box\">
\t\t\t\t\t\t\t\t<div class=\"comment-head\">
\t\t\t\t\t\t\t\t\t<h6 class=\"comment-name \">
\t\t\t\t\t\t\t\t\t";
            // line 160
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["row2"]) {
                // line 161
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["row2"], "id", array()) == $this->getAttribute($context["row"], "idUser", array()))) {
                    // line 162
                    echo "\t\t\t\t\t\t                      <a href=\"\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["row2"], "name", array()), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 164
                echo "\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<span>";
            // line 167
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["row"], "dateCreated", array()), "m/d/Y"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-reply\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"comment-content\">
\t\t\t\t\t\t\t\t\t<p>";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "commentAd", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t
                                    ";
            // line 174
            if (($this->getAttribute($context["row"], "idUser", array()) == (isset($context["activeUser"]) ? $context["activeUser"] : $this->getContext($context, "activeUser")))) {
                // line 175
                echo "
\t\t\t\t\t\t\t\t\t   <button class=\"button warning \" onclick=\"dateComment(";
                // line 176
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
                echo ")\">Editar</button>
\t\t\t\t\t\t\t\t\t   <button class=\"button color-red \" onclick=\"showMessageProductDeleteDialog(";
                // line 177
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
                echo ")\">Eliminar</button>

    

                                    ";
            }
            // line 182
            echo "\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
                   ";
            // line 188
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
            // line 189
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "


\t\t\t\t\t
</ul>
<br><br>
<script type=\"text/javascript\">
var r=0;
</script>

<div style=\"margin-bottom: 2rem;\">

\t";
        // line 202
        if (((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) >= 9)) {
            // line 203
            echo "<button onclick=\"pagination(r=r+10)\" id=\"see\" class=\"button success\">Ver Mas</button>
\t";
        }
        // line 205
        echo "



<script type=\"text/javascript\">
\t
function  pagination(range){
       var idAd=\"";
        // line 212
        echo twig_escape_filter($this->env, (isset($context["idAd"]) ? $context["idAd"] : $this->getContext($context, "idAd")), "html", null, true);
        echo "\";
       \$.post('";
        // line 213
        echo $this->env->getExtension('routing')->getPath("paginationAd");
        echo "',               
\t\t\t         {idAd: idAd,
\t\t\t          range: range 

\t\t\t        }, 
\t\t\t        \tfunction(response){\t
\t\t                  r=response.range;\t\t\t    
\t\t\t        \t
                 for (x=0;x<response.comments.length;x++)
                      {
                            var nameAd=0;
                            for (y=0;y<response.user.length;y++){
\t                            \tif(response.user[y].id==response.comments[x].idUser)
\t                            \t{
\t                                  \t nameAd=response.user[y].name;\t    
\t                            \t}
                            }
                          
                  var lista = document.getElementById(\"comments-list\");
\t\t       lista.innerHTML += \"<li id=\"+response.comments[x].id+\">\"
\t\t       +'<div class=\"comment-main-level\">'
\t\t\t   +'<div class=\"comment-avatar\"><img src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/male.png"), "html", null, true);
        echo "\" alt=\"\"></div>'
\t\t\t   +'<div class=\"comment-box\">'
\t\t\t   +'<div class=\"comment-head\">'
\t\t\t   +'<h6 class=\"comment-name \"><a href=\"\">'+ nameAd +'</a></h6>'
\t\t\t   +'<span>'+response.comments[x].dateCreated.date+'</span>'
\t\t\t   +'<i class=\"fa fa-reply\"></i>'
\t\t\t   +'<i class=\"fa fa-heart\"></i>'
\t\t\t   +'</div>'
\t\t\t   +'<div class=\"comment-content\">'\t
\t\t\t   +'<p>'+
     
\t\t\t   response.comments[x].commentAd+'</p>'\t\t\t\t
\t\t\t   +'<button id='+(response.comments[x].id+\"w\")+' class=\"button warning\" onclick=\"dateComment('+response.comments[x].id+')\" >Editar </button>'+\" \" 
\t\t\t   +'<button id='+(response.comments[x].id+\"n\")+' class=\"button color-red\" onclick=\"showMessageProductDeleteDialog('+response.comments[x].id+')\" >Eliminar </button>'


\t\t\t   +'</div>'
\t\t\t   +'</div>'
\t\t       +'</div>'
\t\t\t   +'</li>';
\t\t\t     if (response.comments[x].idUser  != response.userId ) {
                                  \$(\"#\"+response.comments[x].id+\"w\").remove();
                                  \$(\"#\"+response.comments[x].id+\"n\").remove();
                            }
              
}
\t\t\t\t}, \"json\"); 

}
</script>

</div>




\t\t            </div>
\t\t       </div>
\t\t    </div>
\t\t\t   
\t</div>
</div>
</div>
";
    }

    // line 278
    public function block_footer($context, array $blocks = array())
    {
        // line 279
        echo "<div style=\"padding: 1rem;margin-top: -8rem;margin-left: -1.5rem;\" data-role=\"dialog\" id=\"cities\" data-close-button=\"true\" data-overlay=\"true\" data-overlay-color=\"op-dark\">
    <h2><span class=\"mif-earth mif\"></span> Seleccione Una Ciudad</h2>
    <p>
       \t    <div class=\"cell\">
\t\t\t   <select id=\"city\" class=\"js-select\" data-placeholder=\"Ciudades\" style=\"width: 13rem;\" onchange=\"location = this.options[this.selectedIndex].value;\">
\t\t\t      ";
        // line 284
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : $this->getContext($context, "cities")));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 285
            echo "\t\t\t\t      ";
            if (($this->getAttribute($context["field"], "parentId", array()) == 0)) {
                // line 286
                echo "\t\t\t\t\t  ";
            } else {
                echo "\t
\t\t\t\t\t\t   \t";
                // line 287
                if (($this->getAttribute($context["field"], "title", array()) == $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "title", array()))) {
                    // line 288
                    echo "\t\t\t\t\t       \t\t<option value='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ads_city", array("city" => $this->getAttribute($context["field"], "id", array()))), "html", null, true);
                    echo "' selected>";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["field"], "alias", array())), "html", null, true);
                    echo "</option>
\t\t\t\t\t        ";
                } else {
                    // line 290
                    echo "\t\t\t\t\t            <option value='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ads_city", array("city" => $this->getAttribute($context["field"], "id", array()))), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["field"], "alias", array())), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t   \t";
                }
                // line 292
                echo "\t\t\t\t\t   ";
            }
            echo "\t
\t\t\t       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 294
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
        // line 305
        echo $this->env->getExtension('routing')->getPath("adRate");
        echo "',               
            {idAd: ";
        // line 306
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
        // line 334
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "adheadLine", array()), "html", null, true);
        echo "
    </p>
</div> 



    <div data-role=\"dialog\" id=\"dialog\" data-width=\"280\" data-height=\"260\">
        <form>
        <br>
       <center>
       \t <label class=\"sub-alt-header\">Actualizar Comentario</label>
       </center>
      
      <center>
      \t
      \t  <div class=\"input-control textarea \">
           <input type=\"hidden\" name=\"oculto\" id=\"idComment\">
        \t<textarea type=\"textarea\" class=\"input-control text\" name=\"comment\" id=\"editComment\"></textarea>
        </div>
            </form>
      </center>
        \t<center>
        \t\t<button class=\"button success\"  onclick=\"editComment(\$('#idComment').val(),\$('#editComment').val())\">Actualizar</button>
        \t<button class=\"button color-red\"  onclick=\"delDialog('#dialog')\">Cancelar</button>
        \t</center>
      
    </div>

    <script>
        function showDialog(id){
            var dialog = \$(id).data('dialog');
            dialog.open();
        }
        function delDialog(id){
            var dialog = \$(id).data('dialog');
            dialog.close();
        }
    </script>\t


<div data-role=\"dialog\" id=\"adDelete\" data-close-button=\"true\" data-type=\"alert\" data-windows-style=\"true\">
\t\t\t\t\t<div style=\"padding: 2rem;\">
\t\t\t\t\t  <h1>Eliminar Comentario</h1>
\t\t\t\t\t  <p>Esta a punto de eliminar el comentario  , al eliminar el registro la informacion no se podra recuperar.
\t\t\t\t\t  <p>
\t\t\t\t\t      ¿ Esta seguro que desea eliminar el comentario ?.
\t\t\t\t\t  </p>
\t<button onclick=\"delete_ad(\$('#adDelete').val())\" class=\"button fg-black\"><span class=\"mif-warning\"> Eliminar</button> 
\t\t\t\t\t</div>
</div> 

<script type=\"text/javascript\">
\t\t\tfunction showMessageProductDeleteDialog(id){

\t\t     var dialog = \$(\"#adDelete\").data('dialog');
\t\t     \$(\"#adDelete\").val(id);
\t\t    dialog.open();

\t\t     }
\t\t   function delMessageProductDeleteDialog(){

\t\t            var dialog = \$(\"#adDelete\").data('dialog');
\t\t            dialog.close();
\t\t     }

\t\tfunction addComment(commentUser)
\t\t\t{
\t\t\t\tif(commentUser=='')
\t\t\t\t\t\t{
\t\t\t\t\t\talert('Ingrese un comentario');

\t\t\t\t\t\t}
\t\t\t\t\t\telse{
\t\t    \$.post('";
        // line 407
        echo $this->env->getExtension('routing')->getPath("ad_comment");
        echo "',               
\t\t            {idAd: ";
        // line 408
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "id", array()));
        echo ",
\t\t            comment: JSON.stringify(commentUser)
\t\t           
\t\t        }, 
\t\t        \tfunction(response){
\t\t        

\t\t       \$(\"#textarea-expand\").val(\"\");
\t\t       var lista = document.getElementById(\"comments-list\");
\t\t       lista.innerHTML += \"<li id=\"+response.idc+\">\"
\t\t       +'<div class=\"comment-main-level\">'
\t\t\t   +'<div class=\"comment-avatar\"><img src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/male.png"), "html", null, true);
        echo "\" alt=\"\"></div>'
\t\t\t   +'<div class=\"comment-box\">'
\t\t\t   +'<div class=\"comment-head\">'
\t\t\t   +'<h6 class=\"comment-name \"><a href=\"\">'+response.userName+'</a></h6>'
\t\t\t   +'<span>'+response.date+'</span>'
\t\t\t   +'<i class=\"fa fa-reply\"></i>'
\t\t\t   +'<i class=\"fa fa-heart\"></i>'
\t\t\t   +'</div>'
\t\t\t   +'<div class=\"comment-content\">'\t
\t\t\t   +'<p>'+response.comment+'</p>'\t\t\t\t
\t\t\t   +'<button class=\"button warning\" onclick=\"dateComment('+response.idc+')\" >Editar </button>'+\" \" 
\t\t\t   +'<button class=\"button color-red\" onclick=\"showMessageProductDeleteDialog('+response.idc+')\" >Eliminar </button>'
\t\t\t   +'</div>'
\t\t\t   +'</div>'
\t\t       +'</div>'
\t\t\t   +'</li>';
\t\t\t      

\t\t\t      \$('#ncomment').html(\"(\"+response.nCommentsAds+\")\");
\t\t\t      \$('#comments-list li:last').insertAfter('#comments-list li:first');

\t\t\t}, \"json\"); 

\t\t\t}
\t\t}


\t
\t\tfunction dateComment(id)
\t\t{
\t  \$.post('";
        // line 449
        echo $this->env->getExtension('routing')->getPath("date_comment");
        echo "',               
\t         {idComment: id,
\t        }, 
\t        \tfunction(response){
\t          document.getElementById('editComment').value =(response.comment[0]).commentAd;
\t          document.getElementById('idComment').value =id;
\t          showDialog('#dialog');
\t\t}, \"json\"); 
\t\t}

\t    function editComment(id,editcomment)
\t    {
               if(editcomment=='')
\t\t\t\t\t\t{
\t\t\t\t\t\talert('Ingrese un comentario');

\t\t\t\t\t\t}
\t\t\t\t\t\telse{
        \t\t \$.post('";
        // line 467
        echo $this->env->getExtension('routing')->getPath("edit_comment");
        echo "',               
                    {idComment: id, newComment :JSON.stringify(editcomment)
                    }, 
        \t   function(response){
        \t\t    \$(\"#\"+id+\" .comment-content p\").html(response.comment);
                    delDialog('#dialog');
\t            }, \"json\"); 
        
          }
         }
       \t\t\t\t
       \t\tfunction delete_ad(id)
       \t\t\t\t{
\t\t\t\$.post('";
        // line 480
        echo $this->env->getExtension('routing')->getPath("delete_comment");
        echo "',               
\t\t\t         {idComment: id,
\t\t\t        }, 
\t\t\t        \tfunction(response){
\t\t\t        \t\t \$(\"#\"+id).remove();
\t\t\t                delMessageProductDeleteDialog();

\t\t\t\t}, \"json\"); 
\t\t\t} 
</script>
\t\t\t

<footer>
<div style=\"width: 100%; position: fixed; bottom: 0px; left: 0px; z-index: 100;\" class=\"app-bar drop-up\" data-role=\"appbar\">
\t<a class=\"app-bar-element\">
    \t<span id=\"toggle-tiles-dropdown2\" class=\"mif-apps mif-2x\"></span>
           <div class=\"app-bar-drop-container\" data-role=\"dropdown\" data-toggle-element=\"#toggle-tiles-dropdown2\" data-no-close=\"false\" style=\"width: 324px; display: none;\">
              <div class=\"tile-container bg-white fg-black\">
              \t\t";
        // line 498
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 499
            echo "\t\t\t\t      ";
            if (($this->getAttribute($context["field"], "parent", array()) == 0)) {
                // line 500
                echo "\t\t\t\t\t  <div onclick=\"location='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_category", array("idCategory" => $this->getAttribute($context["field"], "id", array()), "idCity" => $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "id", array()), "latitude" => 0, "longitude" => 0, "range" => 0)), "html", null, true);
                echo "';\" class=\"tile-small\" style=\"background: rgb(255, 255, 255) none repeat scroll 0% 0%;\">
\t\t\t\t\t    <div class=\"tile-content iconic\">
\t\t\t\t       \t\t<img style=\"width: 100%;height: 70%;\" alt=\"\" src=\"";
                // line 502
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("../"), "html", null, true);
                echo "images/com_adsmanager/categories/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()));
                echo "cat.png\">
\t\t\t\t       \t<p class=\"pCategories\" style=\"margin-top: -1.1rem;text-align: center;\">";
                // line 503
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "html", null, true);
                echo "</p>
\t\t\t\t       \t</div>
              \t\t  </div>
\t\t\t\t\t  ";
            } else {
                // line 506
                echo "\t 
\t\t\t\t       ";
            }
            // line 508
            echo "\t\t\t       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 509
        echo "            </div>
          </div>
  \t</a>
 \t<a href=\"";
        // line 512
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
        return array (  860 => 512,  855 => 509,  849 => 508,  845 => 506,  838 => 503,  832 => 502,  826 => 500,  823 => 499,  819 => 498,  798 => 480,  782 => 467,  761 => 449,  728 => 419,  714 => 408,  710 => 407,  634 => 334,  603 => 306,  599 => 305,  586 => 294,  577 => 292,  569 => 290,  561 => 288,  559 => 287,  554 => 286,  551 => 285,  547 => 284,  540 => 279,  537 => 278,  489 => 234,  465 => 213,  461 => 212,  452 => 205,  448 => 203,  446 => 202,  432 => 190,  426 => 189,  424 => 188,  416 => 182,  408 => 177,  404 => 176,  401 => 175,  399 => 174,  394 => 172,  386 => 167,  383 => 166,  376 => 164,  370 => 162,  367 => 161,  363 => 160,  354 => 154,  348 => 151,  345 => 150,  341 => 149,  337 => 148,  304 => 117,  291 => 111,  287 => 110,  283 => 109,  280 => 108,  271 => 106,  265 => 104,  263 => 103,  255 => 97,  251 => 96,  239 => 87,  233 => 84,  228 => 81,  222 => 79,  218 => 77,  216 => 76,  205 => 67,  198 => 65,  195 => 64,  193 => 63,  190 => 62,  183 => 60,  180 => 59,  178 => 58,  173 => 55,  168 => 53,  165 => 52,  163 => 51,  158 => 48,  153 => 46,  150 => 45,  148 => 44,  144 => 42,  138 => 40,  136 => 39,  132 => 37,  123 => 35,  117 => 33,  115 => 32,  105 => 24,  103 => 23,  99 => 22,  96 => 21,  90 => 19,  85 => 18,  82 => 17,  76 => 15,  71 => 14,  65 => 11,  60 => 10,  53 => 7,  48 => 6,  45 => 5,  39 => 3,  34 => 2,  11 => 1,);
    }
}
