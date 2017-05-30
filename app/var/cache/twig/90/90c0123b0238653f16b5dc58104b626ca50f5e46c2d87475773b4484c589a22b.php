<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_13a9ce46b7ad4472f8ce34c07de8ea20b6a329fc71d0a23ea612b55d04e4af76 extends Twig_Template
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
        $__internal_24b3064391090f6c59615563ec64ab0eb5f631171c8bd2c2b8e980e909eaadd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b3064391090f6c59615563ec64ab0eb5f631171c8bd2c2b8e980e909eaadd6->enter($__internal_24b3064391090f6c59615563ec64ab0eb5f631171c8bd2c2b8e980e909eaadd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1bc825040ec020c569be19af1ed6d5e125c54aa5e41a3de5b1fa20976ab79aee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bc825040ec020c569be19af1ed6d5e125c54aa5e41a3de5b1fa20976ab79aee->enter($__internal_1bc825040ec020c569be19af1ed6d5e125c54aa5e41a3de5b1fa20976ab79aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24b3064391090f6c59615563ec64ab0eb5f631171c8bd2c2b8e980e909eaadd6->leave($__internal_24b3064391090f6c59615563ec64ab0eb5f631171c8bd2c2b8e980e909eaadd6_prof);

        
        $__internal_1bc825040ec020c569be19af1ed6d5e125c54aa5e41a3de5b1fa20976ab79aee->leave($__internal_1bc825040ec020c569be19af1ed6d5e125c54aa5e41a3de5b1fa20976ab79aee_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a2729f236f793d8f090a9ef96450681ad76e5e1d0e03e26a66b950c853c963d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2729f236f793d8f090a9ef96450681ad76e5e1d0e03e26a66b950c853c963d7->enter($__internal_a2729f236f793d8f090a9ef96450681ad76e5e1d0e03e26a66b950c853c963d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6e04888ea89f9afcc91cc9b77e1e4acdf0ccd65a5c6f0f4430dfae2fa8add0ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e04888ea89f9afcc91cc9b77e1e4acdf0ccd65a5c6f0f4430dfae2fa8add0ff->enter($__internal_6e04888ea89f9afcc91cc9b77e1e4acdf0ccd65a5c6f0f4430dfae2fa8add0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6e04888ea89f9afcc91cc9b77e1e4acdf0ccd65a5c6f0f4430dfae2fa8add0ff->leave($__internal_6e04888ea89f9afcc91cc9b77e1e4acdf0ccd65a5c6f0f4430dfae2fa8add0ff_prof);

        
        $__internal_a2729f236f793d8f090a9ef96450681ad76e5e1d0e03e26a66b950c853c963d7->leave($__internal_a2729f236f793d8f090a9ef96450681ad76e5e1d0e03e26a66b950c853c963d7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7fe8cdea5df5a9e52f672434a19f91330905e30798948f837921d46b1579fd9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe8cdea5df5a9e52f672434a19f91330905e30798948f837921d46b1579fd9d->enter($__internal_7fe8cdea5df5a9e52f672434a19f91330905e30798948f837921d46b1579fd9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5312066cd91ed63c11601ee143e13425b86634268cd63f276c13fdb284acf4b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5312066cd91ed63c11601ee143e13425b86634268cd63f276c13fdb284acf4b3->enter($__internal_5312066cd91ed63c11601ee143e13425b86634268cd63f276c13fdb284acf4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5312066cd91ed63c11601ee143e13425b86634268cd63f276c13fdb284acf4b3->leave($__internal_5312066cd91ed63c11601ee143e13425b86634268cd63f276c13fdb284acf4b3_prof);

        
        $__internal_7fe8cdea5df5a9e52f672434a19f91330905e30798948f837921d46b1579fd9d->leave($__internal_7fe8cdea5df5a9e52f672434a19f91330905e30798948f837921d46b1579fd9d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_151ea6db5a9bf1d0f73362d9a1127d9759c638a7c40b57bab1485043eb64e197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_151ea6db5a9bf1d0f73362d9a1127d9759c638a7c40b57bab1485043eb64e197->enter($__internal_151ea6db5a9bf1d0f73362d9a1127d9759c638a7c40b57bab1485043eb64e197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ee5b57e0e65cd82276aa4145e12493b6a6e60bfca7cc4179622333b21a720aa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee5b57e0e65cd82276aa4145e12493b6a6e60bfca7cc4179622333b21a720aa3->enter($__internal_ee5b57e0e65cd82276aa4145e12493b6a6e60bfca7cc4179622333b21a720aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_ee5b57e0e65cd82276aa4145e12493b6a6e60bfca7cc4179622333b21a720aa3->leave($__internal_ee5b57e0e65cd82276aa4145e12493b6a6e60bfca7cc4179622333b21a720aa3_prof);

        
        $__internal_151ea6db5a9bf1d0f73362d9a1127d9759c638a7c40b57bab1485043eb64e197->leave($__internal_151ea6db5a9bf1d0f73362d9a1127d9759c638a7c40b57bab1485043eb64e197_prof);

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
