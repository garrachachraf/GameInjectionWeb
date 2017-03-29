<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_62bacc5a0f9d3df79902b5e33fbbe19d48a29061758406b9db30598371b3c872 extends Twig_Template
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
        $__internal_37a20622e20e8e2396a3c9a6c039829dd02673f9e4fcb2f2fa3ea21d7297323d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a20622e20e8e2396a3c9a6c039829dd02673f9e4fcb2f2fa3ea21d7297323d->enter($__internal_37a20622e20e8e2396a3c9a6c039829dd02673f9e4fcb2f2fa3ea21d7297323d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_4fd82aa76d1480cbdf86e2ae14960333a5876080cc1de44f081fec3bf15f6649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd82aa76d1480cbdf86e2ae14960333a5876080cc1de44f081fec3bf15f6649->enter($__internal_4fd82aa76d1480cbdf86e2ae14960333a5876080cc1de44f081fec3bf15f6649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_37a20622e20e8e2396a3c9a6c039829dd02673f9e4fcb2f2fa3ea21d7297323d->leave($__internal_37a20622e20e8e2396a3c9a6c039829dd02673f9e4fcb2f2fa3ea21d7297323d_prof);

        
        $__internal_4fd82aa76d1480cbdf86e2ae14960333a5876080cc1de44f081fec3bf15f6649->leave($__internal_4fd82aa76d1480cbdf86e2ae14960333a5876080cc1de44f081fec3bf15f6649_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
