<?php

/* ::base.html.twig */
class __TwigTemplate_3e2623266eb1154c7a5105999e92901ac3e185cf285e0fdc1cc87476d3e52861 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4607c1eb6fb6cf48d28eecb4e94bd3663fda81f21415b1638059fdeb6ab5e9f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4607c1eb6fb6cf48d28eecb4e94bd3663fda81f21415b1638059fdeb6ab5e9f7->enter($__internal_4607c1eb6fb6cf48d28eecb4e94bd3663fda81f21415b1638059fdeb6ab5e9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_12a96953dce190ce4c7d60092a49da9efb959ca3841b2d2e8bf44db1ca562797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a96953dce190ce4c7d60092a49da9efb959ca3841b2d2e8bf44db1ca562797->enter($__internal_12a96953dce190ce4c7d60092a49da9efb959ca3841b2d2e8bf44db1ca562797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
 

  
  
    </head>
    <body>

        ";
        // line 31
        $this->displayBlock('header', $context, $blocks);
        // line 32
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 34
        echo "        
        ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
</html>
";
        
        $__internal_4607c1eb6fb6cf48d28eecb4e94bd3663fda81f21415b1638059fdeb6ab5e9f7->leave($__internal_4607c1eb6fb6cf48d28eecb4e94bd3663fda81f21415b1638059fdeb6ab5e9f7_prof);

        
        $__internal_12a96953dce190ce4c7d60092a49da9efb959ca3841b2d2e8bf44db1ca562797->leave($__internal_12a96953dce190ce4c7d60092a49da9efb959ca3841b2d2e8bf44db1ca562797_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_da7fb60239a763985ade98525d87df8ae89caf3c870732d8101dd220ddb596f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da7fb60239a763985ade98525d87df8ae89caf3c870732d8101dd220ddb596f3->enter($__internal_da7fb60239a763985ade98525d87df8ae89caf3c870732d8101dd220ddb596f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8064b519efc626f86bd0ec5c90007309bd61d86e946e1feb0bf522bad339a41e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8064b519efc626f86bd0ec5c90007309bd61d86e946e1feb0bf522bad339a41e->enter($__internal_8064b519efc626f86bd0ec5c90007309bd61d86e946e1feb0bf522bad339a41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8064b519efc626f86bd0ec5c90007309bd61d86e946e1feb0bf522bad339a41e->leave($__internal_8064b519efc626f86bd0ec5c90007309bd61d86e946e1feb0bf522bad339a41e_prof);

        
        $__internal_da7fb60239a763985ade98525d87df8ae89caf3c870732d8101dd220ddb596f3->leave($__internal_da7fb60239a763985ade98525d87df8ae89caf3c870732d8101dd220ddb596f3_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_32330e7d8a06f81d01437a4587015e4867030485ef1d6f8a2bf843509a11038d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32330e7d8a06f81d01437a4587015e4867030485ef1d6f8a2bf843509a11038d->enter($__internal_32330e7d8a06f81d01437a4587015e4867030485ef1d6f8a2bf843509a11038d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9a99d870d36ef4d1b9bdb4a6d4c6b8a074500aedb381701aeff5bf5f542c848c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a99d870d36ef4d1b9bdb4a6d4c6b8a074500aedb381701aeff5bf5f542c848c->enter($__internal_9a99d870d36ef4d1b9bdb4a6d4c6b8a074500aedb381701aeff5bf5f542c848c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
 <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
       \t\t<script defer src=\"https://use.fontawesome.com/releases/v5.0.6/js/all.js\"></script>
           <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" />
           <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>

<script src=\"https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css\">

        ";
        
        $__internal_9a99d870d36ef4d1b9bdb4a6d4c6b8a074500aedb381701aeff5bf5f542c848c->leave($__internal_9a99d870d36ef4d1b9bdb4a6d4c6b8a074500aedb381701aeff5bf5f542c848c_prof);

        
        $__internal_32330e7d8a06f81d01437a4587015e4867030485ef1d6f8a2bf843509a11038d->leave($__internal_32330e7d8a06f81d01437a4587015e4867030485ef1d6f8a2bf843509a11038d_prof);

    }

    // line 31
    public function block_header($context, array $blocks = array())
    {
        $__internal_4393db345e5d9f45a8e4662b7e9134899ad59b46ff2cd994043bcaf10c531030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4393db345e5d9f45a8e4662b7e9134899ad59b46ff2cd994043bcaf10c531030->enter($__internal_4393db345e5d9f45a8e4662b7e9134899ad59b46ff2cd994043bcaf10c531030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_f31f8b12f3e5cd09404e68c52562d376c3cc74c61b1f6277d1f70d67aeaadf08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f31f8b12f3e5cd09404e68c52562d376c3cc74c61b1f6277d1f70d67aeaadf08->enter($__internal_f31f8b12f3e5cd09404e68c52562d376c3cc74c61b1f6277d1f70d67aeaadf08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_f31f8b12f3e5cd09404e68c52562d376c3cc74c61b1f6277d1f70d67aeaadf08->leave($__internal_f31f8b12f3e5cd09404e68c52562d376c3cc74c61b1f6277d1f70d67aeaadf08_prof);

        
        $__internal_4393db345e5d9f45a8e4662b7e9134899ad59b46ff2cd994043bcaf10c531030->leave($__internal_4393db345e5d9f45a8e4662b7e9134899ad59b46ff2cd994043bcaf10c531030_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a268a0803b50cb82acb49dacad8df390c86851f0c72a49785b4a7005d5d1e26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a268a0803b50cb82acb49dacad8df390c86851f0c72a49785b4a7005d5d1e26->enter($__internal_7a268a0803b50cb82acb49dacad8df390c86851f0c72a49785b4a7005d5d1e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d8093aa34983d14e267afbaf8024748ffcb7b6a4c260e93d26fc88a7442eec20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8093aa34983d14e267afbaf8024748ffcb7b6a4c260e93d26fc88a7442eec20->enter($__internal_d8093aa34983d14e267afbaf8024748ffcb7b6a4c260e93d26fc88a7442eec20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d8093aa34983d14e267afbaf8024748ffcb7b6a4c260e93d26fc88a7442eec20->leave($__internal_d8093aa34983d14e267afbaf8024748ffcb7b6a4c260e93d26fc88a7442eec20_prof);

        
        $__internal_7a268a0803b50cb82acb49dacad8df390c86851f0c72a49785b4a7005d5d1e26->leave($__internal_7a268a0803b50cb82acb49dacad8df390c86851f0c72a49785b4a7005d5d1e26_prof);

    }

    // line 33
    public function block_footer($context, array $blocks = array())
    {
        $__internal_cdf54f250d4086b9d94dd543d3ea5f2c525d3beccef73e6db8660a4207d4b00f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdf54f250d4086b9d94dd543d3ea5f2c525d3beccef73e6db8660a4207d4b00f->enter($__internal_cdf54f250d4086b9d94dd543d3ea5f2c525d3beccef73e6db8660a4207d4b00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_ac1d1352e7924275234cbbaf32e66f32f9bc8c2e21e616a7f4f2ef16a25daf47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac1d1352e7924275234cbbaf32e66f32f9bc8c2e21e616a7f4f2ef16a25daf47->enter($__internal_ac1d1352e7924275234cbbaf32e66f32f9bc8c2e21e616a7f4f2ef16a25daf47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_ac1d1352e7924275234cbbaf32e66f32f9bc8c2e21e616a7f4f2ef16a25daf47->leave($__internal_ac1d1352e7924275234cbbaf32e66f32f9bc8c2e21e616a7f4f2ef16a25daf47_prof);

        
        $__internal_cdf54f250d4086b9d94dd543d3ea5f2c525d3beccef73e6db8660a4207d4b00f->leave($__internal_cdf54f250d4086b9d94dd543d3ea5f2c525d3beccef73e6db8660a4207d4b00f_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_24b1895fdffdb78a59543b1ae58d0f215ad8777bab3f8e9b760e6e6a0da712ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24b1895fdffdb78a59543b1ae58d0f215ad8777bab3f8e9b760e6e6a0da712ca->enter($__internal_24b1895fdffdb78a59543b1ae58d0f215ad8777bab3f8e9b760e6e6a0da712ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_68d2bacae4724faec411f018209c6252b9bf65a5b8554fa0e5546e676f4714af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d2bacae4724faec411f018209c6252b9bf65a5b8554fa0e5546e676f4714af->enter($__internal_68d2bacae4724faec411f018209c6252b9bf65a5b8554fa0e5546e676f4714af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_68d2bacae4724faec411f018209c6252b9bf65a5b8554fa0e5546e676f4714af->leave($__internal_68d2bacae4724faec411f018209c6252b9bf65a5b8554fa0e5546e676f4714af_prof);

        
        $__internal_24b1895fdffdb78a59543b1ae58d0f215ad8777bab3f8e9b760e6e6a0da712ca->leave($__internal_24b1895fdffdb78a59543b1ae58d0f215ad8777bab3f8e9b760e6e6a0da712ca_prof);

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
        return array (  186 => 35,  169 => 33,  152 => 32,  135 => 31,  118 => 16,  108 => 8,  99 => 7,  81 => 6,  69 => 36,  67 => 35,  64 => 34,  61 => 33,  58 => 32,  56 => 31,  44 => 23,  42 => 7,  38 => 6,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
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
           <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>

<script src=\"https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css\">

        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
 

  
  
    </head>
    <body>

        {% block header %}{% endblock %}
        {% block body %}{% endblock %}
        {% block footer %}{% endblock %}
        
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/Agence_immobilier/Immobilier/app/Resources/views/base.html.twig");
    }
}
