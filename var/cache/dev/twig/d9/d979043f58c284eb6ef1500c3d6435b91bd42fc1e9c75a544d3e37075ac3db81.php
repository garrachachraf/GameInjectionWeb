<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3006a7623bc0d3d900b89640a3eb95169bbf66e2dfa4c530611a78185adfe994 extends Twig_Template
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
        $__internal_fdcde1c49ab86aa380681c56620e9ab055c13c12111fed9b758864b609a056d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdcde1c49ab86aa380681c56620e9ab055c13c12111fed9b758864b609a056d8->enter($__internal_fdcde1c49ab86aa380681c56620e9ab055c13c12111fed9b758864b609a056d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_fe522339dbf540d92a2a36f9cabff012382e9364491e16a0949c633869415ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe522339dbf540d92a2a36f9cabff012382e9364491e16a0949c633869415ffe->enter($__internal_fe522339dbf540d92a2a36f9cabff012382e9364491e16a0949c633869415ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_fdcde1c49ab86aa380681c56620e9ab055c13c12111fed9b758864b609a056d8->leave($__internal_fdcde1c49ab86aa380681c56620e9ab055c13c12111fed9b758864b609a056d8_prof);

        
        $__internal_fe522339dbf540d92a2a36f9cabff012382e9364491e16a0949c633869415ffe->leave($__internal_fe522339dbf540d92a2a36f9cabff012382e9364491e16a0949c633869415ffe_prof);

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
", "@Framework/Form/password_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
