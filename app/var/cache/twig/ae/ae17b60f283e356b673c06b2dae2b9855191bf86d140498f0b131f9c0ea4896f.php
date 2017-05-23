<?php

/* default/_paginator.html.twig */
class __TwigTemplate_b8ced090e7815ba3620a5c48613e339354bc00678b439a8869dc53b39d6a58cc extends Twig_Template
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
        $__internal_57f24e45a28e500ac441aea5afa91508447af60952108ee60ead547a70b6738c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f24e45a28e500ac441aea5afa91508447af60952108ee60ead547a70b6738c->enter($__internal_57f24e45a28e500ac441aea5afa91508447af60952108ee60ead547a70b6738c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/_paginator.html.twig"));

        $__internal_a2b303dbe7190ed9a7988bdcaf037dce7bfacea0b089480e9f7739c2ee37e2d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2b303dbe7190ed9a7988bdcaf037dce7bfacea0b089480e9f7739c2ee37e2d7->enter($__internal_a2b303dbe7190ed9a7988bdcaf037dce7bfacea0b089480e9f7739c2ee37e2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/_paginator.html.twig"));

        // line 4
        echo "<nav aria-label=\"...\">
    <ul class=\"pager\">
        ";
        // line 6
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 6, $this->getSourceContext()); })()), "getCurrentPage", array()) < twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 6, $this->getSourceContext()); })()), "getNbPages", array()))) {
            // line 7
            echo "            ";
            $context["next"] = (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 7, $this->getSourceContext()); })()), "getCurrentPage", array()) + 1);
            // line 8
            echo "            <li class=\"next\">
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new Twig_Error_Runtime('Variable "route_name" does not exist.', 9, $this->getSourceContext()); })()), array("page" => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new Twig_Error_Runtime('Variable "next" does not exist.', 9, $this->getSourceContext()); })()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("labels.nav.next"), "html", null, true);
            echo "\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("labels.nav.next"), "html", null, true);
            echo "<span aria-hidden=\"true\">&rarr;</span>
                </a>
            </li>

        ";
        }
        // line 15
        echo "
        ";
        // line 16
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 16, $this->getSourceContext()); })()), "getCurrentPage", array()) > 1)) {
            // line 17
            echo "            ";
            $context["previous"] = (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 17, $this->getSourceContext()); })()), "getCurrentPage", array()) - 1);
            // line 18
            echo "            <li class=\"previous\">
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new Twig_Error_Runtime('Variable "route_name" does not exist.', 19, $this->getSourceContext()); })()), array("page" => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new Twig_Error_Runtime('Variable "previous" does not exist.', 19, $this->getSourceContext()); })()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("labels.nav.prev"), "html", null, true);
            echo "\">
                    <span aria-hidden=\"true\">&larr;</span>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("labels.nav.prev"), "html", null, true);
            echo "
                </a>
            </li>

        ";
        }
        // line 25
        echo "
    </ul>
</nav>";
        
        $__internal_57f24e45a28e500ac441aea5afa91508447af60952108ee60ead547a70b6738c->leave($__internal_57f24e45a28e500ac441aea5afa91508447af60952108ee60ead547a70b6738c_prof);

        
        $__internal_a2b303dbe7190ed9a7988bdcaf037dce7bfacea0b089480e9f7739c2ee37e2d7->leave($__internal_a2b303dbe7190ed9a7988bdcaf037dce7bfacea0b089480e9f7739c2ee37e2d7_prof);

    }

    public function getTemplateName()
    {
        return "default/_paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 25,  68 => 20,  62 => 19,  59 => 18,  56 => 17,  54 => 16,  51 => 15,  43 => 10,  37 => 9,  34 => 8,  31 => 7,  29 => 6,  25 => 4,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
    Default view for paginator.
#}
<nav aria-label=\"...\">
    <ul class=\"pager\">
        {% if paginator.getCurrentPage < paginator.getNbPages %}
            {% set next = (paginator.getCurrentPage + 1) %}
            <li class=\"next\">
                <a href=\"{{ url(route_name, {'page': next}) }}\" title=\"{{ 'labels.nav.next'|trans }}\">
                    {{ 'labels.nav.next'|trans }}<span aria-hidden=\"true\">&rarr;</span>
                </a>
            </li>

        {% endif  %}

        {% if paginator.getCurrentPage > 1 %}
            {% set previous = (paginator.getCurrentPage - 1) %}
            <li class=\"previous\">
                <a href=\"{{ url(route_name, {'page': previous}) }}\" title=\"{{ 'labels.nav.prev'|trans }}\">
                    <span aria-hidden=\"true\">&larr;</span>{{ 'labels.nav.prev'|trans }}
                </a>
            </li>

        {%  endif %}

    </ul>
</nav>", "default/_paginator.html.twig", "/home/sara/Pulpit/PHP/silex/app/templates/default/_paginator.html.twig");
    }
}
