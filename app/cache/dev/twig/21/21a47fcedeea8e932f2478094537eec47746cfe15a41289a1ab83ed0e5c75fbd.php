<?php

/* PgGsbFraisBundle:SaisirFrais:saisirfraisforfait.html.twig */
class __TwigTemplate_5d8c5bfb8dd3a384c530cc8ef443c6fe58f0d4879a35a59823ab210409327f18 extends Twig_Template
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
        $__internal_5871123a0a30439a155548938d3bce954309932982a0420ae390453f6591dc24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5871123a0a30439a155548938d3bce954309932982a0420ae390453f6591dc24->enter($__internal_5871123a0a30439a155548938d3bce954309932982a0420ae390453f6591dc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:SaisirFrais:saisirfraisforfait.html.twig"));

        // line 1
        echo "<div id=\"contenu\">
      <h2>Renseigner ma fiche de frais du mois ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["nummois"]) || array_key_exists("nummois", $context) ? $context["nummois"] : (function () { throw new Twig_Error_Runtime('Variable "nummois" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["numannee"]) || array_key_exists("numannee", $context) ? $context["numannee"] : (function () { throw new Twig_Error_Runtime('Variable "numannee" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo "</h2>
      <form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_saisirfrais");
        echo "\" method=\"POST\">
          <div class=\"corpsForm\">
              <fieldset>
                <legend>Eléments forfaitisés</legend>
                     ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesfraisforfait"]) || array_key_exists("lesfraisforfait", $context) ? $context["lesfraisforfait"] : (function () { throw new Twig_Error_Runtime('Variable "lesfraisforfait" does not exist.', 7, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
            // line 8
            echo "                         ";
            $context["idfrais"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["unfrais"], "idfrais", array());
            // line 9
            echo "                         ";
            $context["libelle"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["unfrais"], "libelle", array());
            // line 10
            echo "                         ";
            $context["quantite"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["unfrais"], "quantite", array());
            // line 11
            echo "                        <p>
                            <label for=\"idFrais\">";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["libelle"]) || array_key_exists("libelle", $context) ? $context["libelle"] : (function () { throw new Twig_Error_Runtime('Variable "libelle" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
            echo "</label>
                            <input type=\"text\" id=\"idFrais\" name=\"lesFrais[";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["idfrais"]) || array_key_exists("idfrais", $context) ? $context["idfrais"] : (function () { throw new Twig_Error_Runtime('Variable "idfrais" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "]\" size=\"10\" maxlength=\"5\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["quantite"]) || array_key_exists("quantite", $context) ? $context["quantite"] : (function () { throw new Twig_Error_Runtime('Variable "quantite" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\" >
                        </p>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "              </fieldset>
          </div>
          <div class=\"piedForm\">
          <p>
            <input id=\"ok\" type=\"submit\" value=\"Valider\" size=\"20\" />
            <input id=\"annuler\" type=\"reset\" value=\"Effacer\" size=\"20\" />
          </p> 
          </div>
      </form>
</div>
 
      ";
        
        $__internal_5871123a0a30439a155548938d3bce954309932982a0420ae390453f6591dc24->leave($__internal_5871123a0a30439a155548938d3bce954309932982a0420ae390453f6591dc24_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:SaisirFrais:saisirfraisforfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  58 => 13,  54 => 12,  51 => 11,  48 => 10,  45 => 9,  42 => 8,  38 => 7,  31 => 3,  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"contenu\">
      <h2>Renseigner ma fiche de frais du mois {{nummois}}-{{numannee}}</h2>
      <form action=\"{{path('pg_gsb_frais_saisirfrais')}}\" method=\"POST\">
          <div class=\"corpsForm\">
              <fieldset>
                <legend>Eléments forfaitisés</legend>
                     {% for unfrais in  lesfraisforfait %}
                         {% set idfrais = unfrais.idfrais %}
                         {% set libelle = unfrais.libelle %}
                         {% set quantite = unfrais.quantite %}
                        <p>
                            <label for=\"idFrais\">{{libelle}}</label>
                            <input type=\"text\" id=\"idFrais\" name=\"lesFrais[{{idfrais}}]\" size=\"10\" maxlength=\"5\" value=\"{{quantite}}\" >
                        </p>
                      {%endfor%}
              </fieldset>
          </div>
          <div class=\"piedForm\">
          <p>
            <input id=\"ok\" type=\"submit\" value=\"Valider\" size=\"20\" />
            <input id=\"annuler\" type=\"reset\" value=\"Effacer\" size=\"20\" />
          </p> 
          </div>
      </form>
</div>
 
      ", "PgGsbFraisBundle:SaisirFrais:saisirfraisforfait.html.twig", "/var/www/html/GSB-E4/src/Pg/GsbFraisBundle/Resources/views/SaisirFrais/saisirfraisforfait.html.twig");
    }
}
