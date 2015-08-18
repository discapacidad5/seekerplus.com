<?php

/* ::app.html.twig */
class __TwigTemplate_7157a8109dc967f0b0b8df1ed8fd56178414d6285627c1e7e1ead679edf1ec18 extends Twig_Template
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
        <meta charset=\"UTF-8\">
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
        <title>";
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
   \t \t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/docs.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    \t<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/my.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
    \t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/metro.js"), "html", null, true);
        echo "\"></script>
    \t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/docs.js"), "html", null, true);
        echo "\"></script>
    \t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/prettify/run_prettify.js"), "html", null, true);
        echo "\"></script>
    \t<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ga.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    </head>
    <body>
    ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 166
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

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        $this->displayBlock('menu', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('content', $context, $blocks);
        // line 121
        echo "
";
        // line 122
        $this->displayBlock('footer', $context, $blocks);
        // line 164
        echo "    </body>
";
    }

    // line 26
    public function block_menu($context, array $blocks = array())
    {
        // line 27
        echo "<div class=\"app-bar fixed-top\" data-role=\"appbar\">
\t<a style=\"font-size: 1.2rem;padding-left: 0.5rem;\" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("app");
        echo "\"
\t\t\" class=\"app-bar-element branding\"> 
\t\t<img style=\"width: 2rem; margin-right: 0.5rem;\" alt=\"\"
\t\tsrc=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\">
\t</a> <span class=\"app-bar-pull\"></span>
\t<div class=\"app-bar-divider\"></div>
\t<div style=\"display: block; float: left;\" class=\"input-control text\" data-role=\"input\">
\t    <input id=\"searchWord\" style=\"width: 20rem;padding-right: 1rem !important;background: #fff\" type=\"text\" placeholder=\"Buscar ...\">
\t    <button class=\"button\"><span class=\"mif-search\"></span></button>
\t</div>
\t<span style=\"margin-top: 1rem; margin-left: 1rem; font-size: 0.9rem;\" class=\"notify-icon mif-expand-more cities\" onclick=\"showCitiesDialog('one');\">Ciudades</span>
\t<ul class=\"app-bar-menu place-right\">
\t\t";
        // line 40
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 41
            echo "\t\t<li>
\t\t<a href=\"\" class=\"dropdown-toggle\"><span class=\"mif-user\"></span>";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "firstname", array())), "FOSUserBundle"), "html", null, true);
            echo "</a>
\t\t<ul style=\"display: none;\" class=\"d-menu\" data-role=\"dropdown\">
\t\t\t<li data-flexorder=\"2\" data-flexorderorigin=\"1\">
\t\t\t  <a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\"><span class=\"mif-profile\"></span> Perfil</a> 
\t\t\t</li>
\t\t\t<li data-flexorder=\"3\" data-flexorderorigin=\"2\">
\t\t\t  <a href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("my_ads");
            echo "\"><span class=\"mif-file-text\"></span> Mis Anuncios</a> 
\t\t\t</li>
\t\t\t<li data-flexorder=\"4\" data-flexorderorigin=\"3\">
\t\t\t  <a href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\"><span class=\"mif-lock\"></span> Cambiar Contraseña</a> 
\t\t\t</li>
\t\t\t<li data-flexorder=\"5\" data-flexorderorigin=\"4\">
\t\t\t\t<a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><span class=\"mif-exit\"></span> Salir</a> 
\t\t\t</li>
\t\t</ul>
\t\t</li>
\t</ul>
\t";
        } else {
            // line 60
            echo "
\t<li style=\"padding-left: 2rem;\">
\t\t<div class=\"app-bar-element\">
\t\t\t<a class=\"dropdown-toggle fg-white\"><span class=\"mif-user\"></span>
\t\t\t Mi Cuenta
\t\t\t</a>
\t\t\t<div style=\"display: none;width: 10rem;\"
\t\t\t\tclass=\"app-bar-drop-container bg-white fg-dark place-right\"
\t\t\t\tdata-role=\"dropdown\" data-no-close=\"true\">
\t\t\t\t<div class=\"padding10\">
\t\t\t\t\t<div class=\"form-actions\">
\t\t\t\t\t\t<a href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><button class=\"button success\">Iniciar Sesión</button></a>
\t\t\t\t\t</div>
\t\t\t\t\t<h5>¿No dispones de una cuenta en SeekerPlus? 
\t\t\t\t\t\t<a href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Regístrate ahora</a>
\t\t\t\t\t</h5>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</li>
\t</ul>
\t";
        }
        // line 82
        echo "\t\t
</div>
";
    }

    // line 86
    public function block_content($context, array $blocks = array())
    {
        // line 87
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "information"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 88
            echo "    <div class=\"container page-content fg-dark\" style=\"margin-bottom: -3rem;\">
\t    <div class=\"notify info\">
\t       <span class=\"notify-title\">Tenga en Cuenta</span>
\t       <span class=\"notify-text\">";
            // line 91
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</span>
\t     </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 96
            echo "    <div class=\"container page-content fg-dark\" style=\"margin-bottom: -3rem;\">
\t    <div class=\"notify success\">
\t       <span class=\"notify-title\">Felicitaciones</span>
\t       <span class=\"notify-text\">";
            // line 99
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</span>
\t     </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 104
            echo "    <div class=\"container page-content fg-dark\" style=\"margin-bottom: -3rem;\">
\t    <div class=\"notify alert\">
\t       <span class=\"notify-title\">Error</span>
\t       <span class=\"notify-text\">";
            // line 107
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</span>
\t     </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 112
            echo "    <div class=\"container page-content fg-dark\" style=\"margin-bottom: -3rem;\">
\t    <div class=\"notify warning\">
\t       <span class=\"notify-title\">Cuidado !</span>
\t       <span class=\"notify-text\">";
            // line 115
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</span>
\t     </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "
";
    }

    // line 122
    public function block_footer($context, array $blocks = array())
    {
        // line 123
        echo "<footer>
<div style=\"width: 100%; position: fixed; bottom: 0px; left: 0px; z-index: 100;\" class=\"app-bar drop-up\" data-role=\"appbar\">
\t<a class=\"app-bar-element\">
    \t<span id=\"toggle-tiles-dropdown2\" class=\"mif-apps mif-2x\"></span>
           <div class=\"app-bar-drop-container\" data-role=\"dropdown\" data-toggle-element=\"#toggle-tiles-dropdown2\" data-no-close=\"false\" style=\"width: 324px; display: none;\">
              <div class=\"tile-container bg-white\">
              <div class=\"tile-small bg-cyan\">
                  <div class=\"tile-content iconic\">
                     <span class=\"icon mif-onedrive\"></span>
                  </div>
              </div>
              <div class=\"tile-small bg-yellow\">
                  <div class=\"tile-content iconic\">
                  \t<span class=\"icon mif-google\"></span>
                  </div>
              </div>
              <div class=\"tile-small bg-red\">
                 <div class=\"tile-content iconic\">
                  <span class=\"icon mif-facebook\"></span>
                </div>
              </div>
              <div class=\"tile-small bg-green\">
                <div class=\"tile-content iconic\">
                  <span class=\"icon mif-twitter\"></span>
                </div>
              </div>
            </div>
          </div>
  </a>
 \t<a class=\"app-bar-element\" style=\"margin-left: 12%\">
    \t<span id=\"toggle-tiles-dropdown2\" class=\"mif-map mif-2x\"></span>
   </a>
   <a  class=\"app-bar-element\" style=\"margin-left: 12%\">
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
        return "::app.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 123,  332 => 122,  327 => 119,  317 => 115,  312 => 112,  308 => 111,  298 => 107,  293 => 104,  289 => 103,  279 => 99,  274 => 96,  270 => 95,  260 => 91,  255 => 88,  251 => 87,  248 => 86,  242 => 82,  231 => 74,  225 => 71,  212 => 60,  203 => 54,  197 => 51,  191 => 48,  185 => 45,  179 => 42,  176 => 41,  174 => 40,  162 => 31,  156 => 28,  153 => 27,  150 => 26,  145 => 164,  143 => 122,  140 => 121,  138 => 86,  135 => 85,  132 => 26,  129 => 25,  124 => 22,  119 => 15,  114 => 10,  109 => 8,  104 => 7,  100 => 166,  98 => 25,  94 => 23,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  67 => 16,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  40 => 8,  36 => 7,  28 => 1,);
    }
}
