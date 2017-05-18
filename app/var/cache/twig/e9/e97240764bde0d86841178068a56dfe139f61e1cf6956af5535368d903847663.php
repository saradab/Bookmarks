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
        $__internal_2094eb6817efc569a493d44694c541908df9f9452fc17b4c483e88b018f97bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2094eb6817efc569a493d44694c541908df9f9452fc17b4c483e88b018f97bd7->enter($__internal_2094eb6817efc569a493d44694c541908df9f9452fc17b4c483e88b018f97bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_80f8c09ef493b8d284826f9b74cd9db622194186b4f717db87b92d5a311fec10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80f8c09ef493b8d284826f9b74cd9db622194186b4f717db87b92d5a311fec10->enter($__internal_80f8c09ef493b8d284826f9b74cd9db622194186b4f717db87b92d5a311fec10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2094eb6817efc569a493d44694c541908df9f9452fc17b4c483e88b018f97bd7->leave($__internal_2094eb6817efc569a493d44694c541908df9f9452fc17b4c483e88b018f97bd7_prof);

        
        $__internal_80f8c09ef493b8d284826f9b74cd9db622194186b4f717db87b92d5a311fec10->leave($__internal_80f8c09ef493b8d284826f9b74cd9db622194186b4f717db87b92d5a311fec10_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_26315f23709bee6931ac9ab52f3159b10e929781b43f1882c5aa380a66b651db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26315f23709bee6931ac9ab52f3159b10e929781b43f1882c5aa380a66b651db->enter($__internal_26315f23709bee6931ac9ab52f3159b10e929781b43f1882c5aa380a66b651db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1171938e9a23d66cd8b0780ac2da3e581c638e5d7522e0043f06b99c8860dbe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1171938e9a23d66cd8b0780ac2da3e581c638e5d7522e0043f06b99c8860dbe0->enter($__internal_1171938e9a23d66cd8b0780ac2da3e581c638e5d7522e0043f06b99c8860dbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1171938e9a23d66cd8b0780ac2da3e581c638e5d7522e0043f06b99c8860dbe0->leave($__internal_1171938e9a23d66cd8b0780ac2da3e581c638e5d7522e0043f06b99c8860dbe0_prof);

        
        $__internal_26315f23709bee6931ac9ab52f3159b10e929781b43f1882c5aa380a66b651db->leave($__internal_26315f23709bee6931ac9ab52f3159b10e929781b43f1882c5aa380a66b651db_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1407e26a9294edf17dbf2b3a72d0448c2c120a703ce17ba84bd04a1233ece340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1407e26a9294edf17dbf2b3a72d0448c2c120a703ce17ba84bd04a1233ece340->enter($__internal_1407e26a9294edf17dbf2b3a72d0448c2c120a703ce17ba84bd04a1233ece340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b62e1e68d9aa65bd7cddefc398091b43cdf4671a4c0a235dbe4a4b20ac407b70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b62e1e68d9aa65bd7cddefc398091b43cdf4671a4c0a235dbe4a4b20ac407b70->enter($__internal_b62e1e68d9aa65bd7cddefc398091b43cdf4671a4c0a235dbe4a4b20ac407b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b62e1e68d9aa65bd7cddefc398091b43cdf4671a4c0a235dbe4a4b20ac407b70->leave($__internal_b62e1e68d9aa65bd7cddefc398091b43cdf4671a4c0a235dbe4a4b20ac407b70_prof);

        
        $__internal_1407e26a9294edf17dbf2b3a72d0448c2c120a703ce17ba84bd04a1233ece340->leave($__internal_1407e26a9294edf17dbf2b3a72d0448c2c120a703ce17ba84bd04a1233ece340_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aa1ac1b0e0091fefce543c99f53aac370398d3d9c79d8e5ae8d8b471dd8c5482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1ac1b0e0091fefce543c99f53aac370398d3d9c79d8e5ae8d8b471dd8c5482->enter($__internal_aa1ac1b0e0091fefce543c99f53aac370398d3d9c79d8e5ae8d8b471dd8c5482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_81bc78a406355afee0a7776ab3adf2faf1c0317f1f69229a8c355207d3f85ad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81bc78a406355afee0a7776ab3adf2faf1c0317f1f69229a8c355207d3f85ad0->enter($__internal_81bc78a406355afee0a7776ab3adf2faf1c0317f1f69229a8c355207d3f85ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_81bc78a406355afee0a7776ab3adf2faf1c0317f1f69229a8c355207d3f85ad0->leave($__internal_81bc78a406355afee0a7776ab3adf2faf1c0317f1f69229a8c355207d3f85ad0_prof);

        
        $__internal_aa1ac1b0e0091fefce543c99f53aac370398d3d9c79d8e5ae8d8b471dd8c5482->leave($__internal_aa1ac1b0e0091fefce543c99f53aac370398d3d9c79d8e5ae8d8b471dd8c5482_prof);

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
