<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_4a6e514009257c8e259ba5894fd7591ba78132e204adce774346e76f2bf29a3c extends Twig_Template
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
        $__internal_4dac01c65ccce4ffa3e2d937050ac783d2b72c1dd50dac2883dbd64de3e19798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dac01c65ccce4ffa3e2d937050ac783d2b72c1dd50dac2883dbd64de3e19798->enter($__internal_4dac01c65ccce4ffa3e2d937050ac783d2b72c1dd50dac2883dbd64de3e19798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_fc0b1a2288b0b754de48f6233438b192cbd2473bc9bc2f5bf061c0edf47a728d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc0b1a2288b0b754de48f6233438b192cbd2473bc9bc2f5bf061c0edf47a728d->enter($__internal_fc0b1a2288b0b754de48f6233438b192cbd2473bc9bc2f5bf061c0edf47a728d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_4dac01c65ccce4ffa3e2d937050ac783d2b72c1dd50dac2883dbd64de3e19798->leave($__internal_4dac01c65ccce4ffa3e2d937050ac783d2b72c1dd50dac2883dbd64de3e19798_prof);

        
        $__internal_fc0b1a2288b0b754de48f6233438b192cbd2473bc9bc2f5bf061c0edf47a728d->leave($__internal_fc0b1a2288b0b754de48f6233438b192cbd2473bc9bc2f5bf061c0edf47a728d_prof);

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
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
