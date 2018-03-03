<?php

/* ::layout.html.twig */
class __TwigTemplate_c1d54c28f665bd27b706ef3e43025f3b4a4f4972cb9b079d724b57c25b944f2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'nav' => array($this, 'block_nav'),
            'search' => array($this, 'block_search'),
            'content' => array($this, 'block_content'),
            'contact' => array($this, 'block_contact'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94bdcc3b3c78aebf48147423ae498dd2b6e60998d152d64ba42413d815f302ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94bdcc3b3c78aebf48147423ae498dd2b6e60998d152d64ba42413d815f302ed->enter($__internal_94bdcc3b3c78aebf48147423ae498dd2b6e60998d152d64ba42413d815f302ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_ebee18d2bc0883849a46f7132f0b6260fa9c866cdb24a373765e9d825e021023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebee18d2bc0883849a46f7132f0b6260fa9c866cdb24a373765e9d825e021023->enter($__internal_ebee18d2bc0883849a46f7132f0b6260fa9c866cdb24a373765e9d825e021023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>

<html>
";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 66
        echo "   ";
        $this->displayBlock('body', $context, $blocks);
        // line 193
        echo " 
   ";
        // line 204
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 205
        echo "  </body>

<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
";
        // line 210
        echo "</html>";
        
        $__internal_94bdcc3b3c78aebf48147423ae498dd2b6e60998d152d64ba42413d815f302ed->leave($__internal_94bdcc3b3c78aebf48147423ae498dd2b6e60998d152d64ba42413d815f302ed_prof);

        
        $__internal_ebee18d2bc0883849a46f7132f0b6260fa9c866cdb24a373765e9d825e021023->leave($__internal_ebee18d2bc0883849a46f7132f0b6260fa9c866cdb24a373765e9d825e021023_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4742b7e75728758fdeeca9b96dbbddbe5feff763e19a4e4203df875f19878d4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4742b7e75728758fdeeca9b96dbbddbe5feff763e19a4e4203df875f19878d4c->enter($__internal_4742b7e75728758fdeeca9b96dbbddbe5feff763e19a4e4203df875f19878d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_31a487f94d1807b2cb8a81ebd72b104b5546ff5a09b2319da8d7d1ed156ce6a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a487f94d1807b2cb8a81ebd72b104b5546ff5a09b2319da8d7d1ed156ce6a6->enter($__internal_31a487f94d1807b2cb8a81ebd72b104b5546ff5a09b2319da8d7d1ed156ce6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
      <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
      <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
      <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
              <script defer src=\"https://use.fontawesome.com/releases/v5.0.6/js/all.js\"></script>
           <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
             <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
             <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
       
 <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        
        .jumbotron {
            margin-bottom: 0;
            margin-top: 15;
        }
        
        
        .navbar {
            margin-bottom: 5px;;
            border-radius: 0;
            padding-left: 400px;
            font-size: 20px;
            
             background-color:#696969;
             
        }
        /* Add a gray background color and some padding to the footer */
        
       
        
        .carousel-inner img {
            width: 100%;
            /* Set width to 100% */
            margin: auto;
            height: 70px;
        }
        /* Hide the carousel text when the screen is less than 600 pixels wide */
        
        @media (max-width: 00px) {
            .carousel-caption {
                display: none;
                width
            }
            #center{
                font-size:12px;
            }
        }
                
    </style>
    </head>
    ";
        
        $__internal_31a487f94d1807b2cb8a81ebd72b104b5546ff5a09b2319da8d7d1ed156ce6a6->leave($__internal_31a487f94d1807b2cb8a81ebd72b104b5546ff5a09b2319da8d7d1ed156ce6a6_prof);

        
        $__internal_4742b7e75728758fdeeca9b96dbbddbe5feff763e19a4e4203df875f19878d4c->leave($__internal_4742b7e75728758fdeeca9b96dbbddbe5feff763e19a4e4203df875f19878d4c_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2462dcdcedd81d33f27f7da1ffb847655ac6d4d99f9dd6115bf282b3998feec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2462dcdcedd81d33f27f7da1ffb847655ac6d4d99f9dd6115bf282b3998feec->enter($__internal_f2462dcdcedd81d33f27f7da1ffb847655ac6d4d99f9dd6115bf282b3998feec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f08e54a816b5a3089cdfb95c127450f054261d17523ff7c0cedf684d32528d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f08e54a816b5a3089cdfb95c127450f054261d17523ff7c0cedf684d32528d7a->enter($__internal_f08e54a816b5a3089cdfb95c127450f054261d17523ff7c0cedf684d32528d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f08e54a816b5a3089cdfb95c127450f054261d17523ff7c0cedf684d32528d7a->leave($__internal_f08e54a816b5a3089cdfb95c127450f054261d17523ff7c0cedf684d32528d7a_prof);

        
        $__internal_f2462dcdcedd81d33f27f7da1ffb847655ac6d4d99f9dd6115bf282b3998feec->leave($__internal_f2462dcdcedd81d33f27f7da1ffb847655ac6d4d99f9dd6115bf282b3998feec_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbedc76e1bf72985bdc2619776af0d6484be6f634543422e34d535f562ff4ee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbedc76e1bf72985bdc2619776af0d6484be6f634543422e34d535f562ff4ee0->enter($__internal_fbedc76e1bf72985bdc2619776af0d6484be6f634543422e34d535f562ff4ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ce542442ecba2d0897c9b357431ad254ee39fc058aa87f7d1102b0eb630a1ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce542442ecba2d0897c9b357431ad254ee39fc058aa87f7d1102b0eb630a1ed->enter($__internal_4ce542442ecba2d0897c9b357431ad254ee39fc058aa87f7d1102b0eb630a1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 67
        echo "
<body>

";
        // line 70
        $this->displayBlock('header', $context, $blocks);
        // line 77
        echo "



";
        // line 81
        $this->displayBlock('nav', $context, $blocks);
        // line 98
        echo "
 ";
        // line 99
        $this->displayBlock('search', $context, $blocks);
        // line 143
        echo "
   ";
        // line 144
        $this->displayBlock('content', $context, $blocks);
        // line 189
        echo "   
  
    ";
        // line 191
        $this->displayBlock('contact', $context, $blocks);
        // line 192
        echo " ";
        
        $__internal_4ce542442ecba2d0897c9b357431ad254ee39fc058aa87f7d1102b0eb630a1ed->leave($__internal_4ce542442ecba2d0897c9b357431ad254ee39fc058aa87f7d1102b0eb630a1ed_prof);

        
        $__internal_fbedc76e1bf72985bdc2619776af0d6484be6f634543422e34d535f562ff4ee0->leave($__internal_fbedc76e1bf72985bdc2619776af0d6484be6f634543422e34d535f562ff4ee0_prof);

    }

    // line 70
    public function block_header($context, array $blocks = array())
    {
        $__internal_e3444152bbd9acf784982822f859b6b6c8b099e58ecf239112cc0e2191b17309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3444152bbd9acf784982822f859b6b6c8b099e58ecf239112cc0e2191b17309->enter($__internal_e3444152bbd9acf784982822f859b6b6c8b099e58ecf239112cc0e2191b17309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_48062fa72e8197c74ec7738947aa275aafb3a629fb1bb0d5d5efe0be8d7d559c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48062fa72e8197c74ec7738947aa275aafb3a629fb1bb0d5d5efe0be8d7d559c->enter($__internal_48062fa72e8197c74ec7738947aa275aafb3a629fb1bb0d5d5efe0be8d7d559c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 71
        echo "<div class=\"container\">
<div>
  <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/téléchargement.png"), "html", null, true);
        echo "\" alt=\"\" /> 
 
</div>
 ";
        
        $__internal_48062fa72e8197c74ec7738947aa275aafb3a629fb1bb0d5d5efe0be8d7d559c->leave($__internal_48062fa72e8197c74ec7738947aa275aafb3a629fb1bb0d5d5efe0be8d7d559c_prof);

        
        $__internal_e3444152bbd9acf784982822f859b6b6c8b099e58ecf239112cc0e2191b17309->leave($__internal_e3444152bbd9acf784982822f859b6b6c8b099e58ecf239112cc0e2191b17309_prof);

    }

    // line 81
    public function block_nav($context, array $blocks = array())
    {
        $__internal_d6b873f91110100db52878fdd9e6ab39b9803006e19cf1d1294776a0b770863e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b873f91110100db52878fdd9e6ab39b9803006e19cf1d1294776a0b770863e->enter($__internal_d6b873f91110100db52878fdd9e6ab39b9803006e19cf1d1294776a0b770863e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_e0d11f17c183f1fccce169597020dad82d68297aab2945821fc542bce972ff6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d11f17c183f1fccce169597020dad82d68297aab2945821fc542bce972ff6b->enter($__internal_e0d11f17c183f1fccce169597020dad82d68297aab2945821fc542bce972ff6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 82
        echo "
    <nav class=\"navbar navbar-inverse\" style=\"height:20px\">
        <div class=\"container-fluid\">

            <div class=\"collapse   navbar-collapse\" id=\"myNavbar\" >
                <ul class=\"nav navbar-nav \" id=\"centrer\">
                    <li ><a href=\"#\" style=\"color:white;font-size:16px;\">Accueil</a></li>
                    <li><a href=\"#\" style=\"color:white;font-size:16px;\">Nos Biens</a></li>
                    <li><a href=\"#\" style=\"color:white;font-size:16px;\">A Propros</a></li>
                    <li><a href=\"#\" style=\"color:white;font-size:16px;\">Mon Compte</a></li>
                </ul>

            </div>
        </div>
    </nav>
    ";
        
        $__internal_e0d11f17c183f1fccce169597020dad82d68297aab2945821fc542bce972ff6b->leave($__internal_e0d11f17c183f1fccce169597020dad82d68297aab2945821fc542bce972ff6b_prof);

        
        $__internal_d6b873f91110100db52878fdd9e6ab39b9803006e19cf1d1294776a0b770863e->leave($__internal_d6b873f91110100db52878fdd9e6ab39b9803006e19cf1d1294776a0b770863e_prof);

    }

    // line 99
    public function block_search($context, array $blocks = array())
    {
        $__internal_78883d48628deb7fb6d349a72e9a1868b701684511339973ee5de68e19a10c39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78883d48628deb7fb6d349a72e9a1868b701684511339973ee5de68e19a10c39->enter($__internal_78883d48628deb7fb6d349a72e9a1868b701684511339973ee5de68e19a10c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search"));

        $__internal_bbe4c72f16e9caa0d2ef0b6c4d698fe3ce21b79533a86ffd4597ecb16cc87f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe4c72f16e9caa0d2ef0b6c4d698fe3ce21b79533a86ffd4597ecb16cc87f04->enter($__internal_bbe4c72f16e9caa0d2ef0b6c4d698fe3ce21b79533a86ffd4597ecb16cc87f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search"));

        // line 100
        echo "    <form method=\"post\">
<div class=\"form-group \" style=\"width:900px; display:flex; margin-left:493px; \" >
    <div class=\"form-group\">
    <div class=\"icon-addon addon-sm\">

        <select class=\"form-control input-sm\" name=\"localite\">
         <option placeholder=\"choisir une localité\"></option>
                 ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["localites"]) || array_key_exists("localites", $context) ? $context["localites"] : (function () { throw new Twig_Error_Runtime('Variable "localites" does not exist.', 107, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 108
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
        // line 110
        echo "        </select>
        <i class=\"icon icon-search\"></i>
    </div>
    
</div><br>
     <div class=\"form-group\" style=\"margin-top:-20\">
    <div class=\"icon-addon addon-sm\">
        <select class=\"form-control input-sm\" name=\"typebien\">
          <option value>choisir un type de bien</option>
              ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new Twig_Error_Runtime('Variable "types" does not exist.', 119, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            echo "              
                 <option value=\"";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["type"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["type"], "libelletype", array()), "html", null, true);
            echo " </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "        </select>

        
        <i class=\"icon icon-search\"></i>
    </div>
</div>
    &nbsp;&nbsp;&nbsp;

    <input type=\"text\" placeholder=\"prix \" name=\"prix_loc\" class=\"form-control left-rounded\" 
    style=\"width:120px\">

&nbsp;&nbsp;&nbsp;


    <i class=\"icon icon-search\"></i>
        <span class=\"input-group-btn\">
      <button class=\"btn btn-outline-primary my-2 my-sm-0\" type=\"submit\" value=\"Recherche\">Recherche</button>
        </span>
</div>
</form>
  ";
        
        $__internal_bbe4c72f16e9caa0d2ef0b6c4d698fe3ce21b79533a86ffd4597ecb16cc87f04->leave($__internal_bbe4c72f16e9caa0d2ef0b6c4d698fe3ce21b79533a86ffd4597ecb16cc87f04_prof);

        
        $__internal_78883d48628deb7fb6d349a72e9a1868b701684511339973ee5de68e19a10c39->leave($__internal_78883d48628deb7fb6d349a72e9a1868b701684511339973ee5de68e19a10c39_prof);

    }

    // line 144
    public function block_content($context, array $blocks = array())
    {
        $__internal_9fadc89dae01d19fb7a437001b93bc730fcb832707056ea86efbea9439f64c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fadc89dae01d19fb7a437001b93bc730fcb832707056ea86efbea9439f64c53->enter($__internal_9fadc89dae01d19fb7a437001b93bc730fcb832707056ea86efbea9439f64c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_354ac6b85843bfc71bcfd29a4c54d68f037fd430266c695f7cd2cbf236a8a8a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354ac6b85843bfc71bcfd29a4c54d68f037fd430266c695f7cd2cbf236a8a8a5->enter($__internal_354ac6b85843bfc71bcfd29a4c54d68f037fd430266c695f7cd2cbf236a8a8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 145
        echo "   <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
      <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">
      <div class=\"item active\">
        <img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/img.jpg"), "html", null, true);
        echo "\" alt=\"Image\">

      </div>

      <div class=\"item\">
        <img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/Senegalnew.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
        
        
      </div>

      <div class=\"item\">
        <img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/tof.JPG"), "html", null, true);
        echo "\" alt=\"Image\">
      
      </div>

      <div class=\"item\">
        <img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/img1.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
      
      </div>
   </div>

    <!-- Left and right controls -->
    <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
      <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
      <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
</div>

  ";
        
        $__internal_354ac6b85843bfc71bcfd29a4c54d68f037fd430266c695f7cd2cbf236a8a8a5->leave($__internal_354ac6b85843bfc71bcfd29a4c54d68f037fd430266c695f7cd2cbf236a8a8a5_prof);

        
        $__internal_9fadc89dae01d19fb7a437001b93bc730fcb832707056ea86efbea9439f64c53->leave($__internal_9fadc89dae01d19fb7a437001b93bc730fcb832707056ea86efbea9439f64c53_prof);

    }

    // line 191
    public function block_contact($context, array $blocks = array())
    {
        $__internal_fddc4af7effb7e660647293e29acbc7e37295fb17d48716a36c4fef5eb6f6bcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fddc4af7effb7e660647293e29acbc7e37295fb17d48716a36c4fef5eb6f6bcc->enter($__internal_fddc4af7effb7e660647293e29acbc7e37295fb17d48716a36c4fef5eb6f6bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        $__internal_3ac26329aba50f7bcf5381e2fb8cba8dbcea0127c9d425618a926e71fb968270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac26329aba50f7bcf5381e2fb8cba8dbcea0127c9d425618a926e71fb968270->enter($__internal_3ac26329aba50f7bcf5381e2fb8cba8dbcea0127c9d425618a926e71fb968270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        echo "  ";
        
        $__internal_3ac26329aba50f7bcf5381e2fb8cba8dbcea0127c9d425618a926e71fb968270->leave($__internal_3ac26329aba50f7bcf5381e2fb8cba8dbcea0127c9d425618a926e71fb968270_prof);

        
        $__internal_fddc4af7effb7e660647293e29acbc7e37295fb17d48716a36c4fef5eb6f6bcc->leave($__internal_fddc4af7effb7e660647293e29acbc7e37295fb17d48716a36c4fef5eb6f6bcc_prof);

    }

    // line 204
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1a76daab855c9dd08b3dfbc96242599acbd7350ab720a4d6ffd4d1f284e85baa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a76daab855c9dd08b3dfbc96242599acbd7350ab720a4d6ffd4d1f284e85baa->enter($__internal_1a76daab855c9dd08b3dfbc96242599acbd7350ab720a4d6ffd4d1f284e85baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0320f24ff9c7086421cd848401391822dc493cd0ce7caf8190574c7e07251ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0320f24ff9c7086421cd848401391822dc493cd0ce7caf8190574c7e07251ed0->enter($__internal_0320f24ff9c7086421cd848401391822dc493cd0ce7caf8190574c7e07251ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0320f24ff9c7086421cd848401391822dc493cd0ce7caf8190574c7e07251ed0->leave($__internal_0320f24ff9c7086421cd848401391822dc493cd0ce7caf8190574c7e07251ed0_prof);

        
        $__internal_1a76daab855c9dd08b3dfbc96242599acbd7350ab720a4d6ffd4d1f284e85baa->leave($__internal_1a76daab855c9dd08b3dfbc96242599acbd7350ab720a4d6ffd4d1f284e85baa_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  475 => 204,  457 => 191,  430 => 173,  422 => 168,  413 => 162,  405 => 157,  391 => 145,  382 => 144,  352 => 122,  342 => 120,  336 => 119,  325 => 110,  314 => 108,  310 => 107,  301 => 100,  292 => 99,  267 => 82,  258 => 81,  244 => 73,  240 => 71,  231 => 70,  221 => 192,  219 => 191,  215 => 189,  213 => 144,  210 => 143,  208 => 99,  205 => 98,  203 => 81,  197 => 77,  195 => 70,  190 => 67,  181 => 66,  163 => 8,  108 => 21,  104 => 20,  100 => 19,  96 => 18,  85 => 10,  80 => 8,  76 => 6,  67 => 5,  57 => 210,  51 => 205,  48 => 204,  45 => 193,  42 => 66,  40 => 5,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>

<html>
{% block stylesheets %}
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
    
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
      <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
      <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
      <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
              <script defer src=\"https://use.fontawesome.com/releases/v5.0.6/js/all.js\"></script>
           <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
             <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
             <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
       
 <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        
        .jumbotron {
            margin-bottom: 0;
            margin-top: 15;
        }
        
        
        .navbar {
            margin-bottom: 5px;;
            border-radius: 0;
            padding-left: 400px;
            font-size: 20px;
            
             background-color:#696969;
             
        }
        /* Add a gray background color and some padding to the footer */
        
       
        
        .carousel-inner img {
            width: 100%;
            /* Set width to 100% */
            margin: auto;
            height: 70px;
        }
        /* Hide the carousel text when the screen is less than 600 pixels wide */
        
        @media (max-width: 00px) {
            .carousel-caption {
                display: none;
                width
            }
            #center{
                font-size:12px;
            }
        }
                
    </style>
    </head>
    {% endblock %}
   {% block body %}

<body>

{% block header %}
<div class=\"container\">
<div>
  <img src=\"{{asset('image/téléchargement.png')}}\" alt=\"\" /> 
 
</div>
 {% endblock %}




{% block nav %}

    <nav class=\"navbar navbar-inverse\" style=\"height:20px\">
        <div class=\"container-fluid\">

            <div class=\"collapse   navbar-collapse\" id=\"myNavbar\" >
                <ul class=\"nav navbar-nav \" id=\"centrer\">
                    <li ><a href=\"#\" style=\"color:white;font-size:16px;\">Accueil</a></li>
                    <li><a href=\"#\" style=\"color:white;font-size:16px;\">Nos Biens</a></li>
                    <li><a href=\"#\" style=\"color:white;font-size:16px;\">A Propros</a></li>
                    <li><a href=\"#\" style=\"color:white;font-size:16px;\">Mon Compte</a></li>
                </ul>

            </div>
        </div>
    </nav>
    {% endblock %}

 {% block search %}
    <form method=\"post\">
<div class=\"form-group \" style=\"width:900px; display:flex; margin-left:493px; \" >
    <div class=\"form-group\">
    <div class=\"icon-addon addon-sm\">

        <select class=\"form-control input-sm\" name=\"localite\">
         <option placeholder=\"choisir une localité\"></option>
                 {% for localite in localites %}
                    <option value=\"{{ localite.id }}\">{{ localite.libelleloca }}</option>
                    {% endfor %}
        </select>
        <i class=\"icon icon-search\"></i>
    </div>
    
</div><br>
     <div class=\"form-group\" style=\"margin-top:-20\">
    <div class=\"icon-addon addon-sm\">
        <select class=\"form-control input-sm\" name=\"typebien\">
          <option value>choisir un type de bien</option>
              {% for type in types %}              
                 <option value=\"{{ type.id }}\"> {{type.libelletype}} </option>
            {% endfor %}
        </select>

        
        <i class=\"icon icon-search\"></i>
    </div>
</div>
    &nbsp;&nbsp;&nbsp;

    <input type=\"text\" placeholder=\"prix \" name=\"prix_loc\" class=\"form-control left-rounded\" 
    style=\"width:120px\">

&nbsp;&nbsp;&nbsp;


    <i class=\"icon icon-search\"></i>
        <span class=\"input-group-btn\">
      <button class=\"btn btn-outline-primary my-2 my-sm-0\" type=\"submit\" value=\"Recherche\">Recherche</button>
        </span>
</div>
</form>
  {% endblock %}

   {% block content %}
   <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
      <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">
      <div class=\"item active\">
        <img src=\"{{asset('image/img.jpg')}}\" alt=\"Image\">

      </div>

      <div class=\"item\">
        <img src=\"{{asset('image/Senegalnew.jpg')}}\" alt=\"Image\">
        
        
      </div>

      <div class=\"item\">
        <img src=\"{{asset('image/tof.JPG')}}\" alt=\"Image\">
      
      </div>

      <div class=\"item\">
        <img src=\"{{asset('image/img1.jpg')}}\" alt=\"Image\">
      
      </div>
   </div>

    <!-- Left and right controls -->
    <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
      <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
      <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
</div>

  {% endblock %}   
  
    {% block contact %}  {% endblock %}
 {% endblock %}
 
   {# {% block footer %}
  <footer>
 <div class=\"row\" >
 <div class=\"col-sm-12 \" style=\"width:900%; height:300px;margin-top:400px;background:black;margin-rigth:500px;\">
 sxjbnefrgiezhd
 </div>
 </div>
   
  </footer>
  {% endblock %} #}
    {% block javascripts %}{% endblock %}
  </body>

<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
{# <script src=\"{{asset('js/map.js')}}\"></script> #}
</html>", "::layout.html.twig", "/var/www/html/Agence_immobilier/Immobilier/app/Resources/views/layout.html.twig");
    }
}
