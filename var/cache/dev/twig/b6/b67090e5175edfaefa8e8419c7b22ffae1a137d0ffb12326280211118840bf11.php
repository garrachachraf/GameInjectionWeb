<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_57e3bb54b3a720afddc36c24adb8e973ad4fe6dede0def83e25099c71376de83 extends Twig_Template
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
        $__internal_a06caf396269c555d0140dea0c8b662032cec17886b3baab67e724de3e364947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a06caf396269c555d0140dea0c8b662032cec17886b3baab67e724de3e364947->enter($__internal_a06caf396269c555d0140dea0c8b662032cec17886b3baab67e724de3e364947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_1b2f9a5a228be132701e134e972da63292b1456d42d19b0fc8d11b6fb1fa1894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2f9a5a228be132701e134e972da63292b1456d42d19b0fc8d11b6fb1fa1894->enter($__internal_1b2f9a5a228be132701e134e972da63292b1456d42d19b0fc8d11b6fb1fa1894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_a06caf396269c555d0140dea0c8b662032cec17886b3baab67e724de3e364947->leave($__internal_a06caf396269c555d0140dea0c8b662032cec17886b3baab67e724de3e364947_prof);

        
        $__internal_1b2f9a5a228be132701e134e972da63292b1456d42d19b0fc8d11b6fb1fa1894->leave($__internal_1b2f9a5a228be132701e134e972da63292b1456d42d19b0fc8d11b6fb1fa1894_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
