<?php

/* base.html.twig */
class __TwigTemplate_025ef548a3e80794b2366a1b01370e0b6a085f274e78a3f66f8678e4a38583a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bc7a32b3e8c4841560168e39d5c0135b60947b0eacbd7a4ae073e644e761a98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bc7a32b3e8c4841560168e39d5c0135b60947b0eacbd7a4ae073e644e761a98->enter($__internal_5bc7a32b3e8c4841560168e39d5c0135b60947b0eacbd7a4ae073e644e761a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5bc7a32b3e8c4841560168e39d5c0135b60947b0eacbd7a4ae073e644e761a98->leave($__internal_5bc7a32b3e8c4841560168e39d5c0135b60947b0eacbd7a4ae073e644e761a98_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7230eecfcf20cf88d603279c999d94e91ba9a9063161d1b5cbb2e495209e17bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7230eecfcf20cf88d603279c999d94e91ba9a9063161d1b5cbb2e495209e17bf->enter($__internal_7230eecfcf20cf88d603279c999d94e91ba9a9063161d1b5cbb2e495209e17bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7230eecfcf20cf88d603279c999d94e91ba9a9063161d1b5cbb2e495209e17bf->leave($__internal_7230eecfcf20cf88d603279c999d94e91ba9a9063161d1b5cbb2e495209e17bf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f0c7b44b39fa2a6611a050eee83eea8a2fccc18eb6b6e1865d0260bab1d45eaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c7b44b39fa2a6611a050eee83eea8a2fccc18eb6b6e1865d0260bab1d45eaa->enter($__internal_f0c7b44b39fa2a6611a050eee83eea8a2fccc18eb6b6e1865d0260bab1d45eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f0c7b44b39fa2a6611a050eee83eea8a2fccc18eb6b6e1865d0260bab1d45eaa->leave($__internal_f0c7b44b39fa2a6611a050eee83eea8a2fccc18eb6b6e1865d0260bab1d45eaa_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_74c352d02e50195bcc48adafcb04b03903b14d64faf1bfe4735e441464d689b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c352d02e50195bcc48adafcb04b03903b14d64faf1bfe4735e441464d689b1->enter($__internal_74c352d02e50195bcc48adafcb04b03903b14d64faf1bfe4735e441464d689b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_74c352d02e50195bcc48adafcb04b03903b14d64faf1bfe4735e441464d689b1->leave($__internal_74c352d02e50195bcc48adafcb04b03903b14d64faf1bfe4735e441464d689b1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ace96678dc1e4157496fed4aec279cf3cad536b42d4a0bebe8c9b1a2bb1c1d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ace96678dc1e4157496fed4aec279cf3cad536b42d4a0bebe8c9b1a2bb1c1d74->enter($__internal_ace96678dc1e4157496fed4aec279cf3cad536b42d4a0bebe8c9b1a2bb1c1d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ace96678dc1e4157496fed4aec279cf3cad536b42d4a0bebe8c9b1a2bb1c1d74->leave($__internal_ace96678dc1e4157496fed4aec279cf3cad536b42d4a0bebe8c9b1a2bb1c1d74_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/GSB-E4/app/Resources/views/base.html.twig");
    }
}
