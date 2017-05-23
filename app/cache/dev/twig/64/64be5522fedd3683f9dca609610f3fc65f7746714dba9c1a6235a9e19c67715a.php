<?php

/* PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig */
class __TwigTemplate_43b26c856e9438a270ac8a90ddfcd21ab6adcb88d7ac7e6243cc720964bbc032 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::accueil.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_beef010f3573953cc50408d81c6d4e13193aaa29c70af4ff31dad847e30c4180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beef010f3573953cc50408d81c6d4e13193aaa29c70af4ff31dad847e30c4180->enter($__internal_beef010f3573953cc50408d81c6d4e13193aaa29c70af4ff31dad847e30c4180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_beef010f3573953cc50408d81c6d4e13193aaa29c70af4ff31dad847e30c4180->leave($__internal_beef010f3573953cc50408d81c6d4e13193aaa29c70af4ff31dad847e30c4180_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b55b5d6fd87ae78d645251f4de75f0c2d248e833a6e84011be66a5d3053b4b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b55b5d6fd87ae78d645251f4de75f0c2d248e833a6e84011be66a5d3053b4b86->enter($__internal_b55b5d6fd87ae78d645251f4de75f0c2d248e833a6e84011be66a5d3053b4b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('bloc1', $context, $blocks);
        
        $__internal_b55b5d6fd87ae78d645251f4de75f0c2d248e833a6e84011be66a5d3053b4b86->leave($__internal_b55b5d6fd87ae78d645251f4de75f0c2d248e833a6e84011be66a5d3053b4b86_prof);

    }

    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_e2dcf88eb7dc428cb999131c54cfe4018c87d35b063c0f669d8d3ae50a422624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2dcf88eb7dc428cb999131c54cfe4018c87d35b063c0f669d8d3ae50a422624->enter($__internal_e2dcf88eb7dc428cb999131c54cfe4018c87d35b063c0f669d8d3ae50a422624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 4
        echo " ";
        $this->loadTemplate("PgGsbFraisBundle:SaisirFrais:erreurs.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 4)->display(array_merge($context, array("leserreurs" => (isset($context["leserreursforfait"]) || array_key_exists("leserreursforfait", $context) ? $context["leserreursforfait"] : (function () { throw new Twig_Error_Runtime('Variable "leserreursforfait" does not exist.', 4, $this->getSourceContext()); })()))));
        // line 5
        $this->loadTemplate("PgGsbFraisBundle:SaisirFrais:saisirfraisforfait.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 5)->display(array_merge($context, array("lesfraisforfait" => (isset($context["lesfraisforfait"]) || array_key_exists("lesfraisforfait", $context) ? $context["lesfraisforfait"] : (function () { throw new Twig_Error_Runtime('Variable "lesfraisforfait" does not exist.', 5, $this->getSourceContext()); })()), "nummois" =>         // line 6
(isset($context["nummois"]) || array_key_exists("nummois", $context) ? $context["nummois"] : (function () { throw new Twig_Error_Runtime('Variable "nummois" does not exist.', 6, $this->getSourceContext()); })()), "numannee" => (isset($context["numannee"]) || array_key_exists("numannee", $context) ? $context["numannee"] : (function () { throw new Twig_Error_Runtime('Variable "numannee" does not exist.', 6, $this->getSourceContext()); })()))));
        // line 7
        echo "
";
        // line 8
        $this->loadTemplate("PgGsbFraisBundle:SaisirFrais:erreurs.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 8)->display(array_merge($context, array("leserreurs" => (isset($context["leserreurshorsforfait"]) || array_key_exists("leserreurshorsforfait", $context) ? $context["leserreurshorsforfait"] : (function () { throw new Twig_Error_Runtime('Variable "leserreurshorsforfait" does not exist.', 8, $this->getSourceContext()); })()))));
        // line 9
        $this->loadTemplate("PgGsbFraisBundle:SaisirFrais:saisirfraishorsforfait.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 9)->display(array_merge($context, array("lesfraishorsforfait" => (isset($context["lesfraishorsforfait"]) || array_key_exists("lesfraishorsforfait", $context) ? $context["lesfraishorsforfait"] : (function () { throw new Twig_Error_Runtime('Variable "lesfraishorsforfait" does not exist.', 9, $this->getSourceContext()); })()))));
        
        $__internal_e2dcf88eb7dc428cb999131c54cfe4018c87d35b063c0f669d8d3ae50a422624->leave($__internal_e2dcf88eb7dc428cb999131c54cfe4018c87d35b063c0f669d8d3ae50a422624_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  62 => 8,  59 => 7,  57 => 6,  56 => 5,  53 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PgGsbFraisBundle::accueil.html.twig\" %}
{% block body %}
{% block bloc1 %}
 {% include 'PgGsbFraisBundle:SaisirFrais:erreurs.html.twig' with {'leserreurs':leserreursforfait} %}
{% include 'PgGsbFraisBundle:SaisirFrais:saisirfraisforfait.html.twig' with {'lesfraisforfait':lesfraisforfait,
'nummois':nummois,'numannee':numannee} %}

{% include 'PgGsbFraisBundle:SaisirFrais:erreurs.html.twig' with {'leserreurs':leserreurshorsforfait} %}
{% include 'PgGsbFraisBundle:SaisirFrais:saisirfraishorsforfait.html.twig' with {'lesfraishorsforfait':lesfraishorsforfait} %}
{% endblock %}
{% endblock %}

", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", "/var/www/html/GSB-E4/src/Pg/GsbFraisBundle/Resources/views/SaisirFrais/saisirtouslesfrais.html.twig");
    }
}
