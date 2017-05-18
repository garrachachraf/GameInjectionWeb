<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_0c770a6dc5e6970bde4145d582941ca659eeb685835d8fc13e6489e21777c9a7 extends Twig_Template
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
        $__internal_575b259de98a4e53a612d9c4e8c687ca3deaac92337a21e2060cfb14a4db91fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_575b259de98a4e53a612d9c4e8c687ca3deaac92337a21e2060cfb14a4db91fc->enter($__internal_575b259de98a4e53a612d9c4e8c687ca3deaac92337a21e2060cfb14a4db91fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_3f302ecd9453fdab79927059412c9726a97299c2c2a4264863017c70c5aac784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f302ecd9453fdab79927059412c9726a97299c2c2a4264863017c70c5aac784->enter($__internal_3f302ecd9453fdab79927059412c9726a97299c2c2a4264863017c70c5aac784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_575b259de98a4e53a612d9c4e8c687ca3deaac92337a21e2060cfb14a4db91fc->leave($__internal_575b259de98a4e53a612d9c4e8c687ca3deaac92337a21e2060cfb14a4db91fc_prof);

        
        $__internal_3f302ecd9453fdab79927059412c9726a97299c2c2a4264863017c70c5aac784->leave($__internal_3f302ecd9453fdab79927059412c9726a97299c2c2a4264863017c70c5aac784_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
