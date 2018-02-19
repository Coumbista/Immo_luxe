<?php

/* GSTImmobilierBundle:Front:search_bien.html.twig */
class __TwigTemplate_d65e0d31f85749050cd9809bf45848e905a1b55b3d6fc988e5c5e0fdcaa91b29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GSTImmobilierBundle:Front:search_bien.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9af8b4efdeb46ef99b95f8b76d93d24e25abbf510a255286df2f1f829fe3779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9af8b4efdeb46ef99b95f8b76d93d24e25abbf510a255286df2f1f829fe3779->enter($__internal_d9af8b4efdeb46ef99b95f8b76d93d24e25abbf510a255286df2f1f829fe3779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Front:search_bien.html.twig"));

        $__internal_5c6002ec9924202f61b80053210ad8631a3bc973ca2ca6b2a67c42183604708e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c6002ec9924202f61b80053210ad8631a3bc973ca2ca6b2a67c42183604708e->enter($__internal_5c6002ec9924202f61b80053210ad8631a3bc973ca2ca6b2a67c42183604708e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Front:search_bien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9af8b4efdeb46ef99b95f8b76d93d24e25abbf510a255286df2f1f829fe3779->leave($__internal_d9af8b4efdeb46ef99b95f8b76d93d24e25abbf510a255286df2f1f829fe3779_prof);

        
        $__internal_5c6002ec9924202f61b80053210ad8631a3bc973ca2ca6b2a67c42183604708e->leave($__internal_5c6002ec9924202f61b80053210ad8631a3bc973ca2ca6b2a67c42183604708e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_391a8907618c3394d6c47ba841cd18eaf9038cf0cb69ce87003dd532c8d5f628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_391a8907618c3394d6c47ba841cd18eaf9038cf0cb69ce87003dd532c8d5f628->enter($__internal_391a8907618c3394d6c47ba841cd18eaf9038cf0cb69ce87003dd532c8d5f628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_11818cbf2394f4382a4fd67a7d210b901975b6d2063d6f3ea7d7ffd21553f458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11818cbf2394f4382a4fd67a7d210b901975b6d2063d6f3ea7d7ffd21553f458->enter($__internal_11818cbf2394f4382a4fd67a7d210b901975b6d2063d6f3ea7d7ffd21553f458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GSTImmobilierBundle:Front:searchBien";
        
        $__internal_11818cbf2394f4382a4fd67a7d210b901975b6d2063d6f3ea7d7ffd21553f458->leave($__internal_11818cbf2394f4382a4fd67a7d210b901975b6d2063d6f3ea7d7ffd21553f458_prof);

        
        $__internal_391a8907618c3394d6c47ba841cd18eaf9038cf0cb69ce87003dd532c8d5f628->leave($__internal_391a8907618c3394d6c47ba841cd18eaf9038cf0cb69ce87003dd532c8d5f628_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d07cbd9b8c4d9e19e1a5a0d3cea883223e2b40a94829ca648e1b740dfa448551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d07cbd9b8c4d9e19e1a5a0d3cea883223e2b40a94829ca648e1b740dfa448551->enter($__internal_d07cbd9b8c4d9e19e1a5a0d3cea883223e2b40a94829ca648e1b740dfa448551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_88bf8baf49bdc17742a622ebc939e58c9d9695e69336a0c066166926053979c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88bf8baf49bdc17742a622ebc939e58c9d9695e69336a0c066166926053979c3->enter($__internal_88bf8baf49bdc17742a622ebc939e58c9d9695e69336a0c066166926053979c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<table class=\"table \">
<thead class=\"thead-inverse\">
<tr >
<th scope=\"row\">id</th>
<th>login</th>
<th>nomcomplet</th>
<th>datenais</th>
<th>Edition</th>
<th>Suppression</th>
<th>Etat</th>
</tr>
</thead>
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 20
            echo "<tr>
<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nombien", array()), "html", null, true);
            echo "</td>
<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "etat", array()), "html", null, true);
            echo "</td>
<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "description", array()), "html", null, true);
            echo "</td>
<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prix_loc", array()), "html", null, true);
            echo "</td>
<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "localite", array()), "html", null, true);
            echo "</td>
<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "typebien", array()), "html", null, true);
            echo "</td>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</tr>
</table>
";
        
        $__internal_88bf8baf49bdc17742a622ebc939e58c9d9695e69336a0c066166926053979c3->leave($__internal_88bf8baf49bdc17742a622ebc939e58c9d9695e69336a0c066166926053979c3_prof);

        
        $__internal_d07cbd9b8c4d9e19e1a5a0d3cea883223e2b40a94829ca648e1b740dfa448551->leave($__internal_d07cbd9b8c4d9e19e1a5a0d3cea883223e2b40a94829ca648e1b740dfa448551_prof);

    }

    public function getTemplateName()
    {
        return "GSTImmobilierBundle:Front:search_bien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 28,  110 => 26,  106 => 25,  102 => 24,  98 => 23,  94 => 22,  90 => 21,  87 => 20,  83 => 19,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}GSTImmobilierBundle:Front:searchBien{% endblock %}

{% block body %}

<table class=\"table \">
<thead class=\"thead-inverse\">
<tr >
<th scope=\"row\">id</th>
<th>login</th>
<th>nomcomplet</th>
<th>datenais</th>
<th>Edition</th>
<th>Suppression</th>
<th>Etat</th>
</tr>
</thead>
{%for bien in biens%}
<tr>
<td>{{bien.nombien}}</td>
<td>{{bien.etat}}</td>
<td>{{bien.description}}</td>
<td>{{bien.prix_loc}}</td>
<td>{{bien.localite}}</td>
<td>{{bien.typebien}}</td>
{% endfor %}
</tr>
</table>
{% endblock %}

", "GSTImmobilierBundle:Front:search_bien.html.twig", "/var/www/html/Agence_immobilier/Immobilier/src/GST/ImmobilierBundle/Resources/views/Front/search_bien.html.twig");
    }
}
