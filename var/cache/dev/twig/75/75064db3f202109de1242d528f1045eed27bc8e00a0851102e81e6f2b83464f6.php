<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_510d7eca1837671ec670741800b0497fa8c0ce5609340e06919fdaa9cd443f7f extends Twig_Template
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
        $__internal_7b46c719789282ed641ecc8f2e5ddcf4596d1c29a7db1c1321ebebce75836730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b46c719789282ed641ecc8f2e5ddcf4596d1c29a7db1c1321ebebce75836730->enter($__internal_7b46c719789282ed641ecc8f2e5ddcf4596d1c29a7db1c1321ebebce75836730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_a991b622446c44613d08203dc4f73f93028557a11d5e49832c1532c3b4e04540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a991b622446c44613d08203dc4f73f93028557a11d5e49832c1532c3b4e04540->enter($__internal_a991b622446c44613d08203dc4f73f93028557a11d5e49832c1532c3b4e04540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_7b46c719789282ed641ecc8f2e5ddcf4596d1c29a7db1c1321ebebce75836730->leave($__internal_7b46c719789282ed641ecc8f2e5ddcf4596d1c29a7db1c1321ebebce75836730_prof);

        
        $__internal_a991b622446c44613d08203dc4f73f93028557a11d5e49832c1532c3b4e04540->leave($__internal_a991b622446c44613d08203dc4f73f93028557a11d5e49832c1532c3b4e04540_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
