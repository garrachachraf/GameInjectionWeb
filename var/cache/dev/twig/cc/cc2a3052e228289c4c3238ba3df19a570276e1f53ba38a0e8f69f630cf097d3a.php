<?php

/* EloboostedGameinjectionBundle:Default:index.html.twig */
class __TwigTemplate_5ebf36c2e609b473d4182fd953017acef124d32872cdd21792f82a0328749e6f extends Twig_Template
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
        $__internal_b9ca83f70a0630745739aa27a8798e1c48f0989631dfaddb81e4731c40002e5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9ca83f70a0630745739aa27a8798e1c48f0989631dfaddb81e4731c40002e5b->enter($__internal_b9ca83f70a0630745739aa27a8798e1c48f0989631dfaddb81e4731c40002e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedGameinjectionBundle:Default:index.html.twig"));

        $__internal_4f1be0123e2b18ae7a74f4dce642aa9616ca12dd59fa3880afd1cbadc9b8853b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1be0123e2b18ae7a74f4dce642aa9616ca12dd59fa3880afd1cbadc9b8853b->enter($__internal_4f1be0123e2b18ae7a74f4dce642aa9616ca12dd59fa3880afd1cbadc9b8853b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedGameinjectionBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " :<br>

";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateDeNaissance", array())), "html", null, true);
        echo "
<br>
";
        
        $__internal_b9ca83f70a0630745739aa27a8798e1c48f0989631dfaddb81e4731c40002e5b->leave($__internal_b9ca83f70a0630745739aa27a8798e1c48f0989631dfaddb81e4731c40002e5b_prof);

        
        $__internal_4f1be0123e2b18ae7a74f4dce642aa9616ca12dd59fa3880afd1cbadc9b8853b->leave($__internal_4f1be0123e2b18ae7a74f4dce642aa9616ca12dd59fa3880afd1cbadc9b8853b_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedGameinjectionBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello {{ user.username }} :<br>

{{ user.dateDeNaissance | date }}
<br>
", "EloboostedGameinjectionBundle:Default:index.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\GameinjectionBundle/Resources/views/Default/index.html.twig");
    }
}
