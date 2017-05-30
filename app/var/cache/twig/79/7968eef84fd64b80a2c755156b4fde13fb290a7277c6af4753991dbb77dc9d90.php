<?php

/* bookmark/index.html.twig */
class __TwigTemplate_994667b074702f20e338548b7539376c4337d8b8646b84ca6d9b7140113d3cb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "bookmark/index.html.twig", 1);
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
        $__internal_c2ec1a3830933389970626083ce49d313198b3bde7d63ca2d27c289b29604fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2ec1a3830933389970626083ce49d313198b3bde7d63ca2d27c289b29604fd8->enter($__internal_c2ec1a3830933389970626083ce49d313198b3bde7d63ca2d27c289b29604fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bookmark/index.html.twig"));

        $__internal_3deee85f095f6bc55e2ffb3a233c31e77b6667f6c82ac5e829d9fda365afd571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3deee85f095f6bc55e2ffb3a233c31e77b6667f6c82ac5e829d9fda365afd571->enter($__internal_3deee85f095f6bc55e2ffb3a233c31e77b6667f6c82ac5e829d9fda365afd571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bookmark/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2ec1a3830933389970626083ce49d313198b3bde7d63ca2d27c289b29604fd8->leave($__internal_c2ec1a3830933389970626083ce49d313198b3bde7d63ca2d27c289b29604fd8_prof);

        
        $__internal_3deee85f095f6bc55e2ffb3a233c31e77b6667f6c82ac5e829d9fda365afd571->leave($__internal_3deee85f095f6bc55e2ffb3a233c31e77b6667f6c82ac5e829d9fda365afd571_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_34b7f608f3e2a02d6cdbf8e5f89d0a995c1df6528fb402b63d017693d570577e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b7f608f3e2a02d6cdbf8e5f89d0a995c1df6528fb402b63d017693d570577e->enter($__internal_34b7f608f3e2a02d6cdbf8e5f89d0a995c1df6528fb402b63d017693d570577e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_264f61282497d82c9c123e9b1839735facc699e3a5ef5060f25c49b7ddfb3df8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_264f61282497d82c9c123e9b1839735facc699e3a5ef5060f25c49b7ddfb3df8->enter($__internal_264f61282497d82c9c123e9b1839735facc699e3a5ef5060f25c49b7ddfb3df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.bookmarks_list"), "html", null, true);
        echo "
";
        
        $__internal_264f61282497d82c9c123e9b1839735facc699e3a5ef5060f25c49b7ddfb3df8->leave($__internal_264f61282497d82c9c123e9b1839735facc699e3a5ef5060f25c49b7ddfb3df8_prof);

        
        $__internal_34b7f608f3e2a02d6cdbf8e5f89d0a995c1df6528fb402b63d017693d570577e->leave($__internal_34b7f608f3e2a02d6cdbf8e5f89d0a995c1df6528fb402b63d017693d570577e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7333d7cea6a1349ef14280e457c43947e9ee419f106a8f19417aac5bb1173c99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7333d7cea6a1349ef14280e457c43947e9ee419f106a8f19417aac5bb1173c99->enter($__internal_7333d7cea6a1349ef14280e457c43947e9ee419f106a8f19417aac5bb1173c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_381ae766e2aaeb0c37cd83335b73da3563de89500d6b0fc87e6f1dc201ed2d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_381ae766e2aaeb0c37cd83335b73da3563de89500d6b0fc87e6f1dc201ed2d15->enter($__internal_381ae766e2aaeb0c37cd83335b73da3563de89500d6b0fc87e6f1dc201ed2d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.bookmarks_list"), "html", null, true);
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "title", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "url", array()), "html", null, true);
                echo "</li>
            <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("bookmark_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.view"), "html", null, true);
                echo "\">
                ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.view"), "html", null, true);
                echo "
            </a>
                <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("bookmark_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.bookmark"), "html", null, true);
                echo "\">
                    ";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.bookmark"), "html", null, true);
                echo "
                </a>
                <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("bookmark_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete.bookmark"), "html", null, true);
                echo "\">
                    ";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete.bookmark"), "html", null, true);
                echo "
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            ";
            $this->loadTemplate("default/_paginator.html.twig", "bookmark/index.html.twig", 25)->display(array_merge($context, array("paginator" =>             // line 26
(isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 26, $this->getSourceContext()); })()), "route_name" => "bookmark_index_paginated")));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("bookmark_add");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add.bookmark"), "html", null, true);
        echo "\">
        ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add.bookmark"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_381ae766e2aaeb0c37cd83335b73da3563de89500d6b0fc87e6f1dc201ed2d15->leave($__internal_381ae766e2aaeb0c37cd83335b73da3563de89500d6b0fc87e6f1dc201ed2d15_prof);

        
        $__internal_7333d7cea6a1349ef14280e457c43947e9ee419f106a8f19417aac5bb1173c99->leave($__internal_7333d7cea6a1349ef14280e457c43947e9ee419f106a8f19417aac5bb1173c99_prof);

    }

    public function getTemplateName()
    {
        return "bookmark/index.html.twig";
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
    {{ 'title.bookmarks_list'|trans }}
{%  endblock %}

{%  block body %}
    <h1>
        {{ 'title.bookmarks_list'|trans }}
    </h1>
    {%  if paginator|length %}
        <ul>
            {% for row in paginator %}
            <li>{{ row.title }}, {{ row.url }}</li>
            <a href=\"{{ url('bookmark_view', {'id': row.id}) }}\" title=\"{{ 'label.view'|trans }}\">
                {{ 'label.view'|trans }}
            </a>
                <a href=\"{{ url('bookmark_edit', {'id': row.id}) }}\" title=\"{{ 'edit.bookmark'|trans }}\">
                    {{ 'edit.bookmark'|trans }}
                </a>
                <a href=\"{{ url('bookmark_delete', {'id': row.id}) }}\" title=\"{{ 'delete.bookmark'|trans }}\">
                    {{ 'delete.bookmark'|trans }}
                </a>
            {% endfor %}
            {%  include 'default/_paginator.html.twig' with {
            paginator: paginator,
            route_name: 'bookmark_index_paginated',
            } %}
        </ul>
    {% else %}
        <div>
            List is empty!
        </div>
    {% endif %}
    <a href=\"{{ url('bookmark_add') }}\" title=\"{{ 'add.bookmark'|trans }}\">
        {{ 'add.bookmark'|trans }}
    </a>
{%  endblock %}", "bookmark/index.html.twig", "/home/sara/Pulpit/PHP/silex/app/templates/bookmark/index.html.twig");
    }
}
