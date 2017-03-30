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
        $__internal_dcd682cddcc064bb5e1636b4cc76a9e3bf8871ebbe3fe6f7d6a3d794faab4d38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcd682cddcc064bb5e1636b4cc76a9e3bf8871ebbe3fe6f7d6a3d794faab4d38->enter($__internal_dcd682cddcc064bb5e1636b4cc76a9e3bf8871ebbe3fe6f7d6a3d794faab4d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_65665d32ac05fa4b6978424c7d0f5d61d2743512b1c65bcdd0d292e7bed97224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65665d32ac05fa4b6978424c7d0f5d61d2743512b1c65bcdd0d292e7bed97224->enter($__internal_65665d32ac05fa4b6978424c7d0f5d61d2743512b1c65bcdd0d292e7bed97224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_dcd682cddcc064bb5e1636b4cc76a9e3bf8871ebbe3fe6f7d6a3d794faab4d38->leave($__internal_dcd682cddcc064bb5e1636b4cc76a9e3bf8871ebbe3fe6f7d6a3d794faab4d38_prof);

        
        $__internal_65665d32ac05fa4b6978424c7d0f5d61d2743512b1c65bcdd0d292e7bed97224->leave($__internal_65665d32ac05fa4b6978424c7d0f5d61d2743512b1c65bcdd0d292e7bed97224_prof);

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
