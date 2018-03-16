<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_fd9070260e2a84d90c2ee147caf9fbc997b9a68497f757362148bc58a3b94ac5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c35674cf8d79fed0e5c892e99c180bc8bc0c7cbf10822c71453c1c666494f258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c35674cf8d79fed0e5c892e99c180bc8bc0c7cbf10822c71453c1c666494f258->enter($__internal_c35674cf8d79fed0e5c892e99c180bc8bc0c7cbf10822c71453c1c666494f258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_0dcebbea65b2765dc50b207e95f26959738fb39a19b869f9980c8552f9c003c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dcebbea65b2765dc50b207e95f26959738fb39a19b869f9980c8552f9c003c4->enter($__internal_0dcebbea65b2765dc50b207e95f26959738fb39a19b869f9980c8552f9c003c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
";
        // line 3
        echo "            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 4
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->getSourceContext()); })()), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 5
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 9
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 11
        echo "        </div>

        ";
        // line 13
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "request", array()), "hasPreviousSession", array())) {
            // line 14
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 15
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 16
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 17
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        ";
        }
        // line 22
        echo "
        <div>
            ";
        // line 24
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 26
        echo "        </div>

    </body>
</html>
";
        
        $__internal_c35674cf8d79fed0e5c892e99c180bc8bc0c7cbf10822c71453c1c666494f258->leave($__internal_c35674cf8d79fed0e5c892e99c180bc8bc0c7cbf10822c71453c1c666494f258_prof);

        
        $__internal_0dcebbea65b2765dc50b207e95f26959738fb39a19b869f9980c8552f9c003c4->leave($__internal_0dcebbea65b2765dc50b207e95f26959738fb39a19b869f9980c8552f9c003c4_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_978925c37adadff75cdfaa09d19f922a0514582fda1b91bae6e43eb1d5a1e40c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_978925c37adadff75cdfaa09d19f922a0514582fda1b91bae6e43eb1d5a1e40c->enter($__internal_978925c37adadff75cdfaa09d19f922a0514582fda1b91bae6e43eb1d5a1e40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9c849177cd4c4febeaf1aaa965743b380bd26528fd7350898a97f19e0ed61f20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c849177cd4c4febeaf1aaa965743b380bd26528fd7350898a97f19e0ed61f20->enter($__internal_9c849177cd4c4febeaf1aaa965743b380bd26528fd7350898a97f19e0ed61f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "            ";
        
        $__internal_9c849177cd4c4febeaf1aaa965743b380bd26528fd7350898a97f19e0ed61f20->leave($__internal_9c849177cd4c4febeaf1aaa965743b380bd26528fd7350898a97f19e0ed61f20_prof);

        
        $__internal_978925c37adadff75cdfaa09d19f922a0514582fda1b91bae6e43eb1d5a1e40c->leave($__internal_978925c37adadff75cdfaa09d19f922a0514582fda1b91bae6e43eb1d5a1e40c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 25,  114 => 24,  100 => 26,  98 => 24,  94 => 22,  91 => 21,  85 => 20,  76 => 17,  71 => 16,  66 => 15,  61 => 14,  59 => 13,  55 => 11,  47 => 9,  41 => 6,  37 => 5,  32 => 4,  29 => 3,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
{#  #}
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>

    </body>
</html>
", "@FOSUser/layout.html.twig", "/var/www/html/Agence_immobilier/Immobilier/vendor/friendsofsymfony/user-bundle/Resources/views/layout.html.twig");
    }
}
