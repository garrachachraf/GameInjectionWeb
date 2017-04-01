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
        $__internal_4672e8c557d2a4c50ecc98b424564881b409800b8c6c6c9f8ad45999531b882b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4672e8c557d2a4c50ecc98b424564881b409800b8c6c6c9f8ad45999531b882b->enter($__internal_4672e8c557d2a4c50ecc98b424564881b409800b8c6c6c9f8ad45999531b882b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_85d1e148da76ec5c18c75ed4ab75ce04207989a9708264d40048b5b16dc6ff3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d1e148da76ec5c18c75ed4ab75ce04207989a9708264d40048b5b16dc6ff3d->enter($__internal_85d1e148da76ec5c18c75ed4ab75ce04207989a9708264d40048b5b16dc6ff3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_4672e8c557d2a4c50ecc98b424564881b409800b8c6c6c9f8ad45999531b882b->leave($__internal_4672e8c557d2a4c50ecc98b424564881b409800b8c6c6c9f8ad45999531b882b_prof);

        
        $__internal_85d1e148da76ec5c18c75ed4ab75ce04207989a9708264d40048b5b16dc6ff3d->leave($__internal_85d1e148da76ec5c18c75ed4ab75ce04207989a9708264d40048b5b16dc6ff3d_prof);

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
