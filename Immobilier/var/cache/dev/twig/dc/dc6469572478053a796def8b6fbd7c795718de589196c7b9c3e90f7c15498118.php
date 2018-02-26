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
        $__internal_6eec97473d5aab6e790f99113364b035f689723641e1465333f868366c1e968d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eec97473d5aab6e790f99113364b035f689723641e1465333f868366c1e968d->enter($__internal_6eec97473d5aab6e790f99113364b035f689723641e1465333f868366c1e968d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_8185d378372cd6cc43b10d09efbdf00c4fd8b9bf655db929fc546d11c757330c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8185d378372cd6cc43b10d09efbdf00c4fd8b9bf655db929fc546d11c757330c->enter($__internal_8185d378372cd6cc43b10d09efbdf00c4fd8b9bf655db929fc546d11c757330c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_6eec97473d5aab6e790f99113364b035f689723641e1465333f868366c1e968d->leave($__internal_6eec97473d5aab6e790f99113364b035f689723641e1465333f868366c1e968d_prof);

        
        $__internal_8185d378372cd6cc43b10d09efbdf00c4fd8b9bf655db929fc546d11c757330c->leave($__internal_8185d378372cd6cc43b10d09efbdf00c4fd8b9bf655db929fc546d11c757330c_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b1797bd2010a22fe95662c5bf668eef46d51739040f5ba054bb23308e12088d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b1797bd2010a22fe95662c5bf668eef46d51739040f5ba054bb23308e12088d->enter($__internal_7b1797bd2010a22fe95662c5bf668eef46d51739040f5ba054bb23308e12088d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_99a0fb338bc4158bde44209f9cc171575563cbf765d6f1b7bae4f76a3dd85183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99a0fb338bc4158bde44209f9cc171575563cbf765d6f1b7bae4f76a3dd85183->enter($__internal_99a0fb338bc4158bde44209f9cc171575563cbf765d6f1b7bae4f76a3dd85183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_99a0fb338bc4158bde44209f9cc171575563cbf765d6f1b7bae4f76a3dd85183->leave($__internal_99a0fb338bc4158bde44209f9cc171575563cbf765d6f1b7bae4f76a3dd85183_prof);

        
        $__internal_7b1797bd2010a22fe95662c5bf668eef46d51739040f5ba054bb23308e12088d->leave($__internal_7b1797bd2010a22fe95662c5bf668eef46d51739040f5ba054bb23308e12088d_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_01bfb6e93980bac3d704483e5d41fe90ff9cf5756798472e29a920e963ab9390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01bfb6e93980bac3d704483e5d41fe90ff9cf5756798472e29a920e963ab9390->enter($__internal_01bfb6e93980bac3d704483e5d41fe90ff9cf5756798472e29a920e963ab9390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a72fb82362ddb952ee75e16a57c7437f8729cc18a885970ee57e9bde7ee928a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72fb82362ddb952ee75e16a57c7437f8729cc18a885970ee57e9bde7ee928a9->enter($__internal_a72fb82362ddb952ee75e16a57c7437f8729cc18a885970ee57e9bde7ee928a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a72fb82362ddb952ee75e16a57c7437f8729cc18a885970ee57e9bde7ee928a9->leave($__internal_a72fb82362ddb952ee75e16a57c7437f8729cc18a885970ee57e9bde7ee928a9_prof);

        
        $__internal_01bfb6e93980bac3d704483e5d41fe90ff9cf5756798472e29a920e963ab9390->leave($__internal_01bfb6e93980bac3d704483e5d41fe90ff9cf5756798472e29a920e963ab9390_prof);

    }

    // line 31
    public function block_header($context, array $blocks = array())
    {
        $__internal_629ff383b90e6a1249942fa7a2345abfff41dd94ed2d6567ea1172d9d2e8725c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_629ff383b90e6a1249942fa7a2345abfff41dd94ed2d6567ea1172d9d2e8725c->enter($__internal_629ff383b90e6a1249942fa7a2345abfff41dd94ed2d6567ea1172d9d2e8725c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_a69efd565ea8502ebebb001a643d8a21b1737efe0c986bda90ebe9487132c101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a69efd565ea8502ebebb001a643d8a21b1737efe0c986bda90ebe9487132c101->enter($__internal_a69efd565ea8502ebebb001a643d8a21b1737efe0c986bda90ebe9487132c101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_a69efd565ea8502ebebb001a643d8a21b1737efe0c986bda90ebe9487132c101->leave($__internal_a69efd565ea8502ebebb001a643d8a21b1737efe0c986bda90ebe9487132c101_prof);

        
        $__internal_629ff383b90e6a1249942fa7a2345abfff41dd94ed2d6567ea1172d9d2e8725c->leave($__internal_629ff383b90e6a1249942fa7a2345abfff41dd94ed2d6567ea1172d9d2e8725c_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbdbe7e083429323dd88a37a16b59797ac87942711fa38f108cb4288874c411b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbdbe7e083429323dd88a37a16b59797ac87942711fa38f108cb4288874c411b->enter($__internal_fbdbe7e083429323dd88a37a16b59797ac87942711fa38f108cb4288874c411b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f81c05af3b2866085feaf33e24e667beb04b2162c4d71bc0f03092f62fe1733d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81c05af3b2866085feaf33e24e667beb04b2162c4d71bc0f03092f62fe1733d->enter($__internal_f81c05af3b2866085feaf33e24e667beb04b2162c4d71bc0f03092f62fe1733d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f81c05af3b2866085feaf33e24e667beb04b2162c4d71bc0f03092f62fe1733d->leave($__internal_f81c05af3b2866085feaf33e24e667beb04b2162c4d71bc0f03092f62fe1733d_prof);

        
        $__internal_fbdbe7e083429323dd88a37a16b59797ac87942711fa38f108cb4288874c411b->leave($__internal_fbdbe7e083429323dd88a37a16b59797ac87942711fa38f108cb4288874c411b_prof);

    }

    // line 33
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9ef3c75b3e072d286140370e832b52da43cbc84e36b4696e3d8acb9ff0939888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ef3c75b3e072d286140370e832b52da43cbc84e36b4696e3d8acb9ff0939888->enter($__internal_9ef3c75b3e072d286140370e832b52da43cbc84e36b4696e3d8acb9ff0939888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_a52081a084995c07f72588d8bb609693b144e2d4c62981b646efb4db929ab888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a52081a084995c07f72588d8bb609693b144e2d4c62981b646efb4db929ab888->enter($__internal_a52081a084995c07f72588d8bb609693b144e2d4c62981b646efb4db929ab888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_a52081a084995c07f72588d8bb609693b144e2d4c62981b646efb4db929ab888->leave($__internal_a52081a084995c07f72588d8bb609693b144e2d4c62981b646efb4db929ab888_prof);

        
        $__internal_9ef3c75b3e072d286140370e832b52da43cbc84e36b4696e3d8acb9ff0939888->leave($__internal_9ef3c75b3e072d286140370e832b52da43cbc84e36b4696e3d8acb9ff0939888_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bc14cdb22c728e7c185de77daff2c1aba721d98926dc5ac0967206faf525aab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc14cdb22c728e7c185de77daff2c1aba721d98926dc5ac0967206faf525aab9->enter($__internal_bc14cdb22c728e7c185de77daff2c1aba721d98926dc5ac0967206faf525aab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fcaeddda6f385548e02984ff992ad580fa4bcad9f7090a85533e41cd22ed7da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcaeddda6f385548e02984ff992ad580fa4bcad9f7090a85533e41cd22ed7da3->enter($__internal_fcaeddda6f385548e02984ff992ad580fa4bcad9f7090a85533e41cd22ed7da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fcaeddda6f385548e02984ff992ad580fa4bcad9f7090a85533e41cd22ed7da3->leave($__internal_fcaeddda6f385548e02984ff992ad580fa4bcad9f7090a85533e41cd22ed7da3_prof);

        
        $__internal_bc14cdb22c728e7c185de77daff2c1aba721d98926dc5ac0967206faf525aab9->leave($__internal_bc14cdb22c728e7c185de77daff2c1aba721d98926dc5ac0967206faf525aab9_prof);

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
