<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_d8fd8ee81abe48459c960969ac57b6d6c0306b08a6692daff1e4dbe26134fa18 extends Twig_Template
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
        $__internal_d18920d3d9244f6caf7641e10ed50571b8f2752c109759b75810b74ab47f08c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d18920d3d9244f6caf7641e10ed50571b8f2752c109759b75810b74ab47f08c1->enter($__internal_d18920d3d9244f6caf7641e10ed50571b8f2752c109759b75810b74ab47f08c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_88d59097e3f877a15effa172dad6d7316d10297e0bf646200e864a2331c99e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d59097e3f877a15effa172dad6d7316d10297e0bf646200e864a2331c99e38->enter($__internal_88d59097e3f877a15effa172dad6d7316d10297e0bf646200e864a2331c99e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d18920d3d9244f6caf7641e10ed50571b8f2752c109759b75810b74ab47f08c1->leave($__internal_d18920d3d9244f6caf7641e10ed50571b8f2752c109759b75810b74ab47f08c1_prof);

        
        $__internal_88d59097e3f877a15effa172dad6d7316d10297e0bf646200e864a2331c99e38->leave($__internal_88d59097e3f877a15effa172dad6d7316d10297e0bf646200e864a2331c99e38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
