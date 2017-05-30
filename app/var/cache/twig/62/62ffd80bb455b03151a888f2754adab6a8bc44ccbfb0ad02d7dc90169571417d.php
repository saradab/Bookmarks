<?php

/* layout.html.twig */
class __TwigTemplate_6ff460ac8d852393bd0e919d2999bf64e6f765935b963c6cf16f5dcb949bf93b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_802eb8e39b9cbc71395ea6c15cd48100cf611f7313942878c8a046b48d114685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802eb8e39b9cbc71395ea6c15cd48100cf611f7313942878c8a046b48d114685->enter($__internal_802eb8e39b9cbc71395ea6c15cd48100cf611f7313942878c8a046b48d114685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_03342432b6ca9dfd9946013e9c84421273a0eb5a53d68efffd37d19430bea32f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03342432b6ca9dfd9946013e9c84421273a0eb5a53d68efffd37d19430bea32f->enter($__internal_03342432b6ca9dfd9946013e9c84421273a0eb5a53d68efffd37d19430bea32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

        <script type=\"text/javascript\">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </head>
    <body>
        ";
        // line 21
        $this->loadTemplate("default/_flash_messages.html.twig", "layout.html.twig", 21)->display($context);
        // line 22
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "    </body>
</html>
";
        
        $__internal_802eb8e39b9cbc71395ea6c15cd48100cf611f7313942878c8a046b48d114685->leave($__internal_802eb8e39b9cbc71395ea6c15cd48100cf611f7313942878c8a046b48d114685_prof);

        
        $__internal_03342432b6ca9dfd9946013e9c84421273a0eb5a53d68efffd37d19430bea32f->leave($__internal_03342432b6ca9dfd9946013e9c84421273a0eb5a53d68efffd37d19430bea32f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_8033e7ac83a6f9df77d2cfaa1ff113a540e1d302a601225be1316877d4e3f90b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8033e7ac83a6f9df77d2cfaa1ff113a540e1d302a601225be1316877d4e3f90b->enter($__internal_8033e7ac83a6f9df77d2cfaa1ff113a540e1d302a601225be1316877d4e3f90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cf4ec976facebb649f0372c7cd27d3136852e2b87e7cc06b097d74e79958fc7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf4ec976facebb649f0372c7cd27d3136852e2b87e7cc06b097d74e79958fc7c->enter($__internal_cf4ec976facebb649f0372c7cd27d3136852e2b87e7cc06b097d74e79958fc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cf4ec976facebb649f0372c7cd27d3136852e2b87e7cc06b097d74e79958fc7c->leave($__internal_cf4ec976facebb649f0372c7cd27d3136852e2b87e7cc06b097d74e79958fc7c_prof);

        
        $__internal_8033e7ac83a6f9df77d2cfaa1ff113a540e1d302a601225be1316877d4e3f90b->leave($__internal_8033e7ac83a6f9df77d2cfaa1ff113a540e1d302a601225be1316877d4e3f90b_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_8457271e6d38aff2f4495c9eb83de61132beae5a9c5068126d078f13ed4fb1ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8457271e6d38aff2f4495c9eb83de61132beae5a9c5068126d078f13ed4fb1ce->enter($__internal_8457271e6d38aff2f4495c9eb83de61132beae5a9c5068126d078f13ed4fb1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_04b1c055a7d58e50d6a56b108a3c29ef300e7a678682acf9cb532f8576ab27d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04b1c055a7d58e50d6a56b108a3c29ef300e7a678682acf9cb532f8576ab27d3->enter($__internal_04b1c055a7d58e50d6a56b108a3c29ef300e7a678682acf9cb532f8576ab27d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_04b1c055a7d58e50d6a56b108a3c29ef300e7a678682acf9cb532f8576ab27d3->leave($__internal_04b1c055a7d58e50d6a56b108a3c29ef300e7a678682acf9cb532f8576ab27d3_prof);

        
        $__internal_8457271e6d38aff2f4495c9eb83de61132beae5a9c5068126d078f13ed4fb1ce->leave($__internal_8457271e6d38aff2f4495c9eb83de61132beae5a9c5068126d078f13ed4fb1ce_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 22,  72 => 4,  60 => 23,  57 => 22,  55 => 21,  37 => 6,  32 => 4,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <title>{% block title %}{% endblock %}</title>

        <link href=\"{{ asset('css/main.css') }}\" rel=\"stylesheet\" type=\"text/css\" />

        <script type=\"text/javascript\">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </head>
    <body>
        {% include 'default/_flash_messages.html.twig' %}
        {% block body %}{% endblock %}
    </body>
</html>
", "layout.html.twig", "/home/sara/Pulpit/PHP/silex/app/templates/layout.html.twig");
    }
}
