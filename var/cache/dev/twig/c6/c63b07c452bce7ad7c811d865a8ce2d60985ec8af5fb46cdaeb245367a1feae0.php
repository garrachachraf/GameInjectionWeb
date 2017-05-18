<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_553317293db8e3839fac1fa1ae82284164154978f7d725f04e0b328f4b8ba834 extends Twig_Template
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
        $__internal_7cd39c953ae54381ac15978f98ef91d723b0b86fe26a4949d29ff3c67d13696c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cd39c953ae54381ac15978f98ef91d723b0b86fe26a4949d29ff3c67d13696c->enter($__internal_7cd39c953ae54381ac15978f98ef91d723b0b86fe26a4949d29ff3c67d13696c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_a7234dc4308c8544e545da8a47e57964f453f25e1d0e7126ff7d6e2829ef12c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7234dc4308c8544e545da8a47e57964f453f25e1d0e7126ff7d6e2829ef12c9->enter($__internal_a7234dc4308c8544e545da8a47e57964f453f25e1d0e7126ff7d6e2829ef12c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_7cd39c953ae54381ac15978f98ef91d723b0b86fe26a4949d29ff3c67d13696c->leave($__internal_7cd39c953ae54381ac15978f98ef91d723b0b86fe26a4949d29ff3c67d13696c_prof);

        
        $__internal_a7234dc4308c8544e545da8a47e57964f453f25e1d0e7126ff7d6e2829ef12c9->leave($__internal_a7234dc4308c8544e545da8a47e57964f453f25e1d0e7126ff7d6e2829ef12c9_prof);

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
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
