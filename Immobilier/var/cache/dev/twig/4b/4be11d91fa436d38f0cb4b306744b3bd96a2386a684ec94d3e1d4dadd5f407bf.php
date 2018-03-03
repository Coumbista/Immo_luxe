<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_f90068ac68e4a75d98436fb9625453223ccb70dfdc77580e6c24c2f779af5b8c extends Twig_Template
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
        $__internal_a6f91ae6d6c5a2e8ddb682e3ad8981728d5883a98906cfcdc2cc4a6c73fa8891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6f91ae6d6c5a2e8ddb682e3ad8981728d5883a98906cfcdc2cc4a6c73fa8891->enter($__internal_a6f91ae6d6c5a2e8ddb682e3ad8981728d5883a98906cfcdc2cc4a6c73fa8891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_08dd2958bafd0ec31199b78435d27f43388913cf1d55cc15fe19bfdb8f1cc38a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08dd2958bafd0ec31199b78435d27f43388913cf1d55cc15fe19bfdb8f1cc38a->enter($__internal_08dd2958bafd0ec31199b78435d27f43388913cf1d55cc15fe19bfdb8f1cc38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_a6f91ae6d6c5a2e8ddb682e3ad8981728d5883a98906cfcdc2cc4a6c73fa8891->leave($__internal_a6f91ae6d6c5a2e8ddb682e3ad8981728d5883a98906cfcdc2cc4a6c73fa8891_prof);

        
        $__internal_08dd2958bafd0ec31199b78435d27f43388913cf1d55cc15fe19bfdb8f1cc38a->leave($__internal_08dd2958bafd0ec31199b78435d27f43388913cf1d55cc15fe19bfdb8f1cc38a_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_b1779e072c10fcff4e85e4693dae5a5a13a6eea5c0ee0aa6ff8a5dd0dfd75950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1779e072c10fcff4e85e4693dae5a5a13a6eea5c0ee0aa6ff8a5dd0dfd75950->enter($__internal_b1779e072c10fcff4e85e4693dae5a5a13a6eea5c0ee0aa6ff8a5dd0dfd75950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_7839a650a3b91f46d6b70349d6d24ba57f80a874a370fc2f76126cf350f1154f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7839a650a3b91f46d6b70349d6d24ba57f80a874a370fc2f76126cf350f1154f->enter($__internal_7839a650a3b91f46d6b70349d6d24ba57f80a874a370fc2f76126cf350f1154f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_7839a650a3b91f46d6b70349d6d24ba57f80a874a370fc2f76126cf350f1154f->leave($__internal_7839a650a3b91f46d6b70349d6d24ba57f80a874a370fc2f76126cf350f1154f_prof);

        
        $__internal_b1779e072c10fcff4e85e4693dae5a5a13a6eea5c0ee0aa6ff8a5dd0dfd75950->leave($__internal_b1779e072c10fcff4e85e4693dae5a5a13a6eea5c0ee0aa6ff8a5dd0dfd75950_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_52b09003ddad6da5f56fd3ca5c0e448d0a6c6477ea79f6a5da6c98443bf8e8f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52b09003ddad6da5f56fd3ca5c0e448d0a6c6477ea79f6a5da6c98443bf8e8f5->enter($__internal_52b09003ddad6da5f56fd3ca5c0e448d0a6c6477ea79f6a5da6c98443bf8e8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ae31aa5100c4de402a617bbbe8d396a3937a06e446255625a44421c1d30d3a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae31aa5100c4de402a617bbbe8d396a3937a06e446255625a44421c1d30d3a53->enter($__internal_ae31aa5100c4de402a617bbbe8d396a3937a06e446255625a44421c1d30d3a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_ae31aa5100c4de402a617bbbe8d396a3937a06e446255625a44421c1d30d3a53->leave($__internal_ae31aa5100c4de402a617bbbe8d396a3937a06e446255625a44421c1d30d3a53_prof);

        
        $__internal_52b09003ddad6da5f56fd3ca5c0e448d0a6c6477ea79f6a5da6c98443bf8e8f5->leave($__internal_52b09003ddad6da5f56fd3ca5c0e448d0a6c6477ea79f6a5da6c98443bf8e8f5_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_d7b6e50ffb7db894cc62b592a3ceca3945565afe72887c2a9e55e6963c173383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7b6e50ffb7db894cc62b592a3ceca3945565afe72887c2a9e55e6963c173383->enter($__internal_d7b6e50ffb7db894cc62b592a3ceca3945565afe72887c2a9e55e6963c173383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_baa9610396f75558b603703b0b798c1bf6234f1c8e6f31f5c42ad507b0edf6f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa9610396f75558b603703b0b798c1bf6234f1c8e6f31f5c42ad507b0edf6f0->enter($__internal_baa9610396f75558b603703b0b798c1bf6234f1c8e6f31f5c42ad507b0edf6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_baa9610396f75558b603703b0b798c1bf6234f1c8e6f31f5c42ad507b0edf6f0->leave($__internal_baa9610396f75558b603703b0b798c1bf6234f1c8e6f31f5c42ad507b0edf6f0_prof);

        
        $__internal_d7b6e50ffb7db894cc62b592a3ceca3945565afe72887c2a9e55e6963c173383->leave($__internal_d7b6e50ffb7db894cc62b592a3ceca3945565afe72887c2a9e55e6963c173383_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a01a6752451009fc2404a208aeb75574cf3f51f9baa1e4c946865ba9a36a239e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a01a6752451009fc2404a208aeb75574cf3f51f9baa1e4c946865ba9a36a239e->enter($__internal_a01a6752451009fc2404a208aeb75574cf3f51f9baa1e4c946865ba9a36a239e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_aabaded73268291276f9467e54931610d751a8c6e8f967b475b997b50e0b37ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aabaded73268291276f9467e54931610d751a8c6e8f967b475b997b50e0b37ca->enter($__internal_aabaded73268291276f9467e54931610d751a8c6e8f967b475b997b50e0b37ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_aabaded73268291276f9467e54931610d751a8c6e8f967b475b997b50e0b37ca->leave($__internal_aabaded73268291276f9467e54931610d751a8c6e8f967b475b997b50e0b37ca_prof);

        
        $__internal_a01a6752451009fc2404a208aeb75574cf3f51f9baa1e4c946865ba9a36a239e->leave($__internal_a01a6752451009fc2404a208aeb75574cf3f51f9baa1e4c946865ba9a36a239e_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_92a8244bab4171ee822a9ff3d69c0ab4faaf5f357f16f600ea04735e4888a14e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92a8244bab4171ee822a9ff3d69c0ab4faaf5f357f16f600ea04735e4888a14e->enter($__internal_92a8244bab4171ee822a9ff3d69c0ab4faaf5f357f16f600ea04735e4888a14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_d413aec3ce79417b1b57170fd74d2609b227bb94f3a868aef329a703199f76f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d413aec3ce79417b1b57170fd74d2609b227bb94f3a868aef329a703199f76f1->enter($__internal_d413aec3ce79417b1b57170fd74d2609b227bb94f3a868aef329a703199f76f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_d413aec3ce79417b1b57170fd74d2609b227bb94f3a868aef329a703199f76f1->leave($__internal_d413aec3ce79417b1b57170fd74d2609b227bb94f3a868aef329a703199f76f1_prof);

        
        $__internal_92a8244bab4171ee822a9ff3d69c0ab4faaf5f357f16f600ea04735e4888a14e->leave($__internal_92a8244bab4171ee822a9ff3d69c0ab4faaf5f357f16f600ea04735e4888a14e_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_3adbab989097312e15a9a64262989e334ba39a58c93b337d92601b56e72fd832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3adbab989097312e15a9a64262989e334ba39a58c93b337d92601b56e72fd832->enter($__internal_3adbab989097312e15a9a64262989e334ba39a58c93b337d92601b56e72fd832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_9f8f7e827233e71a84d40a427f38ac974f63e020942a8bf3e161582e15c12c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f8f7e827233e71a84d40a427f38ac974f63e020942a8bf3e161582e15c12c0e->enter($__internal_9f8f7e827233e71a84d40a427f38ac974f63e020942a8bf3e161582e15c12c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_9f8f7e827233e71a84d40a427f38ac974f63e020942a8bf3e161582e15c12c0e->leave($__internal_9f8f7e827233e71a84d40a427f38ac974f63e020942a8bf3e161582e15c12c0e_prof);

        
        $__internal_3adbab989097312e15a9a64262989e334ba39a58c93b337d92601b56e72fd832->leave($__internal_3adbab989097312e15a9a64262989e334ba39a58c93b337d92601b56e72fd832_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_383bc9872a2dcea80a940cb3abd07a8e5a972d8eb7a40f2be8bc4d07a73af85b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_383bc9872a2dcea80a940cb3abd07a8e5a972d8eb7a40f2be8bc4d07a73af85b->enter($__internal_383bc9872a2dcea80a940cb3abd07a8e5a972d8eb7a40f2be8bc4d07a73af85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_f02a3986b0fd98454e67a3a0db1443ff2345f616a5ea14b396f06bb0366c6383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02a3986b0fd98454e67a3a0db1443ff2345f616a5ea14b396f06bb0366c6383->enter($__internal_f02a3986b0fd98454e67a3a0db1443ff2345f616a5ea14b396f06bb0366c6383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_f02a3986b0fd98454e67a3a0db1443ff2345f616a5ea14b396f06bb0366c6383->leave($__internal_f02a3986b0fd98454e67a3a0db1443ff2345f616a5ea14b396f06bb0366c6383_prof);

        
        $__internal_383bc9872a2dcea80a940cb3abd07a8e5a972d8eb7a40f2be8bc4d07a73af85b->leave($__internal_383bc9872a2dcea80a940cb3abd07a8e5a972d8eb7a40f2be8bc4d07a73af85b_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_f2632eec4d70ea3369d73395ecf005e74fa6257c4838d1f6b970b62b2e27215c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2632eec4d70ea3369d73395ecf005e74fa6257c4838d1f6b970b62b2e27215c->enter($__internal_f2632eec4d70ea3369d73395ecf005e74fa6257c4838d1f6b970b62b2e27215c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_bf32119f132942ba479e7279d81f4f7e32e04a69d0c5520bc5efbf2add1170a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf32119f132942ba479e7279d81f4f7e32e04a69d0c5520bc5efbf2add1170a5->enter($__internal_bf32119f132942ba479e7279d81f4f7e32e04a69d0c5520bc5efbf2add1170a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_bf32119f132942ba479e7279d81f4f7e32e04a69d0c5520bc5efbf2add1170a5->leave($__internal_bf32119f132942ba479e7279d81f4f7e32e04a69d0c5520bc5efbf2add1170a5_prof);

        
        $__internal_f2632eec4d70ea3369d73395ecf005e74fa6257c4838d1f6b970b62b2e27215c->leave($__internal_f2632eec4d70ea3369d73395ecf005e74fa6257c4838d1f6b970b62b2e27215c_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_1f5bb97516d4cb631b9a6ac67e6956506d8fc3711ecade3a5aeaab227df3ca4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f5bb97516d4cb631b9a6ac67e6956506d8fc3711ecade3a5aeaab227df3ca4f->enter($__internal_1f5bb97516d4cb631b9a6ac67e6956506d8fc3711ecade3a5aeaab227df3ca4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_de6f66fa40cdb2febf8ece6f860e694abd6a4cacc1b0bcd5b0afe3202a87cb6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de6f66fa40cdb2febf8ece6f860e694abd6a4cacc1b0bcd5b0afe3202a87cb6c->enter($__internal_de6f66fa40cdb2febf8ece6f860e694abd6a4cacc1b0bcd5b0afe3202a87cb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_de6f66fa40cdb2febf8ece6f860e694abd6a4cacc1b0bcd5b0afe3202a87cb6c->leave($__internal_de6f66fa40cdb2febf8ece6f860e694abd6a4cacc1b0bcd5b0afe3202a87cb6c_prof);

        
        $__internal_1f5bb97516d4cb631b9a6ac67e6956506d8fc3711ecade3a5aeaab227df3ca4f->leave($__internal_1f5bb97516d4cb631b9a6ac67e6956506d8fc3711ecade3a5aeaab227df3ca4f_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_29ad5ece90ee0521b6a196c5d264439b8ff51bf456818ba7b415e69d35ed4973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29ad5ece90ee0521b6a196c5d264439b8ff51bf456818ba7b415e69d35ed4973->enter($__internal_29ad5ece90ee0521b6a196c5d264439b8ff51bf456818ba7b415e69d35ed4973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_34b4d20ede8944a6ff3c80f45fa106ce4f7ea04c068013ca37f0348ed88a03af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b4d20ede8944a6ff3c80f45fa106ce4f7ea04c068013ca37f0348ed88a03af->enter($__internal_34b4d20ede8944a6ff3c80f45fa106ce4f7ea04c068013ca37f0348ed88a03af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_34b4d20ede8944a6ff3c80f45fa106ce4f7ea04c068013ca37f0348ed88a03af->leave($__internal_34b4d20ede8944a6ff3c80f45fa106ce4f7ea04c068013ca37f0348ed88a03af_prof);

        
        $__internal_29ad5ece90ee0521b6a196c5d264439b8ff51bf456818ba7b415e69d35ed4973->leave($__internal_29ad5ece90ee0521b6a196c5d264439b8ff51bf456818ba7b415e69d35ed4973_prof);

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
