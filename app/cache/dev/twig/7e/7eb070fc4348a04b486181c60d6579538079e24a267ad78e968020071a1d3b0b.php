<?php

/* PgGsbFraisBundle:ListeFrais:listefraishorsforfait.html.twig */
class __TwigTemplate_c508f3897a1ae0b397fa0edab78f8582b85a509acb1af130261c1dced2239caa extends Twig_Template
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
        $__internal_04e260feba791f656d5bd1bdb354e52a9c684409f6caa0c5e5a8d23923c73a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e260feba791f656d5bd1bdb354e52a9c684409f6caa0c5e5a8d23923c73a3e->enter($__internal_04e260feba791f656d5bd1bdb354e52a9c684409f6caa0c5e5a8d23923c73a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:ListeFrais:listefraishorsforfait.html.twig"));

        // line 1
        echo "<table class=\"listeLegere\">
  \t   <caption>Descriptif des éléments hors forfait -";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["nbjustificatifs"]) || array_key_exists("nbjustificatifs", $context) ? $context["nbjustificatifs"] : (function () { throw new Twig_Error_Runtime('Variable "nbjustificatifs" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo " justificatifs reçus -
       </caption>
             <tr>
                <th class=\"date\">Date</th>
                <th class=\"libelle\">Libellé</th>
                <th class='montant'>Montant</th>                
             </tr>
         ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesfraishorsforfait"]) || array_key_exists("lesfraishorsforfait", $context) ? $context["lesfraishorsforfait"] : (function () { throw new Twig_Error_Runtime('Variable "lesfraishorsforfait" does not exist.', 9, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["unFrais"]) {
            // line 10
            echo "\t\t";
            $context["date"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["unFrais"], "date", array());
            // line 11
            echo "                ";
            $context["libelle"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["unFrais"], "libelle", array());
            // line 12
            echo "                ";
            $context["montant"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["unFrais"], "montant", array());
            // line 13
            echo "                <tr>
                    <td>";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new Twig_Error_Runtime('Variable "date" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
            echo "</td>
                    <td>";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["libelle"]) || array_key_exists("libelle", $context) ? $context["libelle"] : (function () { throw new Twig_Error_Runtime('Variable "libelle" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo "</td>
                    <td>";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["montant"]) || array_key_exists("montant", $context) ? $context["montant"] : (function () { throw new Twig_Error_Runtime('Variable "montant" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
            echo "</td>
                </tr>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  
    </table>
 ";
        
        $__internal_04e260feba791f656d5bd1bdb354e52a9c684409f6caa0c5e5a8d23923c73a3e->leave($__internal_04e260feba791f656d5bd1bdb354e52a9c684409f6caa0c5e5a8d23923c73a3e_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:ListeFrais:listefraishorsforfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 18,  59 => 16,  55 => 15,  51 => 14,  48 => 13,  45 => 12,  42 => 11,  39 => 10,  35 => 9,  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"listeLegere\">
  \t   <caption>Descriptif des éléments hors forfait -{{nbjustificatifs}} justificatifs reçus -
       </caption>
             <tr>
                <th class=\"date\">Date</th>
                <th class=\"libelle\">Libellé</th>
                <th class='montant'>Montant</th>                
             </tr>
         {% for unFrais in  lesfraishorsforfait %}
\t\t{% set date = unFrais.date%}
                {% set libelle = unFrais.libelle%}
                {% set montant = unFrais.montant%}
                <tr>
                    <td>{{date}}</td>
                    <td>{{libelle}}</td>
                    <td>{{montant}}</td>
                </tr>
           {% endfor %}  
    </table>
 ", "PgGsbFraisBundle:ListeFrais:listefraishorsforfait.html.twig", "/var/www/html/GSB-E4/src/Pg/GsbFraisBundle/Resources/views/ListeFrais/listefraishorsforfait.html.twig");
    }
}
