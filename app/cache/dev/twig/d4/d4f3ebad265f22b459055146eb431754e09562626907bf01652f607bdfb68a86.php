<?php

/* PgGsbFraisBundle:Home:connexion.html.twig */
class __TwigTemplate_081cd7a7a9eda0b97adcc5cfa79301e13f77d3549ade9c0343c6c59b556eac01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::layout.html.twig", "PgGsbFraisBundle:Home:connexion.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_580f828ef613a1c927fb31acef7d837a5ea05651402153837cf41d36cf71f80a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_580f828ef613a1c927fb31acef7d837a5ea05651402153837cf41d36cf71f80a->enter($__internal_580f828ef613a1c927fb31acef7d837a5ea05651402153837cf41d36cf71f80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:Home:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_580f828ef613a1c927fb31acef7d837a5ea05651402153837cf41d36cf71f80a->leave($__internal_580f828ef613a1c927fb31acef7d837a5ea05651402153837cf41d36cf71f80a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5d94c8ca822db598d9c9416de5c41c486d39befa560bad1699c37bf7f942038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d94c8ca822db598d9c9416de5c41c486d39befa560bad1699c37bf7f942038->enter($__internal_a5d94c8ca822db598d9c9416de5c41c486d39befa560bad1699c37bf7f942038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo " ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 24
        echo "    
    ";
        
        $__internal_a5d94c8ca822db598d9c9416de5c41c486d39befa560bad1699c37bf7f942038->leave($__internal_a5d94c8ca822db598d9c9416de5c41c486d39befa560bad1699c37bf7f942038_prof);

    }

    // line 3
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_82fef2d27fe30afc9780aea79cf2f6277e7475f6729944765a40cc30fe2e5c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82fef2d27fe30afc9780aea79cf2f6277e7475f6729944765a40cc30fe2e5c0e->enter($__internal_82fef2d27fe30afc9780aea79cf2f6277e7475f6729944765a40cc30fe2e5c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        echo " 
 <div id=\"contenu\">
      <h2>Identification utilisateur</h2>
      ";
        // line 6
        if (array_key_exists("message", $context)) {
            // line 7
            echo "            <div class =\"erreur\">
            <ul>";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "</ul></div>
      ";
        }
        // line 10
        echo "<form method=\"POST\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_validerconnexion");
        echo "\">
        <p>
          <label for=\"nom\">Login*</label>
           <input id=\"login\" type=\"text\" name=\"login\"  size=\"30\" maxlength=\"45\">
        </p>
\t<p>
            <label for=\"mdp\">Mot de passe*</label>
            <input id=\"mdp\"  type=\"password\"  name=\"mdp\" size=\"30\" maxlength=\"45\">
        </p>
         <input type=\"submit\" value=\"Valider\" name=\"valider\">
         <input type=\"reset\" value=\"Annuler\" name=\"annuler\"> 
      </p>
</form>
</div>
    ";
        
        $__internal_82fef2d27fe30afc9780aea79cf2f6277e7475f6729944765a40cc30fe2e5c0e->leave($__internal_82fef2d27fe30afc9780aea79cf2f6277e7475f6729944765a40cc30fe2e5c0e_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:Home:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  67 => 8,  64 => 7,  62 => 6,  52 => 3,  44 => 24,  41 => 3,  35 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PgGsbFraisBundle::layout.html.twig\" %}
{% block body %}
 {% block bloc1 %} 
 <div id=\"contenu\">
      <h2>Identification utilisateur</h2>
      {%if(message is defined )%}
            <div class =\"erreur\">
            <ul>{{message}}</ul></div>
      {%endif%}
<form method=\"POST\" action=\"{{path('pg_gsb_frais_validerconnexion')}}\">
        <p>
          <label for=\"nom\">Login*</label>
           <input id=\"login\" type=\"text\" name=\"login\"  size=\"30\" maxlength=\"45\">
        </p>
\t<p>
            <label for=\"mdp\">Mot de passe*</label>
            <input id=\"mdp\"  type=\"password\"  name=\"mdp\" size=\"30\" maxlength=\"45\">
        </p>
         <input type=\"submit\" value=\"Valider\" name=\"valider\">
         <input type=\"reset\" value=\"Annuler\" name=\"annuler\"> 
      </p>
</form>
</div>
    {% endblock %}    
    {% endblock%}
     ", "PgGsbFraisBundle:Home:connexion.html.twig", "/var/www/html/GSB-E4/src/Pg/GsbFraisBundle/Resources/views/Home/connexion.html.twig");
    }
}
