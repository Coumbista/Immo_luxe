<?php

/* GSTImmobilierBundle:Admin:list.html.twig */
class __TwigTemplate_a7f04778c2e7271018bed61af4949616dbb4107092c427366d99f188aa77c868 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::back.html.twig", "GSTImmobilierBundle:Admin:list.html.twig", 1);
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
        $__internal_f3dc4bd31e7521c651ac1c7624fed71437b65dcda80adb72767a17f6cb1bca22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3dc4bd31e7521c651ac1c7624fed71437b65dcda80adb72767a17f6cb1bca22->enter($__internal_f3dc4bd31e7521c651ac1c7624fed71437b65dcda80adb72767a17f6cb1bca22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Admin:list.html.twig"));

        $__internal_9bc796368f2d51c605fe2e95e005d0cbf4243e1b9b5cb242e7cb054a237ad59c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc796368f2d51c605fe2e95e005d0cbf4243e1b9b5cb242e7cb054a237ad59c->enter($__internal_9bc796368f2d51c605fe2e95e005d0cbf4243e1b9b5cb242e7cb054a237ad59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Admin:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3dc4bd31e7521c651ac1c7624fed71437b65dcda80adb72767a17f6cb1bca22->leave($__internal_f3dc4bd31e7521c651ac1c7624fed71437b65dcda80adb72767a17f6cb1bca22_prof);

        
        $__internal_9bc796368f2d51c605fe2e95e005d0cbf4243e1b9b5cb242e7cb054a237ad59c->leave($__internal_9bc796368f2d51c605fe2e95e005d0cbf4243e1b9b5cb242e7cb054a237ad59c_prof);

    }

    // line 2
    public function block_recharge($context, array $blocks = array())
    {
        $__internal_ce1c2a774e16c7769f2fe205d028db90f98f35e2ade951f5809e406c92a23609 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce1c2a774e16c7769f2fe205d028db90f98f35e2ade951f5809e406c92a23609->enter($__internal_ce1c2a774e16c7769f2fe205d028db90f98f35e2ade951f5809e406c92a23609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recharge"));

        $__internal_6a277fea63a8c3e266ebb083bf5926f2acde65ef400ea7cd4103a05039e174b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a277fea63a8c3e266ebb083bf5926f2acde65ef400ea7cd4103a05039e174b3->enter($__internal_6a277fea63a8c3e266ebb083bf5926f2acde65ef400ea7cd4103a05039e174b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recharge"));

        // line 3
        echo "<div class=\"container\" id=\"container\"style=\"margin-top:50px;\">
      
<table class=\"table\" id=\"myTable\" >
  <thead>
    <tr>
      <th>Id_Bien</th>
      <th>Nom_Bien</th>
      <th>Description</th>
      <th>Prix_Location</th>
        <th>Type_Bien</th>
          <th>Localite</th>
      <th>Image</th>
    </tr>
  </thead>";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new Twig_Error_Runtime('Variable "biens" does not exist.', 16, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 17
            echo "<tr>
<td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "id", array()), "html", null, true);
            echo "</td>
<td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "nombien", array()), "html", null, true);
            echo "</td>
<td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "description", array()), "html", null, true);
            echo "</td>
<td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "prix_loc", array()), "html", null, true);
            echo "</td>
<td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "typebien", array()), "libelletype", array()), "html", null, true);
            echo "</td>
<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "localite", array()), "libelleloca", array()), "html", null, true);
            echo "</td>
 <td><img class=\"card-img-top\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" alt=\"Card image cap\" style=\"width:100px;\"></td>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</tr>
</table>

";
        // line 29
        $this->displayBlock('head', $context, $blocks);
        // line 36
        echo "






";
        // line 43
        $this->displayBlock('javascript', $context, $blocks);
        // line 49
        echo "
 
";
        
        $__internal_6a277fea63a8c3e266ebb083bf5926f2acde65ef400ea7cd4103a05039e174b3->leave($__internal_6a277fea63a8c3e266ebb083bf5926f2acde65ef400ea7cd4103a05039e174b3_prof);

        
        $__internal_ce1c2a774e16c7769f2fe205d028db90f98f35e2ade951f5809e406c92a23609->leave($__internal_ce1c2a774e16c7769f2fe205d028db90f98f35e2ade951f5809e406c92a23609_prof);

    }

    // line 29
    public function block_head($context, array $blocks = array())
    {
        $__internal_6b1734c366219a3dba083db896518c79e28a74b279fd44cd8d3a07daae2928bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b1734c366219a3dba083db896518c79e28a74b279fd44cd8d3a07daae2928bc->enter($__internal_6b1734c366219a3dba083db896518c79e28a74b279fd44cd8d3a07daae2928bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_96700239b81d34fb47936799b79781bfecb4aa2102b4b0cdb764231f06dfe669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96700239b81d34fb47936799b79781bfecb4aa2102b4b0cdb764231f06dfe669->enter($__internal_96700239b81d34fb47936799b79781bfecb4aa2102b4b0cdb764231f06dfe669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "
";
        
        $__internal_96700239b81d34fb47936799b79781bfecb4aa2102b4b0cdb764231f06dfe669->leave($__internal_96700239b81d34fb47936799b79781bfecb4aa2102b4b0cdb764231f06dfe669_prof);

        
        $__internal_6b1734c366219a3dba083db896518c79e28a74b279fd44cd8d3a07daae2928bc->leave($__internal_6b1734c366219a3dba083db896518c79e28a74b279fd44cd8d3a07daae2928bc_prof);

    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e7803f6fc8af44f075f67bc95b9b980abe5ab445eb6013060e8c26eb61b00cbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7803f6fc8af44f075f67bc95b9b980abe5ab445eb6013060e8c26eb61b00cbf->enter($__internal_e7803f6fc8af44f075f67bc95b9b980abe5ab445eb6013060e8c26eb61b00cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e1c3352ea9ad61e8a56b2ecb810eb22bdf3522450cfcf72ab308f80f07faba78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c3352ea9ad61e8a56b2ecb810eb22bdf3522450cfcf72ab308f80f07faba78->enter($__internal_e1c3352ea9ad61e8a56b2ecb810eb22bdf3522450cfcf72ab308f80f07faba78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 31
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datatables.css"), "html", null, true);
        echo "\">

";
        
        $__internal_e1c3352ea9ad61e8a56b2ecb810eb22bdf3522450cfcf72ab308f80f07faba78->leave($__internal_e1c3352ea9ad61e8a56b2ecb810eb22bdf3522450cfcf72ab308f80f07faba78_prof);

        
        $__internal_e7803f6fc8af44f075f67bc95b9b980abe5ab445eb6013060e8c26eb61b00cbf->leave($__internal_e7803f6fc8af44f075f67bc95b9b980abe5ab445eb6013060e8c26eb61b00cbf_prof);

    }

    // line 43
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_2bb3b46b19dd12b5d5e278c9f1eeee7222f89c81b7648ac454262e5cc3e0afd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bb3b46b19dd12b5d5e278c9f1eeee7222f89c81b7648ac454262e5cc3e0afd9->enter($__internal_2bb3b46b19dd12b5d5e278c9f1eeee7222f89c81b7648ac454262e5cc3e0afd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_a3bbd7ec820fb374e460cf02af627c11e142149d16e60260d6f061090cb72ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3bbd7ec820fb374e460cf02af627c11e142149d16e60260d6f061090cb72ff5->enter($__internal_a3bbd7ec820fb374e460cf02af627c11e142149d16e60260d6f061090cb72ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 44
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/liste.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_a3bbd7ec820fb374e460cf02af627c11e142149d16e60260d6f061090cb72ff5->leave($__internal_a3bbd7ec820fb374e460cf02af627c11e142149d16e60260d6f061090cb72ff5_prof);

        
        $__internal_2bb3b46b19dd12b5d5e278c9f1eeee7222f89c81b7648ac454262e5cc3e0afd9->leave($__internal_2bb3b46b19dd12b5d5e278c9f1eeee7222f89c81b7648ac454262e5cc3e0afd9_prof);

    }

    public function getTemplateName()
    {
        return "GSTImmobilierBundle:Admin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 47,  200 => 46,  196 => 45,  191 => 44,  182 => 43,  168 => 31,  159 => 30,  148 => 34,  146 => 30,  137 => 29,  125 => 49,  123 => 43,  114 => 36,  112 => 29,  107 => 26,  98 => 24,  94 => 23,  90 => 22,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  71 => 17,  67 => 16,  52 => 3,  43 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::back.html.twig\" %}
{% block recharge %}
<div class=\"container\" id=\"container\"style=\"margin-top:50px;\">
      
<table class=\"table\" id=\"myTable\" >
  <thead>
    <tr>
      <th>Id_Bien</th>
      <th>Nom_Bien</th>
      <th>Description</th>
      <th>Prix_Location</th>
        <th>Type_Bien</th>
          <th>Localite</th>
      <th>Image</th>
    </tr>
  </thead>{%for bien in biens %}
<tr>
<td>{{bien.id}}</td>
<td>{{bien.nombien}}</td>
<td>{{bien.description}}</td>
<td>{{bien.prix_loc}}</td>
<td>{{bien.typebien.libelletype}}</td>
<td>{{bien.localite.libelleloca}}</td>
 <td><img class=\"card-img-top\" src=\"{{ asset('image/')}}{{ bien.images[0].image }}\" alt=\"Card image cap\" style=\"width:100px;\"></td>
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


", "GSTImmobilierBundle:Admin:list.html.twig", "/var/www/html/Agence_immobilier/Immobilier/src/GST/ImmobilierBundle/Resources/views/Admin/list.html.twig");
    }
}
