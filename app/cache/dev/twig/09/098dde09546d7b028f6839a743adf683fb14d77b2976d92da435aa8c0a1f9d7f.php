<?php

/* PgGsbFraisBundle:SaisirFrais:erreurs.html.twig */
class __TwigTemplate_fef792db8e536a80d7eaa78915d3ddd6570d4966e6ec3e49ef680233aca4520b extends Twig_Template
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
        $__internal_9888f13e7549e89c3a337b31de619d3f32055959751ceb74f6474f6c9eeb7a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9888f13e7549e89c3a337b31de619d3f32055959751ceb74f6474f6c9eeb7a60->enter($__internal_9888f13e7549e89c3a337b31de619d3f32055959751ceb74f6474f6c9eeb7a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:SaisirFrais:erreurs.html.twig"));

        // line 1
        echo "<div class =\"erreur\">
<ul>
 ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leserreurs"]) || array_key_exists("leserreurs", $context) ? $context["leserreurs"] : (function () { throw new Twig_Error_Runtime('Variable "leserreurs" does not exist.', 3, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["erreur"]) {
            // line 4
            echo "\t
      <li>";
            // line 5
            echo twig_escape_filter($this->env, $context["erreur"], "html", null, true);
            echo "</li>
\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['erreur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul></div>
";
        
        $__internal_9888f13e7549e89c3a337b31de619d3f32055959751ceb74f6474f6c9eeb7a60->leave($__internal_9888f13e7549e89c3a337b31de619d3f32055959751ceb74f6474f6c9eeb7a60_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:SaisirFrais:erreurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  33 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class =\"erreur\">
<ul>
 {% for erreur in  leserreurs %}
\t
      <li>{{erreur}}</li>
\t
{%endfor%}
</ul></div>
", "PgGsbFraisBundle:SaisirFrais:erreurs.html.twig", "/var/www/html/GSB-E4/src/Pg/GsbFraisBundle/Resources/views/SaisirFrais/erreurs.html.twig");
    }
}
