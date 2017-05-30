<?php

/* bookmark/add.html.twig */
class __TwigTemplate_d649476bed220fc867f93a5e65541a52e0216cddea14fd01257695a9626c5166 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "bookmark/add.html.twig", 1);
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
        $__internal_d8f0940d51e84ca2e78e3cd9fc68d551d7e3ed1d1f043535a508a25ce3c40725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8f0940d51e84ca2e78e3cd9fc68d551d7e3ed1d1f043535a508a25ce3c40725->enter($__internal_d8f0940d51e84ca2e78e3cd9fc68d551d7e3ed1d1f043535a508a25ce3c40725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bookmark/add.html.twig"));

        $__internal_830ad1f21f5b82ca972d05b824585872606eb57bc01e26baf840402d4e5334f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_830ad1f21f5b82ca972d05b824585872606eb57bc01e26baf840402d4e5334f7->enter($__internal_830ad1f21f5b82ca972d05b824585872606eb57bc01e26baf840402d4e5334f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bookmark/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8f0940d51e84ca2e78e3cd9fc68d551d7e3ed1d1f043535a508a25ce3c40725->leave($__internal_d8f0940d51e84ca2e78e3cd9fc68d551d7e3ed1d1f043535a508a25ce3c40725_prof);

        
        $__internal_830ad1f21f5b82ca972d05b824585872606eb57bc01e26baf840402d4e5334f7->leave($__internal_830ad1f21f5b82ca972d05b824585872606eb57bc01e26baf840402d4e5334f7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfc4151a7e4ed608ca34372d43f56b9da907f5f178d05ade74044e438c03f63e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc4151a7e4ed608ca34372d43f56b9da907f5f178d05ade74044e438c03f63e->enter($__internal_cfc4151a7e4ed608ca34372d43f56b9da907f5f178d05ade74044e438c03f63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1556d64c753efa932bde43cb9dcb631e9e8999a8be7e3cfb2cbe92783f98d9dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1556d64c753efa932bde43cb9dcb631e9e8999a8be7e3cfb2cbe92783f98d9dc->enter($__internal_1556d64c753efa932bde43cb9dcb631e9e8999a8be7e3cfb2cbe92783f98d9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.bookmark_add"), "html", null, true);
        
        $__internal_1556d64c753efa932bde43cb9dcb631e9e8999a8be7e3cfb2cbe92783f98d9dc->leave($__internal_1556d64c753efa932bde43cb9dcb631e9e8999a8be7e3cfb2cbe92783f98d9dc_prof);

        
        $__internal_cfc4151a7e4ed608ca34372d43f56b9da907f5f178d05ade74044e438c03f63e->leave($__internal_cfc4151a7e4ed608ca34372d43f56b9da907f5f178d05ade74044e438c03f63e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb24d3bfcafe586871442faad7dfb6acf64ca8d0da3622afd6dbf41de5e2110c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb24d3bfcafe586871442faad7dfb6acf64ca8d0da3622afd6dbf41de5e2110c->enter($__internal_cb24d3bfcafe586871442faad7dfb6acf64ca8d0da3622afd6dbf41de5e2110c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_51ddaaa5b0412aa784697c3bcdd417e9b694794235751eb4820bbacd92614c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51ddaaa5b0412aa784697c3bcdd417e9b694794235751eb4820bbacd92614c59->enter($__internal_51ddaaa5b0412aa784697c3bcdd417e9b694794235751eb4820bbacd92614c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.bookmark_add"), "html", null, true);
        echo "</h1>
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("bookmark_add")));
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
        
        $__internal_51ddaaa5b0412aa784697c3bcdd417e9b694794235751eb4820bbacd92614c59->leave($__internal_51ddaaa5b0412aa784697c3bcdd417e9b694794235751eb4820bbacd92614c59_prof);

        
        $__internal_cb24d3bfcafe586871442faad7dfb6acf64ca8d0da3622afd6dbf41de5e2110c->leave($__internal_cb24d3bfcafe586871442faad7dfb6acf64ca8d0da3622afd6dbf41de5e2110c_prof);

    }

    public function getTemplateName()
    {
        return "bookmark/add.html.twig";
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

{% block title %}{{ 'title.bookmark_add'|trans }}{% endblock %}

{% block body %}
    <h1>{{ 'title.bookmark_add'|trans }}</h1>
    {{ form_start(form, { method: 'post', action: url('bookmark_add') }) }}
    {{ form_widget(form) }}
    <input type=\"submit\" value=\"{{ 'action.save'|trans }}\" class=\"btn btn-success\" />
    {{ form_end(form) }}
    <a href=\"{{ url('bookmark_index') }}\" title=\"{{ 'label.back_to_list'|trans }}\" class=\"btn btn-default\">
        <span class=\"fa fa-mail-reply\" aria-hidden=\"true\"></span>
        {{ 'label.back_to_list'|trans }}
    </a>
{% endblock %}", "bookmark/add.html.twig", "/home/sara/Pulpit/PHP/silex/app/templates/bookmark/add.html.twig");
    }
}
