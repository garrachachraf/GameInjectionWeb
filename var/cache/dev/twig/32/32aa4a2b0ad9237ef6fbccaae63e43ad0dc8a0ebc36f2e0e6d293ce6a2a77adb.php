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
        $__internal_3a584a4c030ecbe8e9dcd409074d3638496e765e741b3dcdc91fe05d4268b497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a584a4c030ecbe8e9dcd409074d3638496e765e741b3dcdc91fe05d4268b497->enter($__internal_3a584a4c030ecbe8e9dcd409074d3638496e765e741b3dcdc91fe05d4268b497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_850ae95913e7840a3519969d9d91d1877261aeb13ff3fc61d86652b2847bcbb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_850ae95913e7840a3519969d9d91d1877261aeb13ff3fc61d86652b2847bcbb4->enter($__internal_850ae95913e7840a3519969d9d91d1877261aeb13ff3fc61d86652b2847bcbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_3a584a4c030ecbe8e9dcd409074d3638496e765e741b3dcdc91fe05d4268b497->leave($__internal_3a584a4c030ecbe8e9dcd409074d3638496e765e741b3dcdc91fe05d4268b497_prof);

        
        $__internal_850ae95913e7840a3519969d9d91d1877261aeb13ff3fc61d86652b2847bcbb4->leave($__internal_850ae95913e7840a3519969d9d91d1877261aeb13ff3fc61d86652b2847bcbb4_prof);

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
