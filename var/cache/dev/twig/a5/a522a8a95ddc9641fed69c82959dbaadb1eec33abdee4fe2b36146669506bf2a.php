<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_391dc9fc98314afe97aafab381b2951794525ceed5309f09a169ac179cc292e0 extends Twig_Template
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
        $__internal_d1071d1b53b486aa8721828d324c5aa2405f209a7cc92748ec27470f8969fb23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1071d1b53b486aa8721828d324c5aa2405f209a7cc92748ec27470f8969fb23->enter($__internal_d1071d1b53b486aa8721828d324c5aa2405f209a7cc92748ec27470f8969fb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_d587c6cdde6a69bba83b491cef72a1373f22f6409a39196a6d5f847468a98432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d587c6cdde6a69bba83b491cef72a1373f22f6409a39196a6d5f847468a98432->enter($__internal_d587c6cdde6a69bba83b491cef72a1373f22f6409a39196a6d5f847468a98432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d1071d1b53b486aa8721828d324c5aa2405f209a7cc92748ec27470f8969fb23->leave($__internal_d1071d1b53b486aa8721828d324c5aa2405f209a7cc92748ec27470f8969fb23_prof);

        
        $__internal_d587c6cdde6a69bba83b491cef72a1373f22f6409a39196a6d5f847468a98432->leave($__internal_d587c6cdde6a69bba83b491cef72a1373f22f6409a39196a6d5f847468a98432_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
