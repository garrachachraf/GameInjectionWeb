<?php

/* NomayaSocialBundle:Buttons:googleplusButton.html.twig */
class __TwigTemplate_6b1e136a84f0e33acf60370fd2780406bfe515102b1457699a2b483752c4e4c4 extends Twig_Template
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
        $__internal_5aced23b280bf36dbae26677397c89ba0035e37b46a57de709cf27b6394f2a63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aced23b280bf36dbae26677397c89ba0035e37b46a57de709cf27b6394f2a63->enter($__internal_5aced23b280bf36dbae26677397c89ba0035e37b46a57de709cf27b6394f2a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:googleplusButton.html.twig"));

        $__internal_6712e576a3c9b4d51f843328765af55431a34fb4c2ff7246363e49c155529600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6712e576a3c9b4d51f843328765af55431a34fb4c2ff7246363e49c155529600->enter($__internal_6712e576a3c9b4d51f843328765af55431a34fb4c2ff7246363e49c155529600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:googleplusButton.html.twig"));

        // line 1
        if (( !array_key_exists("url", $context) || (($context["url"] ?? $this->getContext($context, "url")) == null))) {
            // line 2
            echo "    ";
            $context["url"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "uri", array());
        }
        // line 4
        echo "
";
        // line 5
        ob_start();
        // line 6
        echo " <div class=\"g-plusone\" data-size=\"";
        echo twig_escape_filter($this->env, ($context["size"] ?? $this->getContext($context, "size")), "html", null, true);
        echo "\" data-annotation=\"";
        echo twig_escape_filter($this->env, ($context["annotation"] ?? $this->getContext($context, "annotation")), "html", null, true);
        echo "\" data-width=\"";
        echo twig_escape_filter($this->env, ($context["width"] ?? $this->getContext($context, "width")), "html", null, true);
        echo "\" data-href=\"";
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\"></div>

 <script type=\"text/javascript\">
   window.___gcfg = {lang: '";
        // line 9
        echo twig_escape_filter($this->env, ($context["locale"] ?? $this->getContext($context, "locale")), "html", null, true);
        echo "'};

   (function() {
     var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
     po.src = 'https://apis.google.com/js/plusone.js';
     var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
   })();
 </script>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5aced23b280bf36dbae26677397c89ba0035e37b46a57de709cf27b6394f2a63->leave($__internal_5aced23b280bf36dbae26677397c89ba0035e37b46a57de709cf27b6394f2a63_prof);

        
        $__internal_6712e576a3c9b4d51f843328765af55431a34fb4c2ff7246363e49c155529600->leave($__internal_6712e576a3c9b4d51f843328765af55431a34fb4c2ff7246363e49c155529600_prof);

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

{% endspaceless %}", "NomayaSocialBundle:Buttons:googleplusButton.html.twig", "/Applications/MAMP/htdocs/nn/vendor/nomaya/social-bundle/Nomaya/SocialBundle/Resources/views/Buttons/googleplusButton.html.twig");
    }
}
