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
        $__internal_4e22dc48c1bf838e42c22001cb9357b432a4c9ad30de96c96880de2849362b45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e22dc48c1bf838e42c22001cb9357b432a4c9ad30de96c96880de2849362b45->enter($__internal_4e22dc48c1bf838e42c22001cb9357b432a4c9ad30de96c96880de2849362b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_f2c19bf0cdf8cd8ee3aee6f04b1d317bb631018d8ce75af70b21555556b28104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c19bf0cdf8cd8ee3aee6f04b1d317bb631018d8ce75af70b21555556b28104->enter($__internal_f2c19bf0cdf8cd8ee3aee6f04b1d317bb631018d8ce75af70b21555556b28104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_4e22dc48c1bf838e42c22001cb9357b432a4c9ad30de96c96880de2849362b45->leave($__internal_4e22dc48c1bf838e42c22001cb9357b432a4c9ad30de96c96880de2849362b45_prof);

        
        $__internal_f2c19bf0cdf8cd8ee3aee6f04b1d317bb631018d8ce75af70b21555556b28104->leave($__internal_f2c19bf0cdf8cd8ee3aee6f04b1d317bb631018d8ce75af70b21555556b28104_prof);

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
", "@Framework/FormTable/form_widget_compound.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
