<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_2cac47c357a73f707fee989f756b070a60b49fa9ffe55108a2a16cba33839945 extends Twig_Template
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
        $__internal_9fe9451ec69d99f1e2d31a50766001b7f9b64fd5d1a52aa36c1c7dfb7661488d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fe9451ec69d99f1e2d31a50766001b7f9b64fd5d1a52aa36c1c7dfb7661488d->enter($__internal_9fe9451ec69d99f1e2d31a50766001b7f9b64fd5d1a52aa36c1c7dfb7661488d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_7b6b7a3e139f60841049147fa21967e9ab52e7fa336e996ee99019dc543b8027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b6b7a3e139f60841049147fa21967e9ab52e7fa336e996ee99019dc543b8027->enter($__internal_7b6b7a3e139f60841049147fa21967e9ab52e7fa336e996ee99019dc543b8027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

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
        
        $__internal_9fe9451ec69d99f1e2d31a50766001b7f9b64fd5d1a52aa36c1c7dfb7661488d->leave($__internal_9fe9451ec69d99f1e2d31a50766001b7f9b64fd5d1a52aa36c1c7dfb7661488d_prof);

        
        $__internal_7b6b7a3e139f60841049147fa21967e9ab52e7fa336e996ee99019dc543b8027->leave($__internal_7b6b7a3e139f60841049147fa21967e9ab52e7fa336e996ee99019dc543b8027_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_864ec91805a8bf6ae357b9eba70e573ce0b2212070bebe0647d7adb323eebdc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_864ec91805a8bf6ae357b9eba70e573ce0b2212070bebe0647d7adb323eebdc7->enter($__internal_864ec91805a8bf6ae357b9eba70e573ce0b2212070bebe0647d7adb323eebdc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ea87a06546c86b9efc34a775a8ea477c627105169d0a58df591e1625365c10d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea87a06546c86b9efc34a775a8ea477c627105169d0a58df591e1625365c10d7->enter($__internal_ea87a06546c86b9efc34a775a8ea477c627105169d0a58df591e1625365c10d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "            ";
        
        $__internal_ea87a06546c86b9efc34a775a8ea477c627105169d0a58df591e1625365c10d7->leave($__internal_ea87a06546c86b9efc34a775a8ea477c627105169d0a58df591e1625365c10d7_prof);

        
        $__internal_864ec91805a8bf6ae357b9eba70e573ce0b2212070bebe0647d7adb323eebdc7->leave($__internal_864ec91805a8bf6ae357b9eba70e573ce0b2212070bebe0647d7adb323eebdc7_prof);

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
