<?php

/* tags/index.html.twig */
class __TwigTemplate_223bf0d151d79c8a929540ed835077d50ebc77df3ae4293707147b0fdff0ad9e extends Twig_Template
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
        $__internal_5673f3d59f190c3f21bbb7d88821c765bca282d687ad3af09e877a7a12fa4727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5673f3d59f190c3f21bbb7d88821c765bca282d687ad3af09e877a7a12fa4727->enter($__internal_5673f3d59f190c3f21bbb7d88821c765bca282d687ad3af09e877a7a12fa4727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tags/index.html.twig"));

        $__internal_38481213098eefb07a92b5c7a6a8a3c26d500417c008218d1b417026d983d2cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38481213098eefb07a92b5c7a6a8a3c26d500417c008218d1b417026d983d2cb->enter($__internal_38481213098eefb07a92b5c7a6a8a3c26d500417c008218d1b417026d983d2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tags/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5673f3d59f190c3f21bbb7d88821c765bca282d687ad3af09e877a7a12fa4727->leave($__internal_5673f3d59f190c3f21bbb7d88821c765bca282d687ad3af09e877a7a12fa4727_prof);

        
        $__internal_38481213098eefb07a92b5c7a6a8a3c26d500417c008218d1b417026d983d2cb->leave($__internal_38481213098eefb07a92b5c7a6a8a3c26d500417c008218d1b417026d983d2cb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4bdf7f9ae77887fcc2715ca509cfc95c6b55f175a11021ae474c5ee356d5e0ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bdf7f9ae77887fcc2715ca509cfc95c6b55f175a11021ae474c5ee356d5e0ec->enter($__internal_4bdf7f9ae77887fcc2715ca509cfc95c6b55f175a11021ae474c5ee356d5e0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_08591b0b1d9749b1f2f4ffff4650a8352200e2aa4b690526f64fe8804dcfcc68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08591b0b1d9749b1f2f4ffff4650a8352200e2aa4b690526f64fe8804dcfcc68->enter($__internal_08591b0b1d9749b1f2f4ffff4650a8352200e2aa4b690526f64fe8804dcfcc68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.tags_list"), "html", null, true);
        echo "
";
        
        $__internal_08591b0b1d9749b1f2f4ffff4650a8352200e2aa4b690526f64fe8804dcfcc68->leave($__internal_08591b0b1d9749b1f2f4ffff4650a8352200e2aa4b690526f64fe8804dcfcc68_prof);

        
        $__internal_4bdf7f9ae77887fcc2715ca509cfc95c6b55f175a11021ae474c5ee356d5e0ec->leave($__internal_4bdf7f9ae77887fcc2715ca509cfc95c6b55f175a11021ae474c5ee356d5e0ec_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a1324c7ce76d445a64e11c047760fdbae399287a2af5451b2995d2eff51db98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1324c7ce76d445a64e11c047760fdbae399287a2af5451b2995d2eff51db98->enter($__internal_7a1324c7ce76d445a64e11c047760fdbae399287a2af5451b2995d2eff51db98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da9f4924e0d78243b00d9690621dfb6dc52c17371acd3ff89fc713e69b66297b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da9f4924e0d78243b00d9690621dfb6dc52c17371acd3ff89fc713e69b66297b->enter($__internal_da9f4924e0d78243b00d9690621dfb6dc52c17371acd3ff89fc713e69b66297b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("tag_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.tag"), "html", null, true);
                echo "\">
                    ";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.tag"), "html", null, true);
                echo "
                </a>
                <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("tag_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete.tag"), "html", null, true);
                echo "\">
                    ";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete.tag"), "html", null, true);
                echo "
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            ";
            $this->loadTemplate("default/_paginator.html.twig", "tags/index.html.twig", 25)->display(array_merge($context, array("paginator" =>             // line 26
(isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 26, $this->getSourceContext()); })()), "route_name" => "tag_index_paginated")));
            // line 29
            echo "        </ul>
    ";
        } else {
            // line 31
            echo "        <div>
            List is empty!
        </div>
    ";
        }
        // line 35
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("tag_add");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add.tag"), "html", null, true);
        echo "\">
        ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add.tag"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_da9f4924e0d78243b00d9690621dfb6dc52c17371acd3ff89fc713e69b66297b->leave($__internal_da9f4924e0d78243b00d9690621dfb6dc52c17371acd3ff89fc713e69b66297b_prof);

        
        $__internal_7a1324c7ce76d445a64e11c047760fdbae399287a2af5451b2995d2eff51db98->leave($__internal_7a1324c7ce76d445a64e11c047760fdbae399287a2af5451b2995d2eff51db98_prof);

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
        return array (  154 => 36,  147 => 35,  141 => 31,  137 => 29,  135 => 26,  133 => 25,  124 => 22,  118 => 21,  113 => 19,  107 => 18,  102 => 16,  96 => 15,  89 => 14,  85 => 13,  82 => 12,  80 => 11,  75 => 9,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
                <a href=\"{{ url('tag_edit', {'id': row.id}) }}\" title=\"{{ 'edit.tag'|trans }}\">
                    {{ 'edit.tag'|trans }}
                </a>
                <a href=\"{{ url('tag_delete', {'id': row.id}) }}\" title=\"{{ 'delete.tag'|trans }}\">
                    {{ 'delete.tag'|trans }}
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
    <a href=\"{{ url('tag_add') }}\" title=\"{{ 'add.tag'|trans }}\">
        {{ 'add.tag'|trans }}
    </a>
{%  endblock %}", "tags/index.html.twig", "/home/sara/Pulpit/PHP/silex/app/templates/tags/index.html.twig");
    }
}
