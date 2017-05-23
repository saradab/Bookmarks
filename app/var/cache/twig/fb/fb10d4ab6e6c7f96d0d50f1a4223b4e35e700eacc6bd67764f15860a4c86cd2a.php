<?php

/* tags/index.html.twig */
class __TwigTemplate_81ac1e10bc450e1cf0822f7ff0da39ff6f637f7a831d4b89fea8ec84d5bbb17f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "tags/index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.tags_list"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <h1>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.tags_list"), "html", null, true);
        echo "
    </h1>
    ";
        // line 11
        if (twig_length_filter($this->env, ($context["paginator"] ?? null))) {
            // line 12
            echo "        <ul>
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["paginator"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 14
                echo "            <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "id", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "name", array()), "html", null, true);
                echo "</li>
                <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("tag_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.tag"), "html", null, true);
                echo "\">
                    ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.tag"), "html", null, true);
                echo "
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "            ";
            $this->loadTemplate("default/_paginator.html.twig", "tags/index.html.twig", 19)->display(array_merge($context, array("paginator" =>             // line 20
($context["paginator"] ?? null), "route_name" => "tag_index_paginated")));
            // line 23
            echo "        </ul>
    ";
        } else {
            // line 25
            echo "        <div>
            List is empty!
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "tags/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  85 => 23,  83 => 20,  81 => 19,  72 => 16,  66 => 15,  59 => 14,  55 => 13,  52 => 12,  50 => 11,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tags/index.html.twig", "/home/sara/Pulpit/PHP/silex/app/templates/tags/index.html.twig");
    }
}
