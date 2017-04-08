<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ecead2131b0ab2b5a134b4df1ec4009c6f9c06d59d5e7f7f93a842b32f2e1dea extends Twig_Template
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
        $__internal_791733ff9758b2065ca3ec2c7c7a9f276468b803a59c8da615772157b1de9df3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_791733ff9758b2065ca3ec2c7c7a9f276468b803a59c8da615772157b1de9df3->enter($__internal_791733ff9758b2065ca3ec2c7c7a9f276468b803a59c8da615772157b1de9df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_67336d42a5dfbd7302d03708d821784b9796035a1dceb90990a1646866af813d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67336d42a5dfbd7302d03708d821784b9796035a1dceb90990a1646866af813d->enter($__internal_67336d42a5dfbd7302d03708d821784b9796035a1dceb90990a1646866af813d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_791733ff9758b2065ca3ec2c7c7a9f276468b803a59c8da615772157b1de9df3->leave($__internal_791733ff9758b2065ca3ec2c7c7a9f276468b803a59c8da615772157b1de9df3_prof);

        
        $__internal_67336d42a5dfbd7302d03708d821784b9796035a1dceb90990a1646866af813d->leave($__internal_67336d42a5dfbd7302d03708d821784b9796035a1dceb90990a1646866af813d_prof);

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
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
