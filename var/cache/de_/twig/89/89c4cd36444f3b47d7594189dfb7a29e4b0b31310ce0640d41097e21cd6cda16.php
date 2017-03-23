<?php

/* NomayaSocialBundle:Links:socialLinks.html.twig */
class __TwigTemplate_4d1f59005e5f2e51d72cab60a93a96f302561a393c45e9a2c9e5f4ab36d94c4b extends Twig_Template
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
        $__internal_56271c635055646bea4531d64097bff0e2ef628c2174698bc955375af44aa9b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56271c635055646bea4531d64097bff0e2ef628c2174698bc955375af44aa9b4->enter($__internal_56271c635055646bea4531d64097bff0e2ef628c2174698bc955375af44aa9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Links:socialLinks.html.twig"));

        $__internal_159a7613695b8737b9d0a5fc7be5b0175d6593c88f0aff5c2c1a25da43e59e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159a7613695b8737b9d0a5fc7be5b0175d6593c88f0aff5c2c1a25da43e59e41->enter($__internal_159a7613695b8737b9d0a5fc7be5b0175d6593c88f0aff5c2c1a25da43e59e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Links:socialLinks.html.twig"));

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
        
        $__internal_56271c635055646bea4531d64097bff0e2ef628c2174698bc955375af44aa9b4->leave($__internal_56271c635055646bea4531d64097bff0e2ef628c2174698bc955375af44aa9b4_prof);

        
        $__internal_159a7613695b8737b9d0a5fc7be5b0175d6593c88f0aff5c2c1a25da43e59e41->leave($__internal_159a7613695b8737b9d0a5fc7be5b0175d6593c88f0aff5c2c1a25da43e59e41_prof);

    }

    public function getTemplateName()
    {
        return "NomayaSocialBundle:Links:socialLinks.html.twig";
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

", "NomayaSocialBundle:Links:socialLinks.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\nomaya\\social-bundle\\Nomaya\\SocialBundle/Resources/views/Links/socialLinks.html.twig");
    }
}
