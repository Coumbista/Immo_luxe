<?php

/* ::base.html.twig */
class __TwigTemplate_2e55ceb3e3a8172ee2bdb98420a739c71281e5768b9082c463522045b60e4555 extends Twig_Template
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
        $__internal_e35eff87ce53387706f245b24e882432b4a1277111790b9d73f137649df1038d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e35eff87ce53387706f245b24e882432b4a1277111790b9d73f137649df1038d->enter($__internal_e35eff87ce53387706f245b24e882432b4a1277111790b9d73f137649df1038d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_cf4b217baeb762ee5587efff7ec8c3d3884cb096d60bd7f21f96f539798b14af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4b217baeb762ee5587efff7ec8c3d3884cb096d60bd7f21f96f539798b14af->enter($__internal_cf4b217baeb762ee5587efff7ec8c3d3884cb096d60bd7f21f96f539798b14af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 17
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
 
  ";
        // line 20
        echo "  
  </style>
    </head>
    <body>
        ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "    </body>
</html>";
        
        $__internal_e35eff87ce53387706f245b24e882432b4a1277111790b9d73f137649df1038d->leave($__internal_e35eff87ce53387706f245b24e882432b4a1277111790b9d73f137649df1038d_prof);

        
        $__internal_cf4b217baeb762ee5587efff7ec8c3d3884cb096d60bd7f21f96f539798b14af->leave($__internal_cf4b217baeb762ee5587efff7ec8c3d3884cb096d60bd7f21f96f539798b14af_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2b2316ded588a3166375c08f9904a27305a9e6e15d00c6ce5edc22549e1956b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2b2316ded588a3166375c08f9904a27305a9e6e15d00c6ce5edc22549e1956b->enter($__internal_f2b2316ded588a3166375c08f9904a27305a9e6e15d00c6ce5edc22549e1956b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_093ef9ee08fc8420c341deec853b4519fe80777a30d79955d8f38a518f2e2bbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_093ef9ee08fc8420c341deec853b4519fe80777a30d79955d8f38a518f2e2bbb->enter($__internal_093ef9ee08fc8420c341deec853b4519fe80777a30d79955d8f38a518f2e2bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_093ef9ee08fc8420c341deec853b4519fe80777a30d79955d8f38a518f2e2bbb->leave($__internal_093ef9ee08fc8420c341deec853b4519fe80777a30d79955d8f38a518f2e2bbb_prof);

        
        $__internal_f2b2316ded588a3166375c08f9904a27305a9e6e15d00c6ce5edc22549e1956b->leave($__internal_f2b2316ded588a3166375c08f9904a27305a9e6e15d00c6ce5edc22549e1956b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_995174f189e0f02c5d26283c4293accc7f2fcdd112310602421f9acf89a21c89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_995174f189e0f02c5d26283c4293accc7f2fcdd112310602421f9acf89a21c89->enter($__internal_995174f189e0f02c5d26283c4293accc7f2fcdd112310602421f9acf89a21c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e4b6a39cbe750a2004c7011a1800eb7c7b93109951007c6721ad555e0473c002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b6a39cbe750a2004c7011a1800eb7c7b93109951007c6721ad555e0473c002->enter($__internal_e4b6a39cbe750a2004c7011a1800eb7c7b93109951007c6721ad555e0473c002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
 <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
       \t\t<script defer src=\"https://use.fontawesome.com/releases/v5.0.6/js/all.js\"></script>
           <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_e4b6a39cbe750a2004c7011a1800eb7c7b93109951007c6721ad555e0473c002->leave($__internal_e4b6a39cbe750a2004c7011a1800eb7c7b93109951007c6721ad555e0473c002_prof);

        
        $__internal_995174f189e0f02c5d26283c4293accc7f2fcdd112310602421f9acf89a21c89->leave($__internal_995174f189e0f02c5d26283c4293accc7f2fcdd112310602421f9acf89a21c89_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_af3f96f961777e80a7b6828a89b8fde065413ee7c102bff4b516825a6bf50ac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af3f96f961777e80a7b6828a89b8fde065413ee7c102bff4b516825a6bf50ac0->enter($__internal_af3f96f961777e80a7b6828a89b8fde065413ee7c102bff4b516825a6bf50ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef94405a95d72d39a5dcf92c077ac822780828776feacd40f4fde2653c500138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef94405a95d72d39a5dcf92c077ac822780828776feacd40f4fde2653c500138->enter($__internal_ef94405a95d72d39a5dcf92c077ac822780828776feacd40f4fde2653c500138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ef94405a95d72d39a5dcf92c077ac822780828776feacd40f4fde2653c500138->leave($__internal_ef94405a95d72d39a5dcf92c077ac822780828776feacd40f4fde2653c500138_prof);

        
        $__internal_af3f96f961777e80a7b6828a89b8fde065413ee7c102bff4b516825a6bf50ac0->leave($__internal_af3f96f961777e80a7b6828a89b8fde065413ee7c102bff4b516825a6bf50ac0_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1d20dffd93e6760724740ed627e1f32ea10b49a09eba25f1c3d90b54d2b257cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d20dffd93e6760724740ed627e1f32ea10b49a09eba25f1c3d90b54d2b257cf->enter($__internal_1d20dffd93e6760724740ed627e1f32ea10b49a09eba25f1c3d90b54d2b257cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_95a7a773b3ef90de062e5b4ca9bf4793c46ed56330b0009cf469851ea65a6455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a7a773b3ef90de062e5b4ca9bf4793c46ed56330b0009cf469851ea65a6455->enter($__internal_95a7a773b3ef90de062e5b4ca9bf4793c46ed56330b0009cf469851ea65a6455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_95a7a773b3ef90de062e5b4ca9bf4793c46ed56330b0009cf469851ea65a6455->leave($__internal_95a7a773b3ef90de062e5b4ca9bf4793c46ed56330b0009cf469851ea65a6455_prof);

        
        $__internal_1d20dffd93e6760724740ed627e1f32ea10b49a09eba25f1c3d90b54d2b257cf->leave($__internal_1d20dffd93e6760724740ed627e1f32ea10b49a09eba25f1c3d90b54d2b257cf_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 25,  118 => 24,  106 => 15,  96 => 7,  87 => 6,  69 => 5,  58 => 26,  55 => 25,  53 => 24,  47 => 20,  41 => 17,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
 <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
       \t\t<script defer src=\"https://use.fontawesome.com/releases/v5.0.6/js/all.js\"></script>
           <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\" type=\"text/css\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
 
  {# ******** #}
  
  </style>
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>", "::base.html.twig", "/var/www/html/Agence_immobilier/Immobilier/app/Resources/views/base.html.twig");
    }
}
