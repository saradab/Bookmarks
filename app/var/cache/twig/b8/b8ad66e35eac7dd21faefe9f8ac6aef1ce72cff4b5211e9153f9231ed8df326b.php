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
        $__internal_d1ef7e115459e1da9661e722d9147b4fc699f437b57d70212cd55c76b809466a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ef7e115459e1da9661e722d9147b4fc699f437b57d70212cd55c76b809466a->enter($__internal_d1ef7e115459e1da9661e722d9147b4fc699f437b57d70212cd55c76b809466a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bookmark/add.html.twig"));

        $__internal_799b553c46fde94dbe06b89a1ff3de318344a1d017d1a2c34ec17b67185b9326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_799b553c46fde94dbe06b89a1ff3de318344a1d017d1a2c34ec17b67185b9326->enter($__internal_799b553c46fde94dbe06b89a1ff3de318344a1d017d1a2c34ec17b67185b9326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bookmark/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1ef7e115459e1da9661e722d9147b4fc699f437b57d70212cd55c76b809466a->leave($__internal_d1ef7e115459e1da9661e722d9147b4fc699f437b57d70212cd55c76b809466a_prof);

        
        $__internal_799b553c46fde94dbe06b89a1ff3de318344a1d017d1a2c34ec17b67185b9326->leave($__internal_799b553c46fde94dbe06b89a1ff3de318344a1d017d1a2c34ec17b67185b9326_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_655772b6b13727dd71f1c8db37a3ce5e7ab5dfe03be6b8f253e92584564f6f93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655772b6b13727dd71f1c8db37a3ce5e7ab5dfe03be6b8f253e92584564f6f93->enter($__internal_655772b6b13727dd71f1c8db37a3ce5e7ab5dfe03be6b8f253e92584564f6f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6031806c2ec84c4dd526448cbfe4058b82e823f5a0f1b25e1e4cc2f321cbf3d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6031806c2ec84c4dd526448cbfe4058b82e823f5a0f1b25e1e4cc2f321cbf3d9->enter($__internal_6031806c2ec84c4dd526448cbfe4058b82e823f5a0f1b25e1e4cc2f321cbf3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.bookmark_add"), "html", null, true);
        
        $__internal_6031806c2ec84c4dd526448cbfe4058b82e823f5a0f1b25e1e4cc2f321cbf3d9->leave($__internal_6031806c2ec84c4dd526448cbfe4058b82e823f5a0f1b25e1e4cc2f321cbf3d9_prof);

        
        $__internal_655772b6b13727dd71f1c8db37a3ce5e7ab5dfe03be6b8f253e92584564f6f93->leave($__internal_655772b6b13727dd71f1c8db37a3ce5e7ab5dfe03be6b8f253e92584564f6f93_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b4ed2672357c17f782e7f2e0854c4144858eea05d2dcf614224b379477f6fce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b4ed2672357c17f782e7f2e0854c4144858eea05d2dcf614224b379477f6fce->enter($__internal_6b4ed2672357c17f782e7f2e0854c4144858eea05d2dcf614224b379477f6fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0bdd8adc7c87d11495c990febad9ae37fb112110d284eceb213cb665bdd8e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0bdd8adc7c87d11495c990febad9ae37fb112110d284eceb213cb665bdd8e00->enter($__internal_f0bdd8adc7c87d11495c990febad9ae37fb112110d284eceb213cb665bdd8e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f0bdd8adc7c87d11495c990febad9ae37fb112110d284eceb213cb665bdd8e00->leave($__internal_f0bdd8adc7c87d11495c990febad9ae37fb112110d284eceb213cb665bdd8e00_prof);

        
        $__internal_6b4ed2672357c17f782e7f2e0854c4144858eea05d2dcf614224b379477f6fce->leave($__internal_6b4ed2672357c17f782e7f2e0854c4144858eea05d2dcf614224b379477f6fce_prof);

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
