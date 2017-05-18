<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_536835d63c26e88493d283b8fe87f3b7e0c7dc2bb8dcf3bbea8f76078b9133c6 extends Twig_Template
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
        $__internal_1d439ca7ab920ea219474ded48a6aab93858b7959e420e6b101527a308f53b66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d439ca7ab920ea219474ded48a6aab93858b7959e420e6b101527a308f53b66->enter($__internal_1d439ca7ab920ea219474ded48a6aab93858b7959e420e6b101527a308f53b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_9a078477f3dc84d2da734882453cf3d0ec8f6661b1b43b3ed5d43bf10a2c8ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a078477f3dc84d2da734882453cf3d0ec8f6661b1b43b3ed5d43bf10a2c8ce6->enter($__internal_9a078477f3dc84d2da734882453cf3d0ec8f6661b1b43b3ed5d43bf10a2c8ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1d439ca7ab920ea219474ded48a6aab93858b7959e420e6b101527a308f53b66->leave($__internal_1d439ca7ab920ea219474ded48a6aab93858b7959e420e6b101527a308f53b66_prof);

        
        $__internal_9a078477f3dc84d2da734882453cf3d0ec8f6661b1b43b3ed5d43bf10a2c8ce6->leave($__internal_9a078477f3dc84d2da734882453cf3d0ec8f6661b1b43b3ed5d43bf10a2c8ce6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
