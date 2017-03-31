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
        $__internal_bb19fd78658e329f872bc740dfc3b6bf20e464f5122ea1c02c4752ddd65d8fe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb19fd78658e329f872bc740dfc3b6bf20e464f5122ea1c02c4752ddd65d8fe3->enter($__internal_bb19fd78658e329f872bc740dfc3b6bf20e464f5122ea1c02c4752ddd65d8fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_e4a3469be16b16b9f6543c2182c3cdc304989f396d78f82fe3afd9a39ff1c9db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a3469be16b16b9f6543c2182c3cdc304989f396d78f82fe3afd9a39ff1c9db->enter($__internal_e4a3469be16b16b9f6543c2182c3cdc304989f396d78f82fe3afd9a39ff1c9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_bb19fd78658e329f872bc740dfc3b6bf20e464f5122ea1c02c4752ddd65d8fe3->leave($__internal_bb19fd78658e329f872bc740dfc3b6bf20e464f5122ea1c02c4752ddd65d8fe3_prof);

        
        $__internal_e4a3469be16b16b9f6543c2182c3cdc304989f396d78f82fe3afd9a39ff1c9db->leave($__internal_e4a3469be16b16b9f6543c2182c3cdc304989f396d78f82fe3afd9a39ff1c9db_prof);

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
