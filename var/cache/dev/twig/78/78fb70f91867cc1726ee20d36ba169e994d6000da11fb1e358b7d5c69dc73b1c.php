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
        $__internal_dcbd4a1dff568a58ed556d1a145a3839bf5636d6bab87c52122acf6de9dd0fbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcbd4a1dff568a58ed556d1a145a3839bf5636d6bab87c52122acf6de9dd0fbe->enter($__internal_dcbd4a1dff568a58ed556d1a145a3839bf5636d6bab87c52122acf6de9dd0fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_9bd72e13da28133427ab7f71625545599af2b5a377b655071e4c50e232136edf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd72e13da28133427ab7f71625545599af2b5a377b655071e4c50e232136edf->enter($__internal_9bd72e13da28133427ab7f71625545599af2b5a377b655071e4c50e232136edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_dcbd4a1dff568a58ed556d1a145a3839bf5636d6bab87c52122acf6de9dd0fbe->leave($__internal_dcbd4a1dff568a58ed556d1a145a3839bf5636d6bab87c52122acf6de9dd0fbe_prof);

        
        $__internal_9bd72e13da28133427ab7f71625545599af2b5a377b655071e4c50e232136edf->leave($__internal_9bd72e13da28133427ab7f71625545599af2b5a377b655071e4c50e232136edf_prof);

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
