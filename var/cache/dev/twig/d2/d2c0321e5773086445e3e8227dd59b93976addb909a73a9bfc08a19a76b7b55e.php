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
        $__internal_23de36b8d18e80e5cef088e2376bdc0571e0aceba82e149bfc18fcc9c6a7abd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23de36b8d18e80e5cef088e2376bdc0571e0aceba82e149bfc18fcc9c6a7abd1->enter($__internal_23de36b8d18e80e5cef088e2376bdc0571e0aceba82e149bfc18fcc9c6a7abd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_f9f9a5ce71e1ea99b9e3dda064a16453c7fa9dc056c9de42e55092885b09636f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f9a5ce71e1ea99b9e3dda064a16453c7fa9dc056c9de42e55092885b09636f->enter($__internal_f9f9a5ce71e1ea99b9e3dda064a16453c7fa9dc056c9de42e55092885b09636f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_23de36b8d18e80e5cef088e2376bdc0571e0aceba82e149bfc18fcc9c6a7abd1->leave($__internal_23de36b8d18e80e5cef088e2376bdc0571e0aceba82e149bfc18fcc9c6a7abd1_prof);

        
        $__internal_f9f9a5ce71e1ea99b9e3dda064a16453c7fa9dc056c9de42e55092885b09636f->leave($__internal_f9f9a5ce71e1ea99b9e3dda064a16453c7fa9dc056c9de42e55092885b09636f_prof);

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
