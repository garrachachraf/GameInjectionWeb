<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_10a8dd338432586dc9849f8f510309c38d80c04d7438ebeda4474e2563288915 extends Twig_Template
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
        $__internal_bec27e9adc85bfb620bf5dfbdc14da250a738c18744ba6d5a772ccbe8eecad82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bec27e9adc85bfb620bf5dfbdc14da250a738c18744ba6d5a772ccbe8eecad82->enter($__internal_bec27e9adc85bfb620bf5dfbdc14da250a738c18744ba6d5a772ccbe8eecad82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_1a14073b8a382e559c7c49e960df57c8d9ce7342454b339a68256057646f668e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a14073b8a382e559c7c49e960df57c8d9ce7342454b339a68256057646f668e->enter($__internal_1a14073b8a382e559c7c49e960df57c8d9ce7342454b339a68256057646f668e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_bec27e9adc85bfb620bf5dfbdc14da250a738c18744ba6d5a772ccbe8eecad82->leave($__internal_bec27e9adc85bfb620bf5dfbdc14da250a738c18744ba6d5a772ccbe8eecad82_prof);

        
        $__internal_1a14073b8a382e559c7c49e960df57c8d9ce7342454b339a68256057646f668e->leave($__internal_1a14073b8a382e559c7c49e960df57c8d9ce7342454b339a68256057646f668e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
