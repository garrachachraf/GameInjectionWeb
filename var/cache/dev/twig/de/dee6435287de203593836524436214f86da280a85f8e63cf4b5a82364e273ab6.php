<?php

/* NomayaSocialBundle:Buttons:twitterButton.html.twig */
class __TwigTemplate_929e1820aef97d00df49ebba7ee8d081dfeb43b83f3b484b6e10862dc215ea3b extends Twig_Template
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
        $__internal_bd44dc301e23167a705d92853f03256049412a4a6fc567332ce073d7b01d0dec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd44dc301e23167a705d92853f03256049412a4a6fc567332ce073d7b01d0dec->enter($__internal_bd44dc301e23167a705d92853f03256049412a4a6fc567332ce073d7b01d0dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:twitterButton.html.twig"));

        $__internal_04384a5d4840c57a8cbad4461e7c6ab08b3ce66fd7d86fe71ade450543ded190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04384a5d4840c57a8cbad4461e7c6ab08b3ce66fd7d86fe71ade450543ded190->enter($__internal_04384a5d4840c57a8cbad4461e7c6ab08b3ce66fd7d86fe71ade450543ded190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:twitterButton.html.twig"));

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
        
        $__internal_bd44dc301e23167a705d92853f03256049412a4a6fc567332ce073d7b01d0dec->leave($__internal_bd44dc301e23167a705d92853f03256049412a4a6fc567332ce073d7b01d0dec_prof);

        
        $__internal_04384a5d4840c57a8cbad4461e7c6ab08b3ce66fd7d86fe71ade450543ded190->leave($__internal_04384a5d4840c57a8cbad4461e7c6ab08b3ce66fd7d86fe71ade450543ded190_prof);

    }

    public function getTemplateName()
    {
        return "NomayaSocialBundle:Buttons:twitterButton.html.twig";
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
{% endspaceless %}", "NomayaSocialBundle:Buttons:twitterButton.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\nomaya\\social-bundle\\Nomaya\\SocialBundle/Resources/views/Buttons/twitterButton.html.twig");
    }
}
