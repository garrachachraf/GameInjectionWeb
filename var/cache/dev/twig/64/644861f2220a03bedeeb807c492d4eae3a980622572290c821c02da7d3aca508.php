<?php

/* NomayaSocialBundle:Buttons:socialButtons.html.twig */
class __TwigTemplate_60ccd93198f4a7b671b3ddab20dcd453b1bad0abe1613eaa8713c1f52f3c5e5b extends Twig_Template
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
        $__internal_5a63e474f02da0ff70b338f8a77cda137959fc72691914df885df8ceadacb5c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a63e474f02da0ff70b338f8a77cda137959fc72691914df885df8ceadacb5c4->enter($__internal_5a63e474f02da0ff70b338f8a77cda137959fc72691914df885df8ceadacb5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:socialButtons.html.twig"));

        $__internal_ca5fb45c667eb3ff5787c49062decdab1f7cd9ed9481ec83bd837121fc885f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca5fb45c667eb3ff5787c49062decdab1f7cd9ed9481ec83bd837121fc885f7c->enter($__internal_ca5fb45c667eb3ff5787c49062decdab1f7cd9ed9481ec83bd837121fc885f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:socialButtons.html.twig"));

        // line 1
        if ((array_key_exists("facebook", $context) &&  !((isset($context["facebook"]) ? $context["facebook"] : $this->getContext($context, "facebook")) === false))) {
            // line 2
            echo "    <span class=\"button facebookButton col-xs-2 col-xs-offset-1\">
      ";
            // line 3
            echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialBar')->getFacebookLikeButton((isset($context["facebook"]) ? $context["facebook"] : $this->getContext($context, "facebook")));
            echo "
    </span>
";
        }
        // line 6
        echo "
";
        // line 7
        if ((array_key_exists("googleplus", $context) &&  !((isset($context["googleplus"]) ? $context["googleplus"] : $this->getContext($context, "googleplus")) === false))) {
            // line 8
            echo "    <span class=\"button googleplus col-xs-2\">
      ";
            // line 9
            echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialBar')->getGoogleplusButton((isset($context["googleplus"]) ? $context["googleplus"] : $this->getContext($context, "googleplus")));
            echo "
    </span>
";
        }
        // line 12
        echo "
";
        // line 13
        if ((array_key_exists("twitter", $context) &&  !((isset($context["twitter"]) ? $context["twitter"] : $this->getContext($context, "twitter")) === false))) {
            // line 14
            echo "    <span class=\"button twitterButton col-xs-2\">
      ";
            // line 15
            echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialBar')->getTwitterButton((isset($context["twitter"]) ? $context["twitter"] : $this->getContext($context, "twitter")));
            echo "
    </span>
";
        }
        // line 18
        echo "
";
        // line 19
        if ((array_key_exists("linkedin", $context) &&  !((isset($context["linkedin"]) ? $context["linkedin"] : $this->getContext($context, "linkedin")) === false))) {
            // line 20
            echo "    <span class=\"button linkedinButton col-xs-2\">
      ";
            // line 21
            echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialBar')->getLinkedinButton((isset($context["linkedin"]) ? $context["linkedin"] : $this->getContext($context, "linkedin")));
            echo "
    </span>
";
        }
        // line 24
        echo "
";
        // line 25
        if ((array_key_exists("pinterest", $context) &&  !((isset($context["pinterest"]) ? $context["pinterest"] : $this->getContext($context, "pinterest")) === false))) {
            // line 26
            echo "    <span class=\"button linkedinButton col-xs-2\">
      ";
            // line 27
            echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialBar')->getPinterestButton((isset($context["pinterest"]) ? $context["pinterest"] : $this->getContext($context, "pinterest")));
            echo "
    </span>
";
        }
        
        $__internal_5a63e474f02da0ff70b338f8a77cda137959fc72691914df885df8ceadacb5c4->leave($__internal_5a63e474f02da0ff70b338f8a77cda137959fc72691914df885df8ceadacb5c4_prof);

        
        $__internal_ca5fb45c667eb3ff5787c49062decdab1f7cd9ed9481ec83bd837121fc885f7c->leave($__internal_ca5fb45c667eb3ff5787c49062decdab1f7cd9ed9481ec83bd837121fc885f7c_prof);

    }

    public function getTemplateName()
    {
        return "NomayaSocialBundle:Buttons:socialButtons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  83 => 26,  81 => 25,  78 => 24,  72 => 21,  69 => 20,  67 => 19,  64 => 18,  58 => 15,  55 => 14,  53 => 13,  50 => 12,  44 => 9,  41 => 8,  39 => 7,  36 => 6,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if facebook is defined and facebook is not sameas(false) %}
    <span class=\"button facebookButton col-xs-2 col-xs-offset-1\">
      {{ facebookButton(facebook) }}
    </span>
{% endif %}

{% if googleplus is defined and googleplus is not sameas(false) %}
    <span class=\"button googleplus col-xs-2\">
      {{ googleplusButton(googleplus) }}
    </span>
{% endif %}

{% if twitter is defined and twitter is not sameas(false) %}
    <span class=\"button twitterButton col-xs-2\">
      {{ twitterButton(twitter) }}
    </span>
{% endif %}

{% if linkedin is defined and linkedin is not sameas(false) %}
    <span class=\"button linkedinButton col-xs-2\">
      {{ linkedinButton(linkedin) }}
    </span>
{% endif %}

{% if pinterest is defined and pinterest is not sameas(false) %}
    <span class=\"button linkedinButton col-xs-2\">
      {{ pinterestButton(pinterest) }}
    </span>
{% endif %}", "NomayaSocialBundle:Buttons:socialButtons.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\nomaya\\social-bundle\\Nomaya\\SocialBundle/Resources/views/Buttons/socialButtons.html.twig");
    }
}
