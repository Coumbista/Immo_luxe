<?php

/* @EasyAdmin/default/includes/_select2_widget.html.twig */
class __TwigTemplate_694abe9c20a963a3fe091a4f34464c265314979e95ebc32c31cf58c8a8d458a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2a0d30507a98489caa8cb120e6d5ebde6bc921d257d973caa587cf65062ecb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2a0d30507a98489caa8cb120e6d5ebde6bc921d257d973caa587cf65062ecb8->enter($__internal_f2a0d30507a98489caa8cb120e6d5ebde6bc921d257d973caa587cf65062ecb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/includes/_select2_widget.html.twig"));

        $__internal_13550794bb8a290618dce9aae44b38210406c1f63b2e4a293190ae0a7a931502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13550794bb8a290618dce9aae44b38210406c1f63b2e4a293190ae0a7a931502->enter($__internal_13550794bb8a290618dce9aae44b38210406c1f63b2e4a293190ae0a7a931502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/includes/_select2_widget.html.twig"));

        // line 1
        $context["_select2_locales"] = array(0 => "ar", 1 => "az", 2 => "bg", 3 => "ca", 4 => "cs", 5 => "da", 6 => "de", 7 => "el", 8 => "en", 9 => "es", 10 => "et", 11 => "eu", 12 => "fa", 13 => "fi", 14 => "fr", 15 => "gl", 16 => "he", 17 => "hi", 18 => "hr", 19 => "hu", 20 => "id", 21 => "is", 22 => "it", 23 => "ja", 24 => "km", 25 => "ko", 26 => "lt", 27 => "lv", 28 => "mk", 29 => "ms", 30 => "nb", 31 => "nl", 32 => "pl", 33 => "pt-BR", 34 => "pt", 35 => "ro", 36 => "ru", 37 => "sk", 38 => "sr-Cyrl", 39 => "sr", 40 => "sv", 41 => "th", 42 => "tr", 43 => "uk", 44 => "vi", 45 => "zh-CN", 46 => "zh-TW");
        // line 2
        $context["_app_language"] = twig_first($this->env, twig_split_filter($this->env, twig_first($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->getSourceContext()); })()), "request", array()), "locale", array()), "-")), "_"));
        // line 3
        $context["_select2_locale"] = ((twig_in_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "request", array()), "locale", array()), (isset($context["_select2_locales"]) || array_key_exists("_select2_locales", $context) ? $context["_select2_locales"] : (function () { throw new Twig_Error_Runtime('Variable "_select2_locales" does not exist.', 3, $this->getSourceContext()); })()))) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 4
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->getSourceContext()); })()), "request", array()), "locale", array())) : (((twig_in_filter(        // line 5
(isset($context["_app_language"]) || array_key_exists("_app_language", $context) ? $context["_app_language"] : (function () { throw new Twig_Error_Runtime('Variable "_app_language" does not exist.', 5, $this->getSourceContext()); })()), (isset($context["_select2_locales"]) || array_key_exists("_select2_locales", $context) ? $context["_select2_locales"] : (function () { throw new Twig_Error_Runtime('Variable "_select2_locales" does not exist.', 5, $this->getSourceContext()); })()))) ? ((isset($context["_app_language"]) || array_key_exists("_app_language", $context) ? $context["_app_language"] : (function () { throw new Twig_Error_Runtime('Variable "_app_language" does not exist.', 5, $this->getSourceContext()); })())) : ("en"))));
        // line 7
        echo "
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/easyadmin/javascript/select2/i18n/" . (isset($context["_select2_locale"]) || array_key_exists("_select2_locale", $context) ? $context["_select2_locale"] : (function () { throw new Twig_Error_Runtime('Variable "_select2_locale" does not exist.', 8, $this->getSourceContext()); })())) . ".js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
\$(function() {
    // Select2 widget is only enabled for the <select> elements which
    // explicitly ask for it
    \$('#main').find('form select[data-widget=\"select2\"]').select2({
        theme: 'bootstrap',
        language: '";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["_select2_locale"]) || array_key_exists("_select2_locale", $context) ? $context["_select2_locale"] : (function () { throw new Twig_Error_Runtime('Variable "_select2_locale" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
        echo "'
    });
});
</script>
";
        
        $__internal_f2a0d30507a98489caa8cb120e6d5ebde6bc921d257d973caa587cf65062ecb8->leave($__internal_f2a0d30507a98489caa8cb120e6d5ebde6bc921d257d973caa587cf65062ecb8_prof);

        
        $__internal_13550794bb8a290618dce9aae44b38210406c1f63b2e4a293190ae0a7a931502->leave($__internal_13550794bb8a290618dce9aae44b38210406c1f63b2e4a293190ae0a7a931502_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/includes/_select2_widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,  36 => 8,  33 => 7,  31 => 5,  30 => 4,  29 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _select2_locales = ['ar', 'az', 'bg', 'ca', 'cs', 'da', 'de', 'el', 'en', 'es', 'et', 'eu', 'fa', 'fi', 'fr', 'gl', 'he', 'hi', 'hr', 'hu', 'id', 'is', 'it', 'ja', 'km', 'ko', 'lt', 'lv', 'mk', 'ms', 'nb', 'nl', 'pl', 'pt-BR', 'pt', 'ro', 'ru', 'sk', 'sr-Cyrl', 'sr', 'sv', 'th', 'tr', 'uk', 'vi', 'zh-CN', 'zh-TW'] %}
{% set _app_language = app.request.locale|split('-')|first|split('_')|first %}
{% set _select2_locale = app.request.locale in _select2_locales
    ? app.request.locale
    : _app_language in _select2_locales ? _app_language : 'en'
%}

<script src=\"{{ asset('bundles/easyadmin/javascript/select2/i18n/' ~ _select2_locale ~ '.js') }}\"></script>
<script type=\"text/javascript\">
\$(function() {
    // Select2 widget is only enabled for the <select> elements which
    // explicitly ask for it
    \$('#main').find('form select[data-widget=\"select2\"]').select2({
        theme: 'bootstrap',
        language: '{{ _select2_locale }}'
    });
});
</script>
", "@EasyAdmin/default/includes/_select2_widget.html.twig", "/var/www/html/Agence_immobilier/Immobilier/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/includes/_select2_widget.html.twig");
    }
}
