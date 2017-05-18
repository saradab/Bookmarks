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
        $__internal_096fe4f7958fd7346000ac2e09282d67e7fd8dcb3204d7bfc9ce0cc2c92aa64a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_096fe4f7958fd7346000ac2e09282d67e7fd8dcb3204d7bfc9ce0cc2c92aa64a->enter($__internal_096fe4f7958fd7346000ac2e09282d67e7fd8dcb3204d7bfc9ce0cc2c92aa64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_c0afb2fc5edfa7821157847c230357c461c774cf64b1f1da59c5ed87310c3334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0afb2fc5edfa7821157847c230357c461c774cf64b1f1da59c5ed87310c3334->enter($__internal_c0afb2fc5edfa7821157847c230357c461c774cf64b1f1da59c5ed87310c3334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_096fe4f7958fd7346000ac2e09282d67e7fd8dcb3204d7bfc9ce0cc2c92aa64a->leave($__internal_096fe4f7958fd7346000ac2e09282d67e7fd8dcb3204d7bfc9ce0cc2c92aa64a_prof);

        
        $__internal_c0afb2fc5edfa7821157847c230357c461c774cf64b1f1da59c5ed87310c3334->leave($__internal_c0afb2fc5edfa7821157847c230357c461c774cf64b1f1da59c5ed87310c3334_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0319b487993fcdb155e116c2d17d82f22e6d56c0a7aca247c63391777f25073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0319b487993fcdb155e116c2d17d82f22e6d56c0a7aca247c63391777f25073->enter($__internal_f0319b487993fcdb155e116c2d17d82f22e6d56c0a7aca247c63391777f25073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fd6850d0a3f8299593f9b8a8e3de9653209441304f901787397d934695c7a347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd6850d0a3f8299593f9b8a8e3de9653209441304f901787397d934695c7a347->enter($__internal_fd6850d0a3f8299593f9b8a8e3de9653209441304f901787397d934695c7a347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fd6850d0a3f8299593f9b8a8e3de9653209441304f901787397d934695c7a347->leave($__internal_fd6850d0a3f8299593f9b8a8e3de9653209441304f901787397d934695c7a347_prof);

        
        $__internal_f0319b487993fcdb155e116c2d17d82f22e6d56c0a7aca247c63391777f25073->leave($__internal_f0319b487993fcdb155e116c2d17d82f22e6d56c0a7aca247c63391777f25073_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_db7fa70d2b43ac8710f187481bb65767cf1fba444230e9bec235247179a41fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db7fa70d2b43ac8710f187481bb65767cf1fba444230e9bec235247179a41fb8->enter($__internal_db7fa70d2b43ac8710f187481bb65767cf1fba444230e9bec235247179a41fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ec81b6f89767591d572c7f270ecf6861c444bc76367f96328d80aba9e1ac945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ec81b6f89767591d572c7f270ecf6861c444bc76367f96328d80aba9e1ac945->enter($__internal_3ec81b6f89767591d572c7f270ecf6861c444bc76367f96328d80aba9e1ac945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3ec81b6f89767591d572c7f270ecf6861c444bc76367f96328d80aba9e1ac945->leave($__internal_3ec81b6f89767591d572c7f270ecf6861c444bc76367f96328d80aba9e1ac945_prof);

        
        $__internal_db7fa70d2b43ac8710f187481bb65767cf1fba444230e9bec235247179a41fb8->leave($__internal_db7fa70d2b43ac8710f187481bb65767cf1fba444230e9bec235247179a41fb8_prof);

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
