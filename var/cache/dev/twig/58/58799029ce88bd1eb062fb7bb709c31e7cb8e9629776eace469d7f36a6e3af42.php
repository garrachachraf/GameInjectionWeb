<?php

/* WebProfilerBundle:Profiler:toolbar.html.twig */
class __TwigTemplate_8646ee7c78143765cc14995fba29dad7c52a9a49fdae5d7a0a7e7c3e20c39da5 extends Twig_Template
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
        $__internal_96ab7af1fd7f6b60e6d6ffd51d55c63520f7551ab171f2ade049d09e1a2bdee9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96ab7af1fd7f6b60e6d6ffd51d55c63520f7551ab171f2ade049d09e1a2bdee9->enter($__internal_96ab7af1fd7f6b60e6d6ffd51d55c63520f7551ab171f2ade049d09e1a2bdee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar.html.twig"));

        $__internal_286db6f7d3466682109a2f392a0ca3e6ba7a6f722d10ea1ce4ffd98708d596c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_286db6f7d3466682109a2f392a0ca3e6ba7a6f722d10ea1ce4ffd98708d596c7->enter($__internal_286db6f7d3466682109a2f392a0ca3e6ba7a6f722d10ea1ce4ffd98708d596c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar.html.twig"));

        // line 1
        echo "<!-- START of Symfony Web Debug Toolbar -->
";
        // line 2
        if (("normal" != (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 3
            echo "    <div id=\"sfMiniToolbar-";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" class=\"sf-minitoolbar\" data-no-turbolink>
        <a href=\"#\" title=\"Show Symfony toolbar\" tabindex=\"-1\" id=\"sfToolbarMiniToggler-";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" accesskey=\"D\">
            ";
            // line 5
            echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
            echo "
        </a>
    </div>
    <style";
            // line 8
            if ((isset($context["csp_style_nonce"]) ? $context["csp_style_nonce"] : $this->getContext($context, "csp_style_nonce"))) {
                echo " nonce=\"";
                echo twig_escape_filter($this->env, (isset($context["csp_style_nonce"]) ? $context["csp_style_nonce"] : $this->getContext($context, "csp_style_nonce")), "html", null, true);
                echo "\"";
            }
            echo ">
        ";
            // line 9
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar.css.twig", array("position" => (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "floatable" => true));
            echo "
    </style>
    <div id=\"sfToolbarClearer-";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" class=\"sf-toolbar-clearer\"></div>
";
        }
        // line 13
        echo "
<div id=\"sfToolbarMainContent-";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
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
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 16
            echo "        ";
            if (            $this->loadTemplate($context["template"], "WebProfilerBundle:Profiler:toolbar.html.twig", 16)->hasBlock("toolbar", $context)) {
                // line 17
                echo "            ";
                $__internal_a4021ca64c7a8d66c78f364539dbc349b49612989e52004eacde5abf3ede8b42 = array("collector" => $this->getAttribute(                // line 18
(isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "getcollector", array(0 => $context["name"]), "method"), "profiler_url" =>                 // line 19
(isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "token" => $this->getAttribute(                // line 20
(isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "token", array()), "name" =>                 // line 21
$context["name"], "profiler_markup_version" =>                 // line 22
(isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")), "csp_script_nonce" =>                 // line 23
(isset($context["csp_script_nonce"]) ? $context["csp_script_nonce"] : $this->getContext($context, "csp_script_nonce")), "csp_style_nonce" =>                 // line 24
(isset($context["csp_style_nonce"]) ? $context["csp_style_nonce"] : $this->getContext($context, "csp_style_nonce")));
                if (!is_array($__internal_a4021ca64c7a8d66c78f364539dbc349b49612989e52004eacde5abf3ede8b42)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_a4021ca64c7a8d66c78f364539dbc349b49612989e52004eacde5abf3ede8b42);
                // line 26
                echo "                ";
                $this->loadTemplate($context["template"], "WebProfilerBundle:Profiler:toolbar.html.twig", 26)->displayBlock("toolbar", $context);
                echo "
            ";
                $context = $context['_parent'];
                // line 28
                echo "        ";
            }
            // line 29
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    ";
        // line 31
        if (("normal" != (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 32
            echo "        <a class=\"hide-button\" id=\"sfToolbarHideButton-";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\">
            ";
            // line 33
            echo twig_include($this->env, $context, "@WebProfiler/Icon/close.svg");
            echo "
        </a>
    ";
        }
        // line 36
        echo "</div>
<!-- END of Symfony Web Debug Toolbar -->
";
        
        $__internal_96ab7af1fd7f6b60e6d6ffd51d55c63520f7551ab171f2ade049d09e1a2bdee9->leave($__internal_96ab7af1fd7f6b60e6d6ffd51d55c63520f7551ab171f2ade049d09e1a2bdee9_prof);

        
        $__internal_286db6f7d3466682109a2f392a0ca3e6ba7a6f722d10ea1ce4ffd98708d596c7->leave($__internal_286db6f7d3466682109a2f392a0ca3e6ba7a6f722d10ea1ce4ffd98708d596c7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 36,  138 => 33,  133 => 32,  131 => 31,  128 => 30,  114 => 29,  111 => 28,  105 => 26,  98 => 24,  97 => 23,  96 => 22,  95 => 21,  94 => 20,  93 => 19,  92 => 18,  90 => 17,  87 => 16,  70 => 15,  66 => 14,  63 => 13,  58 => 11,  53 => 9,  45 => 8,  39 => 5,  35 => 4,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- START of Symfony Web Debug Toolbar -->
{% if 'normal' != position %}
    <div id=\"sfMiniToolbar-{{ token }}\" class=\"sf-minitoolbar\" data-no-turbolink>
        <a href=\"#\" title=\"Show Symfony toolbar\" tabindex=\"-1\" id=\"sfToolbarMiniToggler-{{ token }}\" accesskey=\"D\">
            {{ include('@WebProfiler/Icon/symfony.svg') }}
        </a>
    </div>
    <style{% if csp_style_nonce %} nonce=\"{{ csp_style_nonce }}\"{% endif %}>
        {{ include('@WebProfiler/Profiler/toolbar.css.twig', { 'position': position, 'floatable': true }) }}
    </style>
    <div id=\"sfToolbarClearer-{{ token }}\" class=\"sf-toolbar-clearer\"></div>
{% endif %}

<div id=\"sfToolbarMainContent-{{ token }}\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink>
    {% for name, template in templates %}
        {% if block('toolbar', template) is defined %}
            {% with {
                collector: profile.getcollector(name),
                profiler_url: profiler_url,
                token: profile.token,
                name: name,
                profiler_markup_version: profiler_markup_version,
                csp_script_nonce: csp_script_nonce,
                csp_style_nonce: csp_style_nonce
              } %}
                {{ block('toolbar', template) }}
            {% endwith %}
        {% endif %}
    {% endfor %}

    {% if 'normal' != position %}
        <a class=\"hide-button\" id=\"sfToolbarHideButton-{{ token }}\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\">
            {{ include('@WebProfiler/Icon/close.svg') }}
        </a>
    {% endif %}
</div>
<!-- END of Symfony Web Debug Toolbar -->
", "WebProfilerBundle:Profiler:toolbar.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar.html.twig");
    }
}
