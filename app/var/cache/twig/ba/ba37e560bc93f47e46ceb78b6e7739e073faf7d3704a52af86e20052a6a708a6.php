<?php

/* default/_paginator.html.twig */
class __TwigTemplate_29f0ec772a98e575cbdfcf104db5e3354e807745cb679b8064185c747e4efc2b extends Twig_Template
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
        // line 4
        echo "<nav aria-label=\"...\">
    <ul class=\"pager\">
        ";
        // line 6
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["paginator"] ?? null), "getCurrentPage", array()) < twig_get_attribute($this->env, $this->getSourceContext(), ($context["paginator"] ?? null), "getNbPages", array()))) {
            // line 7
            echo "            ";
            $context["next"] = (twig_get_attribute($this->env, $this->getSourceContext(), ($context["paginator"] ?? null), "getCurrentPage", array()) + 1);
            // line 8
            echo "            <li class=\"next\">
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl(($context["route_name"] ?? null), array("page" => ($context["next"] ?? null))), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["paginator"] ?? null), "getCurrentPage", array()) > 1)) {
            // line 17
            echo "            ";
            $context["previous"] = (twig_get_attribute($this->env, $this->getSourceContext(), ($context["paginator"] ?? null), "getCurrentPage", array()) - 1);
            // line 18
            echo "            <li class=\"previous\">
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl(($context["route_name"] ?? null), array("page" => ($context["previous"] ?? null))), "html", null, true);
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
        return array (  70 => 25,  62 => 20,  56 => 19,  53 => 18,  50 => 17,  48 => 16,  45 => 15,  37 => 10,  31 => 9,  28 => 8,  25 => 7,  23 => 6,  19 => 4,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/_paginator.html.twig", "/home/sara/Pulpit/PHP/silex/app/templates/default/_paginator.html.twig");
    }
}
