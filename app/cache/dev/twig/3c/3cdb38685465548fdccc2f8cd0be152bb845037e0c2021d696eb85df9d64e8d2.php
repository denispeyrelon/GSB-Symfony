<?php

/* PgGsbFraisBundle:ListeFrais:listetouslesfrais.html.twig */
class __TwigTemplate_6a366f632efc57552d58e43e73a5d91425a747023aa18b815176b95d93a6aaab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7973e00a435f7f86412206222010bd4340aee0234b8abe611f9d8140231e12a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7973e00a435f7f86412206222010bd4340aee0234b8abe611f9d8140231e12a2->enter($__internal_7973e00a435f7f86412206222010bd4340aee0234b8abe611f9d8140231e12a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:ListeFrais:listetouslesfrais.html.twig"));

        // line 1
        $this->loadTemplate("PgGsbFraisBundle:ListeFrais:listemois.html.twig", "PgGsbFraisBundle:ListeFrais:listetouslesfrais.html.twig", 1)->display(array_merge($context, array("lesmois" => (isset($context["lesmois"]) || array_key_exists("lesmois", $context) ? $context["lesmois"] : (function () { throw new Twig_Error_Runtime('Variable "lesmois" does not exist.', 1, $this->getSourceContext()); })()), "lemois" => (isset($context["lemois"]) || array_key_exists("lemois", $context) ? $context["lemois"] : (function () { throw new Twig_Error_Runtime('Variable "lemois" does not exist.', 1, $this->getSourceContext()); })()))));
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("PgGsbFraisBundle:ListeFrais:listefraisforfait.html.twig", "PgGsbFraisBundle:ListeFrais:listetouslesfrais.html.twig", 3)->display(array_merge($context, array("lesfraisforfait" => (isset($context["lesfraisforfait"]) || array_key_exists("lesfraisforfait", $context) ? $context["lesfraisforfait"] : (function () { throw new Twig_Error_Runtime('Variable "lesfraisforfait" does not exist.', 3, $this->getSourceContext()); })()), "numannee" => (isset($context["numannee"]) || array_key_exists("numannee", $context) ? $context["numannee"] : (function () { throw new Twig_Error_Runtime('Variable "numannee" does not exist.', 3, $this->getSourceContext()); })()), "nummois" =>         // line 4
(isset($context["nummois"]) || array_key_exists("nummois", $context) ? $context["nummois"] : (function () { throw new Twig_Error_Runtime('Variable "nummois" does not exist.', 4, $this->getSourceContext()); })()), "libetat" => (isset($context["libetat"]) || array_key_exists("libetat", $context) ? $context["libetat"] : (function () { throw new Twig_Error_Runtime('Variable "libetat" does not exist.', 4, $this->getSourceContext()); })()), "montantvalide" => (isset($context["montantvalide"]) || array_key_exists("montantvalide", $context) ? $context["montantvalide"] : (function () { throw new Twig_Error_Runtime('Variable "montantvalide" does not exist.', 4, $this->getSourceContext()); })()), "datemodif" => (isset($context["datemodif"]) || array_key_exists("datemodif", $context) ? $context["datemodif"] : (function () { throw new Twig_Error_Runtime('Variable "datemodif" does not exist.', 4, $this->getSourceContext()); })()))));
        // line 5
        echo "
";
        // line 6
        $this->loadTemplate("PgGsbFraisBundle:ListeFrais:listefraishorsforfait.html.twig", "PgGsbFraisBundle:ListeFrais:listetouslesfrais.html.twig", 6)->display(array_merge($context, array("lesfraishorsforfait" => (isset($context["lesfraishorsforfait"]) || array_key_exists("lesfraishorsforfait", $context) ? $context["lesfraishorsforfait"] : (function () { throw new Twig_Error_Runtime('Variable "lesfraishorsforfait" does not exist.', 6, $this->getSourceContext()); })()), "nbjustificatifs" =>         // line 7
(isset($context["nbjustificatifs"]) || array_key_exists("nbjustificatifs", $context) ? $context["nbjustificatifs"] : (function () { throw new Twig_Error_Runtime('Variable "nbjustificatifs" does not exist.', 7, $this->getSourceContext()); })()))));
        
        $__internal_7973e00a435f7f86412206222010bd4340aee0234b8abe611f9d8140231e12a2->leave($__internal_7973e00a435f7f86412206222010bd4340aee0234b8abe611f9d8140231e12a2_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:ListeFrais:listetouslesfrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  33 => 6,  30 => 5,  28 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'PgGsbFraisBundle:ListeFrais:listemois.html.twig' with {'lesmois':lesmois,'lemois':lemois} %}

{% include 'PgGsbFraisBundle:ListeFrais:listefraisforfait.html.twig' with {'lesfraisforfait':lesfraisforfait,'numannee':numannee,
'nummois':nummois,'libetat':libetat,'montantvalide':montantvalide,'datemodif':datemodif} %}

{% include 'PgGsbFraisBundle:ListeFrais:listefraishorsforfait.html.twig' with {'lesfraishorsforfait':lesfraishorsforfait,
'nbjustificatifs':nbjustificatifs} %}", "PgGsbFraisBundle:ListeFrais:listetouslesfrais.html.twig", "/var/www/html/GSB-E4/src/Pg/GsbFraisBundle/Resources/views/ListeFrais/listetouslesfrais.html.twig");
    }
}
