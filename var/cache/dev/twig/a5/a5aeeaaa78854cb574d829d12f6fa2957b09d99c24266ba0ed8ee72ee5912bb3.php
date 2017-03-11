<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_bba017919bdf57e282372139b2f1844b2afe0738943686fa027d60ab02ea55f2 extends Twig_Template
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
        $__internal_57b8766e66f190588afce4e6db6f84b8a47b0f8e3b8673917e8a204ad80a28c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57b8766e66f190588afce4e6db6f84b8a47b0f8e3b8673917e8a204ad80a28c6->enter($__internal_57b8766e66f190588afce4e6db6f84b8a47b0f8e3b8673917e8a204ad80a28c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_5a79f70c2668e6983c31e8e20a508b7cffd18f718dad646234b16e006c2ec28d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a79f70c2668e6983c31e8e20a508b7cffd18f718dad646234b16e006c2ec28d->enter($__internal_5a79f70c2668e6983c31e8e20a508b7cffd18f718dad646234b16e006c2ec28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_57b8766e66f190588afce4e6db6f84b8a47b0f8e3b8673917e8a204ad80a28c6->leave($__internal_57b8766e66f190588afce4e6db6f84b8a47b0f8e3b8673917e8a204ad80a28c6_prof);

        
        $__internal_5a79f70c2668e6983c31e8e20a508b7cffd18f718dad646234b16e006c2ec28d->leave($__internal_5a79f70c2668e6983c31e8e20a508b7cffd18f718dad646234b16e006c2ec28d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
