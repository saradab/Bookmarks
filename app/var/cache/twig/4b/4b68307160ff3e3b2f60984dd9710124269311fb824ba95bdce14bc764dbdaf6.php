<?php

/* tags/view.html.twig */
class __TwigTemplate_27eb4fc878c2c7827c0215025e9b9d79c286cfb8344b1690c1b25a8753b13ce9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "tags/view.html.twig", 1);
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
        $__internal_04b6ee92c1b562114ba0ee778257a571b74cb548ef27de5abf75c402b26bd86c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b6ee92c1b562114ba0ee778257a571b74cb548ef27de5abf75c402b26bd86c->enter($__internal_04b6ee92c1b562114ba0ee778257a571b74cb548ef27de5abf75c402b26bd86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tags/view.html.twig"));

        $__internal_c76bb72b570d85088224a27498183ce75fb6036f7703dda5ac0dd270ddcfe587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c76bb72b570d85088224a27498183ce75fb6036f7703dda5ac0dd270ddcfe587->enter($__internal_c76bb72b570d85088224a27498183ce75fb6036f7703dda5ac0dd270ddcfe587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tags/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04b6ee92c1b562114ba0ee778257a571b74cb548ef27de5abf75c402b26bd86c->leave($__internal_04b6ee92c1b562114ba0ee778257a571b74cb548ef27de5abf75c402b26bd86c_prof);

        
        $__internal_c76bb72b570d85088224a27498183ce75fb6036f7703dda5ac0dd270ddcfe587->leave($__internal_c76bb72b570d85088224a27498183ce75fb6036f7703dda5ac0dd270ddcfe587_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fa2e59294b929a74a5e84db4e8ba1b7dfb35a53531696eaa0196808e0440bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa2e59294b929a74a5e84db4e8ba1b7dfb35a53531696eaa0196808e0440bce->enter($__internal_0fa2e59294b929a74a5e84db4e8ba1b7dfb35a53531696eaa0196808e0440bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_185c704bfba46c4e1c5c65e3e03df7c2a9406f3cfb579820759cf44ba42110ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_185c704bfba46c4e1c5c65e3e03df7c2a9406f3cfb579820759cf44ba42110ab->enter($__internal_185c704bfba46c4e1c5c65e3e03df7c2a9406f3cfb579820759cf44ba42110ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.tag_view", array("%id%" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 4, $this->getSourceContext()); })()))), "html", null, true);
        echo "
";
        
        $__internal_185c704bfba46c4e1c5c65e3e03df7c2a9406f3cfb579820759cf44ba42110ab->leave($__internal_185c704bfba46c4e1c5c65e3e03df7c2a9406f3cfb579820759cf44ba42110ab_prof);

        
        $__internal_0fa2e59294b929a74a5e84db4e8ba1b7dfb35a53531696eaa0196808e0440bce->leave($__internal_0fa2e59294b929a74a5e84db4e8ba1b7dfb35a53531696eaa0196808e0440bce_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c80ca10cbeb67639a93aa604c08bf43df5aed72ab199411693febdff0d884dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c80ca10cbeb67639a93aa604c08bf43df5aed72ab199411693febdff0d884dae->enter($__internal_c80ca10cbeb67639a93aa604c08bf43df5aed72ab199411693febdff0d884dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6868f6cfbc18e372494829e41d3733180a533fd5256793607fc0160ec8b7546a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6868f6cfbc18e372494829e41d3733180a533fd5256793607fc0160ec8b7546a->enter($__internal_6868f6cfbc18e372494829e41d3733180a533fd5256793607fc0160ec8b7546a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.tag_view", array("%id%" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 9, $this->getSourceContext()); })()))), "html", null, true);
        echo "
    </h1>
    ";
        // line 11
        if (twig_length_filter($this->env, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new Twig_Error_Runtime('Variable "tag" does not exist.', 11, $this->getSourceContext()); })()))) {
            // line 12
            echo "        <div>
            ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new Twig_Error_Runtime('Variable "tag" does not exist.', 13, $this->getSourceContext()); })()), "id", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new Twig_Error_Runtime('Variable "tag" does not exist.', 13, $this->getSourceContext()); })()), "name", array()), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 16
            echo "        <div>
            ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message.no_tag"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 20
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("tag_index");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.back_to_tag_list"), "html", null, true);
        echo "\">
        ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.back_to_tag_list"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_6868f6cfbc18e372494829e41d3733180a533fd5256793607fc0160ec8b7546a->leave($__internal_6868f6cfbc18e372494829e41d3733180a533fd5256793607fc0160ec8b7546a_prof);

        
        $__internal_c80ca10cbeb67639a93aa604c08bf43df5aed72ab199411693febdff0d884dae->leave($__internal_c80ca10cbeb67639a93aa604c08bf43df5aed72ab199411693febdff0d884dae_prof);

    }

    public function getTemplateName()
    {
        return "tags/view.html.twig";
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
    {{ 'title.tag_view'|trans({'%id%': id}) }}
{% endblock %}

{%  block body %}
    <h1>
        {{ 'title.tag_view'|trans({'%id%': id}) }}
    </h1>
    {%  if tag|length %}
        <div>
            {{ tag.id }}, {{ tag.name}}
        </div>
    {%  else %}
        <div>
            {{ 'message.no_tag'|trans }}
        </div>
    {% endif %}
    <a href=\"{{ url('tag_index') }}\" title=\"{{ 'label.back_to_tag_list'|trans }}\">
        {{ 'label.back_to_tag_list'|trans }}
    </a>
{% endblock %}", "tags/view.html.twig", "/home/sara/Pulpit/PHP/silex/app/templates/tags/view.html.twig");
    }
}
