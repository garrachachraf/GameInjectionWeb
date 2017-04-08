<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_07ebb39603eef9b5370ebce1ed7f42d6a7cbdb46916650c0eba68bd9bb5decce extends Twig_Template
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
        $__internal_3ce8af5b649d1f23c59c1e8cabb797912a1b023ef3231c2c231fe8f0ff079412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ce8af5b649d1f23c59c1e8cabb797912a1b023ef3231c2c231fe8f0ff079412->enter($__internal_3ce8af5b649d1f23c59c1e8cabb797912a1b023ef3231c2c231fe8f0ff079412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_b514280b4402dd4af9958c7b49f8cc5882739a7b478410794d6f5751539be1e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b514280b4402dd4af9958c7b49f8cc5882739a7b478410794d6f5751539be1e0->enter($__internal_b514280b4402dd4af9958c7b49f8cc5882739a7b478410794d6f5751539be1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_3ce8af5b649d1f23c59c1e8cabb797912a1b023ef3231c2c231fe8f0ff079412->leave($__internal_3ce8af5b649d1f23c59c1e8cabb797912a1b023ef3231c2c231fe8f0ff079412_prof);

        
        $__internal_b514280b4402dd4af9958c7b49f8cc5882739a7b478410794d6f5751539be1e0->leave($__internal_b514280b4402dd4af9958c7b49f8cc5882739a7b478410794d6f5751539be1e0_prof);

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
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
