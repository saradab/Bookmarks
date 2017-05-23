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
        $__internal_c31af5804272b6114626a9be8f6cdde49763127a038f526d88e033e63cbda598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c31af5804272b6114626a9be8f6cdde49763127a038f526d88e033e63cbda598->enter($__internal_c31af5804272b6114626a9be8f6cdde49763127a038f526d88e033e63cbda598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_bee60b5e70f6132649066769ef0366b14edbfe66886e9d7b928121171c7de364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bee60b5e70f6132649066769ef0366b14edbfe66886e9d7b928121171c7de364->enter($__internal_bee60b5e70f6132649066769ef0366b14edbfe66886e9d7b928121171c7de364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c31af5804272b6114626a9be8f6cdde49763127a038f526d88e033e63cbda598->leave($__internal_c31af5804272b6114626a9be8f6cdde49763127a038f526d88e033e63cbda598_prof);

        
        $__internal_bee60b5e70f6132649066769ef0366b14edbfe66886e9d7b928121171c7de364->leave($__internal_bee60b5e70f6132649066769ef0366b14edbfe66886e9d7b928121171c7de364_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_795e062a72a0ba56488f6686cf7606237ea5e878c5895fc8da144d2bbe87f457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_795e062a72a0ba56488f6686cf7606237ea5e878c5895fc8da144d2bbe87f457->enter($__internal_795e062a72a0ba56488f6686cf7606237ea5e878c5895fc8da144d2bbe87f457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c9e216b35e39654fd36809dfd669b56586230564c450bbbf622acb318169de93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9e216b35e39654fd36809dfd669b56586230564c450bbbf622acb318169de93->enter($__internal_c9e216b35e39654fd36809dfd669b56586230564c450bbbf622acb318169de93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c9e216b35e39654fd36809dfd669b56586230564c450bbbf622acb318169de93->leave($__internal_c9e216b35e39654fd36809dfd669b56586230564c450bbbf622acb318169de93_prof);

        
        $__internal_795e062a72a0ba56488f6686cf7606237ea5e878c5895fc8da144d2bbe87f457->leave($__internal_795e062a72a0ba56488f6686cf7606237ea5e878c5895fc8da144d2bbe87f457_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dd035e4de423f161c07214cbcca114bc0389529c0038087147cb6e1166ef6338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd035e4de423f161c07214cbcca114bc0389529c0038087147cb6e1166ef6338->enter($__internal_dd035e4de423f161c07214cbcca114bc0389529c0038087147cb6e1166ef6338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8db857c6a1faa44dac73c213530420d91a3608bfb470ad107a29c097a23e7696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8db857c6a1faa44dac73c213530420d91a3608bfb470ad107a29c097a23e7696->enter($__internal_8db857c6a1faa44dac73c213530420d91a3608bfb470ad107a29c097a23e7696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8db857c6a1faa44dac73c213530420d91a3608bfb470ad107a29c097a23e7696->leave($__internal_8db857c6a1faa44dac73c213530420d91a3608bfb470ad107a29c097a23e7696_prof);

        
        $__internal_dd035e4de423f161c07214cbcca114bc0389529c0038087147cb6e1166ef6338->leave($__internal_dd035e4de423f161c07214cbcca114bc0389529c0038087147cb6e1166ef6338_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8000eb4f6911f72f252c892e7ac5eaf359e0ef2d846905d443a009f9df146b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8000eb4f6911f72f252c892e7ac5eaf359e0ef2d846905d443a009f9df146b01->enter($__internal_8000eb4f6911f72f252c892e7ac5eaf359e0ef2d846905d443a009f9df146b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_424afbaf0fbbccefc5f462f3e30546295079bc72cbcd05d632bf04b02052b421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_424afbaf0fbbccefc5f462f3e30546295079bc72cbcd05d632bf04b02052b421->enter($__internal_424afbaf0fbbccefc5f462f3e30546295079bc72cbcd05d632bf04b02052b421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_424afbaf0fbbccefc5f462f3e30546295079bc72cbcd05d632bf04b02052b421->leave($__internal_424afbaf0fbbccefc5f462f3e30546295079bc72cbcd05d632bf04b02052b421_prof);

        
        $__internal_8000eb4f6911f72f252c892e7ac5eaf359e0ef2d846905d443a009f9df146b01->leave($__internal_8000eb4f6911f72f252c892e7ac5eaf359e0ef2d846905d443a009f9df146b01_prof);

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
