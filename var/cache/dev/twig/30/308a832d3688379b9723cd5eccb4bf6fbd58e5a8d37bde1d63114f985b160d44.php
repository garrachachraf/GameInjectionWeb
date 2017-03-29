<?php

/* @NomayaSocial/Buttons/twitterButton.html.twig */
class __TwigTemplate_1685f97a240d578afa5dff38056300fb2a5a41f935e2a741e579cf135d4691ce extends Twig_Template
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
        $__internal_a29f45c98e3d102a1d7f392826332d28f01915ce7586f6a0c155bc1840f098a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a29f45c98e3d102a1d7f392826332d28f01915ce7586f6a0c155bc1840f098a1->enter($__internal_a29f45c98e3d102a1d7f392826332d28f01915ce7586f6a0c155bc1840f098a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NomayaSocial/Buttons/twitterButton.html.twig"));

        $__internal_9f378dd0e676de81d5103dc101aa4e3d6816d24532d67eda5644cf630b466110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f378dd0e676de81d5103dc101aa4e3d6816d24532d67eda5644cf630b466110->enter($__internal_9f378dd0e676de81d5103dc101aa4e3d6816d24532d67eda5644cf630b466110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NomayaSocial/Buttons/twitterButton.html.twig"));

        // line 1
        if (( !array_key_exists("url", $context) || ((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")) == null))) {
            // line 2
            echo "    ";
            $context["url"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array());
        }
        // line 4
        echo "
";
        // line 5
        ob_start();
        // line 6
        echo " <a href=\"https://twitter.com/share\" class=\"twitter-share-button\"

   data-text=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "\" 
   data-url=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\"
   data-lang=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
        echo "\"

   ";
        // line 12
        if ( !((isset($context["via"]) ? $context["via"] : $this->getContext($context, "via")) === false)) {
            // line 13
            echo "     data-via=\"";
            echo twig_escape_filter($this->env, (isset($context["via"]) ? $context["via"] : $this->getContext($context, "via")), "html", null, true);
            echo "\"
   ";
        }
        // line 15
        echo "
   ";
        // line 16
        if ( !((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")) === false)) {
            // line 17
            echo "     data-hashtags=\"";
            echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "html", null, true);
            echo "\"
   ";
        }
        // line 19
        echo " >";
        echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "html", null, true);
        echo "</a>

 <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a29f45c98e3d102a1d7f392826332d28f01915ce7586f6a0c155bc1840f098a1->leave($__internal_a29f45c98e3d102a1d7f392826332d28f01915ce7586f6a0c155bc1840f098a1_prof);

        
        $__internal_9f378dd0e676de81d5103dc101aa4e3d6816d24532d67eda5644cf630b466110->leave($__internal_9f378dd0e676de81d5103dc101aa4e3d6816d24532d67eda5644cf630b466110_prof);

    }

    public function getTemplateName()
    {
        return "@NomayaSocial/Buttons/twitterButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  66 => 17,  64 => 16,  61 => 15,  55 => 13,  53 => 12,  48 => 10,  44 => 9,  40 => 8,  36 => 6,  34 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if url is not defined or url == null %}
    {% set url = app.request.uri %}
{% endif %}

{% spaceless %}
 <a href=\"https://twitter.com/share\" class=\"twitter-share-button\"

   data-text=\"{{message}}\" 
   data-url=\"{{url}}\"
   data-lang=\"{{locale}}\"

   {% if via is not sameas(false) %}
     data-via=\"{{via}}\"
   {% endif %}

   {% if tag is not sameas(false) %}
     data-hashtags=\"{{tag}}\"
   {% endif %}
 >{{text}}</a>

 <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
{% endspaceless %}", "@NomayaSocial/Buttons/twitterButton.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\nomaya\\social-bundle\\Nomaya\\SocialBundle\\Resources\\views\\Buttons\\twitterButton.html.twig");
    }
}
