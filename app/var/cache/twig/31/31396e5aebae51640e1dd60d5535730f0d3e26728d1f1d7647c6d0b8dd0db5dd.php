<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_3c1ec47e9e623664cb7b10727ef3a0d1995aa26665c886c082d2e6a19503f211 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fc261b522786065ab0b32609ff35e6ce574ecdfab1d5587c6752f57f6b0d62b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc261b522786065ab0b32609ff35e6ce574ecdfab1d5587c6752f57f6b0d62b->enter($__internal_4fc261b522786065ab0b32609ff35e6ce574ecdfab1d5587c6752f57f6b0d62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_3bdc28b9a10135ea119ef91512bf12dd4764bc7a59cc8096a2cd41b354c15b55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bdc28b9a10135ea119ef91512bf12dd4764bc7a59cc8096a2cd41b354c15b55->enter($__internal_3bdc28b9a10135ea119ef91512bf12dd4764bc7a59cc8096a2cd41b354c15b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fc261b522786065ab0b32609ff35e6ce574ecdfab1d5587c6752f57f6b0d62b->leave($__internal_4fc261b522786065ab0b32609ff35e6ce574ecdfab1d5587c6752f57f6b0d62b_prof);

        
        $__internal_3bdc28b9a10135ea119ef91512bf12dd4764bc7a59cc8096a2cd41b354c15b55->leave($__internal_3bdc28b9a10135ea119ef91512bf12dd4764bc7a59cc8096a2cd41b354c15b55_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1c885750f2716f7b0a21cdacda16e41f8c26d8981592ef03dd2a8ff2c257274d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c885750f2716f7b0a21cdacda16e41f8c26d8981592ef03dd2a8ff2c257274d->enter($__internal_1c885750f2716f7b0a21cdacda16e41f8c26d8981592ef03dd2a8ff2c257274d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e998e249f93576c78bfbb40ce623fb10dd4623b8e74f6d98259413a7cd2185f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e998e249f93576c78bfbb40ce623fb10dd4623b8e74f6d98259413a7cd2185f4->enter($__internal_e998e249f93576c78bfbb40ce623fb10dd4623b8e74f6d98259413a7cd2185f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_e998e249f93576c78bfbb40ce623fb10dd4623b8e74f6d98259413a7cd2185f4->leave($__internal_e998e249f93576c78bfbb40ce623fb10dd4623b8e74f6d98259413a7cd2185f4_prof);

        
        $__internal_1c885750f2716f7b0a21cdacda16e41f8c26d8981592ef03dd2a8ff2c257274d->leave($__internal_1c885750f2716f7b0a21cdacda16e41f8c26d8981592ef03dd2a8ff2c257274d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/sara/Pulpit/PHP/silex/app/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
