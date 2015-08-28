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
\t";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/metro.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/docs.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/prettify/run_prettify.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ga.js"), "html", null, true);
        echo "\"></script>
\t";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "</head>
<body>
\t";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 173
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

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        // line 27
        echo "\t<div style=\"display: block !important;left: 0 !important;top: 0px !important;height: 100%;width: 100%;position: fixed;z-index: 1050;background: #fff;\"  id=\"load\" class=\"padding20\" data-close-button=\"true\" data-overlay=\"true\" data-overlay-color=\"op-dark\">
\t\t<div style=\"text-align: center;\"class=\"container\">
\t\t\t<h1>
\t\t\t\t<div class=\"cell padding20 bg-white\">
\t\t\t\t\t<div data-role=\"preloader\" data-type=\"ring\" data-style=\"dark\" style=\"margin: 30px  auto\"></div>
\t\t\t\t</div>
\t\t\t</h1>
\t\t\t<a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("app");
        echo "\">
\t\t\t\t<img style=\"width: 5rem; margin-right: 0.5rem;\" alt=\"\"
\t\t\t\tsrc=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\">      
\t\t\t</a>     
\t\t\t<p>
\t\t\t\tCargando ...
\t\t\t</p>
\t\t</div>
\t</div>
\t";
        // line 43
        $this->displayBlock('menu', $context, $blocks);
        // line 106
        echo "
";
        // line 107
        $this->displayBlock('content', $context, $blocks);
        // line 142
        echo "
";
        // line 143
        $this->displayBlock('footer', $context, $blocks);
        // line 147
        echo "<script>

\t\$(window).load(function () {
\t\$('#load').remove();
});
\tfunction Buscar(){
\t\tvar texto = \$(\"#searchWord\").val();
\t\tvar pais = 0;
\t\t";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "id", array()), "html", null, true);
        echo "
\t\t";
        // line 156
        if ( !$this->getAttribute((isset($context["location"]) ? $context["location"] : null), "id", array(), "any", true, true)) {
            // line 157
            echo "    \t\tpais = ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "id", array()), "html", null, true);
            echo ";
\t\t";
        }
        // line 158
        echo "    
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 161
        echo $this->env->getExtension('routing')->getPath("search_ads");
        echo "\",
\t\t\tdata: {texto: texto, pais: pais},
\t\t}).done(function( msg )
\t\t{
\t\t\t\$(\"#opciones\").html(msg);
\t\t})
\t\t
\t}

</script>
</body>
";
    }

    // line 43
    public function block_menu($context, array $blocks = array())
    {
        // line 44
        echo "\t<div class=\"app-bar fixed-top\" data-role=\"appbar\">
\t<a style=\"font-size: 1.2rem;padding-left: 0.5rem;\" href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("app");
        echo "\" class=\"app-bar-element branding\"> 
\t\t<img style=\"width: 2rem; margin-right: 0.5rem;\" alt=\"\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\">
\t</a>
\t<span class=\"app-bar-pull\"></span>
\t<div class=\"app-bar-divider\"></div>
\t<div style=\"display: block; float: left;\" class=\"input-control text\" data-role=\"input\">
\t\t
\t\t<input id=\"searchWord\" style=\"width: 20rem;padding-right: 1rem !important;background: #fff\" type=\"text\" placeholder=\"Buscar ...\" onkeyup=\"Buscar()\">
\t\t
\t\t<div id=\"opciones\" class=\"buscador-container\" style=\"\"></div>
\t\t
\t\t<button class=\"button\"><span class=\"mif-search\"></span></button>
\t</div>
\t
\t<span style=\"margin-top: 1rem; margin-left: 1rem; font-size: 0.9rem;\" class=\"notify-icon mif-expand-more cities\" onclick=\"showCitiesDialog('one');\">Ciudades</span>
\t<ul class=\"app-bar-menu place-right\">
\t\t";
        // line 61
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 62
            echo "\t\t<li>
\t\t\t<a href=\"\" class=\"dropdown-toggle\"><span class=\"mif-user\"></span>";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array())), "FOSUserBundle"), "html", null, true);
            echo "</a>
\t\t\t<ul style=\"display: none;\" class=\"d-menu\" data-role=\"dropdown\">
\t\t\t\t<li data-flexorder=\"2\" data-flexorderorigin=\"1\">
\t\t\t\t\t<a href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\"><span class=\"mif-profile\"></span> Perfil</a> 
\t\t\t\t</li>
\t\t\t\t<li data-flexorder=\"3\" data-flexorderorigin=\"2\">
\t\t\t\t\t<a href=\"";
            // line 69
            echo $this->env->getExtension('routing')->getPath("my_ads");
            echo "\"><span class=\"mif-file-text\"></span> Mis Anuncios</a> 
\t\t\t\t</li>
\t\t\t\t<li data-flexorder=\"4\" data-flexorderorigin=\"3\">
\t\t\t\t\t<a href=\"";
            // line 72
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\"><span class=\"mif-lock\"></span> Cambiar Contraseña</a> 
\t\t\t\t</li>
\t\t\t\t<li data-flexorder=\"5\" data-flexorderorigin=\"4\">
\t\t\t\t\t<a href=\"";
            // line 75
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><span class=\"mif-exit\"></span> Salir</a> 
\t\t\t\t</li>
\t\t\t</ul>
\t\t</li>
\t</ul>
\t";
        } else {
            // line 81
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
            // line 92
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><button class=\"button success\">Iniciar Sesión</button></a>
\t\t\t\t</div>
\t\t\t\t<h5>¿No dispones de una cuenta en SeekerPlus? 
\t\t\t\t\t<a href=\"";
            // line 95
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
        // line 103
        echo "
</div>
";
    }

    // line 107
    public function block_content($context, array $blocks = array())
    {
        // line 108
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "information"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 109
            echo "<div class=\"container page-content fg-dark\" style=\"margin-bottom: -3rem;\">
\t<div class=\"notify info\">
\t\t<span class=\"notify-title\">Tenga en Cuenta</span>
\t\t<span class=\"notify-text\">";
            // line 112
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</span>
\t</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 117
            echo "<div class=\"container page-content fg-dark\" style=\"margin-bottom: -3rem;\">
\t<div class=\"notify success\">
\t\t<span class=\"notify-title\">Felicitaciones</span>
\t\t<span class=\"notify-text\">";
            // line 120
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</span>
\t</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 125
            echo "<div class=\"container page-content fg-dark\" style=\"margin-bottom: -3rem;\">
\t<div class=\"notify alert\">
\t\t<span class=\"notify-title\">Error</span>
\t\t<span class=\"notify-text\">";
            // line 128
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</span>
\t</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 133
            echo "<div class=\"container page-content fg-dark\" style=\"margin-bottom: -3rem;\">
\t<div class=\"notify warning\">
\t\t<span class=\"notify-title\">Cuidado !</span>
\t\t<span class=\"notify-text\">";
            // line 136
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</span>
\t</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "
";
    }

    // line 143
    public function block_footer($context, array $blocks = array())
    {
        // line 144
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
        return array (  404 => 144,  401 => 143,  396 => 140,  386 => 136,  381 => 133,  377 => 132,  367 => 128,  362 => 125,  358 => 124,  348 => 120,  343 => 117,  339 => 116,  329 => 112,  324 => 109,  320 => 108,  317 => 107,  311 => 103,  300 => 95,  294 => 92,  281 => 81,  272 => 75,  266 => 72,  260 => 69,  254 => 66,  248 => 63,  245 => 62,  243 => 61,  225 => 46,  221 => 45,  218 => 44,  215 => 43,  199 => 161,  194 => 158,  188 => 157,  186 => 156,  182 => 155,  172 => 147,  170 => 143,  167 => 142,  165 => 107,  162 => 106,  160 => 43,  150 => 36,  145 => 34,  136 => 27,  133 => 26,  128 => 23,  123 => 16,  118 => 10,  113 => 8,  108 => 7,  104 => 173,  102 => 26,  98 => 24,  96 => 23,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  71 => 17,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  40 => 8,  36 => 7,  28 => 1,);
    }
}
