<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1c3c463b2550b9b8c1309912c02d809587219e51cc44aeab19c275e9d4e265c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6443d6dc7b9b6f2199f44119bc0bc0781525142c5478a929cc86b7044959003a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6443d6dc7b9b6f2199f44119bc0bc0781525142c5478a929cc86b7044959003a->enter($__internal_6443d6dc7b9b6f2199f44119bc0bc0781525142c5478a929cc86b7044959003a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_79dcb7b3ab2e9f8ac3d5691b1ae6055f698867927ddd986352d238d384630ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79dcb7b3ab2e9f8ac3d5691b1ae6055f698867927ddd986352d238d384630ae6->enter($__internal_79dcb7b3ab2e9f8ac3d5691b1ae6055f698867927ddd986352d238d384630ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6443d6dc7b9b6f2199f44119bc0bc0781525142c5478a929cc86b7044959003a->leave($__internal_6443d6dc7b9b6f2199f44119bc0bc0781525142c5478a929cc86b7044959003a_prof);

        
        $__internal_79dcb7b3ab2e9f8ac3d5691b1ae6055f698867927ddd986352d238d384630ae6->leave($__internal_79dcb7b3ab2e9f8ac3d5691b1ae6055f698867927ddd986352d238d384630ae6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c2b65f96f9981bff59a1c42d5beed399adb5adacef21e29353e881e40bc92590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b65f96f9981bff59a1c42d5beed399adb5adacef21e29353e881e40bc92590->enter($__internal_c2b65f96f9981bff59a1c42d5beed399adb5adacef21e29353e881e40bc92590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_808da348effda7a44efa1f675cf7669746ff1646d3a1b30c26abb234927af60f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_808da348effda7a44efa1f675cf7669746ff1646d3a1b30c26abb234927af60f->enter($__internal_808da348effda7a44efa1f675cf7669746ff1646d3a1b30c26abb234927af60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_808da348effda7a44efa1f675cf7669746ff1646d3a1b30c26abb234927af60f->leave($__internal_808da348effda7a44efa1f675cf7669746ff1646d3a1b30c26abb234927af60f_prof);

        
        $__internal_c2b65f96f9981bff59a1c42d5beed399adb5adacef21e29353e881e40bc92590->leave($__internal_c2b65f96f9981bff59a1c42d5beed399adb5adacef21e29353e881e40bc92590_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e08f541b997ed13ae97f14d9c75b83026a39bcdaab23e6c39d07fcd99506ad46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e08f541b997ed13ae97f14d9c75b83026a39bcdaab23e6c39d07fcd99506ad46->enter($__internal_e08f541b997ed13ae97f14d9c75b83026a39bcdaab23e6c39d07fcd99506ad46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3e8533075eeac55ed9401fce1b0f9d84a880ddd8ef3d9eff70d239bee4589d95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e8533075eeac55ed9401fce1b0f9d84a880ddd8ef3d9eff70d239bee4589d95->enter($__internal_3e8533075eeac55ed9401fce1b0f9d84a880ddd8ef3d9eff70d239bee4589d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3e8533075eeac55ed9401fce1b0f9d84a880ddd8ef3d9eff70d239bee4589d95->leave($__internal_3e8533075eeac55ed9401fce1b0f9d84a880ddd8ef3d9eff70d239bee4589d95_prof);

        
        $__internal_e08f541b997ed13ae97f14d9c75b83026a39bcdaab23e6c39d07fcd99506ad46->leave($__internal_e08f541b997ed13ae97f14d9c75b83026a39bcdaab23e6c39d07fcd99506ad46_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_837515c7365ea0ef04fce5f706191aa80f0ee5733c79d6ab0ba867446c4972ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_837515c7365ea0ef04fce5f706191aa80f0ee5733c79d6ab0ba867446c4972ab->enter($__internal_837515c7365ea0ef04fce5f706191aa80f0ee5733c79d6ab0ba867446c4972ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9dd24fd3055beadd864c3ecf7876ae6e1992c106a947fbf9d9d07d6075186762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dd24fd3055beadd864c3ecf7876ae6e1992c106a947fbf9d9d07d6075186762->enter($__internal_9dd24fd3055beadd864c3ecf7876ae6e1992c106a947fbf9d9d07d6075186762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_9dd24fd3055beadd864c3ecf7876ae6e1992c106a947fbf9d9d07d6075186762->leave($__internal_9dd24fd3055beadd864c3ecf7876ae6e1992c106a947fbf9d9d07d6075186762_prof);

        
        $__internal_837515c7365ea0ef04fce5f706191aa80f0ee5733c79d6ab0ba867446c4972ab->leave($__internal_837515c7365ea0ef04fce5f706191aa80f0ee5733c79d6ab0ba867446c4972ab_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/sara/Pulpit/PHP/silex/app/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
