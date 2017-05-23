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
        $__internal_d9193c580f6554693b994aa1a66385dd07bb94a8db76fb4675c3497901c302ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9193c580f6554693b994aa1a66385dd07bb94a8db76fb4675c3497901c302ab->enter($__internal_d9193c580f6554693b994aa1a66385dd07bb94a8db76fb4675c3497901c302ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_fa938dd62e8956decca6def4618846b23987b438f5d101cae429c80935587b06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa938dd62e8956decca6def4618846b23987b438f5d101cae429c80935587b06->enter($__internal_fa938dd62e8956decca6def4618846b23987b438f5d101cae429c80935587b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_d9193c580f6554693b994aa1a66385dd07bb94a8db76fb4675c3497901c302ab->leave($__internal_d9193c580f6554693b994aa1a66385dd07bb94a8db76fb4675c3497901c302ab_prof);

        
        $__internal_fa938dd62e8956decca6def4618846b23987b438f5d101cae429c80935587b06->leave($__internal_fa938dd62e8956decca6def4618846b23987b438f5d101cae429c80935587b06_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_792687611101dd3c934c3c010b4f849dac3c3e20db3da148f72406d4d7817c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_792687611101dd3c934c3c010b4f849dac3c3e20db3da148f72406d4d7817c3f->enter($__internal_792687611101dd3c934c3c010b4f849dac3c3e20db3da148f72406d4d7817c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_371b9269bcafe3900e5e89a3c8047ddb5a9d7d0bfd59b7b983dfdc8baac74238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_371b9269bcafe3900e5e89a3c8047ddb5a9d7d0bfd59b7b983dfdc8baac74238->enter($__internal_371b9269bcafe3900e5e89a3c8047ddb5a9d7d0bfd59b7b983dfdc8baac74238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_371b9269bcafe3900e5e89a3c8047ddb5a9d7d0bfd59b7b983dfdc8baac74238->leave($__internal_371b9269bcafe3900e5e89a3c8047ddb5a9d7d0bfd59b7b983dfdc8baac74238_prof);

        
        $__internal_792687611101dd3c934c3c010b4f849dac3c3e20db3da148f72406d4d7817c3f->leave($__internal_792687611101dd3c934c3c010b4f849dac3c3e20db3da148f72406d4d7817c3f_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_1dc49f303de8f983d7e2c99d859d0ac1bffa7fa95650933c7631f7220b5aa4fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc49f303de8f983d7e2c99d859d0ac1bffa7fa95650933c7631f7220b5aa4fc->enter($__internal_1dc49f303de8f983d7e2c99d859d0ac1bffa7fa95650933c7631f7220b5aa4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_53792b29ddcefa8df6cf086d839648be4a8675d20eeb6088ef171eaa2cea91b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53792b29ddcefa8df6cf086d839648be4a8675d20eeb6088ef171eaa2cea91b1->enter($__internal_53792b29ddcefa8df6cf086d839648be4a8675d20eeb6088ef171eaa2cea91b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_53792b29ddcefa8df6cf086d839648be4a8675d20eeb6088ef171eaa2cea91b1->leave($__internal_53792b29ddcefa8df6cf086d839648be4a8675d20eeb6088ef171eaa2cea91b1_prof);

        
        $__internal_1dc49f303de8f983d7e2c99d859d0ac1bffa7fa95650933c7631f7220b5aa4fc->leave($__internal_1dc49f303de8f983d7e2c99d859d0ac1bffa7fa95650933c7631f7220b5aa4fc_prof);

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
