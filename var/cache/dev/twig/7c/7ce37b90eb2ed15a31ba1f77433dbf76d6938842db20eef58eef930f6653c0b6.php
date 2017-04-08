<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_6ce7234fa29cdb7f52dd71c6a021dc178df8da52ea4437925b379a56f73e85cf extends Twig_Template
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
        $__internal_f37d743d5b5ca85be4243f9047edfe43ba78823256e44f8e7e779ade808c8d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f37d743d5b5ca85be4243f9047edfe43ba78823256e44f8e7e779ade808c8d4b->enter($__internal_f37d743d5b5ca85be4243f9047edfe43ba78823256e44f8e7e779ade808c8d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_4da0662a5a9c5e7632c7ea1c217385f54547d8c0034545e1afa127518a2e25ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da0662a5a9c5e7632c7ea1c217385f54547d8c0034545e1afa127518a2e25ed->enter($__internal_4da0662a5a9c5e7632c7ea1c217385f54547d8c0034545e1afa127518a2e25ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f37d743d5b5ca85be4243f9047edfe43ba78823256e44f8e7e779ade808c8d4b->leave($__internal_f37d743d5b5ca85be4243f9047edfe43ba78823256e44f8e7e779ade808c8d4b_prof);

        
        $__internal_4da0662a5a9c5e7632c7ea1c217385f54547d8c0034545e1afa127518a2e25ed->leave($__internal_4da0662a5a9c5e7632c7ea1c217385f54547d8c0034545e1afa127518a2e25ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
