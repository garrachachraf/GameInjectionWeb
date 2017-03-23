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
        $__internal_616f06b03c4c1d8d2c48b12949d4855267f6d33d4b77bb5b1c3f93b51f7c718c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_616f06b03c4c1d8d2c48b12949d4855267f6d33d4b77bb5b1c3f93b51f7c718c->enter($__internal_616f06b03c4c1d8d2c48b12949d4855267f6d33d4b77bb5b1c3f93b51f7c718c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:index.html.twig"));

        $__internal_95d72075d777bcc6aa30e408e50a55ec23dd5354ed62ec105b3637fee879fc9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d72075d777bcc6aa30e408e50a55ec23dd5354ed62ec105b3637fee879fc9d->enter($__internal_95d72075d777bcc6aa30e408e50a55ec23dd5354ed62ec105b3637fee879fc9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:index.html.twig"));

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
        
        $__internal_616f06b03c4c1d8d2c48b12949d4855267f6d33d4b77bb5b1c3f93b51f7c718c->leave($__internal_616f06b03c4c1d8d2c48b12949d4855267f6d33d4b77bb5b1c3f93b51f7c718c_prof);

        
        $__internal_95d72075d777bcc6aa30e408e50a55ec23dd5354ed62ec105b3637fee879fc9d->leave($__internal_95d72075d777bcc6aa30e408e50a55ec23dd5354ed62ec105b3637fee879fc9d_prof);

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
