<?php

/* @EasyAdmin/default/new.html.twig */
class __TwigTemplate_251eb9942daae515c8375f799a93dcd3c7b9e5658ab6e0831669cdaa9960fbea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 7, $this->getSourceContext()); })()), "templates", array()), "layout", array()), "@EasyAdmin/default/new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa1f6f877f1852d90de9eb11c1dabd00cdc4aaccb9ef2810234ad426f6a59538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1f6f877f1852d90de9eb11c1dabd00cdc4aaccb9ef2810234ad426f6a59538->enter($__internal_fa1f6f877f1852d90de9eb11c1dabd00cdc4aaccb9ef2810234ad426f6a59538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        $__internal_3e84354aab2c61b348f81016acc17db0d9126f016ec8a0ffe26855ddc2c1ca15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e84354aab2c61b348f81016acc17db0d9126f016ec8a0ffe26855ddc2c1ca15->enter($__internal_3e84354aab2c61b348f81016acc17db0d9126f016ec8a0ffe26855ddc2c1ca15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_acc44702407fadf544496ad44d1578fa69c0ef5eebbe8ae0b7fa4fd2c9fb51e5"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 4, $this->getSourceContext()); })()), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "name", array()), array(),         // line 4
(isset($context["__internal_acc44702407fadf544496ad44d1578fa69c0ef5eebbe8ae0b7fa4fd2c9fb51e5"]) || array_key_exists("__internal_acc44702407fadf544496ad44d1578fa69c0ef5eebbe8ae0b7fa4fd2c9fb51e5", $context) ? $context["__internal_acc44702407fadf544496ad44d1578fa69c0ef5eebbe8ae0b7fa4fd2c9fb51e5"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_acc44702407fadf544496ad44d1578fa69c0ef5eebbe8ae0b7fa4fd2c9fb51e5" does not exist.', 4, $this->getSourceContext()); })())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(),         // line 5
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "label", array()), array(),         // line 4
(isset($context["__internal_acc44702407fadf544496ad44d1578fa69c0ef5eebbe8ae0b7fa4fd2c9fb51e5"]) || array_key_exists("__internal_acc44702407fadf544496ad44d1578fa69c0ef5eebbe8ae0b7fa4fd2c9fb51e5", $context) ? $context["__internal_acc44702407fadf544496ad44d1578fa69c0ef5eebbe8ae0b7fa4fd2c9fb51e5"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_acc44702407fadf544496ad44d1578fa69c0ef5eebbe8ae0b7fa4fd2c9fb51e5" does not exist.', 4, $this->getSourceContext()); })())));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa1f6f877f1852d90de9eb11c1dabd00cdc4aaccb9ef2810234ad426f6a59538->leave($__internal_fa1f6f877f1852d90de9eb11c1dabd00cdc4aaccb9ef2810234ad426f6a59538_prof);

        
        $__internal_3e84354aab2c61b348f81016acc17db0d9126f016ec8a0ffe26855ddc2c1ca15->leave($__internal_3e84354aab2c61b348f81016acc17db0d9126f016ec8a0ffe26855ddc2c1ca15_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_4394fb3411642fcf9a67bb92980a2c7295155f274f3b90ed8aae11c31f0461e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4394fb3411642fcf9a67bb92980a2c7295155f274f3b90ed8aae11c31f0461e3->enter($__internal_4394fb3411642fcf9a67bb92980a2c7295155f274f3b90ed8aae11c31f0461e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_4cf3514f2e3c405e912843fa43c62d15ac558116e7e1ef0109ace2a6d815e341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf3514f2e3c405e912843fa43c62d15ac558116e7e1ef0109ace2a6d815e341->enter($__internal_4cf3514f2e3c405e912843fa43c62d15ac558116e7e1ef0109ace2a6d815e341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 9, $this->getSourceContext()); })()), "name", array())), "html", null, true);
        
        $__internal_4cf3514f2e3c405e912843fa43c62d15ac558116e7e1ef0109ace2a6d815e341->leave($__internal_4cf3514f2e3c405e912843fa43c62d15ac558116e7e1ef0109ace2a6d815e341_prof);

        
        $__internal_4394fb3411642fcf9a67bb92980a2c7295155f274f3b90ed8aae11c31f0461e3->leave($__internal_4394fb3411642fcf9a67bb92980a2c7295155f274f3b90ed8aae11c31f0461e3_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_9d236b777011545b5bcf5f99c947b4cd401ae926e9c1eec69ce5931194c5d40c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d236b777011545b5bcf5f99c947b4cd401ae926e9c1eec69ce5931194c5d40c->enter($__internal_9d236b777011545b5bcf5f99c947b4cd401ae926e9c1eec69ce5931194c5d40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_71f1b6f120f14af29e9f322d32012c69fed6bb16e3c2993ab9e24c71c3df77de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f1b6f120f14af29e9f322d32012c69fed6bb16e3c2993ab9e24c71c3df77de->enter($__internal_71f1b6f120f14af29e9f322d32012c69fed6bb16e3c2993ab9e24c71c3df77de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 10, $this->getSourceContext()); })()), "name", array()))), "html", null, true);
        
        $__internal_71f1b6f120f14af29e9f322d32012c69fed6bb16e3c2993ab9e24c71c3df77de->leave($__internal_71f1b6f120f14af29e9f322d32012c69fed6bb16e3c2993ab9e24c71c3df77de_prof);

        
        $__internal_9d236b777011545b5bcf5f99c947b4cd401ae926e9c1eec69ce5931194c5d40c->leave($__internal_9d236b777011545b5bcf5f99c947b4cd401ae926e9c1eec69ce5931194c5d40c_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_4f8f12034e1173851166449c406a60340de7be7f37c10ab678923ab07fbc86ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f8f12034e1173851166449c406a60340de7be7f37c10ab678923ab07fbc86ff->enter($__internal_4f8f12034e1173851166449c406a60340de7be7f37c10ab678923ab07fbc86ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_e28aff086f797fff5e7d21d7b33379a6f880ae414aa51d91bd81fdc506d8d888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e28aff086f797fff5e7d21d7b33379a6f880ae414aa51d91bd81fdc506d8d888->enter($__internal_e28aff086f797fff5e7d21d7b33379a6f880ae414aa51d91bd81fdc506d8d888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 14, $this->getSourceContext()); })()), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 15, $this->getSourceContext()); })()), "new", array()), "title", array()), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 15, $this->getSourceContext()); })()),         // line 4
(isset($context["__internal_acc44702407fadf544496ad44d1578fa69c0ef5eebbe8ae0b7fa4fd2c9fb51e5"]) || array_key_exists("__internal_acc44702407fadf544496ad44d1578fa69c0ef5eebbe8ae0b7fa4fd2c9fb51e5", $context) ? $context["__internal_acc44702407fadf544496ad44d1578fa69c0ef5eebbe8ae0b7fa4fd2c9fb51e5"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_acc44702407fadf544496ad44d1578fa69c0ef5eebbe8ae0b7fa4fd2c9fb51e5" does not exist.', 4, $this->getSourceContext()); })()))) : (        // line 15
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new Twig_Error_Runtime('Variable "_default_title" does not exist.', 15, $this->getSourceContext()); })()))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e28aff086f797fff5e7d21d7b33379a6f880ae414aa51d91bd81fdc506d8d888->leave($__internal_e28aff086f797fff5e7d21d7b33379a6f880ae414aa51d91bd81fdc506d8d888_prof);

        
        $__internal_4f8f12034e1173851166449c406a60340de7be7f37c10ab678923ab07fbc86ff->leave($__internal_4f8f12034e1173851166449c406a60340de7be7f37c10ab678923ab07fbc86ff_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_9e4e5175f526075f3979348561b778fb1ca3a841f29f06c3d612406d56949a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e4e5175f526075f3979348561b778fb1ca3a841f29f06c3d612406d56949a72->enter($__internal_9e4e5175f526075f3979348561b778fb1ca3a841f29f06c3d612406d56949a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_188d5b03839c73138d0e2084f3877dfee639f3f7b46970e97f288cd915efd9c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_188d5b03839c73138d0e2084f3877dfee639f3f7b46970e97f288cd915efd9c5->enter($__internal_188d5b03839c73138d0e2084f3877dfee639f3f7b46970e97f288cd915efd9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_188d5b03839c73138d0e2084f3877dfee639f3f7b46970e97f288cd915efd9c5->leave($__internal_188d5b03839c73138d0e2084f3877dfee639f3f7b46970e97f288cd915efd9c5_prof);

        
        $__internal_9e4e5175f526075f3979348561b778fb1ca3a841f29f06c3d612406d56949a72->leave($__internal_9e4e5175f526075f3979348561b778fb1ca3a841f29f06c3d612406d56949a72_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_31356a389e3a69539731a71212f878cef9be22e9c91776c0dd82eecc56647404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31356a389e3a69539731a71212f878cef9be22e9c91776c0dd82eecc56647404->enter($__internal_31356a389e3a69539731a71212f878cef9be22e9c91776c0dd82eecc56647404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_1a06e7087f46dfb4b67212293c1ea09c964e3c449e824f9abbe10ac611b71ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a06e7087f46dfb4b67212293c1ea09c964e3c449e824f9abbe10ac611b71ee9->enter($__internal_1a06e7087f46dfb4b67212293c1ea09c964e3c449e824f9abbe10ac611b71ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), 'form');
        echo "
    ";
        
        $__internal_1a06e7087f46dfb4b67212293c1ea09c964e3c449e824f9abbe10ac611b71ee9->leave($__internal_1a06e7087f46dfb4b67212293c1ea09c964e3c449e824f9abbe10ac611b71ee9_prof);

        
        $__internal_31356a389e3a69539731a71212f878cef9be22e9c91776c0dd82eecc56647404->leave($__internal_31356a389e3a69539731a71212f878cef9be22e9c91776c0dd82eecc56647404_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_49a3adca0ec373d6266886af949172a77dba4208380c02ae2052a5db8af205b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49a3adca0ec373d6266886af949172a77dba4208380c02ae2052a5db8af205b1->enter($__internal_49a3adca0ec373d6266886af949172a77dba4208380c02ae2052a5db8af205b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_71f33c20e5e9a66cdfb717b86b9938b709df36cd284dd458c7f320b358c3e33b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f33c20e5e9a66cdfb717b86b9938b709df36cd284dd458c7f320b358c3e33b->enter($__internal_71f33c20e5e9a66cdfb717b86b9938b709df36cd284dd458c7f320b358c3e33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 26
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    ";
        // line 36
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_71f33c20e5e9a66cdfb717b86b9938b709df36cd284dd458c7f320b358c3e33b->leave($__internal_71f33c20e5e9a66cdfb717b86b9938b709df36cd284dd458c7f320b358c3e33b_prof);

        
        $__internal_49a3adca0ec373d6266886af949172a77dba4208380c02ae2052a5db8af205b1->leave($__internal_49a3adca0ec373d6266886af949172a77dba4208380c02ae2052a5db8af205b1_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 36,  180 => 30,  172 => 26,  163 => 25,  150 => 21,  131 => 20,  122 => 19,  109 => 15,  108 => 4,  106 => 15,  103 => 14,  101 => 13,  92 => 12,  74 => 10,  56 => 9,  46 => 7,  44 => 4,  43 => 5,  42 => 4,  41 => 5,  39 => 4,  37 => 3,  35 => 1,  23 => 7,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-new-' ~ _entity_config.name %}
{% block body_class 'new new-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "@EasyAdmin/default/new.html.twig", "/var/www/html/Agence_immobilier/Immobilier/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/new.html.twig");
    }
}
