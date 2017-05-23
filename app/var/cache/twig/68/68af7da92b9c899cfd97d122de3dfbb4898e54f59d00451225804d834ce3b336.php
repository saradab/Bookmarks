<?php

/* tags/edit.html.twig */
class __TwigTemplate_5f2678e62524fde07be8dce6bc2442eebdfdc3303b2d776e9c116d2992ff4641 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "tags/edit.html.twig", 1);
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
        $__internal_373eb1d24f9c2fa71d8712aa4f61cef159d60099366f71e2f2c7f964c6f4a13b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373eb1d24f9c2fa71d8712aa4f61cef159d60099366f71e2f2c7f964c6f4a13b->enter($__internal_373eb1d24f9c2fa71d8712aa4f61cef159d60099366f71e2f2c7f964c6f4a13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tags/edit.html.twig"));

        $__internal_3a8cf6387bf576657a5d1275ce1e805e70bffd2afc81102b78762d0b9e06c6db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a8cf6387bf576657a5d1275ce1e805e70bffd2afc81102b78762d0b9e06c6db->enter($__internal_3a8cf6387bf576657a5d1275ce1e805e70bffd2afc81102b78762d0b9e06c6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tags/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_373eb1d24f9c2fa71d8712aa4f61cef159d60099366f71e2f2c7f964c6f4a13b->leave($__internal_373eb1d24f9c2fa71d8712aa4f61cef159d60099366f71e2f2c7f964c6f4a13b_prof);

        
        $__internal_3a8cf6387bf576657a5d1275ce1e805e70bffd2afc81102b78762d0b9e06c6db->leave($__internal_3a8cf6387bf576657a5d1275ce1e805e70bffd2afc81102b78762d0b9e06c6db_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_02413c4d0a08def64beb9b08145188a7e670503a816cb3e9dffcdfa3dff09cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02413c4d0a08def64beb9b08145188a7e670503a816cb3e9dffcdfa3dff09cfe->enter($__internal_02413c4d0a08def64beb9b08145188a7e670503a816cb3e9dffcdfa3dff09cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7d8d7a5d3ebf90261759f3d20e559f82a211d3e7d25e724ca0f1ef9914f3c80f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d8d7a5d3ebf90261759f3d20e559f82a211d3e7d25e724ca0f1ef9914f3c80f->enter($__internal_7d8d7a5d3ebf90261759f3d20e559f82a211d3e7d25e724ca0f1ef9914f3c80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.tag_edit", array("%id%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new Twig_Error_Runtime('Variable "tag" does not exist.', 3, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        
        $__internal_7d8d7a5d3ebf90261759f3d20e559f82a211d3e7d25e724ca0f1ef9914f3c80f->leave($__internal_7d8d7a5d3ebf90261759f3d20e559f82a211d3e7d25e724ca0f1ef9914f3c80f_prof);

        
        $__internal_02413c4d0a08def64beb9b08145188a7e670503a816cb3e9dffcdfa3dff09cfe->leave($__internal_02413c4d0a08def64beb9b08145188a7e670503a816cb3e9dffcdfa3dff09cfe_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0a8d2b28d816ee87fa6c200ded883cec9ba9c2a2f2b0729667c6f0a449401ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a8d2b28d816ee87fa6c200ded883cec9ba9c2a2f2b0729667c6f0a449401ae->enter($__internal_d0a8d2b28d816ee87fa6c200ded883cec9ba9c2a2f2b0729667c6f0a449401ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_75b09e292f3cee5c2542f952901b5e4287283a0286cc61fa68c2c78806bffd41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75b09e292f3cee5c2542f952901b5e4287283a0286cc61fa68c2c78806bffd41->enter($__internal_75b09e292f3cee5c2542f952901b5e4287283a0286cc61fa68c2c78806bffd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.tag_edit", array("%id%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new Twig_Error_Runtime('Variable "tag" does not exist.', 6, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "</h1>
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("tag_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new Twig_Error_Runtime('Variable "tag" does not exist.', 7, $this->getSourceContext()); })()), "id", array())))));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("tag_index");
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
        
        $__internal_75b09e292f3cee5c2542f952901b5e4287283a0286cc61fa68c2c78806bffd41->leave($__internal_75b09e292f3cee5c2542f952901b5e4287283a0286cc61fa68c2c78806bffd41_prof);

        
        $__internal_d0a8d2b28d816ee87fa6c200ded883cec9ba9c2a2f2b0729667c6f0a449401ae->leave($__internal_d0a8d2b28d816ee87fa6c200ded883cec9ba9c2a2f2b0729667c6f0a449401ae_prof);

    }

    public function getTemplateName()
    {
        return "tags/edit.html.twig";
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

{% block title %}{{ 'title.tag_edit'|trans({'%id%': tag.id}) }}{% endblock %}

{% block body %}
    <h1>{{ 'title.tag_edit'|trans({'%id%': tag.id}) }}</h1>
    {{ form_start(form, { method: 'post', action: url('tag_edit', {'id': tag.id}) }) }}
    {{ form_widget(form) }}
    <input type=\"submit\" value=\"{{ 'action.save'|trans }}\" class=\"btn btn-success\" />
    {{ form_end(form) }}
    <a href=\"{{ url('tag_index') }}\" title=\"{{ 'label.back_to_list'|trans }}\" class=\"btn btn-default\">
        <span class=\"fa fa-mail-reply\" aria-hidden=\"true\"></span>
        {{ 'label.back_to_list'|trans }}
    </a>
{% endblock %}", "tags/edit.html.twig", "/home/sara/Pulpit/PHP/silex/app/templates/tags/edit.html.twig");
    }
}
