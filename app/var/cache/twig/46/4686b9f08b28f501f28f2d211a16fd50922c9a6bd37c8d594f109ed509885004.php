<?php

/* layout.html.twig */
class __TwigTemplate_79876faf2725be08fc6a287f8f0ea35df166a015eda775d8b00a90ce91d901b2 extends Twig_Template
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
        $__internal_1e4dc0a2b6c0c3b538bf48c0dc807219ff4f37ec5d7aab96d33b7eb589b2b810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e4dc0a2b6c0c3b538bf48c0dc807219ff4f37ec5d7aab96d33b7eb589b2b810->enter($__internal_1e4dc0a2b6c0c3b538bf48c0dc807219ff4f37ec5d7aab96d33b7eb589b2b810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_24e536bfc0018d10d2bb9beec16baaa096e119e836554b89389595d9869e1042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24e536bfc0018d10d2bb9beec16baaa096e119e836554b89389595d9869e1042->enter($__internal_24e536bfc0018d10d2bb9beec16baaa096e119e836554b89389595d9869e1042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_1e4dc0a2b6c0c3b538bf48c0dc807219ff4f37ec5d7aab96d33b7eb589b2b810->leave($__internal_1e4dc0a2b6c0c3b538bf48c0dc807219ff4f37ec5d7aab96d33b7eb589b2b810_prof);

        
        $__internal_24e536bfc0018d10d2bb9beec16baaa096e119e836554b89389595d9869e1042->leave($__internal_24e536bfc0018d10d2bb9beec16baaa096e119e836554b89389595d9869e1042_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_82247a8acc98e567c6d639d95e72198b629750e74a2c248f08dc230f5580a15d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82247a8acc98e567c6d639d95e72198b629750e74a2c248f08dc230f5580a15d->enter($__internal_82247a8acc98e567c6d639d95e72198b629750e74a2c248f08dc230f5580a15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fde7b8a2c6931837e5c5a1cb877d68677c07e357dd6110b453a9bbafc4df53ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fde7b8a2c6931837e5c5a1cb877d68677c07e357dd6110b453a9bbafc4df53ea->enter($__internal_fde7b8a2c6931837e5c5a1cb877d68677c07e357dd6110b453a9bbafc4df53ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fde7b8a2c6931837e5c5a1cb877d68677c07e357dd6110b453a9bbafc4df53ea->leave($__internal_fde7b8a2c6931837e5c5a1cb877d68677c07e357dd6110b453a9bbafc4df53ea_prof);

        
        $__internal_82247a8acc98e567c6d639d95e72198b629750e74a2c248f08dc230f5580a15d->leave($__internal_82247a8acc98e567c6d639d95e72198b629750e74a2c248f08dc230f5580a15d_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_04163f94ff4ede48623a383255d3204d3c42afda525c4c789f2791dbff75b9cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04163f94ff4ede48623a383255d3204d3c42afda525c4c789f2791dbff75b9cc->enter($__internal_04163f94ff4ede48623a383255d3204d3c42afda525c4c789f2791dbff75b9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2874f472da3d098cb50d8ae557832a8deb63f571f150ce86b65e6b77cf1d7725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2874f472da3d098cb50d8ae557832a8deb63f571f150ce86b65e6b77cf1d7725->enter($__internal_2874f472da3d098cb50d8ae557832a8deb63f571f150ce86b65e6b77cf1d7725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2874f472da3d098cb50d8ae557832a8deb63f571f150ce86b65e6b77cf1d7725->leave($__internal_2874f472da3d098cb50d8ae557832a8deb63f571f150ce86b65e6b77cf1d7725_prof);

        
        $__internal_04163f94ff4ede48623a383255d3204d3c42afda525c4c789f2791dbff75b9cc->leave($__internal_04163f94ff4ede48623a383255d3204d3c42afda525c4c789f2791dbff75b9cc_prof);

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
        return array (  86 => 21,  69 => 4,  57 => 22,  55 => 21,  37 => 6,  32 => 4,  27 => 1,);
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
        {% block body %}{% endblock %}
    </body>
</html>
", "layout.html.twig", "/home/sara/Pulpit/PHP/silex/app/templates/layout.html.twig");
    }
}
