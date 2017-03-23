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
        $__internal_5e3de5916fc21e0f8ee18124b605eea77ec74d62ecbf47c781d235836dc11267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e3de5916fc21e0f8ee18124b605eea77ec74d62ecbf47c781d235836dc11267->enter($__internal_5e3de5916fc21e0f8ee18124b605eea77ec74d62ecbf47c781d235836dc11267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_049686dbcc9f447bef0b01c3e4e35740e580674a87e9ee676db6443715d44143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_049686dbcc9f447bef0b01c3e4e35740e580674a87e9ee676db6443715d44143->enter($__internal_049686dbcc9f447bef0b01c3e4e35740e580674a87e9ee676db6443715d44143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_5e3de5916fc21e0f8ee18124b605eea77ec74d62ecbf47c781d235836dc11267->leave($__internal_5e3de5916fc21e0f8ee18124b605eea77ec74d62ecbf47c781d235836dc11267_prof);

        
        $__internal_049686dbcc9f447bef0b01c3e4e35740e580674a87e9ee676db6443715d44143->leave($__internal_049686dbcc9f447bef0b01c3e4e35740e580674a87e9ee676db6443715d44143_prof);

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
