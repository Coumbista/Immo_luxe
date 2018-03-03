<?php

/* GSTImmobilierBundle:Admin:detail.html.twig */
class __TwigTemplate_228c703b6307150085c4f8911a12919fd44c6cc2c3d7f8057e3c5c0510b57117 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GSTImmobilierBundle:Admin:detail.html.twig", 1);
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
        $__internal_b1c39fce6aebe2225e6fb36703ee80b994f146e0347fac2baec8c190721c571d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1c39fce6aebe2225e6fb36703ee80b994f146e0347fac2baec8c190721c571d->enter($__internal_b1c39fce6aebe2225e6fb36703ee80b994f146e0347fac2baec8c190721c571d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Admin:detail.html.twig"));

        $__internal_4851df6e9275771a274f617b4d2a9594e4dfe39f954226ecc67aa3dac9ca9cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4851df6e9275771a274f617b4d2a9594e4dfe39f954226ecc67aa3dac9ca9cf6->enter($__internal_4851df6e9275771a274f617b4d2a9594e4dfe39f954226ecc67aa3dac9ca9cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Admin:detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1c39fce6aebe2225e6fb36703ee80b994f146e0347fac2baec8c190721c571d->leave($__internal_b1c39fce6aebe2225e6fb36703ee80b994f146e0347fac2baec8c190721c571d_prof);

        
        $__internal_4851df6e9275771a274f617b4d2a9594e4dfe39f954226ecc67aa3dac9ca9cf6->leave($__internal_4851df6e9275771a274f617b4d2a9594e4dfe39f954226ecc67aa3dac9ca9cf6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_db3265ece1e4166dcfecfd41635024d1023eece96f16cb13091f2f954234c5e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db3265ece1e4166dcfecfd41635024d1023eece96f16cb13091f2f954234c5e0->enter($__internal_db3265ece1e4166dcfecfd41635024d1023eece96f16cb13091f2f954234c5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ffcc289b3ad6fc66391f24bb572ae7bde54128a8da7b976883ef39cb71019e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffcc289b3ad6fc66391f24bb572ae7bde54128a8da7b976883ef39cb71019e07->enter($__internal_ffcc289b3ad6fc66391f24bb572ae7bde54128a8da7b976883ef39cb71019e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"jumbotron text-center\">
  <h1>Immobilier De Luxe</h1>
  <p>Réservation en cour!</p> 
</div>
  
<div class=\"container\">
  <div class=\"row\" style=\"border:solid 1px grey;width:300px;margin-left:300px;\">
    <div class=\"col-lg-2\">

    <table class=\"table\" id=\"myTable\" >
  <thead>
    <tr>
      <th>Client</th>     
      
    </tr>
  </thead>

   <tr>
    <td>
         <b>Nom du client:</b>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 22, $this->getSourceContext()); })()), "client", array()), "nomclient", array()), "html", null, true);
        echo "
         <b>TelClient:</b>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 23, $this->getSourceContext()); })()), "client", array()), "telclient", array()), "html", null, true);
        echo "
         <b>AdresseClient:</b>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 24, $this->getSourceContext()); })()), "client", array()), "adresseclient", array()), "html", null, true);
        echo "        
          <b>Email:</b>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 25, $this->getSourceContext()); })()), "client", array()), "emailclient", array()), "html", null, true);
        echo "
        </td>
      
       </div>
</tr>
</table>
        <div class=\"col-lg-2\">
         <table class=\"table\" id=\"myTable\" >
  <thead>
    <tr>
      <th>Bien</th>     
      
    </tr>
  </thead>

   <tr>
    <td> 
         
        <b> Prix_location:</b>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 43, $this->getSourceContext()); })()), "bien", array()), "prix_loc", array()), "html", null, true);
        echo "
         <b>Localité:</b>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 44, $this->getSourceContext()); })()), "bien", array()), "localite", array()), "libelleloca", array()), "html", null, true);
        echo "
         <b>Typebien:</b>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 45, $this->getSourceContext()); })()), "bien", array()), "typebien", array()), "libelletype", array()), "html", null, true);
        echo "
        
        </td>
           
              </tr>
              </table>
       </div>
        <div class=\"col-lg-2\">
         <table class=\"table\" id=\"myTable\" >
  <thead>
    <tr>
      <th>Images</th>     
      
    </tr>
  </thead>
  ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 60, $this->getSourceContext()); })()), "bien", array()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 61
            echo "     <tr>    
         <td><img  src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "image", array()), "html", null, true);
            echo "\" alt=\"\" style=\"width:100px;\"></td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "       </table>
       </div>
      
       <div class=\"col-lg-2\">
   ";
        // line 70
        echo "      ";
        // line 71
        echo "       <td><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("saveContrat", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 71, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary \"style=\"width:200px;\">Valider</a></td>
 ";
        // line 73
        echo "    </div>
      
</div>
";
        
        $__internal_ffcc289b3ad6fc66391f24bb572ae7bde54128a8da7b976883ef39cb71019e07->leave($__internal_ffcc289b3ad6fc66391f24bb572ae7bde54128a8da7b976883ef39cb71019e07_prof);

        
        $__internal_db3265ece1e4166dcfecfd41635024d1023eece96f16cb13091f2f954234c5e0->leave($__internal_db3265ece1e4166dcfecfd41635024d1023eece96f16cb13091f2f954234c5e0_prof);

    }

    public function getTemplateName()
    {
        return "GSTImmobilierBundle:Admin:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 73,  154 => 71,  152 => 70,  146 => 65,  136 => 62,  133 => 61,  129 => 60,  111 => 45,  107 => 44,  103 => 43,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block body %}
<div class=\"jumbotron text-center\">
  <h1>Immobilier De Luxe</h1>
  <p>Réservation en cour!</p> 
</div>
  
<div class=\"container\">
  <div class=\"row\" style=\"border:solid 1px grey;width:300px;margin-left:300px;\">
    <div class=\"col-lg-2\">

    <table class=\"table\" id=\"myTable\" >
  <thead>
    <tr>
      <th>Client</th>     
      
    </tr>
  </thead>

   <tr>
    <td>
         <b>Nom du client:</b>{{reservation.client.nomclient}}
         <b>TelClient:</b>{{reservation.client.telclient}}
         <b>AdresseClient:</b>{{reservation.client.adresseclient}}        
          <b>Email:</b>{{reservation.client.emailclient}}
        </td>
      
       </div>
</tr>
</table>
        <div class=\"col-lg-2\">
         <table class=\"table\" id=\"myTable\" >
  <thead>
    <tr>
      <th>Bien</th>     
      
    </tr>
  </thead>

   <tr>
    <td> 
         
        <b> Prix_location:</b>{{reservation.bien.prix_loc}}
         <b>Localité:</b>{{reservation.bien.localite.libelleloca}}
         <b>Typebien:</b>{{reservation.bien.typebien.libelletype}}
        
        </td>
           
              </tr>
              </table>
       </div>
        <div class=\"col-lg-2\">
         <table class=\"table\" id=\"myTable\" >
  <thead>
    <tr>
      <th>Images</th>     
      
    </tr>
  </thead>
  {%for image in reservation.bien.images %}
     <tr>    
         <td><img  src=\"{{ asset('image/')}}{{image.image }}\" alt=\"\" style=\"width:100px;\"></td>
          </tr>
          {% endfor %}
       </table>
       </div>
      
       <div class=\"col-lg-2\">
   {# <form method=\"post\"  style=\"display:flex;display-flex:row;list-style:none;\"> #}
      {# <input type=\"submit\" name=\"retour\" class=\"btn btn-primary \" value=\"Retour\"> #}
       <td><a href=\"{{path('saveContrat', {'id':reservation.id})}}\" class=\"btn btn-primary \"style=\"width:200px;\">Valider</a></td>
 {# </form> #}
    </div>
      
</div>
{% endblock %}
", "GSTImmobilierBundle:Admin:detail.html.twig", "/var/www/html/Agence_immobilier/Immobilier/src/GST/ImmobilierBundle/Resources/views/Admin/detail.html.twig");
    }
}
