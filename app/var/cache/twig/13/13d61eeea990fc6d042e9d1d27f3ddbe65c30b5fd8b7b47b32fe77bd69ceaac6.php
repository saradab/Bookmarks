<?php

/* @DoctrineBundle/Collector/db.html.twig */
class __TwigTemplate_54d40b5f97f3d79b222ac06739c78dc3b665482036dd626b5e4b09841743b29e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@DoctrineBundle/Collector/db.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be0e8600e5cf04932f108c90509333db8e3d6556135f1aecfb672af3fb6e4700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0e8600e5cf04932f108c90509333db8e3d6556135f1aecfb672af3fb6e4700->enter($__internal_be0e8600e5cf04932f108c90509333db8e3d6556135f1aecfb672af3fb6e4700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DoctrineBundle/Collector/db.html.twig"));

        $__internal_b0a314b619de6743d3c93f3e2a58bd593a3571efa570b30f358b588342fd2f8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a314b619de6743d3c93f3e2a58bd593a3571efa570b30f358b588342fd2f8c->enter($__internal_b0a314b619de6743d3c93f3e2a58bd593a3571efa570b30f358b588342fd2f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DoctrineBundle/Collector/db.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be0e8600e5cf04932f108c90509333db8e3d6556135f1aecfb672af3fb6e4700->leave($__internal_be0e8600e5cf04932f108c90509333db8e3d6556135f1aecfb672af3fb6e4700_prof);

        
        $__internal_b0a314b619de6743d3c93f3e2a58bd593a3571efa570b30f358b588342fd2f8c->leave($__internal_b0a314b619de6743d3c93f3e2a58bd593a3571efa570b30f358b588342fd2f8c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_524e6e5a57e321067f8bc576a4b92ef2e56f8bc372e55e0b69bc12d099f86d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_524e6e5a57e321067f8bc576a4b92ef2e56f8bc372e55e0b69bc12d099f86d96->enter($__internal_524e6e5a57e321067f8bc576a4b92ef2e56f8bc372e55e0b69bc12d099f86d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d1f0c108eb38c8a835b8982f6ddf47e2499223d6a8834f2d3f54432bef1228d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1f0c108eb38c8a835b8982f6ddf47e2499223d6a8834f2d3f54432bef1228d3->enter($__internal_d1f0c108eb38c8a835b8982f6ddf47e2499223d6a8834f2d3f54432bef1228d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
            <path fill=\"#AAAAAA\" d=\"M5,8h14c1.7,0,3-1.3,3-3s-1.3-3-3-3H5C3.3,2,2,3.3,2,5S3.3,8,5,8z M18,3.6c0.8,0,1.5,0.7,1.5,1.5S18.8,6.6,18,6.6s-1.5-0.7-1.5-1.5S17.2,3.6,18,3.6z M19,9H5c-1.7,0-3,1.3-3,3s1.3,3,3,3h14c1.7,0,3-1.3,3-3S20.7,9,19,9z M18,13.6
            c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S18.8,13.6,18,13.6z M19,16H5c-1.7,0-3,1.3-3,3s1.3,3,3,3h14c1.7,0,3-1.3,3-3S20.7,16,19,16z M18,20.6c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S18.8,20.6,18,20.6z\"></path>
        </svg>
        <span class=\"sf-toolbar-value\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 9, $this->getSourceContext()); })()), "querycount", array()), "html", null, true);
        echo "</span>
        ";
        // line 10
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 10, $this->getSourceContext()); })()), "querycount", array()) > 0)) {
            // line 11
            echo "        <span class=\"sf-toolbar-info-piece-additional-detail\">
            <span class=\"sf-toolbar-label\">in</span>
            <span class=\"sf-toolbar-value\">";
            // line 13
            echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "time", array()) * 1000)), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-label\">ms</span>
        </span>
        ";
        }
        // line 17
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 18
        echo "    ";
        ob_start();
        // line 19
        echo "        ";
        ob_start();
        // line 20
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Database Queries</b>
            <span class=\"sf-toolbar-status\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 22, $this->getSourceContext()); })()), "querycount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Query time</b>
            <span>";
        // line 26
        echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 26, $this->getSourceContext()); })()), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
        </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 29
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@DoctrineBundle/Collector/db.html.twig", 30)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 30, $this->getSourceContext()); })()))));
        
        $__internal_d1f0c108eb38c8a835b8982f6ddf47e2499223d6a8834f2d3f54432bef1228d3->leave($__internal_d1f0c108eb38c8a835b8982f6ddf47e2499223d6a8834f2d3f54432bef1228d3_prof);

        
        $__internal_524e6e5a57e321067f8bc576a4b92ef2e56f8bc372e55e0b69bc12d099f86d96->leave($__internal_524e6e5a57e321067f8bc576a4b92ef2e56f8bc372e55e0b69bc12d099f86d96_prof);

    }

    // line 33
    public function block_menu($context, array $blocks = array())
    {
        $__internal_86f01182779623b7341cc453108bf234f20cddea174b6e4a3652476a8ce62425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f01182779623b7341cc453108bf234f20cddea174b6e4a3652476a8ce62425->enter($__internal_86f01182779623b7341cc453108bf234f20cddea174b6e4a3652476a8ce62425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_443f1e304c02061135cd1e6aa28b884fd47e2979c00bd2ff5058211136783ee9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_443f1e304c02061135cd1e6aa28b884fd47e2979c00bd2ff5058211136783ee9->enter($__internal_443f1e304c02061135cd1e6aa28b884fd47e2979c00bd2ff5058211136783ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 34
        echo "<span class=\"label\">
    <span class=\"icon\">
        <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
            <path fill=\"#AAAAAA\" d=\"M5,8h14c1.7,0,3-1.3,3-3s-1.3-3-3-3H5C3.3,2,2,3.3,2,5S3.3,8,5,8z M18,3.6c0.8,0,1.5,0.7,1.5,1.5S18.8,6.6,18,6.6s-1.5-0.7-1.5-1.5S17.2,3.6,18,3.6z M19,9H5c-1.7,0-3,1.3-3,3s1.3,3,3,3h14c1.7,0,3-1.3,3-3S20.7,9,19,9z M18,13.6
            c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S18.8,13.6,18,13.6z M19,16H5c-1.7,0-3,1.3-3,3s1.3,3,3,3h14c1.7,0,3-1.3,3-3S20.7,16,19,16z M18,20.6c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S18.8,20.6,18,20.6z\"></path>
        </svg>
    </span>
    <strong>Doctrine</strong>
    <span class=\"count\">
        <span>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 43, $this->getSourceContext()); })()), "querycount", array()), "html", null, true);
        echo "</span>
        <span>";
        // line 44
        echo twig_escape_filter($this->env, sprintf("%0.0f", (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 44, $this->getSourceContext()); })()), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </span>
</span>
";
        
        $__internal_443f1e304c02061135cd1e6aa28b884fd47e2979c00bd2ff5058211136783ee9->leave($__internal_443f1e304c02061135cd1e6aa28b884fd47e2979c00bd2ff5058211136783ee9_prof);

        
        $__internal_86f01182779623b7341cc453108bf234f20cddea174b6e4a3652476a8ce62425->leave($__internal_86f01182779623b7341cc453108bf234f20cddea174b6e4a3652476a8ce62425_prof);

    }

    // line 49
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5f10454c9892126f3b45089cafdc605ccd047e14bbc684629dff93871483094d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f10454c9892126f3b45089cafdc605ccd047e14bbc684629dff93871483094d->enter($__internal_5f10454c9892126f3b45089cafdc605ccd047e14bbc684629dff93871483094d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_295b21b762a0c9c32abf7f83e5f238eac147e7fd99ac411178ea1c4258b8cd0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_295b21b762a0c9c32abf7f83e5f238eac147e7fd99ac411178ea1c4258b8cd0a->enter($__internal_295b21b762a0c9c32abf7f83e5f238eac147e7fd99ac411178ea1c4258b8cd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 50
        echo "    <style>
        .queries-table td, .queries-table th { vertical-align: top; }
        .queries-table td > div { margin-bottom: 6px; }
        .highlight pre { margin: 0; white-space: pre-wrap; }
        .highlight .keyword   { color: #8959A8; font-weight: bold; }
        .highlight .symbol    { color: #222222; }
        .highlight .comment   { color: #999999; }
        .highlight .string    { color: #718C00; }
        .highlight .number    { color: #F5871F; font-weight: bold; }
    </style>
    <h2>Queries</h2>
    ";
        // line 61
        $context["count"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 61, $this->getSourceContext()); })()), "queries", array()));
        // line 62
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 62, $this->getSourceContext()); })()), "queries", array()));
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
        foreach ($context['_seq'] as $context["name"] => $context["queries"]) {
            // line 63
            echo "        ";
            if (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 63, $this->getSourceContext()); })()) > 1)) {
                // line 64
                echo "            <h3>";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</h3>
        ";
            }
            // line 66
            echo "        ";
            if (twig_test_empty($context["queries"])) {
                // line 67
                echo "            <p>
                <em>No queries.</em>
            </p>
        ";
            } else {
                // line 71
                echo "            <table class=\"alt queries-table\">
                <thead>
                <tr>
                    <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                    <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "')\" style=\"cursor: pointer;\">Time<span></span></th>
                    <th style=\"width: 100%;\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries-";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "\">
                    ";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["queries"]);
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
                foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                    // line 81
                    echo "                    <tr id=\"queryNo-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\">
                        <td>";
                    // line 82
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                    echo "</td>
                        <td class=\"nowrap\">";
                    // line 83
                    echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "executionMS", array()) * 1000)), "html", null, true);
                    echo " ms</td>
                        <td>
                            <pre class=\"highlight highlight_sql\">";
                    // line 85
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "sql", array()), "html", null, true);
                    echo "</pre>
                            <div>
                                <strong class=\"font-normal text-small\">Parameters</strong>: ";
                    // line 87
                    echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "params", array())), "html", null, true);
                    echo "
                            </div>
                        </td>
                    </tr>
                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "                </tbody>
            </table>
        ";
            }
            // line 95
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['queries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "    <script type=\"text/javascript\">//<![CDATA[
        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                    items = [],
                    target = document.getElementById(targetId),
                    rows = target.children,
                    headers = header.parentElement.children,
                    i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

        function clear_spans(match) {
            match = match.replace(/<span.*?>/g, \"\");
            match = match.replace(/<\\/span>/g, \"\");
            return \"<span class=\\\"comment\\\">\"+match+\"</span>\";
        }

        // @see http://thecodeplayer.com/walkthrough/mysql-syntax-highlighter-javascript-regex
        function highlight_sql(text) {
            \"use strict\";
            var k = [\"AND\", \"AS\", \"ASC\", \"BETWEEN\", \"BY\", \"CASE\", \"CURRENT_DATE\", \"CURRENT_TIME\", \"DELETE\", \"DESC\", \"DISTINCT\", \"EACH\", \"ELSE\", \"ELSEIF\", \"FALSE\", \"FOR\", \"FROM\", \"GROUP\", \"HAVING\", \"IF\", \"IN\", \"INSERT\", \"INTERVAL\", \"INTO\", \"IS\", \"JOIN\", \"KEY\", \"KEYS\", \"LEFT\", \"LIKE\", \"LIMIT\", \"MATCH\", \"NOT\", \"NULL\", \"ON\", \"OPTION\", \"OR\", \"ORDER\", \"OUT\", \"OUTER\", \"REPLACE\", \"RIGHT\", \"SELECT\", \"SET\", \"TABLE\", \"THEN\", \"TO\", \"TRUE\", \"UPDATE\", \"VALUES\", \"WHEN\", \"WHERE\"];
            var len = k.length;
            for(i = 0; i < len; i++) {
                k.push(k[i].toLowerCase());
            }

            var c = text.replace(/(=|%|\\/|\\*|-|,|;|\\+|<|>)/g, \"<span class=\\\"symbol\\\">\$1</span>\");
            c = c.replace(/(['`].*?['`])/g, \"<span class=\\\"string\\\">\$1</span>\");
            c = c.replace(/(\\d+)/g, \"<span class=\\\"number\\\">\$1</span>\");
            c = c.replace(/(\\w*?)\\(/g, \"<span class=\\\"keyword\\\">\$1</span>(\");
            c = c.replace(/([\\(\\)])/g, \"<span class=\\\"symbol\\\">\$1</span>\");

            for(var i = 0; i < k.length; i++)
            {
                var re = new RegExp(\"\\\\b\"+k[i]+\"\\\\b\", \"g\");
                c = c.replace(re, \"<span class=\\\"keyword\\\">\"+k[i]+\"</span>\");
            }
            c = c.replace(/(#.*?\\n)/g, clear_spans);
            c = c.replace(/<span class=\\\"symbol\\\">-<\\/span><span class=\\\"symbol\\\">-<\\/span>/g, \"--\");
            c = c.replace(/(-- .*?\\n)/g, clear_spans);
            c = c.replace(/<span class=\\\"symbol\\\">\\/<\\/span><span class=\\\"symbol\\\">\\*<\\/span>/g, \"/*\");
            c = c.replace(/<span class=\\\"symbol\\\">\\*<\\/span><span class=\\\"symbol\\\">\\/<\\/span>/g, \"*/\");
            return c.replace(/(\\/\\*[\\s\\S]*?\\*\\/)/g, clear_spans);
        }

        var elements = document.querySelectorAll(\"pre.highlight_sql\");

        for (var i = 0; i < elements.length; i++) {
            elements[i].innerHTML = highlight_sql(elements[i].innerHTML);
        }
        //]]></script>
";
        
        $__internal_295b21b762a0c9c32abf7f83e5f238eac147e7fd99ac411178ea1c4258b8cd0a->leave($__internal_295b21b762a0c9c32abf7f83e5f238eac147e7fd99ac411178ea1c4258b8cd0a_prof);

        
        $__internal_5f10454c9892126f3b45089cafdc605ccd047e14bbc684629dff93871483094d->leave($__internal_5f10454c9892126f3b45089cafdc605ccd047e14bbc684629dff93871483094d_prof);

    }

    public function getTemplateName()
    {
        return "@DoctrineBundle/Collector/db.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 96,  297 => 95,  292 => 92,  273 => 87,  268 => 85,  263 => 83,  259 => 82,  252 => 81,  235 => 80,  231 => 79,  224 => 75,  220 => 74,  215 => 71,  209 => 67,  206 => 66,  200 => 64,  197 => 63,  179 => 62,  177 => 61,  164 => 50,  155 => 49,  141 => 44,  137 => 43,  126 => 34,  117 => 33,  106 => 30,  103 => 29,  97 => 26,  90 => 22,  86 => 20,  83 => 19,  80 => 18,  77 => 17,  70 => 13,  66 => 11,  64 => 10,  60 => 9,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
            <path fill=\"#AAAAAA\" d=\"M5,8h14c1.7,0,3-1.3,3-3s-1.3-3-3-3H5C3.3,2,2,3.3,2,5S3.3,8,5,8z M18,3.6c0.8,0,1.5,0.7,1.5,1.5S18.8,6.6,18,6.6s-1.5-0.7-1.5-1.5S17.2,3.6,18,3.6z M19,9H5c-1.7,0-3,1.3-3,3s1.3,3,3,3h14c1.7,0,3-1.3,3-3S20.7,9,19,9z M18,13.6
            c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S18.8,13.6,18,13.6z M19,16H5c-1.7,0-3,1.3-3,3s1.3,3,3,3h14c1.7,0,3-1.3,3-3S20.7,16,19,16z M18,20.6c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S18.8,20.6,18,20.6z\"></path>
        </svg>
        <span class=\"sf-toolbar-value\">{{ collector.querycount }}</span>
        {% if collector.querycount > 0 %}
        <span class=\"sf-toolbar-info-piece-additional-detail\">
            <span class=\"sf-toolbar-label\">in</span>
            <span class=\"sf-toolbar-value\">{{ '%0.2f'|format(collector.time * 1000) }}</span>
            <span class=\"sf-toolbar-label\">ms</span>
        </span>
        {% endif %}
    {% endset %}
    {% set text %}
        {% spaceless %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Database Queries</b>
            <span class=\"sf-toolbar-status\">{{ collector.querycount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Query time</b>
            <span>{{ '%0.2f'|format(collector.time * 1000) }} ms</span>
        </div>
        {% endspaceless %}
    {% endset %}
    {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url } %}
{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">
        <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
            <path fill=\"#AAAAAA\" d=\"M5,8h14c1.7,0,3-1.3,3-3s-1.3-3-3-3H5C3.3,2,2,3.3,2,5S3.3,8,5,8z M18,3.6c0.8,0,1.5,0.7,1.5,1.5S18.8,6.6,18,6.6s-1.5-0.7-1.5-1.5S17.2,3.6,18,3.6z M19,9H5c-1.7,0-3,1.3-3,3s1.3,3,3,3h14c1.7,0,3-1.3,3-3S20.7,9,19,9z M18,13.6
            c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S18.8,13.6,18,13.6z M19,16H5c-1.7,0-3,1.3-3,3s1.3,3,3,3h14c1.7,0,3-1.3,3-3S20.7,16,19,16z M18,20.6c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S18.8,20.6,18,20.6z\"></path>
        </svg>
    </span>
    <strong>Doctrine</strong>
    <span class=\"count\">
        <span>{{ collector.querycount }}</span>
        <span>{{ '%0.0f'|format(collector.time * 1000) }} ms</span>
    </span>
</span>
{% endblock %}

{% block panel %}
    <style>
        .queries-table td, .queries-table th { vertical-align: top; }
        .queries-table td > div { margin-bottom: 6px; }
        .highlight pre { margin: 0; white-space: pre-wrap; }
        .highlight .keyword   { color: #8959A8; font-weight: bold; }
        .highlight .symbol    { color: #222222; }
        .highlight .comment   { color: #999999; }
        .highlight .string    { color: #718C00; }
        .highlight .number    { color: #F5871F; font-weight: bold; }
    </style>
    <h2>Queries</h2>
    {% set count = collector.queries|length %}
    {% for name, queries in collector.queries %}
        {% if count > 1 %}
            <h3>{{ name }}</h3>
        {% endif %}
        {% if queries is empty %}
            <p>
                <em>No queries.</em>
            </p>
        {% else %}
            <table class=\"alt queries-table\">
                <thead>
                <tr>
                    <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-{{ loop.index }}')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                    <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-{{ loop.index }}')\" style=\"cursor: pointer;\">Time<span></span></th>
                    <th style=\"width: 100%;\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries-{{ loop.index }}\">
                    {% for i, query in queries %}
                    <tr id=\"queryNo-{{ i }}-{{ loop.parent.loop.index }}\">
                        <td>{{ loop.index }}</td>
                        <td class=\"nowrap\">{{ '%0.2f'|format(query.executionMS * 1000) }} ms</td>
                        <td>
                            <pre class=\"highlight highlight_sql\">{{ query.sql }}</pre>
                            <div>
                                <strong class=\"font-normal text-small\">Parameters</strong>: {{ query.params|json_encode() }}
                            </div>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% endif %}
    {% endfor %}
    <script type=\"text/javascript\">//<![CDATA[
        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                    items = [],
                    target = document.getElementById(targetId),
                    rows = target.children,
                    headers = header.parentElement.children,
                    i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

        function clear_spans(match) {
            match = match.replace(/<span.*?>/g, \"\");
            match = match.replace(/<\\/span>/g, \"\");
            return \"<span class=\\\"comment\\\">\"+match+\"</span>\";
        }

        // @see http://thecodeplayer.com/walkthrough/mysql-syntax-highlighter-javascript-regex
        function highlight_sql(text) {
            \"use strict\";
            var k = [\"AND\", \"AS\", \"ASC\", \"BETWEEN\", \"BY\", \"CASE\", \"CURRENT_DATE\", \"CURRENT_TIME\", \"DELETE\", \"DESC\", \"DISTINCT\", \"EACH\", \"ELSE\", \"ELSEIF\", \"FALSE\", \"FOR\", \"FROM\", \"GROUP\", \"HAVING\", \"IF\", \"IN\", \"INSERT\", \"INTERVAL\", \"INTO\", \"IS\", \"JOIN\", \"KEY\", \"KEYS\", \"LEFT\", \"LIKE\", \"LIMIT\", \"MATCH\", \"NOT\", \"NULL\", \"ON\", \"OPTION\", \"OR\", \"ORDER\", \"OUT\", \"OUTER\", \"REPLACE\", \"RIGHT\", \"SELECT\", \"SET\", \"TABLE\", \"THEN\", \"TO\", \"TRUE\", \"UPDATE\", \"VALUES\", \"WHEN\", \"WHERE\"];
            var len = k.length;
            for(i = 0; i < len; i++) {
                k.push(k[i].toLowerCase());
            }

            var c = text.replace(/(=|%|\\/|\\*|-|,|;|\\+|<|>)/g, \"<span class=\\\"symbol\\\">\$1</span>\");
            c = c.replace(/(['`].*?['`])/g, \"<span class=\\\"string\\\">\$1</span>\");
            c = c.replace(/(\\d+)/g, \"<span class=\\\"number\\\">\$1</span>\");
            c = c.replace(/(\\w*?)\\(/g, \"<span class=\\\"keyword\\\">\$1</span>(\");
            c = c.replace(/([\\(\\)])/g, \"<span class=\\\"symbol\\\">\$1</span>\");

            for(var i = 0; i < k.length; i++)
            {
                var re = new RegExp(\"\\\\b\"+k[i]+\"\\\\b\", \"g\");
                c = c.replace(re, \"<span class=\\\"keyword\\\">\"+k[i]+\"</span>\");
            }
            c = c.replace(/(#.*?\\n)/g, clear_spans);
            c = c.replace(/<span class=\\\"symbol\\\">-<\\/span><span class=\\\"symbol\\\">-<\\/span>/g, \"--\");
            c = c.replace(/(-- .*?\\n)/g, clear_spans);
            c = c.replace(/<span class=\\\"symbol\\\">\\/<\\/span><span class=\\\"symbol\\\">\\*<\\/span>/g, \"/*\");
            c = c.replace(/<span class=\\\"symbol\\\">\\*<\\/span><span class=\\\"symbol\\\">\\/<\\/span>/g, \"*/\");
            return c.replace(/(\\/\\*[\\s\\S]*?\\*\\/)/g, clear_spans);
        }

        var elements = document.querySelectorAll(\"pre.highlight_sql\");

        for (var i = 0; i < elements.length; i++) {
            elements[i].innerHTML = highlight_sql(elements[i].innerHTML);
        }
        //]]></script>
{% endblock %}", "@DoctrineBundle/Collector/db.html.twig", "/home/sara/Pulpit/PHP/silex/app/vendor/sorien/silex-dbal-profiler/src/Sorien/Resources/views/Collector/db.html.twig");
    }
}
