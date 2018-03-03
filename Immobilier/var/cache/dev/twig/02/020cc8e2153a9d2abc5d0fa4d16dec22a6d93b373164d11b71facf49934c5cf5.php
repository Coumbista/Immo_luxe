<?php

/* GSTImmobilierBundle:Admin:localite.html.twig */
class __TwigTemplate_f6e175b24999b1b561c4fa03fb50d4a782791f928689bd8213cd025bcae7dc4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::back.html.twig", "GSTImmobilierBundle:Admin:localite.html.twig", 1);
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
        $__internal_7e98d8c415423024eb8046c9a988e2a5230aca7bd9e1448b4e507a8d4fb0a150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e98d8c415423024eb8046c9a988e2a5230aca7bd9e1448b4e507a8d4fb0a150->enter($__internal_7e98d8c415423024eb8046c9a988e2a5230aca7bd9e1448b4e507a8d4fb0a150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Admin:localite.html.twig"));

        $__internal_a7fe253b681bc938183b37ff51fea822181a13a494890c46e9f73f2db0e6ee84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7fe253b681bc938183b37ff51fea822181a13a494890c46e9f73f2db0e6ee84->enter($__internal_a7fe253b681bc938183b37ff51fea822181a13a494890c46e9f73f2db0e6ee84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Admin:localite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e98d8c415423024eb8046c9a988e2a5230aca7bd9e1448b4e507a8d4fb0a150->leave($__internal_7e98d8c415423024eb8046c9a988e2a5230aca7bd9e1448b4e507a8d4fb0a150_prof);

        
        $__internal_a7fe253b681bc938183b37ff51fea822181a13a494890c46e9f73f2db0e6ee84->leave($__internal_a7fe253b681bc938183b37ff51fea822181a13a494890c46e9f73f2db0e6ee84_prof);

    }

    // line 2
    public function block_recharge($context, array $blocks = array())
    {
        $__internal_1c72dfa91fff4e7115da22010a4c457d7d38f75bb6b9655c43fda0a0e265c45b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c72dfa91fff4e7115da22010a4c457d7d38f75bb6b9655c43fda0a0e265c45b->enter($__internal_1c72dfa91fff4e7115da22010a4c457d7d38f75bb6b9655c43fda0a0e265c45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recharge"));

        $__internal_ca1c311db0bd8891101e932a18bfb1273e0e38f6528ca80f55b3fb8076b1dbd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1c311db0bd8891101e932a18bfb1273e0e38f6528ca80f55b3fb8076b1dbd7->enter($__internal_ca1c311db0bd8891101e932a18bfb1273e0e38f6528ca80f55b3fb8076b1dbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recharge"));

        // line 3
        echo "<div class=\"container\" style=\"margin-top:50px;\">
      ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'form');
        echo "
      <div class=\"row\">
            <div class=\"col_md-12\">
            <input type=\"submit\"name=\"submit\" value=\"Enregistrer\"class=\"btn btn-primary\" style=\"margin-left:70%;\">
            <input type=\"submit\"name=\"submit\" value=\"Annuler\"class=\"btn btn-primary\" style=\"margin-left:10px;\">
            </div>
            </div><br>
<table class=\"table\" id=\"myTable\" style=\"margin-top:50px;\">
  <thead>
    <tr>
      <th>id</th>
      <th>Libellé_localite</th>
      
    </tr>
  </thead>";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["localites"]) || array_key_exists("localites", $context) ? $context["localites"] : (function () { throw new Twig_Error_Runtime('Variable "localites" does not exist.', 18, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 19
            echo "<tr>
<td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["localite"], "id", array()), "html", null, true);
            echo "</td>
<td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["localite"], "libelleloca", array()), "html", null, true);
            echo "</td>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "</tr>
</table>

";
        // line 27
        $this->displayBlock('head', $context, $blocks);
        // line 34
        echo "






";
        // line 41
        $this->displayBlock('javascript', $context, $blocks);
        // line 47
        echo "
 
";
        
        $__internal_ca1c311db0bd8891101e932a18bfb1273e0e38f6528ca80f55b3fb8076b1dbd7->leave($__internal_ca1c311db0bd8891101e932a18bfb1273e0e38f6528ca80f55b3fb8076b1dbd7_prof);

        
        $__internal_1c72dfa91fff4e7115da22010a4c457d7d38f75bb6b9655c43fda0a0e265c45b->leave($__internal_1c72dfa91fff4e7115da22010a4c457d7d38f75bb6b9655c43fda0a0e265c45b_prof);

    }

    // line 27
    public function block_head($context, array $blocks = array())
    {
        $__internal_c75d8a6da2e907169d4abf88d9a07863ba5c69e06b09f5dbe45dd30a14ddc02d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c75d8a6da2e907169d4abf88d9a07863ba5c69e06b09f5dbe45dd30a14ddc02d->enter($__internal_c75d8a6da2e907169d4abf88d9a07863ba5c69e06b09f5dbe45dd30a14ddc02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2e617652961ceac8ccc89f738d815df0151ce6626f9e51dee6421ff02885a9de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e617652961ceac8ccc89f738d815df0151ce6626f9e51dee6421ff02885a9de->enter($__internal_2e617652961ceac8ccc89f738d815df0151ce6626f9e51dee6421ff02885a9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "
";
        
        $__internal_2e617652961ceac8ccc89f738d815df0151ce6626f9e51dee6421ff02885a9de->leave($__internal_2e617652961ceac8ccc89f738d815df0151ce6626f9e51dee6421ff02885a9de_prof);

        
        $__internal_c75d8a6da2e907169d4abf88d9a07863ba5c69e06b09f5dbe45dd30a14ddc02d->leave($__internal_c75d8a6da2e907169d4abf88d9a07863ba5c69e06b09f5dbe45dd30a14ddc02d_prof);

    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5ca4b5f1529830d5a1c2ee6785d8a3b472bc7ea2058e2a712a07c97a8557c032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ca4b5f1529830d5a1c2ee6785d8a3b472bc7ea2058e2a712a07c97a8557c032->enter($__internal_5ca4b5f1529830d5a1c2ee6785d8a3b472bc7ea2058e2a712a07c97a8557c032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2d6217858b17595cf5f5f9304f0dff0a3e39006be2f4e7a8b4de1e4005c16af2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6217858b17595cf5f5f9304f0dff0a3e39006be2f4e7a8b4de1e4005c16af2->enter($__internal_2d6217858b17595cf5f5f9304f0dff0a3e39006be2f4e7a8b4de1e4005c16af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 29
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datatables.css"), "html", null, true);
        echo "\">

";
        
        $__internal_2d6217858b17595cf5f5f9304f0dff0a3e39006be2f4e7a8b4de1e4005c16af2->leave($__internal_2d6217858b17595cf5f5f9304f0dff0a3e39006be2f4e7a8b4de1e4005c16af2_prof);

        
        $__internal_5ca4b5f1529830d5a1c2ee6785d8a3b472bc7ea2058e2a712a07c97a8557c032->leave($__internal_5ca4b5f1529830d5a1c2ee6785d8a3b472bc7ea2058e2a712a07c97a8557c032_prof);

    }

    // line 41
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_4f5960ccfdb82bb191e56729427824a5a80558aa757f210bc02fafe9e2e55841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f5960ccfdb82bb191e56729427824a5a80558aa757f210bc02fafe9e2e55841->enter($__internal_4f5960ccfdb82bb191e56729427824a5a80558aa757f210bc02fafe9e2e55841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_3a3c673206df25dd36c2b7e1f5bb2f4bbfb03ca074217a37469d2189534f4855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a3c673206df25dd36c2b7e1f5bb2f4bbfb03ca074217a37469d2189534f4855->enter($__internal_3a3c673206df25dd36c2b7e1f5bb2f4bbfb03ca074217a37469d2189534f4855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 42
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/liste.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_3a3c673206df25dd36c2b7e1f5bb2f4bbfb03ca074217a37469d2189534f4855->leave($__internal_3a3c673206df25dd36c2b7e1f5bb2f4bbfb03ca074217a37469d2189534f4855_prof);

        
        $__internal_4f5960ccfdb82bb191e56729427824a5a80558aa757f210bc02fafe9e2e55841->leave($__internal_4f5960ccfdb82bb191e56729427824a5a80558aa757f210bc02fafe9e2e55841_prof);

    }

    public function getTemplateName()
    {
        return "GSTImmobilierBundle:Admin:localite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 45,  185 => 44,  181 => 43,  176 => 42,  167 => 41,  153 => 29,  144 => 28,  133 => 32,  131 => 28,  122 => 27,  110 => 47,  108 => 41,  99 => 34,  97 => 27,  92 => 24,  83 => 21,  79 => 20,  76 => 19,  72 => 18,  55 => 4,  52 => 3,  43 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::back.html.twig\" %}
{% block recharge %}
<div class=\"container\" style=\"margin-top:50px;\">
      {{ form (form)}}
      <div class=\"row\">
            <div class=\"col_md-12\">
            <input type=\"submit\"name=\"submit\" value=\"Enregistrer\"class=\"btn btn-primary\" style=\"margin-left:70%;\">
            <input type=\"submit\"name=\"submit\" value=\"Annuler\"class=\"btn btn-primary\" style=\"margin-left:10px;\">
            </div>
            </div><br>
<table class=\"table\" id=\"myTable\" style=\"margin-top:50px;\">
  <thead>
    <tr>
      <th>id</th>
      <th>Libellé_localite</th>
      
    </tr>
  </thead>{%for localite in localites %}
<tr>
<td>{{localite.id}}</td>
<td>{{localite.libelleloca}}</td>

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


", "GSTImmobilierBundle:Admin:localite.html.twig", "/var/www/html/Agence_immobilier/Immobilier/src/GST/ImmobilierBundle/Resources/views/Admin/localite.html.twig");
    }
}
