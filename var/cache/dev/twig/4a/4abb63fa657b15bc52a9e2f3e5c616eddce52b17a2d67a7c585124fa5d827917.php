<?php

/* @NomayaSocial/Buttons/googleplusButton.html.twig */
class __TwigTemplate_d860f76e1cbf1b5f5ee99ac90b50fd269eb2468b35855c1b5ae58c3d1a1ca3fd extends Twig_Template
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
        $__internal_583ac9ecad1b80f6460fe27df81999379d4d8b02e1bcdc3940727f6311daed92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_583ac9ecad1b80f6460fe27df81999379d4d8b02e1bcdc3940727f6311daed92->enter($__internal_583ac9ecad1b80f6460fe27df81999379d4d8b02e1bcdc3940727f6311daed92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NomayaSocial/Buttons/googleplusButton.html.twig"));

        $__internal_8ff0d8620280abc8d370ff323424e3e998ff9aa5a493f4f59d32f2eb0e02395f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff0d8620280abc8d370ff323424e3e998ff9aa5a493f4f59d32f2eb0e02395f->enter($__internal_8ff0d8620280abc8d370ff323424e3e998ff9aa5a493f4f59d32f2eb0e02395f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NomayaSocial/Buttons/googleplusButton.html.twig"));

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
        
        $__internal_583ac9ecad1b80f6460fe27df81999379d4d8b02e1bcdc3940727f6311daed92->leave($__internal_583ac9ecad1b80f6460fe27df81999379d4d8b02e1bcdc3940727f6311daed92_prof);

        
        $__internal_8ff0d8620280abc8d370ff323424e3e998ff9aa5a493f4f59d32f2eb0e02395f->leave($__internal_8ff0d8620280abc8d370ff323424e3e998ff9aa5a493f4f59d32f2eb0e02395f_prof);

    }

    public function getTemplateName()
    {
        return "@NomayaSocial/Buttons/googleplusButton.html.twig";
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

{% endspaceless %}", "@NomayaSocial/Buttons/googleplusButton.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\nomaya\\social-bundle\\Nomaya\\SocialBundle\\Resources\\views\\Buttons\\googleplusButton.html.twig");
    }
}
