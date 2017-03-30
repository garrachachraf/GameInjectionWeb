<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c7b6b24dad2c3d09f0721cbbae4f095fbbe739271ec7e70aef6fd1ae7a24a029 extends Twig_Template
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
        $__internal_9ed56527012000a7475785851f8cc98fb7d31a07b787c1fb4eca19cffdc4d0b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ed56527012000a7475785851f8cc98fb7d31a07b787c1fb4eca19cffdc4d0b1->enter($__internal_9ed56527012000a7475785851f8cc98fb7d31a07b787c1fb4eca19cffdc4d0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_0baa72c34cc287ea1b65c7db2fc3935166f325e5c87059924f76d364a31cefb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0baa72c34cc287ea1b65c7db2fc3935166f325e5c87059924f76d364a31cefb2->enter($__internal_0baa72c34cc287ea1b65c7db2fc3935166f325e5c87059924f76d364a31cefb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9ed56527012000a7475785851f8cc98fb7d31a07b787c1fb4eca19cffdc4d0b1->leave($__internal_9ed56527012000a7475785851f8cc98fb7d31a07b787c1fb4eca19cffdc4d0b1_prof);

        
        $__internal_0baa72c34cc287ea1b65c7db2fc3935166f325e5c87059924f76d364a31cefb2->leave($__internal_0baa72c34cc287ea1b65c7db2fc3935166f325e5c87059924f76d364a31cefb2_prof);

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
", "@Framework/Form/form_end.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
