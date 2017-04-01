<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_cd73fd6e7315c51a88286dd640f0e589b10c7c52cae7dc713be9406e064ac837 extends Twig_Template
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
        $__internal_f3deb9b585e022516adcc62e5b1c65a60758dfa2bfbf2d26b4f6502b377ea7b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3deb9b585e022516adcc62e5b1c65a60758dfa2bfbf2d26b4f6502b377ea7b4->enter($__internal_f3deb9b585e022516adcc62e5b1c65a60758dfa2bfbf2d26b4f6502b377ea7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_6e5bfc6c847c165c2f72bfd8db624cb6de3e75b7624a3bc677a68de919df4093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e5bfc6c847c165c2f72bfd8db624cb6de3e75b7624a3bc677a68de919df4093->enter($__internal_6e5bfc6c847c165c2f72bfd8db624cb6de3e75b7624a3bc677a68de919df4093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_f3deb9b585e022516adcc62e5b1c65a60758dfa2bfbf2d26b4f6502b377ea7b4->leave($__internal_f3deb9b585e022516adcc62e5b1c65a60758dfa2bfbf2d26b4f6502b377ea7b4_prof);

        
        $__internal_6e5bfc6c847c165c2f72bfd8db624cb6de3e75b7624a3bc677a68de919df4093->leave($__internal_6e5bfc6c847c165c2f72bfd8db624cb6de3e75b7624a3bc677a68de919df4093_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
