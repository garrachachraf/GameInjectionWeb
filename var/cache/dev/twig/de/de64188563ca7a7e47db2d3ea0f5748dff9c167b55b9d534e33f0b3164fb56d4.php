<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e42e7b521ba07c11a886cc42ae60b0c3a31a3be3f408fa423da136b71101a30c extends Twig_Template
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
        $__internal_be3987b0882235a3c5d5c7132b827c131533d86f2fba6a2c795eeebc8cf1cda1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be3987b0882235a3c5d5c7132b827c131533d86f2fba6a2c795eeebc8cf1cda1->enter($__internal_be3987b0882235a3c5d5c7132b827c131533d86f2fba6a2c795eeebc8cf1cda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_56616a13c38ac70ed13a8e77c49c7e05d07abbb0ba7518fe38c7bcb06c294c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56616a13c38ac70ed13a8e77c49c7e05d07abbb0ba7518fe38c7bcb06c294c6d->enter($__internal_56616a13c38ac70ed13a8e77c49c7e05d07abbb0ba7518fe38c7bcb06c294c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_be3987b0882235a3c5d5c7132b827c131533d86f2fba6a2c795eeebc8cf1cda1->leave($__internal_be3987b0882235a3c5d5c7132b827c131533d86f2fba6a2c795eeebc8cf1cda1_prof);

        
        $__internal_56616a13c38ac70ed13a8e77c49c7e05d07abbb0ba7518fe38c7bcb06c294c6d->leave($__internal_56616a13c38ac70ed13a8e77c49c7e05d07abbb0ba7518fe38c7bcb06c294c6d_prof);

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
