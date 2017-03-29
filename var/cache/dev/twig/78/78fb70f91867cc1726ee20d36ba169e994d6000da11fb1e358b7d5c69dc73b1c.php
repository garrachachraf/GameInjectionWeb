<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_ae87d11f28cfb6b7eed508fce4eae0d4798bbfb9024b5b0b099f87c39fa7637e extends Twig_Template
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
        $__internal_149e7bb20b9684f37a8e40efb76fe90a070145b7546bc86ec37eed93bff9d828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_149e7bb20b9684f37a8e40efb76fe90a070145b7546bc86ec37eed93bff9d828->enter($__internal_149e7bb20b9684f37a8e40efb76fe90a070145b7546bc86ec37eed93bff9d828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_7708cbf879e62f2021ba2b8b42111f9a66c5a2226b1a0224472d71c9049b5e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7708cbf879e62f2021ba2b8b42111f9a66c5a2226b1a0224472d71c9049b5e18->enter($__internal_7708cbf879e62f2021ba2b8b42111f9a66c5a2226b1a0224472d71c9049b5e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_149e7bb20b9684f37a8e40efb76fe90a070145b7546bc86ec37eed93bff9d828->leave($__internal_149e7bb20b9684f37a8e40efb76fe90a070145b7546bc86ec37eed93bff9d828_prof);

        
        $__internal_7708cbf879e62f2021ba2b8b42111f9a66c5a2226b1a0224472d71c9049b5e18->leave($__internal_7708cbf879e62f2021ba2b8b42111f9a66c5a2226b1a0224472d71c9049b5e18_prof);

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
