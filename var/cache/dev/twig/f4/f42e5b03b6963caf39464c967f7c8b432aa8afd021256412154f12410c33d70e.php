<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_4aa0a1014bb89dfefc4ca30cd0aac65fe24148b2e9ea07096eae4e76d841b2f1 extends Twig_Template
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
        $__internal_eae5dac6b5c71e018b6ba5bd469904689c8b2fecf8155b712e866476efc7facb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eae5dac6b5c71e018b6ba5bd469904689c8b2fecf8155b712e866476efc7facb->enter($__internal_eae5dac6b5c71e018b6ba5bd469904689c8b2fecf8155b712e866476efc7facb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_7d45cae2b5d7fa0a036ed2b25f315cf76e17615eb805c1847a7722264e69f32c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d45cae2b5d7fa0a036ed2b25f315cf76e17615eb805c1847a7722264e69f32c->enter($__internal_7d45cae2b5d7fa0a036ed2b25f315cf76e17615eb805c1847a7722264e69f32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_eae5dac6b5c71e018b6ba5bd469904689c8b2fecf8155b712e866476efc7facb->leave($__internal_eae5dac6b5c71e018b6ba5bd469904689c8b2fecf8155b712e866476efc7facb_prof);

        
        $__internal_7d45cae2b5d7fa0a036ed2b25f315cf76e17615eb805c1847a7722264e69f32c->leave($__internal_7d45cae2b5d7fa0a036ed2b25f315cf76e17615eb805c1847a7722264e69f32c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
