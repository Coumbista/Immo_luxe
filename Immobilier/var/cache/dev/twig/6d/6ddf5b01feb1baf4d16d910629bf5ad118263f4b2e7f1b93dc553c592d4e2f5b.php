<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_bab290edc11cca11df49ce0748e9d4e62bfe2f7dc5be42531a83c693fa1cbe11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07a18713e400559a2951a80a01c5e29201faa9f9c0f4c6959f51021b48d1f64d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07a18713e400559a2951a80a01c5e29201faa9f9c0f4c6959f51021b48d1f64d->enter($__internal_07a18713e400559a2951a80a01c5e29201faa9f9c0f4c6959f51021b48d1f64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_16575ff4b93f8ff5bdf00e8c4c57b8cfb34bbf3666953052a5649f992a66abea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16575ff4b93f8ff5bdf00e8c4c57b8cfb34bbf3666953052a5649f992a66abea->enter($__internal_16575ff4b93f8ff5bdf00e8c4c57b8cfb34bbf3666953052a5649f992a66abea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_07a18713e400559a2951a80a01c5e29201faa9f9c0f4c6959f51021b48d1f64d->leave($__internal_07a18713e400559a2951a80a01c5e29201faa9f9c0f4c6959f51021b48d1f64d_prof);

        
        $__internal_16575ff4b93f8ff5bdf00e8c4c57b8cfb34bbf3666953052a5649f992a66abea->leave($__internal_16575ff4b93f8ff5bdf00e8c4c57b8cfb34bbf3666953052a5649f992a66abea_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a5756e4d96843b28c53126fd4e10bef225dab3ddc4dc8da5b6897aa6d36867c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a5756e4d96843b28c53126fd4e10bef225dab3ddc4dc8da5b6897aa6d36867c->enter($__internal_9a5756e4d96843b28c53126fd4e10bef225dab3ddc4dc8da5b6897aa6d36867c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e3563f24463b005226cebc7058809e2ac081c267401c6b5f2c34ae5683fd502d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3563f24463b005226cebc7058809e2ac081c267401c6b5f2c34ae5683fd502d->enter($__internal_e3563f24463b005226cebc7058809e2ac081c267401c6b5f2c34ae5683fd502d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e3563f24463b005226cebc7058809e2ac081c267401c6b5f2c34ae5683fd502d->leave($__internal_e3563f24463b005226cebc7058809e2ac081c267401c6b5f2c34ae5683fd502d_prof);

        
        $__internal_9a5756e4d96843b28c53126fd4e10bef225dab3ddc4dc8da5b6897aa6d36867c->leave($__internal_9a5756e4d96843b28c53126fd4e10bef225dab3ddc4dc8da5b6897aa6d36867c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f16135944666543ab6248f5cae665d255e40c8cb40ebe7b6bd663be7f66def41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f16135944666543ab6248f5cae665d255e40c8cb40ebe7b6bd663be7f66def41->enter($__internal_f16135944666543ab6248f5cae665d255e40c8cb40ebe7b6bd663be7f66def41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b016e35f50884c8473cc4810366c6a470ab4f0083b293e126d723d7cd3a29fca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b016e35f50884c8473cc4810366c6a470ab4f0083b293e126d723d7cd3a29fca->enter($__internal_b016e35f50884c8473cc4810366c6a470ab4f0083b293e126d723d7cd3a29fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b016e35f50884c8473cc4810366c6a470ab4f0083b293e126d723d7cd3a29fca->leave($__internal_b016e35f50884c8473cc4810366c6a470ab4f0083b293e126d723d7cd3a29fca_prof);

        
        $__internal_f16135944666543ab6248f5cae665d255e40c8cb40ebe7b6bd663be7f66def41->leave($__internal_f16135944666543ab6248f5cae665d255e40c8cb40ebe7b6bd663be7f66def41_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_89e753d7bc16f62f0af21ef39c9930cbcf3115bd64ec2c707f4b36f9e821ccd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89e753d7bc16f62f0af21ef39c9930cbcf3115bd64ec2c707f4b36f9e821ccd3->enter($__internal_89e753d7bc16f62f0af21ef39c9930cbcf3115bd64ec2c707f4b36f9e821ccd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aad06ae6dcd25c82b28a8a8046ab49859be7cee64411c9ac5cefbd961c034139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aad06ae6dcd25c82b28a8a8046ab49859be7cee64411c9ac5cefbd961c034139->enter($__internal_aad06ae6dcd25c82b28a8a8046ab49859be7cee64411c9ac5cefbd961c034139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aad06ae6dcd25c82b28a8a8046ab49859be7cee64411c9ac5cefbd961c034139->leave($__internal_aad06ae6dcd25c82b28a8a8046ab49859be7cee64411c9ac5cefbd961c034139_prof);

        
        $__internal_89e753d7bc16f62f0af21ef39c9930cbcf3115bd64ec2c707f4b36f9e821ccd3->leave($__internal_89e753d7bc16f62f0af21ef39c9930cbcf3115bd64ec2c707f4b36f9e821ccd3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/Agence_immobilier/Immobilier/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
