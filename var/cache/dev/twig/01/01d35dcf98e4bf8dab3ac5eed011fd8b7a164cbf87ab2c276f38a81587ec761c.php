<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_3de5f78f9eb4cc47f605f5264e246094a09aaca6af48a5384159db0fe7cabce9 extends Twig_Template
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
        $__internal_c2da2162268449f3fe3c973f9944090ab3e688eb5b0d2ed501ad7ae80ccef733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2da2162268449f3fe3c973f9944090ab3e688eb5b0d2ed501ad7ae80ccef733->enter($__internal_c2da2162268449f3fe3c973f9944090ab3e688eb5b0d2ed501ad7ae80ccef733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_68c24f186e732e99fef15e338b0fb468834bead1f24cf278dea53559d40faa89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68c24f186e732e99fef15e338b0fb468834bead1f24cf278dea53559d40faa89->enter($__internal_68c24f186e732e99fef15e338b0fb468834bead1f24cf278dea53559d40faa89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_c2da2162268449f3fe3c973f9944090ab3e688eb5b0d2ed501ad7ae80ccef733->leave($__internal_c2da2162268449f3fe3c973f9944090ab3e688eb5b0d2ed501ad7ae80ccef733_prof);

        
        $__internal_68c24f186e732e99fef15e338b0fb468834bead1f24cf278dea53559d40faa89->leave($__internal_68c24f186e732e99fef15e338b0fb468834bead1f24cf278dea53559d40faa89_prof);

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
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}