<?php

/* @NomayaSocial/Buttons/facebookButton.html.twig */
class __TwigTemplate_03777c0936e00ff2f1423db2d86d08ad61ae943b6ae3060e0cc467de85ccd83c extends Twig_Template
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
        $__internal_a60ba3a21c364ac4e8f2c36b688fb9dac07d4ee5ddc67124728e38904a0cf552 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a60ba3a21c364ac4e8f2c36b688fb9dac07d4ee5ddc67124728e38904a0cf552->enter($__internal_a60ba3a21c364ac4e8f2c36b688fb9dac07d4ee5ddc67124728e38904a0cf552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NomayaSocial/Buttons/facebookButton.html.twig"));

        $__internal_627387e91609012b96437bc2072cbbfcb2ec2eeaa73ff08205f585fb68eab652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_627387e91609012b96437bc2072cbbfcb2ec2eeaa73ff08205f585fb68eab652->enter($__internal_627387e91609012b96437bc2072cbbfcb2ec2eeaa73ff08205f585fb68eab652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NomayaSocial/Buttons/facebookButton.html.twig"));

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
        
        $__internal_a60ba3a21c364ac4e8f2c36b688fb9dac07d4ee5ddc67124728e38904a0cf552->leave($__internal_a60ba3a21c364ac4e8f2c36b688fb9dac07d4ee5ddc67124728e38904a0cf552_prof);

        
        $__internal_627387e91609012b96437bc2072cbbfcb2ec2eeaa73ff08205f585fb68eab652->leave($__internal_627387e91609012b96437bc2072cbbfcb2ec2eeaa73ff08205f585fb68eab652_prof);

    }

    public function getTemplateName()
    {
        return "@NomayaSocial/Buttons/facebookButton.html.twig";
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
", "@NomayaSocial/Buttons/facebookButton.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\nomaya\\social-bundle\\Nomaya\\SocialBundle\\Resources\\views\\Buttons\\facebookButton.html.twig");
    }
}
