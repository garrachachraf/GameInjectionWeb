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
        $__internal_dbdecfd0977de28e5269afd551d06cd3dce5ee0428dc548551f1889e72f43e53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbdecfd0977de28e5269afd551d06cd3dce5ee0428dc548551f1889e72f43e53->enter($__internal_dbdecfd0977de28e5269afd551d06cd3dce5ee0428dc548551f1889e72f43e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_6d3c67ae8f4a107f1a234e16382f56d06cf88f4eb00cad4e8fc72bfc585125cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d3c67ae8f4a107f1a234e16382f56d06cf88f4eb00cad4e8fc72bfc585125cc->enter($__internal_6d3c67ae8f4a107f1a234e16382f56d06cf88f4eb00cad4e8fc72bfc585125cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_dbdecfd0977de28e5269afd551d06cd3dce5ee0428dc548551f1889e72f43e53->leave($__internal_dbdecfd0977de28e5269afd551d06cd3dce5ee0428dc548551f1889e72f43e53_prof);

        
        $__internal_6d3c67ae8f4a107f1a234e16382f56d06cf88f4eb00cad4e8fc72bfc585125cc->leave($__internal_6d3c67ae8f4a107f1a234e16382f56d06cf88f4eb00cad4e8fc72bfc585125cc_prof);

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
