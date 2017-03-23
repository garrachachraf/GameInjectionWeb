<?php

/* NomayaSocialBundle:Buttons:facebookButton.html.twig */
class __TwigTemplate_6181e0ba7b906df40ed32e92fdbe14c028e399b1b52d89b332156dc19719e26a extends Twig_Template
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
        $__internal_5171175c1d63c357b0ae99bf28f6d345d28776e6854b71b2e18ba0f4022dac64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5171175c1d63c357b0ae99bf28f6d345d28776e6854b71b2e18ba0f4022dac64->enter($__internal_5171175c1d63c357b0ae99bf28f6d345d28776e6854b71b2e18ba0f4022dac64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:facebookButton.html.twig"));

        $__internal_6b838f1d2f6706eed10ae40732481ecf99ecd7247bf3e519599d11a816f9c9fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b838f1d2f6706eed10ae40732481ecf99ecd7247bf3e519599d11a816f9c9fb->enter($__internal_6b838f1d2f6706eed10ae40732481ecf99ecd7247bf3e519599d11a816f9c9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:facebookButton.html.twig"));

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
        echo " ";
        // line 7
        echo " <div id=\"fb-root\"></div>
 <script>(function(d, s, id) {
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) return;
   js = d.createElement(s); js.id = id;
   js.src = \"//connect.facebook.net/";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
        echo "/all.js#xfbml=1\";
   fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));</script>

 <div class=\"fb-like\" data-href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" data-send=\"";
        echo twig_escape_filter($this->env, (isset($context["send"]) ? $context["send"] : $this->getContext($context, "send")), "html", null, true);
        echo "\" data-layout=\"";
        echo twig_escape_filter($this->env, (isset($context["layout"]) ? $context["layout"] : $this->getContext($context, "layout")), "html", null, true);
        echo "\" data-width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo "\" data-show-faces=\"";
        echo twig_escape_filter($this->env, (isset($context["showFaces"]) ? $context["showFaces"] : $this->getContext($context, "showFaces")), "html", null, true);
        echo "\" data-share=\"";
        echo twig_escape_filter($this->env, (isset($context["share"]) ? $context["share"] : $this->getContext($context, "share")), "html", null, true);
        echo "\"></div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5171175c1d63c357b0ae99bf28f6d345d28776e6854b71b2e18ba0f4022dac64->leave($__internal_5171175c1d63c357b0ae99bf28f6d345d28776e6854b71b2e18ba0f4022dac64_prof);

        
        $__internal_6b838f1d2f6706eed10ae40732481ecf99ecd7247bf3e519599d11a816f9c9fb->leave($__internal_6b838f1d2f6706eed10ae40732481ecf99ecd7247bf3e519599d11a816f9c9fb_prof);

    }

    public function getTemplateName()
    {
        return "NomayaSocialBundle:Buttons:facebookButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  45 => 12,  38 => 7,  36 => 6,  34 => 5,  31 => 4,  27 => 2,  25 => 1,);
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
 {# initialize facebook SDK #}
 <div id=\"fb-root\"></div>
 <script>(function(d, s, id) {
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) return;
   js = d.createElement(s); js.id = id;
   js.src = \"//connect.facebook.net/{{locale}}/all.js#xfbml=1\";
   fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));</script>

 <div class=\"fb-like\" data-href=\"{{url}}\" data-send=\"{{send}}\" data-layout=\"{{layout}}\" data-width=\"{{width}}\" data-show-faces=\"{{showFaces}}\" data-share=\"{{share}}\"></div>
{% endspaceless %}
", "NomayaSocialBundle:Buttons:facebookButton.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\nomaya\\social-bundle\\Nomaya\\SocialBundle/Resources/views/Buttons/facebookButton.html.twig");
    }
}
