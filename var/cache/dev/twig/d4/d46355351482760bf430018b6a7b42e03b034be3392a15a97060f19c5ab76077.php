<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_bacdfed3f7b68347888adc7f5dfb3c2d6bc2f0bd47a454045f76a7afb888e784 extends Twig_Template
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
        $__internal_4f8783da45d7ce4bfefd795cf4c8f3cfe6f6cfc93876098ff682e631142728d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f8783da45d7ce4bfefd795cf4c8f3cfe6f6cfc93876098ff682e631142728d0->enter($__internal_4f8783da45d7ce4bfefd795cf4c8f3cfe6f6cfc93876098ff682e631142728d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_a2cb925fccdbf3358db4f0912ba944c4761bab8912c1f21dec6961fb6d9e3538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2cb925fccdbf3358db4f0912ba944c4761bab8912c1f21dec6961fb6d9e3538->enter($__internal_a2cb925fccdbf3358db4f0912ba944c4761bab8912c1f21dec6961fb6d9e3538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_4f8783da45d7ce4bfefd795cf4c8f3cfe6f6cfc93876098ff682e631142728d0->leave($__internal_4f8783da45d7ce4bfefd795cf4c8f3cfe6f6cfc93876098ff682e631142728d0_prof);

        
        $__internal_a2cb925fccdbf3358db4f0912ba944c4761bab8912c1f21dec6961fb6d9e3538->leave($__internal_a2cb925fccdbf3358db4f0912ba944c4761bab8912c1f21dec6961fb6d9e3538_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
