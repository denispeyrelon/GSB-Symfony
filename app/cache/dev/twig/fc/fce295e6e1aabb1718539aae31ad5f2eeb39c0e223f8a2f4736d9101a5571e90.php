<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_528966783ce414558317ad17d4c63872dc054797b8bccc67198d242b7bff3f94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b28b19399ba55321fadae9dd71bc86e3698d759cc6e690099ac351119aa78c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b28b19399ba55321fadae9dd71bc86e3698d759cc6e690099ac351119aa78c91->enter($__internal_b28b19399ba55321fadae9dd71bc86e3698d759cc6e690099ac351119aa78c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b28b19399ba55321fadae9dd71bc86e3698d759cc6e690099ac351119aa78c91->leave($__internal_b28b19399ba55321fadae9dd71bc86e3698d759cc6e690099ac351119aa78c91_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f4a7c8c25e3cf74ceb298e4569f31f8f334459ee400fd763ab9ce755af2801f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a7c8c25e3cf74ceb298e4569f31f8f334459ee400fd763ab9ce755af2801f8->enter($__internal_f4a7c8c25e3cf74ceb298e4569f31f8f334459ee400fd763ab9ce755af2801f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f4a7c8c25e3cf74ceb298e4569f31f8f334459ee400fd763ab9ce755af2801f8->leave($__internal_f4a7c8c25e3cf74ceb298e4569f31f8f334459ee400fd763ab9ce755af2801f8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8234717b0d0cbf01141b85ae72f90ab5a57b4896df5a62ac84c2d47f94261c70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8234717b0d0cbf01141b85ae72f90ab5a57b4896df5a62ac84c2d47f94261c70->enter($__internal_8234717b0d0cbf01141b85ae72f90ab5a57b4896df5a62ac84c2d47f94261c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_8234717b0d0cbf01141b85ae72f90ab5a57b4896df5a62ac84c2d47f94261c70->leave($__internal_8234717b0d0cbf01141b85ae72f90ab5a57b4896df5a62ac84c2d47f94261c70_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cad8e653fed34de52aaa697d4b2e554e478a439355c24fe0fad3f0b5417632d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cad8e653fed34de52aaa697d4b2e554e478a439355c24fe0fad3f0b5417632d->enter($__internal_6cad8e653fed34de52aaa697d4b2e554e478a439355c24fe0fad3f0b5417632d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6cad8e653fed34de52aaa697d4b2e554e478a439355c24fe0fad3f0b5417632d->leave($__internal_6cad8e653fed34de52aaa697d4b2e554e478a439355c24fe0fad3f0b5417632d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/GSB-E4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
