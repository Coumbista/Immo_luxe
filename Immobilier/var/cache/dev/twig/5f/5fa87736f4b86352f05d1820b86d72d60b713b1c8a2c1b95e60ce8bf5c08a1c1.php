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
        $__internal_45e826a7d9e22174b53b67eb7f7a2f696d1ef1ecb4cd847bbc6903462eb71e14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45e826a7d9e22174b53b67eb7f7a2f696d1ef1ecb4cd847bbc6903462eb71e14->enter($__internal_45e826a7d9e22174b53b67eb7f7a2f696d1ef1ecb4cd847bbc6903462eb71e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_84cee35f87de194a38685ecbe89c01afc8ead6a42dfe99c4469567e5c1669153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84cee35f87de194a38685ecbe89c01afc8ead6a42dfe99c4469567e5c1669153->enter($__internal_84cee35f87de194a38685ecbe89c01afc8ead6a42dfe99c4469567e5c1669153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_45e826a7d9e22174b53b67eb7f7a2f696d1ef1ecb4cd847bbc6903462eb71e14->leave($__internal_45e826a7d9e22174b53b67eb7f7a2f696d1ef1ecb4cd847bbc6903462eb71e14_prof);

        
        $__internal_84cee35f87de194a38685ecbe89c01afc8ead6a42dfe99c4469567e5c1669153->leave($__internal_84cee35f87de194a38685ecbe89c01afc8ead6a42dfe99c4469567e5c1669153_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_e246631632aed8e729c65df9346c06ec83a37f8453bd9fc9c2f310adb0fdb9d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e246631632aed8e729c65df9346c06ec83a37f8453bd9fc9c2f310adb0fdb9d2->enter($__internal_e246631632aed8e729c65df9346c06ec83a37f8453bd9fc9c2f310adb0fdb9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_cb1d7dccc03f1fe22aab97e2aa8ccbaa37b892f9e574da4ca41100a4f1f8d65d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb1d7dccc03f1fe22aab97e2aa8ccbaa37b892f9e574da4ca41100a4f1f8d65d->enter($__internal_cb1d7dccc03f1fe22aab97e2aa8ccbaa37b892f9e574da4ca41100a4f1f8d65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_cb1d7dccc03f1fe22aab97e2aa8ccbaa37b892f9e574da4ca41100a4f1f8d65d->leave($__internal_cb1d7dccc03f1fe22aab97e2aa8ccbaa37b892f9e574da4ca41100a4f1f8d65d_prof);

        
        $__internal_e246631632aed8e729c65df9346c06ec83a37f8453bd9fc9c2f310adb0fdb9d2->leave($__internal_e246631632aed8e729c65df9346c06ec83a37f8453bd9fc9c2f310adb0fdb9d2_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_36a290d6486f84b1dbce0dbc3ac4a050120fe94d54141671f7fffcd1f9644351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36a290d6486f84b1dbce0dbc3ac4a050120fe94d54141671f7fffcd1f9644351->enter($__internal_36a290d6486f84b1dbce0dbc3ac4a050120fe94d54141671f7fffcd1f9644351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_7243192f01874e9b43d4ecde227d27bc0a8bc6db6f3d6563be19e04d304536d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7243192f01874e9b43d4ecde227d27bc0a8bc6db6f3d6563be19e04d304536d6->enter($__internal_7243192f01874e9b43d4ecde227d27bc0a8bc6db6f3d6563be19e04d304536d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_7243192f01874e9b43d4ecde227d27bc0a8bc6db6f3d6563be19e04d304536d6->leave($__internal_7243192f01874e9b43d4ecde227d27bc0a8bc6db6f3d6563be19e04d304536d6_prof);

        
        $__internal_36a290d6486f84b1dbce0dbc3ac4a050120fe94d54141671f7fffcd1f9644351->leave($__internal_36a290d6486f84b1dbce0dbc3ac4a050120fe94d54141671f7fffcd1f9644351_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_251aacc222a629139580b300cb66d72799c1babe43524cfcaee728d56b99010b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_251aacc222a629139580b300cb66d72799c1babe43524cfcaee728d56b99010b->enter($__internal_251aacc222a629139580b300cb66d72799c1babe43524cfcaee728d56b99010b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_7238f80fb4670c72678ceddfb604cf4e145c09978844e62d06b49b9fa1b8a2d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7238f80fb4670c72678ceddfb604cf4e145c09978844e62d06b49b9fa1b8a2d8->enter($__internal_7238f80fb4670c72678ceddfb604cf4e145c09978844e62d06b49b9fa1b8a2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_7238f80fb4670c72678ceddfb604cf4e145c09978844e62d06b49b9fa1b8a2d8->leave($__internal_7238f80fb4670c72678ceddfb604cf4e145c09978844e62d06b49b9fa1b8a2d8_prof);

        
        $__internal_251aacc222a629139580b300cb66d72799c1babe43524cfcaee728d56b99010b->leave($__internal_251aacc222a629139580b300cb66d72799c1babe43524cfcaee728d56b99010b_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6b93b4cd1a0318606167018f270ccd5708bca13530d2034e99ae8c2fced7c146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b93b4cd1a0318606167018f270ccd5708bca13530d2034e99ae8c2fced7c146->enter($__internal_6b93b4cd1a0318606167018f270ccd5708bca13530d2034e99ae8c2fced7c146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_32806697be81953f2f1f021fce4911c8e80ce53aa6ed324970f698ac42afd884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32806697be81953f2f1f021fce4911c8e80ce53aa6ed324970f698ac42afd884->enter($__internal_32806697be81953f2f1f021fce4911c8e80ce53aa6ed324970f698ac42afd884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_32806697be81953f2f1f021fce4911c8e80ce53aa6ed324970f698ac42afd884->leave($__internal_32806697be81953f2f1f021fce4911c8e80ce53aa6ed324970f698ac42afd884_prof);

        
        $__internal_6b93b4cd1a0318606167018f270ccd5708bca13530d2034e99ae8c2fced7c146->leave($__internal_6b93b4cd1a0318606167018f270ccd5708bca13530d2034e99ae8c2fced7c146_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_a75d3b99d6c69f57928b5c4951d6997f9c8cd512bcb862e0a47ea4103f72d224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a75d3b99d6c69f57928b5c4951d6997f9c8cd512bcb862e0a47ea4103f72d224->enter($__internal_a75d3b99d6c69f57928b5c4951d6997f9c8cd512bcb862e0a47ea4103f72d224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_316fe9adf6633e358f61099676b4994512994c684b290405572f4de2df5c85f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_316fe9adf6633e358f61099676b4994512994c684b290405572f4de2df5c85f8->enter($__internal_316fe9adf6633e358f61099676b4994512994c684b290405572f4de2df5c85f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_316fe9adf6633e358f61099676b4994512994c684b290405572f4de2df5c85f8->leave($__internal_316fe9adf6633e358f61099676b4994512994c684b290405572f4de2df5c85f8_prof);

        
        $__internal_a75d3b99d6c69f57928b5c4951d6997f9c8cd512bcb862e0a47ea4103f72d224->leave($__internal_a75d3b99d6c69f57928b5c4951d6997f9c8cd512bcb862e0a47ea4103f72d224_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_124c22d101c37f83876016ad516aa1fe6b5d187eaffbf8dea01522e04c19f245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_124c22d101c37f83876016ad516aa1fe6b5d187eaffbf8dea01522e04c19f245->enter($__internal_124c22d101c37f83876016ad516aa1fe6b5d187eaffbf8dea01522e04c19f245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_df0ab749602674cc550611925b3dcc97a65b04954cc8c200e1db144e2d68aabb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0ab749602674cc550611925b3dcc97a65b04954cc8c200e1db144e2d68aabb->enter($__internal_df0ab749602674cc550611925b3dcc97a65b04954cc8c200e1db144e2d68aabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_df0ab749602674cc550611925b3dcc97a65b04954cc8c200e1db144e2d68aabb->leave($__internal_df0ab749602674cc550611925b3dcc97a65b04954cc8c200e1db144e2d68aabb_prof);

        
        $__internal_124c22d101c37f83876016ad516aa1fe6b5d187eaffbf8dea01522e04c19f245->leave($__internal_124c22d101c37f83876016ad516aa1fe6b5d187eaffbf8dea01522e04c19f245_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_749d850ee8821a909eb80fa682ee0a64337aa68e3a062a88334e7c2642f4eafe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_749d850ee8821a909eb80fa682ee0a64337aa68e3a062a88334e7c2642f4eafe->enter($__internal_749d850ee8821a909eb80fa682ee0a64337aa68e3a062a88334e7c2642f4eafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_a79a8119826f1590016c35c1ef7c04b39f06ca2e8eb4d52d2cdf1873efda3759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a79a8119826f1590016c35c1ef7c04b39f06ca2e8eb4d52d2cdf1873efda3759->enter($__internal_a79a8119826f1590016c35c1ef7c04b39f06ca2e8eb4d52d2cdf1873efda3759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_a79a8119826f1590016c35c1ef7c04b39f06ca2e8eb4d52d2cdf1873efda3759->leave($__internal_a79a8119826f1590016c35c1ef7c04b39f06ca2e8eb4d52d2cdf1873efda3759_prof);

        
        $__internal_749d850ee8821a909eb80fa682ee0a64337aa68e3a062a88334e7c2642f4eafe->leave($__internal_749d850ee8821a909eb80fa682ee0a64337aa68e3a062a88334e7c2642f4eafe_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_70cd4e0997ba84087fdc81720893be28841033758a92ffef550d60668bb12687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70cd4e0997ba84087fdc81720893be28841033758a92ffef550d60668bb12687->enter($__internal_70cd4e0997ba84087fdc81720893be28841033758a92ffef550d60668bb12687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_dd6582fca861a3351d49f25e4424c80dec7d44e4c8cadf6c05e9683453c8e87b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd6582fca861a3351d49f25e4424c80dec7d44e4c8cadf6c05e9683453c8e87b->enter($__internal_dd6582fca861a3351d49f25e4424c80dec7d44e4c8cadf6c05e9683453c8e87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_dd6582fca861a3351d49f25e4424c80dec7d44e4c8cadf6c05e9683453c8e87b->leave($__internal_dd6582fca861a3351d49f25e4424c80dec7d44e4c8cadf6c05e9683453c8e87b_prof);

        
        $__internal_70cd4e0997ba84087fdc81720893be28841033758a92ffef550d60668bb12687->leave($__internal_70cd4e0997ba84087fdc81720893be28841033758a92ffef550d60668bb12687_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_55e9ec777f22d18dfb4898d5100ea8297b163c9021b710ad7677832e5b00aa26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55e9ec777f22d18dfb4898d5100ea8297b163c9021b710ad7677832e5b00aa26->enter($__internal_55e9ec777f22d18dfb4898d5100ea8297b163c9021b710ad7677832e5b00aa26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_f8511b7bbdd57590711c20f6d4d6707d8b0292984f570f89a07c291f6e1e986b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8511b7bbdd57590711c20f6d4d6707d8b0292984f570f89a07c291f6e1e986b->enter($__internal_f8511b7bbdd57590711c20f6d4d6707d8b0292984f570f89a07c291f6e1e986b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_f8511b7bbdd57590711c20f6d4d6707d8b0292984f570f89a07c291f6e1e986b->leave($__internal_f8511b7bbdd57590711c20f6d4d6707d8b0292984f570f89a07c291f6e1e986b_prof);

        
        $__internal_55e9ec777f22d18dfb4898d5100ea8297b163c9021b710ad7677832e5b00aa26->leave($__internal_55e9ec777f22d18dfb4898d5100ea8297b163c9021b710ad7677832e5b00aa26_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_c5bbdfd655742c8d340a8597604fd2735e80d3a9861a6fca9894fa615913b5b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5bbdfd655742c8d340a8597604fd2735e80d3a9861a6fca9894fa615913b5b3->enter($__internal_c5bbdfd655742c8d340a8597604fd2735e80d3a9861a6fca9894fa615913b5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_8d13cce4a3c90614fa82010d6f6fc3b985fbe280dfb419f23f8fd4452776d92b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d13cce4a3c90614fa82010d6f6fc3b985fbe280dfb419f23f8fd4452776d92b->enter($__internal_8d13cce4a3c90614fa82010d6f6fc3b985fbe280dfb419f23f8fd4452776d92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_8d13cce4a3c90614fa82010d6f6fc3b985fbe280dfb419f23f8fd4452776d92b->leave($__internal_8d13cce4a3c90614fa82010d6f6fc3b985fbe280dfb419f23f8fd4452776d92b_prof);

        
        $__internal_c5bbdfd655742c8d340a8597604fd2735e80d3a9861a6fca9894fa615913b5b3->leave($__internal_c5bbdfd655742c8d340a8597604fd2735e80d3a9861a6fca9894fa615913b5b3_prof);

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
