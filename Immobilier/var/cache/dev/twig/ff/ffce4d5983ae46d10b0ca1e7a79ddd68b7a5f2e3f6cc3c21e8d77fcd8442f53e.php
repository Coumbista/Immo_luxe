<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_0af9641753660f82b3549a985e6ca3d2181adf27423d98bd2bf66118477685b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc2f668c2df4c4acaf3fc7684d29bb5f5f46b2fa83ae4336958f11412c011046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc2f668c2df4c4acaf3fc7684d29bb5f5f46b2fa83ae4336958f11412c011046->enter($__internal_fc2f668c2df4c4acaf3fc7684d29bb5f5f46b2fa83ae4336958f11412c011046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_085c0960c225db28d0dca7d1b5cffe18137fa8533922478bdf88c42bdad9686b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085c0960c225db28d0dca7d1b5cffe18137fa8533922478bdf88c42bdad9686b->enter($__internal_085c0960c225db28d0dca7d1b5cffe18137fa8533922478bdf88c42bdad9686b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc2f668c2df4c4acaf3fc7684d29bb5f5f46b2fa83ae4336958f11412c011046->leave($__internal_fc2f668c2df4c4acaf3fc7684d29bb5f5f46b2fa83ae4336958f11412c011046_prof);

        
        $__internal_085c0960c225db28d0dca7d1b5cffe18137fa8533922478bdf88c42bdad9686b->leave($__internal_085c0960c225db28d0dca7d1b5cffe18137fa8533922478bdf88c42bdad9686b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_798f2a7d7fa99161c028dfa800a35f781e07af80d487be336ba7f002653b8840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_798f2a7d7fa99161c028dfa800a35f781e07af80d487be336ba7f002653b8840->enter($__internal_798f2a7d7fa99161c028dfa800a35f781e07af80d487be336ba7f002653b8840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bb698323a4c0f202c759e24bb29be1b6598f9122274d967fecc3950440ecd029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb698323a4c0f202c759e24bb29be1b6598f9122274d967fecc3950440ecd029->enter($__internal_bb698323a4c0f202c759e24bb29be1b6598f9122274d967fecc3950440ecd029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_bb698323a4c0f202c759e24bb29be1b6598f9122274d967fecc3950440ecd029->leave($__internal_bb698323a4c0f202c759e24bb29be1b6598f9122274d967fecc3950440ecd029_prof);

        
        $__internal_798f2a7d7fa99161c028dfa800a35f781e07af80d487be336ba7f002653b8840->leave($__internal_798f2a7d7fa99161c028dfa800a35f781e07af80d487be336ba7f002653b8840_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/var/www/html/Agence_immobilier/Immobilier/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
