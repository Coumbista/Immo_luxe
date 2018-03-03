<?php

/* GSTImmobilierBundle:Admin:veil.html.twig */
class __TwigTemplate_e35808ab4eb4288d0cb7950eb94ee797a569607967bf95733bad8bd83dcddab6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::back.html.twig", "GSTImmobilierBundle:Admin:veil.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef9986815651f462b2059ebb2398c2b08e334af1e18967080182af4f54b9726f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef9986815651f462b2059ebb2398c2b08e334af1e18967080182af4f54b9726f->enter($__internal_ef9986815651f462b2059ebb2398c2b08e334af1e18967080182af4f54b9726f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Admin:veil.html.twig"));

        $__internal_4fed2cbed5823f9ef2b321759d3686842b2626a2ab63da7ef197a30a95b40909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fed2cbed5823f9ef2b321759d3686842b2626a2ab63da7ef197a30a95b40909->enter($__internal_4fed2cbed5823f9ef2b321759d3686842b2626a2ab63da7ef197a30a95b40909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Admin:veil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef9986815651f462b2059ebb2398c2b08e334af1e18967080182af4f54b9726f->leave($__internal_ef9986815651f462b2059ebb2398c2b08e334af1e18967080182af4f54b9726f_prof);

        
        $__internal_4fed2cbed5823f9ef2b321759d3686842b2626a2ab63da7ef197a30a95b40909->leave($__internal_4fed2cbed5823f9ef2b321759d3686842b2626a2ab63da7ef197a30a95b40909_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_21b18af44fbfb3ba2d814672dd18ffb3bf31ff910eeb4c01cf837f72432f9e3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21b18af44fbfb3ba2d814672dd18ffb3bf31ff910eeb4c01cf837f72432f9e3b->enter($__internal_21b18af44fbfb3ba2d814672dd18ffb3bf31ff910eeb4c01cf837f72432f9e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3f36927ddffa52d5cfa26ea9c7fdbc00b1dc3cd1f320c6d0f36580e38fab2a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f36927ddffa52d5cfa26ea9c7fdbc00b1dc3cd1f320c6d0f36580e38fab2a27->enter($__internal_3f36927ddffa52d5cfa26ea9c7fdbc00b1dc3cd1f320c6d0f36580e38fab2a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "  ";
        // line 117
        echo "
";
        
        $__internal_3f36927ddffa52d5cfa26ea9c7fdbc00b1dc3cd1f320c6d0f36580e38fab2a27->leave($__internal_3f36927ddffa52d5cfa26ea9c7fdbc00b1dc3cd1f320c6d0f36580e38fab2a27_prof);

        
        $__internal_21b18af44fbfb3ba2d814672dd18ffb3bf31ff910eeb4c01cf837f72432f9e3b->leave($__internal_21b18af44fbfb3ba2d814672dd18ffb3bf31ff910eeb4c01cf837f72432f9e3b_prof);

    }

    public function getTemplateName()
    {
        return "GSTImmobilierBundle:Admin:veil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 117,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::back.html.twig\" %}
{% block content %}
  {# <div id=\"sidebar-menu\">
                        <ul>
                            

                           

                          
                         

                 
s
                            

                           


                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-place \"></i><span>BIENS</span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"#\" class=\"type \"> type de bien</a></li>
                                    <li><a href=\"#\"class=\"localite\"> Localité</a></li>
                                    <li><a href=\"#\"class=\" bien\">bien</a></li>
                                </ul>
                            </li>

                        
                            
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class=\"content-page\">
                <!-- Start content -->
                <div class=\"content\">
                    <div class=\"container\">
<div class=\"text-center\">
  <img src=\"{{asset('image/téléchargement.png')}}\" alt=\"\" /> 
 
</div>

{% block nav %}

    <nav class=\"navbar navbar-inverse\" style=\"height:20px; padding-top:-50px\">
        <div class=\"container-fluid\">

            <div class=\"collapse   navbar-collapse\" id=\"myNavbar\" >
                <ul class=\"nav navbar-nav \" id=\"centrer\">
                    <li><a href=\"#\" style=\"color:white; font-size:20px;\">Accueil</a></li>
                    <li><a href=\"#\" style=\"color:white; font-size:20px;\">Nos Biens</a></li>
                    <li><a href=\"#\" style=\"color:white; font-size:20px;\">A Propros</a></li>
                    <li><a href=\"#\" style=\"color:white; font-size:20px;\">Mon Compte</a></li>
                </ul>

            </div>
        </div>
    </nav>
    {% endblock %}
                        

                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <h3 class=\"panel-title text-center btn\" ></h3>
                                    </div>
                                    <div class=\"panel-body\">
                                        <div class=\"row\">
                                            <div class=\"col-md-12 col-sm-12 col-xs-12\" id=\"contenu\">                                          

    
                                            <script>
                                            \$(document).ready(function(){
                                            
                                            \$('.bien').on('click',function(){
                                                \$(\"#contenu\").load(\"{{ path('list')}}\");
                                                
                                            });
                                            \$('.localite').on('click',function(){
                                                \$(\"#contenu\").load(\"{{ path('Listlocalite')}}\");
                                                
                                            });
                                            \$('.type').on('click',function(){
                                                \$(\"#contenu\").load(\"{{ path('Listtype')}}\");
                                                
                                            });
                                            
                                            // contenu.html se trouve au même niveau dans l’arborescence.
                                            
                                                    });
                                                    </script>
</div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div> <!-- End Row -->


                    
                        
                  
               #}

{% endblock %}", "GSTImmobilierBundle:Admin:veil.html.twig", "/var/www/html/Agence_immobilier/Immobilier/src/GST/ImmobilierBundle/Resources/views/Admin/veil.html.twig");
    }
}
