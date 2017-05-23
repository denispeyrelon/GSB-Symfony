<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a246c63767096a7f0dd575d7ef0ef3549a74e34c306ecd1777ff17bf000b2c25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c47ca221d2b947b6be436a891d1406088764c943030c92e8b70b15491e30cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c47ca221d2b947b6be436a891d1406088764c943030c92e8b70b15491e30cc4->enter($__internal_6c47ca221d2b947b6be436a891d1406088764c943030c92e8b70b15491e30cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c47ca221d2b947b6be436a891d1406088764c943030c92e8b70b15491e30cc4->leave($__internal_6c47ca221d2b947b6be436a891d1406088764c943030c92e8b70b15491e30cc4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_acb734d6fd931a07d0ea4d52369c91b5d235bf0dba120313c282b4d7539cf837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acb734d6fd931a07d0ea4d52369c91b5d235bf0dba120313c282b4d7539cf837->enter($__internal_acb734d6fd931a07d0ea4d52369c91b5d235bf0dba120313c282b4d7539cf837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_acb734d6fd931a07d0ea4d52369c91b5d235bf0dba120313c282b4d7539cf837->leave($__internal_acb734d6fd931a07d0ea4d52369c91b5d235bf0dba120313c282b4d7539cf837_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d14b44f0048c4fc50e04ba1dff95a1210fce49ac3f4e52ae28f1cb557db68868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d14b44f0048c4fc50e04ba1dff95a1210fce49ac3f4e52ae28f1cb557db68868->enter($__internal_d14b44f0048c4fc50e04ba1dff95a1210fce49ac3f4e52ae28f1cb557db68868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d14b44f0048c4fc50e04ba1dff95a1210fce49ac3f4e52ae28f1cb557db68868->leave($__internal_d14b44f0048c4fc50e04ba1dff95a1210fce49ac3f4e52ae28f1cb557db68868_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fdb171546e40e910743e8bab478c3c249b53cc8576d7abaab40d866d4d1bce66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdb171546e40e910743e8bab478c3c249b53cc8576d7abaab40d866d4d1bce66->enter($__internal_fdb171546e40e910743e8bab478c3c249b53cc8576d7abaab40d866d4d1bce66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_fdb171546e40e910743e8bab478c3c249b53cc8576d7abaab40d866d4d1bce66->leave($__internal_fdb171546e40e910743e8bab478c3c249b53cc8576d7abaab40d866d4d1bce66_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/GSB-E4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
