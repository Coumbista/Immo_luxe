<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_4bbb3ed2b5cdf55cac4d5f4e3ede68d87338303fa9402d169289fbf7b75221bf extends Twig_Template
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
        $__internal_1a79f6079afba0f6797636460075ddc62032ae990cec206583fddd28392ffc12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a79f6079afba0f6797636460075ddc62032ae990cec206583fddd28392ffc12->enter($__internal_1a79f6079afba0f6797636460075ddc62032ae990cec206583fddd28392ffc12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b8c7f4954519eb0c000cb2bdb8985d8ef359131a198d13ebe75d7a8b548650fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c7f4954519eb0c000cb2bdb8985d8ef359131a198d13ebe75d7a8b548650fb->enter($__internal_b8c7f4954519eb0c000cb2bdb8985d8ef359131a198d13ebe75d7a8b548650fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_1a79f6079afba0f6797636460075ddc62032ae990cec206583fddd28392ffc12->leave($__internal_1a79f6079afba0f6797636460075ddc62032ae990cec206583fddd28392ffc12_prof);

        
        $__internal_b8c7f4954519eb0c000cb2bdb8985d8ef359131a198d13ebe75d7a8b548650fb->leave($__internal_b8c7f4954519eb0c000cb2bdb8985d8ef359131a198d13ebe75d7a8b548650fb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6122a7474b7933f731c5ba1d783dc3f1021ce05f702d6de302960b272672e4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6122a7474b7933f731c5ba1d783dc3f1021ce05f702d6de302960b272672e4f->enter($__internal_b6122a7474b7933f731c5ba1d783dc3f1021ce05f702d6de302960b272672e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_82095595d5e87bb847639cff4909923c160e46fef5b10e4c313aae8107554042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82095595d5e87bb847639cff4909923c160e46fef5b10e4c313aae8107554042->enter($__internal_82095595d5e87bb847639cff4909923c160e46fef5b10e4c313aae8107554042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_82095595d5e87bb847639cff4909923c160e46fef5b10e4c313aae8107554042->leave($__internal_82095595d5e87bb847639cff4909923c160e46fef5b10e4c313aae8107554042_prof);

        
        $__internal_b6122a7474b7933f731c5ba1d783dc3f1021ce05f702d6de302960b272672e4f->leave($__internal_b6122a7474b7933f731c5ba1d783dc3f1021ce05f702d6de302960b272672e4f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_c04936827d056f53dd254a1bbf635b3659441bf1cfa3b68653c844d307da06b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c04936827d056f53dd254a1bbf635b3659441bf1cfa3b68653c844d307da06b9->enter($__internal_c04936827d056f53dd254a1bbf635b3659441bf1cfa3b68653c844d307da06b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_77b29214084c6be2b5bd050d8f36d60b7aa3a48617619ea26e66842c9149d29c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77b29214084c6be2b5bd050d8f36d60b7aa3a48617619ea26e66842c9149d29c->enter($__internal_77b29214084c6be2b5bd050d8f36d60b7aa3a48617619ea26e66842c9149d29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_77b29214084c6be2b5bd050d8f36d60b7aa3a48617619ea26e66842c9149d29c->leave($__internal_77b29214084c6be2b5bd050d8f36d60b7aa3a48617619ea26e66842c9149d29c_prof);

        
        $__internal_c04936827d056f53dd254a1bbf635b3659441bf1cfa3b68653c844d307da06b9->leave($__internal_c04936827d056f53dd254a1bbf635b3659441bf1cfa3b68653c844d307da06b9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1d08a6ca4aa5144ef0cdeb99eb70e65a675488501909cd068d0cbbc2e1ca8d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1d08a6ca4aa5144ef0cdeb99eb70e65a675488501909cd068d0cbbc2e1ca8d4->enter($__internal_b1d08a6ca4aa5144ef0cdeb99eb70e65a675488501909cd068d0cbbc2e1ca8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_deebd136f41a8e041d22210dcf308995a18074f2d56788a4ed832591bb58ef0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deebd136f41a8e041d22210dcf308995a18074f2d56788a4ed832591bb58ef0a->enter($__internal_deebd136f41a8e041d22210dcf308995a18074f2d56788a4ed832591bb58ef0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_deebd136f41a8e041d22210dcf308995a18074f2d56788a4ed832591bb58ef0a->leave($__internal_deebd136f41a8e041d22210dcf308995a18074f2d56788a4ed832591bb58ef0a_prof);

        
        $__internal_b1d08a6ca4aa5144ef0cdeb99eb70e65a675488501909cd068d0cbbc2e1ca8d4->leave($__internal_b1d08a6ca4aa5144ef0cdeb99eb70e65a675488501909cd068d0cbbc2e1ca8d4_prof);

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
