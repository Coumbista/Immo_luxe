<?php

/* GSTImmobilierBundle:Front:search_bien.html.twig */
class __TwigTemplate_592e8f0365acf9dcf76d017803c5a5eb0d7b9a514191d5c871b2c12b27c662a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "GSTImmobilierBundle:Front:search_bien.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea5b62a5c87e1c75bb16ebd6a5263e4c48eeca719e1ad55efb7d7a15341a1df0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea5b62a5c87e1c75bb16ebd6a5263e4c48eeca719e1ad55efb7d7a15341a1df0->enter($__internal_ea5b62a5c87e1c75bb16ebd6a5263e4c48eeca719e1ad55efb7d7a15341a1df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Front:search_bien.html.twig"));

        $__internal_dd0f4fdb7758a81c388c899659dac39f8c2fee9d7e2e576aee43c89d22a5382b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd0f4fdb7758a81c388c899659dac39f8c2fee9d7e2e576aee43c89d22a5382b->enter($__internal_dd0f4fdb7758a81c388c899659dac39f8c2fee9d7e2e576aee43c89d22a5382b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Front:search_bien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea5b62a5c87e1c75bb16ebd6a5263e4c48eeca719e1ad55efb7d7a15341a1df0->leave($__internal_ea5b62a5c87e1c75bb16ebd6a5263e4c48eeca719e1ad55efb7d7a15341a1df0_prof);

        
        $__internal_dd0f4fdb7758a81c388c899659dac39f8c2fee9d7e2e576aee43c89d22a5382b->leave($__internal_dd0f4fdb7758a81c388c899659dac39f8c2fee9d7e2e576aee43c89d22a5382b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c4458df1596d5b4086d600c20618e5fb4600a2d0c131dd2d6db84b9ca26f6be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c4458df1596d5b4086d600c20618e5fb4600a2d0c131dd2d6db84b9ca26f6be->enter($__internal_3c4458df1596d5b4086d600c20618e5fb4600a2d0c131dd2d6db84b9ca26f6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_31dfe1add7fa5cb3c1705baf26b3c1790b79ff99982888bc4ecad8be8fa15d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31dfe1add7fa5cb3c1705baf26b3c1790b79ff99982888bc4ecad8be8fa15d62->enter($__internal_31dfe1add7fa5cb3c1705baf26b3c1790b79ff99982888bc4ecad8be8fa15d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GSTImmobilierBundle:Front:searchBien";
        
        $__internal_31dfe1add7fa5cb3c1705baf26b3c1790b79ff99982888bc4ecad8be8fa15d62->leave($__internal_31dfe1add7fa5cb3c1705baf26b3c1790b79ff99982888bc4ecad8be8fa15d62_prof);

        
        $__internal_3c4458df1596d5b4086d600c20618e5fb4600a2d0c131dd2d6db84b9ca26f6be->leave($__internal_3c4458df1596d5b4086d600c20618e5fb4600a2d0c131dd2d6db84b9ca26f6be_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_18e1b38f85a583df5c7479d18e36deb68a5492dfe983233e172a95d540e282df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18e1b38f85a583df5c7479d18e36deb68a5492dfe983233e172a95d540e282df->enter($__internal_18e1b38f85a583df5c7479d18e36deb68a5492dfe983233e172a95d540e282df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_85d3f75a2af05ff0d0f410da5407773aa26241e71a6953a6c52747ee93061fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d3f75a2af05ff0d0f410da5407773aa26241e71a6953a6c52747ee93061fd9->enter($__internal_85d3f75a2af05ff0d0f410da5407773aa26241e71a6953a6c52747ee93061fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <div class=\"col-8 \">
            <div class=\"container\">
                   
                    <div class=\"card-columns\" id=\"list\" style=\"display:inline\">
                    
                        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new Twig_Error_Runtime('Variable "biens" does not exist.', 12, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 13
            echo "                        <div class=\"card\">
                            <img class=\"card-img-top\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" alt=\"Card image cap\" style=\"width:200px;\">
                            <div class=\"card-body bg-light\">
                                <h4 style=\"font-family:Goudy; color:grey\" class=\"card-title\"><center>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "nombien", array()), "html", null, true);
            echo "</center></h4>
                               
                                <p class=\"card-text\" style=\"margin-left:500px;\">
                                <p><B>Description: </B><span class=\"text-primary\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "description", array()), "html", null, true);
            echo "</span></p>
                                    <p><B>Prix: </B><span class=\"text-primary\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "prix_loc", array()), "html", null, true);
            echo "</span></p>
                                    <p><B>Localité: </B>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "localite", array()), "libelleloca", array()), "html", null, true);
            echo "</p>
                                     <p><B>Ttypebien: </B>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "typebien", array()), "libelletype", array()), "html", null, true);
            echo "</p>
                                </p>
                                </div>
                                                          </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                      
                    </div>
                </div>
        </div>
";
        
        $__internal_85d3f75a2af05ff0d0f410da5407773aa26241e71a6953a6c52747ee93061fd9->leave($__internal_85d3f75a2af05ff0d0f410da5407773aa26241e71a6953a6c52747ee93061fd9_prof);

        
        $__internal_18e1b38f85a583df5c7479d18e36deb68a5492dfe983233e172a95d540e282df->leave($__internal_18e1b38f85a583df5c7479d18e36deb68a5492dfe983233e172a95d540e282df_prof);

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
        return array (  119 => 28,  107 => 22,  103 => 21,  99 => 20,  95 => 19,  89 => 16,  83 => 14,  80 => 13,  76 => 12,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}

{% block title %}GSTImmobilierBundle:Front:searchBien{% endblock %}

{% block body %}

  <div class=\"col-8 \">
            <div class=\"container\">
                   
                    <div class=\"card-columns\" id=\"list\" style=\"display:inline\">
                    
                        {% for bien in biens %}
                        <div class=\"card\">
                            <img class=\"card-img-top\" src=\"{{ asset('image/')}}{{ bien.images[0].image }}\" alt=\"Card image cap\" style=\"width:200px;\">
                            <div class=\"card-body bg-light\">
                                <h4 style=\"font-family:Goudy; color:grey\" class=\"card-title\"><center>{{ bien.nombien }}</center></h4>
                               
                                <p class=\"card-text\" style=\"margin-left:500px;\">
                                <p><B>Description: </B><span class=\"text-primary\">{{ bien.description }}</span></p>
                                    <p><B>Prix: </B><span class=\"text-primary\">{{ bien.prix_loc }}</span></p>
                                    <p><B>Localité: </B>{{ bien.localite.libelleloca }}</p>
                                     <p><B>Ttypebien: </B>{{ bien.typebien.libelletype}}</p>
                                </p>
                                </div>
                                                          </div>
                        </div>
                        {% endfor %}
                      
                    </div>
                </div>
        </div>
{% endblock %}

", "GSTImmobilierBundle:Front:search_bien.html.twig", "/var/www/html/Agence_immobilier/Immobilier/src/GST/ImmobilierBundle/Resources/views/Front/search_bien.html.twig");
    }
}
