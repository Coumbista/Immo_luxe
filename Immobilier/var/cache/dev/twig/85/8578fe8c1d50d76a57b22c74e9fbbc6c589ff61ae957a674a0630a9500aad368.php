<?php

/* ::layout.html.twig */
class __TwigTemplate_ce9fc11672234fc82c3a944478c40340c2902458cf6b826e094b56e1b615600d extends Twig_Template
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
        $__internal_4056f4834b1377fca497263dd14b5584834bd4458c758bd0ba34cb249de3f68d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4056f4834b1377fca497263dd14b5584834bd4458c758bd0ba34cb249de3f68d->enter($__internal_4056f4834b1377fca497263dd14b5584834bd4458c758bd0ba34cb249de3f68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_c8a036c56dc6a76846e0fe72db43d9c759d9cfffe8bdc21ffc1861489019bf0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a036c56dc6a76846e0fe72db43d9c759d9cfffe8bdc21ffc1861489019bf0c->enter($__internal_c8a036c56dc6a76846e0fe72db43d9c759d9cfffe8bdc21ffc1861489019bf0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_4056f4834b1377fca497263dd14b5584834bd4458c758bd0ba34cb249de3f68d->leave($__internal_4056f4834b1377fca497263dd14b5584834bd4458c758bd0ba34cb249de3f68d_prof);

        
        $__internal_c8a036c56dc6a76846e0fe72db43d9c759d9cfffe8bdc21ffc1861489019bf0c->leave($__internal_c8a036c56dc6a76846e0fe72db43d9c759d9cfffe8bdc21ffc1861489019bf0c_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b2986c9bc4b510abdd17d09b7dbb35d276bda269038a8afa50f9d1869cae19d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2986c9bc4b510abdd17d09b7dbb35d276bda269038a8afa50f9d1869cae19d7->enter($__internal_b2986c9bc4b510abdd17d09b7dbb35d276bda269038a8afa50f9d1869cae19d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_48aa61ee268bcf8c6ccf63fa3bb09c18d4bbaf4a4a54b7625971d4ad043b1812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48aa61ee268bcf8c6ccf63fa3bb09c18d4bbaf4a4a54b7625971d4ad043b1812->enter($__internal_48aa61ee268bcf8c6ccf63fa3bb09c18d4bbaf4a4a54b7625971d4ad043b1812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_48aa61ee268bcf8c6ccf63fa3bb09c18d4bbaf4a4a54b7625971d4ad043b1812->leave($__internal_48aa61ee268bcf8c6ccf63fa3bb09c18d4bbaf4a4a54b7625971d4ad043b1812_prof);

        
        $__internal_b2986c9bc4b510abdd17d09b7dbb35d276bda269038a8afa50f9d1869cae19d7->leave($__internal_b2986c9bc4b510abdd17d09b7dbb35d276bda269038a8afa50f9d1869cae19d7_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4a1d0a14a9e7d6e2c1bf1b8d668bd022de4b795fefe56a2398b84f63061b13b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a1d0a14a9e7d6e2c1bf1b8d668bd022de4b795fefe56a2398b84f63061b13b->enter($__internal_d4a1d0a14a9e7d6e2c1bf1b8d668bd022de4b795fefe56a2398b84f63061b13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_61b3249644bdf7b83b8938c3bb24eb3e57c6836a791ac7ce238af208aaacae8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61b3249644bdf7b83b8938c3bb24eb3e57c6836a791ac7ce238af208aaacae8c->enter($__internal_61b3249644bdf7b83b8938c3bb24eb3e57c6836a791ac7ce238af208aaacae8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_61b3249644bdf7b83b8938c3bb24eb3e57c6836a791ac7ce238af208aaacae8c->leave($__internal_61b3249644bdf7b83b8938c3bb24eb3e57c6836a791ac7ce238af208aaacae8c_prof);

        
        $__internal_d4a1d0a14a9e7d6e2c1bf1b8d668bd022de4b795fefe56a2398b84f63061b13b->leave($__internal_d4a1d0a14a9e7d6e2c1bf1b8d668bd022de4b795fefe56a2398b84f63061b13b_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_09a13df7e83757ab5830d0c797f80560efa513f58a0dcc85d17225fc0c89b0c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09a13df7e83757ab5830d0c797f80560efa513f58a0dcc85d17225fc0c89b0c4->enter($__internal_09a13df7e83757ab5830d0c797f80560efa513f58a0dcc85d17225fc0c89b0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_857505f8c82c3eb06c6f552442169aba730858a488040e5f6a82c6c91f6ece45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_857505f8c82c3eb06c6f552442169aba730858a488040e5f6a82c6c91f6ece45->enter($__internal_857505f8c82c3eb06c6f552442169aba730858a488040e5f6a82c6c91f6ece45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_857505f8c82c3eb06c6f552442169aba730858a488040e5f6a82c6c91f6ece45->leave($__internal_857505f8c82c3eb06c6f552442169aba730858a488040e5f6a82c6c91f6ece45_prof);

        
        $__internal_09a13df7e83757ab5830d0c797f80560efa513f58a0dcc85d17225fc0c89b0c4->leave($__internal_09a13df7e83757ab5830d0c797f80560efa513f58a0dcc85d17225fc0c89b0c4_prof);

    }

    // line 70
    public function block_header($context, array $blocks = array())
    {
        $__internal_3d228cdb78b506f5cfdd9255043d464675c8aeb5d2660c65065be8d23e1ba844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d228cdb78b506f5cfdd9255043d464675c8aeb5d2660c65065be8d23e1ba844->enter($__internal_3d228cdb78b506f5cfdd9255043d464675c8aeb5d2660c65065be8d23e1ba844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_9fc5486e76009c3d9bfce8bb6d5618fb26f4e282650a22285a495f7c1d09b39e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc5486e76009c3d9bfce8bb6d5618fb26f4e282650a22285a495f7c1d09b39e->enter($__internal_9fc5486e76009c3d9bfce8bb6d5618fb26f4e282650a22285a495f7c1d09b39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 71
        echo "<div class=\"container\">
<div>
  <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/téléchargement.png"), "html", null, true);
        echo "\" alt=\"\" /> 
 
</div>
 ";
        
        $__internal_9fc5486e76009c3d9bfce8bb6d5618fb26f4e282650a22285a495f7c1d09b39e->leave($__internal_9fc5486e76009c3d9bfce8bb6d5618fb26f4e282650a22285a495f7c1d09b39e_prof);

        
        $__internal_3d228cdb78b506f5cfdd9255043d464675c8aeb5d2660c65065be8d23e1ba844->leave($__internal_3d228cdb78b506f5cfdd9255043d464675c8aeb5d2660c65065be8d23e1ba844_prof);

    }

    // line 81
    public function block_nav($context, array $blocks = array())
    {
        $__internal_3235d93d08e8e3787c513c0c56a7cd641d92747279526f0520a60b01316dbcb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3235d93d08e8e3787c513c0c56a7cd641d92747279526f0520a60b01316dbcb8->enter($__internal_3235d93d08e8e3787c513c0c56a7cd641d92747279526f0520a60b01316dbcb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_568cfb1796ef64bb711386c2b66c01421cb69c1838e115bfe67e466c244677f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568cfb1796ef64bb711386c2b66c01421cb69c1838e115bfe67e466c244677f8->enter($__internal_568cfb1796ef64bb711386c2b66c01421cb69c1838e115bfe67e466c244677f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
        
        $__internal_568cfb1796ef64bb711386c2b66c01421cb69c1838e115bfe67e466c244677f8->leave($__internal_568cfb1796ef64bb711386c2b66c01421cb69c1838e115bfe67e466c244677f8_prof);

        
        $__internal_3235d93d08e8e3787c513c0c56a7cd641d92747279526f0520a60b01316dbcb8->leave($__internal_3235d93d08e8e3787c513c0c56a7cd641d92747279526f0520a60b01316dbcb8_prof);

    }

    // line 99
    public function block_search($context, array $blocks = array())
    {
        $__internal_251784ee996bedb20a49685be22f6a3c640577df17121948f00309048fc257e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_251784ee996bedb20a49685be22f6a3c640577df17121948f00309048fc257e3->enter($__internal_251784ee996bedb20a49685be22f6a3c640577df17121948f00309048fc257e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search"));

        $__internal_e1f107dba7ff0163e1e844310eccb1119a703c904b8c79aa415e42c2852dd9e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f107dba7ff0163e1e844310eccb1119a703c904b8c79aa415e42c2852dd9e4->enter($__internal_e1f107dba7ff0163e1e844310eccb1119a703c904b8c79aa415e42c2852dd9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search"));

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
        
        $__internal_e1f107dba7ff0163e1e844310eccb1119a703c904b8c79aa415e42c2852dd9e4->leave($__internal_e1f107dba7ff0163e1e844310eccb1119a703c904b8c79aa415e42c2852dd9e4_prof);

        
        $__internal_251784ee996bedb20a49685be22f6a3c640577df17121948f00309048fc257e3->leave($__internal_251784ee996bedb20a49685be22f6a3c640577df17121948f00309048fc257e3_prof);

    }

    // line 144
    public function block_content($context, array $blocks = array())
    {
        $__internal_6b80001448d34d943f40dc4541dacaff72ea7fe77b7669ecf72a5362fe0c9312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b80001448d34d943f40dc4541dacaff72ea7fe77b7669ecf72a5362fe0c9312->enter($__internal_6b80001448d34d943f40dc4541dacaff72ea7fe77b7669ecf72a5362fe0c9312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d0ad9a8baaa44dcd5ecaa28ac4187e64f61702c53f592087f1dce7fb18031d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ad9a8baaa44dcd5ecaa28ac4187e64f61702c53f592087f1dce7fb18031d22->enter($__internal_d0ad9a8baaa44dcd5ecaa28ac4187e64f61702c53f592087f1dce7fb18031d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_d0ad9a8baaa44dcd5ecaa28ac4187e64f61702c53f592087f1dce7fb18031d22->leave($__internal_d0ad9a8baaa44dcd5ecaa28ac4187e64f61702c53f592087f1dce7fb18031d22_prof);

        
        $__internal_6b80001448d34d943f40dc4541dacaff72ea7fe77b7669ecf72a5362fe0c9312->leave($__internal_6b80001448d34d943f40dc4541dacaff72ea7fe77b7669ecf72a5362fe0c9312_prof);

    }

    // line 191
    public function block_contact($context, array $blocks = array())
    {
        $__internal_f1e7195d5e3d89f0495ffa1e11ff7fcbcacbe75cf689d6d23913f1acae72c6a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1e7195d5e3d89f0495ffa1e11ff7fcbcacbe75cf689d6d23913f1acae72c6a6->enter($__internal_f1e7195d5e3d89f0495ffa1e11ff7fcbcacbe75cf689d6d23913f1acae72c6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        $__internal_e57416970f5833d7ce9f7b510e32b9d37001eee04f93af7adbd0d91eb7326728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e57416970f5833d7ce9f7b510e32b9d37001eee04f93af7adbd0d91eb7326728->enter($__internal_e57416970f5833d7ce9f7b510e32b9d37001eee04f93af7adbd0d91eb7326728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        echo "  ";
        
        $__internal_e57416970f5833d7ce9f7b510e32b9d37001eee04f93af7adbd0d91eb7326728->leave($__internal_e57416970f5833d7ce9f7b510e32b9d37001eee04f93af7adbd0d91eb7326728_prof);

        
        $__internal_f1e7195d5e3d89f0495ffa1e11ff7fcbcacbe75cf689d6d23913f1acae72c6a6->leave($__internal_f1e7195d5e3d89f0495ffa1e11ff7fcbcacbe75cf689d6d23913f1acae72c6a6_prof);

    }

    // line 204
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_10532710ca4e752143221d67e3b97ba83fbce3975c2a6c6e2c4470f29bd52cc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10532710ca4e752143221d67e3b97ba83fbce3975c2a6c6e2c4470f29bd52cc0->enter($__internal_10532710ca4e752143221d67e3b97ba83fbce3975c2a6c6e2c4470f29bd52cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_398bde6ba451295e8112656a695cb1093dcde057edb687ee21957a129e27527f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398bde6ba451295e8112656a695cb1093dcde057edb687ee21957a129e27527f->enter($__internal_398bde6ba451295e8112656a695cb1093dcde057edb687ee21957a129e27527f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_398bde6ba451295e8112656a695cb1093dcde057edb687ee21957a129e27527f->leave($__internal_398bde6ba451295e8112656a695cb1093dcde057edb687ee21957a129e27527f_prof);

        
        $__internal_10532710ca4e752143221d67e3b97ba83fbce3975c2a6c6e2c4470f29bd52cc0->leave($__internal_10532710ca4e752143221d67e3b97ba83fbce3975c2a6c6e2c4470f29bd52cc0_prof);

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
