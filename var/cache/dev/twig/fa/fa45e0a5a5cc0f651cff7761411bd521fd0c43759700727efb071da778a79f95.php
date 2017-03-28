<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_3f6414d6fae7dd933978d072ac91598a13f2bcc0288867f6c8b60ab7c1934b32 extends Twig_Template
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
        $__internal_5a1d5b54ced05a4859ee02f77ca4292f1f80bef5ddbe324c5dcea445e3669907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a1d5b54ced05a4859ee02f77ca4292f1f80bef5ddbe324c5dcea445e3669907->enter($__internal_5a1d5b54ced05a4859ee02f77ca4292f1f80bef5ddbe324c5dcea445e3669907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_a247b3f4b2c079c4f8f77f5b57079ae720496198331d9ae9d5ab0708f3a0652c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a247b3f4b2c079c4f8f77f5b57079ae720496198331d9ae9d5ab0708f3a0652c->enter($__internal_a247b3f4b2c079c4f8f77f5b57079ae720496198331d9ae9d5ab0708f3a0652c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_5a1d5b54ced05a4859ee02f77ca4292f1f80bef5ddbe324c5dcea445e3669907->leave($__internal_5a1d5b54ced05a4859ee02f77ca4292f1f80bef5ddbe324c5dcea445e3669907_prof);

        
        $__internal_a247b3f4b2c079c4f8f77f5b57079ae720496198331d9ae9d5ab0708f3a0652c->leave($__internal_a247b3f4b2c079c4f8f77f5b57079ae720496198331d9ae9d5ab0708f3a0652c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
