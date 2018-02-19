<?php

/* GSTImmobilierBundle:Front:reservation.html.twig */
class __TwigTemplate_db4cb15c98e32d47a7c84223e5c0e7aa4a38eaef1a91207e31ee54d1711fcd59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GSTImmobilierBundle:Default:index.html.twig", "GSTImmobilierBundle:Front:reservation.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GSTImmobilierBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de8d42e7b76b6702323d1c77901566b76055ef6b50e01a5ef915ebb04eb87956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de8d42e7b76b6702323d1c77901566b76055ef6b50e01a5ef915ebb04eb87956->enter($__internal_de8d42e7b76b6702323d1c77901566b76055ef6b50e01a5ef915ebb04eb87956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Front:reservation.html.twig"));

        $__internal_9f3133799999f30e8e1eeb5034086d75022f43fa13b311136921a060e71cd05e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f3133799999f30e8e1eeb5034086d75022f43fa13b311136921a060e71cd05e->enter($__internal_9f3133799999f30e8e1eeb5034086d75022f43fa13b311136921a060e71cd05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Front:reservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de8d42e7b76b6702323d1c77901566b76055ef6b50e01a5ef915ebb04eb87956->leave($__internal_de8d42e7b76b6702323d1c77901566b76055ef6b50e01a5ef915ebb04eb87956_prof);

        
        $__internal_9f3133799999f30e8e1eeb5034086d75022f43fa13b311136921a060e71cd05e->leave($__internal_9f3133799999f30e8e1eeb5034086d75022f43fa13b311136921a060e71cd05e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9c67794b5a18c344f041f125bb259139cd0dc49983d1a1921ced7e313127878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9c67794b5a18c344f041f125bb259139cd0dc49983d1a1921ced7e313127878->enter($__internal_b9c67794b5a18c344f041f125bb259139cd0dc49983d1a1921ced7e313127878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e2440ee44a21bb5b65c42616934e68cf0d25e566d73498ad78861d8c2ebf7162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2440ee44a21bb5b65c42616934e68cf0d25e566d73498ad78861d8c2ebf7162->enter($__internal_e2440ee44a21bb5b65c42616934e68cf0d25e566d73498ad78861d8c2ebf7162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GSTImmobilierBundle:Front:reserver";
        
        $__internal_e2440ee44a21bb5b65c42616934e68cf0d25e566d73498ad78861d8c2ebf7162->leave($__internal_e2440ee44a21bb5b65c42616934e68cf0d25e566d73498ad78861d8c2ebf7162_prof);

        
        $__internal_b9c67794b5a18c344f041f125bb259139cd0dc49983d1a1921ced7e313127878->leave($__internal_b9c67794b5a18c344f041f125bb259139cd0dc49983d1a1921ced7e313127878_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_64abfbf39f5cc576b5ec678f4f114bfc3586104c9d21c4cd32a9c3a44474f262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64abfbf39f5cc576b5ec678f4f114bfc3586104c9d21c4cd32a9c3a44474f262->enter($__internal_64abfbf39f5cc576b5ec678f4f114bfc3586104c9d21c4cd32a9c3a44474f262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7284fcabf0c4fbb8172addc4823705be8bc8602849c61e77b4009d5af73ed91b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7284fcabf0c4fbb8172addc4823705be8bc8602849c61e77b4009d5af73ed91b->enter($__internal_7284fcabf0c4fbb8172addc4823705be8bc8602849c61e77b4009d5af73ed91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-sm-4\">
      <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">MAISON</div>
        <div class=\"panel-body\"><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/41492.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"></div>
        <div class=\"panel-footer\">King immo met à votre disposition cette magnifique maison disposant 4 chambres, salon; salle à manger, 4 salles de bain, garages, 2 cuisines.......</div>
      <div class=\"container\">
  <!-- Trigger the modal with a button -->
  <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">reserver</button>

  <!-- Modal -->
  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog\">
    
      <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-body\">
          <p>reservation prise en charge</p>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
      </div>
    </div>
    <div class=\"col-sm-4\"> 
      <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">VILLA</div>
        <div class=\"panel-body\"><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/916443_1.jpg"), "html", null, true);
        echo " \" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"></div>
        <div class=\"panel-footer\">Villa à louer à Keur Massar composée de 3 chambres salon dont 2 salles de bain avec 2 toilettes extérieurs cuisine.</div>
      <div class=\"container\">
  <!-- Trigger the modal with a button -->
  <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">reserver</button>

  <!-- Modal -->
  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog\">
    
      <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-body\">
          <p></p>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
      </div>
    </div>
    <div class=\"col-sm-4\"> 
      <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">APPARTEMENT</div>
        <div class=\"panel-body\"><img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/vente-appartement-saly diaksao-senegal-02.jpg"), "html", null, true);
        echo " \" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"></div>
        <div class=\"panel-footer\">Buy 50 mobiles and get a gift card</div>
<div class=\"container\">
  <!-- Trigger the modal with a button -->
  <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">reserver</button>

  <!-- Modal -->
  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog\">
    
      <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-body\">
          <p>reservatin prise en charge</p>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>      </div>
    </div>
  </div>
</div><br>

<div class=\"container\">    
  <div class=\"row\">
    <div class=\"col-sm-4\">
      <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">STUDIO</div>
        <div class=\"panel-body\"><img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/location-vacance-a-dakar.jpg"), "html", null, true);
        echo " \" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"></div>
        <div class=\"panel-footer\">Buy 50 mobiles and get a gift card</div>
<div class=\"container\">
  <!-- Trigger the modal with a button -->
  <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">reserver</button>

  <!-- Modal -->
  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog\">
    
      <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-body\">
          <p>reservatin prise en charge</p>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>      </div>
    </div>
    <div class=\"col-sm-4\"> 
      <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">MAISON</div>
        <div class=\"panel-body\"><img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/7410418-11415840.jpg"), "html", null, true);
        echo " \" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"></div>
        <div class=\"panel-footer\">Louer cette superbe villa au virage une maison composée de 5 chambres avec placards 3 salles de bains WC garage cour 2 cuisines 2 salons petit jardin.</div>
<div class=\"container\">
  <!-- Trigger the modal with a button -->
  <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">reserver</button>

  <!-- Modal -->
  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog\">
    
      <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-body\">
          <p>reservatin prise en charge</p>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>      </div>
    </div>
    <div class=\"col-sm-4\"> 
      <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">APPARTEMENT</div>
        <div class=\"panel-body\"><img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/72608.jpg"), "html", null, true);
        echo " \" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"></div>
        <div class=\"panel-footer\">il se compose d'un grand hall d’entrée, w.c visiteur, d'une cuisine équipée, buanderie, d'un beau séjour avec petite terrasse, de 2 grandes chambres d'enfants avec salle d'eau attenante et placards, et d'une grande chambre principale avec grande terrasse privative, dressing et salle de bain.</div>
<div class=\"container\">
  <!-- Trigger the modal with a button -->
  <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">reserver</button>

  <!-- Modal -->
  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog\">
    
      <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-body\">
          <p>reservatin prise en charge</p>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>      </div>
    </div>
  </div>
</div><br><br>
        ";
        
        $__internal_7284fcabf0c4fbb8172addc4823705be8bc8602849c61e77b4009d5af73ed91b->leave($__internal_7284fcabf0c4fbb8172addc4823705be8bc8602849c61e77b4009d5af73ed91b_prof);

        
        $__internal_64abfbf39f5cc576b5ec678f4f114bfc3586104c9d21c4cd32a9c3a44474f262->leave($__internal_64abfbf39f5cc576b5ec678f4f114bfc3586104c9d21c4cd32a9c3a44474f262_prof);

    }

    public function getTemplateName()
    {
        return "GSTImmobilierBundle:Front:reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 158,  206 => 130,  175 => 102,  139 => 69,  107 => 40,  75 => 11,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {% extends 'GSTImmobilierBundle:Default:index.html.twig'   %} 
 
{% block title %}GSTImmobilierBundle:Front:reserver{% endblock %}

{% block body %}
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-sm-4\">
      <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">MAISON</div>
        <div class=\"panel-body\"><img src=\"{{asset('image/41492.jpg')}}\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"></div>
        <div class=\"panel-footer\">King immo met à votre disposition cette magnifique maison disposant 4 chambres, salon; salle à manger, 4 salles de bain, garages, 2 cuisines.......</div>
      <div class=\"container\">
  <!-- Trigger the modal with a button -->
  <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">reserver</button>

  <!-- Modal -->
  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog\">
    
      <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-body\">
          <p>reservation prise en charge</p>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
      </div>
    </div>
    <div class=\"col-sm-4\"> 
      <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">VILLA</div>
        <div class=\"panel-body\"><img src=\"{{asset('image/916443_1.jpg')}} \" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"></div>
        <div class=\"panel-footer\">Villa à louer à Keur Massar composée de 3 chambres salon dont 2 salles de bain avec 2 toilettes extérieurs cuisine.</div>
      <div class=\"container\">
  <!-- Trigger the modal with a button -->
  <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">reserver</button>

  <!-- Modal -->
  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog\">
    
      <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-body\">
          <p></p>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
      </div>
    </div>
    <div class=\"col-sm-4\"> 
      <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">APPARTEMENT</div>
        <div class=\"panel-body\"><img src=\"{{asset('image/vente-appartement-saly diaksao-senegal-02.jpg')}} \" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"></div>
        <div class=\"panel-footer\">Buy 50 mobiles and get a gift card</div>
<div class=\"container\">
  <!-- Trigger the modal with a button -->
  <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">reserver</button>

  <!-- Modal -->
  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog\">
    
      <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-body\">
          <p>reservatin prise en charge</p>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>      </div>
    </div>
  </div>
</div><br>

<div class=\"container\">    
  <div class=\"row\">
    <div class=\"col-sm-4\">
      <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">STUDIO</div>
        <div class=\"panel-body\"><img src=\"{{asset('image/location-vacance-a-dakar.jpg')}} \" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"></div>
        <div class=\"panel-footer\">Buy 50 mobiles and get a gift card</div>
<div class=\"container\">
  <!-- Trigger the modal with a button -->
  <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">reserver</button>

  <!-- Modal -->
  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog\">
    
      <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-body\">
          <p>reservatin prise en charge</p>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>      </div>
    </div>
    <div class=\"col-sm-4\"> 
      <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">MAISON</div>
        <div class=\"panel-body\"><img src=\"{{asset('image/7410418-11415840.jpg')}} \" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"></div>
        <div class=\"panel-footer\">Louer cette superbe villa au virage une maison composée de 5 chambres avec placards 3 salles de bains WC garage cour 2 cuisines 2 salons petit jardin.</div>
<div class=\"container\">
  <!-- Trigger the modal with a button -->
  <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">reserver</button>

  <!-- Modal -->
  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog\">
    
      <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-body\">
          <p>reservatin prise en charge</p>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>      </div>
    </div>
    <div class=\"col-sm-4\"> 
      <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">APPARTEMENT</div>
        <div class=\"panel-body\"><img src=\"{{asset('image/72608.jpg')}} \" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"></div>
        <div class=\"panel-footer\">il se compose d'un grand hall d’entrée, w.c visiteur, d'une cuisine équipée, buanderie, d'un beau séjour avec petite terrasse, de 2 grandes chambres d'enfants avec salle d'eau attenante et placards, et d'une grande chambre principale avec grande terrasse privative, dressing et salle de bain.</div>
<div class=\"container\">
  <!-- Trigger the modal with a button -->
  <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">reserver</button>

  <!-- Modal -->
  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog\">
    
      <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-body\">
          <p>reservatin prise en charge</p>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>      </div>
    </div>
  </div>
</div><br><br>
        {% endblock %}

", "GSTImmobilierBundle:Front:reservation.html.twig", "/var/www/html/Agence_immobilier/Immobilier/src/GST/ImmobilierBundle/Resources/views/Front/reservation.html.twig");
    }
}
