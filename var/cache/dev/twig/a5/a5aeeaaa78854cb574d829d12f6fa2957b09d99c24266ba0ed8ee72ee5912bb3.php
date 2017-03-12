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
        $__internal_c2c86d396d5be2ef364db6a0eaad9e19425b807870013c6ecf8d17c103bd0642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2c86d396d5be2ef364db6a0eaad9e19425b807870013c6ecf8d17c103bd0642->enter($__internal_c2c86d396d5be2ef364db6a0eaad9e19425b807870013c6ecf8d17c103bd0642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_79074165cd9f13b41c4b302c7612fcba6fab8038ba42ee5c5e2c104874ea6267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79074165cd9f13b41c4b302c7612fcba6fab8038ba42ee5c5e2c104874ea6267->enter($__internal_79074165cd9f13b41c4b302c7612fcba6fab8038ba42ee5c5e2c104874ea6267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c2c86d396d5be2ef364db6a0eaad9e19425b807870013c6ecf8d17c103bd0642->leave($__internal_c2c86d396d5be2ef364db6a0eaad9e19425b807870013c6ecf8d17c103bd0642_prof);

        
        $__internal_79074165cd9f13b41c4b302c7612fcba6fab8038ba42ee5c5e2c104874ea6267->leave($__internal_79074165cd9f13b41c4b302c7612fcba6fab8038ba42ee5c5e2c104874ea6267_prof);

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
", "@Framework/Form/email_widget.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
