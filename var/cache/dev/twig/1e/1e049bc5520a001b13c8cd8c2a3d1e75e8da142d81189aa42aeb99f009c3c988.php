<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_c056c8a56280ec1e36bb26e6d4aeee590f26b0e947e0ed3576d6230e1125e8b7 extends Twig_Template
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
        $__internal_4f5dcac08c5f8ff6e4636734800613871679ea4c06ea585de11fee83944d0fb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f5dcac08c5f8ff6e4636734800613871679ea4c06ea585de11fee83944d0fb5->enter($__internal_4f5dcac08c5f8ff6e4636734800613871679ea4c06ea585de11fee83944d0fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_a3f52de446566da30a4303a0ab8ded69e0e215dd3c76a34c082ed03f9d850c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f52de446566da30a4303a0ab8ded69e0e215dd3c76a34c082ed03f9d850c6c->enter($__internal_a3f52de446566da30a4303a0ab8ded69e0e215dd3c76a34c082ed03f9d850c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_4f5dcac08c5f8ff6e4636734800613871679ea4c06ea585de11fee83944d0fb5->leave($__internal_4f5dcac08c5f8ff6e4636734800613871679ea4c06ea585de11fee83944d0fb5_prof);

        
        $__internal_a3f52de446566da30a4303a0ab8ded69e0e215dd3c76a34c082ed03f9d850c6c->leave($__internal_a3f52de446566da30a4303a0ab8ded69e0e215dd3c76a34c082ed03f9d850c6c_prof);

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
", "@Framework/Form/number_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
