<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_53431dc3df8d939f5cf59e20bdc53842aa11c8fdb3d42a6c45a17a8bf937213f extends Twig_Template
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
        $__internal_b3dd82488c0c02676c6004d8e9fa9e208f66350bb4bda77f20d9c5441e287d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3dd82488c0c02676c6004d8e9fa9e208f66350bb4bda77f20d9c5441e287d4a->enter($__internal_b3dd82488c0c02676c6004d8e9fa9e208f66350bb4bda77f20d9c5441e287d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_3176ff1ac3f5d32514890479429d6e7be5d975671aacb533dfa61b9dda4a7640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3176ff1ac3f5d32514890479429d6e7be5d975671aacb533dfa61b9dda4a7640->enter($__internal_3176ff1ac3f5d32514890479429d6e7be5d975671aacb533dfa61b9dda4a7640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b3dd82488c0c02676c6004d8e9fa9e208f66350bb4bda77f20d9c5441e287d4a->leave($__internal_b3dd82488c0c02676c6004d8e9fa9e208f66350bb4bda77f20d9c5441e287d4a_prof);

        
        $__internal_3176ff1ac3f5d32514890479429d6e7be5d975671aacb533dfa61b9dda4a7640->leave($__internal_3176ff1ac3f5d32514890479429d6e7be5d975671aacb533dfa61b9dda4a7640_prof);

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
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
