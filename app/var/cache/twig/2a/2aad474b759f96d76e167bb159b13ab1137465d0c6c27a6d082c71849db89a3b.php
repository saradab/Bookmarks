<?php

/* tags/index.html.twig */
class __TwigTemplate_dd1915c3eaf4ecc0ca7793b6fe4c1c4202972743f16bb4bdc50d78229eabe6e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "tags/index.html.twig", 1);
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
        $__internal_4c28957f14d98a1042fd9d06d6d7586e04dbfc83ce9618d4ba96f529d6c76184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c28957f14d98a1042fd9d06d6d7586e04dbfc83ce9618d4ba96f529d6c76184->enter($__internal_4c28957f14d98a1042fd9d06d6d7586e04dbfc83ce9618d4ba96f529d6c76184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tags/index.html.twig"));

        $__internal_d02943df47d676455529f3b62598e5745e34a0b84215357b76a6f59361b7ec11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d02943df47d676455529f3b62598e5745e34a0b84215357b76a6f59361b7ec11->enter($__internal_d02943df47d676455529f3b62598e5745e34a0b84215357b76a6f59361b7ec11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tags/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c28957f14d98a1042fd9d06d6d7586e04dbfc83ce9618d4ba96f529d6c76184->leave($__internal_4c28957f14d98a1042fd9d06d6d7586e04dbfc83ce9618d4ba96f529d6c76184_prof);

        
        $__internal_d02943df47d676455529f3b62598e5745e34a0b84215357b76a6f59361b7ec11->leave($__internal_d02943df47d676455529f3b62598e5745e34a0b84215357b76a6f59361b7ec11_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_21481ee537eb19fbed08abc9ea4618ed5fc2b1a44b42de885fe5b2349c04cb8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21481ee537eb19fbed08abc9ea4618ed5fc2b1a44b42de885fe5b2349c04cb8b->enter($__internal_21481ee537eb19fbed08abc9ea4618ed5fc2b1a44b42de885fe5b2349c04cb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a68e19183a55fbf6e7632f9ce0299f0425ad2c3e472c27cfd96d4bae1312f0a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a68e19183a55fbf6e7632f9ce0299f0425ad2c3e472c27cfd96d4bae1312f0a2->enter($__internal_a68e19183a55fbf6e7632f9ce0299f0425ad2c3e472c27cfd96d4bae1312f0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.tags_list"), "html", null, true);
        echo "
";
        
        $__internal_a68e19183a55fbf6e7632f9ce0299f0425ad2c3e472c27cfd96d4bae1312f0a2->leave($__internal_a68e19183a55fbf6e7632f9ce0299f0425ad2c3e472c27cfd96d4bae1312f0a2_prof);

        
        $__internal_21481ee537eb19fbed08abc9ea4618ed5fc2b1a44b42de885fe5b2349c04cb8b->leave($__internal_21481ee537eb19fbed08abc9ea4618ed5fc2b1a44b42de885fe5b2349c04cb8b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fb0c26225b4ebf25e221411a0389ef6dd725d3bf5398acaedab1badc9246311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb0c26225b4ebf25e221411a0389ef6dd725d3bf5398acaedab1badc9246311->enter($__internal_4fb0c26225b4ebf25e221411a0389ef6dd725d3bf5398acaedab1badc9246311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4dee35ba04aac0162862a2f7197dc09e066d832390fdc4947a26c03373001bb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dee35ba04aac0162862a2f7197dc09e066d832390fdc4947a26c03373001bb4->enter($__internal_4dee35ba04aac0162862a2f7197dc09e066d832390fdc4947a26c03373001bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.tags_list"), "html", null, true);
        echo "
    </h1>
    ";
        // line 11
        if (twig_length_filter($this->env, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 11, $this->getSourceContext()); })()))) {
            // line 12
            echo "        <ul>
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 13, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 14
                echo "            <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "id", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "name", array()), "html", null, true);
                echo "</li>
                <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("tag_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.tag"), "html", null, true);
                echo "\">
                    ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.tag"), "html", null, true);
                echo "
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "            ";
            $this->loadTemplate("default/_paginator.html.twig", "tags/index.html.twig", 19)->display(array_merge($context, array("paginator" =>             // line 20
(isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 20, $this->getSourceContext()); })()), "route_name" => "tag_index_paginated")));
            // line 23
            echo "        </ul>
    ";
        } else {
            // line 25
            echo "        <div>
            List is empty!
        </div>
    ";
        }
        
        $__internal_4dee35ba04aac0162862a2f7197dc09e066d832390fdc4947a26c03373001bb4->leave($__internal_4dee35ba04aac0162862a2f7197dc09e066d832390fdc4947a26c03373001bb4_prof);

        
        $__internal_4fb0c26225b4ebf25e221411a0389ef6dd725d3bf5398acaedab1badc9246311->leave($__internal_4fb0c26225b4ebf25e221411a0389ef6dd725d3bf5398acaedab1badc9246311_prof);

    }

    public function getTemplateName()
    {
        return "tags/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 25,  115 => 23,  113 => 20,  111 => 19,  102 => 16,  96 => 15,  89 => 14,  85 => 13,  82 => 12,  80 => 11,  75 => 9,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%  extends 'layout.html.twig' %}

{%  block title %}
    {{ 'title.tags_list'|trans }}
{%  endblock %}

{%  block body %}
    <h1>
        {{ 'title.tags_list'|trans }}
    </h1>
    {%  if paginator|length %}
        <ul>
            {% for row in paginator %}
            <li>{{ row.id }}, {{ row.name }}</li>
                <a href=\"{{ url('tag_view', {'id': row.id}) }}\" title=\"{{ 'label.tag'|trans }}\">
                    {{ 'label.tag'|trans }}
                </a>
            {% endfor %}
            {%  include 'default/_paginator.html.twig' with {
            paginator: paginator,
            route_name: 'tag_index_paginated',
            } %}
        </ul>
    {% else %}
        <div>
            List is empty!
        </div>
    {% endif %}
{%  endblock %}", "tags/index.html.twig", "/home/sara/Pulpit/PHP/silex/app/templates/tags/index.html.twig");
    }
}
