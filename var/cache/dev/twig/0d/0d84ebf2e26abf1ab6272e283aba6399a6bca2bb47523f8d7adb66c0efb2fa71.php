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
        $__internal_a5ddd9997b0bb5bb9b5b2c2e14e2c5ad6b6143233ddfe31f7a83b92a1115bacc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5ddd9997b0bb5bb9b5b2c2e14e2c5ad6b6143233ddfe31f7a83b92a1115bacc->enter($__internal_a5ddd9997b0bb5bb9b5b2c2e14e2c5ad6b6143233ddfe31f7a83b92a1115bacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_30d12b6f7d61a39d7f796d6169f9609fdd7788c14d24760c7954e2aacc27608c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d12b6f7d61a39d7f796d6169f9609fdd7788c14d24760c7954e2aacc27608c->enter($__internal_30d12b6f7d61a39d7f796d6169f9609fdd7788c14d24760c7954e2aacc27608c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_a5ddd9997b0bb5bb9b5b2c2e14e2c5ad6b6143233ddfe31f7a83b92a1115bacc->leave($__internal_a5ddd9997b0bb5bb9b5b2c2e14e2c5ad6b6143233ddfe31f7a83b92a1115bacc_prof);

        
        $__internal_30d12b6f7d61a39d7f796d6169f9609fdd7788c14d24760c7954e2aacc27608c->leave($__internal_30d12b6f7d61a39d7f796d6169f9609fdd7788c14d24760c7954e2aacc27608c_prof);

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
