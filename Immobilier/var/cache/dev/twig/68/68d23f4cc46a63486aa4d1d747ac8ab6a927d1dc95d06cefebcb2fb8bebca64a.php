<?php

/* @EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_6860a8fe753bca6cb48c8e9569004b06aa1bb8187ef74c714ead56056de61993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@EasyAdmin/form/bootstrap_3_layout.html.twig", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@EasyAdmin/form/bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
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
        $__internal_3333e377dd961b35a5a34a3a97cacf1833a0ccc78c5216b9b2ba9a934b250e70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3333e377dd961b35a5a34a3a97cacf1833a0ccc78c5216b9b2ba9a934b250e70->enter($__internal_3333e377dd961b35a5a34a3a97cacf1833a0ccc78c5216b9b2ba9a934b250e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig"));

        $__internal_a5f0d67729e897306d046e967560d14a956dc3cb6be98b96def29a204afb1443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5f0d67729e897306d046e967560d14a956dc3cb6be98b96def29a204afb1443->enter($__internal_a5f0d67729e897306d046e967560d14a956dc3cb6be98b96def29a204afb1443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig"));

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
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('radio_row', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('submit_row', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('reset_row', $context, $blocks);
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_3333e377dd961b35a5a34a3a97cacf1833a0ccc78c5216b9b2ba9a934b250e70->leave($__internal_3333e377dd961b35a5a34a3a97cacf1833a0ccc78c5216b9b2ba9a934b250e70_prof);

        
        $__internal_a5f0d67729e897306d046e967560d14a956dc3cb6be98b96def29a204afb1443->leave($__internal_a5f0d67729e897306d046e967560d14a956dc3cb6be98b96def29a204afb1443_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_cff9c1c9696b6df377e6442a51ab0df987361d3ee142be7b5dcd6cf65cbe2bf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cff9c1c9696b6df377e6442a51ab0df987361d3ee142be7b5dcd6cf65cbe2bf6->enter($__internal_cff9c1c9696b6df377e6442a51ab0df987361d3ee142be7b5dcd6cf65cbe2bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_75630b532832fd4ec1b456d38ccaf11ae646a24faba9dfc56a512be9702cb9b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75630b532832fd4ec1b456d38ccaf11ae646a24faba9dfc56a512be9702cb9b5->enter($__internal_75630b532832fd4ec1b456d38ccaf11ae646a24faba9dfc56a512be9702cb9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["_easyadmin_form_type"] = "horizontal";
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_75630b532832fd4ec1b456d38ccaf11ae646a24faba9dfc56a512be9702cb9b5->leave($__internal_75630b532832fd4ec1b456d38ccaf11ae646a24faba9dfc56a512be9702cb9b5_prof);

        
        $__internal_cff9c1c9696b6df377e6442a51ab0df987361d3ee142be7b5dcd6cf65cbe2bf6->leave($__internal_cff9c1c9696b6df377e6442a51ab0df987361d3ee142be7b5dcd6cf65cbe2bf6_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_1db024180ddbb5092a87e86814c19687cfc5f6cd4c7529b232cf7a2825f6f0a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1db024180ddbb5092a87e86814c19687cfc5f6cd4c7529b232cf7a2825f6f0a0->enter($__internal_1db024180ddbb5092a87e86814c19687cfc5f6cd4c7529b232cf7a2825f6f0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_4a268852e7d755a8f2deeccdf707b9e06b6d2065f07c5245900aa99f1aa30891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a268852e7d755a8f2deeccdf707b9e06b6d2065f07c5245900aa99f1aa30891->enter($__internal_4a268852e7d755a8f2deeccdf707b9e06b6d2065f07c5245900aa99f1aa30891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_4a268852e7d755a8f2deeccdf707b9e06b6d2065f07c5245900aa99f1aa30891->leave($__internal_4a268852e7d755a8f2deeccdf707b9e06b6d2065f07c5245900aa99f1aa30891_prof);

        
        $__internal_1db024180ddbb5092a87e86814c19687cfc5f6cd4c7529b232cf7a2825f6f0a0->leave($__internal_1db024180ddbb5092a87e86814c19687cfc5f6cd4c7529b232cf7a2825f6f0a0_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_c7eb90a4106435577d21e4f42494e8a2fe08a7744563323c07bf2420a01c13a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7eb90a4106435577d21e4f42494e8a2fe08a7744563323c07bf2420a01c13a1->enter($__internal_c7eb90a4106435577d21e4f42494e8a2fe08a7744563323c07bf2420a01c13a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_d5cce52aaac8373c1bc67745867990df14e2beeaabcd9fc6f3357ff5fd291c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5cce52aaac8373c1bc67745867990df14e2beeaabcd9fc6f3357ff5fd291c20->enter($__internal_d5cce52aaac8373c1bc67745867990df14e2beeaabcd9fc6f3357ff5fd291c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        echo "col-sm-2";
        
        $__internal_d5cce52aaac8373c1bc67745867990df14e2beeaabcd9fc6f3357ff5fd291c20->leave($__internal_d5cce52aaac8373c1bc67745867990df14e2beeaabcd9fc6f3357ff5fd291c20_prof);

        
        $__internal_c7eb90a4106435577d21e4f42494e8a2fe08a7744563323c07bf2420a01c13a1->leave($__internal_c7eb90a4106435577d21e4f42494e8a2fe08a7744563323c07bf2420a01c13a1_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0a568f9a3af32f0117f4250bee676766d498a03cb74dd70bb221ae1db12d094c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a568f9a3af32f0117f4250bee676766d498a03cb74dd70bb221ae1db12d094c->enter($__internal_0a568f9a3af32f0117f4250bee676766d498a03cb74dd70bb221ae1db12d094c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_91d5f5d29d8fa0893f0b7dc051a8baaa30e85c5e81819afb443f773d84aa13fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d5f5d29d8fa0893f0b7dc051a8baaa30e85c5e81819afb443f773d84aa13fd->enter($__internal_91d5f5d29d8fa0893f0b7dc051a8baaa30e85c5e81819afb443f773d84aa13fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        ob_start();
        // line 27
        echo "    ";
        $context["_field_type"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 28
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 28, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 28, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 28, $this->getSourceContext()); })()))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 28, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo "\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'label');
        echo "
        <div class=\"";
        // line 30
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'widget');
        echo "

            ";
        // line 33
        if ((twig_in_filter((isset($context["_field_type"]) || array_key_exists("_field_type", $context) ? $context["_field_type"] : (function () { throw new Twig_Error_Runtime('Variable "_field_type" does not exist.', 33, $this->getSourceContext()); })()), array(0 => "datetime", 1 => "datetime_immutable", 2 => "date", 3 => "date_immutable", 4 => "time", 5 => "time_immutable", 6 => "birthday")) && ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 34
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 36
            if ((null === (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 36, $this->getSourceContext()); })()))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 41
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'errors');
        echo "

            ";
        // line 44
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 45
            echo "                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 45, $this->getSourceContext()); })()), "field", array()), "help", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 45, $this->getSourceContext()); })()), "entity", array()), "translation_domain", array()));
            echo "</span>
            ";
        }
        // line 47
        echo "        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_91d5f5d29d8fa0893f0b7dc051a8baaa30e85c5e81819afb443f773d84aa13fd->leave($__internal_91d5f5d29d8fa0893f0b7dc051a8baaa30e85c5e81819afb443f773d84aa13fd_prof);

        
        $__internal_0a568f9a3af32f0117f4250bee676766d498a03cb74dd70bb221ae1db12d094c->leave($__internal_0a568f9a3af32f0117f4250bee676766d498a03cb74dd70bb221ae1db12d094c_prof);

    }

    // line 52
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4b48d2ab64056787c16f939a8ef436ba199c6e328b5a2b685bf56010d2a1c4be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b48d2ab64056787c16f939a8ef436ba199c6e328b5a2b685bf56010d2a1c4be->enter($__internal_4b48d2ab64056787c16f939a8ef436ba199c6e328b5a2b685bf56010d2a1c4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_57f798e9becf87b63e2ffe0ebd99f9e42af673635ad84ff9cb1de6ed95fdd0fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f798e9becf87b63e2ffe0ebd99f9e42af673635ad84ff9cb1de6ed95fdd0fb->enter($__internal_57f798e9becf87b63e2ffe0ebd99f9e42af673635ad84ff9cb1de6ed95fdd0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 53
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_57f798e9becf87b63e2ffe0ebd99f9e42af673635ad84ff9cb1de6ed95fdd0fb->leave($__internal_57f798e9becf87b63e2ffe0ebd99f9e42af673635ad84ff9cb1de6ed95fdd0fb_prof);

        
        $__internal_4b48d2ab64056787c16f939a8ef436ba199c6e328b5a2b685bf56010d2a1c4be->leave($__internal_4b48d2ab64056787c16f939a8ef436ba199c6e328b5a2b685bf56010d2a1c4be_prof);

    }

    // line 56
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_5d2849da44a9e43b5c746b8d37df11acdad0d7a2a0eadad18994336e394bbd8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d2849da44a9e43b5c746b8d37df11acdad0d7a2a0eadad18994336e394bbd8a->enter($__internal_5d2849da44a9e43b5c746b8d37df11acdad0d7a2a0eadad18994336e394bbd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_e7fd618da6095926e2beba3576068de9964a48a84f774e9420d8caac6da07f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7fd618da6095926e2beba3576068de9964a48a84f774e9420d8caac6da07f15->enter($__internal_e7fd618da6095926e2beba3576068de9964a48a84f774e9420d8caac6da07f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 57
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_e7fd618da6095926e2beba3576068de9964a48a84f774e9420d8caac6da07f15->leave($__internal_e7fd618da6095926e2beba3576068de9964a48a84f774e9420d8caac6da07f15_prof);

        
        $__internal_5d2849da44a9e43b5c746b8d37df11acdad0d7a2a0eadad18994336e394bbd8a->leave($__internal_5d2849da44a9e43b5c746b8d37df11acdad0d7a2a0eadad18994336e394bbd8a_prof);

    }

    // line 60
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_7be28afdb2b526a194c12400b58d1eee7b8ac4452a01eca61fdaa91e0941fcf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7be28afdb2b526a194c12400b58d1eee7b8ac4452a01eca61fdaa91e0941fcf2->enter($__internal_7be28afdb2b526a194c12400b58d1eee7b8ac4452a01eca61fdaa91e0941fcf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_27b6552e3fb53b6dc3f75167c76cb0128633b9cb3067da3edca43508f1386f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b6552e3fb53b6dc3f75167c76cb0128633b9cb3067da3edca43508f1386f02->enter($__internal_27b6552e3fb53b6dc3f75167c76cb0128633b9cb3067da3edca43508f1386f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 61
        ob_start();
        // line 62
        echo "    <div class=\"form-group ";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 62, $this->getSourceContext()); })())) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 62, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 63
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 64
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_27b6552e3fb53b6dc3f75167c76cb0128633b9cb3067da3edca43508f1386f02->leave($__internal_27b6552e3fb53b6dc3f75167c76cb0128633b9cb3067da3edca43508f1386f02_prof);

        
        $__internal_7be28afdb2b526a194c12400b58d1eee7b8ac4452a01eca61fdaa91e0941fcf2->leave($__internal_7be28afdb2b526a194c12400b58d1eee7b8ac4452a01eca61fdaa91e0941fcf2_prof);

    }

    // line 72
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_013ca217d028ce94d5b1134726c7dc369c4f3f8edb3f906cfee76e613bc2216d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_013ca217d028ce94d5b1134726c7dc369c4f3f8edb3f906cfee76e613bc2216d->enter($__internal_013ca217d028ce94d5b1134726c7dc369c4f3f8edb3f906cfee76e613bc2216d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_dac92e636becfb8b21042694b03828deb785c294e7361340914141fe851c8329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac92e636becfb8b21042694b03828deb785c294e7361340914141fe851c8329->enter($__internal_dac92e636becfb8b21042694b03828deb785c294e7361340914141fe851c8329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 73
        ob_start();
        // line 74
        echo "    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 74, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 75
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 76
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 77, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_dac92e636becfb8b21042694b03828deb785c294e7361340914141fe851c8329->leave($__internal_dac92e636becfb8b21042694b03828deb785c294e7361340914141fe851c8329_prof);

        
        $__internal_013ca217d028ce94d5b1134726c7dc369c4f3f8edb3f906cfee76e613bc2216d->leave($__internal_013ca217d028ce94d5b1134726c7dc369c4f3f8edb3f906cfee76e613bc2216d_prof);

    }

    // line 83
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_fb1d637814eae702afd434a73dcdd0bce57133e87a65f7f30ebc2d1bae6ddc8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb1d637814eae702afd434a73dcdd0bce57133e87a65f7f30ebc2d1bae6ddc8c->enter($__internal_fb1d637814eae702afd434a73dcdd0bce57133e87a65f7f30ebc2d1bae6ddc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_0626c574a042f48ca74edbda67d8e8105a4534e421aa25aaf83f4a3803df5b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0626c574a042f48ca74edbda67d8e8105a4534e421aa25aaf83f4a3803df5b7e->enter($__internal_0626c574a042f48ca74edbda67d8e8105a4534e421aa25aaf83f4a3803df5b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 84
        ob_start();
        // line 85
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 86
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 87
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0626c574a042f48ca74edbda67d8e8105a4534e421aa25aaf83f4a3803df5b7e->leave($__internal_0626c574a042f48ca74edbda67d8e8105a4534e421aa25aaf83f4a3803df5b7e_prof);

        
        $__internal_fb1d637814eae702afd434a73dcdd0bce57133e87a65f7f30ebc2d1bae6ddc8c->leave($__internal_fb1d637814eae702afd434a73dcdd0bce57133e87a65f7f30ebc2d1bae6ddc8c_prof);

    }

    // line 94
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_ff5a4055ea49ec82de586dcd4f1a8a74015e7cd858ca90a217d0c4653399a540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff5a4055ea49ec82de586dcd4f1a8a74015e7cd858ca90a217d0c4653399a540->enter($__internal_ff5a4055ea49ec82de586dcd4f1a8a74015e7cd858ca90a217d0c4653399a540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_cbaf4cba0724ca16c1f2041a79e15cd05ffa907e0bf5e9e4c26f9726418f65cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbaf4cba0724ca16c1f2041a79e15cd05ffa907e0bf5e9e4c26f9726418f65cf->enter($__internal_cbaf4cba0724ca16c1f2041a79e15cd05ffa907e0bf5e9e4c26f9726418f65cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        echo "col-sm-10";
        
        $__internal_cbaf4cba0724ca16c1f2041a79e15cd05ffa907e0bf5e9e4c26f9726418f65cf->leave($__internal_cbaf4cba0724ca16c1f2041a79e15cd05ffa907e0bf5e9e4c26f9726418f65cf_prof);

        
        $__internal_ff5a4055ea49ec82de586dcd4f1a8a74015e7cd858ca90a217d0c4653399a540->leave($__internal_ff5a4055ea49ec82de586dcd4f1a8a74015e7cd858ca90a217d0c4653399a540_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  430 => 94,  415 => 88,  411 => 87,  407 => 86,  404 => 85,  402 => 84,  393 => 83,  378 => 77,  374 => 76,  370 => 75,  365 => 74,  363 => 73,  354 => 72,  339 => 66,  335 => 65,  331 => 64,  327 => 63,  318 => 62,  316 => 61,  307 => 60,  297 => 57,  288 => 56,  278 => 53,  269 => 52,  256 => 47,  250 => 45,  248 => 44,  243 => 42,  240 => 41,  233 => 37,  227 => 36,  223 => 34,  221 => 33,  216 => 31,  212 => 30,  208 => 29,  199 => 28,  196 => 27,  194 => 26,  185 => 25,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 94,  98 => 93,  96 => 83,  93 => 82,  91 => 72,  88 => 71,  86 => 60,  83 => 59,  81 => 56,  78 => 55,  76 => 52,  73 => 51,  71 => 25,  68 => 24,  65 => 22,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"@EasyAdmin/form/bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set _easyadmin_form_type = 'horizontal' %}
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

{% block form_label_class 'col-sm-2' %}

{# Rows #}

{% block form_row -%}
{% spaceless %}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{ form_label(form) }}
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}

            {% if _field_type in ['datetime', 'datetime_immutable', 'date', 'date_immutable', 'time', 'time_immutable', 'birthday'] and easyadmin.field.nullable|default(false) %}
                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                        {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                    </label>
                </div>
            {% endif %}

            {{ form_errors(form) }}

            {% if easyadmin.field.help|default('') != '' %}
                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
            {% endif %}
        </div>
    </div>
{% endspaceless %}
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
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
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }}\">
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

{% block form_group_class 'col-sm-10' %}
", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig", "/var/www/html/Agence_immobilier/Immobilier/vendor/easycorp/easyadmin-bundle/src/Resources/views/form/bootstrap_3_horizontal_layout.html.twig");
    }
}
