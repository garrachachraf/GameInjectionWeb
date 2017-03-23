<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_ea53339c1dc99d0d7ca6633066950be308f813def2e0107f898977ea38646da6 extends Twig_Template
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
        $__internal_d49cf1a44c72a66c82e7f93dad1edc807cabe6361e0da8a10dae9ac8a3b04c8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d49cf1a44c72a66c82e7f93dad1edc807cabe6361e0da8a10dae9ac8a3b04c8a->enter($__internal_d49cf1a44c72a66c82e7f93dad1edc807cabe6361e0da8a10dae9ac8a3b04c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_1874cbd63170ab79effa8b0741d363f8585a781a78bc76b551a05dc9f1d06ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1874cbd63170ab79effa8b0741d363f8585a781a78bc76b551a05dc9f1d06ed4->enter($__internal_1874cbd63170ab79effa8b0741d363f8585a781a78bc76b551a05dc9f1d06ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d49cf1a44c72a66c82e7f93dad1edc807cabe6361e0da8a10dae9ac8a3b04c8a->leave($__internal_d49cf1a44c72a66c82e7f93dad1edc807cabe6361e0da8a10dae9ac8a3b04c8a_prof);

        
        $__internal_1874cbd63170ab79effa8b0741d363f8585a781a78bc76b551a05dc9f1d06ed4->leave($__internal_1874cbd63170ab79effa8b0741d363f8585a781a78bc76b551a05dc9f1d06ed4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
