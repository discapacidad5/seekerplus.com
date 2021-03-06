<?php

/* ::app.html.twig */
class __TwigTemplate_d73da21983ab8f67f69cbe5423c579f1fab0ef20408c7481d2c05601ae2a1ca6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"UTF-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
\t<meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('description', $context, $blocks);
        echo "\">
\t<meta name=\"keywords\" content=\"";
        // line 8
        $this->displayBlock('keywords', $context, $blocks);
        echo "\">
\t<meta name=\"author\" content=\"SeekerImpulse S.A.S\">
\t<title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/metro.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/metro-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/docs.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/my.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/search-css.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t
\t";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/metro.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/docs.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/prettify/run_prettify.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ga.js"), "html", null, true);
        echo "\"></script>
\t";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "</head>
<body>
\t";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 187
        echo "</html>";
    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
    }

    // line 8
    public function block_keywords($context, array $blocks = array())
    {
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        // line 28
        echo "\t<div style=\"display: block !important;left: 0 !important;top: 0px !important;height: 100%;width: 100%;position: fixed;z-index: 1050;background: #fff;\"  id=\"load\" class=\"padding20\" data-close-button=\"true\" data-overlay=\"true\" data-overlay-color=\"op-dark\">
\t\t<div style=\"text-align: center;\"class=\"container\">
\t\t\t<h1>
\t\t\t\t<div class=\"cell padding20 bg-white\">
\t\t\t\t\t<div data-role=\"preloader\" data-type=\"ring\" data-style=\"dark\" style=\"margin: 30px  auto\"></div>
\t\t\t\t</div>
\t\t\t</h1>
\t\t\t<a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("app");
        echo "\">
\t\t\t\t<img style=\"width: 5rem; margin-right: 0.5rem;\" alt=\"\"
\t\t\t\tsrc=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\">      
\t\t\t</a>     
\t\t\t<p>
\t\t\t\tCargando ...
\t\t\t</p>
\t\t</div>
\t</div>
\t";
        // line 44
        $this->displayBlock('menu', $context, $blocks);
        // line 105
        echo "
";
        // line 106
        $this->displayBlock('content', $context, $blocks);
        // line 141
        echo "
";
        // line 142
        $this->displayBlock('footer', $context, $blocks);
        // line 146
        echo "<script>

\t\$(window).load(function () {
\t\$('#load').remove();
});
\tfunction Search(){
\t\tvar text = \$(\"#searchWord\").val();
\t\tvar city = 0;
\t\tvar id_city = 0;
\t\t
\t\t";
        // line 156
        if ($this->getAttribute((isset($context["location"]) ? $context["location"] : null), "id", array(), "any", true, true)) {
            // line 157
            echo "    \t\tcity = '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "title", array()), "html", null, true);
            echo "';
    \t\tid_city = '";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "id", array()), "html", null, true);
            echo "';
\t\t";
        }
        // line 159
        echo "    
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 162
        echo $this->env->getExtension('routing')->getPath("search_ads");
        echo "\",
\t\t\tdata: { texto: text, city: city, id_city: id_city},
\t\t}).done(function( msg )
\t\t{
\t\t\t\$(\"#opciones\").html(msg);
\t\t})
\t\t
\t}

\tfunction SaveSearh(title, path){
\t\tvar write = \$(\"#searchWord\").val();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 175
        echo $this->env->getExtension('routing')->getPath("search_save");
        echo "\",
\t\t\tdata: { title: title, write: write},
\t\t}).done(function( msg )
\t\t{
\t\t\twindow.location = path;
\t\t})
\t\t
\t\t
\t}
</script>
</body>
";
    }

    // line 44
    public function block_menu($context, array $blocks = array())
    {
        // line 45
        echo "\t<div class=\"app-bar fixed-top\" data-role=\"appbar\">
\t<a style=\"font-size: 1.2rem;padding-left: 0.5rem;\" href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("app");
        echo "\" class=\"app-bar-element branding\"> 
\t\t<img style=\"width: 2rem; margin-right: 0.5rem;\" alt=\"\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\">
\t</a>
\t<span class=\"app-bar-pull\"></span>
\t<div class=\"app-bar-divider\"></div>
\t";
        // line 51
        if (array_key_exists("cities", $context)) {
            // line 52
            echo "\t\t<div style=\"display: block; float: left;\" class=\"input-control text\" data-role=\"input\">
\t\t    <input id=\"searchWord\" style=\"width: 20rem;padding-right: 1rem !important;background: #fff\" type=\"text\" placeholder=\"Buscar ...\" onkeyup=\"Search()\">
\t\t    <div id=\"opciones\" class=\"buscador-container\" style=\"\"></div>
\t\t    <button class=\"button\"><span class=\"mif-search\"></span></button>
\t\t</div>
\t\t<span style=\"margin-top: 1rem; margin-left: 1rem; font-size: 0.9rem;\" class=\"notify-icon mif-expand-more cities\" onclick=\"showCitiesDialog('one');\">Ciudades</span>
\t";
        }
        // line 59
        echo "\t<ul class=\"app-bar-menu place-right\">
\t\t";
        // line 60
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 61
            echo "\t\t<li>
\t\t\t<a href=\"\" class=\"dropdown-toggle\"><span class=\"mif-user\"></span>";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array())), "FOSUserBundle"), "html", null, true);
            echo "</a>
\t\t\t<ul style=\"display: none;\" class=\"d-menu\" data-role=\"dropdown\">
\t\t\t\t<li data-flexorder=\"2\" data-flexorderorigin=\"1\">
\t\t\t\t\t<a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\"><span class=\"mif-profile\"></span> Perfil</a> 
\t\t\t\t</li>
\t\t\t\t<li data-flexorder=\"3\" data-flexorderorigin=\"2\">
\t\t\t\t\t<a href=\"";
            // line 68
            echo $this->env->getExtension('routing')->getPath("my_ads");
            echo "\"><span class=\"mif-file-text\"></span> Mis Anuncios</a> 
\t\t\t\t</li>
\t\t\t\t<li data-flexorder=\"4\" data-flexorderorigin=\"3\">
\t\t\t\t\t<a href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\"><span class=\"mif-lock\"></span> Cambiar Contraseña</a> 
\t\t\t\t</li>
\t\t\t\t<li data-flexorder=\"5\" data-flexorderorigin=\"4\">
\t\t\t\t\t<a href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><span class=\"mif-exit\"></span> Salir</a> 
\t\t\t\t</li>
\t\t\t</ul>
\t\t</li>
\t</ul>
\t";
        } else {
            // line 80
            echo "
\t<li style=\"padding-left: 2rem;\">
\t\t<div class=\"app-bar-element\">
\t\t\t<a class=\"dropdown-toggle fg-white\"><span class=\"mif-user\"></span>
\t\t\t\tMi Cuenta
\t\t\t</a>
\t\t\t<div style=\"display: none;width: 10rem;\"
\t\t\tclass=\"app-bar-drop-container bg-white fg-dark place-right\"
\t\t\tdata-role=\"dropdown\" data-no-close=\"true\">
\t\t\t<div class=\"padding10\">
\t\t\t\t<div class=\"form-actions\">
\t\t\t\t\t<a href=\"";
            // line 91
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><button class=\"button success\">Iniciar Sesión</button></a>
\t\t\t\t</div>
\t\t\t\t<h5>¿No dispones de una cuenta en SeekerPlus? 
\t\t\t\t\t<a href=\"";
            // line 94
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Regístrate ahora</a>
\t\t\t\t</h5>
\t\t\t</div>
\t\t</div>
\t</div>
</li>
</ul>
";
        }
        // line 102
        echo "
</div>
";
    }

    // line 106
    public function block_content($context, array $blocks = array())
    {
        // line 107
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "information"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 108
            echo "<div class=\"container page-content fg-dark\" style=\"margin-bottom: -3rem;\">
\t<div class=\"notify info\">
\t\t<span class=\"notify-title\">Tenga en Cuenta</span>
\t\t<span class=\"notify-text\">";
            // line 111
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</span>
\t</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 116
            echo "<div class=\"container page-content fg-dark\" style=\"margin-bottom: -3rem;\">
\t<div class=\"notify success\">
\t\t<span class=\"notify-title\">Felicitaciones</span>
\t\t<span class=\"notify-text\">";
            // line 119
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</span>
\t</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 124
            echo "<div class=\"container page-content fg-dark\" style=\"margin-bottom: -3rem;\">
\t<div class=\"notify alert\">
\t\t<span class=\"notify-title\">Error</span>
\t\t<span class=\"notify-text\">";
            // line 127
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</span>
\t</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 132
            echo "<div class=\"container page-content fg-dark\" style=\"margin-bottom: -3rem;\">
\t<div class=\"notify warning\">
\t\t<span class=\"notify-title\">Cuidado !</span>
\t\t<span class=\"notify-text\">";
            // line 135
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</span>
\t</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "
";
    }

    // line 142
    public function block_footer($context, array $blocks = array())
    {
        // line 143
        echo "<footer>
</footer>
";
    }

    public function getTemplateName()
    {
        return "::app.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 143,  423 => 142,  418 => 139,  408 => 135,  403 => 132,  399 => 131,  389 => 127,  384 => 124,  380 => 123,  370 => 119,  365 => 116,  361 => 115,  351 => 111,  346 => 108,  342 => 107,  339 => 106,  333 => 102,  322 => 94,  316 => 91,  303 => 80,  294 => 74,  288 => 71,  282 => 68,  276 => 65,  270 => 62,  267 => 61,  265 => 60,  262 => 59,  253 => 52,  251 => 51,  244 => 47,  240 => 46,  237 => 45,  234 => 44,  218 => 175,  202 => 162,  197 => 159,  192 => 158,  187 => 157,  185 => 156,  173 => 146,  171 => 142,  168 => 141,  166 => 106,  163 => 105,  161 => 44,  151 => 37,  146 => 35,  137 => 28,  134 => 27,  129 => 24,  124 => 17,  119 => 10,  114 => 8,  109 => 7,  105 => 187,  103 => 27,  99 => 25,  97 => 24,  93 => 23,  89 => 22,  85 => 21,  81 => 20,  77 => 19,  72 => 18,  70 => 17,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  40 => 8,  36 => 7,  28 => 1,);
    }
}
