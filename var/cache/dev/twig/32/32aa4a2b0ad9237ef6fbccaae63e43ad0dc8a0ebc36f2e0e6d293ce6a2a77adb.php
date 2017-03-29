<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_fa4fa4b1056622b4f06149b93f4d164d60d139f01b48db60daa10a24454d5f58 extends Twig_Template
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
        $__internal_77bb6a6c2f8f6eb0dfc1f02120692f20b221b5c7350207d57fb1ec2f825bab83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77bb6a6c2f8f6eb0dfc1f02120692f20b221b5c7350207d57fb1ec2f825bab83->enter($__internal_77bb6a6c2f8f6eb0dfc1f02120692f20b221b5c7350207d57fb1ec2f825bab83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_25a3e2768c52338982fa1e85d6accbf0c03696f804769fef983185e1c5f57bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a3e2768c52338982fa1e85d6accbf0c03696f804769fef983185e1c5f57bd6->enter($__internal_25a3e2768c52338982fa1e85d6accbf0c03696f804769fef983185e1c5f57bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_77bb6a6c2f8f6eb0dfc1f02120692f20b221b5c7350207d57fb1ec2f825bab83->leave($__internal_77bb6a6c2f8f6eb0dfc1f02120692f20b221b5c7350207d57fb1ec2f825bab83_prof);

        
        $__internal_25a3e2768c52338982fa1e85d6accbf0c03696f804769fef983185e1c5f57bd6->leave($__internal_25a3e2768c52338982fa1e85d6accbf0c03696f804769fef983185e1c5f57bd6_prof);

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
