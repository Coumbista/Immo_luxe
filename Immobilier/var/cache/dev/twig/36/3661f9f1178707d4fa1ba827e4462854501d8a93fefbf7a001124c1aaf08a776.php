<?php

/* GSTImmobilierBundle:Admin:recharge.html.twig */
class __TwigTemplate_2102a1346ada0ede8a84cde5b77b2148a0ff91392da1bad5251468f7d8fd9877 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 87
        $this->parent = $this->loadTemplate("::base.html.twig", "GSTImmobilierBundle:Admin:recharge.html.twig", 87);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f681c42c82c43d71fb2c9ad0000bfd511dddf12dfda40a0ede367f88f3aaa5dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f681c42c82c43d71fb2c9ad0000bfd511dddf12dfda40a0ede367f88f3aaa5dd->enter($__internal_f681c42c82c43d71fb2c9ad0000bfd511dddf12dfda40a0ede367f88f3aaa5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Admin:recharge.html.twig"));

        $__internal_d8953f2cdc6897d23d88800735af912278810713942b0eb1e39dedd5df20bdae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8953f2cdc6897d23d88800735af912278810713942b0eb1e39dedd5df20bdae->enter($__internal_d8953f2cdc6897d23d88800735af912278810713942b0eb1e39dedd5df20bdae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Admin:recharge.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f681c42c82c43d71fb2c9ad0000bfd511dddf12dfda40a0ede367f88f3aaa5dd->leave($__internal_f681c42c82c43d71fb2c9ad0000bfd511dddf12dfda40a0ede367f88f3aaa5dd_prof);

        
        $__internal_d8953f2cdc6897d23d88800735af912278810713942b0eb1e39dedd5df20bdae->leave($__internal_d8953f2cdc6897d23d88800735af912278810713942b0eb1e39dedd5df20bdae_prof);

    }

    // line 88
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7f2bb2f0ad7c993b7284b6fdd3907203da53ccada7a494d56d7a68c1de06996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7f2bb2f0ad7c993b7284b6fdd3907203da53ccada7a494d56d7a68c1de06996->enter($__internal_d7f2bb2f0ad7c993b7284b6fdd3907203da53ccada7a494d56d7a68c1de06996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_faac2069d0646af3d90db27c662dcd59d0074f2f6473bec8313bfe85a3d3102e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faac2069d0646af3d90db27c662dcd59d0074f2f6473bec8313bfe85a3d3102e->enter($__internal_faac2069d0646af3d90db27c662dcd59d0074f2f6473bec8313bfe85a3d3102e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "  
                 <div class=\"container\">
                 <div class=\"jumbotron text-center\">
  <h1>Immobilier de Luxe</h1>
  <p>Formulaire d'ajout Bien</p> 
</div>                   
    <form name=\"bien\" method=\"post\" id=\"new-bien-form\" class=\"form-horizontal  new-form\" data-view=\"new\" data-entity=\"Bien\" data-entity-id=\"\">
    <input type=\"hidden\" name=\"referer\" value=\"\"/>    
        <div class=\"row\">
                        <div class=\"col-xs-12 \">
                <div class=\"form-group  field-text\">
                <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">Nombien</label>
                <div class=\"col-sm-10\">
                <input type=\"text\" id=\"bien_nombien\" name=\"bien[nombien]\" required=\"required\" class=\"form-control\" />
                </div>
                </div>
            </div>
                    <div class=\"col-xs-12 \">
                        <div class=\"form-group  field-textarea\">
                        <label class=\"col-sm-2 control-label required\" for=\"bien_description\">Description</label>
                        <div class=\"col-sm-10\">
                            <textarea id=\"bien_description\" name=\"bien[description]\" required=\"required\" class=\"form-control\"></textarea>
                         </div>
                </div>
            </div>
                    <div class=\"col-xs-12 \">
                        <div class=\"form-group  field-integer\">
                        <label class=\"col-sm-2 control-label required\" for=\"bien_prix_loc\">Prix loc</label>
                        <div class=\"col-sm-10\">
                        <input type=\"number\" id=\"bien_prix_loc\" name=\"bien[prix_loc]\" required=\"required\" class=\"form-control\" />
                     </div>
                </div>
            </div>
                <div class=\"col-xs-12 \">
                    <div class=\"form-group  field-checkbox\">
                    <div class=\"col-sm-2\">
                </div>
               
                    <div class=\"col-xs-12 \">
                        <div class=\"form-group  field-integer\">
                        <label class=\"col-sm-2 control-label required\" for=\"bien_idparentbien\">Idparentbien</label>
                        <div class=\"col-sm-10\">
                        <input type=\"number\" id=\"bien_idparentbien\" name=\"bien[idparentbien]\" required=\"required\" class=\"form-control\" />
                    </div>
                </div>
            </div>
                    <div class=\"col-xs-12 \">
                <div class=\"form-group  field-entity\">
                <label class=\"col-sm-2 control-label\" for=\"bien_localite\">Localite</label>
                <div class=\"col-sm-10\">
                <select id=\"bien_localite\" name=\"localite\" data-widget=\"select2\" class=\"form-control\">
                     <option value=\"\">Choisir une localité</option>
                     ";
        // line 143
        echo "                  </select>
                  </div>
                  </div>
            </div>
                    <div class=\"col-xs-12 \">
                <div class=\"form-group  field-entity\">
                <label class=\"col-sm-2 control-label\" for=\"bien_typebien\">Typebien</label>
                <div class=\"col-sm-10\">
                <select id=\"bien_typebien\" name=\"typebien\" data-widget=\"select2\" class=\"form-control\">
                <option value=\"\">Choisir un type de bien</option>
                    ";
        // line 156
        echo "               </select>
               </div>
               </div>
            </div>
                    <div class=\"col-xs-12 \">
                <div class=\"form-group  field-entity\">
                <label class=\"col-sm-2 control-label\" for=\"bien_images\">Images</label>
                <input type=\"file\" name=\"bien[images][]\" value=\"image\" multiple=\"multiple\">
                </div>
            </div>
            
            </div>
    <input type=\"hidden\" id=\"bien\" name=\"bien\" value=\"\" />
      <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">        
        <button type=\"submit\" class=\"btn btn-primary action-save\" style=\"margin-left:90%;\">
        <i class=\"fa fa-save\"></i> Enregistrer
    </button>
<footer class=\"row\"style=\"border-top:solid 1px ligthgrey;\">Immobilier de Luxe</footer>
</div>
    ";
        
        $__internal_faac2069d0646af3d90db27c662dcd59d0074f2f6473bec8313bfe85a3d3102e->leave($__internal_faac2069d0646af3d90db27c662dcd59d0074f2f6473bec8313bfe85a3d3102e_prof);

        
        $__internal_d7f2bb2f0ad7c993b7284b6fdd3907203da53ccada7a494d56d7a68c1de06996->leave($__internal_d7f2bb2f0ad7c993b7284b6fdd3907203da53ccada7a494d56d7a68c1de06996_prof);

    }

    public function getTemplateName()
    {
        return "GSTImmobilierBundle:Admin:recharge.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 156,  102 => 143,  40 => 88,  11 => 87,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("    {# <!DOCTYPE html>
<html lang=\"en\">
<head>
   <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
 <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
       \t\t<script defer src=\"https://use.fontawesome.com/releases/v5.0.6/js/all.js\"></script>
           <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\" type=\"text/css\" />
           <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>

<script src=\"https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css\">

        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>

<div class=\"jumbotron text-center\">
  <h1>My First Bootstrap Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>
  
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-sm-2\">
    <ul class=\"nav flex-column\">
    <li class=\"nav-item\">
      <a class=\"nav-link bien\" href=\"#\">Bien</a>
    </li>
    <li class=\"nav-item \">
      <a class=\"nav-link localite\" href=\"#\">Localité</a>
    </li>
    <li class=\"nav-item \">
      <a class=\"nav-link type\" href=\"#\">Type_Bien</a>
    </li>
   
  </ul>
    </div>
    {% block load %}
    <div class=\"col-sm-10\" id=\"contenu\">
    <h1>LOADING</h1> <h1>LOADING</h1> <h1>LOADING</h1>
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
{% endblock %}
</body>
</html>
{% block javascript %}

{% endblock %}
{# {% block body %}
{% block nav %}
<div class=\"container\">
 
  
</div>

{% endblock %}

{% endblock %} #} 
                 {% extends \"::base.html.twig\" %}   
                 {% block body %}  
                 <div class=\"container\">
                 <div class=\"jumbotron text-center\">
  <h1>Immobilier de Luxe</h1>
  <p>Formulaire d'ajout Bien</p> 
</div>                   
    <form name=\"bien\" method=\"post\" id=\"new-bien-form\" class=\"form-horizontal  new-form\" data-view=\"new\" data-entity=\"Bien\" data-entity-id=\"\">
    <input type=\"hidden\" name=\"referer\" value=\"\"/>    
        <div class=\"row\">
                        <div class=\"col-xs-12 \">
                <div class=\"form-group  field-text\">
                <label class=\"col-sm-2 control-label required\" for=\"bien_nombien\">Nombien</label>
                <div class=\"col-sm-10\">
                <input type=\"text\" id=\"bien_nombien\" name=\"bien[nombien]\" required=\"required\" class=\"form-control\" />
                </div>
                </div>
            </div>
                    <div class=\"col-xs-12 \">
                        <div class=\"form-group  field-textarea\">
                        <label class=\"col-sm-2 control-label required\" for=\"bien_description\">Description</label>
                        <div class=\"col-sm-10\">
                            <textarea id=\"bien_description\" name=\"bien[description]\" required=\"required\" class=\"form-control\"></textarea>
                         </div>
                </div>
            </div>
                    <div class=\"col-xs-12 \">
                        <div class=\"form-group  field-integer\">
                        <label class=\"col-sm-2 control-label required\" for=\"bien_prix_loc\">Prix loc</label>
                        <div class=\"col-sm-10\">
                        <input type=\"number\" id=\"bien_prix_loc\" name=\"bien[prix_loc]\" required=\"required\" class=\"form-control\" />
                     </div>
                </div>
            </div>
                <div class=\"col-xs-12 \">
                    <div class=\"form-group  field-checkbox\">
                    <div class=\"col-sm-2\">
                </div>
               
                    <div class=\"col-xs-12 \">
                        <div class=\"form-group  field-integer\">
                        <label class=\"col-sm-2 control-label required\" for=\"bien_idparentbien\">Idparentbien</label>
                        <div class=\"col-sm-10\">
                        <input type=\"number\" id=\"bien_idparentbien\" name=\"bien[idparentbien]\" required=\"required\" class=\"form-control\" />
                    </div>
                </div>
            </div>
                    <div class=\"col-xs-12 \">
                <div class=\"form-group  field-entity\">
                <label class=\"col-sm-2 control-label\" for=\"bien_localite\">Localite</label>
                <div class=\"col-sm-10\">
                <select id=\"bien_localite\" name=\"localite\" data-widget=\"select2\" class=\"form-control\">
                     <option value=\"\">Choisir une localité</option>
                     {# {% for localite in localites %}
                    <option value=\"{{ localite.id }}\">{{ localite.libelleloca }}</option>
                    {% endfor %} #}
                  </select>
                  </div>
                  </div>
            </div>
                    <div class=\"col-xs-12 \">
                <div class=\"form-group  field-entity\">
                <label class=\"col-sm-2 control-label\" for=\"bien_typebien\">Typebien</label>
                <div class=\"col-sm-10\">
                <select id=\"bien_typebien\" name=\"typebien\" data-widget=\"select2\" class=\"form-control\">
                <option value=\"\">Choisir un type de bien</option>
                    {# {% for typebien in bien.typebien %}              
                 <option value=\"{{ type.id }}\"> {{typebien.libelletype}} </option>
                     {% endfor %} #}
               </select>
               </div>
               </div>
            </div>
                    <div class=\"col-xs-12 \">
                <div class=\"form-group  field-entity\">
                <label class=\"col-sm-2 control-label\" for=\"bien_images\">Images</label>
                <input type=\"file\" name=\"bien[images][]\" value=\"image\" multiple=\"multiple\">
                </div>
            </div>
            
            </div>
    <input type=\"hidden\" id=\"bien\" name=\"bien\" value=\"\" />
      <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">        
        <button type=\"submit\" class=\"btn btn-primary action-save\" style=\"margin-left:90%;\">
        <i class=\"fa fa-save\"></i> Enregistrer
    </button>
<footer class=\"row\"style=\"border-top:solid 1px ligthgrey;\">Immobilier de Luxe</footer>
</div>
    {% endblock %}
    
    ", "GSTImmobilierBundle:Admin:recharge.html.twig", "/var/www/html/Agence_immobilier/Immobilier/src/GST/ImmobilierBundle/Resources/views/Admin/recharge.html.twig");
    }
}
