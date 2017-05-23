<?php

/* PgGsbFraisBundle::accueil.html.twig */
class __TwigTemplate_5ab8ddc96f54074c016fa5fa6d748460e6c520e8de35df5a445d0e55c4bbd92e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::layout.html.twig", "PgGsbFraisBundle::accueil.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_696d5303d3ad5fd7f09931fbdbfb4fcf026b068d53564a2bafa4805e52d1368f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696d5303d3ad5fd7f09931fbdbfb4fcf026b068d53564a2bafa4805e52d1368f->enter($__internal_696d5303d3ad5fd7f09931fbdbfb4fcf026b068d53564a2bafa4805e52d1368f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle::accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_696d5303d3ad5fd7f09931fbdbfb4fcf026b068d53564a2bafa4805e52d1368f->leave($__internal_696d5303d3ad5fd7f09931fbdbfb4fcf026b068d53564a2bafa4805e52d1368f_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        $__internal_113e4248be09f8b33e075b037a49b85ec6b2c5e1bf268a031e186f75dcc7bbef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_113e4248be09f8b33e075b037a49b85ec6b2c5e1bf268a031e186f75dcc7bbef->enter($__internal_113e4248be09f8b33e075b037a49b85ec6b2c5e1bf268a031e186f75dcc7bbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 3
        echo "<div id=\"menuGauche\">
     <div id=\"infosUtil\">
         <h3>
            ";
        // line 6
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "session", array(), "any", false, true), "get", array(0 => "nom"), "method", true, true)) {
            // line 7
            echo "                           Visiteur: bonjour ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "nom"), "method"), "html", null, true);
            echo "<br>
            ";
        }
        // line 9
        echo "        </h3>
     </div>
        <ul id=\"menuList\">
\t   <li class=\"smenu\">
              <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_saisirfrais");
        echo "\" title=\"Saisie fiche de frais \">Saisie fiche de frais</a>
           </li>
           <li class=\"smenu\">
              <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_listefrais");
        echo "\" title=\"Consultation de mes fiches de frais\">Mes fiches de frais</a>
           </li>
           <li class=\"smenu\">
              <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_deconnexion");
        echo "\" title=\"Se déconnecter\">Déconnexion</a>
           </li>
         </ul>
     </div>
";
        
        $__internal_113e4248be09f8b33e075b037a49b85ec6b2c5e1bf268a031e186f75dcc7bbef->leave($__internal_113e4248be09f8b33e075b037a49b85ec6b2c5e1bf268a031e186f75dcc7bbef_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle::accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  65 => 16,  59 => 13,  53 => 9,  47 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PgGsbFraisBundle::layout.html.twig\" %}
{% block menu %}
<div id=\"menuGauche\">
     <div id=\"infosUtil\">
         <h3>
            {%if(app.session.get('nom') is defined )%}
                           Visiteur: bonjour {{app.session.get('nom')}}<br>
            {%endif%}
        </h3>
     </div>
        <ul id=\"menuList\">
\t   <li class=\"smenu\">
              <a href=\"{{path('pg_gsb_frais_saisirfrais')}}\" title=\"Saisie fiche de frais \">Saisie fiche de frais</a>
           </li>
           <li class=\"smenu\">
              <a href=\"{{path('pg_gsb_frais_listefrais')}}\" title=\"Consultation de mes fiches de frais\">Mes fiches de frais</a>
           </li>
           <li class=\"smenu\">
              <a href=\"{{path('pg_gsb_frais_deconnexion')}}\" title=\"Se déconnecter\">Déconnexion</a>
           </li>
         </ul>
     </div>
{% endblock%}


{#
 <li class=\"smenu\">
              <a href=\"{{path('pg_gsb_frais_saisirfrais')}}\" title=\"Saisie fiche de frais \">Saisie fiche de frais</a>
           </li>
           <li class=\"smenu\">
              <a href=\"{{path('pg_gsb_frais_listefrais')}}\" title=\"Consultation de mes fiches de frais\">Mes fiches de frais</a>
           </li>
#}
", "PgGsbFraisBundle::accueil.html.twig", "/var/www/html/GSB-E4/src/Pg/GsbFraisBundle/Resources/views/accueil.html.twig");
    }
}
