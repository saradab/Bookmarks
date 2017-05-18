<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_1d6da5e4bd7a27fabfcbf840388a3e92610e9099f74d49c1da1417b71f2395fb extends Twig_Template
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
        $__internal_9a9ce07f2d8960ed723483cab59ab83de90eefe4b10395f40682ad7aa7d83a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a9ce07f2d8960ed723483cab59ab83de90eefe4b10395f40682ad7aa7d83a36->enter($__internal_9a9ce07f2d8960ed723483cab59ab83de90eefe4b10395f40682ad7aa7d83a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0881e4b54b3c7c1a31857563411119db222ce79f42b77d1b852acdb9ca99f547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0881e4b54b3c7c1a31857563411119db222ce79f42b77d1b852acdb9ca99f547->enter($__internal_0881e4b54b3c7c1a31857563411119db222ce79f42b77d1b852acdb9ca99f547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a9ce07f2d8960ed723483cab59ab83de90eefe4b10395f40682ad7aa7d83a36->leave($__internal_9a9ce07f2d8960ed723483cab59ab83de90eefe4b10395f40682ad7aa7d83a36_prof);

        
        $__internal_0881e4b54b3c7c1a31857563411119db222ce79f42b77d1b852acdb9ca99f547->leave($__internal_0881e4b54b3c7c1a31857563411119db222ce79f42b77d1b852acdb9ca99f547_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_23a32f25b90b022850c4267aee94fd3501a3d7f4bc28d0978b7aa94589711e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23a32f25b90b022850c4267aee94fd3501a3d7f4bc28d0978b7aa94589711e7f->enter($__internal_23a32f25b90b022850c4267aee94fd3501a3d7f4bc28d0978b7aa94589711e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3a7c2c805b8184007577f0f138a209137fef13e72d79bda3672f305fb708a692 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a7c2c805b8184007577f0f138a209137fef13e72d79bda3672f305fb708a692->enter($__internal_3a7c2c805b8184007577f0f138a209137fef13e72d79bda3672f305fb708a692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_3a7c2c805b8184007577f0f138a209137fef13e72d79bda3672f305fb708a692->leave($__internal_3a7c2c805b8184007577f0f138a209137fef13e72d79bda3672f305fb708a692_prof);

        
        $__internal_23a32f25b90b022850c4267aee94fd3501a3d7f4bc28d0978b7aa94589711e7f->leave($__internal_23a32f25b90b022850c4267aee94fd3501a3d7f4bc28d0978b7aa94589711e7f_prof);

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
