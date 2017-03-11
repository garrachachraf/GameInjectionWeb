<?php

/* EloboostedGameinjectionBundle:Default:index.html.twig */
class __TwigTemplate_4e4ddc5868d2b35108103271f151bbaf6c531343e73bbf08a648b93de4c5fabf extends Twig_Template
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
        $__internal_9677712a27312b6969d1fbeae9b6244bc4a81cd5da9a600fb943584f40f8947b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9677712a27312b6969d1fbeae9b6244bc4a81cd5da9a600fb943584f40f8947b->enter($__internal_9677712a27312b6969d1fbeae9b6244bc4a81cd5da9a600fb943584f40f8947b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedGameinjectionBundle:Default:index.html.twig"));

        $__internal_145f1686c7c71ad17552f75b47f2ceb65b7e1106d41e0c003241b661fbaf5e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_145f1686c7c71ad17552f75b47f2ceb65b7e1106d41e0c003241b661fbaf5e62->enter($__internal_145f1686c7c71ad17552f75b47f2ceb65b7e1106d41e0c003241b661fbaf5e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedGameinjectionBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_9677712a27312b6969d1fbeae9b6244bc4a81cd5da9a600fb943584f40f8947b->leave($__internal_9677712a27312b6969d1fbeae9b6244bc4a81cd5da9a600fb943584f40f8947b_prof);

        
        $__internal_145f1686c7c71ad17552f75b47f2ceb65b7e1106d41e0c003241b661fbaf5e62->leave($__internal_145f1686c7c71ad17552f75b47f2ceb65b7e1106d41e0c003241b661fbaf5e62_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedGameinjectionBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "EloboostedGameinjectionBundle:Default:index.html.twig", "/Library/WebServer/Documents/sprintweb/src/Eloboosted/GameinjectionBundle/Resources/views/Default/index.html.twig");
    }
}
