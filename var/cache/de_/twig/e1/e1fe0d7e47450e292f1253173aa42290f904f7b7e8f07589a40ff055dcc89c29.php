<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_7bb68948add45cc624f36a2733af595bba7ef894a789d008d0b27ecc57200748 extends Twig_Template
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
        $__internal_dbe0e59c42fa33e908aac0100ae203f093cc2b28e6837b33589f5c5eddf9e333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbe0e59c42fa33e908aac0100ae203f093cc2b28e6837b33589f5c5eddf9e333->enter($__internal_dbe0e59c42fa33e908aac0100ae203f093cc2b28e6837b33589f5c5eddf9e333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_aa56d90daff9f22185149cfd4a3fd5d98707921858ceeb6ea1860218a47442e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa56d90daff9f22185149cfd4a3fd5d98707921858ceeb6ea1860218a47442e5->enter($__internal_aa56d90daff9f22185149cfd4a3fd5d98707921858ceeb6ea1860218a47442e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_dbe0e59c42fa33e908aac0100ae203f093cc2b28e6837b33589f5c5eddf9e333->leave($__internal_dbe0e59c42fa33e908aac0100ae203f093cc2b28e6837b33589f5c5eddf9e333_prof);

        
        $__internal_aa56d90daff9f22185149cfd4a3fd5d98707921858ceeb6ea1860218a47442e5->leave($__internal_aa56d90daff9f22185149cfd4a3fd5d98707921858ceeb6ea1860218a47442e5_prof);

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
