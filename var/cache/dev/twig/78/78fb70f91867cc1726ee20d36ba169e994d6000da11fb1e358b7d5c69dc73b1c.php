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
        $__internal_1115f6a6a33b085282e9a6a23d9a8ea0f85a13c63473bd3d26c1499e49430f95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1115f6a6a33b085282e9a6a23d9a8ea0f85a13c63473bd3d26c1499e49430f95->enter($__internal_1115f6a6a33b085282e9a6a23d9a8ea0f85a13c63473bd3d26c1499e49430f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_3732508c1bd18e7600fed46fd01857a2ad396607c80a04ad5fb09d3effadbc78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3732508c1bd18e7600fed46fd01857a2ad396607c80a04ad5fb09d3effadbc78->enter($__internal_3732508c1bd18e7600fed46fd01857a2ad396607c80a04ad5fb09d3effadbc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_1115f6a6a33b085282e9a6a23d9a8ea0f85a13c63473bd3d26c1499e49430f95->leave($__internal_1115f6a6a33b085282e9a6a23d9a8ea0f85a13c63473bd3d26c1499e49430f95_prof);

        
        $__internal_3732508c1bd18e7600fed46fd01857a2ad396607c80a04ad5fb09d3effadbc78->leave($__internal_3732508c1bd18e7600fed46fd01857a2ad396607c80a04ad5fb09d3effadbc78_prof);

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
