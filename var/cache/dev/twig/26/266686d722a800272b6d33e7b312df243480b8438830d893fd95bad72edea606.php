<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_51b974c258e61ce570e51efbfa89b062dac61d6f46284556c135b76bbe25e88d extends Twig_Template
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
        $__internal_31857912d14f0c2f2725360a0faa6696927e729515e6a0fd2e3d2c0e777d3967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31857912d14f0c2f2725360a0faa6696927e729515e6a0fd2e3d2c0e777d3967->enter($__internal_31857912d14f0c2f2725360a0faa6696927e729515e6a0fd2e3d2c0e777d3967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_adb64fd61fea0b5e9b978224c6fb377d117f28c2f1ecfc6650dc2cef1262cd93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb64fd61fea0b5e9b978224c6fb377d117f28c2f1ecfc6650dc2cef1262cd93->enter($__internal_adb64fd61fea0b5e9b978224c6fb377d117f28c2f1ecfc6650dc2cef1262cd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_31857912d14f0c2f2725360a0faa6696927e729515e6a0fd2e3d2c0e777d3967->leave($__internal_31857912d14f0c2f2725360a0faa6696927e729515e6a0fd2e3d2c0e777d3967_prof);

        
        $__internal_adb64fd61fea0b5e9b978224c6fb377d117f28c2f1ecfc6650dc2cef1262cd93->leave($__internal_adb64fd61fea0b5e9b978224c6fb377d117f28c2f1ecfc6650dc2cef1262cd93_prof);

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
", "@Framework/FormTable/form_widget_compound.html.php", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
