<?php

/* PgGsbFraisBundle:SaisirFrais:saisirfraishorsforfait.html.twig */
class __TwigTemplate_b9e9239fe4003db0ec009463eb9eb4c678ba19ee1a77cd1a1b2a3a65ef7959b8 extends Twig_Template
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
        $__internal_e9b655ad6efa2789b79720b26fed77cd39763325252c070ced1fdde01893928a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9b655ad6efa2789b79720b26fed77cd39763325252c070ced1fdde01893928a->enter($__internal_e9b655ad6efa2789b79720b26fed77cd39763325252c070ced1fdde01893928a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:SaisirFrais:saisirfraishorsforfait.html.twig"));

        // line 1
        echo "<div id=\"contenu\">
<table class=\"listeLegere\">
  \t   <caption>Descriptif des éléments hors forfait
       </caption>
             <tr>
                <th class=\"date\">Date</th>
\t\t\t\t<th class=\"libelle\">Libellé</th>  
                <th class=\"montant\">Montant</th>  
                <th class=\"action\">&nbsp;</th>              
             </tr>
 \t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesfraishorsforfait"]) || array_key_exists("lesfraishorsforfait", $context) ? $context["lesfraishorsforfait"] : (function () { throw new Twig_Error_Runtime('Variable "lesfraishorsforfait" does not exist.', 11, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
            // line 12
            echo "             ";
            $context["libelle"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["unfrais"], "libelle", array());
            // line 13
            echo "             ";
            $context["date"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["unfrais"], "date", array());
            // line 14
            echo "             ";
            $context["montant"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["unfrais"], "montant", array());
            // line 15
            echo "             ";
            $context["idfrais"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["unfrais"], "id", array());
            // line 16
            echo "             <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new Twig_Error_Runtime('Variable "date" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["libelle"]) || array_key_exists("libelle", $context) ? $context["libelle"] : (function () { throw new Twig_Error_Runtime('Variable "libelle" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["montant"]) || array_key_exists("montant", $context) ? $context["montant"] : (function () { throw new Twig_Error_Runtime('Variable "montant" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_supprimerfraishorsforfait", array("id" => (isset($context["idfrais"]) || array_key_exists("idfrais", $context) ? $context["idfrais"] : (function () { throw new Twig_Error_Runtime('Variable "idfrais" does not exist.', 20, $this->getSourceContext()); })()))), "html", null, true);
            echo "\" 
\t\t\t\tonclick=\"return confirm('Voulez-vous vraiment supprimer ce frais?');\">Supprimer ce frais</a></td>
             </tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  
                                          
    </table>
      <form action=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_validerfraishorsforfais");
        echo "\" method=\"post\">
      <div class=\"corpsForm\">
         
          <fieldset>
            <legend>Nouvel élément hors forfait
            </legend>
            <p>
              <label for=\"txtDateHF\">Date (jj/mm/aaaa): </label>
              <input type=\"text\" id=\"txtDateHF\" name=\"dateFrais\" size=\"10\" maxlength=\"10\" value=\"\"  />
            </p>
            <p>
              <label for=\"txtLibelleHF\">Libellé</label>
              <input type=\"text\" id=\"txtLibelleHF\" name=\"libelle\" size=\"70\" maxlength=\"256\" value=\"\" />
            </p>
            <p>
              <label for=\"txtMontantHF\">Montant : </label>
              <input type=\"text\" id=\"txtMontantHF\" name=\"montant\" size=\"10\" maxlength=\"10\" value=\"\" />
            </p>
          </fieldset>
      </div>
      <div class=\"piedForm\">
      <p>
        <input id=\"ajouter\" type=\"submit\" value=\"Ajouter\" size=\"20\" />
        <input id=\"effacer\" type=\"reset\" value=\"Effacer\" size=\"20\" />
      </p> 
      </div>
        
      </form>
</div>";
        
        $__internal_e9b655ad6efa2789b79720b26fed77cd39763325252c070ced1fdde01893928a->leave($__internal_e9b655ad6efa2789b79720b26fed77cd39763325252c070ced1fdde01893928a_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:SaisirFrais:saisirfraishorsforfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 26,  75 => 23,  65 => 20,  61 => 19,  57 => 18,  53 => 17,  50 => 16,  47 => 15,  44 => 14,  41 => 13,  38 => 12,  34 => 11,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"contenu\">
<table class=\"listeLegere\">
  \t   <caption>Descriptif des éléments hors forfait
       </caption>
             <tr>
                <th class=\"date\">Date</th>
\t\t\t\t<th class=\"libelle\">Libellé</th>  
                <th class=\"montant\">Montant</th>  
                <th class=\"action\">&nbsp;</th>              
             </tr>
 \t{% for unfrais in  lesfraishorsforfait %}
             {% set libelle = unfrais.libelle %}
             {% set date = unfrais.date %}
             {% set montant = unfrais.montant %}
             {% set idfrais = unfrais.id %}
             <tr>
                <td>{{date}}</td>
                <td>{{libelle}}</td>
                <td>{{montant}}</td>
                <td><a href=\"{{path('pg_gsb_frais_supprimerfraishorsforfait',{'id' : idfrais})}}\" 
\t\t\t\tonclick=\"return confirm('Voulez-vous vraiment supprimer ce frais?');\">Supprimer ce frais</a></td>
             </tr>
\t{%endfor%}  
                                          
    </table>
      <form action=\"{{path('pg_gsb_frais_validerfraishorsforfais')}}\" method=\"post\">
      <div class=\"corpsForm\">
         
          <fieldset>
            <legend>Nouvel élément hors forfait
            </legend>
            <p>
              <label for=\"txtDateHF\">Date (jj/mm/aaaa): </label>
              <input type=\"text\" id=\"txtDateHF\" name=\"dateFrais\" size=\"10\" maxlength=\"10\" value=\"\"  />
            </p>
            <p>
              <label for=\"txtLibelleHF\">Libellé</label>
              <input type=\"text\" id=\"txtLibelleHF\" name=\"libelle\" size=\"70\" maxlength=\"256\" value=\"\" />
            </p>
            <p>
              <label for=\"txtMontantHF\">Montant : </label>
              <input type=\"text\" id=\"txtMontantHF\" name=\"montant\" size=\"10\" maxlength=\"10\" value=\"\" />
            </p>
          </fieldset>
      </div>
      <div class=\"piedForm\">
      <p>
        <input id=\"ajouter\" type=\"submit\" value=\"Ajouter\" size=\"20\" />
        <input id=\"effacer\" type=\"reset\" value=\"Effacer\" size=\"20\" />
      </p> 
      </div>
        
      </form>
</div>", "PgGsbFraisBundle:SaisirFrais:saisirfraishorsforfait.html.twig", "/var/www/html/GSB-E4/src/Pg/GsbFraisBundle/Resources/views/SaisirFrais/saisirfraishorsforfait.html.twig");
    }
}
