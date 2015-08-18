<?php

/* AdsmanagerBundle:Ads:myAds.html.twig */
class __TwigTemplate_fb2ea3e27ecc05ba5b175ceecc6c6fd95cda78355abb9a393039103e0bcd7807 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::app.html.twig", "AdsmanagerBundle:Ads:myAds.html.twig", 1);
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
Mis Anuncios
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
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<div class=\"container page-content fg-dark\" style=\"padding: 0.5rem;\">
<h1><span class=\"mif-file-text\"></span> Mis Anuncios</h1>
<div class=\"cell\">
\t<div class=\"listview-outlook\" data-role=\"listview\">
\t\t<div class=\"list-group \">
        \t<span class=\"list-group-toggle\">Anuncios</span>
        \t <div class=\"list-group-content\">
\t\t";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ads"]) ? $context["ads"] : $this->getContext($context, "ads")));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 26
            echo "\t\t<div class=\"treeview\" data-role=\"treeview\">
          <ul>
           <li class=\"node active collapsed\">
                         <span class=\"leaf\"><span class=\"mif-tag\"></span> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "adHeadline", array()));
            echo "</span>
                         <span class=\"node-toggle\"></span>
            <ul>
            <li style=\"margin-bottom: 4rem;\">
                   \t
\t\t\t\t<div class=\"list\">
                   <div class=\"list-content\">
                      <span class=\"list-title\"><span class=\"mif-earth\"></span> ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "adLocation", array()));
            echo "</span>
                      <span style=\"white-space: normal;max-width: 50%;padding-right: 2rem;\" class=\"list-subtitle\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "adText", array()));
            echo "</span>
                      <span class=\"place-right\" style=\"float: right; margin-top: -6rem;\">\t\t    
                      ";
            // line 39
            if (($this->getAttribute($context["field"], "images", array()) == "noImages.jpg")) {
                // line 40
                echo "\t\t\t\t\t    \t<img id=\"newImages\" class=\"marginFrame\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/noImages.jpg"), "html", null, true);
                echo "\">
\t\t\t\t\t  ";
            } else {
                // line 42
                echo "\t\t\t\t\t    \t<img id=\"newImages\" class=\"marginFrame\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ids/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "images", array()), "html", null, true);
                echo "\">
\t\t\t\t\t  ";
            }
            // line 43
            echo "</span>
                      <span class=\"list-remark\"><span class=\"mif-phone\"></span> ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "adPhone", array()));
            echo "</span>
                      <span class=\"list-remark\"><span class=\"mif-location\"></span> ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "adAddress", array()));
            echo "</span>
                      <span class=\"list-remark\">Creado el    : ";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["field"], "dateCreated", array()), "Y-m-d"), "html", null, true);
            echo "</span>
                      <span class=\"list-remark\">Valido Hasta : ";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["field"], "expirationDate", array()), "Y-m-d"), "html", null, true);
            echo "</span>
                      <span class=\"list-remark\">Ultima Modificacion : ";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["field"], "dateModified", array()), "Y-m-d"), "html", null, true);
            echo "</span>
                      <br>
     
                      \t<label class=\"switch\">
                      \t";
            // line 52
            if (($this->getAttribute($context["field"], "published", array()) == 1)) {
                // line 53
                echo "                            Publicado <input checked=\"\" type=\"checkbox\">
                        ";
            } else {
                // line 55
                echo "                            Despublicado <input  type=\"checkbox\">
                        ";
            }
            // line 57
            echo "                            <span class=\"check\"></span>
                        </label>\t
                    </div>
                 </div><br><br>
\t     \t\t<div class=\"treeview\" data-role=\"treeview\">
                <ul>
                 <li class=\"node active collapsed\">
                         <span class=\"leaf\"><span class=\"mif-tags\"></span> Productos y/o Servicios</span>
                         <span class=\"node-toggle\"></span>
                   <ul>
                   \t<li>
\t\t\t          <table class=\"table striped\">
\t\t\t          <tbody>
\t\t\t          <thead>
\t\t\t          <th></th>
\t\t\t          <th></th>
\t\t\t          <th></th>
\t\t\t          </thead>
\t\t\t              ";
            // line 75
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["field"], "getProducts", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 76
                echo "\t\t\t                
\t\t\t                <tr>
\t\t\t                    <td style=\"width: 4rem ! important;\">
\t\t\t\t\t\t\t          ";
                // line 79
                if (($this->getAttribute($context["product"], "images", array()) == "noImages.jpg")) {
                    // line 80
                    echo "\t\t\t\t\t\t\t\t\t    \t<img style=\"width: 5rem ! important; height: 5rem ! important;\" class=\"marginFrame\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/noImages.jpg"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t  ";
                } else {
                    // line 82
                    echo "\t\t\t\t\t\t\t\t\t    \t<img style=\"width: 5rem ! important; height: 5rem ! important;\" class=\"marginFrame\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ids/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "images", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t  ";
                }
                // line 83
                echo "</span>
\t\t\t                      \t
\t\t\t\t\t\t\t\t</td>
\t\t\t                    <td>
\t\t\t                    <h4>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "</h4>
\t\t\t                    <span>";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
                echo "</span>
\t\t\t                  \t</td>
\t\t\t                  \t<td style=\"width: 7rem;\">
\t\t\t                  \t  <p>\$ ";
                // line 91
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["product"], "price", array()), 0), "html", null, true);
                echo "</p>
\t\t\t                  \t</td>
\t\t\t                  \t\t\t\t\t            <td>
\t\t\t                 <a href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_product_ads", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                echo "\"class=\"button warning\"> Modificar</a>
 \t\t\t\t\t\t\t <br><a onclick=\"showMessageProductDeleteDialog('";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "');\" class=\"button alert\"> Eliminar </a>
               \t\t\t\t</td>
\t\t\t                </tr>
\t\t\t   <div data-role=\"dialog\" id=\"";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\" data-close-button=\"true\" data-type=\"alert\" data-windows-style=\"true\">
\t\t\t\t\t<div style=\"padding: 2rem;\">
\t\t\t\t\t  <h1>Eliminar Producto</h1>
\t\t\t\t\t  <p>Esta a punto de eliminar el anuncio ";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()));
                echo " , al eliminar el registro la informacion no se podra recuperar.
\t\t\t\t\t  <p>
\t\t\t\t\t      ¿ Esta seguro que desea eliminar el anuncio ";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()));
                echo " ?.
\t\t\t\t\t  </p>
\t\t\t\t\t  <a href=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_product_ads", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                echo "\" class=\"button fg-black\"><span class=\"mif-warning\"></span> Eliminar</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "        
\t\t\t         \t\t</tbody>
\t\t\t         </table>
                   </li>
                  </ul>
               </li>
              </ul>
              </div>     
                <span>
                <a href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("new_ads_product", array("id" => $this->getAttribute($context["field"], "id", array()))), "html", null, true);
            echo "\"class=\"button success\"><span class=\"mif-plus\"></span> Agregar Producto</a>
                </span>
                
                <span class=\"list-subtitle\" style=\"float: right; padding-top: 1rem; padding-bottom: 2rem;\">
                 <a href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_ads", array("id" => $this->getAttribute($context["field"], "id", array()))), "html", null, true);
            echo "\"class=\"button link\"><span class=\"mif-mail\"></span> Mensajes</a>
                 <a onclick=\"showMessageRenewDialog('p";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()), "html", null, true);
            echo "');\" class=\"button primary\">Renovar</a>
                 <a href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_ads", array("id" => $this->getAttribute($context["field"], "id", array()))), "html", null, true);
            echo "\" class=\"button warning\">Modificar</a>
                 <a onclick=\"showMessageDeleteDialog('";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()), "html", null, true);
            echo "');\" class=\"button alert\">Eliminar</a>
                </span><br><br><br><br>
                <div data-role=\"dialog\" id=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()), "html", null, true);
            echo "\" data-close-button=\"true\" data-type=\"alert\" data-windows-style=\"true\">
\t\t\t\t\t<div style=\"padding: 2rem;\">
\t\t\t\t\t  <h1>Eliminar Anuncio</h1>
\t\t\t\t\t  <p>Esta a punto de eliminar el anuncio ";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "adHeadline", array()));
            echo " , al eliminar el registro la informacion no se podra recuperar.
\t\t\t\t\t  <p>
\t\t\t\t\t      ¿ Esta seguro que desea eliminar el anuncio ";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "adHeadline", array()));
            echo " ?.
\t\t\t\t\t  </p>
\t\t\t\t\t  <a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_ads", array("id" => $this->getAttribute($context["field"], "id", array()))), "html", null, true);
            echo "\" class=\"button fg-black\"><span class=\"mif-warning\"></span> Eliminar</a>
\t\t\t\t\t</div>
\t\t\t\t</div> 
\t\t\t\t<div data-role=\"dialog\" id=\"p";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()), "html", null, true);
            echo "\" data-close-button=\"true\" class=\"success\" data-windows-style=\"true\">
\t\t\t\t\t<div style=\"padding: 2rem;\">
\t\t\t\t\t  <h1>Renovar Anuncio</h1>
\t\t\t\t\t  <p>Esta a punto de renovar el anuncio ";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "adHeadline", array()));
            echo " , se agregara un año mas apartir de hoy.
\t\t\t\t\t  <p>
\t\t\t\t\t  <span class=\"caption\">Acepto las <a class=\"fg-black\" href=\"";
            // line 141
            echo $this->env->getExtension('routing')->getPath("condicionesDeUso");
            echo "\" target=\"_blank\">Condiciones Del Servicio</a> y la <a class=\"fg-black\" href=\"";
            echo $this->env->getExtension('routing')->getPath("politicasDePrivacidad");
            echo "\" target=\"_blank\">\t Politica de Privacidad</a> de SeekerPlus</span>
\t\t\t\t\t  </p>
\t\t\t\t\t  <a href=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renew_ads", array("id" => $this->getAttribute($context["field"], "id", array()))), "html", null, true);
            echo "\" class=\"button fg-black\"><span class=\"mif-alarm\"></span> Aceptar</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t   </li>
                  </ul>
            \t</li>
         \t</ul>
         </div> 
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "\t\t    <br><br>
\t\t    <a href=\"";
        // line 153
        echo $this->env->getExtension('routing')->getPath("new_ads");
        echo "\" class=\"button success\"><span class=\"mif-plus\"></span> Nuevo</a>
         \t</div><br>
    \t</div>

\t\t<div class=\"list-group collapsed\">
\t    \t<span class=\"list-group-toggle\">Banners</span>
\t        <div class=\"list-group-content\">
\t        \t";
        // line 160
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : $this->getContext($context, "banners")));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 161
            echo "\t        \t<div class=\"list\">
\t            \t<div class=\"list-content\">
\t                \t<span class=\"list-title\"><span class=\"place-right icon-flag-2 fg-red smaller\"></span>";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "html", null, true);
            echo "</span>
\t                    <span>
\t                    <img id=\"newImages\" class=\"marginFrame\" src=\"";
            // line 165
            echo $this->env->getExtension('routing')->getUrl("index");
            echo "../../";
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "params", array()), "html", null, true);
            echo "\" style=\"width: 30rem ! important;\"> 
\t                    </span><br>
\t                    <span style=\"white-space: normal;margin-top: 1rem;\" 
\t                    class=\"list-subtitle\">";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "description", array()), "html", null, true);
            echo "</span><br><br>
\t                    <label class=\"switch\">
                      \t";
            // line 170
            if (($this->getAttribute($context["field"], "state", array()) == 1)) {
                // line 171
                echo "                            Publicado <input checked=\"\" type=\"checkbox\">
                        ";
            } else {
                // line 173
                echo "                            Expirado <input  type=\"checkbox\">
                        ";
            }
            // line 175
            echo "                            <span class=\"check\"></span>
                        </label>
                        <span class=\"list-remark\">
                        \t<span class=\"mif-event-available\"></span> Inicio   : ";
            // line 178
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["field"], "publishUp", array()), "Y-m-d"), "html", null, true);
            echo "</span>
                        <span class=\"list-remark\">
                        \t<span class=\"mif-event-busy\"></span> Finaliza : ";
            // line 180
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["field"], "publishDown", array()), "Y-m-d"), "html", null, true);
            echo "</span>
\t                    <span class=\"list-remark\">Impresiones</span>";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "impmade", array()), "html", null, true);
            echo "
\t                    <span class=\"list-remark\">Clicks</span>";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "clicks", array()), "html", null, true);
            echo "<br>
\t                </div>
\t            </div>
\t            <a href=\"";
            // line 185
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_banner", array("id" => $this->getAttribute($context["field"], "id", array()))), "html", null, true);
            echo "\" class=\"button primary\"><span class=\"mif-eye\"></span> Ver</a>
\t            <br><br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "\t        </div>
\t    </div>
\t</div>
</div>
<script type=\"text/javascript\">
function showMessageDeleteDialog(id){
    var dialog = \$(\"#\"+id).data('dialog');
    dialog.open();
}

function showMessageProductDeleteDialog(id){
    var dialog = \$(\"#\"+id).data('dialog');
    dialog.open();
}

function showMessageRenewDialog(id){
    var dialog = \$(\"#\"+id).data('dialog');
    dialog.open();
}
</script>
</div>
</div>
";
    }

    // line 211
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AdsmanagerBundle:Ads:myAds.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  464 => 211,  438 => 188,  429 => 185,  423 => 182,  419 => 181,  415 => 180,  410 => 178,  405 => 175,  401 => 173,  397 => 171,  395 => 170,  390 => 168,  382 => 165,  377 => 163,  373 => 161,  369 => 160,  359 => 153,  356 => 152,  341 => 143,  334 => 141,  329 => 139,  323 => 136,  317 => 133,  312 => 131,  307 => 129,  301 => 126,  296 => 124,  292 => 123,  288 => 122,  284 => 121,  277 => 117,  266 => 108,  256 => 105,  251 => 103,  246 => 101,  240 => 98,  234 => 95,  230 => 94,  224 => 91,  218 => 88,  214 => 87,  208 => 83,  199 => 82,  193 => 80,  191 => 79,  186 => 76,  182 => 75,  162 => 57,  158 => 55,  154 => 53,  152 => 52,  145 => 48,  141 => 47,  137 => 46,  133 => 45,  129 => 44,  126 => 43,  117 => 42,  111 => 40,  109 => 39,  104 => 37,  100 => 36,  90 => 29,  85 => 26,  81 => 25,  70 => 17,  67 => 16,  60 => 14,  57 => 13,  49 => 10,  41 => 6,  33 => 2,  11 => 1,);
    }
}
