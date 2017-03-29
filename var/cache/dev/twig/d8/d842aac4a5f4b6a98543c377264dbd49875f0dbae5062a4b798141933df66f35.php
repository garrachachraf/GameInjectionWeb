<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ffcc5bd22b3f2d946c45ce92fd0f2f6bebdbe04e0d4517d8bdaaafb5dfbe2f48 extends Twig_Template
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
        $__internal_db1f3e3c760b874a33d97025c6d5e4c4d5f3abe6e74cbeb3697a780603ffd480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db1f3e3c760b874a33d97025c6d5e4c4d5f3abe6e74cbeb3697a780603ffd480->enter($__internal_db1f3e3c760b874a33d97025c6d5e4c4d5f3abe6e74cbeb3697a780603ffd480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_decb07d5035e41071fdfee7f0df48889cd06f6276490e9a995929c1e8c133e57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_decb07d5035e41071fdfee7f0df48889cd06f6276490e9a995929c1e8c133e57->enter($__internal_decb07d5035e41071fdfee7f0df48889cd06f6276490e9a995929c1e8c133e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_db1f3e3c760b874a33d97025c6d5e4c4d5f3abe6e74cbeb3697a780603ffd480->leave($__internal_db1f3e3c760b874a33d97025c6d5e4c4d5f3abe6e74cbeb3697a780603ffd480_prof);

        
        $__internal_decb07d5035e41071fdfee7f0df48889cd06f6276490e9a995929c1e8c133e57->leave($__internal_decb07d5035e41071fdfee7f0df48889cd06f6276490e9a995929c1e8c133e57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
