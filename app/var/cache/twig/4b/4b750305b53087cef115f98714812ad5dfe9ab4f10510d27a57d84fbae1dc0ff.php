<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a2c1c860c2e90d62a4140908cb9f022ce5a8952edfb22407d72a6e3d38999317 extends Twig_Template
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
        $__internal_868719b4117542ee71a98c2d438881b78f6dc0f6ec68659df979dddf76f0c01b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_868719b4117542ee71a98c2d438881b78f6dc0f6ec68659df979dddf76f0c01b->enter($__internal_868719b4117542ee71a98c2d438881b78f6dc0f6ec68659df979dddf76f0c01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ba8061e58bfcb8fe9d763f5b09c530e0cb284655d68b2fa2e8a6af3ae41e0096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba8061e58bfcb8fe9d763f5b09c530e0cb284655d68b2fa2e8a6af3ae41e0096->enter($__internal_ba8061e58bfcb8fe9d763f5b09c530e0cb284655d68b2fa2e8a6af3ae41e0096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_868719b4117542ee71a98c2d438881b78f6dc0f6ec68659df979dddf76f0c01b->leave($__internal_868719b4117542ee71a98c2d438881b78f6dc0f6ec68659df979dddf76f0c01b_prof);

        
        $__internal_ba8061e58bfcb8fe9d763f5b09c530e0cb284655d68b2fa2e8a6af3ae41e0096->leave($__internal_ba8061e58bfcb8fe9d763f5b09c530e0cb284655d68b2fa2e8a6af3ae41e0096_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ff1ebdc43c774470d8457f03d6b32f6d63ccd9b5e6b0d217fa6d244b7f2eb592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1ebdc43c774470d8457f03d6b32f6d63ccd9b5e6b0d217fa6d244b7f2eb592->enter($__internal_ff1ebdc43c774470d8457f03d6b32f6d63ccd9b5e6b0d217fa6d244b7f2eb592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c6568270e1daae9d91b50e15c35d6209841e04fbd31165babdc56dd2a176b2dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6568270e1daae9d91b50e15c35d6209841e04fbd31165babdc56dd2a176b2dc->enter($__internal_c6568270e1daae9d91b50e15c35d6209841e04fbd31165babdc56dd2a176b2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c6568270e1daae9d91b50e15c35d6209841e04fbd31165babdc56dd2a176b2dc->leave($__internal_c6568270e1daae9d91b50e15c35d6209841e04fbd31165babdc56dd2a176b2dc_prof);

        
        $__internal_ff1ebdc43c774470d8457f03d6b32f6d63ccd9b5e6b0d217fa6d244b7f2eb592->leave($__internal_ff1ebdc43c774470d8457f03d6b32f6d63ccd9b5e6b0d217fa6d244b7f2eb592_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8b244143ddbf265d0ab70c91e139ead1f17de39b0bab511e780a5bab7aed0d3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b244143ddbf265d0ab70c91e139ead1f17de39b0bab511e780a5bab7aed0d3b->enter($__internal_8b244143ddbf265d0ab70c91e139ead1f17de39b0bab511e780a5bab7aed0d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f74b687e02da6c541c3b944920c09cb2e24a3e7fd0b6f603f2df529f3973d869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f74b687e02da6c541c3b944920c09cb2e24a3e7fd0b6f603f2df529f3973d869->enter($__internal_f74b687e02da6c541c3b944920c09cb2e24a3e7fd0b6f603f2df529f3973d869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f74b687e02da6c541c3b944920c09cb2e24a3e7fd0b6f603f2df529f3973d869->leave($__internal_f74b687e02da6c541c3b944920c09cb2e24a3e7fd0b6f603f2df529f3973d869_prof);

        
        $__internal_8b244143ddbf265d0ab70c91e139ead1f17de39b0bab511e780a5bab7aed0d3b->leave($__internal_8b244143ddbf265d0ab70c91e139ead1f17de39b0bab511e780a5bab7aed0d3b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3ac9cd6c8a68290d2c71223f9827e5dea1cbc6b52707995850beb1164dd5accf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac9cd6c8a68290d2c71223f9827e5dea1cbc6b52707995850beb1164dd5accf->enter($__internal_3ac9cd6c8a68290d2c71223f9827e5dea1cbc6b52707995850beb1164dd5accf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b7cf125bb7fa8489d72c1de123c5dc06bd70b7708eb0955a426f24ccd372312f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7cf125bb7fa8489d72c1de123c5dc06bd70b7708eb0955a426f24ccd372312f->enter($__internal_b7cf125bb7fa8489d72c1de123c5dc06bd70b7708eb0955a426f24ccd372312f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b7cf125bb7fa8489d72c1de123c5dc06bd70b7708eb0955a426f24ccd372312f->leave($__internal_b7cf125bb7fa8489d72c1de123c5dc06bd70b7708eb0955a426f24ccd372312f_prof);

        
        $__internal_3ac9cd6c8a68290d2c71223f9827e5dea1cbc6b52707995850beb1164dd5accf->leave($__internal_3ac9cd6c8a68290d2c71223f9827e5dea1cbc6b52707995850beb1164dd5accf_prof);

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
