<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9e4af84fb972859eb33c08a54463c3fe3af6d962449dae33571cf0d946227ef4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_6a2d128a2d7bcc6382fa8089ea9380f69dd8639efa50bdc378c2076d49513baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a2d128a2d7bcc6382fa8089ea9380f69dd8639efa50bdc378c2076d49513baf->enter($__internal_6a2d128a2d7bcc6382fa8089ea9380f69dd8639efa50bdc378c2076d49513baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a2d128a2d7bcc6382fa8089ea9380f69dd8639efa50bdc378c2076d49513baf->leave($__internal_6a2d128a2d7bcc6382fa8089ea9380f69dd8639efa50bdc378c2076d49513baf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f3b5c4abb30805b1c10ffd84edaad2f63bb701f9150e003949ee8bbc885cbd29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b5c4abb30805b1c10ffd84edaad2f63bb701f9150e003949ee8bbc885cbd29->enter($__internal_f3b5c4abb30805b1c10ffd84edaad2f63bb701f9150e003949ee8bbc885cbd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f3b5c4abb30805b1c10ffd84edaad2f63bb701f9150e003949ee8bbc885cbd29->leave($__internal_f3b5c4abb30805b1c10ffd84edaad2f63bb701f9150e003949ee8bbc885cbd29_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_db27c2201024c915120735f81b69e2f4f35de0c2ae0940a1e1dbe48229204a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db27c2201024c915120735f81b69e2f4f35de0c2ae0940a1e1dbe48229204a15->enter($__internal_db27c2201024c915120735f81b69e2f4f35de0c2ae0940a1e1dbe48229204a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_db27c2201024c915120735f81b69e2f4f35de0c2ae0940a1e1dbe48229204a15->leave($__internal_db27c2201024c915120735f81b69e2f4f35de0c2ae0940a1e1dbe48229204a15_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_663d16150ad53eff396d1583c360e552d34cca0f8d301364ec8f5754627382aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663d16150ad53eff396d1583c360e552d34cca0f8d301364ec8f5754627382aa->enter($__internal_663d16150ad53eff396d1583c360e552d34cca0f8d301364ec8f5754627382aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_663d16150ad53eff396d1583c360e552d34cca0f8d301364ec8f5754627382aa->leave($__internal_663d16150ad53eff396d1583c360e552d34cca0f8d301364ec8f5754627382aa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/GSB-E4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
