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
        $__internal_8a5c7cfe047643c6e39f90647efbca8a293217843c1bc05cae41bbf3c0eca757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a5c7cfe047643c6e39f90647efbca8a293217843c1bc05cae41bbf3c0eca757->enter($__internal_8a5c7cfe047643c6e39f90647efbca8a293217843c1bc05cae41bbf3c0eca757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_aa8a7b90e9b90cae5a028bfc0076850e59988944f45b15d8b02ae6da5f1008f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8a7b90e9b90cae5a028bfc0076850e59988944f45b15d8b02ae6da5f1008f8->enter($__internal_aa8a7b90e9b90cae5a028bfc0076850e59988944f45b15d8b02ae6da5f1008f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_8a5c7cfe047643c6e39f90647efbca8a293217843c1bc05cae41bbf3c0eca757->leave($__internal_8a5c7cfe047643c6e39f90647efbca8a293217843c1bc05cae41bbf3c0eca757_prof);

        
        $__internal_aa8a7b90e9b90cae5a028bfc0076850e59988944f45b15d8b02ae6da5f1008f8->leave($__internal_aa8a7b90e9b90cae5a028bfc0076850e59988944f45b15d8b02ae6da5f1008f8_prof);

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
