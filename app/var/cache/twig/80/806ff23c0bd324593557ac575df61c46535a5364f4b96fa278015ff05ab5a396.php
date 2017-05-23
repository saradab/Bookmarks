<?php

/* bookmark/delete.html.twig */
class __TwigTemplate_52586a754a349c934a74c7de2eb63294e2388e2f4722edc8c389d30a1788c8aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "bookmark/delete.html.twig", 1);
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
        $__internal_0a2d92c8948ef56615acb7d4bda0f46f0156872b4c237bd9a755334d9dc781f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a2d92c8948ef56615acb7d4bda0f46f0156872b4c237bd9a755334d9dc781f1->enter($__internal_0a2d92c8948ef56615acb7d4bda0f46f0156872b4c237bd9a755334d9dc781f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bookmark/delete.html.twig"));

        $__internal_926ed6f7f8c4aec67be1e868099baff138aaac1397b6e80460003020ce515042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_926ed6f7f8c4aec67be1e868099baff138aaac1397b6e80460003020ce515042->enter($__internal_926ed6f7f8c4aec67be1e868099baff138aaac1397b6e80460003020ce515042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bookmark/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a2d92c8948ef56615acb7d4bda0f46f0156872b4c237bd9a755334d9dc781f1->leave($__internal_0a2d92c8948ef56615acb7d4bda0f46f0156872b4c237bd9a755334d9dc781f1_prof);

        
        $__internal_926ed6f7f8c4aec67be1e868099baff138aaac1397b6e80460003020ce515042->leave($__internal_926ed6f7f8c4aec67be1e868099baff138aaac1397b6e80460003020ce515042_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3d4778d913d253058ed6774887344f2af729eb4a1392465dfc120a801a5f6de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d4778d913d253058ed6774887344f2af729eb4a1392465dfc120a801a5f6de->enter($__internal_b3d4778d913d253058ed6774887344f2af729eb4a1392465dfc120a801a5f6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4ccbe91018535635f512d92d3c07530482f9c97a9dd91dad641c07157ac8f7a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ccbe91018535635f512d92d3c07530482f9c97a9dd91dad641c07157ac8f7a6->enter($__internal_4ccbe91018535635f512d92d3c07530482f9c97a9dd91dad641c07157ac8f7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.bookmark_delete", array("%id%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bookmark"]) || array_key_exists("bookmark", $context) ? $context["bookmark"] : (function () { throw new Twig_Error_Runtime('Variable "bookmark" does not exist.', 3, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        
        $__internal_4ccbe91018535635f512d92d3c07530482f9c97a9dd91dad641c07157ac8f7a6->leave($__internal_4ccbe91018535635f512d92d3c07530482f9c97a9dd91dad641c07157ac8f7a6_prof);

        
        $__internal_b3d4778d913d253058ed6774887344f2af729eb4a1392465dfc120a801a5f6de->leave($__internal_b3d4778d913d253058ed6774887344f2af729eb4a1392465dfc120a801a5f6de_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7d5a462f83b2c2b18df851acf0b8f326ab3e464f255380661cd27d3c80aba75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7d5a462f83b2c2b18df851acf0b8f326ab3e464f255380661cd27d3c80aba75->enter($__internal_b7d5a462f83b2c2b18df851acf0b8f326ab3e464f255380661cd27d3c80aba75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e9d8872549d972fc4b57e06b8127d4d971e9880c87b12f5e7258b6131fb56048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9d8872549d972fc4b57e06b8127d4d971e9880c87b12f5e7258b6131fb56048->enter($__internal_e9d8872549d972fc4b57e06b8127d4d971e9880c87b12f5e7258b6131fb56048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.bookmark_delete", array("%id%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bookmark"]) || array_key_exists("bookmark", $context) ? $context["bookmark"] : (function () { throw new Twig_Error_Runtime('Variable "bookmark" does not exist.', 6, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "</h1>
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("bookmark_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bookmark"]) || array_key_exists("bookmark", $context) ? $context["bookmark"] : (function () { throw new Twig_Error_Runtime('Variable "bookmark" does not exist.', 7, $this->getSourceContext()); })()), "id", array())))));
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'widget');
        echo "
    <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.delete"), "html", null, true);
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
        
        $__internal_e9d8872549d972fc4b57e06b8127d4d971e9880c87b12f5e7258b6131fb56048->leave($__internal_e9d8872549d972fc4b57e06b8127d4d971e9880c87b12f5e7258b6131fb56048_prof);

        
        $__internal_b7d5a462f83b2c2b18df851acf0b8f326ab3e464f255380661cd27d3c80aba75->leave($__internal_b7d5a462f83b2c2b18df851acf0b8f326ab3e464f255380661cd27d3c80aba75_prof);

    }

    public function getTemplateName()
    {
        return "bookmark/delete.html.twig";
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

{% block title %}{{ 'title.bookmark_delete'|trans({'%id%': bookmark.id}) }}{% endblock %}

{% block body %}
    <h1>{{ 'title.bookmark_delete'|trans({'%id%': bookmark.id}) }}</h1>
    {{ form_start(form, { method: 'post', action: url('bookmark_delete', {'id': bookmark.id}) }) }}
    {{ form_widget(form) }}
    <input type=\"submit\" value=\"{{ 'action.delete'|trans }}\" class=\"btn btn-success\" />
    {{ form_end(form) }}
    <a href=\"{{ url('bookmark_index') }}\" title=\"{{ 'label.back_to_list'|trans }}\" class=\"btn btn-default\">
        <span class=\"fa fa-mail-reply\" aria-hidden=\"true\"></span>
        {{ 'label.back_to_list'|trans }}
    </a>
{% endblock %}", "bookmark/delete.html.twig", "/home/sara/Pulpit/PHP/silex/app/templates/bookmark/delete.html.twig");
    }
}
