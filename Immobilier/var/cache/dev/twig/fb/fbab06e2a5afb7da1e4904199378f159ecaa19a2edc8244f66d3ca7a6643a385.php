<?php

/* GSTImmobilierBundle:Front:login.html.twig */
class __TwigTemplate_bb3274031dd2a9608218a7b8453b1ae444cbc1529ebe2664447e8b02deafede8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GSTImmobilierBundle:Default:index.html.twig", "GSTImmobilierBundle:Front:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GSTImmobilierBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca2b4082e7defd756523ca2fe7ebc899394d0879cd8e24e8905548405981000b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca2b4082e7defd756523ca2fe7ebc899394d0879cd8e24e8905548405981000b->enter($__internal_ca2b4082e7defd756523ca2fe7ebc899394d0879cd8e24e8905548405981000b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Front:login.html.twig"));

        $__internal_a59c7e606459f735dc7f019b3cbbef46e199734e1c664416ac7a95750cc58317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59c7e606459f735dc7f019b3cbbef46e199734e1c664416ac7a95750cc58317->enter($__internal_a59c7e606459f735dc7f019b3cbbef46e199734e1c664416ac7a95750cc58317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Front:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca2b4082e7defd756523ca2fe7ebc899394d0879cd8e24e8905548405981000b->leave($__internal_ca2b4082e7defd756523ca2fe7ebc899394d0879cd8e24e8905548405981000b_prof);

        
        $__internal_a59c7e606459f735dc7f019b3cbbef46e199734e1c664416ac7a95750cc58317->leave($__internal_a59c7e606459f735dc7f019b3cbbef46e199734e1c664416ac7a95750cc58317_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fbc236f01c70664c78682cb2705fc571370e685c925d5bf366e6c9d7052bcaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fbc236f01c70664c78682cb2705fc571370e685c925d5bf366e6c9d7052bcaa->enter($__internal_5fbc236f01c70664c78682cb2705fc571370e685c925d5bf366e6c9d7052bcaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8f9cd97f4785f1480363713ad7f7afd0fe36ccc45dbdb72df73f819ad8814166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f9cd97f4785f1480363713ad7f7afd0fe36ccc45dbdb72df73f819ad8814166->enter($__internal_8f9cd97f4785f1480363713ad7f7afd0fe36ccc45dbdb72df73f819ad8814166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GSTImmobilierBundle:Front:reserver";
        
        $__internal_8f9cd97f4785f1480363713ad7f7afd0fe36ccc45dbdb72df73f819ad8814166->leave($__internal_8f9cd97f4785f1480363713ad7f7afd0fe36ccc45dbdb72df73f819ad8814166_prof);

        
        $__internal_5fbc236f01c70664c78682cb2705fc571370e685c925d5bf366e6c9d7052bcaa->leave($__internal_5fbc236f01c70664c78682cb2705fc571370e685c925d5bf366e6c9d7052bcaa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_40c0630bf725563332e9aecea43f99041c8daeb7898452dba2bb4f45baa5085f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40c0630bf725563332e9aecea43f99041c8daeb7898452dba2bb4f45baa5085f->enter($__internal_40c0630bf725563332e9aecea43f99041c8daeb7898452dba2bb4f45baa5085f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ff89935db152fbb2e69890ab844808789ed369b421089f3bd4451f75b96547b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff89935db152fbb2e69890ab844808789ed369b421089f3bd4451f75b96547b->enter($__internal_6ff89935db152fbb2e69890ab844808789ed369b421089f3bd4451f75b96547b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
  <form method=\"POST\">
    <div class=\"form-group row\">
      <label for=\"email\" class=\"col-sm-2 col-form-label\">Email</label>
      <div class=\"col-sm-10\">
        <input type=\"email\" name=\"emailclient\" class=\"form-control\" placeholder=\"Email\">
      </div>
    </div>
    <div class=\"form-group row\">
      <label for=\"password\" class=\"col-sm-2 col-form-label\">Password</label>
      <div class=\"col-sm-10\">
        <input type=\"password\" name=\"password\" class=\"form-control\"  placeholder=\"Password\">
      </div>
    </div>
    <div class=\"form-group row\">
      <div class=\"offset-sm-2 col-sm-10\">
        <button type=\"submit\" class=\"btn btn-primary\">Sign in</button>
      </div>
    </div>
  </form>
          <a href=\"Agence_immobilier/Immobilier/web/app_dev.php/Immobilier/front/bien/logup\" class=\"btn btn-primary\">s'inscrire</a>

</div><br><br>
";
        // line 29
        if (($context["users"] ?? $this->getContext($context, "users"))) {
            // line 30
            echo "
";
        } else {
            // line 32
            echo "<td colspan=\"6\">Veillez vous inscrire</td>


";
        }
        // line 36
        echo "


        ";
        
        $__internal_6ff89935db152fbb2e69890ab844808789ed369b421089f3bd4451f75b96547b->leave($__internal_6ff89935db152fbb2e69890ab844808789ed369b421089f3bd4451f75b96547b_prof);

        
        $__internal_40c0630bf725563332e9aecea43f99041c8daeb7898452dba2bb4f45baa5085f->leave($__internal_40c0630bf725563332e9aecea43f99041c8daeb7898452dba2bb4f45baa5085f_prof);

    }

    public function getTemplateName()
    {
        return "GSTImmobilierBundle:Front:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 36,  99 => 32,  95 => 30,  93 => 29,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {% extends 'GSTImmobilierBundle:Default:index.html.twig'   %} 
 
{% block title %}GSTImmobilierBundle:Front:reserver{% endblock %}

{% block body %}
<div class=\"container\">
  <form method=\"POST\">
    <div class=\"form-group row\">
      <label for=\"email\" class=\"col-sm-2 col-form-label\">Email</label>
      <div class=\"col-sm-10\">
        <input type=\"email\" name=\"emailclient\" class=\"form-control\" placeholder=\"Email\">
      </div>
    </div>
    <div class=\"form-group row\">
      <label for=\"password\" class=\"col-sm-2 col-form-label\">Password</label>
      <div class=\"col-sm-10\">
        <input type=\"password\" name=\"password\" class=\"form-control\"  placeholder=\"Password\">
      </div>
    </div>
    <div class=\"form-group row\">
      <div class=\"offset-sm-2 col-sm-10\">
        <button type=\"submit\" class=\"btn btn-primary\">Sign in</button>
      </div>
    </div>
  </form>
          <a href=\"Agence_immobilier/Immobilier/web/app_dev.php/Immobilier/front/bien/logup\" class=\"btn btn-primary\">s'inscrire</a>

</div><br><br>
{% if users%}

{%else%}
<td colspan=\"6\">Veillez vous inscrire</td>


{% endif %}



        {% endblock %}", "GSTImmobilierBundle:Front:login.html.twig", "/var/www/html/Agence_immobilier/Immobilier/src/GST/ImmobilierBundle/Resources/views/Front/login.html.twig");
    }
}
