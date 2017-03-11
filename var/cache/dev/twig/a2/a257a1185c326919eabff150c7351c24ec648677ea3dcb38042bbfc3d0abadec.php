<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_a1fdff7aafdd46a148527a476088d3fe0b3e05781102cd8f9aad4af5b4799ef9 extends Twig_Template
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
        $__internal_857f4a8337885d583987b278b2d4388720cdd6ba147cbd01570bc8b8c6fc2202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_857f4a8337885d583987b278b2d4388720cdd6ba147cbd01570bc8b8c6fc2202->enter($__internal_857f4a8337885d583987b278b2d4388720cdd6ba147cbd01570bc8b8c6fc2202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_87a713467fa900e420f8acb0c81f5a3e5837316c68ad49966ad3d2d9fc9ebbaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a713467fa900e420f8acb0c81f5a3e5837316c68ad49966ad3d2d9fc9ebbaa->enter($__internal_87a713467fa900e420f8acb0c81f5a3e5837316c68ad49966ad3d2d9fc9ebbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_857f4a8337885d583987b278b2d4388720cdd6ba147cbd01570bc8b8c6fc2202->leave($__internal_857f4a8337885d583987b278b2d4388720cdd6ba147cbd01570bc8b8c6fc2202_prof);

        
        $__internal_87a713467fa900e420f8acb0c81f5a3e5837316c68ad49966ad3d2d9fc9ebbaa->leave($__internal_87a713467fa900e420f8acb0c81f5a3e5837316c68ad49966ad3d2d9fc9ebbaa_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
