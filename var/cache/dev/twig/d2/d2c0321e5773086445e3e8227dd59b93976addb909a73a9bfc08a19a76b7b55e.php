<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_6af53ad795c923292bbddb5aa38f4aaec1efc4ecab9408536aa078f79ef137c2 extends Twig_Template
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
        $__internal_5695b488bba258964775defa82ff3153a4f31a42ec3cb446672177616597e11e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5695b488bba258964775defa82ff3153a4f31a42ec3cb446672177616597e11e->enter($__internal_5695b488bba258964775defa82ff3153a4f31a42ec3cb446672177616597e11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_417afbbbda1a14b9b0acd2f5fde6c0da409c55218b433540f3da7050bbb6970c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_417afbbbda1a14b9b0acd2f5fde6c0da409c55218b433540f3da7050bbb6970c->enter($__internal_417afbbbda1a14b9b0acd2f5fde6c0da409c55218b433540f3da7050bbb6970c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_5695b488bba258964775defa82ff3153a4f31a42ec3cb446672177616597e11e->leave($__internal_5695b488bba258964775defa82ff3153a4f31a42ec3cb446672177616597e11e_prof);

        
        $__internal_417afbbbda1a14b9b0acd2f5fde6c0da409c55218b433540f3da7050bbb6970c->leave($__internal_417afbbbda1a14b9b0acd2f5fde6c0da409c55218b433540f3da7050bbb6970c_prof);

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
", "@Framework/Form/email_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
