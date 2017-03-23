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
        $__internal_a387a5803208b448efb0c02b67323ece99ed4797e6321042434259ca7fc0d797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a387a5803208b448efb0c02b67323ece99ed4797e6321042434259ca7fc0d797->enter($__internal_a387a5803208b448efb0c02b67323ece99ed4797e6321042434259ca7fc0d797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_228921c772e431e46062a87013fbb99de815f584b540878dd3d7cf688c823378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_228921c772e431e46062a87013fbb99de815f584b540878dd3d7cf688c823378->enter($__internal_228921c772e431e46062a87013fbb99de815f584b540878dd3d7cf688c823378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_a387a5803208b448efb0c02b67323ece99ed4797e6321042434259ca7fc0d797->leave($__internal_a387a5803208b448efb0c02b67323ece99ed4797e6321042434259ca7fc0d797_prof);

        
        $__internal_228921c772e431e46062a87013fbb99de815f584b540878dd3d7cf688c823378->leave($__internal_228921c772e431e46062a87013fbb99de815f584b540878dd3d7cf688c823378_prof);

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
