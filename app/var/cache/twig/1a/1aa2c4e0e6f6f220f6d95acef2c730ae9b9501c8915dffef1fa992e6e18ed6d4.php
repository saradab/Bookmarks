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
        $__internal_4c965ec2ec98c9c4232e5e29389388a6606b0b820a9ce8994856f90da90838cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c965ec2ec98c9c4232e5e29389388a6606b0b820a9ce8994856f90da90838cd->enter($__internal_4c965ec2ec98c9c4232e5e29389388a6606b0b820a9ce8994856f90da90838cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_09c8810127abea5aa12cb370541023cdcfd7adc274c8183337bfb15bfb9a5fb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09c8810127abea5aa12cb370541023cdcfd7adc274c8183337bfb15bfb9a5fb1->enter($__internal_09c8810127abea5aa12cb370541023cdcfd7adc274c8183337bfb15bfb9a5fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c965ec2ec98c9c4232e5e29389388a6606b0b820a9ce8994856f90da90838cd->leave($__internal_4c965ec2ec98c9c4232e5e29389388a6606b0b820a9ce8994856f90da90838cd_prof);

        
        $__internal_09c8810127abea5aa12cb370541023cdcfd7adc274c8183337bfb15bfb9a5fb1->leave($__internal_09c8810127abea5aa12cb370541023cdcfd7adc274c8183337bfb15bfb9a5fb1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_631f72cd44565628e6d42dcce92bd04b208c61b47b463261d51c67035f09623c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_631f72cd44565628e6d42dcce92bd04b208c61b47b463261d51c67035f09623c->enter($__internal_631f72cd44565628e6d42dcce92bd04b208c61b47b463261d51c67035f09623c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6085b776a273a18a054834d09c39a36d0d6694df3f13e7310c29635409d71eec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6085b776a273a18a054834d09c39a36d0d6694df3f13e7310c29635409d71eec->enter($__internal_6085b776a273a18a054834d09c39a36d0d6694df3f13e7310c29635409d71eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_6085b776a273a18a054834d09c39a36d0d6694df3f13e7310c29635409d71eec->leave($__internal_6085b776a273a18a054834d09c39a36d0d6694df3f13e7310c29635409d71eec_prof);

        
        $__internal_631f72cd44565628e6d42dcce92bd04b208c61b47b463261d51c67035f09623c->leave($__internal_631f72cd44565628e6d42dcce92bd04b208c61b47b463261d51c67035f09623c_prof);

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
