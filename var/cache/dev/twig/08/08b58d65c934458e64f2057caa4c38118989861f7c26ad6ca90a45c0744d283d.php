<?php

/* EloboostedLoginBundle:Default:index.html.twig */
class __TwigTemplate_e2c3076928afe487009cddf8ec2f1e04d1606d803555339b6aa0758eef5dd84f extends Twig_Template
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
        $__internal_9e7aa3afa9bd5f14ef547774ca3aa75b0ad71edbfc58298a98c75e3daf8e4db3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e7aa3afa9bd5f14ef547774ca3aa75b0ad71edbfc58298a98c75e3daf8e4db3->enter($__internal_9e7aa3afa9bd5f14ef547774ca3aa75b0ad71edbfc58298a98c75e3daf8e4db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:index.html.twig"));

        $__internal_d019cdcde7c263e38af6b9db3b918e898a7aa4a69bfde322ad5850134e09015f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d019cdcde7c263e38af6b9db3b918e898a7aa4a69bfde322ad5850134e09015f->enter($__internal_d019cdcde7c263e38af6b9db3b918e898a7aa4a69bfde322ad5850134e09015f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:index.html.twig"));

        // line 1
        if (((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")) == null)) {
            // line 2
            echo "<h1>erreur</h1>

";
        } else {
            // line 5
            echo "    <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pseudo", array()), "html", null, true);
            echo "</h1>
";
        }
        
        $__internal_9e7aa3afa9bd5f14ef547774ca3aa75b0ad71edbfc58298a98c75e3daf8e4db3->leave($__internal_9e7aa3afa9bd5f14ef547774ca3aa75b0ad71edbfc58298a98c75e3daf8e4db3_prof);

        
        $__internal_d019cdcde7c263e38af6b9db3b918e898a7aa4a69bfde322ad5850134e09015f->leave($__internal_d019cdcde7c263e38af6b9db3b918e898a7aa4a69bfde322ad5850134e09015f_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedLoginBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if user  == null %}
<h1>erreur</h1>

{% else %}
    <h1>{{ user.pseudo }}</h1>
{% endif %}", "EloboostedLoginBundle:Default:index.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\LoginBundle/Resources/views/Default/index.html.twig");
    }
}
