<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_e37b7d48a78f1fd2d96d1fbb18daa66187393c24bc22b1d4ce217342db086a63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2bdd6653098e02a52c4149ccd7e3bbdfef2c26b260d321f291b5107a727ae4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2bdd6653098e02a52c4149ccd7e3bbdfef2c26b260d321f291b5107a727ae4e->enter($__internal_a2bdd6653098e02a52c4149ccd7e3bbdfef2c26b260d321f291b5107a727ae4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        $__internal_6ec7d46d096a3676261606ad69079ec53a53029c869cc525e248df4c4f7fde6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec7d46d096a3676261606ad69079ec53a53029c869cc525e248df4c4f7fde6d->enter($__internal_6ec7d46d096a3676261606ad69079ec53a53029c869cc525e248df4c4f7fde6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->getSourceContext()); })()), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "    </head>

    ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 167
        echo "</html>
";
        
        $__internal_a2bdd6653098e02a52c4149ccd7e3bbdfef2c26b260d321f291b5107a727ae4e->leave($__internal_a2bdd6653098e02a52c4149ccd7e3bbdfef2c26b260d321f291b5107a727ae4e_prof);

        
        $__internal_6ec7d46d096a3676261606ad69079ec53a53029c869cc525e248df4c4f7fde6d->leave($__internal_6ec7d46d096a3676261606ad69079ec53a53029c869cc525e248df4c4f7fde6d_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_e5305e7f17ba58dc79109767e46c2f430ed06e72b3820b0c86f2b061a11b8d67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5305e7f17ba58dc79109767e46c2f430ed06e72b3820b0c86f2b061a11b8d67->enter($__internal_e5305e7f17ba58dc79109767e46c2f430ed06e72b3820b0c86f2b061a11b8d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_f7872209025cfd1bf75e038b8e457aa450e6c659769b6dae6ca7910f23dce487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7872209025cfd1bf75e038b8e457aa450e6c659769b6dae6ca7910f23dce487->enter($__internal_f7872209025cfd1bf75e038b8e457aa450e6c659769b6dae6ca7910f23dce487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_f7872209025cfd1bf75e038b8e457aa450e6c659769b6dae6ca7910f23dce487->leave($__internal_f7872209025cfd1bf75e038b8e457aa450e6c659769b6dae6ca7910f23dce487_prof);

        
        $__internal_e5305e7f17ba58dc79109767e46c2f430ed06e72b3820b0c86f2b061a11b8d67->leave($__internal_e5305e7f17ba58dc79109767e46c2f430ed06e72b3820b0c86f2b061a11b8d67_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_e6d406717809edb351008d1c202d90327fbc6bf263265571dd57958f6b9e9ee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6d406717809edb351008d1c202d90327fbc6bf263265571dd57958f6b9e9ee5->enter($__internal_e6d406717809edb351008d1c202d90327fbc6bf263265571dd57958f6b9e9ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_5b9f3e0ad75e4bbe2bfffd27f4135e77ac4d9a350b1519e972c99fc5b48f4383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9f3e0ad75e4bbe2bfffd27f4135e77ac4d9a350b1519e972c99fc5b48f4383->enter($__internal_5b9f3e0ad75e4bbe2bfffd27f4135e77ac4d9a350b1519e972c99fc5b48f4383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_5b9f3e0ad75e4bbe2bfffd27f4135e77ac4d9a350b1519e972c99fc5b48f4383->leave($__internal_5b9f3e0ad75e4bbe2bfffd27f4135e77ac4d9a350b1519e972c99fc5b48f4383_prof);

        
        $__internal_e6d406717809edb351008d1c202d90327fbc6bf263265571dd57958f6b9e9ee5->leave($__internal_e6d406717809edb351008d1c202d90327fbc6bf263265571dd57958f6b9e9ee5_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_f3f22fc0d15ff6141b039636032585fadc225b44215a4a55cbca07795dea569d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3f22fc0d15ff6141b039636032585fadc225b44215a4a55cbca07795dea569d->enter($__internal_f3f22fc0d15ff6141b039636032585fadc225b44215a4a55cbca07795dea569d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_288bd9f52de91098728d0527d77f2ded83febbd3bee6efdcacb8a68468c368e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288bd9f52de91098728d0527d77f2ded83febbd3bee6efdcacb8a68468c368e7->enter($__internal_288bd9f52de91098728d0527d77f2ded83febbd3bee6efdcacb8a68468c368e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["favicon"]) || array_key_exists("favicon", $context) ? $context["favicon"] : (function () { throw new Twig_Error_Runtime('Variable "favicon" does not exist.', 25, $this->getSourceContext()); })()), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["favicon"]) || array_key_exists("favicon", $context) ? $context["favicon"] : (function () { throw new Twig_Error_Runtime('Variable "favicon" does not exist.', 25, $this->getSourceContext()); })()), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_288bd9f52de91098728d0527d77f2ded83febbd3bee6efdcacb8a68468c368e7->leave($__internal_288bd9f52de91098728d0527d77f2ded83febbd3bee6efdcacb8a68468c368e7_prof);

        
        $__internal_f3f22fc0d15ff6141b039636032585fadc225b44215a4a55cbca07795dea569d->leave($__internal_f3f22fc0d15ff6141b039636032585fadc225b44215a4a55cbca07795dea569d_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_41da7a63654ca69a3c4a4d6c045c2ceb4376fdfa4bc0cb465b9aea61b7f59759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41da7a63654ca69a3c4a4d6c045c2ceb4376fdfa4bc0cb465b9aea61b7f59759->enter($__internal_41da7a63654ca69a3c4a4d6c045c2ceb4376fdfa4bc0cb465b9aea61b7f59759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_cd4260d3a2e62952716134009a04e1a27be24f2b3328f5245554d40aea1a136b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd4260d3a2e62952716134009a04e1a27be24f2b3328f5245554d40aea1a136b->enter($__internal_cd4260d3a2e62952716134009a04e1a27be24f2b3328f5245554d40aea1a136b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_cd4260d3a2e62952716134009a04e1a27be24f2b3328f5245554d40aea1a136b->leave($__internal_cd4260d3a2e62952716134009a04e1a27be24f2b3328f5245554d40aea1a136b_prof);

        
        $__internal_41da7a63654ca69a3c4a4d6c045c2ceb4376fdfa4bc0cb465b9aea61b7f59759->leave($__internal_41da7a63654ca69a3c4a4d6c045c2ceb4376fdfa4bc0cb465b9aea61b7f59759_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_62a9737b95a038e0939416ad2557245daeceabc56333330ec0ac310895082bf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62a9737b95a038e0939416ad2557245daeceabc56333330ec0ac310895082bf6->enter($__internal_62a9737b95a038e0939416ad2557245daeceabc56333330ec0ac310895082bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_bff9ebfa0132b4490b6d9bd0902d67fd87d4dee995a4446df41080c2651d26e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bff9ebfa0132b4490b6d9bd0902d67fd87d4dee995a4446df41080c2651d26e7->enter($__internal_bff9ebfa0132b4490b6d9bd0902d67fd87d4dee995a4446df41080c2651d26e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_bff9ebfa0132b4490b6d9bd0902d67fd87d4dee995a4446df41080c2651d26e7->leave($__internal_bff9ebfa0132b4490b6d9bd0902d67fd87d4dee995a4446df41080c2651d26e7_prof);

        
        $__internal_62a9737b95a038e0939416ad2557245daeceabc56333330ec0ac310895082bf6->leave($__internal_62a9737b95a038e0939416ad2557245daeceabc56333330ec0ac310895082bf6_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1e3eed2a99fb4612b72099fa9fb3c06695ae8caf20890eaef9d08b7d6213379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1e3eed2a99fb4612b72099fa9fb3c06695ae8caf20890eaef9d08b7d6213379->enter($__internal_e1e3eed2a99fb4612b72099fa9fb3c06695ae8caf20890eaef9d08b7d6213379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8866da811a731026f964abdbb0f50ead059ebb8136a44eac8e8a559d6cc42156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8866da811a731026f964abdbb0f50ead059ebb8136a44eac8e8a559d6cc42156->enter($__internal_8866da811a731026f964abdbb0f50ead059ebb8136a44eac8e8a559d6cc42156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 53, $this->getSourceContext()); })()), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 55
        $this->displayBlock('wrapper', $context, $blocks);
        // line 158
        echo "        </div>

        ";
        // line 160
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 161
        echo "
        ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 163
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "    </body>
    ";
        
        $__internal_8866da811a731026f964abdbb0f50ead059ebb8136a44eac8e8a559d6cc42156->leave($__internal_8866da811a731026f964abdbb0f50ead059ebb8136a44eac8e8a559d6cc42156_prof);

        
        $__internal_e1e3eed2a99fb4612b72099fa9fb3c06695ae8caf20890eaef9d08b7d6213379->leave($__internal_e1e3eed2a99fb4612b72099fa9fb3c06695ae8caf20890eaef9d08b7d6213379_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_cfba0bfd1a06076e5b090a07310c58e226d0983b17a18b2ab68f36633a9602ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfba0bfd1a06076e5b090a07310c58e226d0983b17a18b2ab68f36633a9602ea->enter($__internal_cfba0bfd1a06076e5b090a07310c58e226d0983b17a18b2ab68f36633a9602ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_52a7ea475bb7e5346ef8f980f364dc6adc9170776d62afd8bd2d8d2b6c5a4128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a7ea475bb7e5346ef8f980f364dc6adc9170776d62afd8bd2d8d2b6c5a4128->enter($__internal_52a7ea475bb7e5346ef8f980f364dc6adc9170776d62afd8bd2d8d2b6c5a4128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_52a7ea475bb7e5346ef8f980f364dc6adc9170776d62afd8bd2d8d2b6c5a4128->leave($__internal_52a7ea475bb7e5346ef8f980f364dc6adc9170776d62afd8bd2d8d2b6c5a4128_prof);

        
        $__internal_cfba0bfd1a06076e5b090a07310c58e226d0983b17a18b2ab68f36633a9602ea->leave($__internal_cfba0bfd1a06076e5b090a07310c58e226d0983b17a18b2ab68f36633a9602ea_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_c42b31d670fab63750fa8245e7707e283294d366d6dc12f8935c0bfbd19dd8cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c42b31d670fab63750fa8245e7707e283294d366d6dc12f8935c0bfbd19dd8cd->enter($__internal_c42b31d670fab63750fa8245e7707e283294d366d6dc12f8935c0bfbd19dd8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_22c686438bc65df826c5d49448861c67fee3a3a20f24206b512b9e3d382897e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c686438bc65df826c5d49448861c67fee3a3a20f24206b512b9e3d382897e5->enter($__internal_22c686438bc65df826c5d49448861c67fee3a3a20f24206b512b9e3d382897e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_22c686438bc65df826c5d49448861c67fee3a3a20f24206b512b9e3d382897e5->leave($__internal_22c686438bc65df826c5d49448861c67fee3a3a20f24206b512b9e3d382897e5_prof);

        
        $__internal_c42b31d670fab63750fa8245e7707e283294d366d6dc12f8935c0bfbd19dd8cd->leave($__internal_c42b31d670fab63750fa8245e7707e283294d366d6dc12f8935c0bfbd19dd8cd_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_c8e3db44887e7bfdaa3addab413e6d7a11e0327d47c01fee9ba931ce27a8d1a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8e3db44887e7bfdaa3addab413e6d7a11e0327d47c01fee9ba931ce27a8d1a3->enter($__internal_c8e3db44887e7bfdaa3addab413e6d7a11e0327d47c01fee9ba931ce27a8d1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_28c2c5901861de1aee3c3dc1d21c523d2e00e31a2d75f9f9ddef6685689a8df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c2c5901861de1aee3c3dc1d21c523d2e00e31a2d75f9f9ddef6685689a8df7->enter($__internal_28c2c5901861de1aee3c3dc1d21c523d2e00e31a2d75f9f9ddef6685689a8df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 56
        echo "            <header class=\"main-header\">
            ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 115
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 118
        $this->displayBlock('sidebar', $context, $blocks);
        // line 129
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 132
        $this->displayBlock('content', $context, $blocks);
        // line 156
        echo "            </div>
        ";
        
        $__internal_28c2c5901861de1aee3c3dc1d21c523d2e00e31a2d75f9f9ddef6685689a8df7->leave($__internal_28c2c5901861de1aee3c3dc1d21c523d2e00e31a2d75f9f9ddef6685689a8df7_prof);

        
        $__internal_c8e3db44887e7bfdaa3addab413e6d7a11e0327d47c01fee9ba931ce27a8d1a3->leave($__internal_c8e3db44887e7bfdaa3addab413e6d7a11e0327d47c01fee9ba931ce27a8d1a3_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_0147ba466b1722402903bd74afec2c66bb09d87dfedeefdad7f4e5d4d1de7e07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0147ba466b1722402903bd74afec2c66bb09d87dfedeefdad7f4e5d4d1de7e07->enter($__internal_0147ba466b1722402903bd74afec2c66bb09d87dfedeefdad7f4e5d4d1de7e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_1cad0e99e5286b650ccc275993fe32d1d7f6530c9373d1cf1c5add034cfb4fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cad0e99e5286b650ccc275993fe32d1d7f6530c9373d1cf1c5add034cfb4fe9->enter($__internal_1cad0e99e5286b650ccc275993fe32d1d7f6530c9373d1cf1c5add034cfb4fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 58
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 64
        $this->displayBlock('header_logo', $context, $blocks);
        // line 69
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 72
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 112
        echo "                    </div>
                </nav>
            ";
        
        $__internal_1cad0e99e5286b650ccc275993fe32d1d7f6530c9373d1cf1c5add034cfb4fe9->leave($__internal_1cad0e99e5286b650ccc275993fe32d1d7f6530c9373d1cf1c5add034cfb4fe9_prof);

        
        $__internal_0147ba466b1722402903bd74afec2c66bb09d87dfedeefdad7f4e5d4d1de7e07->leave($__internal_0147ba466b1722402903bd74afec2c66bb09d87dfedeefdad7f4e5d4d1de7e07_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_97ccbcc4400e9b5b9782d7c5a9ffac0df7c221ca71d6d4e2053f7189de6de045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97ccbcc4400e9b5b9782d7c5a9ffac0df7c221ca71d6d4e2053f7189de6de045->enter($__internal_97ccbcc4400e9b5b9782d7c5a9ffac0df7c221ca71d6d4e2053f7189de6de045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_1cd369f428fbd160919ab8ce35a1e3cf534a0a93ca0606f60f81ea7bce4c4f7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cd369f428fbd160919ab8ce35a1e3cf534a0a93ca0606f60f81ea7bce4c4f7b->enter($__internal_1cd369f428fbd160919ab8ce35a1e3cf534a0a93ca0606f60f81ea7bce4c4f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 65
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 66
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_1cd369f428fbd160919ab8ce35a1e3cf534a0a93ca0606f60f81ea7bce4c4f7b->leave($__internal_1cd369f428fbd160919ab8ce35a1e3cf534a0a93ca0606f60f81ea7bce4c4f7b_prof);

        
        $__internal_97ccbcc4400e9b5b9782d7c5a9ffac0df7c221ca71d6d4e2053f7189de6de045->leave($__internal_97ccbcc4400e9b5b9782d7c5a9ffac0df7c221ca71d6d4e2053f7189de6de045_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_2468f46d1506003b6c3f3e7d57e696957296659b98d474af9ae87c6d63939b68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2468f46d1506003b6c3f3e7d57e696957296659b98d474af9ae87c6d63939b68->enter($__internal_2468f46d1506003b6c3f3e7d57e696957296659b98d474af9ae87c6d63939b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_3d781151c431c3f02b22118baedd4888e583e72fc654d151929e491d02f30f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d781151c431c3f02b22118baedd4888e583e72fc654d151929e491d02f30f78->enter($__internal_3d781151c431c3f02b22118baedd4888e583e72fc654d151929e491d02f30f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 73
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getLogoutPath();
        // line 74
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 76
        $this->displayBlock('user_menu', $context, $blocks);
        // line 109
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_3d781151c431c3f02b22118baedd4888e583e72fc654d151929e491d02f30f78->leave($__internal_3d781151c431c3f02b22118baedd4888e583e72fc654d151929e491d02f30f78_prof);

        
        $__internal_2468f46d1506003b6c3f3e7d57e696957296659b98d474af9ae87c6d63939b68->leave($__internal_2468f46d1506003b6c3f3e7d57e696957296659b98d474af9ae87c6d63939b68_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_de6b59e81805c568bb42f55d3137a7056efafd2a1ddae2a1ae2c9f0dc1e50ffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de6b59e81805c568bb42f55d3137a7056efafd2a1ddae2a1ae2c9f0dc1e50ffc->enter($__internal_de6b59e81805c568bb42f55d3137a7056efafd2a1ddae2a1ae2c9f0dc1e50ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_e6b96ec0cb9b3a9fc04aa1f2476a777eba07e9fcdce1f0e60ffdbcbeb15ad8f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b96ec0cb9b3a9fc04aa1f2476a777eba07e9fcdce1f0e60ffdbcbeb15ad8f6->enter($__internal_e6b96ec0cb9b3a9fc04aa1f2476a777eba07e9fcdce1f0e60ffdbcbeb15ad8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 77
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 79
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), false)) : (false)) == false)) {
            // line 80
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 82
(isset($context["_logout_path"]) || array_key_exists("_logout_path", $context) ? $context["_logout_path"] : (function () { throw new Twig_Error_Runtime('Variable "_logout_path" does not exist.', 82, $this->getSourceContext()); })())) {
            // line 83
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 84
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 86
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 89
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 95
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 105
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 108
        echo "                                ";
        
        $__internal_e6b96ec0cb9b3a9fc04aa1f2476a777eba07e9fcdce1f0e60ffdbcbeb15ad8f6->leave($__internal_e6b96ec0cb9b3a9fc04aa1f2476a777eba07e9fcdce1f0e60ffdbcbeb15ad8f6_prof);

        
        $__internal_de6b59e81805c568bb42f55d3137a7056efafd2a1ddae2a1ae2c9f0dc1e50ffc->leave($__internal_de6b59e81805c568bb42f55d3137a7056efafd2a1ddae2a1ae2c9f0dc1e50ffc_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_5e9425ae50d98ee5b154becbc6dde92c516d4f503641150a15f8dbff436352d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e9425ae50d98ee5b154becbc6dde92c516d4f503641150a15f8dbff436352d5->enter($__internal_5e9425ae50d98ee5b154becbc6dde92c516d4f503641150a15f8dbff436352d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_6dc264b381ed74eaf437c6bbbb095ab8c74c1ca0dbeea43d1969a46dd21ea40e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc264b381ed74eaf437c6bbbb095ab8c74c1ca0dbeea43d1969a46dd21ea40e->enter($__internal_6dc264b381ed74eaf437c6bbbb095ab8c74c1ca0dbeea43d1969a46dd21ea40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 96
        echo "                                                <li>
                                                    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["_logout_path"]) || array_key_exists("_logout_path", $context) ? $context["_logout_path"] : (function () { throw new Twig_Error_Runtime('Variable "_logout_path" does not exist.', 97, $this->getSourceContext()); })()), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        // line 99
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN")) {
            // line 100
            echo "                                                    <li>
                                                        <a href=\"?_switch_user=_exit\"><i class=\"fa fa-sign-out\"></i> ";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.exit_impersonation", array(), "EasyAdminBundle"), "html", null, true);
            echo "</a>
                                                    </li>
                                                ";
        }
        // line 104
        echo "                                                ";
        
        $__internal_6dc264b381ed74eaf437c6bbbb095ab8c74c1ca0dbeea43d1969a46dd21ea40e->leave($__internal_6dc264b381ed74eaf437c6bbbb095ab8c74c1ca0dbeea43d1969a46dd21ea40e_prof);

        
        $__internal_5e9425ae50d98ee5b154becbc6dde92c516d4f503641150a15f8dbff436352d5->leave($__internal_5e9425ae50d98ee5b154becbc6dde92c516d4f503641150a15f8dbff436352d5_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9cbd096e30038a6f9e962481aa571ec353fe2b02f8460073777f5345b6eefdc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cbd096e30038a6f9e962481aa571ec353fe2b02f8460073777f5345b6eefdc0->enter($__internal_9cbd096e30038a6f9e962481aa571ec353fe2b02f8460073777f5345b6eefdc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_bbd77bc0f56e809bd263e06e97fc2c2007881f9048b42637585f055abd1a29ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbd77bc0f56e809bd263e06e97fc2c2007881f9048b42637585f055abd1a29ea->enter($__internal_bbd77bc0f56e809bd263e06e97fc2c2007881f9048b42637585f055abd1a29ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_bbd77bc0f56e809bd263e06e97fc2c2007881f9048b42637585f055abd1a29ea->leave($__internal_bbd77bc0f56e809bd263e06e97fc2c2007881f9048b42637585f055abd1a29ea_prof);

        
        $__internal_9cbd096e30038a6f9e962481aa571ec353fe2b02f8460073777f5345b6eefdc0->leave($__internal_9cbd096e30038a6f9e962481aa571ec353fe2b02f8460073777f5345b6eefdc0_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_b36e3e9c9d7506afdae553555df6d88214d33ee651751f5781fdcca5c5b3b7bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b36e3e9c9d7506afdae553555df6d88214d33ee651751f5781fdcca5c5b3b7bf->enter($__internal_b36e3e9c9d7506afdae553555df6d88214d33ee651751f5781fdcca5c5b3b7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_31c07f8c58045f773e9b8e9e36b0ef619ecaa4f6a220b16ae6517600d4424cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c07f8c58045f773e9b8e9e36b0ef619ecaa4f6a220b16ae6517600d4424cc8->enter($__internal_31c07f8c58045f773e9b8e9e36b0ef619ecaa4f6a220b16ae6517600d4424cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 122, $this->getSourceContext()); })()), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_31c07f8c58045f773e9b8e9e36b0ef619ecaa4f6a220b16ae6517600d4424cc8->leave($__internal_31c07f8c58045f773e9b8e9e36b0ef619ecaa4f6a220b16ae6517600d4424cc8_prof);

        
        $__internal_b36e3e9c9d7506afdae553555df6d88214d33ee651751f5781fdcca5c5b3b7bf->leave($__internal_b36e3e9c9d7506afdae553555df6d88214d33ee651751f5781fdcca5c5b3b7bf_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_e4f42e80c050c94e7cef2000001188e72e6f16731f54fa25e8725729eee1efb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4f42e80c050c94e7cef2000001188e72e6f16731f54fa25e8725729eee1efb7->enter($__internal_e4f42e80c050c94e7cef2000001188e72e6f16731f54fa25e8725729eee1efb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fb80787d870d07d284f84892beaaa79a79ca1f175a60f80db57c3d5091ad512c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb80787d870d07d284f84892beaaa79a79ca1f175a60f80db57c3d5091ad512c->enter($__internal_fb80787d870d07d284f84892beaaa79a79ca1f175a60f80db57c3d5091ad512c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 133
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 136
        echo "
                <section class=\"content-header\">
                ";
        // line 138
        $this->displayBlock('content_header', $context, $blocks);
        // line 141
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 150
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 153
        $this->displayBlock('main', $context, $blocks);
        // line 154
        echo "                </section>
            ";
        
        $__internal_fb80787d870d07d284f84892beaaa79a79ca1f175a60f80db57c3d5091ad512c->leave($__internal_fb80787d870d07d284f84892beaaa79a79ca1f175a60f80db57c3d5091ad512c_prof);

        
        $__internal_e4f42e80c050c94e7cef2000001188e72e6f16731f54fa25e8725729eee1efb7->leave($__internal_e4f42e80c050c94e7cef2000001188e72e6f16731f54fa25e8725729eee1efb7_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_c61fa3771524f06f18175651e695f628d256d8a51670d817a666ae2b3a49d980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c61fa3771524f06f18175651e695f628d256d8a51670d817a666ae2b3a49d980->enter($__internal_c61fa3771524f06f18175651e695f628d256d8a51670d817a666ae2b3a49d980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_a2c9d0eb5732285d4a377d3cdb2410214ef1dd23dfda6ebfa6fdde9269534292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c9d0eb5732285d4a377d3cdb2410214ef1dd23dfda6ebfa6fdde9269534292->enter($__internal_a2c9d0eb5732285d4a377d3cdb2410214ef1dd23dfda6ebfa6fdde9269534292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 134, $this->getSourceContext()); })()), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_a2c9d0eb5732285d4a377d3cdb2410214ef1dd23dfda6ebfa6fdde9269534292->leave($__internal_a2c9d0eb5732285d4a377d3cdb2410214ef1dd23dfda6ebfa6fdde9269534292_prof);

        
        $__internal_c61fa3771524f06f18175651e695f628d256d8a51670d817a666ae2b3a49d980->leave($__internal_c61fa3771524f06f18175651e695f628d256d8a51670d817a666ae2b3a49d980_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_d461e05a57599f2820791fdc37452e858c4cc29df15fa023fa22ff745a396852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d461e05a57599f2820791fdc37452e858c4cc29df15fa023fa22ff745a396852->enter($__internal_d461e05a57599f2820791fdc37452e858c4cc29df15fa023fa22ff745a396852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_1812b49441395597602551e64cbec24c55c46fb9b513213c29bc0b9a4fd59cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1812b49441395597602551e64cbec24c55c46fb9b513213c29bc0b9a4fd59cbc->enter($__internal_1812b49441395597602551e64cbec24c55c46fb9b513213c29bc0b9a4fd59cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_1812b49441395597602551e64cbec24c55c46fb9b513213c29bc0b9a4fd59cbc->leave($__internal_1812b49441395597602551e64cbec24c55c46fb9b513213c29bc0b9a4fd59cbc_prof);

        
        $__internal_d461e05a57599f2820791fdc37452e858c4cc29df15fa023fa22ff745a396852->leave($__internal_d461e05a57599f2820791fdc37452e858c4cc29df15fa023fa22ff745a396852_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_5ddb64ca0ed8c9ce659304ac8e2b0d50a6bef9082a4870bcc2081c8e690fbeb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ddb64ca0ed8c9ce659304ac8e2b0d50a6bef9082a4870bcc2081c8e690fbeb9->enter($__internal_5ddb64ca0ed8c9ce659304ac8e2b0d50a6bef9082a4870bcc2081c8e690fbeb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_4de15341ac7877ed3151b7c32349c1ec969f3ff98103994435fcb38bc20d8afd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de15341ac7877ed3151b7c32349c1ec969f3ff98103994435fcb38bc20d8afd->enter($__internal_4de15341ac7877ed3151b7c32349c1ec969f3ff98103994435fcb38bc20d8afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_4de15341ac7877ed3151b7c32349c1ec969f3ff98103994435fcb38bc20d8afd->leave($__internal_4de15341ac7877ed3151b7c32349c1ec969f3ff98103994435fcb38bc20d8afd_prof);

        
        $__internal_5ddb64ca0ed8c9ce659304ac8e2b0d50a6bef9082a4870bcc2081c8e690fbeb9->leave($__internal_5ddb64ca0ed8c9ce659304ac8e2b0d50a6bef9082a4870bcc2081c8e690fbeb9_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_8eca81b2fb924db7f9406187b1c303a6099c2630f75fead0655750c152d438e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eca81b2fb924db7f9406187b1c303a6099c2630f75fead0655750c152d438e1->enter($__internal_8eca81b2fb924db7f9406187b1c303a6099c2630f75fead0655750c152d438e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_c0237aba9cd9c79dab0f24f9d824ace2bf92c4dba0d52951c652813e824c7aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0237aba9cd9c79dab0f24f9d824ace2bf92c4dba0d52951c652813e824c7aba->enter($__internal_c0237aba9cd9c79dab0f24f9d824ace2bf92c4dba0d52951c652813e824c7aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 142
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 142, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 142, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 143
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 145, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 145, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 149
        echo "                ";
        
        $__internal_c0237aba9cd9c79dab0f24f9d824ace2bf92c4dba0d52951c652813e824c7aba->leave($__internal_c0237aba9cd9c79dab0f24f9d824ace2bf92c4dba0d52951c652813e824c7aba_prof);

        
        $__internal_8eca81b2fb924db7f9406187b1c303a6099c2630f75fead0655750c152d438e1->leave($__internal_8eca81b2fb924db7f9406187b1c303a6099c2630f75fead0655750c152d438e1_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_3b7387d0d39a9614b4631808b50cb8032c12b1ee406112dbbe5a4b14344151f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b7387d0d39a9614b4631808b50cb8032c12b1ee406112dbbe5a4b14344151f2->enter($__internal_3b7387d0d39a9614b4631808b50cb8032c12b1ee406112dbbe5a4b14344151f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_330bebf4079564a83e60515c688f72014135b277fbc2b108dd3bdeacb01d1c2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_330bebf4079564a83e60515c688f72014135b277fbc2b108dd3bdeacb01d1c2f->enter($__internal_330bebf4079564a83e60515c688f72014135b277fbc2b108dd3bdeacb01d1c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_330bebf4079564a83e60515c688f72014135b277fbc2b108dd3bdeacb01d1c2f->leave($__internal_330bebf4079564a83e60515c688f72014135b277fbc2b108dd3bdeacb01d1c2f_prof);

        
        $__internal_3b7387d0d39a9614b4631808b50cb8032c12b1ee406112dbbe5a4b14344151f2->leave($__internal_3b7387d0d39a9614b4631808b50cb8032c12b1ee406112dbbe5a4b14344151f2_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_a73fa2323353d24c8c67490a135a13e1a029d6a2828f747933c62694f066b635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a73fa2323353d24c8c67490a135a13e1a029d6a2828f747933c62694f066b635->enter($__internal_a73fa2323353d24c8c67490a135a13e1a029d6a2828f747933c62694f066b635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_5b3992f315e9b5921e624c4173dbcbc9e6428fc9a5ba6cf160386209b9bc14bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b3992f315e9b5921e624c4173dbcbc9e6428fc9a5ba6cf160386209b9bc14bd->enter($__internal_5b3992f315e9b5921e624c4173dbcbc9e6428fc9a5ba6cf160386209b9bc14bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_5b3992f315e9b5921e624c4173dbcbc9e6428fc9a5ba6cf160386209b9bc14bd->leave($__internal_5b3992f315e9b5921e624c4173dbcbc9e6428fc9a5ba6cf160386209b9bc14bd_prof);

        
        $__internal_a73fa2323353d24c8c67490a135a13e1a029d6a2828f747933c62694f066b635->leave($__internal_a73fa2323353d24c8c67490a135a13e1a029d6a2828f747933c62694f066b635_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  788 => 160,  771 => 153,  761 => 149,  754 => 145,  750 => 143,  747 => 142,  738 => 141,  709 => 139,  700 => 138,  687 => 134,  678 => 133,  667 => 154,  665 => 153,  660 => 150,  657 => 141,  655 => 138,  651 => 136,  648 => 133,  639 => 132,  628 => 125,  626 => 122,  624 => 121,  615 => 120,  604 => 127,  602 => 120,  599 => 119,  590 => 118,  580 => 104,  574 => 101,  571 => 100,  569 => 99,  562 => 97,  559 => 96,  550 => 95,  540 => 108,  535 => 105,  533 => 95,  524 => 89,  519 => 86,  514 => 84,  511 => 83,  509 => 82,  505 => 81,  502 => 80,  500 => 79,  494 => 77,  485 => 76,  473 => 109,  471 => 76,  467 => 74,  464 => 73,  455 => 72,  442 => 66,  433 => 65,  424 => 64,  412 => 112,  410 => 72,  405 => 69,  403 => 64,  396 => 60,  392 => 58,  383 => 57,  372 => 156,  370 => 132,  365 => 129,  363 => 118,  358 => 115,  356 => 57,  353 => 56,  344 => 55,  311 => 53,  300 => 165,  291 => 163,  287 => 162,  284 => 161,  282 => 160,  278 => 158,  276 => 55,  266 => 53,  257 => 52,  236 => 30,  227 => 29,  215 => 43,  212 => 42,  209 => 29,  200 => 28,  185 => 25,  182 => 24,  173 => 23,  160 => 15,  154 => 13,  145 => 12,  127 => 10,  116 => 167,  114 => 52,  110 => 50,  105 => 48,  100 => 47,  98 => 46,  95 => 45,  93 => 28,  90 => 27,  88 => 23,  85 => 22,  76 => 20,  72 => 19,  69 => 18,  67 => 12,  62 => 10,  51 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        {% set _logout_path = easyadmin_logout_path() %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>

                                    {% if app.user|default(false) == false %}
                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% elseif not _logout_path %}
                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                {% block user_menu_dropdown %}
                                                <li>
                                                    <a href=\"{{ _logout_path }}\"><i class=\"fa fa-sign-out\"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                                </li>
                                                {% if is_granted('ROLE_PREVIOUS_ADMIN') %}
                                                    <li>
                                                        <a href=\"?_switch_user=_exit\"><i class=\"fa fa-sign-out\"></i> {{ 'user.exit_impersonation'|trans(domain = 'EasyAdminBundle') }}</a>
                                                    </li>
                                                {% endif %}
                                                {% endblock user_menu_dropdown %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "@EasyAdmin/default/layout.html.twig", "/var/www/html/Agence_immobilier/Immobilier/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/layout.html.twig");
    }
}
