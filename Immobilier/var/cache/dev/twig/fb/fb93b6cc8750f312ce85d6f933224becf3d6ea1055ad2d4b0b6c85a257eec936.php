<?php

/* GSTImmobilierBundle:Front:logup.html.twig */
class __TwigTemplate_720876e93add1f8b388948784c33d662b2b506c10915e44116556af1e9977f5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("GSTImmobilierBundle:Front:layout.html.twig", "GSTImmobilierBundle:Front:logup.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GSTImmobilierBundle:Front:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_919e2aef56e5d51a3b1d299eb1a608e3b9699e51d86c6f6c82c3419172b32a9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_919e2aef56e5d51a3b1d299eb1a608e3b9699e51d86c6f6c82c3419172b32a9f->enter($__internal_919e2aef56e5d51a3b1d299eb1a608e3b9699e51d86c6f6c82c3419172b32a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Front:logup.html.twig"));

        $__internal_6ced5b4f86e457e0bb404e3e347cb5cb48850c812bd1e6e50377eae109872ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ced5b4f86e457e0bb404e3e347cb5cb48850c812bd1e6e50377eae109872ba2->enter($__internal_6ced5b4f86e457e0bb404e3e347cb5cb48850c812bd1e6e50377eae109872ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Front:logup.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_919e2aef56e5d51a3b1d299eb1a608e3b9699e51d86c6f6c82c3419172b32a9f->leave($__internal_919e2aef56e5d51a3b1d299eb1a608e3b9699e51d86c6f6c82c3419172b32a9f_prof);

        
        $__internal_6ced5b4f86e457e0bb404e3e347cb5cb48850c812bd1e6e50377eae109872ba2->leave($__internal_6ced5b4f86e457e0bb404e3e347cb5cb48850c812bd1e6e50377eae109872ba2_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c26b0a714389dcf4444edfbf6b5dbf85aaad5840aea363d7f97645c6a732169c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c26b0a714389dcf4444edfbf6b5dbf85aaad5840aea363d7f97645c6a732169c->enter($__internal_c26b0a714389dcf4444edfbf6b5dbf85aaad5840aea363d7f97645c6a732169c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d18b232cf8cef2293df8e2c96623eb9241f199621c52be1d66385cda3b60be4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d18b232cf8cef2293df8e2c96623eb9241f199621c52be1d66385cda3b60be4e->enter($__internal_d18b232cf8cef2293df8e2c96623eb9241f199621c52be1d66385cda3b60be4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GSTImmobilierBundle:Front:reserver";
        
        $__internal_d18b232cf8cef2293df8e2c96623eb9241f199621c52be1d66385cda3b60be4e->leave($__internal_d18b232cf8cef2293df8e2c96623eb9241f199621c52be1d66385cda3b60be4e_prof);

        
        $__internal_c26b0a714389dcf4444edfbf6b5dbf85aaad5840aea363d7f97645c6a732169c->leave($__internal_c26b0a714389dcf4444edfbf6b5dbf85aaad5840aea363d7f97645c6a732169c_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_08be9643b67b8d7d53e0c93c977d624085ef7540e7350f1217108e916d4e132a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08be9643b67b8d7d53e0c93c977d624085ef7540e7350f1217108e916d4e132a->enter($__internal_08be9643b67b8d7d53e0c93c977d624085ef7540e7350f1217108e916d4e132a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0bf327840044ce78e069dadc202062e62e4b25d2239a0569bdcd70a497157c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0bf327840044ce78e069dadc202062e62e4b25d2239a0569bdcd70a497157c4->enter($__internal_c0bf327840044ce78e069dadc202062e62e4b25d2239a0569bdcd70a497157c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"container\">
  ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
          <a href=\"Agence_immobilier/Immobilier/web/app_dev.php/front/bien/login\" class=\"btn btn-primary\">se connecter</a>

</div><br><br>
        ";
        
        $__internal_c0bf327840044ce78e069dadc202062e62e4b25d2239a0569bdcd70a497157c4->leave($__internal_c0bf327840044ce78e069dadc202062e62e4b25d2239a0569bdcd70a497157c4_prof);

        
        $__internal_08be9643b67b8d7d53e0c93c977d624085ef7540e7350f1217108e916d4e132a->leave($__internal_08be9643b67b8d7d53e0c93c977d624085ef7540e7350f1217108e916d4e132a_prof);

    }

    public function getTemplateName()
    {
        return "GSTImmobilierBundle:Front:logup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 8,  68 => 7,  59 => 6,  41 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# {% extends \"::base.html.twig\" %} #}
 {% extends 'GSTImmobilierBundle:Front:layout.html.twig'   %} 
 
{% block title %}GSTImmobilierBundle:Front:reserver{% endblock %}

{% block body %}
<div class=\"container\">
  {{ form (form)}}
          <a href=\"Agence_immobilier/Immobilier/web/app_dev.php/front/bien/login\" class=\"btn btn-primary\">se connecter</a>

</div><br><br>
        {% endblock %}", "GSTImmobilierBundle:Front:logup.html.twig", "/var/www/html/Agence_immobilier/Immobilier/src/GST/ImmobilierBundle/Resources/views/Front/logup.html.twig");
    }
}
