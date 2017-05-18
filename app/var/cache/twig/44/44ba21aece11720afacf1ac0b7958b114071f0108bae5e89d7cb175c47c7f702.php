<?php

/* bookmark/index.html.twig */
class __TwigTemplate_bee0bd4363d0bb7eb69146209637eae2334bcb40ad6f671ec0ba02546c037cc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "bookmark/index.html.twig", 1);
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
        $__internal_150c57474d715a2e6501b91b9371038d564d60155f3e6e503cf942c7e6126dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150c57474d715a2e6501b91b9371038d564d60155f3e6e503cf942c7e6126dd8->enter($__internal_150c57474d715a2e6501b91b9371038d564d60155f3e6e503cf942c7e6126dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bookmark/index.html.twig"));

        $__internal_78b1bfcea029436956d25835669bf9a4b6dd8cd3584a35ae2a6077448bf50ec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78b1bfcea029436956d25835669bf9a4b6dd8cd3584a35ae2a6077448bf50ec0->enter($__internal_78b1bfcea029436956d25835669bf9a4b6dd8cd3584a35ae2a6077448bf50ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bookmark/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_150c57474d715a2e6501b91b9371038d564d60155f3e6e503cf942c7e6126dd8->leave($__internal_150c57474d715a2e6501b91b9371038d564d60155f3e6e503cf942c7e6126dd8_prof);

        
        $__internal_78b1bfcea029436956d25835669bf9a4b6dd8cd3584a35ae2a6077448bf50ec0->leave($__internal_78b1bfcea029436956d25835669bf9a4b6dd8cd3584a35ae2a6077448bf50ec0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_114627c3e6758ef5b2a600766d1be6396c0840fe9b483055107be90b0a0c42f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_114627c3e6758ef5b2a600766d1be6396c0840fe9b483055107be90b0a0c42f6->enter($__internal_114627c3e6758ef5b2a600766d1be6396c0840fe9b483055107be90b0a0c42f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3de05305005bb138f9dd6ceb988195faa216b890414d3ad524f136f760785a59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3de05305005bb138f9dd6ceb988195faa216b890414d3ad524f136f760785a59->enter($__internal_3de05305005bb138f9dd6ceb988195faa216b890414d3ad524f136f760785a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.bookmarks_list"), "html", null, true);
        echo "
";
        
        $__internal_3de05305005bb138f9dd6ceb988195faa216b890414d3ad524f136f760785a59->leave($__internal_3de05305005bb138f9dd6ceb988195faa216b890414d3ad524f136f760785a59_prof);

        
        $__internal_114627c3e6758ef5b2a600766d1be6396c0840fe9b483055107be90b0a0c42f6->leave($__internal_114627c3e6758ef5b2a600766d1be6396c0840fe9b483055107be90b0a0c42f6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea416f3e1e5888f16c83a353583aa633a98edfa5e9ed6f5d7da0b75c91b9131b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea416f3e1e5888f16c83a353583aa633a98edfa5e9ed6f5d7da0b75c91b9131b->enter($__internal_ea416f3e1e5888f16c83a353583aa633a98edfa5e9ed6f5d7da0b75c91b9131b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b487a64f627c6b7964214a9e1d3bf1ccad53c245a18ff738ce97ea0f452c6c3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b487a64f627c6b7964214a9e1d3bf1ccad53c245a18ff738ce97ea0f452c6c3c->enter($__internal_b487a64f627c6b7964214a9e1d3bf1ccad53c245a18ff738ce97ea0f452c6c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.bookmarks_list"), "html", null, true);
        echo "
    </h1>
    ";
        // line 11
        if (twig_length_filter($this->env, (isset($context["bookmarks"]) || array_key_exists("bookmarks", $context) ? $context["bookmarks"] : (function () { throw new Twig_Error_Runtime('Variable "bookmarks" does not exist.', 11, $this->getSourceContext()); })()))) {
            // line 12
            echo "        <ul>
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bookmarks"]) || array_key_exists("bookmarks", $context) ? $context["bookmarks"] : (function () { throw new Twig_Error_Runtime('Variable "bookmarks" does not exist.', 13, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 14
                echo "            <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "title", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "url", array()), "html", null, true);
                echo "</li>
            <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("bookmark_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.view"), "html", null, true);
                echo "\">
                ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.view"), "html", null, true);
                echo "
            </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        </ul>
    ";
        } else {
            // line 21
            echo "        <div>
            List is empty!
        </div>
    ";
        }
        
        $__internal_b487a64f627c6b7964214a9e1d3bf1ccad53c245a18ff738ce97ea0f452c6c3c->leave($__internal_b487a64f627c6b7964214a9e1d3bf1ccad53c245a18ff738ce97ea0f452c6c3c_prof);

        
        $__internal_ea416f3e1e5888f16c83a353583aa633a98edfa5e9ed6f5d7da0b75c91b9131b->leave($__internal_ea416f3e1e5888f16c83a353583aa633a98edfa5e9ed6f5d7da0b75c91b9131b_prof);

    }

    public function getTemplateName()
    {
        return "bookmark/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 21,  111 => 19,  102 => 16,  96 => 15,  89 => 14,  85 => 13,  82 => 12,  80 => 11,  75 => 9,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%  extends 'layout.html.twig' %}

{%  block title %}
    {{ 'title.bookmarks_list'|trans }}
{%  endblock %}

{%  block body %}
    <h1>
        {{ 'title.bookmarks_list'|trans }}
    </h1>
    {%  if bookmarks|length %}
        <ul>
            {% for row in bookmarks %}
            <li>{{ row.title }}, {{ row.url }}</li>
            <a href=\"{{ url('bookmark_view', {'id': row.id}) }}\" title=\"{{ 'label.view'|trans }}\">
                {{ 'label.view'|trans }}
            </a>
            {% endfor %}
        </ul>
    {% else %}
        <div>
            List is empty!
        </div>
    {% endif %}
{%  endblock %}", "bookmark/index.html.twig", "/home/sara/Pulpit/PHP/silex/app/templates/bookmark/index.html.twig");
    }
}
