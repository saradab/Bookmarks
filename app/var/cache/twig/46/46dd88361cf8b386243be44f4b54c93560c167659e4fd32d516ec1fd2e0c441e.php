<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_88da0df76fdd931c5e0bc20eb631d5ae1dfc1ebaf439d2932ecfa88782d79d3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4452fccf759a5bd752951f6f42962e23a0096b084379a79f676b4d882319087f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4452fccf759a5bd752951f6f42962e23a0096b084379a79f676b4d882319087f->enter($__internal_4452fccf759a5bd752951f6f42962e23a0096b084379a79f676b4d882319087f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_ef6d4df246b6c1ae7a59e46f596ec7a6025fc0b6fa98c5e5bdf43a43342340b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef6d4df246b6c1ae7a59e46f596ec7a6025fc0b6fa98c5e5bdf43a43342340b0->enter($__internal_ef6d4df246b6c1ae7a59e46f596ec7a6025fc0b6fa98c5e5bdf43a43342340b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_4452fccf759a5bd752951f6f42962e23a0096b084379a79f676b4d882319087f->leave($__internal_4452fccf759a5bd752951f6f42962e23a0096b084379a79f676b4d882319087f_prof);

        
        $__internal_ef6d4df246b6c1ae7a59e46f596ec7a6025fc0b6fa98c5e5bdf43a43342340b0->leave($__internal_ef6d4df246b6c1ae7a59e46f596ec7a6025fc0b6fa98c5e5bdf43a43342340b0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/sara/Pulpit/PHP/silex/app/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/header.html.twig");
    }
}
