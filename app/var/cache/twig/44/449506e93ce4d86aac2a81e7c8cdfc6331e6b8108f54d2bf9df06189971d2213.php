<?php

/* tags/add.html.twig */
class __TwigTemplate_b705409b18aed1c1c69c5cd29217aa68a9261df3487a871e515c2541d4f73ef7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "tags/add.html.twig", 1);
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
        $__internal_c088bdca5391f7ef2d2378c451ed7e1df472eac583f993c2b6d4b21e76503f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c088bdca5391f7ef2d2378c451ed7e1df472eac583f993c2b6d4b21e76503f4c->enter($__internal_c088bdca5391f7ef2d2378c451ed7e1df472eac583f993c2b6d4b21e76503f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tags/add.html.twig"));

        $__internal_4f61aec0efbb42454e4750b4e9f615e55ffe8f654ca0596188a4952420a456ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f61aec0efbb42454e4750b4e9f615e55ffe8f654ca0596188a4952420a456ba->enter($__internal_4f61aec0efbb42454e4750b4e9f615e55ffe8f654ca0596188a4952420a456ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tags/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c088bdca5391f7ef2d2378c451ed7e1df472eac583f993c2b6d4b21e76503f4c->leave($__internal_c088bdca5391f7ef2d2378c451ed7e1df472eac583f993c2b6d4b21e76503f4c_prof);

        
        $__internal_4f61aec0efbb42454e4750b4e9f615e55ffe8f654ca0596188a4952420a456ba->leave($__internal_4f61aec0efbb42454e4750b4e9f615e55ffe8f654ca0596188a4952420a456ba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0d3c9469bc3157fa7f8a1c6f053b5dcf3e47146c8fc5d34a56aa95d711b8927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d3c9469bc3157fa7f8a1c6f053b5dcf3e47146c8fc5d34a56aa95d711b8927->enter($__internal_e0d3c9469bc3157fa7f8a1c6f053b5dcf3e47146c8fc5d34a56aa95d711b8927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a4ef83291d9324ed4d536cd7bd0cf32670b4d2ccade0e08780ab3ced90d0645c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4ef83291d9324ed4d536cd7bd0cf32670b4d2ccade0e08780ab3ced90d0645c->enter($__internal_a4ef83291d9324ed4d536cd7bd0cf32670b4d2ccade0e08780ab3ced90d0645c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.tag_add"), "html", null, true);
        
        $__internal_a4ef83291d9324ed4d536cd7bd0cf32670b4d2ccade0e08780ab3ced90d0645c->leave($__internal_a4ef83291d9324ed4d536cd7bd0cf32670b4d2ccade0e08780ab3ced90d0645c_prof);

        
        $__internal_e0d3c9469bc3157fa7f8a1c6f053b5dcf3e47146c8fc5d34a56aa95d711b8927->leave($__internal_e0d3c9469bc3157fa7f8a1c6f053b5dcf3e47146c8fc5d34a56aa95d711b8927_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3de74e69e105cddfc07d2fcfe471bae26eca4523915942575e3c2912bf776bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3de74e69e105cddfc07d2fcfe471bae26eca4523915942575e3c2912bf776bc1->enter($__internal_3de74e69e105cddfc07d2fcfe471bae26eca4523915942575e3c2912bf776bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_11b52a4279e21ae7cedc6a1a1d16c6546132053dc641ebf9affd709332f8e9b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11b52a4279e21ae7cedc6a1a1d16c6546132053dc641ebf9affd709332f8e9b7->enter($__internal_11b52a4279e21ae7cedc6a1a1d16c6546132053dc641ebf9affd709332f8e9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.tag_add"), "html", null, true);
        echo "</h1>
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("tag_add")));
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
";
        
        $__internal_11b52a4279e21ae7cedc6a1a1d16c6546132053dc641ebf9affd709332f8e9b7->leave($__internal_11b52a4279e21ae7cedc6a1a1d16c6546132053dc641ebf9affd709332f8e9b7_prof);

        
        $__internal_3de74e69e105cddfc07d2fcfe471bae26eca4523915942575e3c2912bf776bc1->leave($__internal_3de74e69e105cddfc07d2fcfe471bae26eca4523915942575e3c2912bf776bc1_prof);

    }

    public function getTemplateName()
    {
        return "tags/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 10,  81 => 9,  77 => 8,  73 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block title %}{{ 'title.tag_add'|trans }}{% endblock %}

{% block body %}
    <h1>{{ 'title.tag_add'|trans }}</h1>
    {{ form_start(form, { method: 'post', action: url('tag_add') }) }}
    {{ form_widget(form) }}
    <input type=\"submit\" value=\"{{ 'action.save'|trans }}\" class=\"btn btn-success\" />
    {{ form_end(form) }}
{% endblock %}", "tags/add.html.twig", "/home/sara/Pulpit/PHP/silex/app/templates/tags/add.html.twig");
    }
}
