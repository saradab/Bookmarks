<?php

/* bookmark/view.html.twig */
class __TwigTemplate_aeca8e81fd740d63547ee95df11a0d8cedcb20b966a3cce8fa8f3847e72007a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "bookmark/view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61a57835bf4badcbf64d94ad33dd2603c5a6d2bd00ed41d840d685b0abaa9674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61a57835bf4badcbf64d94ad33dd2603c5a6d2bd00ed41d840d685b0abaa9674->enter($__internal_61a57835bf4badcbf64d94ad33dd2603c5a6d2bd00ed41d840d685b0abaa9674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bookmark/view.html.twig"));

        $__internal_26c62cbbba3a0adc6540dec39dee0ff04b000e654f01fe3821668cfd04aeecda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26c62cbbba3a0adc6540dec39dee0ff04b000e654f01fe3821668cfd04aeecda->enter($__internal_26c62cbbba3a0adc6540dec39dee0ff04b000e654f01fe3821668cfd04aeecda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bookmark/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61a57835bf4badcbf64d94ad33dd2603c5a6d2bd00ed41d840d685b0abaa9674->leave($__internal_61a57835bf4badcbf64d94ad33dd2603c5a6d2bd00ed41d840d685b0abaa9674_prof);

        
        $__internal_26c62cbbba3a0adc6540dec39dee0ff04b000e654f01fe3821668cfd04aeecda->leave($__internal_26c62cbbba3a0adc6540dec39dee0ff04b000e654f01fe3821668cfd04aeecda_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d739f382a14f1fb8acd0b90367295920608a159efe41bb3fb559523ab0175a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d739f382a14f1fb8acd0b90367295920608a159efe41bb3fb559523ab0175a72->enter($__internal_d739f382a14f1fb8acd0b90367295920608a159efe41bb3fb559523ab0175a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eda40e769f15407bc1ee2caa3aa72681c02e71366f75fc0ae16639efc9f02505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eda40e769f15407bc1ee2caa3aa72681c02e71366f75fc0ae16639efc9f02505->enter($__internal_eda40e769f15407bc1ee2caa3aa72681c02e71366f75fc0ae16639efc9f02505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.bookmark_view", array("%id%" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 4, $this->getSourceContext()); })()))), "html", null, true);
        echo "
";
        
        $__internal_eda40e769f15407bc1ee2caa3aa72681c02e71366f75fc0ae16639efc9f02505->leave($__internal_eda40e769f15407bc1ee2caa3aa72681c02e71366f75fc0ae16639efc9f02505_prof);

        
        $__internal_d739f382a14f1fb8acd0b90367295920608a159efe41bb3fb559523ab0175a72->leave($__internal_d739f382a14f1fb8acd0b90367295920608a159efe41bb3fb559523ab0175a72_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_bedf774376e9e01024b5ec6e147c9bc275f5774dffbebca558f77f0d618ae12a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bedf774376e9e01024b5ec6e147c9bc275f5774dffbebca558f77f0d618ae12a->enter($__internal_bedf774376e9e01024b5ec6e147c9bc275f5774dffbebca558f77f0d618ae12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f977a882bb923be696382d815d98325bf425afd41de49c129587339b0a8805f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f977a882bb923be696382d815d98325bf425afd41de49c129587339b0a8805f->enter($__internal_2f977a882bb923be696382d815d98325bf425afd41de49c129587339b0a8805f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.bookmark_view", array("%id%" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 9, $this->getSourceContext()); })()))), "html", null, true);
        echo "
    </h1>
    ";
        // line 11
        if (twig_length_filter($this->env, (isset($context["bookmark"]) || array_key_exists("bookmark", $context) ? $context["bookmark"] : (function () { throw new Twig_Error_Runtime('Variable "bookmark" does not exist.', 11, $this->getSourceContext()); })()))) {
            // line 12
            echo "        <div>
            ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bookmark"]) || array_key_exists("bookmark", $context) ? $context["bookmark"] : (function () { throw new Twig_Error_Runtime('Variable "bookmark" does not exist.', 13, $this->getSourceContext()); })()), "title", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bookmark"]) || array_key_exists("bookmark", $context) ? $context["bookmark"] : (function () { throw new Twig_Error_Runtime('Variable "bookmark" does not exist.', 13, $this->getSourceContext()); })()), "url", array()), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 16
            echo "        <div>
            ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message.no_bookmark"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 20
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("bookmark_index");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.back_to_list"), "html", null, true);
        echo "\">
        ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.back_to_list"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_2f977a882bb923be696382d815d98325bf425afd41de49c129587339b0a8805f->leave($__internal_2f977a882bb923be696382d815d98325bf425afd41de49c129587339b0a8805f_prof);

        
        $__internal_bedf774376e9e01024b5ec6e147c9bc275f5774dffbebca558f77f0d618ae12a->leave($__internal_bedf774376e9e01024b5ec6e147c9bc275f5774dffbebca558f77f0d618ae12a_prof);

    }

    public function getTemplateName()
    {
        return "bookmark/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 21,  102 => 20,  96 => 17,  93 => 16,  85 => 13,  82 => 12,  80 => 11,  75 => 9,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{%  block title %}
    {{ 'title.bookmark_view'|trans({'%id%': id }) }}
{% endblock %}

{%  block body %}
    <h1>
        {{ 'title.bookmark_view'|trans({'%id%': id }) }}
    </h1>
    {%  if bookmark|length %}
        <div>
            {{ bookmark.title }}, {{ bookmark.url }}
        </div>
    {%  else %}
        <div>
            {{ 'message.no_bookmark'|trans }}
        </div>
    {% endif %}
    <a href=\"{{ url('bookmark_index') }}\" title=\"{{ 'label.back_to_list'|trans }}\">
        {{ 'label.back_to_list'|trans }}
    </a>
{% endblock %}", "bookmark/view.html.twig", "/home/sara/Pulpit/PHP/silex/app/templates/bookmark/view.html.twig");
    }
}
