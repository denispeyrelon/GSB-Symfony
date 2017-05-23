<?php

/* PgGsbFraisBundle::layout.html.twig */
class __TwigTemplate_8e8713ca7a3039d64055b39c147d554fe1b6c7c555cfb1c2f859f12b5527b885 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f9d018fb4f368eaf2cd76cef099aee5f0ec1a3a9efd126b48c4899a09712289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f9d018fb4f368eaf2cd76cef099aee5f0ec1a3a9efd126b48c4899a09712289->enter($__internal_4f9d018fb4f368eaf2cd76cef099aee5f0ec1a3a9efd126b48c4899a09712289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
       \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
  <head>
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/gsbfrais/styles/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./images/favicon.ico\" />
  </head>
  <body>
    <div id=\"page\">
      <div id=\"entete\">
        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/gsbfrais/images/logo.jpg"), "html", null, true);
        echo "\" id=\"logoGSB\" alt=\"Laboratoire Galaxy-Swiss Bourdin\" title=\"Laboratoire Galaxy-Swiss Bourdin\" />
        <h1>Suivi du remboursement des frais</h1>
      </div>
     </div>
          ";
        // line 17
        $this->displayBlock('menu', $context, $blocks);
        // line 19
        echo "          ";
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "    </body>
  </html>

          
          
";
        
        $__internal_4f9d018fb4f368eaf2cd76cef099aee5f0ec1a3a9efd126b48c4899a09712289->leave($__internal_4f9d018fb4f368eaf2cd76cef099aee5f0ec1a3a9efd126b48c4899a09712289_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_17456b392096a634070fbcfbecc55d6bc2e2a9da4119bbf35499347a764ff081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17456b392096a634070fbcfbecc55d6bc2e2a9da4119bbf35499347a764ff081->enter($__internal_17456b392096a634070fbcfbecc55d6bc2e2a9da4119bbf35499347a764ff081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        echo "          ";
        
        $__internal_17456b392096a634070fbcfbecc55d6bc2e2a9da4119bbf35499347a764ff081->leave($__internal_17456b392096a634070fbcfbecc55d6bc2e2a9da4119bbf35499347a764ff081_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_b122fbc596949084a424e4898b99527479a338992ee8ab88bd2491ebc26cbd65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b122fbc596949084a424e4898b99527479a338992ee8ab88bd2491ebc26cbd65->enter($__internal_b122fbc596949084a424e4898b99527479a338992ee8ab88bd2491ebc26cbd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
                 ";
        // line 20
        $this->displayBlock('bloc1', $context, $blocks);
        // line 22
        echo "          ";
        
        $__internal_b122fbc596949084a424e4898b99527479a338992ee8ab88bd2491ebc26cbd65->leave($__internal_b122fbc596949084a424e4898b99527479a338992ee8ab88bd2491ebc26cbd65_prof);

    }

    // line 20
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_9a83856edf36ae4a3a0b58a717d2d4ac2bc0bce6d7ebc5e839146c9389c3e127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a83856edf36ae4a3a0b58a717d2d4ac2bc0bce6d7ebc5e839146c9389c3e127->enter($__internal_9a83856edf36ae4a3a0b58a717d2d4ac2bc0bce6d7ebc5e839146c9389c3e127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 21
        echo "                 ";
        
        $__internal_9a83856edf36ae4a3a0b58a717d2d4ac2bc0bce6d7ebc5e839146c9389c3e127->leave($__internal_9a83856edf36ae4a3a0b58a717d2d4ac2bc0bce6d7ebc5e839146c9389c3e127_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 21,  96 => 20,  89 => 22,  87 => 20,  79 => 19,  72 => 18,  66 => 17,  54 => 23,  51 => 19,  49 => 17,  42 => 13,  33 => 7,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
       \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
  <head>
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <link href=\"{{ asset('bundles/gsbfrais/styles/styles.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./images/favicon.ico\" />
  </head>
  <body>
    <div id=\"page\">
      <div id=\"entete\">
        <img src=\"{{ asset('bundles/gsbfrais/images/logo.jpg')}}\" id=\"logoGSB\" alt=\"Laboratoire Galaxy-Swiss Bourdin\" title=\"Laboratoire Galaxy-Swiss Bourdin\" />
        <h1>Suivi du remboursement des frais</h1>
      </div>
     </div>
          {% block menu %}
          {% endblock %}
          {% block body %} 
                 {% block bloc1 %}
                 {% endblock %}
          {% endblock %}
    </body>
  </html>

          
          
", "PgGsbFraisBundle::layout.html.twig", "/var/www/html/GSB-E4/src/Pg/GsbFraisBundle/Resources/views/layout.html.twig");
    }
}
