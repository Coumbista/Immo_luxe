<?php

/* ::base.html.twig */
class __TwigTemplate_f8b9eec5b0568cc04c93814fdfd459e4c7d3ab1344913b9d6aee8b59318e8e31 extends Twig_Template
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
        $__internal_368d4a52509b8f93434ae66c957461d01e0ead049b598c302e7e3d8af4d82a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_368d4a52509b8f93434ae66c957461d01e0ead049b598c302e7e3d8af4d82a15->enter($__internal_368d4a52509b8f93434ae66c957461d01e0ead049b598c302e7e3d8af4d82a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_07f21b4d23d689e0143241bf9ab4697640f77fbc4870c9fb1f4248b1adb6b3c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f21b4d23d689e0143241bf9ab4697640f77fbc4870c9fb1f4248b1adb6b3c6->enter($__internal_07f21b4d23d689e0143241bf9ab4697640f77fbc4870c9fb1f4248b1adb6b3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 27
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
 

  
  
    </head>
    <body>

        ";
        // line 35
        $this->displayBlock('header', $context, $blocks);
        // line 36
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 38
        echo "        
        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "    </body>
</html>
";
        
        $__internal_368d4a52509b8f93434ae66c957461d01e0ead049b598c302e7e3d8af4d82a15->leave($__internal_368d4a52509b8f93434ae66c957461d01e0ead049b598c302e7e3d8af4d82a15_prof);

        
        $__internal_07f21b4d23d689e0143241bf9ab4697640f77fbc4870c9fb1f4248b1adb6b3c6->leave($__internal_07f21b4d23d689e0143241bf9ab4697640f77fbc4870c9fb1f4248b1adb6b3c6_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ae59d9ad867c4e94f162a225b155264746013f4e0f0bd61d6aed30496aabb36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ae59d9ad867c4e94f162a225b155264746013f4e0f0bd61d6aed30496aabb36->enter($__internal_3ae59d9ad867c4e94f162a225b155264746013f4e0f0bd61d6aed30496aabb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_585a413c957aa363f93446d795c7e24aecffcac016ffab8d0e4c02a3a92c0d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585a413c957aa363f93446d795c7e24aecffcac016ffab8d0e4c02a3a92c0d91->enter($__internal_585a413c957aa363f93446d795c7e24aecffcac016ffab8d0e4c02a3a92c0d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_585a413c957aa363f93446d795c7e24aecffcac016ffab8d0e4c02a3a92c0d91->leave($__internal_585a413c957aa363f93446d795c7e24aecffcac016ffab8d0e4c02a3a92c0d91_prof);

        
        $__internal_3ae59d9ad867c4e94f162a225b155264746013f4e0f0bd61d6aed30496aabb36->leave($__internal_3ae59d9ad867c4e94f162a225b155264746013f4e0f0bd61d6aed30496aabb36_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1757a902213c6dc554e38c04f80242674f12e8e71b88d048e8a092f3454e93f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1757a902213c6dc554e38c04f80242674f12e8e71b88d048e8a092f3454e93f3->enter($__internal_1757a902213c6dc554e38c04f80242674f12e8e71b88d048e8a092f3454e93f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b682ab20d1fb63fce9d745f59dbd53f91990ca53f1e3540fff6a0471c1d65d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b682ab20d1fb63fce9d745f59dbd53f91990ca53f1e3540fff6a0471c1d65d9a->enter($__internal_b682ab20d1fb63fce9d745f59dbd53f91990ca53f1e3540fff6a0471c1d65d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
<script>
\$(document).ready(function(){
    \$('#example').DataTable();
});
</script>
<script src=\"https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css\">

        ";
        
        $__internal_b682ab20d1fb63fce9d745f59dbd53f91990ca53f1e3540fff6a0471c1d65d9a->leave($__internal_b682ab20d1fb63fce9d745f59dbd53f91990ca53f1e3540fff6a0471c1d65d9a_prof);

        
        $__internal_1757a902213c6dc554e38c04f80242674f12e8e71b88d048e8a092f3454e93f3->leave($__internal_1757a902213c6dc554e38c04f80242674f12e8e71b88d048e8a092f3454e93f3_prof);

    }

    // line 35
    public function block_header($context, array $blocks = array())
    {
        $__internal_b9ad0ba36fd935a8884a30931ef5d4fbf5f3c8bea2cc5f51146108d830fa3021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9ad0ba36fd935a8884a30931ef5d4fbf5f3c8bea2cc5f51146108d830fa3021->enter($__internal_b9ad0ba36fd935a8884a30931ef5d4fbf5f3c8bea2cc5f51146108d830fa3021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_73f87e24262b0109fb68f92a60a869bcbe1f2a5c3471ab0e0c273a61dfa6d76c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f87e24262b0109fb68f92a60a869bcbe1f2a5c3471ab0e0c273a61dfa6d76c->enter($__internal_73f87e24262b0109fb68f92a60a869bcbe1f2a5c3471ab0e0c273a61dfa6d76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_73f87e24262b0109fb68f92a60a869bcbe1f2a5c3471ab0e0c273a61dfa6d76c->leave($__internal_73f87e24262b0109fb68f92a60a869bcbe1f2a5c3471ab0e0c273a61dfa6d76c_prof);

        
        $__internal_b9ad0ba36fd935a8884a30931ef5d4fbf5f3c8bea2cc5f51146108d830fa3021->leave($__internal_b9ad0ba36fd935a8884a30931ef5d4fbf5f3c8bea2cc5f51146108d830fa3021_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_1786f908448d8f7d2a388b7723ba635519eab1c34b186d9a72cae992d37a7318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1786f908448d8f7d2a388b7723ba635519eab1c34b186d9a72cae992d37a7318->enter($__internal_1786f908448d8f7d2a388b7723ba635519eab1c34b186d9a72cae992d37a7318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f9ac5b9702a06fc35bd38c680251c7e9f2f35b51afa522b4258ec0b6d5e930a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f9ac5b9702a06fc35bd38c680251c7e9f2f35b51afa522b4258ec0b6d5e930a->enter($__internal_9f9ac5b9702a06fc35bd38c680251c7e9f2f35b51afa522b4258ec0b6d5e930a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9f9ac5b9702a06fc35bd38c680251c7e9f2f35b51afa522b4258ec0b6d5e930a->leave($__internal_9f9ac5b9702a06fc35bd38c680251c7e9f2f35b51afa522b4258ec0b6d5e930a_prof);

        
        $__internal_1786f908448d8f7d2a388b7723ba635519eab1c34b186d9a72cae992d37a7318->leave($__internal_1786f908448d8f7d2a388b7723ba635519eab1c34b186d9a72cae992d37a7318_prof);

    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8779ababd44d7ca948cb7586481499d83843942f791e3176314b6d6ee6db1fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8779ababd44d7ca948cb7586481499d83843942f791e3176314b6d6ee6db1fd0->enter($__internal_8779ababd44d7ca948cb7586481499d83843942f791e3176314b6d6ee6db1fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_039daa016ed02c8fd2b7dd5f0f16ca4ab94c0ffe5fd2dfad3ddecba51d05d07a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_039daa016ed02c8fd2b7dd5f0f16ca4ab94c0ffe5fd2dfad3ddecba51d05d07a->enter($__internal_039daa016ed02c8fd2b7dd5f0f16ca4ab94c0ffe5fd2dfad3ddecba51d05d07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_039daa016ed02c8fd2b7dd5f0f16ca4ab94c0ffe5fd2dfad3ddecba51d05d07a->leave($__internal_039daa016ed02c8fd2b7dd5f0f16ca4ab94c0ffe5fd2dfad3ddecba51d05d07a_prof);

        
        $__internal_8779ababd44d7ca948cb7586481499d83843942f791e3176314b6d6ee6db1fd0->leave($__internal_8779ababd44d7ca948cb7586481499d83843942f791e3176314b6d6ee6db1fd0_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_01d61eb1515292e614c501777ab76bbbc451c239abe172c13c15edc7ea1568ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01d61eb1515292e614c501777ab76bbbc451c239abe172c13c15edc7ea1568ef->enter($__internal_01d61eb1515292e614c501777ab76bbbc451c239abe172c13c15edc7ea1568ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c2fee37b252ca101aa897eddf986d0b6ba432444842afca621051edda9029ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2fee37b252ca101aa897eddf986d0b6ba432444842afca621051edda9029ce4->enter($__internal_c2fee37b252ca101aa897eddf986d0b6ba432444842afca621051edda9029ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c2fee37b252ca101aa897eddf986d0b6ba432444842afca621051edda9029ce4->leave($__internal_c2fee37b252ca101aa897eddf986d0b6ba432444842afca621051edda9029ce4_prof);

        
        $__internal_01d61eb1515292e614c501777ab76bbbc451c239abe172c13c15edc7ea1568ef->leave($__internal_01d61eb1515292e614c501777ab76bbbc451c239abe172c13c15edc7ea1568ef_prof);

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
        return array (  190 => 39,  173 => 37,  156 => 36,  139 => 35,  118 => 16,  108 => 8,  99 => 7,  81 => 6,  69 => 40,  67 => 39,  64 => 38,  61 => 37,  58 => 36,  56 => 35,  44 => 27,  42 => 7,  38 => 6,  31 => 1,);
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
<script>
\$(document).ready(function(){
    \$('#example').DataTable();
});
</script>
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
