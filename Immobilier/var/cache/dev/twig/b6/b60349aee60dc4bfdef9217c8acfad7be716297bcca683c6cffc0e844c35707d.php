<?php

/* GSTImmobilierBundle:Admin:ajoutbien.html.twig */
class __TwigTemplate_f8f8060d88e731a5e9f530575e67d2c7e2597c7ee8196e17bd9ab47027cbc9ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::back.html.twig", "GSTImmobilierBundle:Admin:ajoutbien.html.twig", 1);
        $this->blocks = array(
            'recharge' => array($this, 'block_recharge'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af61850bbfa0fb2d67a37d5ba9b92f0b9e9b1bd4c912856205e2bde9f0b374dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af61850bbfa0fb2d67a37d5ba9b92f0b9e9b1bd4c912856205e2bde9f0b374dc->enter($__internal_af61850bbfa0fb2d67a37d5ba9b92f0b9e9b1bd4c912856205e2bde9f0b374dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Admin:ajoutbien.html.twig"));

        $__internal_0755bbc28de51dc34491678d6f9d93728d68e46d9a766b63d8c08f9daf954a6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0755bbc28de51dc34491678d6f9d93728d68e46d9a766b63d8c08f9daf954a6f->enter($__internal_0755bbc28de51dc34491678d6f9d93728d68e46d9a766b63d8c08f9daf954a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Admin:ajoutbien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af61850bbfa0fb2d67a37d5ba9b92f0b9e9b1bd4c912856205e2bde9f0b374dc->leave($__internal_af61850bbfa0fb2d67a37d5ba9b92f0b9e9b1bd4c912856205e2bde9f0b374dc_prof);

        
        $__internal_0755bbc28de51dc34491678d6f9d93728d68e46d9a766b63d8c08f9daf954a6f->leave($__internal_0755bbc28de51dc34491678d6f9d93728d68e46d9a766b63d8c08f9daf954a6f_prof);

    }

    // line 2
    public function block_recharge($context, array $blocks = array())
    {
        $__internal_8ae391ebdf1450bb798cfce13380dce35c1c11f9292598ea3cd3b7cfe4bbde7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ae391ebdf1450bb798cfce13380dce35c1c11f9292598ea3cd3b7cfe4bbde7e->enter($__internal_8ae391ebdf1450bb798cfce13380dce35c1c11f9292598ea3cd3b7cfe4bbde7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recharge"));

        $__internal_d9b1122e06af1306c2018a69e4a818a902b18cdc50e92b9624b646b74d8860cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b1122e06af1306c2018a69e4a818a902b18cdc50e92b9624b646b74d8860cd->enter($__internal_d9b1122e06af1306c2018a69e4a818a902b18cdc50e92b9624b646b74d8860cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recharge"));

        // line 3
        echo " ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form');
        echo "
 ";
        // line 8
        echo "
                        <!-- Page-Title -->
                          <h4 class=\"pull-left page-title\">Ajout Bien</h4>

                        <div class=\"row\">
                            <div class=\"col-md-12 portlets\">
                                <!-- Your awesome content goes here -->
                                <div class=\"m-b-30\">
                                    <form action=\"#\" class=\"dropzone\" id=\"dropzone\">
                                      <div class=\"fallback\">
                                        <input name=\"file\" type=\"file\" multiple=\"multiple\">
                                      </div>
                                    </form>
                                </div>
                            </div>                            
                        </div>
            <div class=\"row\">
            <div class=\"col_md-12\">
            <input type=\"submit\"name=\"submit\" value=\"Enregistrer\"class=\"btn btn-primary\" style=\"margin-left:70%;\">
            <input type=\"submit\"name=\"submit\" value=\"Annuler\"class=\"btn btn-primary\" style=\"margin-left:10px;\">
            </div>
            </div>
                        <!-- end row -->


 ";
        
        $__internal_d9b1122e06af1306c2018a69e4a818a902b18cdc50e92b9624b646b74d8860cd->leave($__internal_d9b1122e06af1306c2018a69e4a818a902b18cdc50e92b9624b646b74d8860cd_prof);

        
        $__internal_8ae391ebdf1450bb798cfce13380dce35c1c11f9292598ea3cd3b7cfe4bbde7e->leave($__internal_8ae391ebdf1450bb798cfce13380dce35c1c11f9292598ea3cd3b7cfe4bbde7e_prof);

    }

    public function getTemplateName()
    {
        return "GSTImmobilierBundle:Admin:ajoutbien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::back.html.twig\" %}
{% block recharge %}
 {{ form (form)}}
 {# <div class=\"content-page\">
                <!-- Start content -->
                <div class=\"content\">
                    <div class=\"container\"> #}

                        <!-- Page-Title -->
                          <h4 class=\"pull-left page-title\">Ajout Bien</h4>

                        <div class=\"row\">
                            <div class=\"col-md-12 portlets\">
                                <!-- Your awesome content goes here -->
                                <div class=\"m-b-30\">
                                    <form action=\"#\" class=\"dropzone\" id=\"dropzone\">
                                      <div class=\"fallback\">
                                        <input name=\"file\" type=\"file\" multiple=\"multiple\">
                                      </div>
                                    </form>
                                </div>
                            </div>                            
                        </div>
            <div class=\"row\">
            <div class=\"col_md-12\">
            <input type=\"submit\"name=\"submit\" value=\"Enregistrer\"class=\"btn btn-primary\" style=\"margin-left:70%;\">
            <input type=\"submit\"name=\"submit\" value=\"Annuler\"class=\"btn btn-primary\" style=\"margin-left:10px;\">
            </div>
            </div>
                        <!-- end row -->


 {% endblock %}", "GSTImmobilierBundle:Admin:ajoutbien.html.twig", "/var/www/html/Agence_immobilier/Immobilier/src/GST/ImmobilierBundle/Resources/views/Admin/ajoutbien.html.twig");
    }
}
