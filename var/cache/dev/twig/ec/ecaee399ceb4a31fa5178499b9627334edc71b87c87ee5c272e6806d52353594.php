<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_da93badab076d58e183c69d35c44eee527bf462fe0fce1d6d6c9310bda6822b5 extends Twig_Template
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
        $__internal_b6d35f5cd1ee4fff85e14842f59af9182d9336aa218949ad76a60794d4678625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6d35f5cd1ee4fff85e14842f59af9182d9336aa218949ad76a60794d4678625->enter($__internal_b6d35f5cd1ee4fff85e14842f59af9182d9336aa218949ad76a60794d4678625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_4c5b5eb39a9fced3ddc3fc757e94151ea945ab035a5b9038197ea89c22b96cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c5b5eb39a9fced3ddc3fc757e94151ea945ab035a5b9038197ea89c22b96cd8->enter($__internal_4c5b5eb39a9fced3ddc3fc757e94151ea945ab035a5b9038197ea89c22b96cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_b6d35f5cd1ee4fff85e14842f59af9182d9336aa218949ad76a60794d4678625->leave($__internal_b6d35f5cd1ee4fff85e14842f59af9182d9336aa218949ad76a60794d4678625_prof);

        
        $__internal_4c5b5eb39a9fced3ddc3fc757e94151ea945ab035a5b9038197ea89c22b96cd8->leave($__internal_4c5b5eb39a9fced3ddc3fc757e94151ea945ab035a5b9038197ea89c22b96cd8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
