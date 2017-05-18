<?php

/* bookmark/view.html.twig */
class __TwigTemplate_7d5ce0a10e6a73a695cfd50ca4e3c23001974148418abb59d64e34e89eefeaa0 extends Twig_Template
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
        $__internal_ed3e01451e024f6fa73e08080a7a215c5f00992410f51022da733438140fc25f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed3e01451e024f6fa73e08080a7a215c5f00992410f51022da733438140fc25f->enter($__internal_ed3e01451e024f6fa73e08080a7a215c5f00992410f51022da733438140fc25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bookmark/view.html.twig"));

        $__internal_8e8b1bfb42145bc3030e3f6e62e8d49c6e218b0abedb420dd6848cce70e9f987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e8b1bfb42145bc3030e3f6e62e8d49c6e218b0abedb420dd6848cce70e9f987->enter($__internal_8e8b1bfb42145bc3030e3f6e62e8d49c6e218b0abedb420dd6848cce70e9f987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bookmark/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed3e01451e024f6fa73e08080a7a215c5f00992410f51022da733438140fc25f->leave($__internal_ed3e01451e024f6fa73e08080a7a215c5f00992410f51022da733438140fc25f_prof);

        
        $__internal_8e8b1bfb42145bc3030e3f6e62e8d49c6e218b0abedb420dd6848cce70e9f987->leave($__internal_8e8b1bfb42145bc3030e3f6e62e8d49c6e218b0abedb420dd6848cce70e9f987_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ba484fd350a77b94af32c6b23d7495d02ab2690756c42e053d839d8e66c70ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba484fd350a77b94af32c6b23d7495d02ab2690756c42e053d839d8e66c70ad->enter($__internal_7ba484fd350a77b94af32c6b23d7495d02ab2690756c42e053d839d8e66c70ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9faf3f6f986cab0a771dba46000c9db5584916927a9c360b7c7e6b7ae4b2093d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9faf3f6f986cab0a771dba46000c9db5584916927a9c360b7c7e6b7ae4b2093d->enter($__internal_9faf3f6f986cab0a771dba46000c9db5584916927a9c360b7c7e6b7ae4b2093d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.bookmark_view", array("%id%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bookmark"]) || array_key_exists("bookmark", $context) ? $context["bookmark"] : (function () { throw new Twig_Error_Runtime('Variable "bookmark" does not exist.', 4, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "
";
        
        $__internal_9faf3f6f986cab0a771dba46000c9db5584916927a9c360b7c7e6b7ae4b2093d->leave($__internal_9faf3f6f986cab0a771dba46000c9db5584916927a9c360b7c7e6b7ae4b2093d_prof);

        
        $__internal_7ba484fd350a77b94af32c6b23d7495d02ab2690756c42e053d839d8e66c70ad->leave($__internal_7ba484fd350a77b94af32c6b23d7495d02ab2690756c42e053d839d8e66c70ad_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5240fbbe966115a994533ba45d99b9722b2c1f60b5efc20e419e2f6dca407132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5240fbbe966115a994533ba45d99b9722b2c1f60b5efc20e419e2f6dca407132->enter($__internal_5240fbbe966115a994533ba45d99b9722b2c1f60b5efc20e419e2f6dca407132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da814101ce0b059a98388d93acc4acb90e68b2e68cfe3b40da03da9c2eee5724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da814101ce0b059a98388d93acc4acb90e68b2e68cfe3b40da03da9c2eee5724->enter($__internal_da814101ce0b059a98388d93acc4acb90e68b2e68cfe3b40da03da9c2eee5724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.bookmark_view", array("%id%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bookmark"]) || array_key_exists("bookmark", $context) ? $context["bookmark"] : (function () { throw new Twig_Error_Runtime('Variable "bookmark" does not exist.', 9, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
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
            No bookmark found!
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
        
        $__internal_da814101ce0b059a98388d93acc4acb90e68b2e68cfe3b40da03da9c2eee5724->leave($__internal_da814101ce0b059a98388d93acc4acb90e68b2e68cfe3b40da03da9c2eee5724_prof);

        
        $__internal_5240fbbe966115a994533ba45d99b9722b2c1f60b5efc20e419e2f6dca407132->leave($__internal_5240fbbe966115a994533ba45d99b9722b2c1f60b5efc20e419e2f6dca407132_prof);

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
        return array (  106 => 21,  99 => 20,  93 => 16,  85 => 13,  82 => 12,  80 => 11,  75 => 9,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{%  block title %}
    {{ 'title.bookmark_view'|trans({'%id%': bookmark.id}) }}
{% endblock %}

{%  block body %}
    <h1>
        {{ 'title.bookmark_view'|trans({'%id%': bookmark.id}) }}
    </h1>
    {%  if bookmark|length %}
        <div>
            {{ bookmark.title }}, {{ bookmark.url }}
        </div>
    {%  else %}
        <div>
            No bookmark found!
        </div>
    {% endif %}
    <a href=\"{{ url('bookmark_index') }}\" title=\"{{ 'label.back_to_list'|trans }}\">
        {{ 'label.back_to_list'|trans }}
    </a>
{% endblock %}", "bookmark/view.html.twig", "/home/sara/Pulpit/PHP/silex/app/templates/bookmark/view.html.twig");
    }
}
