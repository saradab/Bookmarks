<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fa3bb7b7a037456ec21d0c0a174de0a9559109e2a65b88792f26872492526e99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_2de94ea9c71f80cbc5968176b84ddd11e682de6aed4714ed228a8cde5746da97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de94ea9c71f80cbc5968176b84ddd11e682de6aed4714ed228a8cde5746da97->enter($__internal_2de94ea9c71f80cbc5968176b84ddd11e682de6aed4714ed228a8cde5746da97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_58119afabcbacfdc57daa95fec23e938f096a4330bb5897f0677a84932516c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58119afabcbacfdc57daa95fec23e938f096a4330bb5897f0677a84932516c34->enter($__internal_58119afabcbacfdc57daa95fec23e938f096a4330bb5897f0677a84932516c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2de94ea9c71f80cbc5968176b84ddd11e682de6aed4714ed228a8cde5746da97->leave($__internal_2de94ea9c71f80cbc5968176b84ddd11e682de6aed4714ed228a8cde5746da97_prof);

        
        $__internal_58119afabcbacfdc57daa95fec23e938f096a4330bb5897f0677a84932516c34->leave($__internal_58119afabcbacfdc57daa95fec23e938f096a4330bb5897f0677a84932516c34_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2217a97bb70b246ac4eed2948cd99a5e22d55c675c3750689e398c3df11f2b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2217a97bb70b246ac4eed2948cd99a5e22d55c675c3750689e398c3df11f2b4f->enter($__internal_2217a97bb70b246ac4eed2948cd99a5e22d55c675c3750689e398c3df11f2b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ba54215aac042b7ca2ef44920c8b343d2daea11780f22bee9359562abe66c15b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba54215aac042b7ca2ef44920c8b343d2daea11780f22bee9359562abe66c15b->enter($__internal_ba54215aac042b7ca2ef44920c8b343d2daea11780f22bee9359562abe66c15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ba54215aac042b7ca2ef44920c8b343d2daea11780f22bee9359562abe66c15b->leave($__internal_ba54215aac042b7ca2ef44920c8b343d2daea11780f22bee9359562abe66c15b_prof);

        
        $__internal_2217a97bb70b246ac4eed2948cd99a5e22d55c675c3750689e398c3df11f2b4f->leave($__internal_2217a97bb70b246ac4eed2948cd99a5e22d55c675c3750689e398c3df11f2b4f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ee11832437e90c8769a7b9f2589fe87ef8e98fc5cef18b40fef7ec345187ceda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee11832437e90c8769a7b9f2589fe87ef8e98fc5cef18b40fef7ec345187ceda->enter($__internal_ee11832437e90c8769a7b9f2589fe87ef8e98fc5cef18b40fef7ec345187ceda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_823b9a2b417362a19648dfb272a0a0eaf5d4b6ceb8cdb82731517a2e9e5df62c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_823b9a2b417362a19648dfb272a0a0eaf5d4b6ceb8cdb82731517a2e9e5df62c->enter($__internal_823b9a2b417362a19648dfb272a0a0eaf5d4b6ceb8cdb82731517a2e9e5df62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_823b9a2b417362a19648dfb272a0a0eaf5d4b6ceb8cdb82731517a2e9e5df62c->leave($__internal_823b9a2b417362a19648dfb272a0a0eaf5d4b6ceb8cdb82731517a2e9e5df62c_prof);

        
        $__internal_ee11832437e90c8769a7b9f2589fe87ef8e98fc5cef18b40fef7ec345187ceda->leave($__internal_ee11832437e90c8769a7b9f2589fe87ef8e98fc5cef18b40fef7ec345187ceda_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c129906cd5db3031b9820c324afd4cefe0b412a5c61653fa41e5dbeb51d4f5c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c129906cd5db3031b9820c324afd4cefe0b412a5c61653fa41e5dbeb51d4f5c3->enter($__internal_c129906cd5db3031b9820c324afd4cefe0b412a5c61653fa41e5dbeb51d4f5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_51aa80be77b09ff3ad482ee193cb25197622160d6ddc5c1bd11d5d2790a13470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51aa80be77b09ff3ad482ee193cb25197622160d6ddc5c1bd11d5d2790a13470->enter($__internal_51aa80be77b09ff3ad482ee193cb25197622160d6ddc5c1bd11d5d2790a13470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_51aa80be77b09ff3ad482ee193cb25197622160d6ddc5c1bd11d5d2790a13470->leave($__internal_51aa80be77b09ff3ad482ee193cb25197622160d6ddc5c1bd11d5d2790a13470_prof);

        
        $__internal_c129906cd5db3031b9820c324afd4cefe0b412a5c61653fa41e5dbeb51d4f5c3->leave($__internal_c129906cd5db3031b9820c324afd4cefe0b412a5c61653fa41e5dbeb51d4f5c3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/sara/Pulpit/PHP/silex/app/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
