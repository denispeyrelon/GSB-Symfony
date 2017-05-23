<?php

/* PgGsbFraisBundle:ListeFrais:listefraisforfait.html.twig */
class __TwigTemplate_f55e2db26e5842a017c87f2f3c923422e8537d372d6a8101521416bdb818c520 extends Twig_Template
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
        $__internal_7cdf15b0ba68be649219273bc9a16de1b2f775ddc8d7fe640185b3c66938088f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cdf15b0ba68be649219273bc9a16de1b2f775ddc8d7fe640185b3c66938088f->enter($__internal_7cdf15b0ba68be649219273bc9a16de1b2f775ddc8d7fe640185b3c66938088f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:ListeFrais:listefraisforfait.html.twig"));

        // line 1
        echo "<h3>Fiche de frais du mois ";
        echo twig_escape_filter($this->env, (isset($context["nummois"]) || array_key_exists("nummois", $context) ? $context["nummois"] : (function () { throw new Twig_Error_Runtime('Variable "nummois" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["numannee"]) || array_key_exists("numannee", $context) ? $context["numannee"] : (function () { throw new Twig_Error_Runtime('Variable "numannee" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo " : 
    </h3>
    <div class=\"encadre\">
    <p>
        Etat : ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["libetat"]) || array_key_exists("libetat", $context) ? $context["libetat"] : (function () { throw new Twig_Error_Runtime('Variable "libetat" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo " depuis le ";
        echo twig_escape_filter($this->env, (isset($context["datemodif"]) || array_key_exists("datemodif", $context) ? $context["datemodif"] : (function () { throw new Twig_Error_Runtime('Variable "datemodif" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo " <br> Montant validé : ";
        echo twig_escape_filter($this->env, (isset($context["montantvalide"]) || array_key_exists("montantvalide", $context) ? $context["montantvalide"] : (function () { throw new Twig_Error_Runtime('Variable "montantvalide" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "
   </p>
  \t<table class=\"listeLegere\">
  \t   <caption>Eléments forfaitisés </caption>
        <tr>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesfraisforfait"]) || array_key_exists("lesfraisforfait", $context) ? $context["lesfraisforfait"] : (function () { throw new Twig_Error_Runtime('Variable "lesfraisforfait" does not exist.', 10, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
            // line 11
            echo "          ";
            $context["libelle"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["unfrais"], "libelle", array());
            // line 12
            echo "\t\t<th> ";
            echo twig_escape_filter($this->env, (isset($context["libelle"]) || array_key_exists("libelle", $context) ? $context["libelle"] : (function () { throw new Twig_Error_Runtime('Variable "libelle" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
            echo "</th>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  
\t</tr>
        <tr>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesfraisforfait"]) || array_key_exists("lesfraisforfait", $context) ? $context["lesfraisforfait"] : (function () { throw new Twig_Error_Runtime('Variable "lesfraisforfait" does not exist.', 16, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
            // line 17
            echo "\t  ";
            $context["quantite"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["unfrais"], "quantite", array());
            // line 18
            echo "\t       <td class=\"qteForfait\">";
            echo twig_escape_filter($this->env, (isset($context["quantite"]) || array_key_exists("quantite", $context) ? $context["quantite"] : (function () { throw new Twig_Error_Runtime('Variable "quantite" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
            echo " </td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "  
\t</tr>
    </table>
   </div>
 
";
        
        $__internal_7cdf15b0ba68be649219273bc9a16de1b2f775ddc8d7fe640185b3c66938088f->leave($__internal_7cdf15b0ba68be649219273bc9a16de1b2f775ddc8d7fe640185b3c66938088f_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:ListeFrais:listefraisforfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  72 => 18,  69 => 17,  65 => 16,  60 => 13,  51 => 12,  48 => 11,  44 => 10,  32 => 5,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Fiche de frais du mois {{nummois}}-{{numannee}} : 
    </h3>
    <div class=\"encadre\">
    <p>
        Etat : {{libetat}} depuis le {{datemodif}} <br> Montant validé : {{montantvalide}}
   </p>
  \t<table class=\"listeLegere\">
  \t   <caption>Eléments forfaitisés </caption>
        <tr>
    {% for unfrais in  lesfraisforfait %}
          {%   set libelle = unfrais.libelle %}
\t\t<th> {{libelle}}</th>
    {% endfor %}  
\t</tr>
        <tr>
    {% for unfrais in  lesfraisforfait %}
\t  {%   set quantite = unfrais.quantite %}
\t       <td class=\"qteForfait\">{{quantite}} </td>
    {% endfor %}  
\t</tr>
    </table>
   </div>
 
", "PgGsbFraisBundle:ListeFrais:listefraisforfait.html.twig", "/var/www/html/GSB-E4/src/Pg/GsbFraisBundle/Resources/views/ListeFrais/listefraisforfait.html.twig");
    }
}
