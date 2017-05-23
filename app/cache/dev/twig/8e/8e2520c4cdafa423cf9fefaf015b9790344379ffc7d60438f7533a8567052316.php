<?php

/* PgGsbFraisBundle:ListeFrais:listemois.html.twig */
class __TwigTemplate_456c88509de78e29919151ff5b5781b77913ca49e635a758e48421585553670e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::accueil.html.twig", "PgGsbFraisBundle:ListeFrais:listemois.html.twig", 1);
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
        $__internal_3dc35613f54ab5f54946842320ff3b13a0f9564d3977df924c0c8e39cc33a7cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc35613f54ab5f54946842320ff3b13a0f9564d3977df924c0c8e39cc33a7cc->enter($__internal_3dc35613f54ab5f54946842320ff3b13a0f9564d3977df924c0c8e39cc33a7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:ListeFrais:listemois.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dc35613f54ab5f54946842320ff3b13a0f9564d3977df924c0c8e39cc33a7cc->leave($__internal_3dc35613f54ab5f54946842320ff3b13a0f9564d3977df924c0c8e39cc33a7cc_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_05cf2aa3d0c6333d54d1bb4082331d9771ea6b063f25f6ac1cee7e569946c8ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05cf2aa3d0c6333d54d1bb4082331d9771ea6b063f25f6ac1cee7e569946c8ff->enter($__internal_05cf2aa3d0c6333d54d1bb4082331d9771ea6b063f25f6ac1cee7e569946c8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('bloc1', $context, $blocks);
        
        $__internal_05cf2aa3d0c6333d54d1bb4082331d9771ea6b063f25f6ac1cee7e569946c8ff->leave($__internal_05cf2aa3d0c6333d54d1bb4082331d9771ea6b063f25f6ac1cee7e569946c8ff_prof);

    }

    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_9865de9e7d63c9218de4a267bf4d378cad9a4545fe89cb2cbddaf046afb56f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9865de9e7d63c9218de4a267bf4d378cad9a4545fe89cb2cbddaf046afb56f66->enter($__internal_9865de9e7d63c9218de4a267bf4d378cad9a4545fe89cb2cbddaf046afb56f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 4
        echo "<div id=\"contenu\">
      <h2>Mes fiches de frais</h2>
      <h3>Mois à sélectionner : </h3>
      <form  method=\"post\">
      <div class=\"corpsForm\">
      <p>
\t<label for=\"lstMois\" accesskey=\"n\">Mois : </label>
        <select id=\"lstMois\" name=\"lstMois\">
             ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesmois"]) || array_key_exists("lesmois", $context) ? $context["lesmois"] : (function () { throw new Twig_Error_Runtime('Variable "lesmois" does not exist.', 12, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["unMois"]) {
            // line 13
            echo "                  ";
            $context["mois"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["unMois"], "mois", array());
            // line 14
            echo "                  ";
            $context["numAnnee"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["unMois"], "numAnnee", array());
            // line 15
            echo "                  ";
            $context["numMois"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["unMois"], "numMois", array());
            // line 16
            echo "                  ";
            if (((isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new Twig_Error_Runtime('Variable "mois" does not exist.', 16, $this->getSourceContext()); })()) == (isset($context["lemois"]) || array_key_exists("lemois", $context) ? $context["lemois"] : (function () { throw new Twig_Error_Runtime('Variable "lemois" does not exist.', 16, $this->getSourceContext()); })()))) {
                // line 17
                echo "                        <option selected value=\"";
                echo twig_escape_filter($this->env, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new Twig_Error_Runtime('Variable "mois" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["numMois"]) || array_key_exists("numMois", $context) ? $context["numMois"] : (function () { throw new Twig_Error_Runtime('Variable "numMois" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["numAnnee"]) || array_key_exists("numAnnee", $context) ? $context["numAnnee"] : (function () { throw new Twig_Error_Runtime('Variable "numAnnee" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
                echo " </option>
                  ";
            } else {
                // line 19
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new Twig_Error_Runtime('Variable "mois" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["numMois"]) || array_key_exists("numMois", $context) ? $context["numMois"] : (function () { throw new Twig_Error_Runtime('Variable "numMois" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["numAnnee"]) || array_key_exists("numAnnee", $context) ? $context["numAnnee"] : (function () { throw new Twig_Error_Runtime('Variable "numAnnee" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
                echo " </option>
                  ";
            }
            // line 21
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unMois'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "  
       </select>
      </p>
      </div>
      <div class=\"piedForm\">
      <p>
            <input id=\"ok\" type=\"submit\" value=\"Valider\" size=\"20\" />
            <input id=\"annuler\" type=\"reset\" value=\"Effacer\" size=\"20\" />
      </p> 
      </div>
        </form>
";
        
        $__internal_9865de9e7d63c9218de4a267bf4d378cad9a4545fe89cb2cbddaf046afb56f66->leave($__internal_9865de9e7d63c9218de4a267bf4d378cad9a4545fe89cb2cbddaf046afb56f66_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:ListeFrais:listemois.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 21,  89 => 19,  79 => 17,  76 => 16,  73 => 15,  70 => 14,  67 => 13,  63 => 12,  53 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PgGsbFraisBundle::accueil.html.twig\" %}
{% block body %}
{% block bloc1 %}
<div id=\"contenu\">
      <h2>Mes fiches de frais</h2>
      <h3>Mois à sélectionner : </h3>
      <form  method=\"post\">
      <div class=\"corpsForm\">
      <p>
\t<label for=\"lstMois\" accesskey=\"n\">Mois : </label>
        <select id=\"lstMois\" name=\"lstMois\">
             {% for unMois in  lesmois %}
                  {% set mois = unMois.mois %}
                  {% set numAnnee =  unMois.numAnnee %}
                  {% set numMois =  unMois.numMois%}
                  {% if mois == lemois %}
                        <option selected value=\"{{ mois }}\">{{ numMois }}/{{ numAnnee }} </option>
                  {% else %}
                        <option value=\"{{ mois }}\">{{ numMois }}/{{ numAnnee }} </option>
                  {% endif %}
            {% endfor %}  
       </select>
      </p>
      </div>
      <div class=\"piedForm\">
      <p>
            <input id=\"ok\" type=\"submit\" value=\"Valider\" size=\"20\" />
            <input id=\"annuler\" type=\"reset\" value=\"Effacer\" size=\"20\" />
      </p> 
      </div>
        </form>
{% endblock %}
{% endblock %}", "PgGsbFraisBundle:ListeFrais:listemois.html.twig", "/var/www/html/GSB-E4/src/Pg/GsbFraisBundle/Resources/views/ListeFrais/listemois.html.twig");
    }
}
