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
        $__internal_188b0be174ec81de038d4e4c4083b04c634268b261c9bdaff5d5c5be5c986519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_188b0be174ec81de038d4e4c4083b04c634268b261c9bdaff5d5c5be5c986519->enter($__internal_188b0be174ec81de038d4e4c4083b04c634268b261c9bdaff5d5c5be5c986519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_80a3cdf1f23f726892071b43148e8b0fd686f577455d643ff1ec2e1f193d17de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80a3cdf1f23f726892071b43148e8b0fd686f577455d643ff1ec2e1f193d17de->enter($__internal_80a3cdf1f23f726892071b43148e8b0fd686f577455d643ff1ec2e1f193d17de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_188b0be174ec81de038d4e4c4083b04c634268b261c9bdaff5d5c5be5c986519->leave($__internal_188b0be174ec81de038d4e4c4083b04c634268b261c9bdaff5d5c5be5c986519_prof);

        
        $__internal_80a3cdf1f23f726892071b43148e8b0fd686f577455d643ff1ec2e1f193d17de->leave($__internal_80a3cdf1f23f726892071b43148e8b0fd686f577455d643ff1ec2e1f193d17de_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8c61515ff6b962bb227a56c3875bfdc3ed722641dc15a3af0fb4dfa1df56696f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c61515ff6b962bb227a56c3875bfdc3ed722641dc15a3af0fb4dfa1df56696f->enter($__internal_8c61515ff6b962bb227a56c3875bfdc3ed722641dc15a3af0fb4dfa1df56696f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e998b3b4a6814fd146b0944f76f80723c4bd287541a4ca8b6962bbcd71d9f05f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e998b3b4a6814fd146b0944f76f80723c4bd287541a4ca8b6962bbcd71d9f05f->enter($__internal_e998b3b4a6814fd146b0944f76f80723c4bd287541a4ca8b6962bbcd71d9f05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e998b3b4a6814fd146b0944f76f80723c4bd287541a4ca8b6962bbcd71d9f05f->leave($__internal_e998b3b4a6814fd146b0944f76f80723c4bd287541a4ca8b6962bbcd71d9f05f_prof);

        
        $__internal_8c61515ff6b962bb227a56c3875bfdc3ed722641dc15a3af0fb4dfa1df56696f->leave($__internal_8c61515ff6b962bb227a56c3875bfdc3ed722641dc15a3af0fb4dfa1df56696f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4ff56e55f16f5d7b2a23f84d7b2ce57ced7db894a52f65ba0e47a39b32b986c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ff56e55f16f5d7b2a23f84d7b2ce57ced7db894a52f65ba0e47a39b32b986c3->enter($__internal_4ff56e55f16f5d7b2a23f84d7b2ce57ced7db894a52f65ba0e47a39b32b986c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_56ea0953d3e807c4834a9d4d12e902b30aa7624db677a93b0c3703f6ada4da04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56ea0953d3e807c4834a9d4d12e902b30aa7624db677a93b0c3703f6ada4da04->enter($__internal_56ea0953d3e807c4834a9d4d12e902b30aa7624db677a93b0c3703f6ada4da04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_56ea0953d3e807c4834a9d4d12e902b30aa7624db677a93b0c3703f6ada4da04->leave($__internal_56ea0953d3e807c4834a9d4d12e902b30aa7624db677a93b0c3703f6ada4da04_prof);

        
        $__internal_4ff56e55f16f5d7b2a23f84d7b2ce57ced7db894a52f65ba0e47a39b32b986c3->leave($__internal_4ff56e55f16f5d7b2a23f84d7b2ce57ced7db894a52f65ba0e47a39b32b986c3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_532efa0617e2a7bc16e2e61c11560bb8c54a8920593a5d420eb0fcc7fde617aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532efa0617e2a7bc16e2e61c11560bb8c54a8920593a5d420eb0fcc7fde617aa->enter($__internal_532efa0617e2a7bc16e2e61c11560bb8c54a8920593a5d420eb0fcc7fde617aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_af2a476097214ac3db71a0bbb95dc052514465037e8795f62913ef9cffd2690e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af2a476097214ac3db71a0bbb95dc052514465037e8795f62913ef9cffd2690e->enter($__internal_af2a476097214ac3db71a0bbb95dc052514465037e8795f62913ef9cffd2690e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_af2a476097214ac3db71a0bbb95dc052514465037e8795f62913ef9cffd2690e->leave($__internal_af2a476097214ac3db71a0bbb95dc052514465037e8795f62913ef9cffd2690e_prof);

        
        $__internal_532efa0617e2a7bc16e2e61c11560bb8c54a8920593a5d420eb0fcc7fde617aa->leave($__internal_532efa0617e2a7bc16e2e61c11560bb8c54a8920593a5d420eb0fcc7fde617aa_prof);

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
