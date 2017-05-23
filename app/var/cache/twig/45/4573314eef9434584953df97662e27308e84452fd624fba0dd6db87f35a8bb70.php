<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_856faf5e2457526cb1728faa3b3a3c04354bdd1d4dc87798ac148220498e0eeb extends Twig_Template
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
        $__internal_c83b5160214ec63fd8bf3d090266cc8be3ab2c98745ae04fb017f91355d98fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83b5160214ec63fd8bf3d090266cc8be3ab2c98745ae04fb017f91355d98fec->enter($__internal_c83b5160214ec63fd8bf3d090266cc8be3ab2c98745ae04fb017f91355d98fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_b4f7c7335f0ed43780f6f9f0b5477c6404ad5f3a2780ccea12f611f7ccd9c74e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4f7c7335f0ed43780f6f9f0b5477c6404ad5f3a2780ccea12f611f7ccd9c74e->enter($__internal_b4f7c7335f0ed43780f6f9f0b5477c6404ad5f3a2780ccea12f611f7ccd9c74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_c83b5160214ec63fd8bf3d090266cc8be3ab2c98745ae04fb017f91355d98fec->leave($__internal_c83b5160214ec63fd8bf3d090266cc8be3ab2c98745ae04fb017f91355d98fec_prof);

        
        $__internal_b4f7c7335f0ed43780f6f9f0b5477c6404ad5f3a2780ccea12f611f7ccd9c74e->leave($__internal_b4f7c7335f0ed43780f6f9f0b5477c6404ad5f3a2780ccea12f611f7ccd9c74e_prof);

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
