<?php

/* default/_single_alert_message.html.twig */
class __TwigTemplate_e3cf3770dd16a37aea7bbefb01c9f36264a75f46e6405b1cc4b3d7898c7f783c extends Twig_Template
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
        $__internal_0d1becd3be382ad1ac9158274581bb5ff6733470b8b5cb4e5f763a5c05ebd99a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1becd3be382ad1ac9158274581bb5ff6733470b8b5cb4e5f763a5c05ebd99a->enter($__internal_0d1becd3be382ad1ac9158274581bb5ff6733470b8b5cb4e5f763a5c05ebd99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/_single_alert_message.html.twig"));

        $__internal_7bd449f9ddbd776b17053e85b4322a23106e82d5dcc3f7aa48e88a655c105c5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bd449f9ddbd776b17053e85b4322a23106e82d5dcc3f7aa48e88a655c105c5f->enter($__internal_7bd449f9ddbd776b17053e85b4322a23106e82d5dcc3f7aa48e88a655c105c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/_single_alert_message.html.twig"));

        // line 8
        echo "
";
        // line 10
        if (((array_key_exists("is_single_message", $context)) ? (_twig_default_filter((isset($context["is_single_message"]) || array_key_exists("is_single_message", $context) ? $context["is_single_message"] : (function () { throw new Twig_Error_Runtime('Variable "is_single_message" does not exist.', 10, $this->getSourceContext()); })()), true)) : (true))) {
            // line 11
            echo "<div class=\"x_content bs-example-popovers\">
    ";
        }
        // line 13
        echo "    <div class=\"alert alert-dismissible alert-";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
        ";
        // line 17
        if ( !($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 17, $this->getSourceContext()); })())) === (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 17, $this->getSourceContext()); })()))) {
            // line 18
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 18, $this->getSourceContext()); })())), "html", null, true);
            echo "
        ";
        } else {
            // line 20
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 20, $this->getSourceContext()); })()), "html", null, true);
            echo "
        ";
        }
        // line 22
        echo "    </div>
    ";
        // line 23
        if (((array_key_exists("is_single_message", $context)) ? (_twig_default_filter((isset($context["is_single_message"]) || array_key_exists("is_single_message", $context) ? $context["is_single_message"] : (function () { throw new Twig_Error_Runtime('Variable "is_single_message" does not exist.', 23, $this->getSourceContext()); })()), true)) : (true))) {
            // line 24
            echo "</div>
";
        }
        
        $__internal_0d1becd3be382ad1ac9158274581bb5ff6733470b8b5cb4e5f763a5c05ebd99a->leave($__internal_0d1becd3be382ad1ac9158274581bb5ff6733470b8b5cb4e5f763a5c05ebd99a_prof);

        
        $__internal_7bd449f9ddbd776b17053e85b4322a23106e82d5dcc3f7aa48e88a655c105c5f->leave($__internal_7bd449f9ddbd776b17053e85b4322a23106e82d5dcc3f7aa48e88a655c105c5f_prof);

    }

    public function getTemplateName()
    {
        return "default/_single_alert_message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 24,  59 => 23,  56 => 22,  50 => 20,  44 => 18,  42 => 17,  34 => 13,  30 => 11,  28 => 10,  25 => 8,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
    Single alert message.

    parameters:
        * `type`: message type (success|info|warning|danger)
        * `message`: message
#}

{# Bootstrap alert, see http://getbootstrap.com/components/#alerts #}
{% if is_single_message|default(true) %}
<div class=\"x_content bs-example-popovers\">
    {% endif %}
    <div class=\"alert alert-dismissible alert-{{ type }}\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
        {% if message|trans is not same as(message) %}
            {{ message|trans }}
        {% else %}
            {{ message }}
        {% endif %}
    </div>
    {% if is_single_message|default(true) %}
</div>
{% endif %}", "default/_single_alert_message.html.twig", "/home/sara/Pulpit/PHP/silex/app/templates/default/_single_alert_message.html.twig");
    }
}
