<?php

/* default/_flash_messages.html.twig */
class __TwigTemplate_a9ca9a81bc4979c1c5e56d6a78718d81177122333e04de117cddddbcacd87e21 extends Twig_Template
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
        $__internal_c09343389e30a5ab618dedbc9358de93e897e700a118a6fc64bd4af1d0a19c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09343389e30a5ab618dedbc9358de93e897e700a118a6fc64bd4af1d0a19c85->enter($__internal_c09343389e30a5ab618dedbc9358de93e897e700a118a6fc64bd4af1d0a19c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/_flash_messages.html.twig"));

        $__internal_88cc9e56cd2cf4f88304215813aeb064acf190e005c6a777ab2183ceeee9c07d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88cc9e56cd2cf4f88304215813aeb064acf190e005c6a777ab2183ceeee9c07d->enter($__internal_88cc9e56cd2cf4f88304215813aeb064acf190e005c6a777ab2183ceeee9c07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/_flash_messages.html.twig"));

        // line 1
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "peekAll", array()))) {
            // line 2
            echo "    <div class=\"x_content bs-example-popovers\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "all", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["messages"]) {
                // line 4
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 5
                    echo "                ";
                    $this->loadTemplate("default/_single_alert_message.html.twig", "default/_flash_messages.html.twig", 5)->display(array_merge($context, array("is_single_message" => false, "is_dismissible" => true, "type" => twig_get_attribute($this->env, $this->getSourceContext(),                     // line 8
$context["message"], "type", array()), "message" => twig_get_attribute($this->env, $this->getSourceContext(),                     // line 9
$context["message"], "message", array()))));
                    // line 11
                    echo "            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    </div>
";
        }
        
        $__internal_c09343389e30a5ab618dedbc9358de93e897e700a118a6fc64bd4af1d0a19c85->leave($__internal_c09343389e30a5ab618dedbc9358de93e897e700a118a6fc64bd4af1d0a19c85_prof);

        
        $__internal_88cc9e56cd2cf4f88304215813aeb064acf190e005c6a777ab2183ceeee9c07d->leave($__internal_88cc9e56cd2cf4f88304215813aeb064acf190e005c6a777ab2183ceeee9c07d_prof);

    }

    public function getTemplateName()
    {
        return "default/_flash_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 13,  84 => 12,  70 => 11,  68 => 9,  67 => 8,  65 => 5,  47 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.session.flashBag.peekAll is not empty %}
    <div class=\"x_content bs-example-popovers\">
        {% for messages in app.session.flashBag.all %}
            {% for message in messages %}
                {%  include 'default/_single_alert_message.html.twig' with {
                is_single_message: false,
                is_dismissible: true,
                type: message.type,
                message: message.message
                } %}
            {% endfor %}
        {% endfor %}
    </div>
{% endif %}", "default/_flash_messages.html.twig", "/home/sara/Pulpit/PHP/silex/app/templates/default/_flash_messages.html.twig");
    }
}
