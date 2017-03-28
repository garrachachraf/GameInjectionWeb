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
        $__internal_543fb436b82afc1b85ac53b2bce3eccb74e0b0af6b503701168a7dbe6889dae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_543fb436b82afc1b85ac53b2bce3eccb74e0b0af6b503701168a7dbe6889dae4->enter($__internal_543fb436b82afc1b85ac53b2bce3eccb74e0b0af6b503701168a7dbe6889dae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_cf5e43ccf56a5884e5e011ce3f7e8323f6bdb1c50424e264aa705e4918e78b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5e43ccf56a5884e5e011ce3f7e8323f6bdb1c50424e264aa705e4918e78b86->enter($__internal_cf5e43ccf56a5884e5e011ce3f7e8323f6bdb1c50424e264aa705e4918e78b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_543fb436b82afc1b85ac53b2bce3eccb74e0b0af6b503701168a7dbe6889dae4->leave($__internal_543fb436b82afc1b85ac53b2bce3eccb74e0b0af6b503701168a7dbe6889dae4_prof);

        
        $__internal_cf5e43ccf56a5884e5e011ce3f7e8323f6bdb1c50424e264aa705e4918e78b86->leave($__internal_cf5e43ccf56a5884e5e011ce3f7e8323f6bdb1c50424e264aa705e4918e78b86_prof);

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
