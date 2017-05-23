<?php

/* tags/delete.html.twig */
class __TwigTemplate_4deed7beab3a3b0e5f16c077fc18eca64df04cb135d98aab038c0bbbeb3b59e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "tags/delete.html.twig", 1);
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
        $__internal_41752a9024d665568987ecaa7c3afefc74dcf6e8cf68de97a6055328a49e5073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41752a9024d665568987ecaa7c3afefc74dcf6e8cf68de97a6055328a49e5073->enter($__internal_41752a9024d665568987ecaa7c3afefc74dcf6e8cf68de97a6055328a49e5073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tags/delete.html.twig"));

        $__internal_e4ff298b8131d3db80b9ac233ebe35383fcdeefe701acf358f2873bd6bed87db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4ff298b8131d3db80b9ac233ebe35383fcdeefe701acf358f2873bd6bed87db->enter($__internal_e4ff298b8131d3db80b9ac233ebe35383fcdeefe701acf358f2873bd6bed87db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tags/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41752a9024d665568987ecaa7c3afefc74dcf6e8cf68de97a6055328a49e5073->leave($__internal_41752a9024d665568987ecaa7c3afefc74dcf6e8cf68de97a6055328a49e5073_prof);

        
        $__internal_e4ff298b8131d3db80b9ac233ebe35383fcdeefe701acf358f2873bd6bed87db->leave($__internal_e4ff298b8131d3db80b9ac233ebe35383fcdeefe701acf358f2873bd6bed87db_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_27cfbea434500974acf513d9e7f02a3dbe37562d9d1836f85fe74411a7734434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27cfbea434500974acf513d9e7f02a3dbe37562d9d1836f85fe74411a7734434->enter($__internal_27cfbea434500974acf513d9e7f02a3dbe37562d9d1836f85fe74411a7734434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1426b728e66e3ac457f620d9e04db1b4529096f383ac6943b8bcba7bbd073fa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1426b728e66e3ac457f620d9e04db1b4529096f383ac6943b8bcba7bbd073fa9->enter($__internal_1426b728e66e3ac457f620d9e04db1b4529096f383ac6943b8bcba7bbd073fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.tag_delete", array("%id%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new Twig_Error_Runtime('Variable "tag" does not exist.', 3, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        
        $__internal_1426b728e66e3ac457f620d9e04db1b4529096f383ac6943b8bcba7bbd073fa9->leave($__internal_1426b728e66e3ac457f620d9e04db1b4529096f383ac6943b8bcba7bbd073fa9_prof);

        
        $__internal_27cfbea434500974acf513d9e7f02a3dbe37562d9d1836f85fe74411a7734434->leave($__internal_27cfbea434500974acf513d9e7f02a3dbe37562d9d1836f85fe74411a7734434_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2630594bb90537d83d41ee435575d66d770f7e191079c9e4a6d54e20516bdfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2630594bb90537d83d41ee435575d66d770f7e191079c9e4a6d54e20516bdfa->enter($__internal_f2630594bb90537d83d41ee435575d66d770f7e191079c9e4a6d54e20516bdfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_42876cab962a6487b1eab4ecb8670200290a249f293122bfb103c9c2e8642e18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42876cab962a6487b1eab4ecb8670200290a249f293122bfb103c9c2e8642e18->enter($__internal_42876cab962a6487b1eab4ecb8670200290a249f293122bfb103c9c2e8642e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.tag_delete", array("%id%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new Twig_Error_Runtime('Variable "tag" does not exist.', 6, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "</h1>
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("tag_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new Twig_Error_Runtime('Variable "tag" does not exist.', 7, $this->getSourceContext()); })()), "id", array())))));
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
        
        $__internal_42876cab962a6487b1eab4ecb8670200290a249f293122bfb103c9c2e8642e18->leave($__internal_42876cab962a6487b1eab4ecb8670200290a249f293122bfb103c9c2e8642e18_prof);

        
        $__internal_f2630594bb90537d83d41ee435575d66d770f7e191079c9e4a6d54e20516bdfa->leave($__internal_f2630594bb90537d83d41ee435575d66d770f7e191079c9e4a6d54e20516bdfa_prof);

    }

    public function getTemplateName()
    {
        return "tags/delete.html.twig";
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

{% block title %}{{ 'title.tag_delete'|trans({'%id%': tag.id}) }}{% endblock %}

{% block body %}
    <h1>{{ 'title.tag_delete'|trans({'%id%': tag.id}) }}</h1>
    {{ form_start(form, { method: 'post', action: url('tag_delete', {'id': tag.id}) }) }}
    {{ form_widget(form) }}
    <input type=\"submit\" value=\"{{ 'action.delete'|trans }}\" class=\"btn btn-success\" />
    {{ form_end(form) }}
    <a href=\"{{ url('tag_index') }}\" title=\"{{ 'label.back_to_list'|trans }}\" class=\"btn btn-default\">
        <span class=\"fa fa-mail-reply\" aria-hidden=\"true\"></span>
        {{ 'label.back_to_list'|trans }}
    </a>
{% endblock %}", "tags/delete.html.twig", "/home/sara/Pulpit/PHP/silex/app/templates/tags/delete.html.twig");
    }
}
