<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_b9310924fcfce57c44599f0338569de87825717d51d175178f80222bd1233fd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d903b8f7a1f7e33711e561e679088f337084ea0ed01e3f169811ac364a0b0d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d903b8f7a1f7e33711e561e679088f337084ea0ed01e3f169811ac364a0b0d2->enter($__internal_0d903b8f7a1f7e33711e561e679088f337084ea0ed01e3f169811ac364a0b0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_61330e1df20d42f2895b95bb60e570c7cabb4cdb588c38fc2348a1aa43f9eb8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61330e1df20d42f2895b95bb60e570c7cabb4cdb588c38fc2348a1aa43f9eb8d->enter($__internal_61330e1df20d42f2895b95bb60e570c7cabb4cdb588c38fc2348a1aa43f9eb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_0d903b8f7a1f7e33711e561e679088f337084ea0ed01e3f169811ac364a0b0d2->leave($__internal_0d903b8f7a1f7e33711e561e679088f337084ea0ed01e3f169811ac364a0b0d2_prof);

        
        $__internal_61330e1df20d42f2895b95bb60e570c7cabb4cdb588c38fc2348a1aa43f9eb8d->leave($__internal_61330e1df20d42f2895b95bb60e570c7cabb4cdb588c38fc2348a1aa43f9eb8d_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_82615c767486cf7bce15eb23c3386f65144bf18ef29129ad64fa772d8a6668a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82615c767486cf7bce15eb23c3386f65144bf18ef29129ad64fa772d8a6668a8->enter($__internal_82615c767486cf7bce15eb23c3386f65144bf18ef29129ad64fa772d8a6668a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_a2007464899422e67e5b178d87be26f725ff38601a6e8a6cc8b3c85f6aa3ad9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2007464899422e67e5b178d87be26f725ff38601a6e8a6cc8b3c85f6aa3ad9c->enter($__internal_a2007464899422e67e5b178d87be26f725ff38601a6e8a6cc8b3c85f6aa3ad9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_a2007464899422e67e5b178d87be26f725ff38601a6e8a6cc8b3c85f6aa3ad9c->leave($__internal_a2007464899422e67e5b178d87be26f725ff38601a6e8a6cc8b3c85f6aa3ad9c_prof);

        
        $__internal_82615c767486cf7bce15eb23c3386f65144bf18ef29129ad64fa772d8a6668a8->leave($__internal_82615c767486cf7bce15eb23c3386f65144bf18ef29129ad64fa772d8a6668a8_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_8a880319dea120638177381a42c0adf1d1177995b9a6a12764dd4c2ae8e34d8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a880319dea120638177381a42c0adf1d1177995b9a6a12764dd4c2ae8e34d8e->enter($__internal_8a880319dea120638177381a42c0adf1d1177995b9a6a12764dd4c2ae8e34d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ec2c951a75db37fe1d87e0f5d9a0d719cc64d39392f2472c9564eeb67a8e060d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec2c951a75db37fe1d87e0f5d9a0d719cc64d39392f2472c9564eeb67a8e060d->enter($__internal_ec2c951a75db37fe1d87e0f5d9a0d719cc64d39392f2472c9564eeb67a8e060d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 12, $this->getSourceContext()); })()) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ec2c951a75db37fe1d87e0f5d9a0d719cc64d39392f2472c9564eeb67a8e060d->leave($__internal_ec2c951a75db37fe1d87e0f5d9a0d719cc64d39392f2472c9564eeb67a8e060d_prof);

        
        $__internal_8a880319dea120638177381a42c0adf1d1177995b9a6a12764dd4c2ae8e34d8e->leave($__internal_8a880319dea120638177381a42c0adf1d1177995b9a6a12764dd4c2ae8e34d8e_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_8ab6f27aa1ce60922d285b68a0cf92ddc17550d2e8ce52eb97e51b8d4a8620b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ab6f27aa1ce60922d285b68a0cf92ddc17550d2e8ce52eb97e51b8d4a8620b2->enter($__internal_8ab6f27aa1ce60922d285b68a0cf92ddc17550d2e8ce52eb97e51b8d4a8620b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_eedea04d33fc05582c829fd248b817628ac49fb9b1ae17a7cc2e51e0369fdcb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eedea04d33fc05582c829fd248b817628ac49fb9b1ae17a7cc2e51e0369fdcb2->enter($__internal_eedea04d33fc05582c829fd248b817628ac49fb9b1ae17a7cc2e51e0369fdcb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_eedea04d33fc05582c829fd248b817628ac49fb9b1ae17a7cc2e51e0369fdcb2->leave($__internal_eedea04d33fc05582c829fd248b817628ac49fb9b1ae17a7cc2e51e0369fdcb2_prof);

        
        $__internal_8ab6f27aa1ce60922d285b68a0cf92ddc17550d2e8ce52eb97e51b8d4a8620b2->leave($__internal_8ab6f27aa1ce60922d285b68a0cf92ddc17550d2e8ce52eb97e51b8d4a8620b2_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_aec9ba2a5e7184b2d0c065fff34b5b9e6f400528ec59cc3002a9fb774ca6fd9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec9ba2a5e7184b2d0c065fff34b5b9e6f400528ec59cc3002a9fb774ca6fd9a->enter($__internal_aec9ba2a5e7184b2d0c065fff34b5b9e6f400528ec59cc3002a9fb774ca6fd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e3dc13d1c961fefc2567d6129f4da8bf6ef3f67c8e1d1510303b899661fc90e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3dc13d1c961fefc2567d6129f4da8bf6ef3f67c8e1d1510303b899661fc90e2->enter($__internal_e3dc13d1c961fefc2567d6129f4da8bf6ef3f67c8e1d1510303b899661fc90e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 28, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 28, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 28, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_e3dc13d1c961fefc2567d6129f4da8bf6ef3f67c8e1d1510303b899661fc90e2->leave($__internal_e3dc13d1c961fefc2567d6129f4da8bf6ef3f67c8e1d1510303b899661fc90e2_prof);

        
        $__internal_aec9ba2a5e7184b2d0c065fff34b5b9e6f400528ec59cc3002a9fb774ca6fd9a->leave($__internal_aec9ba2a5e7184b2d0c065fff34b5b9e6f400528ec59cc3002a9fb774ca6fd9a_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4754754d841c04c13b15791dd3f3e3811c8bc2d79197eb4f22860e8f9a02f9fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4754754d841c04c13b15791dd3f3e3811c8bc2d79197eb4f22860e8f9a02f9fc->enter($__internal_4754754d841c04c13b15791dd3f3e3811c8bc2d79197eb4f22860e8f9a02f9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_9ce18afb3be612e6e978d225540630726df955ebe44d662a19444338770fda23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ce18afb3be612e6e978d225540630726df955ebe44d662a19444338770fda23->enter($__internal_9ce18afb3be612e6e978d225540630726df955ebe44d662a19444338770fda23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_9ce18afb3be612e6e978d225540630726df955ebe44d662a19444338770fda23->leave($__internal_9ce18afb3be612e6e978d225540630726df955ebe44d662a19444338770fda23_prof);

        
        $__internal_4754754d841c04c13b15791dd3f3e3811c8bc2d79197eb4f22860e8f9a02f9fc->leave($__internal_4754754d841c04c13b15791dd3f3e3811c8bc2d79197eb4f22860e8f9a02f9fc_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_5b40481fd48632669eaf3e70f18dfb91926670169c57ce0de0930e21bad8833e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b40481fd48632669eaf3e70f18dfb91926670169c57ce0de0930e21bad8833e->enter($__internal_5b40481fd48632669eaf3e70f18dfb91926670169c57ce0de0930e21bad8833e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_973426b69512dc0f36d047f73df6ba468d53f8bc13dbba05453427b8352a2dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_973426b69512dc0f36d047f73df6ba468d53f8bc13dbba05453427b8352a2dc8->enter($__internal_973426b69512dc0f36d047f73df6ba468d53f8bc13dbba05453427b8352a2dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_973426b69512dc0f36d047f73df6ba468d53f8bc13dbba05453427b8352a2dc8->leave($__internal_973426b69512dc0f36d047f73df6ba468d53f8bc13dbba05453427b8352a2dc8_prof);

        
        $__internal_5b40481fd48632669eaf3e70f18dfb91926670169c57ce0de0930e21bad8833e->leave($__internal_5b40481fd48632669eaf3e70f18dfb91926670169c57ce0de0930e21bad8833e_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_af9155056710e798e2a70d1f532fbb5fbb7e37ce4209f6d3f8e4af9b54737a2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af9155056710e798e2a70d1f532fbb5fbb7e37ce4209f6d3f8e4af9b54737a2a->enter($__internal_af9155056710e798e2a70d1f532fbb5fbb7e37ce4209f6d3f8e4af9b54737a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_6e8b9b74dcd39a35ebc1aa8e5e6e48d74d21c19d9f803bc9d8e8b1110248dd4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e8b9b74dcd39a35ebc1aa8e5e6e48d74d21c19d9f803bc9d8e8b1110248dd4e->enter($__internal_6e8b9b74dcd39a35ebc1aa8e5e6e48d74d21c19d9f803bc9d8e8b1110248dd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 47, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6e8b9b74dcd39a35ebc1aa8e5e6e48d74d21c19d9f803bc9d8e8b1110248dd4e->leave($__internal_6e8b9b74dcd39a35ebc1aa8e5e6e48d74d21c19d9f803bc9d8e8b1110248dd4e_prof);

        
        $__internal_af9155056710e798e2a70d1f532fbb5fbb7e37ce4209f6d3f8e4af9b54737a2a->leave($__internal_af9155056710e798e2a70d1f532fbb5fbb7e37ce4209f6d3f8e4af9b54737a2a_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_df9798d435afe447d4b2456ac1c2f610d9b001d12d082ce7a689276336fc1e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df9798d435afe447d4b2456ac1c2f610d9b001d12d082ce7a689276336fc1e0e->enter($__internal_df9798d435afe447d4b2456ac1c2f610d9b001d12d082ce7a689276336fc1e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_b50726ffeca38a2523338892f7ad98bd3895246dd3d8931f55bf64d22014924f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50726ffeca38a2523338892f7ad98bd3895246dd3d8931f55bf64d22014924f->enter($__internal_b50726ffeca38a2523338892f7ad98bd3895246dd3d8931f55bf64d22014924f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b50726ffeca38a2523338892f7ad98bd3895246dd3d8931f55bf64d22014924f->leave($__internal_b50726ffeca38a2523338892f7ad98bd3895246dd3d8931f55bf64d22014924f_prof);

        
        $__internal_df9798d435afe447d4b2456ac1c2f610d9b001d12d082ce7a689276336fc1e0e->leave($__internal_df9798d435afe447d4b2456ac1c2f610d9b001d12d082ce7a689276336fc1e0e_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_97531f6841fe395ec7789fa2fd4f825c539f6df6f2e3dbaa8693a45d520c69f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97531f6841fe395ec7789fa2fd4f825c539f6df6f2e3dbaa8693a45d520c69f4->enter($__internal_97531f6841fe395ec7789fa2fd4f825c539f6df6f2e3dbaa8693a45d520c69f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_b80a0dfa45db2bbfa9c36b26aa09f3ed24055cb019cbe2d0adfc849c67d878d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b80a0dfa45db2bbfa9c36b26aa09f3ed24055cb019cbe2d0adfc849c67d878d6->enter($__internal_b80a0dfa45db2bbfa9c36b26aa09f3ed24055cb019cbe2d0adfc849c67d878d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b80a0dfa45db2bbfa9c36b26aa09f3ed24055cb019cbe2d0adfc849c67d878d6->leave($__internal_b80a0dfa45db2bbfa9c36b26aa09f3ed24055cb019cbe2d0adfc849c67d878d6_prof);

        
        $__internal_97531f6841fe395ec7789fa2fd4f825c539f6df6f2e3dbaa8693a45d520c69f4->leave($__internal_97531f6841fe395ec7789fa2fd4f825c539f6df6f2e3dbaa8693a45d520c69f4_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_866afd448aa603b4a45776a7764d7b8b7318094b240374dea733184dbd0fe516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_866afd448aa603b4a45776a7764d7b8b7318094b240374dea733184dbd0fe516->enter($__internal_866afd448aa603b4a45776a7764d7b8b7318094b240374dea733184dbd0fe516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_1c8900e02659bcc8f27d090c041e26046040adac74ddedcc957b33ee428d3ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8900e02659bcc8f27d090c041e26046040adac74ddedcc957b33ee428d3ab8->enter($__internal_1c8900e02659bcc8f27d090c041e26046040adac74ddedcc957b33ee428d3ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_1c8900e02659bcc8f27d090c041e26046040adac74ddedcc957b33ee428d3ab8->leave($__internal_1c8900e02659bcc8f27d090c041e26046040adac74ddedcc957b33ee428d3ab8_prof);

        
        $__internal_866afd448aa603b4a45776a7764d7b8b7318094b240374dea733184dbd0fe516->leave($__internal_866afd448aa603b4a45776a7764d7b8b7318094b240374dea733184dbd0fe516_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/var/www/html/Agence_immobilier/Immobilier/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
