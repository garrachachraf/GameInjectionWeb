<?php

/* @NomayaSocial/Links/socialLinks.html.twig */
class __TwigTemplate_d2b315166fe3bd663a54e5642e55cd86cb8cc517bab5bb599d673fa900b51021 extends Twig_Template
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
        $__internal_f4e29500ed2f6642fd77d7d725e6d4b3514f86e832838772f75c8eac76fdda3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4e29500ed2f6642fd77d7d725e6d4b3514f86e832838772f75c8eac76fdda3b->enter($__internal_f4e29500ed2f6642fd77d7d725e6d4b3514f86e832838772f75c8eac76fdda3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NomayaSocial/Links/socialLinks.html.twig"));

        $__internal_f22010f2d2e08265ace0cb1b3d9d96d20aa4673385c63f6c6468b467b7ca3e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22010f2d2e08265ace0cb1b3d9d96d20aa4673385c63f6c6468b467b7ca3e2e->enter($__internal_f22010f2d2e08265ace0cb1b3d9d96d20aa4673385c63f6c6468b467b7ca3e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NomayaSocial/Links/socialLinks.html.twig"));

        // line 1
        echo "  
";
        // line 2
        if ( !((isset($context["facebook"]) ? $context["facebook"] : $this->getContext($context, "facebook")) === false)) {
            // line 3
            echo "    <span class=\"link facebookLink\">
      ";
            // line 4
            echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialLinks')->getSocialLink("facebook", (isset($context["facebook"]) ? $context["facebook"] : $this->getContext($context, "facebook")));
            echo "
    </span>
";
        }
        // line 7
        echo "
";
        // line 8
        if ( !((isset($context["googleplus"]) ? $context["googleplus"] : $this->getContext($context, "googleplus")) === false)) {
            // line 9
            echo "    <span class=\"link googleplusLink\">
      ";
            // line 10
            echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialLinks')->getSocialLink("googleplus", (isset($context["googleplus"]) ? $context["googleplus"] : $this->getContext($context, "googleplus")));
            echo "
    </span>
";
        }
        // line 13
        echo "
";
        // line 14
        if ( !((isset($context["twitter"]) ? $context["twitter"] : $this->getContext($context, "twitter")) === false)) {
            // line 15
            echo "    <span class=\"link twitterLink\">
      ";
            // line 16
            echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialLinks')->getSocialLink("twitter", (isset($context["twitter"]) ? $context["twitter"] : $this->getContext($context, "twitter")));
            echo "
    </span>
";
        }
        // line 19
        echo "
";
        // line 20
        if ( !((isset($context["linkedin"]) ? $context["linkedin"] : $this->getContext($context, "linkedin")) === false)) {
            // line 21
            echo "    <span class=\"link linkedinLink\">
      ";
            // line 22
            echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialLinks')->getSocialLink("linkedin", (isset($context["linkedin"]) ? $context["linkedin"] : $this->getContext($context, "linkedin")));
            echo "
    </span>
";
        }
        // line 25
        echo "
";
        // line 26
        if ( !((isset($context["tumblr"]) ? $context["tumblr"] : $this->getContext($context, "tumblr")) === false)) {
            // line 27
            echo "    <span class=\"link tumblrLink\">
      ";
            // line 28
            echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialLinks')->getSocialLink("tumblr", (isset($context["linkedin"]) ? $context["linkedin"] : $this->getContext($context, "linkedin")));
            echo "
    </span>
";
        }
        // line 31
        echo "
";
        // line 32
        if ( !((isset($context["pinterest"]) ? $context["pinterest"] : $this->getContext($context, "pinterest")) === false)) {
            // line 33
            echo "    <span class=\"link pinterestLink\">
      ";
            // line 34
            echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialLinks')->getSocialLink("pinterest", (isset($context["linkedin"]) ? $context["linkedin"] : $this->getContext($context, "linkedin")));
            echo "
    </span>
";
        }
        // line 37
        echo "
";
        
        $__internal_f4e29500ed2f6642fd77d7d725e6d4b3514f86e832838772f75c8eac76fdda3b->leave($__internal_f4e29500ed2f6642fd77d7d725e6d4b3514f86e832838772f75c8eac76fdda3b_prof);

        
        $__internal_f22010f2d2e08265ace0cb1b3d9d96d20aa4673385c63f6c6468b467b7ca3e2e->leave($__internal_f22010f2d2e08265ace0cb1b3d9d96d20aa4673385c63f6c6468b467b7ca3e2e_prof);

    }

    public function getTemplateName()
    {
        return "@NomayaSocial/Links/socialLinks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 37,  103 => 34,  100 => 33,  98 => 32,  95 => 31,  89 => 28,  86 => 27,  84 => 26,  81 => 25,  75 => 22,  72 => 21,  70 => 20,  67 => 19,  61 => 16,  58 => 15,  56 => 14,  53 => 13,  47 => 10,  44 => 9,  42 => 8,  39 => 7,  33 => 4,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("  
{% if facebook is not sameas(false) %}
    <span class=\"link facebookLink\">
      {{ socialLink('facebook',facebook) }}
    </span>
{% endif %}

{% if googleplus is not sameas(false) %}
    <span class=\"link googleplusLink\">
      {{ socialLink('googleplus',googleplus) }}
    </span>
{% endif %}

{% if twitter is not sameas(false) %}
    <span class=\"link twitterLink\">
      {{ socialLink('twitter',twitter) }}
    </span>
{% endif %}

{% if linkedin is not sameas(false) %}
    <span class=\"link linkedinLink\">
      {{ socialLink('linkedin',linkedin) }}
    </span>
{% endif %}

{% if tumblr is not sameas(false) %}
    <span class=\"link tumblrLink\">
      {{ socialLink('tumblr',linkedin) }}
    </span>
{% endif %}

{% if pinterest is not sameas(false) %}
    <span class=\"link pinterestLink\">
      {{ socialLink('pinterest',linkedin) }}
    </span>
{% endif %}

", "@NomayaSocial/Links/socialLinks.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\nomaya\\social-bundle\\Nomaya\\SocialBundle\\Resources\\views\\Links\\socialLinks.html.twig");
    }
}
