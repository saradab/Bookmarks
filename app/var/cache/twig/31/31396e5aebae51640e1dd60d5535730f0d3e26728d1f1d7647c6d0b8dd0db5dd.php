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
        $__internal_a4449d145bc6c624e08b19c778f9f7a31433281fc093c54d3ba69e0fdf74b75b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4449d145bc6c624e08b19c778f9f7a31433281fc093c54d3ba69e0fdf74b75b->enter($__internal_a4449d145bc6c624e08b19c778f9f7a31433281fc093c54d3ba69e0fdf74b75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6fa18faecd00483a9e3d8ec99d6256da45169732d9ca55cf163693c5b2f94e7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa18faecd00483a9e3d8ec99d6256da45169732d9ca55cf163693c5b2f94e7a->enter($__internal_6fa18faecd00483a9e3d8ec99d6256da45169732d9ca55cf163693c5b2f94e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4449d145bc6c624e08b19c778f9f7a31433281fc093c54d3ba69e0fdf74b75b->leave($__internal_a4449d145bc6c624e08b19c778f9f7a31433281fc093c54d3ba69e0fdf74b75b_prof);

        
        $__internal_6fa18faecd00483a9e3d8ec99d6256da45169732d9ca55cf163693c5b2f94e7a->leave($__internal_6fa18faecd00483a9e3d8ec99d6256da45169732d9ca55cf163693c5b2f94e7a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4d8a588fa31de8cf0d6dd3423ef7ed06bf03b28daaaa4b00149b0aad2b2ce0c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d8a588fa31de8cf0d6dd3423ef7ed06bf03b28daaaa4b00149b0aad2b2ce0c1->enter($__internal_4d8a588fa31de8cf0d6dd3423ef7ed06bf03b28daaaa4b00149b0aad2b2ce0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3b1f47542171a5d4fa84086f89a2b80b3a682d89b7bdc167206c93f2ec861906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b1f47542171a5d4fa84086f89a2b80b3a682d89b7bdc167206c93f2ec861906->enter($__internal_3b1f47542171a5d4fa84086f89a2b80b3a682d89b7bdc167206c93f2ec861906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_3b1f47542171a5d4fa84086f89a2b80b3a682d89b7bdc167206c93f2ec861906->leave($__internal_3b1f47542171a5d4fa84086f89a2b80b3a682d89b7bdc167206c93f2ec861906_prof);

        
        $__internal_4d8a588fa31de8cf0d6dd3423ef7ed06bf03b28daaaa4b00149b0aad2b2ce0c1->leave($__internal_4d8a588fa31de8cf0d6dd3423ef7ed06bf03b28daaaa4b00149b0aad2b2ce0c1_prof);

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
