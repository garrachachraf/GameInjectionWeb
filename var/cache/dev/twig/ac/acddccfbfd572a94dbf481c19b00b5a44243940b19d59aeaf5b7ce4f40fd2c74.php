<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_cb10c9119dc3b4949ad5c63df333ac7e2cbf233da89ceac8a1c9330869360385 extends Twig_Template
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
        $__internal_5679e593898e26dec1fede9cc362afd3f21eb9de34f3ef4401c6077e5595f675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5679e593898e26dec1fede9cc362afd3f21eb9de34f3ef4401c6077e5595f675->enter($__internal_5679e593898e26dec1fede9cc362afd3f21eb9de34f3ef4401c6077e5595f675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_ae936f5adfc6e79a3067bc7f17314eb5457a24e9e1a4b4c1bb94ba8d53433eb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae936f5adfc6e79a3067bc7f17314eb5457a24e9e1a4b4c1bb94ba8d53433eb2->enter($__internal_ae936f5adfc6e79a3067bc7f17314eb5457a24e9e1a4b4c1bb94ba8d53433eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_5679e593898e26dec1fede9cc362afd3f21eb9de34f3ef4401c6077e5595f675->leave($__internal_5679e593898e26dec1fede9cc362afd3f21eb9de34f3ef4401c6077e5595f675_prof);

        
        $__internal_ae936f5adfc6e79a3067bc7f17314eb5457a24e9e1a4b4c1bb94ba8d53433eb2->leave($__internal_ae936f5adfc6e79a3067bc7f17314eb5457a24e9e1a4b4c1bb94ba8d53433eb2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
