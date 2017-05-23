<?php

/* bookmark/edit.html.twig */
class __TwigTemplate_006ecd1ffcee719f9d84ea4a5d576caa4bb740f24f0ab3f48b3961533131f31e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "bookmark/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15e545c3e161a587f1005f82d43aed63a0c3cc81fd1a6a642ea12deafc05e149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e545c3e161a587f1005f82d43aed63a0c3cc81fd1a6a642ea12deafc05e149->enter($__internal_15e545c3e161a587f1005f82d43aed63a0c3cc81fd1a6a642ea12deafc05e149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bookmark/edit.html.twig"));

        $__internal_dff9904887a8340e359ebbf743cb856fac5ea8d81e765efc4e427d55aa6201e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dff9904887a8340e359ebbf743cb856fac5ea8d81e765efc4e427d55aa6201e4->enter($__internal_dff9904887a8340e359ebbf743cb856fac5ea8d81e765efc4e427d55aa6201e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bookmark/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15e545c3e161a587f1005f82d43aed63a0c3cc81fd1a6a642ea12deafc05e149->leave($__internal_15e545c3e161a587f1005f82d43aed63a0c3cc81fd1a6a642ea12deafc05e149_prof);

        
        $__internal_dff9904887a8340e359ebbf743cb856fac5ea8d81e765efc4e427d55aa6201e4->leave($__internal_dff9904887a8340e359ebbf743cb856fac5ea8d81e765efc4e427d55aa6201e4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_635d2abd991c6e83aa5e375c98681fa6d5bf04583f0bbd9cca0c6ebb680263dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_635d2abd991c6e83aa5e375c98681fa6d5bf04583f0bbd9cca0c6ebb680263dd->enter($__internal_635d2abd991c6e83aa5e375c98681fa6d5bf04583f0bbd9cca0c6ebb680263dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9c1b368a4f916a11ab72bc8f209653159718a4cf50d263d4feea8fff11494a9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c1b368a4f916a11ab72bc8f209653159718a4cf50d263d4feea8fff11494a9c->enter($__internal_9c1b368a4f916a11ab72bc8f209653159718a4cf50d263d4feea8fff11494a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.bookmark_edit", array("%id%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bookmark"]) || array_key_exists("bookmark", $context) ? $context["bookmark"] : (function () { throw new Twig_Error_Runtime('Variable "bookmark" does not exist.', 3, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        
        $__internal_9c1b368a4f916a11ab72bc8f209653159718a4cf50d263d4feea8fff11494a9c->leave($__internal_9c1b368a4f916a11ab72bc8f209653159718a4cf50d263d4feea8fff11494a9c_prof);

        
        $__internal_635d2abd991c6e83aa5e375c98681fa6d5bf04583f0bbd9cca0c6ebb680263dd->leave($__internal_635d2abd991c6e83aa5e375c98681fa6d5bf04583f0bbd9cca0c6ebb680263dd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_99ad94e54b302c95a58007e37f7d81e06017ba80ed95ff6a1fbf2519d0220700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ad94e54b302c95a58007e37f7d81e06017ba80ed95ff6a1fbf2519d0220700->enter($__internal_99ad94e54b302c95a58007e37f7d81e06017ba80ed95ff6a1fbf2519d0220700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0c01ba06c619fde7bd32ac4cbb3038e8e383b271a269c9bd67ca3c682c116f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0c01ba06c619fde7bd32ac4cbb3038e8e383b271a269c9bd67ca3c682c116f0->enter($__internal_d0c01ba06c619fde7bd32ac4cbb3038e8e383b271a269c9bd67ca3c682c116f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.bookmark_edit", array("%id%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bookmark"]) || array_key_exists("bookmark", $context) ? $context["bookmark"] : (function () { throw new Twig_Error_Runtime('Variable "bookmark" does not exist.', 6, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "</h1>
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("bookmark_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bookmark"]) || array_key_exists("bookmark", $context) ? $context["bookmark"] : (function () { throw new Twig_Error_Runtime('Variable "bookmark" does not exist.', 7, $this->getSourceContext()); })()), "id", array())))));
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'widget');
        echo "
    <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.save"), "html", null, true);
        echo "\" class=\"btn btn-success\" />
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'form_end');
        echo "
    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("bookmark_index");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.back_to_list"), "html", null, true);
        echo "\" class=\"btn btn-default\">
        <span class=\"fa fa-mail-reply\" aria-hidden=\"true\"></span>
        ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.back_to_list"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_d0c01ba06c619fde7bd32ac4cbb3038e8e383b271a269c9bd67ca3c682c116f0->leave($__internal_d0c01ba06c619fde7bd32ac4cbb3038e8e383b271a269c9bd67ca3c682c116f0_prof);

        
        $__internal_99ad94e54b302c95a58007e37f7d81e06017ba80ed95ff6a1fbf2519d0220700->leave($__internal_99ad94e54b302c95a58007e37f7d81e06017ba80ed95ff6a1fbf2519d0220700_prof);

    }

    public function getTemplateName()
    {
        return "bookmark/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 13,  89 => 11,  85 => 10,  81 => 9,  77 => 8,  73 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block title %}{{ 'title.bookmark_edit'|trans({'%id%': bookmark.id}) }}{% endblock %}

{% block body %}
    <h1>{{ 'title.bookmark_edit'|trans({'%id%': bookmark.id}) }}</h1>
    {{ form_start(form, { method: 'post', action: url('bookmark_edit', {'id': bookmark.id}) }) }}
    {{ form_widget(form) }}
    <input type=\"submit\" value=\"{{ 'action.save'|trans }}\" class=\"btn btn-success\" />
    {{ form_end(form) }}
    <a href=\"{{ url('bookmark_index') }}\" title=\"{{ 'label.back_to_list'|trans }}\" class=\"btn btn-default\">
        <span class=\"fa fa-mail-reply\" aria-hidden=\"true\"></span>
        {{ 'label.back_to_list'|trans }}
    </a>
{% endblock %}", "bookmark/edit.html.twig", "/home/sara/Pulpit/PHP/silex/app/templates/bookmark/edit.html.twig");
    }
}
