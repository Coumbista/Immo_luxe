<?php

/* GSTImmobilierBundle:Admin:type.html.twig */
class __TwigTemplate_961a12ff4b226fdb7b6331eb6a8dde3b703843f44b239a8e899fefde81236147 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::back.html.twig", "GSTImmobilierBundle:Admin:type.html.twig", 1);
        $this->blocks = array(
            'recharge' => array($this, 'block_recharge'),
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a686221b23bac568492b20ddc60b4e1449ceafea86baa713285ae5f43970607a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a686221b23bac568492b20ddc60b4e1449ceafea86baa713285ae5f43970607a->enter($__internal_a686221b23bac568492b20ddc60b4e1449ceafea86baa713285ae5f43970607a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Admin:type.html.twig"));

        $__internal_5bb074ce692bb01ee442599f25d1d28c4c4f938960fccc4ef1cdbf0b76dbd569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bb074ce692bb01ee442599f25d1d28c4c4f938960fccc4ef1cdbf0b76dbd569->enter($__internal_5bb074ce692bb01ee442599f25d1d28c4c4f938960fccc4ef1cdbf0b76dbd569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Admin:type.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a686221b23bac568492b20ddc60b4e1449ceafea86baa713285ae5f43970607a->leave($__internal_a686221b23bac568492b20ddc60b4e1449ceafea86baa713285ae5f43970607a_prof);

        
        $__internal_5bb074ce692bb01ee442599f25d1d28c4c4f938960fccc4ef1cdbf0b76dbd569->leave($__internal_5bb074ce692bb01ee442599f25d1d28c4c4f938960fccc4ef1cdbf0b76dbd569_prof);

    }

    // line 2
    public function block_recharge($context, array $blocks = array())
    {
        $__internal_c9b5bed2d97e10b3094b348ad8a9b2f1838f6a2d41e6ed1d5f06169c6e867cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9b5bed2d97e10b3094b348ad8a9b2f1838f6a2d41e6ed1d5f06169c6e867cdb->enter($__internal_c9b5bed2d97e10b3094b348ad8a9b2f1838f6a2d41e6ed1d5f06169c6e867cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recharge"));

        $__internal_2f7a703a20efe526d3028b2beeebc716dd0504d0686ea3b2be0df96be143cd1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f7a703a20efe526d3028b2beeebc716dd0504d0686ea3b2be0df96be143cd1b->enter($__internal_2f7a703a20efe526d3028b2beeebc716dd0504d0686ea3b2be0df96be143cd1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recharge"));

        // line 3
        echo "<div class=\"container\" id=\"container\"style=\"margin-top:50px;\">
        ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'form');
        echo "
<table class=\"table\" id=\"myTable\" >
  <thead>
    <tr>
      <th>id</th>
      <th>Nom type</th>
      
    </tr>
  </thead>";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new Twig_Error_Runtime('Variable "types" does not exist.', 12, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 13
            echo "<tr>
<td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["type"], "id", array()), "html", null, true);
            echo "</td>
<td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["type"], "libelletype", array()), "html", null, true);
            echo "</td>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</tr>
</table>

";
        // line 21
        $this->displayBlock('head', $context, $blocks);
        // line 28
        echo "






";
        // line 35
        $this->displayBlock('javascript', $context, $blocks);
        // line 41
        echo "
 
";
        
        $__internal_2f7a703a20efe526d3028b2beeebc716dd0504d0686ea3b2be0df96be143cd1b->leave($__internal_2f7a703a20efe526d3028b2beeebc716dd0504d0686ea3b2be0df96be143cd1b_prof);

        
        $__internal_c9b5bed2d97e10b3094b348ad8a9b2f1838f6a2d41e6ed1d5f06169c6e867cdb->leave($__internal_c9b5bed2d97e10b3094b348ad8a9b2f1838f6a2d41e6ed1d5f06169c6e867cdb_prof);

    }

    // line 21
    public function block_head($context, array $blocks = array())
    {
        $__internal_8581ee54dbcebeefd787cd23c8bf4af5bec63ba22361041bcbb90394f9cf03ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8581ee54dbcebeefd787cd23c8bf4af5bec63ba22361041bcbb90394f9cf03ee->enter($__internal_8581ee54dbcebeefd787cd23c8bf4af5bec63ba22361041bcbb90394f9cf03ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d55675925a7469029b498b9f8bb500fcbb6ef7565d1a7778b2aa641798f548e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d55675925a7469029b498b9f8bb500fcbb6ef7565d1a7778b2aa641798f548e2->enter($__internal_d55675925a7469029b498b9f8bb500fcbb6ef7565d1a7778b2aa641798f548e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "
";
        
        $__internal_d55675925a7469029b498b9f8bb500fcbb6ef7565d1a7778b2aa641798f548e2->leave($__internal_d55675925a7469029b498b9f8bb500fcbb6ef7565d1a7778b2aa641798f548e2_prof);

        
        $__internal_8581ee54dbcebeefd787cd23c8bf4af5bec63ba22361041bcbb90394f9cf03ee->leave($__internal_8581ee54dbcebeefd787cd23c8bf4af5bec63ba22361041bcbb90394f9cf03ee_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a5b7c4393ca78adc3049626c18e5d512b336c3e48dc39b3b0beaffdfbf1c9bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a5b7c4393ca78adc3049626c18e5d512b336c3e48dc39b3b0beaffdfbf1c9bd->enter($__internal_7a5b7c4393ca78adc3049626c18e5d512b336c3e48dc39b3b0beaffdfbf1c9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b7e0857bb8b0d67abfb3a9228e710d87b18e0f7be79d855f0400a85a45d11ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e0857bb8b0d67abfb3a9228e710d87b18e0f7be79d855f0400a85a45d11ea8->enter($__internal_b7e0857bb8b0d67abfb3a9228e710d87b18e0f7be79d855f0400a85a45d11ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datatables.css"), "html", null, true);
        echo "\">

";
        
        $__internal_b7e0857bb8b0d67abfb3a9228e710d87b18e0f7be79d855f0400a85a45d11ea8->leave($__internal_b7e0857bb8b0d67abfb3a9228e710d87b18e0f7be79d855f0400a85a45d11ea8_prof);

        
        $__internal_7a5b7c4393ca78adc3049626c18e5d512b336c3e48dc39b3b0beaffdfbf1c9bd->leave($__internal_7a5b7c4393ca78adc3049626c18e5d512b336c3e48dc39b3b0beaffdfbf1c9bd_prof);

    }

    // line 35
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c6f6cbb3c0c234274f140a5ff97edebd83256daf7f00b8be10171c2a2d4c68f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6f6cbb3c0c234274f140a5ff97edebd83256daf7f00b8be10171c2a2d4c68f8->enter($__internal_c6f6cbb3c0c234274f140a5ff97edebd83256daf7f00b8be10171c2a2d4c68f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_cbe6c92f6d4e99406b0a912cc92d2a4e5eb56e118fbefda970ca960c762a9472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe6c92f6d4e99406b0a912cc92d2a4e5eb56e118fbefda970ca960c762a9472->enter($__internal_cbe6c92f6d4e99406b0a912cc92d2a4e5eb56e118fbefda970ca960c762a9472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 36
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/liste.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_cbe6c92f6d4e99406b0a912cc92d2a4e5eb56e118fbefda970ca960c762a9472->leave($__internal_cbe6c92f6d4e99406b0a912cc92d2a4e5eb56e118fbefda970ca960c762a9472_prof);

        
        $__internal_c6f6cbb3c0c234274f140a5ff97edebd83256daf7f00b8be10171c2a2d4c68f8->leave($__internal_c6f6cbb3c0c234274f140a5ff97edebd83256daf7f00b8be10171c2a2d4c68f8_prof);

    }

    public function getTemplateName()
    {
        return "GSTImmobilierBundle:Admin:type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 39,  179 => 38,  175 => 37,  170 => 36,  161 => 35,  147 => 23,  138 => 22,  127 => 26,  125 => 22,  116 => 21,  104 => 41,  102 => 35,  93 => 28,  91 => 21,  86 => 18,  77 => 15,  73 => 14,  70 => 13,  66 => 12,  55 => 4,  52 => 3,  43 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::back.html.twig\" %}
{% block recharge %}
<div class=\"container\" id=\"container\"style=\"margin-top:50px;\">
        {{ form (form)}}
<table class=\"table\" id=\"myTable\" >
  <thead>
    <tr>
      <th>id</th>
      <th>Nom type</th>
      
    </tr>
  </thead>{%for type in types %}
<tr>
<td>{{type.id}}</td>
<td>{{type.libelletype}}</td>

{% endfor %}
</tr>
</table>

{% block head %}
{% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/datatables.css') }}\">

{% endblock %}

{% endblock %}







{% block javascript %}
  <script src=\"{{ asset('js/jquery.js') }}\"></script>
  <script src=\"{{ asset('js/datatables.js') }}\"></script>
  <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/liste.js') }}\"></script>
{% endblock %}

 
{% endblock %}


", "GSTImmobilierBundle:Admin:type.html.twig", "/var/www/html/Agence_immobilier/Immobilier/src/GST/ImmobilierBundle/Resources/views/Admin/type.html.twig");
    }
}
