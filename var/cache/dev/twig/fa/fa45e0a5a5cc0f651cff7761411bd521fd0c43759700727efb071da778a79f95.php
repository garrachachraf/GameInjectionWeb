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
        $__internal_05bd12e28e9318d9d18e5f6784ee4d7701698d8bb5bcfbaadaf6a0dc7e4fbe09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05bd12e28e9318d9d18e5f6784ee4d7701698d8bb5bcfbaadaf6a0dc7e4fbe09->enter($__internal_05bd12e28e9318d9d18e5f6784ee4d7701698d8bb5bcfbaadaf6a0dc7e4fbe09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_3be2fab40e6d8e02ce7510ad698e9bf6684618592c1a7e92665e83842d771f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be2fab40e6d8e02ce7510ad698e9bf6684618592c1a7e92665e83842d771f9e->enter($__internal_3be2fab40e6d8e02ce7510ad698e9bf6684618592c1a7e92665e83842d771f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_05bd12e28e9318d9d18e5f6784ee4d7701698d8bb5bcfbaadaf6a0dc7e4fbe09->leave($__internal_05bd12e28e9318d9d18e5f6784ee4d7701698d8bb5bcfbaadaf6a0dc7e4fbe09_prof);

        
        $__internal_3be2fab40e6d8e02ce7510ad698e9bf6684618592c1a7e92665e83842d771f9e->leave($__internal_3be2fab40e6d8e02ce7510ad698e9bf6684618592c1a7e92665e83842d771f9e_prof);

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
