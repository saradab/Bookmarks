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
        $__internal_6366c5b588e231df31683b2cfcc7376568f224a04badc7e4cfc858c3b65ea16b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6366c5b588e231df31683b2cfcc7376568f224a04badc7e4cfc858c3b65ea16b->enter($__internal_6366c5b588e231df31683b2cfcc7376568f224a04badc7e4cfc858c3b65ea16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0564fbac1b4dde8357a69bd0bafe195f5aedc558dd8a5786c7bb6824909064ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0564fbac1b4dde8357a69bd0bafe195f5aedc558dd8a5786c7bb6824909064ce->enter($__internal_0564fbac1b4dde8357a69bd0bafe195f5aedc558dd8a5786c7bb6824909064ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6366c5b588e231df31683b2cfcc7376568f224a04badc7e4cfc858c3b65ea16b->leave($__internal_6366c5b588e231df31683b2cfcc7376568f224a04badc7e4cfc858c3b65ea16b_prof);

        
        $__internal_0564fbac1b4dde8357a69bd0bafe195f5aedc558dd8a5786c7bb6824909064ce->leave($__internal_0564fbac1b4dde8357a69bd0bafe195f5aedc558dd8a5786c7bb6824909064ce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7ee8462012880f9ae0f77eaad1e342372e40013fb400f325c3eec640fea161fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee8462012880f9ae0f77eaad1e342372e40013fb400f325c3eec640fea161fe->enter($__internal_7ee8462012880f9ae0f77eaad1e342372e40013fb400f325c3eec640fea161fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ebc5d5b3affe21d5a6fb42e6ec92c1efc5ee4d892613caa11dbeb2beca1d610a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebc5d5b3affe21d5a6fb42e6ec92c1efc5ee4d892613caa11dbeb2beca1d610a->enter($__internal_ebc5d5b3affe21d5a6fb42e6ec92c1efc5ee4d892613caa11dbeb2beca1d610a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ebc5d5b3affe21d5a6fb42e6ec92c1efc5ee4d892613caa11dbeb2beca1d610a->leave($__internal_ebc5d5b3affe21d5a6fb42e6ec92c1efc5ee4d892613caa11dbeb2beca1d610a_prof);

        
        $__internal_7ee8462012880f9ae0f77eaad1e342372e40013fb400f325c3eec640fea161fe->leave($__internal_7ee8462012880f9ae0f77eaad1e342372e40013fb400f325c3eec640fea161fe_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f15e8565757e7c3bcdf0312da76bc5f8cea27b3f81f8b03eb3b9637c81698951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f15e8565757e7c3bcdf0312da76bc5f8cea27b3f81f8b03eb3b9637c81698951->enter($__internal_f15e8565757e7c3bcdf0312da76bc5f8cea27b3f81f8b03eb3b9637c81698951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_39de2d4fbc717deb40ff01eb85e0ee30e7ab8290e989d1eab4d5960976fe5ab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39de2d4fbc717deb40ff01eb85e0ee30e7ab8290e989d1eab4d5960976fe5ab1->enter($__internal_39de2d4fbc717deb40ff01eb85e0ee30e7ab8290e989d1eab4d5960976fe5ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_39de2d4fbc717deb40ff01eb85e0ee30e7ab8290e989d1eab4d5960976fe5ab1->leave($__internal_39de2d4fbc717deb40ff01eb85e0ee30e7ab8290e989d1eab4d5960976fe5ab1_prof);

        
        $__internal_f15e8565757e7c3bcdf0312da76bc5f8cea27b3f81f8b03eb3b9637c81698951->leave($__internal_f15e8565757e7c3bcdf0312da76bc5f8cea27b3f81f8b03eb3b9637c81698951_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f374449d55f6d018abc25563d6fe10e8912c29c16a25444d31f69f4cb64bee67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f374449d55f6d018abc25563d6fe10e8912c29c16a25444d31f69f4cb64bee67->enter($__internal_f374449d55f6d018abc25563d6fe10e8912c29c16a25444d31f69f4cb64bee67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7906c6964c9ba0b3d18968d5d392d46758f9ba0adc249466de452f373404f67d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7906c6964c9ba0b3d18968d5d392d46758f9ba0adc249466de452f373404f67d->enter($__internal_7906c6964c9ba0b3d18968d5d392d46758f9ba0adc249466de452f373404f67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7906c6964c9ba0b3d18968d5d392d46758f9ba0adc249466de452f373404f67d->leave($__internal_7906c6964c9ba0b3d18968d5d392d46758f9ba0adc249466de452f373404f67d_prof);

        
        $__internal_f374449d55f6d018abc25563d6fe10e8912c29c16a25444d31f69f4cb64bee67->leave($__internal_f374449d55f6d018abc25563d6fe10e8912c29c16a25444d31f69f4cb64bee67_prof);

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
