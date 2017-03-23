<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_bbca4da8d2a18958e352d3587d84ed75c5d17dfb5e8897e3331ecaa8f83ed884 extends Twig_Template
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
        $__internal_28e0167ff25487af82c1a7ffa886a240e0fe05c1447b97701c8f4df58e65aabd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28e0167ff25487af82c1a7ffa886a240e0fe05c1447b97701c8f4df58e65aabd->enter($__internal_28e0167ff25487af82c1a7ffa886a240e0fe05c1447b97701c8f4df58e65aabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_a151098064602ca4095144c2e65d593d483b80b815ef9250468eec663aaacec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a151098064602ca4095144c2e65d593d483b80b815ef9250468eec663aaacec8->enter($__internal_a151098064602ca4095144c2e65d593d483b80b815ef9250468eec663aaacec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_28e0167ff25487af82c1a7ffa886a240e0fe05c1447b97701c8f4df58e65aabd->leave($__internal_28e0167ff25487af82c1a7ffa886a240e0fe05c1447b97701c8f4df58e65aabd_prof);

        
        $__internal_a151098064602ca4095144c2e65d593d483b80b815ef9250468eec663aaacec8->leave($__internal_a151098064602ca4095144c2e65d593d483b80b815ef9250468eec663aaacec8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
