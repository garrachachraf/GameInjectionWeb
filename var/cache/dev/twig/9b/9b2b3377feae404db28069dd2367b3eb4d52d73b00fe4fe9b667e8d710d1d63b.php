<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_13d2cab323493298aae66ba8fd42e4fc3803d2ad40cd5ce1ca51403000eda4e2 extends Twig_Template
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
        $__internal_90a44467363d41bfd8b47e6c9e51057bf379d41ce9002c6b083e3752845d510e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90a44467363d41bfd8b47e6c9e51057bf379d41ce9002c6b083e3752845d510e->enter($__internal_90a44467363d41bfd8b47e6c9e51057bf379d41ce9002c6b083e3752845d510e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_1b59046874d7af83821dfa93eb118b82fc36c88272d5f765ede4c4dfac2a5111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b59046874d7af83821dfa93eb118b82fc36c88272d5f765ede4c4dfac2a5111->enter($__internal_1b59046874d7af83821dfa93eb118b82fc36c88272d5f765ede4c4dfac2a5111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_90a44467363d41bfd8b47e6c9e51057bf379d41ce9002c6b083e3752845d510e->leave($__internal_90a44467363d41bfd8b47e6c9e51057bf379d41ce9002c6b083e3752845d510e_prof);

        
        $__internal_1b59046874d7af83821dfa93eb118b82fc36c88272d5f765ede4c4dfac2a5111->leave($__internal_1b59046874d7af83821dfa93eb118b82fc36c88272d5f765ede4c4dfac2a5111_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
