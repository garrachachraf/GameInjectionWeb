<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_dcf09ef115ad475e35053e1e75acf96a2b5ea8f24c2a89da80af25d647968159 extends Twig_Template
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
        $__internal_b142887b4cece7b2044ec8964ddf50d698864fa09662a5f14a1ca0fe3aff9bb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b142887b4cece7b2044ec8964ddf50d698864fa09662a5f14a1ca0fe3aff9bb1->enter($__internal_b142887b4cece7b2044ec8964ddf50d698864fa09662a5f14a1ca0fe3aff9bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_2c0aef0570c4fe76faa747586125b8c0632b316b430fe76ed640ab12008d0cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0aef0570c4fe76faa747586125b8c0632b316b430fe76ed640ab12008d0cfa->enter($__internal_2c0aef0570c4fe76faa747586125b8c0632b316b430fe76ed640ab12008d0cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_b142887b4cece7b2044ec8964ddf50d698864fa09662a5f14a1ca0fe3aff9bb1->leave($__internal_b142887b4cece7b2044ec8964ddf50d698864fa09662a5f14a1ca0fe3aff9bb1_prof);

        
        $__internal_2c0aef0570c4fe76faa747586125b8c0632b316b430fe76ed640ab12008d0cfa->leave($__internal_2c0aef0570c4fe76faa747586125b8c0632b316b430fe76ed640ab12008d0cfa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
