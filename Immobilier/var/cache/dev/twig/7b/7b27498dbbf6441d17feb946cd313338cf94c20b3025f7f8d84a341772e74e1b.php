<?php

/* ::base.html.twig */
class __TwigTemplate_ddbda7e9909ea811d6e24cf81b0f94d6180030ac81a93f639120a194944db967 extends Twig_Template
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
        $__internal_44b5480b02024ba24150d8b81fff7ddd782ebd094d6219239cf882bf91e1b5a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44b5480b02024ba24150d8b81fff7ddd782ebd094d6219239cf882bf91e1b5a8->enter($__internal_44b5480b02024ba24150d8b81fff7ddd782ebd094d6219239cf882bf91e1b5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_9d7c031c0ac059f8ad6a6d7503031342433e5d86786e1a2f4fbd42ce187c98cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d7c031c0ac059f8ad6a6d7503031342433e5d86786e1a2f4fbd42ce187c98cc->enter($__internal_9d7c031c0ac059f8ad6a6d7503031342433e5d86786e1a2f4fbd42ce187c98cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_44b5480b02024ba24150d8b81fff7ddd782ebd094d6219239cf882bf91e1b5a8->leave($__internal_44b5480b02024ba24150d8b81fff7ddd782ebd094d6219239cf882bf91e1b5a8_prof);

        
        $__internal_9d7c031c0ac059f8ad6a6d7503031342433e5d86786e1a2f4fbd42ce187c98cc->leave($__internal_9d7c031c0ac059f8ad6a6d7503031342433e5d86786e1a2f4fbd42ce187c98cc_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ebdb92b64636409bdc58de9b6852ccefcc024dc88eeb1da7fc0c60738f017fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ebdb92b64636409bdc58de9b6852ccefcc024dc88eeb1da7fc0c60738f017fe->enter($__internal_5ebdb92b64636409bdc58de9b6852ccefcc024dc88eeb1da7fc0c60738f017fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_35360f5d052290f69b97ebaa54f29ab4da1811c3ddc1f533283d11828263263a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35360f5d052290f69b97ebaa54f29ab4da1811c3ddc1f533283d11828263263a->enter($__internal_35360f5d052290f69b97ebaa54f29ab4da1811c3ddc1f533283d11828263263a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_35360f5d052290f69b97ebaa54f29ab4da1811c3ddc1f533283d11828263263a->leave($__internal_35360f5d052290f69b97ebaa54f29ab4da1811c3ddc1f533283d11828263263a_prof);

        
        $__internal_5ebdb92b64636409bdc58de9b6852ccefcc024dc88eeb1da7fc0c60738f017fe->leave($__internal_5ebdb92b64636409bdc58de9b6852ccefcc024dc88eeb1da7fc0c60738f017fe_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0042274a34276e92287585f9daa86828433e1a175700e53570a824db1b18cb26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0042274a34276e92287585f9daa86828433e1a175700e53570a824db1b18cb26->enter($__internal_0042274a34276e92287585f9daa86828433e1a175700e53570a824db1b18cb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c977493ac14cdbfc8c3389bfb7b3bf99410ec5dd2807028bbbdaf6e5ef114916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c977493ac14cdbfc8c3389bfb7b3bf99410ec5dd2807028bbbdaf6e5ef114916->enter($__internal_c977493ac14cdbfc8c3389bfb7b3bf99410ec5dd2807028bbbdaf6e5ef114916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c977493ac14cdbfc8c3389bfb7b3bf99410ec5dd2807028bbbdaf6e5ef114916->leave($__internal_c977493ac14cdbfc8c3389bfb7b3bf99410ec5dd2807028bbbdaf6e5ef114916_prof);

        
        $__internal_0042274a34276e92287585f9daa86828433e1a175700e53570a824db1b18cb26->leave($__internal_0042274a34276e92287585f9daa86828433e1a175700e53570a824db1b18cb26_prof);

    }

    // line 31
    public function block_header($context, array $blocks = array())
    {
        $__internal_93a1819e43189123101e19823be536336c43b7e838ba2f3a4ec6b0be165483a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93a1819e43189123101e19823be536336c43b7e838ba2f3a4ec6b0be165483a9->enter($__internal_93a1819e43189123101e19823be536336c43b7e838ba2f3a4ec6b0be165483a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_9d1231ee053d74caa6f0b314a861003a3d64898dfdeb46575e419c9d2b3817d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d1231ee053d74caa6f0b314a861003a3d64898dfdeb46575e419c9d2b3817d8->enter($__internal_9d1231ee053d74caa6f0b314a861003a3d64898dfdeb46575e419c9d2b3817d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_9d1231ee053d74caa6f0b314a861003a3d64898dfdeb46575e419c9d2b3817d8->leave($__internal_9d1231ee053d74caa6f0b314a861003a3d64898dfdeb46575e419c9d2b3817d8_prof);

        
        $__internal_93a1819e43189123101e19823be536336c43b7e838ba2f3a4ec6b0be165483a9->leave($__internal_93a1819e43189123101e19823be536336c43b7e838ba2f3a4ec6b0be165483a9_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e89e867fca46ef0a397a0a4880fe9541a667a8b7ab0c17ea9d15eb39320eb57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e89e867fca46ef0a397a0a4880fe9541a667a8b7ab0c17ea9d15eb39320eb57->enter($__internal_9e89e867fca46ef0a397a0a4880fe9541a667a8b7ab0c17ea9d15eb39320eb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_37507502a19f61fdd3c36106a4e79e7ef89eb3cdde12bfa3f1c27a21d6a982bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37507502a19f61fdd3c36106a4e79e7ef89eb3cdde12bfa3f1c27a21d6a982bd->enter($__internal_37507502a19f61fdd3c36106a4e79e7ef89eb3cdde12bfa3f1c27a21d6a982bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_37507502a19f61fdd3c36106a4e79e7ef89eb3cdde12bfa3f1c27a21d6a982bd->leave($__internal_37507502a19f61fdd3c36106a4e79e7ef89eb3cdde12bfa3f1c27a21d6a982bd_prof);

        
        $__internal_9e89e867fca46ef0a397a0a4880fe9541a667a8b7ab0c17ea9d15eb39320eb57->leave($__internal_9e89e867fca46ef0a397a0a4880fe9541a667a8b7ab0c17ea9d15eb39320eb57_prof);

    }

    // line 33
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8bd7c4844fb990d3c9a702fcecf6a30285587065506de04a0bd50f5d62a0a713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bd7c4844fb990d3c9a702fcecf6a30285587065506de04a0bd50f5d62a0a713->enter($__internal_8bd7c4844fb990d3c9a702fcecf6a30285587065506de04a0bd50f5d62a0a713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_bfa6b07f4e0447f7a9354cbae4f8188c296473bd2aa33a372394b2987122d64d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa6b07f4e0447f7a9354cbae4f8188c296473bd2aa33a372394b2987122d64d->enter($__internal_bfa6b07f4e0447f7a9354cbae4f8188c296473bd2aa33a372394b2987122d64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_bfa6b07f4e0447f7a9354cbae4f8188c296473bd2aa33a372394b2987122d64d->leave($__internal_bfa6b07f4e0447f7a9354cbae4f8188c296473bd2aa33a372394b2987122d64d_prof);

        
        $__internal_8bd7c4844fb990d3c9a702fcecf6a30285587065506de04a0bd50f5d62a0a713->leave($__internal_8bd7c4844fb990d3c9a702fcecf6a30285587065506de04a0bd50f5d62a0a713_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f56e60ced5645d3ae4ce19472f5bf399beefb8dac953d6c13c91a385f9231dbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f56e60ced5645d3ae4ce19472f5bf399beefb8dac953d6c13c91a385f9231dbc->enter($__internal_f56e60ced5645d3ae4ce19472f5bf399beefb8dac953d6c13c91a385f9231dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9f7e284a5ec3e05a471623ffb1496ec507b63a7cc8c56887c93421ece6527502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f7e284a5ec3e05a471623ffb1496ec507b63a7cc8c56887c93421ece6527502->enter($__internal_9f7e284a5ec3e05a471623ffb1496ec507b63a7cc8c56887c93421ece6527502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9f7e284a5ec3e05a471623ffb1496ec507b63a7cc8c56887c93421ece6527502->leave($__internal_9f7e284a5ec3e05a471623ffb1496ec507b63a7cc8c56887c93421ece6527502_prof);

        
        $__internal_f56e60ced5645d3ae4ce19472f5bf399beefb8dac953d6c13c91a385f9231dbc->leave($__internal_f56e60ced5645d3ae4ce19472f5bf399beefb8dac953d6c13c91a385f9231dbc_prof);

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
