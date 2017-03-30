<?php

/* NomayaSocialBundle:Buttons:googleplusButton.html.twig */
class __TwigTemplate_0140eb0a9b99f3f6517fd53e05808bfe378baa01c82502f9cc51f3eb81cee838 extends Twig_Template
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
        $__internal_6e6afa2ffbb6109d5fcc4ab0d1b7938c07cc9cabcb50ada421fd32b9d137cbcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e6afa2ffbb6109d5fcc4ab0d1b7938c07cc9cabcb50ada421fd32b9d137cbcb->enter($__internal_6e6afa2ffbb6109d5fcc4ab0d1b7938c07cc9cabcb50ada421fd32b9d137cbcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:googleplusButton.html.twig"));

        $__internal_51e42d42db01f7f58d972d4ede71c10065d4d7dee7ea158b5ff2b0d61fe20a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51e42d42db01f7f58d972d4ede71c10065d4d7dee7ea158b5ff2b0d61fe20a4d->enter($__internal_51e42d42db01f7f58d972d4ede71c10065d4d7dee7ea158b5ff2b0d61fe20a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:googleplusButton.html.twig"));

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
        echo " <div class=\"g-plusone\" data-size=\"";
        echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")), "html", null, true);
        echo "\" data-annotation=\"";
        echo twig_escape_filter($this->env, (isset($context["annotation"]) ? $context["annotation"] : $this->getContext($context, "annotation")), "html", null, true);
        echo "\" data-width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo "\" data-href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\"></div>

 <script type=\"text/javascript\">
   window.___gcfg = {lang: '";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
        echo "'};

   (function() {
     var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
     po.src = 'https://apis.google.com/js/plusone.js';
     var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
   })();
 </script>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6e6afa2ffbb6109d5fcc4ab0d1b7938c07cc9cabcb50ada421fd32b9d137cbcb->leave($__internal_6e6afa2ffbb6109d5fcc4ab0d1b7938c07cc9cabcb50ada421fd32b9d137cbcb_prof);

        
        $__internal_51e42d42db01f7f58d972d4ede71c10065d4d7dee7ea158b5ff2b0d61fe20a4d->leave($__internal_51e42d42db01f7f58d972d4ede71c10065d4d7dee7ea158b5ff2b0d61fe20a4d_prof);

    }

    public function getTemplateName()
    {
        return "NomayaSocialBundle:Buttons:googleplusButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  36 => 6,  34 => 5,  31 => 4,  27 => 2,  25 => 1,);
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
 <div class=\"g-plusone\" data-size=\"{{size}}\" data-annotation=\"{{annotation}}\" data-width=\"{{width}}\" data-href=\"{{url}}\"></div>

 <script type=\"text/javascript\">
   window.___gcfg = {lang: '{{locale}}'};

   (function() {
     var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
     po.src = 'https://apis.google.com/js/plusone.js';
     var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
   })();
 </script>

{% endspaceless %}", "NomayaSocialBundle:Buttons:googleplusButton.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\nomaya\\social-bundle\\Nomaya\\SocialBundle/Resources/views/Buttons/googleplusButton.html.twig");
    }
}
