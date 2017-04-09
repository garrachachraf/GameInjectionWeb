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
        $__internal_9de8321e857f1bf62331d856ac0e8443edd881b577bf92eb32303e3286a544ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9de8321e857f1bf62331d856ac0e8443edd881b577bf92eb32303e3286a544ce->enter($__internal_9de8321e857f1bf62331d856ac0e8443edd881b577bf92eb32303e3286a544ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_3c52edefc70e15145b084def0381f6ec872e02ee270d17954b2e69b863489fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c52edefc70e15145b084def0381f6ec872e02ee270d17954b2e69b863489fa4->enter($__internal_3c52edefc70e15145b084def0381f6ec872e02ee270d17954b2e69b863489fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9de8321e857f1bf62331d856ac0e8443edd881b577bf92eb32303e3286a544ce->leave($__internal_9de8321e857f1bf62331d856ac0e8443edd881b577bf92eb32303e3286a544ce_prof);

        
        $__internal_3c52edefc70e15145b084def0381f6ec872e02ee270d17954b2e69b863489fa4->leave($__internal_3c52edefc70e15145b084def0381f6ec872e02ee270d17954b2e69b863489fa4_prof);

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
