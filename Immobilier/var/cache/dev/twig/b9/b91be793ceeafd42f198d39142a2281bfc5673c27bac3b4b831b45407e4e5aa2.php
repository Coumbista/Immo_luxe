<?php

/* @EasyAdmin/form/bootstrap_3_layout.html.twig */
class __TwigTemplate_821c1ac5479e1a6d9c3f80af74e3eff06d4f8a5e872f33b491bac04b7cfcad60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "@EasyAdmin/form/bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'collection_row' => array($this, 'block_collection_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'empty_collection' => array($this, 'block_empty_collection'),
                'vich_file_row' => array($this, 'block_vich_file_row'),
                'vich_file_widget' => array($this, 'block_vich_file_widget'),
                'vich_image_row' => array($this, 'block_vich_image_row'),
                'vich_image_widget' => array($this, 'block_vich_image_widget'),
                'easyadmin_rest' => array($this, 'block_easyadmin_rest'),
                'item_actions' => array($this, 'block_item_actions'),
                'easyadmin_widget' => array($this, 'block_easyadmin_widget'),
                'easyadmin_widget_groups' => array($this, 'block_easyadmin_widget_groups'),
                'easyadmin_autocomplete_widget' => array($this, 'block_easyadmin_autocomplete_widget'),
                'easyadmin_autocomplete_inner_label' => array($this, 'block_easyadmin_autocomplete_inner_label'),
                'easyadmin_divider_row' => array($this, 'block_easyadmin_divider_row'),
                'easyadmin_section_row' => array($this, 'block_easyadmin_section_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d44364f0f532ef52a5c51f492a7b37422fff1e118fd55c291cc229648d3f70a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d44364f0f532ef52a5c51f492a7b37422fff1e118fd55c291cc229648d3f70a->enter($__internal_5d44364f0f532ef52a5c51f492a7b37422fff1e118fd55c291cc229648d3f70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

        $__internal_2702b808a892e26792ab02cf85ef0c54fb0b12e2d20f1169a5a26b03cb6ce275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2702b808a892e26792ab02cf85ef0c54fb0b12e2d20f1169a5a26b03cb6ce275->enter($__internal_2702b808a892e26792ab02cf85ef0c54fb0b12e2d20f1169a5a26b03cb6ce275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('form_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('button_widget', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('money_widget', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 106
        echo "
";
        // line 107
        $this->displayBlock('date_widget', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('time_widget', $context, $blocks);
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 190
        echo "
";
        // line 191
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 201
        echo "
";
        // line 202
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 212
        echo "
";
        // line 214
        echo "
";
        // line 215
        $this->displayBlock('form_label', $context, $blocks);
        // line 219
        echo "
";
        // line 220
        $this->displayBlock('choice_label', $context, $blocks);
        // line 225
        echo "
";
        // line 226
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 229
        echo "
";
        // line 230
        $this->displayBlock('radio_label', $context, $blocks);
        // line 233
        echo "
";
        // line 234
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 252
        echo "
";
        // line 254
        echo "
";
        // line 255
        $this->displayBlock('form_row', $context, $blocks);
        // line 277
        echo "
";
        // line 278
        $this->displayBlock('collection_row', $context, $blocks);
        // line 313
        echo "
";
        // line 314
        $this->displayBlock('button_row', $context, $blocks);
        // line 319
        echo "
";
        // line 320
        $this->displayBlock('choice_row', $context, $blocks);
        // line 324
        echo "
";
        // line 325
        $this->displayBlock('date_row', $context, $blocks);
        // line 329
        echo "
";
        // line 330
        $this->displayBlock('time_row', $context, $blocks);
        // line 334
        echo "
";
        // line 335
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 339
        echo "
";
        // line 340
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 346
        echo "
";
        // line 347
        $this->displayBlock('radio_row', $context, $blocks);
        // line 353
        echo "
";
        // line 355
        $this->displayBlock('form_errors', $context, $blocks);
        // line 373
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 386
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 391
        echo "
";
        // line 392
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 396
        echo "
";
        // line 397
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 418
        echo "
";
        // line 419
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 423
        echo "
";
        // line 424
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 446
        echo "
";
        // line 447
        $this->displayBlock('easyadmin_rest', $context, $blocks);
        // line 459
        echo "
";
        // line 460
        $this->displayBlock('item_actions', $context, $blocks);
        // line 487
        echo "
";
        // line 489
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 528
        echo "
";
        // line 529
        $this->displayBlock('easyadmin_widget_groups', $context, $blocks);
        // line 569
        echo "
";
        // line 571
        $this->displayBlock('easyadmin_autocomplete_widget', $context, $blocks);
        // line 581
        echo "
";
        // line 582
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        // line 586
        echo "
";
        // line 588
        $this->displayBlock('easyadmin_divider_row', $context, $blocks);
        // line 593
        echo "
";
        // line 595
        $this->displayBlock('easyadmin_section_row', $context, $blocks);
        
        $__internal_5d44364f0f532ef52a5c51f492a7b37422fff1e118fd55c291cc229648d3f70a->leave($__internal_5d44364f0f532ef52a5c51f492a7b37422fff1e118fd55c291cc229648d3f70a_prof);

        
        $__internal_2702b808a892e26792ab02cf85ef0c54fb0b12e2d20f1169a5a26b03cb6ce275->leave($__internal_2702b808a892e26792ab02cf85ef0c54fb0b12e2d20f1169a5a26b03cb6ce275_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_8691a40691036875a5396fad66dbc6f4d1150f5c51cb731f1abf9c80854bb7e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8691a40691036875a5396fad66dbc6f4d1150f5c51cb731f1abf9c80854bb7e6->enter($__internal_8691a40691036875a5396fad66dbc6f4d1150f5c51cb731f1abf9c80854bb7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_637db1b151ea59df00331a86101a05a4c8509b525c3fb338bc8f5ea56232a7a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_637db1b151ea59df00331a86101a05a4c8509b525c3fb338bc8f5ea56232a7a2->enter($__internal_637db1b151ea59df00331a86101a05a4c8509b525c3fb338bc8f5ea56232a7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 4, $this->getSourceContext()); })()),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 5, $this->getSourceContext()); })()), array("class" => twig_join_filter(array(0 => (((((            // line 7
array_key_exists("_easyadmin_form_type", $context)) ? (_twig_default_filter((isset($context["_easyadmin_form_type"]) || array_key_exists("_easyadmin_form_type", $context) ? $context["_easyadmin_form_type"] : (function () { throw new Twig_Error_Runtime('Variable "_easyadmin_form_type" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "horizontal")) ? ("form-horizontal") : ("form-vertical")), 1 => ((twig_get_attribute($this->env, $this->getSourceContext(),             // line 8
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")), 2 => (twig_get_attribute($this->env, $this->getSourceContext(),             // line 9
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 9, $this->getSourceContext()); })()), "view", array()) . "-form")), " "), "data-view" => twig_get_attribute($this->env, $this->getSourceContext(),             // line 11
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 11, $this->getSourceContext()); })()), "view", array()), "data-entity" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 12
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 12, $this->getSourceContext()); })()), "entity", array()), "name", array()), "data-entity-id" => twig_get_attribute($this->env, $this->getSourceContext(),             // line 13
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 13, $this->getSourceContext()); })()), "entity", array()), "primary_key_field_name", array()))));
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "vars", array()), "errors", array())) > 0)) {
            // line 18
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), 'errors');
            echo "
    ";
        }
        // line 21
        $this->displayParentBlock("form_start", $context, $blocks);
        // line 23
        echo "<input type=\"hidden\" name=\"referer\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 23, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
        echo "\"/>";
        
        $__internal_637db1b151ea59df00331a86101a05a4c8509b525c3fb338bc8f5ea56232a7a2->leave($__internal_637db1b151ea59df00331a86101a05a4c8509b525c3fb338bc8f5ea56232a7a2_prof);

        
        $__internal_8691a40691036875a5396fad66dbc6f4d1150f5c51cb731f1abf9c80854bb7e6->leave($__internal_8691a40691036875a5396fad66dbc6f4d1150f5c51cb731f1abf9c80854bb7e6_prof);

    }

    // line 28
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_500833d7dca8d095dc1940f5e8b77e33a7cb9f8351b0e4371de56fc9328f3f68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_500833d7dca8d095dc1940f5e8b77e33a7cb9f8351b0e4371de56fc9328f3f68->enter($__internal_500833d7dca8d095dc1940f5e8b77e33a7cb9f8351b0e4371de56fc9328f3f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_c1a6765e3887f6c4cf0379c6172978a655abfb677d3a5d01b2a8e9067534dd93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a6765e3887f6c4cf0379c6172978a655abfb677d3a5d01b2a8e9067534dd93->enter($__internal_c1a6765e3887f6c4cf0379c6172978a655abfb677d3a5d01b2a8e9067534dd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 29
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 31
        if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 32
            echo "        ";
            ob_start();
            // line 33
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 36, $this->getSourceContext()); })()), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 46
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 48
            echo (isset($context["remove_item_javascript"]) || array_key_exists("remove_item_javascript", $context) ? $context["remove_item_javascript"] : (function () { throw new Twig_Error_Runtime('Variable "remove_item_javascript" does not exist.', 48, $this->getSourceContext()); })());
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_c1a6765e3887f6c4cf0379c6172978a655abfb677d3a5d01b2a8e9067534dd93->leave($__internal_c1a6765e3887f6c4cf0379c6172978a655abfb677d3a5d01b2a8e9067534dd93_prof);

        
        $__internal_500833d7dca8d095dc1940f5e8b77e33a7cb9f8351b0e4371de56fc9328f3f68->leave($__internal_500833d7dca8d095dc1940f5e8b77e33a7cb9f8351b0e4371de56fc9328f3f68_prof);

    }

    // line 56
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c8a665344092d35ff0c3dc89c841a5abc6f004f78783924bd9b665d7f3157146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8a665344092d35ff0c3dc89c841a5abc6f004f78783924bd9b665d7f3157146->enter($__internal_c8a665344092d35ff0c3dc89c841a5abc6f004f78783924bd9b665d7f3157146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_0a2434ca323dc464ef8a7405d4ee86b412034148c1206089daee319955c93f1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a2434ca323dc464ef8a7405d4ee86b412034148c1206089daee319955c93f1b->enter($__internal_0a2434ca323dc464ef8a7405d4ee86b412034148c1206089daee319955c93f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 57
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 57, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 58
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 58, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 60
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0a2434ca323dc464ef8a7405d4ee86b412034148c1206089daee319955c93f1b->leave($__internal_0a2434ca323dc464ef8a7405d4ee86b412034148c1206089daee319955c93f1b_prof);

        
        $__internal_c8a665344092d35ff0c3dc89c841a5abc6f004f78783924bd9b665d7f3157146->leave($__internal_c8a665344092d35ff0c3dc89c841a5abc6f004f78783924bd9b665d7f3157146_prof);

    }

    // line 63
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_1ccf4718ad7127c2711c7274dcf0225d30cb539cc4d92ecbcd5a574441a5d176 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ccf4718ad7127c2711c7274dcf0225d30cb539cc4d92ecbcd5a574441a5d176->enter($__internal_1ccf4718ad7127c2711c7274dcf0225d30cb539cc4d92ecbcd5a574441a5d176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_a7bfb6497c8e3664e5c540516f91a90e1f4c308dbe79b3934526b295285614e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7bfb6497c8e3664e5c540516f91a90e1f4c308dbe79b3934526b295285614e6->enter($__internal_a7bfb6497c8e3664e5c540516f91a90e1f4c308dbe79b3934526b295285614e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 64
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 64, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 65
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_a7bfb6497c8e3664e5c540516f91a90e1f4c308dbe79b3934526b295285614e6->leave($__internal_a7bfb6497c8e3664e5c540516f91a90e1f4c308dbe79b3934526b295285614e6_prof);

        
        $__internal_1ccf4718ad7127c2711c7274dcf0225d30cb539cc4d92ecbcd5a574441a5d176->leave($__internal_1ccf4718ad7127c2711c7274dcf0225d30cb539cc4d92ecbcd5a574441a5d176_prof);

    }

    // line 68
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_9bf815c9d55fd5eac1aa7b465b0186ed6227bbc6722fb75b9f1abcfabb81e8a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf815c9d55fd5eac1aa7b465b0186ed6227bbc6722fb75b9f1abcfabb81e8a2->enter($__internal_9bf815c9d55fd5eac1aa7b465b0186ed6227bbc6722fb75b9f1abcfabb81e8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_35875fbcaf56a7144728da0050a9d30f387e4d7708d4b7f19dada2a22f513243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35875fbcaf56a7144728da0050a9d30f387e4d7708d4b7f19dada2a22f513243->enter($__internal_35875fbcaf56a7144728da0050a9d30f387e4d7708d4b7f19dada2a22f513243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 69
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 69, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 70
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_35875fbcaf56a7144728da0050a9d30f387e4d7708d4b7f19dada2a22f513243->leave($__internal_35875fbcaf56a7144728da0050a9d30f387e4d7708d4b7f19dada2a22f513243_prof);

        
        $__internal_9bf815c9d55fd5eac1aa7b465b0186ed6227bbc6722fb75b9f1abcfabb81e8a2->leave($__internal_9bf815c9d55fd5eac1aa7b465b0186ed6227bbc6722fb75b9f1abcfabb81e8a2_prof);

    }

    // line 73
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_4a5c19b3b7c2f31d5f89e85143ba6855842a2f420d5ccc1725e7bb9eec2930cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a5c19b3b7c2f31d5f89e85143ba6855842a2f420d5ccc1725e7bb9eec2930cf->enter($__internal_4a5c19b3b7c2f31d5f89e85143ba6855842a2f420d5ccc1725e7bb9eec2930cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_65a53baff5b7d8d8b686343bf5085aade96de717ea578240711e7e111663d7a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65a53baff5b7d8d8b686343bf5085aade96de717ea578240711e7e111663d7a6->enter($__internal_65a53baff5b7d8d8b686343bf5085aade96de717ea578240711e7e111663d7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 74
        echo "<div class=\"input-group\">
        ";
        // line 75
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 75, $this->getSourceContext()); })()), 0, 2));
        // line 76
        echo "        ";
        if ( !(isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new Twig_Error_Runtime('Variable "prepend" does not exist.', 76, $this->getSourceContext()); })())) {
            // line 77
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 77, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 79
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 80
        if ((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new Twig_Error_Runtime('Variable "prepend" does not exist.', 80, $this->getSourceContext()); })())) {
            // line 81
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 81, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 83
        echo "    </div>";
        
        $__internal_65a53baff5b7d8d8b686343bf5085aade96de717ea578240711e7e111663d7a6->leave($__internal_65a53baff5b7d8d8b686343bf5085aade96de717ea578240711e7e111663d7a6_prof);

        
        $__internal_4a5c19b3b7c2f31d5f89e85143ba6855842a2f420d5ccc1725e7bb9eec2930cf->leave($__internal_4a5c19b3b7c2f31d5f89e85143ba6855842a2f420d5ccc1725e7bb9eec2930cf_prof);

    }

    // line 86
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_4e06f4220b763bdf8bdd0875c11df39c2dc9fcbb3b8072d493c7616ad04ebb8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e06f4220b763bdf8bdd0875c11df39c2dc9fcbb3b8072d493c7616ad04ebb8e->enter($__internal_4e06f4220b763bdf8bdd0875c11df39c2dc9fcbb3b8072d493c7616ad04ebb8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_132b582c5bf50431d4e4589941699943dd847f7e4c69d524e32ca63844c7afda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_132b582c5bf50431d4e4589941699943dd847f7e4c69d524e32ca63844c7afda->enter($__internal_132b582c5bf50431d4e4589941699943dd847f7e4c69d524e32ca63844c7afda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 87
        echo "<div class=\"input-group\">";
        // line 88
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 89
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_132b582c5bf50431d4e4589941699943dd847f7e4c69d524e32ca63844c7afda->leave($__internal_132b582c5bf50431d4e4589941699943dd847f7e4c69d524e32ca63844c7afda_prof);

        
        $__internal_4e06f4220b763bdf8bdd0875c11df39c2dc9fcbb3b8072d493c7616ad04ebb8e->leave($__internal_4e06f4220b763bdf8bdd0875c11df39c2dc9fcbb3b8072d493c7616ad04ebb8e_prof);

    }

    // line 93
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_55b3257a585b8c9eed676a66e30d21602b69ddfa1e996369b5fefd5d5b55014b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55b3257a585b8c9eed676a66e30d21602b69ddfa1e996369b5fefd5d5b55014b->enter($__internal_55b3257a585b8c9eed676a66e30d21602b69ddfa1e996369b5fefd5d5b55014b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_a8d1f30390f6b6f53aafbc2822a440a39dbfd7349b459419040579a32ad5531f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d1f30390f6b6f53aafbc2822a440a39dbfd7349b459419040579a32ad5531f->enter($__internal_a8d1f30390f6b6f53aafbc2822a440a39dbfd7349b459419040579a32ad5531f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 94
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 94, $this->getSourceContext()); })()) == "single_text")) {
            // line 95
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 97
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 97, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 98
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 99
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 99, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 100
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), "date", array()), 'widget', array("datetime" => true));
            // line 102
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()), "time", array()), 'widget', array("datetime" => true));
            // line 103
            echo "</div>";
        }
        
        $__internal_a8d1f30390f6b6f53aafbc2822a440a39dbfd7349b459419040579a32ad5531f->leave($__internal_a8d1f30390f6b6f53aafbc2822a440a39dbfd7349b459419040579a32ad5531f_prof);

        
        $__internal_55b3257a585b8c9eed676a66e30d21602b69ddfa1e996369b5fefd5d5b55014b->leave($__internal_55b3257a585b8c9eed676a66e30d21602b69ddfa1e996369b5fefd5d5b55014b_prof);

    }

    // line 107
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_3ff95c60e72e96f733494ecdbc616fb430ed2f623eb29341495815741523032f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ff95c60e72e96f733494ecdbc616fb430ed2f623eb29341495815741523032f->enter($__internal_3ff95c60e72e96f733494ecdbc616fb430ed2f623eb29341495815741523032f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_aaf9f19173b8a814f6ad5bd56fafe3050eab4798029b2d5ce443ffc9cbf4396b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf9f19173b8a814f6ad5bd56fafe3050eab4798029b2d5ce443ffc9cbf4396b->enter($__internal_aaf9f19173b8a814f6ad5bd56fafe3050eab4798029b2d5ce443ffc9cbf4396b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 108
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 108, $this->getSourceContext()); })()) == "single_text")) {
            // line 109
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 111
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 111, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 112
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 112, $this->getSourceContext()); })()))) {
                // line 113
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 115
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 115, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 116
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 117
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 117, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 118
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 118, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 120
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 120, $this->getSourceContext()); })()))) {
                // line 121
                echo "</div>";
            }
        }
        
        $__internal_aaf9f19173b8a814f6ad5bd56fafe3050eab4798029b2d5ce443ffc9cbf4396b->leave($__internal_aaf9f19173b8a814f6ad5bd56fafe3050eab4798029b2d5ce443ffc9cbf4396b_prof);

        
        $__internal_3ff95c60e72e96f733494ecdbc616fb430ed2f623eb29341495815741523032f->leave($__internal_3ff95c60e72e96f733494ecdbc616fb430ed2f623eb29341495815741523032f_prof);

    }

    // line 126
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_0b13d9332ebac7348aea5817f3610c93a13127bbe03cc650912508e1837edd82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b13d9332ebac7348aea5817f3610c93a13127bbe03cc650912508e1837edd82->enter($__internal_0b13d9332ebac7348aea5817f3610c93a13127bbe03cc650912508e1837edd82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_00bd986bd63ba92ddfc7131d1398ace10b23fd3ffc5b6f2ca468fdb6468432f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00bd986bd63ba92ddfc7131d1398ace10b23fd3ffc5b6f2ca468fdb6468432f7->enter($__internal_00bd986bd63ba92ddfc7131d1398ace10b23fd3ffc5b6f2ca468fdb6468432f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 127
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 127, $this->getSourceContext()); })()) == "single_text")) {
            // line 128
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 130
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 130, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 131
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 131, $this->getSourceContext()); })())))) {
                // line 132
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 134
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), "minute", array()), 'widget');
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 134, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), "second", array()), 'widget');
            }
            // line 135
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 135, $this->getSourceContext()); })())))) {
                // line 136
                echo "</div>";
            }
        }
        
        $__internal_00bd986bd63ba92ddfc7131d1398ace10b23fd3ffc5b6f2ca468fdb6468432f7->leave($__internal_00bd986bd63ba92ddfc7131d1398ace10b23fd3ffc5b6f2ca468fdb6468432f7_prof);

        
        $__internal_0b13d9332ebac7348aea5817f3610c93a13127bbe03cc650912508e1837edd82->leave($__internal_0b13d9332ebac7348aea5817f3610c93a13127bbe03cc650912508e1837edd82_prof);

    }

    // line 141
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_b9b4a149f86d369dd073adf489ec0e5508b93e8cc46eb621814ffa727562ef9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9b4a149f86d369dd073adf489ec0e5508b93e8cc46eb621814ffa727562ef9b->enter($__internal_b9b4a149f86d369dd073adf489ec0e5508b93e8cc46eb621814ffa727562ef9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_aedc8d82bfe65a736027fafdce7af1ee17faac75e6e9ffdbb16b1c5c367488ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aedc8d82bfe65a736027fafdce7af1ee17faac75e6e9ffdbb16b1c5c367488ec->enter($__internal_aedc8d82bfe65a736027fafdce7af1ee17faac75e6e9ffdbb16b1c5c367488ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 142
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 142, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 143
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        // line 144
        if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 145
            echo "        ";
            ob_start();
            // line 146
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 149
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 149, $this->getSourceContext()); })()), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 159
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 161
            echo (isset($context["remove_item_javascript"]) || array_key_exists("remove_item_javascript", $context) ? $context["remove_item_javascript"] : (function () { throw new Twig_Error_Runtime('Variable "remove_item_javascript" does not exist.', 161, $this->getSourceContext()); })());
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 163
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_aedc8d82bfe65a736027fafdce7af1ee17faac75e6e9ffdbb16b1c5c367488ec->leave($__internal_aedc8d82bfe65a736027fafdce7af1ee17faac75e6e9ffdbb16b1c5c367488ec_prof);

        
        $__internal_b9b4a149f86d369dd073adf489ec0e5508b93e8cc46eb621814ffa727562ef9b->leave($__internal_b9b4a149f86d369dd073adf489ec0e5508b93e8cc46eb621814ffa727562ef9b_prof);

    }

    // line 169
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_e6fe3ee6dac08eb000432c7e919a3b3282dbf9359b4aa5f1e35251a4dbd7215e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6fe3ee6dac08eb000432c7e919a3b3282dbf9359b4aa5f1e35251a4dbd7215e->enter($__internal_e6fe3ee6dac08eb000432c7e919a3b3282dbf9359b4aa5f1e35251a4dbd7215e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_eda4039651ca760664e48de9704bfca77d5605090feb9a0646f90df90a703697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eda4039651ca760664e48de9704bfca77d5605090feb9a0646f90df90a703697->enter($__internal_eda4039651ca760664e48de9704bfca77d5605090feb9a0646f90df90a703697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 170
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 171
            echo "<div class=\"control-group\">";
            // line 172
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 172, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 173
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 174
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 175
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 175, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            echo "</div>";
        } else {
            // line 180
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 181
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 181, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 182
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 183
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 184
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 184, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "</div>";
        }
        
        $__internal_eda4039651ca760664e48de9704bfca77d5605090feb9a0646f90df90a703697->leave($__internal_eda4039651ca760664e48de9704bfca77d5605090feb9a0646f90df90a703697_prof);

        
        $__internal_e6fe3ee6dac08eb000432c7e919a3b3282dbf9359b4aa5f1e35251a4dbd7215e->leave($__internal_e6fe3ee6dac08eb000432c7e919a3b3282dbf9359b4aa5f1e35251a4dbd7215e_prof);

    }

    // line 191
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_6fc8bb51cb5878f224ccff931b507c2476cc29f04fb50f743ff04008aa2e85b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fc8bb51cb5878f224ccff931b507c2476cc29f04fb50f743ff04008aa2e85b7->enter($__internal_6fc8bb51cb5878f224ccff931b507c2476cc29f04fb50f743ff04008aa2e85b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_29822884ad78dd6d4fae14f9ad27b0ee4358a488192278d482ac512d58c40577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29822884ad78dd6d4fae14f9ad27b0ee4358a488192278d482ac512d58c40577->enter($__internal_29822884ad78dd6d4fae14f9ad27b0ee4358a488192278d482ac512d58c40577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 192
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 192, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 193
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 193, $this->getSourceContext()); })()))) {
            // line 194
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 194, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 196
            echo "<div class=\"checkbox\">";
            // line 197
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 197, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 198
            echo "</div>";
        }
        
        $__internal_29822884ad78dd6d4fae14f9ad27b0ee4358a488192278d482ac512d58c40577->leave($__internal_29822884ad78dd6d4fae14f9ad27b0ee4358a488192278d482ac512d58c40577_prof);

        
        $__internal_6fc8bb51cb5878f224ccff931b507c2476cc29f04fb50f743ff04008aa2e85b7->leave($__internal_6fc8bb51cb5878f224ccff931b507c2476cc29f04fb50f743ff04008aa2e85b7_prof);

    }

    // line 202
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_23fec82988a116f5321c1814ea93971a5ebe7ea0e57aa0f424724db3a31bbaa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23fec82988a116f5321c1814ea93971a5ebe7ea0e57aa0f424724db3a31bbaa0->enter($__internal_23fec82988a116f5321c1814ea93971a5ebe7ea0e57aa0f424724db3a31bbaa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_339b1c12b93d1641b24b7f906899bfa7aa410cd0a8b3fcbc7860609dfd933af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_339b1c12b93d1641b24b7f906899bfa7aa410cd0a8b3fcbc7860609dfd933af8->enter($__internal_339b1c12b93d1641b24b7f906899bfa7aa410cd0a8b3fcbc7860609dfd933af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 203
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 203, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 204
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 204, $this->getSourceContext()); })()))) {
            // line 205
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 205, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 207
            echo "<div class=\"radio\">";
            // line 208
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 208, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 209
            echo "</div>";
        }
        
        $__internal_339b1c12b93d1641b24b7f906899bfa7aa410cd0a8b3fcbc7860609dfd933af8->leave($__internal_339b1c12b93d1641b24b7f906899bfa7aa410cd0a8b3fcbc7860609dfd933af8_prof);

        
        $__internal_23fec82988a116f5321c1814ea93971a5ebe7ea0e57aa0f424724db3a31bbaa0->leave($__internal_23fec82988a116f5321c1814ea93971a5ebe7ea0e57aa0f424724db3a31bbaa0_prof);

    }

    // line 215
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_1b0c4ee7cc514846d6ac5355e9f835873e70d2af55c8f6ff89fa67a51d3f6c05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b0c4ee7cc514846d6ac5355e9f835873e70d2af55c8f6ff89fa67a51d3f6c05->enter($__internal_1b0c4ee7cc514846d6ac5355e9f835873e70d2af55c8f6ff89fa67a51d3f6c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_0c49bf06439f6b5fc8c84df25ad9c27503e59070d4a9b8e04f4cce4e43133d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c49bf06439f6b5fc8c84df25ad9c27503e59070d4a9b8e04f4cce4e43133d32->enter($__internal_0c49bf06439f6b5fc8c84df25ad9c27503e59070d4a9b8e04f4cce4e43133d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 216
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 216, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 217
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_0c49bf06439f6b5fc8c84df25ad9c27503e59070d4a9b8e04f4cce4e43133d32->leave($__internal_0c49bf06439f6b5fc8c84df25ad9c27503e59070d4a9b8e04f4cce4e43133d32_prof);

        
        $__internal_1b0c4ee7cc514846d6ac5355e9f835873e70d2af55c8f6ff89fa67a51d3f6c05->leave($__internal_1b0c4ee7cc514846d6ac5355e9f835873e70d2af55c8f6ff89fa67a51d3f6c05_prof);

    }

    // line 220
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_f7659a7a1c819c5e67598aa836de372d2415d45f6e81ef27c3b6305fe01da8e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7659a7a1c819c5e67598aa836de372d2415d45f6e81ef27c3b6305fe01da8e5->enter($__internal_f7659a7a1c819c5e67598aa836de372d2415d45f6e81ef27c3b6305fe01da8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_39d96e76d7cb3d840faa8cf72c868458b51cc25c17faad57a7624df4c7e79f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d96e76d7cb3d840faa8cf72c868458b51cc25c17faad57a7624df4c7e79f9b->enter($__internal_39d96e76d7cb3d840faa8cf72c868458b51cc25c17faad57a7624df4c7e79f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 222
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 222, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 223
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_39d96e76d7cb3d840faa8cf72c868458b51cc25c17faad57a7624df4c7e79f9b->leave($__internal_39d96e76d7cb3d840faa8cf72c868458b51cc25c17faad57a7624df4c7e79f9b_prof);

        
        $__internal_f7659a7a1c819c5e67598aa836de372d2415d45f6e81ef27c3b6305fe01da8e5->leave($__internal_f7659a7a1c819c5e67598aa836de372d2415d45f6e81ef27c3b6305fe01da8e5_prof);

    }

    // line 226
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_0fdf98a38bcaf76da7491870c4d93d45c771e3e05e1543b3db5d872c16394136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fdf98a38bcaf76da7491870c4d93d45c771e3e05e1543b3db5d872c16394136->enter($__internal_0fdf98a38bcaf76da7491870c4d93d45c771e3e05e1543b3db5d872c16394136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_4bdde2739ca261a949ac009d09037b55f3b45acd1b00c294a46bb8d34fda9e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bdde2739ca261a949ac009d09037b55f3b45acd1b00c294a46bb8d34fda9e77->enter($__internal_4bdde2739ca261a949ac009d09037b55f3b45acd1b00c294a46bb8d34fda9e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 227
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_4bdde2739ca261a949ac009d09037b55f3b45acd1b00c294a46bb8d34fda9e77->leave($__internal_4bdde2739ca261a949ac009d09037b55f3b45acd1b00c294a46bb8d34fda9e77_prof);

        
        $__internal_0fdf98a38bcaf76da7491870c4d93d45c771e3e05e1543b3db5d872c16394136->leave($__internal_0fdf98a38bcaf76da7491870c4d93d45c771e3e05e1543b3db5d872c16394136_prof);

    }

    // line 230
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_61eed7de7b14e1ad71258f7245a953aeb70d316d9c2f943115af78d483ad29cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61eed7de7b14e1ad71258f7245a953aeb70d316d9c2f943115af78d483ad29cc->enter($__internal_61eed7de7b14e1ad71258f7245a953aeb70d316d9c2f943115af78d483ad29cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_602b57ff575c3d3fb4edd5031bcb386aae4ed4b24d6ce320bc816766f43df85c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602b57ff575c3d3fb4edd5031bcb386aae4ed4b24d6ce320bc816766f43df85c->enter($__internal_602b57ff575c3d3fb4edd5031bcb386aae4ed4b24d6ce320bc816766f43df85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 231
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_602b57ff575c3d3fb4edd5031bcb386aae4ed4b24d6ce320bc816766f43df85c->leave($__internal_602b57ff575c3d3fb4edd5031bcb386aae4ed4b24d6ce320bc816766f43df85c_prof);

        
        $__internal_61eed7de7b14e1ad71258f7245a953aeb70d316d9c2f943115af78d483ad29cc->leave($__internal_61eed7de7b14e1ad71258f7245a953aeb70d316d9c2f943115af78d483ad29cc_prof);

    }

    // line 234
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_45697d9d21babdc1bded0ccc2dfa8057ad8c7721cf99c79404d6bc635b589a8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45697d9d21babdc1bded0ccc2dfa8057ad8c7721cf99c79404d6bc635b589a8a->enter($__internal_45697d9d21babdc1bded0ccc2dfa8057ad8c7721cf99c79404d6bc635b589a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_ddaf52849fd646669dc62ed3e8c208c2ef2d243bda62e5d16299763a452dc5a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddaf52849fd646669dc62ed3e8c208c2ef2d243bda62e5d16299763a452dc5a7->enter($__internal_ddaf52849fd646669dc62ed3e8c208c2ef2d243bda62e5d16299763a452dc5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 235
        echo "    ";
        // line 236
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 237
            echo "        ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 237, $this->getSourceContext()); })())) {
                // line 238
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 238, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 239
                echo "        ";
            }
            // line 240
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 241
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 241, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 241, $this->getSourceContext()); })())))));
                // line 242
                echo "        ";
            }
            // line 243
            echo "        ";
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 243, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 243, $this->getSourceContext()); })())))) {
                // line 244
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 244, $this->getSourceContext()); })()));
                // line 245
                echo "        ";
            }
            // line 246
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 246, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 247
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 247, $this->getSourceContext()); })());
            // line 248
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 248, $this->getSourceContext()); })()) === false)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 248, $this->getSourceContext()); })()), array(), (((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 248, $this->getSourceContext()); })())) ? ((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 248, $this->getSourceContext()); })())) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 248, $this->getSourceContext()); })()), "entity", array()), "translation_domain", array()))))) : ("")), "html", null, true);
            // line 249
            echo "</label>
    ";
        }
        
        $__internal_ddaf52849fd646669dc62ed3e8c208c2ef2d243bda62e5d16299763a452dc5a7->leave($__internal_ddaf52849fd646669dc62ed3e8c208c2ef2d243bda62e5d16299763a452dc5a7_prof);

        
        $__internal_45697d9d21babdc1bded0ccc2dfa8057ad8c7721cf99c79404d6bc635b589a8a->leave($__internal_45697d9d21babdc1bded0ccc2dfa8057ad8c7721cf99c79404d6bc635b589a8a_prof);

    }

    // line 255
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_400d231989e85c01ef4e6235f06881a59476401afc972932ff25fb5b0db56574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_400d231989e85c01ef4e6235f06881a59476401afc972932ff25fb5b0db56574->enter($__internal_400d231989e85c01ef4e6235f06881a59476401afc972932ff25fb5b0db56574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a6ce5f30f52a8a87e066fad68d3c47a8fcc816f24fac1d4d64005e7a44a479fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6ce5f30f52a8a87e066fad68d3c47a8fcc816f24fac1d4d64005e7a44a479fb->enter($__internal_a6ce5f30f52a8a87e066fad68d3c47a8fcc816f24fac1d4d64005e7a44a479fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 256
        $context["_field_type"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 257
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 257, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 257, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 257, $this->getSourceContext()); })()))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 257, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo "\">";
        // line 258
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 258, $this->getSourceContext()); })()), 'label');
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 259, $this->getSourceContext()); })()), 'widget');
        // line 261
        if ((twig_in_filter((isset($context["_field_type"]) || array_key_exists("_field_type", $context) ? $context["_field_type"] : (function () { throw new Twig_Error_Runtime('Variable "_field_type" does not exist.', 261, $this->getSourceContext()); })()), array(0 => "datetime", 1 => "datetime_immutable", 2 => "date", 3 => "date_immutable", 4 => "time", 5 => "time_immutable", 6 => "birthday")) && ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 262
            echo "            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" ";
            // line 264
            if ((null === (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 264, $this->getSourceContext()); })()))) {
                echo "checked=\"checked\"";
            }
            echo ">
                    ";
            // line 265
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </label>
            </div>
        ";
        }
        // line 270
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 270, $this->getSourceContext()); })()), 'errors');
        // line 272
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 273
            echo "            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 273, $this->getSourceContext()); })()), "field", array()), "help", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 273, $this->getSourceContext()); })()), "entity", array()), "translation_domain", array()));
            echo "</span>
        ";
        }
        // line 275
        echo "    </div>";
        
        $__internal_a6ce5f30f52a8a87e066fad68d3c47a8fcc816f24fac1d4d64005e7a44a479fb->leave($__internal_a6ce5f30f52a8a87e066fad68d3c47a8fcc816f24fac1d4d64005e7a44a479fb_prof);

        
        $__internal_400d231989e85c01ef4e6235f06881a59476401afc972932ff25fb5b0db56574->leave($__internal_400d231989e85c01ef4e6235f06881a59476401afc972932ff25fb5b0db56574_prof);

    }

    // line 278
    public function block_collection_row($context, array $blocks = array())
    {
        $__internal_8aed9f5893ea9b2c8d82bd3597db013b97213a15e8ccab14562d4f7681aa4625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aed9f5893ea9b2c8d82bd3597db013b97213a15e8ccab14562d4f7681aa4625->enter($__internal_8aed9f5893ea9b2c8d82bd3597db013b97213a15e8ccab14562d4f7681aa4625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        $__internal_7510da2b341ff947ee7ddf5b47ecafa8aa419216c8c2082a0e6c18cb617a0ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7510da2b341ff947ee7ddf5b47ecafa8aa419216c8c2082a0e6c18cb617a0ba3->enter($__internal_7510da2b341ff947ee7ddf5b47ecafa8aa419216c8c2082a0e6c18cb617a0ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        // line 279
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 281
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter((isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new Twig_Error_Runtime('Variable "allow_add" does not exist.', 281, $this->getSourceContext()); })()), false)) : (false))) {
            // line 282
            echo "        ";
            ob_start();
            // line 283
            echo "            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#";
            // line 286
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 286, $this->getSourceContext()); })()), "html", null, true);
            echo "');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 294
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 294, $this->getSourceContext()); })()), "html", null, true);
            echo "___name__/g, '_";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 294, $this->getSourceContext()); })()), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 295
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 295, $this->getSourceContext()); })()), "html", null, true);
            echo "\\]\\[__name__\\]/g, '";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 295, $this->getSourceContext()); })()), "html", null, true);
            echo "][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 304
            echo "
        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"";
            // line 306
            echo (isset($context["js_add_item"]) || array_key_exists("js_add_item", $context) ? $context["js_add_item"] : (function () { throw new Twig_Error_Runtime('Variable "js_add_item" does not exist.', 306, $this->getSourceContext()); })());
            echo "\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                ";
            // line 308
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((((twig_length_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 308, $this->getSourceContext()); })())) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_7510da2b341ff947ee7ddf5b47ecafa8aa419216c8c2082a0e6c18cb617a0ba3->leave($__internal_7510da2b341ff947ee7ddf5b47ecafa8aa419216c8c2082a0e6c18cb617a0ba3_prof);

        
        $__internal_8aed9f5893ea9b2c8d82bd3597db013b97213a15e8ccab14562d4f7681aa4625->leave($__internal_8aed9f5893ea9b2c8d82bd3597db013b97213a15e8ccab14562d4f7681aa4625_prof);

    }

    // line 314
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_01f5844fcf82df68269d595b59e140f009fb3202e927814e2f4e1439b19ba419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01f5844fcf82df68269d595b59e140f009fb3202e927814e2f4e1439b19ba419->enter($__internal_01f5844fcf82df68269d595b59e140f009fb3202e927814e2f4e1439b19ba419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_c7c6da184741387aaf2184d376707abc34f34a47b37c36a8fa24c1d825fa6274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7c6da184741387aaf2184d376707abc34f34a47b37c36a8fa24c1d825fa6274->enter($__internal_c7c6da184741387aaf2184d376707abc34f34a47b37c36a8fa24c1d825fa6274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 315
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 315, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 316
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 316, $this->getSourceContext()); })()), 'widget');
        // line 317
        echo "</div>";
        
        $__internal_c7c6da184741387aaf2184d376707abc34f34a47b37c36a8fa24c1d825fa6274->leave($__internal_c7c6da184741387aaf2184d376707abc34f34a47b37c36a8fa24c1d825fa6274_prof);

        
        $__internal_01f5844fcf82df68269d595b59e140f009fb3202e927814e2f4e1439b19ba419->leave($__internal_01f5844fcf82df68269d595b59e140f009fb3202e927814e2f4e1439b19ba419_prof);

    }

    // line 320
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_2f0677d9a74ce401996c767932f4c56af7f6f49c3d4ad6ed9ab52f7e13455b8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f0677d9a74ce401996c767932f4c56af7f6f49c3d4ad6ed9ab52f7e13455b8e->enter($__internal_2f0677d9a74ce401996c767932f4c56af7f6f49c3d4ad6ed9ab52f7e13455b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_859ce15c5b6f49dcb9ab8b56414f62c0578146a9e85438ff7f06e55ec9541181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_859ce15c5b6f49dcb9ab8b56414f62c0578146a9e85438ff7f06e55ec9541181->enter($__internal_859ce15c5b6f49dcb9ab8b56414f62c0578146a9e85438ff7f06e55ec9541181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 321
        $context["force_error"] = true;
        // line 322
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_859ce15c5b6f49dcb9ab8b56414f62c0578146a9e85438ff7f06e55ec9541181->leave($__internal_859ce15c5b6f49dcb9ab8b56414f62c0578146a9e85438ff7f06e55ec9541181_prof);

        
        $__internal_2f0677d9a74ce401996c767932f4c56af7f6f49c3d4ad6ed9ab52f7e13455b8e->leave($__internal_2f0677d9a74ce401996c767932f4c56af7f6f49c3d4ad6ed9ab52f7e13455b8e_prof);

    }

    // line 325
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_5f0c095fa647aaffa9de47fe26e0a786bdcca0f0173a11b23c925d663b184838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f0c095fa647aaffa9de47fe26e0a786bdcca0f0173a11b23c925d663b184838->enter($__internal_5f0c095fa647aaffa9de47fe26e0a786bdcca0f0173a11b23c925d663b184838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_f51dc34ea3772df2f8de1215eaecc290ef516baf69a4d58bee96e177a074458e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51dc34ea3772df2f8de1215eaecc290ef516baf69a4d58bee96e177a074458e->enter($__internal_f51dc34ea3772df2f8de1215eaecc290ef516baf69a4d58bee96e177a074458e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 326
        $context["force_error"] = true;
        // line 327
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f51dc34ea3772df2f8de1215eaecc290ef516baf69a4d58bee96e177a074458e->leave($__internal_f51dc34ea3772df2f8de1215eaecc290ef516baf69a4d58bee96e177a074458e_prof);

        
        $__internal_5f0c095fa647aaffa9de47fe26e0a786bdcca0f0173a11b23c925d663b184838->leave($__internal_5f0c095fa647aaffa9de47fe26e0a786bdcca0f0173a11b23c925d663b184838_prof);

    }

    // line 330
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_f53641c17d5eb0fdaf6a53454e0bedba5e9d5e18416fa6da8d2bb80513cb6cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f53641c17d5eb0fdaf6a53454e0bedba5e9d5e18416fa6da8d2bb80513cb6cb5->enter($__internal_f53641c17d5eb0fdaf6a53454e0bedba5e9d5e18416fa6da8d2bb80513cb6cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_e0d96c46af7a6cce24085523dcf93970751b1798545428d1e71c3d2ad7980a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d96c46af7a6cce24085523dcf93970751b1798545428d1e71c3d2ad7980a7c->enter($__internal_e0d96c46af7a6cce24085523dcf93970751b1798545428d1e71c3d2ad7980a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 331
        $context["force_error"] = true;
        // line 332
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e0d96c46af7a6cce24085523dcf93970751b1798545428d1e71c3d2ad7980a7c->leave($__internal_e0d96c46af7a6cce24085523dcf93970751b1798545428d1e71c3d2ad7980a7c_prof);

        
        $__internal_f53641c17d5eb0fdaf6a53454e0bedba5e9d5e18416fa6da8d2bb80513cb6cb5->leave($__internal_f53641c17d5eb0fdaf6a53454e0bedba5e9d5e18416fa6da8d2bb80513cb6cb5_prof);

    }

    // line 335
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_43f7d46a09a38c7955d465710258bf982ab9beced5a3dfa7dcc98be7a8e27cc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43f7d46a09a38c7955d465710258bf982ab9beced5a3dfa7dcc98be7a8e27cc0->enter($__internal_43f7d46a09a38c7955d465710258bf982ab9beced5a3dfa7dcc98be7a8e27cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_61a28191eb3ae9bd8f3ba3ed237e611cb3807206f1717c1ada2017e22325556c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61a28191eb3ae9bd8f3ba3ed237e611cb3807206f1717c1ada2017e22325556c->enter($__internal_61a28191eb3ae9bd8f3ba3ed237e611cb3807206f1717c1ada2017e22325556c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 336
        $context["force_error"] = true;
        // line 337
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_61a28191eb3ae9bd8f3ba3ed237e611cb3807206f1717c1ada2017e22325556c->leave($__internal_61a28191eb3ae9bd8f3ba3ed237e611cb3807206f1717c1ada2017e22325556c_prof);

        
        $__internal_43f7d46a09a38c7955d465710258bf982ab9beced5a3dfa7dcc98be7a8e27cc0->leave($__internal_43f7d46a09a38c7955d465710258bf982ab9beced5a3dfa7dcc98be7a8e27cc0_prof);

    }

    // line 340
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_ef292b193766da3dc6565608a7dc039b4b0c9922bcfef61f58f049fc352ec3be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef292b193766da3dc6565608a7dc039b4b0c9922bcfef61f58f049fc352ec3be->enter($__internal_ef292b193766da3dc6565608a7dc039b4b0c9922bcfef61f58f049fc352ec3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_587cdfa0108d228f5ebce3c89844ce8ae24ebe8f5a4152a5835ef075036d5cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_587cdfa0108d228f5ebce3c89844ce8ae24ebe8f5a4152a5835ef075036d5cd1->enter($__internal_587cdfa0108d228f5ebce3c89844ce8ae24ebe8f5a4152a5835ef075036d5cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 341
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 341, $this->getSourceContext()); })())) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 341, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo "\">";
        // line 342
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 342, $this->getSourceContext()); })()), 'widget');
        // line 343
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 343, $this->getSourceContext()); })()), 'errors');
        // line 344
        echo "</div>";
        
        $__internal_587cdfa0108d228f5ebce3c89844ce8ae24ebe8f5a4152a5835ef075036d5cd1->leave($__internal_587cdfa0108d228f5ebce3c89844ce8ae24ebe8f5a4152a5835ef075036d5cd1_prof);

        
        $__internal_ef292b193766da3dc6565608a7dc039b4b0c9922bcfef61f58f049fc352ec3be->leave($__internal_ef292b193766da3dc6565608a7dc039b4b0c9922bcfef61f58f049fc352ec3be_prof);

    }

    // line 347
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_267ae7f69a7ec264321d0b5569ed8c5dda8071e78ce9f2b37c032a1d18f9c02d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_267ae7f69a7ec264321d0b5569ed8c5dda8071e78ce9f2b37c032a1d18f9c02d->enter($__internal_267ae7f69a7ec264321d0b5569ed8c5dda8071e78ce9f2b37c032a1d18f9c02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_761b33314eb46f2dc2b6903a08c8741acf9ab8132ada890211e9ff114ff2ea87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_761b33314eb46f2dc2b6903a08c8741acf9ab8132ada890211e9ff114ff2ea87->enter($__internal_761b33314eb46f2dc2b6903a08c8741acf9ab8132ada890211e9ff114ff2ea87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 348
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 348, $this->getSourceContext()); })())) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 348, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo "\">";
        // line 349
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 349, $this->getSourceContext()); })()), 'widget');
        // line 350
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 350, $this->getSourceContext()); })()), 'errors');
        // line 351
        echo "</div>";
        
        $__internal_761b33314eb46f2dc2b6903a08c8741acf9ab8132ada890211e9ff114ff2ea87->leave($__internal_761b33314eb46f2dc2b6903a08c8741acf9ab8132ada890211e9ff114ff2ea87_prof);

        
        $__internal_267ae7f69a7ec264321d0b5569ed8c5dda8071e78ce9f2b37c032a1d18f9c02d->leave($__internal_267ae7f69a7ec264321d0b5569ed8c5dda8071e78ce9f2b37c032a1d18f9c02d_prof);

    }

    // line 355
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_2852d4c9d3f54481695aef5664df79f1902b15a535f33a8424762207e459d37d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2852d4c9d3f54481695aef5664df79f1902b15a535f33a8424762207e459d37d->enter($__internal_2852d4c9d3f54481695aef5664df79f1902b15a535f33a8424762207e459d37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_47b2b1914d4d7041adeba545123036124333d7ce71dfa2aecb01421a8d176d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47b2b1914d4d7041adeba545123036124333d7ce71dfa2aecb01421a8d176d6e->enter($__internal_47b2b1914d4d7041adeba545123036124333d7ce71dfa2aecb01421a8d176d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 356
        echo "    ";
        $context["error_count"] = twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 356, $this->getSourceContext()); })()));
        // line 357
        echo "    ";
        if (((isset($context["error_count"]) || array_key_exists("error_count", $context) ? $context["error_count"] : (function () { throw new Twig_Error_Runtime('Variable "error_count" does not exist.', 357, $this->getSourceContext()); })()) >= 1)) {
            // line 358
            echo "        <div class=\"error-block\">
            <span class=\"label label-danger\">";
            // line 359
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", (isset($context["error_count"]) || array_key_exists("error_count", $context) ? $context["error_count"] : (function () { throw new Twig_Error_Runtime('Variable "error_count" does not exist.', 359, $this->getSourceContext()); })()), array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
            ";
            // line 360
            if (((isset($context["error_count"]) || array_key_exists("error_count", $context) ? $context["error_count"] : (function () { throw new Twig_Error_Runtime('Variable "error_count" does not exist.', 360, $this->getSourceContext()); })()) == 1)) {
                // line 361
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_first($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 361, $this->getSourceContext()); })())), "message", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 363
                echo "                <ul>
                    ";
                // line 364
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 364, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 365
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 367
                echo "                </ul>
            ";
            }
            // line 369
            echo "        </div>
    ";
        }
        
        $__internal_47b2b1914d4d7041adeba545123036124333d7ce71dfa2aecb01421a8d176d6e->leave($__internal_47b2b1914d4d7041adeba545123036124333d7ce71dfa2aecb01421a8d176d6e_prof);

        
        $__internal_2852d4c9d3f54481695aef5664df79f1902b15a535f33a8424762207e459d37d->leave($__internal_2852d4c9d3f54481695aef5664df79f1902b15a535f33a8424762207e459d37d_prof);

    }

    // line 373
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_49ee1a62247d2e379d0c4dc81db98737ab09d466ba4140a33c4c5a8d82625fb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49ee1a62247d2e379d0c4dc81db98737ab09d466ba4140a33c4c5a8d82625fb3->enter($__internal_49ee1a62247d2e379d0c4dc81db98737ab09d466ba4140a33c4c5a8d82625fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_421e6aec725a2d786c31c8dd881bc5558c1ae6a7dd13a970637ad673910bdc46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_421e6aec725a2d786c31c8dd881bc5558c1ae6a7dd13a970637ad673910bdc46->enter($__internal_421e6aec725a2d786c31c8dd881bc5558c1ae6a7dd13a970637ad673910bdc46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 376
        echo "    ";
        if ((twig_test_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 376, $this->getSourceContext()); })())) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 376, $this->getSourceContext()); })())))) {
            // line 377
            echo "        ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
    ";
        }
        // line 379
        echo "    ";
        if (((twig_test_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 379, $this->getSourceContext()); })())) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 379, $this->getSourceContext()); })()))) || twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "prototype", array(), "any", true, true))) {
            // line 380
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 380, $this->getSourceContext()); })()), array("data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)));
            // line 381
            echo "    ";
        }
        // line 382
        echo "
    ";
        // line 383
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        
        $__internal_421e6aec725a2d786c31c8dd881bc5558c1ae6a7dd13a970637ad673910bdc46->leave($__internal_421e6aec725a2d786c31c8dd881bc5558c1ae6a7dd13a970637ad673910bdc46_prof);

        
        $__internal_49ee1a62247d2e379d0c4dc81db98737ab09d466ba4140a33c4c5a8d82625fb3->leave($__internal_49ee1a62247d2e379d0c4dc81db98737ab09d466ba4140a33c4c5a8d82625fb3_prof);

    }

    // line 386
    public function block_empty_collection($context, array $blocks = array())
    {
        $__internal_83e9dce67264154da4d014839834790f031c7c11cc1cd0835a3c2bc8f00afc5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83e9dce67264154da4d014839834790f031c7c11cc1cd0835a3c2bc8f00afc5c->enter($__internal_83e9dce67264154da4d014839834790f031c7c11cc1cd0835a3c2bc8f00afc5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        $__internal_13dccca5a6412c6a860fffdca6cedf4328b27b213c892ac793947b1b4657893a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13dccca5a6412c6a860fffdca6cedf4328b27b213c892ac793947b1b4657893a->enter($__internal_13dccca5a6412c6a860fffdca6cedf4328b27b213c892ac793947b1b4657893a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 387
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 388
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 388, $this->getSourceContext()); })()), "entity", array()), "templates", array()), "label_empty", array()));
        echo "
    </div>
";
        
        $__internal_13dccca5a6412c6a860fffdca6cedf4328b27b213c892ac793947b1b4657893a->leave($__internal_13dccca5a6412c6a860fffdca6cedf4328b27b213c892ac793947b1b4657893a_prof);

        
        $__internal_83e9dce67264154da4d014839834790f031c7c11cc1cd0835a3c2bc8f00afc5c->leave($__internal_83e9dce67264154da4d014839834790f031c7c11cc1cd0835a3c2bc8f00afc5c_prof);

    }

    // line 392
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_11baa3bb40f3002d4048a371c0e03c20c41f3826f68e075a50dd8706ccb9df0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11baa3bb40f3002d4048a371c0e03c20c41f3826f68e075a50dd8706ccb9df0b->enter($__internal_11baa3bb40f3002d4048a371c0e03c20c41f3826f68e075a50dd8706ccb9df0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_9a94306f4f94c548cd8fb0c582dc19c3300935dac33f5c13d96e23f19d1ffb4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a94306f4f94c548cd8fb0c582dc19c3300935dac33f5c13d96e23f19d1ffb4b->enter($__internal_9a94306f4f94c548cd8fb0c582dc19c3300935dac33f5c13d96e23f19d1ffb4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 393
        echo "    ";
        $context["force_error"] = true;
        // line 394
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_9a94306f4f94c548cd8fb0c582dc19c3300935dac33f5c13d96e23f19d1ffb4b->leave($__internal_9a94306f4f94c548cd8fb0c582dc19c3300935dac33f5c13d96e23f19d1ffb4b_prof);

        
        $__internal_11baa3bb40f3002d4048a371c0e03c20c41f3826f68e075a50dd8706ccb9df0b->leave($__internal_11baa3bb40f3002d4048a371c0e03c20c41f3826f68e075a50dd8706ccb9df0b_prof);

    }

    // line 397
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_125f9c02bad4eb5ff75a54c28a09a75126ae3100c083e9ffc0e7c26953d70b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_125f9c02bad4eb5ff75a54c28a09a75126ae3100c083e9ffc0e7c26953d70b2c->enter($__internal_125f9c02bad4eb5ff75a54c28a09a75126ae3100c083e9ffc0e7c26953d70b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_6f67fcb18e910ee21b0676259ba3b3a7abf3fef737d20bb1967519f70453605e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f67fcb18e910ee21b0676259ba3b3a7abf3fef737d20bb1967519f70453605e->enter($__internal_6f67fcb18e910ee21b0676259ba3b3a7abf3fef737d20bb1967519f70453605e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 398
        ob_start();
        // line 399
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 400
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 400, $this->getSourceContext()); })()), "")) : ("")))) {
            // line 401
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 401, $this->getSourceContext()); })()), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 401, $this->getSourceContext()); })()), "/"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle")));
            // line 402
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 402, $this->getSourceContext()); })())), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["download_title"]) || array_key_exists("download_title", $context) ? $context["download_title"] : (function () { throw new Twig_Error_Runtime('Variable "download_title" does not exist.', 402, $this->getSourceContext()); })()), "html", null, true);
            echo "</a>
        ";
        }
        // line 404
        echo "
        <div class=\"row\">
            ";
        // line 406
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 407
            echo "            <div class=\"col-sm-3 col-md-2\">
                ";
            // line 408
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 408, $this->getSourceContext()); })()), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
            </div>
            ";
        }
        // line 411
        echo "            <div class=\"";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array(), "any", true, true)) ? ("col-sm-9 col-md-10") : ("col-sm-12"));
        echo "\">
                ";
        // line 412
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 412, $this->getSourceContext()); })()), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6f67fcb18e910ee21b0676259ba3b3a7abf3fef737d20bb1967519f70453605e->leave($__internal_6f67fcb18e910ee21b0676259ba3b3a7abf3fef737d20bb1967519f70453605e_prof);

        
        $__internal_125f9c02bad4eb5ff75a54c28a09a75126ae3100c083e9ffc0e7c26953d70b2c->leave($__internal_125f9c02bad4eb5ff75a54c28a09a75126ae3100c083e9ffc0e7c26953d70b2c_prof);

    }

    // line 419
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_53631ae9ec1c2bb60d5a66071e906926af699e0647903af97844d24a1e941779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53631ae9ec1c2bb60d5a66071e906926af699e0647903af97844d24a1e941779->enter($__internal_53631ae9ec1c2bb60d5a66071e906926af699e0647903af97844d24a1e941779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_ec0ea48837fe52a96b5c28b526d209f55f185a5303f6c01d15339a7d99bea4e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec0ea48837fe52a96b5c28b526d209f55f185a5303f6c01d15339a7d99bea4e5->enter($__internal_ec0ea48837fe52a96b5c28b526d209f55f185a5303f6c01d15339a7d99bea4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 420
        echo "    ";
        $context["force_error"] = true;
        // line 421
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_ec0ea48837fe52a96b5c28b526d209f55f185a5303f6c01d15339a7d99bea4e5->leave($__internal_ec0ea48837fe52a96b5c28b526d209f55f185a5303f6c01d15339a7d99bea4e5_prof);

        
        $__internal_53631ae9ec1c2bb60d5a66071e906926af699e0647903af97844d24a1e941779->leave($__internal_53631ae9ec1c2bb60d5a66071e906926af699e0647903af97844d24a1e941779_prof);

    }

    // line 424
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_e8513734004f61d9984c8fc526500630cf1fd34f1ce9a290e9fa4884d501a145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8513734004f61d9984c8fc526500630cf1fd34f1ce9a290e9fa4884d501a145->enter($__internal_e8513734004f61d9984c8fc526500630cf1fd34f1ce9a290e9fa4884d501a145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_8cb1f27015cb3af7c4c205b0b5e7eb5a8b7e5e9e36cb118adcf369d3fc73a975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb1f27015cb3af7c4c205b0b5e7eb5a8b7e5e9e36cb118adcf369d3fc73a975->enter($__internal_8cb1f27015cb3af7c4c205b0b5e7eb5a8b7e5e9e36cb118adcf369d3fc73a975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 425
        ob_start();
        // line 426
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 427
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 427, $this->getSourceContext()); })()), "file", array()), 'widget');
        echo "
        ";
        // line 428
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 429
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 429, $this->getSourceContext()); })()), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
        ";
        }
        // line 431
        echo "
        ";
        // line 432
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 432, $this->getSourceContext()); })()), "")) : ("")))) {
            // line 433
            echo "            ";
            $context["_lightbox_id"] = ("easyadmin-lightbox-" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 433, $this->getSourceContext()); })()));
            // line 434
            echo "
            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
            // line 435
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) || array_key_exists("_lightbox_id", $context) ? $context["_lightbox_id"] : (function () { throw new Twig_Error_Runtime('Variable "_lightbox_id" does not exist.', 435, $this->getSourceContext()); })()), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"";
            // line 436
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 436, $this->getSourceContext()); })())), "html", null, true);
            echo "\">
            </a>

            <div id=\"";
            // line 439
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) || array_key_exists("_lightbox_id", $context) ? $context["_lightbox_id"] : (function () { throw new Twig_Error_Runtime('Variable "_lightbox_id" does not exist.', 439, $this->getSourceContext()); })()), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
                <img src=\"";
            // line 440
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 440, $this->getSourceContext()); })())), "html", null, true);
            echo "\">
            </div>
        ";
        }
        // line 443
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8cb1f27015cb3af7c4c205b0b5e7eb5a8b7e5e9e36cb118adcf369d3fc73a975->leave($__internal_8cb1f27015cb3af7c4c205b0b5e7eb5a8b7e5e9e36cb118adcf369d3fc73a975_prof);

        
        $__internal_e8513734004f61d9984c8fc526500630cf1fd34f1ce9a290e9fa4884d501a145->leave($__internal_e8513734004f61d9984c8fc526500630cf1fd34f1ce9a290e9fa4884d501a145_prof);

    }

    // line 447
    public function block_easyadmin_rest($context, array $blocks = array())
    {
        $__internal_e761c4559a6067adeb946d9e3895a7b85e4778e283cdcbc93c47405cb9d9f259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e761c4559a6067adeb946d9e3895a7b85e4778e283cdcbc93c47405cb9d9f259->enter($__internal_e761c4559a6067adeb946d9e3895a7b85e4778e283cdcbc93c47405cb9d9f259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_rest"));

        $__internal_da02b756b881500646a966752e53cbb45b0580a31e7c71be6819b66be7f196ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da02b756b881500646a966752e53cbb45b0580a31e7c71be6819b66be7f196ec->enter($__internal_da02b756b881500646a966752e53cbb45b0580a31e7c71be6819b66be7f196ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_rest"));

        // line 448
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 448, $this->getSourceContext()); })()), 'rest');
        // line 449
        echo "<div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">";
        // line 453
        $this->displayBlock("item_actions", $context, $blocks);
        // line 454
        echo "</div>
            </div>
        </div>
    </div>
";
        
        $__internal_da02b756b881500646a966752e53cbb45b0580a31e7c71be6819b66be7f196ec->leave($__internal_da02b756b881500646a966752e53cbb45b0580a31e7c71be6819b66be7f196ec_prof);

        
        $__internal_e761c4559a6067adeb946d9e3895a7b85e4778e283cdcbc93c47405cb9d9f259->leave($__internal_e761c4559a6067adeb946d9e3895a7b85e4778e283cdcbc93c47405cb9d9f259_prof);

    }

    // line 460
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_d8b21772d72d8f13583569252b8e77169d4a34328deb1089bae1c4d05be2c9a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8b21772d72d8f13583569252b8e77169d4a34328deb1089bae1c4d05be2c9a3->enter($__internal_d8b21772d72d8f13583569252b8e77169d4a34328deb1089bae1c4d05be2c9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_2a1e44fffdc6cd4e91f13ad46dafbf9b64afd66101668264901a1d6baf669d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a1e44fffdc6cd4e91f13ad46dafbf9b64afd66101668264901a1d6baf669d1e->enter($__internal_2a1e44fffdc6cd4e91f13ad46dafbf9b64afd66101668264901a1d6baf669d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 461
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 461, $this->getSourceContext()); })()), "entity", array()), "translation_domain", array());
        // line 462
        echo "    ";
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 462, $this->getSourceContext()); })()), "entity", array()), "name", array())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 462, $this->getSourceContext()); })()), "entity", array()), "label", array())));
        // line 463
        echo "
    ";
        // line 465
        echo "    <button type=\"submit\" class=\"btn btn-primary action-save\">
        <i class=\"fa fa-save\"></i> ";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.save", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 466, $this->getSourceContext()); })()), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "_translation_domain" does not exist.', 466, $this->getSourceContext()); })())), "html", null, true);
        echo "
    </button>

    ";
        // line 469
        $context["_entity_actions"] = (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 469, $this->getSourceContext()); })()), "view", array()) == "new")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("new", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 470
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 470, $this->getSourceContext()); })()), "entity", array()), "name", array()))) : ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("edit", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 471
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 471, $this->getSourceContext()); })()), "entity", array()), "name", array()))));
        // line 472
        echo "
    ";
        // line 473
        $context["_entity_id"] = (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 473, $this->getSourceContext()); })()), "view", array()) == "new")) ? (null) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 475
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 475, $this->getSourceContext()); })()), "item", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 475, $this->getSourceContext()); })()), "entity", array()), "primary_key_field_name", array()))));
        // line 476
        echo "
    ";
        // line 477
        $context["_request_parameters"] = array("entity" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 477, $this->getSourceContext()); })()), "entity", array()), "name", array()), "referer" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 477, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 478
        echo "
    ";
        // line 479
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 480
(isset($context["_entity_actions"]) || array_key_exists("_entity_actions", $context) ? $context["_entity_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_actions" does not exist.', 480, $this->getSourceContext()); })()), "request_parameters" =>         // line 481
(isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 481, $this->getSourceContext()); })()), "translation_domain" =>         // line 482
(isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "_translation_domain" does not exist.', 482, $this->getSourceContext()); })()), "trans_parameters" =>         // line 483
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 483, $this->getSourceContext()); })()), "item_id" =>         // line 484
(isset($context["_entity_id"]) || array_key_exists("_entity_id", $context) ? $context["_entity_id"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_id" does not exist.', 484, $this->getSourceContext()); })())), false);
        // line 485
        echo "
";
        
        $__internal_2a1e44fffdc6cd4e91f13ad46dafbf9b64afd66101668264901a1d6baf669d1e->leave($__internal_2a1e44fffdc6cd4e91f13ad46dafbf9b64afd66101668264901a1d6baf669d1e_prof);

        
        $__internal_d8b21772d72d8f13583569252b8e77169d4a34328deb1089bae1c4d05be2c9a3->leave($__internal_d8b21772d72d8f13583569252b8e77169d4a34328deb1089bae1c4d05be2c9a3_prof);

    }

    // line 489
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        $__internal_c569eb3e439e2bba1d1b8db4222cdd0cbc75dfeb6d16d8ae4b53d61474deae27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c569eb3e439e2bba1d1b8db4222cdd0cbc75dfeb6d16d8ae4b53d61474deae27->enter($__internal_c569eb3e439e2bba1d1b8db4222cdd0cbc75dfeb6d16d8ae4b53d61474deae27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        $__internal_b0e97bd48295ecb57af9cc7e189d358d8a67e8fb7b25e884bc0ce9b2da30c75d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0e97bd48295ecb57af9cc7e189d358d8a67e8fb7b25e884bc0ce9b2da30c75d->enter($__internal_b0e97bd48295ecb57af9cc7e189d358d8a67e8fb7b25e884bc0ce9b2da30c75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        // line 490
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 490, $this->getSourceContext()); })()), "entity", array()), "translation_domain", array());
        // line 491
        echo "    <div class=\"row\">
        ";
        // line 492
        if ((twig_length_filter($this->env, (isset($context["easyadmin_form_tabs"]) || array_key_exists("easyadmin_form_tabs", $context) ? $context["easyadmin_form_tabs"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin_form_tabs" does not exist.', 492, $this->getSourceContext()); })())) > 0)) {
            // line 493
            echo "            <div class=\"col-xs-12\">
                <div class=\"nav-tabs-custom\">
                    <ul class=\"nav nav-tabs\">
                        ";
            // line 496
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_tabs"]) || array_key_exists("easyadmin_form_tabs", $context) ? $context["easyadmin_form_tabs"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin_form_tabs" does not exist.', 496, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 497
                echo "                            <li class=\"";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["tab_config"], "active", array())) {
                    echo "active";
                }
                echo "\">
                                <a href=\"#";
                // line 498
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tab_config"], "id", array(), "array"), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tab_config"], "id", array(), "array"), "html", null, true);
                echo "-tab\" data-toggle=\"tab\">
                                    ";
                // line 499
                if (((twig_get_attribute($this->env, $this->getSourceContext(), $context["tab_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["tab_config"], "icon", array()), false)) : (false))) {
                    // line 500
                    echo "                                        <i class=\"fa fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tab_config"], "icon", array()), "html", null, true);
                    echo "\"></i>
                                    ";
                }
                // line 502
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tab_config"], "label", array(), "array"), "html", null, true);
                echo "
                                    ";
                // line 503
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["tab_config"], "errors", array()) > 0)) {
                    // line 504
                    echo "                                        <span class=\"label label-danger\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("form.tab.error_badge_title", twig_get_attribute($this->env, $this->getSourceContext(), $context["tab_config"], "errors", array()), array(), "EasyAdminBundle"), "html", null, true);
                    echo "\">
                                            ";
                    // line 505
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tab_config"], "errors", array()), "html", null, true);
                    echo "
                                        </span>
                                    ";
                }
                // line 508
                echo "                                </a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 511
            echo "                    </ul>
                    <div class=\"tab-content\">
                        ";
            // line 513
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_tabs"]) || array_key_exists("easyadmin_form_tabs", $context) ? $context["easyadmin_form_tabs"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin_form_tabs" does not exist.', 513, $this->getSourceContext()); })()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 514
                echo "                            <div id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tab_config"], "id", array(), "array"), "html", null, true);
                echo "\" class=\"tab-pane ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["tab_config"], "active", array())) {
                    echo "active";
                }
                echo "\">
                                <div class=\"row\">
                                    ";
                // line 516
                $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
                echo "
                                </div>
                            </div>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 520
            echo "                    </div>
                </div>
            </div>
        ";
        } else {
            // line 524
            echo "            ";
            $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
            echo "
        ";
        }
        // line 526
        echo "    </div>
";
        
        $__internal_b0e97bd48295ecb57af9cc7e189d358d8a67e8fb7b25e884bc0ce9b2da30c75d->leave($__internal_b0e97bd48295ecb57af9cc7e189d358d8a67e8fb7b25e884bc0ce9b2da30c75d_prof);

        
        $__internal_c569eb3e439e2bba1d1b8db4222cdd0cbc75dfeb6d16d8ae4b53d61474deae27->leave($__internal_c569eb3e439e2bba1d1b8db4222cdd0cbc75dfeb6d16d8ae4b53d61474deae27_prof);

    }

    // line 529
    public function block_easyadmin_widget_groups($context, array $blocks = array())
    {
        $__internal_8a3ea43c14bbf81425c9b09a17ff93dd67cbc52c33c96fe0dfeaf08fecc4a71a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a3ea43c14bbf81425c9b09a17ff93dd67cbc52c33c96fe0dfeaf08fecc4a71a->enter($__internal_8a3ea43c14bbf81425c9b09a17ff93dd67cbc52c33c96fe0dfeaf08fecc4a71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget_groups"));

        $__internal_d2a39a8b4fcc67dd451f6140c39d648e9a7c580f515ac34a70a926baebe8ad44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a39a8b4fcc67dd451f6140c39d648e9a7c580f515ac34a70a926baebe8ad44->enter($__internal_d2a39a8b4fcc67dd451f6140c39d648e9a7c580f515ac34a70a926baebe8ad44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget_groups"));

        // line 530
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_groups"]) || array_key_exists("easyadmin_form_groups", $context) ? $context["easyadmin_form_groups"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin_form_groups" does not exist.', 530, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["group_name"] => $context["group_config"]) {
            if (( !twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "form_tab", array()) || (twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "form_tab", array()) == (isset($context["tab_name"]) || array_key_exists("tab_name", $context) ? $context["tab_name"] : (function () { throw new Twig_Error_Runtime('Variable "tab_name" does not exist.', 530, $this->getSourceContext()); })())))) {
                // line 531
                echo "        <div class=\"field-group col-xs-12 ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "css_class", array()), "")) : ("")), "html", null, true);
                echo "\">
            <div class=\"box box-default\">
                ";
                // line 533
                if ((((twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "label", array()), false)) : (false)) || ((twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "icon", array()), false)) : (false)))) {
                    // line 534
                    echo "                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">
                            ";
                    // line 536
                    if (((twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "icon", array()), false)) : (false))) {
                        // line 537
                        echo "                                <i class=\"fa fa-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "icon", array()), "html", null, true);
                        echo "\"></i>
                            ";
                    }
                    // line 539
                    echo "                            ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "label", array()), array(), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "_translation_domain" does not exist.', 539, $this->getSourceContext()); })()));
                    echo "
                        </h3>
                    </div>
                ";
                }
                // line 543
                echo "
                <div class=\"box-body\">
                    ";
                // line 545
                if (((twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "help", array()), false)) : (false))) {
                    // line 546
                    echo "                        <p class=\"help-block\">";
                    echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "help", array()), array(), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "_translation_domain" does not exist.', 546, $this->getSourceContext()); })())), "html", null, true));
                    echo "</p>
                    ";
                }
                // line 548
                echo "
                    <div class=\"row\">
                        ";
                // line 550
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 550, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    if ((!twig_in_filter("hidden", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "block_prefixes", array())) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "easyadmin", array()), "form_group", array()) == $context["group_name"]))) {
                        // line 551
                        echo "                            ";
                        if (( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) || (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) == (isset($context["tab_name"]) || array_key_exists("tab_name", $context) ? $context["tab_name"] : (function () { throw new Twig_Error_Runtime('Variable "tab_name" does not exist.', 551, $this->getSourceContext()); })())))) {
                            // line 552
                            echo "                                <div class=\"col-xs-12 ";
                            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                            echo "\">
                                    ";
                            // line 553
                            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                            echo "
                                </div>
                            ";
                        }
                        // line 556
                        echo "                        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 557
                echo "                    </div>
                </div>
            </div>
        </div>
    ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 562
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 562, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if ((!twig_in_filter("hidden", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "block_prefixes", array())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) || (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) == (isset($context["tab_name"]) || array_key_exists("tab_name", $context) ? $context["tab_name"] : (function () { throw new Twig_Error_Runtime('Variable "tab_name" does not exist.', 562, $this->getSourceContext()); })()))))) {
                    // line 563
                    echo "            <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                ";
                    // line 564
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
            </div>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 567
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d2a39a8b4fcc67dd451f6140c39d648e9a7c580f515ac34a70a926baebe8ad44->leave($__internal_d2a39a8b4fcc67dd451f6140c39d648e9a7c580f515ac34a70a926baebe8ad44_prof);

        
        $__internal_8a3ea43c14bbf81425c9b09a17ff93dd67cbc52c33c96fe0dfeaf08fecc4a71a->leave($__internal_8a3ea43c14bbf81425c9b09a17ff93dd67cbc52c33c96fe0dfeaf08fecc4a71a_prof);

    }

    // line 571
    public function block_easyadmin_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_f0152b8cd2d8bb3b45b04f37d6167974cf324fa0c63ce40babf719377fe200fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0152b8cd2d8bb3b45b04f37d6167974cf324fa0c63ce40babf719377fe200fb->enter($__internal_f0152b8cd2d8bb3b45b04f37d6167974cf324fa0c63ce40babf719377fe200fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        $__internal_b77145cf2e7ed7c4088953cd34cf828942d2ea31bdda7b0c4e6abf9615442fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b77145cf2e7ed7c4088953cd34cf828942d2ea31bdda7b0c4e6abf9615442fb0->enter($__internal_b77145cf2e7ed7c4088953cd34cf828942d2ea31bdda7b0c4e6abf9615442fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        // line 572
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 572, $this->getSourceContext()); })()), "autocomplete", array()), 'widget', array("attr" => twig_array_merge(        // line 573
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 573, $this->getSourceContext()); })()), array("data-easyadmin-autocomplete-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "autocomplete", "entity" =>         // line 576
(isset($context["autocomplete_entity_name"]) || array_key_exists("autocomplete_entity_name", $context) ? $context["autocomplete_entity_name"] : (function () { throw new Twig_Error_Runtime('Variable "autocomplete_entity_name" does not exist.', 576, $this->getSourceContext()); })())))))));
        // line 579
        echo "
";
        
        $__internal_b77145cf2e7ed7c4088953cd34cf828942d2ea31bdda7b0c4e6abf9615442fb0->leave($__internal_b77145cf2e7ed7c4088953cd34cf828942d2ea31bdda7b0c4e6abf9615442fb0_prof);

        
        $__internal_f0152b8cd2d8bb3b45b04f37d6167974cf324fa0c63ce40babf719377fe200fb->leave($__internal_f0152b8cd2d8bb3b45b04f37d6167974cf324fa0c63ce40babf719377fe200fb_prof);

    }

    // line 582
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        $__internal_42720c4cb6d5e1cb7b9733f618fc9863fc8a5af6699c5745ee32e10a5710e89e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42720c4cb6d5e1cb7b9733f618fc9863fc8a5af6699c5745ee32e10a5710e89e->enter($__internal_42720c4cb6d5e1cb7b9733f618fc9863fc8a5af6699c5745ee32e10a5710e89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        $__internal_a1400e9cfa6396cda0e48f1b1ed43bd5f61e0c864525c1533a9317563df04dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1400e9cfa6396cda0e48f1b1ed43bd5f61e0c864525c1533a9317563df04dd2->enter($__internal_a1400e9cfa6396cda0e48f1b1ed43bd5f61e0c864525c1533a9317563df04dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        // line 583
        echo "    ";
        $context["name"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 583, $this->getSourceContext()); })()), "parent", array()), "vars", array()), "name", array());
        // line 584
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_a1400e9cfa6396cda0e48f1b1ed43bd5f61e0c864525c1533a9317563df04dd2->leave($__internal_a1400e9cfa6396cda0e48f1b1ed43bd5f61e0c864525c1533a9317563df04dd2_prof);

        
        $__internal_42720c4cb6d5e1cb7b9733f618fc9863fc8a5af6699c5745ee32e10a5710e89e->leave($__internal_42720c4cb6d5e1cb7b9733f618fc9863fc8a5af6699c5745ee32e10a5710e89e_prof);

    }

    // line 588
    public function block_easyadmin_divider_row($context, array $blocks = array())
    {
        $__internal_b3bcb1562f5b50ab1ecc601a6151d4d5678e5a4302e670477ea86be89bed7d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3bcb1562f5b50ab1ecc601a6151d4d5678e5a4302e670477ea86be89bed7d36->enter($__internal_b3bcb1562f5b50ab1ecc601a6151d4d5678e5a4302e670477ea86be89bed7d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        $__internal_d73da79f454d3b6703886bee2b85e69a763237b2c4f48f2ee44e66c2dc8e2060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d73da79f454d3b6703886bee2b85e69a763237b2c4f48f2ee44e66c2dc8e2060->enter($__internal_d73da79f454d3b6703886bee2b85e69a763237b2c4f48f2ee44e66c2dc8e2060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        // line 589
        echo "    <div class=\"field-divider\">
        <hr>
    </div>
";
        
        $__internal_d73da79f454d3b6703886bee2b85e69a763237b2c4f48f2ee44e66c2dc8e2060->leave($__internal_d73da79f454d3b6703886bee2b85e69a763237b2c4f48f2ee44e66c2dc8e2060_prof);

        
        $__internal_b3bcb1562f5b50ab1ecc601a6151d4d5678e5a4302e670477ea86be89bed7d36->leave($__internal_b3bcb1562f5b50ab1ecc601a6151d4d5678e5a4302e670477ea86be89bed7d36_prof);

    }

    // line 595
    public function block_easyadmin_section_row($context, array $blocks = array())
    {
        $__internal_4706f607815def21cf4d2428485fde843a3965af6b3c2e5c221633d7295b7063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4706f607815def21cf4d2428485fde843a3965af6b3c2e5c221633d7295b7063->enter($__internal_4706f607815def21cf4d2428485fde843a3965af6b3c2e5c221633d7295b7063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        $__internal_1f030d0c4bdbb46eed208569a3e9dc20e3ffa697f45dcebbe4923ba86439d58e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f030d0c4bdbb46eed208569a3e9dc20e3ffa697f45dcebbe4923ba86439d58e->enter($__internal_1f030d0c4bdbb46eed208569a3e9dc20e3ffa697f45dcebbe4923ba86439d58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        // line 596
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 596, $this->getSourceContext()); })()), "entity", array()), "translation_domain", array());
        // line 597
        echo "    <div class=\"field-section ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
        ";
        // line 598
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), false)) : (false)) || ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array()), false)) : (false)))) {
            // line 599
            echo "            <h2>
                ";
            // line 600
            if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array()), false)) : (false))) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 600, $this->getSourceContext()); })()), "field", array()), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 601
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), "")) : ("")), array(), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "_translation_domain" does not exist.', 601, $this->getSourceContext()); })()));
            echo "
            </h2>
        ";
        }
        // line 604
        echo "
        ";
        // line 605
        if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), false)) : (false))) {
            // line 606
            echo "            <p class=\"help-block\">";
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 606, $this->getSourceContext()); })()), "field", array()), "help", array()), array(), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "_translation_domain" does not exist.', 606, $this->getSourceContext()); })())), "html", null, true));
            echo "</p>
        ";
        }
        // line 608
        echo "    </div>
";
        
        $__internal_1f030d0c4bdbb46eed208569a3e9dc20e3ffa697f45dcebbe4923ba86439d58e->leave($__internal_1f030d0c4bdbb46eed208569a3e9dc20e3ffa697f45dcebbe4923ba86439d58e_prof);

        
        $__internal_4706f607815def21cf4d2428485fde843a3965af6b3c2e5c221633d7295b7063->leave($__internal_4706f607815def21cf4d2428485fde843a3965af6b3c2e5c221633d7295b7063_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2111 => 608,  2105 => 606,  2103 => 605,  2100 => 604,  2093 => 601,  2087 => 600,  2084 => 599,  2082 => 598,  2077 => 597,  2074 => 596,  2065 => 595,  2052 => 589,  2043 => 588,  2033 => 584,  2030 => 583,  2021 => 582,  2010 => 579,  2008 => 576,  2007 => 573,  2005 => 572,  1996 => 571,  1982 => 567,  1972 => 564,  1967 => 563,  1961 => 562,  1951 => 557,  1944 => 556,  1938 => 553,  1933 => 552,  1930 => 551,  1925 => 550,  1921 => 548,  1915 => 546,  1913 => 545,  1909 => 543,  1901 => 539,  1895 => 537,  1893 => 536,  1889 => 534,  1887 => 533,  1881 => 531,  1874 => 530,  1865 => 529,  1854 => 526,  1848 => 524,  1842 => 520,  1824 => 516,  1814 => 514,  1797 => 513,  1793 => 511,  1785 => 508,  1779 => 505,  1774 => 504,  1772 => 503,  1767 => 502,  1761 => 500,  1759 => 499,  1753 => 498,  1746 => 497,  1742 => 496,  1737 => 493,  1735 => 492,  1732 => 491,  1729 => 490,  1720 => 489,  1709 => 485,  1707 => 484,  1706 => 483,  1705 => 482,  1704 => 481,  1703 => 480,  1702 => 479,  1699 => 478,  1697 => 477,  1694 => 476,  1692 => 475,  1691 => 473,  1688 => 472,  1686 => 471,  1685 => 470,  1684 => 469,  1678 => 466,  1675 => 465,  1672 => 463,  1669 => 462,  1666 => 461,  1657 => 460,  1643 => 454,  1641 => 453,  1636 => 449,  1634 => 448,  1625 => 447,  1613 => 443,  1607 => 440,  1603 => 439,  1597 => 436,  1593 => 435,  1590 => 434,  1587 => 433,  1585 => 432,  1582 => 431,  1576 => 429,  1574 => 428,  1570 => 427,  1567 => 426,  1565 => 425,  1556 => 424,  1543 => 421,  1540 => 420,  1531 => 419,  1515 => 412,  1510 => 411,  1504 => 408,  1501 => 407,  1499 => 406,  1495 => 404,  1487 => 402,  1484 => 401,  1482 => 400,  1479 => 399,  1477 => 398,  1468 => 397,  1455 => 394,  1452 => 393,  1443 => 392,  1430 => 388,  1427 => 387,  1418 => 386,  1408 => 383,  1405 => 382,  1402 => 381,  1399 => 380,  1396 => 379,  1390 => 377,  1387 => 376,  1378 => 373,  1366 => 369,  1362 => 367,  1353 => 365,  1349 => 364,  1346 => 363,  1340 => 361,  1338 => 360,  1334 => 359,  1331 => 358,  1328 => 357,  1325 => 356,  1316 => 355,  1306 => 351,  1304 => 350,  1302 => 349,  1294 => 348,  1285 => 347,  1275 => 344,  1273 => 343,  1271 => 342,  1263 => 341,  1254 => 340,  1244 => 337,  1242 => 336,  1233 => 335,  1223 => 332,  1221 => 331,  1212 => 330,  1202 => 327,  1200 => 326,  1191 => 325,  1181 => 322,  1179 => 321,  1170 => 320,  1160 => 317,  1158 => 316,  1152 => 315,  1143 => 314,  1128 => 308,  1123 => 306,  1119 => 304,  1105 => 295,  1099 => 294,  1088 => 286,  1083 => 283,  1080 => 282,  1078 => 281,  1072 => 279,  1063 => 278,  1053 => 275,  1047 => 273,  1045 => 272,  1043 => 270,  1036 => 265,  1030 => 264,  1026 => 262,  1024 => 261,  1022 => 259,  1020 => 258,  1012 => 257,  1010 => 256,  1001 => 255,  989 => 249,  987 => 248,  985 => 247,  970 => 246,  967 => 245,  964 => 244,  961 => 243,  958 => 242,  955 => 241,  952 => 240,  949 => 239,  946 => 238,  943 => 237,  940 => 236,  938 => 235,  929 => 234,  919 => 231,  910 => 230,  900 => 227,  891 => 226,  881 => 223,  879 => 222,  870 => 220,  860 => 217,  858 => 216,  849 => 215,  838 => 209,  836 => 208,  834 => 207,  831 => 205,  829 => 204,  827 => 203,  818 => 202,  807 => 198,  805 => 197,  803 => 196,  800 => 194,  798 => 193,  796 => 192,  787 => 191,  776 => 187,  770 => 184,  769 => 183,  768 => 182,  764 => 181,  760 => 180,  757 => 178,  751 => 175,  750 => 174,  749 => 173,  745 => 172,  743 => 171,  741 => 170,  732 => 169,  717 => 163,  712 => 161,  708 => 159,  695 => 149,  690 => 146,  687 => 145,  685 => 144,  683 => 143,  681 => 142,  672 => 141,  660 => 136,  657 => 135,  649 => 134,  644 => 132,  642 => 131,  640 => 130,  637 => 128,  635 => 127,  626 => 126,  614 => 121,  612 => 120,  610 => 118,  609 => 117,  608 => 116,  607 => 115,  602 => 113,  600 => 112,  598 => 111,  595 => 109,  593 => 108,  584 => 107,  573 => 103,  571 => 102,  569 => 101,  567 => 100,  565 => 99,  561 => 98,  559 => 97,  556 => 95,  554 => 94,  545 => 93,  534 => 89,  532 => 88,  530 => 87,  521 => 86,  511 => 83,  505 => 81,  503 => 80,  501 => 79,  495 => 77,  492 => 76,  490 => 75,  487 => 74,  478 => 73,  468 => 70,  466 => 69,  457 => 68,  447 => 65,  445 => 64,  436 => 63,  426 => 60,  423 => 58,  421 => 57,  412 => 56,  397 => 50,  392 => 48,  388 => 46,  375 => 36,  370 => 33,  367 => 32,  365 => 31,  363 => 29,  354 => 28,  342 => 23,  340 => 21,  334 => 18,  332 => 17,  329 => 16,  326 => 15,  324 => 13,  323 => 12,  322 => 11,  321 => 9,  320 => 8,  319 => 7,  317 => 5,  315 => 4,  306 => 3,  296 => 595,  293 => 593,  291 => 588,  288 => 586,  286 => 582,  283 => 581,  281 => 571,  278 => 569,  276 => 529,  273 => 528,  271 => 489,  268 => 487,  266 => 460,  263 => 459,  261 => 447,  258 => 446,  256 => 424,  253 => 423,  251 => 419,  248 => 418,  246 => 397,  243 => 396,  241 => 392,  238 => 391,  236 => 386,  234 => 373,  232 => 355,  229 => 353,  227 => 347,  224 => 346,  222 => 340,  219 => 339,  217 => 335,  214 => 334,  212 => 330,  209 => 329,  207 => 325,  204 => 324,  202 => 320,  199 => 319,  197 => 314,  194 => 313,  192 => 278,  189 => 277,  187 => 255,  184 => 254,  181 => 252,  179 => 234,  176 => 233,  174 => 230,  171 => 229,  169 => 226,  166 => 225,  164 => 220,  161 => 219,  159 => 215,  156 => 214,  153 => 212,  151 => 202,  148 => 201,  146 => 191,  143 => 190,  141 => 169,  138 => 168,  136 => 141,  133 => 140,  131 => 126,  128 => 125,  126 => 107,  123 => 106,  121 => 93,  118 => 92,  116 => 86,  113 => 85,  111 => 73,  108 => 72,  106 => 68,  103 => 67,  101 => 63,  98 => 62,  96 => 56,  93 => 55,  91 => 28,  88 => 27,  85 => 25,  83 => 3,  80 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use 'form_div_layout.html.twig' %}

{% block form_start -%}
    {% if 'easyadmin' == block_prefixes|slice(-2)|first %}
        {% set attr = attr|merge({
            'class': [
                _easyadmin_form_type|default('') == 'horizontal' ? 'form-horizontal' : 'form-vertical',
                attr.class|default(''),
                easyadmin.view ~ '-form'
            ]|join(' '),
            'data-view': easyadmin.view,
            'data-entity': easyadmin.entity.name,
            'data-entity-id': attribute(value, easyadmin.entity.primary_key_field_name),
        }) %}
    {% endif %}

    {% if form.vars.errors|length > 0 %}
        {{ form_errors(form) }}
    {% endif %}

    {{- parent() -}}

    <input type=\"hidden\" name=\"referer\" value=\"{{ app.request.query.get('referer', '') }}\"/>
{%- endblock form_start %}

{# Widgets #}

{% block form_widget %}
    {{- parent() -}}

    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock form_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        <div class=\"control-group\">
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do no display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw -}}
            {{- label is not same as(false) ? label|trans({}, translation_domain ?: easyadmin.entity.translation_domain) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}

        {% if _field_type in ['datetime', 'datetime_immutable', 'date', 'date_immutable', 'time', 'time_immutable', 'birthday'] and easyadmin.field.nullable|default(false) %}
            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                    {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                </label>
            </div>
        {% endif %}

        {{- form_errors(form) -}}

        {% if easyadmin.field.help|default('') != '' %}
            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
        {% endif %}
    </div>
{%- endblock form_row %}

{% block collection_row %}
    {{ block('form_row') }}

    {% if allow_add|default(false) %}
        {% set js_add_item %}
            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#{{ id }}');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_{{ name }}___name__/g, '_{{ name }}_' + numItems)
                    .replace(/{{ name }}\\]\\[__name__\\]/g, '{{ name }}][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        {% endset %}

        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"{{ js_add_item|raw }}\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                {{ (form|length == 0 ? 'action.add_new_item' : 'action.add_another_item')|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock collection_row %}

{% block button_row -%}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }} {{ easyadmin.field.css_class|default('') }}\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}
{% block form_errors %}
    {% set error_count = errors|length %}
    {% if error_count >= 1 %}
        <div class=\"error-block\">
            <span class=\"label label-danger\">{{ 'errors'|transchoice(error_count, {}, 'EasyAdminBundle') }}</span>
            {% if error_count == 1 %}
                {{ errors|first.message }}
            {% else %}
                <ul>
                    {% for error in errors %}
                        <li>{{ error.message }}</li>
                    {% endfor %}
                </ul>
            {% endif %}
        </div>
    {% endif %}
{% endblock form_errors %}

{%- block form_widget_compound -%}
    {# the \"is iterable\" check is needed because if an object implements __toString() and
       returns an empty string, \"is empty\" returns true even if it's not a collection #}
    {% if value is iterable and value is empty %}
        {{ block('empty_collection') }}
    {% endif %}
    {% if value is iterable and value is empty or form.vars.prototype is defined %}
        {% set attr = attr|merge({'data-empty-collection': block('empty_collection') }) %}
    {% endif %}

    {{ parent() }}
{%- endblock form_widget_compound -%}

{% block empty_collection %}
    <div class=\"empty collection-empty\">
        {{ include(easyadmin.entity.templates.label_empty) }}
    </div>
{% endblock empty_collection %}

{% block vich_file_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-file\">
        {% if download_uri|default('') is not empty %}
            {% set download_title = download_uri|split('/')|last ?: 'download'|trans({}, 'VichUploaderBundle') %}
            <a href=\"{{ asset(download_uri) }}\">{{ download_title }}</a>
        {% endif %}

        <div class=\"row\">
            {% if form.delete is defined %}
            <div class=\"col-sm-3 col-md-2\">
                {{ form_row(form.delete, { label: 'action.delete' }) }}
            </div>
            {% endif %}
            <div class=\"{{ form.delete is defined ? 'col-sm-9 col-md-10' : 'col-sm-12' }}\">
                {{ form_widget(form.file) }}
            </div>
        </div>
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
            {{ form_row(form.delete, { label: 'action.delete' }) }}
        {% endif %}

        {% if download_uri|default('') is not empty %}
            {% set _lightbox_id = 'easyadmin-lightbox-' ~ id %}

            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#{{ _lightbox_id }}\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"{{ asset(download_uri) }}\">
            </a>

            <div id=\"{{ _lightbox_id }}\" class=\"easyadmin-lightbox\">
                <img src=\"{{ asset(download_uri) }}\">
            </div>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{% block easyadmin_rest %}
    {{- form_rest(form) -}}
    <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    {{- block('item_actions') -}}
                </div>
            </div>
        </div>
    </div>
{% endblock easyadmin_rest %}

{% block item_actions %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}

    {# the 'save' action is hardcoded for the 'edit' and 'new' views #}
    <button type=\"submit\" class=\"btn btn-primary action-save\">
        <i class=\"fa fa-save\"></i> {{ 'action.save'|trans(_trans_parameters, _translation_domain) }}
    </button>

    {% set _entity_actions = (easyadmin.view == 'new')
        ? easyadmin_get_actions_for_new_item(easyadmin.entity.name)
        : easyadmin_get_actions_for_edit_item(easyadmin.entity.name) %}

    {% set _entity_id = (easyadmin.view == 'new')
        ? null
        : attribute(easyadmin.item, easyadmin.entity.primary_key_field_name) %}

    {% set _request_parameters = { entity: easyadmin.entity.name, referer: app.request.query.get('referer') } %}

    {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
        actions: _entity_actions,
        request_parameters: _request_parameters,
        translation_domain: _translation_domain,
        trans_parameters: _trans_parameters,
        item_id: _entity_id
    }, with_context = false) }}
{% endblock item_actions %}

{# EasyAdmin form type #}
{% block easyadmin_widget %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"row\">
        {% if easyadmin_form_tabs | length > 0 %}
            <div class=\"col-xs-12\">
                <div class=\"nav-tabs-custom\">
                    <ul class=\"nav nav-tabs\">
                        {% for tab_name, tab_config in easyadmin_form_tabs %}
                            <li class=\"{% if tab_config.active %}active{% endif %}\">
                                <a href=\"#{{ tab_config['id'] }}\" id=\"{{ tab_config['id'] }}-tab\" data-toggle=\"tab\">
                                    {% if tab_config.icon|default(false) %}
                                        <i class=\"fa fa-{{ tab_config.icon }}\"></i>
                                    {% endif %}
                                    {{ tab_config['label'] }}
                                    {% if tab_config.errors > 0 %}
                                        <span class=\"label label-danger\" title=\"{{ 'form.tab.error_badge_title'|transchoice(tab_config.errors, {}, 'EasyAdminBundle') }}\">
                                            {{ tab_config.errors }}
                                        </span>
                                    {% endif %}
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                    <div class=\"tab-content\">
                        {% for tab_name, tab_config in easyadmin_form_tabs %}
                            <div id=\"{{ tab_config['id'] }}\" class=\"tab-pane {% if tab_config.active %}active{% endif %}\">
                                <div class=\"row\">
                                    {{ block('easyadmin_widget_groups') }}
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        {% else %}
            {{ block('easyadmin_widget_groups') }}
        {% endif %}
    </div>
{% endblock easyadmin_widget %}

{% block easyadmin_widget_groups %}
    {% for group_name, group_config in easyadmin_form_groups if not group_config.form_tab or group_config.form_tab == tab_name %}
        <div class=\"field-group col-xs-12 {{ group_config.css_class|default('') }}\">
            <div class=\"box box-default\">
                {% if group_config.label|default(false) or group_config.icon|default(false) %}
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">
                            {% if group_config.icon|default(false) %}
                                <i class=\"fa fa-{{ group_config.icon }}\"></i>
                            {% endif %}
                            {{ group_config.label|trans(domain = _translation_domain)|raw }}
                        </h3>
                    </div>
                {% endif %}

                <div class=\"box-body\">
                    {% if group_config.help|default(false) %}
                        <p class=\"help-block\">{{ group_config.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
                    {% endif %}

                    <div class=\"row\">
                        {% for field in form if 'hidden' not in field.vars.block_prefixes and field.vars.easyadmin.form_group == group_name %}
                            {% if not field.vars.easyadmin.form_tab or field.vars.easyadmin.form_tab == tab_name %}
                                <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                                    {{ form_row(field) }}
                                </div>
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    {% else %}
        {% for field in form if 'hidden' not in field.vars.block_prefixes and (not field.vars.easyadmin.form_tab or field.vars.easyadmin.form_tab == tab_name) %}
            <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                {{ form_row(field) }}
            </div>
        {% endfor %}
    {% endfor %}
{% endblock easyadmin_widget_groups %}

{# EasyAdminAutocomplete form type #}
{% block easyadmin_autocomplete_widget %}
    {{ form_widget(form.autocomplete, {
        attr: attr|merge({
            'data-easyadmin-autocomplete-url' : path('easyadmin', {
                action: 'autocomplete',
                entity: autocomplete_entity_name,
            })|raw })
        })
    }}
{% endblock easyadmin_autocomplete_widget %}

{% block easyadmin_autocomplete_inner_label %}
    {% set name = form.parent.vars.name %}
    {{- block('form_label') -}}
{% endblock easyadmin_autocomplete_inner_label %}

{# EasyAdminDivider form type #}
{% block easyadmin_divider_row %}
    <div class=\"field-divider\">
        <hr>
    </div>
{% endblock easyadmin_divider_row %}

{# EasyAdminSection form type #}
{% block easyadmin_section_row %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"field-section {{ easyadmin.field.css_class|default('') }}\">
        {% if easyadmin.field.label|default(false) or easyadmin.field.icon|default(false) %}
            <h2>
                {% if easyadmin.field.icon|default(false) %}<i class=\"fa fa-{{ easyadmin.field.icon }}\"></i>{% endif %}
                {{ easyadmin.field.label|default('')|trans(domain = _translation_domain)|raw }}
            </h2>
        {% endif %}

        {% if easyadmin.field.help|default(false) %}
            <p class=\"help-block\">{{ easyadmin.field.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
        {% endif %}
    </div>
{% endblock easyadmin_section_row %}
", "@EasyAdmin/form/bootstrap_3_layout.html.twig", "/var/www/html/Agence_immobilier/Immobilier/vendor/easycorp/easyadmin-bundle/src/Resources/views/form/bootstrap_3_layout.html.twig");
    }
}
