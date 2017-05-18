<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_87c3ec24139727b46832951ad3de4c96377da9f063d6ef32bf05d92d9d282ae0 extends Twig_Template
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
        $__internal_400577183a514a07aea65ead254aa37ebcff55a2df84f21efd4acd233a4be94e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_400577183a514a07aea65ead254aa37ebcff55a2df84f21efd4acd233a4be94e->enter($__internal_400577183a514a07aea65ead254aa37ebcff55a2df84f21efd4acd233a4be94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_17c4a89fc4b301d49c663a90f5c227bf23c708c62bc8c82d175140367ddd9259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c4a89fc4b301d49c663a90f5c227bf23c708c62bc8c82d175140367ddd9259->enter($__internal_17c4a89fc4b301d49c663a90f5c227bf23c708c62bc8c82d175140367ddd9259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_400577183a514a07aea65ead254aa37ebcff55a2df84f21efd4acd233a4be94e->leave($__internal_400577183a514a07aea65ead254aa37ebcff55a2df84f21efd4acd233a4be94e_prof);

        
        $__internal_17c4a89fc4b301d49c663a90f5c227bf23c708c62bc8c82d175140367ddd9259->leave($__internal_17c4a89fc4b301d49c663a90f5c227bf23c708c62bc8c82d175140367ddd9259_prof);

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
", "@Framework/FormTable/form_widget_compound.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
