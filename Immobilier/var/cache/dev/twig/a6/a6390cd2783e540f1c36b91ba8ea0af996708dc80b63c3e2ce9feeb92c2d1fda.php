<?php

/* GSTImmobilierBundle:Front:pro.html.twig */
class __TwigTemplate_51f827a955dc211b3ce185e2c9373d5ae636d4dcc3bd2008b9b05c1bbbb556ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::reservation.html.twig", "GSTImmobilierBundle:Front:pro.html.twig", 1);
        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::reservation.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b6f0209ae8e2b289e9227b17a7c1734a740239e1a4e35b04447cf2f29dbf484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b6f0209ae8e2b289e9227b17a7c1734a740239e1a4e35b04447cf2f29dbf484->enter($__internal_5b6f0209ae8e2b289e9227b17a7c1734a740239e1a4e35b04447cf2f29dbf484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Front:pro.html.twig"));

        $__internal_7c1874fc8c9658758e333a399578529082975d0101714754e4d567ed34db08af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c1874fc8c9658758e333a399578529082975d0101714754e4d567ed34db08af->enter($__internal_7c1874fc8c9658758e333a399578529082975d0101714754e4d567ed34db08af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Front:pro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b6f0209ae8e2b289e9227b17a7c1734a740239e1a4e35b04447cf2f29dbf484->leave($__internal_5b6f0209ae8e2b289e9227b17a7c1734a740239e1a4e35b04447cf2f29dbf484_prof);

        
        $__internal_7c1874fc8c9658758e333a399578529082975d0101714754e4d567ed34db08af->leave($__internal_7c1874fc8c9658758e333a399578529082975d0101714754e4d567ed34db08af_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_6a02330db14592b9eb0b272ee21c587af7ba7cadaca8e17f318fdd66c19812b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a02330db14592b9eb0b272ee21c587af7ba7cadaca8e17f318fdd66c19812b4->enter($__internal_6a02330db14592b9eb0b272ee21c587af7ba7cadaca8e17f318fdd66c19812b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_2db01fd6e733a94b605e9c80fb635f83d13c2961b396df07c02930611bf10c90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2db01fd6e733a94b605e9c80fb635f83d13c2961b396df07c02930611bf10c90->enter($__internal_2db01fd6e733a94b605e9c80fb635f83d13c2961b396df07c02930611bf10c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        
        <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/pages.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

 <style>
.rower{
   margin-top:200px;
}
</style>";
        // line 21
        echo "<nav class=\"gtco-nav \" role=\"navigation\" style=\"background:black\">
\t\t<div class=\"gtco-container\">
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4 col-xs-12 \">
\t\t\t\t\t<div id=\"gtco-logo\"><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("searchBien");
        echo "\"><em>Immobilier De LUXE </em></a></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-8 text-right menu-1\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"destination.html\">Destination</a></li>
\t\t\t\t\t\t<li class=\"has-dropdown\">
\t\t\t\t\t\t\t<a href=\"#\">Nos Agences</a>
\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Almadie");
        echo "\">Almadie</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Golf</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Mariste");
        echo "\">Mariste</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dakar</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("resultat");
        echo "\">Nos Biens</a></li>
\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t</ul>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</nav>
    <div class=\"row rower\">
  <form name=\"bien\" method=\"post\" id=\"new-bien-form\" class=\"form-horizontal  new-form\" data-view=\"new\" data-entity=\"Bien\" data-entity-id=\"\">
    <input type=\"hidden\" name=\"referer\" value=\"\"/>    
        <div class=\"row\">
                        <div class=\"col-xs-12 \">
                      
                <div class=\"form-group  field-text\">
                <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">Nom du Bien</label>
                <div class=\"col-sm-10\">
                <input type=\"text\" id=\"bien_nombien\" name=\"nom\" required=\"required\" class=\"form-control\" />
                </div>
                </div>
            </div>
                    <div class=\"col-xs-12 \">
                        <div class=\"form-group  field-textarea\">
                        <label class=\"col-sm-2 control-label required\" for=\"bien_description\">Description</label>
                        <div class=\"col-sm-10\">
                            <textarea id=\"bien_description\" name=\"description\" required=\"required\" class=\"form-control\"></textarea>
                         </div>
                </div>
            </div>
                    <div class=\"col-xs-12 \">
                        <div class=\"form-group  field-integer\">
                        <label class=\"col-sm-2 control-label required\" for=\"bien_prix_loc\">Montant_Location</label>
                        <div class=\"col-sm-10\">
                        <input type=\"number\" id=\"bien_prix_loc\" name=\"montantvoulu\" required=\"required\" class=\"form-control\" />
                     </div>
                </div>
            </div>
                ";
        // line 81
        echo "               
                    <div class=\"col-xs-12 \">
                        <div class=\"form-group  field-integer\">
                        <label class=\"col-sm-2 control-label required\" for=\"bien_idparentbien\">Parent_Bien</label>
                        <div class=\"col-sm-10\">
                        <input type=\"number\" id=\"bien_idparentbien\" name=\"idparent\" required=\"required\" class=\"form-control\" />
                    </div>
                </div>
            </div>
                    <div class=\"col-xs-12 \">
                        <form action=\"#\"method=\"post\">
                <div class=\"form-group  \">
                <label class=\"col-sm-2 control-label\" for=\"bien_localite\">Localite</label>
                <div class=\"col-sm-10\">
                <select id=\"bien_localite\" name=\"localite\"  class=\"form-control\">
                     ";
        // line 97
        echo "                     
                      ";
        // line 99
        echo "                     ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["localites"]) || array_key_exists("localites", $context) ? $context["localites"] : (function () { throw new Twig_Error_Runtime('Variable "localites" does not exist.', 99, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 100
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["localite"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["localite"], "libelleloca", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                  </select>
                  </div>
                  </div>
                  </form>
            </div>
                    <div class=\"col-xs-12 \">
                   
                <div class=\"form-group  field-entity\">
                <label class=\"col-sm-2 control-label\" for=\"bien_typebien\">Type de Bien</label>
                <div class=\"col-sm-10\">
                 ";
        // line 113
        echo "                <select id=\"bien_typebien\" name=\"typebien\" data-widget=\"select2\" class=\"form-control\">
                ";
        // line 115
        echo "                 ";
        // line 116
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new Twig_Error_Runtime('Variable "types" does not exist.', 116, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            echo "              
                 <option value=\"";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["type"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["type"], "libelletype", array()), "html", null, true);
            echo " </option>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "             
               </div>
               </div>
              
            </div>
                   
    <input type=\"hidden\" id=\"bien\" name=\"bien\" value=\"\" />
    
                            <div class=\"col-md-12 portlets\">
                                <!-- Your awesome content goes here -->
                                <div class=\"m-b-30\">
                                    <form action=\"#\"method=\"post\" class=\"dropzone\" id=\"dropzone\">
                                      <div class=\"fallback\">
                                        <input name=\"file\" type=\"file\" multiple=\"multiple\" >
                                      </div>
                                    </form>
                                </div>
                            </div> 
                            ";
        // line 138
        echo "                         <div class=\"col-xs-12 \">                      
                            <div class=\"form-group  field-text\">
                            <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">NIN</label>
                            <div class=\"col-sm-10\">
                            <input type=\"text\" id=\"bien_nombien\" name=\"numpiece\" required=\"required\" class=\"form-control\" />
                            </div>
                            </div>
                    </div>   
            <div class=\"col-xs-12 \">
                      
                     <div class=\"form-group  field-text\">
                            <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">Nom & Prénom</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" id=\"bien_nombien\" name=\"nomcomplet\" required=\"required\" class=\"form-control\" />
                        </div>
                            </div>
            </div> 
             <div class=\"col-xs-12 \">
                      
                     <div class=\"form-group  field-text\">
                            <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">Adresse</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" id=\"bien_nombien\" name=\"adressepro\" required=\"required\" class=\"form-control\" />
                        </div>
                            </div>
            </div> 
             <div class=\"col-xs-12 \">
                      
                     <div class=\"form-group  field-text\">
                            <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">Tel</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" id=\"bien_nombien\" name=\"telpro\" required=\"required\" class=\"form-control\" />
                        </div>
                            </div>
            </div> 
             <div class=\"col-xs-12 \">
                      
                     <div class=\"form-group  field-text\">
                            <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">Code_Banque</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" id=\"bien_nombien\" name=\"codebanque\" required=\"required\" class=\"form-control\" />
                        </div>
                            </div>
            </div> 
             <div class=\"col-xs-12 \">
                      
                     <div class=\"form-group  field-text\">
                            <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">Adresse_Email</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" id=\"bien_nombien\" name=\"emailpro\" required=\"required\" class=\"form-control\" />
                        </div>
                            </div>
            </div> 

                       
      <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">        
                    <button type=\"submit\" name=\"submit\"class=\"btn btn-primary action-save\" style=\"margin-left:90%;\">
                    <i class=\"fa fa-save\"></i> Enregistrer
                    </button>
                 </div>
            </div>
    </div>
    </div>
   </div> 
   
         <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>


       
        <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_2db01fd6e733a94b605e9c80fb635f83d13c2961b396df07c02930611bf10c90->leave($__internal_2db01fd6e733a94b605e9c80fb635f83d13c2961b396df07c02930611bf10c90_prof);

        
        $__internal_6a02330db14592b9eb0b272ee21c587af7ba7cadaca8e17f318fdd66c19812b4->leave($__internal_6a02330db14592b9eb0b272ee21c587af7ba7cadaca8e17f318fdd66c19812b4_prof);

    }

    // line 225
    public function block_header($context, array $blocks = array())
    {
        $__internal_e8247d31dc8d887866ae91d5d53213ba2ea76e6131f5e381619cd5826e513f0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8247d31dc8d887866ae91d5d53213ba2ea76e6131f5e381619cd5826e513f0c->enter($__internal_e8247d31dc8d887866ae91d5d53213ba2ea76e6131f5e381619cd5826e513f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_089eef9b8d001dc4e8f4385f7323bd8e249b238ea1dd47db810534c5349ed3b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_089eef9b8d001dc4e8f4385f7323bd8e249b238ea1dd47db810534c5349ed3b3->enter($__internal_089eef9b8d001dc4e8f4385f7323bd8e249b238ea1dd47db810534c5349ed3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_089eef9b8d001dc4e8f4385f7323bd8e249b238ea1dd47db810534c5349ed3b3->leave($__internal_089eef9b8d001dc4e8f4385f7323bd8e249b238ea1dd47db810534c5349ed3b3_prof);

        
        $__internal_e8247d31dc8d887866ae91d5d53213ba2ea76e6131f5e381619cd5826e513f0c->leave($__internal_e8247d31dc8d887866ae91d5d53213ba2ea76e6131f5e381619cd5826e513f0c_prof);

    }

    public function getTemplateName()
    {
        return "GSTImmobilierBundle:Front:pro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 225,  371 => 222,  364 => 218,  359 => 216,  355 => 215,  351 => 214,  347 => 213,  343 => 212,  339 => 211,  335 => 210,  331 => 209,  327 => 208,  323 => 207,  319 => 206,  249 => 138,  229 => 119,  219 => 117,  212 => 116,  210 => 115,  207 => 113,  195 => 102,  184 => 100,  179 => 99,  176 => 97,  159 => 81,  119 => 40,  112 => 36,  107 => 34,  96 => 26,  89 => 21,  80 => 11,  76 => 10,  72 => 9,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::reservation.html.twig\" %}
{% block nav %}
  <link href=\"{{asset('assets/plugins/dropzone/dist/dropzone.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        
        <link href=\"{{asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/core.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/components.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/pages.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/menu.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/responsive.css')}}\" rel=\"stylesheet\" type=\"text/css\">

 <style>
.rower{
   margin-top:200px;
}
</style>{#
<div class=\"form\">
{{ form (form)}}
</div> #}
<nav class=\"gtco-nav \" role=\"navigation\" style=\"background:black\">
\t\t<div class=\"gtco-container\">
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4 col-xs-12 \">
\t\t\t\t\t<div id=\"gtco-logo\"><a href=\"{{path('searchBien')}}\"><em>Immobilier De LUXE </em></a></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-8 text-right menu-1\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"destination.html\">Destination</a></li>
\t\t\t\t\t\t<li class=\"has-dropdown\">
\t\t\t\t\t\t\t<a href=\"#\">Nos Agences</a>
\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t<li><a href=\"{{path('Almadie')}}\">Almadie</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Golf</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"{{path('Mariste')}}\">Mariste</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dakar</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"{{path('resultat')}}\">Nos Biens</a></li>
\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t</ul>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</nav>
    <div class=\"row rower\">
  <form name=\"bien\" method=\"post\" id=\"new-bien-form\" class=\"form-horizontal  new-form\" data-view=\"new\" data-entity=\"Bien\" data-entity-id=\"\">
    <input type=\"hidden\" name=\"referer\" value=\"\"/>    
        <div class=\"row\">
                        <div class=\"col-xs-12 \">
                      
                <div class=\"form-group  field-text\">
                <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">Nom du Bien</label>
                <div class=\"col-sm-10\">
                <input type=\"text\" id=\"bien_nombien\" name=\"nom\" required=\"required\" class=\"form-control\" />
                </div>
                </div>
            </div>
                    <div class=\"col-xs-12 \">
                        <div class=\"form-group  field-textarea\">
                        <label class=\"col-sm-2 control-label required\" for=\"bien_description\">Description</label>
                        <div class=\"col-sm-10\">
                            <textarea id=\"bien_description\" name=\"description\" required=\"required\" class=\"form-control\"></textarea>
                         </div>
                </div>
            </div>
                    <div class=\"col-xs-12 \">
                        <div class=\"form-group  field-integer\">
                        <label class=\"col-sm-2 control-label required\" for=\"bien_prix_loc\">Montant_Location</label>
                        <div class=\"col-sm-10\">
                        <input type=\"number\" id=\"bien_prix_loc\" name=\"montantvoulu\" required=\"required\" class=\"form-control\" />
                     </div>
                </div>
            </div>
                {# <div class=\"col-xs-12 \">
                    <div class=\"form-group  field-checkbox\">
                    <div class=\"col-sm-2\">
                </div> #}
               
                    <div class=\"col-xs-12 \">
                        <div class=\"form-group  field-integer\">
                        <label class=\"col-sm-2 control-label required\" for=\"bien_idparentbien\">Parent_Bien</label>
                        <div class=\"col-sm-10\">
                        <input type=\"number\" id=\"bien_idparentbien\" name=\"idparent\" required=\"required\" class=\"form-control\" />
                    </div>
                </div>
            </div>
                    <div class=\"col-xs-12 \">
                        <form action=\"#\"method=\"post\">
                <div class=\"form-group  \">
                <label class=\"col-sm-2 control-label\" for=\"bien_localite\">Localite</label>
                <div class=\"col-sm-10\">
                <select id=\"bien_localite\" name=\"localite\"  class=\"form-control\">
                     {# <input value=\"\" name=\"localite\"class=\"form-control\"> #}
                     
                      {# <option  id=\"loc\"value=\"ajuter\"style=\"color:ligthgrey;\"type=\"button\" class=\"btn btn-primary\">Ajouter un localite</option> #}
                     {% for localite in localites %}
                    <option value=\"{{ localite.id }}\">{{ localite.libelleloca }}</option>
                    {% endfor %}
                  </select>
                  </div>
                  </div>
                  </form>
            </div>
                    <div class=\"col-xs-12 \">
                   
                <div class=\"form-group  field-entity\">
                <label class=\"col-sm-2 control-label\" for=\"bien_typebien\">Type de Bien</label>
                <div class=\"col-sm-10\">
                 {# <form action=\"#\"method=\"post\"> #}
                <select id=\"bien_typebien\" name=\"typebien\" data-widget=\"select2\" class=\"form-control\">
                {# <input value=\"typebien\"type=\"text\" name=\"typebien\" class=\"form-control\"> #}
                 {# </form> #}
                    {% for type in types %}              
                 <option value=\"{{ type.id }}\"> {{type.libelletype}} </option>
                     {% endfor %}
             
               </div>
               </div>
              
            </div>
                   
    <input type=\"hidden\" id=\"bien\" name=\"bien\" value=\"\" />
    
                            <div class=\"col-md-12 portlets\">
                                <!-- Your awesome content goes here -->
                                <div class=\"m-b-30\">
                                    <form action=\"#\"method=\"post\" class=\"dropzone\" id=\"dropzone\">
                                      <div class=\"fallback\">
                                        <input name=\"file\" type=\"file\" multiple=\"multiple\" >
                                      </div>
                                    </form>
                                </div>
                            </div> 
                            {# formulaire proprietaire   #}
                         <div class=\"col-xs-12 \">                      
                            <div class=\"form-group  field-text\">
                            <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">NIN</label>
                            <div class=\"col-sm-10\">
                            <input type=\"text\" id=\"bien_nombien\" name=\"numpiece\" required=\"required\" class=\"form-control\" />
                            </div>
                            </div>
                    </div>   
            <div class=\"col-xs-12 \">
                      
                     <div class=\"form-group  field-text\">
                            <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">Nom & Prénom</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" id=\"bien_nombien\" name=\"nomcomplet\" required=\"required\" class=\"form-control\" />
                        </div>
                            </div>
            </div> 
             <div class=\"col-xs-12 \">
                      
                     <div class=\"form-group  field-text\">
                            <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">Adresse</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" id=\"bien_nombien\" name=\"adressepro\" required=\"required\" class=\"form-control\" />
                        </div>
                            </div>
            </div> 
             <div class=\"col-xs-12 \">
                      
                     <div class=\"form-group  field-text\">
                            <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">Tel</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" id=\"bien_nombien\" name=\"telpro\" required=\"required\" class=\"form-control\" />
                        </div>
                            </div>
            </div> 
             <div class=\"col-xs-12 \">
                      
                     <div class=\"form-group  field-text\">
                            <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">Code_Banque</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" id=\"bien_nombien\" name=\"codebanque\" required=\"required\" class=\"form-control\" />
                        </div>
                            </div>
            </div> 
             <div class=\"col-xs-12 \">
                      
                     <div class=\"form-group  field-text\">
                            <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">Adresse_Email</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" id=\"bien_nombien\" name=\"emailpro\" required=\"required\" class=\"form-control\" />
                        </div>
                            </div>
            </div> 

                       
      <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">        
                    <button type=\"submit\" name=\"submit\"class=\"btn btn-primary action-save\" style=\"margin-left:90%;\">
                    <i class=\"fa fa-save\"></i> Enregistrer
                    </button>
                 </div>
            </div>
    </div>
    </div>
   </div> 
   
         <script src=\"{{asset('assets/js/jquery.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/detect.js')}}\"></script>
        <script src=\"{{asset('assets/js/fastclick.js')}}\"></script>
        <script src=\"{{asset('assets/js/jquery.slimscroll.js')}}\"></script>
        <script src=\"{{asset('assets/js/jquery.blockUI.js')}}\"></script>
        <script src=\"{{asset('assets/js/waves.js')}}\"></script>
        <script src=\"{{asset('assets/js/wow.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/jquery.nicescroll.js')}}\"></script>
        <script src=\"{{asset('assets/js/jquery.scrollTo.min.js')}}\"></script>
        <script src=\"{{asset('assets/plugins/dropzone/dist/dropzone.js')}}\"></script>

        <script src=\"{{asset('assets/js/jquery.app.js')}}\"></script>


       
        <script src=\"{{asset('assets/js/modernizr.min.js')}}\"></script>

{% endblock %}
{% block header %}{% endblock %}", "GSTImmobilierBundle:Front:pro.html.twig", "/var/www/html/Agence_immobilier/Immobilier/src/GST/ImmobilierBundle/Resources/views/Front/pro.html.twig");
    }
}
